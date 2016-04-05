<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d049b961a87b9cfd4cf2af8eadc81eee6876c2251161b76df4321d5b9bc2889a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0afa92a683af024feb963ce6606a7407e3673c2ac34caaee737ee6c6c3533be8 = $this->env->getExtension("native_profiler");
        $__internal_0afa92a683af024feb963ce6606a7407e3673c2ac34caaee737ee6c6c3533be8->enter($__internal_0afa92a683af024feb963ce6606a7407e3673c2ac34caaee737ee6c6c3533be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0afa92a683af024feb963ce6606a7407e3673c2ac34caaee737ee6c6c3533be8->leave($__internal_0afa92a683af024feb963ce6606a7407e3673c2ac34caaee737ee6c6c3533be8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3691f3c3816fdddcf4f26e4debc08e1c870f2842b0892e9451f91cafc7a28a46 = $this->env->getExtension("native_profiler");
        $__internal_3691f3c3816fdddcf4f26e4debc08e1c870f2842b0892e9451f91cafc7a28a46->enter($__internal_3691f3c3816fdddcf4f26e4debc08e1c870f2842b0892e9451f91cafc7a28a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3691f3c3816fdddcf4f26e4debc08e1c870f2842b0892e9451f91cafc7a28a46->leave($__internal_3691f3c3816fdddcf4f26e4debc08e1c870f2842b0892e9451f91cafc7a28a46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_287531298f698fa48f9a20a71b134e739b74205346295bf83425ce1c664d5a76 = $this->env->getExtension("native_profiler");
        $__internal_287531298f698fa48f9a20a71b134e739b74205346295bf83425ce1c664d5a76->enter($__internal_287531298f698fa48f9a20a71b134e739b74205346295bf83425ce1c664d5a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_287531298f698fa48f9a20a71b134e739b74205346295bf83425ce1c664d5a76->leave($__internal_287531298f698fa48f9a20a71b134e739b74205346295bf83425ce1c664d5a76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f034985c1a7320940933d240415ebc40551d658b42121db38cc9fd66845083b9 = $this->env->getExtension("native_profiler");
        $__internal_f034985c1a7320940933d240415ebc40551d658b42121db38cc9fd66845083b9->enter($__internal_f034985c1a7320940933d240415ebc40551d658b42121db38cc9fd66845083b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f034985c1a7320940933d240415ebc40551d658b42121db38cc9fd66845083b9->leave($__internal_f034985c1a7320940933d240415ebc40551d658b42121db38cc9fd66845083b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
