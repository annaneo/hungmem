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

/* site/map.html.twig */
class __TwigTemplate_8c385939753e07d05b6e9c10a975c74f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/map.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/map.html.twig", 1);
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

        yield " Kartenansicht | ";
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
        yield "
    <div class=\"container mt-5\">
        <h2>Orte und geografische Einordnung</h2>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class=\"col-lg-6\">
                <p>
                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua.
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div id=\"map\" class=\"mt-3\">
            </div>
        </div>
    </div>

    ";
        // line 36
        yield "    <script>
        ";
        // line 40
        yield "
        const bergenbelsen = L.marker([52.757778, 9.907778]).bindPopup('<strong>KZ Bergen Belsen</strong><br/>');
        const budapest = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/>');
        const neuengamme = L.marker([53.430556, 10.233611]).bindPopup('<strong>Neuengamme</strong><br/>');
        const portawestfalica = L.marker([52.246275, 8.912079]).bindPopup('<strong>KZ-Außenlager Porta Westfalica</strong><br/>Das Frauenaußenlager Porta-Westfalica-Hausberge war erst im Februar 1945 eingerichtet worden. In Porta-Westfalica befanden sich zu diesem Zeitpunkt bereits zwei Männeraußenlager des KZ-Neuengamme, die alte Bergmannsstollen zur unterirdischen Produktionsstätten umbauen sollten. In einem dieser Stollen sollten die etwa 1.000 Frauen des neuen Frauenaußenlagers Radioröhren für dieFirma Philipps und ihre Tochterfirmen herstellen. Die Häftlinge waren vor allen als Jüdinnen verfolgteFrauen die aus den Niederlande und Ungarn nach Auschwitz deportiert worden waren. Ein Teil von ihnen hatte bereits in einem Außenlager des KZ Groß Rosen im heutigen Polen Radioröhren produzieren müssen, bis diese Produktionsstätte im Januar 1945 angesichts der sich nähernden sowjetischen Armee geräumt wurde.<br/> <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imprint");
        yield "#usage\">Weiterlesen</a>');



        const biografie1 = L.layerGroup([bergenbelsen, portawestfalica]);
        const studie1 = L.layerGroup([portawestfalica]);


        const mbAttr = 'Map data &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>';
        const mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        const streets = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });

        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 11,
            attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
        });

        const map = L.map('map', {
            center: [50.832222, 12.924167],
            zoom: 6,
            layers: [osm,
                bergenbelsen,
                budapest,
                neuengamme,
                portawestfalica,
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const overlays = {
            'Biografie 1': bergenbelsen,
            'Studie 1': portawestfalica, neuengamme
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

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
        return "site/map.html.twig";
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
        return array (  132 => 44,  126 => 40,  123 => 36,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Kartenansicht | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container mt-5\">
        <h2>Orte und geografische Einordnung</h2>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class=\"col-lg-6\">
                <p>
                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua.
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div id=\"map\" class=\"mt-3\">
            </div>
        </div>
    </div>

    {# Coordinates set to Chemnitz [50.832222, 12.924167] as that allows to see Hamburg as well as Hungary #}
    <script>
        {# Leaflet does not allow to add one const to more than one layerGroup
        (see more here: https://stackoverflow.com/questions/66391786/add-marker-to-multiple-layer-groups.
        As workaround, more than one instance of a city is created when necessary #}

        const bergenbelsen = L.marker([52.757778, 9.907778]).bindPopup('<strong>KZ Bergen Belsen</strong><br/>');
        const budapest = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/>');
        const neuengamme = L.marker([53.430556, 10.233611]).bindPopup('<strong>Neuengamme</strong><br/>');
        const portawestfalica = L.marker([52.246275, 8.912079]).bindPopup('<strong>KZ-Außenlager Porta Westfalica</strong><br/>Das Frauenaußenlager Porta-Westfalica-Hausberge war erst im Februar 1945 eingerichtet worden. In Porta-Westfalica befanden sich zu diesem Zeitpunkt bereits zwei Männeraußenlager des KZ-Neuengamme, die alte Bergmannsstollen zur unterirdischen Produktionsstätten umbauen sollten. In einem dieser Stollen sollten die etwa 1.000 Frauen des neuen Frauenaußenlagers Radioröhren für dieFirma Philipps und ihre Tochterfirmen herstellen. Die Häftlinge waren vor allen als Jüdinnen verfolgteFrauen die aus den Niederlande und Ungarn nach Auschwitz deportiert worden waren. Ein Teil von ihnen hatte bereits in einem Außenlager des KZ Groß Rosen im heutigen Polen Radioröhren produzieren müssen, bis diese Produktionsstätte im Januar 1945 angesichts der sich nähernden sowjetischen Armee geräumt wurde.<br/> <a href=\"{{ path('app_imprint') }}#usage\">Weiterlesen</a>');



        const biografie1 = L.layerGroup([bergenbelsen, portawestfalica]);
        const studie1 = L.layerGroup([portawestfalica]);


        const mbAttr = 'Map data &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>';
        const mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        const streets = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });

        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 11,
            attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
        });

        const map = L.map('map', {
            center: [50.832222, 12.924167],
            zoom: 6,
            layers: [osm,
                bergenbelsen,
                budapest,
                neuengamme,
                portawestfalica,
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const overlays = {
            'Biografie 1': bergenbelsen,
            'Studie 1': portawestfalica, neuengamme
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

{% endblock %}", "site/map.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/map.html.twig");
    }
}
