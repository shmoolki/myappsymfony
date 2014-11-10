<?php

/* ComptabiliteBundle:Default:frais.html.twig */
class __TwigTemplate_4eefcbea591a53f4829243d58a1c0278741db5bbec109287a412316c458b214b extends Twig_Template
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
            <h2 class=\"offset3\">Liste des Frais</h2>
            <div class=\"span9 offset3\">
                ";
        // line 24
        echo "

                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("frais_new");
        echo "\" class=\"span2 offset4 btn btn-primary\">Ajouter des frais</a>
            </div>
        </div> 
            <br />
        <div class=\"row\">
            <div class=\"offset2\">
                <form class=\"form-horizontal\">

                    <div class=\"control-group\">
                        <div class=\"controls form-inline\">
                            <label for=\"datedeb\">Date debut</label>
                            <input type=\"text\" class=\"input-medium datepicker\"  id=\"datedeb\">
                            <label for=\"datefin\">Date Fin</label>
                            <input type=\"text\" class=\"input-medium datepicker\"  id=\"datefin\">
                        </div>
                    </div>
                </form>
                
            </div>      
        </div>   


        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 50
        $this->env->loadTemplate("::col-left.html.twig")->display($context);
        // line 51
        echo "            </div>
            <div class=\"span9\">

                <br/>    
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Titre</th>
                            <th>Montant</th>
                            <th>Fixe (O/N)</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                        ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) ? $context["frais"] : $this->getContext($context, "frais")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 69
            echo "

                            <tr>
                                <td><a href=\"#\">";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "fraisDate"), "d/m/Y"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "fraisTitre"), "html", null, true);
            echo "</td>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "fraisMontant"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "fraisDevise"), "deviseHtml"), "html", null, true);
            echo "</td>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "fraisFixe"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frais_modif", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                                    <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frais_suppr", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                    </tbody>
                </table>


            </div>
        </div>
    </div>


";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker-fr.js"), "html", null, true);
        echo "\"></script> 
    <script>
        \$('.datepicker').datepicker({autoclose: true, todayHighlight: true, format: \"yyyy-mm-dd\", language: \"fr\"});

    </script>
";
    }

    public function getTemplateName()
    {
        return "ComptabiliteBundle:Default:frais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 94,  150 => 93,  147 => 92,  134 => 82,  124 => 78,  120 => 77,  115 => 75,  109 => 74,  105 => 73,  101 => 72,  96 => 69,  92 => 68,  73 => 51,  71 => 50,  44 => 26,  40 => 24,  32 => 3,  29 => 2,);
    }
}
