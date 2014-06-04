<?php

/* ::layout.html.twig */
class __TwigTemplate_c7fca082d8dcbf441a72b1c90874402e5c539999f9fd9030ce0b2b1e90d07fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'printDevis' => array($this, 'block_printDevis'),
            'titleAction' => array($this, 'block_titleAction'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"../../docs-assets/ico/favicon.png\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "\t
\t";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
  </head>

  <body>

<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"></a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
\t\t  <li>
\t\t\t<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/images/tonicmanager.png"), "html", null, true);
        echo "\" style=\"width:90px;\">
\t\t  </li>
            <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_homepage");
        echo "\"><span class=\"icon-home\" ></span> Accueil</a></li>
\t\t\t
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Client <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutContrat");
        echo "\">Nouveau clients</a></li>
                <li><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeClient");
        echo "\">Liste des clients</a></li>
                <li><a href=\"#\">Rechercher un client</a></li>
              </ul>
            </li>
\t\t\t<li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_admin");
        echo "\"><span class=\"glyphicon glyphicon-cog\" ></span> Admin</a></li>\t\t\t
          </ul>
\t\t  <form class=\"navbar-form navbar-right\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
\t\t\t";
        // line 105
        $this->displayBlock('printDevis', $context, $blocks);
        // line 108
        echo "        </div><!--/.nav-collapse -->
      </div>
</div>
\t
<!-- Main jumbotron for a primary marketing message or call to action -->
\t  \t";
        // line 113
        $this->displayBlock('titleAction', $context, $blocks);
        // line 115
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "\t
\t
\t<div id=\"footer\">
      <div class=\"container\">
        <p class=\"text-muted\">&copy; Julien Rochart - 2014 - V2</p>
      </div>
    </div>
\t
\t<!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
\t

\t
  </body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo " Tonic Manager ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t  
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/docs.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t\t\t\t
\t";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>   
\t<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>\t
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/docs.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
\t
\t
\t<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>\t\t
    <script language=\"JavaScript\">
\t\t\$(function() {\t\t
\t\t\$(\"#myTable\").tablesorter({sortList:[[0,0],[2,1]], widgets: ['zebra']});
\t\t\$(\"#options\").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
\t\t});
        function imprime_zone(titre, obj) {
            // Définie la zone à imprimer
            var zi = document.getElementById(obj).innerHTML;

            // Ouvre une nouvelle fenetre
            var f = window.open(\"\", \"ZoneImpr\", \"height=1000, width=1000,toolbar=0, menubar=0, scrollbars=1, resizable=1,status=0, location=0, left=10, top=10\");

            // Définit le Style de la page
            f.document.body.style.color = '#000000';
            f.document.body.style.backgroundColor = '#FFFFFF';
            f.document.body.style.padding = \"10px\";

            // Ajoute les Données
            f.document.title = \"\";
            f.document.body.innerHTML += \" \" + zi + \" \";

            // Imprime et ferme la fenetre
            f.window.print();
            f.window.close();
            return true;
        }
\t\t
\t\t
\t\t

\t</script>\t
\t";
    }

    // line 105
    public function block_printDevis($context, array $blocks = array())
    {
        // line 106
        echo "\t\t
\t\t\t";
    }

    // line 113
    public function block_titleAction($context, array $blocks = array())
    {
        // line 114
        echo "\t\t";
    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        // line 116
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 116,  263 => 115,  259 => 114,  256 => 113,  251 => 106,  248 => 105,  211 => 36,  205 => 33,  200 => 31,  192 => 29,  188 => 28,  172 => 21,  160 => 18,  152 => 16,  146 => 14,  84 => 95,  76 => 90,  114 => 115,  97 => 33,  90 => 29,  53 => 13,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 12,  132 => 51,  128 => 42,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 25,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 88,  67 => 15,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 25,  75 => 23,  68 => 19,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 96,  78 => 21,  46 => 7,  27 => 4,  44 => 7,  31 => 2,  28 => 3,  201 => 92,  196 => 30,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 17,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 117,  105 => 108,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 39,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 31,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 69,  43 => 14,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 26,  176 => 64,  173 => 65,  168 => 20,  164 => 19,  162 => 57,  154 => 58,  149 => 15,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 113,  109 => 34,  106 => 39,  103 => 105,  99 => 31,  95 => 100,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 8,  48 => 25,  45 => 24,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 2,);
    }
}
