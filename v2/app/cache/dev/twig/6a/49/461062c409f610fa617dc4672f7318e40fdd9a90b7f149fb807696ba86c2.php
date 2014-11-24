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
        return array (  114 => 45,  70 => 28,  223 => 144,  218 => 143,  215 => 142,  202 => 132,  192 => 128,  165 => 121,  161 => 120,  152 => 116,  290 => 140,  282 => 138,  256 => 117,  237 => 112,  234 => 111,  205 => 88,  200 => 86,  188 => 127,  185 => 78,  90 => 63,  155 => 94,  150 => 93,  134 => 82,  34 => 7,  100 => 27,  20 => 1,  110 => 43,  77 => 27,  113 => 54,  81 => 56,  118 => 12,  97 => 32,  124 => 78,  84 => 30,  76 => 28,  58 => 18,  53 => 16,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 141,  285 => 139,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 114,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 122,  140 => 55,  132 => 51,  128 => 95,  107 => 42,  61 => 13,  273 => 96,  269 => 128,  254 => 92,  243 => 113,  240 => 86,  238 => 85,  235 => 74,  230 => 110,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 124,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 50,  67 => 20,  63 => 24,  59 => 6,  38 => 8,  94 => 38,  89 => 35,  85 => 29,  75 => 30,  68 => 21,  56 => 25,  87 => 31,  21 => 2,  26 => 12,  93 => 34,  88 => 38,  78 => 24,  46 => 11,  27 => 5,  44 => 26,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 125,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 117,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 47,  105 => 73,  91 => 27,  62 => 21,  49 => 15,  24 => 7,  25 => 3,  19 => 1,  79 => 31,  72 => 22,  69 => 22,  47 => 12,  40 => 24,  37 => 7,  22 => 3,  246 => 90,  157 => 62,  145 => 53,  139 => 50,  131 => 58,  123 => 28,  120 => 77,  115 => 85,  111 => 37,  108 => 36,  101 => 40,  98 => 39,  96 => 69,  83 => 25,  74 => 30,  66 => 27,  55 => 14,  52 => 24,  50 => 10,  43 => 20,  41 => 9,  35 => 8,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 81,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 123,  168 => 72,  164 => 66,  162 => 57,  154 => 58,  149 => 51,  147 => 92,  144 => 49,  141 => 48,  133 => 55,  130 => 96,  125 => 44,  122 => 39,  116 => 35,  112 => 5,  109 => 74,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 68,  86 => 26,  82 => 22,  80 => 25,  73 => 51,  64 => 20,  60 => 26,  57 => 20,  54 => 33,  51 => 16,  48 => 23,  45 => 9,  42 => 10,  39 => 19,  36 => 7,  33 => 7,  30 => 2,);
    }
}
