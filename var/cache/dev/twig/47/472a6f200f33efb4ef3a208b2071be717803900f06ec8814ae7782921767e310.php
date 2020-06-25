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

/* home/joueurs.html.twig */
class __TwigTemplate_4de5a0a474cc1494242962e4fd8abf4c1dab7dffc396724a9e1346bf748b4073 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/joueurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/joueurs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/joueurs.html.twig", 1);
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
        $this->loadTemplate("/inc/modal.html.twig", "home/joueurs.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/joueurs.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("/inc/addplayermodal.html.twig", "home/joueurs.html.twig", 5)->display($context);
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
        $this->loadTemplate("inc/nav.html.twig", "home/joueurs.html.twig", 27)->display($context);
        // line 28
        echo "    </div>

    <div class=\"block\">

        ";
        // line 32
        $this->loadTemplate("inc/navtop.html.twig", "home/joueurs.html.twig", 32)->display($context);
        // line 33
        echo "
        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    person
                                </span>&nbsp;Joueurs
                            </div>

                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <h2 class=\"mb-0\">
                                            <button
                                                class=\"btn btn-link\"
                                                type=\"button\"
                                                data-toggle=\"collapse\"
                                                data-target=\"#collapseOne\"
                                                aria-expanded=\"true\"
                                                aria-controls=\"collapseOne\">
                                                ARRIÈRES
                                            </button>
                                        </h2>
                                    </div>

                                    <div
                                        id=\"collapseOne\"
                                        class=\"collapse\"
                                        aria-labelledby=\"headingOne\"
                                        data-parent=\"#accordionExample\">
                                        ";
        // line 69
        if (0 === twig_compare((isset($context["arrieres"]) || array_key_exists("arrieres", $context) ? $context["arrieres"] : (function () { throw new RuntimeError('Variable "arrieres" does not exist.', 69, $this->source); })()), null)) {
            // line 70
            echo "                                            <div class=\"card-body\">
                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                    <span class=\"material-icons\">person_add_alt_1</span></a>
                                            ";
        } else {
            // line 74
            echo "                                                <div class=\"card-body nopadd\">
                                                    <table>
                                                        <tr>
                                                            <th>PHOTO</th>
                                                            <th>NOM</th>
                                                            <th>PRÉNOM</th>
                                                            <th>LICENCE</th>
                                                            <th style=\"text-align:left;\">INFOS</th>
                                                            <th>
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                    <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                            </th>
                                                        </tr>
                                                        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["arrieres"]) || array_key_exists("arrieres", $context) ? $context["arrieres"] : (function () { throw new RuntimeError('Variable "arrieres" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 88
                echo "                                                            <tr>
                                                                <td><img src=\"../docs/";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 89), "html", null, true);
                echo "\"/></td>
                                                                <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 90)), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 91)), "html", null, true);
                echo "</td>
                                                                <td>N° :
                                                                    <b>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 93), "html", null, true);
                echo "</b>
                                                                </td>
                                                                <td style=\"text-align:left;\">
                                                                    <br>
                                                                    Age :
                                                                    <b>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 98), "html", null, true);
                echo "
                                                                        ans</b><br>
                                                                    Poids :
                                                                    <b>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 101), "html", null, true);
                echo "
                                                                        kg</b><br>
                                                                    Taille :
                                                                    <b>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 104), "html", null, true);
                echo "
                                                                        cm</b><br>
                                                                    Matchs :
                                                                    <b>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 107), "html", null, true);
                echo "</b><br>
                                                                    Éssais :
                                                                    <b>";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 109), "html", null, true);
                echo "</b><br>
                                                                    Points :
                                                                    <b>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 111), "html", null, true);
                echo "</b><br>
                                                                    ";
                // line 112
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 112), true)) {
                    // line 113
                    echo "                                                                        <b>
                                                                            <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                    ";
                } else {
                    // line 115
                    echo "<br>";
                }
                // line 116
                echo "                                                                </td>
                                                                <td>
                                                                    <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 118)]), "html", null, true);
                echo "\">
                                                                        <span class=\"material-icons\">
                                                                            delete
                                                                        </span>
                                                                    </a>
                                                                    <a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modif_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 123)]), "html", null, true);
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
            // line 131
            echo "                                                    </table>
                                                ";
        }
        // line 133
        echo "                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-header\" id=\"headingTwo\">
                                            <h2 class=\"mb-0\">
                                                <button
                                                    class=\"btn btn-link collapsed\"
                                                    type=\"button\"
                                                    data-toggle=\"collapse\"
                                                    data-target=\"#collapseTwo\"
                                                    aria-expanded=\"false\"
                                                    aria-controls=\"collapseTwo\">
                                                    AILIERS
                                                </button>
                                            </h2>
                                        </div>
                                        <div
                                            id=\"collapseTwo\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingTwo\"
                                            data-parent=\"#accordionExample\">
                                            ";
        // line 155
        if (0 === twig_compare((isset($context["ailiers"]) || array_key_exists("ailiers", $context) ? $context["ailiers"] : (function () { throw new RuntimeError('Variable "ailiers" does not exist.', 155, $this->source); })()), null)) {
            // line 156
            echo "                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                ";
        } else {
            // line 160
            echo "                                                    <div class=\"card-body nopadd\">
                                                        <table>
                                                            <tr>
                                                                <th>PHOTO</th>
                                                                <th>NOM</th>
                                                                <th>PRÉNOM</th>
                                                                <th>LICENCE</th>
                                                                <th style=\"text-align:left;\">INFOS</th>
                                                                <th>
                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                        <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                </th>
                                                            </tr>
                                                            ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ailiers"]) || array_key_exists("ailiers", $context) ? $context["ailiers"] : (function () { throw new RuntimeError('Variable "ailiers" does not exist.', 173, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 174
                echo "                                                                <tr>
                                                                    <td><img src=\"../docs/";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 175), "html", null, true);
                echo "\"/></td>
                                                                    <td>";
                // line 176
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 176)), "html", null, true);
                echo "</td>
                                                                    <td>";
                // line 177
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 177)), "html", null, true);
                echo "</td>
                                                                    <td>N° :
                                                                        <b>";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 179), "html", null, true);
                echo "</b>
                                                                    </td>
                                                                    <td style=\"text-align:left;\">
                                                                        <br>
                                                                        Age :
                                                                        <b>";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 184), "html", null, true);
                echo "
                                                                            ans</b><br>
                                                                        Poids :
                                                                        <b>";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 187), "html", null, true);
                echo "
                                                                            kg</b><br>
                                                                        Taille :
                                                                        <b>";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 190), "html", null, true);
                echo "
                                                                            cm</b><br>
                                                                        Matchs :
                                                                        <b>";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 193), "html", null, true);
                echo "</b><br>
                                                                        Éssais :
                                                                        <b>";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 195), "html", null, true);
                echo "</b><br>
                                                                        Points :
                                                                        <b>";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 197), "html", null, true);
                echo "</b><br>
                                                                        ";
                // line 198
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 198), true)) {
                    // line 199
                    echo "                                                                            <b>
                                                                                <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                        ";
                } else {
                    // line 201
                    echo "<br>";
                }
                // line 202
                echo "                                                                    </td>
                                                                    <td>
                                                                        <a href=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 204)]), "html", null, true);
                echo "\">
                                                                            <span class=\"material-icons\">
                                                                                delete
                                                                            </span>
                                                                        </a>
                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 217
            echo "                                                        </table>
                                                    ";
        }
        // line 219
        echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header\" id=\"headingThree\">
                                                <h2 class=\"mb-0\">
                                                    <button
                                                        class=\"btn btn-link collapsed\"
                                                        type=\"button\"
                                                        data-toggle=\"collapse\"
                                                        data-target=\"#collapseThree\"
                                                        aria-expanded=\"false\"
                                                        aria-controls=\"collapseThree\">
                                                        CENTRES
                                                    </button>
                                                </h2>
                                            </div>
                                            <div
                                                id=\"collapseThree\"
                                                class=\"collapse\"
                                                aria-labelledby=\"headingThree\"
                                                data-parent=\"#accordionExample\">
                                                ";
        // line 241
        if (0 === twig_compare((isset($context["centres"]) || array_key_exists("centres", $context) ? $context["centres"] : (function () { throw new RuntimeError('Variable "centres" does not exist.', 241, $this->source); })()), null)) {
            // line 242
            echo "                                                    <div class=\"card-body\">
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                            <span class=\"material-icons\">person_add_alt_1</span></a>
                                                    ";
        } else {
            // line 246
            echo "                                                        <div class=\"card-body nopadd\">
                                                            <table>
                                                                <tr>
                                                                    <th>PHOTO</th>
                                                                    <th>NOM</th>
                                                                    <th>PRÉNOM</th>
                                                                    <th>LICENCE</th>
                                                                    <th style=\"text-align:left;\">INFOS</th>
                                                                    <th>
                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                            <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                    </th>
                                                                </tr>
                                                                ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["centres"]) || array_key_exists("centres", $context) ? $context["centres"] : (function () { throw new RuntimeError('Variable "centres" does not exist.', 259, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 260
                echo "                                                                    <tr>
                                                                        <td><img src=\"../docs/";
                // line 261
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 261), "html", null, true);
                echo "\"/></td>
                                                                        <td>";
                // line 262
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 262)), "html", null, true);
                echo "</td>
                                                                        <td>";
                // line 263
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 263)), "html", null, true);
                echo "</td>
                                                                        <td>N° :
                                                                            <b>";
                // line 265
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 265), "html", null, true);
                echo "</b>
                                                                        </td>
                                                                        <td style=\"text-align:left;\">
                                                                            <br>
                                                                            Age :
                                                                            <b>";
                // line 270
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 270), "html", null, true);
                echo "
                                                                                ans</b><br>
                                                                            Poids :
                                                                            <b>";
                // line 273
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 273), "html", null, true);
                echo "
                                                                                kg</b><br>
                                                                            Taille :
                                                                            <b>";
                // line 276
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 276), "html", null, true);
                echo "
                                                                                cm</b><br>
                                                                            Matchs :
                                                                            <b>";
                // line 279
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 279), "html", null, true);
                echo "</b><br>
                                                                            Éssais :
                                                                            <b>";
                // line 281
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 281), "html", null, true);
                echo "</b><br>
                                                                            Points :
                                                                            <b>";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 283), "html", null, true);
                echo "</b><br>
                                                                            ";
                // line 284
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 284), true)) {
                    // line 285
                    echo "                                                                                <b>
                                                                                    <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                            ";
                } else {
                    // line 287
                    echo "<br>";
                }
                // line 288
                echo "                                                                        </td>
                                                                        <td>
                                                                            <a href=\"";
                // line 290
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 290)]), "html", null, true);
                echo "\">
                                                                                <span class=\"material-icons\">
                                                                                    delete
                                                                                </span>
                                                                            </a>
                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 303
            echo "                                                            </table>
                                                        ";
        }
        // line 305
        echo "                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"card\">
                                                <div class=\"card-header\" id=\"headingFour\">
                                                    <h2 class=\"mb-0\">
                                                        <button
                                                            class=\"btn btn-link collapsed\"
                                                            type=\"button\"
                                                            data-toggle=\"collapse\"
                                                            data-target=\"#collapseFour\"
                                                            aria-expanded=\"false\"
                                                            aria-controls=\"collapseFour\">
                                                            DEMIS D'OUVERTURE
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div
                                                    id=\"collapseFour\"
                                                    class=\"collapse\"
                                                    aria-labelledby=\"headingFour\"
                                                    data-parent=\"#accordionExample\">
                                                    ";
        // line 327
        if (0 === twig_compare((isset($context["demiouvertures"]) || array_key_exists("demiouvertures", $context) ? $context["demiouvertures"] : (function () { throw new RuntimeError('Variable "demiouvertures" does not exist.', 327, $this->source); })()), null)) {
            // line 328
            echo "                                                        <div class=\"card-body\">
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                <span class=\"material-icons\">person_add_alt_1</span></a>
                                                        ";
        } else {
            // line 332
            echo "                                                            <div class=\"card-body nopadd\">
                                                                <table>
                                                                    <tr>
                                                                        <th>PHOTO</th>
                                                                        <th>NOM</th>
                                                                        <th>PRÉNOM</th>
                                                                        <th>LICENCE</th>
                                                                        <th style=\"text-align:left;\">INFOS</th>
                                                                        <th>
                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                        </th>
                                                                    </tr>
                                                                    ";
            // line 345
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["demiouvertures"]) || array_key_exists("demiouvertures", $context) ? $context["demiouvertures"] : (function () { throw new RuntimeError('Variable "demiouvertures" does not exist.', 345, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 346
                echo "                                                                        <tr>
                                                                            <td><img src=\"../docs/";
                // line 347
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 347), "html", null, true);
                echo "\"/></td>
                                                                            <td>";
                // line 348
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 348)), "html", null, true);
                echo "</td>
                                                                            <td>";
                // line 349
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 349)), "html", null, true);
                echo "</td>
                                                                            <td>N° :
                                                                                <b>";
                // line 351
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 351), "html", null, true);
                echo "</b>
                                                                            </td>
                                                                            <td style=\"text-align:left;\">
                                                                                <br>
                                                                                Age :
                                                                                <b>";
                // line 356
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 356), "html", null, true);
                echo "
                                                                                    ans</b><br>
                                                                                Poids :
                                                                                <b>";
                // line 359
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 359), "html", null, true);
                echo "
                                                                                    kg</b><br>
                                                                                Taille :
                                                                                <b>";
                // line 362
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 362), "html", null, true);
                echo "
                                                                                    cm</b><br>
                                                                                Matchs :
                                                                                <b>";
                // line 365
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 365), "html", null, true);
                echo "</b><br>
                                                                                Éssais :
                                                                                <b>";
                // line 367
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 367), "html", null, true);
                echo "</b><br>
                                                                                Points :
                                                                                <b>";
                // line 369
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 369), "html", null, true);
                echo "</b><br>
                                                                                ";
                // line 370
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 370), true)) {
                    // line 371
                    echo "                                                                                    <b>
                                                                                        <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                ";
                } else {
                    // line 373
                    echo "<br>";
                }
                // line 374
                echo "                                                                            </td>
                                                                            <td>
                                                                                <a href=\"";
                // line 376
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 376)]), "html", null, true);
                echo "\">
                                                                                    <span class=\"material-icons\">
                                                                                        delete
                                                                                    </span>
                                                                                </a>
                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 389
            echo "                                                                </table>
                                                            ";
        }
        // line 391
        echo "                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"card\">
                                                    <div class=\"card-header\" id=\"headingFive\">
                                                        <h2 class=\"mb-0\">
                                                            <button
                                                                class=\"btn btn-link collapsed\"
                                                                type=\"button\"
                                                                data-toggle=\"collapse\"
                                                                data-target=\"#collapseFive\"
                                                                aria-expanded=\"false\"
                                                                aria-controls=\"collapseFive\">
                                                                DEMIS DE MÊLÉE
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        id=\"collapseFive\"
                                                        class=\"collapse\"
                                                        aria-labelledby=\"headingFive\"
                                                        data-parent=\"#accordionExample\">
                                                        ";
        // line 413
        if (0 === twig_compare((isset($context["demimelees"]) || array_key_exists("demimelees", $context) ? $context["demimelees"] : (function () { throw new RuntimeError('Variable "demimelees" does not exist.', 413, $this->source); })()), null)) {
            // line 414
            echo "                                                            <div class=\"card-body\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                    <span class=\"material-icons\">person_add_alt_1</span></a>
                                                            ";
        } else {
            // line 418
            echo "                                                                <div class=\"card-body nopadd\">
                                                                    <table>
                                                                        <tr>
                                                                            <th>PHOTO</th>
                                                                            <th>NOM</th>
                                                                            <th>PRÉNOM</th>
                                                                            <th>LICENCE</th>
                                                                            <th style=\"text-align:left;\">INFOS</th>
                                                                            <th>
                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                    <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                            </th>
                                                                        </tr>
                                                                        ";
            // line 431
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["demimelees"]) || array_key_exists("demimelees", $context) ? $context["demimelees"] : (function () { throw new RuntimeError('Variable "demimelees" does not exist.', 431, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 432
                echo "                                                                            <tr>
                                                                                <td><img src=\"../docs/";
                // line 433
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 433), "html", null, true);
                echo "\"/></td>
                                                                                <td>";
                // line 434
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 434)), "html", null, true);
                echo "</td>
                                                                                <td>";
                // line 435
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 435)), "html", null, true);
                echo "</td>
                                                                                <td>N° :
                                                                                    <b>";
                // line 437
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 437), "html", null, true);
                echo "</b>
                                                                                </td>
                                                                                <td style=\"text-align:left;\">
                                                                                    <br>
                                                                                    Age :
                                                                                    <b>";
                // line 442
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 442), "html", null, true);
                echo "
                                                                                        ans</b><br>
                                                                                    Poids :
                                                                                    <b>";
                // line 445
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 445), "html", null, true);
                echo "
                                                                                        kg</b><br>
                                                                                    Taille :
                                                                                    <b>";
                // line 448
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 448), "html", null, true);
                echo "
                                                                                        cm</b><br>
                                                                                    Matchs :
                                                                                    <b>";
                // line 451
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 451), "html", null, true);
                echo "</b><br>
                                                                                    Éssais :
                                                                                    <b>";
                // line 453
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 453), "html", null, true);
                echo "</b><br>
                                                                                    Points :
                                                                                    <b>";
                // line 455
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 455), "html", null, true);
                echo "</b><br>
                                                                                    ";
                // line 456
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 456), true)) {
                    // line 457
                    echo "                                                                                        <b>
                                                                                            <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                    ";
                } else {
                    // line 459
                    echo "<br>";
                }
                // line 460
                echo "                                                                                </td>
                                                                                <td>
                                                                                    <a href=\"";
                // line 462
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 462)]), "html", null, true);
                echo "\">
                                                                                        <span class=\"material-icons\">
                                                                                            delete
                                                                                        </span>
                                                                                    </a>
                                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 475
            echo "                                                                    </table>
                                                                ";
        }
        // line 477
        echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card\">
                                                        <div class=\"card-header\" id=\"headingSix\">
                                                            <h2 class=\"mb-0\">
                                                                <button
                                                                    class=\"btn btn-link collapsed\"
                                                                    type=\"button\"
                                                                    data-toggle=\"collapse\"
                                                                    data-target=\"#collapseSix\"
                                                                    aria-expanded=\"false\"
                                                                    aria-controls=\"collapseSix\">
                                                                    TROISIÈMES LIGNE
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            id=\"collapseSix\"
                                                            class=\"collapse\"
                                                            aria-labelledby=\"headingSix\"
                                                            data-parent=\"#accordionExample\">
                                                            ";
        // line 499
        if (0 === twig_compare((isset($context["troisiemelignes"]) || array_key_exists("troisiemelignes", $context) ? $context["troisiemelignes"] : (function () { throw new RuntimeError('Variable "troisiemelignes" does not exist.', 499, $this->source); })()), null)) {
            // line 500
            echo "                                                                <div class=\"card-body\">
                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                ";
        } else {
            // line 504
            echo "                                                                    <div class=\"card-body nopadd\">
                                                                        <table>
                                                                            <tr>
                                                                                <th>PHOTO</th>
                                                                                <th>NOM</th>
                                                                                <th>PRÉNOM</th>
                                                                                <th>LICENCE</th>
                                                                                <th style=\"text-align:left;\">INFOS</th>
                                                                                <th>
                                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                        <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                </th>
                                                                            </tr>
                                                                            ";
            // line 517
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["troisiemelignes"]) || array_key_exists("troisiemelignes", $context) ? $context["troisiemelignes"] : (function () { throw new RuntimeError('Variable "troisiemelignes" does not exist.', 517, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 518
                echo "                                                                                <tr>
                                                                                    <td><img src=\"../docs/";
                // line 519
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 519), "html", null, true);
                echo "\"/></td>
                                                                                    <td>";
                // line 520
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 520)), "html", null, true);
                echo "</td>
                                                                                    <td>";
                // line 521
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 521)), "html", null, true);
                echo "</td>
                                                                                    <td>N° :
                                                                                        <b>";
                // line 523
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 523), "html", null, true);
                echo "</b>
                                                                                    </td>
                                                                                    <td style=\"text-align:left;\">
                                                                                        <br>
                                                                                        Age :
                                                                                        <b>";
                // line 528
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 528), "html", null, true);
                echo "
                                                                                            ans</b><br>
                                                                                        Poids :
                                                                                        <b>";
                // line 531
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 531), "html", null, true);
                echo "
                                                                                            kg</b><br>
                                                                                        Taille :
                                                                                        <b>";
                // line 534
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 534), "html", null, true);
                echo "
                                                                                            cm</b><br>
                                                                                        Matchs :
                                                                                        <b>";
                // line 537
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 537), "html", null, true);
                echo "</b><br>
                                                                                        Éssais :
                                                                                        <b>";
                // line 539
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 539), "html", null, true);
                echo "</b><br>
                                                                                        Points :
                                                                                        <b>";
                // line 541
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 541), "html", null, true);
                echo "</b><br>
                                                                                        ";
                // line 542
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 542), true)) {
                    // line 543
                    echo "                                                                                            <b>
                                                                                                <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                        ";
                } else {
                    // line 545
                    echo "<br>";
                }
                // line 546
                echo "                                                                                    </td>
                                                                                    <td>
                                                                                        <a href=\"";
                // line 548
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 548)]), "html", null, true);
                echo "\">
                                                                                            <span class=\"material-icons\">
                                                                                                delete
                                                                                            </span>
                                                                                        </a>
                                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 561
            echo "                                                                        </table>
                                                                    ";
        }
        // line 563
        echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"card\">
                                                            <div class=\"card-header\" id=\"headingSeven\">
                                                                <h2 class=\"mb-0\">
                                                                    <button
                                                                        class=\"btn btn-link collapsed\"
                                                                        type=\"button\"
                                                                        data-toggle=\"collapse\"
                                                                        data-target=\"#collapseSeven\"
                                                                        aria-expanded=\"false\"
                                                                        aria-controls=\"collapseSeven\">
                                                                        SECONDES LIGNE
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div
                                                                id=\"collapseSeven\"
                                                                class=\"collapse\"
                                                                aria-labelledby=\"headingSeven\"
                                                                data-parent=\"#accordionExample\">
                                                                ";
        // line 585
        if (0 === twig_compare((isset($context["secondeslignes"]) || array_key_exists("secondeslignes", $context) ? $context["secondeslignes"] : (function () { throw new RuntimeError('Variable "secondeslignes" does not exist.', 585, $this->source); })()), null)) {
            // line 586
            echo "                                                                    <div class=\"card-body\">
                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                            <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                    ";
        } else {
            // line 590
            echo "                                                                        <div class=\"card-body nopadd\">
                                                                            <table>
                                                                                <tr>
                                                                                    <th>PHOTO</th>
                                                                                    <th>NOM</th>
                                                                                    <th>PRÉNOM</th>
                                                                                    <th>LICENCE</th>
                                                                                    <th style=\"text-align:left;\">INFOS</th>
                                                                                    <th>
                                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                            <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                    </th>
                                                                                </tr>
                                                                                ";
            // line 603
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secondeslignes"]) || array_key_exists("secondeslignes", $context) ? $context["secondeslignes"] : (function () { throw new RuntimeError('Variable "secondeslignes" does not exist.', 603, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 604
                echo "                                                                                    <tr>
                                                                                        <td><img src=\"../docs/";
                // line 605
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 605), "html", null, true);
                echo "\"/></td>
                                                                                        <td>";
                // line 606
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 606)), "html", null, true);
                echo "</td>
                                                                                        <td>";
                // line 607
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 607)), "html", null, true);
                echo "</td>
                                                                                        <td>N° :
                                                                                            <b>";
                // line 609
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 609), "html", null, true);
                echo "</b>
                                                                                        </td>
                                                                                        <td style=\"text-align:left;\">
                                                                                            <br>
                                                                                            Age :
                                                                                            <b>";
                // line 614
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 614), "html", null, true);
                echo "
                                                                                                ans</b><br>
                                                                                            Poids :
                                                                                            <b>";
                // line 617
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 617), "html", null, true);
                echo "
                                                                                                kg</b><br>
                                                                                            Taille :
                                                                                            <b>";
                // line 620
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 620), "html", null, true);
                echo "
                                                                                                cm</b><br>
                                                                                            Matchs :
                                                                                            <b>";
                // line 623
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 623), "html", null, true);
                echo "</b><br>
                                                                                            Éssais :
                                                                                            <b>";
                // line 625
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 625), "html", null, true);
                echo "</b><br>
                                                                                            Points :
                                                                                            <b>";
                // line 627
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 627), "html", null, true);
                echo "</b><br>
                                                                                            ";
                // line 628
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 628), true)) {
                    // line 629
                    echo "                                                                                                <b>
                                                                                                    <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                            ";
                } else {
                    // line 631
                    echo "<br>";
                }
                // line 632
                echo "                                                                                        </td>
                                                                                        <td>
                                                                                            <a href=\"";
                // line 634
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 634)]), "html", null, true);
                echo "\">
                                                                                                <span class=\"material-icons\">
                                                                                                    delete
                                                                                                </span>
                                                                                            </a>
                                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 647
            echo "                                                                            </table>
                                                                        ";
        }
        // line 649
        echo "                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"card\">
                                                                <div class=\"card-header\" id=\"headingHeight\">
                                                                    <h2 class=\"mb-0\">
                                                                        <button
                                                                            class=\"btn btn-link collapsed\"
                                                                            type=\"button\"
                                                                            data-toggle=\"collapse\"
                                                                            data-target=\"#collapseHeight\"
                                                                            aria-expanded=\"false\"
                                                                            aria-controls=\"collapseHeight\">
                                                                            PILIERS
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div
                                                                    id=\"collapseHeight\"
                                                                    class=\"collapse\"
                                                                    aria-labelledby=\"headingHeight\"
                                                                    data-parent=\"#accordionExample\">
                                                                    ";
        // line 671
        if (0 === twig_compare((isset($context["piliers"]) || array_key_exists("piliers", $context) ? $context["piliers"] : (function () { throw new RuntimeError('Variable "piliers" does not exist.', 671, $this->source); })()), null)) {
            // line 672
            echo "                                                                        <div class=\"card-body\">
                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                        ";
        } else {
            // line 676
            echo "                                                                            <div class=\"card-body nopadd\">
                                                                                <table>
                                                                                    <tr>
                                                                                        <th>PHOTO</th>
                                                                                        <th>NOM</th>
                                                                                        <th>PRÉNOM</th>
                                                                                        <th>LICENCE</th>
                                                                                        <th style=\"text-align:left;\">INFOS</th>
                                                                                        <th>
                                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                        </th>
                                                                                    </tr>
                                                                                    ";
            // line 689
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["piliers"]) || array_key_exists("piliers", $context) ? $context["piliers"] : (function () { throw new RuntimeError('Variable "piliers" does not exist.', 689, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 690
                echo "                                                                                        <tr>
                                                                                            <td><img src=\"../docs/";
                // line 691
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 691), "html", null, true);
                echo "\"/></td>
                                                                                            <td>";
                // line 692
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 692)), "html", null, true);
                echo "</td>
                                                                                            <td>";
                // line 693
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 693)), "html", null, true);
                echo "</td>
                                                                                            <td>N° :
                                                                                                <b>";
                // line 695
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 695), "html", null, true);
                echo "</b>
                                                                                            </td>
                                                                                            <td style=\"text-align:left;\">
                                                                                                <br>
                                                                                                Age :
                                                                                                <b>";
                // line 700
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 700), "html", null, true);
                echo "
                                                                                                    ans</b><br>
                                                                                                Poids :
                                                                                                <b>";
                // line 703
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 703), "html", null, true);
                echo "
                                                                                                    kg</b><br>
                                                                                                Taille :
                                                                                                <b>";
                // line 706
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 706), "html", null, true);
                echo "
                                                                                                    cm</b><br>
                                                                                                Matchs :
                                                                                                <b>";
                // line 709
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 709), "html", null, true);
                echo "</b><br>
                                                                                                Éssais :
                                                                                                <b>";
                // line 711
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 711), "html", null, true);
                echo "</b><br>
                                                                                                Points :
                                                                                                <b>";
                // line 713
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 713), "html", null, true);
                echo "</b><br>
                                                                                                ";
                // line 714
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 714), true)) {
                    // line 715
                    echo "                                                                                                    <b>
                                                                                                        <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                                ";
                } else {
                    // line 717
                    echo "<br>";
                }
                // line 718
                echo "                                                                                            </td>
                                                                                            <td>
                                                                                                <a href=\"";
                // line 720
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 720)]), "html", null, true);
                echo "\">
                                                                                                    <span class=\"material-icons\">
                                                                                                        delete
                                                                                                    </span>
                                                                                                </a>
                                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 733
            echo "                                                                                </table>
                                                                            ";
        }
        // line 735
        echo "                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"card\">
                                                                    <div class=\"card-header\" id=\"headingNine\">
                                                                        <h2 class=\"mb-0\">
                                                                            <button
                                                                                class=\"btn btn-link collapsed\"
                                                                                type=\"button\"
                                                                                data-toggle=\"collapse\"
                                                                                data-target=\"#collapseNine\"
                                                                                aria-expanded=\"false\"
                                                                                aria-controls=\"collapseNine\">
                                                                                TALONNEURS
                                                                            </button>
                                                                        </h2>
                                                                    </div>
                                                                    <div
                                                                        id=\"collapseNine\"
                                                                        class=\"collapse\"
                                                                        aria-labelledby=\"headingNine\"
                                                                        data-parent=\"#accordionExample\">
                                                                        ";
        // line 757
        if (0 === twig_compare((isset($context["talonneurs"]) || array_key_exists("talonneurs", $context) ? $context["talonneurs"] : (function () { throw new RuntimeError('Variable "talonneurs" does not exist.', 757, $this->source); })()), null)) {
            // line 758
            echo "                                                                            <div class=\"card-body\">
                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                    <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                            ";
        } else {
            // line 762
            echo "                                                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                                                        <tr>
                                                                                            <th>PHOTO</th>
                                                                                            <th>NOM</th>
                                                                                            <th>PRÉNOM</th>
                                                                                            <th>LICENCE</th>
                                                                                            <th style=\"text-align:left;\">INFOS</th>
                                                                                            <th>
                                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                    <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                            </th>
                                                                                        </tr>
                                                                                        ";
            // line 775
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["talonneurs"]) || array_key_exists("talonneurs", $context) ? $context["talonneurs"] : (function () { throw new RuntimeError('Variable "talonneurs" does not exist.', 775, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 776
                echo "                                                                                            <tr>
                                                                                                <td><img src=\"../docs/";
                // line 777
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 777), "html", null, true);
                echo "\"/></td>
                                                                                                <td>";
                // line 778
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 778)), "html", null, true);
                echo "</td>
                                                                                                <td>";
                // line 779
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 779)), "html", null, true);
                echo "</td>
                                                                                                <td>N° :
                                                                                                    <b>";
                // line 781
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 781), "html", null, true);
                echo "</b>
                                                                                                </td>
                                                                                                <td style=\"text-align:left;\">
                                                                                                    <br>
                                                                                                    Age :
                                                                                                    <b>";
                // line 786
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 786), "html", null, true);
                echo "
                                                                                                        ans</b><br>
                                                                                                    Poids :
                                                                                                    <b>";
                // line 789
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 789), "html", null, true);
                echo "
                                                                                                        kg</b><br>
                                                                                                    Taille :
                                                                                                    <b>";
                // line 792
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 792), "html", null, true);
                echo "
                                                                                                        cm</b><br>
                                                                                                    Matchs :
                                                                                                    <b>";
                // line 795
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 795), "html", null, true);
                echo "</b><br>
                                                                                                    Éssais :
                                                                                                    <b>";
                // line 797
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 797), "html", null, true);
                echo "</b><br>
                                                                                                    Points :
                                                                                                    <b>";
                // line 799
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 799), "html", null, true);
                echo "</b><br>
                                                                                                    ";
                // line 800
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 800), true)) {
                    // line 801
                    echo "                                                                                                        <b>
                                                                                                            <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                                    ";
                } else {
                    // line 803
                    echo "<br>";
                }
                // line 804
                echo "                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href=\"";
                // line 806
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 806)]), "html", null, true);
                echo "\">
                                                                                                        <span class=\"material-icons\">
                                                                                                            delete
                                                                                                        </span>
                                                                                                    </a>
                                                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 819
            echo "                                                                                    </table>
                                                                                ";
        }
        // line 821
        echo "                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"card\">
                                                                    <div class=\"card-header\" id=\"headingTen\">
                                                                        <h2 class=\"mb-0\">
                                                                            <button
                                                                                class=\"btn btn-link collapsed\"
                                                                                type=\"button\"
                                                                                data-toggle=\"collapse\"
                                                                                data-target=\"#collapseTen\"
                                                                                aria-expanded=\"false\"
                                                                                aria-controls=\"collapseTen\">
                                                                                TOUS LES JOUEURS
                                                                            </button>
                                                                        </h2>
                                                                    </div>
                                                                    <div
                                                                        id=\"collapseTen\"
                                                                        class=\"collapse\"
                                                                        aria-labelledby=\"headingTen\"
                                                                        data-parent=\"#accordionExample\">
                                                                        ";
        // line 843
        if (0 === twig_compare((isset($context["allplayers"]) || array_key_exists("allplayers", $context) ? $context["allplayers"] : (function () { throw new RuntimeError('Variable "allplayers" does not exist.', 843, $this->source); })()), null)) {
            // line 844
            echo "                                                                            <div class=\"card-body\">
                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                    <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                            ";
        } else {
            // line 848
            echo "                                                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                                                        <tr>
                                                                                            <th>PHOTO</th>
                                                                                            <th>NOM</th>
                                                                                            <th>PRÉNOM</th>
                                                                                            <th>LICENCE</th>
                                                                                            <th style=\"text-align:left;\">INFOS</th>
                                                                                            <th>
                                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                    <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                            </th>
                                                                                        </tr>
                                                                                        ";
            // line 861
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allplayers"]) || array_key_exists("allplayers", $context) ? $context["allplayers"] : (function () { throw new RuntimeError('Variable "allplayers" does not exist.', 861, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 862
                echo "                                                                                            <tr>
                                                                                                <td><img src=\"../docs/";
                // line 863
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPhoto", [], "any", false, false, false, 863), "html", null, true);
                echo "\"/></td>
                                                                                                <td>";
                // line 864
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerName", [], "any", false, false, false, 864)), "html", null, true);
                echo "</td>
                                                                                                <td>";
                // line 865
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerFirstname", [], "any", false, false, false, 865)), "html", null, true);
                echo "</td>
                                                                                                <td>N° :
                                                                                                    <b>";
                // line 867
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerLicenceNumber", [], "any", false, false, false, 867), "html", null, true);
                echo "</b>
                                                                                                </td>
                                                                                                <td style=\"text-align:left;\">
                                                                                                    <br>
                                                                                                    Age :
                                                                                                    <b>";
                // line 872
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerAge", [], "any", false, false, false, 872), "html", null, true);
                echo "
                                                                                                        ans</b><br>
                                                                                                    Poids :
                                                                                                    <b>";
                // line 875
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerPoids", [], "any", false, false, false, 875), "html", null, true);
                echo "
                                                                                                        kg</b><br>
                                                                                                    Taille :
                                                                                                    <b>";
                // line 878
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTaille", [], "any", false, false, false, 878), "html", null, true);
                echo "
                                                                                                        cm</b><br>
                                                                                                    Matchs :
                                                                                                    <b>";
                // line 881
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalMatch", [], "any", false, false, false, 881), "html", null, true);
                echo "</b><br>
                                                                                                    Éssais :
                                                                                                    <b>";
                // line 883
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalTries", [], "any", false, false, false, 883), "html", null, true);
                echo "</b><br>
                                                                                                    Points :
                                                                                                    <b>";
                // line 885
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "PlayerTotalPoints", [], "any", false, false, false, 885), "html", null, true);
                echo "</b><br>
                                                                                                    ";
                // line 886
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["id"], "PlayerState", [], "any", false, false, false, 886), true)) {
                    // line 887
                    echo "                                                                                                        <b>
                                                                                                            <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                                    ";
                } else {
                    // line 889
                    echo "<br>";
                }
                // line 890
                echo "                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href=\"";
                // line 892
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_player", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 892)]), "html", null, true);
                echo "\">
                                                                                                        <span class=\"material-icons\">
                                                                                                            delete
                                                                                                        </span>
                                                                                                    </a>
                                                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
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
            // line 905
            echo "                                                                                    </table>
                                                                                ";
        }
        // line 907
        echo "                                                                            </div>
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
        return "home/joueurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1595 => 907,  1591 => 905,  1572 => 892,  1568 => 890,  1565 => 889,  1560 => 887,  1558 => 886,  1554 => 885,  1549 => 883,  1544 => 881,  1538 => 878,  1532 => 875,  1526 => 872,  1518 => 867,  1513 => 865,  1509 => 864,  1505 => 863,  1502 => 862,  1498 => 861,  1483 => 848,  1477 => 844,  1475 => 843,  1451 => 821,  1447 => 819,  1428 => 806,  1424 => 804,  1421 => 803,  1416 => 801,  1414 => 800,  1410 => 799,  1405 => 797,  1400 => 795,  1394 => 792,  1388 => 789,  1382 => 786,  1374 => 781,  1369 => 779,  1365 => 778,  1361 => 777,  1358 => 776,  1354 => 775,  1339 => 762,  1333 => 758,  1331 => 757,  1307 => 735,  1303 => 733,  1284 => 720,  1280 => 718,  1277 => 717,  1272 => 715,  1270 => 714,  1266 => 713,  1261 => 711,  1256 => 709,  1250 => 706,  1244 => 703,  1238 => 700,  1230 => 695,  1225 => 693,  1221 => 692,  1217 => 691,  1214 => 690,  1210 => 689,  1195 => 676,  1189 => 672,  1187 => 671,  1163 => 649,  1159 => 647,  1140 => 634,  1136 => 632,  1133 => 631,  1128 => 629,  1126 => 628,  1122 => 627,  1117 => 625,  1112 => 623,  1106 => 620,  1100 => 617,  1094 => 614,  1086 => 609,  1081 => 607,  1077 => 606,  1073 => 605,  1070 => 604,  1066 => 603,  1051 => 590,  1045 => 586,  1043 => 585,  1019 => 563,  1015 => 561,  996 => 548,  992 => 546,  989 => 545,  984 => 543,  982 => 542,  978 => 541,  973 => 539,  968 => 537,  962 => 534,  956 => 531,  950 => 528,  942 => 523,  937 => 521,  933 => 520,  929 => 519,  926 => 518,  922 => 517,  907 => 504,  901 => 500,  899 => 499,  875 => 477,  871 => 475,  852 => 462,  848 => 460,  845 => 459,  840 => 457,  838 => 456,  834 => 455,  829 => 453,  824 => 451,  818 => 448,  812 => 445,  806 => 442,  798 => 437,  793 => 435,  789 => 434,  785 => 433,  782 => 432,  778 => 431,  763 => 418,  757 => 414,  755 => 413,  731 => 391,  727 => 389,  708 => 376,  704 => 374,  701 => 373,  696 => 371,  694 => 370,  690 => 369,  685 => 367,  680 => 365,  674 => 362,  668 => 359,  662 => 356,  654 => 351,  649 => 349,  645 => 348,  641 => 347,  638 => 346,  634 => 345,  619 => 332,  613 => 328,  611 => 327,  587 => 305,  583 => 303,  564 => 290,  560 => 288,  557 => 287,  552 => 285,  550 => 284,  546 => 283,  541 => 281,  536 => 279,  530 => 276,  524 => 273,  518 => 270,  510 => 265,  505 => 263,  501 => 262,  497 => 261,  494 => 260,  490 => 259,  475 => 246,  469 => 242,  467 => 241,  443 => 219,  439 => 217,  420 => 204,  416 => 202,  413 => 201,  408 => 199,  406 => 198,  402 => 197,  397 => 195,  392 => 193,  386 => 190,  380 => 187,  374 => 184,  366 => 179,  361 => 177,  357 => 176,  353 => 175,  350 => 174,  346 => 173,  331 => 160,  325 => 156,  323 => 155,  299 => 133,  295 => 131,  281 => 123,  273 => 118,  269 => 116,  266 => 115,  261 => 113,  259 => 112,  255 => 111,  250 => 109,  245 => 107,  239 => 104,  233 => 101,  227 => 98,  219 => 93,  214 => 91,  210 => 90,  206 => 89,  203 => 88,  199 => 87,  184 => 74,  178 => 70,  176 => 69,  138 => 33,  136 => 32,  130 => 28,  128 => 27,  125 => 26,  119 => 24,  114 => 22,  109 => 21,  107 => 20,  100 => 15,  94 => 13,  88 => 11,  86 => 10,  81 => 8,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
    {% include '/inc/addplayermodal.html.twig' %}
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
                                    person
                                </span>&nbsp;Joueurs
                            </div>

                            <div class=\"accordion\" id=\"accordionExample\">
                                <div class=\"card\">
                                    <div class=\"card-header\" id=\"headingOne\">
                                        <h2 class=\"mb-0\">
                                            <button
                                                class=\"btn btn-link\"
                                                type=\"button\"
                                                data-toggle=\"collapse\"
                                                data-target=\"#collapseOne\"
                                                aria-expanded=\"true\"
                                                aria-controls=\"collapseOne\">
                                                ARRIÈRES
                                            </button>
                                        </h2>
                                    </div>

                                    <div
                                        id=\"collapseOne\"
                                        class=\"collapse\"
                                        aria-labelledby=\"headingOne\"
                                        data-parent=\"#accordionExample\">
                                        {% if arrieres == NULL %}
                                            <div class=\"card-body\">
                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                    <span class=\"material-icons\">person_add_alt_1</span></a>
                                            {% else %}
                                                <div class=\"card-body nopadd\">
                                                    <table>
                                                        <tr>
                                                            <th>PHOTO</th>
                                                            <th>NOM</th>
                                                            <th>PRÉNOM</th>
                                                            <th>LICENCE</th>
                                                            <th style=\"text-align:left;\">INFOS</th>
                                                            <th>
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                    <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                            </th>
                                                        </tr>
                                                        {% for id in arrieres %}
                                                            <tr>
                                                                <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                <td>{{ id.PlayerName|upper }}</td>
                                                                <td>{{ id.PlayerFirstname|upper }}</td>
                                                                <td>N° :
                                                                    <b>{{ id.PlayerLicenceNumber }}</b>
                                                                </td>
                                                                <td style=\"text-align:left;\">
                                                                    <br>
                                                                    Age :
                                                                    <b>{{ id.PlayerAge }}
                                                                        ans</b><br>
                                                                    Poids :
                                                                    <b>{{ id.PlayerPoids }}
                                                                        kg</b><br>
                                                                    Taille :
                                                                    <b>{{ id.PlayerTaille }}
                                                                        cm</b><br>
                                                                    Matchs :
                                                                    <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                    Éssais :
                                                                    <b>{{ id.PlayerTotalTries }}</b><br>
                                                                    Points :
                                                                    <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                    {% if id.PlayerState == true %}
                                                                        <b>
                                                                            <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                    {% else %}<br>{% endif %}
                                                                </td>
                                                                <td>
                                                                    <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                        <span class=\"material-icons\">
                                                                            delete
                                                                        </span>
                                                                    </a>
                                                                    <a href=\"{{ path('modif_player', { 'id': id.id }) }}\">
                                                                        <span class=\"material-icons\">
                                                                            edit
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                    </table>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-header\" id=\"headingTwo\">
                                            <h2 class=\"mb-0\">
                                                <button
                                                    class=\"btn btn-link collapsed\"
                                                    type=\"button\"
                                                    data-toggle=\"collapse\"
                                                    data-target=\"#collapseTwo\"
                                                    aria-expanded=\"false\"
                                                    aria-controls=\"collapseTwo\">
                                                    AILIERS
                                                </button>
                                            </h2>
                                        </div>
                                        <div
                                            id=\"collapseTwo\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingTwo\"
                                            data-parent=\"#accordionExample\">
                                            {% if ailiers == NULL %}
                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                {% else %}
                                                    <div class=\"card-body nopadd\">
                                                        <table>
                                                            <tr>
                                                                <th>PHOTO</th>
                                                                <th>NOM</th>
                                                                <th>PRÉNOM</th>
                                                                <th>LICENCE</th>
                                                                <th style=\"text-align:left;\">INFOS</th>
                                                                <th>
                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                        <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                </th>
                                                            </tr>
                                                            {% for id in ailiers %}
                                                                <tr>
                                                                    <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                    <td>{{ id.PlayerName|upper }}</td>
                                                                    <td>{{ id.PlayerFirstname|upper }}</td>
                                                                    <td>N° :
                                                                        <b>{{ id.PlayerLicenceNumber }}</b>
                                                                    </td>
                                                                    <td style=\"text-align:left;\">
                                                                        <br>
                                                                        Age :
                                                                        <b>{{ id.PlayerAge }}
                                                                            ans</b><br>
                                                                        Poids :
                                                                        <b>{{ id.PlayerPoids }}
                                                                            kg</b><br>
                                                                        Taille :
                                                                        <b>{{ id.PlayerTaille }}
                                                                            cm</b><br>
                                                                        Matchs :
                                                                        <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                        Éssais :
                                                                        <b>{{ id.PlayerTotalTries }}</b><br>
                                                                        Points :
                                                                        <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                        {% if id.PlayerState == true %}
                                                                            <b>
                                                                                <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                        {% else %}<br>{% endif %}
                                                                    </td>
                                                                    <td>
                                                                        <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                            <span class=\"material-icons\">
                                                                                delete
                                                                            </span>
                                                                        </a>
                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                            <span class=\"material-icons\">
                                                                                edit
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            {% endfor %}
                                                        </table>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header\" id=\"headingThree\">
                                                <h2 class=\"mb-0\">
                                                    <button
                                                        class=\"btn btn-link collapsed\"
                                                        type=\"button\"
                                                        data-toggle=\"collapse\"
                                                        data-target=\"#collapseThree\"
                                                        aria-expanded=\"false\"
                                                        aria-controls=\"collapseThree\">
                                                        CENTRES
                                                    </button>
                                                </h2>
                                            </div>
                                            <div
                                                id=\"collapseThree\"
                                                class=\"collapse\"
                                                aria-labelledby=\"headingThree\"
                                                data-parent=\"#accordionExample\">
                                                {% if centres == NULL %}
                                                    <div class=\"card-body\">
                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                            <span class=\"material-icons\">person_add_alt_1</span></a>
                                                    {% else %}
                                                        <div class=\"card-body nopadd\">
                                                            <table>
                                                                <tr>
                                                                    <th>PHOTO</th>
                                                                    <th>NOM</th>
                                                                    <th>PRÉNOM</th>
                                                                    <th>LICENCE</th>
                                                                    <th style=\"text-align:left;\">INFOS</th>
                                                                    <th>
                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                            <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                    </th>
                                                                </tr>
                                                                {% for id in centres %}
                                                                    <tr>
                                                                        <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                        <td>{{ id.PlayerName|upper }}</td>
                                                                        <td>{{ id.PlayerFirstname|upper }}</td>
                                                                        <td>N° :
                                                                            <b>{{ id.PlayerLicenceNumber }}</b>
                                                                        </td>
                                                                        <td style=\"text-align:left;\">
                                                                            <br>
                                                                            Age :
                                                                            <b>{{ id.PlayerAge }}
                                                                                ans</b><br>
                                                                            Poids :
                                                                            <b>{{ id.PlayerPoids }}
                                                                                kg</b><br>
                                                                            Taille :
                                                                            <b>{{ id.PlayerTaille }}
                                                                                cm</b><br>
                                                                            Matchs :
                                                                            <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                            Éssais :
                                                                            <b>{{ id.PlayerTotalTries }}</b><br>
                                                                            Points :
                                                                            <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                            {% if id.PlayerState == true %}
                                                                                <b>
                                                                                    <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                            {% else %}<br>{% endif %}
                                                                        </td>
                                                                        <td>
                                                                            <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                                <span class=\"material-icons\">
                                                                                    delete
                                                                                </span>
                                                                            </a>
                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                <span class=\"material-icons\">
                                                                                    edit
                                                                                </span>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                {% endfor %}
                                                            </table>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"card\">
                                                <div class=\"card-header\" id=\"headingFour\">
                                                    <h2 class=\"mb-0\">
                                                        <button
                                                            class=\"btn btn-link collapsed\"
                                                            type=\"button\"
                                                            data-toggle=\"collapse\"
                                                            data-target=\"#collapseFour\"
                                                            aria-expanded=\"false\"
                                                            aria-controls=\"collapseFour\">
                                                            DEMIS D'OUVERTURE
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div
                                                    id=\"collapseFour\"
                                                    class=\"collapse\"
                                                    aria-labelledby=\"headingFour\"
                                                    data-parent=\"#accordionExample\">
                                                    {% if demiouvertures == NULL %}
                                                        <div class=\"card-body\">
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                <span class=\"material-icons\">person_add_alt_1</span></a>
                                                        {% else %}
                                                            <div class=\"card-body nopadd\">
                                                                <table>
                                                                    <tr>
                                                                        <th>PHOTO</th>
                                                                        <th>NOM</th>
                                                                        <th>PRÉNOM</th>
                                                                        <th>LICENCE</th>
                                                                        <th style=\"text-align:left;\">INFOS</th>
                                                                        <th>
                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                        </th>
                                                                    </tr>
                                                                    {% for id in demiouvertures %}
                                                                        <tr>
                                                                            <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                            <td>{{ id.PlayerName|upper }}</td>
                                                                            <td>{{ id.PlayerFirstname|upper }}</td>
                                                                            <td>N° :
                                                                                <b>{{ id.PlayerLicenceNumber }}</b>
                                                                            </td>
                                                                            <td style=\"text-align:left;\">
                                                                                <br>
                                                                                Age :
                                                                                <b>{{ id.PlayerAge }}
                                                                                    ans</b><br>
                                                                                Poids :
                                                                                <b>{{ id.PlayerPoids }}
                                                                                    kg</b><br>
                                                                                Taille :
                                                                                <b>{{ id.PlayerTaille }}
                                                                                    cm</b><br>
                                                                                Matchs :
                                                                                <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                                Éssais :
                                                                                <b>{{ id.PlayerTotalTries }}</b><br>
                                                                                Points :
                                                                                <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                                {% if id.PlayerState == true %}
                                                                                    <b>
                                                                                        <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                {% else %}<br>{% endif %}
                                                                            </td>
                                                                            <td>
                                                                                <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                                    <span class=\"material-icons\">
                                                                                        delete
                                                                                    </span>
                                                                                </a>
                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                    <span class=\"material-icons\">
                                                                                        edit
                                                                                    </span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                </table>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"card\">
                                                    <div class=\"card-header\" id=\"headingFive\">
                                                        <h2 class=\"mb-0\">
                                                            <button
                                                                class=\"btn btn-link collapsed\"
                                                                type=\"button\"
                                                                data-toggle=\"collapse\"
                                                                data-target=\"#collapseFive\"
                                                                aria-expanded=\"false\"
                                                                aria-controls=\"collapseFive\">
                                                                DEMIS DE MÊLÉE
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        id=\"collapseFive\"
                                                        class=\"collapse\"
                                                        aria-labelledby=\"headingFive\"
                                                        data-parent=\"#accordionExample\">
                                                        {% if demimelees == NULL %}
                                                            <div class=\"card-body\">
                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                    <span class=\"material-icons\">person_add_alt_1</span></a>
                                                            {% else %}
                                                                <div class=\"card-body nopadd\">
                                                                    <table>
                                                                        <tr>
                                                                            <th>PHOTO</th>
                                                                            <th>NOM</th>
                                                                            <th>PRÉNOM</th>
                                                                            <th>LICENCE</th>
                                                                            <th style=\"text-align:left;\">INFOS</th>
                                                                            <th>
                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                    <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                            </th>
                                                                        </tr>
                                                                        {% for id in demimelees %}
                                                                            <tr>
                                                                                <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                                <td>{{ id.PlayerName|upper }}</td>
                                                                                <td>{{ id.PlayerFirstname|upper }}</td>
                                                                                <td>N° :
                                                                                    <b>{{ id.PlayerLicenceNumber }}</b>
                                                                                </td>
                                                                                <td style=\"text-align:left;\">
                                                                                    <br>
                                                                                    Age :
                                                                                    <b>{{ id.PlayerAge }}
                                                                                        ans</b><br>
                                                                                    Poids :
                                                                                    <b>{{ id.PlayerPoids }}
                                                                                        kg</b><br>
                                                                                    Taille :
                                                                                    <b>{{ id.PlayerTaille }}
                                                                                        cm</b><br>
                                                                                    Matchs :
                                                                                    <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                                    Éssais :
                                                                                    <b>{{ id.PlayerTotalTries }}</b><br>
                                                                                    Points :
                                                                                    <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                                    {% if id.PlayerState == true %}
                                                                                        <b>
                                                                                            <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                    {% else %}<br>{% endif %}
                                                                                </td>
                                                                                <td>
                                                                                    <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                                        <span class=\"material-icons\">
                                                                                            delete
                                                                                        </span>
                                                                                    </a>
                                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                        <span class=\"material-icons\">
                                                                                            edit
                                                                                        </span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                    </table>
                                                                {% endif %}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"card\">
                                                        <div class=\"card-header\" id=\"headingSix\">
                                                            <h2 class=\"mb-0\">
                                                                <button
                                                                    class=\"btn btn-link collapsed\"
                                                                    type=\"button\"
                                                                    data-toggle=\"collapse\"
                                                                    data-target=\"#collapseSix\"
                                                                    aria-expanded=\"false\"
                                                                    aria-controls=\"collapseSix\">
                                                                    TROISIÈMES LIGNE
                                                                </button>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            id=\"collapseSix\"
                                                            class=\"collapse\"
                                                            aria-labelledby=\"headingSix\"
                                                            data-parent=\"#accordionExample\">
                                                            {% if troisiemelignes == NULL %}
                                                                <div class=\"card-body\">
                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                {% else %}
                                                                    <div class=\"card-body nopadd\">
                                                                        <table>
                                                                            <tr>
                                                                                <th>PHOTO</th>
                                                                                <th>NOM</th>
                                                                                <th>PRÉNOM</th>
                                                                                <th>LICENCE</th>
                                                                                <th style=\"text-align:left;\">INFOS</th>
                                                                                <th>
                                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                        <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                </th>
                                                                            </tr>
                                                                            {% for id in troisiemelignes %}
                                                                                <tr>
                                                                                    <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                                    <td>{{ id.PlayerName|upper }}</td>
                                                                                    <td>{{ id.PlayerFirstname|upper }}</td>
                                                                                    <td>N° :
                                                                                        <b>{{ id.PlayerLicenceNumber }}</b>
                                                                                    </td>
                                                                                    <td style=\"text-align:left;\">
                                                                                        <br>
                                                                                        Age :
                                                                                        <b>{{ id.PlayerAge }}
                                                                                            ans</b><br>
                                                                                        Poids :
                                                                                        <b>{{ id.PlayerPoids }}
                                                                                            kg</b><br>
                                                                                        Taille :
                                                                                        <b>{{ id.PlayerTaille }}
                                                                                            cm</b><br>
                                                                                        Matchs :
                                                                                        <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                                        Éssais :
                                                                                        <b>{{ id.PlayerTotalTries }}</b><br>
                                                                                        Points :
                                                                                        <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                                        {% if id.PlayerState == true %}
                                                                                            <b>
                                                                                                <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                        {% else %}<br>{% endif %}
                                                                                    </td>
                                                                                    <td>
                                                                                        <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                                            <span class=\"material-icons\">
                                                                                                delete
                                                                                            </span>
                                                                                        </a>
                                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                            <span class=\"material-icons\">
                                                                                                edit
                                                                                            </span>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            {% endfor %}
                                                                        </table>
                                                                    {% endif %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"card\">
                                                            <div class=\"card-header\" id=\"headingSeven\">
                                                                <h2 class=\"mb-0\">
                                                                    <button
                                                                        class=\"btn btn-link collapsed\"
                                                                        type=\"button\"
                                                                        data-toggle=\"collapse\"
                                                                        data-target=\"#collapseSeven\"
                                                                        aria-expanded=\"false\"
                                                                        aria-controls=\"collapseSeven\">
                                                                        SECONDES LIGNE
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div
                                                                id=\"collapseSeven\"
                                                                class=\"collapse\"
                                                                aria-labelledby=\"headingSeven\"
                                                                data-parent=\"#accordionExample\">
                                                                {% if secondeslignes == NULL %}
                                                                    <div class=\"card-body\">
                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                            <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                    {% else %}
                                                                        <div class=\"card-body nopadd\">
                                                                            <table>
                                                                                <tr>
                                                                                    <th>PHOTO</th>
                                                                                    <th>NOM</th>
                                                                                    <th>PRÉNOM</th>
                                                                                    <th>LICENCE</th>
                                                                                    <th style=\"text-align:left;\">INFOS</th>
                                                                                    <th>
                                                                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                            <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                    </th>
                                                                                </tr>
                                                                                {% for id in secondeslignes %}
                                                                                    <tr>
                                                                                        <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                                        <td>{{ id.PlayerName|upper }}</td>
                                                                                        <td>{{ id.PlayerFirstname|upper }}</td>
                                                                                        <td>N° :
                                                                                            <b>{{ id.PlayerLicenceNumber }}</b>
                                                                                        </td>
                                                                                        <td style=\"text-align:left;\">
                                                                                            <br>
                                                                                            Age :
                                                                                            <b>{{ id.PlayerAge }}
                                                                                                ans</b><br>
                                                                                            Poids :
                                                                                            <b>{{ id.PlayerPoids }}
                                                                                                kg</b><br>
                                                                                            Taille :
                                                                                            <b>{{ id.PlayerTaille }}
                                                                                                cm</b><br>
                                                                                            Matchs :
                                                                                            <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                                            Éssais :
                                                                                            <b>{{ id.PlayerTotalTries }}</b><br>
                                                                                            Points :
                                                                                            <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                                            {% if id.PlayerState == true %}
                                                                                                <b>
                                                                                                    <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                            {% else %}<br>{% endif %}
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                                                <span class=\"material-icons\">
                                                                                                    delete
                                                                                                </span>
                                                                                            </a>
                                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                <span class=\"material-icons\">
                                                                                                    edit
                                                                                                </span>
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                {% endfor %}
                                                                            </table>
                                                                        {% endif %}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"card\">
                                                                <div class=\"card-header\" id=\"headingHeight\">
                                                                    <h2 class=\"mb-0\">
                                                                        <button
                                                                            class=\"btn btn-link collapsed\"
                                                                            type=\"button\"
                                                                            data-toggle=\"collapse\"
                                                                            data-target=\"#collapseHeight\"
                                                                            aria-expanded=\"false\"
                                                                            aria-controls=\"collapseHeight\">
                                                                            PILIERS
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div
                                                                    id=\"collapseHeight\"
                                                                    class=\"collapse\"
                                                                    aria-labelledby=\"headingHeight\"
                                                                    data-parent=\"#accordionExample\">
                                                                    {% if piliers == NULL %}
                                                                        <div class=\"card-body\">
                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                        {% else %}
                                                                            <div class=\"card-body nopadd\">
                                                                                <table>
                                                                                    <tr>
                                                                                        <th>PHOTO</th>
                                                                                        <th>NOM</th>
                                                                                        <th>PRÉNOM</th>
                                                                                        <th>LICENCE</th>
                                                                                        <th style=\"text-align:left;\">INFOS</th>
                                                                                        <th>
                                                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                        </th>
                                                                                    </tr>
                                                                                    {% for id in piliers %}
                                                                                        <tr>
                                                                                            <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                                            <td>{{ id.PlayerName|upper }}</td>
                                                                                            <td>{{ id.PlayerFirstname|upper }}</td>
                                                                                            <td>N° :
                                                                                                <b>{{ id.PlayerLicenceNumber }}</b>
                                                                                            </td>
                                                                                            <td style=\"text-align:left;\">
                                                                                                <br>
                                                                                                Age :
                                                                                                <b>{{ id.PlayerAge }}
                                                                                                    ans</b><br>
                                                                                                Poids :
                                                                                                <b>{{ id.PlayerPoids }}
                                                                                                    kg</b><br>
                                                                                                Taille :
                                                                                                <b>{{ id.PlayerTaille }}
                                                                                                    cm</b><br>
                                                                                                Matchs :
                                                                                                <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                                                Éssais :
                                                                                                <b>{{ id.PlayerTotalTries }}</b><br>
                                                                                                Points :
                                                                                                <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                                                {% if id.PlayerState == true %}
                                                                                                    <b>
                                                                                                        <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                                {% else %}<br>{% endif %}
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                                                    <span class=\"material-icons\">
                                                                                                        delete
                                                                                                    </span>
                                                                                                </a>
                                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                    <span class=\"material-icons\">
                                                                                                        edit
                                                                                                    </span>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                    {% endfor %}
                                                                                </table>
                                                                            {% endif %}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"card\">
                                                                    <div class=\"card-header\" id=\"headingNine\">
                                                                        <h2 class=\"mb-0\">
                                                                            <button
                                                                                class=\"btn btn-link collapsed\"
                                                                                type=\"button\"
                                                                                data-toggle=\"collapse\"
                                                                                data-target=\"#collapseNine\"
                                                                                aria-expanded=\"false\"
                                                                                aria-controls=\"collapseNine\">
                                                                                TALONNEURS
                                                                            </button>
                                                                        </h2>
                                                                    </div>
                                                                    <div
                                                                        id=\"collapseNine\"
                                                                        class=\"collapse\"
                                                                        aria-labelledby=\"headingNine\"
                                                                        data-parent=\"#accordionExample\">
                                                                        {% if talonneurs == NULL %}
                                                                            <div class=\"card-body\">
                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                    <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                            {% else %}
                                                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                                                        <tr>
                                                                                            <th>PHOTO</th>
                                                                                            <th>NOM</th>
                                                                                            <th>PRÉNOM</th>
                                                                                            <th>LICENCE</th>
                                                                                            <th style=\"text-align:left;\">INFOS</th>
                                                                                            <th>
                                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                    <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                            </th>
                                                                                        </tr>
                                                                                        {% for id in talonneurs %}
                                                                                            <tr>
                                                                                                <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                                                <td>{{ id.PlayerName|upper }}</td>
                                                                                                <td>{{ id.PlayerFirstname|upper }}</td>
                                                                                                <td>N° :
                                                                                                    <b>{{ id.PlayerLicenceNumber }}</b>
                                                                                                </td>
                                                                                                <td style=\"text-align:left;\">
                                                                                                    <br>
                                                                                                    Age :
                                                                                                    <b>{{ id.PlayerAge }}
                                                                                                        ans</b><br>
                                                                                                    Poids :
                                                                                                    <b>{{ id.PlayerPoids }}
                                                                                                        kg</b><br>
                                                                                                    Taille :
                                                                                                    <b>{{ id.PlayerTaille }}
                                                                                                        cm</b><br>
                                                                                                    Matchs :
                                                                                                    <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                                                    Éssais :
                                                                                                    <b>{{ id.PlayerTotalTries }}</b><br>
                                                                                                    Points :
                                                                                                    <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                                                    {% if id.PlayerState == true %}
                                                                                                        <b>
                                                                                                            <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                                    {% else %}<br>{% endif %}
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                                                        <span class=\"material-icons\">
                                                                                                            delete
                                                                                                        </span>
                                                                                                    </a>
                                                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                        <span class=\"material-icons\">
                                                                                                            edit
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        {% endfor %}
                                                                                    </table>
                                                                                {% endif %}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"card\">
                                                                    <div class=\"card-header\" id=\"headingTen\">
                                                                        <h2 class=\"mb-0\">
                                                                            <button
                                                                                class=\"btn btn-link collapsed\"
                                                                                type=\"button\"
                                                                                data-toggle=\"collapse\"
                                                                                data-target=\"#collapseTen\"
                                                                                aria-expanded=\"false\"
                                                                                aria-controls=\"collapseTen\">
                                                                                TOUS LES JOUEURS
                                                                            </button>
                                                                        </h2>
                                                                    </div>
                                                                    <div
                                                                        id=\"collapseTen\"
                                                                        class=\"collapse\"
                                                                        aria-labelledby=\"headingTen\"
                                                                        data-parent=\"#accordionExample\">
                                                                        {% if allplayers == NULL %}
                                                                            <div class=\"card-body\">
                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                    <span class=\"material-icons\">person_add_alt_1</span></a>
                                                                            {% else %}
                                                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                                                        <tr>
                                                                                            <th>PHOTO</th>
                                                                                            <th>NOM</th>
                                                                                            <th>PRÉNOM</th>
                                                                                            <th>LICENCE</th>
                                                                                            <th style=\"text-align:left;\">INFOS</th>
                                                                                            <th>
                                                                                                <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                    <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                                                            </th>
                                                                                        </tr>
                                                                                        {% for id in allplayers %}
                                                                                            <tr>
                                                                                                <td><img src=\"../docs/{{ id.PlayerPhoto }}\"/></td>
                                                                                                <td>{{ id.PlayerName|upper }}</td>
                                                                                                <td>{{ id.PlayerFirstname|upper }}</td>
                                                                                                <td>N° :
                                                                                                    <b>{{ id.PlayerLicenceNumber }}</b>
                                                                                                </td>
                                                                                                <td style=\"text-align:left;\">
                                                                                                    <br>
                                                                                                    Age :
                                                                                                    <b>{{ id.PlayerAge }}
                                                                                                        ans</b><br>
                                                                                                    Poids :
                                                                                                    <b>{{ id.PlayerPoids }}
                                                                                                        kg</b><br>
                                                                                                    Taille :
                                                                                                    <b>{{ id.PlayerTaille }}
                                                                                                        cm</b><br>
                                                                                                    Matchs :
                                                                                                    <b>{{ id.PlayerTotalMatch }}</b><br>
                                                                                                    Éssais :
                                                                                                    <b>{{ id.PlayerTotalTries }}</b><br>
                                                                                                    Points :
                                                                                                    <b>{{ id.PlayerTotalPoints }}</b><br>
                                                                                                    {% if id.PlayerState == true %}
                                                                                                        <b>
                                                                                                            <span style=\"color:red\">Joueur Blessé</span></b><br><br>
                                                                                                    {% else %}<br>{% endif %}
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a href=\"{{ path('delete_player', { 'id': id.id }) }}\">
                                                                                                        <span class=\"material-icons\">
                                                                                                            delete
                                                                                                        </span>
                                                                                                    </a>
                                                                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal10\">
                                                                                                        <span class=\"material-icons\">
                                                                                                            edit
                                                                                                        </span>
                                                                                                    </a>
                                                                                                </td>
                                                                                            </tr>
                                                                                        {% endfor %}
                                                                                    </table>
                                                                                {% endif %}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            {% endblock %}", "home/joueurs.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/joueurs.html.twig");
    }
}
