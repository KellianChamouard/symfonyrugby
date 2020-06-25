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

/* home/dirigeants.html.twig */
class __TwigTemplate_62baf47ddfd997ef3e390d75ad4e598c90496575f34474ce6f73a18a56250f7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dirigeants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/dirigeants.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/dirigeants.html.twig", 1);
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
        $this->loadTemplate("/inc/modal.html.twig", "home/dirigeants.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/dirigeants.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("/inc/adddirigmodal.html.twig", "home/dirigeants.html.twig", 5)->display($context);
        // line 6
        echo "<div class=\"leftbar\">

            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><center>";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "sitelogo", [], "any", false, false, false, 8), "")) {
            // line 9
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                                            ";
        } else {
            // line 11
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })()), "sitelogo", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"logo\"/>
                                            ";
        }
        // line 12
        echo "</center><br></a>

            <div class=\"pagename\">administration</div>

<div class=\"clubname\">
            ";
        // line 17
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 17, $this->source); })()), "clubname", [], "any", false, false, false, 17), "")) {
            // line 18
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 18, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "
";
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 20, $this->source); })()), "clubname", [], "any", false, false, false, 20), "html", null, true);
            echo "
";
        }
        // line 22
        echo "            </div>
";
        // line 23
        $this->loadTemplate("inc/nav.html.twig", "home/dirigeants.html.twig", 23)->display($context);
        // line 24
        echo "        </div>

        <div class=\"block\">

            ";
        // line 28
        $this->loadTemplate("inc/navtop.html.twig", "home/dirigeants.html.twig", 28)->display($context);
        // line 29
        echo "
           <div class=\"restpage\">

                <div class=\"container-fluid\">

                    <div class=\"row\">

                        <div class=\"col-12 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        person
                                    </span>&nbsp;Dirigeants</div>

                                <div class=\"accordion\" id=\"accordionExample\">
                                    <div class=\"card\">
                                        <div class=\"card-header\" id=\"headingTwo\">
                                            <h2 class=\"mb-0\">
                                                <button
                                                    class=\"btn btn-link\"
                                                    type=\"button\"
                                                    data-toggle=\"collapse\"
                                                    data-target=\"#collapseTwo\"
                                                    aria-expanded=\"true\"
                                                    aria-controls=\"collapseTwo\">
                                                    PRÉSIDENTS
                                                </button>
                                            </h2>
                                        </div>

                                        <div
                                            id=\"collapseTwo\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingTwo\"
                                            data-parent=\"#accordionExample\">
                                                ";
        // line 64
        if (0 === twig_compare((isset($context["president"]) || array_key_exists("president", $context) ? $context["president"] : (function () { throw new RuntimeError('Variable "president" does not exist.', 64, $this->source); })()), null)) {
            // line 65
            echo "                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal40\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                ";
        } else {
            // line 69
            echo "                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th>
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal40\">
                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                        </th>
                                                    </tr>
                                                    ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["president"]) || array_key_exists("president", $context) ? $context["president"] : (function () { throw new RuntimeError('Variable "president" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 81
                echo "                                                        <tr>
                                                            <td><img src=\"../docs/";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "DirigPhoto", [], "any", false, false, false, 82), "html", null, true);
                echo "\"/></td>
                                                            <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "DirigName", [], "any", false, false, false, 83)), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "DirigFirstname", [], "any", false, false, false, 84)), "html", null, true);
                echo "</td>
                                                            <td>
                                                                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_dirig", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 86)]), "html", null, true);
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
            // line 99
            echo "                                                </table>
                                            ";
        }
        // line 101
        echo "                                            </div>
                                        </div>
                                    </div>
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
                                                    CO-PRÉSIDENTS
                                                </button>
                                            </h2>
                                        </div>

                                        <div
                                            id=\"collapseOne\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingOne\"
                                            data-parent=\"#accordionExample\">
                                            <div class=\"card-body nopadd\">
                                                ";
        // line 125
        if (0 === twig_compare((isset($context["copresident"]) || array_key_exists("copresident", $context) ? $context["copresident"] : (function () { throw new RuntimeError('Variable "copresident" does not exist.', 125, $this->source); })()), null)) {
            // line 126
            echo "                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal40\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                ";
        } else {
            // line 130
            echo "                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th>
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal40\">
                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                        </th>
                                                    </tr>
                                                    ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["copresident"]) || array_key_exists("copresident", $context) ? $context["copresident"] : (function () { throw new RuntimeError('Variable "copresident" does not exist.', 141, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 142
                echo "                                                        <tr>
                                                            <td><img src=\"../docs/";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "DirigPhoto", [], "any", false, false, false, 143), "html", null, true);
                echo "\"/></td>
                                                            <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "DirigName", [], "any", false, false, false, 144)), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 145
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "DirigFirstname", [], "any", false, false, false, 145)), "html", null, true);
                echo "</td>
                                                            <td>
                                                                <a href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_dirig", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 147)]), "html", null, true);
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
            // line 160
            echo "                                                </table>
                                            ";
        }
        // line 162
        echo "                                            </div>
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
        return "home/dirigeants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 162,  317 => 160,  298 => 147,  293 => 145,  289 => 144,  285 => 143,  282 => 142,  278 => 141,  265 => 130,  259 => 126,  257 => 125,  231 => 101,  227 => 99,  208 => 86,  203 => 84,  199 => 83,  195 => 82,  192 => 81,  188 => 80,  175 => 69,  169 => 65,  167 => 64,  130 => 29,  128 => 28,  122 => 24,  120 => 23,  117 => 22,  112 => 20,  105 => 18,  103 => 17,  96 => 12,  90 => 11,  84 => 9,  80 => 8,  76 => 6,  73 => 5,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
    {% include '/inc/adddirigmodal.html.twig' %}
