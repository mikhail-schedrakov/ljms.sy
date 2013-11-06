<?php

/* UmbrellaAdminBundle:pages:profile.html.twig */
class __TwigTemplate_0a2838c62955f5f894f581dd569fc5385524f037b0b43b3c7d31144201332e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaAdminBundle::adminLayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaAdminBundle::adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"add_edit_page_title\" style=\"width:50%\">
        <h2>Edit Profile</h2>
    </div>

    <div class=\"edit_profile_form\" >
        <form action=\"\" method=\"post\" id=\"edit_profile_form\" >

 \t       ";
        // line 16
        echo "            <div class=\"edit_container\">
                <label>First Name *</label>      
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "firstName"), 'widget', array("required" => ""));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "firstName"), 'errors');
        echo "
            </div>

            ";
        // line 25
        echo "            <div class=\"edit_container\">
                <label>Last Name * </label>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "lastName"), 'widget', array("required" => ""));
        echo "
            </div>
            <div class=\"message_container\">                
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "lastName"), 'errors');
        echo "              
            </div>

            ";
        // line 34
        echo "            <div class=\"edit_container\">
                <label>Email *</label>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "email"), 'widget', array("required" => ""));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "email"), 'errors');
        echo "
            </div>

            ";
        // line 43
        echo "            <div class=\"edit_container\">
                <label>Home Phone *</label>
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "homePhone"), 'widget', array("required" => ""));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "homePhone"), 'errors');
        echo "
            </div>

            ";
        // line 52
        echo "            <div class=\"edit_container\">
                <label>Cell Phone *</label>
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "cellPhone"), 'widget', array("required" => ""));
        echo "
            </div>
            <div class=\"message_container\">
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "cellPhone"), 'errors');
        echo "
            </div>

            ";
        // line 61
        echo "            <div id=\"password_fields\">
                <div class=\"edit_container\" style=\"padding-bottom:10px;\">
                    <label>Password *</label>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "password"), 'widget', array("required" => ""));
        echo "
                    <div class=\"message_container\">
                    \t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "password"), 'errors');
        echo "
               \t\t </div>
                </div>
                <div class=\"edit_container\">
                    <label>Confirm Password *</label>
                    <input type=\"password\" id=\"confirmPassword\" name=\"confirm_password\" />
                    <div class=\"message_container\">
\t                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formProfile"), "password"), 'errors');
        echo "
\t                </div>
                </div>
                <div>
                    <span>If you don't want to change password leave the password empty.</span>
                </div>
            </div>
            <br>
            <input type=\"submit\" id=\"update\" name=\"update\" class=\"button\" value=\"Save\" style=\"position:relative; left:30px;\" />
        </form>
    </div>

    <div style=\"text-align:right;\">
        <a href=\"\" class=\"button\">Back</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle:pages:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 73,  131 => 66,  126 => 64,  121 => 61,  115 => 57,  109 => 54,  105 => 52,  99 => 48,  93 => 45,  89 => 43,  83 => 39,  77 => 36,  73 => 34,  67 => 30,  61 => 27,  57 => 25,  51 => 21,  45 => 18,  41 => 16,  31 => 7,  28 => 6,);
    }
}
