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
        yield "<nav class=\"navbar navbar-expand-md navbar-light nav nav-pills\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto nav-pills\">
            <li class=\"nav-item\">
                <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\" title=\"Startseite\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" class=\"nav-link\"
                   title=\"Kartenansicht\">Orte</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" class=\"nav-link\" title=\"Deportationsrouten\">Deportationsrouten</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" class=\"nav-link\"
                   title=\"Biografien\">Biografien</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" class=\"nav-link\" title=\"Was wir wissen und was wir nicht wissen\">Quellen</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" class=\"nav-link\"
                   title=\"Historischer Kontext\">Historischer Kontext</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\"
                   title=\"Projektkontext\">HUNGMEM</a>
            </li>

        </ul>
    </div>
    <a href=\"\">
        <img class=\"institute\" width=\"45%\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/IGdJ-Logo.svg"), "html", null, true);
        yield "\"
             alt=\"Logo des Instituts für die Geschichte des deutschen Juden\"/>
    </a>
</nav>";
        
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
        return array (  103 => 37,  93 => 30,  86 => 26,  80 => 23,  73 => 19,  67 => 16,  60 => 12,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light nav nav-pills\">
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto nav-pills\">
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
                   title=\"Historischer Kontext\">Historischer Kontext</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"{{ path('app_about') }}\" class=\"nav-link\"
                   title=\"Projektkontext\">HUNGMEM</a>
            </li>

        </ul>
    </div>
    <a href=\"\">
        <img class=\"institute\" width=\"45%\" src=\"{{ asset('images/IGdJ-Logo.svg') }}\"
             alt=\"Logo des Instituts für die Geschichte des deutschen Juden\"/>
    </a>
</nav>", "elements/navigation.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/elements/navigation.html.twig");
    }
}
