<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4c7b4289cb995b3ff6737044ed96bea61bb61f1d03ffc7d47b94b73dc8002b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f7982371181b0da46f01806b5d9c916115aa8f0690d7efe16df4100a26c35b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7982371181b0da46f01806b5d9c916115aa8f0690d7efe16df4100a26c35b2->enter($__internal_7f7982371181b0da46f01806b5d9c916115aa8f0690d7efe16df4100a26c35b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_abbbf5cb465472b3676e8cc4cd4f479356eff200d19833fe4f71eac70d8c992a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbbf5cb465472b3676e8cc4cd4f479356eff200d19833fe4f71eac70d8c992a->enter($__internal_abbbf5cb465472b3676e8cc4cd4f479356eff200d19833fe4f71eac70d8c992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f7982371181b0da46f01806b5d9c916115aa8f0690d7efe16df4100a26c35b2->leave($__internal_7f7982371181b0da46f01806b5d9c916115aa8f0690d7efe16df4100a26c35b2_prof);

        
        $__internal_abbbf5cb465472b3676e8cc4cd4f479356eff200d19833fe4f71eac70d8c992a->leave($__internal_abbbf5cb465472b3676e8cc4cd4f479356eff200d19833fe4f71eac70d8c992a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ff9d062a6208ebc0aa36e61b3b7e1aa74b0c404af52b491fab9077fd880cab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff9d062a6208ebc0aa36e61b3b7e1aa74b0c404af52b491fab9077fd880cab0->enter($__internal_0ff9d062a6208ebc0aa36e61b3b7e1aa74b0c404af52b491fab9077fd880cab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5efa4d7bc0cb450d808401caee9159d604f99704218887725ddf92aa7e3d6b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efa4d7bc0cb450d808401caee9159d604f99704218887725ddf92aa7e3d6b2c->enter($__internal_5efa4d7bc0cb450d808401caee9159d604f99704218887725ddf92aa7e3d6b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5efa4d7bc0cb450d808401caee9159d604f99704218887725ddf92aa7e3d6b2c->leave($__internal_5efa4d7bc0cb450d808401caee9159d604f99704218887725ddf92aa7e3d6b2c_prof);

        
        $__internal_0ff9d062a6208ebc0aa36e61b3b7e1aa74b0c404af52b491fab9077fd880cab0->leave($__internal_0ff9d062a6208ebc0aa36e61b3b7e1aa74b0c404af52b491fab9077fd880cab0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_57c2892a3d1ce1558f0b984e2de3a030f037b7ce102c9d83e2cfac2d03196f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c2892a3d1ce1558f0b984e2de3a030f037b7ce102c9d83e2cfac2d03196f96->enter($__internal_57c2892a3d1ce1558f0b984e2de3a030f037b7ce102c9d83e2cfac2d03196f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_feee9f19d5b13eb46ef0306aa693d38cce735a7a7064b84a3504682b5e642b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feee9f19d5b13eb46ef0306aa693d38cce735a7a7064b84a3504682b5e642b9a->enter($__internal_feee9f19d5b13eb46ef0306aa693d38cce735a7a7064b84a3504682b5e642b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_feee9f19d5b13eb46ef0306aa693d38cce735a7a7064b84a3504682b5e642b9a->leave($__internal_feee9f19d5b13eb46ef0306aa693d38cce735a7a7064b84a3504682b5e642b9a_prof);

        
        $__internal_57c2892a3d1ce1558f0b984e2de3a030f037b7ce102c9d83e2cfac2d03196f96->leave($__internal_57c2892a3d1ce1558f0b984e2de3a030f037b7ce102c9d83e2cfac2d03196f96_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_79d8463162afa335f958556814cfafce81e719530d85b060a16185a268c782de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d8463162afa335f958556814cfafce81e719530d85b060a16185a268c782de->enter($__internal_79d8463162afa335f958556814cfafce81e719530d85b060a16185a268c782de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a3a06f5c245526eaf69282d4a2a6da14a28b159637842e1d7a6c7d414ed74ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3a06f5c245526eaf69282d4a2a6da14a28b159637842e1d7a6c7d414ed74ed->enter($__internal_6a3a06f5c245526eaf69282d4a2a6da14a28b159637842e1d7a6c7d414ed74ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6a3a06f5c245526eaf69282d4a2a6da14a28b159637842e1d7a6c7d414ed74ed->leave($__internal_6a3a06f5c245526eaf69282d4a2a6da14a28b159637842e1d7a6c7d414ed74ed_prof);

        
        $__internal_79d8463162afa335f958556814cfafce81e719530d85b060a16185a268c782de->leave($__internal_79d8463162afa335f958556814cfafce81e719530d85b060a16185a268c782de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
