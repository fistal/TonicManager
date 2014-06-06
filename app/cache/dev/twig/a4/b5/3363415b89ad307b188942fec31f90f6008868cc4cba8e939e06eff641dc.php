<?php

/* TonicmanagerAppBundle:Contrat:fiche.html.twig */
class __TwigTemplate_a4b53363415b89ad307b188942fec31f90f6008868cc4cba8e939e06eff641dc extends Twig_Template
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

    // line 7
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
\t\t\t\t";
        // line 19
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "photo") != "")) {
            // line 20
            echo "\t\t\t\t\t<img src=\"/TonicManager/web/uploads/img/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "photo"), "html", null, true);
            echo "\">
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t  <div class=\"caption\">
\t\t\t\t<h3>Informations client</h3>
\t\t\t\t<p>
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Nom</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "nom"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Prénom</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "prenom"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">E-mail</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "email"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Adresse</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "adresse"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Ville</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "ville"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\">Code postal</span>
\t\t\t\t\t\t<input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" readonly=\"readonly\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "client"), "cp"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"col-sm-12 col-md-8\">
\t\t\t\t<h3>Informations contrat</h3>
\t\t\t\t<p>
\t\t\t\t\tAbonnement : ";
        // line 64
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "contrat", true), "abonnement", array(), "any", false, true), "type", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contrat"), "abonnement"), "type"), "html", null, true);
            echo " ";
        }
        echo "<br><br>
\t\t\t\t\tDate de début : ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "dateStart"), "d - m - Y"), "html", null, true);
        echo "<br><br>
\t\t\t\t\tDate de fin : ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "dateEnd"), "d - m - Y"), "html", null, true);
        echo "<br><br>
\t\t\t\t\tMode de paiement : ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "modePaiement"), "html", null, true);
        echo "<br><br>
\t\t\t\t\tCommentaire : ";
        // line 68
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
        return array (  137 => 65,  77 => 29,  425 => 291,  404 => 274,  395 => 268,  383 => 259,  353 => 238,  332 => 223,  311 => 205,  299 => 196,  266 => 172,  257 => 166,  236 => 151,  216 => 134,  207 => 128,  188 => 112,  167 => 97,  58 => 18,  65 => 22,  195 => 103,  160 => 80,  124 => 56,  70 => 20,  302 => 123,  295 => 121,  290 => 114,  287 => 187,  249 => 45,  245 => 157,  231 => 35,  225 => 32,  205 => 23,  202 => 22,  197 => 20,  185 => 17,  181 => 15,  178 => 92,  172 => 12,  84 => 103,  76 => 21,  114 => 123,  97 => 38,  90 => 41,  53 => 8,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 280,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 253,  368 => 112,  365 => 111,  362 => 244,  360 => 109,  355 => 106,  341 => 229,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 122,  294 => 90,  285 => 89,  283 => 88,  278 => 181,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 44,  241 => 41,  229 => 73,  220 => 70,  214 => 28,  177 => 65,  169 => 86,  140 => 55,  132 => 51,  128 => 42,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 48,  243 => 42,  240 => 86,  238 => 39,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 31,  219 => 76,  217 => 29,  208 => 24,  204 => 72,  179 => 106,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 24,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 34,  75 => 23,  68 => 22,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 39,  88 => 32,  78 => 32,  46 => 8,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 89,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 54,  105 => 116,  91 => 27,  62 => 20,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 24,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 67,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 50,  111 => 37,  108 => 53,  101 => 44,  98 => 31,  96 => 31,  83 => 31,  74 => 24,  66 => 15,  55 => 15,  52 => 8,  50 => 77,  43 => 7,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 19,  189 => 18,  187 => 98,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 72,  130 => 64,  125 => 44,  122 => 64,  116 => 41,  112 => 121,  109 => 49,  106 => 44,  103 => 113,  99 => 47,  95 => 108,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 18,  60 => 19,  57 => 14,  54 => 10,  51 => 8,  48 => 12,  45 => 27,  42 => 7,  39 => 7,  36 => 5,  33 => 3,  30 => 2,);
    }
}
