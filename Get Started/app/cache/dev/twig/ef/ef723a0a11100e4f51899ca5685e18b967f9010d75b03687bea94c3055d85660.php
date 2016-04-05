<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3a99c4b2bf14ed321863b20e9c3536d28b239a93c7a952f9ad1619ea5d26f9c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db60a1633d811b55cbad47f8ebddda51a6432bad7264c9473b7fddb8c93099e5 = $this->env->getExtension("native_profiler");
        $__internal_db60a1633d811b55cbad47f8ebddda51a6432bad7264c9473b7fddb8c93099e5->enter($__internal_db60a1633d811b55cbad47f8ebddda51a6432bad7264c9473b7fddb8c93099e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db60a1633d811b55cbad47f8ebddda51a6432bad7264c9473b7fddb8c93099e5->leave($__internal_db60a1633d811b55cbad47f8ebddda51a6432bad7264c9473b7fddb8c93099e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_442e80049b4ba617f6731e8613bf094b0a69eee02663687857cfd43fc3700c9a = $this->env->getExtension("native_profiler");
        $__internal_442e80049b4ba617f6731e8613bf094b0a69eee02663687857cfd43fc3700c9a->enter($__internal_442e80049b4ba617f6731e8613bf094b0a69eee02663687857cfd43fc3700c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_442e80049b4ba617f6731e8613bf094b0a69eee02663687857cfd43fc3700c9a->leave($__internal_442e80049b4ba617f6731e8613bf094b0a69eee02663687857cfd43fc3700c9a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a614ca6414d18487f8f6376d51aa8d8fff607d5176916211b935d1b4ab085592 = $this->env->getExtension("native_profiler");
        $__internal_a614ca6414d18487f8f6376d51aa8d8fff607d5176916211b935d1b4ab085592->enter($__internal_a614ca6414d18487f8f6376d51aa8d8fff607d5176916211b935d1b4ab085592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a614ca6414d18487f8f6376d51aa8d8fff607d5176916211b935d1b4ab085592->leave($__internal_a614ca6414d18487f8f6376d51aa8d8fff607d5176916211b935d1b4ab085592_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7575804283f24c3e4379aecf61449970c1ac9c2f27f65f6f0ca4fe85a68352e = $this->env->getExtension("native_profiler");
        $__internal_d7575804283f24c3e4379aecf61449970c1ac9c2f27f65f6f0ca4fe85a68352e->enter($__internal_d7575804283f24c3e4379aecf61449970c1ac9c2f27f65f6f0ca4fe85a68352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7575804283f24c3e4379aecf61449970c1ac9c2f27f65f6f0ca4fe85a68352e->leave($__internal_d7575804283f24c3e4379aecf61449970c1ac9c2f27f65f6f0ca4fe85a68352e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
