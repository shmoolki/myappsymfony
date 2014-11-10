<?php

/* PrimeBundle:Default:index.html.twig */
class __TwigTemplate_9f525160351977d62bd1309303d35fa498aacb12e832175c0b6f0285245f6efe extends Twig_Template
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
            <div class=\"span4 offset4\">
                ";
        // line 8
        $this->env->loadTemplate("::col-left.html.twig")->display(array_merge($context, array("util" => "2")));
        // line 9
        echo "            </div>
        </div>

    </div>





";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker-fr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
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
        return "PrimeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  62 => 21,  57 => 20,  54 => 19,  41 => 9,  39 => 8,  32 => 3,  29 => 2,);
    }
}
