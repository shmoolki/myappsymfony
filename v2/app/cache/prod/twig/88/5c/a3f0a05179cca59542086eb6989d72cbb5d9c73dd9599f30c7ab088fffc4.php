<?php

/* PrimeBundle:Default:liste.html.twig */
class __TwigTemplate_885ca3f0a05179cca59542086eb6989d72cbb5d9c73dd9599f30c7ab088fffc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"container\">

        <div class=\"row\">
            <h2 class=\"offset3\">Liste des Primes</h2>
            <div class=\"span9 offset3\">
                ";
        // line 24
        echo "

                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("prime_new");
        echo "\" class=\"span2 offset4 btn btn-success\">Nouvelle   prime</a>
            </div>
        </div> 
        <br />
        <div class=\"row\">
            <div class=\"offset3\">
                <div class=\"well\">
                    <form class=\"form-inline offset1\" action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("prime_recherche");
        echo "\" method=\"post\">

                        <div class=\"control-group\">
                            <div class=\"controls form-inline\">
                                <label for=\"datedeb\">Date debut</label>
                                <input type=\"text\" class=\"input-medium datepicker\"  id=\"datedeb\" name=\"datedeb\">
                                <label for=\"datefin\">Date Fin</label>
                                <input type=\"text\" class=\"input-medium datepicker\"  id=\"datefin\" name=\"datefin\">
                                <input class=\"btn btn-primary\" type =\"submit\" value=\"Rechercher\">
                             
                            </div>
                        </div>
                    </form>
                </div>
            </div> 

        </div> 



        <!--         <div class=\"row\">
                    <div class=\"span3\">
        ";
        // line 55
        $this->env->loadTemplate("::col-left.html.twig")->display($context);
        // line 56
        echo "    </div>
    <div class=\"span9 offset3\" >
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Intervalle d'affichage</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-inline\" id=\"frmDate\" action=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("prime_recherche");
        echo "\" method=\"post\">
                    Form Name
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\" for=\"datedeb\">Entre le</label>  
                        <div class=\"col-md-6\" data-date-format=\"dd-mm-yyyy\">
                            <input id=\"date\" name=\"datedeb\" type=\"text\" placeholder=\"\" class=\"form-control input-md datepicker\" required=\"\"> 

                            <span class=\"add-on\"><i class=\"icon-th\"></i></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-4 control-label\" for=\"datefin\">et le</label>  
                        <div class=\"col-md-6\" data-date-format=\"dd-mm-yyyy\">
                            <input id=\"date\" name=\"datefin\" type=\"text\" placeholder=\"\" class=\"form-control input-md datepicker\" required=\"\"> 

                            <span class=\"add-on\"><i class=\"icon-th\"></i></span>
                        </div>

                    </div>


                    <button type=\"submit\" class=\"btn btn-success\">Afficher</button>
                    <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("prime_new");
        echo "\" class=\" btn btn-primary\">Ajouter une prime</a>
                </form>
            </div>
        </div>

    </div>
</div> -->

        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 95
        $this->env->loadTemplate("::col-left.html.twig")->display($context);
        // line 96
        echo "            </div>

            <div class=\"span9\">

                <br/>    
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Date Debut</th>
                            <th>Date Fin</th>
                            <th>Titre</th>
                            <th>Montant</th>
                            <th>Active (O/N)</th>
                            <th>Affecté à</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                        ";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["primes"]) ? $context["primes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 117
            echo "

                            <tr>
                                <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "primeponctDatedebut"), "d/m/Y H:m"), "html", null, true);
            echo "</td>
                                <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "primeponctDatefin"), "d/m/Y H:m"), "html", null, true);
            echo "</td>
                                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "primeponctTitre"), "html", null, true);
            echo "</td>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "primeponctMontant"), "html", null, true);
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "primeponctDevise"), "deviseHtml");
            echo "</td>
                                <td>";
            // line 124
            echo ((twig_in_filter($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "primeponctActive"), array(0 => 1))) ? ("<i class=\"icon-ok\"></i>") : ("Non Actif"));
            echo "</td>
                                <td><b>";
            // line 125
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "primeponctUtil")) ? (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "primeponctUtil"), "utilLogin"))) : ("Pas Affecté")), "html", null, true);
            echo "</b></td>
                                <td>
                                    <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_edit", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                                    <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_suppr", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                    </tbody>
                </table>


            </div>
        </div>
    </div>


";
    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        // line 143
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker-fr.js"), "html", null, true);
        echo "\"></script> 
    <script>
        \$('.datepicker').datepicker({autoclose: true, todayHighlight: true, format: \"yyyy-mm-dd\", language: \"fr\"});
    </script>
";
    }

    public function getTemplateName()
    {
        return "PrimeBundle:Default:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 144,  218 => 143,  215 => 142,  202 => 132,  192 => 128,  165 => 121,  161 => 120,  152 => 116,  290 => 140,  282 => 138,  256 => 117,  237 => 112,  234 => 111,  205 => 88,  200 => 86,  188 => 127,  185 => 78,  157 => 62,  145 => 53,  90 => 63,  155 => 94,  150 => 93,  96 => 69,  139 => 50,  134 => 82,  34 => 7,  100 => 27,  20 => 1,  110 => 43,  77 => 27,  120 => 77,  113 => 54,  81 => 56,  74 => 30,  118 => 12,  97 => 32,  37 => 7,  124 => 78,  84 => 30,  76 => 28,  58 => 18,  53 => 16,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 141,  285 => 139,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 114,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 122,  140 => 55,  132 => 51,  128 => 95,  111 => 37,  107 => 42,  61 => 13,  273 => 96,  269 => 128,  254 => 92,  246 => 90,  243 => 113,  240 => 86,  238 => 85,  235 => 74,  230 => 110,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 124,  159 => 61,  143 => 56,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 50,  67 => 20,  63 => 24,  59 => 6,  47 => 12,  38 => 8,  94 => 28,  89 => 41,  85 => 29,  79 => 55,  75 => 23,  68 => 21,  56 => 13,  50 => 10,  29 => 2,  87 => 31,  72 => 22,  55 => 14,  21 => 2,  26 => 12,  98 => 36,  93 => 34,  88 => 38,  78 => 24,  46 => 11,  27 => 5,  40 => 24,  44 => 26,  35 => 8,  31 => 6,  43 => 12,  41 => 9,  28 => 5,  201 => 92,  196 => 90,  183 => 125,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 117,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 28,  121 => 46,  117 => 47,  115 => 85,  105 => 73,  101 => 33,  91 => 27,  69 => 22,  66 => 22,  62 => 21,  49 => 15,  24 => 7,  32 => 3,  25 => 3,  22 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 81,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 123,  168 => 72,  164 => 66,  162 => 59,  154 => 58,  149 => 51,  147 => 92,  144 => 49,  141 => 48,  133 => 55,  130 => 96,  125 => 44,  122 => 39,  116 => 35,  112 => 5,  109 => 74,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 68,  86 => 26,  82 => 22,  80 => 25,  73 => 51,  64 => 20,  60 => 19,  57 => 20,  54 => 33,  51 => 16,  48 => 12,  45 => 9,  42 => 10,  39 => 8,  36 => 7,  33 => 7,  30 => 2,);
    }
}
