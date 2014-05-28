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
        return array (  34 => 9,  26 => 6,  19 => 1,  308 => 138,  305 => 137,  301 => 136,  298 => 135,  293 => 128,  290 => 127,  253 => 37,  247 => 34,  242 => 32,  238 => 31,  234 => 30,  230 => 29,  224 => 27,  221 => 26,  214 => 22,  210 => 21,  206 => 20,  202 => 19,  198 => 18,  194 => 17,  188 => 15,  185 => 14,  179 => 12,  156 => 139,  153 => 137,  151 => 135,  144 => 130,  142 => 127,  134 => 122,  128 => 119,  124 => 118,  115 => 112,  111 => 111,  102 => 105,  98 => 104,  88 => 97,  84 => 96,  71 => 89,  50 => 70,  45 => 25,  38 => 12,  25 => 1,  76 => 91,  67 => 15,  61 => 12,  53 => 8,  48 => 26,  46 => 8,  43 => 14,  40 => 12,  33 => 3,  30 => 2,  31 => 3,  28 => 2,);
    }
}
