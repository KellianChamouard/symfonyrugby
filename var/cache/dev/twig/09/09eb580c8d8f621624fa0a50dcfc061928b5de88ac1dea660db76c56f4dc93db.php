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

/* inc/modaldeco.html.twig */
class __TwigTemplate_37f3a72ce5b2da380d4c67d7f2bcd0412efbc421f543fae3290fb26a4f9f49a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modaldeco.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/modaldeco.html.twig"));

        // line 1
        echo "<!-- Modal deco -->
<div
    class=\"modal fade\"
    id=\"exampleModal5\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"simplebloc modalsize\">
                <div class=\"simplebloctitle\">
                    <span class=\"material-icons\">
                        person
                    </span>&nbsp;Déconnexion
                </div>
                <div class=\"simplebloccontent freesize\">
                       Êtes-vous sûr de vouloir vous déconnecter ?<br><br>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NON</button>
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" type=\"button\" class=\"btn btn-primary\">OUI</a>
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
        return "inc/modaldeco.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal deco -->
<div
    class=\"modal fade\"
    id=\"exampleModal5\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"simplebloc modalsize\">
                <div class=\"simplebloctitle\">
                    <span class=\"material-icons\">
                        person
                    </span>&nbsp;Déconnexion
                </div>
                <div class=\"simplebloccontent freesize\">
                       Êtes-vous sûr de vouloir vous déconnecter ?<br><br>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">NON</button>
                <a href=\"{{ path('app_logout') }}\" type=\"button\" class=\"btn btn-primary\">OUI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "inc/modaldeco.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/inc/modaldeco.html.twig");
    }
}
