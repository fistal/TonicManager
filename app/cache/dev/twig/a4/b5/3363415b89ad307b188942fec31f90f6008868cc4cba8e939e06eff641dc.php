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
            'body' => array($this, 'block_body'),
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
        return array (  148 => 66,  144 => 65,  140 => 64,  136 => 63,  132 => 62,  119 => 52,  111 => 47,  103 => 42,  95 => 37,  87 => 32,  79 => 27,  68 => 19,  56 => 12,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
