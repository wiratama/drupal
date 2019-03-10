<?php

namespace Drupal\parentingslider\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class ParentingSliderBlock extends BlockBase {
    public function build() {
        $form = \Drupal::formBuilder()->getForm('Drupal\parenting_slider\Form\MydataForm');
        return $form;
    }

}