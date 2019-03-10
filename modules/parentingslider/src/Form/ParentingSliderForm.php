<?php

namespace Drupal\parentingslider\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ParentingSliderForm extends FormBase {
    public function getFormId() {
        return 'parentingslider_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $conn = Database::getConnection();
        $record = array();
        if (isset($_GET['num'])) {
            $query = $conn->select('parenting_sldier', 'm')
                ->condition('id', $_GET['num'])
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
        if (isset($_GET['num'])) {
            $field  = array(
                'title'   => $title,
                'categories_id' =>  $category,
            );
            $query = \Drupal::database();
            $query->update('parenting_slider')
                ->fields($field)
                ->condition('id', $_GET['num'])
                ->execute();
            drupal_set_message("succesfully updated");
            $form_state->setRedirect('parentingslider.content');
        } else {
            $field  = array(
                'title'   =>  $title,
                'categories_id' =>  $category,
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