<?php

/* TonicmanagerAppBundle:Contrat:fiche.html.twig */
class __TwigTemplate_a4b53363415b89ad307b188942fec31f90f6008868cc4cba8e939e06eff641dc extends Twig_Template
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
\t\t
\t\t
<div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">Fiche ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "id"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "nom"), "html", null, true);
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t
\t\t<div class=\"row\">
\t\t  <div class=\"col-sm-6 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"/TonicManager/web/uploads/img/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "photo"), "html", null, true);
        echo "\">
\t\t\t  <div class=\"caption\">
\t\t\t\t<h3>Information client</h3>
\t\t\t\t<p>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Nom</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "nom"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Prénom</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "prenom"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">E-mail</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "email"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Adresse</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "adresse"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Ville</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "ville"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Code postal</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "cp"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"col-sm-12 col-md-8\">
\t\t\t\t<h3>Information contrat</h3>
\t\t\t\t<p>
\t\t\t\t\tAbonnement : ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "abonnement"), "type"), "html", null, true);
        echo "<br><br>
\t\t\t\t\tDate de début : ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "dateStart"), "d - m - Y"), "html", null, true);
        echo "<br><br>
\t\t\t\t\tDate de fin : ";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "dateEnd"), "d - m - Y"), "html", null, true);
        echo "<br><br>
\t\t\t\t\tMode de paiement : ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "modePaiement"), "html", null, true);
        echo "<br><br>
\t\t\t\t\tCommentaire : ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "commentaire"), "html", null, true);
        echo "<br><br>
\t\t\t\t</p>
\t\t  </div>
\t\t</div>\t
\t</div>
</div>\t\t
\t\t
\t\t
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Contrat:fiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 66,  370 => 249,  358 => 240,  349 => 234,  328 => 219,  316 => 210,  307 => 204,  287 => 187,  279 => 182,  267 => 173,  237 => 152,  225 => 143,  216 => 137,  175 => 105,  65 => 22,  195 => 103,  178 => 92,  160 => 80,  97 => 38,  53 => 8,  90 => 29,  308 => 138,  301 => 136,  293 => 128,  290 => 127,  253 => 37,  242 => 32,  234 => 30,  210 => 21,  206 => 20,  202 => 19,  198 => 18,  194 => 17,  188 => 15,  185 => 14,  153 => 89,  134 => 122,  124 => 56,  84 => 96,  76 => 21,  70 => 20,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 255,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 225,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 137,  298 => 135,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 167,  252 => 80,  247 => 34,  241 => 77,  229 => 73,  220 => 70,  214 => 22,  177 => 65,  169 => 86,  140 => 64,  132 => 62,  128 => 119,  107 => 55,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 31,  235 => 74,  230 => 29,  227 => 81,  224 => 27,  221 => 26,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 12,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 105,  71 => 89,  67 => 15,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 28,  75 => 32,  68 => 19,  56 => 12,  87 => 32,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 34,  46 => 8,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 120,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 139,  151 => 74,  142 => 68,  138 => 54,  136 => 63,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 27,  72 => 24,  69 => 22,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 158,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 50,  111 => 47,  108 => 36,  101 => 32,  98 => 49,  96 => 31,  83 => 31,  74 => 14,  66 => 26,  55 => 15,  52 => 8,  50 => 70,  43 => 7,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 114,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 97,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 65,  141 => 80,  133 => 62,  130 => 72,  125 => 44,  122 => 43,  116 => 61,  112 => 42,  109 => 34,  106 => 44,  103 => 42,  99 => 31,  95 => 37,  92 => 33,  86 => 40,  82 => 22,  80 => 25,  73 => 23,  64 => 18,  60 => 6,  57 => 11,  54 => 10,  51 => 8,  48 => 47,  45 => 25,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
