<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7256090e4a1d562d5ad86326a20df79535e06f85aa5bb173d3871b9a78ccce69 extends Twig_Template
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
        $__internal_1dd36475fc99b6a2d9604a46d905ea416a3fcf1f6a34920d49a220045b47726e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd36475fc99b6a2d9604a46d905ea416a3fcf1f6a34920d49a220045b47726e->enter($__internal_1dd36475fc99b6a2d9604a46d905ea416a3fcf1f6a34920d49a220045b47726e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd36475fc99b6a2d9604a46d905ea416a3fcf1f6a34920d49a220045b47726e->leave($__internal_1dd36475fc99b6a2d9604a46d905ea416a3fcf1f6a34920d49a220045b47726e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c726f97df17f34a70fae5955107cfbcbb4776e4f749ae129391268218078383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c726f97df17f34a70fae5955107cfbcbb4776e4f749ae129391268218078383->enter($__internal_5c726f97df17f34a70fae5955107cfbcbb4776e4f749ae129391268218078383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c726f97df17f34a70fae5955107cfbcbb4776e4f749ae129391268218078383->leave($__internal_5c726f97df17f34a70fae5955107cfbcbb4776e4f749ae129391268218078383_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84dd5d5b68cabcc249b9336758a0d18514537005154aa6e7a300158c78b82cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dd5d5b68cabcc249b9336758a0d18514537005154aa6e7a300158c78b82cd9->enter($__internal_84dd5d5b68cabcc249b9336758a0d18514537005154aa6e7a300158c78b82cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_84dd5d5b68cabcc249b9336758a0d18514537005154aa6e7a300158c78b82cd9->leave($__internal_84dd5d5b68cabcc249b9336758a0d18514537005154aa6e7a300158c78b82cd9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9a21aee8d9a9a79f692f6781a40255378607e8e6e020eb84c7f1abf718ae0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a21aee8d9a9a79f692f6781a40255378607e8e6e020eb84c7f1abf718ae0ae->enter($__internal_c9a21aee8d9a9a79f692f6781a40255378607e8e6e020eb84c7f1abf718ae0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c9a21aee8d9a9a79f692f6781a40255378607e8e6e020eb84c7f1abf718ae0ae->leave($__internal_c9a21aee8d9a9a79f692f6781a40255378607e8e6e020eb84c7f1abf718ae0ae_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/malakaton/phpProjects/spaceSimulatorGraph/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
