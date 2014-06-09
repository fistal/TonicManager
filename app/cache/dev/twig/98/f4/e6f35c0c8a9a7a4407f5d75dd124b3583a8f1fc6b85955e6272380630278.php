<?php

/* TonicmanagerAppBundle:Client:liste.html.twig */
class __TwigTemplate_98f4e6f35c0c8a9a7a4407f5d75dd124b3583a8f1fc6b85955e6272380630278 extends Twig_Template
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
\t<div class=\"panel panel-primary\">
\t\t  <div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">Vos clients <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutContrat");
        echo "\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-plus\"></span></a></h3>
\t\t  </div>
\t\t  <div class=\"panel-body\">\t\t
\t\t\t<table class=\"table table-hover\" id=\"myTable\">
\t\t\t\t<thead>
\t\t\t\t  <tr>
\t\t\t\t\t<th class=\"header\">Nom</th>
\t\t\t\t\t<th class=\"header\">Prénom</th>\t\t\t
\t\t\t\t\t<th></th>
\t\t\t\t  </tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clients"));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a class=\"btn btn-warning\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ficheContrat", array("idClient" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\">Editer</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</tbody>
\t\t\t</table>\t\t\t\t\t  
\t\t  </div>
\t</div>\t\t
";
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
        return array (  85 => 28,  76 => 25,  72 => 24,  68 => 23,  65 => 22,  61 => 21,  46 => 9,  39 => 6,  32 => 3,  29 => 2,);
    }
}
