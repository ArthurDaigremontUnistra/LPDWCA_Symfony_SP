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

/* moyen_de_paiement/_delete_form.html.twig */
class __TwigTemplate_93e2c6bffff7f155ed96baf73eaeebbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyen_de_paiement/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyen_de_paiement/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_de_paiement_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["moyen_de_paiement"]) || array_key_exists("moyen_de_paiement", $context) ? $context["moyen_de_paiement"] : (function () { throw new RuntimeError('Variable "moyen_de_paiement" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Êtes-vous certain de vouloir supprimer le moyen de paiement #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyen_de_paiement"]) || array_key_exists("moyen_de_paiement", $context) ? $context["moyen_de_paiement"] : (function () { throw new RuntimeError('Variable "moyen_de_paiement" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyen_de_paiement"]) || array_key_exists("moyen_de_paiement", $context) ? $context["moyen_de_paiement"] : (function () { throw new RuntimeError('Variable "moyen_de_paiement" does not exist.', 1, $this->source); })()), "title", [], "any", false, false, false, 1), "html", null, true);
        echo " ??');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["moyen_de_paiement"]) || array_key_exists("moyen_de_paiement", $context) ? $context["moyen_de_paiement"] : (function () { throw new RuntimeError('Variable "moyen_de_paiement" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <div id=\"deleteBtn\"><button class=\"btn\">Supprimer</button></div>
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "moyen_de_paiement/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_moyen_de_paiement_delete', {'id': moyen_de_paiement.id}) }}\" onsubmit=\"return confirm('Êtes-vous certain de vouloir supprimer le moyen de paiement #{{ moyen_de_paiement.id }} : {{ moyen_de_paiement.title }} ??');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ moyen_de_paiement.id) }}\">
    <div id=\"deleteBtn\"><button class=\"btn\">Supprimer</button></div>
</form>
", "moyen_de_paiement/_delete_form.html.twig", "C:\\symfony\\spbudget\\templates\\moyen_de_paiement\\_delete_form.html.twig");
    }
}
