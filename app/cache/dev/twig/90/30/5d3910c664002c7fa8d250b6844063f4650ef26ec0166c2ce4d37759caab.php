<?php

/* TonicmanagerAppBundle::layout.html.twig */
class __TwigTemplate_90305d3910c664002c7fa8d250b6844063f4650ef26ec0166c2ce4d37759caab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'NasApp_body' => array($this, 'block_NasApp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"container\">
\t";
        // line 8
        $this->displayBlock('NasApp_body', $context, $blocks);
        // line 47
        echo "\t</div>
";
    }

    // line 8
    public function block_NasApp_body($context, array $blocks = array())
    {
        echo "\t
\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TonicmanagerAppBundle:Default:scanCarte"));
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TonicmanagerAppBundle:Default:rechercheClient"));
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TonicmanagerAppBundle:Default:consultation"));
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Statistique</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-lg btn-block\"><span class=\"glyphicon glyphicon-stats\"></span></button>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Fréquentations</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-lg btn-block\"><span class=\"glyphicon glyphicon-transfer\"></span></button>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>

\t\t</div>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  195 => 103,  178 => 92,  124 => 56,  70 => 20,  266 => 116,  263 => 115,  259 => 114,  256 => 113,  251 => 106,  248 => 105,  211 => 36,  205 => 33,  200 => 31,  192 => 29,  188 => 28,  172 => 21,  160 => 80,  152 => 16,  146 => 14,  84 => 95,  76 => 21,  114 => 115,  97 => 38,  90 => 29,  53 => 8,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 12,  132 => 51,  128 => 42,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 25,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 15,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 28,  75 => 23,  68 => 23,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 25,  46 => 8,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 30,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 17,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 117,  105 => 108,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 24,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 50,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 31,  74 => 24,  66 => 15,  55 => 15,  52 => 21,  50 => 69,  43 => 7,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 26,  176 => 64,  173 => 65,  168 => 20,  164 => 19,  162 => 57,  154 => 58,  149 => 15,  147 => 58,  144 => 49,  141 => 48,  133 => 62,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 113,  109 => 34,  106 => 44,  103 => 105,  99 => 31,  95 => 100,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 8,  48 => 47,  45 => 24,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
