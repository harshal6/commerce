<?php

namespace Drupal\custom_changes\Controller;

use Drupal\Core\Controller\ControllerBase;

use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * A controller that redirects to the current user's edit account page.
 */
class AccountEditRedirectController extends ControllerBase {

  /**
   * Redirect to
   */
  public function redirect_to_account_edit() {
    global $base_url;

    $path = \Drupal\Core\Url::fromRoute('entity.user.edit_form', ['user' => \Drupal::currentUser()->id()])->toString();

    $response = new RedirectResponse($base_url . $path);
    $response->send();
  }

}
