<?php

/* uniSuperhBundle:superheroe:buscarSuperh.html.twig */
class __TwigTemplate_690b990e1d73adf18490cd61760666a319df0ebc7a663fe85c03d761cfcdd05e extends Twig_Template
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
        // line 4
        echo "                
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("superh_responder");
        echo "\" method=\"POST\">
             <div class=\"LineaFormulario\">      
                    Buscar TIPO superheroe:
                    <input type=\"text\" name=\"superh\" value=\"\">
                    <input type=\"submit\" value=\"Buscar\">
             </div>
        </form>
        
       ";
        // line 13
        if ((!(null === (isset($context["nomTipo"]) ? $context["nomTipo"] : $this->getContext($context, "nomTipo"))))) {
            // line 14
            echo "       <div class=\"LineaFormulario\">  
        <h1 class=\"izquierda separarIzq15\">
            Superheroes de Tipo ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "nombre"), "html", null, true);
            echo " 
        </h1>
       </div>
       <div class=\"LineaFormulario\">  </div>
                
            ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "superheroe"));
            foreach ($context['_seq'] as $context["_key"] => $context["superh"]) {
                // line 22
                echo "                <div class=\"LineaFormulario\">
                <h2 class=\"izquierda separarIzq15\"><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("superheroe_show", array("id" => $this->getAttribute((isset($context["superh"]) ? $context["superh"] : $this->getContext($context, "superh")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["superh"]) ? $context["superh"] : $this->getContext($context, "superh")), "nombre"), "html", null, true);
                echo " </a></h2>
                ";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["superh"]) ? $context["superh"] : $this->getContext($context, "superh")), "zona"));
                foreach ($context['_seq'] as $context["_key"] => $context["zona"]) {
                    // line 25
                    echo "                    <h3 class=\"izquierda separarIzq15\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zonas_show", array("id" => $this->getAttribute((isset($context["zona"]) ? $context["zona"] : $this->getContext($context, "zona")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zona"]) ? $context["zona"] : $this->getContext($context, "zona")), "nombre"), "html", null, true);
                    echo " </a></h3>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zona'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo " 
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['superh'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                                
                                  
     ";
        }
        // line 30
        echo " 
";
    }

    public function getTemplateName()
    {
        return "uniSuperhBundle:superheroe:buscarSuperh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  95 => 28,  87 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  51 => 16,  47 => 14,  45 => 13,  34 => 5,  31 => 4,  28 => 3,);
    }
}
