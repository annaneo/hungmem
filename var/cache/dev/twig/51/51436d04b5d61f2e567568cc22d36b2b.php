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

/* site/home.html.twig */
class __TwigTemplate_39d60226cf955577ab4a178fa29b8bfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Startseite | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    ";
        yield from         $this->loadTemplate("elements/navigation-home.html.twig", "site/home.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Titelbild-Orte.png"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"\">
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
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"\">
                                (Un)bekannte Daten und Quellen
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            ...
                            <a class=\"more\" href=\"";
        // line 48
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
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Dessauer-Ufer.png"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"\">
                                Fallstudien zu Deportationsrouten
                            </a>
                        </h2>
                        <p>In weniger als zwei Monaten verschleppten die Nationalsozialisten nach der deutschen
                            Besatzung Ungarns im März 1944 etwa 440.000 Jüdinnen und Juden in das Konzentrations- und
                            Vernichtungslager Auschwitz, wo der Großteil unmittelbar bei der Ankunft ermordet wurde. Nur
                            etwa ein Drittel wurde bei den „Selektionen“ ausgewählt, um Zwangsarbeit für das Deutsche
                            Reich zu leisten, unter anderem in einem der über tausend Außenlager des
                            nationalsozialistischen KZ-Systems. Die hier präsentierten Fallstudien geben an konkreten
                            Beispielen Einblicke in das System der NS-Zwangsarbeit, indem sie Deportationsrouten,
                            Häftlingsgruppen und die Bedingungen in den Lagern beleuchten.
                            <a class=\"more\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" title=\"\">
                                Biografische Einzelfallstudien
                            </a>
                        </h2>
                        <p>Von einem Großteil der aus Ungarn deportierten Menschen sind bis heute keine Namen bekannt.
                            Gleichzeitig bilden die Interviews der Überlebenden eine wichtige Grundlage für Forschung
                            und Gedenken. Nur mit ihrer Hilfe lassen sich Deportationsroute, Haftbedingungen du
                            individuelle (Über-)Lebenswegen rekonstruieren. Die hier präsentierten Fallstudien stellen
                            ausgewählte Biografien vor, deren Schicksale zugleich stellvertretend für größere Gruppen
                            stehen.
                            <a class=\"more\" href=\"";
        // line 100
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "site/home.html.twig";
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
        return array (  231 => 100,  218 => 90,  210 => 85,  206 => 84,  195 => 76,  180 => 64,  172 => 59,  168 => 58,  155 => 48,  145 => 41,  137 => 36,  133 => 35,  123 => 28,  112 => 20,  104 => 15,  95 => 8,  92 => 7,  82 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Startseite | {{ parent() }} {% endblock %}


{% block body %}
    {% include 'elements/navigation-home.html.twig' %}

    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/Titelbild-Orte.png') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_map') }}\" title=\"\">
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
                    <a href=\"{{ path('app_sources') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_context') }}\" title=\"\">
                                (Un)bekannte Daten und Quellen
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
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
                    <a href=\"{{ path('app_deportation') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Dessauer-Ufer.png') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation') }}\" title=\"\">
                                Fallstudien zu Deportationsrouten
                            </a>
                        </h2>
                        <p>In weniger als zwei Monaten verschleppten die Nationalsozialisten nach der deutschen
                            Besatzung Ungarns im März 1944 etwa 440.000 Jüdinnen und Juden in das Konzentrations- und
                            Vernichtungslager Auschwitz, wo der Großteil unmittelbar bei der Ankunft ermordet wurde. Nur
                            etwa ein Drittel wurde bei den „Selektionen“ ausgewählt, um Zwangsarbeit für das Deutsche
                            Reich zu leisten, unter anderem in einem der über tausend Außenlager des
                            nationalsozialistischen KZ-Systems. Die hier präsentierten Fallstudien geben an konkreten
                            Beispielen Einblicke in das System der NS-Zwangsarbeit, indem sie Deportationsrouten,
                            Häftlingsgruppen und die Bedingungen in den Lagern beleuchten.
                            <a class=\"more\" href=\"{{ path('app_deportation') }}\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_biographies') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_biographies') }}\" title=\"\">
                                Biografische Einzelfallstudien
                            </a>
                        </h2>
                        <p>Von einem Großteil der aus Ungarn deportierten Menschen sind bis heute keine Namen bekannt.
                            Gleichzeitig bilden die Interviews der Überlebenden eine wichtige Grundlage für Forschung
                            und Gedenken. Nur mit ihrer Hilfe lassen sich Deportationsroute, Haftbedingungen du
                            individuelle (Über-)Lebenswegen rekonstruieren. Die hier präsentierten Fallstudien stellen
                            ausgewählte Biografien vor, deren Schicksale zugleich stellvertretend für größere Gruppen
                            stehen.
                            <a class=\"more\" href=\"{{ path('app_biographies') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

{% endblock %}", "site/home.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/home.html.twig");
    }
}
