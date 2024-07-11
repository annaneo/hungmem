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

        <script>
        
        const BergenBelsen = L.marker([ 52.757778,9.907778]).bindPopup('<strong>Bergen-Belsen</strong><br/>');
        const Boizenburg = L.marker([ 53.37507,10.698472]).bindPopup('<strong>Boizenburg</strong><br/>');
        const BraunschweigBuessingNAG = L.marker([52.256667,10.541111]).bindPopup('<strong>Braunschweig (Büssing-NAG) </strong><br/>');
        const BraunschweigVechelde = L.marker([ 52.260111,10.376306]).bindPopup('<strong>Braunschweig-Vechelde</strong><br/>');
        const BraunschweigSSReitschule = L.marker([ 52.243424,10.536425]).bindPopup('<strong>Braunschweig (SS-Reitschule)</strong><br/>');
        const BremenFarge = L.marker([ 53.217222,8.533333]).bindPopup('<strong>Bremen-Farge</strong><br/>');
        const BremenBlumenthal = L.marker([ 53.18146,8.56473]).bindPopup('<strong>Bremen-Blumenthal</strong><br/>');
        const BremenHindenburgkaserne = L.marker([53.057302350927216,8.816555094621869]).bindPopup('<strong>Bremen-Hindenburgkaserne</strong><br/>');
        const BremenObernheide = L.marker([53.00101850934623,8.745048757476429]).bindPopup('<strong>Bremen-Obernheide</strong><br/>');
        const BremenOsterort = L.marker([53.141951279652694,8.691817452772783]).bindPopup('<strong>Bremen-Osterort</strong><br/>');
        const BremenSchuetzenhof = L.marker([ 53.118994,8.768726]).bindPopup('<strong>Bremen-Schützenhof</strong><br/>');
        const FallerslebenFrauen = L.marker([ 52.433333,10.766667]).bindPopup('<strong>Fallersleben (Frauen)</strong><br/>');
        const HAhlem = L.marker([ 52.37835,9.65748]).bindPopup('<strong>KZ-Außenlager Hannover-Ahlem</strong><br/>');
        const HelmstedtBeendorfFrauen = L.marker([52.23989233360328,11.089496406413582]).bindPopup('<strong>Helmstedt-Beendorf (Frauen)</strong><br/>');
        const HHDessauerUfer = L.marker([ 53.525,10.010556]).bindPopup('<strong>Hamburg-Dessauer Ufer</strong><br/>');
        const HHEidelstedt = L.marker([53.60677,9.87835]).bindPopup('<strong>Hamburg-Eidelstedt</strong><br/>');
        const HHHammerbrook = L.marker([53.55075,10.022389]).bindPopup('<strong>Hamburg-Hammerbrook (Spaldingstraße)</strong><br/>');
        const HHLangenhorn = L.marker([53.672192,9.99293]).bindPopup('<strong>Hamburg-Langenhorn</strong><br/>');
        const HHNeugraben = L.marker([53.460985,9.868133]).bindPopup('<strong>Hamburg-Neugraben</strong><br/>');
        const HHSasel = L.marker([ 53.664662,10.104215]).bindPopup('<strong>Hamburg-Sasel</strong><br/>');
        const HHSteinwerder = L.marker([ 53.534444,9.957222]).bindPopup('<strong>Hamburg-Steinwerder (Stülckenwerft)</strong><br/>');
        const HHTiefstack = L.marker([53.52316641100441,10.07133832394324]).bindPopup('<strong>Hamburg-Tiefstack</strong><br/>');
        const HHWandsbek = L.marker([ 53.582778,10.108611]).bindPopup('<strong>Hamburg-Wandsbek</strong><br/>');
        const HLangenhagen = L.marker([52.4181400953558,9.722412926738725]).bindPopup('<strong>Hannover-Langenhagen</strong><br/>');
        const HLimmer = L.marker([ 52.381435,9.68499]).bindPopup('<strong>Hannover-Limmer</strong><br/>');
        const Hildesheim = L.marker([52.157,9.944]).bindPopup('<strong>Hildesheim</strong><br/>');
        const HMuehlenberg = L.marker([ 52.3413,9.696]).bindPopup('<strong>Hannover-Mühlenberg</strong><br/>');
        const Horneburg = L.marker([ 53.509444,9.575]).bindPopup('<strong>Horneburg</strong><br/>');
        const Luebberstedt = L.marker([53.339065476033376,8.807211550174749]).bindPopup('<strong>Lübberstedt</strong><br/>');
        const MeppenVersen = L.marker([ 52.724636,7.183722]).bindPopup('<strong>Meppen-Versen</strong><br/>');
        const NeuengammeStammlager = L.marker([ 53.430556,10.233611]).bindPopup('<strong>Neuengamme Stammlager</strong><br/>');
        const PortaWestfalicaHausberge = L.marker([52.246275,8.912079]).bindPopup('<strong>Porta Westfalica-Hausberge</strong><br/>');
        const SalzgitterDruette = L.marker([ 52.158292,10.418464]).bindPopup('<strong>Salzgitter-Drütte</strong><br/>');
        const Salzwedel = L.marker([52.840299,11.166065]).bindPopup('<strong>Salzwedel</strong><br/>');
        const Schandelah = L.marker([ 52.296205,10.711765]).bindPopup('<strong>Schandelah</strong><br/>');
        const VWWerkHalle1 = L.marker([52.4275,10.7922]).bindPopup('<strong>VW-Werk Halle 1</strong><br/>');
        const WatensteidtLeindeMen = L.marker([52.137516462553755,10.436547953373374]).bindPopup('<strong>Salzgitter-Watenstedt/Leinde (Männer)</strong><br/>');
        const WatensteidtLeindeFrauen = L.marker([52.13748315467425,10.43655563535315]).bindPopup('<strong>Salzgitter-Watenstedt/Leinde (Frauen)</strong><br/>');
        const WedelFrauen = L.marker([53.58404849833425,9.720774436136473]).bindPopup('<strong>Wedel (Frauen)</strong><br/>');
        const WilhelmshavenAlterBanterWeg = L.marker([ 53.515253,8.086887]).bindPopup('<strong>Wilhelmshaven (Alter Banter Weg)</strong><br/>');
        const Wittenberge = L.marker([ 52.992716,11.771057]).bindPopup('<strong>Wittenberge</strong><br/>');
        const Woebbelin = L.marker([53.366944,11.491944]).bindPopup('<strong>Wöbbelin</strong><br/>');


        const biografie1 = L.layerGroup([VWWerkHalle1, MeppenVersen]);
        const studie1 = L.layerGroup([Woebbelin]);


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
        return array (  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
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

        const BergenBelsen = L.marker([ 52.757778,9.907778]).bindPopup('<strong>Bergen-Belsen</strong><br/>');
        const Boizenburg = L.marker([ 53.37507,10.698472]).bindPopup('<strong>Boizenburg</strong><br/>');
        const BraunschweigBuessingNAG = L.marker([52.256667,10.541111]).bindPopup('<strong>Braunschweig (Büssing-NAG) </strong><br/>');
        const BraunschweigVechelde = L.marker([ 52.260111,10.376306]).bindPopup('<strong>Braunschweig-Vechelde</strong><br/>');
        const BraunschweigSSReitschule = L.marker([ 52.243424,10.536425]).bindPopup('<strong>Braunschweig (SS-Reitschule)</strong><br/>');
        const BremenFarge = L.marker([ 53.217222,8.533333]).bindPopup('<strong>Bremen-Farge</strong><br/>');
        const BremenBlumenthal = L.marker([ 53.18146,8.56473]).bindPopup('<strong>Bremen-Blumenthal</strong><br/>');
        const BremenHindenburgkaserne = L.marker([53.057302350927216,8.816555094621869]).bindPopup('<strong>Bremen-Hindenburgkaserne</strong><br/>');
        const BremenObernheide = L.marker([53.00101850934623,8.745048757476429]).bindPopup('<strong>Bremen-Obernheide</strong><br/>');
        const BremenOsterort = L.marker([53.141951279652694,8.691817452772783]).bindPopup('<strong>Bremen-Osterort</strong><br/>');
        const BremenSchuetzenhof = L.marker([ 53.118994,8.768726]).bindPopup('<strong>Bremen-Schützenhof</strong><br/>');
        const FallerslebenFrauen = L.marker([ 52.433333,10.766667]).bindPopup('<strong>Fallersleben (Frauen)</strong><br/>');
        const HAhlem = L.marker([ 52.37835,9.65748]).bindPopup('<strong>KZ-Außenlager Hannover-Ahlem</strong><br/>');
        const HelmstedtBeendorfFrauen = L.marker([52.23989233360328,11.089496406413582]).bindPopup('<strong>Helmstedt-Beendorf (Frauen)</strong><br/>');
        const HHDessauerUfer = L.marker([ 53.525,10.010556]).bindPopup('<strong>Hamburg-Dessauer Ufer</strong><br/>');
        const HHEidelstedt = L.marker([53.60677,9.87835]).bindPopup('<strong>Hamburg-Eidelstedt</strong><br/>');
        const HHHammerbrook = L.marker([53.55075,10.022389]).bindPopup('<strong>Hamburg-Hammerbrook (Spaldingstraße)</strong><br/>');
        const HHLangenhorn = L.marker([53.672192,9.99293]).bindPopup('<strong>Hamburg-Langenhorn</strong><br/>');
        const HHNeugraben = L.marker([53.460985,9.868133]).bindPopup('<strong>Hamburg-Neugraben</strong><br/>');
        const HHSasel = L.marker([ 53.664662,10.104215]).bindPopup('<strong>Hamburg-Sasel</strong><br/>');
        const HHSteinwerder = L.marker([ 53.534444,9.957222]).bindPopup('<strong>Hamburg-Steinwerder (Stülckenwerft)</strong><br/>');
        const HHTiefstack = L.marker([53.52316641100441,10.07133832394324]).bindPopup('<strong>Hamburg-Tiefstack</strong><br/>');
        const HHWandsbek = L.marker([ 53.582778,10.108611]).bindPopup('<strong>Hamburg-Wandsbek</strong><br/>');
        const HLangenhagen = L.marker([52.4181400953558,9.722412926738725]).bindPopup('<strong>Hannover-Langenhagen</strong><br/>');
        const HLimmer = L.marker([ 52.381435,9.68499]).bindPopup('<strong>Hannover-Limmer</strong><br/>');
        const Hildesheim = L.marker([52.157,9.944]).bindPopup('<strong>Hildesheim</strong><br/>');
        const HMuehlenberg = L.marker([ 52.3413,9.696]).bindPopup('<strong>Hannover-Mühlenberg</strong><br/>');
        const Horneburg = L.marker([ 53.509444,9.575]).bindPopup('<strong>Horneburg</strong><br/>');
        const Luebberstedt = L.marker([53.339065476033376,8.807211550174749]).bindPopup('<strong>Lübberstedt</strong><br/>');
        const MeppenVersen = L.marker([ 52.724636,7.183722]).bindPopup('<strong>Meppen-Versen</strong><br/>');
        const NeuengammeStammlager = L.marker([ 53.430556,10.233611]).bindPopup('<strong>Neuengamme Stammlager</strong><br/>');
        const PortaWestfalicaHausberge = L.marker([52.246275,8.912079]).bindPopup('<strong>Porta Westfalica-Hausberge</strong><br/>');
        const SalzgitterDruette = L.marker([ 52.158292,10.418464]).bindPopup('<strong>Salzgitter-Drütte</strong><br/>');
        const Salzwedel = L.marker([52.840299,11.166065]).bindPopup('<strong>Salzwedel</strong><br/>');
        const Schandelah = L.marker([ 52.296205,10.711765]).bindPopup('<strong>Schandelah</strong><br/>');
        const VWWerkHalle1 = L.marker([52.4275,10.7922]).bindPopup('<strong>VW-Werk Halle 1</strong><br/>');
        const WatensteidtLeindeMen = L.marker([52.137516462553755,10.436547953373374]).bindPopup('<strong>Salzgitter-Watenstedt/Leinde (Männer)</strong><br/>');
        const WatensteidtLeindeFrauen = L.marker([52.13748315467425,10.43655563535315]).bindPopup('<strong>Salzgitter-Watenstedt/Leinde (Frauen)</strong><br/>');
        const WedelFrauen = L.marker([53.58404849833425,9.720774436136473]).bindPopup('<strong>Wedel (Frauen)</strong><br/>');
        const WilhelmshavenAlterBanterWeg = L.marker([ 53.515253,8.086887]).bindPopup('<strong>Wilhelmshaven (Alter Banter Weg)</strong><br/>');
        const Wittenberge = L.marker([ 52.992716,11.771057]).bindPopup('<strong>Wittenberge</strong><br/>');
        const Woebbelin = L.marker([53.366944,11.491944]).bindPopup('<strong>Wöbbelin</strong><br/>');


        const biografie1 = L.layerGroup([VWWerkHalle1, MeppenVersen]);
        const studie1 = L.layerGroup([Woebbelin]);


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
