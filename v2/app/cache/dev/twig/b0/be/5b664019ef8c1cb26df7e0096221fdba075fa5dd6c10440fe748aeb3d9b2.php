<?php

/* PayeBundle:Default:test.html.twig */
class __TwigTemplate_b0be5b664019ef8c1cb26df7e0096221fdba075fa5dd6c10440fe748aeb3d9b2 extends Twig_Template
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
            <div class=\"span3\">
                ";
        // line 10
        $this->env->loadTemplate("::col-left.html.twig")->display($context);
        // line 11
        echo "            </div>


            <div class=\"span9\">

                <br/>    
                <!-- Nav tabs -->
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"#home\" role=\"tab\" data-toggle=\"tab\">Informations generales</a></li>
                    <li><a href=\"#depots\" role=\"tab\" data-toggle=\"tab\">Depots</a></li>
                    <li><a href=\"#retraits\" role=\"tab\" data-toggle=\"tab\">Retraits</a></li>
                    <li><a href=\"#horaires\" role=\"tab\" data-toggle=\"tab\">Horaires</a></li>
                    <li><a href=\"#primes\" role=\"tab\" data-toggle=\"tab\">Primes</a></li>
                </ul>

                <!-- Tab panes -->
                <div class=\"tab-content\">

                    <div class=\"tab-pane active\" id=\"home\">


                    </div>

                    <div class=\"tab-pane\" id=\"depots\">




                        <br/>   
                        <div class=\"span7\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Montant</th>
                                        <th>FD</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depots"]) ? $context["depots"] : $this->getContext($context, "depots")));
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 55
            echo "

                                        <tr>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["depot"]) ? $context["depot"] : $this->getContext($context, "depot")), "depotDate"), "d/m/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["depot"]) ? $context["depot"] : $this->getContext($context, "depot")), "depotClient"), "clientNom"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["depot"]) ? $context["depot"] : $this->getContext($context, "depot")), "depotMontant")), "html", null, true);
            echo " Euros</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["depot"]) ? $context["depot"] : $this->getContext($context, "depot")), "depotFirstdeposit"), "html", null, true);
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                </tbody>
                            </table>
                            ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["cumul"]) ? $context["cumul"] : $this->getContext($context, "cumul")), "html", null, true);
        echo "


                        </div>
                    </div>


                    <div class=\"tab-pane\" id=\"retraits\">
                        <div class=\"span7\">
                            <br/>    
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Montant</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retraits"]) ? $context["retraits"] : $this->getContext($context, "retraits")));
        foreach ($context['_seq'] as $context["_key"] => $context["retrait"]) {
            // line 89
            echo "

                                        <tr>
                                            <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["retrait"]) ? $context["retrait"] : $this->getContext($context, "retrait")), "retraitDate"), "d/m/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["retrait"]) ? $context["retrait"] : $this->getContext($context, "retrait")), "retraitClient"), "clientNom"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["retrait"]) ? $context["retrait"] : $this->getContext($context, "retrait")), "retraitMontant")), "html", null, true);
            echo " Euros</td>

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retrait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"horaires\">



                        <br/>    
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Date </th>
                                    <th>Heure Debut</th>
                                    <th>Heure Fin</th>
                                    <th>Nombre d'heures</th>
                                    <th>Code TA</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 119
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horaires"]) ? $context["horaires"] : $this->getContext($context, "horaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 120
            echo "                                    <tr>
                                        <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "pointDate"), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "pointHdebut"), "H:m"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "pointHfin"), "H:m"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "pointNbh"), "H:m"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "pointUtil"), "utilLogin"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                            </tbody>
                        </table>

                        <h4>Cumul Horaire pour la peride définie : <strong>";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["cumul"]) ? $context["cumul"] : $this->getContext($context, "cumul")), "html", null, true);
        echo "</strong></h4>







                    </div>

                    <div class=\"tab-pane\" id=\"primes\">

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
        // line 160
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["primes"]) ? $context["primes"] : $this->getContext($context, "primes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 161
            echo "

                                    <tr>
                                        <td>";
            // line 164
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctDatedebut"), "d/m/Y H:m"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 165
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctDatefin"), "d/m/Y H:m"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctTitre"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctMontant")), "html", null, true);
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctDevise"), "deviseHtml");
            echo "</td>
                                        <td>";
            // line 168
            echo ((twig_in_filter($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctActive"), array(0 => 1))) ? ("<i class=\"icon-ok\"></i>") : ("Non Actif"));
            echo "</td>
                                        <td><b>";
            // line 169
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctUtil")) ? (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctUtil"), "utilLogin"))) : ("Pas Affecté")), "html", null, true);
            echo "</b></td>
                                        <td>
                                            <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_edit", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                                            <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_suppr", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                            </tbody>
                        </table>
                   

                
                        <table class=\"table span3\">
                             <thead>
                                <tr>
                               
                                    <th><h4>Recapitulatif des primes</h4></th>
                                    
                                </tr>
                            </thead>
                            
                            ";
        // line 190
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme")));
        foreach ($context['_seq'] as $context["test"] => $context["test1"]) {
            // line 191
            echo "                                <tr>
                               
                                    <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["test1"]) ? $context["test1"] : $this->getContext($context, "test1"))), "html", null, true);
            echo "&nbsp;";
            echo (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test"));
            echo "</td>
                                </tr>  
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['test'], $context['test1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo " 
                        </table>


                    </div>
                </div>


            </div>

        </div>







    </div>


";
    }

    // line 217
    public function block_javascripts($context, array $blocks = array())
    {
        // line 218
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker-fr.js"), "html", null, true);
        echo "\"></script> 
    <script>
        \$('.datepicker').datepicker({autoclose: true, todayHighlight: true, format: \"yyyy-mm-dd\", language: \"fr\"});
    </script>
";
    }

    public function getTemplateName()
    {
        return "PayeBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 217,  351 => 195,  340 => 193,  336 => 191,  332 => 190,  316 => 176,  306 => 172,  302 => 171,  297 => 169,  293 => 168,  287 => 167,  279 => 165,  275 => 164,  270 => 161,  266 => 160,  216 => 124,  212 => 123,  197 => 119,  174 => 98,  160 => 93,  114 => 45,  70 => 28,  223 => 144,  218 => 143,  215 => 142,  202 => 132,  192 => 128,  165 => 121,  161 => 120,  152 => 116,  290 => 140,  282 => 138,  256 => 117,  237 => 112,  234 => 131,  205 => 88,  200 => 86,  188 => 127,  185 => 78,  90 => 63,  155 => 94,  150 => 93,  134 => 82,  34 => 7,  100 => 27,  20 => 1,  110 => 43,  77 => 27,  113 => 54,  81 => 56,  118 => 64,  97 => 58,  124 => 78,  84 => 30,  76 => 28,  58 => 18,  53 => 16,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 219,  381 => 120,  379 => 218,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 141,  285 => 139,  283 => 166,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 114,  241 => 77,  229 => 128,  220 => 125,  214 => 69,  177 => 65,  169 => 122,  140 => 55,  132 => 51,  128 => 95,  107 => 42,  61 => 13,  273 => 96,  269 => 128,  254 => 92,  243 => 113,  240 => 86,  238 => 85,  235 => 74,  230 => 110,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 122,  204 => 121,  179 => 124,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 50,  67 => 20,  63 => 24,  59 => 6,  38 => 8,  94 => 38,  89 => 35,  85 => 29,  75 => 30,  68 => 21,  56 => 25,  87 => 31,  21 => 2,  26 => 12,  93 => 34,  88 => 54,  78 => 24,  46 => 11,  27 => 5,  44 => 26,  31 => 6,  28 => 5,  201 => 120,  196 => 90,  183 => 125,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 92,  151 => 89,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 47,  105 => 60,  91 => 27,  62 => 21,  49 => 15,  24 => 7,  25 => 3,  19 => 1,  79 => 31,  72 => 22,  69 => 22,  47 => 12,  40 => 24,  37 => 7,  22 => 3,  246 => 90,  157 => 62,  145 => 53,  139 => 50,  131 => 58,  123 => 28,  120 => 77,  115 => 85,  111 => 37,  108 => 36,  101 => 59,  98 => 39,  96 => 69,  83 => 25,  74 => 30,  66 => 27,  55 => 14,  52 => 24,  50 => 10,  43 => 11,  41 => 10,  35 => 8,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 81,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 123,  168 => 72,  164 => 94,  162 => 57,  154 => 58,  149 => 51,  147 => 88,  144 => 49,  141 => 48,  133 => 55,  130 => 96,  125 => 44,  122 => 66,  116 => 35,  112 => 5,  109 => 61,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 55,  86 => 26,  82 => 22,  80 => 25,  73 => 51,  64 => 20,  60 => 26,  57 => 20,  54 => 33,  51 => 16,  48 => 23,  45 => 9,  42 => 10,  39 => 19,  36 => 7,  33 => 7,  30 => 2,);
    }
}
