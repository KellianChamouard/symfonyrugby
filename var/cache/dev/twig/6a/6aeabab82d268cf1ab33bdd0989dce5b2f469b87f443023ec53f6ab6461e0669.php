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
class __TwigTemplate_32165ed538dcc512f3bf5a148330c8b1555838f398c5c8c7d5fb937603e0fee8 extends Template
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
            echo "                                                Le nom du site correspond à celui du club. Veuillez en insérer un dans la partie Club.
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
                                            ";
        // line 59
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 59, $this->source); })()), "sitedescription", [], "any", false, false, false, 59), "")) {
            // line 60
            echo "                                            <td class=\"infosclubresp\" style=\"text-align:right\">
                                                Veuillez définir une description du site.
                                            ";
        } else {
            // line 63
            echo "                                            <td class=\"infosclubresp\" style=\"text-align:justify\">
                                                ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 64, $this->source); })()), "sitedescription", [], "any", false, false, false, 64), "html", null, true);
            echo "
                                            ";
        }
        // line 66
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">logo du site :</td>
                                        <td class=\"infosclubresp\">
                                        ";
        // line 71
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 71, $this->source); })()), "sitelogo", [], "any", false, false, false, 71), "")) {
            // line 72
            echo "                                                Veuillez définir un logo du site.
                                            ";
        } else {
            // line 74
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 74, $this->source); })()), "sitelogo", [], "any", false, false, false, 74), "html", null, true);
            echo "\"/>
                                            ";
        }
        // line 76
        echo "                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">couleur du site :</td>
                                        <td class=\"infosclubresp\">
                                            <div style=\"color:var(--first-color)\">
                                            ";
        // line 82
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 82, $this->source); })()), "sitemaincolor", [], "any", false, false, false, 82), "")) {
            // line 83
            echo "                                                Veuillez définir une couleur principale du site.
                                            ";
        } else {
            // line 85
            echo "                                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 85, $this->source); })()), "sitemaincolor", [], "any", false, false, false, 85), "html", null, true);
            echo "
                                            ";
        }
        // line 87
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
        return array (  228 => 87,  222 => 85,  218 => 83,  216 => 82,  208 => 76,  202 => 74,  198 => 72,  196 => 71,  189 => 66,  184 => 64,  181 => 63,  176 => 60,  174 => 59,  168 => 55,  162 => 53,  158 => 51,  156 => 50,  135 => 31,  133 => 30,  127 => 26,  125 => 25,  121 => 23,  116 => 21,  108 => 19,  106 => 18,  99 => 13,  93 => 12,  87 => 10,  85 => 9,  81 => 8,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
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
                                                Le nom du site correspond à celui du club. Veuillez en insérer un dans la partie Club.
                                            {% else %}
                                                {{ club.clubname }}
                                            {% endif %}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"infosclub\">description du site :</td>
                                            {% if site.sitedescription == '' %}
                                            <td class=\"infosclubresp\" style=\"text-align:right\">
                                                Veuillez définir une description du site.
                                            {% else %}
                                            <td class=\"infosclubresp\" style=\"text-align:justify\">
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
