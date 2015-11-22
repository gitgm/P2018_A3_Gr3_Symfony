<?php

/* lesson/create.html.twig */
class __TwigTemplate_a34e3e68701498af21949819ef7ed322480ac22849d830829525890df580ebfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lesson/create.html.twig", 1);
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
        $__internal_76e362eba2ac29f3e46af327f658318bd51e041b467d59db7422903df115dcdc = $this->env->getExtension("native_profiler");
        $__internal_76e362eba2ac29f3e46af327f658318bd51e041b467d59db7422903df115dcdc->enter($__internal_76e362eba2ac29f3e46af327f658318bd51e041b467d59db7422903df115dcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lesson/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e362eba2ac29f3e46af327f658318bd51e041b467d59db7422903df115dcdc->leave($__internal_76e362eba2ac29f3e46af327f658318bd51e041b467d59db7422903df115dcdc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0fe63c9c8b21c82c4814bfe2d118d4f6b976ba7ffe4b67a74b4d9e14b2f8cef = $this->env->getExtension("native_profiler");
        $__internal_f0fe63c9c8b21c82c4814bfe2d118d4f6b976ba7ffe4b67a74b4d9e14b2f8cef->enter($__internal_f0fe63c9c8b21c82c4814bfe2d118d4f6b976ba7ffe4b67a74b4d9e14b2f8cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_f0fe63c9c8b21c82c4814bfe2d118d4f6b976ba7ffe4b67a74b4d9e14b2f8cef->leave($__internal_f0fe63c9c8b21c82c4814bfe2d118d4f6b976ba7ffe4b67a74b4d9e14b2f8cef_prof);

    }

    public function getTemplateName()
    {
        return "lesson/create.html.twig";
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
