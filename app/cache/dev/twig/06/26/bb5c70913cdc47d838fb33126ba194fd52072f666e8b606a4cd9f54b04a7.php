<?php

/* UmbrellaFrontendBundle::frontendLayout.html.twig */
class __TwigTemplate_0626bb5c70913cdc47d838fb33126ba194fd52072f666e8b606a4cd9f54b04a7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

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
        // line 19
        echo "      
    </head>

    <body class=\"main\">
        <!--Container Starts-->
        <div class=\"container\">

            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "
            <!-- Content Starts -->
            <div id=\"content\">

                <!--Left Starts ------------------------------------------------------------------------------------------------------------------- -->
                ";
        // line 55
        $this->displayBlock('leftbar', $context, $blocks);
        // line 82
        echo "                <!--Left Ends ------------------------------------------------------------------------------------------------------------------- -->

                <!--Middle Starts --------------------------------------------------------------------------------------------------------------- -->
                
                <div id=\"content_area\">
\t                ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 90
        echo "                </div>

                <!--Middle Ends ---------------------------------------------------------------------------------------------------------------- -->

                <!--Right Starts --------------------------------------------------------------------------------------------------------------- -->
                ";
        // line 95
        $this->displayBlock('rigthbar', $context, $blocks);
        // line 115
        echo "                <!--Right Ends -------------------------------------------------------------------------------------------------------------------- -->
                <div style=\"clear:both\">
                </div>
            </div>
            <!--Content Ends-->

            <!--Footer Starts-->
            ";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 137
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

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "\t            <!--Header Starts-->
\t            <div id=\"header\" class=\"no_print\">
\t                <div id=\"logo\">
\t                    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
\t                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" border=\"0\"  />
\t                    </a>
\t                </div>
\t                <div id=\"head02\">
\t                    <div id=\"top_links\">
\t                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
\t                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
\t                        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
\t                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
\t                    </div>
\t                    <div id=\"joinus\">
\t                    ";
        // line 43
        echo "\t                    </div>
\t                </div>
\t                <div id=\"head03\">
\t                </div>
\t            </div>
\t            <!--Header Ends-->
            ";
    }

    // line 55
    public function block_leftbar($context, array $blocks = array())
    {
        // line 56
        echo "                <div id=\"left\" class=\"no_print\">
                    <div id=\"division1\">
                        <div id=\"div_heading\">                         
                            <img src=\"";
        // line 59
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
        // line 74
        echo "                        </div>
                        <div id= \"next\">
                            ";
        // line 77
        echo "                        </div>
                    </div>
                    <!-- *********Calendar end******** -->
                </div>
                ";
    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        // line 88
        echo "\t                \tMiddle block.
\t                ";
    }

    // line 95
    public function block_rigthbar($context, array $blocks = array())
    {
        // line 96
        echo "\t                <div id=\"right\">
\t                    <div id=\"announcement_box\">                        
\t                        <div id=\"announce_head\"><img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/announce.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>\t                        
\t                        <div id=\"announce_img\"><img src=\"";
        // line 99
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

    // line 122
    public function block_footer($context, array $blocks = array())
    {
        // line 123
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a>|
                        <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>|
                        <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>|
                        <a href=\"";
        // line 129
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
        return "UmbrellaFrontendBundle::frontendLayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  281 => 129,  277 => 128,  273 => 127,  269 => 126,  264 => 123,  261 => 122,  241 => 99,  237 => 98,  233 => 96,  230 => 95,  225 => 88,  222 => 87,  214 => 77,  210 => 74,  193 => 59,  188 => 56,  185 => 55,  175 => 43,  169 => 39,  165 => 38,  161 => 37,  157 => 36,  145 => 30,  140 => 27,  137 => 26,  130 => 18,  127 => 17,  121 => 14,  116 => 13,  113 => 12,  105 => 6,  102 => 5,  94 => 137,  92 => 122,  83 => 115,  74 => 90,  72 => 87,  63 => 55,  56 => 50,  54 => 26,  45 => 19,  43 => 17,  40 => 16,  38 => 12,  33 => 5,  149 => 31,  143 => 80,  138 => 77,  133 => 74,  126 => 70,  122 => 68,  119 => 66,  114 => 63,  107 => 59,  103 => 57,  100 => 55,  95 => 52,  88 => 48,  84 => 46,  81 => 95,  76 => 41,  69 => 37,  65 => 82,  60 => 30,  53 => 26,  49 => 24,  35 => 11,  32 => 10,  27 => 1,  25 => 5,);
    }
}
