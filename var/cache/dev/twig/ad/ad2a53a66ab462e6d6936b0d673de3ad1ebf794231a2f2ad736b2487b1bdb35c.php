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

/* site/equipe.html.twig */
class __TwigTemplate_4f245716e038bbab578a58d1911ea4beacd27a94258a8927a416a15601b9fd14 extends Template
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
        return "basesite.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/equipe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/equipe.html.twig"));

        $this->parent = $this->loadTemplate("basesite.html.twig", "site/equipe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark\">
        <div class=\"container\">
            <button
                class=\"navbar-toggler navbar-toggler-right border-0 p-0\"
                type=\"button\"
                data-toggle=\"collapse\"
                data-target=\"#navbar14\">
                <p class=\"navbar-brand mb-0 text-white\">
                    <i class=\"fa d-inline fa-lg fa-stop-circle\"></i>
                </p>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbar14\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Articles</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe");
        echo "\">Équipe</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Staff</a>
                    </li>
                </ul>
                <p class=\"d-none d-md-block lead mb-0  text-white\">
                    <i class=\"fa d-inline fa-lg fa-stop-circle\"></i>
                    ";
        // line 33
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 33, $this->source); })()), "sitelogo", [], "any", false, false, false, 33), "")) {
            // line 34
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                    ";
        } else {
            // line 36
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 36, $this->source); })()), "sitelogo", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"logo\"/>
                    ";
        }
        // line 38
        echo "                </p>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fa fa-github fa-fw fa-lg\"></i>Sponsors
                        </a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fa fa-gitlab fa-fw fa-lg\"></i>Galerie
                        </a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fa fa-bitbucket fa-fw fa-lg\"></i>Contact
                        </a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fa fa-github fa-fw fa-lg\"></i>MJC
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     <div class=\"py-5\" >
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"text-center mx-auto col-md-8\">
          <h1 class=\"mb-3\">ÉQUIPE</h1>
          <p class=\"lead\">Vous trouverez ici tous les membres de l'équipe.</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-1.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-2.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-3.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-4.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-3.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-4.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-1.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-2.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-2.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-1.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-4.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-3.svg\"> </div>
      </div>
    </div>
  </div>
<div class=\"py-3 bg-dark\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-4 col-6 p-3\">
            ";
        // line 92
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 92, $this->source); })()), "sitelogo", [], "any", false, false, false, 92), "")) {
            // line 93
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/rscms.png"), "html", null, true);
            echo "\" class=\"logo\"/>
                    ";
        } else {
            // line 95
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 95, $this->source); })()), "sitelogo", [], "any", false, false, false, 95), "html", null, true);
            echo "\" class=\"logo\"/>
                    ";
        }
        // line 97
        echo "        </div>
        <div class=\"col-lg-4 col-6 p-3\">
            <p class=\"\">
            ";
        // line 100
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 100, $this->source); })()), "clubadress", [], "any", false, false, false, 100), "")) {
            // line 101
            echo "                        <a href=\"https://goo.gl/maps/AUq7b9W7yYJ2\" target=\"_blank\" class=\"sec-nav-link\">
                    Fake street, 100
                    <br>NYC - 20179, USA</a>
                    ";
        } else {
            // line 105
            echo "                        <a href=\"https://goo.gl/maps/AUq7b9W7yYJ2\" target=\"_blank\" class=\"sec-nav-link\">
                    ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 106, $this->source); })()), "clubadress", [], "any", false, false, false, 106), "html", null, true);
            echo "</a>
                    ";
        }
        // line 108
        echo "            </p>
            <p>
                        ";
        // line 110
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 110, $this->source); })()), "clubphone", [], "any", false, false, false, 110), "")) {
            // line 111
            echo "                        <a href=\"https://goo.gl/maps/AUq7b9W7yYJ2\" target=\"_blank\" class=\"sec-nav-link\">
                    <a href=\"tel:+246 - 542 550 5462\" class=\"sec-nav-link\">+1 - 256 845 87 86</a>
                    ";
        } else {
            // line 114
            echo "                        <a href=\"tel:+246 - 542 550 5462\" class=\"sec-nav-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 114, $this->source); })()), "clubphone", [], "any", false, false, false, 114), "html", null, true);
            echo "</a>
                    ";
        }
        // line 116
        echo "            
            </p>
            <p class=\"mb-0\">
               ";
        // line 119
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 119, $this->source); })()), "clubmail", [], "any", false, false, false, 119), "")) {
            // line 120
            echo "                        <a href=\"mailto:info@pingendo.com\" class=\"sec-nav-link\">info@pingendo.com</a>
                    ";
        } else {
            // line 122
            echo "                        <a href=\"mailto:info@pingendo.com\" class=\"sec-nav-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 122, $this->source); })()), "clubmail", [], "any", false, false, false, 122), "html", null, true);
            echo "</a>
                    ";
        }
        // line 124
        echo "            </p>
        </div>
        <div class=\"col-md-4 p-3\">
            <h5>
                <b style=\"color:var(--first-color)\">NOUS CONCERNANT</b>
            </h5>
            <p class=\"mb-0\" style=\"color:var(--first-color)\">
            ";
        // line 131
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 131, $this->source); })()), "sitedescription", [], "any", false, false, false, 131), "")) {
            // line 132
            echo "                        I am alone, and feel the charm of existence in this spot, which was created for
                the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                exquisite sense of mere tranquil existence.
                    ";
        } else {
            // line 136
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 136, $this->source); })()), "sitedescription", [], "any", false, false, false, 136), "html", null, true);
            echo "
                    ";
        }
        // line 138
        echo "</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center\" style=\"color:var(--first-color)\">
            <p class=\"mb-0 mt-2\">&copy; ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 143, $this->source); })()), "sitedescription", [], "any", false, false, false, 143), "")) {
            // line 144
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["cmsname"]) || array_key_exists("cmsname", $context) ? $context["cmsname"] : (function () { throw new RuntimeError('Variable "cmsname" does not exist.', 144, $this->source); })()), "html", null, true);
            echo ". Tous droits réservés.
                    ";
        } else {
            // line 146
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 146, $this->source); })()), "clubname", [], "any", false, false, false, 146), "html", null, true);
            echo "
                    ";
        }
        // line 147
        echo "</p>
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
        return "site/equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 147,  281 => 146,  275 => 144,  271 => 143,  264 => 138,  258 => 136,  252 => 132,  250 => 131,  241 => 124,  235 => 122,  231 => 120,  229 => 119,  224 => 116,  218 => 114,  213 => 111,  211 => 110,  207 => 108,  202 => 106,  199 => 105,  193 => 101,  191 => 100,  186 => 97,  180 => 95,  174 => 93,  172 => 92,  116 => 38,  110 => 36,  104 => 34,  102 => 33,  91 => 25,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basesite.html.twig' %}

