<?php

/* UmbrellaAdminBundle::adminLayout.html.twig */
class __TwigTemplate_8c4f66493fa699ea5f4fd9b8af87d5cae458c78cbbb4ce187776c304d71a5cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>LOCKPORT JUNIOR MISS - Adminisrator Area</title>
        
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellaadmin/css/adminStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>

    <body class=\"main\">
        <div class=\"container\">
            
            ";
        // line 15
        echo "            <div id=\"header\" class=\"no_print\">
                <div id=\"logo\">
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellaadmin/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" border=\"0\" style=\"margin-left:0px;\" />
                    </a>
                </div>
                <div id=\"head_top\"></div>
                <div id=\"logout_button\">
                    <a class=\"link\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\">My Profile</a> | 
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"> Log out</a>
                </div>
                <div id=\"head_middle\">
                    <div id=\"top_links\">
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                </div>
                <div id=\"head_bottom\"></div>
            </div>
            ";
        // line 37
        echo "
            ";
        // line 39
        echo "            <div class=\"nav no_print\">
                <div class=\"wrapper\" >
                    <!-- for align center needs specify the width -->
                    <ul  >
                        <li class=\"first\"><a href=\"\"  class=\"active\">System users</a></li>                    
                    </ul>
                </div>
            </div>
            ";
        // line 48
        echo "
            ";
        // line 50
        echo "            <div id=\"content\">
                ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "            </div>
            ";
        // line 55
        echo "
            ";
        // line 57
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                    <div class=\"copyright\">Copyright 2008 Lockport Junior Miss Softball</div>
                </div>
            </div>
            ";
        // line 69
        echo "
        </div>
    </body>
</html>";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "                ";
    }

    public function getTemplateName()
    {
        return "UmbrellaAdminBundle::adminLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  144 => 51,  137 => 69,  129 => 63,  125 => 62,  121 => 61,  117 => 60,  112 => 57,  109 => 55,  106 => 53,  104 => 51,  101 => 50,  98 => 48,  88 => 39,  85 => 37,  77 => 31,  73 => 30,  69 => 29,  65 => 28,  58 => 24,  54 => 23,  46 => 18,  42 => 17,  38 => 15,  29 => 8,  20 => 1,);
    }
}
