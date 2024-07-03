<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* elements/navigation.html.twig */
class __TwigTemplate_f2263877e4f5ed9f2b9829dd160647ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/navigation.html.twig"));

        // line 1
        yield "<div class=\"container\">

    <nav class=\"navbar navbar-expand-lg navbar-light\" >
        <div class=\"container-fluid\">
            <span class=\"navbar-brand\">
                <a href=\"https://www.igdj-hh.de/\" title=\"Website des Instituts für die Geschichte der deutschen Juden\">
                     <img class=\"brand-image\" src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/igdj-logo.png"), "html", null, true);
        yield "\" width=\"160\" height=\"90\" alt=\"Logo des Instituts für die Geschichte des deutschen Juden\">
                </a>
                <h1 class=\"brand-text\">Holocaust in Ungarn und Deportationen<br/> nach Norddeutschland 1944</h1>
            </span>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\" title=\"Startseite\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" class=\"nav-link\"
                           title=\"Kartenansicht\">Orte</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" class=\"nav-link\" title=\"Deportationsrouten\">Deportationsrouten</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" class=\"nav-link\"
                           title=\"Biografien\">Biografien</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" class=\"nav-link\" title=\"Was wir wissen und was wir nicht wissen\">Quellen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" class=\"nav-link\"
                           title=\"Historischer Kontext\">Historischer&nbsp;Kontext</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\"
                           title=\"Projektkontext\">HUNGMEM</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  104 => 38,  97 => 34,  91 => 31,  84 => 27,  78 => 24,  71 => 20,  65 => 17,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

    <nav class=\"navbar navbar-expand-lg navbar-light\" >
        <div class=\"container-fluid\">
            <span class=\"navbar-brand\">
                <a href=\"https://www.igdj-hh.de/\" title=\"Website des Instituts für die Geschichte der deutschen Juden\">
                     <img class=\"brand-image\" src=\"{{ asset('images/logos/igdj-logo.png') }}\" width=\"160\" height=\"90\" alt=\"Logo des Instituts für die Geschichte des deutschen Juden\">
                </a>
                <h1 class=\"brand-text\">Holocaust in Ungarn und Deportationen<br/> nach Norddeutschland 1944</h1>
            </span>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_home') }}\" class=\"nav-link\" title=\"Startseite\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_map') }}\" class=\"nav-link\"
                           title=\"Kartenansicht\">Orte</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_deportation') }}\" class=\"nav-link\" title=\"Deportationsrouten\">Deportationsrouten</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_biographies') }}\" class=\"nav-link\"
                           title=\"Biografien\">Biografien</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_sources') }}\" class=\"nav-link\" title=\"Was wir wissen und was wir nicht wissen\">Quellen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_context') }}\" class=\"nav-link\"
                           title=\"Historischer Kontext\">Historischer&nbsp;Kontext</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_about') }}\" class=\"nav-link\"
                           title=\"Projektkontext\">HUNGMEM</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>", "elements/navigation.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/elements/navigation.html.twig");
    }
}
