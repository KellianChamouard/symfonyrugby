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

/* inc/navtop.html.twig */
class __TwigTemplate_fee77e0e7f906196cab1e7f14048d17bec862250f5127e1b40ae04ed298f6b8f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navtop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navtop.html.twig"));

        // line 1
        echo "<div class=\"navbar\">

    <div class=\"searchzone\">
      <!--  <form>
            <input type=\"text\" name=\"\" id=\"search\"
            placeholder=\"Rechercher...\"></form>-->
        </div>
        <div class=\"userbox\">
            ";
        // line 9
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "avatar", [], "any", false, false, false, 9), "avataradmin")) {
            // line 10
            echo "
                ";
            // line 11
            $this->loadTemplate("inc/avatar.svg.twig", "inc/navtop.html.twig", 11)->display($context);
            // line 12
            echo "
            ";
        } else {
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "avatar", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"profilepic\">
            ";
        }
        // line 16
        echo "            <div class=\"rightbox\">
                <ul class=\"rightalign\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal2\">
                        <li class=\"listnormal\">mon Profil<span class=\"material-icons iconsheight\">person</span>
                        </li>
                    </a>
                    <a href=\"#\">
                        <li class=\"listnormal clubcolor\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal5\">Déconnexion</a>
                            <span class=\"material-icons iconsheight clubcolor\">power_settings_new</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navtop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  64 => 14,  60 => 12,  58 => 11,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar\">

    <div class=\"searchzone\">
      <!--  <form>
            <input type=\"text\" name=\"\" id=\"search\"
            placeholder=\"Rechercher...\"></form>-->
        </div>
        <div class=\"userbox\">
            {% if app.user.avatar == 'avataradmin' %}

                {% include 'inc/avatar.svg.twig' %}

            {% else %}
                <img src=\"{{ app.user.avatar }}\" class=\"profilepic\">
            {% endif %}
            <div class=\"rightbox\">
                <ul class=\"rightalign\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal2\">
                        <li class=\"listnormal\">mon Profil<span class=\"material-icons iconsheight\">person</span>
                        </li>
                    </a>
                    <a href=\"#\">
                        <li class=\"listnormal clubcolor\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal5\">Déconnexion</a>
                            <span class=\"material-icons iconsheight clubcolor\">power_settings_new</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>", "inc/navtop.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/inc/navtop.html.twig");
    }
}
