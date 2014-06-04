<?php

/* TonicmanagerAppBundle:Supp:ajouter.html.twig */
class __TwigTemplate_a85769bd8bb57ffb100cd168c8a7cc1861113c37211233b6ff67576b9a672b4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TonicmanagerAppBundle::admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'TonicManagerAdminTitre_body' => array($this, 'block_TonicManagerAdminTitre_body'),
            'TonicManagerAdmin_body' => array($this, 'block_TonicManagerAdmin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TonicmanagerAppBundle::admin.html.twig";
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
    public function block_TonicManagerAdminTitre_body($context, array $blocks = array())
    {
        echo "Ajouter une option";
    }

    // line 7
    public function block_TonicManagerAdmin_body($context, array $blocks = array())
    {
        echo "\t
\t\t\t <form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t  <div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Nouvelle option</h3>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"panel-body\">\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Libelle</span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "libelle"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Prix</span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prix"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t  </div>
\t\t\t\t</div>\t\t\t\t 
\t\t\t ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t\t  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" class=\"btn btn-default\"/>
\t\t\t\t</div>
\t\t\t  </div> 
\t\t\t </form>
";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Supp:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 65,  77 => 29,  411 => 280,  399 => 269,  390 => 263,  378 => 254,  369 => 248,  357 => 239,  348 => 233,  336 => 224,  327 => 218,  307 => 201,  299 => 196,  287 => 187,  257 => 166,  245 => 157,  236 => 151,  216 => 134,  207 => 128,  167 => 97,  58 => 21,  65 => 22,  195 => 103,  178 => 92,  124 => 56,  70 => 20,  266 => 172,  263 => 115,  259 => 114,  256 => 113,  251 => 106,  248 => 105,  211 => 36,  205 => 33,  200 => 31,  192 => 29,  188 => 112,  172 => 21,  160 => 80,  152 => 16,  146 => 14,  84 => 95,  76 => 21,  114 => 115,  97 => 38,  90 => 41,  53 => 8,  34 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 181,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 12,  132 => 51,  128 => 42,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 106,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 24,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 34,  75 => 23,  68 => 22,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 39,  88 => 32,  78 => 32,  46 => 7,  27 => 4,  44 => 7,  31 => 3,  28 => 2,  201 => 92,  196 => 30,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 89,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 54,  105 => 108,  91 => 27,  62 => 20,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 24,  69 => 25,  47 => 16,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 67,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 50,  111 => 37,  108 => 53,  101 => 44,  98 => 31,  96 => 31,  83 => 31,  74 => 24,  66 => 15,  55 => 15,  52 => 18,  50 => 69,  43 => 7,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 26,  176 => 64,  173 => 65,  168 => 20,  164 => 19,  162 => 57,  154 => 58,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 72,  130 => 64,  125 => 44,  122 => 64,  116 => 41,  112 => 113,  109 => 49,  106 => 44,  103 => 105,  99 => 47,  95 => 100,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 18,  60 => 19,  57 => 14,  54 => 10,  51 => 8,  48 => 12,  45 => 24,  42 => 7,  39 => 11,  36 => 5,  33 => 3,  30 => 2,);
    }
}
