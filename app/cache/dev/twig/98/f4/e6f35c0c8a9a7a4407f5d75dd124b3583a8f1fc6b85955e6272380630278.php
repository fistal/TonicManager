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
\t\t<div class=\"panel panel-primary\">
\t\t\t  <div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">Vos clients <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutContrat");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span></a></h3>
\t\t\t  </div>
\t\t\t  <div class=\"panel-body\">\t\t
\t\t\t\t<table class=\"table table-hover\" id=\"myTable\">
\t\t\t\t\t<thead>
\t\t\t\t\t  <tr>
\t\t\t\t\t\t<th class=\"header\">Nom</th>
\t\t\t\t\t\t<th class=\"header\">Prénom</th>\t\t\t
\t\t\t\t\t\t<th></th>
\t\t\t\t\t  </tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clients"));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 23
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ficheContrat", array("idClient" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\">Editer</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>\t\t\t\t\t  
\t\t\t  </div>
\t\t</div>\t\t
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
        return array (  93 => 29,  84 => 26,  80 => 25,  76 => 24,  73 => 23,  69 => 22,  54 => 10,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
