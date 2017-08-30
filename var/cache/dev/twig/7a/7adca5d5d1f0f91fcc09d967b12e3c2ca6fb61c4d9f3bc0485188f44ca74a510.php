<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2cf8fb6f4491bc96b3be4fd693de0f19ff88564ad26b8854a5cd3b7b1d0ea76f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5150e37d34362703f7a6687aad74253eafcf2c0ce2d7a11cb3cea0342b5569c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5150e37d34362703f7a6687aad74253eafcf2c0ce2d7a11cb3cea0342b5569c8->enter($__internal_5150e37d34362703f7a6687aad74253eafcf2c0ce2d7a11cb3cea0342b5569c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_134bd86a410ec754c4ee660ef845f6c82f913c1cdb9b21aa75d52292c56e87eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134bd86a410ec754c4ee660ef845f6c82f913c1cdb9b21aa75d52292c56e87eb->enter($__internal_134bd86a410ec754c4ee660ef845f6c82f913c1cdb9b21aa75d52292c56e87eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>


        ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 11
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 12
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 13
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "
        <div>
            ";
        // line 20
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 22
        echo "        </div>
    </body>
</html>
";
        
        $__internal_5150e37d34362703f7a6687aad74253eafcf2c0ce2d7a11cb3cea0342b5569c8->leave($__internal_5150e37d34362703f7a6687aad74253eafcf2c0ce2d7a11cb3cea0342b5569c8_prof);

        
        $__internal_134bd86a410ec754c4ee660ef845f6c82f913c1cdb9b21aa75d52292c56e87eb->leave($__internal_134bd86a410ec754c4ee660ef845f6c82f913c1cdb9b21aa75d52292c56e87eb_prof);

    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a235d98096d0e5c051c2987050c6e31d6fd19d0588b836ef684015e7f150c374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a235d98096d0e5c051c2987050c6e31d6fd19d0588b836ef684015e7f150c374->enter($__internal_a235d98096d0e5c051c2987050c6e31d6fd19d0588b836ef684015e7f150c374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_685757ebbad68b6e6ce16880616793e252abe5e303792c1d4fc2ef3d04c376e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685757ebbad68b6e6ce16880616793e252abe5e303792c1d4fc2ef3d04c376e1->enter($__internal_685757ebbad68b6e6ce16880616793e252abe5e303792c1d4fc2ef3d04c376e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        echo "            ";
        
        $__internal_685757ebbad68b6e6ce16880616793e252abe5e303792c1d4fc2ef3d04c376e1->leave($__internal_685757ebbad68b6e6ce16880616793e252abe5e303792c1d4fc2ef3d04c376e1_prof);

        
        $__internal_a235d98096d0e5c051c2987050c6e31d6fd19d0588b836ef684015e7f150c374->leave($__internal_a235d98096d0e5c051c2987050c6e31d6fd19d0588b836ef684015e7f150c374_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  90 => 20,  77 => 22,  75 => 20,  71 => 18,  68 => 17,  62 => 16,  53 => 13,  48 => 12,  43 => 11,  38 => 10,  36 => 9,  26 => 1,);
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
    </head>
    <body>


        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
