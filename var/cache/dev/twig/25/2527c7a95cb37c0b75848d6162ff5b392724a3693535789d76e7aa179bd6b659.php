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

/* pages/formFlightoption.html.twig */
class __TwigTemplate_7cdbaeccf58bb32c5459c508efe005642ea939f723d6aa5deec6541be900c9fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/formFlightoption.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/formFlightoption.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/formFlightoption.html.twig", 1);
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

        echo "Numéro de vol inexistant";
        
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
<h2 class='h3 my-5 text-center font-weight-bold text-danger'>Numéro de vol inexistant</h2>

<div class='col-md-6 mx-auto'>
        <div class=\"mt-2 border-top border-dark\">
            <p class=\"h4\">Vol</p>

            <form method=\"post\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pdf_formFlightNotFound");
        echo "\">
            <div class=\"form-row\">

                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <div class=\"form-group\"><label for=\"idFlight\" class=\"required\">Numéro</label><input type=\"text\" id=\"idFlight\" name=\"idFlight\" required=\"required\" placeholder=\"AF1234\" minlength=\"5\" maxlength=\"6\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "get", [0 => "idFlight"], "method", false, false, false, 19), "html", null, true);
        echo "\" /></div>
                    </div>
                </div>
                <div class=\"col-md-6 d-flex flex-row align-items-center\">
                    <div class=\"\">
                        <div class=\"form-group\"><label for=\"dateDepartureFlight\" class=\"required\">Date et heure du vol</label><input type=\"date\" id=\"dateDepartureFlight\" name=\"dateDepartureFlight\" required=\"required\" class=\"form-control\"/></div>   
                    </div>
                    <div class=\"mt-3\">
                            <div id=\"timeDepartureFlight\" class=\"form-inline\"><div class=\"sr-only\"><label class=\"required\" for=\"timeDepartureFlight_hour\">Hour</label></div><select id=\"timeDepartureFlight_hour\" name=\"hour\" class=\"form-control\"><option value=\"00\">00</option><option value=\"01\">01</option><option value=\"02\">02</option><option value=\"03\">03</option><option value=\"04\">04</option><option value=\"05\">05</option><option value=\"06\">06</option><option value=\"07\">07</option><option value=\"08\">08</option><option value=\"09\">09</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option></select>:<div class=\"sr-only\"><label class=\"required\" for=\"timeDepartureFlight_minute\">Minute</label></div><select id=\"timeDepartureFlight_minute\" name=\"minute\" class=\"form-control\"><option value=\"00\">00</option><option value=\"01\">01</option><option value=\"02\">02</option><option value=\"03\">03</option><option value=\"4\">04</option><option value=\"05\">05</option><option value=\"06\">06</option><option value=\"07\">07</option><option value=\"08\">08</option><option value=\"09\">09</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option><option value=\"24\">24</option><option value=\"25\">25</option><option value=\"26\">26</option><option value=\"27\">27</option><option value=\"28\">28</option><option value=\"29\">29</option><option value=\"30\">30</option><option value=\"31\">31</option><option value=\"32\">32</option><option value=\"33\">33</option><option value=\"34\">34</option><option value=\"35\">35</option><option value=\"36\">36</option><option value=\"37\">37</option><option value=\"38\">38</option><option value=\"39\">39</option><option value=\"40\">40</option><option value=\"41\">41</option><option value=\"42\">42</option><option value=\"43\">43</option><option value=\"44\">44</option><option value=\"45\">45</option><option value=\"46\">46</option><option value=\"47\">47</option><option value=\"48\">48</option><option value=\"49\">49</option><option value=\"50\">50</option><option value=\"51\">51</option><option value=\"52\">52</option><option value=\"53\">53</option><option value=\"54\">54</option><option value=\"55\">55</option><option value=\"56\">56</option><option value=\"57\">57</option><option value=\"58\">58</option><option value=\"59\">59</option></select></div> 
                    </div>           
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        </div>   
                        <div class=\"form-group\"><label for=\"destinationFlight\" class=\"required\">Destination</label><input type=\"text\" id=\"destinationFlight\" name=\"destinationFlight\" required=\"required\" placeholder=\"Lyon\" class=\"form-control\" /></div> 
                    </div>
                </div>

        <button type=\"submit\" class=\"mt-3 btn-lg btn btn-primary btn-block\">Générer</button>

        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("pdf_FlightNotFound"), "html", null, true);
        echo "\">

    </form>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/formFlightoption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  106 => 19,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Numéro de vol inexistant' %}

{% block body %}

