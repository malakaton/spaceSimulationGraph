<?php

/* base.html.twig */
class __TwigTemplate_c832d70fc847e1baced3eebd2942083bb129fa889eddf95d496702d902ae9105 extends Twig_Template
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
        $__internal_d795bdaec8ad1751e52c2b19a476b04a3026d35e49bdc6b3c2a1e58041fa8f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d795bdaec8ad1751e52c2b19a476b04a3026d35e49bdc6b3c2a1e58041fa8f7f->enter($__internal_d795bdaec8ad1751e52c2b19a476b04a3026d35e49bdc6b3c2a1e58041fa8f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_d795bdaec8ad1751e52c2b19a476b04a3026d35e49bdc6b3c2a1e58041fa8f7f->leave($__internal_d795bdaec8ad1751e52c2b19a476b04a3026d35e49bdc6b3c2a1e58041fa8f7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcfbbc9c75c0fb3d0e62f28676a91f05c4ea28fc7138ce223585da7d042a875f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfbbc9c75c0fb3d0e62f28676a91f05c4ea28fc7138ce223585da7d042a875f->enter($__internal_dcfbbc9c75c0fb3d0e62f28676a91f05c4ea28fc7138ce223585da7d042a875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Space Simulation Graph";
        
        $__internal_dcfbbc9c75c0fb3d0e62f28676a91f05c4ea28fc7138ce223585da7d042a875f->leave($__internal_dcfbbc9c75c0fb3d0e62f28676a91f05c4ea28fc7138ce223585da7d042a875f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03d4129121a1f880b8c0d653d9870d455d36d02be3322d095ff0a3a810cd6e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d4129121a1f880b8c0d653d9870d455d36d02be3322d095ff0a3a810cd6e53->enter($__internal_03d4129121a1f880b8c0d653d9870d455d36d02be3322d095ff0a3a810cd6e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_03d4129121a1f880b8c0d653d9870d455d36d02be3322d095ff0a3a810cd6e53->leave($__internal_03d4129121a1f880b8c0d653d9870d455d36d02be3322d095ff0a3a810cd6e53_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd7b3304abfaf4e86c01887a64c1e9d052852a41b7e26b420c404f63b46ea8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7b3304abfaf4e86c01887a64c1e9d052852a41b7e26b420c404f63b46ea8be->enter($__internal_cd7b3304abfaf4e86c01887a64c1e9d052852a41b7e26b420c404f63b46ea8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd7b3304abfaf4e86c01887a64c1e9d052852a41b7e26b420c404f63b46ea8be->leave($__internal_cd7b3304abfaf4e86c01887a64c1e9d052852a41b7e26b420c404f63b46ea8be_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd3063ad3f230c2bafe67deb1ef462f506271836e5d376aa6863cfc4d41959cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3063ad3f230c2bafe67deb1ef462f506271836e5d376aa6863cfc4d41959cd->enter($__internal_bd3063ad3f230c2bafe67deb1ef462f506271836e5d376aa6863cfc4d41959cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/dist/jquery.slim.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_bd3063ad3f230c2bafe67deb1ef462f506271836e5d376aa6863cfc4d41959cd->leave($__internal_bd3063ad3f230c2bafe67deb1ef462f506271836e5d376aa6863cfc4d41959cd_prof);

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
        return array (  104 => 14,  98 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 16,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Space Simulation Graph{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('vendor/jquery/dist/jquery.slim.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/malakaton/phpProjects/spaceSimulatorGraph/app/Resources/views/base.html.twig");
    }
}
