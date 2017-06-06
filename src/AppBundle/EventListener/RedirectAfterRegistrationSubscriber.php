<?php
namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use FOS\UserBundle\FOSUserEvents;

class RedirectAfterRegistrationSubscriber implements EventSubscriberInterface{
  public function onRegistrationSuccess(FormEvent $event) {
    
  }
  
  public static function getSubscribedEvents(){
    return [
      FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess'   
    ];  
  }
}
