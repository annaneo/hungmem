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

        yield " Kartenansicht Konzentrationslager | ";
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
        <h2>Übersicht der Lager mit aus Ungarn Deportierten</h2>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <p>
                    Die Karte zeigt Standorte von Konzentrationslager in Norddeutschland, in denen aus Ungarn
                    deportierte Personen seit 1944 inhaftiert waren. Zunächst in dem sogenannten „Austauschlager“
                    Bergen-Belsen. Seit 1944 wurden auch Juden und Jüdinnen die zuvor in Vernichtungslager verschleppt
                    wurden, ins Deutsche Reich deportiert um hier zur Zwangsarbeit herangezogen zu werden. Dafür wurden
                    sie auch in KZ Außenlagern untergebracht, die in unmittelbarer räumlicher Nähe zu ihren Arbeitsorten
                    entstanden. Jüdinnen und Juden die zuvor aus Ungarn nach Auschwitz deportiert worden waren,
                    gelangten so ab Mitte 1944 nach Norddeutschland. Weitere Juden aus Budapest kamen Ende 1944 über
                    Österreich hinzu.
            </div>
            <div class=\"col-lg-6\">
                <p>
                    Aufgrund von neuen Bedarfen an Zwangsarbeit sowie angesichts des Vorrückens der
                    Alliierten wurden die Häftlinge mitunter mehrfach in andere Lager verlegt.
                <br>
                    Nach der Räumung der Außenlager des KZ Neuengamme kamen viele der Häftlinge nach Bergen Belsen, das
                    sich aufgrund der unmenschlichen Bedingungen und der akuten Überfüllung zu einem Sterbelager
                    entwickelte. Gezeigt werden die Lager, die in den hier präsentierten Fallstudien erwähnt werden und
                    für die im Rahmen des Projektes die Anwesenheit für aus Ungarn deportierte Personen nachgewiesen
                    werden konnte. Eine <a href=\"https://www.kz-gedenkstaette-neuengamme.de/geschichte/kz-aussenlager/aussenlagerliste/\"
                        title=\"Website der KZ-Gedenkstätte Neuengamme\">
                        Übersicht aller Außenlager des KZ Neuengamme findet sich hier</a>, weitere
                    <a href=\"https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945/\"
                       title=\"Website der KZ-Gedenkstätte Neuengamme\">
                        Informationen zum KZ Bergen Belsen finden sich hier</a>.</p>
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div id=\"map\" class=\"mt-3\">
            </div>
        </div>

    <div class=\"row mt-5\">
        <h3>Informationen zu ausgewählten Lagern</h3>
    <div class=\"col-lg-6\">
        <h4 id=\"#bergenbelsen\">Bergen-Belsen</h4>

        <h4 id=\"#fallerlebenFrauen\">Fallersleben (Frauen)</h4>
        <h4 id=\"#n\">Hannover-Ahlem</h4>
        <h4 id=\"#n\"></h4>
        <h4 id=\"#n\"></h4>
        <h4 id=\"#n\"></h4>
        <h4 id=\"#n\"></h4>
        <h4 id=\"#n\"></h4>
    </div>
    </div>

    </div>

    ";
        // line 64
        yield "    <script>

        var isStudyIcon = L.icon({
            iconUrl: '";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon_lilac.png"), "html", null, true);
        yield "',
            iconSize:     [45, 45], // size of the icon
            iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        var isInDataIcon = L.icon({
            iconUrl: '";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon_blue.png"), "html", null, true);
        yield "',
            iconSize:     [45, 45], // size of the icon
            iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });


        const BergenBelsen = L.marker([52.757778, 9.907778], {icon: isStudyIcon}).bindPopup('<strong>Bergen-Belsen</strong><br/>Das KZ Bergen-Belsen war 1943 zunächst zur Unterbringung jüdischer Geiseln gegründet worden, die gegen deutsche Zivilpersonen im alliierten Gewahrsam ausgetauscht werden sollten. Schnell wurden ihm jedoch weitere Funktionen zugewiesen. Im August 1944 wurde ein Lagerabschnitt für weibliche Häftlinge eingerichtet, die zur Arbeit in der deutschen Rüstungsindustrie gezwungen werden sollten. Innerhalb von wenigen Monaten deportierte die SS etwa 9.000 Häftlinge in das Frauenlager. Die Häftlinge stammten zunächst vor allem aus Polen, wo sie in Folge des Warschauer Aufstands verhaftet worden war, später waren unter ihnen auch viele polnische und ungarische Jüdinnen. Die Häftlinge wurden zunächst auf einer großen freien Fläche in Zelten untergebracht, erst nachdem diese durch einen Sturm zerstört worden waren, wurden die Frauen auch in Barracken untergebracht. Der Großteil der Frauen wurde nach kurzer Zeit in eines der KZ-Außenlager an Standorten deutscher Rüstungsfirmen deportiert. Ab Ende 1944 wurde das KZ Bergen-Belsen zum Ziel vieler Todesmärsche und Räumungstransport aus den frontnahen Konzentrationslagern. Allein zwischen Dezember 1944 bis Mitte April 1945 kamen so zusätzlich 85.000 Häftlinge nach Bergen-Belsen, so dass das Lager schnell völlig überbelegt war. Die Häftlinge wurden in Baracken untergebracht, die für diese hohe Zahl an Insassen nicht ausgelegt waren. Auch die Versorgungssituation war katastrophal. Unter diesen Umständen kam es zu einem Ausbruch einer Typhus- und Fleckfieberepidemie, die von der SS kaum bekämpft wurde. Das Konzentrationslager Bergen-Belsen wurde zu einem Sterbelager. Die etwa 15.000 Häftlinge aus Mittelbau-Dora, die noch im April 1945 in Bergen-Belsen eintrafen, wurden in ehemaligen Wehrmachtskasernen untergebracht. Am Standort des ehemaligen Konzentrationslagers befindet sich heute eine Gedenkstätte. (Vgl. Stiftung niedersächsische Gedenkstätten,: Bergen-Belsen. Kriegsgefangenenlager 1940-1945. Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, Celle 2009, S.144-295.)');
        const Boizenburg = L.marker([53.37507, 10.698472], {icon: isInDataIcon}).bindPopup('<strong>Boizenburg</strong><br/>');
        const BraunschweigBuessingNAG = L.marker([52.256667, 10.541111], {icon: isInDataIcon}).bindPopup('<strong>Braunschweig (Büssing-NAG) </strong><br/>');
        const BraunschweigVechelde = L.marker([52.260111, 10.376306], {icon: isInDataIcon}).bindPopup('<strong>Braunschweig-Vechelde</strong><br/>');
        const BraunschweigSSReitschule = L.marker([52.243424, 10.536425], {icon: isInDataIcon}).bindPopup('<strong>Braunschweig (SS-Reitschule)</strong><br/>');
        const BremenFarge = L.marker([53.217222, 8.533333], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Farge</strong><br/>');
        const BremenBlumenthal = L.marker([53.18146, 8.56473], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Blumenthal</strong><br/>');
        const BremenHindenburgkaserne = L.marker([53.057302350927216, 8.816555094621869], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Hindenburgkaserne</strong><br/>');
        const BremenObernheide = L.marker([53.00101850934623, 8.745048757476429], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Obernheide</strong><br/>');
        const BremenOsterort = L.marker([53.141951279652694, 8.691817452772783], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Osterort</strong><br/>');
        const BremenSchuetzenhof = L.marker([53.118994, 8.768726], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Schützenhof</strong><br/>');
        const FallerslebenFrauen = L.marker([52.433333, 10.766667], {icon: isStudyIcon}).bindPopup('<strong>Fallersleben (Frauen)</strong><br/>');
        const HAhlem = L.marker([52.37835, 9.65748], {icon: isStudyIcon}).bindPopup('<strong>Hannover-Ahlem</strong><br/>');
        const HelmstedtBeendorfFrauen = L.marker([52.23989233360328, 11.089496406413582], {icon: isInDataIcon}).bindPopup('<strong>Helmstedt-Beendorf (Frauen)</strong><br/>');
        const HHDessauerUfer = L.marker([53.525, 10.010556], {icon: isStudyIcon}).bindPopup('<strong>Hamburg-Dessauer Ufer</strong><br/>Die Haftstätte im Lagerhaus Dessauer Ufer war als Außenlager dem Konzentrationslager Neuengamme unterstellt. Die Frauen im KZ-Außenlager Dessauer Ufer kamen mit zwei Transporten aus Auschwitz. Der erste Transport im Juli 1944 bestand etwa zur Hälfte aus als Jüdinnen verfolgten Frauen, die erst kurz zuvor aus dem Ghetto Theresienstadt in Auschwitz angekommen waren und überwiegend aus der damaligen Tschechoslowakei stammten. Die andere Hälfte bestand aus als Jüdinnen verfolgten Frauen, die aus dem kurz zuvor von den Deutschen besetzten Ungarn deportiert worden waren. Einige der Frauen aus dem besetzten Ungarn stammten aus Gebieten, die erst 1943 durch Ungarn selbst besetzt oder annektiert worden waren und zuvor zur Tschechoslowakei und zu Rumänien gehört hatten. Der zweite Transport im August 1944 bestand vor allem aus als Jüdinnen verfolgten Frauen die zuvor aus dem Ghetto Litzmannstadt (Łódź) nach Auschwitz gekommen waren. Viele von ihnen stammten aus Polen, einige von Ihnen aber auch aus Deutschland.Im September 1944 wurde das Frauenaußenlager am Dessauer Ufer aufgelöst und. Kurz darauf wurde am selben Standort ein Männeraußenlager des KZ Neuengamme eingerichtet.  ');
        const HHEidelstedt = L.marker([53.60677, 9.87835], {icon: isStudyIcon}).bindPopup('<strong>Hamburg-Eidelstedt</strong><br/>');
        const HHHammerbrook = L.marker([53.55075, 10.022389], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Hammerbrook (Spaldingstraße)</strong><br/>');
        const HHLangenhorn = L.marker([53.672192, 9.99293], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Langenhorn</strong><br/>');
        const HHNeugraben = L.marker([53.460985, 9.868133], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Neugraben</strong><br/>');
        const HHSasel = L.marker([53.664662, 10.104215], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Sasel</strong><br/>');
        const HHSteinwerder = L.marker([53.534444, 9.957222], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Steinwerder (Stülckenwerft)</strong><br/>');
        const HHTiefstack = L.marker([53.52316641100441, 10.07133832394324], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Tiefstack</strong><br/>');
        const HHWandsbek = L.marker([53.582778, 10.108611], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Wandsbek</strong><br/>');
        const HLangenhagen = L.marker([52.4181400953558, 9.722412926738725], {icon: isInDataIcon}).bindPopup('<strong>Hannover-Langenhagen</strong><br/>');
        const HLimmer = L.marker([52.381435, 9.68499], {icon: isInDataIcon}).bindPopup('<strong>Hannover-Limmer</strong><br/>');
        const Hildesheim = L.marker([52.157, 9.944], {icon: isInDataIcon}).bindPopup('<strong>Hildesheim</strong><br/>');
        const HMuehlenberg = L.marker([52.3413, 9.696], {icon: isInDataIcon}).bindPopup('<strong>Hannover-Mühlenberg</strong><br/>');
        const Horneburg = L.marker([53.509444, 9.575], {icon: isInDataIcon}).bindPopup('<strong>Horneburg</strong><br/>');
        const Luebberstedt = L.marker([53.339065476033376, 8.807211550174749], {icon: isStudyIcon}).bindPopup('<strong>Lübberstedt</strong><br/>');
        const MeppenVersen = L.marker([52.724636, 7.183722], {icon: isInDataIcon}).bindPopup('<strong>Meppen-Versen</strong><br/>');
        const NeuengammeStammlager = L.marker([53.430556, 10.233611], {icon: isInDataIcon}).bindPopup('<strong>Neuengamme Stammlager</strong><br/>');
        const PortaWestfalicaHausberge = L.marker([52.246275, 8.912079], {icon: isStudyIcon}).bindPopup('<strong>Porta Westfalica-Hausberge</strong><br/>');
        const SalzgitterDruette = L.marker([52.158292, 10.418464], {icon: isInDataIcon}).bindPopup('<strong>Salzgitter-Drütte</strong><br/>');
        const Salzwedel = L.marker([52.840299, 11.166065], {icon: isStudyIcon}).bindPopup('<strong>Salzwedel</strong><br/>Die Draht- und Metallwarenfabrik in Salzwedel profitierte ebenfalls vom Deutschen Rüstungsboom, bereits 1937 war sie mit 600 Beschäftigten der größte Industriebetrieb in Salzwedel. Auch hier wurde auf ausländische Zwangsarbeiter zurückgegriffen.  1944 wurde ein Lager, das bis dahin für osteuropäische Zwangsarbeiterinnen genutzt worden war, zu einem KZ-Außenlager umgestaltet.  Im Spätsommer 1944 kam hier der erste Transport von weiblichen KZ-Häftlingen an, die in Auschwitz für die Arbeit selektiert worden waren. Die Gruppe bestand vor allem aus als Jüdinnen verfolgten Frauen, die erst kurz zuvor aus Ungarn oder von Ungarn annektierten Gebieten deportiert worden waren. In der Folgezeit wurden weitere weibliche KZ-Häftlinge in das neue Außenlager deportiert. Anders als der erste Transport waren sie aber nicht direkt nach Salzwedel, sondern zunächst ins Konzentrationslager Bergen-Belsen deportiert worden und dort für die Arbeit in Salzwedel ausgewählt worden. Am 14. April 1945 wurde das Lager durch amerikanische Truppen befreit. Nur wenige Kilometer entfernt hatten SS, Wehrmacht und Volksturmeinheiten sowie Hitlerjungen am Tag zuvor 1.061 männliche KZ-Häftlinge beim Massaker von Gardelegen in einer Scheune verbrannt.<br/><br/>&#9656; <a href=\"\">Fallstudie Salzwedel</a>');
        const Schandelah = L.marker([52.296205, 10.711765], {icon: isInDataIcon}).bindPopup('<strong>Schandelah</strong><br/>');
        const VWWerkHalle1 = L.marker([52.4275, 10.7922], {icon: isStudyIcon}).bindPopup('<strong>VW-Werk Halle 1</strong><br/>');
        const WatensteidtLeindeMen = L.marker([52.137516462553755, 10.436547953373374], {icon: isInDataIcon}).bindPopup('<strong>Salzgitter-Watenstedt/Leinde (Männer)</strong><br/>');
        const WatensteidtLeindeFrauen = L.marker([52.13748315467425, 10.43655563535315], {icon: isInDataIcon}).bindPopup('<strong>Salzgitter-Watenstedt/Leinde (Frauen)</strong><br/>');
        const WedelFrauen = L.marker([53.58404849833425, 9.720774436136473], {icon: isStudyIcon}).bindPopup('<strong>Wedel (Frauen)</strong><br/>');
        const WilhelmshavenAlterBanterWeg = L.marker([53.515253, 8.086887], {icon: isInDataIcon}).bindPopup('<strong>Wilhelmshaven (Alter Banter Weg)</strong><br/>');
        const Wittenberge = L.marker([52.992716, 11.771057], {icon: isInDataIcon}).bindPopup('<strong>Wittenberge</strong><br/>');
        const Woebbelin = L.marker([53.366944, 11.491944], {icon: isInDataIcon}).bindPopup('<strong>Wöbbelin</strong><br/>');


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

        const fallstudien = L.layerGroup([BergenBelsen, FallerslebenFrauen, HHDessauerUfer, HHEidelstedt, Luebberstedt, PortaWestfalicaHausberge, Salzwedel, VWWerkHalle1, WedelFrauen]);
        const datenrecherche = L.layerGroup([Boizenburg, BraunschweigBuessingNAG, BraunschweigVechelde, BraunschweigSSReitschule, BremenFarge, BremenBlumenthal, BremenHindenburgkaserne, BremenObernheide, BremenOsterort, BremenSchuetzenhof, HelmstedtBeendorfFrauen, HHHammerbrook, HHLangenhorn, HHNeugraben, HHSasel, HHSteinwerder, HHTiefstack, HHWandsbek, HLangenhagen, HLimmer, Hildesheim, HMuehlenberg, Horneburg, MeppenVersen, NeuengammeStammlager, SalzgitterDruette, Schandelah, WatensteidtLeindeMen, WatensteidtLeindeFrauen, WilhelmshavenAlterBanterWeg, Wittenberge, Woebbelin]);

        const overlays = {
            'In Fallstudien untersucht und erwähnt': fallstudien,
            'In Daten-Recherche vorkommend': datenrecherche,
        };

        const map = L.map('map', {
            center: [52.85, 11.15],
            zoom: 7,
            layers: [osm,
                fallstudien,
                datenrecherche,
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
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
        return array (  165 => 73,  156 => 67,  151 => 64,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-map.html.twig' %}

{% block title %} Kartenansicht Konzentrationslager | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container g-4 py-5\">
        <h2>Übersicht der Lager mit aus Ungarn Deportierten</h2>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <p>
                    Die Karte zeigt Standorte von Konzentrationslager in Norddeutschland, in denen aus Ungarn
                    deportierte Personen seit 1944 inhaftiert waren. Zunächst in dem sogenannten „Austauschlager“
                    Bergen-Belsen. Seit 1944 wurden auch Juden und Jüdinnen die zuvor in Vernichtungslager verschleppt
                    wurden, ins Deutsche Reich deportiert um hier zur Zwangsarbeit herangezogen zu werden. Dafür wurden
                    sie auch in KZ Außenlagern untergebracht, die in unmittelbarer räumlicher Nähe zu ihren Arbeitsorten
                    entstanden. Jüdinnen und Juden die zuvor aus Ungarn nach Auschwitz deportiert worden waren,
                    gelangten so ab Mitte 1944 nach Norddeutschland. Weitere Juden aus Budapest kamen Ende 1944 über
                    Österreich hinzu.
            </div>
            <div class=\"col-lg-6\">
                <p>
                    Aufgrund von neuen Bedarfen an Zwangsarbeit sowie angesichts des Vorrückens der
                    Alliierten wurden die Häftlinge mitunter mehrfach in andere Lager verlegt.
                <br>
                    Nach der Räumung der Außenlager des KZ Neuengamme kamen viele der Häftlinge nach Bergen Belsen, das
                    sich aufgrund der unmenschlichen Bedingungen und der akuten Überfüllung zu einem Sterbelager
                    entwickelte. Gezeigt werden die Lager, die in den hier präsentierten Fallstudien erwähnt werden und
                    für die im Rahmen des Projektes die Anwesenheit für aus Ungarn deportierte Personen nachgewiesen
                    werden konnte. Eine <a href=\"https://www.kz-gedenkstaette-neuengamme.de/geschichte/kz-aussenlager/aussenlagerliste/\"
                        title=\"Website der KZ-Gedenkstätte Neuengamme\">
                        Übersicht aller Außenlager des KZ Neuengamme findet sich hier</a>, weitere
                    <a href=\"https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945/\"
                       title=\"Website der KZ-Gedenkstätte Neuengamme\">
                        Informationen zum KZ Bergen Belsen finden sich hier</a>.</p>
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div id=\"map\" class=\"mt-3\">
            </div>
        </div>

    <div class=\"row mt-5\">
        <h3>Informationen zu ausgewählten Lagern</h3>
    <div class=\"col-lg-6\">
        <h4 id=\"#bergenbelsen\">Bergen-Belsen</h4>

        <h4 id=\"#fallerlebenFrauen\">Fallersleben (Frauen)</h4>
        <h4 id=\"#n\">Hannover-Ahlem</h4>
        <h4 id=\"#n\"></h4>
        <h4 id=\"#n\"></h4>
        <h4 id=\"#n\"></h4>
        <h4 id=\"#n\"></h4>
        <h4 id=\"#n\"></h4>
    </div>
    </div>

    </div>

    {# Coordinates set to Salzwedel [ 52.85, 11.15] as that allows to have a good overview of all camps #}
    <script>

        var isStudyIcon = L.icon({
            iconUrl: '{{ asset('images/icon_lilac.png') }}',
            iconSize:     [45, 45], // size of the icon
            iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });
        var isInDataIcon = L.icon({
            iconUrl: '{{ asset('images/icon_blue.png') }}',
            iconSize:     [45, 45], // size of the icon
            iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });


        const BergenBelsen = L.marker([52.757778, 9.907778], {icon: isStudyIcon}).bindPopup('<strong>Bergen-Belsen</strong><br/>Das KZ Bergen-Belsen war 1943 zunächst zur Unterbringung jüdischer Geiseln gegründet worden, die gegen deutsche Zivilpersonen im alliierten Gewahrsam ausgetauscht werden sollten. Schnell wurden ihm jedoch weitere Funktionen zugewiesen. Im August 1944 wurde ein Lagerabschnitt für weibliche Häftlinge eingerichtet, die zur Arbeit in der deutschen Rüstungsindustrie gezwungen werden sollten. Innerhalb von wenigen Monaten deportierte die SS etwa 9.000 Häftlinge in das Frauenlager. Die Häftlinge stammten zunächst vor allem aus Polen, wo sie in Folge des Warschauer Aufstands verhaftet worden war, später waren unter ihnen auch viele polnische und ungarische Jüdinnen. Die Häftlinge wurden zunächst auf einer großen freien Fläche in Zelten untergebracht, erst nachdem diese durch einen Sturm zerstört worden waren, wurden die Frauen auch in Barracken untergebracht. Der Großteil der Frauen wurde nach kurzer Zeit in eines der KZ-Außenlager an Standorten deutscher Rüstungsfirmen deportiert. Ab Ende 1944 wurde das KZ Bergen-Belsen zum Ziel vieler Todesmärsche und Räumungstransport aus den frontnahen Konzentrationslagern. Allein zwischen Dezember 1944 bis Mitte April 1945 kamen so zusätzlich 85.000 Häftlinge nach Bergen-Belsen, so dass das Lager schnell völlig überbelegt war. Die Häftlinge wurden in Baracken untergebracht, die für diese hohe Zahl an Insassen nicht ausgelegt waren. Auch die Versorgungssituation war katastrophal. Unter diesen Umständen kam es zu einem Ausbruch einer Typhus- und Fleckfieberepidemie, die von der SS kaum bekämpft wurde. Das Konzentrationslager Bergen-Belsen wurde zu einem Sterbelager. Die etwa 15.000 Häftlinge aus Mittelbau-Dora, die noch im April 1945 in Bergen-Belsen eintrafen, wurden in ehemaligen Wehrmachtskasernen untergebracht. Am Standort des ehemaligen Konzentrationslagers befindet sich heute eine Gedenkstätte. (Vgl. Stiftung niedersächsische Gedenkstätten,: Bergen-Belsen. Kriegsgefangenenlager 1940-1945. Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, Celle 2009, S.144-295.)');
        const Boizenburg = L.marker([53.37507, 10.698472], {icon: isInDataIcon}).bindPopup('<strong>Boizenburg</strong><br/>');
        const BraunschweigBuessingNAG = L.marker([52.256667, 10.541111], {icon: isInDataIcon}).bindPopup('<strong>Braunschweig (Büssing-NAG) </strong><br/>');
        const BraunschweigVechelde = L.marker([52.260111, 10.376306], {icon: isInDataIcon}).bindPopup('<strong>Braunschweig-Vechelde</strong><br/>');
        const BraunschweigSSReitschule = L.marker([52.243424, 10.536425], {icon: isInDataIcon}).bindPopup('<strong>Braunschweig (SS-Reitschule)</strong><br/>');
        const BremenFarge = L.marker([53.217222, 8.533333], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Farge</strong><br/>');
        const BremenBlumenthal = L.marker([53.18146, 8.56473], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Blumenthal</strong><br/>');
        const BremenHindenburgkaserne = L.marker([53.057302350927216, 8.816555094621869], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Hindenburgkaserne</strong><br/>');
        const BremenObernheide = L.marker([53.00101850934623, 8.745048757476429], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Obernheide</strong><br/>');
        const BremenOsterort = L.marker([53.141951279652694, 8.691817452772783], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Osterort</strong><br/>');
        const BremenSchuetzenhof = L.marker([53.118994, 8.768726], {icon: isInDataIcon}).bindPopup('<strong>Bremen-Schützenhof</strong><br/>');
        const FallerslebenFrauen = L.marker([52.433333, 10.766667], {icon: isStudyIcon}).bindPopup('<strong>Fallersleben (Frauen)</strong><br/>');
        const HAhlem = L.marker([52.37835, 9.65748], {icon: isStudyIcon}).bindPopup('<strong>Hannover-Ahlem</strong><br/>');
        const HelmstedtBeendorfFrauen = L.marker([52.23989233360328, 11.089496406413582], {icon: isInDataIcon}).bindPopup('<strong>Helmstedt-Beendorf (Frauen)</strong><br/>');
        const HHDessauerUfer = L.marker([53.525, 10.010556], {icon: isStudyIcon}).bindPopup('<strong>Hamburg-Dessauer Ufer</strong><br/>Die Haftstätte im Lagerhaus Dessauer Ufer war als Außenlager dem Konzentrationslager Neuengamme unterstellt. Die Frauen im KZ-Außenlager Dessauer Ufer kamen mit zwei Transporten aus Auschwitz. Der erste Transport im Juli 1944 bestand etwa zur Hälfte aus als Jüdinnen verfolgten Frauen, die erst kurz zuvor aus dem Ghetto Theresienstadt in Auschwitz angekommen waren und überwiegend aus der damaligen Tschechoslowakei stammten. Die andere Hälfte bestand aus als Jüdinnen verfolgten Frauen, die aus dem kurz zuvor von den Deutschen besetzten Ungarn deportiert worden waren. Einige der Frauen aus dem besetzten Ungarn stammten aus Gebieten, die erst 1943 durch Ungarn selbst besetzt oder annektiert worden waren und zuvor zur Tschechoslowakei und zu Rumänien gehört hatten. Der zweite Transport im August 1944 bestand vor allem aus als Jüdinnen verfolgten Frauen die zuvor aus dem Ghetto Litzmannstadt (Łódź) nach Auschwitz gekommen waren. Viele von ihnen stammten aus Polen, einige von Ihnen aber auch aus Deutschland.Im September 1944 wurde das Frauenaußenlager am Dessauer Ufer aufgelöst und. Kurz darauf wurde am selben Standort ein Männeraußenlager des KZ Neuengamme eingerichtet.  ');
        const HHEidelstedt = L.marker([53.60677, 9.87835], {icon: isStudyIcon}).bindPopup('<strong>Hamburg-Eidelstedt</strong><br/>');
        const HHHammerbrook = L.marker([53.55075, 10.022389], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Hammerbrook (Spaldingstraße)</strong><br/>');
        const HHLangenhorn = L.marker([53.672192, 9.99293], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Langenhorn</strong><br/>');
        const HHNeugraben = L.marker([53.460985, 9.868133], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Neugraben</strong><br/>');
        const HHSasel = L.marker([53.664662, 10.104215], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Sasel</strong><br/>');
        const HHSteinwerder = L.marker([53.534444, 9.957222], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Steinwerder (Stülckenwerft)</strong><br/>');
        const HHTiefstack = L.marker([53.52316641100441, 10.07133832394324], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Tiefstack</strong><br/>');
        const HHWandsbek = L.marker([53.582778, 10.108611], {icon: isInDataIcon}).bindPopup('<strong>Hamburg-Wandsbek</strong><br/>');
        const HLangenhagen = L.marker([52.4181400953558, 9.722412926738725], {icon: isInDataIcon}).bindPopup('<strong>Hannover-Langenhagen</strong><br/>');
        const HLimmer = L.marker([52.381435, 9.68499], {icon: isInDataIcon}).bindPopup('<strong>Hannover-Limmer</strong><br/>');
        const Hildesheim = L.marker([52.157, 9.944], {icon: isInDataIcon}).bindPopup('<strong>Hildesheim</strong><br/>');
        const HMuehlenberg = L.marker([52.3413, 9.696], {icon: isInDataIcon}).bindPopup('<strong>Hannover-Mühlenberg</strong><br/>');
        const Horneburg = L.marker([53.509444, 9.575], {icon: isInDataIcon}).bindPopup('<strong>Horneburg</strong><br/>');
        const Luebberstedt = L.marker([53.339065476033376, 8.807211550174749], {icon: isStudyIcon}).bindPopup('<strong>Lübberstedt</strong><br/>');
        const MeppenVersen = L.marker([52.724636, 7.183722], {icon: isInDataIcon}).bindPopup('<strong>Meppen-Versen</strong><br/>');
        const NeuengammeStammlager = L.marker([53.430556, 10.233611], {icon: isInDataIcon}).bindPopup('<strong>Neuengamme Stammlager</strong><br/>');
        const PortaWestfalicaHausberge = L.marker([52.246275, 8.912079], {icon: isStudyIcon}).bindPopup('<strong>Porta Westfalica-Hausberge</strong><br/>');
        const SalzgitterDruette = L.marker([52.158292, 10.418464], {icon: isInDataIcon}).bindPopup('<strong>Salzgitter-Drütte</strong><br/>');
        const Salzwedel = L.marker([52.840299, 11.166065], {icon: isStudyIcon}).bindPopup('<strong>Salzwedel</strong><br/>Die Draht- und Metallwarenfabrik in Salzwedel profitierte ebenfalls vom Deutschen Rüstungsboom, bereits 1937 war sie mit 600 Beschäftigten der größte Industriebetrieb in Salzwedel. Auch hier wurde auf ausländische Zwangsarbeiter zurückgegriffen.  1944 wurde ein Lager, das bis dahin für osteuropäische Zwangsarbeiterinnen genutzt worden war, zu einem KZ-Außenlager umgestaltet.  Im Spätsommer 1944 kam hier der erste Transport von weiblichen KZ-Häftlingen an, die in Auschwitz für die Arbeit selektiert worden waren. Die Gruppe bestand vor allem aus als Jüdinnen verfolgten Frauen, die erst kurz zuvor aus Ungarn oder von Ungarn annektierten Gebieten deportiert worden waren. In der Folgezeit wurden weitere weibliche KZ-Häftlinge in das neue Außenlager deportiert. Anders als der erste Transport waren sie aber nicht direkt nach Salzwedel, sondern zunächst ins Konzentrationslager Bergen-Belsen deportiert worden und dort für die Arbeit in Salzwedel ausgewählt worden. Am 14. April 1945 wurde das Lager durch amerikanische Truppen befreit. Nur wenige Kilometer entfernt hatten SS, Wehrmacht und Volksturmeinheiten sowie Hitlerjungen am Tag zuvor 1.061 männliche KZ-Häftlinge beim Massaker von Gardelegen in einer Scheune verbrannt.<br/><br/>&#9656; <a href=\"\">Fallstudie Salzwedel</a>');
        const Schandelah = L.marker([52.296205, 10.711765], {icon: isInDataIcon}).bindPopup('<strong>Schandelah</strong><br/>');
        const VWWerkHalle1 = L.marker([52.4275, 10.7922], {icon: isStudyIcon}).bindPopup('<strong>VW-Werk Halle 1</strong><br/>');
        const WatensteidtLeindeMen = L.marker([52.137516462553755, 10.436547953373374], {icon: isInDataIcon}).bindPopup('<strong>Salzgitter-Watenstedt/Leinde (Männer)</strong><br/>');
        const WatensteidtLeindeFrauen = L.marker([52.13748315467425, 10.43655563535315], {icon: isInDataIcon}).bindPopup('<strong>Salzgitter-Watenstedt/Leinde (Frauen)</strong><br/>');
        const WedelFrauen = L.marker([53.58404849833425, 9.720774436136473], {icon: isStudyIcon}).bindPopup('<strong>Wedel (Frauen)</strong><br/>');
        const WilhelmshavenAlterBanterWeg = L.marker([53.515253, 8.086887], {icon: isInDataIcon}).bindPopup('<strong>Wilhelmshaven (Alter Banter Weg)</strong><br/>');
        const Wittenberge = L.marker([52.992716, 11.771057], {icon: isInDataIcon}).bindPopup('<strong>Wittenberge</strong><br/>');
        const Woebbelin = L.marker([53.366944, 11.491944], {icon: isInDataIcon}).bindPopup('<strong>Wöbbelin</strong><br/>');


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

        const fallstudien = L.layerGroup([BergenBelsen, FallerslebenFrauen, HHDessauerUfer, HHEidelstedt, Luebberstedt, PortaWestfalicaHausberge, Salzwedel, VWWerkHalle1, WedelFrauen]);
        const datenrecherche = L.layerGroup([Boizenburg, BraunschweigBuessingNAG, BraunschweigVechelde, BraunschweigSSReitschule, BremenFarge, BremenBlumenthal, BremenHindenburgkaserne, BremenObernheide, BremenOsterort, BremenSchuetzenhof, HelmstedtBeendorfFrauen, HHHammerbrook, HHLangenhorn, HHNeugraben, HHSasel, HHSteinwerder, HHTiefstack, HHWandsbek, HLangenhagen, HLimmer, Hildesheim, HMuehlenberg, Horneburg, MeppenVersen, NeuengammeStammlager, SalzgitterDruette, Schandelah, WatensteidtLeindeMen, WatensteidtLeindeFrauen, WilhelmshavenAlterBanterWeg, Wittenberge, Woebbelin]);

        const overlays = {
            'In Fallstudien untersucht und erwähnt': fallstudien,
            'In Daten-Recherche vorkommend': datenrecherche,
        };

        const map = L.map('map', {
            center: [52.85, 11.15],
            zoom: 7,
            layers: [osm,
                fallstudien,
                datenrecherche,
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };


        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

{% endblock %}", "site/map.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/map.html.twig");
    }
}
