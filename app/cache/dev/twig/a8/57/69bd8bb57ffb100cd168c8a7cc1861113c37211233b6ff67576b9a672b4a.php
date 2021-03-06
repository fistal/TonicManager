<?php

/* TonicmanagerAppBundle:Supp:ajouter.html.twig */
class __TwigTemplate_a85769bd8bb57ffb100cd168c8a7cc1861113c37211233b6ff67576b9a672b4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TonicmanagerAppBundle::admin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'TonicManagerAdminTitre_body' => array($this, 'block_TonicManagerAdminTitre_body'),
            'TonicManagerAdmin_body' => array($this, 'block_TonicManagerAdmin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TonicmanagerAppBundle::admin.html.twig";
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
    public function block_TonicManagerAdminTitre_body($context, array $blocks = array())
    {
        echo "Ajouter une option";
    }

    // line 7
    public function block_TonicManagerAdmin_body($context, array $blocks = array())
    {
        echo "\t
\t\t\t <form method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t  <div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Nouvelle option</h3>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"panel-body\">\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Libelle</span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "libelle"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Prix</span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prix"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t  </div>
\t\t\t\t</div>\t\t\t\t 
\t\t\t ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-offset-4 col-sm-10\">
\t\t\t\t  <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" class=\"btn btn-default\"/>
\t\t\t\t</div>
\t\t\t  </div> 
\t\t\t </form>
";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Supp:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  73 => 24,  64 => 18,  51 => 8,  46 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
