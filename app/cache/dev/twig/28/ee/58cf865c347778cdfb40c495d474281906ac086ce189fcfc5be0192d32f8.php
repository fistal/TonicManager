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
\t
\t




\t
\t
\t
\t
\t\t\t<h3>Nouveau contrat</h3>
\t\t\t <form method=\"post\" ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"form-horizontal\">
\t\t\t 
\t\t\t 
\t\t\t 
\t\t\t 
\t\t\t 
\t\t\t 
\t\t\t 
\t\t\t 
\t\t\t 
 <div class=\"row\">
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">Nom</span>
\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">
\t\t\t\tprénom
\t\t\t</span>
\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "prenom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">
\t\t\t\tDate de naissance
\t\t\t</span>
\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "dateNaissance"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
</div>
<br>
<div class=\"row\">
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">E-mail</span>
\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">Adresse</span>
\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "adresse"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>\t
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">Ville</span>
\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "ville"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
</div>
<br>
<div class=\"row\">
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">Code postal</span>
\t\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "client"), "cp"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
</div>
<br>
<div class=\"row\">
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">Client doit</span>
\t\t\t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "clientDoit"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">Incident de paiement</span>
\t\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "incidentPaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"col-xs-4\">
\t\t<div class=\"input-group\">
\t\t\t<span class=\"input-group-addon\">Mode de paiement</span>
\t\t\t";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "modePaiement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
</div>
<br>
\t\t\t 
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">droitEntree : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "droitEntree"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Date de début du contrat : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateStart"), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Date de fin de contrat : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateEnd"), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Photo : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "photo"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Commentaire : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "commentaire"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">Abonnement : </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "abonnement"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t\t
\t\t\t ";
        // line 144
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
        return "TonicmanagerAppBundle:Contrat:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 144,  231 => 139,  222 => 133,  213 => 127,  204 => 121,  195 => 115,  186 => 109,  174 => 100,  165 => 94,  156 => 88,  144 => 79,  132 => 70,  123 => 64,  114 => 58,  102 => 49,  91 => 41,  80 => 33,  63 => 19,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
