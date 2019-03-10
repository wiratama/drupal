<?php

namespace Drupal\parentingslider\Controller;

use Drupal\Core\Controller\ControllerBase;

class ParentingsliderController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world to parenting_slider'),
    );
  }
}