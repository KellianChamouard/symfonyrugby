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

/* home/utilisateurs.html.twig */
class __TwigTemplate_401f66ed9743e7c15cff53a79fada47e8fd563c7e742e44eb9bc3b90cfd46173 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/utilisateurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/utilisateurs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/utilisateurs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("/inc/modal.html.twig", "home/utilisateurs.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/utilisateurs.html.twig", 4)->display($context);
        // line 5
        echo "    <div class=\"leftbar\">

        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <center>
                ";
        // line 9
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "sitelogo", [], "any", false, false, false, 9), "")) {
            // line 10
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        } else {
            // line 12
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "sitelogo", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        }
        // line 14
        echo "            </center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            ";
        // line 19
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 19, $this->source); })()), "clubname", [], "any", false, false, false, 19), "")) {
            // line 20
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "
                ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "
            ";
        } else {
            // line 23
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 23, $this->source); })()), "clubname", [], "any", false, false, false, 23), "html", null, true);
            echo "
            ";
        }
        // line 25
        echo "        </div>
        ";
        // line 26
        $this->loadTemplate("inc/nav.html.twig", "home/utilisateurs.html.twig", 26)->display($context);
        // line 27
        echo "    </div>

    <div class=\"block\">

        ";
        // line 31
        $this->loadTemplate("inc/navtop.html.twig", "home/utilisateurs.html.twig", 31)->display($context);
        // line 32
        echo "
        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">

                    <div class=\"col-6 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    accessibility_new
                                </span>&nbsp;Les utilisateurs</div>

                            <div class=\"simplebloccontent\">
                                <table>
                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allusers"]) || array_key_exists("allusers", $context) ? $context["allusers"] : (function () { throw new RuntimeError('Variable "allusers" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 49
            echo "                                        <tr>
                                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "username", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 52
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "lastname", [], "any", false, false, false, 52), "Admin")) {
                // line 53
                echo "                                                    <span class=\"material-icons\" style=\"font-size:10px\">
                                                        star
                                                    </span>
                                                    ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "lastname", [], "any", false, false, false, 56), "html", null, true);
                echo "
                                                    ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "firstname", [], "any", false, false, false, 57), "html", null, true);
                echo "
                                                ";
            } else {
                // line 59
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "lastname", [], "any", false, false, false, 59), "html", null, true);
                echo "
                                                    ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "firstname", [], "any", false, false, false, 60), "html", null, true);
                echo "
                                                ";
            }
            // line 62
            echo "                                            </td>
                                            <td>
                                                ";
            // line 64
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "lastname", [], "any", false, false, false, 64), "Admin")) {
                // line 65
                echo "
                                                ";
            } else {
                // line 67
                echo "                                                <a href=\"#\">
                                                    <span class=\"material-icons\">
                                                        delete
                                                    </span>
                                                </a>
                                                <a href=\"#\">
                                                    <span class=\"material-icons\">
                                                        edit
                                                    </span>
                                                </a>
                                                ";
            }
            // line 78
            echo "                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-6 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    person_add_alt_1
                                </span>&nbsp;Ajouter un utilisateurs</div>

                            <div class=\"simplebloccontent\">
                                ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form');
        echo "
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 94,  222 => 81,  214 => 78,  201 => 67,  197 => 65,  195 => 64,  191 => 62,  186 => 60,  181 => 59,  176 => 57,  172 => 56,  167 => 53,  165 => 52,  160 => 50,  157 => 49,  153 => 48,  135 => 32,  133 => 31,  127 => 27,  125 => 26,  122 => 25,  116 => 23,  111 => 21,  106 => 20,  104 => 19,  97 => 14,  91 => 12,  85 => 10,  83 => 9,  78 => 7,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
    <div class=\"leftbar\">

        <a href=\"{{ path('home') }}\">
            <center>
                {% if site.sitelogo == '' %}
                    <img src=\"{{ asset('../images/rscms.png') }}\" class=\"logo\"/>
                {% else %}
                    <img src=\"{{ site.sitelogo }}\" class=\"logo\"/>
                {% endif %}
            </center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            {% if club.clubname == '' %}
                {{ cmsname }}
                {{ version }}
            {% else %}
                {{ club.clubname }}
            {% endif %}
        </div>
        {% include 'inc/nav.html.twig' %}
    </div>

    <div class=\"block\">

        {% include 'inc/navtop.html.twig' %}

        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">

                    <div class=\"col-6 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    accessibility_new
                                </span>&nbsp;Les utilisateurs</div>

                            <div class=\"simplebloccontent\">
                                <table>
                                    {% for id in allusers %}
                                        <tr>
                                            <td>{{ id.username }}</td>
                                            <td>
                                                {% if id.lastname == \"Admin\" %}
                                                    <span class=\"material-icons\" style=\"font-size:10px\">
                                                        star
                                                    </span>
                                                    {{ id.lastname }}
                                                    {{ id.firstname }}
                                                {% else %}
                                                    {{ id.lastname }}
                                                    {{ id.firstname }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if id.lastname == \"Admin\" %}

                                                {% else %}
                                                <a href=\"#\">
                                                    <span class=\"material-icons\">
                                                        delete
                                                    </span>
                                                </a>
                                                <a href=\"#\">
                                                    <span class=\"material-icons\">
                                                        edit
                                                    </span>
                                                </a>
                                                {% endif %}
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-6 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    person_add_alt_1
                                </span>&nbsp;Ajouter un utilisateurs</div>

                            <div class=\"simplebloccontent\">
                                {{ form(form) }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

{% endblock %}", "home/utilisateurs.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/utilisateurs.html.twig");
    }
}
