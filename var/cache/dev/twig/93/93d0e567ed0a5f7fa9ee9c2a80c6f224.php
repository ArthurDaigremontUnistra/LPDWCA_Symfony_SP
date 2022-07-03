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

/* transaction/index.html.twig */
class __TwigTemplate_7ad6b32ddfbd66bfe2d5e2869933f5fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transaction/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transaction/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "transaction/index.html.twig", 1);
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

        echo "Transaction index";
        
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
        echo "    <div class=\"bilanFinancier\">

        <h2>Bilan</h2>

        ";
        // line 10
        $context["totalCredit"] = 0;
        // line 11
        echo "        ";
        $context["totalDebit"] = 0;
        // line 12
        echo "        ";
        $context["totalRapport"] = 0;
        // line 13
        echo "        ";
        $context["totalCredit_2022"] = 0;
        // line 14
        echo "        ";
        $context["totalDebit_2022"] = 0;
        // line 15
        echo "        ";
        $context["totalRapport_2022"] = 0;
        // line 16
        echo "        ";
        $context["totalCredit_2021"] = 0;
        // line 17
        echo "        ";
        $context["totalDebit_2021"] = 0;
        // line 18
        echo "        ";
        $context["totalRapport_2021"] = 0;
        // line 19
        echo "        ";
        $context["totalCredit_2020"] = 0;
        // line 20
        echo "        ";
        $context["totalDebit_2020"] = 0;
        // line 21
        echo "        ";
        $context["totalRapport_2020"] = 0;
        // line 22
        echo "
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 24
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 24) == "Crédit")) {
                // line 25
                echo "                ";
                $context["totalCredit"] = ((isset($context["totalCredit"]) || array_key_exists("totalCredit", $context) ? $context["totalCredit"] : (function () { throw new RuntimeError('Variable "totalCredit" does not exist.', 25, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 25));
                // line 26
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 26) == "Débit")) {
                // line 27
                echo "                ";
                $context["totalDebit"] = ((isset($context["totalDebit"]) || array_key_exists("totalDebit", $context) ? $context["totalDebit"] : (function () { throw new RuntimeError('Variable "totalDebit" does not exist.', 27, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 27));
                // line 28
                echo "            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        ";
        // line 31
        $context["totalRapport"] = ((isset($context["totalCredit"]) || array_key_exists("totalCredit", $context) ? $context["totalCredit"] : (function () { throw new RuntimeError('Variable "totalCredit" does not exist.', 31, $this->source); })()) - (isset($context["totalDebit"]) || array_key_exists("totalDebit", $context) ? $context["totalDebit"] : (function () { throw new RuntimeError('Variable "totalDebit" does not exist.', 31, $this->source); })()));
        // line 32
        echo "
        <div class=\"bilanTotal\">

            <h3>Bilan total</h3>

            <p style=\"color: #A3DCBE\">Total des crédits : + ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["totalCredit"]) || array_key_exists("totalCredit", $context) ? $context["totalCredit"] : (function () { throw new RuntimeError('Variable "totalCredit" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " €</p>
            <p style=\"color: #F1959B\">Total des débits : - ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["totalDebit"]) || array_key_exists("totalDebit", $context) ? $context["totalDebit"] : (function () { throw new RuntimeError('Variable "totalDebit" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " €</p>

            ";
        // line 40
        if (((isset($context["totalRapport"]) || array_key_exists("totalRapport", $context) ? $context["totalRapport"] : (function () { throw new RuntimeError('Variable "totalRapport" does not exist.', 40, $this->source); })()) < 0)) {
            // line 41
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits : ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport"]) || array_key_exists("totalRapport", $context) ? $context["totalRapport"] : (function () { throw new RuntimeError('Variable "totalRapport" does not exist.', 41, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        } elseif ((        // line 42
(isset($context["totalRapport"]) || array_key_exists("totalRapport", $context) ? $context["totalRapport"] : (function () { throw new RuntimeError('Variable "totalRapport" does not exist.', 42, $this->source); })()) > 0)) {
            // line 43
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits : + ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport"]) || array_key_exists("totalRapport", $context) ? $context["totalRapport"] : (function () { throw new RuntimeError('Variable "totalRapport" does not exist.', 43, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        } elseif ((        // line 44
(isset($context["totalRapport"]) || array_key_exists("totalRapport", $context) ? $context["totalRapport"] : (function () { throw new RuntimeError('Variable "totalRapport" does not exist.', 44, $this->source); })()) == 0)) {
            // line 45
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits : ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport"]) || array_key_exists("totalRapport", $context) ? $context["totalRapport"] : (function () { throw new RuntimeError('Variable "totalRapport" does not exist.', 45, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        }
        // line 47
        echo "
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 49
            echo "                ";
            $context["currentYear"] = ((twig_get_attribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 49)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 49), "Y")) : (""));
            // line 50
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 50) == "Crédit")) {
                // line 51
                echo "                    ";
                if (((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 51, $this->source); })()) == "2022")) {
                    // line 52
                    echo "                        ";
                    $context["totalCredit_2022"] = ((isset($context["totalCredit_2022"]) || array_key_exists("totalCredit_2022", $context) ? $context["totalCredit_2022"] : (function () { throw new RuntimeError('Variable "totalCredit_2022" does not exist.', 52, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 52));
                    // line 53
                    echo "                    ";
                } elseif (((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 53, $this->source); })()) == "2021")) {
                    // line 54
                    echo "                        ";
                    $context["totalCredit_2021"] = ((isset($context["totalCredit_2021"]) || array_key_exists("totalCredit_2021", $context) ? $context["totalCredit_2021"] : (function () { throw new RuntimeError('Variable "totalCredit_2021" does not exist.', 54, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 54));
                    // line 55
                    echo "                    ";
                } elseif (((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 55, $this->source); })()) == "2020")) {
                    // line 56
                    echo "                        ";
                    $context["totalCredit_2020"] = ((isset($context["totalCredit_2020"]) || array_key_exists("totalCredit_2020", $context) ? $context["totalCredit_2020"] : (function () { throw new RuntimeError('Variable "totalCredit_2020" does not exist.', 56, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 56));
                    // line 57
                    echo "                    ";
                }
                // line 58
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 58) == "Débit")) {
                // line 59
                echo "                    ";
                if (((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 59, $this->source); })()) == "2022")) {
                    // line 60
                    echo "                        ";
                    $context["totalDebit_2022"] = ((isset($context["totalDebit_2022"]) || array_key_exists("totalDebit_2022", $context) ? $context["totalDebit_2022"] : (function () { throw new RuntimeError('Variable "totalDebit_2022" does not exist.', 60, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 60));
                    // line 61
                    echo "                    ";
                } elseif (((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 61, $this->source); })()) == "2021")) {
                    // line 62
                    echo "                        ";
                    $context["totalDebit_2021"] = ((isset($context["totalDebit_2021"]) || array_key_exists("totalDebit_2021", $context) ? $context["totalDebit_2021"] : (function () { throw new RuntimeError('Variable "totalDebit_2021" does not exist.', 62, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 62));
                    // line 63
                    echo "                    ";
                } elseif (((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 63, $this->source); })()) == "2020")) {
                    // line 64
                    echo "                        ";
                    $context["totalDebit_2020"] = ((isset($context["totalDebit_2020"]) || array_key_exists("totalDebit_2020", $context) ? $context["totalDebit_2020"] : (function () { throw new RuntimeError('Variable "totalDebit_2020" does not exist.', 64, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 64));
                    // line 65
                    echo "                    ";
                }
                // line 66
                echo "                ";
            }
            // line 67
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
            ";
        // line 69
        $context["totalRapport_2020"] = ((isset($context["totalCredit_2020"]) || array_key_exists("totalCredit_2020", $context) ? $context["totalCredit_2020"] : (function () { throw new RuntimeError('Variable "totalCredit_2020" does not exist.', 69, $this->source); })()) - (isset($context["totalDebit_2020"]) || array_key_exists("totalDebit_2020", $context) ? $context["totalDebit_2020"] : (function () { throw new RuntimeError('Variable "totalDebit_2020" does not exist.', 69, $this->source); })()));
        // line 70
        echo "            ";
        $context["totalRapport_2021"] = ((isset($context["totalCredit_2021"]) || array_key_exists("totalCredit_2021", $context) ? $context["totalCredit_2021"] : (function () { throw new RuntimeError('Variable "totalCredit_2021" does not exist.', 70, $this->source); })()) - (isset($context["totalDebit_2021"]) || array_key_exists("totalDebit_2021", $context) ? $context["totalDebit_2021"] : (function () { throw new RuntimeError('Variable "totalDebit_2021" does not exist.', 70, $this->source); })()));
        // line 71
        echo "            ";
        $context["totalRapport_2022"] = ((isset($context["totalCredit_2022"]) || array_key_exists("totalCredit_2022", $context) ? $context["totalCredit_2022"] : (function () { throw new RuntimeError('Variable "totalCredit_2022" does not exist.', 71, $this->source); })()) - (isset($context["totalDebit_2022"]) || array_key_exists("totalDebit_2022", $context) ? $context["totalDebit_2022"] : (function () { throw new RuntimeError('Variable "totalDebit_2022" does not exist.', 71, $this->source); })()));
        // line 72
        echo "
        </div>

        <div class=\"bilan2022\">

            <h3>2022</h3>

            <p style=\"color: #A3DCBE\">Total des crédits pour l'année 2022 : + ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["totalCredit_2022"]) || array_key_exists("totalCredit_2022", $context) ? $context["totalCredit_2022"] : (function () { throw new RuntimeError('Variable "totalCredit_2022" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " €</p>
            <p style=\"color: #F1959B\">Total des débits pour l'année 2022 : - ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["totalDebit_2022"]) || array_key_exists("totalDebit_2022", $context) ? $context["totalDebit_2022"] : (function () { throw new RuntimeError('Variable "totalDebit_2022" does not exist.', 80, $this->source); })()), "html", null, true);
        echo " €</p>

            ";
        // line 82
        if (((isset($context["totalRapport_2022"]) || array_key_exists("totalRapport_2022", $context) ? $context["totalRapport_2022"] : (function () { throw new RuntimeError('Variable "totalRapport_2022" does not exist.', 82, $this->source); })()) < 0)) {
            // line 83
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2022 : ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2022"]) || array_key_exists("totalRapport_2022", $context) ? $context["totalRapport_2022"] : (function () { throw new RuntimeError('Variable "totalRapport_2022" does not exist.', 83, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        } elseif ((        // line 84
(isset($context["totalRapport_2022"]) || array_key_exists("totalRapport_2022", $context) ? $context["totalRapport_2022"] : (function () { throw new RuntimeError('Variable "totalRapport_2022" does not exist.', 84, $this->source); })()) > 0)) {
            // line 85
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2022 : + ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2022"]) || array_key_exists("totalRapport_2022", $context) ? $context["totalRapport_2022"] : (function () { throw new RuntimeError('Variable "totalRapport_2022" does not exist.', 85, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        } elseif ((        // line 86
(isset($context["totalRapport_2022"]) || array_key_exists("totalRapport_2022", $context) ? $context["totalRapport_2022"] : (function () { throw new RuntimeError('Variable "totalRapport_2022" does not exist.', 86, $this->source); })()) == 0)) {
            // line 87
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2022 : ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2022"]) || array_key_exists("totalRapport_2022", $context) ? $context["totalRapport_2022"] : (function () { throw new RuntimeError('Variable "totalRapport_2022" does not exist.', 87, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        }
        // line 89
        echo "
        </div>

        <div class=\"bilan2021\">

            <h3>2021</h3>

            <p style=\"color: #A3DCBE\">Total des crédits pour l'année 2021 : + ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["totalCredit_2021"]) || array_key_exists("totalCredit_2021", $context) ? $context["totalCredit_2021"] : (function () { throw new RuntimeError('Variable "totalCredit_2021" does not exist.', 96, $this->source); })()), "html", null, true);
        echo " €</p>
            <p style=\"color: #F1959B\">Total des débits pour l'année 2021 : - ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["totalDebit_2021"]) || array_key_exists("totalDebit_2021", $context) ? $context["totalDebit_2021"] : (function () { throw new RuntimeError('Variable "totalDebit_2021" does not exist.', 97, $this->source); })()), "html", null, true);
        echo " €</p>

            ";
        // line 99
        if (((isset($context["totalRapport_2021"]) || array_key_exists("totalRapport_2021", $context) ? $context["totalRapport_2021"] : (function () { throw new RuntimeError('Variable "totalRapport_2021" does not exist.', 99, $this->source); })()) < 0)) {
            // line 100
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2021 : ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2021"]) || array_key_exists("totalRapport_2021", $context) ? $context["totalRapport_2021"] : (function () { throw new RuntimeError('Variable "totalRapport_2021" does not exist.', 100, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        } elseif ((        // line 101
(isset($context["totalRapport_2021"]) || array_key_exists("totalRapport_2021", $context) ? $context["totalRapport_2021"] : (function () { throw new RuntimeError('Variable "totalRapport_2021" does not exist.', 101, $this->source); })()) > 0)) {
            // line 102
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2021 : + ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2021"]) || array_key_exists("totalRapport_2021", $context) ? $context["totalRapport_2021"] : (function () { throw new RuntimeError('Variable "totalRapport_2021" does not exist.', 102, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        } elseif ((        // line 103
(isset($context["totalRapport_2021"]) || array_key_exists("totalRapport_2021", $context) ? $context["totalRapport_2021"] : (function () { throw new RuntimeError('Variable "totalRapport_2021" does not exist.', 103, $this->source); })()) == 0)) {
            // line 104
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2021 : ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2021"]) || array_key_exists("totalRapport_2021", $context) ? $context["totalRapport_2021"] : (function () { throw new RuntimeError('Variable "totalRapport_2021" does not exist.', 104, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        }
        // line 106
        echo "
        </div>

        <div class=\"bilan2020\">

            <h3>2020</h3>

            <p style=\"color: #A3DCBE\">Total des crédits pour l'année 2020 : + ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["totalCredit_2020"]) || array_key_exists("totalCredit_2020", $context) ? $context["totalCredit_2020"] : (function () { throw new RuntimeError('Variable "totalCredit_2020" does not exist.', 113, $this->source); })()), "html", null, true);
        echo " €</p>
            <p style=\"color: #F1959B\">Total des débits pour l'année 2020 : - ";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["totalDebit_2020"]) || array_key_exists("totalDebit_2020", $context) ? $context["totalDebit_2020"] : (function () { throw new RuntimeError('Variable "totalDebit_2020" does not exist.', 114, $this->source); })()), "html", null, true);
        echo " €</p>

            ";
        // line 116
        if (((isset($context["totalRapport_2020"]) || array_key_exists("totalRapport_2020", $context) ? $context["totalRapport_2020"] : (function () { throw new RuntimeError('Variable "totalRapport_2020" does not exist.', 116, $this->source); })()) < 0)) {
            // line 117
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2020 : ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2020"]) || array_key_exists("totalRapport_2020", $context) ? $context["totalRapport_2020"] : (function () { throw new RuntimeError('Variable "totalRapport_2020" does not exist.', 117, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        } elseif ((        // line 118
(isset($context["totalRapport_2020"]) || array_key_exists("totalRapport_2020", $context) ? $context["totalRapport_2020"] : (function () { throw new RuntimeError('Variable "totalRapport_2020" does not exist.', 118, $this->source); })()) > 0)) {
            // line 119
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2020 : + ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2020"]) || array_key_exists("totalRapport_2020", $context) ? $context["totalRapport_2020"] : (function () { throw new RuntimeError('Variable "totalRapport_2020" does not exist.', 119, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        } elseif ((        // line 120
(isset($context["totalRapport_2020"]) || array_key_exists("totalRapport_2020", $context) ? $context["totalRapport_2020"] : (function () { throw new RuntimeError('Variable "totalRapport_2020" does not exist.', 120, $this->source); })()) == 0)) {
            // line 121
            echo "                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2020 : ";
            echo twig_escape_filter($this->env, (isset($context["totalRapport_2020"]) || array_key_exists("totalRapport_2020", $context) ? $context["totalRapport_2020"] : (function () { throw new RuntimeError('Variable "totalRapport_2020" does not exist.', 121, $this->source); })()), "html", null, true);
            echo " €</p>
            ";
        }
        // line 123
        echo "
        </div>

    </div>

    <h1>Liste des transactions</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Montant</th>
                <th>Catégorie</th>
                <th>Moyen de paiement</th>
                <th>Date</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 145, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 146
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 146) == "Crédit")) {
                // line 147
                echo "                <tr style=\"background-color: #A3DCBE;\">
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 148
$context["transaction"], "type", [], "any", false, false, false, 148) == "Débit")) {
                // line 149
                echo "                <tr style=\"background-color: #F1959B;\">
            ";
            }
            // line 151
            echo "
                <td>";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "name", [], "any", false, false, false, 152), "html", null, true);
            echo "</td>
                <td>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 153), "html", null, true);
            echo " €</td>
                <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "category", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
                <td>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "moyenDePaiement", [], "any", false, false, false, 155), "html", null, true);
            echo "</td>
                <td>";
            // line 156
            ((twig_get_attribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 156)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "createdAt", [], "any", false, false, false, 156), "d/m/Y - H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"imgIcon\">
                    <a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_show", ["id" => twig_get_attribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/details.png"), "html", null, true);
            echo "\" width=\"30px\"></a>
                </td>
                ";
            // line 160
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 160) == "Crédit")) {
                // line 161
                echo "                    <td class=\"imgIcon\">
                        <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 162)]), "html", null, true);
                echo "?type=credit\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pen.png"), "html", null, true);
                echo "\" width=\"30px\"></a>
                    </td>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 164
