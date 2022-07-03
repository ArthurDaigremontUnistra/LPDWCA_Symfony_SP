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

/* transaction/show.html.twig */
class __TwigTemplate_5cc3777c7d2c59ddc5d5da8e04e7c837 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transaction/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transaction/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "transaction/show.html.twig", 1);
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

        echo "Transaction";
        
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
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 6, $this->source); })()), "type", [], "any", false, false, false, 6) == "Crédit")) {
            // line 7
            echo "        <h1 style=\"color: #A3DCBE;\">Détails de la transaction #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
            echo "</h1>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8) == "Débit")) {
            // line 9
            echo "        <h1 style=\"color: #F1959B;\">Détails de la transaction #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
            echo "</h1>
    ";
        }
        // line 11
        echo "
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18) == "Crédit")) {
            // line 19
            echo "                <tr>
                    <th>Montant</th>
                    <td>+ ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 21, $this->source); })()), "montant", [], "any", false, false, false, 21), "html", null, true);
            echo " €</td>
                </tr>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23) == "Débit")) {
            // line 24
            echo "                <tr>
                    <th>Montant</th>
                    <td>- ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 26, $this->source); })()), "montant", [], "any", false, false, false, 26), "html", null, true);
            echo " €</td>
                </tr>
            ";
        }
        // line 29
        echo "            <tr>
                <th>Type</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 35, $this->source); })()), "category", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Moyen de paiement</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 39, $this->source); })()), "moyenDePaiement", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 43
        ((twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 43, $this->source); })()), "createdAt", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 43, $this->source); })()), "createdAt", [], "any", false, false, false, 43), "d/m/Y - H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"btnContainer\">
        <div class=\"btn\"><div><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index");
        echo "\">Retour</a></div></div>

        ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51) == "Crédit")) {
            // line 52
            echo "            <div class=\"btn\"><div><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "?type=credit\">Modifier</a></div></div>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53) == "Débit")) {
            // line 54
            echo "            <div class=\"btn\"><div><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["transaction"]) || array_key_exists("transaction", $context) ? $context["transaction"] : (function () { throw new RuntimeError('Variable "transaction" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "?type=debit\">Modifier</a></div></div>
        ";
        }
        // line 56
        echo "    </div>

    ";
        // line 58
        echo twig_include($this->env, $context, "transaction/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "transaction/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 58,  193 => 56,  187 => 54,  185 => 53,  180 => 52,  178 => 51,  173 => 49,  164 => 43,  157 => 39,  150 => 35,  143 => 31,  139 => 29,  133 => 26,  129 => 24,  127 => 23,  122 => 21,  118 => 19,  116 => 18,  111 => 16,  104 => 11,  98 => 9,  96 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Transaction{% endblock %}

{% block body %}
    {% if transaction.type == \"Crédit\" %}
        <h1 style=\"color: #A3DCBE;\">Détails de la transaction #{{ transaction.id }}</h1>
    {% elseif transaction.type == \"Débit\" %}
        <h1 style=\"color: #F1959B;\">Détails de la transaction #{{ transaction.id }}</h1>
    {% endif %}

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ transaction.name }}</td>
            </tr>
            {% if transaction.type == \"Crédit\" %}
                <tr>
                    <th>Montant</th>
                    <td>+ {{ transaction.montant }} €</td>
                </tr>
            {% elseif transaction.type == \"Débit\" %}
                <tr>
                    <th>Montant</th>
                    <td>- {{ transaction.montant }} €</td>
                </tr>
            {% endif %}
            <tr>
                <th>Type</th>
                <td>{{ transaction.type }}</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>{{ transaction.category }}</td>
            </tr>
            <tr>
                <th>Moyen de paiement</th>
                <td>{{ transaction.moyenDePaiement }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ transaction.createdAt ? transaction.createdAt|date('d/m/Y - H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"btnContainer\">
        <div class=\"btn\"><div><a href=\"{{ path('app_transaction_index') }}\">Retour</a></div></div>

        {% if transaction.type == \"Crédit\" %}
            <div class=\"btn\"><div><a href=\"{{ path('app_transaction_edit', {'id': transaction.id}) }}?type=credit\">Modifier</a></div></div>
        {% elseif transaction.type == \"Débit\" %}
            <div class=\"btn\"><div><a href=\"{{ path('app_transaction_edit', {'id': transaction.id}) }}?type=debit\">Modifier</a></div></div>
        {% endif %}
    </div>

    {{ include('transaction/_delete_form.html.twig') }}
{% endblock %}
", "transaction/show.html.twig", "C:\\symfony\\spbudget\\templates\\transaction\\show.html.twig");
    }
}
