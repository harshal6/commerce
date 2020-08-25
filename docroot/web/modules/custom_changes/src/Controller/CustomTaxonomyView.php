<?php

namespace Drupal\custom_changes\Controller;

use Drupal\Core\Controller\ControllerBase;


class CustomTaxonomyView extends ControllerBase {

  private function content() {
    return [
      '#markup' => t('Taxonomy')
    ];
  }
}
