<?php

namespace Umbrella\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class AuthController extends Controller
{
	public function indexAction(Request $request)
	{
        // Create contact from
        $form = $this->buildForm();
        
        // Handling request from contacts page
        $form->handleRequest($request);  

        // Valid contacts form
        if (! $form->isValid())
        {
            // Render contacts page whidth  valid errors   
            $content = $this->renderView('UmbrellaFrontendBundle:Pages:auth.html.twig', array(
                'form_auth' => $form->createView()
            ));
        }
        else
        {
            // Send email
            $content = 'auth';
        }

        return new Response($content);		
	}

    private function buildForm()
    {
        // Builder from
        $form = $this->createFormBuilder()
            ->add('email', 'text')
            ->add('password', 'text')
            ->add('login', 'submit')
            ->getForm();

        return $form;    
    }
}