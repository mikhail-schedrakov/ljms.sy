<?php

/* UmbrellaFrontendBundle:Pages:auth.html.twig */
class __TwigTemplate_5e9fd0a1fa84d11f52e3d0135b5b5065aa85835e6b39d712cbfc4a44a50e2a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UmbrellaFrontendBundle::frontendLayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UmbrellaFrontendBundle::frontendLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div style=\"color:red;text-align:center;font-size:11px;font-weight:bold;padding:5px;\"></div>
    <form action=\"\" method=\"post\">
        <table class=\"admin_table\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td colspan=\"2\" align=\"center\"><b>Administrator Login Only</b></td>
                </tr>

                <tr>
                    <td>
                        <label>E-mail</label>
                    </td>
                    <td>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_auth"), "email"), 'widget', array("required" => "", "attr" => array("class" => "admin_input")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_auth"), "password"), 'widget', array("required" => "", "attr" => array("class" => "admin_input")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\" align=\"center\">                        
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form_auth"), "login"), 'widget', array("required" => "", "attr" => array("class" => "btn")));
        echo "
                    </td>
                </tr>
            </tbody>
        </table>
        ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form_auth"), 'form_end');
        echo "
    </form>
    <div>
        <a href=\"\">Forgot password? Click here</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Pages:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 35,  65 => 30,  57 => 25,  46 => 17,  31 => 4,  28 => 3,);
    }
}
