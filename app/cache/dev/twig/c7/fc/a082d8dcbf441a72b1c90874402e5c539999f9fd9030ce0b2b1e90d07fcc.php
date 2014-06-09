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
        // line 28
        echo "\t
\t";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "\t

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
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/images/tonicmanager.png"), "html", null, true);
        echo "\" style=\"width:90px;\">
\t\t  </li>
            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_homepage");
        echo "\"><span class=\"icon-home\" ></span> Accueil</a></li>
\t\t\t
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"icon-copy\"></span> Client <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_ajoutContrat");
        echo "\">Nouveau clients</a></li>
                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_listeClient");
        echo "\">Liste des clients</a></li>
                <li><a href=\"#\">Rechercher un client</a></li>
              </ul>
            </li>
\t\t\t<li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("tonicmanagerAppBundle_admin");
        echo "\"><span class=\"glyphicon glyphicon-cog\" ></span> Admin</a></li>\t\t\t
          </ul>
\t\t  <form class=\"navbar-form navbar-right\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
\t\t\t";
        // line 74
        $this->displayBlock('printDevis', $context, $blocks);
        // line 77
        echo "        </div><!--/.nav-collapse -->
      </div>
</div>
\t
<!-- Main jumbotron for a primary marketing message or call to action -->
\t  \t";
        // line 82
        $this->displayBlock('titleAction', $context, $blocks);
        // line 84
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 86
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


\t
\t
\t";
        // line 109
        echo "\t
\t";
        // line 111
        echo "\t";
        // line 112
        echo "\t";
        // line 113
        echo "\t";
        // line 114
        echo "\t";
        // line 115
        echo "\t
\t
\t
\t<script type=\"text/javascript\" src=\"";
        // line 118
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

\t\$('.test').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
\t\tautoclose: 1,
\t\ttodayHighlight: 1,
\t\tstartView: 2,
\t\tminView: 2,
\t\tforceParse: 0
    });

\t
\t</script>\t
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
    
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">\t
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/bootstrap/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
\t
\t";
        // line 23
        echo "\t\t
\t";
        // line 24
        echo "\t\t
\t";
        // line 25
        echo "\t\t
\t\t\t\t
\t";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "
\t
\t<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/jquery/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>\t\t\t\t\t\t\t\t\t
\t<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>\t\t\t\t
\t<script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/jquery/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>\t\t\t\t\t
\t<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/jquery/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
\t";
    }

    // line 74
    public function block_printDevis($context, array $blocks = array())
    {
        // line 75
        echo "\t\t
\t\t\t";
    }

    // line 82
    public function block_titleAction($context, array $blocks = array())
    {
        // line 83
        echo "\t\t";
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
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
        return array (  298 => 85,  295 => 84,  291 => 83,  288 => 82,  283 => 75,  280 => 74,  274 => 35,  270 => 34,  266 => 33,  262 => 32,  258 => 30,  255 => 29,  249 => 25,  246 => 24,  243 => 23,  238 => 21,  234 => 20,  230 => 19,  226 => 18,  222 => 17,  218 => 15,  215 => 14,  209 => 12,  159 => 118,  154 => 115,  152 => 114,  150 => 113,  148 => 112,  146 => 111,  143 => 109,  118 => 86,  115 => 84,  113 => 82,  106 => 77,  104 => 74,  96 => 69,  89 => 65,  85 => 64,  77 => 59,  72 => 57,  50 => 37,  48 => 29,  45 => 28,  43 => 14,  38 => 12,  25 => 1,);
    }
}
