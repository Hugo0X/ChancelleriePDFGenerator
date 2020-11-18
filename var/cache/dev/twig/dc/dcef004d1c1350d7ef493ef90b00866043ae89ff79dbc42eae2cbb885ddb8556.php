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

/* pages/templatePdf.html.twig */
class __TwigTemplate_f65c161b89c9a6cf94f1292f2e6077f251f74a29a05f6f799de13a88fa170d4d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/templatePdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/templatePdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <style>
            .btn-group
            { 
                width: 100%; 
            }
        </style>
    </head>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
            <div class='text-center h5'>
                <p class='m-1'>DIRECTION GENERALE DE LA POLICE NATIONALE</p>
                <p class='m-1'>DIRECTION CENTRALE DE LA POLICE AUX FRONTIERES</p>
                <p class='m-1'>DIRECTION INTERDEPARTEMENTALE</p>
                <p class='m-1'>DE LA POLICE AUX FRONTIERES</p>
                <p class='m-1'>DE STRASBOURG</p>
                <p class='m-1'>---</p>
                <p class='m-1'>S.P.A.F. AEROPORT DE STRASBOURG</p>
                <p class='mt-1 text-right mr-5'>Le ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</p>
            </div>

            <div class='text-center h4'>
                <p class='m-1'>NOTE DE SIGNALEMENT</p>
                <p class='m-1'>NON RESPECT DE LA DURÉE DE SÉJOUR AUTORISE</p>
                <p class='m-1'>ETRANGER EN SITUATION IRREGULIERE DETECTE</p>
                <p class='m-1'>LORS DU FRANCHISSEMENT D'UNE FRONTIÈRE EXTÉRIEURE</p>
            </div>            

            
            <div class='mt-5 mx-5 py-2 px-5 border h4'>
                <p class='m-1'>NOM: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "get", [0 => "firstName"], "method", false, false, false, 35), "html", null, true);
        echo " PRÉNOM: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "get", [0 => "lastName"], "method", false, false, false, 35), "html", null, true);
        echo "</p>
                <p class='m-1'>né";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\appExtension']->feminine(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "get", [0 => "gender"], "method", false, false, false, 36)), "html", null, true);
        echo " le: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "get", [0 => "dateBorn"], "method", false, false, false, 36), "html", null, true);
        echo " à: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "get", [0 => "placeBorn"], "method", false, false, false, 36), "html", null, true);
        echo "</p>      
                <p class='m-1'>de nationalité";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\appExtension']->feminine(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", [0 => "gender"], "method", false, false, false, 37)), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", [0 => "nationality"], "method", false, false, false, 37), "html", null, true);
        echo "</p>
                <p class='m-1'>Genre: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "get", [0 => "gender"], "method", false, false, false, 38), "html", null, true);
        echo "</p>
                <p class='m-1'>Demeurant: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "session", [], "any", false, false, false, 39), "get", [0 => "address"], "method", false, false, false, 39), "html", null, true);
        echo "</p>
                <p class='m-1'>Profession: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "session", [], "any", false, false, false, 40), "get", [0 => "job"], "method", false, false, false, 40), "html", null, true);
        echo "</p>
            </div>

            <div class='mt-5 mx-5 py-2 px-5 border h4'>
                <p class='m-1'>Contrôlé";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\appExtension']->feminine(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "get", [0 => "gender"], "method", false, false, false, 44)), "html", null, true);
        echo " au poste frontière de l'Aéroport de Strasbourg</p>
                <p class='m-1'>le: ";
        // line 45
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "session", [], "any", false, false, false, 45), "get", [0 => "dateControl"], "method", false, false, false, 45) . " à ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "session", [], "any", false, false, false, 45), "get", [0 => "timeControl"], "method", false, false, false, 45)), "html", null, true);
        echo "</p>    
                <p class='m-1'>Départ le: ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "session", [], "any", false, false, false, 46), "get", [0 => "dateTimeDepartureFlight"], "method", false, false, false, 46), "html", null, true);
        echo "</p>
                <p class='m-1'>sur le vol: ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "get", [0 => "idFlight"], "method", false, false, false, 47), "html", null, true);
        echo "</p>
                <p class='m-1'>à destination de: ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "session", [], "any", false, false, false, 48), "get", [0 => "destinationFlight"], "method", false, false, false, 48), "html", null, true);
        echo "</p>
            </div>

            <div class='mt-5 mx-5 py-2 px-5 border h4'>
                <p class='m-1'>Titre d'identité ou de voyage: </p>
                <p class='m-1'>Passeport n° : ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", [0 => "idPassport"], "method", false, false, false, 53), "html", null, true);
        echo " valable jusqu'au ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "get", [0 => "dateMaxValadidy"], "method", false, false, false, 53), "html", null, true);
        echo "</p>
                <p class='m-1'>Délivré par: ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "get", [0 => "countryPassport"], "method", false, false, false, 54), "html", null, true);
        echo "</p>
                <p class='m-1'>Si nationalité soumise à visa :</p>
                <p class='m-1'>visa ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", [0 => "nameVisa"], "method", false, false, false, 56), "html", null, true);
        echo " type ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", [0 => "typeVisa"], "method", false, false, false, 56), "html", null, true);
        echo " n°: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", [0 => "idVisa"], "method", false, false, false, 56), "html", null, true);
        echo " délivré le: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", [0 => "dateDelevery"], "method", false, false, false, 56), "html", null, true);
        echo "</p>
                <p class='m-1'>par: ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "session", [], "any", false, false, false, 57), "get", [0 => "countryVisa"], "method", false, false, false, 57), "html", null, true);
        echo "</p>
                <p class='m-1'>Entrée sur le territoire français le: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "get", [0 => "dateEntry"], "method", false, false, false, 58), "html", null, true);
        echo "</p>
                <p class='m-1'>Entrée ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "session", [], "any", false, false, false, 59), "get", [0 => "typeEntry"], "method", false, false, false, 59), "html", null, true);
        echo "</p>
                <p class='m-1'>Durée de dépassement de séjour autorisé: ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "get", [0 => "lenghtStay"], "method", false, false, false, 60), "html", null, true);
        echo "</p>
                <p class='m-1'>Perception de droits de chancellerie, montant: ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "get", [0 => "penality"], "method", false, false, false, 61), "html", null, true);
        echo "</p>
            </div>

            <p class=\"mt-4 ml-5 pl-5 h5\">";
        // line 64
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, false, 64), "get", [0 => "userGrade"], "method", false, false, false, 64) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, false, 64), "get", [0 => "userFullName"], "method", false, false, false, 64)), "html", null, true);
        echo "<p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/templatePdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  205 => 64,  199 => 61,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  173 => 56,  168 => 54,  162 => 53,  154 => 48,  150 => 47,  146 => 46,  142 => 45,  138 => 44,  131 => 40,  127 => 39,  123 => 38,  117 => 37,  109 => 36,  103 => 35,  88 => 23,  77 => 14,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <style>
            .btn-group
            { 
                width: 100%; 
            }
        </style>
    </head>
{% block body %}

            <div class='text-center h5'>
                <p class='m-1'>DIRECTION GENERALE DE LA POLICE NATIONALE</p>
                <p class='m-1'>DIRECTION CENTRALE DE LA POLICE AUX FRONTIERES</p>
                <p class='m-1'>DIRECTION INTERDEPARTEMENTALE</p>
                <p class='m-1'>DE LA POLICE AUX FRONTIERES</p>
                <p class='m-1'>DE STRASBOURG</p>
                <p class='m-1'>---</p>
                <p class='m-1'>S.P.A.F. AEROPORT DE STRASBOURG</p>
                <p class='mt-1 text-right mr-5'>Le {{ \"now\"|date(\"d/m/Y\") }}</p>
            </div>

            <div class='text-center h4'>
                <p class='m-1'>NOTE DE SIGNALEMENT</p>
                <p class='m-1'>NON RESPECT DE LA DURÉE DE SÉJOUR AUTORISE</p>
                <p class='m-1'>ETRANGER EN SITUATION IRREGULIERE DETECTE</p>
                <p class='m-1'>LORS DU FRANCHISSEMENT D'UNE FRONTIÈRE EXTÉRIEURE</p>
            </div>            

            
            <div class='mt-5 mx-5 py-2 px-5 border h4'>
                <p class='m-1'>NOM: {{ app.session.get('firstName') }} PRÉNOM: {{ app.session.get('lastName') }}</p>
                <p class='m-1'>né{{ feminine(app.session.get('gender')) }} le: {{ app.session.get('dateBorn') }} à: {{ app.session.get('placeBorn') }}</p>      
                <p class='m-1'>de nationalité{{ feminine(app.session.get('gender')) }}: {{ app.session.get('nationality') }}</p>
                <p class='m-1'>Genre: {{ app.session.get('gender') }}</p>
                <p class='m-1'>Demeurant: {{ app.session.get('address') }}</p>
                <p class='m-1'>Profession: {{ app.session.get('job') }}</p>
            </div>

            <div class='mt-5 mx-5 py-2 px-5 border h4'>
                <p class='m-1'>Contrôlé{{ feminine(app.session.get('gender')) }} au poste frontière de l'Aéroport de Strasbourg</p>
                <p class='m-1'>le: {{ app.session.get('dateControl') ~ ' à ' ~ app.session.get('timeControl')}}</p>    
                <p class='m-1'>Départ le: {{ app.session.get('dateTimeDepartureFlight')}}</p>
                <p class='m-1'>sur le vol: {{ app.session.get('idFlight') }}</p>
                <p class='m-1'>à destination de: {{ app.session.get('destinationFlight') }}</p>
            </div>

            <div class='mt-5 mx-5 py-2 px-5 border h4'>
                <p class='m-1'>Titre d'identité ou de voyage: </p>
                <p class='m-1'>Passeport n° : {{ app.session.get('idPassport') }} valable jusqu'au {{ app.session.get('dateMaxValadidy') }}</p>
                <p class='m-1'>Délivré par: {{ app.session.get('countryPassport') }}</p>
                <p class='m-1'>Si nationalité soumise à visa :</p>
                <p class='m-1'>visa {{ app.session.get('nameVisa') }} type {{ app.session.get('typeVisa') }} n°: {{ app.session.get('idVisa') }} délivré le: {{ app.session.get('dateDelevery') }}</p>
                <p class='m-1'>par: {{ app.session.get('countryVisa') }}</p>
                <p class='m-1'>Entrée sur le territoire français le: {{ app.session.get('dateEntry') }}</p>
                <p class='m-1'>Entrée {{ app.session.get('typeEntry') }}</p>
                <p class='m-1'>Durée de dépassement de séjour autorisé: {{ app.session.get('lenghtStay') }}</p>
                <p class='m-1'>Perception de droits de chancellerie, montant: {{ app.session.get('penality') }}</p>
            </div>

            <p class=\"mt-4 ml-5 pl-5 h5\">{{app.session.get('userGrade') ~ ' ' ~ app.session.get('userFullName') }}<p>

{% endblock %}", "pages/templatePdf.html.twig", "C:\\wamp64\\www\\ChancelleriePDFGenerator\\templates\\pages\\templatePdf.html.twig");
    }
}
