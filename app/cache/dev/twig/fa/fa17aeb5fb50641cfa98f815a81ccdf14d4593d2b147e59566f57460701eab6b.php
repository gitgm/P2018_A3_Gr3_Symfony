<?php

/* registration/register.html.twig */
class __TwigTemplate_134486b1f9c89ccdc23d525f90cb7998688fee3be6a4f718b1a49ce5af49d0a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        $__internal_933f4a5f0679d1d9de47e38b55269fd426976d5fbc165cadf9fed2c3db1b26d1 = $this->env->getExtension("native_profiler");
        $__internal_933f4a5f0679d1d9de47e38b55269fd426976d5fbc165cadf9fed2c3db1b26d1->enter($__internal_933f4a5f0679d1d9de47e38b55269fd426976d5fbc165cadf9fed2c3db1b26d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933f4a5f0679d1d9de47e38b55269fd426976d5fbc165cadf9fed2c3db1b26d1->leave($__internal_933f4a5f0679d1d9de47e38b55269fd426976d5fbc165cadf9fed2c3db1b26d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac6deb4c1cd56ebbc70fb52f5d49bbf1d82000244d9e91d9d1b5a60b6c57a39 = $this->env->getExtension("native_profiler");
        $__internal_fac6deb4c1cd56ebbc70fb52f5d49bbf1d82000244d9e91d9d1b5a60b6c57a39->enter($__internal_fac6deb4c1cd56ebbc70fb52f5d49bbf1d82000244d9e91d9d1b5a60b6c57a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "

        <button type=\"submit\">Register!</button>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_fac6deb4c1cd56ebbc70fb52f5d49bbf1d82000244d9e91d9d1b5a60b6c57a39->leave($__internal_fac6deb4c1cd56ebbc70fb52f5d49bbf1d82000244d9e91d9d1b5a60b6c57a39_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form_start(form) }}*/
/*         {{ form_row(form.username) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.plainPassword.first) }}*/
/*         {{ form_row(form.plainPassword.second) }}*/
/* */
/*         <button type="submit">Register!</button>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
