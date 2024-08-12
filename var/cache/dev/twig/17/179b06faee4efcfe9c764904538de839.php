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

/* biographies/fuerst.html.twig */
class __TwigTemplate_5e465ec2a73107cf8c153bf934977daa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/fuerst.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/fuerst.html.twig"));

        $this->parent = $this->loadTemplate("base-map.html.twig", "biographies/fuerst.html.twig", 1);
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

        yield " Fallstudie | ";
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
        yield from         $this->loadTemplate("elements/navigation-biographies.html.twig", "biographies/fuerst.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "

    <div class=\"container g-4 py-5 study\">
        <h2>Biografie von Gyula Fürst – ein ungewöhnlicher Deportationsweg</h2>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <h3>Zur Person</h3>
                <p class=\"abstract\">
                    Gyula Fürst wurde am 1. Juli 1923 als jüngstes von insgesamt vier Kindern in der ungarischen
                    Gemeinde Boba im Komitat Vas geboren. Als er vier Jahre alt war, zog die Familie nach Ugodpuszta um,
                    wo sein Vater als Landwirt arbeitete. Dort besuchte Fürst die Schule im sechs Kilometer entfernten
                    Beziközég.<br/>
                    Mit ungefähr neun Jahren zog Fürst mit seiner Familie erneut um, zunächst zurück nach Boba und von
                    dort in die westungarische Stadt Szombathely. Hier ließ sich Gyula Fürst zum Elektriker ausbilden
                    und wurde außerdem Mitglied in einer Jugendorganisation der Sozialdemokratischen Partei.<br/>
                    Fürst fand Arbeit in Budapest und lebte dort bei Doktor Kovács, einem Onkel mütterlicherseits.

                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
                <p class=\"caption\">
                    Gemeinde Boba im Komitat Vas, Geburtsort von Gyula Fürst.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Ein ungewöhnlicher Deportationsweg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Der Einmarsch deutscher Truppen in Ungarn markierte den Beginn der Vernichtung der
                    ungarisch-jüdischen Bevölkerung durch die Nationalsozialisten. Zu diesem Zeitpunkt befanden sich in
                    Ungarn in Folge der ungarischen Annexion von Gebieten, etwa der Slowakei, Rumäniens und
                    Jugoslawiens, circa 800.000 Juden und Jüdinnen.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    Am 20. März 1944 wurde Gyula Fürst – wie er sich in
                    einem am 30. November 2005 geführten Interview mit der Gedenkstätte Bergen-Belsen erinnerte – bei
                    einer Straßenbahnkontrolle auf dem Weg zur Arbeit von ungarischen Pfeilkreuzlern verhaftet und in
                    ein polizeiliches Sammelgefängnis überstellt. Nach kurzem Aufenthalt folgte Gyula Fürsts Deportation
                    nach Kistarcsa.
                    Das Lager befand sich ungefähr 15 Kilometer nordwestlich von Budapest. Im Mai 1944
                    begannen die Deportationen nach Auschwitz-Birkenau. Über die Hälfte der jüdischen Bevölkerung im
                    ungarischen Staatsgebiet wurde innerhalb weniger Wochen zur systematischen Ermordung in das
                    Konzentrations- und Vernichtungslager deportiert. Auch Gyula Fürst wurde nach der Auflösung des
                    Lagers Kistarcsa im April 1944 an das Konzentrations- und Vernichtungslager Auschwitz überstellt.
                    Gyula Fürst erinnerte sich in dem Interview, dass er bis zu diesem Zeitpunkt noch nichts von
                    Auschwitz und den dort stattfindenden Selektionen gehört hatte. Er habe darum fassungslos reagiert,
                    als polnische Mitgefangene über das Schicksal der Selektierten in den Gaskammern berichtet hätten.
                    In Auschwitz war Gyula Fürst etwa zwei Wochen inhaftiert.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Deportationsroute\"/>
                <p class=\"caption\">
                    Orte des Deportationsweges von Gyula Fürst und der Aufenthalte in Konzentrationslagern.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zu Ungarn im Zweiten Weltkrieg</h4>
                    <p>
                        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Text zum historischen Kontext\">
                            &#10149; Historischer Kontext
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit im Nationalsozialismus</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Ab dem 15. Mai 1944 fuhren täglich mehrere Züge aus Ungarn nach Auschwitz. Von diesen in weniger als
                    zwei Monaten ungefähr 440.000 aus Ungarn Deportierten wurde nur jede und jeder zehnte als
                    arbeitsfähig eingestuft. Die Übrigen wurden in Auschwitz ermordet. Im Herbst 1944 wurden mehrere
                    10.000 Menschen von Auschwitz an Konzentrationslager im Reichsgebiet überstellt, um ihre
                    Arbeitskraft in der Rüstungsindustrie oder bei der Trümmerräumung
                    auszubeuten.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
                <p>
                    Insgesamt wurden bis Mitte Januar 1945 rund 65.000 Häftlinge zu diesem Zweck in andere Lager oder
                    Standorte der Kriegswirtschaft und Rüstungsproduktion im Deutschen Reich verlegt. Gyula Fürst war
                    einer dieser Häftlinge. Von Auschwitz aus wurde er an das Arbeitslager Wüstegiersdorf, einem
                    Außenlager des Konzentrationslagers Groß-Rosen, überstellt. Dort leistete er Zwangsarbeit als
                    Elektriker. Er erinnerte sich im Interview an schwere Misshandlungen in Wüstegiersdorf. Diese habe
                    er in Form von willkürlicher Brutalität durch die SS erlebt. Im Februar 1945 folgte Gyula Fürsts
                    Transport in das Konzentrationslager Bergen-Belsen, wo er seinen Erinnerungen nach erneut nur einige
                    Tage verbrachte. Fürst erinnerte sich an Bergen-Belsen als die eigentliche Hölle seines schweren
                    Deportationsweges. Dabei sprach er im Interview vor allem von der mangelnden Lebensmittelversorgung
                    und dem großen Hungerleiden der Gefangenen im Lager. Mit den Räumungstransporten kamen Verfolgte aus
                    allen von Deutschland besetzen Ländern in Bergen-Belsen an. Die größten Gruppen bestanden aus
                    Häftlingen aus Polen, Ungarn und der Sowjetunion. Aufgrund der Zunahme der Häftlingszahlen änderte
                    die SS die Lagerstrukturen und erweiterte das Frauen- und das Männerlager schrittweise. Mit Gyula
                    Fürst erreichten allein im Februar 1945 weitere 27.100 Menschen das ohnehin schon katastrophal
                    überfüllte und unzureichend versorgte Lager.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <p>
                    Von Bergen-Belsen aus wurde Gyula Fürst zur Zwangsarbeit in die nahegelegene Stadt Celle verlegt, um
                    dort neue Schienen für die durch Bombardierung zerstörte Eisenbahnlinie zu bauen.
                </p>
                <p>
                    Am 2. März 1945 wurde er nach Hildesheim deportiert und war für eine weitere kurze Zeitspanne im
                    Außenlager Ahlem des Konzentrationslagers Neuengamme in Hannover inhaftiert. Am 8. April 1945 traf
                    Gyula Fürst erneut im Konzentrationslager Bergen-Belsen ein, wo er am 15. April 1945 von britischen
                    Truppen befreit wurde.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Zwangsarbeit</h4>
                    <p>
                        Das nationalsozialistische Deutschland griff in hohem Maße auf Zwangsarbeit
                        zurück um seinen Arbeitskräftebedarf zu decken, alleine im Deutschen Reich
                        mussten während des Zweiten Weltkrieges über 13,5 Millionen Menschen
                        Zwangsarbeit leisten. Zwangsarbeit wurde dabei in allen Industriezweigen aber
                        auch in der Landwirtschaft und in Privathaushalten eingesetzt. Die
                        Zwangsarbeiter und Zwangsarbeiterinnen gehörten insbesondere in den letzten
                        Kriegsjahren zum sichtbaren Alltag im nationalsozialistischen Deutschland.
                    </p>
                    <p>
                        <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "#zwangsarbeit\"
                           title=\"Mehr Informationen zu Zwangsarbeit und historischem Kontext\">
                            &#10149; Mehr Informationen zu Zwangsarbeit
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp eingerichtet.
                        <sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Nach der Befreiung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nach der Befreiung des Lagers Bergen-Belsen wurde Gyula Fürst von den Briten in das Krankenhaus
                    Siloah in Hannover überstellt. Bei seiner Einlieferung wog er 37 Kilo. Er wurde am 17. Juli 1945
                    entlassen.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                </p>
                <p>
                    Gyula Fürst berichtete in den Interviews darüber, dass er wie die meisten befreiten Menschen erst
                    nach dem Krieg von dem Schicksal seiner Familie erfahren habe, die aus Szombathely deportiert worden
                    war. Beide Elternteile waren zusammen nach Auschwitz verschleppt worden, wo sie ermordet wurden.
                    Über seinen älteren Bruder wusste er, dass dieser 1943 bei der Zwangsarbeit in Voronezh, Russland
                    gestorben war. Seine Schwester Irma Fürst wurde am 14. August 1944 über
                    Auschwitz<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup> in das
                    Konzentrationslager Stutthof im heutigen Polen deportiert, wo sie am 6. Dezember 1944 ebenfalls
                    ermordet wurde.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
                <p>
                    Seine Schwester Frieda Fürst überlebte zusammen mit Gyula Fürst als einzige. Sie wurde am 19.
                    November 1944 in das Konzentrationslager Ravensbrück bei Brandenburg deportiert und von dort aus am
                    3. Januar 1945 an das Konzentrationslager Buchenwald, Weimar überstellt,
                    wo sie befreit wurde.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                </p>
                <p>
                    Gyula Fürst heiratete nach dem Krieg. Seine Frau und er bekamen eine gemeinsame Tochter.
                </p>
                <p>
                    Gyula Fürst starb am 16. Mai 2012 in Ungarn.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Quellenlage</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die vorliegende Biografie basiert vor allem auf den Erzählungen und Erinnerungen von Gyula Fürst
                    selbst, welche er in zwei Interviews mit der Gedenkstätte Bergen-Belsen aufarbeitete. Ergänzt werden
                    seine subjektiven Schilderungen des Erlebten durch historische Eckdaten, die sich vor allem am
                    Katalog der Ausstellung der Gedenkstätte Bergen-Belsen orientieren.
                </p>
                <p>
                    Anhand von Fürsts Erinnerungen lässt sich sein Deportationsweg rekonstruieren, der sich durch kurze
                    Haftzeiten an vielen verschiedenen Orten auszeichnete. Die verschiedenen Arten von Zwangsarbeit, die
                    Fürst leisten musste, stehen exemplarisch für die Ausbeutung unzähliger Jüdinnen und Juden aus dem
                    damaligen Ungarn.
                </p>
                <p>
                    Zugleich verdeutlicht Gyula Fürsts Geschichte die Willkür der SS und die angesichts des
                    Kriegsverlaufes zunehmend hektische Verlegung, der die Häftlinge im Deutschen Reich ausgeliefert
                    waren.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliographie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Stiftung Niedersächsische Gedenkstätten / Gedenkstätte Bergen-Belsen. Interview mit Gyula Fürst am
                    30.11.2005, BV 365.
                </p>
                <p>
                    Stiftung niedersächsische Gedenkstätten, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                    Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung. Celle
                    2019.
                </p>
                Yad Vashem. Internationale Holocaust Gedenkstätte, Die Ermordung der ungarischen Juden, online unter:
                <a href=\"https://www.yadvashem.org/de/holocaust/about/fate-of-jews/hungary.html\"
                   title=\"Website Yad Vashem\">
                    https://www.yadvashem.org/de/holocaust/about/fate-of-jews/hungary.html
                </a>
                (letzter Zugriff:: 29.06.2024).
                </p>
                <p>
                    Jewish Virtual Library. A Project of Aice: Kistarcsa, online unter:
                    <a href=\"https://www.jewishvirtuallibrary.org/kistarcsa?utm_content=cmp-true\"
                       title=\"Seite der Jewish Virtual Library\">
                        https://www.jewishvirtuallibrary.org/kistarcsa?utm_content=cmp-true
                    </a>
                    (letzter Zugriff: 03.07.2024).
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Vgl. Yad Vashem. Internationale Holocaust Gedenkstätte, Die Ermordung der ungarischen Juden,
                        online unter: https://www.yadvashem.org/de/holocaust/about/fate-of-jews/hungary.html (letzter
                        Zugriff: 29.06.2024).
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Stiftung niedersächsische Gedenkstätten, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                        Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung.
                        Celle 2019, S. 288.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Stiftung niedersächsische Gedenkstätten, Bergen-Belsen, 216 f.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Entlassungen Krankenhaus Siloah, Hannover: DE ITS 2.1.2.1 NI 036 9 UNB ZM, DOC ID: 70656273/ITS
                        Digital Archive, Arolsen Archives.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Todesbescheinigung von Irma Fürst, Stutthof: 01014102 034.065, DOC ID: 4469772/ ITS Digital
                        Archive, Arolsen Archives.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Häftlings-Personal-Karte von Irma Fürst, Stutthof: 01014102 034.065, DOC ID: 4469771/ITS Digital
                        Archive, Arolsen Archives.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Häftlings-Personal-Karte von Frieda Fürst, Ravensbrück: 01010504 017.310, DOC ID: 7566952/ITS
                        Digital Archive, Arolsen Archives.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                </ol>
            </div>
        </div>

        <h3 class=\"mt-4\">Zitierhinweis</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Lara Meinert: Biografie von Gyula Fürst – ein ungewöhnlicher Deportationsweg, in: Holocaust in
                    Ungarn und Deportationen nach Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 302
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield ", CC BY 4.0.
                </p>
            </div>
        </div>

    </div>

    <script>

        const bratislava = L.marker([48.144722, 17.112778]).bindPopup('<strong>Bratislava</strong><br/>');

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
            center: [48.144722, 17.112778],
            zoom: 6,
            layers: [osm,
                bratislava,
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
        return "biographies/fuerst.html.twig";
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
        return array (  403 => 302,  245 => 147,  224 => 129,  161 => 69,  148 => 59,  95 => 8,  92 => 7,  82 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-map.html.twig' %}

{% block title %} Fallstudie | {{ parent() }} {% endblock %}


{% block body %}
    {% include 'elements/navigation-biographies.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2>Biografie von Gyula Fürst – ein ungewöhnlicher Deportationsweg</h2>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <h3>Zur Person</h3>
                <p class=\"abstract\">
                    Gyula Fürst wurde am 1. Juli 1923 als jüngstes von insgesamt vier Kindern in der ungarischen
                    Gemeinde Boba im Komitat Vas geboren. Als er vier Jahre alt war, zog die Familie nach Ugodpuszta um,
                    wo sein Vater als Landwirt arbeitete. Dort besuchte Fürst die Schule im sechs Kilometer entfernten
                    Beziközég.<br/>
                    Mit ungefähr neun Jahren zog Fürst mit seiner Familie erneut um, zunächst zurück nach Boba und von
                    dort in die westungarische Stadt Szombathely. Hier ließ sich Gyula Fürst zum Elektriker ausbilden
                    und wurde außerdem Mitglied in einer Jugendorganisation der Sozialdemokratischen Partei.<br/>
                    Fürst fand Arbeit in Budapest und lebte dort bei Doktor Kovács, einem Onkel mütterlicherseits.

                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
                <p class=\"caption\">
                    Gemeinde Boba im Komitat Vas, Geburtsort von Gyula Fürst.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Ein ungewöhnlicher Deportationsweg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Der Einmarsch deutscher Truppen in Ungarn markierte den Beginn der Vernichtung der
                    ungarisch-jüdischen Bevölkerung durch die Nationalsozialisten. Zu diesem Zeitpunkt befanden sich in
                    Ungarn in Folge der ungarischen Annexion von Gebieten, etwa der Slowakei, Rumäniens und
                    Jugoslawiens, circa 800.000 Juden und Jüdinnen.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    Am 20. März 1944 wurde Gyula Fürst – wie er sich in
                    einem am 30. November 2005 geführten Interview mit der Gedenkstätte Bergen-Belsen erinnerte – bei
                    einer Straßenbahnkontrolle auf dem Weg zur Arbeit von ungarischen Pfeilkreuzlern verhaftet und in
                    ein polizeiliches Sammelgefängnis überstellt. Nach kurzem Aufenthalt folgte Gyula Fürsts Deportation
                    nach Kistarcsa.
                    Das Lager befand sich ungefähr 15 Kilometer nordwestlich von Budapest. Im Mai 1944
                    begannen die Deportationen nach Auschwitz-Birkenau. Über die Hälfte der jüdischen Bevölkerung im
                    ungarischen Staatsgebiet wurde innerhalb weniger Wochen zur systematischen Ermordung in das
                    Konzentrations- und Vernichtungslager deportiert. Auch Gyula Fürst wurde nach der Auflösung des
                    Lagers Kistarcsa im April 1944 an das Konzentrations- und Vernichtungslager Auschwitz überstellt.
                    Gyula Fürst erinnerte sich in dem Interview, dass er bis zu diesem Zeitpunkt noch nichts von
                    Auschwitz und den dort stattfindenden Selektionen gehört hatte. Er habe darum fassungslos reagiert,
                    als polnische Mitgefangene über das Schicksal der Selektierten in den Gaskammern berichtet hätten.
                    In Auschwitz war Gyula Fürst etwa zwei Wochen inhaftiert.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Deportationsroute\"/>
                <p class=\"caption\">
                    Orte des Deportationsweges von Gyula Fürst und der Aufenthalte in Konzentrationslagern.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zu Ungarn im Zweiten Weltkrieg</h4>
                    <p>
                        <a href=\"{{ path('app_context') }}\" title=\"Text zum historischen Kontext\">
                            &#10149; Historischer Kontext
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit im Nationalsozialismus</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Ab dem 15. Mai 1944 fuhren täglich mehrere Züge aus Ungarn nach Auschwitz. Von diesen in weniger als
                    zwei Monaten ungefähr 440.000 aus Ungarn Deportierten wurde nur jede und jeder zehnte als
                    arbeitsfähig eingestuft. Die Übrigen wurden in Auschwitz ermordet. Im Herbst 1944 wurden mehrere
                    10.000 Menschen von Auschwitz an Konzentrationslager im Reichsgebiet überstellt, um ihre
                    Arbeitskraft in der Rüstungsindustrie oder bei der Trümmerräumung
                    auszubeuten.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
                <p>
                    Insgesamt wurden bis Mitte Januar 1945 rund 65.000 Häftlinge zu diesem Zweck in andere Lager oder
                    Standorte der Kriegswirtschaft und Rüstungsproduktion im Deutschen Reich verlegt. Gyula Fürst war
                    einer dieser Häftlinge. Von Auschwitz aus wurde er an das Arbeitslager Wüstegiersdorf, einem
                    Außenlager des Konzentrationslagers Groß-Rosen, überstellt. Dort leistete er Zwangsarbeit als
                    Elektriker. Er erinnerte sich im Interview an schwere Misshandlungen in Wüstegiersdorf. Diese habe
                    er in Form von willkürlicher Brutalität durch die SS erlebt. Im Februar 1945 folgte Gyula Fürsts
                    Transport in das Konzentrationslager Bergen-Belsen, wo er seinen Erinnerungen nach erneut nur einige
                    Tage verbrachte. Fürst erinnerte sich an Bergen-Belsen als die eigentliche Hölle seines schweren
                    Deportationsweges. Dabei sprach er im Interview vor allem von der mangelnden Lebensmittelversorgung
                    und dem großen Hungerleiden der Gefangenen im Lager. Mit den Räumungstransporten kamen Verfolgte aus
                    allen von Deutschland besetzen Ländern in Bergen-Belsen an. Die größten Gruppen bestanden aus
                    Häftlingen aus Polen, Ungarn und der Sowjetunion. Aufgrund der Zunahme der Häftlingszahlen änderte
                    die SS die Lagerstrukturen und erweiterte das Frauen- und das Männerlager schrittweise. Mit Gyula
                    Fürst erreichten allein im Februar 1945 weitere 27.100 Menschen das ohnehin schon katastrophal
                    überfüllte und unzureichend versorgte Lager.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <p>
                    Von Bergen-Belsen aus wurde Gyula Fürst zur Zwangsarbeit in die nahegelegene Stadt Celle verlegt, um
                    dort neue Schienen für die durch Bombardierung zerstörte Eisenbahnlinie zu bauen.
                </p>
                <p>
                    Am 2. März 1945 wurde er nach Hildesheim deportiert und war für eine weitere kurze Zeitspanne im
                    Außenlager Ahlem des Konzentrationslagers Neuengamme in Hannover inhaftiert. Am 8. April 1945 traf
                    Gyula Fürst erneut im Konzentrationslager Bergen-Belsen ein, wo er am 15. April 1945 von britischen
                    Truppen befreit wurde.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Zwangsarbeit</h4>
                    <p>
                        Das nationalsozialistische Deutschland griff in hohem Maße auf Zwangsarbeit
                        zurück um seinen Arbeitskräftebedarf zu decken, alleine im Deutschen Reich
                        mussten während des Zweiten Weltkrieges über 13,5 Millionen Menschen
                        Zwangsarbeit leisten. Zwangsarbeit wurde dabei in allen Industriezweigen aber
                        auch in der Landwirtschaft und in Privathaushalten eingesetzt. Die
                        Zwangsarbeiter und Zwangsarbeiterinnen gehörten insbesondere in den letzten
                        Kriegsjahren zum sichtbaren Alltag im nationalsozialistischen Deutschland.
                    </p>
                    <p>
                        <a href=\"{{ path('app_context') }}#zwangsarbeit\"
                           title=\"Mehr Informationen zu Zwangsarbeit und historischem Kontext\">
                            &#10149; Mehr Informationen zu Zwangsarbeit
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp eingerichtet.
                        <sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Nach der Befreiung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nach der Befreiung des Lagers Bergen-Belsen wurde Gyula Fürst von den Briten in das Krankenhaus
                    Siloah in Hannover überstellt. Bei seiner Einlieferung wog er 37 Kilo. Er wurde am 17. Juli 1945
                    entlassen.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                </p>
                <p>
                    Gyula Fürst berichtete in den Interviews darüber, dass er wie die meisten befreiten Menschen erst
                    nach dem Krieg von dem Schicksal seiner Familie erfahren habe, die aus Szombathely deportiert worden
                    war. Beide Elternteile waren zusammen nach Auschwitz verschleppt worden, wo sie ermordet wurden.
                    Über seinen älteren Bruder wusste er, dass dieser 1943 bei der Zwangsarbeit in Voronezh, Russland
                    gestorben war. Seine Schwester Irma Fürst wurde am 14. August 1944 über
                    Auschwitz<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup> in das
                    Konzentrationslager Stutthof im heutigen Polen deportiert, wo sie am 6. Dezember 1944 ebenfalls
                    ermordet wurde.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
                <p>
                    Seine Schwester Frieda Fürst überlebte zusammen mit Gyula Fürst als einzige. Sie wurde am 19.
                    November 1944 in das Konzentrationslager Ravensbrück bei Brandenburg deportiert und von dort aus am
                    3. Januar 1945 an das Konzentrationslager Buchenwald, Weimar überstellt,
                    wo sie befreit wurde.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                </p>
                <p>
                    Gyula Fürst heiratete nach dem Krieg. Seine Frau und er bekamen eine gemeinsame Tochter.
                </p>
                <p>
                    Gyula Fürst starb am 16. Mai 2012 in Ungarn.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Quellenlage</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die vorliegende Biografie basiert vor allem auf den Erzählungen und Erinnerungen von Gyula Fürst
                    selbst, welche er in zwei Interviews mit der Gedenkstätte Bergen-Belsen aufarbeitete. Ergänzt werden
                    seine subjektiven Schilderungen des Erlebten durch historische Eckdaten, die sich vor allem am
                    Katalog der Ausstellung der Gedenkstätte Bergen-Belsen orientieren.
                </p>
                <p>
                    Anhand von Fürsts Erinnerungen lässt sich sein Deportationsweg rekonstruieren, der sich durch kurze
                    Haftzeiten an vielen verschiedenen Orten auszeichnete. Die verschiedenen Arten von Zwangsarbeit, die
                    Fürst leisten musste, stehen exemplarisch für die Ausbeutung unzähliger Jüdinnen und Juden aus dem
                    damaligen Ungarn.
                </p>
                <p>
                    Zugleich verdeutlicht Gyula Fürsts Geschichte die Willkür der SS und die angesichts des
                    Kriegsverlaufes zunehmend hektische Verlegung, der die Häftlinge im Deutschen Reich ausgeliefert
                    waren.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliographie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Stiftung Niedersächsische Gedenkstätten / Gedenkstätte Bergen-Belsen. Interview mit Gyula Fürst am
                    30.11.2005, BV 365.
                </p>
                <p>
                    Stiftung niedersächsische Gedenkstätten, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                    Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung. Celle
                    2019.
                </p>
                Yad Vashem. Internationale Holocaust Gedenkstätte, Die Ermordung der ungarischen Juden, online unter:
                <a href=\"https://www.yadvashem.org/de/holocaust/about/fate-of-jews/hungary.html\"
                   title=\"Website Yad Vashem\">
                    https://www.yadvashem.org/de/holocaust/about/fate-of-jews/hungary.html
                </a>
                (letzter Zugriff:: 29.06.2024).
                </p>
                <p>
                    Jewish Virtual Library. A Project of Aice: Kistarcsa, online unter:
                    <a href=\"https://www.jewishvirtuallibrary.org/kistarcsa?utm_content=cmp-true\"
                       title=\"Seite der Jewish Virtual Library\">
                        https://www.jewishvirtuallibrary.org/kistarcsa?utm_content=cmp-true
                    </a>
                    (letzter Zugriff: 03.07.2024).
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Vgl. Yad Vashem. Internationale Holocaust Gedenkstätte, Die Ermordung der ungarischen Juden,
                        online unter: https://www.yadvashem.org/de/holocaust/about/fate-of-jews/hungary.html (letzter
                        Zugriff: 29.06.2024).
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Stiftung niedersächsische Gedenkstätten, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                        Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung.
                        Celle 2019, S. 288.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Stiftung niedersächsische Gedenkstätten, Bergen-Belsen, 216 f.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Entlassungen Krankenhaus Siloah, Hannover: DE ITS 2.1.2.1 NI 036 9 UNB ZM, DOC ID: 70656273/ITS
                        Digital Archive, Arolsen Archives.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Todesbescheinigung von Irma Fürst, Stutthof: 01014102 034.065, DOC ID: 4469772/ ITS Digital
                        Archive, Arolsen Archives.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Häftlings-Personal-Karte von Irma Fürst, Stutthof: 01014102 034.065, DOC ID: 4469771/ITS Digital
                        Archive, Arolsen Archives.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Häftlings-Personal-Karte von Frieda Fürst, Ravensbrück: 01010504 017.310, DOC ID: 7566952/ITS
                        Digital Archive, Arolsen Archives.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                </ol>
            </div>
        </div>

        <h3 class=\"mt-4\">Zitierhinweis</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Lara Meinert: Biografie von Gyula Fürst – ein ungewöhnlicher Deportationsweg, in: Holocaust in
                    Ungarn und Deportationen nach Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_bio_fuerst') }}, CC BY 4.0.
                </p>
            </div>
        </div>

    </div>

    <script>

        const bratislava = L.marker([48.144722, 17.112778]).bindPopup('<strong>Bratislava</strong><br/>');

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
            center: [48.144722, 17.112778],
            zoom: 6,
            layers: [osm,
                bratislava,
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

{% endblock %}", "biographies/fuerst.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/biographies/fuerst.html.twig");
    }
}
