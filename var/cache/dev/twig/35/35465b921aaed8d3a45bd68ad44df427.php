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

/* biographies/blum.html.twig */
class __TwigTemplate_0138132a6434815e2ca77dfa5bd30d84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/blum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/blum.html.twig"));

        $this->parent = $this->loadTemplate("base-map.html.twig", "biographies/blum.html.twig", 1);
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
        yield from         $this->loadTemplate("elements/navigation-biographies.html.twig", "biographies/blum.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "

    <div class=\"container g-4 py-5 study\">
        <h2>Yehuda Blum und die Kasztner Gruppe</h2>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <h3>Zur Person</h3>
                <p class=\"abstract\">
                    Yehuda Blum wurde am 2. Oktober 1931 im damals tschechoslowakischen Bratislava geboren. Er war der
                    Älteste von insgesamt drei Kindern. Er hatte einen Bruder (Amram Blum) und eine Schwester (Leah
                    Blum).
                <br/>
                    Yehuda Blums Vater Joseph Blum kam aus dem Osten der Slowakei nach Bratislava und wurde dort der
                    Direktor der Jewish Credit Bank. Blums Mutter Seldie Blum (geborene Dux) wurde in Transsilvanien
                    geboren und zog gemeinsam mit ihrem Mann nach ihrer Hochzeit im Jahre 1930 nach Bratislava.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Verfolgung von Jüdinnen und Juden in der Slowakei</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    1938 wurden die Aktivitäten der deutschen Minderheit in Bratislava militanter. Am 9. November 1938
                    folgte die sogenannte Reichspogromnacht, wobei jüdische Geschäfte, Synagogen und Schulen in der
                    Stadt zerstört wurden. Dies geschah vom 9. auf den 10. November 1938. Das nationalsozialistische
                    Deutsche Reich ordnete gezielte Gewaltaktionen gegen die jüdische Bevölkerung an. Die Slowakei war
                    während des Zweiten Weltkrieges vom Deutschen Reich abhängig, Präsident war der katholische Priester
                    Jozef Tiso, der mit Deutschland kooperierte und ähnliche ideologische Ansätze vertrat. Unterstützt
                    wurde das Regime durch die 1913 von Andrej Hlinka gegründete slowakische Volkspartei Hlinka-Garde.
                    Die Partei propagierte einen konservativen, katholischen Nationalismus. Ab 1938 wurde die Verfolgung
                    und Entrechtung der rund 80.000 Juden und Jüdinnen des Landes zunehmend zum Kernelement der
                    politischen Agenda der Partei.
                </p>
                <p>
                    Von 1942 bis 1944 wurden etwa zwei Drittel der jüdischen Bevölkerung in der Slowakei verschleppt
                    (etwa 58.000 Jüdinnen und Juden), weitere 13.000 Jüdinnen und Juden im Herbst 1944.
                </p>
                <p>
                    Yehuda Blums persönliche Erinnerungen wurden in einem Zeitzeugeninterview mit der Gedenkstätte
                    Bergen-Belsen festgehalten, welches am 19. Juni 2003 aufgezeichnet
                    wurde.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup> Er erinnerte sich in dem
                    Interview, dass die Familie Blum 1939, ein Jahr nach den Novemberpogromen, in der Nacht von der
                    slowakischen Hlinka-Garde überfallen wurde. Daraufhin und angesichts der stark zunehmenden
                    antisemitischen Restriktionen in Bratislava habe Blums Vater entschieden, dass die Familie nicht
                    länger in Bratislava leben könne.
                </p>
                <p>
                    Die Familie zog 1940 nach Budapest in Ungarn. Nach der Besetzung Ungarns durch deutsche Truppen im
                    März 1944, änderten sich die Lebensbedingungen der jüdischen Bevölkerung in Ungarn schlagartig.
                    Yehuda Blum schilderte im Interview, dass seine Schule bereits am nächsten Tag geschlossen worden
                    sei und die alltägliche Diskriminierung zugenommen habe.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"\"/>
                <p class=\"caption\">
                    Yehuda Blum (rechts) mit seinen Geschwistern Amram und Leah, Frühjahr 1941.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zu Ungarn im Zweiten Weltkrieg</h4>
                    <p>
                        <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Text zum historischen Kontext\">
                            &#10149; Historischer Kontext
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Kasztner-Gruppe</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im Juni 1944 gab es erste Verhandlungen jüdischer Organisationen mit den Nationalsozialisten
                    darüber, dass ein Transport mit ausgewählten ungarischen Juden und Jüdinnen durch die Ausreise in
                    ein neutrales Land vor der Deportation nach Auschwitz bewahren sollte. Reszö Kasztner verhandelte
                    als Vertreter des jüdischen Hilfskomitees in Ungarn mit der SS. Zu diesem Zeitpunkt hatten die
                    Massendeportationen nach Auschwitz seit Mai 1944 bereits begonnen. Gegen kriegsrelevante Güter und
                    Geld sollte die Kasztner-Gruppe, etwa 1.690 Jüdinnen und Juden, in Freiheit entlassen werden. Statt
                    in die neutrale Schweiz schickte die SS den Kasztner-Zug jedoch in das Konzentrationslager
                    Bergen-Belsen. Von dort konnten zunächst nur 318 der insgesamt etwa 1.690 Jüdinnen und Juden nach
                    Verhandlungen mit der SS das Lager im August 1944 verlassen. Der größere Teil der Gruppe reiste erst
                    im Dezember 1944 in die Schweiz aus. 17 Personen mussten trotz der bereits getroffenen
                    Vereinbarungen in Bergen-Belsen zurückbleiben. <sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"\"/>
                <p class=\"caption\">
                    Eine Seite der Namensliste der Jüdinnen und Juden, welche Teil der Kasztner-Gruppe“ waren.
                    Aufgeführt sind hier auch Yehuda Blum, sein Bruder Amram und sein Vater Joseph Blum. Yehuda Blums
                    Mutter und seine Schwester waren ebenfalls Teil der
                    Kasztner-Gruppe.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Die Route des Kasztner-Zuges</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Auch Yehuda Blums Familie war für den Kasztner-Transport vorgesehen. Obwohl Yehuda Blums Vater an
                    diesem Transport zunächst nicht teilnehmen wollte, organisierte er später gemeinsam mit Philip
                    Freudiger, dem Oberhaupt der orthodoxen jüdischen Gemeinschaft in Budapest, die Teilnahme der
                    Familie.
                </p>
                <p>
                    Yehuda Blum erinnerte sich im Interview, dass seine Familie daraufhin in ein ungarisches Sammellager
                    gebracht worden sei. Nachdem sie sich dort für kurze Zeit aufgehalten hätten, habe die Familie Blum
                    Ungarn am 1. Juli 1944 in Güterwaggons gemeinsam mit ungefähr 1.690 weiteren Jüdinnen und Juden
                    verlassen. Sie hätten zunächst Halt an der deutsch-österreichischen Grenze gemacht, wo laut Blum
                    erste Gerüchte über einen Transport nach Auschwitz entstanden seien und sich Panik unter den
                    Menschen ausgebreitet habe. Der nächste Halt des Transportes sei Bratislava gewesen. Yehuda Blum
                    erinnerte sich auch, dass manche Menschen den Zug hier verlassen hätten und andere wiederum
                    zugestiegen seien. Am 7. Juli 1944 hielt der Zug zur Entlausung in Linz. Yehuda Blum schilderte im
                    Interview, dass die Menschen bei dieser Station erneut große Angst vor einer möglichen Ermordung
                    durch die SS gehabt hätten. Von Linz aus fuhr der Zug weiter Richtung Norddeutschland und erreichte
                    Celle, von wo aus die später als Kasztner-Transport bezeichnete Gruppe zu Fuß nach Bergen-Belsen
                    weiterlaufen musste.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"\"/>
                <p class=\"caption\">
                    Die Route des Kastzner-Transportes von Budapest nach Bergen-Belsen nach den Erinnerungen von Jenö
                    Kolb und Yehuda Blum.
                </p>
                <p>
                    Yehuda Blums Geschichte verdeutlicht die Ungewissheiten und Unsicherheiten während der Transporte,
                    auf denen Jüdinnen und Juden im deutsch-kontrollierten Europa ihre Ziele oft tagelang nicht kannten.
                    Obwohl der sogenannte Kasztner-Transport ursprünglich dazu vorgesehen gewesen war, ungarische
                    Jüdinnen und Juden in ein neutrales Land zu bringen, endete dieser zunächst im Konzentrationslager
                    Bergen-Belsen.
                </p>
            </div>
        </div>


        <h3 class=\"mt-4\">Im Konzentrationslager Bergen-Belsen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Bei der Ankunft im Konzentrationslager Bergen-Belsen wurde die Familie zunächst registriert, wobei
                    niemand aus der Kasztner-Gruppe wusste, wie lange der Aufenthalt dauern würde. Yehuda Blums Familie
                    wurde nicht zur Ausreise in die Schweiz mit dem ersten Transport im August 1944 aufgerufen und
                    musste daher weitere ungewisse Monate im Lager verbringen.
                </p>
                <p>
                    Yehuda Blum teilte in Bergen-Belsen das gleiche Schicksal wie mindestens 14.600 weitere Jüdinnen und
                    Juden, die zwischen Juli 1943 und Dezember 1944 im Lager ankamen. Im Frühjahr 1943 errichtet, sollte
                    das Konzentrationslager Bergen-Belsen nach Plänen der SS und des Auswärtigen Amtes ursprünglich dem
                    Austausch von Jüdinnen und Juden mit ausländischer Staatsangehörigkeit gegen deutsche Zivilpersonen
                    in alliiertem Gewahrsam dienen. Trotz der Austauschfunktion des Lagers gelangten kaum jüdische
                    Häftlinge auf diesem Weg in die Freiheit. Stattdessen waren sie in Baracken untergebracht, waren den
                    Misshandlungen der SS ausgeliefert und mussten ihre Arbeitskraft zur Zwangsarbeit
                    einsetzen.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                    Bergen-Belsen bestand aus mehreren Teillagern, die von der SS für die unterschiedlichen
                   Häftlingsgruppen errichtet wurden. So gab es in Bergen-Belsen unter anderem das sogenannte
                    „Sonderlager“, wo ab Juli 1943 ungefähr 2.700 überwiegend polnisch-jüdische Häftlinge untergebracht
                    waren; das sogenannte „Ungarnlager“, welches für die Unterbringung von insgesamt mehr als 5.000
                    ungarischen Häftlingen errichtet wurde und das sogenannte „Neutralenlager“, wo ab August 1943 etwa
                    600 Häftlinge untergebracht wurden, die zur Freilassung in die während des Zweiten Weltkrieges
                    neutralen Staaten Spanien, Portugal und die Türkei vorgesehen waren. In diesen Lagerteilen trugen
                    die Häftlinge Zivilkleidung und wurden nach Männern und Frauen getrennt.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                </p>
                <p>
                    Yehuda Blum erinnerte sich im Interview an willkürliche Inspektionen und Zählappelle durch die SS,
                    die während seines etwa viermonatigen Aufenthalts im „Ungarnlager“ den Lageralltag geprägt hätten.
                    Allerdings berichtete er im Interview auch von abendlichen Vorträgen, gemeinsamem Singen und
                    Nachmittagsunterricht in den Baracken. Da Yehuda Blum seinen dreizehnten Geburtstag in Bergen-Belsen
                    erlebte, habe auch eine von Mithäftlingen organisierte Feier zu seiner Bar Mizwa im Lager
                    stattgefunden.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp
                        eingerichtet.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Ausreise in die Schweiz</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Yehuda Blum wurde zusammen mit den übrigen Mitgliedern der Kasztner-Gruppe am 4. Dezember 1944 auf
                    die Abreise vorbereitet und verließ das Lager am frühen Nachmittag. Sein Zug hielt zunächst in
                    Augsburg, Lindau und Bregenz. Bei einem weiteren Halt in Lustenau am Grenzübergang zur Schweiz
                    mussten die Befreiten den Zug wechseln und in einen Schweizer Zug umsteigen. Als der Zug in Sankt
                    Margrethen in der Schweiz ankam, sei die Gruppe Blums Erinnerungen zufolge apathisch gewesen.
                    Schwerkranke seien an ein nahegelegenes Krankenhaus überstellt worden.
                </p>
                <p>
                    Yehuda Blum wurde zusammen mit anderen befreiten Häftlingen in der Turnhalle Kreuzbleiche in Sankt
                    Gallen untergebracht. Nach einem kurzen Aufenthalt fuhr er mit seinem Bruder über Montreux weiter in
                    den Kurort Caux, wo sie zusammen mit den anderen Befreiten in den Hotels Esplanade und Regina
                    untergebracht wurden. Anschließend verbrachten Yehuda Blum und sein Bruder einen mehrmonatigen
                    Aufenthalt in einem Kinderheim in Interlaken. Seine Schwester wurde aufgrund ihrer schlechten
                    körperlichen Verfassung in einem Heim im Engadin untergebracht.
                </p>
                <p>
                    Nachdem die Familie Blum wieder zueinandergefunden hatte ̶ wie dies gelang, ist nicht überliefert ̶
                    , reisten sie im August 1945 nach Bari, Italien, und von dort nach Taranto. Hier bestiegen sie ein
                    Schiff nach Palästina, wo sie am 1. September 1945 ankamen.
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
                    In Jerusalem besuchte Yehuda Blum die Schule und schloss eine Lehrerausbildung ab. Er begann ein
                    Jurastudium an der Hebräischen Universität und war außerdem politisch in der Studentenvertretung
                    aktiv. Von 1955 bis 1959 leistete er Militärdienst. Daraufhin begann er ein Promotionsstudium in
                    London. Ab 1961 war Yehuda Blum Jurist im israelischen Außenministerium und ab 1965 Professor für
                    Internationales Recht an der Hebräischen Universität in Jerusalem. Ein Jahr später heiratete er und
                    bekam mit seiner Frau drei Kinder. Von 1978 bis 1984 war Blum israelischer Botschafter bei den
                    Vereinten Nationen in New York. Ab 1984 nahm er seine Professur für Internationales Recht wieder
                    auf.
                </p>
                <p>
                    Yehuda Blum veröffentlichte im Laufe seines Lebens zahlreiche Bücher. 2002 wurde er pensioniert und
                    lebt seither in Jerusalem.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellenlage</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die vorliegende Biografie basiert vor allem auf den Erzählungen und Erinnerungen von Yehuda Blum
                    selbst, welche er in zwei Interviews mit der Gedenkstätte Bergen-Belsen aufarbeitete. Seit 1999
                    werden solche Videointerviews mit den Überlebenden des Konzentrations- und Kriegsgefangenenlagers,
                    sowie mit weiteren Zeitzeugen und Zeitzeuginnen für die wissenschaftliche, pädagogische und museale
                    Arbeit der Gedenkstätte vor Ort geführt. Diese Erinnerungsberichte ermöglichen den Überlebenden ihr
                    eigenes Narrativ über die Shoah in einen historischen Zusammenhang zu bringen und die Arbeit der
                    Gedenkstätte aktiv mitzugestalten. Ergänzt wurden Yehuda Blums subjektive Schilderungen des Erlebten
                    durch historische Eckdaten, wobei sich vor allem am Katalog der Ausstellung der Gedenkstätte
                    Bergen-Belsen orientiert wurde. Darüber hinaus existiert eine Namensliste des Kasztner-Transports,
                    welche die Namen der Familie Blum ebenfalls anführt.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliographie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Marta Ansilewska-Lehnstaedt / Stephan Lehnstaedt, Das Holocaustmuseum Sereď – slowakische Wege zur
                    »Vergangenheitsbewältigung«, in: Gedenkstättenrundbrief 195 (2019), S. 23.
                </p>
                <p>
                    Diana Gring / Peter Müller, Licht am Ende der Nacht. Die Transporte aus dem KZ Bergen-Belsen nach
                    St. Gallen, St. Gallen 2019.
                </p>
                <p>
                    Stiftung niedersächsische Gedenkstätten, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                    Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung. Celle
                    2019.
                </p>
                <p>
                    Christiane Toyka-Seid / Gerd Schneider, Pogrom / Reichspogromnacht, in: Bundeszentrale für
                    politische Bildung, kurz&knapp. Lexika, online unter:
                    <a href=\"https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogromreichspogromnacht\"
                       title=\"Website der Bundeszentrale für Politische Bildung\">
                        https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogromreichspogromnacht
                    </a>
                    (letzter Zugriff: 28.04.2024).
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Stiftung Niedersächsische Gedenkstätten/Gedenkstätte Bergen-Belsen. Interview mit Yehuda Blum am 19.06.2003, BV 101.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Stiftung niedersächsische Gedenkstätten: Bergen-Belsen. Kriegsgefangenenlager 1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung. Celle 2019, S. 178.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Liste ungarischer Flüchtlinge, die aus Bergen-Belsen kürzlich mit einem Transport in der Schweiz eingetroffen sind: Signatur 8007100007, DOC ID: 3393733/ ITS Digital Archive, Arolsen Archives.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. ebd., S. 160; 176.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Vgl. ebd., S. 162.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                </ol>
            </div>
        </div>

        <h3 class=\"mt-4\">Zitierhinweis</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Lara Meinert: Yehuda Blum – die Kasztner-Gruppe, in: Holocaust in Ungarn und Deportationen nach
                    Norddeutschland 1944, hrsg. vom Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 346
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
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
        return "biographies/blum.html.twig";
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
        return array (  450 => 346,  302 => 201,  233 => 135,  194 => 99,  167 => 75,  154 => 65,  95 => 8,  92 => 7,  82 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-map.html.twig' %}

{% block title %} Fallstudie | {{ parent() }} {% endblock %}


{% block body %}
    {% include 'elements/navigation-biographies.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2>Yehuda Blum und die Kasztner Gruppe</h2>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <h3>Zur Person</h3>
                <p class=\"abstract\">
                    Yehuda Blum wurde am 2. Oktober 1931 im damals tschechoslowakischen Bratislava geboren. Er war der
                    Älteste von insgesamt drei Kindern. Er hatte einen Bruder (Amram Blum) und eine Schwester (Leah
                    Blum).
                <br/>
                    Yehuda Blums Vater Joseph Blum kam aus dem Osten der Slowakei nach Bratislava und wurde dort der
                    Direktor der Jewish Credit Bank. Blums Mutter Seldie Blum (geborene Dux) wurde in Transsilvanien
                    geboren und zog gemeinsam mit ihrem Mann nach ihrer Hochzeit im Jahre 1930 nach Bratislava.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Verfolgung von Jüdinnen und Juden in der Slowakei</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    1938 wurden die Aktivitäten der deutschen Minderheit in Bratislava militanter. Am 9. November 1938
                    folgte die sogenannte Reichspogromnacht, wobei jüdische Geschäfte, Synagogen und Schulen in der
                    Stadt zerstört wurden. Dies geschah vom 9. auf den 10. November 1938. Das nationalsozialistische
                    Deutsche Reich ordnete gezielte Gewaltaktionen gegen die jüdische Bevölkerung an. Die Slowakei war
                    während des Zweiten Weltkrieges vom Deutschen Reich abhängig, Präsident war der katholische Priester
                    Jozef Tiso, der mit Deutschland kooperierte und ähnliche ideologische Ansätze vertrat. Unterstützt
                    wurde das Regime durch die 1913 von Andrej Hlinka gegründete slowakische Volkspartei Hlinka-Garde.
                    Die Partei propagierte einen konservativen, katholischen Nationalismus. Ab 1938 wurde die Verfolgung
                    und Entrechtung der rund 80.000 Juden und Jüdinnen des Landes zunehmend zum Kernelement der
                    politischen Agenda der Partei.
                </p>
                <p>
                    Von 1942 bis 1944 wurden etwa zwei Drittel der jüdischen Bevölkerung in der Slowakei verschleppt
                    (etwa 58.000 Jüdinnen und Juden), weitere 13.000 Jüdinnen und Juden im Herbst 1944.
                </p>
                <p>
                    Yehuda Blums persönliche Erinnerungen wurden in einem Zeitzeugeninterview mit der Gedenkstätte
                    Bergen-Belsen festgehalten, welches am 19. Juni 2003 aufgezeichnet
                    wurde.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup> Er erinnerte sich in dem
                    Interview, dass die Familie Blum 1939, ein Jahr nach den Novemberpogromen, in der Nacht von der
                    slowakischen Hlinka-Garde überfallen wurde. Daraufhin und angesichts der stark zunehmenden
                    antisemitischen Restriktionen in Bratislava habe Blums Vater entschieden, dass die Familie nicht
                    länger in Bratislava leben könne.
                </p>
                <p>
                    Die Familie zog 1940 nach Budapest in Ungarn. Nach der Besetzung Ungarns durch deutsche Truppen im
                    März 1944, änderten sich die Lebensbedingungen der jüdischen Bevölkerung in Ungarn schlagartig.
                    Yehuda Blum schilderte im Interview, dass seine Schule bereits am nächsten Tag geschlossen worden
                    sei und die alltägliche Diskriminierung zugenommen habe.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"\"/>
                <p class=\"caption\">
                    Yehuda Blum (rechts) mit seinen Geschwistern Amram und Leah, Frühjahr 1941.
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

        <h3 class=\"mt-4\">Die Kasztner-Gruppe</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im Juni 1944 gab es erste Verhandlungen jüdischer Organisationen mit den Nationalsozialisten
                    darüber, dass ein Transport mit ausgewählten ungarischen Juden und Jüdinnen durch die Ausreise in
                    ein neutrales Land vor der Deportation nach Auschwitz bewahren sollte. Reszö Kasztner verhandelte
                    als Vertreter des jüdischen Hilfskomitees in Ungarn mit der SS. Zu diesem Zeitpunkt hatten die
                    Massendeportationen nach Auschwitz seit Mai 1944 bereits begonnen. Gegen kriegsrelevante Güter und
                    Geld sollte die Kasztner-Gruppe, etwa 1.690 Jüdinnen und Juden, in Freiheit entlassen werden. Statt
                    in die neutrale Schweiz schickte die SS den Kasztner-Zug jedoch in das Konzentrationslager
                    Bergen-Belsen. Von dort konnten zunächst nur 318 der insgesamt etwa 1.690 Jüdinnen und Juden nach
                    Verhandlungen mit der SS das Lager im August 1944 verlassen. Der größere Teil der Gruppe reiste erst
                    im Dezember 1944 in die Schweiz aus. 17 Personen mussten trotz der bereits getroffenen
                    Vereinbarungen in Bergen-Belsen zurückbleiben. <sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"\"/>
                <p class=\"caption\">
                    Eine Seite der Namensliste der Jüdinnen und Juden, welche Teil der Kasztner-Gruppe“ waren.
                    Aufgeführt sind hier auch Yehuda Blum, sein Bruder Amram und sein Vater Joseph Blum. Yehuda Blums
                    Mutter und seine Schwester waren ebenfalls Teil der
                    Kasztner-Gruppe.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Die Route des Kasztner-Zuges</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Auch Yehuda Blums Familie war für den Kasztner-Transport vorgesehen. Obwohl Yehuda Blums Vater an
                    diesem Transport zunächst nicht teilnehmen wollte, organisierte er später gemeinsam mit Philip
                    Freudiger, dem Oberhaupt der orthodoxen jüdischen Gemeinschaft in Budapest, die Teilnahme der
                    Familie.
                </p>
                <p>
                    Yehuda Blum erinnerte sich im Interview, dass seine Familie daraufhin in ein ungarisches Sammellager
                    gebracht worden sei. Nachdem sie sich dort für kurze Zeit aufgehalten hätten, habe die Familie Blum
                    Ungarn am 1. Juli 1944 in Güterwaggons gemeinsam mit ungefähr 1.690 weiteren Jüdinnen und Juden
                    verlassen. Sie hätten zunächst Halt an der deutsch-österreichischen Grenze gemacht, wo laut Blum
                    erste Gerüchte über einen Transport nach Auschwitz entstanden seien und sich Panik unter den
                    Menschen ausgebreitet habe. Der nächste Halt des Transportes sei Bratislava gewesen. Yehuda Blum
                    erinnerte sich auch, dass manche Menschen den Zug hier verlassen hätten und andere wiederum
                    zugestiegen seien. Am 7. Juli 1944 hielt der Zug zur Entlausung in Linz. Yehuda Blum schilderte im
                    Interview, dass die Menschen bei dieser Station erneut große Angst vor einer möglichen Ermordung
                    durch die SS gehabt hätten. Von Linz aus fuhr der Zug weiter Richtung Norddeutschland und erreichte
                    Celle, von wo aus die später als Kasztner-Transport bezeichnete Gruppe zu Fuß nach Bergen-Belsen
                    weiterlaufen musste.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"\"/>
                <p class=\"caption\">
                    Die Route des Kastzner-Transportes von Budapest nach Bergen-Belsen nach den Erinnerungen von Jenö
                    Kolb und Yehuda Blum.
                </p>
                <p>
                    Yehuda Blums Geschichte verdeutlicht die Ungewissheiten und Unsicherheiten während der Transporte,
                    auf denen Jüdinnen und Juden im deutsch-kontrollierten Europa ihre Ziele oft tagelang nicht kannten.
                    Obwohl der sogenannte Kasztner-Transport ursprünglich dazu vorgesehen gewesen war, ungarische
                    Jüdinnen und Juden in ein neutrales Land zu bringen, endete dieser zunächst im Konzentrationslager
                    Bergen-Belsen.
                </p>
            </div>
        </div>


        <h3 class=\"mt-4\">Im Konzentrationslager Bergen-Belsen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Bei der Ankunft im Konzentrationslager Bergen-Belsen wurde die Familie zunächst registriert, wobei
                    niemand aus der Kasztner-Gruppe wusste, wie lange der Aufenthalt dauern würde. Yehuda Blums Familie
                    wurde nicht zur Ausreise in die Schweiz mit dem ersten Transport im August 1944 aufgerufen und
                    musste daher weitere ungewisse Monate im Lager verbringen.
                </p>
                <p>
                    Yehuda Blum teilte in Bergen-Belsen das gleiche Schicksal wie mindestens 14.600 weitere Jüdinnen und
                    Juden, die zwischen Juli 1943 und Dezember 1944 im Lager ankamen. Im Frühjahr 1943 errichtet, sollte
                    das Konzentrationslager Bergen-Belsen nach Plänen der SS und des Auswärtigen Amtes ursprünglich dem
                    Austausch von Jüdinnen und Juden mit ausländischer Staatsangehörigkeit gegen deutsche Zivilpersonen
                    in alliiertem Gewahrsam dienen. Trotz der Austauschfunktion des Lagers gelangten kaum jüdische
                    Häftlinge auf diesem Weg in die Freiheit. Stattdessen waren sie in Baracken untergebracht, waren den
                    Misshandlungen der SS ausgeliefert und mussten ihre Arbeitskraft zur Zwangsarbeit
                    einsetzen.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                    Bergen-Belsen bestand aus mehreren Teillagern, die von der SS für die unterschiedlichen
                   Häftlingsgruppen errichtet wurden. So gab es in Bergen-Belsen unter anderem das sogenannte
                    „Sonderlager“, wo ab Juli 1943 ungefähr 2.700 überwiegend polnisch-jüdische Häftlinge untergebracht
                    waren; das sogenannte „Ungarnlager“, welches für die Unterbringung von insgesamt mehr als 5.000
                    ungarischen Häftlingen errichtet wurde und das sogenannte „Neutralenlager“, wo ab August 1943 etwa
                    600 Häftlinge untergebracht wurden, die zur Freilassung in die während des Zweiten Weltkrieges
                    neutralen Staaten Spanien, Portugal und die Türkei vorgesehen waren. In diesen Lagerteilen trugen
                    die Häftlinge Zivilkleidung und wurden nach Männern und Frauen getrennt.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                </p>
                <p>
                    Yehuda Blum erinnerte sich im Interview an willkürliche Inspektionen und Zählappelle durch die SS,
                    die während seines etwa viermonatigen Aufenthalts im „Ungarnlager“ den Lageralltag geprägt hätten.
                    Allerdings berichtete er im Interview auch von abendlichen Vorträgen, gemeinsamem Singen und
                    Nachmittagsunterricht in den Baracken. Da Yehuda Blum seinen dreizehnten Geburtstag in Bergen-Belsen
                    erlebte, habe auch eine von Mithäftlingen organisierte Feier zu seiner Bar Mizwa im Lager
                    stattgefunden.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp
                        eingerichtet.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Ausreise in die Schweiz</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Yehuda Blum wurde zusammen mit den übrigen Mitgliedern der Kasztner-Gruppe am 4. Dezember 1944 auf
                    die Abreise vorbereitet und verließ das Lager am frühen Nachmittag. Sein Zug hielt zunächst in
                    Augsburg, Lindau und Bregenz. Bei einem weiteren Halt in Lustenau am Grenzübergang zur Schweiz
                    mussten die Befreiten den Zug wechseln und in einen Schweizer Zug umsteigen. Als der Zug in Sankt
                    Margrethen in der Schweiz ankam, sei die Gruppe Blums Erinnerungen zufolge apathisch gewesen.
                    Schwerkranke seien an ein nahegelegenes Krankenhaus überstellt worden.
                </p>
                <p>
                    Yehuda Blum wurde zusammen mit anderen befreiten Häftlingen in der Turnhalle Kreuzbleiche in Sankt
                    Gallen untergebracht. Nach einem kurzen Aufenthalt fuhr er mit seinem Bruder über Montreux weiter in
                    den Kurort Caux, wo sie zusammen mit den anderen Befreiten in den Hotels Esplanade und Regina
                    untergebracht wurden. Anschließend verbrachten Yehuda Blum und sein Bruder einen mehrmonatigen
                    Aufenthalt in einem Kinderheim in Interlaken. Seine Schwester wurde aufgrund ihrer schlechten
                    körperlichen Verfassung in einem Heim im Engadin untergebracht.
                </p>
                <p>
                    Nachdem die Familie Blum wieder zueinandergefunden hatte ̶ wie dies gelang, ist nicht überliefert ̶
                    , reisten sie im August 1945 nach Bari, Italien, und von dort nach Taranto. Hier bestiegen sie ein
                    Schiff nach Palästina, wo sie am 1. September 1945 ankamen.
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
                    In Jerusalem besuchte Yehuda Blum die Schule und schloss eine Lehrerausbildung ab. Er begann ein
                    Jurastudium an der Hebräischen Universität und war außerdem politisch in der Studentenvertretung
                    aktiv. Von 1955 bis 1959 leistete er Militärdienst. Daraufhin begann er ein Promotionsstudium in
                    London. Ab 1961 war Yehuda Blum Jurist im israelischen Außenministerium und ab 1965 Professor für
                    Internationales Recht an der Hebräischen Universität in Jerusalem. Ein Jahr später heiratete er und
                    bekam mit seiner Frau drei Kinder. Von 1978 bis 1984 war Blum israelischer Botschafter bei den
                    Vereinten Nationen in New York. Ab 1984 nahm er seine Professur für Internationales Recht wieder
                    auf.
                </p>
                <p>
                    Yehuda Blum veröffentlichte im Laufe seines Lebens zahlreiche Bücher. 2002 wurde er pensioniert und
                    lebt seither in Jerusalem.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellenlage</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die vorliegende Biografie basiert vor allem auf den Erzählungen und Erinnerungen von Yehuda Blum
                    selbst, welche er in zwei Interviews mit der Gedenkstätte Bergen-Belsen aufarbeitete. Seit 1999
                    werden solche Videointerviews mit den Überlebenden des Konzentrations- und Kriegsgefangenenlagers,
                    sowie mit weiteren Zeitzeugen und Zeitzeuginnen für die wissenschaftliche, pädagogische und museale
                    Arbeit der Gedenkstätte vor Ort geführt. Diese Erinnerungsberichte ermöglichen den Überlebenden ihr
                    eigenes Narrativ über die Shoah in einen historischen Zusammenhang zu bringen und die Arbeit der
                    Gedenkstätte aktiv mitzugestalten. Ergänzt wurden Yehuda Blums subjektive Schilderungen des Erlebten
                    durch historische Eckdaten, wobei sich vor allem am Katalog der Ausstellung der Gedenkstätte
                    Bergen-Belsen orientiert wurde. Darüber hinaus existiert eine Namensliste des Kasztner-Transports,
                    welche die Namen der Familie Blum ebenfalls anführt.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliographie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Marta Ansilewska-Lehnstaedt / Stephan Lehnstaedt, Das Holocaustmuseum Sereď – slowakische Wege zur
                    »Vergangenheitsbewältigung«, in: Gedenkstättenrundbrief 195 (2019), S. 23.
                </p>
                <p>
                    Diana Gring / Peter Müller, Licht am Ende der Nacht. Die Transporte aus dem KZ Bergen-Belsen nach
                    St. Gallen, St. Gallen 2019.
                </p>
                <p>
                    Stiftung niedersächsische Gedenkstätten, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                    Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung. Celle
                    2019.
                </p>
                <p>
                    Christiane Toyka-Seid / Gerd Schneider, Pogrom / Reichspogromnacht, in: Bundeszentrale für
                    politische Bildung, kurz&knapp. Lexika, online unter:
                    <a href=\"https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogromreichspogromnacht\"
                       title=\"Website der Bundeszentrale für Politische Bildung\">
                        https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogromreichspogromnacht
                    </a>
                    (letzter Zugriff: 28.04.2024).
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Stiftung Niedersächsische Gedenkstätten/Gedenkstätte Bergen-Belsen. Interview mit Yehuda Blum am 19.06.2003, BV 101.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Stiftung niedersächsische Gedenkstätten: Bergen-Belsen. Kriegsgefangenenlager 1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung. Celle 2019, S. 178.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Liste ungarischer Flüchtlinge, die aus Bergen-Belsen kürzlich mit einem Transport in der Schweiz eingetroffen sind: Signatur 8007100007, DOC ID: 3393733/ ITS Digital Archive, Arolsen Archives.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. ebd., S. 160; 176.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Vgl. ebd., S. 162.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                </ol>
            </div>
        </div>

        <h3 class=\"mt-4\">Zitierhinweis</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Lara Meinert: Yehuda Blum – die Kasztner-Gruppe, in: Holocaust in Ungarn und Deportationen nach
                    Norddeutschland 1944, hrsg. vom Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_bio_blum') }}, CC BY 4.0.
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

{% endblock %}", "biographies/blum.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/biographies/blum.html.twig");
    }
}
