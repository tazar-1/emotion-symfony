<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9bbf2b9b2a7ba33a1db95c4dbe990e215800eaea45b35987f9abbea27be1b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bbf2b9b2a7ba33a1db95c4dbe990e215800eaea45b35987f9abbea27be1b51->enter($__internal_e9bbf2b9b2a7ba33a1db95c4dbe990e215800eaea45b35987f9abbea27be1b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c2c9cd101c3d0c5a9ffbfa7f14b3cc8883646abdc72d45c934ee845e3bdb1677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c9cd101c3d0c5a9ffbfa7f14b3cc8883646abdc72d45c934ee845e3bdb1677->enter($__internal_c2c9cd101c3d0c5a9ffbfa7f14b3cc8883646abdc72d45c934ee845e3bdb1677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e9bbf2b9b2a7ba33a1db95c4dbe990e215800eaea45b35987f9abbea27be1b51->leave($__internal_e9bbf2b9b2a7ba33a1db95c4dbe990e215800eaea45b35987f9abbea27be1b51_prof);

        
        $__internal_c2c9cd101c3d0c5a9ffbfa7f14b3cc8883646abdc72d45c934ee845e3bdb1677->leave($__internal_c2c9cd101c3d0c5a9ffbfa7f14b3cc8883646abdc72d45c934ee845e3bdb1677_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97ff43f892eeb2f0ed64dded99ff8f782c4fafb9b610ea4b457a195d4923f903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ff43f892eeb2f0ed64dded99ff8f782c4fafb9b610ea4b457a195d4923f903->enter($__internal_97ff43f892eeb2f0ed64dded99ff8f782c4fafb9b610ea4b457a195d4923f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3107cfddd1c2055fe7d5385836cedea3bcee83a8af37856bf70bf5639069af0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3107cfddd1c2055fe7d5385836cedea3bcee83a8af37856bf70bf5639069af0f->enter($__internal_3107cfddd1c2055fe7d5385836cedea3bcee83a8af37856bf70bf5639069af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3107cfddd1c2055fe7d5385836cedea3bcee83a8af37856bf70bf5639069af0f->leave($__internal_3107cfddd1c2055fe7d5385836cedea3bcee83a8af37856bf70bf5639069af0f_prof);

        
        $__internal_97ff43f892eeb2f0ed64dded99ff8f782c4fafb9b610ea4b457a195d4923f903->leave($__internal_97ff43f892eeb2f0ed64dded99ff8f782c4fafb9b610ea4b457a195d4923f903_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_21226f088fe55c4bf0b6aeae535280d894a89f2559ea4ce5865a174d0d791451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21226f088fe55c4bf0b6aeae535280d894a89f2559ea4ce5865a174d0d791451->enter($__internal_21226f088fe55c4bf0b6aeae535280d894a89f2559ea4ce5865a174d0d791451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad523851692ca5264a04e81431caf3003aaf7ca1b2a0155542d483d1455c8b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad523851692ca5264a04e81431caf3003aaf7ca1b2a0155542d483d1455c8b92->enter($__internal_ad523851692ca5264a04e81431caf3003aaf7ca1b2a0155542d483d1455c8b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ad523851692ca5264a04e81431caf3003aaf7ca1b2a0155542d483d1455c8b92->leave($__internal_ad523851692ca5264a04e81431caf3003aaf7ca1b2a0155542d483d1455c8b92_prof);

        
        $__internal_21226f088fe55c4bf0b6aeae535280d894a89f2559ea4ce5865a174d0d791451->leave($__internal_21226f088fe55c4bf0b6aeae535280d894a89f2559ea4ce5865a174d0d791451_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eefb8537e4b96f1cb97a0ae854339f552f78bb97dc1e1609d53a87c3a3a7c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eefb8537e4b96f1cb97a0ae854339f552f78bb97dc1e1609d53a87c3a3a7c9b->enter($__internal_6eefb8537e4b96f1cb97a0ae854339f552f78bb97dc1e1609d53a87c3a3a7c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04ee060564078efbf4d5bd81c06cd5d6776f4c06c0820345bdd813640d8900f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ee060564078efbf4d5bd81c06cd5d6776f4c06c0820345bdd813640d8900f0->enter($__internal_04ee060564078efbf4d5bd81c06cd5d6776f4c06c0820345bdd813640d8900f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04ee060564078efbf4d5bd81c06cd5d6776f4c06c0820345bdd813640d8900f0->leave($__internal_04ee060564078efbf4d5bd81c06cd5d6776f4c06c0820345bdd813640d8900f0_prof);

        
        $__internal_6eefb8537e4b96f1cb97a0ae854339f552f78bb97dc1e1609d53a87c3a3a7c9b->leave($__internal_6eefb8537e4b96f1cb97a0ae854339f552f78bb97dc1e1609d53a87c3a3a7c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
