<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_239d33d300abc6707f02b89ece7f9e920d827fd87fdba361fa1e2664a8dbcf29 extends Twig_Template
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
        $__internal_e295553077b9e453b5b104dbb5f5dc5c4bc4df8bb5117dc8690f6c87050eb85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e295553077b9e453b5b104dbb5f5dc5c4bc4df8bb5117dc8690f6c87050eb85d->enter($__internal_e295553077b9e453b5b104dbb5f5dc5c4bc4df8bb5117dc8690f6c87050eb85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fb411e39c44e3e8ec83d659eb4adae9523b6ffa20ed752974a754f46b80d2157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb411e39c44e3e8ec83d659eb4adae9523b6ffa20ed752974a754f46b80d2157->enter($__internal_fb411e39c44e3e8ec83d659eb4adae9523b6ffa20ed752974a754f46b80d2157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e295553077b9e453b5b104dbb5f5dc5c4bc4df8bb5117dc8690f6c87050eb85d->leave($__internal_e295553077b9e453b5b104dbb5f5dc5c4bc4df8bb5117dc8690f6c87050eb85d_prof);

        
        $__internal_fb411e39c44e3e8ec83d659eb4adae9523b6ffa20ed752974a754f46b80d2157->leave($__internal_fb411e39c44e3e8ec83d659eb4adae9523b6ffa20ed752974a754f46b80d2157_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e56815b57fb03e2c721dcd4886f13e92dc8eda65659340e33977faf945ed7a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56815b57fb03e2c721dcd4886f13e92dc8eda65659340e33977faf945ed7a42->enter($__internal_e56815b57fb03e2c721dcd4886f13e92dc8eda65659340e33977faf945ed7a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09bb071749578fed9cb3f3950f91a283c30cb3dcc85a308be1a2309bc4c08a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bb071749578fed9cb3f3950f91a283c30cb3dcc85a308be1a2309bc4c08a39->enter($__internal_09bb071749578fed9cb3f3950f91a283c30cb3dcc85a308be1a2309bc4c08a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_09bb071749578fed9cb3f3950f91a283c30cb3dcc85a308be1a2309bc4c08a39->leave($__internal_09bb071749578fed9cb3f3950f91a283c30cb3dcc85a308be1a2309bc4c08a39_prof);

        
        $__internal_e56815b57fb03e2c721dcd4886f13e92dc8eda65659340e33977faf945ed7a42->leave($__internal_e56815b57fb03e2c721dcd4886f13e92dc8eda65659340e33977faf945ed7a42_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3e1dfd23e8c1156aca95a46e484615a64daf839566d8daffa302df0b41a4249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e1dfd23e8c1156aca95a46e484615a64daf839566d8daffa302df0b41a4249->enter($__internal_c3e1dfd23e8c1156aca95a46e484615a64daf839566d8daffa302df0b41a4249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b9451ca4c7e4f9c03d666d2978dbd42e85c3749f56dec0225fcd7297fa39bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9451ca4c7e4f9c03d666d2978dbd42e85c3749f56dec0225fcd7297fa39bdc->enter($__internal_0b9451ca4c7e4f9c03d666d2978dbd42e85c3749f56dec0225fcd7297fa39bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0b9451ca4c7e4f9c03d666d2978dbd42e85c3749f56dec0225fcd7297fa39bdc->leave($__internal_0b9451ca4c7e4f9c03d666d2978dbd42e85c3749f56dec0225fcd7297fa39bdc_prof);

        
        $__internal_c3e1dfd23e8c1156aca95a46e484615a64daf839566d8daffa302df0b41a4249->leave($__internal_c3e1dfd23e8c1156aca95a46e484615a64daf839566d8daffa302df0b41a4249_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ad2c125d9b058149745fcce3614afd1cee76bef4a649c6ba1d179b463fcbe8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad2c125d9b058149745fcce3614afd1cee76bef4a649c6ba1d179b463fcbe8f->enter($__internal_6ad2c125d9b058149745fcce3614afd1cee76bef4a649c6ba1d179b463fcbe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1320b0faf5b9df75c51567378f170c5c901a95df31c1687371298055153e52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1320b0faf5b9df75c51567378f170c5c901a95df31c1687371298055153e52d->enter($__internal_c1320b0faf5b9df75c51567378f170c5c901a95df31c1687371298055153e52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1320b0faf5b9df75c51567378f170c5c901a95df31c1687371298055153e52d->leave($__internal_c1320b0faf5b9df75c51567378f170c5c901a95df31c1687371298055153e52d_prof);

        
        $__internal_6ad2c125d9b058149745fcce3614afd1cee76bef4a649c6ba1d179b463fcbe8f->leave($__internal_6ad2c125d9b058149745fcce3614afd1cee76bef4a649c6ba1d179b463fcbe8f_prof);

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
", "@Twig/layout.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
