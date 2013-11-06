<?php

/* UmbrellaFrontendBundle::layout.html.twig */
class __TwigTemplate_b936c4968854781cff1b6f70211466071337399fe8763de1bc657ecd4c63bc05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'link' => array($this, 'block_link'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'leftbar' => array($this, 'block_leftbar'),
            'content' => array($this, 'block_content'),
            'rigthbar' => array($this, 'block_rigthbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>

        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('link', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('script', $context, $blocks);
        // line 20
        echo "        
    </head>

    <body class=\"main\">

        <!--Container Starts-->
        <div class=\"container\">

            ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "
            <!-- Content Starts -->
            <div id=\"content\">

                <!--Left Starts ------------------------------------------------------------------------------------------------------------------- -->
                ";
        // line 57
        $this->displayBlock('leftbar', $context, $blocks);
        // line 84
        echo "                <!--Left Ends ------------------------------------------------------------------------------------------------------------------- -->

                <!--Middle Starts --------------------------------------------------------------------------------------------------------------- -->
                
                <div id=\"content_area\">
\t                ";
        // line 89
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "                </div>

                <!--Middle Ends ---------------------------------------------------------------------------------------------------------------- -->

                <!--Right Starts --------------------------------------------------------------------------------------------------------------- -->
                ";
        // line 97
        $this->displayBlock('rigthbar', $context, $blocks);
        // line 117
        echo "                <!--Right Ends -------------------------------------------------------------------------------------------------------------------- -->
                <div style=\"clear:both\">
                </div>
            </div>
            <!--Content Ends-->

            <!--Footer Starts-->
            ";
        // line 124
        $this->displayBlock('footer', $context, $blocks);
        // line 139
        echo "            <!--Footer Ends-->
        </div>
        <!--Container Ends-->
    </body>
</html>";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        // line 6
        echo "\t        <title>LOCKPORT JUNIOR MISS</title>\t      
\t        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
\t        <meta name=\"keywords\" content=\"Lockport Junior Miss\"/>
\t        <meta name=\"description\" content=\"\" />
        ";
    }

    // line 12
    public function block_link($context, array $blocks = array())
    {
        // line 13
        echo "\t        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 17
    public function block_script($context, array $blocks = array())
    {
        // line 18
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/js/jquery-2.0.3.js"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        // line 29
        echo "\t            <!--Header Starts-->
\t            <div id=\"header\" class=\"no_print\">
\t                <div id=\"logo\">
\t                    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
\t                        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" border=\"0\"  />
\t                    </a>
\t                </div>
\t                <div id=\"head02\">
\t                    <div id=\"top_links\">
\t                        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
\t                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
\t                        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
\t                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
\t                    </div>
\t                    <div id=\"joinus\">
\t                    ";
        // line 45
        echo "\t                    </div>
\t                </div>
\t                <div id=\"head03\">
\t                </div>
\t            </div>
\t            <!--Header Ends-->
            ";
    }

    // line 57
    public function block_leftbar($context, array $blocks = array())
    {
        // line 58
        echo "                <div id=\"left\" class=\"no_print\">
                    <div id=\"division1\">
                        <div id=\"div_heading\">                         
                            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/division.gif"), "html", null, true);
        echo "\" alt=\"\" />
                        </div>
                        <div id=\"select\">
                            Select Your Division:
                        </div>
                        <div id=\"selectbox\">

                        </div>
                    </div>
                    <!-- ********Calendar************ -->
                    <div id=\"events_calendar\" style=\"margin-top:200px;\">
                        <div id=\"calendar\">
                        </div>
                        <div id= \"prev\">
                            ";
        // line 76
        echo "                        </div>
                        <div id= \"next\">
                            ";
        // line 79
        echo "                        </div>
                    </div>
                    <!-- *********Calendar end******** -->
                </div>
                ";
    }

    // line 89
    public function block_content($context, array $blocks = array())
    {
        // line 90
        echo "\t                \tMiddle block.
\t                ";
    }

    // line 97
    public function block_rigthbar($context, array $blocks = array())
    {
        // line 98
        echo "\t                <div id=\"right\">
\t                    <div id=\"announcement_box\">                        
\t                        <div id=\"announce_head\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/announce.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>\t                        
\t                        <div id=\"announce_img\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/announce_img.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>
\t                        <div id=\"announce_txt\">
\t                            <blockquote>
\t                                <p><span style=\"color: #ff0000; font-size: x-small;\"><strong>Fall ball is complete thanks to all the coaches for a great fall season!!!!</strong></span></p>
\t                                <p><span style=\"color: #ff0000; font-size: small;\"><strong>&nbsp;</strong></span></p>
\t                                <p>&nbsp;</p>
\t                                <p>&nbsp;</p>
\t                                <p>&nbsp;Rain-out hot line.....in the event of questionable weather, we have established a call in hot-line that you can call to see if games are cancelled. <strong>This only applies to</strong> <strong>Hassert Park</strong> and can be called after 3pm on weekdays and 8am on weekends. The number is <strong>815-838-1183 ext 504</strong>.....please remember to dial the proper extension.&nbsp;</p>
\t                                <p><span style=\"font-size: small;\"><span style=\"font-size: large;\"><strong>&nbsp;<br /></strong></span></span></p>
\t                            </blockquote>\t
\t                        </div>
\t                        <p>&nbsp;
\t                        <div style=\"clear:both\"></div>
\t                    </div>
\t                </div>
                ";
    }

    // line 124
    public function block_footer($context, array $blocks = array())
    {
        // line 125
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
                    </div>
                    <div class=\"copyright\">
                        Copyright 2008 Lockport Junior Miss Softball
                    </div>
                </div>
            </div>
            ";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  282 => 131,  278 => 130,  274 => 129,  270 => 128,  265 => 125,  262 => 124,  242 => 101,  238 => 100,  234 => 98,  231 => 97,  226 => 90,  223 => 89,  215 => 79,  211 => 76,  194 => 61,  189 => 58,  186 => 57,  176 => 45,  170 => 41,  166 => 40,  162 => 39,  158 => 38,  150 => 33,  146 => 32,  141 => 29,  138 => 28,  131 => 18,  128 => 17,  122 => 14,  117 => 13,  114 => 12,  106 => 6,  103 => 5,  95 => 139,  93 => 124,  84 => 117,  82 => 97,  75 => 92,  73 => 89,  66 => 84,  64 => 57,  57 => 52,  55 => 28,  45 => 20,  43 => 17,  40 => 16,  38 => 12,  35 => 11,  33 => 5,  27 => 1,);
    }
}
