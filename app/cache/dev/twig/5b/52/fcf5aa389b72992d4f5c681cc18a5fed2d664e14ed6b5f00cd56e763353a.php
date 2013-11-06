<?php

/* UmbrellaFrontendBundle:Pages:contact.html.twig */
class __TwigTemplate_5b52fcf5aa389b72992d4f5c681cc18a5fed2d664e14ed6b5f00cd56e763353a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaFrontendBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaFrontendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "UmbrellaFrontendBundle:Form:fields.html.twig"));
        // line 7
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form_contact"), array(0 => "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
\t<h1>Contact Us</h1>

    <p><span style=\"font-size: small;\"><strong>Lockport Junior Miss Softball</strong></span></p>
    <p>PO Box 305</p>
    <p>Lockport, IL 60441</p>
    <p>Phone: (630) 453-0166 (Scott McCarthy)</p><br />

\t<div class=\"contact_form\">
   \t\t<form action=\"\" method=\"post\">
\t\t    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\t\t    \t
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
\t\t    \t\t<td width=\"30%\"></td>
\t\t    \t\t<td width=\"100%\" class='msg_err'>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "name"), 'errors');
        echo "</td>
\t\t    \t</tr>
\t\t    \t";
        // line 34
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Your Email * </td>
                    <td width=\"70%\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'widget', array("required" => "", "attr" => array("type" => "text")));
        echo "</td>
                </tr>
                <tr>
\t\t    \t\t<td width=\"30%\"></td>
\t\t    \t\t<td width=\"70%\" class='msg_err'>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "email"), 'errors');
        echo "</td>
\t\t    \t</tr>
\t\t    \t";
        // line 43
        echo "
\t\t    \t";
        // line 45
        echo "                <tr>
                    <td width=\"30%\" style=\"padding-top:3px; padding-bottom:5px;\">Subject *</td>
                    <td width=\"70%\" >";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'widget', array("required" => ""));
        echo "</td>
                </tr>
                <tr>
\t\t    \t\t<td width=\"30%\"></td>
\t\t    \t\t<td width=\"70%\" class='msg_err'>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "subject"), 'errors');
        echo "</td>
\t\t    \t</tr>
\t\t    \t";
        // line 54
        echo "
\t\t    \t";
        // line 56
        echo "                <tr>
                    <td width=\"30%\" valign=\"top\" style=\"padding-top:5px;\">Your Message *</td>                    
                    <td width=\"70%\" style=\"padding-top:5px;\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'widget', array("required" => "", "attr" => array()));
        echo "</td>
                </tr>
                <tr>
\t\t    \t\t<td width=\"30%\"></td>
\t\t    \t\t<td width=\"70%\" class='msg_err'>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_contact"), "message"), 'errors');
        echo "</td>
\t\t    \t</tr>
\t\t    \t";
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
\t\t</form>
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
        return "UmbrellaFrontendBundle:Pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 82,  142 => 79,  137 => 76,  132 => 73,  125 => 69,  121 => 67,  118 => 65,  113 => 62,  106 => 58,  102 => 56,  99 => 54,  94 => 51,  87 => 47,  83 => 45,  80 => 43,  75 => 40,  68 => 36,  64 => 34,  59 => 29,  52 => 25,  48 => 23,  35 => 11,  32 => 10,  27 => 7,  25 => 4,);
    }
}
