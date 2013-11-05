<?php

/* UmbrellaFrontendBundle:Pages:home.html.twig */
class __TwigTemplate_9f87756d127936123aa2ed8018c553f33396f035c90ae65871ceab4d60a346fb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"welcome\">
        <div id=\"welcome_head\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/welcome.gif"), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div id=\"welcome_img\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/welcome_image.jpeg"), "html", null, true);
        echo "\" alt=\"\" />
        </div>
        <div id=\"welcome_txt\">
            <p>
            \t<span style=\"color: #000000;\">
            \t\tWelcome to the&nbsp;Lockport Junior Miss Softball web site. The LJMS Executive Board is excited to introduce the new league site. This site will have many new features that will enable us to keep you informed and updated on all league activities.
            \t</span>
            </p>
            <p>
            \t&nbsp;
            </p>
            <div class=\"more_link\">
            \t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">more about us</a>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div id=\"sponsors\">
        <div>
            <div id=\"sponsores_head\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/sponsors.gif"), "html", null, true);
        echo "\" alt=\"\" />
            </div>
            <div class=\"more_link\">
            \t<a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("sponsors");
        echo "\">become one</a>
            </div>
            <div style=\"clear:both\">            \t
            </div>
        </div>

        <!-- Slideshow logos -->
        <div id=\"slideshow_sponsors_logo\" style=\"height: 130px;\">
            <div style=\"text-align:center;\">
                <a href=\"http://www.mammaonesti.com\" target=\"_blank\">
                \t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logoSponsors/22.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/>
                </a>
                <a href=\"http://www.mammaonesti.com\" target=\"_blank\">
                \t<img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logoSponsors/24.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"/>
                </a>
                <a href=\"http://www.mammaonesti.com\" target=\"_blank\">
                \t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logoSponsors/25.gif"), "html", null, true);
        echo "\" alt=\"logo\"/>
                </a>
            </div>
            <div style=\"text-align:center;\">\t\t\t\t\t\t
               <a href=\"http://www.mammaonesti.com\" target=\"_blank\">
                \t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/umbrellafrontend/images/logoSponsors/34.gif"), "html", null, true);
        echo "\" alt=\"logo\"/>
                </a>
            </div>
        </div>
        <!-- end Slideshow logos -->
    </div>

    <div style=\"clear:both\">    \t
    </div>

";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 55,  100 => 50,  94 => 47,  88 => 44,  75 => 34,  69 => 31,  55 => 20,  40 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
