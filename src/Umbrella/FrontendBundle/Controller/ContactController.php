<?php
namespace Umbrella\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\True;

/*
 * ContactController - show contact page.
 * At first preparings field and validation roles of form.
 * Then view page and valid form. If from valid, then send email.
 *
 * @method: indexAction() - render page, valid form, send email.
 * @method: buildForm() - builder contact form.
 * @method: setConstraints() - set validation roles.
 */
class ContactController extends Controller
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
            $content = $this->renderView('UmbrellaFrontendBundle:Pages:contact.html.twig', array('form_contact' => $form->createView()));

            return new Response($content);
        }
        else
        {   
            // Send email
            $content = 'email send';

            return new Response($content);
        }
    }

    private function buildForm()
    {   
        $constraints = $this->setConstraints();

        // Builder from
        $form = $this->createFormBuilder()
            ->add('name', 'text', $constraints['name'])
            ->add('email', 'email', $constraints['email'])
            ->add('subject', 'text', $constraints['subject'])
            ->add('message', 'textarea', $constraints['message'])
            ->add('recaptcha', 'ewz_recaptcha', $constraints['recaptcha'])
            ->add('send', 'submit')
            ->getForm();

        return $form;    
    }

    private function setConstraints()
    {
        $constraints = array(
            
            'name' => array(
                'constraints' => array(
                    new NotBlank(array('message' => 'Youre Name should not be blank')),
                    new Length(array(
                        'min' => 3,
                        'max' => 255,
                        'charset' => 'UTF-8',
                        'minMessage' => 'Youre Name is too short. It should have 3 or 255 characters.',
                        'maxMessage' => 'Youre Name is too long. It should have 3 or 255 characters.',
                        'exactMessage' => 'Youre Name should have 3 or 255 characters.',
                    )),
                )
            ),

            'email' => array(
                'constraints' => array(
                    new NotBlank(),
                    new Length(array(
                        'min' => 3,
                        'max' => 255,
                        'charset' => 'UTF-8',
                        'minMessage' => 'Youre Email is too short. It should have 3 or 255 characters.',
                        'maxMessage' => 'Youre Email is too long. It should have 3 or 255 characters.',
                        'exactMessage' => 'Youre Email should have 3 or 255 characters.',
                    )),
                    new Email(array(
                        'message' => 'Youre Email is not a valid email address',
                    )),
                )   
            ),

            'subject' => array(
                'constraints' => array(
                    new NotBlank(),
                    new Length(array(
                        'min' => 3,
                        'max' => 255,
                        'charset' => 'UTF-8',
                        'minMessage' => 'Youre Subject is too short. It should have 3 or 255 characters.',
                        'maxMessage' => 'Youre Subject is too long. It should have 3 or 255 characters.',
                        'exactMessage' => 'Youre Subject should have 3 or 255 characters.',
                    )),
                )   
            ),

            'message' => array(
                'constraints' => array(
                    new NotBlank(),
                    new Length(array(
                        'min' => 3,
                        'max' => 1000,
                        'charset' => 'UTF-8',
                        'minMessage' => 'Youre Message is too short. It should have 3 or 1000 characters.',
                        'maxMessage' => 'Youre Message is too long. It should have 3 or 1000 characters.',
                        'exactMessage' => 'Youre Message should have 3 or 1000 characters.',
                    )),
                )   
            ),

            'recaptcha' => array(
                'attr'          => array(
                    'options' => array(
                        'theme' => 'clean'
                    )
                ),
                'mapped' => false,
                'constraints'   => array(
                    new True()
                )
            )
        );

        return $constraints;
    }
}