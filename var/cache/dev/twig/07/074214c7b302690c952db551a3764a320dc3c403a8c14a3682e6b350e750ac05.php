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

/* home/saison.html.twig */
class __TwigTemplate_43198a7d58f7fc91bba514245169eb8aaedc76ff69fa7202b74ffe2f017707d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/saison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/saison.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/saison.html.twig", 1);
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
        $this->loadTemplate("/inc/modal.html.twig", "home/saison.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/saison.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("/inc/addteammodal.html.twig", "home/saison.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("/inc/addmatchmodal.html.twig", "home/saison.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("/inc/stopteam.html.twig", "home/saison.html.twig", 7)->display($context);
        // line 8
        echo "    <div class=\"leftbar\">

        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <center>
                ";
        // line 12
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "sitelogo", [], "any", false, false, false, 12), "")) {
            // line 13
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        } else {
            // line 15
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 15, $this->source); })()), "sitelogo", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        }
        // line 17
        echo "            </center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            ";
        // line 22
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 22, $this->source); })()), "clubname", [], "any", false, false, false, 22), "")) {
            // line 23
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "
                ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "
            ";
        } else {
            // line 26
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 26, $this->source); })()), "clubname", [], "any", false, false, false, 26), "html", null, true);
            echo "
            ";
        }
        // line 28
        echo "        </div>
        ";
        // line 29
        $this->loadTemplate("inc/nav.html.twig", "home/saison.html.twig", 29)->display($context);
        // line 30
        echo "    </div>

    <div class=\"block\">

        ";
        // line 34
        $this->loadTemplate("inc/navtop.html.twig", "home/saison.html.twig", 34)->display($context);
        // line 35
        echo "
        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    group
                                </span>&nbsp;équipes</div>

                            <div class=\"simplebloccontent nopadd freesize\">
                                <table>
                                    <tr>
                                        <th>LOGO</th>
                                        <th>NOM</th>
                                        <th>T</th>
                                        <th>V</th>
                                        <th>D</th>
                                        <th>N</th>
                                        <th>MATCHS</th>
                                        <th>
                                            <a
                                                href=\"#\"
                                                data-toggle=\"modal\"
                                                ";
        // line 63
        if (1 === twig_compare((isset($context["nbteams"]) || array_key_exists("nbteams", $context) ? $context["nbteams"] : (function () { throw new RuntimeError('Variable "nbteams" does not exist.', 63, $this->source); })()), 7)) {
            // line 64
            echo "                                                data-target=\"#exampleModal60\"
                                                ";
        } else {
            // line 66
            echo "                                                 data-target=\"#exampleModal50\"
                                                ";
        }
        // line 67
        echo ">
                                                <span class=\"material-icons iconwhite\">post_add</span></a>
                                        </th>
                                    </tr>
                                    ";
        // line 71
        if (0 !== twig_compare((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 71, $this->source); })()), null)) {
            // line 72
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 73
                echo "
                                            <tr>
                                                <td><img class=\"teamlogosmall\" src=\"../docs/";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "TLogo", [], "any", false, false, false, 75), "html", null, true);
                echo "\"/></td>
                                                <td><b>";
                // line 76
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "TName", [], "any", false, false, false, 76)), "html", null, true);
                echo "</b></td>
                                                <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "TTotalMatchs", [], "any", false, false, false, 77), "html", null, true);
                echo "</td>
                                                <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "Twin", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                                                <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "Tlose", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
                                                <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "TNul", [], "any", false, false, false, 80), "html", null, true);
                echo "</td>
                                                <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "TPts", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
                                                <td>
                                                    <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_team", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\">
                                                        <span class=\"material-icons\">
                                                            delete
                                                        </span>
                                                    </a>

                                                    <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_team", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                echo "\">
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
            // line 98
            echo "                                    ";
        } else {
            // line 99
            echo "                                        <tr>
                                            <td>Il n'y a pas d'équipe pour le moment. Ajoutez-en une !</td>
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
        // line 110
        echo "                                </table>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    sports_rugby
                                </span>&nbsp;tous les matchs</div>

                            <div class=\"simplebloccontent nopadd\">
                                <table>
                                    <tr>
                                        <th>DATE</th>
                                        <th>DOM</th>
                                        <th>&nbsp;</th>
                                        <th>EXT</th>
                                        <th>TYPE</th>
                                        <th>RESULTAT</th>
                                        <th>F. MATCH</th>
                                        <th>
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal80\">
                                            <span class=\"material-icons iconwhite\">post_add</span></a>
                                        </th>
                                    </tr>
                                    ";
        // line 137
        if (0 !== twig_compare((isset($context["matchs"]) || array_key_exists("matchs", $context) ? $context["matchs"] : (function () { throw new RuntimeError('Variable "matchs" does not exist.', 137, $this->source); })()), null)) {
            // line 138
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matchs"]) || array_key_exists("matchs", $context) ? $context["matchs"] : (function () { throw new RuntimeError('Variable "matchs" does not exist.', 138, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 139
                echo "
                                            <tr>
                                                <td>";
                // line 141
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "MatchDate", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "MatchDom", [], "any", false, false, false, 142), "html", null, true);
                echo "</td>
                                                <td>vs</td>
                                                <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "MatchExt", [], "any", false, false, false, 144), "html", null, true);
                echo "</td>
                                                <td><span class=\"badge badge-secondary\" style=\"font-size:12px\">";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "MatchType", [], "any", false, false, false, 145), "html", null, true);
                echo "</span></td>
                                                <td><a href=\"#\">
                                                    <span class=\"material-icons\">
                                                        add_circle_outline
                                                    </span></a>
                                                </td>
                                                <td>
                                                    <a href=\"#\">
                                                    <span class=\"material-icons\">
                                                        add_circle_outline
                                                    </span></a>
                                                </td>
                                                <td>
                                                    <a href=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_match", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 158)]), "html", null, true);
                echo "\">
                                                        <span class=\"material-icons\">
                                                            delete
                                                        </span>
                                                    </a>

                                                    <a href=\"#\">
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
            // line 173
            echo "                                    ";
        } else {
            // line 174
            echo "                                        <tr>
                                            <td>Il n'y a pas de match pour le moment. Ajoutez-en un !</td>
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
        // line 185
        echo "                                </table>
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
        return "home/saison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 185,  363 => 174,  360 => 173,  339 => 158,  323 => 145,  319 => 144,  314 => 142,  310 => 141,  306 => 139,  301 => 138,  299 => 137,  270 => 110,  257 => 99,  254 => 98,  239 => 89,  230 => 83,  225 => 81,  221 => 80,  217 => 79,  213 => 78,  209 => 77,  205 => 76,  201 => 75,  197 => 73,  192 => 72,  190 => 71,  184 => 67,  180 => 66,  176 => 64,  174 => 63,  144 => 35,  142 => 34,  136 => 30,  134 => 29,  131 => 28,  125 => 26,  120 => 24,  115 => 23,  113 => 22,  106 => 17,  100 => 15,  94 => 13,  92 => 12,  87 => 10,  83 => 8,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
    {% include '/inc/addteammodal.html.twig' %}
    {% include '/inc/addmatchmodal.html.twig' %}
    {% include '/inc/stopteam.html.twig' %}
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
                                    group
                                </span>&nbsp;équipes</div>

                            <div class=\"simplebloccontent nopadd freesize\">
                                <table>
                                    <tr>
                                        <th>LOGO</th>
                                        <th>NOM</th>
                                        <th>T</th>
                                        <th>V</th>
                                        <th>D</th>
                                        <th>N</th>
                                        <th>MATCHS</th>
                                        <th>
                                            <a
                                                href=\"#\"
                                                data-toggle=\"modal\"
                                                {% if nbteams > 7 %}
                                                data-target=\"#exampleModal60\"
                                                {% else %}
                                                 data-target=\"#exampleModal50\"
                                                {% endif %}>
                                                <span class=\"material-icons iconwhite\">post_add</span></a>
                                        </th>
                                    </tr>
                                    {% if teams != NULL %}
                                        {% for id in teams %}

                                            <tr>
                                                <td><img class=\"teamlogosmall\" src=\"../docs/{{ id.TLogo }}\"/></td>
                                                <td><b>{{ id.TName|upper }}</b></td>
                                                <td>{{ id.TTotalMatchs}}</td>
                                                <td>{{ id.Twin }}</td>
                                                <td>{{ id.Tlose }}</td>
                                                <td>{{ id.TNul }}</td>
                                                <td>{{ id.TPts }}</td>
                                                <td>
                                                    <a href=\"{{ path('delete_team', { 'id': id.id }) }}\">
                                                        <span class=\"material-icons\">
                                                            delete
                                                        </span>
                                                    </a>

                                                    <a href=\"{{ path('modif_team', { 'id': id.id }) }}\">
                                                        <span class=\"material-icons\">
                                                            edit
                                                        </span>
                                                    </a>

                                                </td>
                                            </tr>
                                        {% endfor %}
                                    {% else %}
                                        <tr>
                                            <td>Il n'y a pas d'équipe pour le moment. Ajoutez-en une !</td>
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

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    sports_rugby
                                </span>&nbsp;tous les matchs</div>

                            <div class=\"simplebloccontent nopadd\">
                                <table>
                                    <tr>
                                        <th>DATE</th>
                                        <th>DOM</th>
                                        <th>&nbsp;</th>
                                        <th>EXT</th>
                                        <th>TYPE</th>
                                        <th>RESULTAT</th>
                                        <th>F. MATCH</th>
                                        <th>
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal80\">
                                            <span class=\"material-icons iconwhite\">post_add</span></a>
                                        </th>
                                    </tr>
                                    {% if matchs != NULL %}
                                        {% for id in matchs %}

                                            <tr>
                                                <td>{{ id.MatchDate|date('d/m/Y') }}</td>
                                                <td>{{ id.MatchDom }}</td>
                                                <td>vs</td>
                                                <td>{{ id.MatchExt }}</td>
                                                <td><span class=\"badge badge-secondary\" style=\"font-size:12px\">{{ id.MatchType}}</span></td>
                                                <td><a href=\"#\">
                                                    <span class=\"material-icons\">
                                                        add_circle_outline
                                                    </span></a>
                                                </td>
                                                <td>
                                                    <a href=\"#\">
                                                    <span class=\"material-icons\">
                                                        add_circle_outline
                                                    </span></a>
                                                </td>
                                                <td>
                                                    <a href=\"{{ path('delete_match', { 'id': id.id }) }}\">
                                                        <span class=\"material-icons\">
                                                            delete
                                                        </span>
                                                    </a>

                                                    <a href=\"#\">
                                                        <span class=\"material-icons\">
                                                            edit
                                                        </span>
                                                    </a>

                                                </td>
                                            </tr>
                                        {% endfor %}
                                    {% else %}
                                        <tr>
                                            <td>Il n'y a pas de match pour le moment. Ajoutez-en un !</td>
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

            </div>

        </div>

    </div>

{% endblock %}", "home/saison.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/saison.html.twig");
    }
}
