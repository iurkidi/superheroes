<?php

/* uniSuperhBundle::layout.html.twig */
class __TwigTemplate_c79f57789a6a29aadc3b51e92b64f19e20e1c85ae85f2a30c827bcb892dbc8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSup' => array($this, 'block_menuSup'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo " 
        <div id=\"menuSup\">
            ";
        // line 7
        $this->displayBlock('menuSup', $context, $blocks);
        // line 17
        echo "        </div>
 
        
        <div id=\"central\">
            
            ";
        // line 22
        $this->displayBlock('central', $context, $blocks);
        // line 25
        echo "            
        </div>
 
 
 ";
    }

    // line 7
    public function block_menuSup($context, array $blocks = array())
    {
        // line 8
        echo "                
             <ul id=\"menu-horizontal\">
                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("uni_superh_homepage");
        echo "\" title=\"Texto\">INICIO</a>                               
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("linkZonas");
        echo "\" title=\"Texto\">Zonas</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("linkHeroes");
        echo "\" title=\"Texto\">Heroes</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("linkadmin");
        echo "\" title=\"Texto\">Administracion</a></li>                                              
             </ul>
             
            ";
    }

    // line 22
    public function block_central($context, array $blocks = array())
    {
        // line 23
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "uniSuperhBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  83 => 22,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 8,  56 => 7,  48 => 25,  46 => 22,  39 => 17,  33 => 5,  30 => 4,  45 => 10,  41 => 9,  37 => 7,  28 => 3,);
    }
}
