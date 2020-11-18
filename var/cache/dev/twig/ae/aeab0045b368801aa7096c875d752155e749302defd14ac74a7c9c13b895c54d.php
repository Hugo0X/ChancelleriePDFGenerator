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

/* pages/form.html.twig */
class __TwigTemplate_c0a70106d47eed484ee25b6f0b87a2b2991e4d96d4e7f38bb7e961a6382a193d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/form.html.twig", 1);
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

        echo "Formulaire des droits de chancelerie";
        
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

<div class='col-md-6 mx-auto'>        
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
                
                <div class=\"mt-2 border-top border-dark form-group\">
                    <p class=\"h4\">Identité</p>
                    <div class=\"form-row\">
                        <div class=\"col-md-6\">
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "lastName", [], "any", false, false, false, 16), 'row', ["label" => "Nom", "attr" => ["placeholder" => "McClain"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "firstName", [], "any", false, false, false, 19), 'row', ["label" => "Prénom", "attr" => ["placeholder" => "John"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "placeBorn", [], "any", false, false, false, 22), 'row', ["label" => "Lieu de naissance", "attr" => ["placeholder" => "New-York"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "dateBorn", [], "any", false, false, false, 25), 'row', ["label" => "Date de naissance"]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nationality", [], "any", false, false, false, 28), 'row', ["label" => "Nationalité", "attr" => ["placeholder" => "Americaine"]]);
        echo "
                        </div>

                        <div class=\"col-md-6\">                                \t
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "gender", [], "any", false, false, false, 32), 'label', ["label" => "Genre"]);
        echo "       
                                <div class=\"d-flex flex-row\">        
                                    <div class=\"input-group radioCursor animation\" onclick=\"checkRadioMale();\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text labelDisplayNone pl-3 pb-3\">
                                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "gender", [], "any", false, false, false, 37), 0, [], "array", false, false, false, 37), 'widget');
        echo "
                                            </div>
                                        </div>
                                            <p class=\"form-control\">Homme<p>
                                    </div>
                                    <div class=\"input-group radioCursor animation\" onclick=\"checkRadioFemale();\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text labelDisplayNone pl-3 pb-3\">
                                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "gender", [], "any", false, false, false, 45), 1, [], "array", false, false, false, 45), 'widget');
        echo "
                                            </div>
                                        </div>
                                            <p class=\"form-control\">Femme<p>
                                    </div>                     
                                </div>
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "address", [], "any", false, false, false, 53), 'row', ["label" => "Adresse", "attr" => ["placeholder" => "666 Nakatomi Plaza à LosAngeles"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "job", [], "any", false, false, false, 56), 'row', ["label" => "Emploi", "attr" => ["placeholder" => "Detective de police"]]);
        echo "
                        </div>
                    </div>
                </div>

                <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Vol</p>
                    <div class=\"form-row\">
                        <div class=\"col-md-6 d-flex flex-row align-items-center\">
                            <div class=\"\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "dateControl", [], "any", false, false, false, 66), 'row', ["label" => "Date et heure de contôle"]);
        echo "   
                            </div>
                            <div class=\"mt-3\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "timeControl", [], "any", false, false, false, 69), 'widget');
        echo " 
                            </div>           
                        </div>
                        ";
        // line 80
        echo "                        <div class=\"col-md-6\">
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "idFlight", [], "any", false, false, false, 81), 'row', ["label" => "Numéro", "attr" => ["placeholder" => "AF1234"]]);
        echo "
                        </div>
                        ";
        // line 86
        echo "                    </div>
                </div>

                <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Passeport</p>
                    <div class=\"form-row\">            
                        <div class=\"col-md-6\">
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "idPassport", [], "any", false, false, false, 93), 'row', ["label" => "Identifiant", "attr" => ["placeholder" => "12AB00035"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "dateMaxValadidy", [], "any", false, false, false, 96), 'row', ["label" => "Fin de validité"]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "countryPassport", [], "any", false, false, false, 99), 'row', ["label" => "Pays émetteur", "attr" => ["placeholder" => "France"]]);
        echo "
                        </div>
                    </div>
                </div>

                <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Visa</p>
                    <div class=\"form-row\">   
                        <div class=\"col-md-4 mb-3\">
                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "nameVisa", [], "any", false, false, false, 108), 'row', ["label" => "Pays émetteur", "attr" => ["placeholder" => "France"]]);
        echo "
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "typeVisa", [], "any", false, false, false, 111), 'row', ["label" => "Type"]);
        echo "
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "idVisa", [], "any", false, false, false, 114), 'row', ["label" => "Identifiant", "attr" => ["placeholder" => "123456789"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "countryVisa", [], "any", false, false, false, 117), 'row', ["label" => "Administration émettrice", "attr" => ["placeholder" => "Consulat Général de France"]]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "dateDelevery", [], "any", false, false, false, 120), 'row', ["label" => "Date de delivrance"]);
        echo "
                        </div>
                        
                    </div>
                </div>

                <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Entrée</p>
                    <div class=\"form-row\">      
                        <div class=\"col-md-6\">
                            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "dateEntry", [], "any", false, false, false, 130), 'row', ["label" => "Date d'entrée sur le territoire français"]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "typeEntry", [], "any", false, false, false, 133), 'row', ["label" => "Type d'entrée"]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "lenghtStay", [], "any", false, false, false, 136), 'row', ["label" => "Durée supèrieur à 30 jours ?"]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "penality", [], "any", false, false, false, 139), 'row', ["label" => "Pénalité", "attr" => ["placeholder" => "198"]]);
        echo "
                        </div>
                    </div>
                </div>

                    <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Auteur</p>
                    <div class=\"form-row\">      
                        <div class=\"col-md-6\">
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "userGrade", [], "any", false, false, false, 148), 'row', ["label" => "Grade"]);
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "userFullName", [], "any", false, false, false, 151), 'row', ["label" => "NOM et prénom", "attr" => ["placeholder" => "DUPONT Jean"]]);
        echo "
                        </div>
                    </div>
                </div>

        <button type=\"submit\" class=\"my-3 btn-lg btn btn-primary btn-block\">Générer</button>
        ";
        // line 157
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_end');
        echo "                     
