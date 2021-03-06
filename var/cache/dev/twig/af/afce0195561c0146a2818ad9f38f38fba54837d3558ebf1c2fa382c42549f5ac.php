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

/* home/articles.html.twig */
class __TwigTemplate_d65970f45f631b5fd130c3f4dd898a80f44eced7413958da81b4dc11857ee42e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/articles.html.twig", 1);
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
        $this->loadTemplate("/inc/modal.html.twig", "home/articles.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/articles.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("/inc/modalarticle.html.twig", "home/articles.html.twig", 5)->display($context);
        // line 6
        echo "
    <div class=\"leftbar\">

        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <center>
                ";
        // line 11
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })()), "sitelogo", [], "any", false, false, false, 11), "")) {
            // line 12
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        } else {
            // line 14
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 14, $this->source); })()), "sitelogo", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        }
        // line 16
        echo "            </center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            ";
        // line 21
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 21, $this->source); })()), "clubname", [], "any", false, false, false, 21), "")) {
            // line 22
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "
                ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "
            ";
        } else {
            // line 25
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 25, $this->source); })()), "clubname", [], "any", false, false, false, 25), "html", null, true);
            echo "
            ";
        }
        // line 27
        echo "        </div>

        ";
        // line 29
        $this->loadTemplate("inc/nav.html.twig", "home/articles.html.twig", 29)->display($context);
        // line 30
        echo "    </div>

    <div class=\"block\">

        ";
        // line 34
        $this->loadTemplate("inc/navtop.html.twig", "home/articles.html.twig", 34)->display($context);
        // line 35
        echo "
        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    description
                                </span>&nbsp;Articles</div>
                            <table>
                                <tr>
                                <th>ID</th>
                                    <th>TITRE</th>
                                    <th>CONTENU</th>
                                    <th>AUTEUR</th>
                                    <th>DATE</th>
                                    <th>CATÉGORIE</th>
                                    <th>PUBLIER</th>
                                    <th>
                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal7\">
                                            <span class=\"material-icons iconwhite\">post_add</span></a>
                                    </th>
                                </tr>
                                ";
        // line 62
        if (0 !== twig_compare((isset($context["allnews"]) || array_key_exists("allnews", $context) ? $context["allnews"] : (function () { throw new RuntimeError('Variable "allnews" does not exist.', 62, $this->source); })()), null)) {
            // line 63
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allnews"]) || array_key_exists("allnews", $context) ? $context["allnews"] : (function () { throw new RuntimeError('Variable "allnews" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 64
                echo "
                                        <tr>
                                        <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                            <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "NewsTitle", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["id"], "NewsContent", [], "any", false, false, false, 68)), "truncate", [0 => 40, 1 => "..."], "method", false, false, false, 68), "html", null, true);
                echo "</td>
                                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["id"], "NewsAuthor", [], "any", false, false, false, 69), "firstname", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                            <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "NewsDate", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                                            <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "NewsCat", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                                            <td>
                                                ";
                // line 73
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "NewsState", [], "any", false, false, false, 73), 1)) {
                    // line 74
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_article_state", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\">
                                                    <span class=\"material-icons\">check_box</span></a>
                                                ";
                } else {
                    // line 77
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_article_state", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\">
                                                     <span class=\"material-icons\" style=\"color:rgb(53, 53, 53);\">check_box_outline_blank</span></a>
                                                ";
                }
                // line 80
                echo "                                            </td>
                                            <td>
                                                <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\">
                                                    <span class=\"material-icons\">
                                                        delete
                                                    </span>
                                                </a>

                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal7\">
                                                    <span class=\"material-icons\">
                                                        edit
                                                    </span>
                                                </a>

                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                ";
        } else {
            // line 98
            echo "                                    <tr>
                                        <td>Il n'y a pas d'article pour le moment. Ajoutez-en un !</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                ";
        }
        // line 109
        echo "                            </table>
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
        return "home/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 109,  249 => 98,  246 => 97,  225 => 82,  221 => 80,  214 => 77,  207 => 74,  205 => 73,  200 => 71,  196 => 70,  192 => 69,  188 => 68,  184 => 67,  180 => 66,  176 => 64,  171 => 63,  169 => 62,  140 => 35,  138 => 34,  132 => 30,  130 => 29,  126 => 27,  120 => 25,  115 => 23,  110 => 22,  108 => 21,  101 => 16,  95 => 14,  89 => 12,  87 => 11,  82 => 9,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
    {% include '/inc/modalarticle.html.twig' %}

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
                                    description
                                </span>&nbsp;Articles</div>
                            <table>
                                <tr>
                                <th>ID</th>
                                    <th>TITRE</th>
                                    <th>CONTENU</th>
                                    <th>AUTEUR</th>
                                    <th>DATE</th>
                                    <th>CATÉGORIE</th>
                                    <th>PUBLIER</th>
                                    <th>
                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal7\">
                                            <span class=\"material-icons iconwhite\">post_add</span></a>
                                    </th>
                                </tr>
                                {% if allnews != NULL %}
                                    {% for id in allnews %}

                                        <tr>
                                        <td>{{ id.id }}</td>
                                            <td>{{ id.NewsTitle }}</td>
                                            <td>{{ id.NewsContent|u.truncate(40, '...') }}</td>
                                            <td>{{ id.NewsAuthor.firstname }}</td>
                                            <td>{{ id.NewsDate }}</td>
                                            <td>{{ id.NewsCat }}</td>
                                            <td>
                                                {% if id.NewsState == 1 %}
                                                <a href=\"{{ path('change_article_state', { 'id': id.id }) }}\">
                                                    <span class=\"material-icons\">check_box</span></a>
                                                {% else %}
                                                <a href=\"{{ path('change_article_state', { 'id': id.id }) }}\">
                                                     <span class=\"material-icons\" style=\"color:rgb(53, 53, 53);\">check_box_outline_blank</span></a>
                                                {% endif %}
                                            </td>
                                            <td>
                                                <a href=\"{{ path('delete_article', { 'id': id.id }) }}\">
                                                    <span class=\"material-icons\">
                                                        delete
                                                    </span>
                                                </a>

                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal7\">
                                                    <span class=\"material-icons\">
                                                        edit
                                                    </span>
                                                </a>

                                            </td>
                                        </tr>
                                    {% endfor %}
                                {% else %}
                                    <tr>
                                        <td>Il n'y a pas d'article pour le moment. Ajoutez-en un !</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                {% endif %}
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        {% endblock %}", "home/articles.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/articles.html.twig");
    }
}
