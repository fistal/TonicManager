<?php

/* TonicmanagerAppBundle:Client:ajouter.html.twig */
class __TwigTemplate_8eb47459d13de52f8ce766cc54309f8ae7f57e0cb23990f1b65c0e5b4c763fb0 extends Twig_Template
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
\t\t\t<h3>Nouveau client</h3>
\t\t\t <form method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
\t\t\t 
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Nom : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Prénom : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Date de naissance : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateNaissance"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">E-mail : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Adresse : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Ville : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Code postal : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cp"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Client doit : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "contrat"), "clientDoit"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Incident de paiement : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "contrat"), "incidentPaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Mode paiement : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "contrat"), "modePaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">droitEntree : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "contrat"), "droitEntree"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Date de début du contrat : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "contrat"), "dateStart"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Date de fin de contrat : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "contrat"), "dateEnd"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Photo : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "contrat"), "photo"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Commentaire : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "contrat"), "commentaire"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t\t
\t\t\t ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t 
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t\t  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" class=\"btn btn-default\"/>
\t\t\t\t</div>
\t\t\t  </div> 
\t\t\t  
\t\t\t </form>
\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Client:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 103,  178 => 92,  124 => 56,  70 => 20,  266 => 116,  263 => 115,  259 => 114,  256 => 113,  251 => 106,  248 => 105,  211 => 36,  205 => 33,  200 => 31,  192 => 29,  188 => 28,  172 => 21,  160 => 80,  152 => 16,  146 => 14,  84 => 95,  76 => 90,  114 => 115,  97 => 38,  90 => 29,  53 => 9,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 12,  132 => 51,  128 => 42,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 25,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 22,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 25,  75 => 23,  68 => 19,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 25,  46 => 7,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 30,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 17,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 117,  105 => 108,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 50,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 31,  74 => 24,  66 => 15,  55 => 15,  52 => 21,  50 => 69,  43 => 7,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 26,  176 => 64,  173 => 65,  168 => 20,  164 => 19,  162 => 57,  154 => 58,  149 => 15,  147 => 58,  144 => 49,  141 => 48,  133 => 62,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 113,  109 => 34,  106 => 44,  103 => 105,  99 => 31,  95 => 100,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 8,  48 => 7,  45 => 24,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
