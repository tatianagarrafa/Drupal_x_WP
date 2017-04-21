<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloWorldController.
 */

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {
  public function helloWorld() {
    $sortie = array();
    
    $sortie['hello_world'] = array(
      '#markup' => $this->t('Hello World!'),
    );
    return $sortie;
  }
}