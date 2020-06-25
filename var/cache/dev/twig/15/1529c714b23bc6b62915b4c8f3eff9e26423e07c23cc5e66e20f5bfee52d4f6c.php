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

/* home/site.html.twig */
class __TwigTemplate_4aef5ea2c7f863fa1a633c7baa32df204af9c71fb42418bd0fbab5c10b5acc11 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/site.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/site.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/site.html.twig", 1);
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
        $this->loadTemplate("/inc/modalsite.html.twig", "home/site.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate("/inc/modal.html.twig", "home/site.html.twig", 4)->display($context);
        // line 5
        echo "            ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/site.html.twig", 5)->display($context);
        // line 6
        echo "    <div class=\"leftbar\">

        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <center>";
        // line 9
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "sitelogo", [], "any", false, false, false, 9), "")) {
            // line 10
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                                            ";
        } else {
            // line 12
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "sitelogo", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"logo\"/>
                                            ";
        }
        // line 13
        echo "</center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            ";
        // line 18
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 18, $this->source); })()), "clubname", [], "any", false, false, false, 18), "")) {
            // line 19
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "
";
        } else {
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 21, $this->source); })()), "clubname", [], "any", false, false, false, 21), "html", null, true);
            echo "
";
        }
        // line 23
        echo "            </div>

        ";
        // line 25
        $this->loadTemplate("inc/nav.html.twig", "home/site.html.twig", 25)->display($context);
        // line 26
        echo "    </div>

    <div class=\"block\">

        ";
        // line 30
        $this->loadTemplate("inc/navtop.html.twig", "home/site.html.twig", 30)->display($context);
        // line 31
        echo "
        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    settings
                                </span>&nbsp;Le Site</div>
                            <div class=\"simplebloccontent\">

                                <table>
                                    <tr>
                                        <td class=\"infosclub bgwhite\">nom du site :</td>
                                        <td class=\"infosclubresp\">
                                            ";
        // line 50
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 50, $this->source); })()), "clubname", [], "any", false, false, false, 50), "")) {
            // line 51
            echo "                                                Veuillez définir un nom de club dans la partie Club.
                                            ";
        } else {
            // line 53
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 53, $this->source); })()), "clubname", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                            ";
        }
        // line 55
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">description du site :</td>
                                        <td class=\"infosclubresp\" style=\"text-align:justify\">
                                            ";
        // line 60
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 60, $this->source); })()), "sitedescription", [], "any", false, false, false, 60), "")) {
            // line 61
            echo "                                                Veuillez définir une description du site.
                                            ";
        } else {
            // line 63
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 63, $this->source); })()), "sitedescription", [], "any", false, false, false, 63), "html", null, true);
            echo "
                                            ";
        }
        // line 65
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">logo du site :</td>
                                        <td class=\"infosclubresp\">
                                        ";
        // line 70
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 70, $this->source); })()), "sitelogo", [], "any", false, false, false, 70), "")) {
            // line 71
            echo "                                                Veuillez définir un logo du site.
                                            ";
        } else {
            // line 73
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 73, $this->source); })()), "sitelogo", [], "any", false, false, false, 73), "html", null, true);
            echo "\"/>
                                            ";
        }
        // line 75
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">couleur du site :</td>
                                        <td class=\"infosclubresp\">
                                            <div style=\"color:var(--first-color)\">
                                            ";
        // line 81
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 81, $this->source); })()), "sitemaincolor", [], "any", false, false, false, 81), "")) {
            // line 82
            echo "                                                Veuillez définir une couleur principale du site.
                                            ";
        } else {
            // line 84
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 84, $this->source); })()), "sitemaincolor", [], "any", false, false, false, 84), "html", null, true);
            echo "
                                            ";
        }
        // line 86
        echo "                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\" style=\"background-color:white\">&nbsp;</td>
                                        <td class=\"infosclubresp\" style=\"background-color:white\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\" style=\"background-color:white\">&nbsp;</td>
                                        <td class=\"infosclubresp\" style=\"background-color:white\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal3\" style=\"color:var(--first-color)\">
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
        return "home/site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 86,  220 => 84,  216 => 82,  214 => 81,  206 => 75,  200 => 73,  196 => 71,  194 => 70,  187 => 65,  181 => 63,  177 => 61,  175 => 60,  168 => 55,  162 => 53,  158 => 51,  156 => 50,  135 => 31,  133 => 30,  127 => 26,  125 => 25,  121 => 23,  116 => 21,  108 => 19,  106 => 18,  99 => 13,  93 => 12,  87 => 10,  85 => 9,  81 => 8,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modalsite.html.twig' %}
        {% include '/inc/modal.html.twig' %}
            {% include '/inc/modaldeco.html.twig' %}
    <div class=\"leftbar\">

        <a href=\"{{ path('home') }}\">
            <center>{% if site.sitelogo == '' %}
                                                <img src=\"{{ asset('../images/rscms.png') }}\" class=\"logo\"/>
                                            {% else %}
                                                <img src=\"{{ site.sitelogo }}\" class=\"logo\"/>
                                            {% endif %}</center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            {% if club.clubname == '' %}
    {{ cmsname }} {{ version }}
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
                                </span>&nbsp;Le Site</div>
                            <div class=\"simplebloccontent\">

                                <table>
                                    <tr>
                                        <td class=\"infosclub bgwhite\">nom du site :</td>
                                        <td class=\"infosclubresp\">
                                            {% if club.clubname == '' %}
                                                Veuillez définir un nom de club dans la partie Club.
                                            {% else %}
                                                {{ club.clubname }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">description du site :</td>
                                        <td class=\"infosclubresp\" style=\"text-align:justify\">
                                            {% if site.sitedescription == '' %}
                                                Veuillez définir une description du site.
                                            {% else %}
                                                {{ site.sitedescription }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">logo du site :</td>
                                        <td class=\"infosclubresp\">
                                        {% if site.sitelogo == '' %}
                                                Veuillez définir un logo du site.
                                            {% else %}
                                                <img src=\"{{ site.sitelogo }}\"/>
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">couleur du site :</td>
                                        <td class=\"infosclubresp\">
                                            <div style=\"color:var(--first-color)\">
                                            {% if site.sitemaincolor == '' %}
                                                Veuillez définir une couleur principale du site.
                                            {% else %}
                                                {{ site.sitemaincolor }}
                                            {% endif %}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\" style=\"background-color:white\">&nbsp;</td>
                                        <td class=\"infosclubresp\" style=\"background-color:white\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\" style=\"background-color:white\">&nbsp;</td>
                                        <td class=\"infosclubresp\" style=\"background-color:white\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal3\" style=\"color:var(--first-color)\">
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

        {% endblock %}", "home/site.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/site.html.twig");
    }
}
