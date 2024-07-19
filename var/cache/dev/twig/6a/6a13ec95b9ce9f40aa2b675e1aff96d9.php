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

/* biographies/study.html.twig */
class __TwigTemplate_c92dcb9f7191437120b4d673cb128ea3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/study.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/study.html.twig"));

        $this->parent = $this->loadTemplate("base-map.html.twig", "biographies/study.html.twig", 1);
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
        yield from         $this->loadTemplate("elements/navigation-biographies.html.twig", "biographies/study.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "

    <div class=\"container g-4 py-5 study\">
        <h2>Yehuda Blum und die Kasztner Gruppe</h2>
        <p>(Geboren am 02.10.1931 in Bratislava, Tschechoslowakei; lebt in Jerusalem)</p>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <p class=\"abstract\">
                    Yehuda Blum wurde am 02.10.1931 im damals tschechoslowakischen Bratislava geboren. Er war der Älteste von insgesamt drei Kindern. Er hatte einen Bruder (Amram Blum) und eine Schwester (Leah Blum).
                    Yehuda Blums Vater Joseph Blum kam aus dem Osten der Slowakei nach Bratislava und wurde dort der Direktor der Jewish Credit Bank. Blums Mutter Seldi Blum (geborene Dux) wurde in Transsilvanien geboren und zog gemeinsam mit ihrem Mann nach ihrer Hochzeit im Jahre 1930 nach Bratislava.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Lage spitzt sich zu</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    1938 wurden die Aktivitäten der deutschen Minderheit in Bratislava militanter. Am 09.11.1938
                    folgte die sogenannte Reichsprogromnacht1, wobei jüdische Geschäfte und Schulen in der Stadt
                    zerstört wurden. Dies geschah vom 09. auf den 10. November 1938. Das nationalsozialistische
                    Deutsche Reich ordnete gezielte Gewaltaktionen gegen die jüdische Bevölkerung an. Dadurch
                    wurde der Beginn der systematischen Verfolgung und Vernichtung der Jüdinnen und Juden
                    nicht nur in Deutschland, sondern auch weit über dessen Grenzen hinaus markiert. In dieser
                    Nacht starben mehr als 10.000 Menschen, weitere 30.000 wurden verschleppt oder verhaftet.
                    Die Slowakei war während des Zweiten Weltkrieges vom Deutschen Reich abhängig, Präsident
                    war der katholische Priester Jozef Tiso, der mit Deutschland kooperierte und ähnliche
                    ideologische Ansätze vertrat. Unterstützt wurde das Regime durch die 1913 von Andrej Hlinka
                    gegründete slowakische Volkspartei Hlinka-Garde. Die Partei propagierte einen konservativen,
                    katholischen Nationalismus. Ab 1938 wurde die Verfolgung und Entrechtung der rund 80.000
                    Juden und Jüdinnen des Landes verstärkt zum Kernelement der politischen Agenda der Partei.
                    Von 1942 bis 1944 wurden ca. zwei Drittel der jüdischen Bevölker
                </p>
                <p>
                    Yehuda Blums persönliche Erinnerungen wurden in einem Zeitzeugeninterview mit der
                    Gedenkstätte Bergen-Belsen festgehalten, welches am 19.06.2003 aufgezeichnet wurde. Er
                    erinnert sich, dass die Familie Blum 1939, ein Jahr nach den Novemberprogromen, in der Nacht
                    von der slowakischen Hlinka-Garde überfallen wurde. Daraufhin verkündete Blums Vater, dass
                    1 Vgl. Toyka-Seid, Christiane; Schneider, Gerd: Pogrom/Reichspogromnacht. In: Bundeszentrale für politische
                    Bildung. Unter: https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogrom-
                    reichspogromnacht/ (aufgerufen am: 28.04.2024).
                    sie nicht länger in Bratislava leben könnten, da die Präsenz deutscher und slowakischer Truppen
                    und der Erlass antisemitischer Restriktionen in Bratislava stark zunähme.
                </p>
                <p>
                    Die Familie lebte bis 1940 in Bratislava und zog dann nach Budapest, Ungarn. Nach Ankunft
                    der deutschen Truppen im März 1944 änderten sich die Lebensbedingungen der jüdischen
                    Bevölkerung in Ungarn schlagartig. Yehuda Blum schildert im Interview, dass seine Schule
                    bereits am nächsten Tag geschlossen wurde und die alltägliche Diskriminierung zunahm.
                </p>

            </div>
            <div class=\"col-lg-4\">

            </div>
        </div>

        <h3 class=\"mt-4\">Die Kasztner-Gruppe</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im Juni 1944 gab es erste Gespräche darüber, dass der sogenannte Kasztner-Transport
                    ungarische Juden und Jüdinnen durch die Ausreise in ein neutrales Land vor der Deportation
                    nach Auschwitz bewahren sollte. Reszö Kasztner verhandelte als Vertreter des jüdischen
                    Hilfskomitees in Ungarn mit der SS. Zu diesem Zeitpunkt hatten die Massendeportationen nach
                    Auschwitz seit Mai 1944 bereits begonnen. Gegen kriegsrelevante Güter und Geld sollte die
                    Kasztner-Gruppe in die Freiheit entlassen werden. Stattdessen konnten nur 318 der insgesamt
                    etwa 1690 Menschen nach weiteren Verhandlungen mit der SS das Lager Bergen-Belsen im
                    August 1944 verlassen. Der größere Teil der Gruppe reiste erst im Dezember 1944 in die
                    Schweiz aus. 17 Menschen mussten trotz der bereits getroffenen Vereinbarungen in Bergen-
                    Belsen zurückbleiben.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Obwohl Yehuda Blums Vater an diesem Transport zunächst nicht teilnehmen wollte,
                    organisierte er später gemeinsam mit Philip Freudiger, dem Oberhaupt der orthodoxen
                    jüdischen Gemeinschaft in Budapest, die Teilnahme der Familie am Kasztner-Transport.
                </p>
                <p>
                    Yehuda Blum erinnert sich an seinen Weg nach Deutschland, wobei seine Familie daraufhin in
                    ein ungarisches Sammellager gebracht wurde. Nach einem kurzen Aufenthalt im Lager verließ
                    die Familie Blum Ungarn am 01.07.1944 in Güterwagons gemeinsam mit der ungarischen
                    jüdischen Elite bestehend aus ungefähr 1690 Menschen. Sie machten zunächst Halt an der
                    deutsch-österreichischen Grenze. Dort entstanden laut Blum erste Gerüchte über einen
                    Transport nach Auschwitz und Panik brach unter den Menschen aus. Der nächste Halt des
                    Transports war Bratislava. Yehuda Blum erinnert sich, dass manche Menschen den Zug hier
                    verließen und andere wiederum zustiegen. Am 07.07.1944 hielt der Zug zur Entlausung in Linz.
                    Bei dieser Station erlebten die Menschen weitere Panik vor einer möglichen Vergasung durch
                    die SS. Von Linz aus fuhr der Zug weiter Richtung Norddeutschland und erreichte Celle. Von
                    dort aus musste die später sogenannte Kasztner-Gruppe zu Fuß nach Bergen-Belsen
                    weiterlaufen.
                </p>
                <p>
                    Yehuda Blums Geschichte zeigt, dass die Menschen nie ganz sicher sein konnten, wo ihr Weg
                    sie hinführen würde. Obwohl der sogenannte Kasztner Transport dazu vorgesehen war,
                    ungarische Jüdinnen und Juden in ein neutrales Land zu bringen, endete dieser zunächst im
                    Konzentrationslager Bergen-Belsen. Die ständige Ungewissheit über das eigene Schicksal und
                    bevorstehende Deportationswege und -ziele, war für die Menschen eine schwere mentale
                    Belastung.
                </p>

                <h3 class=\"mt-4\">Im Austauschlager Bergen-Belsen</h3>

                <p>
                    Bei der Ankunft im Konzentrationslager Bergen-Belsen wurde die Familie zunächst registriert,
                    wobei niemand aus der Kasztner-Gruppe wusste, wie lange sie sich im Lager aufhalten würden.
                    Yehuda Blums Familie wurde nicht zur Ausreise in die Schweiz mit dem ersten Transport im
                    August 1944 aufgerufen und musste daher weitere ungewisse Monate im Lager verbringen.
                </p>
                <p>
                    Yehuda Blum teilte im Austauschlager Bergen-Belsen das gleiche Schicksal wie mindestens
                    14.600 weitere jüdische Menschen, die zwischen Juli 1943 und Dezember 1944 im Lager
                    ankamen.
                </p>
                <p>
                    Yehuda Blum erinnert sich im Interview an willkürliche Inspektionen und Zählappelle durch
                    die SS, die während seines etwa vier-monatigen Aufenthalts im Ungarnlager den Lageralltag
                    prägten. Allerdings erinnert er sich auch an abendliche Vorträge, gemeinsames Singen und
                    Nachmittagsunterricht in den Baracken. Da Yehuda Blum seinen dreizehnten Geburtstag in
                    Bergen-Belsen erlebte, fand auch die Feier zu seiner Bar Mizwa im Lager statt, welche von
                    Mithäftlingen organisiert wurde.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                <p>
                    Bergen-Belsen diente der SS und dem Auswärtigen Amt zum Austausch jüdischer
                    Gefangener mit internationalen Pässen gegen deutsche Kriegsgefangene in anderen Ländern.
                    Trotz der Austauschfunktion des Lagers gelangten kaum Menschen auf diesem Weg in die
                    Freiheit. Stattdessen waren sie ebenso wie die Menschen in anderen Lagerteilen in Baracken
                    untergebracht, waren den Misshandlungen der SS ausgeliefert und mussten ihre Arbeitskraft
                    zur Zwangsarbeit einsetzen.3 Innerhalb des Austauschlagers gab es weitere Teillager, die von
                    der SS für die unterschiedlichen Häftlingsgruppen errichtet wurden. Die Teillager bestanden
                    zum einen aus dem sogenannten Sternlager, in welches ab August 1943 mehr als 5.400
                    Häftlinge gebracht wurden. In ausschließlich diesem Lagerteil mussten die Menschen den
                    sogenannten Judenstern tragen und Zwangsarbeit leisten. Zum anderen unterteilte sich das
                    Austauschlager in das Sonderlager, wo ab Juli 1943 ungefähr 2.700 überwiegend polnische
                    Häftlinge untergebracht waren; das Ungarnlager, welches für die Unterbringung von insgesamt
                    mehr als 5.000 ungarischen Häftlingen errichtet wurde und das Neutralenlager, wo ab August
                    1943 etwa 600 Häftlinge untergebracht wurden, die zur Freilassung in die während des Zweiten
                    Weltkrieges neutralen Staaten Spanien, Portugal und die Türkei vorgesehen waren. In allen
                    Lagerteilen trugen die Häftlinge Zivilkleidung und wurden nach Männern und Frauen getrennt.4
                    In der Endphase des Zweiten Weltkrieges wurde Bergen-Belsen aufgrund seiner fronfernen
                    Lage zum Zielort von über 100 Transporten und Todesmärschen aus frontnahen, mittlerweile
                    aufgelösten Konzentrationslagern. Auf diesem Wege gelangten zwischen Dezember 1944 und
                    April 1945 mindestens 85.000 Männer, Frauen und Kinder nach Bergen-Belsen. Die genaue
                    Anzahl der nach Bergen-Belsen deportierten Menschen ist unklar, da die SS kurz vor der
                    Befreiung des Lagers die Lagerregistratur zerstörte und von den eintreffenden Transporten
                    keine Transportlisten mehr erstellt wurden.
                </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Ausreise in die Schweiz</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Yehuda Blum verließ das Lager am frühen Nachmittag des 04.12.1944 und wurde zusammen
                    mit den übrigen Mitgliedern der Kasztner-Gruppe zur Abreise bereit gemacht. Sein Zug hielt
                    zunächst in Augsburg, Lindau und Bregenz. Bei einem weiteren Halt in Lustenau am
                    Grenzübergang zur Schweiz mussten die Menschen den Zug wechseln und in einen Schweizer
                    Zug umsteigen. Als der Zug in Sankt Margarethen in der Schweiz ankam, war die Gruppe
                    apathisch, niemand sprach ein Wort der Freude, Schwerkranke wurden an ein nahegelegenes
                    Krankenhaus überstellt.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Deportationsroute\"/>
                <p class=\"caption\">
                    Deportationsroute
                </p>
                <p>
                    Yehuda Blum wurde zusammen mit anderen Menschen in einer Turnhalle in Sankt Gallen
                    untergebracht. Nach einem kurzen Aufenthalt fuhr er mit seinem Bruder über Montreux weiter
                    nach Caux. Gemeinsam verbrachten sie einen mehrmonatigen Aufenthalt in einem Kinderheim
                    in Interlaken. Seine Schwester wurde aufgrund ihrer schlechten körperlichen Verfassung in
                    einem Heim in Engadin untergebracht.
                </p>
                <p>
                    Im August 1945 reiste die Familie nach Bari, Italien und von dort aus nach Taranto. Hier
                    betraten sie ein Schiff nach Palästina, wo sie am 01.09.1945 ankamen.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Beruflicher Werdegang</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In Jerusalem besuchte Yehuda Blum die Schule und schloss eine Lehrerausbildung ab. Er
                    begann ein Jurastudium an der Hebrew University und war außerdem politisch aktiv in der
                    Studentenvertretung. Von 1955 bis 1959 leistete er Militärdienst. Daraufhin begann er ein
                    Promotionsstudium in London. Ab 1961 war Yehuda Blum Jurist im israelischen
                    Außenministerium und ab 1965 Professor für Internationales Recht an der Hebrew University
                    in Jerusalem. Ein Jahr später heiratete er seine Frau und bekam mit ihr drei gemeinsame Kinder.
                    Von 1978 bis 1984 war Blum UN-Botschafter in New York. Ab 1984 nahm er seine Professur
                    für Internationales Recht wieder auf.
                </p>
                <p>
                    Yehuda Blum veröffentlichte im Laufe seines Lebens zahlreiche Bücher. 2002 wurde Blum
                    pensioniert und lebt seither in Jerusalem.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellenlage</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliographie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                </p>
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
                    Autor/in: Titel, in: Holocaust in Ungarn und Deportationen nach Norddeutschland 1944, hrsg. vom Institut für die Geschichte der deutschen Juden, URL: www.url.de, DATUM.
                </p>
            </div>
        </div>

    </div>

    <script>

        const bratislava = L.marker([ 48.144722,17.112778]).bindPopup('<strong>Bratislava</strong><br/>');

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
            center: [48.144722,17.112778],
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
        return "biographies/study.html.twig";
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
        return array (  276 => 187,  95 => 8,  92 => 7,  82 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-map.html.twig' %}

{% block title %} Fallstudie | {{ parent() }} {% endblock %}


{% block body %}
    {% include 'elements/navigation-biographies.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2>Yehuda Blum und die Kasztner Gruppe</h2>
        <p>(Geboren am 02.10.1931 in Bratislava, Tschechoslowakei; lebt in Jerusalem)</p>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <p class=\"abstract\">
                    Yehuda Blum wurde am 02.10.1931 im damals tschechoslowakischen Bratislava geboren. Er war der Älteste von insgesamt drei Kindern. Er hatte einen Bruder (Amram Blum) und eine Schwester (Leah Blum).
                    Yehuda Blums Vater Joseph Blum kam aus dem Osten der Slowakei nach Bratislava und wurde dort der Direktor der Jewish Credit Bank. Blums Mutter Seldi Blum (geborene Dux) wurde in Transsilvanien geboren und zog gemeinsam mit ihrem Mann nach ihrer Hochzeit im Jahre 1930 nach Bratislava.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Lage spitzt sich zu</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    1938 wurden die Aktivitäten der deutschen Minderheit in Bratislava militanter. Am 09.11.1938
                    folgte die sogenannte Reichsprogromnacht1, wobei jüdische Geschäfte und Schulen in der Stadt
                    zerstört wurden. Dies geschah vom 09. auf den 10. November 1938. Das nationalsozialistische
                    Deutsche Reich ordnete gezielte Gewaltaktionen gegen die jüdische Bevölkerung an. Dadurch
                    wurde der Beginn der systematischen Verfolgung und Vernichtung der Jüdinnen und Juden
                    nicht nur in Deutschland, sondern auch weit über dessen Grenzen hinaus markiert. In dieser
                    Nacht starben mehr als 10.000 Menschen, weitere 30.000 wurden verschleppt oder verhaftet.
                    Die Slowakei war während des Zweiten Weltkrieges vom Deutschen Reich abhängig, Präsident
                    war der katholische Priester Jozef Tiso, der mit Deutschland kooperierte und ähnliche
                    ideologische Ansätze vertrat. Unterstützt wurde das Regime durch die 1913 von Andrej Hlinka
                    gegründete slowakische Volkspartei Hlinka-Garde. Die Partei propagierte einen konservativen,
                    katholischen Nationalismus. Ab 1938 wurde die Verfolgung und Entrechtung der rund 80.000
                    Juden und Jüdinnen des Landes verstärkt zum Kernelement der politischen Agenda der Partei.
                    Von 1942 bis 1944 wurden ca. zwei Drittel der jüdischen Bevölker
                </p>
                <p>
                    Yehuda Blums persönliche Erinnerungen wurden in einem Zeitzeugeninterview mit der
                    Gedenkstätte Bergen-Belsen festgehalten, welches am 19.06.2003 aufgezeichnet wurde. Er
                    erinnert sich, dass die Familie Blum 1939, ein Jahr nach den Novemberprogromen, in der Nacht
                    von der slowakischen Hlinka-Garde überfallen wurde. Daraufhin verkündete Blums Vater, dass
                    1 Vgl. Toyka-Seid, Christiane; Schneider, Gerd: Pogrom/Reichspogromnacht. In: Bundeszentrale für politische
                    Bildung. Unter: https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogrom-
                    reichspogromnacht/ (aufgerufen am: 28.04.2024).
                    sie nicht länger in Bratislava leben könnten, da die Präsenz deutscher und slowakischer Truppen
                    und der Erlass antisemitischer Restriktionen in Bratislava stark zunähme.
                </p>
                <p>
                    Die Familie lebte bis 1940 in Bratislava und zog dann nach Budapest, Ungarn. Nach Ankunft
                    der deutschen Truppen im März 1944 änderten sich die Lebensbedingungen der jüdischen
                    Bevölkerung in Ungarn schlagartig. Yehuda Blum schildert im Interview, dass seine Schule
                    bereits am nächsten Tag geschlossen wurde und die alltägliche Diskriminierung zunahm.
                </p>

            </div>
            <div class=\"col-lg-4\">

            </div>
        </div>

        <h3 class=\"mt-4\">Die Kasztner-Gruppe</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im Juni 1944 gab es erste Gespräche darüber, dass der sogenannte Kasztner-Transport
                    ungarische Juden und Jüdinnen durch die Ausreise in ein neutrales Land vor der Deportation
                    nach Auschwitz bewahren sollte. Reszö Kasztner verhandelte als Vertreter des jüdischen
                    Hilfskomitees in Ungarn mit der SS. Zu diesem Zeitpunkt hatten die Massendeportationen nach
                    Auschwitz seit Mai 1944 bereits begonnen. Gegen kriegsrelevante Güter und Geld sollte die
                    Kasztner-Gruppe in die Freiheit entlassen werden. Stattdessen konnten nur 318 der insgesamt
                    etwa 1690 Menschen nach weiteren Verhandlungen mit der SS das Lager Bergen-Belsen im
                    August 1944 verlassen. Der größere Teil der Gruppe reiste erst im Dezember 1944 in die
                    Schweiz aus. 17 Menschen mussten trotz der bereits getroffenen Vereinbarungen in Bergen-
                    Belsen zurückbleiben.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Obwohl Yehuda Blums Vater an diesem Transport zunächst nicht teilnehmen wollte,
                    organisierte er später gemeinsam mit Philip Freudiger, dem Oberhaupt der orthodoxen
                    jüdischen Gemeinschaft in Budapest, die Teilnahme der Familie am Kasztner-Transport.
                </p>
                <p>
                    Yehuda Blum erinnert sich an seinen Weg nach Deutschland, wobei seine Familie daraufhin in
                    ein ungarisches Sammellager gebracht wurde. Nach einem kurzen Aufenthalt im Lager verließ
                    die Familie Blum Ungarn am 01.07.1944 in Güterwagons gemeinsam mit der ungarischen
                    jüdischen Elite bestehend aus ungefähr 1690 Menschen. Sie machten zunächst Halt an der
                    deutsch-österreichischen Grenze. Dort entstanden laut Blum erste Gerüchte über einen
                    Transport nach Auschwitz und Panik brach unter den Menschen aus. Der nächste Halt des
                    Transports war Bratislava. Yehuda Blum erinnert sich, dass manche Menschen den Zug hier
                    verließen und andere wiederum zustiegen. Am 07.07.1944 hielt der Zug zur Entlausung in Linz.
                    Bei dieser Station erlebten die Menschen weitere Panik vor einer möglichen Vergasung durch
                    die SS. Von Linz aus fuhr der Zug weiter Richtung Norddeutschland und erreichte Celle. Von
                    dort aus musste die später sogenannte Kasztner-Gruppe zu Fuß nach Bergen-Belsen
                    weiterlaufen.
                </p>
                <p>
                    Yehuda Blums Geschichte zeigt, dass die Menschen nie ganz sicher sein konnten, wo ihr Weg
                    sie hinführen würde. Obwohl der sogenannte Kasztner Transport dazu vorgesehen war,
                    ungarische Jüdinnen und Juden in ein neutrales Land zu bringen, endete dieser zunächst im
                    Konzentrationslager Bergen-Belsen. Die ständige Ungewissheit über das eigene Schicksal und
                    bevorstehende Deportationswege und -ziele, war für die Menschen eine schwere mentale
                    Belastung.
                </p>

                <h3 class=\"mt-4\">Im Austauschlager Bergen-Belsen</h3>

                <p>
                    Bei der Ankunft im Konzentrationslager Bergen-Belsen wurde die Familie zunächst registriert,
                    wobei niemand aus der Kasztner-Gruppe wusste, wie lange sie sich im Lager aufhalten würden.
                    Yehuda Blums Familie wurde nicht zur Ausreise in die Schweiz mit dem ersten Transport im
                    August 1944 aufgerufen und musste daher weitere ungewisse Monate im Lager verbringen.
                </p>
                <p>
                    Yehuda Blum teilte im Austauschlager Bergen-Belsen das gleiche Schicksal wie mindestens
                    14.600 weitere jüdische Menschen, die zwischen Juli 1943 und Dezember 1944 im Lager
                    ankamen.
                </p>
                <p>
                    Yehuda Blum erinnert sich im Interview an willkürliche Inspektionen und Zählappelle durch
                    die SS, die während seines etwa vier-monatigen Aufenthalts im Ungarnlager den Lageralltag
                    prägten. Allerdings erinnert er sich auch an abendliche Vorträge, gemeinsames Singen und
                    Nachmittagsunterricht in den Baracken. Da Yehuda Blum seinen dreizehnten Geburtstag in
                    Bergen-Belsen erlebte, fand auch die Feier zu seiner Bar Mizwa im Lager statt, welche von
                    Mithäftlingen organisiert wurde.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                <p>
                    Bergen-Belsen diente der SS und dem Auswärtigen Amt zum Austausch jüdischer
                    Gefangener mit internationalen Pässen gegen deutsche Kriegsgefangene in anderen Ländern.
                    Trotz der Austauschfunktion des Lagers gelangten kaum Menschen auf diesem Weg in die
                    Freiheit. Stattdessen waren sie ebenso wie die Menschen in anderen Lagerteilen in Baracken
                    untergebracht, waren den Misshandlungen der SS ausgeliefert und mussten ihre Arbeitskraft
                    zur Zwangsarbeit einsetzen.3 Innerhalb des Austauschlagers gab es weitere Teillager, die von
                    der SS für die unterschiedlichen Häftlingsgruppen errichtet wurden. Die Teillager bestanden
                    zum einen aus dem sogenannten Sternlager, in welches ab August 1943 mehr als 5.400
                    Häftlinge gebracht wurden. In ausschließlich diesem Lagerteil mussten die Menschen den
                    sogenannten Judenstern tragen und Zwangsarbeit leisten. Zum anderen unterteilte sich das
                    Austauschlager in das Sonderlager, wo ab Juli 1943 ungefähr 2.700 überwiegend polnische
                    Häftlinge untergebracht waren; das Ungarnlager, welches für die Unterbringung von insgesamt
                    mehr als 5.000 ungarischen Häftlingen errichtet wurde und das Neutralenlager, wo ab August
                    1943 etwa 600 Häftlinge untergebracht wurden, die zur Freilassung in die während des Zweiten
                    Weltkrieges neutralen Staaten Spanien, Portugal und die Türkei vorgesehen waren. In allen
                    Lagerteilen trugen die Häftlinge Zivilkleidung und wurden nach Männern und Frauen getrennt.4
                    In der Endphase des Zweiten Weltkrieges wurde Bergen-Belsen aufgrund seiner fronfernen
                    Lage zum Zielort von über 100 Transporten und Todesmärschen aus frontnahen, mittlerweile
                    aufgelösten Konzentrationslagern. Auf diesem Wege gelangten zwischen Dezember 1944 und
                    April 1945 mindestens 85.000 Männer, Frauen und Kinder nach Bergen-Belsen. Die genaue
                    Anzahl der nach Bergen-Belsen deportierten Menschen ist unklar, da die SS kurz vor der
                    Befreiung des Lagers die Lagerregistratur zerstörte und von den eintreffenden Transporten
                    keine Transportlisten mehr erstellt wurden.
                </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Ausreise in die Schweiz</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Yehuda Blum verließ das Lager am frühen Nachmittag des 04.12.1944 und wurde zusammen
                    mit den übrigen Mitgliedern der Kasztner-Gruppe zur Abreise bereit gemacht. Sein Zug hielt
                    zunächst in Augsburg, Lindau und Bregenz. Bei einem weiteren Halt in Lustenau am
                    Grenzübergang zur Schweiz mussten die Menschen den Zug wechseln und in einen Schweizer
                    Zug umsteigen. Als der Zug in Sankt Margarethen in der Schweiz ankam, war die Gruppe
                    apathisch, niemand sprach ein Wort der Freude, Schwerkranke wurden an ein nahegelegenes
                    Krankenhaus überstellt.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Deportationsroute\"/>
                <p class=\"caption\">
                    Deportationsroute
                </p>
                <p>
                    Yehuda Blum wurde zusammen mit anderen Menschen in einer Turnhalle in Sankt Gallen
                    untergebracht. Nach einem kurzen Aufenthalt fuhr er mit seinem Bruder über Montreux weiter
                    nach Caux. Gemeinsam verbrachten sie einen mehrmonatigen Aufenthalt in einem Kinderheim
                    in Interlaken. Seine Schwester wurde aufgrund ihrer schlechten körperlichen Verfassung in
                    einem Heim in Engadin untergebracht.
                </p>
                <p>
                    Im August 1945 reiste die Familie nach Bari, Italien und von dort aus nach Taranto. Hier
                    betraten sie ein Schiff nach Palästina, wo sie am 01.09.1945 ankamen.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Beruflicher Werdegang</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In Jerusalem besuchte Yehuda Blum die Schule und schloss eine Lehrerausbildung ab. Er
                    begann ein Jurastudium an der Hebrew University und war außerdem politisch aktiv in der
                    Studentenvertretung. Von 1955 bis 1959 leistete er Militärdienst. Daraufhin begann er ein
                    Promotionsstudium in London. Ab 1961 war Yehuda Blum Jurist im israelischen
                    Außenministerium und ab 1965 Professor für Internationales Recht an der Hebrew University
                    in Jerusalem. Ein Jahr später heiratete er seine Frau und bekam mit ihr drei gemeinsame Kinder.
                    Von 1978 bis 1984 war Blum UN-Botschafter in New York. Ab 1984 nahm er seine Professur
                    für Internationales Recht wieder auf.
                </p>
                <p>
                    Yehuda Blum veröffentlichte im Laufe seines Lebens zahlreiche Bücher. 2002 wurde Blum
                    pensioniert und lebt seither in Jerusalem.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellenlage</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliographie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                </p>
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
                    Autor/in: Titel, in: Holocaust in Ungarn und Deportationen nach Norddeutschland 1944, hrsg. vom Institut für die Geschichte der deutschen Juden, URL: www.url.de, DATUM.
                </p>
            </div>
        </div>

    </div>

    <script>

        const bratislava = L.marker([ 48.144722,17.112778]).bindPopup('<strong>Bratislava</strong><br/>');

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
            center: [48.144722,17.112778],
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

{% endblock %}", "biographies/study.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/biographies/study.html.twig");
    }
}
