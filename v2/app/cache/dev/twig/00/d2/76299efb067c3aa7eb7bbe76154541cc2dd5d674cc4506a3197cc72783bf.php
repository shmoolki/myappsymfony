<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_00d276299efb067c3aa7eb7bbe76154541cc2dd5d674cc4506a3197cc72783bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  223 => 144,  218 => 143,  215 => 142,  202 => 132,  192 => 128,  165 => 121,  161 => 120,  152 => 116,  290 => 140,  282 => 138,  256 => 117,  237 => 112,  234 => 111,  205 => 88,  200 => 86,  188 => 127,  185 => 78,  90 => 32,  155 => 94,  150 => 93,  134 => 82,  34 => 7,  100 => 27,  20 => 1,  110 => 22,  77 => 27,  113 => 54,  81 => 56,  118 => 12,  97 => 32,  124 => 78,  84 => 29,  76 => 17,  58 => 18,  53 => 11,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 141,  285 => 139,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 114,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 122,  140 => 55,  132 => 51,  128 => 95,  107 => 42,  61 => 12,  273 => 96,  269 => 128,  254 => 92,  243 => 113,  240 => 86,  238 => 85,  235 => 74,  230 => 110,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 124,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 50,  67 => 20,  63 => 24,  59 => 13,  38 => 6,  94 => 34,  89 => 41,  85 => 29,  75 => 23,  68 => 21,  56 => 11,  87 => 31,  21 => 2,  26 => 9,  93 => 34,  88 => 31,  78 => 26,  46 => 8,  27 => 5,  44 => 26,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 125,  171 => 70,  166 => 71,  163 => 62,  158 => 67,  156 => 117,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 21,  49 => 10,  24 => 7,  25 => 3,  19 => 1,  79 => 55,  72 => 22,  69 => 22,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 62,  145 => 53,  139 => 50,  131 => 58,  123 => 28,  120 => 20,  115 => 85,  111 => 37,  108 => 19,  101 => 33,  98 => 36,  96 => 69,  83 => 25,  74 => 30,  66 => 22,  55 => 14,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 81,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 123,  168 => 72,  164 => 66,  162 => 57,  154 => 58,  149 => 51,  147 => 92,  144 => 49,  141 => 48,  133 => 55,  130 => 96,  125 => 44,  122 => 39,  116 => 35,  112 => 5,  109 => 74,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 68,  86 => 26,  82 => 28,  80 => 25,  73 => 16,  64 => 13,  60 => 19,  57 => 12,  54 => 33,  51 => 16,  48 => 9,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 3,  30 => 3,);
    }
}
