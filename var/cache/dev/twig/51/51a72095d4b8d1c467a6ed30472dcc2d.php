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

/* site/home.html.twig */
class __TwigTemplate_03a11ff0fadb4972b17c06647b11397d extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/home.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Homepage | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    ";
        yield from $this->load("elements/navigation-home.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Zur Karte\">
                        <img class=\"img-fluid\" src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Kartenansicht-Norddeutschland.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Zur Karte\">
                                Orte und Geografische Einordnung
                            </a>
                        </h2>
                        <p>Jedes zehnte Holocaust-Opfer stammte aus Ungarn in seinen damaligen Grenzen. Tausende von
                            ihnen wurden zur Zwangsarbeit in Rüstungsbetrieben nach Norddeutschland deportiert. Die hier
                            präsentierten Fallstudien beleuchten schlaglichtartig den Zusammenhang zwischen Holocaust
                            und Kriegsverlauf im regionalen Kontext.
                            <a class=\"more\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" title=\"Informationen zu Quellen und Daten\">
                        <img class=\"img-fluid\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Collage-Quellen.jpg"), "html", null, true);
        yield "\"
                             alt=\"Mehr zu genutzten Quellen und Daten\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" title=\"Informationen zu Quellen und Daten\">
                                (Un)bekannte Daten und Quellen
                            </a>
                        </h2>
                        <p>Das Wissen über Deportierte aus Ungarn in nordwestdeutschen Konzentrationslagern ist bis
                            heute sehr
                            begrenzt. Bereits eine realistische Schätzung der Gesamtzahl der in die Konzentrationslager
                            Neuengamme und Bergen-Belsen aus Ungarn deportierten Personen liegt bislang nicht vor. Die
                            Namen der
                            meisten Deportierten sind unbekannt.
                            ...
                            <a class=\"more\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"Zur Übersicht der Fallstudien\">
                        <img class=\"img-fluid\" src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Dessauer-Ufer.png"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"Zur Übersicht der Fallstudien\">
                                Zwangsarbeiterinnen und Zwangsarbeiter aus Ungarn. Gruppenstudien
                            </a>
                        </h2>
                        <p>In weniger als zwei Monaten verschleppten die Nationalsozialisten nach der deutschen
                            Besetzung Ungarns im März 1944 etwa 440.000 Jüdinnen und Juden in das Konzentrations- und
                            Vernichtungslager Auschwitz, wo der Großteil unmittelbar nach der Ankunft ermordet wurde.
                            Nur
                            etwa ein Drittel wurde bei den „Selektionen“ ausgewählt, um Zwangsarbeit für das Deutsche
                            Reich zu leisten. Die hier präsentierten Fallstudien geben an konkreten Beispielen Einblicke
                            in das System der NS-Zwangsarbeit, indem sie Deportationsrouten, Häftlingsgruppen und die
                            Bedingungen in den Lagern beleuchten.
                            <a class=\"more\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" title=\"Zur Übersicht der Biografien\">
                        <img class=\"img-fluid\" src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Collage-Biografien.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" title=\"Zur Übersicht der Biografien\">
                                Deportation und Hafterfahrungen. Einzelbiografien
                            </a>
                        </h2>
                        <p>Von einem Großteil der aus Ungarn deportierten Menschen sind bis heute keine Namen bekannt.
                            Gleichzeitig bilden die Interviews der Überlebenden eine wichtige Grundlage für Forschung
                            und Gedenken. Nur mit ihrer Hilfe lassen sich Deportationsrouten, Haftbedingungen und
                            individuelle (Über-)Lebenswege rekonstruieren. Die hier präsentierten Fallstudien stellen
                            ausgewählte Biografien vor, deren Schicksale zugleich stellvertretend für größere Gruppen
                            stehen.
                            <a class=\"more\" href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "site/home.html.twig";
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
        return array (  248 => 104,  235 => 94,  227 => 89,  223 => 88,  212 => 80,  197 => 68,  189 => 63,  185 => 62,  172 => 52,  158 => 41,  150 => 36,  146 => 35,  136 => 28,  125 => 20,  117 => 15,  113 => 14,  105 => 8,  102 => 7,  89 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Homepage | {{ parent() }} {% endblock %}


{% block body %}
    {% include 'elements/navigation-home.html.twig' %}

    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_map') }}\" title=\"Zur Karte\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/Kartenansicht-Norddeutschland.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_map') }}\" title=\"Zur Karte\">
                                Orte und Geografische Einordnung
                            </a>
                        </h2>
                        <p>Jedes zehnte Holocaust-Opfer stammte aus Ungarn in seinen damaligen Grenzen. Tausende von
                            ihnen wurden zur Zwangsarbeit in Rüstungsbetrieben nach Norddeutschland deportiert. Die hier
                            präsentierten Fallstudien beleuchten schlaglichtartig den Zusammenhang zwischen Holocaust
                            und Kriegsverlauf im regionalen Kontext.
                            <a class=\"more\" href=\"{{ path('app_map') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_sources') }}\" title=\"Informationen zu Quellen und Daten\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/Collage-Quellen.jpg') }}\"
                             alt=\"Mehr zu genutzten Quellen und Daten\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_sources') }}\" title=\"Informationen zu Quellen und Daten\">
                                (Un)bekannte Daten und Quellen
                            </a>
                        </h2>
                        <p>Das Wissen über Deportierte aus Ungarn in nordwestdeutschen Konzentrationslagern ist bis
                            heute sehr
                            begrenzt. Bereits eine realistische Schätzung der Gesamtzahl der in die Konzentrationslager
                            Neuengamme und Bergen-Belsen aus Ungarn deportierten Personen liegt bislang nicht vor. Die
                            Namen der
                            meisten Deportierten sind unbekannt.
                            ...
                            <a class=\"more\" href=\"{{ path('app_context') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_deportation') }}\" title=\"Zur Übersicht der Fallstudien\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Dessauer-Ufer.png') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation') }}\" title=\"Zur Übersicht der Fallstudien\">
                                Zwangsarbeiterinnen und Zwangsarbeiter aus Ungarn. Gruppenstudien
                            </a>
                        </h2>
                        <p>In weniger als zwei Monaten verschleppten die Nationalsozialisten nach der deutschen
                            Besetzung Ungarns im März 1944 etwa 440.000 Jüdinnen und Juden in das Konzentrations- und
                            Vernichtungslager Auschwitz, wo der Großteil unmittelbar nach der Ankunft ermordet wurde.
                            Nur
                            etwa ein Drittel wurde bei den „Selektionen“ ausgewählt, um Zwangsarbeit für das Deutsche
                            Reich zu leisten. Die hier präsentierten Fallstudien geben an konkreten Beispielen Einblicke
                            in das System der NS-Zwangsarbeit, indem sie Deportationsrouten, Häftlingsgruppen und die
                            Bedingungen in den Lagern beleuchten.
                            <a class=\"more\" href=\"{{ path('app_deportation') }}\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_biographies') }}\" title=\"Zur Übersicht der Biografien\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Collage-Biografien.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_biographies') }}\" title=\"Zur Übersicht der Biografien\">
                                Deportation und Hafterfahrungen. Einzelbiografien
                            </a>
                        </h2>
                        <p>Von einem Großteil der aus Ungarn deportierten Menschen sind bis heute keine Namen bekannt.
                            Gleichzeitig bilden die Interviews der Überlebenden eine wichtige Grundlage für Forschung
                            und Gedenken. Nur mit ihrer Hilfe lassen sich Deportationsrouten, Haftbedingungen und
                            individuelle (Über-)Lebenswege rekonstruieren. Die hier präsentierten Fallstudien stellen
                            ausgewählte Biografien vor, deren Schicksale zugleich stellvertretend für größere Gruppen
                            stehen.
                            <a class=\"more\" href=\"{{ path('app_biographies') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

{% endblock %}", "site/home.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/site/home.html.twig");
    }
}