<div class=\"leftbar\">

            <a href=\"{{ path('home') }}\"><center>{% if site.sitelogo == '' %}
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
                                        person
                                    </span>&nbsp;Dirigeants</div>

                                <div class=\"accordion\" id=\"accordionExample\">
                                    <div class=\"card\">
                                        <div class=\"card-header\" id=\"headingTwo\">
                                            <h2 class=\"mb-0\">
                                                <button
                                                    class=\"btn btn-link\"
                                                    type=\"button\"
                                                    data-toggle=\"collapse\"
                                                    data-target=\"#collapseTwo\"
                                                    aria-expanded=\"true\"
                                                    aria-controls=\"collapseTwo\">
                                                    PRÉSIDENTS
                                                </button>
                                            </h2>
                                        </div>

                                        <div
                                            id=\"collapseTwo\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingTwo\"
                                            data-parent=\"#accordionExample\">
                                                {% if president == NULL %}
                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal40\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                {% else %}
                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th>
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal40\">
                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                        </th>
                                                    </tr>
                                                    {% for id in president %}
                                                        <tr>
                                                            <td><img src=\"../docs/{{ id.DirigPhoto }}\"/></td>
                                                            <td>{{ id.DirigName|upper }}</td>
                                                            <td>{{ id.DirigFirstname|upper }}</td>
                                                            <td>
                                                                <a href=\"{{ path('delete_dirig', { 'id': id.id }) }}\">
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
                                        <div class=\"card-header\" id=\"headingOne\">
                                            <h2 class=\"mb-0\">
                                                <button
                                                    class=\"btn btn-link\"
                                                    type=\"button\"
                                                    data-toggle=\"collapse\"
                                                    data-target=\"#collapseOne\"
                                                    aria-expanded=\"true\"
                                                    aria-controls=\"collapseOne\">
                                                    CO-PRÉSIDENTS
                                                </button>
                                            </h2>
                                        </div>

                                        <div
                                            id=\"collapseOne\"
                                            class=\"collapse\"
                                            aria-labelledby=\"headingOne\"
                                            data-parent=\"#accordionExample\">
                                            <div class=\"card-body nopadd\">
                                                {% if copresident == NULL %}
                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal40\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                {% else %}
                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th>
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal40\">
                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                        </th>
                                                    </tr>
                                                    {% for id in copresident %}
                                                        <tr>
                                                            <td><img src=\"../docs/{{ id.DirigPhoto }}\"/></td>
                                                            <td>{{ id.DirigName|upper }}</td>
                                                            <td>{{ id.DirigFirstname|upper }}</td>
                                                            <td>
                                                                <a href=\"{{ path('delete_dirig', { 'id': id.id }) }}\">
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

{% endblock %}
", "home/dirigeants.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/dirigeants.html.twig");
    }
}
