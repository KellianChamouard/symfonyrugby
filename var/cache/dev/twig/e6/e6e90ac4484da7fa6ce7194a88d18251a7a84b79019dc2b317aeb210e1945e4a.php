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

/* home/club.html.twig */
class __TwigTemplate_2f3be842e59a696e7849795541128b1b2df514ae2fc0f9304516e83e864458d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/club.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/club.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/club.html.twig", 1);
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
        $this->loadTemplate("/inc/modalclub.html.twig", "home/club.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modal.html.twig", "home/club.html.twig", 4)->display($context);
        // line 5
        echo "        ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/club.html.twig", 5)->display($context);
        // line 6
        echo "    <div class=\"leftbar\">

        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <center>
                ";
        // line 10
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 10, $this->source); })()), "sitelogo", [], "any", false, false, false, 10), "")) {
            // line 11
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        } else {
            // line 13
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 13, $this->source); })()), "sitelogo", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        }
        // line 15
        echo "            </center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            ";
        // line 20
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 20, $this->source); })()), "clubname", [], "any", false, false, false, 20), "")) {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "
                ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "
            ";
        } else {
            // line 24
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 24, $this->source); })()), "clubname", [], "any", false, false, false, 24), "html", null, true);
            echo "
            ";
        }
        // line 26
        echo "        </div>
        ";
        // line 27
        $this->loadTemplate("inc/nav.html.twig", "home/club.html.twig", 27)->display($context);
        // line 28
        echo "    </div>

    <div class=\"block\">

        ";
        // line 32
        $this->loadTemplate("inc/navtop.html.twig", "home/club.html.twig", 32)->display($context);
        // line 33
        echo "
        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    settings
                                </span>&nbsp;Le Club</div>
                            <div class=\"simplebloccontent\">

                                <table>
                                    <tr>
                                        <td class=\"infosclub bgwhite\">nom du club :</td>
                                        <td class=\"infosclubresp\">
                                            ";
        // line 52
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 52, $this->source); })()), "clubname", [], "any", false, false, false, 52), "")) {
            // line 53
            echo "                                                Veuillez définir un nom.
                                            ";
        } else {
            // line 55
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 55, $this->source); })()), "clubname", [], "any", false, false, false, 55), "html", null, true);
            echo "
                                            ";
        }
        // line 57
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">championnat du club :</td>
                                        <td class=\"infosclubresp\">
                                            ";
        // line 62
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 62, $this->source); })()), "clubcc", [], "any", false, false, false, 62), "")) {
            // line 63
            echo "                                                Veuillez définir un championnat.
                                            ";
        } else {
            // line 65
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 65, $this->source); })()), "clubcc", [], "any", false, false, false, 65), "html", null, true);
            echo "
                                            ";
        }
        // line 67
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">adresse du club :</td>
                                        <td class=\"infosclubresp\">
                                            ";
        // line 72
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 72, $this->source); })()), "clubadress", [], "any", false, false, false, 72), "")) {
            // line 73
            echo "                                                Veuillez définir une adresse.
                                            ";
        } else {
            // line 75
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 75, $this->source); })()), "clubadress", [], "any", false, false, false, 75), "html", null, true);
            echo "
                                            ";
        }
        // line 77
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">pays du club :</td>
                                        <td class=\"infosclubresp\">
                                            ";
        // line 82
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 82, $this->source); })()), "clubcountry", [], "any", false, false, false, 82), "")) {
            // line 83
            echo "                                                Veuillez définir un pays.
                                            ";
        } else {
            // line 85
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 85, $this->source); })()), "clubcountry", [], "any", false, false, false, 85), "html", null, true);
            echo "
                                            ";
        }
        // line 87
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">numéro de téléphone du club :</td>
                                        <td class=\"infosclubresp\">
                                            ";
        // line 92
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 92, $this->source); })()), "clubphone", [], "any", false, false, false, 92), "")) {
            // line 93
            echo "                                                Veuillez définir un numéro de téléphone.
                                            ";
        } else {
            // line 95
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 95, $this->source); })()), "clubphone", [], "any", false, false, false, 95), "html", null, true);
            echo "
                                            ";
        }
        // line 97
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">adresse mail du club :</td>
                                        <td class=\"infosclubresp\">
                                            ";
        // line 102
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 102, $this->source); })()), "clubmail", [], "any", false, false, false, 102), "")) {
            // line 103
            echo "                                                Veuillez définir une adresse mail.
                                            ";
        } else {
            // line 105
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 105, $this->source); })()), "clubmail", [], "any", false, false, false, 105), "html", null, true);
            echo "
                                            ";
        }
        // line 107
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\" style=\"background-color:white\">&nbsp;</td>
                                        <td class=\"infosclubresp\" style=\"background-color:white\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\" style=\"background-color:white\">&nbsp;</td>
                                        <td class=\"infosclubresp\" style=\"background-color:white\">
                                            <a
                                                href=\"#\"
                                                data-toggle=\"modal\"
                                                data-target=\"#exampleModal4\"
                                                style=\"color:var(--first-color)\">
                                                <span class=\"material-icons iconsheight\">
                                                    edit
                                                </span>
                                                ÉDITER LES INFOS
                                            </a>
                                        </td>
                                    </tr>
                                </table>

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
        return "home/club.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 107,  260 => 105,  256 => 103,  254 => 102,  247 => 97,  241 => 95,  237 => 93,  235 => 92,  228 => 87,  222 => 85,  218 => 83,  216 => 82,  209 => 77,  203 => 75,  199 => 73,  197 => 72,  190 => 67,  184 => 65,  180 => 63,  178 => 62,  171 => 57,  165 => 55,  161 => 53,  159 => 52,  138 => 33,  136 => 32,  130 => 28,  128 => 27,  125 => 26,  119 => 24,  114 => 22,  109 => 21,  107 => 20,  100 => 15,  94 => 13,  88 => 11,  86 => 10,  81 => 8,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modalclub.html.twig' %}
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

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    settings
                                </span>&nbsp;Le Club</div>
                            <div class=\"simplebloccontent\">

                                <table>
                                    <tr>
                                        <td class=\"infosclub bgwhite\">nom du club :</td>
                                        <td class=\"infosclubresp\">
                                            {% if club.clubname == '' %}
                                                Veuillez définir un nom.
                                            {% else %}
                                                {{ club.clubname }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">championnat du club :</td>
                                        <td class=\"infosclubresp\">
                                            {% if club.clubcc == '' %}
                                                Veuillez définir un championnat.
                                            {% else %}
                                                {{ club.clubcc }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">adresse du club :</td>
                                        <td class=\"infosclubresp\">
                                            {% if club.clubadress == '' %}
                                                Veuillez définir une adresse.
                                            {% else %}
                                                {{ club.clubadress }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">pays du club :</td>
                                        <td class=\"infosclubresp\">
                                            {% if club.clubcountry == '' %}
                                                Veuillez définir un pays.
                                            {% else %}
                                                {{ club.clubcountry }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">numéro de téléphone du club :</td>
                                        <td class=\"infosclubresp\">
                                            {% if club.clubphone == '' %}
                                                Veuillez définir un numéro de téléphone.
                                            {% else %}
                                                {{ club.clubphone }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">adresse mail du club :</td>
                                        <td class=\"infosclubresp\">
                                            {% if club.clubmail == '' %}
                                                Veuillez définir une adresse mail.
                                            {% else %}
                                                {{ club.clubmail }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\" style=\"background-color:white\">&nbsp;</td>
                                        <td class=\"infosclubresp\" style=\"background-color:white\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\" style=\"background-color:white\">&nbsp;</td>
                                        <td class=\"infosclubresp\" style=\"background-color:white\">
                                            <a
                                                href=\"#\"
                                                data-toggle=\"modal\"
                                                data-target=\"#exampleModal4\"
                                                style=\"color:var(--first-color)\">
                                                <span class=\"material-icons iconsheight\">
                                                    edit
                                                </span>
                                                ÉDITER LES INFOS
                                            </a>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        {% endblock %}", "home/club.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/club.html.twig");
    }
}
