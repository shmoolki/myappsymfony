<?php

/* PrimeBundle:Default:fichePrime.html.twig */
class __TwigTemplate_b30f8d9cf29a3c51bf4699801f494274c26f71f817f96adaf17fda9b7cd8b59a extends Twig_Template
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
        // line 8
        $this->env->loadTemplate("::col-left.html.twig")->display($context);
        // line 9
        echo "            </div>

            <div class=\"span9\">

                <h2>Gestion des Primes ponctuelles</h2>
                <hr />
                ";
        // line 15
        if (array_key_exists("message", $context)) {
            // line 16
            echo "                    <div class=\"alert alert-success\"><strong>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</strong></div>
                        ";
        }
        // line 18
        echo "                <div class=\"span4\">
                    <form action = \"";
        // line 19
        if (array_key_exists("new", $context)) {
            echo " 
                          ";
            // line 20
            echo $this->env->getExtension('routing')->getPath("prime_insert");
            echo " 
                          ";
        } else {
            // line 22
            echo "                              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_valid_modif", array("id" => $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "id"))), "html", null, true);
            echo "
                              ";
        }
        // line 23
        echo "\" method=\"POST\" >
                                  ";
        // line 24
        if ((!(null === $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctUtil")))) {
            // line 25
            echo "                                      <div class=\"alert alert-info\">Prime affectée à <strong>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctUtil"), "utilLogin")), "html", null, true);
            echo "</strong></div>
                                  ";
        }
        // line 26
        echo "                                  
                                  <label>Montant</label>
                                  <input type=\"text\" name=\"montant\" required id=\"montant\" value=";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctMontant")) ? ($this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctMontant")) : ("")), "html", null, true);
        echo ">
                                  <label>Devise</label>
                                                                 
                                      <select name=\"devise\">
                                          ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devises"]) ? $context["devises"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["devise"]) {
            // line 33
            echo "                                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : null), "id"), "html", null, true);
            echo "\" ";
            if (((!array_key_exists("new", $context)) && ($this->getAttribute($this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctDevise"), "id") == $this->getAttribute((isset($context["devise"]) ? $context["devise"] : null), "id")))) {
                echo "selected";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : null), "deviseTitre"), "html", null, true);
            echo "</option>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                      </select>                                  
                                 
                                  <hr>
                                  <label>Date debut</label>
                                  <input type=\"text\" class=\"form-control  datepicker\" required=\"\" name=\"datedebut\" id=\"datedebut\" value=";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctDatedebut"), "Y-m-d"), "html", null, true);
        echo ">
                                  <label>Heure</label>
                                  <div id=\"datetimepicker2\" class=\"input-append\">
                                      <input data-format=\"hh:mm:ss\" type=\"text\" required name=\"heuredebut\" value=";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctDatedebut"), "H:i"), "html", null, true);
        echo ":00></input>
                                      <span class=\"add-on\">
                                          <i data-time-icon=\"icon-time\" data-date-icon=\"icon-calendar\">
                                          </i>
                                      </span>
                                  </div>
                                  <hr>
                                  <label>Date fin</label>
                                  <input type=\"text\" class=\"form-control  datepicker\" required=\"\" name=\"datefin\" id=\"datefin\" value=";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctDatefin"), "Y-m-d"), "html", null, true);
        echo ">
                                  <label>Heure</label>
                                  <div id=\"datetimepicker3\" class=\"input-append\">
                                      <input data-format=\"hh:mm:ss\" type=\"text\" required name=\"heurefin\" value=";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctDatefin"), "H:i"), "html", null, true);
        echo ":00></input>
                                      <span class=\"add-on\">
                                          <i data-time-icon=\"icon-time\" data-date-icon=\"icon-calendar\">
                                          </i>
                                      </span>
                                  </div>

                                  <hr>
                                  <label>Titre</label>
                                  <input type=\"text\" name=\"titre\" id=\"titre\" required value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctTitre"), "html", null, true);
        echo "\">

                                  <label>Actif</label>
                                           
                                  <input type=\"checkbox\" name=\"actif\" id=\"actif\" ";
        // line 66
        echo (($this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctActive")) ? ("checked") : (""));
        echo ">                                  
                                 

                                  <label>Description</label>
                                  <textarea name=\"descriptif\" id=\"descriptif\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctDescriptif"), "html", null, true);
        echo "</textarea>



                                  <br />
                                  ";
        // line 75
        if (array_key_exists("new", $context)) {
            echo " 
                                      <button name=\"ajouter\" value=\"ajouter\" class=\"btn btn-primary\">Ajouter</button>     
                                  ";
        } else {
            // line 78
            echo "                                      <button name=\"enr\" value=\"enr\" class=\"btn btn-success\">Enregistrer</button>
                                      <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_suppr", array("id" => $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
                                  ";
        }
        // line 81
        echo "


                              </form>
                          </div>
                          ";
        // line 86
        if ((!array_key_exists("new", $context))) {
            echo " 
                              <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                                  ";
            // line 88
            echo (($this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "primeponctUtil")) ? ("Modifier affectation") : ("Affecter la prime à un TA"));
            echo "

                              </button>

                              <!-- Modal -->
                              <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                  <div class=\"modal-dialog\">
                                      <div class=\"modal-content\">
                                          <div class=\"modal-header\">
                                              <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                              <h4 class=\"modal-title\" id=\"myModalLabel\">Choisissez un TA</h4>
                                          </div>
                                          <div class=\"modal-body\">
                                              <table class=\"table table-striped table-hover\">
                                                  <thead>
                                                      <tr>
                                                          <th>Login</th>
                                                          <th>Nom</th>
                                                          <th>Prenom</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["util"]) {
                // line 111
                echo "                                                          <tr>
                                                              <td><a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_affectation", array("myprime" => $this->getAttribute((isset($context["prime"]) ? $context["prime"] : null), "id"), "myutil" => $this->getAttribute((isset($context["util"]) ? $context["util"] : null), "id"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["util"]) ? $context["util"] : null), "utilLogin"), "html", null, true);
                echo "</a></td>
                                                              <td>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["util"]) ? $context["util"] : null), "utilNom"), "html", null, true);
                echo "</td>
                                                              <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["util"]) ? $context["util"] : null), "utilPrenom"), "html", null, true);
                echo "</td>                                                         
                                                          </tr>
                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['util'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                                  </tbody>
                                              </table>
                                          </div>
                                          <div class=\"modal-footer\">
                                              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          ";
        }
        // line 128
        echo "                    </div>
                </div>

            </div>





            ";
    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        // line 139
        echo "                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker-fr.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script> 
                    <script>
                        \$('.datepicker').datepicker({autoclose: true, todayHighlight: true, format: \"yyyy-mm-dd\", language: \"fr\"});
                        \$(function() {
                            \$('#datetimepicker3').datetimepicker({
                                pickDate: false
                            });
                            \$('#datetimepicker2').datetimepicker({
                                pickDate: false
                            });
                        });
                    </script>
                ";
    }

    public function getTemplateName()
    {
        return "PrimeBundle:Default:fichePrime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 140,  282 => 138,  256 => 117,  237 => 112,  234 => 111,  205 => 88,  200 => 86,  188 => 79,  185 => 78,  157 => 62,  145 => 53,  90 => 28,  155 => 94,  150 => 93,  96 => 69,  139 => 50,  134 => 82,  34 => 7,  100 => 27,  20 => 1,  110 => 43,  77 => 27,  120 => 77,  113 => 54,  81 => 28,  74 => 30,  118 => 12,  97 => 32,  37 => 7,  124 => 78,  84 => 30,  76 => 28,  58 => 18,  53 => 16,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 141,  285 => 139,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 114,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 42,  111 => 37,  107 => 42,  61 => 13,  273 => 96,  269 => 128,  254 => 92,  246 => 90,  243 => 113,  240 => 86,  238 => 85,  235 => 74,  230 => 110,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 56,  135 => 53,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 50,  67 => 20,  63 => 24,  59 => 6,  47 => 12,  38 => 8,  94 => 28,  89 => 41,  85 => 29,  79 => 18,  75 => 23,  68 => 21,  56 => 13,  50 => 10,  29 => 2,  87 => 31,  72 => 22,  55 => 14,  21 => 2,  26 => 12,  98 => 36,  93 => 34,  88 => 38,  78 => 24,  46 => 11,  27 => 5,  40 => 24,  44 => 26,  35 => 8,  31 => 6,  43 => 12,  41 => 9,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 28,  121 => 46,  117 => 47,  115 => 75,  105 => 73,  101 => 33,  91 => 27,  69 => 22,  66 => 15,  62 => 19,  49 => 15,  24 => 7,  32 => 3,  25 => 3,  22 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 81,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 66,  162 => 59,  154 => 58,  149 => 51,  147 => 92,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 39,  116 => 35,  112 => 5,  109 => 74,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 68,  86 => 26,  82 => 22,  80 => 25,  73 => 51,  64 => 20,  60 => 19,  57 => 18,  54 => 16,  51 => 16,  48 => 12,  45 => 9,  42 => 10,  39 => 8,  36 => 7,  33 => 7,  30 => 2,);
    }
}
