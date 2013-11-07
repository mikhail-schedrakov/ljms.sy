<?php

namespace Umbrella\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Umbrella\AdminBundle\Entity\Profile;
use Umbrella\AdminBundle\Form\ProfileForm;

class ProfileController extends Controller
{
    public function indexAction(Request $request)
    {
        // New Profile object       
        $profile = new Profile();

        // Create profile form
        $form = $this->createForm(new ProfileForm(), $profile);        

        // Handling request from contacts page
        $form->handleRequest($request);  

        // Valid contacts form
        if (! $form->isValid())
        {
            // Render contacts page whidth  valid errors   
            $content = $this->renderView('UmbrellaAdminBundle:pages:profile.html.twig', array(
                'form_profile' => $form->createView()
            ));
        }
        else
        {   
            // Send email
            $content = 'email send';
        }

        return new Response($content);
    }
}