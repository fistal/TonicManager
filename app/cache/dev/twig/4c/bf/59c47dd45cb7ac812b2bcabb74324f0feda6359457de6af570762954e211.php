<?php

/* TonicmanagerAppBundle:Client:OLD_detail.html.twig */
class __TwigTemplate_4cbf59c47dd45cb7ac812b2bcabb74324f0feda6359457de6af570762954e211 extends Twig_Template
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
        echo "\t";
        $this->displayBlock('NasApp_body', $context, $blocks);
    }

    public function block_NasApp_body($context, array $blocks = array())
    {
        echo "\t
\t\t\t<h3>Fiche ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "id"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
        echo "</h3>
\t\t\t<div>
\t\t\t\tCONTENU DE LA FICHE
\t\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Client:OLD_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  195 => 103,  178 => 92,  160 => 80,  97 => 38,  53 => 8,  90 => 29,  308 => 138,  301 => 136,  293 => 128,  290 => 127,  253 => 37,  242 => 32,  234 => 30,  210 => 21,  206 => 20,  202 => 19,  198 => 18,  194 => 17,  188 => 15,  185 => 14,  153 => 137,  134 => 122,  124 => 56,  84 => 96,  76 => 21,  70 => 20,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 137,  298 => 135,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 34,  241 => 77,  229 => 73,  220 => 70,  214 => 22,  177 => 65,  169 => 86,  140 => 55,  132 => 51,  128 => 119,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 31,  235 => 74,  230 => 29,  227 => 81,  224 => 27,  221 => 26,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 12,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 105,  71 => 89,  67 => 15,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 28,  75 => 17,  68 => 23,  56 => 9,  87 => 30,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 34,  46 => 8,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 139,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 24,  69 => 22,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 50,  111 => 111,  108 => 36,  101 => 32,  98 => 104,  96 => 31,  83 => 31,  74 => 14,  66 => 15,  55 => 15,  52 => 8,  50 => 70,  43 => 7,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 130,  141 => 48,  133 => 62,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 44,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 28,  82 => 22,  80 => 25,  73 => 23,  64 => 18,  60 => 6,  57 => 11,  54 => 10,  51 => 8,  48 => 47,  45 => 25,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
