<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_4bec05179ed3c0fb1fd4db3f85ecec7aab0baba99c20801fd9ca22fa0ce95b29 extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "keys")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "get", array(0 => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))), "method")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  367 => 155,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  334 => 141,  331 => 140,  326 => 138,  321 => 135,  307 => 128,  296 => 121,  288 => 118,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  222 => 83,  184 => 63,  175 => 58,  170 => 84,  417 => 143,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 129,  371 => 156,  359 => 123,  356 => 122,  353 => 149,  350 => 120,  347 => 119,  333 => 115,  328 => 139,  324 => 112,  313 => 110,  308 => 109,  281 => 114,  274 => 110,  232 => 88,  210 => 77,  186 => 72,  180 => 70,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  280 => 194,  276 => 111,  271 => 190,  251 => 182,  249 => 92,  167 => 71,  104 => 31,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  267 => 101,  262 => 93,  248 => 97,  233 => 87,  226 => 84,  213 => 78,  207 => 76,  194 => 68,  191 => 67,  181 => 65,  178 => 59,  172 => 57,  153 => 77,  127 => 35,  376 => 217,  351 => 141,  340 => 145,  336 => 191,  332 => 190,  316 => 176,  306 => 172,  302 => 125,  297 => 200,  293 => 120,  287 => 167,  279 => 165,  275 => 105,  270 => 102,  266 => 160,  216 => 79,  212 => 123,  197 => 69,  174 => 74,  160 => 93,  114 => 36,  70 => 15,  223 => 144,  218 => 143,  215 => 142,  202 => 94,  192 => 128,  165 => 83,  161 => 58,  152 => 46,  290 => 119,  282 => 138,  256 => 96,  237 => 91,  234 => 90,  205 => 88,  200 => 72,  188 => 90,  185 => 75,  90 => 42,  155 => 47,  150 => 55,  134 => 39,  34 => 5,  100 => 27,  20 => 1,  110 => 22,  77 => 20,  113 => 48,  81 => 23,  118 => 49,  97 => 41,  124 => 78,  84 => 40,  76 => 34,  58 => 25,  53 => 12,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 130,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 120,  379 => 218,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 141,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 187,  252 => 80,  247 => 114,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 122,  140 => 55,  132 => 51,  128 => 42,  107 => 42,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 113,  240 => 86,  238 => 85,  235 => 89,  230 => 110,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 124,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 24,  71 => 50,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 35,  85 => 23,  75 => 18,  68 => 30,  56 => 11,  87 => 41,  21 => 2,  26 => 9,  93 => 27,  88 => 24,  78 => 19,  46 => 12,  27 => 7,  44 => 20,  31 => 8,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 89,  142 => 59,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 7,  25 => 35,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 6,  37 => 5,  22 => 3,  246 => 136,  157 => 62,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 85,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 27,  55 => 15,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 9,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 81,  189 => 66,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 66,  116 => 57,  112 => 5,  109 => 52,  106 => 51,  103 => 28,  99 => 23,  95 => 27,  92 => 43,  86 => 26,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 26,  57 => 12,  54 => 33,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
