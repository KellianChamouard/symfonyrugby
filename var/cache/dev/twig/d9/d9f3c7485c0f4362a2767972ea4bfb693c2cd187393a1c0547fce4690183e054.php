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
class __TwigTemplate_e383e8ea55baed2bcff774b1d372c419ac68c0bb1f7bda8d04f7e80050ac5af6 extends Template
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
        $this->loadTemplate("/inc/modal.html.twig", "home/staff.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/staff.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"leftbar\">

            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><center>";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "sitelogo", [], "any", false, false, false, 7), "")) {
            // line 8
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                                            ";
        } else {
            // line 10
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 10, $this->source); })()), "sitelogo", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"logo\"/>
                                            ";
        }
        // line 11
        echo "</center><br></a>

            <div class=\"pagename\">administration</div>

<div class=\"clubname\">
            ";
        // line 16
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 16, $this->source); })()), "clubname", [], "any", false, false, false, 16), "")) {
            // line 17
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 17, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "
";
        } else {
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 19, $this->source); })()), "clubname", [], "any", false, false, false, 19), "html", null, true);
            echo "
";
        }
        // line 21
        echo "            </div>
";
        // line 22
        $this->loadTemplate("inc/nav.html.twig", "home/staff.html.twig", 22)->display($context);
        // line 23
        echo "        </div>

        <div class=\"block\">

            ";
        // line 27
        $this->loadTemplate("inc/navtop.html.twig", "home/staff.html.twig", 27)->display($context);
        // line 28
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
                                            <div class=\"card-body nopadd\">
                                                <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th><a href=\"add_staff.php\">
                                                <span class=\"material-icons iconwhite\">post_add</span></a></th>
                                                    </tr>
                                                    <tr>
                                                        <td><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/></td>
                                                        <td>Lorem ipsum</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>
                                                            <a href=\"#\">
                                                                <span class=\"material-icons\">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href=\"modif_staff.php\">
                                                                <span class=\"material-icons\">
                                                                    edit
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/></td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>
                                                            <a href=\"#\">
                                                                <span class=\"material-icons\">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href=\"modif_staff.php\">
                                                                <span class=\"material-icons\">
                                                                    edit
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
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
                                            <div class=\"card-body nopadd\">
                                                <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th><a href=\"add_staff.php\">
                                                <span class=\"material-icons iconwhite\">post_add</span></a></th>
                                                    </tr>
                                                    <tr>
                                                        <td><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/></td>
                                                        <td>Lorem ipsum</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>
                                                            <a href=\"#\">
                                                                <span class=\"material-icons\">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href=\"modif_staff.php\">
                                                                <span class=\"material-icons\">
                                                                    edit
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/></td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>
                                                            <a href=\"#\">
                                                                <span class=\"material-icons\">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href=\"modif_staff.php\">
                                                                <span class=\"material-icons\">
                                                                    edit
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
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
        return array (  267 => 157,  247 => 140,  194 => 90,  174 => 73,  127 => 28,  125 => 27,  119 => 23,  117 => 22,  114 => 21,  109 => 19,  102 => 17,  100 => 16,  93 => 11,  87 => 10,  81 => 8,  77 => 7,  73 => 5,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
{% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
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
                                            <div class=\"card-body nopadd\">
                                                <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th><a href=\"add_staff.php\">
                                                <span class=\"material-icons iconwhite\">post_add</span></a></th>
                                                    </tr>
                                                    <tr>
                                                        <td><img src=\"{{ asset('images/logo.png') }}\"/></td>
                                                        <td>Lorem ipsum</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>
                                                            <a href=\"#\">
                                                                <span class=\"material-icons\">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href=\"modif_staff.php\">
                                                                <span class=\"material-icons\">
                                                                    edit
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src=\"{{ asset('images/logo.png') }}\"/></td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>
                                                            <a href=\"#\">
                                                                <span class=\"material-icons\">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href=\"modif_staff.php\">
                                                                <span class=\"material-icons\">
                                                                    edit
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
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
                                            <div class=\"card-body nopadd\">
                                                <table>
                                                    <tr>
                                                        <th>PHOTO</th>
                                                        <th>NOM</th>
                                                        <th>PRÉNOM</th>
                                                        <th><a href=\"add_staff.php\">
                                                <span class=\"material-icons iconwhite\">post_add</span></a></th>
                                                    </tr>
                                                    <tr>
                                                        <td><img src=\"{{ asset('images/logo.png') }}\"/></td>
                                                        <td>Lorem ipsum</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>
                                                            <a href=\"#\">
                                                                <span class=\"material-icons\">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href=\"modif_staff.php\">
                                                                <span class=\"material-icons\">
                                                                    edit
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src=\"{{ asset('images/logo.png') }}\"/></td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>Lorem Ipsum</td>
                                                        <td>
                                                            <a href=\"#\">
                                                                <span class=\"material-icons\">
                                                                    delete
                                                                </span>
                                                            </a>
                                                            <a href=\"modif_staff.php\">
                                                                <span class=\"material-icons\">
                                                                    edit
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

{% endblock %}
", "home/staff.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/staff.html.twig");
    }
}
