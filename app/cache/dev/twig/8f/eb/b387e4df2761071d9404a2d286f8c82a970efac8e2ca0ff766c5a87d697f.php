<?php

/* TonicmanagerAppBundle:Default:dashboard.html.twig */
class __TwigTemplate_8febb387e4df2761071d9404a2d286f8c82a970efac8e2ca0ff766c5a87d697f extends Twig_Template
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
        echo "Administration";
    }

    // line 7
    public function block_TonicManagerAdmin_body($context, array $blocks = array())
    {
        echo "\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t  <div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Abonnement</h3>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\tPanel content
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t  <div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Option</h3>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\tPanel content
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t  <div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Outil</h3>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"panel-body\">
\t\t\t\t\tPanel content
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
