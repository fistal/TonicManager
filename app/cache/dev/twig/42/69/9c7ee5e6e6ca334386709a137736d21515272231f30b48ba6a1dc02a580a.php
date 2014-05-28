<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_42699c7ee5e6e6ca334386709a137736d21515272231f30b48ba6a1dc02a580a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  148 => 66,  370 => 249,  358 => 240,  349 => 234,  328 => 219,  316 => 210,  307 => 204,  287 => 187,  279 => 182,  267 => 173,  237 => 152,  225 => 143,  216 => 137,  175 => 105,  65 => 18,  195 => 103,  178 => 92,  160 => 80,  97 => 38,  53 => 8,  90 => 29,  308 => 138,  301 => 136,  293 => 128,  290 => 127,  253 => 37,  242 => 32,  234 => 30,  210 => 21,  206 => 20,  202 => 19,  198 => 18,  194 => 17,  188 => 15,  185 => 14,  153 => 89,  134 => 122,  124 => 56,  84 => 31,  76 => 24,  70 => 20,  34 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 255,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 225,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 137,  298 => 135,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 167,  252 => 80,  247 => 34,  241 => 77,  229 => 73,  220 => 70,  214 => 22,  177 => 65,  169 => 86,  140 => 64,  132 => 62,  128 => 119,  107 => 55,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 31,  235 => 74,  230 => 29,  227 => 81,  224 => 27,  221 => 26,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 12,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 105,  71 => 89,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 28,  75 => 32,  68 => 19,  56 => 12,  87 => 32,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 34,  46 => 8,  27 => 4,  44 => 7,  31 => 3,  28 => 2,  201 => 92,  196 => 120,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 139,  151 => 74,  142 => 68,  138 => 54,  136 => 63,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 27,  72 => 24,  69 => 22,  47 => 16,  40 => 6,  37 => 10,  22 => 2,  246 => 158,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 50,  111 => 47,  108 => 36,  101 => 32,  98 => 49,  96 => 31,  83 => 31,  74 => 24,  66 => 26,  55 => 15,  52 => 10,  50 => 70,  43 => 7,  41 => 6,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 114,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 97,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 65,  141 => 80,  133 => 62,  130 => 72,  125 => 44,  122 => 43,  116 => 61,  112 => 42,  109 => 34,  106 => 44,  103 => 42,  99 => 31,  95 => 37,  92 => 33,  86 => 40,  82 => 22,  80 => 25,  73 => 23,  64 => 18,  60 => 6,  57 => 12,  54 => 10,  51 => 8,  48 => 9,  45 => 25,  42 => 7,  39 => 11,  36 => 5,  33 => 3,  30 => 2,);
    }
}
