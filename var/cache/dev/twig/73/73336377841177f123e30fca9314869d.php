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

/* elements/navigation-map.html.twig */
class __TwigTemplate_d0e1aa321f5dbab8e49e92021b40d744 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/navigation-map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/navigation-map.html.twig"));

        // line 1
        yield "<div class=\"container\">

    <div class=\"hero device title-lg\">
        <div class=\"container mt-5\">
            <div class=\"row pt-1 pb-1\">
                <div class=\"col\">
                    <h1 class=\"fw-bold\">
                        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                            Holocaust in Ungarn und Deportationen nach Norddeutschland 1944.
                        </a>
                    </h1>
                    <p class=\"subtitle\">Fallstudien zu Deportationsrouten, Lagern und Deportierten</p>
                </div>
            </div>
        </div>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-light\" >
        <div class=\"container-fluid setback\">
            <span class=\"navbar-brand\">
                <h1 class=\"brand-text\">Holocaust in Ungarn und Deportationen<br/> nach Norddeutschland 1944</h1>
            </span>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\" title=\"Startseite\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" class=\"nav-link selected\"
                           title=\"Kartenansicht\">Orte</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" class=\"nav-link\" title=\"Deportationsrouten\">Deportationsrouten</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" class=\"nav-link\"
                           title=\"Biografien\">Biografien</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" class=\"nav-link\" title=\"Was wir wissen und was wir nicht wissen\">Quellen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" class=\"nav-link\"
                           title=\"Historischer Kontext\">Historischer&nbsp;Kontext</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 50
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
        return "elements/navigation-map.html.twig";
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
        return array (  116 => 50,  109 => 46,  103 => 43,  96 => 39,  90 => 36,  83 => 32,  77 => 29,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

    <div class=\"hero device title-lg\">
        <div class=\"container mt-5\">
            <div class=\"row pt-1 pb-1\">
                <div class=\"col\">
                    <h1 class=\"fw-bold\">
                        <a href=\"{{ path('app_home') }}\">
                            Holocaust in Ungarn und Deportationen nach Norddeutschland 1944.
                        </a>
                    </h1>
                    <p class=\"subtitle\">Fallstudien zu Deportationsrouten, Lagern und Deportierten</p>
                </div>
            </div>
        </div>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-light\" >
        <div class=\"container-fluid setback\">
            <span class=\"navbar-brand\">
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
                        <a href=\"{{ path('app_map') }}\" class=\"nav-link selected\"
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

</div>", "elements/navigation-map.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/elements/navigation-map.html.twig");
    }
}
