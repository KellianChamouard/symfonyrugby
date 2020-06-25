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

/* inc/modalclub.html.twig */
class __TwigTemplate_56e19e3f544d00259099ddbfa2398717dc6b043ad61ff69c43cae315f325134c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modalclub.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modalclub.html.twig"));

        // line 1
        echo "<!-- Modal infos site -->
<div
    class=\"modal fade\"
    id=\"exampleModal4\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"simplebloc modalsize\">
                <div class=\"simplebloctitle\">
                    <span class=\"material-icons\">
                        settings
                    </span>&nbsp;Informations du Club
                </div>
                <div class=\"simplebloccontent freesize\">
                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form');
        echo "
                        <br>
                            <div style=\"font-size:10px\">
                                <b>
                                    <i>Note : Il se peut que les modifications apparaissent seulement après une
                                        reconnexion a l'administration.</i>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/modalclub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal infos site -->
<div
    class=\"modal fade\"
    id=\"exampleModal4\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"simplebloc modalsize\">
                <div class=\"simplebloctitle\">
                    <span class=\"material-icons\">
                        settings
                    </span>&nbsp;Informations du Club
                </div>
                <div class=\"simplebloccontent freesize\">
                    {{ form(form) }}
                        <br>
                            <div style=\"font-size:10px\">
                                <b>
                                    <i>Note : Il se peut que les modifications apparaissent seulement après une
                                        reconnexion a l'administration.</i>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "inc/modalclub.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/inc/modalclub.html.twig");
    }
}
