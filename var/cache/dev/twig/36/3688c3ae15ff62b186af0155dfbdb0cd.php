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

/* elements/navigation.en.html.twig */
class __TwigTemplate_6eafcee6d69777b930e01e43f2aa8dfc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/navigation.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/navigation.en.html.twig"));

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
                            The Holocaust in Hungary and the deportations to northern Germany
                        </a>
                    </h1>
                    <p class=\"subtitle\">Biographies, camps, and forced labor</p>
                </div>
            </div>
        </div>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-light\" >
        <div class=\"container-fluid setback\">
            <span class=\"navbar-brand\">
                <h1 class=\"brand-text\">The Holocaust in Hungary<br/> and the deportations<br/> to northern Germany</h1>
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
        yield "\" class=\"nav-link\" title=\"Home\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" class=\"nav-link\"
                           title=\"Map view\">Places</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"Camps and forced labor\">
                            Camps and forced labor
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"Overview of the group studies\">Overview</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"Group study Volkswagen\">Volkswagen</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_dessauerUfer");
        yield "\" title=\"Group study Dessauer Ufer\">Dessauer Ufer</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield "\" title=\"Group study Salzwedel\">Salzwedel</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield "\" title=\"Group study Lübberstedt\">Lübberstedt</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" class=\"nav-link dropdown-toggle\" id=\"biographiesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" 
                           title=\"Biographies\">Biographies</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"biographiesDropdown\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" title=\"Overview of the biographies\">Overview</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"Individual biography Yehuda Blum\">Yehuda Blum</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\" title=\"Individual biography Gyula Fürst\">Gyula Fürst</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"Individual biography Katharina Hardy\">Katharina Hardy</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\" title=\"Individual biography Lea und Zsuzsa Merényi\">Lea and Zsuzsa Merényi</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" class=\"nav-link\" title=\"What we know and what we don't know\">Sources</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" class=\"nav-link\"
                           title=\"Historical context\">Historical&nbsp;context</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\"
                           title=\"Project context\">Project background</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        // current URL without Domain (eg. /about or /contact)
        let currentPath = window.location.pathname;

        // select all navigation elements
        let navLinks = document.querySelectorAll(\".nav-link, .dropdown-item\");

        navLinks.forEach(link => {
            // if href of links matches the current URL, selected-class is added; excludes footer
            if (link.getAttribute(\"href\") === currentPath && !link.classList.contains(\"footer-link\")) {
                link.classList.add(\"selected\");

                // if link is within a dropdown menu, the selected-class is added to the toggle-button 
                let dropdown = link.closest(\".dropdown-menu\");
                if (dropdown) {
                    dropdown.previousElementSibling.classList.add(\"selected\");
                }
            }
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "elements/navigation.en.html.twig";
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
        return array (  171 => 68,  164 => 64,  158 => 61,  151 => 57,  147 => 56,  143 => 55,  139 => 54,  135 => 53,  129 => 50,  122 => 46,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  99 => 38,  92 => 34,  86 => 31,  62 => 10,  54 => 4,  52 => 3,  48 => 1,);
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
                            The Holocaust in Hungary and the deportations to northern Germany
                        </a>
                    </h1>
                    <p class=\"subtitle\">Biographies, camps, and forced labor</p>
                </div>
            </div>
        </div>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-light\" >
        <div class=\"container-fluid setback\">
            <span class=\"navbar-brand\">
                <h1 class=\"brand-text\">The Holocaust in Hungary<br/> and the deportations<br/> to northern Germany</h1>
            </span>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_home') }}\" class=\"nav-link\" title=\"Home\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_map') }}\" class=\"nav-link\"
                           title=\"Map view\">Places</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"{{ path('app_deportation') }}\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" title=\"Camps and forced labor\">
                            Camps and forced labor
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_deportation') }}\" title=\"Overview of the group studies\">Overview</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_deportation_vw') }}\" title=\"Group study Volkswagen\">Volkswagen</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_deportation_dessauerUfer') }}\" title=\"Group study Dessauer Ufer\">Dessauer Ufer</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_deportation_salzwedel') }}\" title=\"Group study Salzwedel\">Salzwedel</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_deportation_luebberstedt') }}\" title=\"Group study Lübberstedt\">Lübberstedt</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a href=\"{{ path('app_biographies') }}\" class=\"nav-link dropdown-toggle\" id=\"biographiesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" 
                           title=\"Biographies\">Biographies</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"biographiesDropdown\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_biographies') }}\" title=\"Overview of the biographies\">Overview</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_bio_blum') }}\" title=\"Individual biography Yehuda Blum\">Yehuda Blum</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_bio_fuerst') }}\" title=\"Individual biography Gyula Fürst\">Gyula Fürst</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_bio_hardy') }}\" title=\"Individual biography Katharina Hardy\">Katharina Hardy</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('app_bio_mereny') }}\" title=\"Individual biography Lea und Zsuzsa Merényi\">Lea and Zsuzsa Merényi</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_sources') }}\" class=\"nav-link\" title=\"What we know and what we don't know\">Sources</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_context') }}\" class=\"nav-link\"
                           title=\"Historical context\">Historical&nbsp;context</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_about') }}\" class=\"nav-link\"
                           title=\"Project context\">Project background</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        // current URL without Domain (eg. /about or /contact)
        let currentPath = window.location.pathname;

        // select all navigation elements
        let navLinks = document.querySelectorAll(\".nav-link, .dropdown-item\");

        navLinks.forEach(link => {
            // if href of links matches the current URL, selected-class is added; excludes footer
            if (link.getAttribute(\"href\") === currentPath && !link.classList.contains(\"footer-link\")) {
                link.classList.add(\"selected\");

                // if link is within a dropdown menu, the selected-class is added to the toggle-button 
                let dropdown = link.closest(\".dropdown-menu\");
                if (dropdown) {
                    dropdown.previousElementSibling.classList.add(\"selected\");
                }
            }
        });
    });
</script>
", "elements/navigation.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/elements/navigation.en.html.twig");
    }
}
