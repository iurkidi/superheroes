<?php

/* uniSuperhBundle:Default:index.html.twig */
class __TwigTemplate_c776726b2c348abcd7110819c553f6559b59d4fc4b573a472848d1fdf458bded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniSuperhBundle::layout.html.twig");

        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniSuperhBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_central($context, array $blocks = array())
    {
        echo " 
    
    <h1>Todo sobre los superheroes</h1>

     <div class=\"LineaFormulario centrado\">
           ";
        // line 9
        echo "           <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unisuperh/img/superh.jpeg"), "html", null, true);
        echo "\" width=\"25%\" heigth=\"25%\"/>
    </div>
            
";
    }

    public function getTemplateName()
    {
        return "uniSuperhBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  28 => 3,);
    }
}
