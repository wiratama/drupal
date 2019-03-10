<?php

namespace Drupal\parentingslider\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class ParentingSliderBlock extends BlockBase {
    public function build() {
        $form = \Drupal::formBuilder()->getForm('Drupal\parentingslider\Form\ParentingSliderForm');
        return $form;
    }

}