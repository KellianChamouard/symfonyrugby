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

/* home/staff.html.twig */
class __TwigTemplate_d733d7c11302a9b8743fc4f6163e7b5b2ac67b771a4e15ea49e9127a518885c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/staff.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/staff.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/staff.html.twig", 1);
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
        $this->loadTemplate("/inc/modal.html.twig", "home/staff.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/staff.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("/inc/addstaffmodal.html.twig", "home/staff.html.twig", 5)->display($context);
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
        $this->loadTemplate("inc/nav.html.twig", "home/staff.html.twig", 27)->display($context);
        // line 28
        echo "    </div>

    <div class=\"block\">

        ";
        // line 32
        $this->loadTemplate("inc/navtop.html.twig", "home/staff.html.twig", 32)->display($context);
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
                                </span>&nbsp;Staff</div>

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
                                                ENTRAINEURS
                                            </button>
                                        </h2>
                                    </div>

                                    <div
                                        id=\"collapseTwo\"
                                        class=\"collapse\"
                                        aria-labelledby=\"headingTwo\"
                                        data-parent=\"#accordionExample\">
                                    
                                            ";
        // line 69
        if (0 === twig_compare((isset($context["entraineurs"]) || array_key_exists("entraineurs", $context) ? $context["entraineurs"] : (function () { throw new RuntimeError('Variable "entraineurs" does not exist.', 69, $this->source); })()), null)) {
            // line 70
            echo "                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal20\">
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
                                                        <th>
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal20\">
                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                        </th>
                                                    </tr>
                                                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entraineurs"]) || array_key_exists("entraineurs", $context) ? $context["entraineurs"] : (function () { throw new RuntimeError('Variable "entraineurs" does not exist.', 85, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 86
                echo "                                                        <tr>
                                                            <td><img src=\"../docs/";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "StaffPhoto", [], "any", false, false, false, 87), "html", null, true);
                echo "\"/></td>
                                                            <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "StaffName", [], "any", false, false, false, 88)), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "StaffFirstname", [], "any", false, false, false, 89)), "html", null, true);
                echo "</td>
                                                            <td>
                                                                <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_staff", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 91)]), "html", null, true);
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
            // line 104
            echo "                                                </table>
                                            ";
        }
        // line 106
        echo "                                        </div>
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
                                                CO-ENTRAINEURS
                                            </button>
                                        </h2>
                                    </div>

                                    <div
                                        id=\"collapseOne\"
                                        class=\"collapse\"
                                        aria-labelledby=\"headingOne\"
                                        data-parent=\"#accordionExample\">
                                    
                                           ";
        // line 130
        if (0 === twig_compare((isset($context["coentraineurs"]) || array_key_exists("coentraineurs", $context) ? $context["coentraineurs"] : (function () { throw new RuntimeError('Variable "coentraineurs" does not exist.', 130, $this->source); })()), null)) {
            // line 131
            echo "                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal20\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                ";
        } else {
            // line 135
            echo "                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th>
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal20\">
                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                        </th>
                                                    </tr>
                                                    ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coentraineurs"]) || array_key_exists("coentraineurs", $context) ? $context["coentraineurs"] : (function () { throw new RuntimeError('Variable "coentraineurs" does not exist.', 146, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 147
                echo "                                                        <tr>
                                                            <td><img src=\"../docs/";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "StaffPhoto", [], "any", false, false, false, 148), "html", null, true);
                echo "\"/></td>
                                                            <td>";
                // line 149
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "StaffName", [], "any", false, false, false, 149)), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["id"], "StaffFirstname", [], "any", false, false, false, 150)), "html", null, true);
                echo "</td>
                                                            <td>
                                                                <a href=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_staff", ["id" => twig_get_attribute($this->env, $this->source, $context["id"], "id", [], "any", false, false, false, 152)]), "html", null, true);
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
            // line 165
            echo "                                                </table>
                                            ";
        }
        // line 167
        echo "                                        </div>
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
        return "home/staff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 167,  326 => 165,  307 => 152,  302 => 150,  298 => 149,  294 => 148,  291 => 147,  287 => 146,  274 => 135,  268 => 131,  266 => 130,  240 => 106,  236 => 104,  217 => 91,  212 => 89,  208 => 88,  204 => 87,  201 => 86,  197 => 85,  184 => 74,  178 => 70,  176 => 69,  138 => 33,  136 => 32,  130 => 28,  128 => 27,  125 => 26,  119 => 24,  114 => 22,  109 => 21,  107 => 20,  100 => 15,  94 => 13,  88 => 11,  86 => 10,  81 => 8,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
    {% include '/inc/addstaffmodal.html.twig' %}
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
                                </span>&nbsp;Staff</div>

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
                                                ENTRAINEURS
                                            </button>
                                        </h2>
                                    </div>

                                    <div
                                        id=\"collapseTwo\"
                                        class=\"collapse\"
                                        aria-labelledby=\"headingTwo\"
                                        data-parent=\"#accordionExample\">
                                    
                                            {% if entraineurs == NULL %}
                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal20\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                {% else %}
                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th>
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal20\">
                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                        </th>
                                                    </tr>
                                                    {% for id in entraineurs %}
                                                        <tr>
                                                            <td><img src=\"../docs/{{ id.StaffPhoto }}\"/></td>
                                                            <td>{{ id.StaffName|upper }}</td>
                                                            <td>{{ id.StaffFirstname|upper }}</td>
                                                            <td>
                                                                <a href=\"{{ path('delete_staff', { 'id': id.id }) }}\">
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
                                                CO-ENTRAINEURS
                                            </button>
                                        </h2>
                                    </div>

                                    <div
                                        id=\"collapseOne\"
                                        class=\"collapse\"
                                        aria-labelledby=\"headingOne\"
                                        data-parent=\"#accordionExample\">
                                    
                                           {% if coentraineurs == NULL %}
                                                <div class=\"card-body\">
                                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal20\">
                                                        <span class=\"material-icons\">person_add_alt_1</span></a>
                                                {% else %}
                                                <div class=\"card-body nopadd\">
                                                                                    <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th>
                                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal20\">
                                                                <span class=\"material-icons iconwhite\">person_add_alt_1</span></a>
                                                        </th>
                                                    </tr>
                                                    {% for id in coentraineurs %}
                                                        <tr>
                                                            <td><img src=\"../docs/{{ id.StaffPhoto }}\"/></td>
                                                            <td>{{ id.StaffName|upper }}</td>
                                                            <td>{{ id.StaffFirstname|upper }}</td>
                                                            <td>
                                                                <a href=\"{{ path('delete_staff', { 'id': id.id }) }}\">
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

        {% endblock %}", "home/staff.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/staff.html.twig");
    }
}
