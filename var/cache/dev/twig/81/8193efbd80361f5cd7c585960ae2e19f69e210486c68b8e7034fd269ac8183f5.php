<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_0746bbddf6d9b79ab58453e41cdbebd6f95f7313b09ea601f60dc4510ebdc318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43255e2ef41507ada204da13fc4cc6ef88ad5f929365346ae03a49dd6b23564d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43255e2ef41507ada204da13fc4cc6ef88ad5f929365346ae03a49dd6b23564d->enter($__internal_43255e2ef41507ada204da13fc4cc6ef88ad5f929365346ae03a49dd6b23564d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_6a081633b4fc6091f1b69c0770ea73620d7ede3d5d09d4f244f3a7c5aeeb2ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a081633b4fc6091f1b69c0770ea73620d7ede3d5d09d4f244f3a7c5aeeb2ea3->enter($__internal_6a081633b4fc6091f1b69c0770ea73620d7ede3d5d09d4f244f3a7c5aeeb2ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_43255e2ef41507ada204da13fc4cc6ef88ad5f929365346ae03a49dd6b23564d->leave($__internal_43255e2ef41507ada204da13fc4cc6ef88ad5f929365346ae03a49dd6b23564d_prof);

        
        $__internal_6a081633b4fc6091f1b69c0770ea73620d7ede3d5d09d4f244f3a7c5aeeb2ea3->leave($__internal_6a081633b4fc6091f1b69c0770ea73620d7ede3d5d09d4f244f3a7c5aeeb2ea3_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_02250b8784415de96c6f824e3cb277df4aa26f53a96bd3d4a2187a849646203d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02250b8784415de96c6f824e3cb277df4aa26f53a96bd3d4a2187a849646203d->enter($__internal_02250b8784415de96c6f824e3cb277df4aa26f53a96bd3d4a2187a849646203d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed8c8d5320543810aaec210ea276229cdf865a09e60ea3a3e222222f81f44dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8c8d5320543810aaec210ea276229cdf865a09e60ea3a3e222222f81f44dd8->enter($__internal_ed8c8d5320543810aaec210ea276229cdf865a09e60ea3a3e222222f81f44dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Application";
        
        $__internal_ed8c8d5320543810aaec210ea276229cdf865a09e60ea3a3e222222f81f44dd8->leave($__internal_ed8c8d5320543810aaec210ea276229cdf865a09e60ea3a3e222222f81f44dd8_prof);

        
        $__internal_02250b8784415de96c6f824e3cb277df4aa26f53a96bd3d4a2187a849646203d->leave($__internal_02250b8784415de96c6f824e3cb277df4aa26f53a96bd3d4a2187a849646203d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_025674fed459cac72da1d206d6c10f8ef69cf07e1e6c319ce3aab971c55fa338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025674fed459cac72da1d206d6c10f8ef69cf07e1e6c319ce3aab971c55fa338->enter($__internal_025674fed459cac72da1d206d6c10f8ef69cf07e1e6c319ce3aab971c55fa338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e661cbd2167a1344462e434385d28fcdf4972fed7e66c0febec48f4cfc67fbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e661cbd2167a1344462e434385d28fcdf4972fed7e66c0febec48f4cfc67fbc4->enter($__internal_e661cbd2167a1344462e434385d28fcdf4972fed7e66c0febec48f4cfc67fbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    testest
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e661cbd2167a1344462e434385d28fcdf4972fed7e66c0febec48f4cfc67fbc4->leave($__internal_e661cbd2167a1344462e434385d28fcdf4972fed7e66c0febec48f4cfc67fbc4_prof);

        
        $__internal_025674fed459cac72da1d206d6c10f8ef69cf07e1e6c319ce3aab971c55fa338->leave($__internal_025674fed459cac72da1d206d6c10f8ef69cf07e1e6c319ce3aab971c55fa338_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e382ebf92dc5b6bbb84aad059f3af36e6745c8a2bf40befaab0f7884bacf3b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e382ebf92dc5b6bbb84aad059f3af36e6745c8a2bf40befaab0f7884bacf3b63->enter($__internal_e382ebf92dc5b6bbb84aad059f3af36e6745c8a2bf40befaab0f7884bacf3b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02d12fd8c2fa2c3921d9f75d1a40aa185c0a37881da7ec24d5c027aa648802d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d12fd8c2fa2c3921d9f75d1a40aa185c0a37881da7ec24d5c027aa648802d3->enter($__internal_02d12fd8c2fa2c3921d9f75d1a40aa185c0a37881da7ec24d5c027aa648802d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_02d12fd8c2fa2c3921d9f75d1a40aa185c0a37881da7ec24d5c027aa648802d3->leave($__internal_02d12fd8c2fa2c3921d9f75d1a40aa185c0a37881da7ec24d5c027aa648802d3_prof);

        
        $__internal_e382ebf92dc5b6bbb84aad059f3af36e6745c8a2bf40befaab0f7884bacf3b63->leave($__internal_e382ebf92dc5b6bbb84aad059f3af36e6745c8a2bf40befaab0f7884bacf3b63_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 5,  70 => 4,  61 => 3,  43 => 1,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Demo Application{% endblock %}

{% block content %}
    testest
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "UserBundle::layout.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/src/UserBundle/Resources/views/layout.html.twig");
    }
}
