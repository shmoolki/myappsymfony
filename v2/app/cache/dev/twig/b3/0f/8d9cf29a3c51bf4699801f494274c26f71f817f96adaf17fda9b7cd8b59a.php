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
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_valid_modif", array("id" => $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "id"))), "html", null, true);
            echo "
                              ";
        }
        // line 23
        echo "\" method=\"POST\" >
                                  ";
        // line 24
        if ((!(null === $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctUtil")))) {
            // line 25
            echo "                                      <div class=\"alert alert-info\">Prime affectée à <strong>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctUtil"), "utilLogin")), "html", null, true);
            echo "</strong></div>
                                  ";
        }
        // line 26
        echo "                                  
                                  <label>Montant</label>
                                  <input type=\"text\" name=\"montant\" required id=\"montant\" value=";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctMontant")) ? ($this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctMontant")) : ("")), "html", null, true);
        echo ">
                                  <label>Devise</label>
                                                                 
                                      <select name=\"devise\">
                                          ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devises"]) ? $context["devises"] : $this->getContext($context, "devises")));
        foreach ($context['_seq'] as $context["_key"] => $context["devise"]) {
            // line 33
            echo "                                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "id"), "html", null, true);
            echo "\" ";
            if (((!array_key_exists("new", $context)) && ($this->getAttribute($this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctDevise"), "id") == $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "id")))) {
                echo "selected";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "deviseTitre"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctDatedebut"), "Y-m-d"), "html", null, true);
        echo ">
                                  <label>Heure</label>
                                  <div id=\"datetimepicker2\" class=\"input-append\">
                                      <input data-format=\"hh:mm:ss\" type=\"text\" required name=\"heuredebut\" value=";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctDatedebut"), "H:i"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctDatefin"), "Y-m-d"), "html", null, true);
        echo ">
                                  <label>Heure</label>
                                  <div id=\"datetimepicker3\" class=\"input-append\">
                                      <input data-format=\"hh:mm:ss\" type=\"text\" required name=\"heurefin\" value=";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctDatefin"), "H:i"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctTitre"), "html", null, true);
        echo "\">

                                  <label>Actif</label>
                                           
                                  <input type=\"checkbox\" name=\"actif\" id=\"actif\" ";
        // line 66
        echo (($this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctActive")) ? ("checked") : (""));
        echo ">                                  
                                 

                                  <label>Description</label>
                                  <textarea name=\"descriptif\" id=\"descriptif\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctDescriptif"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_suppr", array("id" => $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "id"))), "html", null, true);
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
            echo (($this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "primeponctUtil")) ? ("Modifier affectation") : ("Affecter la prime à un TA"));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["util"]) {
                // line 111
                echo "                                                          <tr>
                                                              <td><a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_affectation", array("myprime" => $this->getAttribute((isset($context["prime"]) ? $context["prime"] : $this->getContext($context, "prime")), "id"), "myutil" => $this->getAttribute((isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")), "id"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")), "utilLogin"), "html", null, true);
                echo "</a></td>
                                                              <td>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")), "utilNom"), "html", null, true);
                echo "</td>
                                                              <td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")), "utilPrenom"), "html", null, true);
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
        return array (  294 => 141,  290 => 140,  285 => 139,  282 => 138,  269 => 128,  256 => 117,  247 => 114,  243 => 113,  237 => 112,  234 => 111,  230 => 110,  205 => 88,  200 => 86,  193 => 81,  188 => 79,  185 => 78,  179 => 75,  171 => 70,  164 => 66,  157 => 62,  145 => 53,  139 => 50,  128 => 42,  122 => 39,  116 => 35,  101 => 33,  97 => 32,  90 => 28,  86 => 26,  80 => 25,  78 => 24,  75 => 23,  69 => 22,  64 => 20,  60 => 19,  57 => 18,  51 => 16,  49 => 15,  41 => 9,  39 => 8,  32 => 3,  29 => 2,);
    }
}
