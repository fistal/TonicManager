<?php

/* TonicmanagerAppBundle:Default:scanCarte.html.twig */
class __TwigTemplate_5cb8d263ea7e982fec633f04008c292a75ef9a186e25ebef9cdf1eeb919074dc extends Twig_Template
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
\t<h3 class=\"panel-title\">Scan Carte</h3>
  </div>
  <div class=\"panel-body\">
\t\t<form method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_scanClient");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t
\t\t\t
\t\t\t<button type=\"submit\" class=\"btn btn-success\"><span class=\"glyphicon glyphicon-credit-card\"></span></button>
\t\t</form>
  </div>
</div>\t

";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle:Default:scanCarte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  26 => 6,  19 => 1,  293 => 128,  290 => 127,  286 => 123,  283 => 122,  278 => 112,  275 => 111,  242 => 31,  237 => 29,  232 => 27,  228 => 26,  224 => 25,  220 => 24,  217 => 23,  214 => 22,  208 => 19,  204 => 18,  200 => 17,  196 => 16,  191 => 15,  188 => 14,  182 => 12,  156 => 129,  153 => 127,  151 => 126,  149 => 125,  147 => 124,  145 => 122,  135 => 114,  133 => 111,  126 => 107,  122 => 106,  113 => 100,  109 => 99,  100 => 93,  96 => 92,  86 => 85,  82 => 84,  78 => 83,  70 => 78,  50 => 60,  48 => 22,  45 => 21,  38 => 12,  25 => 1,  69 => 19,  60 => 13,  54 => 10,  43 => 14,  40 => 12,  33 => 3,  30 => 2,  31 => 3,  28 => 2,);
    }
}