$context["transaction"], "type", [], "any", false, false, false, 164) == "Débit")) {
                // line 165
                echo "                    <td class=\"imgIcon\">
                        <a href=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 166)]), "html", null, true);
                echo "?type=debit\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pen.png"), "html", null, true);
                echo "\" width=\"30px\"></a>
                    </td>
                ";
            }
            // line 169
            echo "                <td class=\"imgIcon\">
                    <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/garbage.png"), "html", null, true);
            echo "\" width=\"30px\"></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 174
            echo "            <tr>
                <td colspan=\"5\">Pas de transaction.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "        </tbody>
    </table>

    <div class=\"btnContainer\">
        <div class=\"btn\"><div><a href=\"/\"><p>Retour</p></a></div></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "transaction/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 178,  509 => 174,  498 => 170,  495 => 169,  487 => 166,  484 => 165,  482 => 164,  475 => 162,  472 => 161,  470 => 160,  463 => 158,  458 => 156,  454 => 155,  450 => 154,  446 => 153,  442 => 152,  439 => 151,  435 => 149,  433 => 148,  430 => 147,  427 => 146,  422 => 145,  398 => 123,  392 => 121,  390 => 120,  385 => 119,  383 => 118,  378 => 117,  376 => 116,  371 => 114,  367 => 113,  358 => 106,  352 => 104,  350 => 103,  345 => 102,  343 => 101,  338 => 100,  336 => 99,  331 => 97,  327 => 96,  318 => 89,  312 => 87,  310 => 86,  305 => 85,  303 => 84,  298 => 83,  296 => 82,  291 => 80,  287 => 79,  278 => 72,  275 => 71,  272 => 70,  270 => 69,  267 => 68,  261 => 67,  258 => 66,  255 => 65,  252 => 64,  249 => 63,  246 => 62,  243 => 61,  240 => 60,  237 => 59,  234 => 58,  231 => 57,  228 => 56,  225 => 55,  222 => 54,  219 => 53,  216 => 52,  213 => 51,  210 => 50,  207 => 49,  203 => 48,  200 => 47,  194 => 45,  192 => 44,  187 => 43,  185 => 42,  180 => 41,  178 => 40,  173 => 38,  169 => 37,  162 => 32,  160 => 31,  157 => 30,  151 => 29,  148 => 28,  145 => 27,  142 => 26,  139 => 25,  136 => 24,  132 => 23,  129 => 22,  126 => 21,  123 => 20,  120 => 19,  117 => 18,  114 => 17,  111 => 16,  108 => 15,  105 => 14,  102 => 13,  99 => 12,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Transaction index{% endblock %}

