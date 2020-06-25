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

/* home/index.html.twig */
class __TwigTemplate_7c57e0e97fac2d0cb02c8ef8c891cb6af11fb68df68fa7b4f80d4ee5dc6578a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        $this->loadTemplate("/inc/modal.html.twig", "home/index.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/index.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("/inc/modalnote.html.twig", "home/index.html.twig", 5)->display($context);
        // line 6
        echo "    <div id=\"fb-root\"></div>
    <script
        async=\"async\"
        defer=\"defer\"
        crossorigin=\"anonymous\"
        src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\"
        nonce=\"LShEe8er\"></script>

    <div class=\"leftbar\">

        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <center>
                ";
        // line 18
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 18, $this->source); })()), "sitelogo", [], "any", false, false, false, 18), "")) {
            // line 19
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        } else {
            // line 21
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 21, $this->source); })()), "sitelogo", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        }
        // line 23
        echo "            </center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            ";
        // line 28
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 28, $this->source); })()), "clubname", [], "any", false, false, false, 28), "")) {
            // line 29
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "
                ";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "
            ";
        } else {
            // line 32
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 32, $this->source); })()), "clubname", [], "any", false, false, false, 32), "html", null, true);
            echo "
            ";
        }
        // line 34
        echo "        </div>

        ";
        // line 36
        $this->loadTemplate("inc/nav.html.twig", "home/index.html.twig", 36)->display($context);
        // line 37
        echo "
    </div>

    <div class=\"block\">

        ";
        // line 42
        $this->loadTemplate("inc/navtop.html.twig", "home/index.html.twig", 42)->display($context);
        // line 43
        echo "
        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">
                    <div class=\"col-8 col-sm-8 col-md-7 col-lg-7 col-xl-5 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    info
                                </span>&nbsp;Informations</div>
                            <div class=\"simplebloccontent blocksize\">
                                <div class=\"clubcolor\">
                                    <h6>
                                        <b>";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "
                                            ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "</b>
                                    </h6><hr></div>
                                <p>Bienvenu(e)
                                    <b>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "firstname", [], "any", false, false, false, 62), "html", null, true);
        echo "
                                        ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "lastname", [], "any", false, false, false, 63), "html", null, true);
        echo "</b>
                                    ! Vous êtes sur l'Administration du site internet

                                    ";
        // line 66
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 66, $this->source); })()), "clubname", [], "any", false, false, false, 66), "")) {
            // line 67
            echo "                                        <b>";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "
                                            ";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "</b>
                                    ";
        } else {
            // line 70
            echo "                                        de
                                        <b>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 71, $this->source); })()), "clubname", [], "any", false, false, false, 71), "html", null, true);
            echo "</b>
                                    ";
        }
        // line 73
        echo "                                    . Vous trouverez dans cet espace tout ce dont vous avez besoin pour gérer votre
                                    site comme il se doit. Vous pourrez ajouter des articles, des joueurs, etc...</p>
                                <p>Vous pouvez trouver
                                    <b>
                                        <a href=\"#\" class=\"secondlink\">ici</a>
                                    </b>
                                    une vidéo explicative sur la prise en main de l'Administration.</p>
                                <p>Si cependant des questions persistent, vous pouvez nous contacter par mail
                                    <b>
                                        <a
                                            href=\"mailto:contact@kellian-chamouard.fr?subject=HELP CENTER SITE : Belvèze Razes XIII\"
                                            class=\"secondlink\">ici</a>
                                    </b>
                                    ou par téléphone
                                    <b>
                                        <a href=\"tel:0778907411\" class=\"secondlink\">ici</a>
                                    </b>.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-4 col-sm-4 col-md-5 col-lg-5 col-xl-7 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    notes
                                </span>&nbsp;notes
                                <a
                                    href=\"#\"
                                    data-toggle=\"modal\"
                                    data-target=\"#exampleModal\"
                                    style=\"color:var(--first-color);font-weight:bolder;\">
                                    <span
                                        class=\"badge badge-primary\"
                                        style=\"background-color:var(--first-color);width:13px;\">+</span>
                                </a>
                            </div>
                            <div class=\"simplebloccontent scrollon blocksize\">

                                <div class=\"alert alert-clubcolor alert-dismissible fade show\" role=\"alert\">

                                    <b>⚠</b>
                                    Pensez à bien tenir à jour toutes les informations du club ainsi que tous les
                                    matchs et résultats.

                                </div>

                                ";
        // line 120
        if (0 === twig_compare((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 120, $this->source); })()), null)) {
            // line 121
            echo "
                                    <div class=\"alert alert-clubcolor alert-dismissible fade show\" role=\"alert\">

                                        Pas de note pour le moment ! Ajoutez-en une !

                                    </div>

                                ";
        } else {
            // line 129
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 129, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 130
                echo "                                        <div class=\"alert alert-clubcolor alert-dismissible fade show\" role=\"alert\">
                                            <strong class=\"clubcolor\">";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "datenote", [], "any", false, false, false, 131), "html", null, true);
                echo "
                                                :
                                            </strong>
                                            ";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "contentnote", [], "any", false, false, false, 134), "html", null, true);
                echo "
                                            <a type=\"button\" class=\"close\" aria-label=\"Close\" href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_note", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                echo "\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </a>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                                ";
        }
        // line 141
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"col-4 col-sm-4 col-md-5 col-lg-5 col-xl-4 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    notification_important
                                </span>&nbsp;Notifications</div>
                            <div class=\"simplebloccontent blocksize\">

                        <table>
                            ";
        // line 155
        if (0 === twig_compare((isset($context["newsstate"]) || array_key_exists("newsstate", $context) ? $context["newsstate"] : (function () { throw new RuntimeError('Variable "newsstate" does not exist.', 155, $this->source); })()), null)) {
            // line 156
            echo "                                Pas de Notifications.
                                ";
        } else {
            // line 158
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newsstate"]) || array_key_exists("newsstate", $context) ? $context["newsstate"] : (function () { throw new RuntimeError('Variable "newsstate" does not exist.', 158, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 159
                echo "                                    <tr class=\"notif\">
                                    <td><span>⚠ article n°";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 160), "html", null, true);
                echo " à publier</span></td>
                                    </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                            ";
        }
        echo "        
                        </table>

                            </div>
                        </div>
                    </div>

                    <div class=\"col-8 col-sm-8 col-md-7 col-lg-7 col-xl-4 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    folder_shared
                                </span>&nbsp;documents partagés</div>
                            <div class=\"simplebloccontent freesize\">
                                ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formdoc"]) || array_key_exists("formdoc", $context) ? $context["formdoc"] : (function () { throw new RuntimeError('Variable "formdoc" does not exist.', 177, $this->source); })()), 'form');
        echo "
                                <hr>

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
                                                    <div style=\"display:flex;align-items:center;\">
                                                        <span class=\"material-icons\">
                                                            save_alt
                                                        </span>&nbsp;Mes Documents</div>
                                                </button>
                                            </h2>
                                        </div>

                                        <div
                                            id=\"collapseOne\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingOne\"
                                            data-parent=\"#accordionExample\">
                                            <div class=\"card-body\">

                                                ";
        // line 206
        if (0 === twig_compare((isset($context["persodoc"]) || array_key_exists("persodoc", $context) ? $context["persodoc"] : (function () { throw new RuntimeError('Variable "persodoc" does not exist.', 206, $this->source); })()), null)) {
            // line 207
            echo "                                                    Aucun document pour le moment.
                                                ";
        } else {
            // line 209
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persodoc"]) || array_key_exists("persodoc", $context) ? $context["persodoc"] : (function () { throw new RuntimeError('Variable "persodoc" does not exist.', 209, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 210
                echo "                                                        -
                                                        <b>
                                                            <a class=\"secondlink\" href=\"../docs/";
                // line 212
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "docname", [], "any", false, false, false, 212), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "docname", [], "any", false, false, false, 212), "html", null, true);
                echo "</a>
                                                        </b>&nbsp;<span class=\"material-icons\" style=\"font-size:10px\">open_in_new</span><br>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                                                ";
        }
        // line 216
        echo "
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
                                                    <div style=\"display:flex;align-items:center;\">
                                                        <span class=\"material-icons\">
                                                            save_alt
                                                        </span>&nbsp;Tous les documents</div>
                                                </button>
                                            </h2>
                                        </div>
                                        <div
                                            id=\"collapseTwo\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingTwo\"
                                            data-parent=\"#accordionExample\">
                                            <div class=\"card-body\">
                                                ";
        // line 243
        if (0 === twig_compare((isset($context["alldocs"]) || array_key_exists("alldocs", $context) ? $context["alldocs"] : (function () { throw new RuntimeError('Variable "alldocs" does not exist.', 243, $this->source); })()), null)) {
            // line 244
            echo "                                                    Aucun document pour le moment.
                                                ";
        } else {
            // line 246
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alldocs"]) || array_key_exists("alldocs", $context) ? $context["alldocs"] : (function () { throw new RuntimeError('Variable "alldocs" does not exist.', 246, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 247
                echo "                                                        -
                                                        <b>
                                                            <a class=\"secondlink\" href=\"../docs/";
                // line 249
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "docname", [], "any", false, false, false, 249), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "docname", [], "any", false, false, false, 249), "html", null, true);
                echo "</a>
                                                        </b>&nbsp;<span class=\"material-icons\" style=\"font-size:10px\">open_in_new</span><br>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                                                ";
        }
        // line 253
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    edit
                                </span>&nbsp;éditer des documents</div>
                            <div class=\"simplebloccontent\">
                               <a href=\"";
        // line 270
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exportpdf");
        echo "\" class=\"secondlink\">Tester export PDF</a><br>
                               Mettre ici les bouttons de téléchargement des fichiers tels que les feuilles de matchs etc..
                            <br>
                            Peut etre modifications de fichiers en ligne 
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 270,  474 => 253,  471 => 252,  460 => 249,  456 => 247,  451 => 246,  447 => 244,  445 => 243,  416 => 216,  413 => 215,  402 => 212,  398 => 210,  393 => 209,  389 => 207,  387 => 206,  355 => 177,  337 => 163,  328 => 160,  325 => 159,  320 => 158,  316 => 156,  314 => 155,  298 => 141,  295 => 140,  284 => 135,  280 => 134,  274 => 131,  271 => 130,  266 => 129,  256 => 121,  254 => 120,  205 => 73,  200 => 71,  197 => 70,  192 => 68,  187 => 67,  185 => 66,  179 => 63,  175 => 62,  169 => 59,  165 => 58,  148 => 43,  146 => 42,  139 => 37,  137 => 36,  133 => 34,  127 => 32,  122 => 30,  117 => 29,  115 => 28,  108 => 23,  102 => 21,  96 => 19,  94 => 18,  89 => 16,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
    {% include '/inc/modalnote.html.twig' %}
    <div id=\"fb-root\"></div>
    <script
        async=\"async\"
        defer=\"defer\"
        crossorigin=\"anonymous\"
        src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\"
        nonce=\"LShEe8er\"></script>

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
                    <div class=\"col-8 col-sm-8 col-md-7 col-lg-7 col-xl-5 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    info
                                </span>&nbsp;Informations</div>
                            <div class=\"simplebloccontent blocksize\">
                                <div class=\"clubcolor\">
                                    <h6>
                                        <b>{{ cmsname }}
                                            {{ version }}</b>
                                    </h6><hr></div>
                                <p>Bienvenu(e)
                                    <b>{{ app.user.firstname }}
                                        {{ app.user.lastname }}</b>
                                    ! Vous êtes sur l'Administration du site internet

                                    {% if club.clubname == '' %}
                                        <b>{{ cmsname }}
                                            {{ version }}</b>
                                    {% else %}
                                        de
                                        <b>{{ club.clubname }}</b>
                                    {% endif %}
                                    . Vous trouverez dans cet espace tout ce dont vous avez besoin pour gérer votre
                                    site comme il se doit. Vous pourrez ajouter des articles, des joueurs, etc...</p>
                                <p>Vous pouvez trouver
                                    <b>
                                        <a href=\"#\" class=\"secondlink\">ici</a>
                                    </b>
                                    une vidéo explicative sur la prise en main de l'Administration.</p>
                                <p>Si cependant des questions persistent, vous pouvez nous contacter par mail
                                    <b>
                                        <a
                                            href=\"mailto:contact@kellian-chamouard.fr?subject=HELP CENTER SITE : Belvèze Razes XIII\"
                                            class=\"secondlink\">ici</a>
                                    </b>
                                    ou par téléphone
                                    <b>
                                        <a href=\"tel:0778907411\" class=\"secondlink\">ici</a>
                                    </b>.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-4 col-sm-4 col-md-5 col-lg-5 col-xl-7 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    notes
                                </span>&nbsp;notes
                                <a
                                    href=\"#\"
                                    data-toggle=\"modal\"
                                    data-target=\"#exampleModal\"
                                    style=\"color:var(--first-color);font-weight:bolder;\">
                                    <span
                                        class=\"badge badge-primary\"
                                        style=\"background-color:var(--first-color);width:13px;\">+</span>
                                </a>
                            </div>
                            <div class=\"simplebloccontent scrollon blocksize\">

                                <div class=\"alert alert-clubcolor alert-dismissible fade show\" role=\"alert\">

                                    <b>⚠</b>
                                    Pensez à bien tenir à jour toutes les informations du club ainsi que tous les
                                    matchs et résultats.

                                </div>

                                {% if notes == NULL %}

                                    <div class=\"alert alert-clubcolor alert-dismissible fade show\" role=\"alert\">

                                        Pas de note pour le moment ! Ajoutez-en une !

                                    </div>

                                {% else %}
                                    {% for id in notes %}
                                        <div class=\"alert alert-clubcolor alert-dismissible fade show\" role=\"alert\">
                                            <strong class=\"clubcolor\">{{ id.datenote }}
                                                :
                                            </strong>
                                            {{ id.contentnote }}
                                            <a type=\"button\" class=\"close\" aria-label=\"Close\" href=\"{{ path('delete_note', { 'id': id.id }) }}\">
                                                <span aria-hidden=\"true\">&times;</span>
                                            </a>
                                        </div>
                                    {% endfor %}
                                {% endif %}

                            </div>
                        </div>
                    </div>

                    <div class=\"col-4 col-sm-4 col-md-5 col-lg-5 col-xl-4 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    notification_important
                                </span>&nbsp;Notifications</div>
                            <div class=\"simplebloccontent blocksize\">

                        <table>
                            {% if newsstate == NULL %}
                                Pas de Notifications.
                                {% else %}
                                    {% for id in newsstate %}
                                    <tr class=\"notif\">
                                    <td><span>⚠ article n°{{ id.id }} à publier</span></td>
                                    </tr>
                                    {% endfor %}
                            {% endif %}        
                        </table>

                            </div>
                        </div>
                    </div>

                    <div class=\"col-8 col-sm-8 col-md-7 col-lg-7 col-xl-4 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    folder_shared
                                </span>&nbsp;documents partagés</div>
                            <div class=\"simplebloccontent freesize\">
                                {{ (form(formdoc)) }}
                                <hr>

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
                                                    <div style=\"display:flex;align-items:center;\">
                                                        <span class=\"material-icons\">
                                                            save_alt
                                                        </span>&nbsp;Mes Documents</div>
                                                </button>
                                            </h2>
                                        </div>

                                        <div
                                            id=\"collapseOne\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingOne\"
                                            data-parent=\"#accordionExample\">
                                            <div class=\"card-body\">

                                                {% if persodoc == NULL %}
                                                    Aucun document pour le moment.
                                                {% else %}
                                                    {% for id in persodoc %}
                                                        -
                                                        <b>
                                                            <a class=\"secondlink\" href=\"../docs/{{ id.docname }}\">{{ id.docname }}</a>
                                                        </b>&nbsp;<span class=\"material-icons\" style=\"font-size:10px\">open_in_new</span><br>
                                                    {% endfor %}
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
                                                    <div style=\"display:flex;align-items:center;\">
                                                        <span class=\"material-icons\">
                                                            save_alt
                                                        </span>&nbsp;Tous les documents</div>
                                                </button>
                                            </h2>
                                        </div>
                                        <div
                                            id=\"collapseTwo\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingTwo\"
                                            data-parent=\"#accordionExample\">
                                            <div class=\"card-body\">
                                                {% if alldocs == NULL %}
                                                    Aucun document pour le moment.
                                                {% else %}
                                                    {% for id in alldocs %}
                                                        -
                                                        <b>
                                                            <a class=\"secondlink\" href=\"../docs/{{ id.docname }}\">{{ id.docname }}</a>
                                                        </b>&nbsp;<span class=\"material-icons\" style=\"font-size:10px\">open_in_new</span><br>
                                                    {% endfor %}
                                                {% endif %}

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    edit
                                </span>&nbsp;éditer des documents</div>
                            <div class=\"simplebloccontent\">
                               <a href=\"{{ path('exportpdf') }}\" class=\"secondlink\">Tester export PDF</a><br>
                               Mettre ici les bouttons de téléchargement des fichiers tels que les feuilles de matchs etc..
                            <br>
                            Peut etre modifications de fichiers en ligne 
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    {% endblock %}", "home/index.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/index.html.twig");
    }
}
