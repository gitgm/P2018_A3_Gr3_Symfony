<?php

/* grade/grades.html.twig */
class __TwigTemplate_406841eea104ad26cfc09d8d2d610d0a3c21adb11d48f02adbb6ec8a144d4097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grade/grades.html.twig", 1);
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
        $__internal_79b887472a1013ce82e646cb9a1e3b0144dfd8cdd47db976ebeb4a668a262e8c = $this->env->getExtension("native_profiler");
        $__internal_79b887472a1013ce82e646cb9a1e3b0144dfd8cdd47db976ebeb4a668a262e8c->enter($__internal_79b887472a1013ce82e646cb9a1e3b0144dfd8cdd47db976ebeb4a668a262e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grade/grades.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b887472a1013ce82e646cb9a1e3b0144dfd8cdd47db976ebeb4a668a262e8c->leave($__internal_79b887472a1013ce82e646cb9a1e3b0144dfd8cdd47db976ebeb4a668a262e8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_927febe618dbf1f1952a3c0ed650cf5c658c3db32399ebc85d13d774886bda55 = $this->env->getExtension("native_profiler");
        $__internal_927febe618dbf1f1952a3c0ed650cf5c658c3db32399ebc85d13d774886bda55->enter($__internal_927febe618dbf1f1952a3c0ed650cf5c658c3db32399ebc85d13d774886bda55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : $this->getContext($context, "grades")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 6
            echo "            <article>
                <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "lesson", array()), "title", array()), "html", null, true);
            echo "</h1>
                <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "user", array()), "username", array()), "html", null, true);
            echo " got ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", array()), "html", null, true);
            echo "</p>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </section>
";
        
        $__internal_927febe618dbf1f1952a3c0ed650cf5c658c3db32399ebc85d13d774886bda55->leave($__internal_927febe618dbf1f1952a3c0ed650cf5c658c3db32399ebc85d13d774886bda55_prof);

    }

    public function getTemplateName()
    {
        return "grade/grades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  54 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <section>*/
/*         {% for grade in grades %}*/
/*             <article>*/
/*                 <h1>{{ grade.lesson.title }}</h1>*/
/*                 <p>{{ grade.user.username }} got {{ grade.grade }}</p>*/
/*             </article>*/
/*         {% endfor %}*/
/*     </section>*/
/* {% endblock %}*/
/* */
