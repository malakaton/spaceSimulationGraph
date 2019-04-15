<?php

/* SpaceSimulatorBundle:Simulation:index.html.twig */
class __TwigTemplate_7d543a7efaf980513f212020f9301c4a60fa3c61ce163b716bb31b29d2bf12d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SpaceSimulatorBundle:Simulation:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e640d3a18e82a03dca96721938042d8d2c37523385274e9bcf402aff3b1dcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e640d3a18e82a03dca96721938042d8d2c37523385274e9bcf402aff3b1dcaa->enter($__internal_3e640d3a18e82a03dca96721938042d8d2c37523385274e9bcf402aff3b1dcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SpaceSimulatorBundle:Simulation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e640d3a18e82a03dca96721938042d8d2c37523385274e9bcf402aff3b1dcaa->leave($__internal_3e640d3a18e82a03dca96721938042d8d2c37523385274e9bcf402aff3b1dcaa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c75c911f67703129e1bd80349a37af8c2636e5edf9b57b2aef9b5ad93d03b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c75c911f67703129e1bd80349a37af8c2636e5edf9b57b2aef9b5ad93d03b93->enter($__internal_4c75c911f67703129e1bd80349a37af8c2636e5edf9b57b2aef9b5ad93d03b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"card text-center\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Space Simulation</h5>
            <p class=\"card-text\">Write graph about space simulation</p>
            <a href=\"#\" class=\"btn btn-primary\">Go simulation</a>
        </div>
        <div class=\"card-footer text-muted\">
            Powered by Malakatron!
        </div>
    </div>
";
        
        $__internal_4c75c911f67703129e1bd80349a37af8c2636e5edf9b57b2aef9b5ad93d03b93->leave($__internal_4c75c911f67703129e1bd80349a37af8c2636e5edf9b57b2aef9b5ad93d03b93_prof);

    }

    public function getTemplateName()
    {
        return "SpaceSimulatorBundle:Simulation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block content %}
    <div class=\"card text-center\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Space Simulation</h5>
            <p class=\"card-text\">Write graph about space simulation</p>
            <a href=\"#\" class=\"btn btn-primary\">Go simulation</a>
        </div>
        <div class=\"card-footer text-muted\">
            Powered by Malakatron!
        </div>
    </div>
{% endblock %}", "SpaceSimulatorBundle:Simulation:index.html.twig", "/home/malakaton/phpProjects/spaceSimulatorGraph/src/SpaceSimulatorBundle/Resources/views/Simulation/index.html.twig");
    }
}
