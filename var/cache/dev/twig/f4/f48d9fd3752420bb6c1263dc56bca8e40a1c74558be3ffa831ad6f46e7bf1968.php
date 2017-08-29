<?php

/* EmotionBundle:Form:vehicule.html.twig */
class __TwigTemplate_75e9729f793891c92742adbd6222e62ce101d7ac34c7a0e4ab01ae4e037dcc32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmotionBundle:Form:vehicule.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be4b82c826a47c4c0687060608d82ebf930c2d24b4e1db093a6c02ee7763a17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4b82c826a47c4c0687060608d82ebf930c2d24b4e1db093a6c02ee7763a17a->enter($__internal_be4b82c826a47c4c0687060608d82ebf930c2d24b4e1db093a6c02ee7763a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmotionBundle:Form:vehicule.html.twig"));

        $__internal_b3d8aaf07b5a112a74bee9ee428989455fb5eab875ecb582310881760b07305c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d8aaf07b5a112a74bee9ee428989455fb5eab875ecb582310881760b07305c->enter($__internal_b3d8aaf07b5a112a74bee9ee428989455fb5eab875ecb582310881760b07305c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmotionBundle:Form:vehicule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4b82c826a47c4c0687060608d82ebf930c2d24b4e1db093a6c02ee7763a17a->leave($__internal_be4b82c826a47c4c0687060608d82ebf930c2d24b4e1db093a6c02ee7763a17a_prof);

        
        $__internal_b3d8aaf07b5a112a74bee9ee428989455fb5eab875ecb582310881760b07305c->leave($__internal_b3d8aaf07b5a112a74bee9ee428989455fb5eab875ecb582310881760b07305c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f8a1c36cdb9a1cc4d09bfe9ef7dcf8a31f2ae1fcb19f7de090b9b56303030eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8a1c36cdb9a1cc4d09bfe9ef7dcf8a31f2ae1fcb19f7de090b9b56303030eb->enter($__internal_8f8a1c36cdb9a1cc4d09bfe9ef7dcf8a31f2ae1fcb19f7de090b9b56303030eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_888413551cc7c018c67907c9e73985f7df5bf6a4dfc4053386c3514841cb2e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888413551cc7c018c67907c9e73985f7df5bf6a4dfc4053386c3514841cb2e25->enter($__internal_888413551cc7c018c67907c9e73985f7df5bf6a4dfc4053386c3514841cb2e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    eMotion - Le site de Location écologique de Voiture et Scooter
";
        
        $__internal_888413551cc7c018c67907c9e73985f7df5bf6a4dfc4053386c3514841cb2e25->leave($__internal_888413551cc7c018c67907c9e73985f7df5bf6a4dfc4053386c3514841cb2e25_prof);

        
        $__internal_8f8a1c36cdb9a1cc4d09bfe9ef7dcf8a31f2ae1fcb19f7de090b9b56303030eb->leave($__internal_8f8a1c36cdb9a1cc4d09bfe9ef7dcf8a31f2ae1fcb19f7de090b9b56303030eb_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a0cf0a729050ca1e029de8ee0a0f5b27d8c53cca685ad188f79d6bca776eae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0cf0a729050ca1e029de8ee0a0f5b27d8c53cca685ad188f79d6bca776eae3->enter($__internal_0a0cf0a729050ca1e029de8ee0a0f5b27d8c53cca685ad188f79d6bca776eae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f3ca3cce648319712e3a9ab8b6f66f0ee23499c25773df210bea9fe4c386ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3ca3cce648319712e3a9ab8b6f66f0ee23499c25773df210bea9fe4c386ae2->enter($__internal_2f3ca3cce648319712e3a9ab8b6f66f0ee23499c25773df210bea9fe4c386ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_2f3ca3cce648319712e3a9ab8b6f66f0ee23499c25773df210bea9fe4c386ae2->leave($__internal_2f3ca3cce648319712e3a9ab8b6f66f0ee23499c25773df210bea9fe4c386ae2_prof);

        
        $__internal_0a0cf0a729050ca1e029de8ee0a0f5b27d8c53cca685ad188f79d6bca776eae3->leave($__internal_0a0cf0a729050ca1e029de8ee0a0f5b27d8c53cca685ad188f79d6bca776eae3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab6ab5fb4bcf117573831af9e77a9fbd4da1a97d728f0ebef4f90381d774d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab6ab5fb4bcf117573831af9e77a9fbd4da1a97d728f0ebef4f90381d774d0a->enter($__internal_bab6ab5fb4bcf117573831af9e77a9fbd4da1a97d728f0ebef4f90381d774d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4f4b90fa3e41a56862e9cd0f33d44e42584bbcd9fbc147f9f519c74e2ef91a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f4b90fa3e41a56862e9cd0f33d44e42584bbcd9fbc147f9f519c74e2ef91a3->enter($__internal_a4f4b90fa3e41a56862e9cd0f33d44e42584bbcd9fbc147f9f519c74e2ef91a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $this->displayParentBlock("body", $context, $blocks);
        echo "
<a name=\"top\"></a>
<div class=\"main\">

    <div class=\"cars\">
        <section class=\"section_turquoise header_vehicules\">
            <div class=\"comp_buttons\">
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"cars.html\">Voitures</a>
                    </button>
                </div>
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"scooters.html\">Scooters</a>
                    </button>
                </div>
            </div>
            <!-- <h3>Moyens pour gagner des points de fidélités</h3>
            <div class=\"border_bottom\"></div>
            <p class=\"text_entete\">
                Maintenant, chaque fois que vous achetez, vous pouvez gagner des points de fidélités pouvant être échangés contre d'éventuels rabais et économies. Nos avantages spéciaux incluent des points de fidélités pour s'inscrire, gagner des points fidélités pour chaque euro dépensé, des points pour le parainage d'un ami, des jours avec récompense de points de fidélités et encore plus de surprises en cours de route.
            </p> -->
        </section>
        <!-- <div class=\"diagonale\"></div> -->
        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/wave.svg"), "html", null, true);
        echo "\" alt=\"BLIBLABLU\" class=\"wave\">

        <section class=\"section_gray_light\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TabVehicule"]) ? $context["TabVehicule"] : $this->getContext($context, "TabVehicule")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 40
            echo "                <aticle class=\"veh\">
                    <div class=\"car_img\">
                        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["t"], "image", array())), "html", null, true);
            echo "\" alt=\"BLIBLABLU\" class=\"images\">
                    </div>
                    <div class=\"veh_text\">
                        <div class=\"container_1\">
                            <h1>
                                <span>20017 </span> <span>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "marque", array()), "html", null, true);
            echo "</span><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "model", array()), "html", null, true);
            echo "</span>
                            </h1>
                            <div class=\"container_stars\">
                                <fieldset class=\"rating\">
                                    <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\" /><label class = \"full\" for=\"star5\" title=\"Awesome - 5 stars\"></label>
                                    <input type=\"radio\" id=\"star4half\" name=\"rating\" value=\"4 and a half\" /><label class=\"half\" for=\"star4half\" title=\"Pretty good - 4.5 stars\"></label>
                                    <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\" /><label class = \"full\" for=\"star4\" title=\"Pretty good - 4 stars\"></label>
                                    <input type=\"radio\" id=\"star3half\" name=\"rating\" value=\"3 and a half\" /><label class=\"half\" for=\"star3half\" title=\"Meh - 3.5 stars\"></label>
                                    <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\" /><label class = \"full\" for=\"star3\" title=\"Meh - 3 stars\"></label>
                                    <input type=\"radio\" id=\"star2half\" name=\"rating\" value=\"2 and a half\" /><label class=\"half\" for=\"star2half\" title=\"Kinda bad - 2.5 stars\"></label>
                                    <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\" /><label class = \"full\" for=\"star2\" title=\"Kinda bad - 2 stars\"></label>
                                    <input type=\"radio\" id=\"star1half\" name=\"rating\" value=\"1 and a half\" /><label class=\"half\" for=\"star1half\" title=\"Meh - 1.5 stars\"></label>
                                    <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\" /><label class = \"full\" for=\"star1\" title=\"Sucks big time - 1 star\"></label>
                                    <input type=\"radio\" id=\"starhalf\" name=\"rating\" value=\"half\" /><label class=\"half\" for=\"starhalf\" title=\"Sucks big time - 0.5 stars\"></label>
                                </fieldset>
                            </div>
                        </div>

                        <div class=\"container_2\">
                            <div class=\"price_time\">
                                <div class=\"price\">
                                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "prixachat", array()), "html", null, true);
            echo "
                                </div>
                                <div class=\"time\">Heure</div>
                            </div>
                            <div class=\"price_time\">
                                <div class=\"price\">";
            // line 73
            echo twig_escape_filter($this->env, ($this->getAttribute($context["t"], "prixachat", array()) * 24), "html", null, true);
            echo "</div>
                                <div class=\"time\">Jour</div>
                            </div>
                            <div class=\"price_time\">
                                <div class=\"price\">";
            // line 77
            echo twig_escape_filter($this->env, ($this->getAttribute($context["t"], "prixachat", array()) * 720), "html", null, true);
            echo "</div>
                                <div class=\"time\">Mois</div>
                            </div>
                        </div>

                        <div class=\"container_3\">
                             
                        </div>
                    </div>
                </aticle>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </section>
    </div>

</div>

";
        
        $__internal_a4f4b90fa3e41a56862e9cd0f33d44e42584bbcd9fbc147f9f519c74e2ef91a3->leave($__internal_a4f4b90fa3e41a56862e9cd0f33d44e42584bbcd9fbc147f9f519c74e2ef91a3_prof);

        
        $__internal_bab6ab5fb4bcf117573831af9e77a9fbd4da1a97d728f0ebef4f90381d774d0a->leave($__internal_bab6ab5fb4bcf117573831af9e77a9fbd4da1a97d728f0ebef4f90381d774d0a_prof);

    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9bf2b4a9c229d7262eea5773e960fea40c9c258bc7c29c4136e44e23b09ec9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf2b4a9c229d7262eea5773e960fea40c9c258bc7c29c4136e44e23b09ec9cc->enter($__internal_9bf2b4a9c229d7262eea5773e960fea40c9c258bc7c29c4136e44e23b09ec9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_41186d819a5ee8c1575f46af057486fcb96fae57848f2c822451233d94066978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41186d819a5ee8c1575f46af057486fcb96fae57848f2c822451233d94066978->enter($__internal_41186d819a5ee8c1575f46af057486fcb96fae57848f2c822451233d94066978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_41186d819a5ee8c1575f46af057486fcb96fae57848f2c822451233d94066978->leave($__internal_41186d819a5ee8c1575f46af057486fcb96fae57848f2c822451233d94066978_prof);

        
        $__internal_9bf2b4a9c229d7262eea5773e960fea40c9c258bc7c29c4136e44e23b09ec9cc->leave($__internal_9bf2b4a9c229d7262eea5773e960fea40c9c258bc7c29c4136e44e23b09ec9cc_prof);

    }

    public function getTemplateName()
    {
        return "EmotionBundle:Form:vehicule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 95,  200 => 88,  183 => 77,  176 => 73,  168 => 68,  142 => 47,  134 => 42,  130 => 40,  126 => 39,  120 => 36,  84 => 11,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title %}
    eMotion - Le site de Location écologique de Voiture et Scooter
{% endblock %}

{% block stylesheets %}{{ parent() }}

{% endblock %}

{% block body %}{{ parent() }}
<a name=\"top\"></a>
<div class=\"main\">

    <div class=\"cars\">
        <section class=\"section_turquoise header_vehicules\">
            <div class=\"comp_buttons\">
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"cars.html\">Voitures</a>
                    </button>
                </div>
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"scooters.html\">Scooters</a>
                    </button>
                </div>
            </div>
            <!-- <h3>Moyens pour gagner des points de fidélités</h3>
            <div class=\"border_bottom\"></div>
            <p class=\"text_entete\">
                Maintenant, chaque fois que vous achetez, vous pouvez gagner des points de fidélités pouvant être échangés contre d'éventuels rabais et économies. Nos avantages spéciaux incluent des points de fidélités pour s'inscrire, gagner des points fidélités pour chaque euro dépensé, des points pour le parainage d'un ami, des jours avec récompense de points de fidélités et encore plus de surprises en cours de route.
            </p> -->
        </section>
        <!-- <div class=\"diagonale\"></div> -->
        <img src=\"{{ asset('framework/images/wave.svg') }}\" alt=\"BLIBLABLU\" class=\"wave\">

        <section class=\"section_gray_light\">
            {% for t in TabVehicule %}
                <aticle class=\"veh\">
                    <div class=\"car_img\">
                        <img src=\"{{ asset( t.image ) }}\" alt=\"BLIBLABLU\" class=\"images\">
                    </div>
                    <div class=\"veh_text\">
                        <div class=\"container_1\">
                            <h1>
                                <span>20017 </span> <span>{{ t.marque }}</span><span>{{ t.model }}</span>
                            </h1>
                            <div class=\"container_stars\">
                                <fieldset class=\"rating\">
                                    <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\" /><label class = \"full\" for=\"star5\" title=\"Awesome - 5 stars\"></label>
                                    <input type=\"radio\" id=\"star4half\" name=\"rating\" value=\"4 and a half\" /><label class=\"half\" for=\"star4half\" title=\"Pretty good - 4.5 stars\"></label>
                                    <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\" /><label class = \"full\" for=\"star4\" title=\"Pretty good - 4 stars\"></label>
                                    <input type=\"radio\" id=\"star3half\" name=\"rating\" value=\"3 and a half\" /><label class=\"half\" for=\"star3half\" title=\"Meh - 3.5 stars\"></label>
                                    <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\" /><label class = \"full\" for=\"star3\" title=\"Meh - 3 stars\"></label>
                                    <input type=\"radio\" id=\"star2half\" name=\"rating\" value=\"2 and a half\" /><label class=\"half\" for=\"star2half\" title=\"Kinda bad - 2.5 stars\"></label>
                                    <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\" /><label class = \"full\" for=\"star2\" title=\"Kinda bad - 2 stars\"></label>
                                    <input type=\"radio\" id=\"star1half\" name=\"rating\" value=\"1 and a half\" /><label class=\"half\" for=\"star1half\" title=\"Meh - 1.5 stars\"></label>
                                    <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\" /><label class = \"full\" for=\"star1\" title=\"Sucks big time - 1 star\"></label>
                                    <input type=\"radio\" id=\"starhalf\" name=\"rating\" value=\"half\" /><label class=\"half\" for=\"starhalf\" title=\"Sucks big time - 0.5 stars\"></label>
                                </fieldset>
                            </div>
                        </div>

                        <div class=\"container_2\">
                            <div class=\"price_time\">
                                <div class=\"price\">
                                    {{ t.prixachat }}
                                </div>
                                <div class=\"time\">Heure</div>
                            </div>
                            <div class=\"price_time\">
                                <div class=\"price\">{{ t.prixachat * 24 }}</div>
                                <div class=\"time\">Jour</div>
                            </div>
                            <div class=\"price_time\">
                                <div class=\"price\">{{ t.prixachat * 720 }}</div>
                                <div class=\"time\">Mois</div>
                            </div>
                        </div>

                        <div class=\"container_3\">
                             
                        </div>
                    </div>
                </aticle>
            {% endfor %}
        </section>
    </div>

</div>

{% endblock %}

{% block footer %}{{ parent() }}
{% endblock %}", "EmotionBundle:Form:vehicule.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/src/EmotionBundle/Resources/views/Form/vehicule.html.twig");
    }
}
