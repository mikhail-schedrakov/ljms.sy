<?php

/* UmbrellaAuthBundle:Pages:contact.html.twig */
class __TwigTemplate_6a62323d64f16591e448b15cc42efaca3e4f893f57d168653c909be0e1253f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontendLayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontendLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "UmbrellaAuthBundle:Form:fields.html.twig"));
        // line 7
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <h1>Contact Us</h1>

    <p><span style=\"font-size: small;\"><strong>Lockport Junior Miss Softball</strong></span></p>
    <p>PO Box 305</p>
    <p>Lockport, IL 60441</p>
    <p>Phone: (630) 453-0166 (Scott McCarthy)</p><br />

    <div class=\"contact_form\">
        <form action=\"\" method=\"post\">
            <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">             
                
                ";
        // line 23
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Name * </td>
                    <td width=\"70%\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'widget', array("required" => ""));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"100%\" class='msg_err'>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 34
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Email * </td>
                    <td width=\"70%\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'widget', array("required" => "", "attr" => array("type" => "text")));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 43
        echo "
                ";
        // line 45
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Subject *</td>
                    <td width=\"70%\" >";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'widget', array("required" => ""));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 54
        echo "
                ";
        // line 56
        echo "                <tr>
                    <td width=\"30%\" valign=\"top\" style=\"padding-top:5px;\">Your Message *</td>                    
                    <td width=\"70%\" style=\"padding-top:5px;\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'widget', array("required" => "", "attr" => array()));
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 65
        echo "
                ";
        // line 67
        echo "                <tr>
                    <td width=\"30%\" valign=\"top\" style=\"padding-top:5px;\">You are robot?</td>                    
                    <td width=\"70%\" style=\"padding-top:5px;\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "recaptcha"), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td width=\"30%\"></td>
                    <td width=\"70%\" class='msg_err'>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "recaptcha"), 'errors');
        echo "</td>
                </tr>
                ";
        // line 76
        echo "
                <tr>
                    <td><br /><br /></td>                    
                    <td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "send"), 'widget', array("attr" => array("class" => "nextbtn")));
        echo "</td>
                </tr>
            </table>
            ";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_contact"), 'form_end');
        echo "
        </form>
    </div>

    <br />

    <div class=\"names\">
        <table  cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"95%\">
            <tr>
            </tr>
        </table>
    </div>

    <div style=\"clear:both\"></div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaAuthBundle:Pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 82,  143 => 79,  138 => 76,  133 => 73,  126 => 69,  122 => 67,  119 => 65,  114 => 62,  107 => 58,  103 => 56,  100 => 54,  95 => 51,  88 => 47,  84 => 45,  81 => 43,  76 => 40,  69 => 36,  65 => 34,  60 => 29,  53 => 25,  49 => 23,  35 => 10,  32 => 9,  27 => 7,  25 => 4,);
    }
}
