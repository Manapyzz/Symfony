<?php

/* LeaderboardBundle:Ikaruga:index.html.twig */
class __TwigTemplate_b749a5a4356217077565a62e5b8fd8b44bb0c514e1f7fda0fbdaab38c3b1e76f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_722f0c5300fe89fdfc17917762f9e34199d6bc4f5eaabfb0bc2978af8046e579 = $this->env->getExtension("native_profiler");
        $__internal_722f0c5300fe89fdfc17917762f9e34199d6bc4f5eaabfb0bc2978af8046e579->enter($__internal_722f0c5300fe89fdfc17917762f9e34199d6bc4f5eaabfb0bc2978af8046e579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LeaderboardBundle:Ikaruga:index.html.twig"));

        // line 1
        echo "
<style>
    body {
        background: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["styleBg"]) ? $context["styleBg"] : $this->getContext($context, "styleBg")), "html", null, true);
        echo ";
        color: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["styleColor"]) ? $context["styleColor"] : $this->getContext($context, "styleColor")), "html", null, true);
        echo ";
    }
</style>

<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asset/style.css"), "html", null, true);
        echo "\" />

<ul>
    <li><a href=\"../mushihimesama\">Mushihimesama</a></li>
    <li><a href=\"../crimzon_clover\">Crimzon_Clover</a></li>
    <li><a href=\"../deathsmiles\">Death Smiles</a></li>
    <li><a href=\"../yaoi\">Yaoi</a></li>
</ul>

<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/ToBdzV7w5Pc\" frameborder=\"0\" allowfullscreen></iframe>

<table>
    <tr>
        <th>Chain</th>
        <th>Points</th>
    </tr>
    <tr>
        <td>2nd Chain</td>
        <td>200 Points</td>
    </tr>
    <tr>
        <td>3rd Chain</td>
        <td>400 Points</td>
    </tr>
    <tr>
        <td>4th Chain</td>
        <td>800 Points</td>
    </tr>
    <tr>
        <td>5th Chain</td>
        <td>1600 Points</td>
    </tr>
    <tr>
        <td>6th Chain</td>
        <td>3200 Points</td>
    </tr>
    <tr>
        <td>7th Chain</td>
        <td>6400 Points</td>
    </tr>
    <tr>
        <td>8th Chain</td>
        <td>12800 Points</td>
    </tr>
    <tr>
        <td>Max Chain</td>
        <td>25600 Points</td>
    </tr>
</table>

<ul>
    <li><a href=\"../ikaruga/black\">Black</a></li>
    <li><a href=\"../ikaruga/white\">White</a></li>
</ul>

";
        
        $__internal_722f0c5300fe89fdfc17917762f9e34199d6bc4f5eaabfb0bc2978af8046e579->leave($__internal_722f0c5300fe89fdfc17917762f9e34199d6bc4f5eaabfb0bc2978af8046e579_prof);

    }

    public function getTemplateName()
    {
        return "LeaderboardBundle:Ikaruga:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* */
/* <style>*/
/*     body {*/
/*         background: {{ styleBg }};*/
/*         color: {{ styleColor }};*/
/*     }*/
/* </style>*/
/* */
/* <link rel="stylesheet" href="{{ asset('bundles/asset/style.css') }}" />*/
/* */
/* <ul>*/
/*     <li><a href="../mushihimesama">Mushihimesama</a></li>*/
/*     <li><a href="../crimzon_clover">Crimzon_Clover</a></li>*/
/*     <li><a href="../deathsmiles">Death Smiles</a></li>*/
/*     <li><a href="../yaoi">Yaoi</a></li>*/
/* </ul>*/
/* */
/* <iframe width="420" height="315" src="https://www.youtube.com/embed/ToBdzV7w5Pc" frameborder="0" allowfullscreen></iframe>*/
/* */
/* <table>*/
/*     <tr>*/
/*         <th>Chain</th>*/
/*         <th>Points</th>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>2nd Chain</td>*/
/*         <td>200 Points</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>3rd Chain</td>*/
/*         <td>400 Points</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>4th Chain</td>*/
/*         <td>800 Points</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>5th Chain</td>*/
/*         <td>1600 Points</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>6th Chain</td>*/
/*         <td>3200 Points</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>7th Chain</td>*/
/*         <td>6400 Points</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>8th Chain</td>*/
/*         <td>12800 Points</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>Max Chain</td>*/
/*         <td>25600 Points</td>*/
/*     </tr>*/
/* </table>*/
/* */
/* <ul>*/
/*     <li><a href="../ikaruga/black">Black</a></li>*/
/*     <li><a href="../ikaruga/white">White</a></li>*/
/* </ul>*/
/* */
/* */
