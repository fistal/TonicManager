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
\t\t  <div class=\"col-sm-10 col-md-6\">
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "dateStart"), "d/m/Y"), "html", null, true);
        echo "<br><br>
\t\t\t\t\tDate de fin : ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contrat"), "dateEnd"), "d/m/Y"), "html", null, true);
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
\t\t\t\t<h3>Option(s)</h3>
\t\t\t\t<p>
\t\t\t\t\t<ul>
\t\t\t\t\t";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "contrat"), "Supp"));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            echo "\t
\t\t\t\t\t\t<li>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "option"), "libelle"), "html", null, true);
            echo "</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t\t</ul>
\t\t\t\t</p>
\t\t  </div>
\t\t  <div class=\"col-sm-12 col-md-2\">
\t\t\t\t<div class=\"btn-group-vertical\">
\t\t\t\t  
\t\t\t\t  <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_editContrat", array("idContrat" => $this->getAttribute($this->getContext($context, "contrat"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Editer</a>
\t\t\t\t  <div class=\"btn-group\">
\t\t\t\t\t<button id=\"btnGroupVerticalDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t  Imprimer
\t\t\t\t\t  <span class=\"caret\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"btnGroupVerticalDrop1\">
\t\t\t\t\t  <li><a href=\"#\">Contrat</a></li>
\t\t\t\t\t  <li><a href=\"#\">Autorisation</a></li>
\t\t\t\t\t  <li><a href=\"#\">test</a></li>
\t\t\t\t\t</ul>
\t\t\t\t  </div>

\t\t\t\t</div>
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
        return array (  179 => 82,  171 => 76,  163 => 74,  157 => 73,  149 => 68,  145 => 67,  141 => 66,  137 => 65,  130 => 64,  117 => 54,  109 => 49,  101 => 44,  93 => 39,  85 => 34,  77 => 29,  68 => 22,  62 => 20,  60 => 19,  48 => 12,  39 => 7,  32 => 3,  29 => 2,);
    }
}
