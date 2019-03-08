<?php

namespace Drupal\parenting_slider\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ParentingSliderForm extends FormBase {
    public function getFormId() {
        return 'parenting_slider_form';
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
}