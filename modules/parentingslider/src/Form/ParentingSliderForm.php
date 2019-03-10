<?php

namespace Drupal\parentingslider\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\file\Entity\File;

class ParentingSliderForm extends FormBase {
    public function getFormId() {
        return 'parentingslider_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $conn = Database::getConnection();
        $record = array();
        if (isset($_GET['num'])) {
            $query = $conn->select('parenting_slider', 'm')
                ->condition('slider_id', $_GET['num'])
                ->fields('m');
            $record = $query->execute()->fetchAssoc();
    
        }
    
        $form['title'] = array(
            '#type' => 'textfield',
            '#title' => t('Title:'),
            '#required' => TRUE,
            //'#default_values' => array(array('id')),
            '#default_value' => (isset($record['title']) && $_GET['num']) ? $record['title']:'',
        );
    
        $form['categories_id'] = array (
        '#type' => 'select',
        '#title' => ('Category'),
            '#options' => array(
                '1' => t('Image'),
                '2' => t('Youtube'),
                '#default_value' => (isset($record['categories_id']) && $_GET['num']) ? $record['categories_id']:'',
            ),
        );

        $form['img_desktop'] = array(
            // '#type' => 'file',
            '#type' => 'managed_file',
            '#upload_location' => 'public://',
            '#upload_validators' => array(
                'file_validate_extensions' => array('jpg png gif jpeg'),
            ),
            '#title' => t('Image desktop'),
            '#required' => false
        );

        if (isset($record['img_desktop'])) {
            $form['current_img_desktop'] = array(
              '#type' => 'hidden',
              '#value' => $record['img_desktop'],
            );

            // get image absolute url
            $file = File::load($record['img_desktop']);
            $path = $file->getFileUri();
            $url = \Drupal\image\Entity\ImageStyle::load('medium')->buildUrl($path);
            $form['current_img_desktop_url'] = array(
                '#type' => 'hidden',
                '#value' => $url,
            );
        }

        $form['img_mobile'] = array(
            '#type' => 'file',
            '#title' => t('Image mobile'),
            '#required' => false
        );

        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => 'save',
            //'#value' => t('Submit'),
        );
    
        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        $title = $form_state->getValue('title');
        if(preg_match('/^[a-zA-Z0-9\-]+$/i', $title)) {
            $form_state->setErrorByName('title', $this->t('Title must in characters'));
        }
        
        if (!intval($form_state->getValue('categories_id'))) {
            $form_state->setErrorByName('categories_id', $this->t('Category needs to be a number'));
        }
        
        if (strlen($title) < 5 ) {
           $form_state->setErrorByName('title', $this->t('your title must in 5 or more characters'));
        }
        
        parent::validateForm($form, $form_state);
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        $field=$form_state->getValues();
        $title=$field['title'];
        $category=$field['categories_id'];

        // $current_img_desktop = isset($field['current_img_desktop']);
        // $destination = 'public://parentingslider';
        // $img_desktop = file_save_upload('img_desktop', array(
        //     // 'file_validate_is_image' => array(),
        //     // 'file_validate_image_resolution' => array('500x500', '100x100'),
        //     'file_validate_extensions' => array('jpg', 'png', 'gif', 'jpeg'),
        // ), $destination, FILE_EXISTS_RENAME);
        // $img_desktop_fid = $img_desktop->id();

        $current_img_desktop = isset($field['current_img_desktop']);
        if ($field['img_desktop'] != 0 && !$current_img_desktop) {
            // $file = file_load($field['img_desktop']);
            // $file->status = FILE_STATUS_PERMANENT;
            // file_save($file);

            $file = File::load($field['img_desktop'][0]);
            $file->setPermanent();
            $file->save();

            $file_usage = \Drupal::service('file.usage'); 
            $file_usage->add($file, 'parentingslider', 'parentingslider', \Drupal::currentUser()->id());

            $img_desktop_fid = $file->id();
        } else if ($field['img_desktop'] != 0 && $current_img_desktop) {
            if ($current_img_desktop != $field['img_desktop']) {
                // file_delete(file_load($current_img_desktop));
                // $file = file_load($field['img_desktop']);
                // $file->status = FILE_STATUS_PERMANENT;
                // file_save($file);
                
                File::delete(File::load($current_img_desktop));
                $file = File::load($field['img_desktop'][0]);
                $file->setPermanent();
                $file->save();

                $file_usage = \Drupal::service('file.usage'); 
                $file_usage->add($file, 'parentingslider', 'parentingslider', \Drupal::currentUser()->id());
                
                $img_desktop_fid = $file->id();
            }
        } else {
            file_delete(file_load($current_img_desktop));
            $img_desktop_fid = null;
        }

        if (isset($_GET['num'])) {
            $field  = array(
                'title'   => $title,
                'categories_id' =>  $category,
                'img_desktop'=> $img_desktop_fid,
            );
            $query = \Drupal::database();
            $query->update('parenting_slider')
                ->fields($field)
                ->condition('slider_id', $_GET['num'])
                ->execute();
            drupal_set_message("succesfully updated");
            $form_state->setRedirect('parentingslider.content');
        } else {
            $field  = array(
                'title'   =>  $title,
                'categories_id' =>  $category,
                'img_desktop'=> $img_desktop_fid,
            );
            $query = \Drupal::database();
            $query ->insert('parenting_slider')
                    ->fields($field)
                    ->execute();
            drupal_set_message("succesfully saved");
            // $response = new RedirectResponse("/parenting-slider/table");
            // $response->send();
            $form_state->setRedirect('parentingslider.content');
        }
    }
    
}