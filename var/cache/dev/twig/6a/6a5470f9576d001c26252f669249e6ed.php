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

/* studies/dessauer-ufer.html.twig */
class __TwigTemplate_e31305f117c3c4236ac2156de0a1e17c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/dessauer-ufer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/dessauer-ufer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "studies/dessauer-ufer.html.twig", 1);
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

        yield " Fallstudie Dessauer Ufer | ";
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
        yield from         $this->loadTemplate("elements/navigation-deportationen.html.twig", "studies/dessauer-ufer.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container g-4 py-5 study\">
        <h2></h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    <sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <p>
                    <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/"), "html", null, true);
        yield "\"
                       data-lightbox=\"map-gruppe-300\"
                       data-title=\"Deportationsroute der „Gruppe der 300“.\"><img class=\"gallery img-fluid\"
                                                                                 src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/"), "html", null, true);
        yield "\"
                                                                                 alt=\"Karte der Deportationsroute aus Oradea und Cluj-Napoca über Auschwitz und view weitere Lager ins Konzentrationslager Bergen-Belsen \"/></a>
                <p class=\"caption\">
                </p>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Wer war in der 300er-Gruppe?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>

            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; </h4>
                    <p>

                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Juden und Jüdinnen</h4>
                    <p>

                    </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <p>

                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; </h4>
                    <p>

                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; </h4>
                    <p style=\"font-size: 0.9rem;\">
                        <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Übersicht der Lager mit aus Ungarn deportierten Zwangsarbeitern und
                            Zwangsarbeiterinnen
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/"), "html", null, true);
        yield "\"
                     alt=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora im Mai 1946\"/>
                <p class=\"caption\">
                    Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora, Mai 1946, Fotograf:
                    unbekannt, D-Day Museum, Portsmouth, 089.006, online unter:
                    <a href=\"https://fotoarchiv.dora.de/detail/2595\"
                       title=\"Seite des Fotoarchivs der  Stiftung Gedenkstätten Buchenwald und Mittelbau-Dora\">https://fotoarchiv.dora.de/detail/2595</a>,
                    Public Domain.
                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>

        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <p>

                </p>
                <p>

                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; </h4>
                    <p style=\"font-size: 0.9rem;\">

                    </p>
                    <p>
                        <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Häftlingsnummern\"/>
                <p class=\"caption\">

                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <ul class=\"bibliography\">
                    <li>
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                </ol>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Zitierhinweis</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Louis Wörner: Die Befreiung des Außenlagers Salzwedel, in: Holocaust in Ungarn und Deportationen nach
                    Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield ". Lizenz: CC BY 4.0.
                </p>
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
        return "studies/dessauer-ufer.html.twig";
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
        return array (  348 => 240,  298 => 193,  281 => 179,  237 => 138,  219 => 123,  123 => 30,  117 => 27,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Fallstudie Dessauer Ufer | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-deportationen.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2></h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    <sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <p>
                    <a href=\"{{ asset('images/studies/') }}\"
                       data-lightbox=\"map-gruppe-300\"
                       data-title=\"Deportationsroute der „Gruppe der 300“.\"><img class=\"gallery img-fluid\"
                                                                                 src=\"{{ asset('images/studies/') }}\"
                                                                                 alt=\"Karte der Deportationsroute aus Oradea und Cluj-Napoca über Auschwitz und view weitere Lager ins Konzentrationslager Bergen-Belsen \"/></a>
                <p class=\"caption\">
                </p>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Wer war in der 300er-Gruppe?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>

            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; </h4>
                    <p>

                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Juden und Jüdinnen</h4>
                    <p>

                    </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <p>

                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; </h4>
                    <p>

                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; </h4>
                    <p style=\"font-size: 0.9rem;\">
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Übersicht der Lager mit aus Ungarn deportierten Zwangsarbeitern und
                            Zwangsarbeiterinnen
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/studies/') }}\"
                     alt=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora im Mai 1946\"/>
                <p class=\"caption\">
                    Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora, Mai 1946, Fotograf:
                    unbekannt, D-Day Museum, Portsmouth, 089.006, online unter:
                    <a href=\"https://fotoarchiv.dora.de/detail/2595\"
                       title=\"Seite des Fotoarchivs der  Stiftung Gedenkstätten Buchenwald und Mittelbau-Dora\">https://fotoarchiv.dora.de/detail/2595</a>,
                    Public Domain.
                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>

        </div>

        <h3 class=\"mt-4\"></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <p>

                </p>
                <p>

                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; </h4>
                    <p style=\"font-size: 0.9rem;\">

                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Häftlingsnummern\"/>
                <p class=\"caption\">

                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <ul class=\"bibliography\">
                    <li>
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                </ol>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Zitierhinweis</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Louis Wörner: Die Befreiung des Außenlagers Salzwedel, in: Holocaust in Ungarn und Deportationen nach
                    Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_deportation_salzwedel') }}. Lizenz: CC BY 4.0.
                </p>
            </div>
        </div>

    </div>

{% endblock %}", "studies/dessauer-ufer.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/studies/dessauer-ufer.html.twig");
    }
}
