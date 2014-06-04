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
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "civilite"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t\t<div class=\"col-xs-5\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Nom</span>
\t\t\t\t\t";
        // line 24
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
        // line 32
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
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Ville</span>
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Cp</span>
\t\t\t\t\t";
        // line 53
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
        // line 64
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
        // line 72
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
        // line 81
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
        // line 89
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
        // line 97
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
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "photo"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Commentaire</span>
\t\t\t\t\t";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
</div>\t

<div class=\"panel panel-primary\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">Prospect</h3>
\t</div>\t
\t<div class=\"panel-body\">\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Prospect</span>
\t\t\t\t\t";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "prospect"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-8\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Date 1er visite</span>
\t\t\t\t\t";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "dateProspect"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t
\t\t</div>
\t</div>\t
</div>\t


<div class=\"panel panel-primary\" id=\"infoAbo\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">Informations abonnement</h3>
\t</div>
\t<div class=\"panel-body\">\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Abonnement</span>
\t\t\t\t\t";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "abonnement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Date de debut</span>
\t\t\t\t\t";
        // line 157
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
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "modePaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t\t
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Date de fin</span>
\t\t\t\t\t";
        // line 172
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
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "clientDoit"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Incident de paiement</span>
\t\t\t\t\t";
        // line 187
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
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "droitEntree"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t<strong>Option :</strong> <br>";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "supp"), 'widget', array("attr" => array("class" => "")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t


<div class=\"panel panel-primary\" id=\"infoBanque\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">Informations banquaire</h3>
\t</div>
\t<div class=\"panel-body\">\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Nom du bénéficiare</span>
\t\t\t\t\t";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "nomBeneficiare"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Titulaire</span>
\t\t\t\t\t";
        // line 224
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
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Adresse</span>
\t\t\t\t\t";
        // line 239
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
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<span class=\"input-group-addon\">Code postal</span>
\t\t\t\t\t";
        // line 254
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
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "banque"), "iban"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>\t\t\t 
";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
<div class=\"form-group\">
\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" class=\"btn btn-default\"/>
\t</div>
</div> 

</form>

";
        // line 280
        echo "<script type=\"text/javascript\">
    // keep track of how many email fields have been rendered


    jQuery(document).ready(function() {
\t
\t
\$( \"#tonicmanager_appbundle_contrat_client_prospect\" ).change(function() {
  var prospect = \$( \"#tonicmanager_appbundle_contrat_client_prospect option:selected\").val();
  if(prospect == 'oui')
  {
\t\$('#infoBanque').hide();
\t\$('#infoAbo').hide();
\t\$('#infoAbo :input').removeAttr('required');
\t\$('#infoBanque :input').removeAttr('required');

  }
  else
  {
\t\$('#infoBanque').show();
\t\$('#infoAbo').show();
\t\$('#infoAbo :input').attr('required', 'required');
\t\$('#infoBanque :input').attr('required', 'required');
  }
});
\t

\t\t\t\t

    })
</script>

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
        return array (  411 => 280,  399 => 269,  390 => 263,  378 => 254,  369 => 248,  357 => 239,  348 => 233,  336 => 224,  327 => 218,  307 => 201,  299 => 196,  287 => 187,  257 => 166,  245 => 157,  236 => 151,  216 => 134,  207 => 128,  167 => 97,  58 => 18,  65 => 22,  195 => 103,  178 => 92,  124 => 56,  70 => 20,  266 => 172,  263 => 115,  259 => 114,  256 => 113,  251 => 106,  248 => 105,  211 => 36,  205 => 33,  200 => 31,  192 => 29,  188 => 112,  172 => 21,  160 => 80,  152 => 16,  146 => 14,  84 => 95,  76 => 21,  114 => 115,  97 => 38,  90 => 41,  53 => 8,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 181,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 86,  140 => 12,  132 => 51,  128 => 42,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 106,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 24,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 28,  75 => 23,  68 => 23,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 32,  46 => 8,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 30,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 89,  151 => 74,  142 => 68,  138 => 54,  136 => 56,  121 => 46,  117 => 117,  105 => 108,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 26,  72 => 24,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 81,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 50,  111 => 37,  108 => 53,  101 => 32,  98 => 31,  96 => 31,  83 => 31,  74 => 24,  66 => 15,  55 => 15,  52 => 8,  50 => 69,  43 => 7,  41 => 6,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 26,  176 => 64,  173 => 65,  168 => 20,  164 => 19,  162 => 57,  154 => 58,  149 => 15,  147 => 58,  144 => 49,  141 => 48,  133 => 72,  130 => 41,  125 => 44,  122 => 64,  116 => 41,  112 => 113,  109 => 34,  106 => 44,  103 => 105,  99 => 47,  95 => 100,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 8,  48 => 47,  45 => 24,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
