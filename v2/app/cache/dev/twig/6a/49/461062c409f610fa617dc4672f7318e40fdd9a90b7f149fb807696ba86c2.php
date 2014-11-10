<?php

/* PrimeBundle:Default:test.html.twig */
class __TwigTemplate_6a49461062c409f610fa617dc4672f7318e40fdd9a90b7f149fb807696ba86c2 extends Twig_Template
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
        echo "<div class=\"span9\">

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
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["primes"]) ? $context["primes"] : $this->getContext($context, "primes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 20
            echo "

                            <tr>
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctDatedebut"), "d/m/Y H:m"), "html", null, true);
            echo "</td>
                                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctDatefin"), "d/m/Y H:m"), "html", null, true);
            echo "</td>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctTitre"), "html", null, true);
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctMontant"), "html", null, true);
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctDevise"), "deviseHtml");
            echo "</td>
                                <td>";
            // line 27
            echo ((twig_in_filter($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctActive"), array(0 => 1))) ? ("<i class=\"icon-ok\"></i>") : ("Non Actif"));
            echo "</td>
                                <td><b>";
            // line 28
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctUtil")) ? (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "primeponctUtil"), "utilLogin"))) : ("Pas Affecté")), "html", null, true);
            echo "</b></td>
                                <td>
                                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_edit", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prime_suppr", array("id" => $this->getAttribute((isset($context["ligne"]) ? $context["ligne"] : $this->getContext($context, "ligne")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </tbody>
                </table>
                    
                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme")));
        foreach ($context['_seq'] as $context["test"] => $context["test1"]) {
            // line 39
            echo "                        
                           ";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["test1"]) ? $context["test1"] : $this->getContext($context, "test1")), "html", null, true);
            echo " 
                   
                        
                   
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['test'], $context['test1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
            </div>
";
    }

    public function getTemplateName()
    {
        return "PrimeBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 45,  101 => 40,  98 => 39,  94 => 38,  89 => 35,  79 => 31,  75 => 30,  70 => 28,  66 => 27,  60 => 26,  56 => 25,  52 => 24,  48 => 23,  43 => 20,  39 => 19,  19 => 1,);
    }
}
