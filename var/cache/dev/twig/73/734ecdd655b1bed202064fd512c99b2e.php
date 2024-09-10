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

/* studies/luebberstedt.html.twig */
class __TwigTemplate_f0d592dbb04072848033d1e9e5f8b9b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/luebberstedt.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/luebberstedt.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "studies/luebberstedt.html.twig", 1);
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

        yield " Gruppenstudie Lübberstedt | ";
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
        yield from         $this->loadTemplate("elements/navigation-deportationen.html.twig", "studies/luebberstedt.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container g-4 py-5 study\">
        <h2>Die Räumung des KZ-Außenlagers Lübberstedt. In Güterwaggons durch Norddeutschland</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Mit dem Vormarsch der Alliierten wurden ab Mitte 1944 auch die ersten Konzentrationslager befreit.
                    Bevor alliierte Truppen die Lager erreichen konnten, versuchte die SS jedoch Spuren zu vernichten
                    und die Häftlinge in Konzentrationslager zu deportieren, die weiter entfernt vom Frontverlauf lagen.<sup><a
                                href=\"#endnote1\" id=\"footnote1\">1</a></sup> Ab Januar 1945 begannen auch in
                    Nordwestdeutschland die Planungen für die Räumung der Außenlager. Dabei spielten zum einen die
                    Interessen der Unternehmen eine Rolle, die bei der bald erwarteten alliierten Einnahme ihrer
                    Betriebe Aufstände der Zwangsarbeiter und Zwangsarbeiterinnen verhindern, als auch den eigenen Ruf
                    bei der zukünftigen Besatzungsmacht nicht durch die Anwesenheit der unterernährten und
                    menschenunwürdig behandelten Zwangsarbeiter und Zwangsarbeiterinnen gefährden
                    wollten.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup> Zum anderen
                    versuchten staatliche Stellen und die SS die Befreiung der Häftlinge zunächst zu verhindern,
                    insbesondere um eine Befreiung der Häftlinge im Verantwortungsbereich der größeren Städte zu
                    verhindern, auch mit Blick auf das Verhältnis zur zukünftigen
                    Besatzungsmacht.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup> Ende März wurde
                    deshalb mit der Räumung der Außenlager des KZ Neuengamme begonnen, ab Mitte April auch mit der
                    Räumung des Stammlagers. In den folgenden Wochen bis zur Befreiung starben noch mindestens 30
                    Prozent der Häftlinge, von denen nur die wenigsten Namen bekannt sind. Die SS verbrannte zu dieser
                    Zeit in allen Lagern Unterlagen und registrierte die Toten auf den Transporten und in den
                    Auffanglagern nicht mehr.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Das KZ-Außenlager Lübberstedt-Bilohe</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Auch in der Nähe des Ortes Lübberstedt nördlich von Bremen war ein Außenlager des KZ Neuengamme
                    eingerichtet worden. In einem Forstgebiet direkt an einer Bahnstrecke befand sich während des
                    Zweiten Weltkrieges eine Munitionsanstalt (Muna) der deutschen Luftwaffe. In Munitionsanstalten
                    wurden Kampfmittel und Munition aus Zwischenprodukten zusammengesetzt und gelagert. Der umfassende
                    Einsatz von Zwangsarbeiter und Zwangsarbeiterinnen in der Rüstungsindustrie betraf auch die Arbeit
                    in den Munitionsanstalten. So mussten in der Muna Lübberstedt osteuropäische Zwangsarbeiter und
                    Zwangsarbeiterinnen, Kriegsgefangene und italienische Militärinternierte sowie KZ-Häftlinge in der
                    Rüstungsproduktion arbeiten.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    Letztere kamen im Sommer 1944 aus Auschwitz, wohin sie fast alle kurz
                    zuvor aus Ungarn deportiert worden waren. Vermutlich die Mehrheit von ihnen stammte aus
                    Transkarpatien, das erst 1939 von Ungarn annektiert worden
                    war.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup> In Auschwitz waren sie von ihren
                    Verwandten und Freunden getrennt worden, von denen die Mehrheit direkt durch die SS ermordet
                    wurde.
                </p>
                <p>
                    <img class=\"img-fluid\"
                         src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/luebberstedt/Auschwitz-Album_Frimi-Ickovic.jpg"), "html", null, true);
        yield "\"
                         alt=\" Jüdische Frauen aus Transkarpatien, die in Auschwitz-Birkenau in mehreren Reihen hintereinander stehen\"/>
                <p class=\"caption\">
                </p>
                <p class=\"caption\">
                    Jüdische Frauen aus Transkarpatien in Auschwitz-Birkenau im Mai 1944, die nach ihrer Ankunft zur
                    Zwangsarbeit ausgewählt worden waren. Die Fotos wurden mit unbekanntem Zweck von SS-Männern
                    angefertigt
                    und stellen deren Perspektive da. Die Fotos sind eine der wenigen fotografischen Quellen aus den
                    Vernichtungslagern. Am linken Bildrand hat der Überlebende Leo Cove seine Schwester Frimet (Fritzi)
                    Ickovic identifiziert, die nach Lübberstedt deportiert wurde und die KZ-Haft überlebte.
                    Auschwitz-Album,
                    Yad Vashem (<a href=\"https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp\"
                                   title=\"Website Yad Vashem\">
                        https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp</a>), Copyright © 2024
                    Yad Vashem – Internationale Holocaust Gedenkstätte, Nutzung gemäß Fair Use
                    (<a href=\"https://www.yadvashem.org/terms-and-conditions.html\"
                        title=\"Website Yad Vashem\">https://www.yadvashem.org/terms-and-conditions.html</a>)
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zu Ungarn</h4>
                    <p>
                        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Historischer Kontext\">
                            &#10149; Mehr zu Ungarn während des Zweiten Weltkrieges
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-4\">
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
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "#zwangsarbeit\"
                           title=\"Mehr Informationen zu Zwangsarbeit und historischem Kontext\">
                            &#10149; Mehr Informationen zu Zwangsarbeit
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Überlebende des Transportes nach Lübberstedt berichteten später, dass der in Auschwitz
                    zusammengestellte Transport zunächst nicht abfahren konnte und die Häftlinge zurück in ihre
                    Barracken geführt wurden, wo sie sich auskleiden mussten. Unklar ist, was die Absicht der SS war.
                    Die überlebenden Häftlinge, die zu diesem Zeitpunkt bereits mehrfach Massentötungen mitbekommen
                    hatten, erinnerten sich, dass sie befürchteten nun doch ermordet zu werden. Schließlich wurden sie
                    jedoch aufgefordert, sich erneut anzukleiden und einen bereitstehenden Güterzug zu besteigen. Ein
                    Teil des Güterzuges wurde in das Außenlager Salzwedel gebracht, 500 Frauen nach
                    Lübberstedt.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
                <p>
                    Wie auch in anderen Außenlagern betonten Überlebenden im Nachhinein die Verbesserung, die die
                    Verlegung in ein Außenlager gegenüber dem Konzentrations- und Vernichtungslager Auschwitz geboten
                    hätte. Im Falle des Außenlagers Lübberstedt machten sie dies an einer eigenen Pritsche mit einer
                    Decke und Stroh sowie einem Löffel und Teller fest. Die Versorgung der Häftlinge war aber auch hier
                    menschenunwürdig und lebensbedrohlich. Die nur mit dünner Häftlingsbekleidung und Holzschuhen
                    versorgten Frauen bekamen durchgehend zu wenig Lebensmittel und mussten zugleich körperlich stark
                    fordernde Arbeit in der Munitionsfabrik leisten. Auch im Außenlager Lübberstedt gab es nur ein
                    kleines Krankenrevier, in dem zudem keine medizinische Versorgung möglich war. Da die Frauen zudem
                    eine Selektion der Arbeitsunfähigen fürchteten, berichteten mehrere Frauen in lebensgeschichtlichen
                    Interviews, dass sie sich auch bei Krankheiten und Entzündungen nicht krankmeldeten. Für das
                    Außenlager ist der Tod von mindestens fünf Häftlingen bekannt.<sup><a href=\"#endnote8\"
                                                                                          id=\"footnote8\">8</a></sup>
                    In mindesten drei Fällen berichteten
                    Überlebende von Misshandlungen durch die weiblichen Aufseherinnen, die zum Tod der Häftlinge geführt
                    hätten. So berichtete beispielweise die Überlebende Eszter Rosenfeld, dass ihre Bettnachbarin Sari
                    Katz, die nicht zum Morgenappell erscheinen konnte, durch das Wachpersonal zu Tode geprügelt worden
                    sei.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    Wie auch in anderen Frauenaußenlagern wurde die Bewachung des Lagers nicht ausschließlich durch
                    die SS, sondern auch durch bei ihnen angestellte Aufseherinnen im Inneren des Lagers und
                    Wehrmachtssoldaten für die äußere Bewachung übernommen.<sup><a href=\"#endnote10\"
                                                                                   id=\"footnote10\">10</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Räumung des Lagers</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem die Bremer und Hamburger Außenlager bereits Anfang April geräumt worden waren und die
                    Häftlinge insbesondere in das Auffanglager Bergen-Belsen deportiert wurden, erhielt auch der
                    Lagerkommandant des Außenlagers Lübberstedt-Bilohe am 18. April den Befehl, das Lager zu
                    räumen.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    Während die Lager im Stadtbereich vermutlich auf Druck der Stadtverwaltungen, die um ihre
                    Nachkriegsposition besorgt waren, früher geräumt wurden, sollten nun auch die Häftlinge der
                    Munitionsanstalt vor einer Befreiung des Gebietes abtransportiert werden. Bereits zuvor waren etwa
                    60 kranke Frauen nach Bergen-Belsen deportiert worden.<sup><a href=\"#endnote12\"
                                                                                  id=\"footnote12\">12</a></sup>
                </p>
                <p>
                    Das KZ Bergen-Belsen war jedoch schon am 16. April 1945 durch die aus dem Südwesten vorstoßenden
                    Alliierten befreit worden. Anders als die vorher geräumten Lager in der Region wurden die Häftlinge
                    des Außenlagers Lübberstedt daher Richtung Bremen, Hamburg und schließlich Schleswig-Holstein
                    deportiert.
                </p>
                <h3 class=\"mt-4\">Mit dem Zug durch Norddeutschland</h3>
                <p>
                    Die Häftlinge aus Lübberstedt berichteten später, dass sie in Gruppen von 50 bis 80 Frauen in
                    Güterwaggons geladen worden seien, an die Züge seien auch mehrere Waggons mit Munition angehängt
                    worden. Die Aussagen der Überlebenden und Angaben in weiteren Quellen widersprechen sich jedoch, so
                    dass es wahrscheinlich ist, dass die Häftlinge in zwei Transporten abtransportiert wurden, die nach
                    einiger Zeit wieder zusammengeführt wurden.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                    Alle Überlebenden berichteten von dem großen Hunger
                    aufgrund der extrem reduzierten Versorgung mit Lebensmitteln während der über zwei Wochen dauernden
                    Fahrt. Da Militärtransporte Vorrang hatten und viele Gleisanlagen zerstört worden waren, hielt der
                    Zug immer wieder für längere Zeit an, in einigen Fällen sogar für zwei
                    Tage.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup> Zudem änderten sich für
                    viele Häftlingstransporte die Ziele während der Fahrt, da ihre ursprünglichen Ziele zwischenzeitlich
                    durch die Alliierten befreit worden waren. Es lässt sich nicht zweifelsfrei nachvollziehen, welches
                    Ziel der Transport der Häftlinge aus Lübberstedt ursprünglich hatte. Es ist aber zu vermuten, dass
                    er die Häftlingsschiffe in der Lübecker Bucht zum Ziel hatte. Auch die Überlebenden vermuteten dies
                    im Nachhinein.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p>
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp eingerichtet.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Todesmärsche und „Endphaseverbrechen“</h4>
                    <p>
                        In der Endphase des Krieges wurden etliche Konzentrationslager und KZ-Außenlager durch die
                        Nationalsozialisten vor der Ankunft der sich nähernden Alliierten geräumt. Die Häftlinge wurden
                        entweder in Güterwaggons, selten in Lastwagen transportiert oder unter Misshandlungen gezwungen,
                        zu
                        Fuß in weiterhin unter deutscher Kontrolle stehende Gebiete zu marschieren. Während der oft
                        tage-,
                        teilweise auch wochenlang dauernden Märsche wurden die Häftlinge in der Regel kaum versorgt,
                        viele
                        von ihnen verhungerten oder verdursteten in den Güterwaggons, viele brachen während der Märsche
                        aufgrund der Erschöpfung zusammen oder wurden durch die SS oder andere wachhabende Einheiten
                        ermordet. Durch die Überlebenden wurde deshalb für diese Räumungen der Begriff „Todesmarsch“
                        geprägt. Teile der Todesmärsche endeten in der gezielten Ermordung der Häftlinge, von denen das
                        sogenannte „Massaker von Gardelegen“ eines der bekanntesten ist. Über 1.000 Häftlinge aus
                        Außenlagern des KZ Neuengamme und des KZ Mittelbau-Dora wurden dort in einer Feldscheune
                        zusammengetrieben, die von der SS und weiteren NS-Organisationen in Brand gesetzt
                        wurde.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Cap Arcona und Thilbeck</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem die SS auf Druck der Hamburger Wirtschaft und Politik auch die Räumung des Hauptlagers
                    Neuengamme beschlossen hatte, wurden zwischen dem 20. und 26. April etwa 9.000 Häftlinge in
                    Güterzügen nach Lübeck gebracht. Etwa 7.000 von ihnen wurden dort auf die in der Lübecker Bucht
                    liegenden Frachtschiffe „Athen“, „Thielbeck“ und „Elmenhorst“ sowie den manövrierunfähigen
                    Luxusliner „Cap Arcona“ gebracht. Da die Schiffe für die Anzahl der Häftlinge nicht ausgelegt waren
                    und auch nicht genügend Lebensmittel an Bord gebracht wurden, war die Lage für die Menschen in den
                    Laderäumen katastrophal. Am 2. Mai wurde Lübeck von britischen Truppen befreit, einen Tag später
                    wurden die Schiffe durch die britische Luftwaffe, die Truppentransporte in der Ostsee zum Ziel
                    hatte, bombardiert. Dabei wurden die „Cap Arcona“ und die „Thielbeck“ getroffen und sanken, von den
                    circa 7.000 Häftlingen, die sich zu diesem Zeitpunkt auf den beiden Schiffen befanden, überlebten
                    nur circa 400 den Angriff. Während Überlebende vermuteten, dass eine Sprengung der Schiffe zur
                    Ermordung der Häftlinge von vornherein durch die SS vorgesehen gewesen war, gehen Forschende
                    inzwischen davon aus, dass die Häftlinge auf den Schiffen lediglich untergebracht werden
                    sollten.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                </p>
                <p>
                    <img class=\"img-fluid\" src=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/luebberstedt/Cap_Arcona_burning.jpg"), "html", null, true);
        yield "\"
                         alt=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora im Mai 1946\"/>
                <p class=\"caption\">
                    Aufnahme der brennenden „Cap Arcona“ kurz nach dem Angriff, Royal Air Force, 3. Mai 1945,
                    Quelle: <a href=\"http://www1.uni-hamburg.de/rz3a035//arcona.html\"
                               title=\"Website der Universität Hamburg\">
                        http://www1.uni-hamburg.de/rz3a035//arcona.html</a>, Wikipedia,
                    <a href=\"https://commons.wikimedia.org/wiki/File:Cap_Arcona_burning.jpg\"
                       title=\"Wikimedia Commons\">
                        https://commons.wikimedia.org/wiki/File:Cap_Arcona_burning.jpg</a>, Public Domain
                </p>
                <p>
                    Am 1. oder 2. Mai 1945 erreichte der Zug aus Lübberstedt ebenfalls Lübeck, doch statt einer
                    Verladung auf die Schiffe hielt der Zug laut Überlebenden erneut für längere Zeit vor der Stadt. Die
                    Überlebende Malvin Grünberger berichtete in einem Gruppeninterview, dass das Schiff, dass die
                    Häftlinge aufnehmen sollte, bereits abgelegt hatte und die Häftlinge in Tränen ausgebrochen seien
                    als sie davon erfahren hätten.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    Sie hätten gehofft, mit den Schiffen nach Dänemark gebracht zu
                    werden. Andere Überlebende berichteten, dass sie von einer Aufseherin gewarnt worden seien, die
                    Schiffe zu besteigen.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup>
                    Es lässt sich nicht ermitteln, auf welches Schiff die Häftlinge gebracht
                    werden sollten und warum die SS diesen Plan nicht durchführte. Die letzten Häftlingsschiffe
                    verließen am 2. Mai den Hafen von Lübeck, in den Tagen zuvor hatte sich der Kapitän der „Cap Arcona“
                    Heinrich Bertram aber auch Kapitäne anderer Schiffe wiederholt geweigert, weitere Häftlinge
                    aufzunehmen.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup>
                    Es lässt sich deshalb nicht nachvollziehen, ob die Frauen aus Lübberstedt nicht
                    verladen wurden, da ihr Schiff bereits abgelegt hatte, bereits überfüllt war oder der Zug aufgrund
                    der britischen Umschließung der Stadt nicht mehr zum Lübecker Hafen gelangte.
                </p>
                <p>
                    Während im Laufe des 2. Mai Lübeck von den britischen Truppen befreit wurde, setzte sich der Zug mit
                    den Häftlingen erneut in Bewegung und fuhr von Lübeck aus weiter Richtung Norden. Noch am selben Tag
                    wurde der Zug zweimal von britischen Fliegern angegriffen. Zu diesem Zeitpunkt nahmen die Briten
                    gezielt Bahnanlagen und Bahnhöfe, aber auch Güterzuge unter
                    Beschuss.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup> Wie auch bei der „Cap Arcona“
                    war, ihnen nicht bewusst, dass KZ-Häftlinge transportiert wurden. Beim zweiten Angriff wurde der Zug
                    getroffen. Überlebende berichteten später davon, dass der Zug in Brand geriet, aber auch, dass die
                    Wachmannschaften auf die flüchtenden Häftlinge schossen. Mindestens 38 Frauen kamen bei dem Angriff
                    direkt zu Tode, nach Schätzungen von Überlebende waren es 60 bis 80
                    Tote.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup> Nachdem der zerstörte
                    Waggon abgekoppelt und mit den Verletzten zurückgelassen worden war, setzte der Zug sich in der
                    Nacht erneut in Bewegung. Der zurückgelassene Waggon wurde am Morgen des 3. Mai von örtlichen
                    Stellen gefunden, die mindestens 18 Verletzte ins Eutiner Lazarett einlieferten, wo fünf von ihnen
                    ihren Verletzungen erlagen. Sie wurden auf dem Friedhof der ehemaligen jüdischen Gemeinde in Eutin
                    beerdigt, während die an Ort und Stelle verstorbenen Frauen in einem Massengrab an der Bahnstrecke
                    beerdigt wurden.
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/luebberstedt/Luebberstadt-gedenkstein.jpg"), "html", null, true);
        yield "\"
                     alt=\"Gedenkstein auf dem jüdischen Friedhof Lübeck-Moisling\"/>
                <p class=\"caption\">
                    Ende 1960 wurden die 38 an der Bahnstrecke beerdigten Frauen auf den jüdischen Friedhof in
                    Lübeck-Moisling umgebettet, wo bis heute dieser Grabstein an sie erinnert. Foto: Leonid Kogan, 2015
                    (ANg, F 2015-1004, Außenlagerliste (kz-gedenkstaette-neuengamme.de))
                </p>
                <p>
                    Hinter Timmdorf wurde der Zug noch einmal von britischen Fliegern beschossen. Erneut verloren dabei
                    16 Frauen ihr Leben. Die Überlebenden weigerten sich anschließend, den Zug wieder zu besteigen und
                    wurden zu Fuß nach Plön geführt. Die Überlebende Malvin Grünberger schilderte, dass sie dabei
                    mehrfach gehört hätten, dass der Krieg vorbei sei.<sup><a href=\"#endnote24\"
                                                                              id=\"footnote24\">24</a></sup>
                    Mehrere Überlebende erinnerten sich, wie die
                    Häftlinge sich auch in Plön geweigert hätten, den nachgekommenen Zug zu
                    besteigen.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup> Einige der
                    Überlebenden berichteten in Interviews, dass ihnen auch die Wehrmachtssoldaten, die die
                    Munitionswaggons bewachen sollten, zur Flucht rieten. Durch die Soldaten hätten die Frauen auch von
                    Plänen, den Zug mit ihnen zusammen zu sprengen erfahren, was ihren Widerstand verstärkt
                    hätte.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup> Auch
                    der Kontakt mit bereits befreiten sowjetischen Kriegsgefangenen habe die Frauen in der Erwartung
                    eines baldigen Kriegsendes bestärkt. Nachdem am 4. Mai ein erstes britisches Spähfahrzeug in Plön
                    gesichtet wurde, seien die Wachmannschaften geflohen.<sup><a href=\"#endnote27\"
                                                                                 id=\"footnote27\">27</a></sup>
                    Einigen Überlebenden zufolge, seien sie am
                    nächsten Tag jedoch zurückgekehrt, um erneut zu versuchen, die Frauen in die Waggons zu zwingen. Die
                    Überlebende Eszter Rosenfeld erinnerte sich, dass diese Versuche nicht zuletzt deshalb misslangen,
                    weil die SS-Leute in Erwartung der baldigen britischen Gefangenschaft bereits ihre Waffen
                    weggeschmissen hätten.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
                    Es lässt sich nicht ermitteln, welches Ziel die SS mit dem weiteren Transport
                    der Häftlinge verfolgte. Auch in Norddeutschland kam es zu mehreren Massakern an KZ-Häftlingen, die
                    vor ihrer möglichen Befreiung durch die Nationalsozialisten ermordet wurden. Die Strecke war aber
                    zuvor auch für Transporte mehrerer tausend weiblicher KZ-Häftlinge genutzt worden, die dem Roten
                    Kreuz übergeben worden waren.<sup><a href=\"#endnote29\" id=\"footnote29\">29</a></sup>
                    Ob dies auch für die Häftlinge aus Lübberstedt vorgesehen war, ist
                    unklar.
                </p>

            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Weiße Buse</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Ab dem 3. April 1945 wurden mehr als 2.000 skandinavische KZ-Häftlinge an das schwedische Rote Kreuz
                    übergeben und nach Dänemark evakuiert. Dies war das Ergebnis von Geheimverhandlungen zwischen dem
                    Vizepräsidenten des Schwedischen Roten Kreuzes Graf Folke Bernadotte und dem Reichsführer der SS
                    Heinrich Himmler sowie dem Chef des Reichsicherheitshauptamtes Ernst Kaltenbrunner, in deren Folge
                    sich Himmler im Februar 1945 zunächst zur Zusammenführung der skandinavischen Häftlinge im
                    Stammlager des KZ Neuengamme und anschließend zu deren Freilassung bereit erklärt hatte. Hintergrund
                    dieser Verhandlungen waren die Versuche Himmlers, eigenmächtig einen Waffenstillstand mit den
                    westlichen Alliierten zu erreichen. Als das Stammlagre Neuengamme am 20. April 1945 geräumt wurde,
                    wurden auch die übrigen 4.200 skandinavischen Häftlinge, die sich noch im Lager befanden, durch das
                    Rote Kreuz in speziell gekennzeichneten Bussen nach Dänemark gebracht. In weiteren Verhandlungen
                    gelang es dem Roten Kreuz, auch die Freilassung von etwa 15.000 weiblichen Häftlingen aus dem KZ
                    Ravensbrück und aus Hamburger Außenlagern genehmigt zu bekommen, darunter auch über Tausend
                    Jüdinnen. Diese wurden in Güterzügen, teilweise über Plön, nach Dänemark
                    gebracht.<sup><a href=\"#endnote30\" id=\"footnote30\">30</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Befreiung der Häftlinge in Plön</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem die Wachmannschaften sich entfernt hatten, verbrachten die ehemaligen Häftlinge noch einige
                    Tage versteckt in einem Wald, wobei sie sich durch Betteln in den umliegenden Dörfern versorgten.
                    Auch Zeitzeugen aus der Region erinnerten sich nach der Befreiung an die
                    Frauen.<sup><a href=\"#endnote31\" id=\"footnote31\">31</a></sup> Erst mit der
                    Ankunft der britischen Armee am 8. Mai in Plön und der bedingungslosen Kapitulation Deutschlands
                    trauten sich die befreiten Frauen aus ihrem Versteck. „die Engländer befreiten uns, und wir konnten
                    beginnen, wieder als Menschen zu leben“ erinnerte sich später die Überlebende Hajnal
                    Kaufmann.<sup><a href=\"#endnote32\" id=\"footnote32\">32</a></sup> Die
                    befreiten Frauen wurden anschließend im DP-Lager Haffkrug in der Lübecker Bucht untergebracht. Dort
                    hatten die Briten ein Dorf geräumt, um die befreiten Zwangsarbeiter und Zwangsarbeiterinnen der
                    unterschiedlichsten Nationalitäten bis zu ihrer Rückkehr in ihre Herkunftsländer oder ihrer
                    Emigration versorgen zu können. Überlebende beschrieben, wie sie im DP-Lager wieder zu Kräften
                    kamen, aber auch, dass die Wracks der zerstörten KZ-Schiffe sichtbar gewesen seien und ein Schwimmen
                    aufgrund der im Wasser schwimmenden Leichen nicht möglich gewesen
                    sei.<sup><a href=\"#endnote33\" id=\"footnote33\">33</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Wie bei vielen Außenlagern des KZ Neuengamme, sind auch für das Außenlager Lübberstedt ein Großteil
                    der Unterlagen von der SS zerstört worden. In erhaltenen Unterlagen, die die Munitionsfabrik
                    betreffen, finden sich jedoch wichtige Hinweise auf das Außenlager. Für einen Großteil der Vorgänge
                    beim Räumungstransport sind vermutlich von der SS keine Unterlagen mehr angelegt worden. Die im
                    Kreiskrankenhaus Eutin sowie beim Angriff in Plön umgekommenen Häftlinge wurden jedoch durch zivile
                    Stellen beerdigt. Für sie sind deshalb Standesamt- und Friedhofsunterlagen sowie, nach einer
                    Umbettung in den 1960er-Jahren, Grabstellen in Norddeutschland erhalten. In der frühen
                    Nachkriegszeit wurden Überlebende des Holocaust, die über Budapest zumindest zweitweise nach Ungarn
                    zurückkehrten, zudem durch das Deportáltakat Gondozó Országos Bizottság (Landesfürsorgekomitee der
                    Deportierten- DEGOB) befragt.
                    <a href=\"http://degob.org/\" title=\"DEGOB-Protokolle\">
                        Auch mindestens 109 Überlebende des Außenlagers Lübberstedt und des
                        Transportes nach Plön befanden sich darunter.</a><sup><a href=\"#endnote34\"
                                                                                 id=\"footnote34\">34</a></sup>
                </p>
                <p>
                    Seit Anfang der 1980er-Jahre entstand bundesweit eine Vielzahl an Initiativen und Vereinen, die sich
                    der Erforschung und Vermittlung lokaler Geschichte widmeten. Unter dem Motto „Grabe wo du stehst!“
                    gerieten dabei auch die vielfach vergessenen Standorte von KZ-Außenlagern und anderen
                    Zwangsarbeitslagern in den Fokus. 1992 gründete sich in Lübberstedt ein Arbeitskreis, der sich mit
                    der Geschichte der Munitionsfabrik und der dort geleisteten Zwangsarbeit auseinandersetzte. Der
                    „Arbeitskreis MUNA Lübberstedt“ trug viele der verstreuten Quellen zur Munitionsfabrik zusammen und
                    veröffentlichte seine Erkenntnisse 1996 in einem Buch, das auch für diesen Artikel eine wichtige
                    Grundlage bildet.<sup><a href=\"#endnote35\" id=\"footnote35\">35</a></sup>
                    Der Plöner Lokalhistoriker Karsten Dölger widmete sich intensiv den bei den
                    Angriffen auf den Häftlingstransport zu Tode gekommenen Frauen, die in der Region beerdigt wurden.
                    Seine Erkenntnisse veröffentliche er 2017 in einem Aufsatz.<sup><a href=\"#endnote36\"
                                                                                       id=\"footnote36\">36</a></sup>
                    Es ist diese oftmals ehrenamtliche
                    umfangreiche Forschung, die die vorhandenen Quellen zusammenträgt und die Grundlage für das Wissen
                    aber auch die Erinnerung an die in den unterschiedlichen Außenlagern inhaftierten KZ-Häftlinge und
                    ihre individuellen Schicksale bildet.
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
                        Dietrich Banse, „ich wollte überleben und der Welt erzählen“ Zur Geschichte des Frauenlagers
                        Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des Kz Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Lukkas Busche / Andreas Froese (Hrsg.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Begleitender Katalog zur Dauerausstellung der Gedenkstätte Feldscheune Isenschnibbe Gardelegen,
                        Gardelegen / Leipzig / Magdeburg 2022.
                    </li>
                    <li>
                        Karsten Dölger, Von Auschwitz nach Plön – Für 350 ungarische Jüdinnen endete die
                        nationalsozialistische Verschleppung am 4. Mai 1945 in Plön, in: Jahrbuch für Heimatkunde im
                        Kreis Plön 47 (2017), S. 179-212.
                    </li>
                    <li>
                        Hans Ellger, Lübberstedt-Bilohe, in: Wolfgang Benz / Barbara Distel (Hrsg.), Der Ort des
                        Terrors. Geschichte der nationalsozialistischen Konzentrationslager. Band 5: Hinzert. Auschwitz.
                        Neuengamme, München 2007, S. 473-475.
                    </li>
                    <li>
                        Barbara Hillmann / Volrad Kluge / Erdwig Kramer, Lw. 2/XI – Muna Lübberstedt. Zwangsarbeit für
                        den Krieg, Bremen 1996.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Vgl. Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, S.
                        626.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 628.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 631-632.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 634.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Vgl. Barbara Hillmann / Volrad Kluge / Erdwig Kramer, Lw. 2/XI – Muna Lübberstedt. Zwangsarbeit
                        für den Krieg, Bremen 1996.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        So stammten 96 der von Karsten Dölger identifizierten 109 Überlebenden, die 1945 von der DEGOB
                        interviewt wurden, aus Transkarpartien. Vgl. Karsten Dölger, Von Auschwitz nach Plön – Für 350
                        ungarische Jüdinnen endete die nationalsozialistische Verschleppung am 4. Mai 1945 in Plön, in:
                        Jahrbuch für Heimatkunde im Kreis Plön 47 (2017), S. 179-212, S. 181.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 188, 189; Hillmann / Kluge / Kramer, MUNA Lübberstedt, S.
                        108. Auch Überlebende aus Salzwedel berichteten, dass ihr Transport aus Auschwitz zunächst
                        zurückgestellt wurde. Vgl. Dietrich Banse, „ich wollte überleben und der Welt erzählen“ Zur
                        Geschichte des Frauenlagers Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005, S. 39.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt, S. 122.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt, S. 124.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt , S. 111-116.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 195; Buggeln, Arbeit und Gewalt, S. 636.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        Vgl. Hillman / Kluge / Kramer, MUNA Lübberstedt, S. 124-128; Dölger, Auschwitz nach Plön, S.
                        192.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt, S. 130; Hans Ellger, Lübberstedt-Bilohe, in:
                        Wolfgang Benz / Barbara Distel (Hrsg.), Der Ort des Terrors. Geschichte der
                        nationalsozialistischen Konzentrationslager. Band 5: Hinzert. Auschwitz. Neuengamme, München
                        2007, S. 473-475, S. 474.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Buggeln, Arbeit und Gewalt, S. 642.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Vgl. Joint testimony of Gisella Ickovics, born in 1898, and her daughters, Malvin Ickovics, born
                        in 1921, Edit Ickovics, born in 1924, Friederika Ickovics, born in 1926, in Técső,
                        Czechoslovakia, regarding their experiences in the Técső Ghetto, in Auschwitz-Birkenau and
                        Lübberstedt camp, Yad Vashem Digital Archive, Subsection O 15 E, Nr. 1634, online unter:
                        https://collections.yadvashem.org/en/documents/3544918 (letzter Zugriff: 25.07.2024); Collective
                        testimony of 66 women, regarding their experiences in Auschwitz-Birkenau camp and Liebstadt, Yad
                        Vashem Digital Archive, Subsection O 15 E, Nr. 2118, online unter:
                        https://collections.yadvashem.org/en/documents/3543545 (letzter Zugriff: 25.07.2024).
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Lukkas Busche / Andreas Froese (Hrsg.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Begleitender Katalog zur Dauerausstellung der Gedenkstätte Feldscheune Isenschnibbe Gardelegen,
                        Gardelegen / Leipzig / Magdeburg 2022.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 653.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Vgl. Collective testimony of 66 women.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt, S. 130.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 653.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Buggeln, Arbeit und Gewalt, S. 642.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Vgl. Testimony of Eszter Rosenfeld, born in Bedőháza, Czechoslovakia, 1922, regarding her
                        experiences in the Técső Ghetto and in Auschwitz-Birkenau and Haffkrug camps, Yad Vashem Digital
                        Archive, Subsection O 15 E, Nr. 2832, online unter:
                        https://collections.yadvashem.org/en/documents/3546639 (letzter Zugriff: 25.07.2024); Joint
                        testimony of Gisella Ickovics, Malvin Ickovics, Edit Ickovics.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Vgl. Collective testimony of 66 women.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Vgl. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Vgl. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 198.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Vgl. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 196f.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 654-655; Dölger, Auschwitz nach Plön, S. 196f.
                        <a href=\"#footnote30\">&uarr;</a>
                    </li>
                    <li id=\"endnote31\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 199f.
                        <a href=\"#footnote31\">&uarr;</a>
                    </li>
                    <li id=\"endnote32\">
                        Vgl Testimony of Hajnal Kaufmann, born in Huszt, Czechoslovakia, 1924, regarding her experiences
                        in the Huszt Ghetto and in Auschwitz-Birkenau and Lübberstedt camps, Yad Vashem Digital Archive,
                        Subsection O 15 E, Nr. 1937, online unter:
                        https://collections.yadvashem.org/en/documents/3545504 (letzter Zugriff: 25.07.2024).
                        <a href=\"#footnote32\">&uarr;</a>
                    </li>
                    <li id=\"endnote33\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 205f.
                        <a href=\"#footnote33\">&uarr;</a>
                    </li>
                    <li id=\"endnote34\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 179. Die Protokolle lassen sich im Online Archive Yad
                        Vashems einsehen: https://collections.yadvashem.org/en.
                        <a href=\"#footnote34\">&uarr;</a>
                    </li>
                    <li id=\"endnote35\">
                        Vgl, Hillmann/Kluge/Kramer, MUNA Lübberstedt.
                        <a href=\"#footnote35\">&uarr;</a>
                    </li>
                    <li id=\"endnote36\">
                        Vgl. Dölger, Auschwitz nach Plön.
                        <a href=\"#footnote36\">&uarr;</a>
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
                    Louis Wörner, Die Räumung des KZ-Außenlagers Lübberstedt, in: Der Holocaust in Ungarn und die
                    Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 658
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield ".
                    Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/\"
                               title=\"Lizenzbestimmungen auf der Seite von Creative Commons\">CC BY 4.0</a>.
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
        return "studies/luebberstedt.html.twig";
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
        return array (  766 => 658,  399 => 294,  349 => 247,  297 => 198,  196 => 100,  176 => 83,  149 => 59,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Gruppenstudie Lübberstedt | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-deportationen.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2>Die Räumung des KZ-Außenlagers Lübberstedt. In Güterwaggons durch Norddeutschland</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Mit dem Vormarsch der Alliierten wurden ab Mitte 1944 auch die ersten Konzentrationslager befreit.
                    Bevor alliierte Truppen die Lager erreichen konnten, versuchte die SS jedoch Spuren zu vernichten
                    und die Häftlinge in Konzentrationslager zu deportieren, die weiter entfernt vom Frontverlauf lagen.<sup><a
                                href=\"#endnote1\" id=\"footnote1\">1</a></sup> Ab Januar 1945 begannen auch in
                    Nordwestdeutschland die Planungen für die Räumung der Außenlager. Dabei spielten zum einen die
                    Interessen der Unternehmen eine Rolle, die bei der bald erwarteten alliierten Einnahme ihrer
                    Betriebe Aufstände der Zwangsarbeiter und Zwangsarbeiterinnen verhindern, als auch den eigenen Ruf
                    bei der zukünftigen Besatzungsmacht nicht durch die Anwesenheit der unterernährten und
                    menschenunwürdig behandelten Zwangsarbeiter und Zwangsarbeiterinnen gefährden
                    wollten.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup> Zum anderen
                    versuchten staatliche Stellen und die SS die Befreiung der Häftlinge zunächst zu verhindern,
                    insbesondere um eine Befreiung der Häftlinge im Verantwortungsbereich der größeren Städte zu
                    verhindern, auch mit Blick auf das Verhältnis zur zukünftigen
                    Besatzungsmacht.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup> Ende März wurde
                    deshalb mit der Räumung der Außenlager des KZ Neuengamme begonnen, ab Mitte April auch mit der
                    Räumung des Stammlagers. In den folgenden Wochen bis zur Befreiung starben noch mindestens 30
                    Prozent der Häftlinge, von denen nur die wenigsten Namen bekannt sind. Die SS verbrannte zu dieser
                    Zeit in allen Lagern Unterlagen und registrierte die Toten auf den Transporten und in den
                    Auffanglagern nicht mehr.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Das KZ-Außenlager Lübberstedt-Bilohe</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Auch in der Nähe des Ortes Lübberstedt nördlich von Bremen war ein Außenlager des KZ Neuengamme
                    eingerichtet worden. In einem Forstgebiet direkt an einer Bahnstrecke befand sich während des
                    Zweiten Weltkrieges eine Munitionsanstalt (Muna) der deutschen Luftwaffe. In Munitionsanstalten
                    wurden Kampfmittel und Munition aus Zwischenprodukten zusammengesetzt und gelagert. Der umfassende
                    Einsatz von Zwangsarbeiter und Zwangsarbeiterinnen in der Rüstungsindustrie betraf auch die Arbeit
                    in den Munitionsanstalten. So mussten in der Muna Lübberstedt osteuropäische Zwangsarbeiter und
                    Zwangsarbeiterinnen, Kriegsgefangene und italienische Militärinternierte sowie KZ-Häftlinge in der
                    Rüstungsproduktion arbeiten.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    Letztere kamen im Sommer 1944 aus Auschwitz, wohin sie fast alle kurz
                    zuvor aus Ungarn deportiert worden waren. Vermutlich die Mehrheit von ihnen stammte aus
                    Transkarpatien, das erst 1939 von Ungarn annektiert worden
                    war.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup> In Auschwitz waren sie von ihren
                    Verwandten und Freunden getrennt worden, von denen die Mehrheit direkt durch die SS ermordet
                    wurde.
                </p>
                <p>
                    <img class=\"img-fluid\"
                         src=\"{{ asset('images/studies/luebberstedt/Auschwitz-Album_Frimi-Ickovic.jpg') }}\"
                         alt=\" Jüdische Frauen aus Transkarpatien, die in Auschwitz-Birkenau in mehreren Reihen hintereinander stehen\"/>
                <p class=\"caption\">
                </p>
                <p class=\"caption\">
                    Jüdische Frauen aus Transkarpatien in Auschwitz-Birkenau im Mai 1944, die nach ihrer Ankunft zur
                    Zwangsarbeit ausgewählt worden waren. Die Fotos wurden mit unbekanntem Zweck von SS-Männern
                    angefertigt
                    und stellen deren Perspektive da. Die Fotos sind eine der wenigen fotografischen Quellen aus den
                    Vernichtungslagern. Am linken Bildrand hat der Überlebende Leo Cove seine Schwester Frimet (Fritzi)
                    Ickovic identifiziert, die nach Lübberstedt deportiert wurde und die KZ-Haft überlebte.
                    Auschwitz-Album,
                    Yad Vashem (<a href=\"https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp\"
                                   title=\"Website Yad Vashem\">
                        https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp</a>), Copyright © 2024
                    Yad Vashem – Internationale Holocaust Gedenkstätte, Nutzung gemäß Fair Use
                    (<a href=\"https://www.yadvashem.org/terms-and-conditions.html\"
                        title=\"Website Yad Vashem\">https://www.yadvashem.org/terms-and-conditions.html</a>)
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zu Ungarn</h4>
                    <p>
                        <a href=\"{{ path('app_context') }}\" title=\"Historischer Kontext\">
                            &#10149; Mehr zu Ungarn während des Zweiten Weltkrieges
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-4\">
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
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Überlebende des Transportes nach Lübberstedt berichteten später, dass der in Auschwitz
                    zusammengestellte Transport zunächst nicht abfahren konnte und die Häftlinge zurück in ihre
                    Barracken geführt wurden, wo sie sich auskleiden mussten. Unklar ist, was die Absicht der SS war.
                    Die überlebenden Häftlinge, die zu diesem Zeitpunkt bereits mehrfach Massentötungen mitbekommen
                    hatten, erinnerten sich, dass sie befürchteten nun doch ermordet zu werden. Schließlich wurden sie
                    jedoch aufgefordert, sich erneut anzukleiden und einen bereitstehenden Güterzug zu besteigen. Ein
                    Teil des Güterzuges wurde in das Außenlager Salzwedel gebracht, 500 Frauen nach
                    Lübberstedt.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
                <p>
                    Wie auch in anderen Außenlagern betonten Überlebenden im Nachhinein die Verbesserung, die die
                    Verlegung in ein Außenlager gegenüber dem Konzentrations- und Vernichtungslager Auschwitz geboten
                    hätte. Im Falle des Außenlagers Lübberstedt machten sie dies an einer eigenen Pritsche mit einer
                    Decke und Stroh sowie einem Löffel und Teller fest. Die Versorgung der Häftlinge war aber auch hier
                    menschenunwürdig und lebensbedrohlich. Die nur mit dünner Häftlingsbekleidung und Holzschuhen
                    versorgten Frauen bekamen durchgehend zu wenig Lebensmittel und mussten zugleich körperlich stark
                    fordernde Arbeit in der Munitionsfabrik leisten. Auch im Außenlager Lübberstedt gab es nur ein
                    kleines Krankenrevier, in dem zudem keine medizinische Versorgung möglich war. Da die Frauen zudem
                    eine Selektion der Arbeitsunfähigen fürchteten, berichteten mehrere Frauen in lebensgeschichtlichen
                    Interviews, dass sie sich auch bei Krankheiten und Entzündungen nicht krankmeldeten. Für das
                    Außenlager ist der Tod von mindestens fünf Häftlingen bekannt.<sup><a href=\"#endnote8\"
                                                                                          id=\"footnote8\">8</a></sup>
                    In mindesten drei Fällen berichteten
                    Überlebende von Misshandlungen durch die weiblichen Aufseherinnen, die zum Tod der Häftlinge geführt
                    hätten. So berichtete beispielweise die Überlebende Eszter Rosenfeld, dass ihre Bettnachbarin Sari
                    Katz, die nicht zum Morgenappell erscheinen konnte, durch das Wachpersonal zu Tode geprügelt worden
                    sei.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    Wie auch in anderen Frauenaußenlagern wurde die Bewachung des Lagers nicht ausschließlich durch
                    die SS, sondern auch durch bei ihnen angestellte Aufseherinnen im Inneren des Lagers und
                    Wehrmachtssoldaten für die äußere Bewachung übernommen.<sup><a href=\"#endnote10\"
                                                                                   id=\"footnote10\">10</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Räumung des Lagers</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem die Bremer und Hamburger Außenlager bereits Anfang April geräumt worden waren und die
                    Häftlinge insbesondere in das Auffanglager Bergen-Belsen deportiert wurden, erhielt auch der
                    Lagerkommandant des Außenlagers Lübberstedt-Bilohe am 18. April den Befehl, das Lager zu
                    räumen.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    Während die Lager im Stadtbereich vermutlich auf Druck der Stadtverwaltungen, die um ihre
                    Nachkriegsposition besorgt waren, früher geräumt wurden, sollten nun auch die Häftlinge der
                    Munitionsanstalt vor einer Befreiung des Gebietes abtransportiert werden. Bereits zuvor waren etwa
                    60 kranke Frauen nach Bergen-Belsen deportiert worden.<sup><a href=\"#endnote12\"
                                                                                  id=\"footnote12\">12</a></sup>
                </p>
                <p>
                    Das KZ Bergen-Belsen war jedoch schon am 16. April 1945 durch die aus dem Südwesten vorstoßenden
                    Alliierten befreit worden. Anders als die vorher geräumten Lager in der Region wurden die Häftlinge
                    des Außenlagers Lübberstedt daher Richtung Bremen, Hamburg und schließlich Schleswig-Holstein
                    deportiert.
                </p>
                <h3 class=\"mt-4\">Mit dem Zug durch Norddeutschland</h3>
                <p>
                    Die Häftlinge aus Lübberstedt berichteten später, dass sie in Gruppen von 50 bis 80 Frauen in
                    Güterwaggons geladen worden seien, an die Züge seien auch mehrere Waggons mit Munition angehängt
                    worden. Die Aussagen der Überlebenden und Angaben in weiteren Quellen widersprechen sich jedoch, so
                    dass es wahrscheinlich ist, dass die Häftlinge in zwei Transporten abtransportiert wurden, die nach
                    einiger Zeit wieder zusammengeführt wurden.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                    Alle Überlebenden berichteten von dem großen Hunger
                    aufgrund der extrem reduzierten Versorgung mit Lebensmitteln während der über zwei Wochen dauernden
                    Fahrt. Da Militärtransporte Vorrang hatten und viele Gleisanlagen zerstört worden waren, hielt der
                    Zug immer wieder für längere Zeit an, in einigen Fällen sogar für zwei
                    Tage.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup> Zudem änderten sich für
                    viele Häftlingstransporte die Ziele während der Fahrt, da ihre ursprünglichen Ziele zwischenzeitlich
                    durch die Alliierten befreit worden waren. Es lässt sich nicht zweifelsfrei nachvollziehen, welches
                    Ziel der Transport der Häftlinge aus Lübberstedt ursprünglich hatte. Es ist aber zu vermuten, dass
                    er die Häftlingsschiffe in der Lübecker Bucht zum Ziel hatte. Auch die Überlebenden vermuteten dies
                    im Nachhinein.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p>
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp eingerichtet.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Todesmärsche und „Endphaseverbrechen“</h4>
                    <p>
                        In der Endphase des Krieges wurden etliche Konzentrationslager und KZ-Außenlager durch die
                        Nationalsozialisten vor der Ankunft der sich nähernden Alliierten geräumt. Die Häftlinge wurden
                        entweder in Güterwaggons, selten in Lastwagen transportiert oder unter Misshandlungen gezwungen,
                        zu
                        Fuß in weiterhin unter deutscher Kontrolle stehende Gebiete zu marschieren. Während der oft
                        tage-,
                        teilweise auch wochenlang dauernden Märsche wurden die Häftlinge in der Regel kaum versorgt,
                        viele
                        von ihnen verhungerten oder verdursteten in den Güterwaggons, viele brachen während der Märsche
                        aufgrund der Erschöpfung zusammen oder wurden durch die SS oder andere wachhabende Einheiten
                        ermordet. Durch die Überlebenden wurde deshalb für diese Räumungen der Begriff „Todesmarsch“
                        geprägt. Teile der Todesmärsche endeten in der gezielten Ermordung der Häftlinge, von denen das
                        sogenannte „Massaker von Gardelegen“ eines der bekanntesten ist. Über 1.000 Häftlinge aus
                        Außenlagern des KZ Neuengamme und des KZ Mittelbau-Dora wurden dort in einer Feldscheune
                        zusammengetrieben, die von der SS und weiteren NS-Organisationen in Brand gesetzt
                        wurde.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Cap Arcona und Thilbeck</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem die SS auf Druck der Hamburger Wirtschaft und Politik auch die Räumung des Hauptlagers
                    Neuengamme beschlossen hatte, wurden zwischen dem 20. und 26. April etwa 9.000 Häftlinge in
                    Güterzügen nach Lübeck gebracht. Etwa 7.000 von ihnen wurden dort auf die in der Lübecker Bucht
                    liegenden Frachtschiffe „Athen“, „Thielbeck“ und „Elmenhorst“ sowie den manövrierunfähigen
                    Luxusliner „Cap Arcona“ gebracht. Da die Schiffe für die Anzahl der Häftlinge nicht ausgelegt waren
                    und auch nicht genügend Lebensmittel an Bord gebracht wurden, war die Lage für die Menschen in den
                    Laderäumen katastrophal. Am 2. Mai wurde Lübeck von britischen Truppen befreit, einen Tag später
                    wurden die Schiffe durch die britische Luftwaffe, die Truppentransporte in der Ostsee zum Ziel
                    hatte, bombardiert. Dabei wurden die „Cap Arcona“ und die „Thielbeck“ getroffen und sanken, von den
                    circa 7.000 Häftlingen, die sich zu diesem Zeitpunkt auf den beiden Schiffen befanden, überlebten
                    nur circa 400 den Angriff. Während Überlebende vermuteten, dass eine Sprengung der Schiffe zur
                    Ermordung der Häftlinge von vornherein durch die SS vorgesehen gewesen war, gehen Forschende
                    inzwischen davon aus, dass die Häftlinge auf den Schiffen lediglich untergebracht werden
                    sollten.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                </p>
                <p>
                    <img class=\"img-fluid\" src=\"{{ asset('images/studies/luebberstedt/Cap_Arcona_burning.jpg') }}\"
                         alt=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora im Mai 1946\"/>
                <p class=\"caption\">
                    Aufnahme der brennenden „Cap Arcona“ kurz nach dem Angriff, Royal Air Force, 3. Mai 1945,
                    Quelle: <a href=\"http://www1.uni-hamburg.de/rz3a035//arcona.html\"
                               title=\"Website der Universität Hamburg\">
                        http://www1.uni-hamburg.de/rz3a035//arcona.html</a>, Wikipedia,
                    <a href=\"https://commons.wikimedia.org/wiki/File:Cap_Arcona_burning.jpg\"
                       title=\"Wikimedia Commons\">
                        https://commons.wikimedia.org/wiki/File:Cap_Arcona_burning.jpg</a>, Public Domain
                </p>
                <p>
                    Am 1. oder 2. Mai 1945 erreichte der Zug aus Lübberstedt ebenfalls Lübeck, doch statt einer
                    Verladung auf die Schiffe hielt der Zug laut Überlebenden erneut für längere Zeit vor der Stadt. Die
                    Überlebende Malvin Grünberger berichtete in einem Gruppeninterview, dass das Schiff, dass die
                    Häftlinge aufnehmen sollte, bereits abgelegt hatte und die Häftlinge in Tränen ausgebrochen seien
                    als sie davon erfahren hätten.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    Sie hätten gehofft, mit den Schiffen nach Dänemark gebracht zu
                    werden. Andere Überlebende berichteten, dass sie von einer Aufseherin gewarnt worden seien, die
                    Schiffe zu besteigen.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup>
                    Es lässt sich nicht ermitteln, auf welches Schiff die Häftlinge gebracht
                    werden sollten und warum die SS diesen Plan nicht durchführte. Die letzten Häftlingsschiffe
                    verließen am 2. Mai den Hafen von Lübeck, in den Tagen zuvor hatte sich der Kapitän der „Cap Arcona“
                    Heinrich Bertram aber auch Kapitäne anderer Schiffe wiederholt geweigert, weitere Häftlinge
                    aufzunehmen.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup>
                    Es lässt sich deshalb nicht nachvollziehen, ob die Frauen aus Lübberstedt nicht
                    verladen wurden, da ihr Schiff bereits abgelegt hatte, bereits überfüllt war oder der Zug aufgrund
                    der britischen Umschließung der Stadt nicht mehr zum Lübecker Hafen gelangte.
                </p>
                <p>
                    Während im Laufe des 2. Mai Lübeck von den britischen Truppen befreit wurde, setzte sich der Zug mit
                    den Häftlingen erneut in Bewegung und fuhr von Lübeck aus weiter Richtung Norden. Noch am selben Tag
                    wurde der Zug zweimal von britischen Fliegern angegriffen. Zu diesem Zeitpunkt nahmen die Briten
                    gezielt Bahnanlagen und Bahnhöfe, aber auch Güterzuge unter
                    Beschuss.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup> Wie auch bei der „Cap Arcona“
                    war, ihnen nicht bewusst, dass KZ-Häftlinge transportiert wurden. Beim zweiten Angriff wurde der Zug
                    getroffen. Überlebende berichteten später davon, dass der Zug in Brand geriet, aber auch, dass die
                    Wachmannschaften auf die flüchtenden Häftlinge schossen. Mindestens 38 Frauen kamen bei dem Angriff
                    direkt zu Tode, nach Schätzungen von Überlebende waren es 60 bis 80
                    Tote.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup> Nachdem der zerstörte
                    Waggon abgekoppelt und mit den Verletzten zurückgelassen worden war, setzte der Zug sich in der
                    Nacht erneut in Bewegung. Der zurückgelassene Waggon wurde am Morgen des 3. Mai von örtlichen
                    Stellen gefunden, die mindestens 18 Verletzte ins Eutiner Lazarett einlieferten, wo fünf von ihnen
                    ihren Verletzungen erlagen. Sie wurden auf dem Friedhof der ehemaligen jüdischen Gemeinde in Eutin
                    beerdigt, während die an Ort und Stelle verstorbenen Frauen in einem Massengrab an der Bahnstrecke
                    beerdigt wurden.
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/luebberstedt/Luebberstadt-gedenkstein.jpg') }}\"
                     alt=\"Gedenkstein auf dem jüdischen Friedhof Lübeck-Moisling\"/>
                <p class=\"caption\">
                    Ende 1960 wurden die 38 an der Bahnstrecke beerdigten Frauen auf den jüdischen Friedhof in
                    Lübeck-Moisling umgebettet, wo bis heute dieser Grabstein an sie erinnert. Foto: Leonid Kogan, 2015
                    (ANg, F 2015-1004, Außenlagerliste (kz-gedenkstaette-neuengamme.de))
                </p>
                <p>
                    Hinter Timmdorf wurde der Zug noch einmal von britischen Fliegern beschossen. Erneut verloren dabei
                    16 Frauen ihr Leben. Die Überlebenden weigerten sich anschließend, den Zug wieder zu besteigen und
                    wurden zu Fuß nach Plön geführt. Die Überlebende Malvin Grünberger schilderte, dass sie dabei
                    mehrfach gehört hätten, dass der Krieg vorbei sei.<sup><a href=\"#endnote24\"
                                                                              id=\"footnote24\">24</a></sup>
                    Mehrere Überlebende erinnerten sich, wie die
                    Häftlinge sich auch in Plön geweigert hätten, den nachgekommenen Zug zu
                    besteigen.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup> Einige der
                    Überlebenden berichteten in Interviews, dass ihnen auch die Wehrmachtssoldaten, die die
                    Munitionswaggons bewachen sollten, zur Flucht rieten. Durch die Soldaten hätten die Frauen auch von
                    Plänen, den Zug mit ihnen zusammen zu sprengen erfahren, was ihren Widerstand verstärkt
                    hätte.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup> Auch
                    der Kontakt mit bereits befreiten sowjetischen Kriegsgefangenen habe die Frauen in der Erwartung
                    eines baldigen Kriegsendes bestärkt. Nachdem am 4. Mai ein erstes britisches Spähfahrzeug in Plön
                    gesichtet wurde, seien die Wachmannschaften geflohen.<sup><a href=\"#endnote27\"
                                                                                 id=\"footnote27\">27</a></sup>
                    Einigen Überlebenden zufolge, seien sie am
                    nächsten Tag jedoch zurückgekehrt, um erneut zu versuchen, die Frauen in die Waggons zu zwingen. Die
                    Überlebende Eszter Rosenfeld erinnerte sich, dass diese Versuche nicht zuletzt deshalb misslangen,
                    weil die SS-Leute in Erwartung der baldigen britischen Gefangenschaft bereits ihre Waffen
                    weggeschmissen hätten.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
                    Es lässt sich nicht ermitteln, welches Ziel die SS mit dem weiteren Transport
                    der Häftlinge verfolgte. Auch in Norddeutschland kam es zu mehreren Massakern an KZ-Häftlingen, die
                    vor ihrer möglichen Befreiung durch die Nationalsozialisten ermordet wurden. Die Strecke war aber
                    zuvor auch für Transporte mehrerer tausend weiblicher KZ-Häftlinge genutzt worden, die dem Roten
                    Kreuz übergeben worden waren.<sup><a href=\"#endnote29\" id=\"footnote29\">29</a></sup>
                    Ob dies auch für die Häftlinge aus Lübberstedt vorgesehen war, ist
                    unklar.
                </p>

            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Weiße Buse</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Ab dem 3. April 1945 wurden mehr als 2.000 skandinavische KZ-Häftlinge an das schwedische Rote Kreuz
                    übergeben und nach Dänemark evakuiert. Dies war das Ergebnis von Geheimverhandlungen zwischen dem
                    Vizepräsidenten des Schwedischen Roten Kreuzes Graf Folke Bernadotte und dem Reichsführer der SS
                    Heinrich Himmler sowie dem Chef des Reichsicherheitshauptamtes Ernst Kaltenbrunner, in deren Folge
                    sich Himmler im Februar 1945 zunächst zur Zusammenführung der skandinavischen Häftlinge im
                    Stammlager des KZ Neuengamme und anschließend zu deren Freilassung bereit erklärt hatte. Hintergrund
                    dieser Verhandlungen waren die Versuche Himmlers, eigenmächtig einen Waffenstillstand mit den
                    westlichen Alliierten zu erreichen. Als das Stammlagre Neuengamme am 20. April 1945 geräumt wurde,
                    wurden auch die übrigen 4.200 skandinavischen Häftlinge, die sich noch im Lager befanden, durch das
                    Rote Kreuz in speziell gekennzeichneten Bussen nach Dänemark gebracht. In weiteren Verhandlungen
                    gelang es dem Roten Kreuz, auch die Freilassung von etwa 15.000 weiblichen Häftlingen aus dem KZ
                    Ravensbrück und aus Hamburger Außenlagern genehmigt zu bekommen, darunter auch über Tausend
                    Jüdinnen. Diese wurden in Güterzügen, teilweise über Plön, nach Dänemark
                    gebracht.<sup><a href=\"#endnote30\" id=\"footnote30\">30</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Befreiung der Häftlinge in Plön</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem die Wachmannschaften sich entfernt hatten, verbrachten die ehemaligen Häftlinge noch einige
                    Tage versteckt in einem Wald, wobei sie sich durch Betteln in den umliegenden Dörfern versorgten.
                    Auch Zeitzeugen aus der Region erinnerten sich nach der Befreiung an die
                    Frauen.<sup><a href=\"#endnote31\" id=\"footnote31\">31</a></sup> Erst mit der
                    Ankunft der britischen Armee am 8. Mai in Plön und der bedingungslosen Kapitulation Deutschlands
                    trauten sich die befreiten Frauen aus ihrem Versteck. „die Engländer befreiten uns, und wir konnten
                    beginnen, wieder als Menschen zu leben“ erinnerte sich später die Überlebende Hajnal
                    Kaufmann.<sup><a href=\"#endnote32\" id=\"footnote32\">32</a></sup> Die
                    befreiten Frauen wurden anschließend im DP-Lager Haffkrug in der Lübecker Bucht untergebracht. Dort
                    hatten die Briten ein Dorf geräumt, um die befreiten Zwangsarbeiter und Zwangsarbeiterinnen der
                    unterschiedlichsten Nationalitäten bis zu ihrer Rückkehr in ihre Herkunftsländer oder ihrer
                    Emigration versorgen zu können. Überlebende beschrieben, wie sie im DP-Lager wieder zu Kräften
                    kamen, aber auch, dass die Wracks der zerstörten KZ-Schiffe sichtbar gewesen seien und ein Schwimmen
                    aufgrund der im Wasser schwimmenden Leichen nicht möglich gewesen
                    sei.<sup><a href=\"#endnote33\" id=\"footnote33\">33</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Wie bei vielen Außenlagern des KZ Neuengamme, sind auch für das Außenlager Lübberstedt ein Großteil
                    der Unterlagen von der SS zerstört worden. In erhaltenen Unterlagen, die die Munitionsfabrik
                    betreffen, finden sich jedoch wichtige Hinweise auf das Außenlager. Für einen Großteil der Vorgänge
                    beim Räumungstransport sind vermutlich von der SS keine Unterlagen mehr angelegt worden. Die im
                    Kreiskrankenhaus Eutin sowie beim Angriff in Plön umgekommenen Häftlinge wurden jedoch durch zivile
                    Stellen beerdigt. Für sie sind deshalb Standesamt- und Friedhofsunterlagen sowie, nach einer
                    Umbettung in den 1960er-Jahren, Grabstellen in Norddeutschland erhalten. In der frühen
                    Nachkriegszeit wurden Überlebende des Holocaust, die über Budapest zumindest zweitweise nach Ungarn
                    zurückkehrten, zudem durch das Deportáltakat Gondozó Országos Bizottság (Landesfürsorgekomitee der
                    Deportierten- DEGOB) befragt.
                    <a href=\"http://degob.org/\" title=\"DEGOB-Protokolle\">
                        Auch mindestens 109 Überlebende des Außenlagers Lübberstedt und des
                        Transportes nach Plön befanden sich darunter.</a><sup><a href=\"#endnote34\"
                                                                                 id=\"footnote34\">34</a></sup>
                </p>
                <p>
                    Seit Anfang der 1980er-Jahre entstand bundesweit eine Vielzahl an Initiativen und Vereinen, die sich
                    der Erforschung und Vermittlung lokaler Geschichte widmeten. Unter dem Motto „Grabe wo du stehst!“
                    gerieten dabei auch die vielfach vergessenen Standorte von KZ-Außenlagern und anderen
                    Zwangsarbeitslagern in den Fokus. 1992 gründete sich in Lübberstedt ein Arbeitskreis, der sich mit
                    der Geschichte der Munitionsfabrik und der dort geleisteten Zwangsarbeit auseinandersetzte. Der
                    „Arbeitskreis MUNA Lübberstedt“ trug viele der verstreuten Quellen zur Munitionsfabrik zusammen und
                    veröffentlichte seine Erkenntnisse 1996 in einem Buch, das auch für diesen Artikel eine wichtige
                    Grundlage bildet.<sup><a href=\"#endnote35\" id=\"footnote35\">35</a></sup>
                    Der Plöner Lokalhistoriker Karsten Dölger widmete sich intensiv den bei den
                    Angriffen auf den Häftlingstransport zu Tode gekommenen Frauen, die in der Region beerdigt wurden.
                    Seine Erkenntnisse veröffentliche er 2017 in einem Aufsatz.<sup><a href=\"#endnote36\"
                                                                                       id=\"footnote36\">36</a></sup>
                    Es ist diese oftmals ehrenamtliche
                    umfangreiche Forschung, die die vorhandenen Quellen zusammenträgt und die Grundlage für das Wissen
                    aber auch die Erinnerung an die in den unterschiedlichen Außenlagern inhaftierten KZ-Häftlinge und
                    ihre individuellen Schicksale bildet.
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
                        Dietrich Banse, „ich wollte überleben und der Welt erzählen“ Zur Geschichte des Frauenlagers
                        Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des Kz Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Lukkas Busche / Andreas Froese (Hrsg.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Begleitender Katalog zur Dauerausstellung der Gedenkstätte Feldscheune Isenschnibbe Gardelegen,
                        Gardelegen / Leipzig / Magdeburg 2022.
                    </li>
                    <li>
                        Karsten Dölger, Von Auschwitz nach Plön – Für 350 ungarische Jüdinnen endete die
                        nationalsozialistische Verschleppung am 4. Mai 1945 in Plön, in: Jahrbuch für Heimatkunde im
                        Kreis Plön 47 (2017), S. 179-212.
                    </li>
                    <li>
                        Hans Ellger, Lübberstedt-Bilohe, in: Wolfgang Benz / Barbara Distel (Hrsg.), Der Ort des
                        Terrors. Geschichte der nationalsozialistischen Konzentrationslager. Band 5: Hinzert. Auschwitz.
                        Neuengamme, München 2007, S. 473-475.
                    </li>
                    <li>
                        Barbara Hillmann / Volrad Kluge / Erdwig Kramer, Lw. 2/XI – Muna Lübberstedt. Zwangsarbeit für
                        den Krieg, Bremen 1996.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Vgl. Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, S.
                        626.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 628.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 631-632.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 634.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Vgl. Barbara Hillmann / Volrad Kluge / Erdwig Kramer, Lw. 2/XI – Muna Lübberstedt. Zwangsarbeit
                        für den Krieg, Bremen 1996.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        So stammten 96 der von Karsten Dölger identifizierten 109 Überlebenden, die 1945 von der DEGOB
                        interviewt wurden, aus Transkarpartien. Vgl. Karsten Dölger, Von Auschwitz nach Plön – Für 350
                        ungarische Jüdinnen endete die nationalsozialistische Verschleppung am 4. Mai 1945 in Plön, in:
                        Jahrbuch für Heimatkunde im Kreis Plön 47 (2017), S. 179-212, S. 181.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 188, 189; Hillmann / Kluge / Kramer, MUNA Lübberstedt, S.
                        108. Auch Überlebende aus Salzwedel berichteten, dass ihr Transport aus Auschwitz zunächst
                        zurückgestellt wurde. Vgl. Dietrich Banse, „ich wollte überleben und der Welt erzählen“ Zur
                        Geschichte des Frauenlagers Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005, S. 39.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt, S. 122.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt, S. 124.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt , S. 111-116.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 195; Buggeln, Arbeit und Gewalt, S. 636.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        Vgl. Hillman / Kluge / Kramer, MUNA Lübberstedt, S. 124-128; Dölger, Auschwitz nach Plön, S.
                        192.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt, S. 130; Hans Ellger, Lübberstedt-Bilohe, in:
                        Wolfgang Benz / Barbara Distel (Hrsg.), Der Ort des Terrors. Geschichte der
                        nationalsozialistischen Konzentrationslager. Band 5: Hinzert. Auschwitz. Neuengamme, München
                        2007, S. 473-475, S. 474.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Buggeln, Arbeit und Gewalt, S. 642.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Vgl. Joint testimony of Gisella Ickovics, born in 1898, and her daughters, Malvin Ickovics, born
                        in 1921, Edit Ickovics, born in 1924, Friederika Ickovics, born in 1926, in Técső,
                        Czechoslovakia, regarding their experiences in the Técső Ghetto, in Auschwitz-Birkenau and
                        Lübberstedt camp, Yad Vashem Digital Archive, Subsection O 15 E, Nr. 1634, online unter:
                        https://collections.yadvashem.org/en/documents/3544918 (letzter Zugriff: 25.07.2024); Collective
                        testimony of 66 women, regarding their experiences in Auschwitz-Birkenau camp and Liebstadt, Yad
                        Vashem Digital Archive, Subsection O 15 E, Nr. 2118, online unter:
                        https://collections.yadvashem.org/en/documents/3543545 (letzter Zugriff: 25.07.2024).
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Lukkas Busche / Andreas Froese (Hrsg.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Begleitender Katalog zur Dauerausstellung der Gedenkstätte Feldscheune Isenschnibbe Gardelegen,
                        Gardelegen / Leipzig / Magdeburg 2022.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 653.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Vgl. Collective testimony of 66 women.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Vgl. Hillmann / Kluge / Kramer, MUNA Lübberstedt, S. 130.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 653.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Buggeln, Arbeit und Gewalt, S. 642.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Vgl. Testimony of Eszter Rosenfeld, born in Bedőháza, Czechoslovakia, 1922, regarding her
                        experiences in the Técső Ghetto and in Auschwitz-Birkenau and Haffkrug camps, Yad Vashem Digital
                        Archive, Subsection O 15 E, Nr. 2832, online unter:
                        https://collections.yadvashem.org/en/documents/3546639 (letzter Zugriff: 25.07.2024); Joint
                        testimony of Gisella Ickovics, Malvin Ickovics, Edit Ickovics.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Vgl. Collective testimony of 66 women.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Vgl. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Vgl. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 198.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Vgl. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 196f.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 654-655; Dölger, Auschwitz nach Plön, S. 196f.
                        <a href=\"#footnote30\">&uarr;</a>
                    </li>
                    <li id=\"endnote31\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 199f.
                        <a href=\"#footnote31\">&uarr;</a>
                    </li>
                    <li id=\"endnote32\">
                        Vgl Testimony of Hajnal Kaufmann, born in Huszt, Czechoslovakia, 1924, regarding her experiences
                        in the Huszt Ghetto and in Auschwitz-Birkenau and Lübberstedt camps, Yad Vashem Digital Archive,
                        Subsection O 15 E, Nr. 1937, online unter:
                        https://collections.yadvashem.org/en/documents/3545504 (letzter Zugriff: 25.07.2024).
                        <a href=\"#footnote32\">&uarr;</a>
                    </li>
                    <li id=\"endnote33\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 205f.
                        <a href=\"#footnote33\">&uarr;</a>
                    </li>
                    <li id=\"endnote34\">
                        Vgl. Dölger, Auschwitz nach Plön, S. 179. Die Protokolle lassen sich im Online Archive Yad
                        Vashems einsehen: https://collections.yadvashem.org/en.
                        <a href=\"#footnote34\">&uarr;</a>
                    </li>
                    <li id=\"endnote35\">
                        Vgl, Hillmann/Kluge/Kramer, MUNA Lübberstedt.
                        <a href=\"#footnote35\">&uarr;</a>
                    </li>
                    <li id=\"endnote36\">
                        Vgl. Dölger, Auschwitz nach Plön.
                        <a href=\"#footnote36\">&uarr;</a>
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
                    Louis Wörner, Die Räumung des KZ-Außenlagers Lübberstedt, in: Der Holocaust in Ungarn und die
                    Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_deportation_luebberstedt') }}.
                    Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/\"
                               title=\"Lizenzbestimmungen auf der Seite von Creative Commons\">CC BY 4.0</a>.
                </p>
            </div>
        </div>

    </div>

{% endblock %}", "studies/luebberstedt.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/studies/luebberstedt.html.twig");
    }
}