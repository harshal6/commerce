<?php

namespace Drupal\custom_changes\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
* Listens to the dynamic route events.
*/
class RouteSubscriber extends RouteSubscriberBase {

/**
* {@inheritdoc}
*/
protected function alterRoutes(RouteCollection $collection) {
  // Change path '/user/login' to '/login'.
  if ($route = $collection->get('entity.taxonomy_term.canonical')) {
   // $route->setPath('/admin/commerce/orders/taxonomy');
  }
}

}
