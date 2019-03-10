<?php

namespace Drupal\parentingslider\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;

class DisplayTableController extends ControllerBase {
    public function getContent() {
        $build = [
            'description' => [
            '#theme' => 'parentingslider_description',
            '#description' => 'foo',
            '#attributes' => [],
            ],
        ];
        return $build;
    }

    public function index() {
        $header_table = array(
            'slider_id'=>    t('No'),
            'title' => t('Title'),
            'opt' => t('operations'),
            'opt1' => t('operations'),
        );
        
        $query = \Drupal::database()->select('parenting_slider', 'm');
        $query->fields('m', ['slider_id','title']);
        $results = $query->execute()->fetchAll();
        $rows=array();
        foreach($results as $data){
            // $delete = Url::fromUserInput('/parenting-slider/form/delete/'.$data->slider_id);
            // $edit   = Url::fromUserInput('/parenting-slider/form/parenting-slider?num='.$data->slider_id);

            $delete = Url::fromUserInput('/admin/structure/parenting-slider/form/delete/'.$data->slider_id);
            $edit   = Url::fromUserInput('/admin/structure/parenting-slider/form/parentingslider?num='.$data->slider_id);

            $rows[] = array(
                'slider_id' =>$data->slider_id,
                'title' => $data->title,
                \Drupal::l('Delete', $delete),
                \Drupal::l('Edit', $edit),
            );

        }
        
        $form['table'] = array(
            '#type' => 'table',
            '#header' => $header_table,
            '#rows' => $rows,
            '#empty' => t('No data found'),
        );
        return $form;
    
    }
}