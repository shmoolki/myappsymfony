<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_03ace76c174276817b5a5ccae56d47567eef776a629b13542f0a1afdcdef4f10 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  20 => 1,  110 => 42,  77 => 27,  120 => 58,  113 => 54,  81 => 24,  74 => 30,  118 => 12,  97 => 43,  37 => 7,  124 => 50,  84 => 30,  76 => 28,  58 => 18,  53 => 18,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 45,  111 => 37,  107 => 46,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 20,  63 => 24,  59 => 6,  47 => 12,  38 => 6,  94 => 28,  89 => 41,  85 => 29,  79 => 18,  75 => 29,  68 => 26,  56 => 13,  50 => 21,  29 => 8,  87 => 25,  72 => 21,  55 => 23,  21 => 2,  26 => 6,  98 => 36,  93 => 29,  88 => 38,  78 => 21,  46 => 14,  27 => 4,  40 => 11,  44 => 11,  35 => 6,  31 => 4,  43 => 8,  41 => 8,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 28,  121 => 46,  117 => 47,  115 => 43,  105 => 49,  101 => 44,  91 => 27,  69 => 25,  66 => 15,  62 => 19,  49 => 14,  24 => 4,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 5,  109 => 34,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 33,  86 => 28,  82 => 22,  80 => 29,  73 => 26,  64 => 25,  60 => 22,  57 => 23,  54 => 16,  51 => 22,  48 => 13,  45 => 9,  42 => 10,  39 => 10,  36 => 10,  33 => 6,  30 => 7,);
    }
}