{% block body %}
    <div class=\"bilanFinancier\">

        <h2>Bilan</h2>

        {% set totalCredit = 0 %}
        {% set totalDebit = 0 %}
        {% set totalRapport = 0 %}
        {% set totalCredit_2022 = 0 %}
        {% set totalDebit_2022 = 0 %}
        {% set totalRapport_2022 = 0 %}
        {% set totalCredit_2021 = 0 %}
        {% set totalDebit_2021 = 0 %}
        {% set totalRapport_2021 = 0 %}
        {% set totalCredit_2020 = 0 %}
        {% set totalDebit_2020 = 0 %}
        {% set totalRapport_2020 = 0 %}

        {% for transaction in transactions %}
            {% if transaction.type == \"Crédit\" %}
                {% set totalCredit = totalCredit + transaction.montant %}
            {% elseif transaction.type == \"Débit\" %}
                {% set totalDebit = totalDebit + transaction.montant %}
            {% endif %}
        {% endfor %}

        {% set totalRapport = totalCredit - totalDebit %}

        <div class=\"bilanTotal\">

            <h3>Bilan total</h3>

            <p style=\"color: #A3DCBE\">Total des crédits : + {{ totalCredit }} €</p>
            <p style=\"color: #F1959B\">Total des débits : - {{ totalDebit }} €</p>

            {% if totalRapport < 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits : {{ totalRapport }} €</p>
            {% elseif totalRapport > 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits : + {{ totalRapport }} €</p>
            {% elseif totalRapport == 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits : {{ totalRapport }} €</p>
            {% endif %}

            {% for transaction in transactions %}
                {% set currentYear = transaction.createdAt ? transaction.createdAt|date('Y') : '' %}
                {% if transaction.type == \"Crédit\" %}
                    {% if currentYear == \"2022\" %}
                        {% set totalCredit_2022 = totalCredit_2022 + transaction.montant %}
                    {% elseif currentYear == \"2021\" %}
                        {% set totalCredit_2021 = totalCredit_2021 + transaction.montant %}
                    {% elseif currentYear == \"2020\" %}
                        {% set totalCredit_2020 = totalCredit_2020 + transaction.montant %}
                    {% endif %}
                {% elseif transaction.type == \"Débit\" %}
                    {% if currentYear == \"2022\" %}
                        {% set totalDebit_2022 = totalDebit_2022 + transaction.montant %}
                    {% elseif currentYear == \"2021\" %}
                        {% set totalDebit_2021 = totalDebit_2021 + transaction.montant %}
                    {% elseif currentYear == \"2020\" %}
                        {% set totalDebit_2020 = totalDebit_2020 + transaction.montant %}
                    {% endif %}
                {% endif %}
            {% endfor %}

            {% set totalRapport_2020 = totalCredit_2020 - totalDebit_2020 %}
            {% set totalRapport_2021 = totalCredit_2021 - totalDebit_2021 %}
            {% set totalRapport_2022 = totalCredit_2022 - totalDebit_2022 %}

        </div>

        <div class=\"bilan2022\">

            <h3>2022</h3>

            <p style=\"color: #A3DCBE\">Total des crédits pour l'année 2022 : + {{ totalCredit_2022 }} €</p>
            <p style=\"color: #F1959B\">Total des débits pour l'année 2022 : - {{ totalDebit_2022 }} €</p>

            {% if totalRapport_2022 < 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2022 : {{ totalRapport_2022 }} €</p>
            {% elseif totalRapport_2022 > 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2022 : + {{ totalRapport_2022 }} €</p>
            {% elseif totalRapport_2022 == 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2022 : {{ totalRapport_2022 }} €</p>
            {% endif %}

        </div>

        <div class=\"bilan2021\">

            <h3>2021</h3>

            <p style=\"color: #A3DCBE\">Total des crédits pour l'année 2021 : + {{ totalCredit_2021 }} €</p>
            <p style=\"color: #F1959B\">Total des débits pour l'année 2021 : - {{ totalDebit_2021 }} €</p>

            {% if totalRapport_2021 < 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2021 : {{ totalRapport_2021 }} €</p>
            {% elseif totalRapport_2021 > 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2021 : + {{ totalRapport_2021 }} €</p>
            {% elseif totalRapport_2021 == 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2021 : {{ totalRapport_2021 }} €</p>
            {% endif %}

        </div>

        <div class=\"bilan2020\">

            <h3>2020</h3>

            <p style=\"color: #A3DCBE\">Total des crédits pour l'année 2020 : + {{ totalCredit_2020 }} €</p>
            <p style=\"color: #F1959B\">Total des débits pour l'année 2020 : - {{ totalDebit_2020 }} €</p>

            {% if totalRapport_2020 < 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2020 : {{ totalRapport_2020 }} €</p>
            {% elseif totalRapport_2020 > 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2020 : + {{ totalRapport_2020 }} €</p>
            {% elseif totalRapport_2020 == 0 %}
                <p style=\"color: #00B9FF\">Total du rapport entre les crédits et les débits pour l'année 2020 : {{ totalRapport_2020 }} €</p>
            {% endif %}

        </div>

    </div>

    <h1>Liste des transactions</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Montant</th>
                <th>Catégorie</th>
                <th>Moyen de paiement</th>
                <th>Date</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>

        {% for transaction in transactions %}
            {% if transaction.type == \"Crédit\" %}
                <tr style=\"background-color: #A3DCBE;\">
            {% elseif transaction.type == \"Débit\" %}
                <tr style=\"background-color: #F1959B;\">
            {% endif %}

                <td>{{ transaction.name }}</td>
                <td>{{ transaction.montant }} €</td>
                <td>{{ transaction.category }}</td>
                <td>{{ transaction.moyenDePaiement }}</td>
                <td>{{ transaction.createdAt ? transaction.createdAt|date('d/m/Y - H:i:s') : '' }}</td>
                <td class=\"imgIcon\">
                    <a href=\"{{ path('app_transaction_show', {'id': transaction.id}) }}\"><img src=\"{{ asset('img/details.png') }}\" width=\"30px\"></a>
                </td>
                {% if transaction.type == \"Crédit\" %}
                    <td class=\"imgIcon\">
                        <a href=\"{{ path('app_transaction_edit', {'id': transaction.id}) }}?type=credit\"><img src=\"{{ asset('img/pen.png') }}\" width=\"30px\"></a>
                    </td>
                {% elseif transaction.type == \"Débit\" %}
                    <td class=\"imgIcon\">
                        <a href=\"{{ path('app_transaction_edit', {'id': transaction.id}) }}?type=debit\"><img src=\"{{ asset('img/pen.png') }}\" width=\"30px\"></a>
                    </td>
                {% endif %}
                <td class=\"imgIcon\">
                    <a href=\"{{ path('app_transaction_delete', {'id': transaction.id}) }}\"><img src=\"{{ asset('img/garbage.png') }}\" width=\"30px\"></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Pas de transaction.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"btnContainer\">
        <div class=\"btn\"><div><a href=\"/\"><p>Retour</p></a></div></div>
    </div>
{% endblock %}
", "transaction/index.html.twig", "C:\\symfony\\spbudget\\templates\\transaction\\index.html.twig");
    }
}
