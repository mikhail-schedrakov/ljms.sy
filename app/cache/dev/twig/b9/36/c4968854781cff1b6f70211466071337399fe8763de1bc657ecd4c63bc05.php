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
        // line 13
        $this->displayBlock('link', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('script', $context, $blocks);
        // line 21
        echo "        
    </head>

    <body class=\"main\">

        <!--Container Starts-->
        <div class=\"container\">

            ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 56
        echo "
            <!-- Content Starts -->
            <div id=\"content\">

                <!--Left Starts ------------------------------------------------------------------------------------------------------------------- -->
                ";
        // line 61
        $this->displayBlock('leftbar', $context, $blocks);
        // line 88
        echo "                <!--Left Ends ------------------------------------------------------------------------------------------------------------------- -->

                <!--Middle Starts --------------------------------------------------------------------------------------------------------------- -->
                
                <div id=\"content_area\">
\t                ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "                </div>

                <!--Middle Ends ---------------------------------------------------------------------------------------------------------------- -->

                <!--Right Starts --------------------------------------------------------------------------------------------------------------- -->
                ";
        // line 101
        $this->displayBlock('rigthbar', $context, $blocks);
        // line 121
        echo "                <!--Right Ends -------------------------------------------------------------------------------------------------------------------- -->
                <div style=\"clear:both\">
                </div>
            </div>
            <!--Content Ends-->

            <!--Footer Starts-->
            ";
        // line 128
        $this->displayBlock('footer', $context, $blocks);
        // line 146
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

    // line 13
    public function block_link($context, array $blocks = array())
    {
        // line 14
        echo "\t        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 18
    public function block_script($context, array $blocks = array())
    {
        // line 19
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/js/jquery-2.0.3.js"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "\t            <!--Header Starts-->
\t            <div id=\"header\" class=\"no_print\">
\t                <div id=\"logo\">
\t                    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">
\t                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" border=\"0\"  />
\t                    </a>
\t                </div>
\t                <div id=\"head02\">
\t                    <div id=\"top_links\">
\t                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Home</a>
\t                        |
\t                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>
\t                        |
\t                        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>
\t                        |
\t                        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
\t                    </div>
\t                    <div id=\"joinus\">
\t                    ";
        // line 49
        echo "\t                    </div>
\t                </div>
\t                <div id=\"head03\">
\t                </div>
\t            </div>
\t            <!--Header Ends-->
            ";
    }

    // line 61
    public function block_leftbar($context, array $blocks = array())
    {
        // line 62
        echo "                <div id=\"left\" class=\"no_print\">
                    <div id=\"division1\">
                        <div id=\"div_heading\">                         
                            <img src=\"";
        // line 65
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
        // line 80
        echo "                        </div>
                        <div id= \"next\">
                            ";
        // line 83
        echo "                        </div>
                    </div>
                    <!-- *********Calendar end******** -->
                </div>
                ";
    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        // line 94
        echo "\t                \tMiddle block.
\t                ";
    }

    // line 101
    public function block_rigthbar($context, array $blocks = array())
    {
        // line 102
        echo "\t                <div id=\"right\">
\t                    <div id=\"announcement_box\">                        
\t                        <div id=\"announce_head\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/announce.gif"), "html", null, true);
        echo "\" alt=\"\" /></div>\t                        
\t                        <div id=\"announce_img\"><img src=\"";
        // line 105
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

    // line 128
    public function block_footer($context, array $blocks = array())
    {
        // line 129
        echo "            <div id=\"footer\" class=\"no_print\">
                <div class=\"footer_contents\">
                    <div class=\"footer_links\">
                        <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Home</a>
                        |
                        <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>
                        |
                        <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">Sponsors</a>
                        |
                        <a href=\"\">Contact</a>
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
        return array (  284 => 136,  279 => 134,  274 => 132,  269 => 129,  266 => 128,  246 => 105,  242 => 104,  238 => 102,  235 => 101,  230 => 94,  227 => 93,  219 => 83,  215 => 80,  198 => 65,  193 => 62,  190 => 61,  180 => 49,  174 => 45,  169 => 43,  164 => 41,  159 => 39,  151 => 34,  147 => 33,  142 => 30,  139 => 29,  132 => 19,  129 => 18,  123 => 15,  118 => 14,  115 => 13,  107 => 6,  96 => 146,  94 => 128,  83 => 101,  76 => 96,  74 => 93,  67 => 88,  65 => 61,  58 => 56,  56 => 29,  44 => 18,  41 => 17,  39 => 13,  35 => 11,  27 => 1,  127 => 68,  121 => 65,  116 => 62,  111 => 59,  104 => 5,  100 => 53,  97 => 51,  92 => 48,  85 => 121,  81 => 42,  78 => 40,  73 => 37,  66 => 33,  62 => 31,  57 => 26,  50 => 22,  46 => 21,  33 => 5,  30 => 7,  25 => 4,);
    }
}
