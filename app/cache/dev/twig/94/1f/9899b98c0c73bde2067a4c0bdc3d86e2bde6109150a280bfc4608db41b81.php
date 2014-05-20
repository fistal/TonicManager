<?php

/* TonicmanagerAppBundle:Default:consultation.html.twig */
class __TwigTemplate_941f9899b98c0c73bde2067a4c0bdc3d86e2bde6109150a280bfc4608db41b81 extends Twig_Template
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
\t<h3 class=\"panel-title\">Consulation</h3>
  </div>
  <div class=\"panel-body\">
\t\t<form method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_consultation");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "id"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t
\t\t\t
\t\t\t<button type=\"submit\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-eye-open\"></span></button>
\t\t</form>
  </div>
</div>\t

";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Default:consultation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  34 => 9,  26 => 6,  19 => 1,);
    }
}