</div>                                           


<script>
        function checkRadioMale() {
        document.getElementById(\"pdf_generator_gender_0\").checked = true;
        }

        function checkRadioFemale() {
        document.getElementById(\"pdf_generator_gender_1\").checked = true;
        }
</script>

            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 157,  309 => 151,  303 => 148,  291 => 139,  285 => 136,  279 => 133,  273 => 130,  260 => 120,  254 => 117,  248 => 114,  242 => 111,  236 => 108,  224 => 99,  218 => 96,  212 => 93,  203 => 86,  198 => 81,  195 => 80,  189 => 69,  183 => 66,  170 => 56,  164 => 53,  153 => 45,  142 => 37,  134 => 32,  127 => 28,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Formulaire des droits de chancelerie' %}

{% block body %}

<h1 class='h2 my-5 text-center font-weight-bold'>Formulaire des droits de chancelerie</h1>

<div class='col-md-6 mx-auto'>        
            {{ form_start(form) }}
                
                <div class=\"mt-2 border-top border-dark form-group\">
                    <p class=\"h4\">Identité</p>
                    <div class=\"form-row\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.lastName, {'label': 'Nom', 'attr': {'placeholder': 'McClain'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.firstName, { 'label': 'Prénom', 'attr': {'placeholder': 'John'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.placeBorn, { 'label': 'Lieu de naissance', 'attr': {'placeholder': 'New-York'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.dateBorn, { 'label': 'Date de naissance' }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.nationality, { 'label': 'Nationalité', 'attr': {'placeholder': 'Americaine'}}) }}
                        </div>

                        <div class=\"col-md-6\">                                \t
                            {{ form_label(form.gender, 'Genre') }}       
                                <div class=\"d-flex flex-row\">        
                                    <div class=\"input-group radioCursor animation\" onclick=\"checkRadioMale();\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text labelDisplayNone pl-3 pb-3\">
                                                {{ form_widget(form.gender[0]) }}
                                            </div>
                                        </div>
                                            <p class=\"form-control\">Homme<p>
                                    </div>
                                    <div class=\"input-group radioCursor animation\" onclick=\"checkRadioFemale();\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text labelDisplayNone pl-3 pb-3\">
                                                {{ form_widget(form.gender[1]) }}
                                            </div>
                                        </div>
                                            <p class=\"form-control\">Femme<p>
                                    </div>                     
                                </div>
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.address, { 'label': 'Adresse', 'attr': {'placeholder': '666 Nakatomi Plaza à LosAngeles'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.job, { 'label': 'Emploi', 'attr': {'placeholder': 'Detective de police'}}) }}
                        </div>
                    </div>
                </div>

                <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Vol</p>
                    <div class=\"form-row\">
                        <div class=\"col-md-6 d-flex flex-row align-items-center\">
                            <div class=\"\">
                                {{ form_row(form.dateControl, { 'label': 'Date et heure de contôle' }) }}   
                            </div>
                            <div class=\"mt-3\">
                                    {{ form_widget(form.timeControl) }} 
                            </div>           
                        </div>
                        {# <div class=\"col-md-6 d-flex flex-row align-items-center\">
                            <div class=\"\">
                                {{ form_row(form.dateDepartureFlight, { 'label': 'Date et heure de départ' }) }}   
                            </div>
                            <div class=\"mt-3\">
                                    {{ form_widget(form.timeDepartureFlight) }} 
                            </div>           
                        </div> #}
                        <div class=\"col-md-6\">
                            {{ form_row(form.idFlight, { 'label': 'Numéro', 'attr': {'placeholder': 'AF1234'} }) }}
                        </div>
                        {# <div class=\"col-md-6\">
                            {{ form_row(form.destinationFlight, { 'label': 'Destination', 'attr': {'placeholder': 'Lyon FRANCE'}  }) }}
                        </div> #}
                    </div>
                </div>

                <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Passeport</p>
                    <div class=\"form-row\">            
                        <div class=\"col-md-6\">
                            {{ form_row(form.idPassport, { 'label': 'Identifiant', 'attr': {'placeholder': '12AB00035'}  }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.dateMaxValadidy, { 'label': 'Fin de validité'}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.countryPassport, { 'label': 'Pays émetteur', 'attr': {'placeholder': 'France'} }) }}
                        </div>
                    </div>
                </div>

                <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Visa</p>
                    <div class=\"form-row\">   
                        <div class=\"col-md-4 mb-3\">
                            {{ form_row(form.nameVisa, { 'label': 'Pays émetteur', 'attr': {'placeholder': 'France'} }) }}
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            {{ form_row(form.typeVisa, { 'label': 'Type' }) }}
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            {{ form_row(form.idVisa, { 'label': 'Identifiant', 'attr': {'placeholder': '123456789'}  }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.countryVisa, { 'label': 'Administration émettrice', 'attr': {'placeholder': 'Consulat Général de France'}  }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.dateDelevery, { 'label': 'Date de delivrance' }) }}
                        </div>
                        
                    </div>
                </div>

                <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Entrée</p>
                    <div class=\"form-row\">      
                        <div class=\"col-md-6\">
                            {{ form_row(form.dateEntry, { \"label\": \"Date d'entrée sur le territoire français\" }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.typeEntry, { 'label': \"Type d'entrée\" }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.lenghtStay, { 'label': 'Durée supèrieur à 30 jours ?' }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.penality, { 'label': 'Pénalité', 'attr': {'placeholder': '198'}  }) }}
                        </div>
                    </div>
                </div>

                    <div class=\"mt-2 border-top border-dark\">
                    <p class=\"h4\">Auteur</p>
                    <div class=\"form-row\">      
                        <div class=\"col-md-6\">
                            {{ form_row(form.userGrade, { \"label\": \"Grade\" }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.userFullName, { 'label': \"NOM et prénom\", 'attr': {'placeholder': 'DUPONT Jean'} }) }}
                        </div>
                    </div>
                </div>

        <button type=\"submit\" class=\"my-3 btn-lg btn btn-primary btn-block\">Générer</button>
        {{ form_end(form) }}                     
</div>                                           


<script>
        function checkRadioMale() {
        document.getElementById(\"pdf_generator_gender_0\").checked = true;
        }

        function checkRadioFemale() {
        document.getElementById(\"pdf_generator_gender_1\").checked = true;
        }
</script>

            
{% endblock %}
", "pages/form.html.twig", "C:\\wamp64\\www\\ChancelleriePDFGenerator\\templates\\pages\\form.html.twig");
    }
}
