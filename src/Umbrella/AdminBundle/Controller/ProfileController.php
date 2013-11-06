<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Umbrella\AdminBundle\Entity\Profile;

class ProfileController extends Controller
{
    public function indexAction(Request $request)
    {
        $profile = new Profile();

        $profile->setEmail('test1');
        $profile->setPassword('test2');
        $profile->setFirstName('test3');
        $profile->setLastName('test4');
        $profile->setHomePhone('test5');
        $profile->setCellPhone('test6');
        $profile->setAltPhone('test7');

        $form = $this->createFormBuilder()
            ->add('email', 'text')
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('homePhone', 'text')
            ->add('cellPhone', 'text')
            ->add('altPhone', 'text')
            ->add('password', 'text')
            ->add('passwordConfirm', 'text')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('UmbrellaAdminBundle:pages:profile.html.twig', array('formProfile' => $form->createView()));
    }
}