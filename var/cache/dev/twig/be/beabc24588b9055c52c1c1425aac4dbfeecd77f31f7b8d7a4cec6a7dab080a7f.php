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

/* /inc/stopteam.html.twig */
class __TwigTemplate_81585b08cf741a0c1a4ff4e46dae0ef433006b754bac496c42cfdb57e3bec46d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/inc/stopteam.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/inc/stopteam.html.twig"));

        // line 1
        echo "<!-- Modal stop teams -->
<div
    class=\"modal fade\"
    id=\"exampleModal60\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"simplebloc modalsize\">
                <div class=\"simplebloctitle\">
                    <span class=\"material-icons\">
                        report
                    </span>&nbsp; Oups !
                </div>
                <div class=\"simplebloccontent freesize\">

                Le nombre total d'équipes pour ce championnat est atteint.<br><br>
                    
<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">QUITTER</button>
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
        return "/inc/stopteam.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal stop teams -->
<div
    class=\"modal fade\"
    id=\"exampleModal60\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"simplebloc modalsize\">
                <div class=\"simplebloctitle\">
                    <span class=\"material-icons\">
                        report
                    </span>&nbsp; Oups !
                </div>
                <div class=\"simplebloccontent freesize\">

                Le nombre total d'équipes pour ce championnat est atteint.<br><br>
                    
<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">QUITTER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "/inc/stopteam.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/inc/stopteam.html.twig");
    }
}
