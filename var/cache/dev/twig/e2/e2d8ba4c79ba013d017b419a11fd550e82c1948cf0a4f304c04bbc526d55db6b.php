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
        $__internal_7b11e68f019ff44b6c5cf64969396454149bb80b432a9e0f7e2047bd5c2fb6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b11e68f019ff44b6c5cf64969396454149bb80b432a9e0f7e2047bd5c2fb6a5->enter($__internal_7b11e68f019ff44b6c5cf64969396454149bb80b432a9e0f7e2047bd5c2fb6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_28a43f0ac56a6c7c25ba56ef4c2202d9fb844409dcefba0f96641450ddd7d843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a43f0ac56a6c7c25ba56ef4c2202d9fb844409dcefba0f96641450ddd7d843->enter($__internal_28a43f0ac56a6c7c25ba56ef4c2202d9fb844409dcefba0f96641450ddd7d843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7b11e68f019ff44b6c5cf64969396454149bb80b432a9e0f7e2047bd5c2fb6a5->leave($__internal_7b11e68f019ff44b6c5cf64969396454149bb80b432a9e0f7e2047bd5c2fb6a5_prof);

        
        $__internal_28a43f0ac56a6c7c25ba56ef4c2202d9fb844409dcefba0f96641450ddd7d843->leave($__internal_28a43f0ac56a6c7c25ba56ef4c2202d9fb844409dcefba0f96641450ddd7d843_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f11092b9f2fc1008e68b9cd6baf20b8a3de19bcf20595c8009259c7326b77ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11092b9f2fc1008e68b9cd6baf20b8a3de19bcf20595c8009259c7326b77ce2->enter($__internal_f11092b9f2fc1008e68b9cd6baf20b8a3de19bcf20595c8009259c7326b77ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_752748a79cd91b77e3d9630b9be312533fc6e43464e5709561a3b50060451ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752748a79cd91b77e3d9630b9be312533fc6e43464e5709561a3b50060451ba7->enter($__internal_752748a79cd91b77e3d9630b9be312533fc6e43464e5709561a3b50060451ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_752748a79cd91b77e3d9630b9be312533fc6e43464e5709561a3b50060451ba7->leave($__internal_752748a79cd91b77e3d9630b9be312533fc6e43464e5709561a3b50060451ba7_prof);

        
        $__internal_f11092b9f2fc1008e68b9cd6baf20b8a3de19bcf20595c8009259c7326b77ce2->leave($__internal_f11092b9f2fc1008e68b9cd6baf20b8a3de19bcf20595c8009259c7326b77ce2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_308e7081fcd7ecd60f7a6afa83b4351442f26e7639f754a11f955c0c3b6cfcec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308e7081fcd7ecd60f7a6afa83b4351442f26e7639f754a11f955c0c3b6cfcec->enter($__internal_308e7081fcd7ecd60f7a6afa83b4351442f26e7639f754a11f955c0c3b6cfcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_216b64389b83dd585cab01666a4a6acf5ad95935f24d9acbdc2aefc77f6d1d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216b64389b83dd585cab01666a4a6acf5ad95935f24d9acbdc2aefc77f6d1d3f->enter($__internal_216b64389b83dd585cab01666a4a6acf5ad95935f24d9acbdc2aefc77f6d1d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_216b64389b83dd585cab01666a4a6acf5ad95935f24d9acbdc2aefc77f6d1d3f->leave($__internal_216b64389b83dd585cab01666a4a6acf5ad95935f24d9acbdc2aefc77f6d1d3f_prof);

        
        $__internal_308e7081fcd7ecd60f7a6afa83b4351442f26e7639f754a11f955c0c3b6cfcec->leave($__internal_308e7081fcd7ecd60f7a6afa83b4351442f26e7639f754a11f955c0c3b6cfcec_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5cabc2042e68980aee36bb7d4302e3338ce8d126f969b3f7d965f16cfdebc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5cabc2042e68980aee36bb7d4302e3338ce8d126f969b3f7d965f16cfdebc74->enter($__internal_c5cabc2042e68980aee36bb7d4302e3338ce8d126f969b3f7d965f16cfdebc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48eedcc7178d76fc7671d3004c23f5ef199612f41fa05714b35b5c95f6322645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48eedcc7178d76fc7671d3004c23f5ef199612f41fa05714b35b5c95f6322645->enter($__internal_48eedcc7178d76fc7671d3004c23f5ef199612f41fa05714b35b5c95f6322645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_48eedcc7178d76fc7671d3004c23f5ef199612f41fa05714b35b5c95f6322645->leave($__internal_48eedcc7178d76fc7671d3004c23f5ef199612f41fa05714b35b5c95f6322645_prof);

        
        $__internal_c5cabc2042e68980aee36bb7d4302e3338ce8d126f969b3f7d965f16cfdebc74->leave($__internal_c5cabc2042e68980aee36bb7d4302e3338ce8d126f969b3f7d965f16cfdebc74_prof);

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
