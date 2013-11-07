<?php

/* EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig */
class __TwigTemplate_d4064ddad6fb9ffc7519367fd1ffec127881540e48d1417c5a82f14409305737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ewz_recaptcha_widget' => array($this, 'block_ewz_recaptcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 1
    public function block_ewz_recaptcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "ewz_recaptcha_enabled")) {
            // line 4
            echo "        ";
            if ($this->getAttribute($this->getContext($context, "attr", true), "options", array(), "any", true, true)) {
                // line 5
                echo "            <script type=\"text/javascript\">
                var RecaptchaOptions = ";
                // line 6
                echo twig_jsonencode_filter($this->getAttribute($this->getContext($context, "attr"), "options"));
                echo "
            </script>
        ";
            }
            // line 9
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "url_challenge"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        <noscript>
            <iframe src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "url_noscript"), "html", null, true);
            echo "\" height=\"300\" width=\"500\"></iframe><br/>
            <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
            <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\"/>
        </noscript>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  35 => 4,  32 => 3,  27 => 1,  22 => 18,  45 => 7,  36 => 5,  31 => 4,  28 => 3,  26 => 2,  146 => 52,  143 => 51,  136 => 69,  124 => 62,  120 => 61,  116 => 60,  108 => 55,  105 => 53,  103 => 51,  100 => 50,  97 => 48,  87 => 39,  84 => 37,  76 => 31,  72 => 30,  68 => 29,  64 => 28,  58 => 24,  54 => 23,  46 => 18,  42 => 17,  38 => 5,  29 => 8,  20 => 1,  159 => 80,  155 => 79,  144 => 71,  139 => 69,  133 => 66,  128 => 63,  123 => 61,  117 => 57,  111 => 57,  107 => 52,  101 => 48,  95 => 45,  91 => 43,  85 => 39,  79 => 36,  75 => 34,  69 => 30,  63 => 27,  59 => 25,  53 => 11,  47 => 9,  43 => 16,  33 => 7,  30 => 2,  25 => 4,);
    }
}
