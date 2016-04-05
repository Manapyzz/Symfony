<?php

/* base.html.twig */
class __TwigTemplate_82242156b405fe635f0f776241fed46adcbeeb1b23d39574f5878ba38f7969a5 extends Twig_Template
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
        $__internal_dc4dabbd7a419a756f6e749312d138f2b31536e544311a15bfa9cffc9144d89b = $this->env->getExtension("native_profiler");
        $__internal_dc4dabbd7a419a756f6e749312d138f2b31536e544311a15bfa9cffc9144d89b->enter($__internal_dc4dabbd7a419a756f6e749312d138f2b31536e544311a15bfa9cffc9144d89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dc4dabbd7a419a756f6e749312d138f2b31536e544311a15bfa9cffc9144d89b->leave($__internal_dc4dabbd7a419a756f6e749312d138f2b31536e544311a15bfa9cffc9144d89b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63c44a2039db30d3685fbcfa85a70dd07c08c812054267c8ee20158fe66ad56d = $this->env->getExtension("native_profiler");
        $__internal_63c44a2039db30d3685fbcfa85a70dd07c08c812054267c8ee20158fe66ad56d->enter($__internal_63c44a2039db30d3685fbcfa85a70dd07c08c812054267c8ee20158fe66ad56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63c44a2039db30d3685fbcfa85a70dd07c08c812054267c8ee20158fe66ad56d->leave($__internal_63c44a2039db30d3685fbcfa85a70dd07c08c812054267c8ee20158fe66ad56d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b67faf5050ab7ec210947e6ef168a4b7a2343dc9bc342c5720341f790e67504a = $this->env->getExtension("native_profiler");
        $__internal_b67faf5050ab7ec210947e6ef168a4b7a2343dc9bc342c5720341f790e67504a->enter($__internal_b67faf5050ab7ec210947e6ef168a4b7a2343dc9bc342c5720341f790e67504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b67faf5050ab7ec210947e6ef168a4b7a2343dc9bc342c5720341f790e67504a->leave($__internal_b67faf5050ab7ec210947e6ef168a4b7a2343dc9bc342c5720341f790e67504a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3636d04b384425f0d332755c63898221c8cbdc292d5b9cabd8cbff978f4e219b = $this->env->getExtension("native_profiler");
        $__internal_3636d04b384425f0d332755c63898221c8cbdc292d5b9cabd8cbff978f4e219b->enter($__internal_3636d04b384425f0d332755c63898221c8cbdc292d5b9cabd8cbff978f4e219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3636d04b384425f0d332755c63898221c8cbdc292d5b9cabd8cbff978f4e219b->leave($__internal_3636d04b384425f0d332755c63898221c8cbdc292d5b9cabd8cbff978f4e219b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78656189e2d1a6cab3b0b2b0792dadb9172774e7370513895759e05a7b34a9b8 = $this->env->getExtension("native_profiler");
        $__internal_78656189e2d1a6cab3b0b2b0792dadb9172774e7370513895759e05a7b34a9b8->enter($__internal_78656189e2d1a6cab3b0b2b0792dadb9172774e7370513895759e05a7b34a9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_78656189e2d1a6cab3b0b2b0792dadb9172774e7370513895759e05a7b34a9b8->leave($__internal_78656189e2d1a6cab3b0b2b0792dadb9172774e7370513895759e05a7b34a9b8_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
