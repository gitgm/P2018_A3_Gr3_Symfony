<?php

/* security/login.html.twig */
class __TwigTemplate_5ddb5abd1db14110049a16d78c5f96a2a72c45136e4682fc5f7e00ba19bbfaa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_d675b966e045b932f9b535305f47f7bf71d376053174b1b6ba566186175839dc = $this->env->getExtension("native_profiler");
        $__internal_d675b966e045b932f9b535305f47f7bf71d376053174b1b6ba566186175839dc->enter($__internal_d675b966e045b932f9b535305f47f7bf71d376053174b1b6ba566186175839dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d675b966e045b932f9b535305f47f7bf71d376053174b1b6ba566186175839dc->leave($__internal_d675b966e045b932f9b535305f47f7bf71d376053174b1b6ba566186175839dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64678b5bafa78c9987495af12de9fef1b34359cd38fa39e9f993fd887b7c3a72 = $this->env->getExtension("native_profiler");
        $__internal_64678b5bafa78c9987495af12de9fef1b34359cd38fa39e9f993fd887b7c3a72->enter($__internal_64678b5bafa78c9987495af12de9fef1b34359cd38fa39e9f993fd887b7c3a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_64678b5bafa78c9987495af12de9fef1b34359cd38fa39e9f993fd887b7c3a72->leave($__internal_64678b5bafa78c9987495af12de9fef1b34359cd38fa39e9f993fd887b7c3a72_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Password:</label>*/
/*         <input type="password" id="password" name="_password" />*/
/* */
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/* */
/*         <button type="submit">login</button>*/
/*     </form>*/
/* {% endblock %}*/
/* */
