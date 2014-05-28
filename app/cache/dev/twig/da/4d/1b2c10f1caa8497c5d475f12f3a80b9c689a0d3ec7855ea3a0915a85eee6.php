<?php

/* TonicmanagerAppBundle::admin.html.twig */
class __TwigTemplate_da4d1b2c10f1caa8497c5d475f12f3a80b9c689a0d3ec7855ea3a0915a85eee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'TonicManagerAdminTitre_body' => array($this, 'block_TonicManagerAdminTitre_body'),
            'TonicManagerAdmin_body' => array($this, 'block_TonicManagerAdmin_body'),
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
        echo "<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t";
        // line 10
        echo "\t\t<div class=\"col-sm-3 col-md-2 sidebar\">
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Abonnement</li>
\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutAbonnement");
        echo "\">Ajouter un abonnement</a></li>
\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeAbonnement");
        echo "\">Vos abonnements</a></li>
\t\t  </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Option</li>
\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutOption");
        echo "\">Ajouter une option</a></li>
\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeOption");
        echo "\">Vos options</a></li>
\t\t  </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Outils</li>
\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Fréquentations</a></li>
\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Statistique</a></li>
\t\t  </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Utilisateur</li>
\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Ajouter un utilisateur</a></li>
\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Vos utilisateurs</a></li>
\t\t  </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t\t<li style=\"background-color:#30473f; color:white; padding:10px;\">Contact</li>
\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Contactez l'assistance</a></li>
\t\t  </ul>
\t\t</div>


\t\t<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
\t\t  <h1 class=\"page-header\">";
        // line 39
        $this->displayBlock('TonicManagerAdminTitre_body', $context, $blocks);
        echo "</h1>

\t\t  <div class=\"row placeholders\">
\t\t\t\t";
        // line 42
        $this->displayBlock('TonicManagerAdmin_body', $context, $blocks);
        // line 43
        echo "\t
\t\t  </div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 39
    public function block_TonicManagerAdminTitre_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_TonicManagerAdmin_body($context, array $blocks = array())
    {
        echo "\t
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  123 => 39,  114 => 43,  112 => 42,  106 => 39,  97 => 33,  90 => 29,  86 => 28,  79 => 24,  75 => 23,  68 => 19,  64 => 18,  57 => 14,  53 => 13,  48 => 10,  44 => 7,  41 => 6,  34 => 3,  31 => 2,);
    }
}
