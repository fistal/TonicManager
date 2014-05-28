<?php

/* TonicmanagerAppBundle:Contrat:ajouter.html.twig */
class __TwigTemplate_28ee58cf865c347778cdfb40c495d474281906ac086ce189fcfc5be0192d32f8 extends Twig_Template
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
<form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">

\t<div class=\"well\">
\t\t<div class=\"input-append date\" id=\"dp3\" data-date=\"12-02-2012\" data-date-format=\"dd-mm-yyyy\">
\t\t\t<input class=\"span2\" size=\"16\" type=\"text\" value=\"12-02-2012\" readonly=\"\">
\t\t\t<span class=\"add-on\"><i class=\"icon-th\"></i></span>
\t\t</div>
\t</div>


<div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">Informations client</h3>
\t</div>
\t<div class=\"panel-body\">        
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Civilité</span>
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "civilite"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t\t<div class=\"col-xs-5\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Nom</span>
\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-5\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tprénom
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Ville</span>
\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Cp</span>
\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "cp"), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "dateNaissance"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tLieu de naissance
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "lieuNaissance"), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t\t<div class=\"col-xs-3\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tTelephone
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "telephone"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-3\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\tPortable
\t\t\t\t\t</span>
\t\t\t\t\t";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "portable"), 'widget', array("attr" => array("class" => "form-control")));
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
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "photo"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Commentaire</span>
\t\t\t\t\t";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
</div>\t\t 


<div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">Informations abonnement</h3>
\t</div>
\t<div class=\"panel-body\">\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Abonnement</span>
\t\t\t\t\t";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "abonnement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Date de debut</span>
\t\t\t\t\t";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateStart"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Mode de paiement</span>
\t\t\t\t\t";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "modePaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t\t
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Date de fin</span>
\t\t\t\t\t";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateEnd"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Client doit</span>
\t\t\t\t\t";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "clientDoit"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Incident de paiement</span>
\t\t\t\t\t";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "incidentPaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t\t
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Droit entrée</span>
\t\t\t\t\t";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "droitEntree"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t<strong>Option :</strong> <br>";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "supp"), 'widget', array("attr" => array("class" => "")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t


<div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">Informations banquaire</h3>
\t</div>
\t<div class=\"panel-body\">\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Nom du bénéficiare</span>
\t\t\t\t\t";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "nomBeneficiare"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Titulaire</span>
\t\t\t\t\t";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "titulaire"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">\t\t\t\t\t
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Nom de la banque</span>
\t\t\t\t\t";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Adresse</span>
\t\t\t\t\t";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Ville</span>
\t\t\t\t\t";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Code postal</span>
\t\t\t\t\t";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "cp"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t\t
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">IBAN</span>
\t\t\t\t\t";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "iban"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t\t\t 
";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
<div class=\"form-group\">
\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" class=\"btn btn-default\"/>
\t</div>
</div> 

</form>
";
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
        return array (  379 => 255,  370 => 249,  358 => 240,  349 => 234,  337 => 225,  328 => 219,  316 => 210,  307 => 204,  287 => 187,  279 => 182,  267 => 173,  258 => 167,  246 => 158,  237 => 152,  225 => 143,  216 => 137,  196 => 120,  187 => 114,  175 => 105,  164 => 97,  153 => 89,  141 => 80,  130 => 72,  116 => 61,  107 => 55,  98 => 49,  86 => 40,  75 => 32,  66 => 26,  44 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
