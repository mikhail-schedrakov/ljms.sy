<?php

/* UmbrellaFrontendBundle:Form:fields.html.twig */
class __TwigTemplate_5f4a2c2c59a40094650489bc491f670eb22d249ecb041a8107a75fe29c1da337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
    }

    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 4
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 5
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "UmbrellaFrontendBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  36 => 5,  31 => 4,  28 => 3,  26 => 2,  20 => 1,  284 => 136,  279 => 134,  274 => 132,  269 => 129,  266 => 128,  246 => 105,  242 => 104,  238 => 102,  235 => 101,  230 => 94,  227 => 93,  219 => 83,  215 => 80,  198 => 65,  193 => 62,  190 => 61,  180 => 49,  174 => 45,  169 => 43,  164 => 41,  159 => 39,  151 => 34,  147 => 33,  142 => 30,  139 => 29,  132 => 19,  129 => 18,  123 => 15,  118 => 14,  115 => 13,  107 => 6,  96 => 146,  94 => 128,  83 => 101,  76 => 96,  74 => 93,  67 => 88,  65 => 61,  58 => 56,  56 => 29,  44 => 18,  41 => 17,  39 => 13,  35 => 11,  27 => 1,  127 => 68,  121 => 65,  116 => 62,  111 => 59,  104 => 5,  100 => 53,  97 => 51,  92 => 48,  85 => 121,  81 => 42,  78 => 40,  73 => 37,  66 => 33,  62 => 31,  57 => 26,  50 => 22,  46 => 21,  33 => 5,  30 => 7,  25 => 4,);
    }
}
