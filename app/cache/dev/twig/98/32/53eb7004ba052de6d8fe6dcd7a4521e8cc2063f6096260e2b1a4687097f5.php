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
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
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
        return array (  127 => 28,  110 => 22,  137 => 65,  77 => 29,  411 => 280,  399 => 269,  390 => 263,  378 => 254,  369 => 248,  357 => 239,  348 => 233,  336 => 224,  327 => 218,  307 => 201,  299 => 196,  287 => 187,  257 => 166,  245 => 157,  236 => 151,  216 => 134,  207 => 128,  167 => 97,  58 => 21,  65 => 22,  195 => 103,  178 => 92,  124 => 56,  70 => 20,  266 => 172,  263 => 115,  259 => 114,  256 => 113,  251 => 106,  248 => 105,  211 => 36,  205 => 33,  200 => 31,  192 => 29,  188 => 112,  172 => 21,  160 => 80,  152 => 16,  146 => 14,  84 => 29,  76 => 17,  114 => 115,  97 => 38,  90 => 32,  53 => 10,  34 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 181,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 12,  132 => 51,  128 => 42,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 106,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 23,  67 => 22,  63 => 15,  59 => 14,  38 => 6,  94 => 34,  89 => 20,  85 => 34,  75 => 23,  68 => 22,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 39,  88 => 31,  78 => 26,  46 => 7,  27 => 4,  44 => 7,  31 => 3,  28 => 2,  201 => 92,  196 => 30,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 89,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 20,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 24,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 67,  139 => 45,  131 => 52,  123 => 39,  120 => 20,  115 => 50,  111 => 37,  108 => 19,  101 => 44,  98 => 31,  96 => 31,  83 => 31,  74 => 24,  66 => 15,  55 => 15,  52 => 10,  50 => 69,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 26,  176 => 64,  173 => 65,  168 => 20,  164 => 19,  162 => 57,  154 => 58,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 72,  130 => 64,  125 => 44,  122 => 64,  116 => 41,  112 => 113,  109 => 49,  106 => 44,  103 => 105,  99 => 47,  95 => 100,  92 => 21,  86 => 28,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 19,  57 => 12,  54 => 10,  51 => 8,  48 => 9,  45 => 24,  42 => 7,  39 => 11,  36 => 4,  33 => 3,  30 => 2,);
    }
}
