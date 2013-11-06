<?php

/* EWZRecaptchaBundle:Form:ewz_recaptcha_widget.html.twig */
class __TwigTemplate_8bc60e711d2c7cd918495ad1734f380f275da7073d6b7aaed229b5fa271f62d5 extends Twig_Template
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
        return array (  53 => 11,  47 => 9,  38 => 5,  30 => 2,  22 => 18,  20 => 1,  284 => 136,  279 => 134,  274 => 132,  269 => 129,  266 => 128,  246 => 105,  242 => 104,  238 => 102,  235 => 101,  230 => 94,  227 => 93,  219 => 83,  215 => 80,  198 => 65,  193 => 62,  190 => 61,  180 => 49,  174 => 45,  169 => 43,  164 => 41,  159 => 39,  151 => 34,  147 => 33,  139 => 29,  129 => 18,  123 => 15,  115 => 13,  107 => 6,  104 => 5,  96 => 146,  85 => 121,  76 => 96,  74 => 93,  67 => 88,  65 => 61,  58 => 56,  56 => 29,  46 => 21,  44 => 18,  41 => 6,  39 => 13,  33 => 5,  148 => 82,  142 => 30,  137 => 76,  132 => 19,  125 => 69,  121 => 67,  118 => 14,  113 => 62,  106 => 58,  102 => 56,  99 => 54,  94 => 128,  87 => 47,  83 => 101,  80 => 43,  75 => 40,  68 => 36,  64 => 34,  59 => 29,  52 => 25,  48 => 23,  35 => 4,  32 => 3,  27 => 1,  25 => 4,);
    }
}
