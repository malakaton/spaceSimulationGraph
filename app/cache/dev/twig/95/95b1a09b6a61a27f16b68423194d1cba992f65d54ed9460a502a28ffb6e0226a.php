<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14205839caf1db40c37215ff679ab4c3fccad593c3fe99877e9bd2f37257f5ed extends Twig_Template
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
        $__internal_dfd0cc94c0bed697232ee5db6ec2180a927b94789a0664879bfb5cd38ddfca41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd0cc94c0bed697232ee5db6ec2180a927b94789a0664879bfb5cd38ddfca41->enter($__internal_dfd0cc94c0bed697232ee5db6ec2180a927b94789a0664879bfb5cd38ddfca41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd0cc94c0bed697232ee5db6ec2180a927b94789a0664879bfb5cd38ddfca41->leave($__internal_dfd0cc94c0bed697232ee5db6ec2180a927b94789a0664879bfb5cd38ddfca41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_659e9ef1cd8d0210c9311a729746e37b79fad753d724af2f1a6e0bef22526eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659e9ef1cd8d0210c9311a729746e37b79fad753d724af2f1a6e0bef22526eff->enter($__internal_659e9ef1cd8d0210c9311a729746e37b79fad753d724af2f1a6e0bef22526eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_659e9ef1cd8d0210c9311a729746e37b79fad753d724af2f1a6e0bef22526eff->leave($__internal_659e9ef1cd8d0210c9311a729746e37b79fad753d724af2f1a6e0bef22526eff_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a306402dc3fbb64ec9ae89de62678be605bff72dd3d0dd61bc2b08d5a3908df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a306402dc3fbb64ec9ae89de62678be605bff72dd3d0dd61bc2b08d5a3908df5->enter($__internal_a306402dc3fbb64ec9ae89de62678be605bff72dd3d0dd61bc2b08d5a3908df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a306402dc3fbb64ec9ae89de62678be605bff72dd3d0dd61bc2b08d5a3908df5->leave($__internal_a306402dc3fbb64ec9ae89de62678be605bff72dd3d0dd61bc2b08d5a3908df5_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f26bbdbd442300b733d5acb435652a6ea8d74f91cedad70261a86fb36d01fc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26bbdbd442300b733d5acb435652a6ea8d74f91cedad70261a86fb36d01fc29->enter($__internal_f26bbdbd442300b733d5acb435652a6ea8d74f91cedad70261a86fb36d01fc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f26bbdbd442300b733d5acb435652a6ea8d74f91cedad70261a86fb36d01fc29->leave($__internal_f26bbdbd442300b733d5acb435652a6ea8d74f91cedad70261a86fb36d01fc29_prof);

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
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', {'token': token})) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/malakaton/phpProjects/spaceSimulatorGraph/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
