<?php

/* TonicmanagerAppBundle:Client:liste.html.twig */
class __TwigTemplate_98f4e6f35c0c8a9a7a4407f5d75dd124b3583a8f1fc6b85955e6272380630278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TonicmanagerAppBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'NasApp_body' => array($this, 'block_NasApp_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TonicmanagerAppBundle::layout.html.twig";
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
    public function block_NasApp_body($context, array $blocks = array())
    {
        echo "\t
\t<div class=\"panel panel-primary\">
\t\t  <div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Vos clients <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutContrat");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span></a></h3>
\t\t  </div>
\t\t  <div class=\"panel-body\">\t\t
\t\t\t<table class=\"table table-hover\" id=\"myTable\">
\t\t\t\t<thead>
\t\t\t\t  <tr>
\t\t\t\t\t<th class=\"header\">Nom</th>
\t\t\t\t\t<th class=\"header\">Prénom</th>\t\t\t
\t\t\t\t\t<th></th>
\t\t\t\t  </tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clients"));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ficheContrat", array("idClient" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\">Editer</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</tbody>
\t\t\t</table>\t\t\t\t\t  
\t\t  </div>
\t</div>\t\t
";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Client:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  195 => 103,  160 => 80,  124 => 56,  70 => 20,  302 => 123,  295 => 121,  290 => 114,  287 => 113,  249 => 45,  245 => 43,  231 => 35,  225 => 32,  205 => 23,  202 => 22,  197 => 20,  185 => 17,  181 => 15,  178 => 92,  172 => 12,  84 => 103,  76 => 25,  114 => 123,  97 => 38,  90 => 29,  53 => 9,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 122,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 44,  241 => 41,  229 => 73,  220 => 70,  214 => 28,  177 => 65,  169 => 86,  140 => 55,  132 => 51,  128 => 42,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 48,  243 => 42,  240 => 86,  238 => 39,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 31,  219 => 76,  217 => 29,  208 => 24,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 22,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 28,  75 => 23,  68 => 23,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 25,  46 => 9,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 125,  105 => 116,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 24,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 50,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 31,  74 => 24,  66 => 15,  55 => 15,  52 => 21,  50 => 77,  43 => 7,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 19,  189 => 18,  187 => 98,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 62,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 121,  109 => 34,  106 => 44,  103 => 113,  99 => 31,  95 => 108,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 8,  48 => 7,  45 => 27,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
