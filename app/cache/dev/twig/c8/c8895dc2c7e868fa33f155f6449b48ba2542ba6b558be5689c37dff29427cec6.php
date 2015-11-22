<?php

/* base.html.twig */
class __TwigTemplate_b772117e3df47509bcf2095f60e17bfff54b2428e8759f3f7d9f03ed10440708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62a108967743bd7da24ad35add91908233282403204274e6457ad559c8e51ff9 = $this->env->getExtension("native_profiler");
        $__internal_62a108967743bd7da24ad35add91908233282403204274e6457ad559c8e51ff9->enter($__internal_62a108967743bd7da24ad35add91908233282403204274e6457ad559c8e51ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_62a108967743bd7da24ad35add91908233282403204274e6457ad559c8e51ff9->leave($__internal_62a108967743bd7da24ad35add91908233282403204274e6457ad559c8e51ff9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7cf2d36388c08467eb42e26c5e9214d079352c999c6cc428a0ac31f975c3af3 = $this->env->getExtension("native_profiler");
        $__internal_f7cf2d36388c08467eb42e26c5e9214d079352c999c6cc428a0ac31f975c3af3->enter($__internal_f7cf2d36388c08467eb42e26c5e9214d079352c999c6cc428a0ac31f975c3af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f7cf2d36388c08467eb42e26c5e9214d079352c999c6cc428a0ac31f975c3af3->leave($__internal_f7cf2d36388c08467eb42e26c5e9214d079352c999c6cc428a0ac31f975c3af3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0b5027512b206f2545b99a59695a2b7c19794194f770b4b689216e4bf0941be = $this->env->getExtension("native_profiler");
        $__internal_e0b5027512b206f2545b99a59695a2b7c19794194f770b4b689216e4bf0941be->enter($__internal_e0b5027512b206f2545b99a59695a2b7c19794194f770b4b689216e4bf0941be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc4742d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "dc4742d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_e0b5027512b206f2545b99a59695a2b7c19794194f770b4b689216e4bf0941be->leave($__internal_e0b5027512b206f2545b99a59695a2b7c19794194f770b4b689216e4bf0941be_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2e16509605f3b64044685cd969bebad807943960061ed45f1397db95e019ef0 = $this->env->getExtension("native_profiler");
        $__internal_a2e16509605f3b64044685cd969bebad807943960061ed45f1397db95e019ef0->enter($__internal_a2e16509605f3b64044685cd969bebad807943960061ed45f1397db95e019ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a2e16509605f3b64044685cd969bebad807943960061ed45f1397db95e019ef0->leave($__internal_a2e16509605f3b64044685cd969bebad807943960061ed45f1397db95e019ef0_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba822d0379f5c878945b40d0043ca00e84a6a33b94f58a9f3536641df257b668 = $this->env->getExtension("native_profiler");
        $__internal_ba822d0379f5c878945b40d0043ca00e84a6a33b94f58a9f3536641df257b668->enter($__internal_ba822d0379f5c878945b40d0043ca00e84a6a33b94f58a9f3536641df257b668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d1d496_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496_part_1.js");
            // line 17
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "4d1d496"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_ba822d0379f5c878945b40d0043ca00e84a6a33b94f58a9f3536641df257b668->leave($__internal_ba822d0379f5c878945b40d0043ca00e84a6a33b94f58a9f3536641df257b668_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  125 => 17,  120 => 16,  114 => 15,  103 => 14,  96 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets '@adminlte_css' %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}">*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             {% javascripts '@adminlte_js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
