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

/* pages/formSeveralFlightFound.html.twig */
class __TwigTemplate_31c7a75808db50ef5fba7f23c1a54925066aaa07b84d422b2809cdb68cf08419 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/formSeveralFlightFound.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/formSeveralFlightFound.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/formSeveralFlightFound.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Choix du vol";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1 class='h2 my-5 text-center font-weight-bold'>Formulaire des droits de chancelerie</h1>
<h2 class='h3 mt-5 text-center font-weight-bold text-success'>Plusieurs vols trouvés</h2>
<p class='h6 mt-3 text-center font-weight-bold text-secondary'>Cliquez sur le vol correspondant</p>

<div class=\"row\">
    <div class='col-md-6 mx-auto'>
            <div class=\"mt-2 border-top border-dark\">
                <p class=\"h4 mb-4\">Vol n° <span class=\"font-weight-bold text-info\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "get", [0 => "idFlight"], "method", false, false, false, 14), "html", null, true);
        echo "</span></p>


                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["apis"]) || array_key_exists("apis", $context) ? $context["apis"] : (function () { throw new RuntimeError('Variable "apis" does not exist.', 17, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 18
            echo "                            <div class=\"row\">
                            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pdf_formSeveralFlightFound", ["dateTimeDepartureFlight" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["apis"]) || array_key_exists("apis", $context) ? $context["apis"] : (function () { throw new RuntimeError('Variable "apis" does not exist.', 19, $this->source); })()), 0, [], "array", false, false, false, 19), ($context["i"] - 1), [], "array", false, false, false, 19), "destinationFlight" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["apis"]) || array_key_exists("apis", $context) ? $context["apis"] : (function () { throw new RuntimeError('Variable "apis" does not exist.', 19, $this->source); })()), 1, [], "array", false, false, false, 19), ($context["i"] - 1), [], "array", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"text-decoration-none  mt-5 btn-lg btn btn-outline-primary btn-block\">
                                <p class=\"mt-3\">Le <span class=\"font-weight-bold\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["apis"]) || array_key_exists("apis", $context) ? $context["apis"] : (function () { throw new RuntimeError('Variable "apis" does not exist.', 20, $this->source); })()), 0, [], "array", false, false, false, 20), ($context["i"] - 1), [], "array", false, false, false, 20), "html", null, true);
            echo "</span>
                                à destination de <span class=\"font-weight-bold\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["apis"]) || array_key_exists("apis", $context) ? $context["apis"] : (function () { throw new RuntimeError('Variable "apis" does not exist.', 21, $this->source); })()), 1, [], "array", false, false, false, 21), ($context["i"] - 1), [], "array", false, false, false, 21), "html", null, true);
            echo "</span></p>
                            </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/formSeveralFlightFound.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  119 => 21,  115 => 20,  111 => 19,  108 => 18,  104 => 17,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Choix du vol' %}

{% block body %}

<h1 class='h2 my-5 text-center font-weight-bold'>Formulaire des droits de chancelerie</h1>
<h2 class='h3 mt-5 text-center font-weight-bold text-success'>Plusieurs vols trouvés</h2>
<p class='h6 mt-3 text-center font-weight-bold text-secondary'>Cliquez sur le vol correspondant</p>

<div class=\"row\">
    <div class='col-md-6 mx-auto'>
            <div class=\"mt-2 border-top border-dark\">
                <p class=\"h4 mb-4\">Vol n° <span class=\"font-weight-bold text-info\">{{ app.session.get('idFlight') }}</span></p>


                        {% for i in 1..apis|length %}
                            <div class=\"row\">
                            <a href=\"{{ path('app_pdf_formSeveralFlightFound', {dateTimeDepartureFlight: apis[0][i-1], destinationFlight: apis[1][i-1] }) }}\" class=\"text-decoration-none  mt-5 btn-lg btn btn-outline-primary btn-block\">
                                <p class=\"mt-3\">Le <span class=\"font-weight-bold\">{{ apis[0][i-1] }}</span>
                                à destination de <span class=\"font-weight-bold\">{{ apis[1][i-1] }}</span></p>
                            </a>
                            </div>
                        {% endfor %}

    </div>
</div>


{% endblock %}", "pages/formSeveralFlightFound.html.twig", "C:\\wamp64\\www\\ChancelleriePDFGenerator\\templates\\pages\\formSeveralFlightFound.html.twig");
    }
}
