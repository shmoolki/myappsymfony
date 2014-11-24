<?php

/* ::layout.html.twig */
class __TwigTemplate_07b3824ae275d64f378fa7a05f86c35e72e6a92e3e24619cf3da03b068ff32d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
      <!--   <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap3.0.3.css"), "html", null, true);
        echo "\" /> -->
        
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "       
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"#\">FrxIntranet V2.0</a>
                </div>
            </div>
        </div>
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "       <hr />

        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                
                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright 2014 - FrxIntranet</p>
                    </div>
                </div>
            </div>
        </footer>\t
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "FrxIntranet V2.0";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 28,  118 => 12,  112 => 5,  107 => 46,  105 => 45,  101 => 44,  97 => 43,  93 => 42,  89 => 41,  75 => 29,  73 => 28,  56 => 13,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  23 => 1,  223 => 144,  218 => 143,  215 => 142,  202 => 132,  192 => 128,  188 => 127,  183 => 125,  179 => 124,  173 => 123,  169 => 122,  165 => 121,  161 => 120,  156 => 117,  152 => 116,  130 => 96,  128 => 45,  115 => 85,  90 => 63,  81 => 56,  79 => 55,  54 => 12,  44 => 26,  40 => 24,  32 => 3,  29 => 5,);
    }
}
