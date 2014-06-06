<?php

/* TonicmanagerAppBundle::layout.html.twig */
class __TwigTemplate_90305d3910c664002c7fa8d250b6844063f4650ef26ec0166c2ce4d37759caab extends Twig_Template
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
        echo "<div class=\"container\">
\t";
        // line 8
        $this->displayBlock('NasApp_body', $context, $blocks);
        // line 47
        echo "\t</div>
";
    }

    // line 8
    public function block_NasApp_body($context, array $blocks = array())
    {
        echo "\t
\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TonicmanagerAppBundle:Default:scanCarte"));
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TonicmanagerAppBundle:Default:rechercheClient"));
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TonicmanagerAppBundle:Default:consultation"));
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Statistique</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-lg btn-block\"><span class=\"glyphicon glyphicon-stats\"></span></button>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Fréquentations</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-lg btn-block\"><span class=\"glyphicon glyphicon-transfer\"></span></button>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>

\t\t</div>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "TonicmanagerAppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  61 => 12,  53 => 8,  48 => 47,  46 => 8,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  425 => 291,  413 => 280,  404 => 274,  395 => 268,  383 => 259,  374 => 253,  362 => 244,  353 => 238,  341 => 229,  332 => 223,  311 => 205,  299 => 196,  287 => 187,  278 => 181,  266 => 172,  257 => 166,  245 => 157,  236 => 151,  216 => 134,  207 => 128,  188 => 112,  179 => 106,  167 => 97,  156 => 89,  145 => 81,  133 => 72,  122 => 64,  108 => 53,  99 => 47,  90 => 41,  78 => 32,  67 => 15,  58 => 18,  44 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
