<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_983253eb7004ba052de6d8fe6dcd7a4521e8cc2063f6096260e2b1a4687097f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  90 => 32,  84 => 29,  76 => 17,  58 => 21,  34 => 9,  239 => 144,  231 => 139,  222 => 133,  213 => 127,  186 => 109,  174 => 100,  165 => 94,  114 => 58,  195 => 115,  178 => 92,  160 => 80,  124 => 56,  97 => 38,  293 => 128,  290 => 127,  286 => 123,  275 => 111,  242 => 31,  237 => 29,  232 => 27,  228 => 26,  200 => 17,  191 => 15,  188 => 14,  153 => 127,  126 => 107,  113 => 100,  100 => 93,  70 => 13,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 122,  278 => 112,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 24,  214 => 22,  177 => 65,  169 => 86,  140 => 55,  132 => 70,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 25,  221 => 77,  219 => 76,  217 => 23,  208 => 19,  204 => 121,  179 => 69,  159 => 61,  143 => 56,  135 => 114,  119 => 42,  102 => 17,  71 => 19,  67 => 15,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 28,  88 => 31,  78 => 26,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 16,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 88,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 41,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 16,  69 => 19,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 122,  139 => 45,  131 => 52,  123 => 64,  120 => 20,  115 => 50,  111 => 37,  108 => 19,  101 => 32,  98 => 31,  96 => 92,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 10,  50 => 60,  43 => 7,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 12,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 125,  147 => 124,  144 => 79,  141 => 48,  133 => 62,  130 => 41,  125 => 44,  122 => 106,  116 => 41,  112 => 42,  109 => 99,  106 => 44,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 85,  82 => 28,  80 => 33,  73 => 16,  64 => 13,  60 => 13,  57 => 12,  54 => 10,  51 => 14,  48 => 9,  45 => 21,  42 => 7,  39 => 11,  36 => 4,  33 => 3,  30 => 2,);
    }
}