{% block body %}

    <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark\">
        <div class=\"container\">
            <button
                class=\"navbar-toggler navbar-toggler-right border-0 p-0\"
                type=\"button\"
                data-toggle=\"collapse\"
                data-target=\"#navbar14\">
                <p class=\"navbar-brand mb-0 text-white\">
                    <i class=\"fa d-inline fa-lg fa-stop-circle\"></i>
                </p>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbar14\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Articles</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('equipe') }}\">Équipe</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Staff</a>
                    </li>
                </ul>
                <p class=\"d-none d-md-block lead mb-0  text-white\">
                    <i class=\"fa d-inline fa-lg fa-stop-circle\"></i>
                    {% if site.sitelogo == '' %}
                        <img src=\"{{ asset('../images/rscms.png') }}\" class=\"logo\"/>
                    {% else %}
                        <img src=\"{{ site.sitelogo }}\" class=\"logo\"/>
                    {% endif %}
                </p>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fa fa-github fa-fw fa-lg\"></i>Sponsors
                        </a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fa fa-gitlab fa-fw fa-lg\"></i>Galerie
                        </a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fa fa-bitbucket fa-fw fa-lg\"></i>Contact
                        </a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"fa fa-github fa-fw fa-lg\"></i>MJC
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     <div class=\"py-5\" >
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"text-center mx-auto col-md-8\">
          <h1 class=\"mb-3\">ÉQUIPE</h1>
          <p class=\"lead\">Vous trouverez ici tous les membres de l'équipe.</p>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-1.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-2.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-3.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-4.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-3.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-4.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-1.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-2.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-2.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-1.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-4.svg\"> </div>
        <div class=\"col-lg-3 col-md-6 p-3\"> <img class=\"img-fluid d-block\" src=\"https://static.pingendo.com/img-placeholder-3.svg\"> </div>
      </div>
    </div>
  </div>
<div class=\"py-3 bg-dark\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-4 col-6 p-3\">
            {% if site.sitelogo == '' %}
                        <img src=\"{{ asset('../images/rscms.png') }}\" class=\"logo\"/>
                    {% else %}
                        <img src=\"{{ site.sitelogo }}\" class=\"logo\"/>
                    {% endif %}
        </div>
        <div class=\"col-lg-4 col-6 p-3\">
            <p class=\"\">
            {% if club.clubadress == '' %}
                        <a href=\"https://goo.gl/maps/AUq7b9W7yYJ2\" target=\"_blank\" class=\"sec-nav-link\">
                    Fake street, 100
                    <br>NYC - 20179, USA</a>
                    {% else %}
                        <a href=\"https://goo.gl/maps/AUq7b9W7yYJ2\" target=\"_blank\" class=\"sec-nav-link\">
                    {{ club.clubadress }}</a>
                    {% endif %}
            </p>
            <p>
                        {% if club.clubphone == '' %}
                        <a href=\"https://goo.gl/maps/AUq7b9W7yYJ2\" target=\"_blank\" class=\"sec-nav-link\">
                    <a href=\"tel:+246 - 542 550 5462\" class=\"sec-nav-link\">+1 - 256 845 87 86</a>
                    {% else %}
                        <a href=\"tel:+246 - 542 550 5462\" class=\"sec-nav-link\">{{ club.clubphone }}</a>
                    {% endif %}
            
            </p>
            <p class=\"mb-0\">
               {% if club.clubmail == '' %}
                        <a href=\"mailto:info@pingendo.com\" class=\"sec-nav-link\">info@pingendo.com</a>
                    {% else %}
                        <a href=\"mailto:info@pingendo.com\" class=\"sec-nav-link\">{{ club.clubmail }}</a>
                    {% endif %}
            </p>
        </div>
        <div class=\"col-md-4 p-3\">
            <h5>
                <b style=\"color:var(--first-color)\">NOUS CONCERNANT</b>
            </h5>
            <p class=\"mb-0\" style=\"color:var(--first-color)\">
            {% if site.sitedescription == '' %}
                        I am alone, and feel the charm of existence in this spot, which was created for
                the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the
                exquisite sense of mere tranquil existence.
                    {% else %}
                        {{ site.sitedescription }}
                    {% endif %}
</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 text-center\" style=\"color:var(--first-color)\">
            <p class=\"mb-0 mt-2\">&copy; {{ \"now\"|date(\"Y\") }} {% if site.sitedescription == '' %}
                        {{ cmsname }}. Tous droits réservés.
                    {% else %}
                        {{ club.clubname }}
                    {% endif %}</p>
        </div>
    </div>
</div>
</div>

{% endblock %}", "site/equipe.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/site/equipe.html.twig");
    }
}
