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
class __TwigTemplate_8d979f83d7520bca0a37f2fc92fcb6098cdbb1c7f46252cb30edcc02ef0cb49f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "    ";
        $this->loadTemplate("/inc/modal.html.twig", "home/social.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("/inc/modaldeco.html.twig", "home/social.html.twig", 4)->display($context);
        // line 5
        echo "    <div class=\"leftbar\">

        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <center>
                ";
        // line 9
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "sitelogo", [], "any", false, false, false, 9), "")) {
            // line 10
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        } else {
            // line 12
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "sitelogo", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"logo\"/>
                ";
        }
        // line 14
        echo "            </center><br></a>

        <div class=\"pagename\">administration</div>

        <div class=\"clubname\">
            ";
        // line 19
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 19, $this->source); })()), "clubname", [], "any", false, false, false, 19), "")) {
            // line 20
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "
                ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "
            ";
        } else {
            // line 23
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 23, $this->source); })()), "clubname", [], "any", false, false, false, 23), "html", null, true);
            echo "
            ";
        }
        // line 25
        echo "        </div>
        ";
        // line 26
        $this->loadTemplate("inc/nav.html.twig", "home/social.html.twig", 26)->display($context);
        // line 27
        echo "    </div>

    <div class=\"block\">

        ";
        // line 31
        $this->loadTemplate("inc/navtop.html.twig", "home/social.html.twig", 31)->display($context);
        // line 32
        echo "
        <div class=\"restpage\">

            <div class=\"container-fluid\">

                <div class=\"row\">

                    <div class=\"col-12 padd\">
                        <div class=\"simplebloc\">
                            <div class=\"simplebloctitle\">
                                <span class=\"material-icons\">
                                    people
                                </span>&nbsp;Réseaux Sociaux</div>

                            <div class=\"simplebloccontent\">
                                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form');
        echo "
                                </div>
                            </div>

                        </div>

                        <div class=\"col-12 padd\">
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

                        <div class=\"col-4 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        rss_feed
                                    </span>&nbsp;Facebook</div>
                                ";
        // line 73
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["social"]) || array_key_exists("social", $context) ? $context["social"] : (function () { throw new RuntimeError('Variable "social" does not exist.', 73, $this->source); })()), "facebook", [], "any", false, false, false, 73), "")) {
            // line 74
            echo "                                <div class=\"simplebloccontent\">
                                    Veuillez renseigner un lien facebook.
                                    ";
        } else {
            // line 77
            echo "                                    <div class=\"simplebloccontent nopadd center\">
                                        <div
                                            class=\"fb-page\"
                                            data-href=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["social"]) || array_key_exists("social", $context) ? $context["social"] : (function () { throw new RuntimeError('Variable "social" does not exist.', 80, $this->source); })()), "facebook", [], "any", false, false, false, 80), "html", null, true);
            echo "\"
                                            data-tabs=\"timeline\"
                                            data-width=\"\"
                                            data-height=\"300px\"
                                            data-small-header=\"false\"
                                            data-adapt-container-width=\"true\"
                                            data-hide-cover=\"false\"
                                            data-show-facepile=\"true\">
                                            <blockquote
                                                cite=\"https://www.facebook.com/BelvezeRazes13\"
                                                class=\"fb-xfbml-parse-ignore\">
                                                <a href=\"https://www.facebook.com/BelvezeRazes13\">Belvèze Razes XIII MJC</a>
                                            </blockquote>
                                        </div>
                                    ";
        }
        // line 95
        echo "                                    </div>
                                </div>
                            </div>

                                                    <div class=\"col-4 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        rss_feed
                                    </span>&nbsp;Twitter</div>
                            
                                <div class=\"simplebloccontent\">
                                   Inserer api twitter
                                    </div>
                                </div>
                            </div>


                                                    <div class=\"col-4 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        rss_feed
                                    </span>&nbsp;Youtube</div>
                            
                                <div class=\"simplebloccontent\">
                                   Inserer api twitter
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

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "
                <div id=\"fb-root\"></div>
                <script
                    async=\"async\"
                    defer=\"defer\"
                    crossorigin=\"anonymous\"
                    src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\"
                    nonce=\"urCcckdW\"></script>

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
        return array (  269 => 135,  259 => 134,  212 => 95,  194 => 80,  189 => 77,  184 => 74,  182 => 73,  153 => 47,  136 => 32,  134 => 31,  128 => 27,  126 => 26,  123 => 25,  117 => 23,  112 => 21,  107 => 20,  105 => 19,  98 => 14,  92 => 12,  86 => 10,  84 => 9,  79 => 7,  75 => 5,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% include '/inc/modal.html.twig' %}
    {% include '/inc/modaldeco.html.twig' %}
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
                                    people
                                </span>&nbsp;Réseaux Sociaux</div>

                            <div class=\"simplebloccontent\">
                                {{ form(form) }}
                                </div>
                            </div>

                        </div>

                        <div class=\"col-12 padd\">
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

                        <div class=\"col-4 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        rss_feed
                                    </span>&nbsp;Facebook</div>
                                {% if social.facebook == \"\" %}
                                <div class=\"simplebloccontent\">
                                    Veuillez renseigner un lien facebook.
                                    {% else %}
                                    <div class=\"simplebloccontent nopadd center\">
                                        <div
                                            class=\"fb-page\"
                                            data-href=\"{{ social.facebook }}\"
                                            data-tabs=\"timeline\"
                                            data-width=\"\"
                                            data-height=\"300px\"
                                            data-small-header=\"false\"
                                            data-adapt-container-width=\"true\"
                                            data-hide-cover=\"false\"
                                            data-show-facepile=\"true\">
                                            <blockquote
                                                cite=\"https://www.facebook.com/BelvezeRazes13\"
                                                class=\"fb-xfbml-parse-ignore\">
                                                <a href=\"https://www.facebook.com/BelvezeRazes13\">Belvèze Razes XIII MJC</a>
                                            </blockquote>
                                        </div>
                                    {% endif %}
                                    </div>
                                </div>
                            </div>

                                                    <div class=\"col-4 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        rss_feed
                                    </span>&nbsp;Twitter</div>
                            
                                <div class=\"simplebloccontent\">
                                   Inserer api twitter
                                    </div>
                                </div>
                            </div>


                                                    <div class=\"col-4 padd\">
                            <div class=\"simplebloc\">
                                <div class=\"simplebloctitle\">
                                    <span class=\"material-icons\">
                                        rss_feed
                                    </span>&nbsp;Youtube</div>
                            
                                <div class=\"simplebloccontent\">
                                   Inserer api twitter
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            {% endblock %}

            {% block javascripts %}

                <div id=\"fb-root\"></div>
                <script
                    async=\"async\"
                    defer=\"defer\"
                    crossorigin=\"anonymous\"
                    src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\"
                    nonce=\"urCcckdW\"></script>

            {% endblock %}", "home/social.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/home/social.html.twig");
    }
}
