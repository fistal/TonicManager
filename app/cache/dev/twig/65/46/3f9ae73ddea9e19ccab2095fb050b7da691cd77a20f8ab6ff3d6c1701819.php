<?php

/* TonicmanagerAppBundle:Default:rechercheClient.html.twig */
class __TwigTemplate_65463f9ae73ddea9e19ccab2095fb050b7da691cd77a20f8ab6ff3d6c1701819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"panel panel-primary\">
  <div class=\"panel-heading\">
\t<h3 class=\"panel-title\">Rechercher un client</h3>
  </div>
  <div class=\"panel-body\">
\t\t<form method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_rechercheClient");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t\t<!-- Text input-->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-2 control-label\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', array("label" => "Nom : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Text input-->
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-sm-3 control-label\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateNaissance"), 'label', array("label" => "Date naissance : "));
        echo " </label>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateNaissance"), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t\t
\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t
\t\t\t
\t\t\t<button type=\"submit\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-search\"></span></button>
\t\t</form>
  </div>
</div>\t

";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Default:rechercheClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  52 => 18,  47 => 16,  39 => 11,  34 => 9,  26 => 6,  19 => 1,);
    }
}
