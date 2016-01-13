<?php

/* uniSuperhBundle:zonas:index.html.twig */
class __TwigTemplate_cc8dab4f53169c60252fdb468e188ce9f0a771f33be644057e8164dd04fb546a extends Twig_Template
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
    <h1>zonas list</h1>
    
    <form id=\"selectCats\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("zona_buscar_resp");
        echo "\" method=\"POST\">
            
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario\"> 
                <p class=\"izquierda separarIzq15\">Seleccione una zona de la lista y a continuación se mostrarán los superheroes que se mueven por dicha zona.</p>
            </div>
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario izquierda separarIzq15\">      
                <label for=\"nombre\" class=\"letraverde\">Zona: </label>                                    
                     <select name=\"nombre\" onblur=\"submitform(this)\" class=\"izquierda\">                         
                     ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</option>                        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                     </select>                                          
             </div>
             <input type=\"hidden\" id=\"nomOculto\" name=\"nomOculto\" value=\"\"/>
    </form>

    ";
        // line 25
        if ((!(null === (isset($context["nomZona"]) ? $context["nomZona"] : $this->getContext($context, "nomZona"))))) {
            // line 26
            echo "       <div class=\"LineaFormulario izquierda\">  
        <h1 class=\"izquierda separarIzq15\">
            Superheroes de <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zonas_show", array("id" => $this->getAttribute((isset($context["eSuperH"]) ? $context["eSuperH"] : $this->getContext($context, "eSuperH")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eSuperH"]) ? $context["eSuperH"] : $this->getContext($context, "eSuperH")), "nombre"), "html", null, true);
            echo "</a>
        </h1>
       </div>
       <div class=\"LineaFormulario izquierda\">  </div>
                
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["eSuperH"]) ? $context["eSuperH"] : $this->getContext($context, "eSuperH")), "superheroes"));
            foreach ($context['_seq'] as $context["_key"] => $context["superh"]) {
                echo "             
                <div class=\"LineaFormulario izquierda separarIzq15\">
                    <h2 class=\"izquierda separarIzq15\"><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("superheroe_show", array("id" => $this->getAttribute((isset($context["superh"]) ? $context["superh"] : $this->getContext($context, "superh")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["superh"]) ? $context["superh"] : $this->getContext($context, "superh")), "nombre"), "html", null, true);
                echo "</a></h2>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['superh'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                      
     ";
        }
        // line 39
        echo "                 
 
       ";
        // line 48
        echo "    ";
    }

    public function getTemplateName()
    {
        return "uniSuperhBundle:zonas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  109 => 39,  105 => 38,  94 => 35,  87 => 33,  77 => 28,  73 => 26,  71 => 25,  64 => 20,  53 => 18,  49 => 17,  35 => 6,  28 => 3,);
    }
}
