<?php

/* grade/create.html.twig */
class __TwigTemplate_49e636dbed7c0b752d9ca012d85ada9b9dab6cd046d657a27db9b7464b92ca70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grade/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_094429e0bf6e3be1cce4bcedeba34b2fb5da4ff0acc3ea062057562e76d3ade6 = $this->env->getExtension("native_profiler");
        $__internal_094429e0bf6e3be1cce4bcedeba34b2fb5da4ff0acc3ea062057562e76d3ade6->enter($__internal_094429e0bf6e3be1cce4bcedeba34b2fb5da4ff0acc3ea062057562e76d3ade6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094429e0bf6e3be1cce4bcedeba34b2fb5da4ff0acc3ea062057562e76d3ade6->leave($__internal_094429e0bf6e3be1cce4bcedeba34b2fb5da4ff0acc3ea062057562e76d3ade6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ae395c3e94e9fc04e700cc1ee1fc67d6423bb7c453ce9abb446fb0dca01df05 = $this->env->getExtension("native_profiler");
        $__internal_7ae395c3e94e9fc04e700cc1ee1fc67d6423bb7c453ce9abb446fb0dca01df05->enter($__internal_7ae395c3e94e9fc04e700cc1ee1fc67d6423bb7c453ce9abb446fb0dca01df05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_7ae395c3e94e9fc04e700cc1ee1fc67d6423bb7c453ce9abb446fb0dca01df05->leave($__internal_7ae395c3e94e9fc04e700cc1ee1fc67d6423bb7c453ce9abb446fb0dca01df05_prof);

    }

    public function getTemplateName()
    {
        return "grade/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
