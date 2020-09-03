<?php
//
//namespace Drupal\custom_changes\EventSubscriber;
//
//use Symfony\Component\EventDispatcher\EventSubscriberInterface;
//use Drupal\state_machine\Event\WorkflowTransitionEvent;
//use Drupal\Core\Entity\EntityTypeManager;
//
///**
// * Class OrderCompleteSubscriber.
// *
// * @package Drupal\custom_changes
// */
//class OrderCompleteSubscriber implements EventSubscriberInterface
//{
//  /**
//   * Drupal\Core\Entity\EntityTypeManager definition.
//   *
//   * @var \Drupal\Core\Entity\EntityTypeManager
//   */
//  protected $entityTypeManager;
//
//  /**
//   * Constructor.
//   */
//  public function __construct(EntityTypeManager $entity_type_manager) {
//    $this->entityTypeManager = $entity_type_manager;
//  }
//
//  /**
//   * {@inheritdoc}
//   */
//  static function getSubscribedEvents() {
//    $events['commerce_order.commerce_order.insert'] = ['orderCompleteHandler'];
//
//    return $events;
//  }
//
//  function orderCompleteHandler(WorkflowTransition $event) {
//    /** @var \Drupal\commerce_order\Entity\OrderInterface $order */
////    $state = $event->getState();
////    // Order items in the cart.
////    $items = $order->getItems();
//
//  }
//
//
//}
