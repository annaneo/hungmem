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
use Twig\TemplateWrapper;

/* elements/navigation-biographies.html.twig */
class __TwigTemplate_abdec1f041c2ff3cb2e8975cf14051b3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/navigation-biographies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/navigation-biographies.html.twig"));

        // line 1
        yield "<div class=\"container\">

    ";
        // line 3
        yield from $this->load("elements/language-switch.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "
    <div class=\"hero device title-lg\">
        <div class=\"container mt-5\">
            <div class=\"row pt-1 pb-1\">
                <div class=\"col\">
                    <h1 class=\"fw-bold\">
                        <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            Der Holocaust in Ungarn und die Deportationen nach Norddeutschland
                        </a>
                    </h1>
                    <p class=\"subtitle\">Biographien, Lager und Zwangsarbeit</p>
                </div>
            </div>
        </div>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"container-fluid setback\">
            <span class=\"navbar-brand\">
                <h1 class=\"brand-text\">Der Holocaust in Ungarn<br/> und die Deportationen <br/> nach Norddeutschland</h1>
            </span>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\" title=\"Startseite\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" class=\"nav-link\" title=\"Kartenansicht\">Orte</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" class=\"nav-link\" title=\"Lager und Zwangsarbeit\">Lager und Zwangsarbeit</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" class=\"nav-link dropdown-toggle selected\" id=\"biographiesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"Biografien\">
                            Biografien
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"biographiesDropdown\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\">Übersicht der Biografien</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\">Yehuda Blum</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\">Gyula Fürst</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\">Katharina Hardy</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\">Lea und Zsuzsa Merényi</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" class=\"nav-link\" title=\"Was wir wissen und was wir nicht wissen\">Quellen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" class=\"nav-link\" title=\"Historischer Kontext\">Historischer&nbsp;Kontext</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\" title=\"Projektkontext\">Projekthintergrund</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "elements/navigation-biographies.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  146 => 58,  140 => 55,  134 => 52,  127 => 48,  123 => 47,  119 => 46,  115 => 45,  111 => 44,  104 => 40,  98 => 37,  92 => 34,  86 => 31,  62 => 10,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">

    {% include 'elements/language-switch.html.twig' %}

    <div class=\"hero device title-lg\">
        <div class=\"container mt-5\">
            <div class=\"row pt-1 pb-1\">
                <div class=\"col\">
                    <h1 class=\"fw-bold\">
                        <a href=\"{{ path('app_home') }}\">
                            Der Holocaust in Ungarn und die Deportationen nach Norddeutschland
                        </a>
                    </h1>
                    <p class=\"subtitle\">Biographien, Lager und Zwangsarbeit</p>
                </div>
            </div>
        </div>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"container-fluid setback\">
            <span class=\"navbar-brand\">
                <h1 class=\"brand-text\">Der Holocaust in Ungarn<br/> und die Deportationen <br/> nach Norddeutschland</h1>
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
                        <a href=\"{{ path('app_map') }}\" class=\"nav-link\" title=\"Kartenansicht\">Orte</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_deportation') }}\" class=\"nav-link\" title=\"Lager und Zwangsarbeit\">Lager und Zwangsarbeit</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"{{ path('app_biographies') }}\" class=\"nav-link dropdown-toggle selected\" id=\"biographiesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"Biografien\">
                            Biografien
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"biographiesDropdown\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_biographies') }}\">Übersicht der Biografien</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_bio_blum') }}\">Yehuda Blum</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_bio_fuerst') }}\">Gyula Fürst</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_bio_hardy') }}\">Katharina Hardy</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_bio_mereny') }}\">Lea und Zsuzsa Merényi</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_sources') }}\" class=\"nav-link\" title=\"Was wir wissen und was wir nicht wissen\">Quellen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_context') }}\" class=\"nav-link\" title=\"Historischer Kontext\">Historischer&nbsp;Kontext</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_about') }}\" class=\"nav-link\" title=\"Projektkontext\">Projekthintergrund</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>", "elements/navigation-biographies.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/elements/navigation-biographies.html.twig");
    }
}
