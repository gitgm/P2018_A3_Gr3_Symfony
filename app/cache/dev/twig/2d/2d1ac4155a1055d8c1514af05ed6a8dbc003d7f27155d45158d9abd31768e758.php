<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8387a5cb3cb750897830a8d648973cfc1f89c12915adfa5aafe443011904b8a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5683a965b3092e73b22673e1b44679c2a7f4538118ea0fe14f8e241edd4a163 = $this->env->getExtension("native_profiler");
        $__internal_b5683a965b3092e73b22673e1b44679c2a7f4538118ea0fe14f8e241edd4a163->enter($__internal_b5683a965b3092e73b22673e1b44679c2a7f4538118ea0fe14f8e241edd4a163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5683a965b3092e73b22673e1b44679c2a7f4538118ea0fe14f8e241edd4a163->leave($__internal_b5683a965b3092e73b22673e1b44679c2a7f4538118ea0fe14f8e241edd4a163_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6aedcde6d801a7628be6ba44e0b9ff11749496647fc9180168851a330e70a69 = $this->env->getExtension("native_profiler");
        $__internal_f6aedcde6d801a7628be6ba44e0b9ff11749496647fc9180168851a330e70a69->enter($__internal_f6aedcde6d801a7628be6ba44e0b9ff11749496647fc9180168851a330e70a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6aedcde6d801a7628be6ba44e0b9ff11749496647fc9180168851a330e70a69->leave($__internal_f6aedcde6d801a7628be6ba44e0b9ff11749496647fc9180168851a330e70a69_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24dceeefb987f3b551264f91a5b6874cd834e57007e839d5f957c2146ad95cb5 = $this->env->getExtension("native_profiler");
        $__internal_24dceeefb987f3b551264f91a5b6874cd834e57007e839d5f957c2146ad95cb5->enter($__internal_24dceeefb987f3b551264f91a5b6874cd834e57007e839d5f957c2146ad95cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_24dceeefb987f3b551264f91a5b6874cd834e57007e839d5f957c2146ad95cb5->leave($__internal_24dceeefb987f3b551264f91a5b6874cd834e57007e839d5f957c2146ad95cb5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5f67b8aaa1633274c5777947798ea0b79a14eb1f0eef94cbdb7c7506a9c6e3 = $this->env->getExtension("native_profiler");
        $__internal_da5f67b8aaa1633274c5777947798ea0b79a14eb1f0eef94cbdb7c7506a9c6e3->enter($__internal_da5f67b8aaa1633274c5777947798ea0b79a14eb1f0eef94cbdb7c7506a9c6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_da5f67b8aaa1633274c5777947798ea0b79a14eb1f0eef94cbdb7c7506a9c6e3->leave($__internal_da5f67b8aaa1633274c5777947798ea0b79a14eb1f0eef94cbdb7c7506a9c6e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
