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
        $__internal_5bdc5515c5d95cbad5daa8aabb542890ea70a59b4e8de315bec28396e97a365c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bdc5515c5d95cbad5daa8aabb542890ea70a59b4e8de315bec28396e97a365c->enter($__internal_5bdc5515c5d95cbad5daa8aabb542890ea70a59b4e8de315bec28396e97a365c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_31e272c015b8ecdcd68a5de5ab120b521594fa3360f240594f8874f5c416571c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e272c015b8ecdcd68a5de5ab120b521594fa3360f240594f8874f5c416571c->enter($__internal_31e272c015b8ecdcd68a5de5ab120b521594fa3360f240594f8874f5c416571c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bdc5515c5d95cbad5daa8aabb542890ea70a59b4e8de315bec28396e97a365c->leave($__internal_5bdc5515c5d95cbad5daa8aabb542890ea70a59b4e8de315bec28396e97a365c_prof);

        
        $__internal_31e272c015b8ecdcd68a5de5ab120b521594fa3360f240594f8874f5c416571c->leave($__internal_31e272c015b8ecdcd68a5de5ab120b521594fa3360f240594f8874f5c416571c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a007f4dfa137675e763e4ec8b7995da1388aae18ce7b6130a3de55f7b9abdade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a007f4dfa137675e763e4ec8b7995da1388aae18ce7b6130a3de55f7b9abdade->enter($__internal_a007f4dfa137675e763e4ec8b7995da1388aae18ce7b6130a3de55f7b9abdade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55ff75599eec5ebbf344377194b877afa80345a4836b7a7c3f4b75cc8f2f532d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ff75599eec5ebbf344377194b877afa80345a4836b7a7c3f4b75cc8f2f532d->enter($__internal_55ff75599eec5ebbf344377194b877afa80345a4836b7a7c3f4b75cc8f2f532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_55ff75599eec5ebbf344377194b877afa80345a4836b7a7c3f4b75cc8f2f532d->leave($__internal_55ff75599eec5ebbf344377194b877afa80345a4836b7a7c3f4b75cc8f2f532d_prof);

        
        $__internal_a007f4dfa137675e763e4ec8b7995da1388aae18ce7b6130a3de55f7b9abdade->leave($__internal_a007f4dfa137675e763e4ec8b7995da1388aae18ce7b6130a3de55f7b9abdade_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_50322eee52d5cc194402038729737c4a8d4c7331f7adfade3bb3255e72f4caf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50322eee52d5cc194402038729737c4a8d4c7331f7adfade3bb3255e72f4caf1->enter($__internal_50322eee52d5cc194402038729737c4a8d4c7331f7adfade3bb3255e72f4caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4219036fc137412624aecba74f25306683c5094ee9a85e0019de93d1098c18c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4219036fc137412624aecba74f25306683c5094ee9a85e0019de93d1098c18c6->enter($__internal_4219036fc137412624aecba74f25306683c5094ee9a85e0019de93d1098c18c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4219036fc137412624aecba74f25306683c5094ee9a85e0019de93d1098c18c6->leave($__internal_4219036fc137412624aecba74f25306683c5094ee9a85e0019de93d1098c18c6_prof);

        
        $__internal_50322eee52d5cc194402038729737c4a8d4c7331f7adfade3bb3255e72f4caf1->leave($__internal_50322eee52d5cc194402038729737c4a8d4c7331f7adfade3bb3255e72f4caf1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c583b216ccc46bffe58b6d386127651147602979f4e50f533e3fa4f8ae9fcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c583b216ccc46bffe58b6d386127651147602979f4e50f533e3fa4f8ae9fcff->enter($__internal_0c583b216ccc46bffe58b6d386127651147602979f4e50f533e3fa4f8ae9fcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6587afa90fa1173d901fdcde43d393c1d9fd795bbebbd52b8c8497c22f1d1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6587afa90fa1173d901fdcde43d393c1d9fd795bbebbd52b8c8497c22f1d1a1->enter($__internal_d6587afa90fa1173d901fdcde43d393c1d9fd795bbebbd52b8c8497c22f1d1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d6587afa90fa1173d901fdcde43d393c1d9fd795bbebbd52b8c8497c22f1d1a1->leave($__internal_d6587afa90fa1173d901fdcde43d393c1d9fd795bbebbd52b8c8497c22f1d1a1_prof);

        
        $__internal_0c583b216ccc46bffe58b6d386127651147602979f4e50f533e3fa4f8ae9fcff->leave($__internal_0c583b216ccc46bffe58b6d386127651147602979f4e50f533e3fa4f8ae9fcff_prof);

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
