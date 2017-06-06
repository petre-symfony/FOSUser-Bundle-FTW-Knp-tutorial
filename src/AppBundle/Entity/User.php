<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class User extends BaseUser {
  /**
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Column(type="integer") 
   */
  protected $id;
  
  /**
   * @ORM\Column(type="string")
   */
  private $firstName;
  
  public function getId(){
    return $this->id;
  }
  
  public function getFirstName(){
    return $this->firstName;
  }
  
  public function setFirstName($firstName){
    $this->firstName = $firstName;  
  }
}
