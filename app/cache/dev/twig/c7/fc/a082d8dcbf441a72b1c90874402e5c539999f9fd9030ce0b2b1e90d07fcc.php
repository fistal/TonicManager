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
        // line 23
        echo "\t
\t";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/images/tonicmanager.png"), "html", null, true);
        echo "\" style=\"width:90px;\">
\t\t  </li>
            <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_homepage");
        echo "\"><span class=\"icon-home\" ></span> Accueil</a></li>
\t\t\t
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Client <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutContrat");
        echo "\">Nouveau clients</a></li>
                <li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeClient");
        echo "\">Liste des clients</a></li>
                <li><a href=\"#\">Rechercher un client</a></li>
              </ul>
            </li>
\t\t\t<li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Abonnement <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutAbonnement");
        echo "\">Ajouter un abonnement</a></li>
                <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeAbonnement");
        echo "\">Vos abonnements</a></li>
              </ul>
            </li>
\t\t\t<li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Option <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutOption");
        echo "\">Ajouter une option</a></li>
                <li><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeOption");
        echo "\">Vos options</a></li>
              </ul>
            </li>\t\t
\t\t\t<li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Outils <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Fréquentations</a></li>
                <li><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Statistique</a></li>
              </ul>
            </li>\t\t\t
          </ul>
\t\t  <form class=\"navbar-form navbar-right\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
\t\t\t";
        // line 124
        $this->displayBlock('printDevis', $context, $blocks);
        // line 127
        echo "        </div><!--/.nav-collapse -->
      </div>
    </div>
\t
<!-- Main jumbotron for a primary marketing message or call to action -->

  
\t  <div class=\"container\">
\t\t";
        // line 135
        $this->displayBlock('titleAction', $context, $blocks);
        // line 137
        echo "\t\t\t";
        // line 138
        echo "\t\t\t";
        // line 139
        echo "\t\t\t";
        // line 140
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "\t  </div>
\t  

\t
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
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/docs.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t\t\t\t
\t";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>   
\t<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>\t
\t<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/docs.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
\t
\t
\t<script type=\"text/javascript\" src=\"";
        // line 35
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

    // line 124
    public function block_printDevis($context, array $blocks = array())
    {
        // line 125
        echo "\t\t
\t\t\t";
    }

    // line 135
    public function block_titleAction($context, array $blocks = array())
    {
        // line 136
        echo "\t\t";
    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        // line 141
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
        return array (  311 => 141,  308 => 140,  304 => 136,  301 => 135,  296 => 125,  293 => 124,  256 => 35,  250 => 32,  245 => 30,  241 => 29,  237 => 28,  233 => 27,  227 => 25,  224 => 24,  217 => 20,  213 => 19,  209 => 18,  205 => 17,  201 => 16,  196 => 15,  193 => 14,  187 => 12,  161 => 142,  158 => 140,  156 => 139,  154 => 138,  152 => 137,  150 => 135,  140 => 127,  138 => 124,  128 => 117,  124 => 116,  115 => 110,  111 => 109,  102 => 103,  98 => 102,  88 => 95,  84 => 94,  76 => 89,  71 => 87,  50 => 68,  48 => 24,  45 => 23,  43 => 14,  38 => 12,  25 => 1,);
    }
}
