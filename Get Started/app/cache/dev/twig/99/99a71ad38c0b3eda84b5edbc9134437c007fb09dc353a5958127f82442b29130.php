<?php

/* LeaderboardBundle:Crimzon_Clover:index.html.twig */
class __TwigTemplate_eef45044997743e55e0555db7000ff9ae7816a288e0a178f0c2f5371cef2ee57 extends Twig_Template
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
        $__internal_35e7f43a2063938f6625c332b1eed95fcdcb870c19e79e24d750b74da4f2f7a5 = $this->env->getExtension("native_profiler");
        $__internal_35e7f43a2063938f6625c332b1eed95fcdcb870c19e79e24d750b74da4f2f7a5->enter($__internal_35e7f43a2063938f6625c332b1eed95fcdcb870c19e79e24d750b74da4f2f7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LeaderboardBundle:Crimzon_Clover:index.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/asset/style.css"), "html", null, true);
        echo "\" />

<ul>
    <li><a href=\"../mushihimesama\">Mushihimesama</a></li>
    <li><a href=\"../deathsmiles\">Death Smiles</a></li>
    <li><a href=\"../ikaruga\">Ikaruga</a></li>
    <li><a href=\"../yaoi\">Yaoi</a></li>
</ul>

<iframe width=\"420\" height=\"315\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen></iframe>

<ul>
    <li><a href=\"../crimzon_clover/type1\">Type1</a></li>
    <li><a href=\"../crimzon_clover/type3\">Type3</a></li>
    <li><a href=\"../crimzon_clover/typeZ\">TypeZ</a></li>
</ul>";
        
        $__internal_35e7f43a2063938f6625c332b1eed95fcdcb870c19e79e24d750b74da4f2f7a5->leave($__internal_35e7f43a2063938f6625c332b1eed95fcdcb870c19e79e24d750b74da4f2f7a5_prof);

    }

    public function getTemplateName()
    {
        return "LeaderboardBundle:Crimzon_Clover:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  22 => 1,);
    }
}
/* <link rel="stylesheet" href="{{ asset('bundles/asset/style.css') }}" />*/
/* */
/* <ul>*/
/*     <li><a href="../mushihimesama">Mushihimesama</a></li>*/
/*     <li><a href="../deathsmiles">Death Smiles</a></li>*/
/*     <li><a href="../ikaruga">Ikaruga</a></li>*/
/*     <li><a href="../yaoi">Yaoi</a></li>*/
/* </ul>*/
/* */
/* <iframe width="420" height="315" src="{{ type }}" frameborder="0" allowfullscreen></iframe>*/
/* */
/* <ul>*/
/*     <li><a href="../crimzon_clover/type1">Type1</a></li>*/
/*     <li><a href="../crimzon_clover/type3">Type3</a></li>*/
/*     <li><a href="../crimzon_clover/typeZ">TypeZ</a></li>*/
/* </ul>*/
