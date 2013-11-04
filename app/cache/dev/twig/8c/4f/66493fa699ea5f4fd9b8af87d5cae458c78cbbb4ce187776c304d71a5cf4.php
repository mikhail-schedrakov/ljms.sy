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
                <div id=\"logo\"><a href=\"\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellaadmin/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" border=\"0\" style=\"margin-left:0px;\" /></a>
                </div>
                <div id=\"head_top\"></div>
                <div id=\"logout_button\">
                    <a class=\"link\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\">My Profile</a> | 
                    <a href=\"\"> Log out</a>
                </div>
                <div id=\"head_middle\" ";
        // line 24
        echo ">
                    <div id=\"top_links\">
                        <a href=\"\">Home</a>|
                        <a href=\"\">About</a>|
                        <a href=\"\">Sponsors</a>|
                        <a href=\"\">Contact</a>
                    </div>
                </div>
                <div id=\"head_bottom\"></div>
            </div>
            ";
        // line 35
        echo "
            ";
        // line 37
        echo "            <div class=\"nav no_print\">
                <div class=\"wrapper\" >
                    <!-- for align center needs specify the width -->
                    <ul  >
                        <li class=\"first\"><a href=\"\"  class=\"active\">System users</a></li>                    
                    </ul>
                </div>
            </div>
            ";
        // line 46
        echo "
            ";
        // line 48
        echo "            <div id=\"content\">
                ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "            </div>
            ";
        // line 53
        echo "
            ";
        // line 55
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"\">Home</a>|
                        <a href=\"\">About</a>|
                        <a href=\"\">Sponsors</a>|
                        <a href=\"\">Contact</a>
                    </div>
                    <div class=\"copyright\">Copyright 2008 Lockport Junior Miss Softball</div>
                </div>
            </div>
            ";
        // line 67
        echo "
        </div>
    </body>
</html>";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
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
        return array (  117 => 50,  114 => 49,  107 => 67,  94 => 55,  91 => 53,  88 => 51,  86 => 49,  83 => 48,  80 => 46,  70 => 37,  67 => 35,  55 => 24,  49 => 21,  42 => 17,  38 => 15,  29 => 8,  20 => 1,);
    }
}
