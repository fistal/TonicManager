<?php

/* TonicmanagerAppBundle:Client:liste.html.twig */
class __TwigTemplate_98f4e6f35c0c8a9a7a4407f5d75dd124b3583a8f1fc6b85955e6272380630278 extends Twig_Template
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
\t\t\t<h3>Vos clients : <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span></a></h3>
\t\t\t<div>
\t\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clients"));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 11
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
            echo "<br>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Client:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  61 => 11,  57 => 10,  52 => 8,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
