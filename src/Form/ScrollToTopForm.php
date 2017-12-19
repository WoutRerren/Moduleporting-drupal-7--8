<?php

/**
* @file
* Contains \Drupal\scroll_to_top\Form\ScrollToTopForm
*/

namespace Drupal\scroll_to_top\Form;

use Drupal\Core\Form\ConfigFormBase;

class ScrollToTopForm extends ConfigFormBase{
    
    /**
    *{@inheridoc}
    */
    public function getFormId(){
        return 'scroll_to_top_form';
    }
    
    /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
        'scroll_to_top.settings'
    ];
  }
}