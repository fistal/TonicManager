<?php

/* TonicmanagerAppBundle:Contrat:ajouter.html.twig */
class __TwigTemplate_28ee58cf865c347778cdfb40c495d474281906ac086ce189fcfc5be0192d32f8 extends Twig_Template
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
\t\t\t <form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\">
\t\t\t 
<div class=\"well\">
\t\t\t  <div class=\"input-append date\" id=\"dp3\" data-date=\"12-02-2012\" data-date-format=\"dd-mm-yyyy\">
\t\t\t\t<input class=\"span2\" size=\"16\" type=\"text\" value=\"12-02-2012\" readonly=\"\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-th\"></i></span>
\t\t\t  </div>
          </div>
\t\t\t 
\t\t\t 
<div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Informations client</h3>
      </div>
      <div class=\"panel-body\">        
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Civilité</span>
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "civilite"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t\t<div class=\"col-xs-5\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Nom</span>
\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-5\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tprénom
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Adresse</span>
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Ville</span>
\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Cp</span>
\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "cp"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t\t\t
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tDate de naissance
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "dateNaissance"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tLieu de naissance
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "lieuNaissance"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">E-mail</span>
\t\t\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t\t<div class=\"col-xs-3\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tTelephone
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "telephone"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-3\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tPortable
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "portable"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Photo</span>
\t\t\t\t\t";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client"), "photo"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Commentaire</span>
\t\t\t\t\t";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
      </div>
</div>\t\t 
\t\t\t 

<div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Informations abonnement</h3>
      </div>
      <div class=\"panel-body\">\t\t\t\t
        \t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Abonnement</span>
\t\t\t\t\t\t\t";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abonnement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Date de debut</span>
\t\t\t\t\t\t\t";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateStart"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<br>
\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Mode de paiement</span>
\t\t\t\t\t\t\t";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modePaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Date de fin</span>
\t\t\t\t\t\t\t";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br>
        \t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Client doit</span>
\t\t\t\t\t\t\t";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientDoit"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Incident de paiement</span>
\t\t\t\t\t\t\t";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "incidentPaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<br>
        \t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Droit entrée</span>
\t\t\t\t\t\t\t";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "droitEntree"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t<strong>Option :</strong> <br>";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "supp"), 'widget', array("attr" => array("class" => "")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
      </div>
</div>\t


<div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">Informations banquaire</h3>
      </div>
      <div class=\"panel-body\">\t\t\t\t
        \t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Nom du bénéficiare</span>
\t\t\t\t\t\t\t";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banque"), "nomBeneficiare"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Titulaire</span>
\t\t\t\t\t\t\t";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banque"), "titulaire"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br>
\t\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Nom de la banque</span>
\t\t\t\t\t\t\t";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banque"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Adresse</span>
\t\t\t\t\t\t\t";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banque"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br>
        \t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Ville</span>
\t\t\t\t\t\t\t";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banque"), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">Code postal</span>
\t\t\t\t\t\t\t";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banque"), "cp"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<br>
        \t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">IBAN</span>
\t\t\t\t\t\t\t";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "banque"), "iban"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
      </div>
</div>\t\t\t 
\t\t\t 
\t\t\t 
 
<br>

<br>
\t\t\t 

\t\t\t\t\t
\t\t\t ";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        return "TonicmanagerAppBundle:Contrat:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 265,  378 => 250,  366 => 241,  357 => 235,  345 => 226,  336 => 220,  324 => 211,  315 => 205,  295 => 188,  287 => 183,  275 => 174,  266 => 168,  254 => 159,  245 => 153,  233 => 144,  224 => 138,  204 => 121,  195 => 115,  183 => 106,  172 => 98,  161 => 90,  149 => 81,  138 => 73,  124 => 62,  115 => 56,  106 => 50,  94 => 41,  83 => 33,  74 => 27,  52 => 8,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
