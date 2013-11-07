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
        return array (  47 => 9,  41 => 6,  30 => 2,  22 => 18,  20 => 1,  281 => 129,  277 => 128,  273 => 127,  269 => 126,  264 => 123,  261 => 122,  241 => 99,  237 => 98,  233 => 96,  230 => 95,  225 => 88,  222 => 87,  214 => 77,  210 => 74,  193 => 59,  188 => 56,  185 => 55,  175 => 43,  169 => 39,  165 => 38,  161 => 37,  157 => 36,  145 => 30,  140 => 27,  137 => 26,  130 => 18,  127 => 17,  121 => 14,  116 => 13,  113 => 12,  105 => 6,  102 => 5,  94 => 137,  92 => 122,  83 => 115,  74 => 90,  72 => 87,  63 => 55,  56 => 50,  54 => 26,  45 => 19,  43 => 17,  40 => 16,  38 => 5,  33 => 5,  149 => 31,  143 => 79,  138 => 76,  133 => 73,  126 => 69,  122 => 67,  119 => 65,  114 => 62,  107 => 58,  103 => 56,  100 => 54,  95 => 51,  88 => 47,  84 => 45,  81 => 95,  76 => 40,  69 => 36,  65 => 82,  60 => 29,  53 => 11,  49 => 23,  35 => 4,  32 => 3,  27 => 1,  25 => 4,);
    }
}
