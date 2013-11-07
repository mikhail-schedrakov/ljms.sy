<?php

/* UmbrellaAuthBundle:Pages:auth.html.twig */
class __TwigTemplate_b2942355607e71a93e16b0e3677c2ca845333cbc5fb9ac7cc6dc42f928bd152a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div style=\"color:red;text-align:center;font-size:11px;font-weight:bold;padding:5px;\"></div>
    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <table class=\"admin_table\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                
                <tr>
                    <td colspan=\"2\" align=\"center\"><b>Administrator Login Only</b></td>
                </tr>
                    
                <tr>
                    ";
        // line 14
        if ($this->getContext($context, "error")) {
            // line 15
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 17
        echo "                </tr>

                <tr>
                    <td>
                        <label>E-mail</label>
                    </td>
                    <td>
                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"admin_input\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>                        
                        <input type=\"password\" id=\"password\" class=\"admin_input\" name=\"_password\"/>
                    </td>
                </tr>
                
                <tr>
                    <td colspan=\"2\" align=\"center\">                                                
                        <button type=\"submit\" class=\"btn\">login</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <div>
        <a href=\"\">Forgot password? Click here</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UmbrellaAuthBundle:Pages:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  54 => 17,  48 => 15,  46 => 14,  34 => 5,  31 => 4,  28 => 3,);
    }
}
