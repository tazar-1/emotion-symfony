<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_4c0b7587427e8f7589cdf6f751c78ca7f63aa49ca9575ced81d7d03a44e8f85e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6242dada13fcdfc4f69d948471d6b1c3aa73228f4c16851c4dbb40182b5874e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6242dada13fcdfc4f69d948471d6b1c3aa73228f4c16851c4dbb40182b5874e1->enter($__internal_6242dada13fcdfc4f69d948471d6b1c3aa73228f4c16851c4dbb40182b5874e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_7f8d3fccc81d47785d1e843eee0f2ab5894c7ff08973f0ed3b5bc3e719f164dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8d3fccc81d47785d1e843eee0f2ab5894c7ff08973f0ed3b5bc3e719f164dc->enter($__internal_7f8d3fccc81d47785d1e843eee0f2ab5894c7ff08973f0ed3b5bc3e719f164dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_6242dada13fcdfc4f69d948471d6b1c3aa73228f4c16851c4dbb40182b5874e1->leave($__internal_6242dada13fcdfc4f69d948471d6b1c3aa73228f4c16851c4dbb40182b5874e1_prof);

        
        $__internal_7f8d3fccc81d47785d1e843eee0f2ab5894c7ff08973f0ed3b5bc3e719f164dc->leave($__internal_7f8d3fccc81d47785d1e843eee0f2ab5894c7ff08973f0ed3b5bc3e719f164dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
