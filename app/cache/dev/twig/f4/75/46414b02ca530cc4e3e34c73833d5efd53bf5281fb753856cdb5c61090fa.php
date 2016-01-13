<?php

/* ::base.html.twig */
class __TwigTemplate_f47546414b02ca530cc4e3e34c73833d5efd53bf5281fb753856cdb5c61090fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisuperh/js/jssuperheroes.js"), "html", null, true);
        echo "\"></script>       
      
    </head>
    <body>
        
        
        <div id=\"cabecera\" class=\"imagencab\">
            ";
        // line 18
        $this->displayBlock('cabecera', $context, $blocks);
        // line 22
        echo "        </div>
        
        <div id=\"contenFormularios\">
            ";
        // line 25
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 27
        echo " 
        </div>
               ";
        // line 29
        echo "           
        <div id=\"pie\">
            ";
        // line 31
        $this->displayBlock('pie', $context, $blocks);
        // line 35
        echo "        </div>
       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Superheroes Itziar";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisuperh/css/websuperh.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 18
    public function block_cabecera($context, array $blocks = array())
    {
        // line 19
        echo "                <h1 class=\"letralogo textocentrado izquierda\"> Superheroes Itziar </h1> 
                 <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisuperh/img/spiderman.jpeg"), "html", null, true);
        echo "\" class=\"izquierda claseclearright\"/>
            ";
    }

    // line 25
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 26
        echo "                Cuerpo
            ";
    }

    // line 31
    public function block_pie($context, array $blocks = array())
    {
        // line 32
        echo "                <p class=\"izquierda separarIzq15 negrita\">2015/2016</p>
                <p class=\"derecha separarDcha20 negrita\">Itziar Urkidi</p>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  113 => 31,  108 => 26,  105 => 25,  99 => 20,  96 => 19,  93 => 18,  77 => 5,  69 => 35,  57 => 25,  52 => 22,  50 => 18,  40 => 11,  35 => 7,  24 => 1,  86 => 8,  83 => 7,  75 => 13,  71 => 12,  67 => 31,  63 => 29,  59 => 27,  56 => 7,  48 => 25,  46 => 22,  39 => 17,  33 => 5,  30 => 5,  45 => 10,  41 => 9,  37 => 10,  28 => 3,);
    }
}
