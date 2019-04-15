<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ee662fb850988d496e84572afc749c28df1784f1dfa7d4710600481f5a49e274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ac4ffafaf3a662e155be258e4ab9c81b871da65abc12cd4fc2bdcafc9bcdb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac4ffafaf3a662e155be258e4ab9c81b871da65abc12cd4fc2bdcafc9bcdb7f->enter($__internal_5ac4ffafaf3a662e155be258e4ab9c81b871da65abc12cd4fc2bdcafc9bcdb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac4ffafaf3a662e155be258e4ab9c81b871da65abc12cd4fc2bdcafc9bcdb7f->leave($__internal_5ac4ffafaf3a662e155be258e4ab9c81b871da65abc12cd4fc2bdcafc9bcdb7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_718c3499311a1da485f51847503fcca3ded328019aa3eed90d8775fd8b179e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718c3499311a1da485f51847503fcca3ded328019aa3eed90d8775fd8b179e01->enter($__internal_718c3499311a1da485f51847503fcca3ded328019aa3eed90d8775fd8b179e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_718c3499311a1da485f51847503fcca3ded328019aa3eed90d8775fd8b179e01->leave($__internal_718c3499311a1da485f51847503fcca3ded328019aa3eed90d8775fd8b179e01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_660ddd028b71add4422320566fb1e10646be8c0fefab61591b7dbff6764c807a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660ddd028b71add4422320566fb1e10646be8c0fefab61591b7dbff6764c807a->enter($__internal_660ddd028b71add4422320566fb1e10646be8c0fefab61591b7dbff6764c807a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_660ddd028b71add4422320566fb1e10646be8c0fefab61591b7dbff6764c807a->leave($__internal_660ddd028b71add4422320566fb1e10646be8c0fefab61591b7dbff6764c807a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_87c867fa8b8d5bb27758af05cfa4b0d8424eeb7d7b687eb78585997e075ac2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c867fa8b8d5bb27758af05cfa4b0d8424eeb7d7b687eb78585997e075ac2ba->enter($__internal_87c867fa8b8d5bb27758af05cfa4b0d8424eeb7d7b687eb78585997e075ac2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_87c867fa8b8d5bb27758af05cfa4b0d8424eeb7d7b687eb78585997e075ac2ba->leave($__internal_87c867fa8b8d5bb27758af05cfa4b0d8424eeb7d7b687eb78585997e075ac2ba_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_67d6a3ffa1820f4d55f8059cad98f069099964163b05fbd502087d1451138f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d6a3ffa1820f4d55f8059cad98f069099964163b05fbd502087d1451138f38->enter($__internal_67d6a3ffa1820f4d55f8059cad98f069099964163b05fbd502087d1451138f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_67d6a3ffa1820f4d55f8059cad98f069099964163b05fbd502087d1451138f38->leave($__internal_67d6a3ffa1820f4d55f8059cad98f069099964163b05fbd502087d1451138f38_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/malakaton/phpProjects/spaceSimulatorGraph/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
