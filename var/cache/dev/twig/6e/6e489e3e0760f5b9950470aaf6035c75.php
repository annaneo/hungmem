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
        return "base-map.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/map.html.twig"));

        $this->parent = $this->loadTemplate("base-map.html.twig", "site/map.html.twig", 1);
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
    <div class=\"container g-4 py-5\">
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

        <h3>In den Fallstudien genannte Konzentrationslager und Außenlager</h3>

        <div class=\"row\">
            <div id=\"map\" class=\"mt-3\">
            </div>
        </div>
    </div>

    ";
        // line 38
        yield "    <script>
        ";
        // line 42
        yield "
        const bergenbelsen = L.marker([52.757778, 9.907778]).bindPopup('<strong>KZ Bergen Belsen</strong><br/>');
        const budapest = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/>');
        const neuengamme = L.marker([53.430556, 10.233611]).bindPopup('<strong>Neuengamme</strong><br/>');
        const portawestfalica = L.marker([52.246275, 8.912079]).bindPopup('<strong>KZ-Außenlager Porta Westfalica</strong><br/>Das Frauenaußenlager Porta-Westfalica-Hausberge war erst im Februar 1945 eingerichtet worden. In Porta-Westfalica befanden sich zu diesem Zeitpunkt bereits zwei Männeraußenlager des KZ-Neuengamme, die alte Bergmannsstollen zur unterirdischen Produktionsstätten umbauen sollten. In einem dieser Stollen sollten die etwa 1.000 Frauen des neuen Frauenaußenlagers Radioröhren für dieFirma Philipps und ihre Tochterfirmen herstellen. Die Häftlinge waren vor allen als Jüdinnen verfolgteFrauen die aus den Niederlande und Ungarn nach Auschwitz deportiert worden waren. Ein Teil von ihnen hatte bereits in einem Außenlager des KZ Groß Rosen im heutigen Polen Radioröhren produzieren müssen, bis diese Produktionsstätte im Januar 1945 angesichts der sich nähernden sowjetischen Armee geräumt wurde.<br/> <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imprint");
        yield "#usage\">Weiterlesen</a>');
        const BergenBelsen = L.marker([ 52.757778, 9.907778]).bindPopup('<strong>Bergen-Belsen</strong><br/>');
        const Boizenburg = L.marker([ 53.37507, 10.698472]).bindPopup('<strong>Boizenburg</strong><br/>');
        const BraunschweigBuessingNAG = L.marker([52.2611, 10.5260]).bindPopup('<strong>Braunschweig-Büssing-NAG</strong><br/>');
        const BraunschweigVechelde = L.marker([52.2561, 10.3680]).bindPopup('<strong>Braunschweig-Vechelde</strong><br/>');
        const BraunschweigSSReitschule = L.marker([52.2689, 10.5208]).bindPopup('<strong>Braunschweig-SS-Reitschule</strong><br/>');
        const BremenFarge = L.marker([53.2100, 8.5200]).bindPopup('<strong>Bremen Farge</strong><br/>');
        const BremenBlumenthal = L.marker([53.1836, 8.5944]).bindPopup('<strong>Bremen-Blumenthal</strong><br/>');
        const BremenHindenburgkaserne = L.marker([53.0874, 8.8255]).bindPopup('<strong>Bremen-Hindenburgkaserne</strong><br/>');
        const BremenObernheide = L.marker([53.1521, 8.7855]).bindPopup('<strong>Bremen-Obernheide</strong><br/>');
        const BremenOsterort = L.marker([53.1437, 8.7372]).bindPopup('<strong>Bremen-Osterort</strong><br/>');
        const BremenSchuetzenhof = L.marker([53.0966, 8.8007]).bindPopup('<strong>Bremen-Schützenhof</strong><br/>');
        const FallerslebenFrauen = L.marker([52.4333, 10.7833]).bindPopup('<strong>Fallersleben (Frauen)</strong><br/>');
        const HAhlem = L.marker([52.3647, 9.6616]).bindPopup('<strong>KZ-Außenlager Hannover-Ahlem</strong><br/>');
        const HelmstedtBeendorfFrauen = L.marker([52.2550, 11.0406]).bindPopup('<strong>Helmstedt-Beendorf (Frauen)</strong><br/>');
        const HHDessauerUfer = L.marker([53.5434, 9.9556]).bindPopup('<strong>HH-Dessauer Ufer</strong><br/>');
        const HHEidelstedt = L.marker([53.5944, 9.9183]).bindPopup('<strong>HH-Eidelstedt</strong><br/>');
        const HHHammerbrook = L.marker([53.5481, 10.0243]).bindPopup('<strong>HH-Hammerbrook (Spaldingstraße)</strong><br/>');
        const HHLangenhorn = L.marker([53.6620, 10.0127]).bindPopup('<strong>HH-Langenhorn</strong><br/>');
        const HHNeugraben = L.marker([53.4730, 9.8513]).bindPopup('<strong>HH-Neugraben</strong><br/>');
        const HHSasel = L.marker([53.6490, 10.1276]).bindPopup('<strong>HH-Sasel</strong><br/>');
        const HHSteinwerder = L.marker([53.5361, 9.9647]).bindPopup('<strong>HH-Steinwerder (Stülckenwerft)</strong><br/>');
        const HHTiefstack = L.marker([53.5396, 10.0425]).bindPopup('<strong>HH-Tiefstack</strong><br/>');
        const HHWandsbek = L.marker([53.5753, 10.0865]).bindPopup('<strong>HH-Wandsbek</strong><br/>');
        const HLangenhagen = L.marker([ 52.417537, 9.718566]).bindPopup('<strong>H-Langenhagen</strong><br/>');
        const HLimmer = L.marker([52.3747, 9.6975]).bindPopup('<strong>H-Limmer</strong><br/>');
        const Hildesheim = L.marker([52.157, 9.944]).bindPopup('<strong>KZ-Außenlager Hildesheim</strong><br/>');
        const HMuehlenberg = L.marker([52.3475, 9.6897]).bindPopup('<strong>H-Mühlenberg</strong><br/>');
        const Horneburg = L.marker([53.5063, 9.6169]).bindPopup('<strong>Horneburg</strong><br/>');
        const Luebberstedt = L.marker([53.3058, 8.6825]).bindPopup('<strong>Lübberstedt</strong><br/>');
        const MeppenVersen = L.marker([ 52.724636, 7.183722]).bindPopup('<strong>Meppen-Versen</strong><br/>');
        const NeuengammeStammlager = L.marker([53.3975, 10.2200]).bindPopup('<strong>Neuengamme Stammlager</strong><br/>');
        const PortaWestfalicaHausberge = L.marker([ 52.246275, 8.912079]).bindPopup('<strong>KZ-Außenlager Porta-Westfalica-Hausberge</strong><br/>');
        const SalzgitterDruette = L.marker([52.1358, 10.3664]).bindPopup('<strong>Salzgitter-Drütte</strong><br/>');
        const Salzwedel = L.marker([52.8544, 11.1497]).bindPopup('<strong>Salzwedel</strong><br/>');
        const Schandelah = L.marker([52.2547, 10.6547]).bindPopup('<strong>Schandelah</strong><br/>');
        const VWWerkHalle1 = L.marker([52.4275, 10.7922]).bindPopup('<strong>VW-Werk Halle 1</strong><br/>');
        const WatensteidtLeindeMen = L.marker([52.2642, 10.3911]).bindPopup('<strong>Watensteidt-Leinde (men)</strong><br/>');
        const WatensteidtLeindeFrauen = L.marker([52.2667, 10.3964]).bindPopup('<strong>Watensteidt-Leinde (Frauen)</strong><br/>');
        const WedelFrauen = L.marker([53.5814, 9.6978]).bindPopup('<strong>Wedel (Frauen)</strong><br/>');
        const WilhelmshavenAlterBanterWeg = L.marker([53.515253,8.086887]).bindPopup('<strong>Wilhelmshaven (Alter Banter Weg)</strong><br/>');
        const Wittenberge = L.marker([53.0025, 11.7403]).bindPopup('<strong>Wittenberge</strong><br/>');
        const Woebbelin = L.marker([53.366944, 11.491944]).bindPopup('<strong>Wöbbelin</strong><br/>');


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
            center: [52.85, 11.15],
            zoom: 7,
            layers: [osm,
                BergenBelsen,
                Boizenburg,
                BraunschweigBuessingNAG,
                BraunschweigVechelde,
                BraunschweigSSReitschule,
                BremenFarge,
                BremenBlumenthal,
                BremenHindenburgkaserne,
                BremenObernheide,
                BremenOsterort,
                BremenSchuetzenhof,
                FallerslebenFrauen,
                HAhlem,
                HelmstedtBeendorfFrauen,
                HHDessauerUfer,
                HHEidelstedt,
                HHHammerbrook,
                HHLangenhorn,
                HHNeugraben,
                HHSasel,
                HHSteinwerder,
                HHTiefstack,
                HHWandsbek,
                HLangenhagen,
                HLimmer,
                Hildesheim,
                HMuehlenberg,
                Horneburg,
                Luebberstedt,
                MeppenVersen,
                NeuengammeStammlager,
                PortaWestfalicaHausberge,
                SalzgitterDruette,
                Salzwedel,
                Schandelah,
                VWWerkHalle1,
                WatensteidtLeindeMen,
                WatensteidtLeindeFrauen,
                WedelFrauen,
                WilhelmshavenAlterBanterWeg,
                Wittenberge,
                Woebbelin
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const overlays = {
            'Biografie 1': Woebbelin,
            'Studie 1': Wittenberge
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
        return array (  134 => 46,  128 => 42,  125 => 38,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-map.html.twig' %}

{% block title %} Kartenansicht | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container g-4 py-5\">
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

        <h3>In den Fallstudien genannte Konzentrationslager und Außenlager</h3>

        <div class=\"row\">
            <div id=\"map\" class=\"mt-3\">
            </div>
        </div>
    </div>

    {# Coordinates set to Salzwedel [ 52.85, 11.15] as that allows to have a good overview of all camps #}
    <script>
        {# Leaflet does not allow to add one const to more than one layerGroup
        (see more here: https://stackoverflow.com/questions/66391786/add-marker-to-multiple-layer-groups.
        As workaround, more than one instance of a city is created when necessary #}

        const bergenbelsen = L.marker([52.757778, 9.907778]).bindPopup('<strong>KZ Bergen Belsen</strong><br/>');
        const budapest = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/>');
        const neuengamme = L.marker([53.430556, 10.233611]).bindPopup('<strong>Neuengamme</strong><br/>');
        const portawestfalica = L.marker([52.246275, 8.912079]).bindPopup('<strong>KZ-Außenlager Porta Westfalica</strong><br/>Das Frauenaußenlager Porta-Westfalica-Hausberge war erst im Februar 1945 eingerichtet worden. In Porta-Westfalica befanden sich zu diesem Zeitpunkt bereits zwei Männeraußenlager des KZ-Neuengamme, die alte Bergmannsstollen zur unterirdischen Produktionsstätten umbauen sollten. In einem dieser Stollen sollten die etwa 1.000 Frauen des neuen Frauenaußenlagers Radioröhren für dieFirma Philipps und ihre Tochterfirmen herstellen. Die Häftlinge waren vor allen als Jüdinnen verfolgteFrauen die aus den Niederlande und Ungarn nach Auschwitz deportiert worden waren. Ein Teil von ihnen hatte bereits in einem Außenlager des KZ Groß Rosen im heutigen Polen Radioröhren produzieren müssen, bis diese Produktionsstätte im Januar 1945 angesichts der sich nähernden sowjetischen Armee geräumt wurde.<br/> <a href=\"{{ path('app_imprint') }}#usage\">Weiterlesen</a>');
        const BergenBelsen = L.marker([ 52.757778, 9.907778]).bindPopup('<strong>Bergen-Belsen</strong><br/>');
        const Boizenburg = L.marker([ 53.37507, 10.698472]).bindPopup('<strong>Boizenburg</strong><br/>');
        const BraunschweigBuessingNAG = L.marker([52.2611, 10.5260]).bindPopup('<strong>Braunschweig-Büssing-NAG</strong><br/>');
        const BraunschweigVechelde = L.marker([52.2561, 10.3680]).bindPopup('<strong>Braunschweig-Vechelde</strong><br/>');
        const BraunschweigSSReitschule = L.marker([52.2689, 10.5208]).bindPopup('<strong>Braunschweig-SS-Reitschule</strong><br/>');
        const BremenFarge = L.marker([53.2100, 8.5200]).bindPopup('<strong>Bremen Farge</strong><br/>');
        const BremenBlumenthal = L.marker([53.1836, 8.5944]).bindPopup('<strong>Bremen-Blumenthal</strong><br/>');
        const BremenHindenburgkaserne = L.marker([53.0874, 8.8255]).bindPopup('<strong>Bremen-Hindenburgkaserne</strong><br/>');
        const BremenObernheide = L.marker([53.1521, 8.7855]).bindPopup('<strong>Bremen-Obernheide</strong><br/>');
        const BremenOsterort = L.marker([53.1437, 8.7372]).bindPopup('<strong>Bremen-Osterort</strong><br/>');
        const BremenSchuetzenhof = L.marker([53.0966, 8.8007]).bindPopup('<strong>Bremen-Schützenhof</strong><br/>');
        const FallerslebenFrauen = L.marker([52.4333, 10.7833]).bindPopup('<strong>Fallersleben (Frauen)</strong><br/>');
        const HAhlem = L.marker([52.3647, 9.6616]).bindPopup('<strong>KZ-Außenlager Hannover-Ahlem</strong><br/>');
        const HelmstedtBeendorfFrauen = L.marker([52.2550, 11.0406]).bindPopup('<strong>Helmstedt-Beendorf (Frauen)</strong><br/>');
        const HHDessauerUfer = L.marker([53.5434, 9.9556]).bindPopup('<strong>HH-Dessauer Ufer</strong><br/>');
        const HHEidelstedt = L.marker([53.5944, 9.9183]).bindPopup('<strong>HH-Eidelstedt</strong><br/>');
        const HHHammerbrook = L.marker([53.5481, 10.0243]).bindPopup('<strong>HH-Hammerbrook (Spaldingstraße)</strong><br/>');
        const HHLangenhorn = L.marker([53.6620, 10.0127]).bindPopup('<strong>HH-Langenhorn</strong><br/>');
        const HHNeugraben = L.marker([53.4730, 9.8513]).bindPopup('<strong>HH-Neugraben</strong><br/>');
        const HHSasel = L.marker([53.6490, 10.1276]).bindPopup('<strong>HH-Sasel</strong><br/>');
        const HHSteinwerder = L.marker([53.5361, 9.9647]).bindPopup('<strong>HH-Steinwerder (Stülckenwerft)</strong><br/>');
        const HHTiefstack = L.marker([53.5396, 10.0425]).bindPopup('<strong>HH-Tiefstack</strong><br/>');
        const HHWandsbek = L.marker([53.5753, 10.0865]).bindPopup('<strong>HH-Wandsbek</strong><br/>');
        const HLangenhagen = L.marker([ 52.417537, 9.718566]).bindPopup('<strong>H-Langenhagen</strong><br/>');
        const HLimmer = L.marker([52.3747, 9.6975]).bindPopup('<strong>H-Limmer</strong><br/>');
        const Hildesheim = L.marker([52.157, 9.944]).bindPopup('<strong>KZ-Außenlager Hildesheim</strong><br/>');
        const HMuehlenberg = L.marker([52.3475, 9.6897]).bindPopup('<strong>H-Mühlenberg</strong><br/>');
        const Horneburg = L.marker([53.5063, 9.6169]).bindPopup('<strong>Horneburg</strong><br/>');
        const Luebberstedt = L.marker([53.3058, 8.6825]).bindPopup('<strong>Lübberstedt</strong><br/>');
        const MeppenVersen = L.marker([ 52.724636, 7.183722]).bindPopup('<strong>Meppen-Versen</strong><br/>');
        const NeuengammeStammlager = L.marker([53.3975, 10.2200]).bindPopup('<strong>Neuengamme Stammlager</strong><br/>');
        const PortaWestfalicaHausberge = L.marker([ 52.246275, 8.912079]).bindPopup('<strong>KZ-Außenlager Porta-Westfalica-Hausberge</strong><br/>');
        const SalzgitterDruette = L.marker([52.1358, 10.3664]).bindPopup('<strong>Salzgitter-Drütte</strong><br/>');
        const Salzwedel = L.marker([52.8544, 11.1497]).bindPopup('<strong>Salzwedel</strong><br/>');
        const Schandelah = L.marker([52.2547, 10.6547]).bindPopup('<strong>Schandelah</strong><br/>');
        const VWWerkHalle1 = L.marker([52.4275, 10.7922]).bindPopup('<strong>VW-Werk Halle 1</strong><br/>');
        const WatensteidtLeindeMen = L.marker([52.2642, 10.3911]).bindPopup('<strong>Watensteidt-Leinde (men)</strong><br/>');
        const WatensteidtLeindeFrauen = L.marker([52.2667, 10.3964]).bindPopup('<strong>Watensteidt-Leinde (Frauen)</strong><br/>');
        const WedelFrauen = L.marker([53.5814, 9.6978]).bindPopup('<strong>Wedel (Frauen)</strong><br/>');
        const WilhelmshavenAlterBanterWeg = L.marker([53.515253,8.086887]).bindPopup('<strong>Wilhelmshaven (Alter Banter Weg)</strong><br/>');
        const Wittenberge = L.marker([53.0025, 11.7403]).bindPopup('<strong>Wittenberge</strong><br/>');
        const Woebbelin = L.marker([53.366944, 11.491944]).bindPopup('<strong>Wöbbelin</strong><br/>');


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
            center: [52.85, 11.15],
            zoom: 7,
            layers: [osm,
                BergenBelsen,
                Boizenburg,
                BraunschweigBuessingNAG,
                BraunschweigVechelde,
                BraunschweigSSReitschule,
                BremenFarge,
                BremenBlumenthal,
                BremenHindenburgkaserne,
                BremenObernheide,
                BremenOsterort,
                BremenSchuetzenhof,
                FallerslebenFrauen,
                HAhlem,
                HelmstedtBeendorfFrauen,
                HHDessauerUfer,
                HHEidelstedt,
                HHHammerbrook,
                HHLangenhorn,
                HHNeugraben,
                HHSasel,
                HHSteinwerder,
                HHTiefstack,
                HHWandsbek,
                HLangenhagen,
                HLimmer,
                Hildesheim,
                HMuehlenberg,
                Horneburg,
                Luebberstedt,
                MeppenVersen,
                NeuengammeStammlager,
                PortaWestfalicaHausberge,
                SalzgitterDruette,
                Salzwedel,
                Schandelah,
                VWWerkHalle1,
                WatensteidtLeindeMen,
                WatensteidtLeindeFrauen,
                WedelFrauen,
                WilhelmshavenAlterBanterWeg,
                Wittenberge,
                Woebbelin
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const overlays = {
            'Biografie 1': Woebbelin,
            'Studie 1': Wittenberge
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

{% endblock %}", "site/map.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/map.html.twig");
    }
}
