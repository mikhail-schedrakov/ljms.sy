<?php

namespace Umbrella\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->add('email', 'text')
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('homePhone', 'text')
            ->add('cellPhone', 'text')
            ->add('password', 'repeated', array(
               'first_name'  => 'first',
               'second_name' => 'second',
               'type'        => 'password',
            ))        
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'profile';
    }
}