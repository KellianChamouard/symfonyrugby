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

/* home/social.html.twig */
class __TwigTemplate_9bb490bc36fac1ce98870d3698d98efadc02df73fb822bc5a6339b34bfc7085a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/social.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/social.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/social.html.twig", 1);
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
        $this->loadTemplate("/inc/modal.html.twig", "home/social.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/social.html.twig", 4)->display($context);
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
        $this->loadTemplate("inc/nav.html.twig", "home/social.html.twig", 22)->display($context);
        // line 23
        echo "        </div>

        <div class=\"block\">

            ";
        // line 27
        $this->loadTemplate("inc/navtop.html.twig", "home/social.html.twig", 27)->display($context);
        // line 28
        echo "
            <div class=\"restpage\">

                <div class=\"container-fluid\">

                    <div class=\"row\">

                        <div class=\"col-4 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        people
                                    </span>&nbsp;Réseaux Sociaux</div>

                                <div class=\"simplebloccontent\">
                                    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form');
        echo "
                                </div>
                                </div>

                            </div>

                             <div class=\"col-8 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        camera_alt
                                    </span>&nbsp;instagram</div>

                                <div class=\"simplebloccontent\">
                                    installer api instagram
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
        return "home/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 43,  127 => 28,  125 => 27,  119 => 23,  117 => 22,  114 => 21,  109 => 19,  102 => 17,  100 => 16,  93 => 11,  87 => 10,  81 => 8,  77 => 7,  73 => 5,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
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

                        <div class=\"col-4 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        people
                                    </span>&nbsp;Réseaux Sociaux</div>

                                <div class=\"simplebloccontent\">
                                    {{ form(form) }}
                                </div>
                                </div>

                            </div>

                             <div class=\"col-8 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        camera_alt
                                    </span>&nbsp;instagram</div>

                                <div class=\"simplebloccontent\">
                                    installer api instagram
                                </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

{% endblock %}
", "home/social.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/social.html.twig");
    }
}
