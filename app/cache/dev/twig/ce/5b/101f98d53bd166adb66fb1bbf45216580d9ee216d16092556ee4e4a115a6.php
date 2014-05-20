<?php

/* TonicmanagerAppBundle:Client:detail.html.twig */
class __TwigTemplate_ce5b101f98d53bd166adb66fb1bbf45216580d9ee216d16092556ee4e4a115a6 extends Twig_Template
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
\t\t\t<h3>Fiche ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "id"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
        echo "</h3>
\t\t\t<div>
\t\t\t\tCONTENU DE LA FICHE
\t\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Client:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
