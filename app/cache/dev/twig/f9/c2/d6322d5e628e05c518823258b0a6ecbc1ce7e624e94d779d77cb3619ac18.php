<?php

/* uniSuperhBundle:Default:indexAdmin.html.twig */
class __TwigTemplate_f9c2d6322d5e628e05c518823258b0a6ecbc1ce7e624e94d779d77cb3619ac18 extends Twig_Template
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
    
    <h1>Menu de Administracion</h1>

     <ul>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("superheroe_new");
        echo "\" title=\"Texto\">Nuevo superheroe</a>                               
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("tipos_new");
        echo "\" title=\"Texto\">Nuevo tipo</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("zonas_new");
        echo "\" title=\"Texto\">Nueva zona</a></li>       
     </ul>
    
";
    }

    public function getTemplateName()
    {
        return "uniSuperhBundle:Default:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  41 => 9,  37 => 8,  28 => 3,);
    }
}
