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
        // line 21
        echo "\t
\t";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
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
          <a class=\"navbar-brand\" href=\"#\">Tonic Manager</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_homepage");
        echo "\"><span class=\"icon-home\" ></span> Accueil</a></li>
\t\t\t
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Client <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Prospect</a></li>
                <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutContrat");
        echo "\">Nouveau contrat</a></li>
                <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeClient");
        echo "\">Liste des clients</a></li>
                <li><a href=\"#\">Rechercher un client</a></li>
              </ul>
            </li>
\t\t\t<li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Abonnement <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutAbonnement");
        echo "\">Ajouter un abonnement</a></li>
                <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeAbonnement");
        echo "\">Vos abonnements</a></li>
              </ul>
            </li>
\t\t\t<li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Option <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutOption");
        echo "\">Ajouter une option</a></li>
                <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeOption");
        echo "\">Vos options</a></li>
              </ul>
            </li>
\t\t\t<li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Outils <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Fréquentations</a></li>
                <li><a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutClient");
        echo "\">Statistique</a></li>
              </ul>
            </li>\t\t\t
          </ul>
\t\t\t";
        // line 111
        $this->displayBlock('printDevis', $context, $blocks);
        // line 114
        echo "        </div><!--/.nav-collapse -->
      </div>
    </div>
\t
<!-- Main jumbotron for a primary marketing message or call to action -->

  
\t  <div class=\"container\">
\t\t";
        // line 122
        $this->displayBlock('titleAction', $context, $blocks);
        // line 124
        echo "\t\t\t";
        // line 125
        echo "\t\t\t";
        // line 126
        echo "\t\t\t";
        // line 127
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "\t  </div>
\t  

\t
\t
\t<div id=\"footer\">
      <div class=\"container\">
        <p class=\"text-muted\">&copy; Julien Rochart - 2014</p>
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
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/docs.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t\t\t
\t";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "\t<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>   
\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>\t
\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/docs.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
\t
\t<script type=\"text/javascript\" src=\"";
        // line 31
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
\t</script>\t
\t";
    }

    // line 111
    public function block_printDevis($context, array $blocks = array())
    {
        // line 112
        echo "\t\t
\t\t\t";
    }

    // line 122
    public function block_titleAction($context, array $blocks = array())
    {
        // line 123
        echo "\t\t";
    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        // line 128
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
        return array (  293 => 128,  290 => 127,  286 => 123,  283 => 122,  278 => 112,  275 => 111,  242 => 31,  237 => 29,  232 => 27,  228 => 26,  224 => 25,  220 => 24,  217 => 23,  214 => 22,  208 => 19,  204 => 18,  200 => 17,  196 => 16,  191 => 15,  188 => 14,  182 => 12,  156 => 129,  153 => 127,  151 => 126,  149 => 125,  147 => 124,  145 => 122,  135 => 114,  133 => 111,  126 => 107,  122 => 106,  113 => 100,  109 => 99,  100 => 93,  96 => 92,  86 => 85,  82 => 84,  78 => 83,  70 => 78,  50 => 60,  48 => 22,  45 => 21,  43 => 14,  38 => 12,  25 => 1,);
    }
}
