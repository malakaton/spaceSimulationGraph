<?php

/* layout.html.twig */
class __TwigTemplate_8966d8290ab80a776b1c7550df0551efefda38304aac0673b163c0d3001b5428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64296e3ea25bb5e7d706e94a1fcb8c8e836e2d5c519b742fbb0bbdeeaf5ba834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64296e3ea25bb5e7d706e94a1fcb8c8e836e2d5c519b742fbb0bbdeeaf5ba834->enter($__internal_64296e3ea25bb5e7d706e94a1fcb8c8e836e2d5c519b742fbb0bbdeeaf5ba834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64296e3ea25bb5e7d706e94a1fcb8c8e836e2d5c519b742fbb0bbdeeaf5ba834->leave($__internal_64296e3ea25bb5e7d706e94a1fcb8c8e836e2d5c519b742fbb0bbdeeaf5ba834_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7521f7ecdfebf43d2b54af18500fa3be2376f15b6f03802434bd33ae7a1d7707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7521f7ecdfebf43d2b54af18500fa3be2376f15b6f03802434bd33ae7a1d7707->enter($__internal_7521f7ecdfebf43d2b54af18500fa3be2376f15b6f03802434bd33ae7a1d7707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('menu', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_7521f7ecdfebf43d2b54af18500fa3be2376f15b6f03802434bd33ae7a1d7707->leave($__internal_7521f7ecdfebf43d2b54af18500fa3be2376f15b6f03802434bd33ae7a1d7707_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_afa6bd95e771f133f99bff6b9d8e929fa8165e5d30ba91edc8bcaafe1932f5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa6bd95e771f133f99bff6b9d8e929fa8165e5d30ba91edc8bcaafe1932f5af->enter($__internal_afa6bd95e771f133f99bff6b9d8e929fa8165e5d30ba91edc8bcaafe1932f5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "        <!-- CABECERA -->

        <!-- END CABECERA -->
    ";
        
        $__internal_afa6bd95e771f133f99bff6b9d8e929fa8165e5d30ba91edc8bcaafe1932f5af->leave($__internal_afa6bd95e771f133f99bff6b9d8e929fa8165e5d30ba91edc8bcaafe1932f5af_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8f1ddeb9d37fbc11f90fb4a5d540303faa0c62b02f0a8e0c20029847a887bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f1ddeb9d37fbc11f90fb4a5d540303faa0c62b02f0a8e0c20029847a887bac->enter($__internal_a8f1ddeb9d37fbc11f90fb4a5d540303faa0c62b02f0a8e0c20029847a887bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 10
        echo "
    ";
        
        $__internal_a8f1ddeb9d37fbc11f90fb4a5d540303faa0c62b02f0a8e0c20029847a887bac->leave($__internal_a8f1ddeb9d37fbc11f90fb4a5d540303faa0c62b02f0a8e0c20029847a887bac_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2f2354416ee4adb05a0620ec7781279be18c914c2eca1b234028340b6dc2576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f2354416ee4adb05a0620ec7781279be18c914c2eca1b234028340b6dc2576->enter($__internal_f2f2354416ee4adb05a0620ec7781279be18c914c2eca1b234028340b6dc2576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f2f2354416ee4adb05a0620ec7781279be18c914c2eca1b234028340b6dc2576->leave($__internal_f2f2354416ee4adb05a0620ec7781279be18c914c2eca1b234028340b6dc2576_prof);

    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b23cf1c5961b56f11c12b6b652fa6d853cc9473d275a631ab07f0f1d31ae4b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23cf1c5961b56f11c12b6b652fa6d853cc9473d275a631ab07f0f1d31ae4b7e->enter($__internal_b23cf1c5961b56f11c12b6b652fa6d853cc9473d275a631ab07f0f1d31ae4b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 16
        echo "
    ";
        
        $__internal_b23cf1c5961b56f11c12b6b652fa6d853cc9473d275a631ab07f0f1d31ae4b7e->leave($__internal_b23cf1c5961b56f11c12b6b652fa6d853cc9473d275a631ab07f0f1d31ae4b7e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 16,  108 => 15,  97 => 13,  89 => 10,  83 => 9,  73 => 4,  67 => 3,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  50 => 9,  47 => 8,  44 => 3,  38 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    {% block header %}
        <!-- CABECERA -->

        <!-- END CABECERA -->
    {% endblock%}

    {% block menu %}

    {% endblock %}

    {% block content %}{% endblock %}

    {% block footer %}

    {% endblock %}
{% endblock %}", "layout.html.twig", "/home/malakaton/phpProjects/spaceSimulatorGraph/app/Resources/views/layout.html.twig");
    }
}
