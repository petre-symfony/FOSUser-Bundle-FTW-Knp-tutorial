<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType{
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder->add('firstName');
  }
}
