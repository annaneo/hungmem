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

/* site/deportation.html.twig */
class __TwigTemplate_29fb99d820d86b1ced0bcb65db2dfdac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/deportation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/deportation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/deportation.html.twig", 1);
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

        yield " Gruppenstudien Übersicht | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        yield from         $this->loadTemplate("elements/navigation-deportationen.html.twig", "site/deportation.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora, Mai 1946, Fotograf: unbekannt, D-Day Museum, Portsmouth, 089.006, online unter: https://fotoarchiv.dora.de/detail/2595, Public Domain\">
                        <img class=\"img-fluid\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-300-V1-Produktion.png"), "html", null, true);
        yield "\"
                             alt=\"Produktion der V1-Rakete: Ansicht der unterirdischen Produktionsstätte\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"Zur Gruppenstudie der Gruppe der 300\">
                                Die Gruppe der 300. Zwangsarbeiter als Facharbeiter bei VW
                            </a>
                        </h2>
                        <p> Circa 13,5 Millionen Menschen wurden während des Zweiten Weltkrieges zu Zwangsarbeit im
                            Deutschen
                            Reich herangezogen. Die Aufrechterhaltung der Kriegswirtschaft war nur durch die
                            zwangsverpflichteten Arbeiterinnen und Arbeiter ...
                            <a class=\"more\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_dessauerUfer");
        yield "\" title=\"Das Lagerhaus G am Dessauer Ufer diente ab 1944 als KZ-Außenlager, Ansicht von der Wasserseite aus. Foto: Stiftung Hamburger Gedenkstätten und Lernorte zur Erinnerung an die Opfer der NS-Verbrechen, Rainer Viertlböck, 2020, https://gedenkstaetten-in-hamburg.de/gedenkstaetten/zeige/gedenktafeln-am-lagerhaus-g-kz-aussenlager-dessauer-ufer\">
                        <img class=\"img-fluid\" src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Dessauer-Ufer.png"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_dessauerUfer");
        yield "\" title=\"Zur Gruppenstudie Dessauer Ufer\">
                                Die Frauen vom KZ-Außenlager Dessauer Ufer. Zwangsarbeit im städtischen Raum
                            </a>
                        </h2>
                        <p>Ungefähr 200.000 der aus Ungarn deportierten Jüdinnen und Juden, mussten Zwangsarbeit
                            leisten. Über Auschwitz und Österreich wurden sie ab Mitte 1944 auf verschiedene Außenlager
                            im Deutschen Reich und den besetzten Gebieten verteilt.
                            ...
                            <a class=\"more\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_dessauerUfer");
        yield "\"
                               title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield "\" title=\"Befreite männliche und weibliche KZ-Häftlinge in Gardelegen am 5. Juni 1945. Privatbesitz, Johann-Friedrich-Danneil-Museum, Salzwedel\">
                        <img class=\"img-fluid\" src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Salzwedel.png"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield "\" title=\"Zur Gruppenstudie Salzwedel\">
                                Zwangsarbeit in der Rüstungsindustrie. Die Befreiung des KZ-Außenlagers Salzwedel
                            </a>
                        </h2>
                        <p>Bereits vor dem Beginn des Zweiten Weltkrieges hatten die Nationalsozialisten mit dem
                            forcierten
                            Ausbau der deutschen Rüstungsindustrie begonnen. So waren allein von 1933 bis 1938 die
                            Rüstungsausgaben von ...
                            <a class=\"more\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield "\"
                               title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield "\" title=\"Auschwitz-Album, Yad Vashem ( https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp), Copyright © 2024 Yad Vashem – Internationale Holocaust Gedenkstätte, Nutzung gemäß Fair Use (https://www.yadvashem.org/terms-and-conditions.html)\">
                        <img class=\"img-fluid\" src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild_Luebberstedt.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield "\" title=\"Zur Gruppenstudie Lübberstedt\">
                                Die Räumung des KZ-Außenlagers Lübberstedt. In Güterwaggons durch Norddeutschland
                            </a>
                        </h2>
                        <p>Mit dem Vormarsch der Alliierten wurden ab Mitte 1944 auch die ersten Konzentrationslager
                            befreit.
                            Bevor alliierte Truppen die Lager erreichen konnten, versuchte die SS jedoch Spuren zu
                            vernichten und die Häftlinge
                            ...
                            <a class=\"more\" href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield "\"
                               title=\"Weiterlesen\">[mehr]</a>
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
        return "site/deportation.html.twig";
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
        return array (  232 => 97,  220 => 88,  212 => 83,  208 => 82,  196 => 73,  185 => 65,  177 => 60,  173 => 59,  159 => 48,  148 => 40,  140 => 35,  136 => 34,  126 => 27,  115 => 19,  107 => 14,  103 => 13,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Gruppenstudien Übersicht | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-deportationen.html.twig' %}

    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_deportation_vw') }}\" title=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora, Mai 1946, Fotograf: unbekannt, D-Day Museum, Portsmouth, 089.006, online unter: https://fotoarchiv.dora.de/detail/2595, Public Domain\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-300-V1-Produktion.png') }}\"
                             alt=\"Produktion der V1-Rakete: Ansicht der unterirdischen Produktionsstätte\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation_vw') }}\" title=\"Zur Gruppenstudie der Gruppe der 300\">
                                Die Gruppe der 300. Zwangsarbeiter als Facharbeiter bei VW
                            </a>
                        </h2>
                        <p> Circa 13,5 Millionen Menschen wurden während des Zweiten Weltkrieges zu Zwangsarbeit im
                            Deutschen
                            Reich herangezogen. Die Aufrechterhaltung der Kriegswirtschaft war nur durch die
                            zwangsverpflichteten Arbeiterinnen und Arbeiter ...
                            <a class=\"more\" href=\"{{ path('app_deportation_vw') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_deportation_dessauerUfer') }}\" title=\"Das Lagerhaus G am Dessauer Ufer diente ab 1944 als KZ-Außenlager, Ansicht von der Wasserseite aus. Foto: Stiftung Hamburger Gedenkstätten und Lernorte zur Erinnerung an die Opfer der NS-Verbrechen, Rainer Viertlböck, 2020, https://gedenkstaetten-in-hamburg.de/gedenkstaetten/zeige/gedenktafeln-am-lagerhaus-g-kz-aussenlager-dessauer-ufer\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Dessauer-Ufer.png') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation_dessauerUfer') }}\" title=\"Zur Gruppenstudie Dessauer Ufer\">
                                Die Frauen vom KZ-Außenlager Dessauer Ufer. Zwangsarbeit im städtischen Raum
                            </a>
                        </h2>
                        <p>Ungefähr 200.000 der aus Ungarn deportierten Jüdinnen und Juden, mussten Zwangsarbeit
                            leisten. Über Auschwitz und Österreich wurden sie ab Mitte 1944 auf verschiedene Außenlager
                            im Deutschen Reich und den besetzten Gebieten verteilt.
                            ...
                            <a class=\"more\" href=\"{{ path('app_deportation_dessauerUfer') }}\"
                               title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_deportation_salzwedel') }}\" title=\"Befreite männliche und weibliche KZ-Häftlinge in Gardelegen am 5. Juni 1945. Privatbesitz, Johann-Friedrich-Danneil-Museum, Salzwedel\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Salzwedel.png') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation_salzwedel') }}\" title=\"Zur Gruppenstudie Salzwedel\">
                                Zwangsarbeit in der Rüstungsindustrie. Die Befreiung des KZ-Außenlagers Salzwedel
                            </a>
                        </h2>
                        <p>Bereits vor dem Beginn des Zweiten Weltkrieges hatten die Nationalsozialisten mit dem
                            forcierten
                            Ausbau der deutschen Rüstungsindustrie begonnen. So waren allein von 1933 bis 1938 die
                            Rüstungsausgaben von ...
                            <a class=\"more\" href=\"{{ path('app_deportation_salzwedel') }}\"
                               title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_deportation_luebberstedt') }}\" title=\"Auschwitz-Album, Yad Vashem ( https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp), Copyright © 2024 Yad Vashem – Internationale Holocaust Gedenkstätte, Nutzung gemäß Fair Use (https://www.yadvashem.org/terms-and-conditions.html)\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild_Luebberstedt.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation_luebberstedt') }}\" title=\"Zur Gruppenstudie Lübberstedt\">
                                Die Räumung des KZ-Außenlagers Lübberstedt. In Güterwaggons durch Norddeutschland
                            </a>
                        </h2>
                        <p>Mit dem Vormarsch der Alliierten wurden ab Mitte 1944 auch die ersten Konzentrationslager
                            befreit.
                            Bevor alliierte Truppen die Lager erreichen konnten, versuchte die SS jedoch Spuren zu
                            vernichten und die Häftlinge
                            ...
                            <a class=\"more\" href=\"{{ path('app_deportation_luebberstedt') }}\"
                               title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "site/deportation.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/deportation.html.twig");
    }
}
