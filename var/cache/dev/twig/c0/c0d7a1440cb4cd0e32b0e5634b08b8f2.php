<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* moyen_de_paiement/index.html.twig */
class __TwigTemplate_eb7f7a8449c91ac6350fa2a194f33b51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyen_de_paiement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyen_de_paiement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "moyen_de_paiement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MoyenDePaiement index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Liste des moyens de paiement</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moyen_de_paiements"]) || array_key_exists("moyen_de_paiements", $context) ? $context["moyen_de_paiements"] : (function () { throw new RuntimeError('Variable "moyen_de_paiements" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["moyen_de_paiement"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyen_de_paiement"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyen_de_paiement"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyen_de_paiement"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td class=\"imgIcon\">
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_de_paiement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["moyen_de_paiement"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/details.png"), "html", null, true);
            echo "\" width=\"30px\"></a>
                </td>
                <td class=\"imgIcon\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_de_paiement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["moyen_de_paiement"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pen.png"), "html", null, true);
            echo "\" width=\"30px\"></a>
                </td>
                <td class=\"imgIcon\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_de_paiement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["moyen_de_paiement"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/garbage.png"), "html", null, true);
            echo "\" width=\"30px\"></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moyen_de_paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <div class=\"btnContainer\">
        <div class=\"btn\"><div><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_de_paiement_new");
        echo "\">Créer un nouveau moyen de paiement</a></div></div>
    </div>

    <div class=\"btnContainer\">
        <div class=\"btn\"><div><a href=\"/\"><p>Retour</p></a></div></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "moyen_de_paiement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 44,  161 => 40,  152 => 36,  141 => 32,  133 => 29,  125 => 26,  120 => 24,  116 => 23,  112 => 22,  109 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MoyenDePaiement index{% endblock %}

{% block body %}
    <h1>Liste des moyens de paiement</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        {% for moyen_de_paiement in moyen_de_paiements %}
            <tr>
                <td>{{ moyen_de_paiement.id }}</td>
                <td>{{ moyen_de_paiement.title }}</td>
                <td>{{ moyen_de_paiement.description }}</td>
                <td class=\"imgIcon\">
                    <a href=\"{{ path('app_moyen_de_paiement_show', {'id': moyen_de_paiement.id}) }}\"><img src=\"{{ asset('img/details.png') }}\" width=\"30px\"></a>
                </td>
                <td class=\"imgIcon\">
                    <a href=\"{{ path('app_moyen_de_paiement_edit', {'id': moyen_de_paiement.id}) }}\"><img src=\"{{ asset('img/pen.png') }}\" width=\"30px\"></a>
                </td>
                <td class=\"imgIcon\">
                    <a href=\"{{ path('app_moyen_de_paiement_delete', {'id': moyen_de_paiement.id}) }}\"><img src=\"{{ asset('img/garbage.png') }}\" width=\"30px\"></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"btnContainer\">
        <div class=\"btn\"><div><a href=\"{{ path('app_moyen_de_paiement_new') }}\">Créer un nouveau moyen de paiement</a></div></div>
    </div>

    <div class=\"btnContainer\">
        <div class=\"btn\"><div><a href=\"/\"><p>Retour</p></a></div></div>
    </div>
{% endblock %}
", "moyen_de_paiement/index.html.twig", "C:\\symfony\\spbudget\\templates\\moyen_de_paiement\\index.html.twig");
    }
}
