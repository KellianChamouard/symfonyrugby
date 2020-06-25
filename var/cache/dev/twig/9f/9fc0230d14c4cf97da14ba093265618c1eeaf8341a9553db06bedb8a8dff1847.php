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

/* inc/nav.html.twig */
class __TwigTemplate_74a198ff087282085a0bf36c1b4e4259104af4ca313522f90e53543976ecf859 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/nav.html.twig"));

        // line 1
        echo "<ul>
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
        <li>
            <span class=\"material-icons\">home</span>Accueil</li>
    </a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles");
        echo "\">
        <li>
            <span class=\"material-icons\">description</span>Articles</li>
    </a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueurs");
        echo "\">
        <li>
            <span class=\"material-icons\">person</span>les joueurs</li>
    </a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("staff");
        echo "\">
        <li>
            <span class=\"material-icons\">person</span>les staffs</li>
    </a>
    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dirigeants");
        echo "\">
        <li>
            <span class=\"material-icons\">person</span>les dirigeants</li>
    </a>
    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("social");
        echo "\">
        <li>
            <span class=\"material-icons\">people</span>réseaux sociaux</li>
    </a>
    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saison");
        echo "\">
        <li>
            <span class=\"material-icons\">event</span>saison</li>
    </a>
    ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateurs");
            echo "\">
            <li>
                <span class=\"material-icons\">accessibility_new</span>
                utilisateurs</li>
        </a>
        <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club");
            echo "\">
            <li>
                <span class=\"material-icons\">settings</span>le club</li>
        </a>

        <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
            echo "\">
            <li>
                <span class=\"material-icons\">settings</span>le site</li>
        </a>
    ";
        } else {
            // line 46
            echo "    ";
        }
        // line 47
        echo "</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  122 => 46,  114 => 41,  106 => 36,  97 => 31,  95 => 30,  88 => 26,  81 => 22,  74 => 18,  67 => 14,  60 => 10,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    <a href=\"{{ path('home') }}\">
        <li>
            <span class=\"material-icons\">home</span>Accueil</li>
    </a>
    <a href=\"{{ path('articles') }}\">
        <li>
            <span class=\"material-icons\">description</span>Articles</li>
    </a>
    <a href=\"{{ path('joueurs') }}\">
        <li>
            <span class=\"material-icons\">person</span>les joueurs</li>
    </a>
    <a href=\"{{ path('staff') }}\">
        <li>
            <span class=\"material-icons\">person</span>les staffs</li>
    </a>
    <a href=\"{{ path('dirigeants') }}\">
        <li>
            <span class=\"material-icons\">person</span>les dirigeants</li>
    </a>
    <a href=\"{{ path('social') }}\">
        <li>
            <span class=\"material-icons\">people</span>réseaux sociaux</li>
    </a>
    <a href=\"{{ path('saison') }}\">
        <li>
            <span class=\"material-icons\">event</span>saison</li>
    </a>
    {% if is_granted(\"ROLE_ADMIN\") %}
        <a href=\"{{ path('utilisateurs') }}\">
            <li>
                <span class=\"material-icons\">accessibility_new</span>
                utilisateurs</li>
        </a>
        <a href=\"{{ path('club') }}\">
            <li>
                <span class=\"material-icons\">settings</span>le club</li>
        </a>

        <a href=\"{{ path('site') }}\">
            <li>
                <span class=\"material-icons\">settings</span>le site</li>
        </a>
    {% else %}
    {% endif %}
</ul>", "inc/nav.html.twig", "/Users/kellianchamouard/Desktop/Site BR13 Symfony/belvezerugby/templates/inc/nav.html.twig");
    }
}