<h1 class='h2 my-5 text-center font-weight-bold'>Formulaire des droits de chancelerie</h1>
<h2 class='h3 my-5 text-center font-weight-bold text-danger'>Numéro de vol inexistant</h2>

<div class='col-md-6 mx-auto'>
        <div class=\"mt-2 border-top border-dark\">
            <p class=\"h4\">Vol</p>

            <form method=\"post\" action=\"{{ path('app_pdf_formFlightNotFound') }}\">
            <div class=\"form-row\">

                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <div class=\"form-group\"><label for=\"idFlight\" class=\"required\">Numéro</label><input type=\"text\" id=\"idFlight\" name=\"idFlight\" required=\"required\" placeholder=\"AF1234\" minlength=\"5\" maxlength=\"6\" class=\"form-control\" value=\"{{ app.session.get('idFlight') }}\" /></div>
                    </div>
                </div>
                <div class=\"col-md-6 d-flex flex-row align-items-center\">
                    <div class=\"\">
                        <div class=\"form-group\"><label for=\"dateDepartureFlight\" class=\"required\">Date et heure du vol</label><input type=\"date\" id=\"dateDepartureFlight\" name=\"dateDepartureFlight\" required=\"required\" class=\"form-control\"/></div>   
                    </div>
                    <div class=\"mt-3\">
                            <div id=\"timeDepartureFlight\" class=\"form-inline\"><div class=\"sr-only\"><label class=\"required\" for=\"timeDepartureFlight_hour\">Hour</label></div><select id=\"timeDepartureFlight_hour\" name=\"hour\" class=\"form-control\"><option value=\"00\">00</option><option value=\"01\">01</option><option value=\"02\">02</option><option value=\"03\">03</option><option value=\"04\">04</option><option value=\"05\">05</option><option value=\"06\">06</option><option value=\"07\">07</option><option value=\"08\">08</option><option value=\"09\">09</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option></select>:<div class=\"sr-only\"><label class=\"required\" for=\"timeDepartureFlight_minute\">Minute</label></div><select id=\"timeDepartureFlight_minute\" name=\"minute\" class=\"form-control\"><option value=\"00\">00</option><option value=\"01\">01</option><option value=\"02\">02</option><option value=\"03\">03</option><option value=\"4\">04</option><option value=\"05\">05</option><option value=\"06\">06</option><option value=\"07\">07</option><option value=\"08\">08</option><option value=\"09\">09</option><option value=\"10\">10</option><option value=\"11\">11</option><option value=\"12\">12</option><option value=\"13\">13</option><option value=\"14\">14</option><option value=\"15\">15</option><option value=\"16\">16</option><option value=\"17\">17</option><option value=\"18\">18</option><option value=\"19\">19</option><option value=\"20\">20</option><option value=\"21\">21</option><option value=\"22\">22</option><option value=\"23\">23</option><option value=\"24\">24</option><option value=\"25\">25</option><option value=\"26\">26</option><option value=\"27\">27</option><option value=\"28\">28</option><option value=\"29\">29</option><option value=\"30\">30</option><option value=\"31\">31</option><option value=\"32\">32</option><option value=\"33\">33</option><option value=\"34\">34</option><option value=\"35\">35</option><option value=\"36\">36</option><option value=\"37\">37</option><option value=\"38\">38</option><option value=\"39\">39</option><option value=\"40\">40</option><option value=\"41\">41</option><option value=\"42\">42</option><option value=\"43\">43</option><option value=\"44\">44</option><option value=\"45\">45</option><option value=\"46\">46</option><option value=\"47\">47</option><option value=\"48\">48</option><option value=\"49\">49</option><option value=\"50\">50</option><option value=\"51\">51</option><option value=\"52\">52</option><option value=\"53\">53</option><option value=\"54\">54</option><option value=\"55\">55</option><option value=\"56\">56</option><option value=\"57\">57</option><option value=\"58\">58</option><option value=\"59\">59</option></select></div> 
                    </div>           
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        </div>   
                        <div class=\"form-group\"><label for=\"destinationFlight\" class=\"required\">Destination</label><input type=\"text\" id=\"destinationFlight\" name=\"destinationFlight\" required=\"required\" placeholder=\"Lyon\" class=\"form-control\" /></div> 
                    </div>
                </div>

        <button type=\"submit\" class=\"mt-3 btn-lg btn btn-primary btn-block\">Générer</button>

        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('pdf_FlightNotFound') }}\">

    </form>

</div>


{% endblock %}", "pages/formFlightoption.html.twig", "C:\\wamp64\\www\\ChancelleriePDFGenerator\\templates\\pages\\formFlightOption.html.twig");
    }
}
