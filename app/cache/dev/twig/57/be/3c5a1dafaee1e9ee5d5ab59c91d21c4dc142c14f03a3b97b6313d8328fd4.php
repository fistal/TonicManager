<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_57be3c5a1dafaee1e9ee5d5ab59c91d21c4dc142c14f03a3b97b6313d8328fd4 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  118 => 49,  104 => 42,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  213 => 78,  200 => 72,  194 => 70,  191 => 77,  165 => 60,  153 => 69,  150 => 55,  134 => 54,  113 => 48,  81 => 23,  127 => 60,  110 => 22,  137 => 65,  77 => 29,  425 => 291,  404 => 274,  395 => 268,  383 => 259,  353 => 238,  332 => 223,  311 => 205,  299 => 196,  266 => 172,  257 => 166,  236 => 151,  216 => 79,  207 => 75,  188 => 76,  167 => 71,  58 => 17,  65 => 22,  195 => 103,  160 => 80,  124 => 56,  70 => 19,  302 => 123,  295 => 121,  290 => 114,  287 => 187,  249 => 45,  245 => 157,  231 => 35,  225 => 32,  205 => 23,  202 => 22,  197 => 71,  185 => 75,  181 => 65,  178 => 64,  172 => 62,  84 => 24,  76 => 31,  114 => 123,  97 => 41,  90 => 27,  53 => 12,  34 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 280,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 253,  368 => 112,  365 => 111,  362 => 244,  360 => 109,  355 => 143,  341 => 229,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 124,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 44,  241 => 90,  229 => 85,  220 => 81,  214 => 28,  177 => 65,  169 => 86,  140 => 55,  132 => 51,  128 => 42,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 48,  243 => 42,  240 => 86,  238 => 39,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 31,  219 => 76,  217 => 29,  208 => 24,  204 => 78,  179 => 106,  159 => 61,  143 => 56,  135 => 62,  119 => 40,  102 => 41,  71 => 23,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 20,  85 => 32,  75 => 23,  68 => 22,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 39,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 7,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 62,  158 => 79,  156 => 58,  151 => 74,  142 => 68,  138 => 56,  136 => 56,  121 => 50,  117 => 19,  105 => 34,  91 => 27,  62 => 20,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 26,  72 => 24,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 56,  145 => 67,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 50,  111 => 47,  108 => 19,  101 => 43,  98 => 31,  96 => 37,  83 => 33,  74 => 27,  66 => 15,  55 => 16,  52 => 14,  50 => 77,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 19,  189 => 18,  187 => 98,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 68,  147 => 54,  144 => 49,  141 => 51,  133 => 72,  130 => 46,  125 => 51,  122 => 64,  116 => 39,  112 => 121,  109 => 49,  106 => 45,  103 => 113,  99 => 31,  95 => 108,  92 => 21,  86 => 28,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 19,  57 => 12,  54 => 10,  51 => 8,  48 => 9,  45 => 10,  42 => 7,  39 => 11,  36 => 5,  33 => 4,  30 => 3,);
    }
}
