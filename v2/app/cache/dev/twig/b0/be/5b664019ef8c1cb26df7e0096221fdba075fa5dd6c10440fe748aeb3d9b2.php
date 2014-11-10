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
        return array (  384 => 219,  379 => 218,  376 => 217,  351 => 195,  340 => 193,  336 => 191,  332 => 190,  316 => 176,  306 => 172,  302 => 171,  297 => 169,  293 => 168,  287 => 167,  283 => 166,  279 => 165,  275 => 164,  270 => 161,  266 => 160,  234 => 131,  229 => 128,  220 => 125,  216 => 124,  212 => 123,  208 => 122,  204 => 121,  201 => 120,  197 => 119,  174 => 98,  164 => 94,  160 => 93,  156 => 92,  151 => 89,  147 => 88,  122 => 66,  118 => 64,  109 => 61,  105 => 60,  101 => 59,  97 => 58,  92 => 55,  88 => 54,  43 => 11,  41 => 10,  32 => 3,  29 => 2,);
    }
}
