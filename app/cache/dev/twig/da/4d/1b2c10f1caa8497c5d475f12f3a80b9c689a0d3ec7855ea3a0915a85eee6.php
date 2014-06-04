<?php

/* TonicmanagerAppBundle::admin.html.twig */
class __TwigTemplate_da4d1b2c10f1caa8497c5d475f12f3a80b9c689a0d3ec7855ea3a0915a85eee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'TonicManagerAdminTitre_body' => array($this, 'block_TonicManagerAdminTitre_body'),
            'TonicManagerAdmin_body' => array($this, 'block_TonicManagerAdmin_body'),
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
        echo "<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t";
        // line 10
        echo "\t\t<div class=\"col-sm-3 col-md-2 sidebar\">
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Abonnement</li>
\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutAbonnement");
        echo "\">Ajouter un abonnement</a></li>
\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeAbonnement");
        echo "\">Vos abonnements</a></li>
\t\t  </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Option</li>
\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutOption");
        echo "\">Ajouter une option</a></li>
\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeOption");
        echo "\">Vos options</a></li>
\t\t  </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Outils</li>
\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Fréquentations</a></li>
\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Statistique</a></li>
\t\t  </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Utilisateur</li>
\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Ajouter un utilisateur</a></li>
\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Vos utilisateurs</a></li>
\t\t  </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Contact</li>
\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Contactez l'assistance</a></li>
\t\t  </ul>
\t\t</div>


\t\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
\t\t  <h1 class=\"page-header\">";
        // line 39
        $this->displayBlock('TonicManagerAdminTitre_body', $context, $blocks);
        echo "</h1>

\t\t  <div class=\"row placeholders\">
\t\t\t\t";
        // line 42
        $this->displayBlock('TonicManagerAdmin_body', $context, $blocks);
        // line 43
        echo "\t
\t\t  </div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 39
    public function block_TonicManagerAdminTitre_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_TonicManagerAdmin_body($context, array $blocks = array())
    {
        echo "\t
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  97 => 33,  90 => 29,  53 => 13,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 42,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 23,  68 => 19,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 31,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 39,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 8,  48 => 10,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
