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
        return array (  195 => 103,  187 => 98,  178 => 92,  169 => 86,  160 => 80,  151 => 74,  142 => 68,  133 => 62,  124 => 56,  115 => 50,  106 => 44,  97 => 38,  88 => 32,  79 => 26,  70 => 20,  61 => 14,  53 => 9,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
