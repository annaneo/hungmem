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
class __TwigTemplate_cbd2d4aac9700cd68861461d59fc13d5 extends Template
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

        yield " Gruppenstudie Dessauer Ufer | ";
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
        <h2>Die Frauen vom KZ-Außenlager Dessauer Ufer. Zwangsarbeit im städtischen Raum</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Ungefähr 200.000 der aus Ungarn deportierten Jüdinnen und Juden mussten Zwangsarbeit leisten. Über
                    Auschwitz und das annektierte Österreich wurden sie ab Mitte 1944 auf verschiedene Außenlager im Deutschen Reich und
                    den besetzten Gebieten verteilt. Sie bildeten damit das untere Ende des rassistisch hierarchisierten
                    umfassenden nationalsozialistischen Zwangsarbeitssystems. Viele der jüdischen KZ-Häftlinge wurden in
                    der Untertageverlagerung der Rüstungsindustrie eingesetzt, zu der die Nationalsozialisten ab 1943
                    angesichts der alliierten Luftüberlegenheit übergegangen waren. Aber auch in anderen Zweigen der
                    Rüstungsindustrie und bei der Trümmerräumung in Betrieben und in deutschen Städten wurde auf die
                    Zwangsarbeit der ungarischen Jüdinnen und Juden zurückgegriffen. Die Zwangsarbeit der jüdischen
                    Häftlinge gehörte damit zum sichtbaren Alltag des nationalsozialistischen Deutschlands.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Von Auschwitz nach Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im Juli 1944 wurde eine Gruppe von 1.000 Frauen in Auschwitz-Birkenau von der SS für einen
                    Arbeitseinsatz in Deutschland zusammengestellt und zum Besteigen eines Güterzugs
                    gezwungen. Die Frauen, die weder
                    wussten, wohin sie transportiert werden würden, noch was sie erwartete, erreichten nach einigen
                    Tagen den Hamburger Hafen.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    Als die Frauen, gezeichnet von den Strapazen des Transports, am Dessauer
                    Ufer aus dem Zug ausstiegen, waren in den dortigen Lagerhäusern bereits verschiedene andere Gruppen
                    von Zwangsarbeitern untergebracht. Überlebende Frauen berichteten später insbesondere von
                    italienischen Militärinternierten, die in unmittelbarer Nähe zu den Frauen untergebracht waren und
                    sie durch die Fenster begrüßt hätten.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                    Die Erkenntnis, dass sie Auschwitz hinter sich gelassen hatten
                    und zu einem Lager für Zwangsarbeit deportiert worden waren sowie die Begrüßung durch die Italiener,
                    von denen die Frauen sich nach den entmenschlichenden Erfahrungen in Auschwitz als Menschen
                    wahrgenommen fühlten, wurde von einigen Überlebenden rückblickend als der erste Moment ihrer Haft
                    beschrieben, in dem sie Hoffnung schöpften, ihre Haftzeit zu
                    überleben.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Dessauer-Ufer.png"), "html", null, true);
        yield "\"
                     alt=\"Asicht Lagerhaus am Dessauer Ufer vom Wasser aus\"/></a>
                <p class=\"caption\">
                    Das Lagerhaus G am Dessauer Ufer diente ab 1944 als KZ-Außenlager, Ansicht von der Wasserseite aus.
                    Foto: Stiftung Hamburger Gedenkstätten und Lernorte zur Erinnerung an die Opfer der NS-Verbrechen, Rainer Viertlböck, 2020,
                    <a href=\"https://gedenkstaetten-in-hamburg.de/gedenkstaetten/zeige/gedenktafeln-am-lagerhaus-g-kz-aussenlager-dessauer-ufer\"
                       title=\"Mehr Informationen auf der Übersichtsseite zu Hamburger Gedenkstätten\">https://gedenkstaetten-in-hamburg.de/gedenkstaetten/zeige/gedenktafeln-am-lagerhaus-g-kz-aussenlager-dessauer-ufer</a>.
                </p>
                <p>
                    Tatsächlich waren die Verpflegung und Versorgung am Dessauer Ufer deutlich besser als im
                    Konzentrations- und Vernichtungslager Auschwitz. So berichtete die Überlebende Hédi Fried, dass jede
                    Frau eine eigene Etage in den aufgestellten Hochbetten inklusive einer Matratze
                    bekam.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup> Einige
                    Überlebende berichteten auch von der ersten Mahlzeit, die im Vergleich zu Auschwitz-Birkenau als
                    äußerst umfangreich wahrgenommen wurde. Nichtsdestotrotz war auch die Verpflegung am Dessauer Ufer
                    nicht ausreichend und die jüdischen KZ-Gefangenen standen am unteren Ende der Hierarchie von
                    Zwangsarbeitern und -arbeiterinnen im Nationalsozialismus. Hédi Fried und andere Überlebende
                    erinnerten sich, dass sie bei ihren Arbeitseinsätzen im Hamburger Hafen eine Zeit lang durch eine
                    Firma zunächst dasselbe Mittagsessen wie die anderen Arbeiter erhielten, bis dies durch den
                    Lagerkommandanten unterbunden wurde.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    Eine ausreichende Ernährung der KZ-Häftlinge oder
                    Gleichstellung mit anderen Arbeitern und Arbeiterinnen war nicht vorgesehen und auch die Haftzeit am
                    Dessauer Ufer war für die Frauen in der Folgezeit durch Hunger geprägt.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Woher kamen die Frauen am Dessauer Ufer?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Haftstätte im Lagerhaus Dessauer Ufer war als Außenlager dem Konzentrationslager Neuengamme
                    unterstellt. Die Frauen im KZ-Außenlager Dessauer Ufer kamen mit zwei Transporten aus Auschwitz. Der
                    erste Transport im Juli 1944 bestand etwa zur Hälfte aus Jüdinnen, die erst kurz zuvor aus dem
                    Ghetto Theresienstadt in Auschwitz angekommen waren und überwiegend aus der damaligen
                    Tschechoslowakei stammten. Die andere Hälfte bestand aus jüdischen Frauen, die aus dem kurz zuvor
                    von den Deutschen besetzten Ungarn deportiert worden waren. Einige der Frauen aus dem besetzten
                    Ungarn stammten aus Gebieten, die erst 1943 durch Ungarn selbst besetzt oder annektiert worden waren
                    und zuvor zur Tschechoslowakei und zu Rumänien gehört hatten. Der zweite Transport im August 1944
                    bestand vor allem aus Jüdinnen, die zuvor aus dem Ghetto Litzmannstadt (Łódź) nach Auschwitz
                    gekommen waren. Viele von ihnen stammten aus Polen, einige von ihnen aber auch aus
                    Deutschland.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                </p>
                <p>
                    Während die aus Theresienstadt und Łódź deportierten Frauen bereits mehrere Jahre der
                    nationalsozialistischen Verfolgung ausgesetzt gewesen waren, waren die Frauen aus dem besetzen
                    Ungarn erst einige Monate zuvor in Ghettos gezwungen und kurze Zeit später deportiert worden. Sie
                    waren teilweise direkt aus ihren Heimatstädten in das Konzentrations- und Vernichtungslager
                    Auschwitz deportiert worden, während die anderen Frauen oftmals bereits mehrfach deportiert worden
                    waren. Die Frauen aus dem besetzen Ungarn waren deshalb noch in verhältnismäßig guter körperlicher
                    Verfassung. Die Ankunft in Auschwitz-Birkenau war für viele ein Schock: sie wurden „selektiert“ und
                    dabei von Verwandten sowie Freunden und Freundinnen getrennt, und der entmenschlichenden Behandlung
                    der SS unterworfen, die unter anderem im entwürdigenden Entkleiden vor den Wachen, dem Scheren der
                    Haare und in der alltäglichen Gewalt ihren Ausdruck fand.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Jüdinnen und Juden</h4>
                    <p>
                        Die aus Ungarn deportierten Juden und Jüdinnen gehörten verschiedenen Gemeinden und
                        religiösen Strömungen im Judentum an. Nicht alle definierten sich zwangsläufig selbst als jüdisch. Für
                        ihre Verfolgung durch die Nationalsozialisten war weder ihre Religion noch eine
                        kulturelle Zugehörigkeit zum Judentum oder die Selbstzuschreibung
                        entscheidend. Das Zentrum der nationalsozialistischen Weltanschauung bildete
                        ein rassistischer Antisemitismus, der Jüdinnen und Juden nach ihrer Abstammung
                        definierte. Auch Christen und Christinnen sowie Atheisten und Atheistinnen
                        wurden unabhängig von ihrer Selbstdefinition oder kulturellen Zugehörigkeit
                        durch die Nationalsozialisten als Juden verfolgt, wenn sie deren
                        Abstammungskriterien entsprachen. Nicht alle hier als Jüdinnen und Juden
                        bezeichneten Personen identifizierten sich selbst als jüdisch, sie alle wurden
                        jedoch als jüdisch verfolgt. </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\">Unterschiedliche Verfolgungserfahrungen - Häftlingsgruppen am Dessauer Ufer</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Frauen der drei Gruppen am Dessauer Ufer unterschieden sich deutlich in ihrer
                    Verfolgungserfahrung. Damit einher gingen auch gegenseitige Wahrnehmungen vermeintlicher und
                    tatsächlicher Privilegiertheit, die laut den Berichten der Überlebenden teilweise zwischen den
                    Frauen der unterschiedlichen Gruppen bestanden. So berichtete die Überlebende Paula Hermann, dass
                    die tschechischen Frauen denen nicht die Haare abrasiert worden waren, von den Frauen aus Ungarn als
                    „die Haarigen“ bezeichnet wurden.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                    Hinzu kamen Sprachbarrieren: Die Frauen aus Theresienstadt
                    sprachen in der Regel Tschechisch und teilweise Deutsch, die Frauen aus Łódź Polnisch, Deutsch oder
                    Jiddisch und die aus Ungarn deportierten Frauen vor allem Ungarisch, aber auch Rumänisch, Jiddisch,
                    Deutsch oder im Fall der Frauen aus dem zuvor zu Tschechoslowakei gehörenden Transkarpartien
                    ebenfalls Tschechisch. Diese Barrieren existierten insbesondere im Hinblick auf die von Ungarn
                    annektierten Gebiete auch innerhalb der aus Ungarn deportierten Frauen. Auch hinsichtlich ihres
                    sozialen Hintergrundes und ihrer Religiosität unterschieden sich die Frauen. Viele überlebende
                    Frauen berichteten, dass sie sich mit Frauen die aus der gleichen Herkunftsregion kamen
                    zusammenschlossen und versuchten, beieinander zu bleiben und sich gegenseitig zu
                    unterstützen.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    Einigen Frauen war es auch gelungen mit Verwandten zusammenzubleiben. So überlebten die beiden
                    Schwestern Hédi Fried, geborene Szmuk und ihre Schwester Livia Fraenkel, ebenfalls geborene Szmuk
                    die Haftzeit gemeinsam.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                    Die lebensrettende gegenseitige Unterstützung in solchen Lagerfamilien
                    findet sich in vielen Berichten weiblicher Überlebender und wurde unter anderem dadurch möglich,
                    dass die Frauen als Gruppe weiter deportiert wurden und damit bei einander bleiben konnten.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zum historischen Kontext</h4>
                    <p>
                        <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Historischer Kontext\">
                            &#10149; Mehr zu Ungarn während des Zweiten Weltkrieges
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit im Hamburger Hafen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Bereits am ersten Tag nach ihrer Ankunft begann die Zwangsarbeit der Frauen im Hamburger Hafen. Die
                    Häftlinge wurden in verschiedene Arbeitskommandos eingeteilt und mit der Fähre oder zu Fuß zu ihren
                    Arbeitsorten gebracht. Eingesetzt wurden die Häftlinge insbesondere in der stark bombardierten
                    Mineralölindustrie, in der sie Trümmer räumen mussten. Diese Arbeit war nicht nur körperlich stark
                    fordernd, sondern die Häftlinge kamen auch mit giftigen Stoffen in Kontakt, vor denen sie nicht
                    geschützt wurden und die die Atemwege reizten. Die KZ-Häftlinge arbeiteten in den Industriebetrieben
                    zwischen Zwangsarbeitern aus der Sowjetunion, Kriegsgefangenen und italienischen Militärinternierten
                    aber auch gewöhnlichen deutschen zivilen Arbeitskräften.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    Auch die Wege zu ihren Arbeitsorten
                    überschnitten sich für diese unterschiedlichen Personengruppen, so transportierten die Fähren, die
                    die Frauen vom Dessauer Ufer zur ihren Arbeitsorten brachten, auch italienische Militärinternierten
                    und deutsche Zivilisten. Trotz des Versuches, die Gruppen voneinander zu separieren, etwa durch die
                    Unterbringung in getrennten Bereichen der Fähre, kamen die unterschiedlichen Gruppen immer wieder in
                    Kontakt. Einige der überlebenden Frauen berichteten von einzelnen deutschen Zivilisten, die sie
                    durch versteckte Lebensmittel unterstützen.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup>
                    In der Regel wurden die Häftlinge und ihr Leiden von den
                    deutschen Zivilisten jedoch ignoriert. Unterstützung erhielten die Frauen vor allem von anderen
                    Zwangsarbeitern, zu denen sie Kontakt aufnehmen konnten. Zwar hungerten auch diese, ihre Verpflegung
                    war aber dennoch umfangreicher als die der KZ-Gefangenen. Insbesondere von den italienischen
                    Militärinternierten, später auch von französischen Kriegsgefangenen erhielten die hungernden
                    Häftlinge heimlich Lebensmittel und Informationen über den Kriegsverlauf, die mit der Hoffnung auf
                    baldige Befreiung verknüpft waren.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                </p>
                <p>
                    Die regelmäßigen Bombardierungen Hamburgs waren für die Häftlinge ebenfalls ein deutlich sichtbares
                    Zeichen für die alliierten Kriegsanstrengungen. Die Häftlinge waren eigentlich durch die
                    Bombardierungen besonders gefährdet, da sie kaum geschützt wurden und anders als deutsche
                    Zivilpersonen in der Regel nicht in Bunkern Zuflucht finden konnten. Die Überlebende Ilona Blair
                    beschrieb wie viele Überlebende, dass die Bombardierungen von den Häftlingen dennoch freudig
                    wahrgenommen wurden, da sie oftmals eine Arbeitspause boten und ihnen zudem Hoffnung auf eine
                    Befreiung vermittelten, da sie die alliierten Kriegsfortschritte gegen das Deutsche Reich
                    belegten.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup>
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
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "#zwangsarbeit\"
                           title=\"Mehr Informationen zu Zwangsarbeit und historischem Kontext\">
                            &#10149; Mehr Informationen zu Zwangsarbeit
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Wieso kamen die Häftlinge nach Hamburg?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem durch die britische Bombardierung im Rahmen der „Operation Gomorrha“ im Sommer 1943 große
                    Teile der Stadt zerstört worden waren, begannen auch in Hamburg umfangreiche Diskussionen um den
                    Einsatz von KZ-Gefangenen. Bereits in einer ersten Wiederaufbauperiode ab Spätsommer 1943 war auf
                    die Zwangsarbeit von KZ-Gefangenen in SS-Baubrigaden zurückgegriffen worden. Nachdem durch weitere
                    Bombenangriffe der Wiederaufbau und der forcierte Ausbau der Hamburger Rüstungsindustrie Mitte 1944
                    gefährdet war, wurde umfangreich auf die Arbeitskraft der Häftlinge zurückgegriffen. Innerhalb
                    kürzester Zeit beantragten verschiedene Hamburger Stellen die Zuteilung von insgesamt 15.500
                    Häftlingen. Diese Forderungen konnten von der SS etwas mehr als zur Hälfte erfüllt werden. Dabei
                    wurde im besonders hohen Maße auf die erst kurz zuvor deportierten ungarischen Jüdinnen und Juden
                    zurückgegriffen, die zu dieser Zeit noch in einem sehr viel besseren gesundheitlichen Zustand waren
                    als viele der schon länger inhaftierten KZ-Gefangenen. Die zu etwa einem Drittel aus Ungarn
                    stammenden Frauen am Außenlager Dessauer Ufer waren höchstwahrscheinlich ursprünglich für den
                    Behelfswohnbau vorgesehen gewesen. Die Versorgung der deutschen Zivilbevölkerung auch mit Wohnraum
                    sollte nicht zuletzt einer Demoralisierung entgegenwirken und die Unterstützung des
                    nationalsozialistischen Regimes und seiner Kriegsanstrengungen sichern. Gewährleistet werden sollte
                    diese Versorgung durch die Ausbeutung der KZ-Gefangenen. Im Mai 1944 verkündete der zuständige
                    Reichswohnungskommissar Robert Ley, dass ihm von der SS 20.000 ungarische Jüdinnen und Juden
                    zugewiesen worden seien, die er wiederum den entsprechenden Städten als Arbeitskräfte anbot. Es ist
                    davon auszugehen, dass auch Hamburg in diesem Zuge die Zuteilung von Häftlingen beantragte. Bevor
                    der erste Transport im Juli 1944 in Hamburg ankam, war jedoch auch die kriegswichtige
                    Mineralölindustrie des Hamburger Hafens Mitte Juni 1944 schwer bombardiert worden. Die Alliierten
                    hatten die Versorgung mit Treibstoff als eine entscheidende Schwachstelle der deutschen
                    Kriegsführung erkannt und 1944 begonnen, entsprechende Industrieanlagen systematisch zu
                    bombardieren. Die Nationalsozialisten reagierten mit einem Sofortprogramm zur Sicherung der
                    Treibstoffversorgung, das nach seinem Leiter Edmund Geilenberg auch als Geilenberg-Programm
                    bezeichnet wurde und ebenfalls auf die Zwangsarbeit der KZ-Häftlinge zurückgriff. Da der
                    Wiederherstellung des Betriebes auf den Hamburger Ölraffinerien eine höhere Bedeutung als dem
                    Behelfswohnungsbau zugemessen wurden, wurden die Frauen des Außenlagers Dessauer Ufer zunächst hier
                    eingesetzt, bevor sie ab September 1944 vorrangig zum Wohnungsbau und zur Trümmerräumung gezwungen
                    wurden.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Behelfswohnheimsbau für die Hamburger Zivilbevölkerung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im September 1944 wurde das Frauenaußenlager am Dessauer Ufer aufgelöst und. Kurz darauf wurde am
                    selben Standort ein Männeraußenlager des KZ Neuengamme eingerichtet. Die Frauen wurden in drei
                    Gruppen von circa jeweils 500 Personen aufgeteilt und in neue Frauenaußenlager im Hamburger
                    Stadtgebiet und Umland verteilt. Sie blieben dabei größtenteils gemäß ihrer Herkunft in Gruppen
                    zusammen. Die aus Ungarn deportierten Frauen wurden zunächst mehrheitlich in das Außenlager Wedel
                    verlegt. Auch von dort wurden sie vor allem zur Trümmerräumung in Hamburg eingesetzt und gelangten
                    zu Fuß und mit der Fähre zu ihren Arbeitsorten. Nach zwei Wochen wurden sie in das Außenlager
                    Eidelstedt im Norden Hamburgs gebracht. Hier mussten sie neben Räumungsarbeiten auch Bauarbeiten
                    verrichten und in der Nähe des Lagers Häuser für die ausgebombte Hamburger Bevölkerung errichten.
                    Insbesondere in den letzten Monaten vor Kriegsende mussten die Häftlinge auch wieder Schnee und
                    Trümmer im Hamburger Stadtgebiet räumen.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                </p>
                <a href=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/"), "html", null, true);
        yield "\"
                   data-lightbox=\"map-dessauer-ufer\"
                   data-title=\" Die Deportationsroute der ungarischen Häftlinge vom Außenlager Dessauer Ufer in weitere Außenlager
                    des KZ Neuengamme.\">
                    <img class=\"gallery img-fluid\"
                         src=\"";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/"), "html", null, true);
        yield "\"
                         alt=\"Karte der Deportationsroute aus Budapest, Auschwitz über mehrere Lager in verschiedene Außenlager des KZ Neuengamme im Hamburger Stadtgebiet\"/>
                </a>
                <p class=\"caption\">
                    Die Deportationsroute der ungarischen Häftlinge vom Außenlager Dessauer Ufer in weitere Außenlager
                    des KZ Neuengamme. &copy; Institut für die Geschichte der deutschen Juden.
                    Lizenz: CC BY 4.0 &#128269; Zum Vergrößern klicken.
                </p>
                <p>
                    Gelegentlich fanden die Häftlinge Lebensmittel in den Ruinen, die für die stark unterernährten
                    Frauen lebensnotwendig waren. Neben dem Hunger berichteten die Überlebenden vor allem auch von der
                    Kälte, vor denen ihre dünne Häftlingskleidung sie nur wenig schützte. Wie in anderen Außenlagern
                    versuchten die Häftlinge sich durch leere Zementsäcke unter der Kleidung Schutz vor der Kälte zu
                    verschaffen, obwohl dies verboten war und hart bestraft wurde. Die unterernährten und
                    unterversorgten Häftlinge waren zu diesem Zeitpunkt sichtbarer Bestandteil des Hamburger
                    Stadtalltags. Ihre Arbeitsorte lagen inmitten bewohnter Stadtviertel, die sie durch Fußmärsche oder
                    Transporte mit der Straßenbahn erreichten. Die Überlebende Hédi Fried fragte sich rückblickend: „Was
                    dachten sie, als sie uns sahen: bis zum Skelett abgemagerte Frauen, in dünner Kleidung, tief
                    gebeugt, Schnee schaufelnd? Oder sahen sie uns nicht? Man sieht nicht, was man nicht sehen will.
                    Wenige Leute hielten an und beobachteten uns, aber niemand kam näher oder stellte Fragen. Später
                    würden sie sagen, sie hätten nichts gewusst. Und noch später, dass alles eine Lüge
                    war.“<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Geschwister_szmuk.jpg"), "html", null, true);
        yield "\"
                     alt=\" Hédi Fried und ihre Schwester Livia Fraenkel nebeneinander stehend\"/></a>
                <p class=\"caption\">
                    Hédi Fried und ihre Schwester Livia Fraenkel ein Jahr nach ihrer Befreiung in Schweden.
                    Privatbesitz: Hédi Fried. </p>
                <p>
                    Am 1. März 1945 war ein Teil der Häftlinge zur Trümmerräumung in der Hamburger Innenstadt
                    eingesetzt. Bei ihrem Rücktransport mit der Straßenbahn, wurde diese am Steindamm in der Nähe des
                    Hamburger Hauptbahnhofs durch ein zusammenstürzendes Haus getroffen und unter diesem begraben.
                    Mindestens 20 Häftlinge kamen dabei nachweislich zu Tode; Überlebende berichteten, dass die Hälfte
                    der Insassen der beiden vorderen Wagons das Unglück nicht
                    überlebte.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup> Die Überlebende Ilona Blair
                    berichtete, dass zu Beginn noch zufällig anwesende Passanten den Häftlingen bei der Bergung der
                    vielen verletzten Frauen geholfen hätten, dies aber durch die wachhabenden SS-Männer verboten worden
                    sei.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    Die teilweise schwer verletzten Häftlinge wurden durch ihre Mitgefangenen in das kleine
                    Krankenrevier des Außenlagers Eidelstedt transportiert. Medikamente und medizinische Versorgung war
                    für die Häftlinge nicht vorhanden, stattdessen berichtete Blair wie der für die Betreuung der
                    Kranken zugeteilten KZ-Gefangenen Giftspritzen ausgehändigt wurden, um die verletzen Frauen, die
                    nicht von alleine wieder arbeitsfähig sein würden, zu ermorden. Nachdem diese sich geweigert hätte,
                    wäre sie von ihrer Funktion entfernt und mutmaßlich ermordet
                    worden.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup> Die Ermordung von kranken
                    Häftlingen gehörte auch in anderen Außenstätten des Konzentrationslagers Neuengammes zur Praxis der
                    SS. Wie viele verletzte Häftlinge an fehlender medizinischer Betreuung oder durch direkte Ermordung
                    verstarben, ist nicht bekannt.
                </p>

                    <img class=\"img-fluid\"
                         src=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Zeitungsausschnitt.jpg"), "html", null, true);
        yield "\"
                         alt=\"Ausschnitt aus dem Hamburger Anzeiger, in dem kurz über den Straßenbahnunfall berichtet wird\"/>
                <p class=\"caption\">
                    BU: Zeitungsbericht zu dem Straßenbahnunfall: „Folgenschweres Unglück“, in: Hamburger Anzeiger,
                    2.3.1945, S. 2, Staats- und Universitätsbibliothek Hamburg Carl von Ossietzky, Germany - Public
                    Domain, Europeana, online unter:
                    <a href=\"https://www.europeana.eu/item/9200338/BibliographicResource_3000117673612\"
                       title=\"Zeitunsg auf der Website der Europeana\">https://www.europeana.eu/item/9200338/BibliographicResource_3000117673612</a>.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Wedel (Frauen)</h4>
                    <p>
                        Seit September 1944 wurden in dem Außenlager Wedel des KZ Neuengamme 500 ungarische und
                        tschechische Jüdinnen inhaftiert, die zuvor am Dessauer Ufer gewesen waren und Zwangsarbeit bei
                        Räumungsarbeiten im Stadtgebiet leisten mussten. Nach zwei Wochen wurde das Lager geräumt und
                        die Frauen in das Außenlager Eidelstedt gebracht.
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Hamburg-Eidelstedt</h4>
                    <p>
                        Das Außenlager des KZ Neuengamme war im September 1944 eingerichtet worden. Die etwa 500
                        Häftlinge waren zuvor im Außenlager Wedel inhaftiert und mussten insbesondere Zwangsarbeit beim
                        Bau von Behelfswohnheimen leisten. Anfang April 1945 wurden die Häftlinge nach Bergen-Belsen
                        deportiert. </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Räumung der Hamburger Lager ins Konzentrationslager Bergen-Belsen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Als sich Anfang April 1944 das Kriegsende immer deutlicher abzeichnete, begannen die
                    Nationalsozialisten, in Hamburg ihre Spuren zu verwischen und die Lager im Stadtgebiet zu räumen.
                    Die Frauen im Außenlager Eidelstedt wurden erneut in einen Güterzug verfrachtet, der nach drei Tagen
                    im Konzentrationslager Bergen-Belsen ankam. Die Häftlinge hatten während der Fahrt keine Verpflegung
                    erhalten. Als sie Bergen-Belsen erreichten, war das Konzentrationslager bereits überfüllt.
                    Bergen-Belsen wurde zu einem Sterbelager.
                </p>
                <p>
                    Die Zeit in Bergen-Belsen wurde von vielen der überlebenden Frauen als eine der schlimmsten
                    beschrieben. Die ausgehändigten Lebensmittel waren zum Überleben zu wenig und auch Trinkwasser war
                    kaum vorhanden, so dass ein Teil der Häftlinge aus Pfützen
                    trank.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup> Als die britischen Streitkräfte
                    das Lager am 15. April1945 befreiten, fanden sie zehntausende Häftlinge vor, die teilweise kurz vor
                    dem Hungertod standen und inmitten unbestatteter Leichen lebten. Die Überlebende Hédi Fried
                    berichtete, dass sie zum Zeitpunkt ihrer Befreiung so geschwächt war, dass sie kaum noch aufstehen
                    konnte.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup>
                    Viele Häftlinge kamen auch nach der Befreiung noch an den Haftfolgen zu Tode. Es lässt sich
                    nicht feststellen, wie viele der Häftlinge aus Ungarn, die im Juli 1944 am Dessauer Ufer angekommen
                    waren, ihre Haftzeit in Hamburg und in Bergen-Belsen überlebten. Es ist davon auszugehen, dass viele
                    die Bedingungen unter denen die SS sie zum Leben und Arbeiten zwang, nicht überlebten. Die
                    Überlebende Ilona Blair geht davon aus, dass nur die Hälfte ihre Gruppe
                    überlebte.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp eingerichtet.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 410
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Bemühungen der Hamburger Wirtschaft und Verwaltung um den Einsatz von KZ-Häftlingen sind gut
                    dokumentiert, auch wenn sich die genauen Vorgänge die zu den jeweiligen Einsätzen der beschriebenen
                    Häftlingsgruppe führten, nicht belegen lassen.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup>
                    Die Außenlager am Dessauer Ufer, in Wedel und
                    Eidelstedt wurden zentral im KZ-Stammlager Neuengamme verwaltet, dessen Unterlagen die SS fast alle
                    vor der Befreiung vernichtete. Die Arbeitseinsätze, Bewachung und Lebensumstände der Häftlinge
                    lassen sich deshalb vor allem aus den Berichten der bekannten Überlebenden rekonstruieren, von denen
                    viele im Rahmen eines Forschungsprojektes zu Frauenaußenlagern des KZ Neuengamme in den
                    1990er-Jahren geführt wurden.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup>
                    Die Überlebende Hédi Fried veröffentliche ihre Erinnerung 1992 zudem
                    in Buchform.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Dessauer-Ufer-Ueberlebende.jpg"), "html", null, true);
        yield "\"
                     alt=\"Überlebende am Dessauer Ufer: sechs ältere überlebende Frauen stehen nebeneinander\"/>
                <p class=\"caption\">
                    Tschechische Überlebenden am Dessauer Ufer in den 1980er-Jahren: Archiv KZ-Gedenkstätte Neuengamme,
                    F 2015-273.
                </p>
                <p>
                    Erhalten geblieben sind darüber hinaus zum einen einzelne Unterlagen in Bezug auf die Toten des
                    Straßenbahnunfalls, von denen mehre Namen bekannt sind. Überlebende berichteten teilweise von
                    weiteren Toten während der Haftzeit, zu denen sich aber keine Unterlagen finden lassen und deren
                    Namen deshalb unbekannt bleiben.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
                    Zum anderen sind viele der sogenannten WVHA-Häftlingskarteikarten
                    oder Hollerith-Vorkarten erhalten geblieben. Ab Mitte 1944 hatte die SS begonnen, in den meisten
                    Konzentrationslagern Häftlingskommandos aufzustellen, die die Informationen der lagereigenen
                    Häftlingsunterlagen auf standardisierte Häftlingskarteikarten übertrugen, die an ein zentrales
                    Institut des Wirtschaftsverwaltungshauptamtes (WVHA) der SS in Berlin gesandt wurden. In diesem
                    „Maschinellen Zentralinstitut für optimale Menschenerfassung und Auswertung“ sollten die
                    Informationen auf Lochkarten übertragen werden, um die Häftlingsinformationen zentral zu erfassen
                    und mittels einer sogenannten „Hollerithmaschine“ verarbeiten zu können. Während die lagereigenen
                    Häftlingsunterlagen des KZ Neuengamme und auch die Lochkarten selbst nicht erhalten geblieben sind,
                    sind die standardisierten Karteikarten größtenteils noch vorhanden. Auf ihnen finden sich jedoch
                    lediglich für die SS verwertbare und maschinell lesbare Informationen, das heißt die Häftlingsnummer
                    der Häftlinge, ihre Nationalität, ihr Geschlecht, ihre Geburtsdaten, Berufe sowie Deportationsdaten,
                    allerdings keine Namen.<sup><a href=\"#endnote29\" id=\"footnote29\">29</a></sup>
                    Diese Quellen stehen damit beispielhaft für die entmenschlichende
                    bürokratische Sichtweise der Nationalsozialisten, die Menschen zu bloßen Zahlen degradierten.
                    Insbesondere die Namen der ermordeten Häftlinge, die die KZ-Haft nicht überlebten, aber auch der
                    Überlebenden, die aus unterschiedlichsten Gründen keine dokumentierten Interviews über ihre Haftzeit
                    gaben, sind damit nicht ermittelbar.
                </p>
                <a href=\"";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Haeftlingskarte.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"dessauer-ufer-haeftlingskarte\"
                   data-title=\"Sogenannte Hollerith-Vorkarte eines Häftlings im Außenlager Dessauer Ufer, Bundesarchiv, BArch, NS
                    3/1577.\">
                <img class=\"gallery img-fluid\" src=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Haeftlingskarte_preview.jpg"), "html", null, true);
        yield "\"
                     alt=\"Hollerith-Vorkarte eines Häftlings mit Angaben zu Häftlingsart – in diesem Fall: Jude – Geburtsdatum, Einlieferungsdaten, Beruf und weiteren Angaben\"/>
                </a>
                    <p class=\"caption\">
                    Sogenannte Hollerith-Vorkarte eines Häftlings im Außenlager Dessauer Ufer, Bundesarchiv, BArch, NS
                    3/1577. &#128269; Zum Vergrößern klicken.
                </p>
                <p>
                    Die wenigen Berichte der interviewten Überlebenden geben Einblicke in die Arbeitsorte und die
                    Perspektive der Häftlinge. Sie bilden damit nicht nur wichtige Quellen zur Geschichte der
                    Außenlager, sondern ermöglichen auch einen Perspektivwechsel von den Quellen der
                    nationalsozialistischen Bürokratie, in der die Häftlinge nur als passives Menschenmaterial
                    erscheinen zu den betroffenen Personen und ihrer Wahrnehmung aber auch ihrem Umgang mit der
                    Gewaltsituation, der sie ausgesetzt worden waren. Die in der Regel Jahrzehnte nach der Befreiung
                    aufgenommenen Interviews sind durch individuelle wie gesellschaftliche Verarbeitungs- und
                    Verdrängungsprozesse und die konkrete Gesprächssituation geformt. Die Überlebenden berichteten über
                    die jeweiligen Lager zudem im Kontext ihrer gesamten Verfolgungsgeschichte. Einige der Überlebenden
                    beschrieben die Haftzeit am Dessauer Ufer als „Luxury“, als „Luxus“ oder als Aufstieg von der „Hölle
                    in den Himmel“, was nur vor dem Hintergrund des gesamten Gespräches und der dabei geteilten
                    Erfahrungen in Auschwitz und Bergen-Belsen Sinn ergibt.<sup><a href=\"#endnote30\" id=\"footnote30\">30</a></sup>
                    Eine davon losgelöste Aussage über die
                    eigene Wahrnehmung der lebensbedrohlichen und entmenschlichenden Lebensbedingungen am Dessauer Ufer
                    ist damit nicht gemacht.
                </p>
                <p>
                    Das Wissen über die Häftlinge, ihre Haftbedingungen und individuelle Wahrnehmung bleibt damit
                    zwangsläufig bruchstückhaft. Bereits die Namen der allermeisten Häftlinge sind unbekannt und lassen
                    sich nicht ermitteln. Insbesondere die Ermordeten bleiben oftmals namenslos.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <ul class=\"bibliography\">
                    <li>
                        Randolp L. Braham (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1,
                        Evanston 2013.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Lucy Debus, „Hamburg das war die Wende“. Das KZ-Außenlager Dessauer Ufer in den Erinnerungen
                        weiblicher Überlebender, unveröffentlichte Masterarbeit, Bremen 2021.
                    </li>
                    <li>
                        Hans Ellger, Hamburg-Dessauer Ufer (Frauen), in: Wolfgang Benz / Barbara Diestel (Hrsg), Der Ort
                        des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Band 5: Hinzert.
                        Auschwitz. Neuengamme, München 2007, S. 394-396.
                    </li>
                    <li>
                        Hans Ellger, Zwangsarbeit und weibliche Überlebensstrategien. Die Geschichte der
                        Frauenaußenlager des Konzentrationslagers Neuengamme 1944/1945, Berlin 2007.
                    </li>
                    <li>
                        Hédi Fried, Fragmente meines Lebens. Ein Leben bis Auschwitz und ein Leben danach, Lizenzausgabe
                        Hamburg 2023, britische Originalausgabe 1990
                    </li>
                    <li>
                        Susanne Heim et al. (Hrsg.), Die Verfolgung und Ermordung der europäischen Juden durch das
                        nationalsozialistische Deutschland 1933.1945, Band 15. Ungarn 1944-1945. Bearbeitet von Regina
                        Fritz, Berlin / Boston 2021.
                    </li>
                    <li>
                        Lisa Hellriegel, Weibliche Überlebensstrategien? Eine Sekundäranalyse der Oral
                        History-Interviews von Hans Ellger mit den Überlebenden der Hamburger Frauen-Außenlager des KZ
                        Neuengamme, unveröffentlichte Masterarbeit, Hamburg 2021.
                    </li>
                    <li>
                        Christian Römmer, Digitalisierung der WVHA-Häftlingskartei, in: Gedenkstätten-Rundbrief 150
                        (2009), S. 20-25.
                    </li>
                    <li>
                        Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart/München 2001.
                    </li>
                    <li>
                        Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager 1940-1945.
                        Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung,
                        Celle 2009.
                    </li>
                    <li>
                        Studentische Forschungsgruppe Dessauer Ufer / Stiftung Hamburger Gedenkstätten und Lernorte zur
                        Erinnerung an die Opfer der NS-Verbrechen (Hrsg.), Das Lagerhaus G am Dessauer Ufer. Ein
                        ehemaliges Außenlager des KZ Neuengamme auf dem Kleinen Grasbrook, Hamburg 2022.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, S. 87.
                        Aus der Perspektive einer Überlebenden vgl. Hédi Fried, Fragmente meines Lebens. Ein Leben bis
                        Auschwitz und ein Leben danach, Lizenzausgabe Hamburg 2023, britische Originalausgabe 1990, S.
                        112-116.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. z.B. Fried, Fragmente, S. 119, oder auch die tschechische Überlebende Dita Kraus: Dita
                        Kraus, Ein aufgeschobenes Leben - Kindheit im Konzentrationslager – Neuanfang in Israel,
                        Göttingen 2020, S. 159f.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Interview mit Esther Rosenbaum am 28.6.1998 in Hamburg, Interviewer Hans Ellger,
                        Gesamtlänge 00:50:07, ANG: M 2019-0030; Interview mit Paula Herrmann am 05.03.2000 in Haifa,
                        Interviewer Hans Ellger, Gesamtlänge 01:48:29, ANG: M 2013-0050, M 2013-0051. Über die
                        Perspektive der tschechischen Frauen gibt es auch einen Film: Jurgen Kinter, „Hamburg, das war
                        die Wende“. Stationen einer gemeinsamen Geschichte. Prag, Theresienstadt, Auschwitz, Hamburg,
                        Bergen-Belsen, Prag. Margit Hermannova, Edith Kraus und Dagmar Lieblova erinnern sich
                        (1999/2002).
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Fried, Fragmente, S. 116.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Vgl. Fried, Fragmente, S. 118.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Vgl. Hans Ellger, Hamburg-Dessauer Ufer (Frauen), in: Wolfgang Benz / Barbara Diestel (Hrsg.),
                        Der Ort des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Band 5:
                        Hinzert. Auschwitz. Neuengamme, München 2007, S. 394-396; Ders., Zwangsarbeit und weibliche
                        Überlebensstrategien. Die Geschichte der Frauenaußenlager des Konzentrationslagers Neuengamme
                        1944/1945, Berlin 2007, S. 76-79.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Zur Geschichte der Deportationen aus Ungarn vgl. Susanne Heim et al. (Hrsg.), Die Verfolgung und
                        Ermordung der europäischen Juden durch das nationalsozialistische Deutschland 1933.1945, Band
                        15. Ungarn 1944-1945. Bearbeitet von Regina Fritz, Berlin / Boston 2021; Randolp L. Braham
                        (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1, Evanston 2013. Zur
                        Perspektive der Überlebenden u.a. Fried, Fragmente, S. 83-113.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Interview mit Paula Herrmann, 2000; Auch Hédi Fried berichtete, dass die ungarischen Häftlinge
                        die tschechischen um ihre Haare beneidet hätten, aber auch, dass „ihre Leidensgeschichte […]
                        viel länger“ gewesen sei: Fried, Fragmente, S. 120.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Vgl.: Lisa Hellriegel, Weibliche Überlebensstrategien? Eine Sekundäranalyse der Oral
                        History-Interviews von Hans Ellger mit den Überlebenden der Hamburger Frauen-Außenlager des KZ
                        Neuengamme, unveröffentlichte Masterarbeit, Hamburg 2021, insbesondere S. 26-31; Lucy Debus,
                        „Hamburg das war die Wende“. Das KZ-Außenlager Dessauer Ufer in den Erinnerungen weiblicher
                        Überlebender, unveröffentlichte Masterarbeit, Bremen 2021.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Vgl. Fried, Fragmente.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Vgl. Ellger, Überlebensstrategien, S. 155, 159-162, 302-308, Interview mit Paula Hermann, 2000;
                        Fried, Fragmente; Interview mit Ilona Blair am 10.11.1980, Interviewer Sophie Caplan, United
                        States Holocaust Memorial Museum Collection, acquired from Sophie Caplan RG-50.617.0006, United
                        States Holocaust Memorial Museum, Washington, DC, online unter:
                        https://collections.ushmm.org/search/catalog/irn50932 (letzter Zugriff 11.07.2024).
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        So z.B. Paula Hermann: Interview mit Paula Hermann, 2000.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Vgl. z.B. Interview mit Ilona Blair, 1980.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Vgl. Interview mit Ilona Blair, 1980; Interview mit Paula Hermann, 2000.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 85-91; Eller, Überlebensstrategien, S. 159-163.
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Vgl. u.a. Fried, Fragmente, S. 121-154, Ellger, Überlebensstrategien, S. 162-163; Buggeln,
                        Arbeit und Gewalt, S. 275.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Fried, Fragmente, S. 150.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Vgl. Fried, Fragmente, S. 140-142, Interview Ilona Blair 1980.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Vgl. Interview Ilona Blair 1980.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Vgl. Interview Ilona Blair 1980.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Vgl. Fried, Fragmente, S. 163.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Vgl. Fried, Fragmente, S. 166f.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Vgl. Interview Ilona Blair, 1980.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Buggeln, Arbeit und Gewalt, S. 85-91.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Ellger, Überlebensstrategien.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Fried, Fragmente.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Vgl. Interview Ilona Blair, 1980.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Christian Römmer: Digitalisierung der WVHA-Häftlingskartei, in: Gedenkstätten-Rundbrief 150
                        (2009), S. 20.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Interview Ilona Blair 1980; Fried, Fragmente, S. 116.
                        <a href=\"#footnote30\">&uarr;</a>
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
                    Louis Wörner: Zwangsarbeit in Hamburg, in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 732
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield ". Lizenz: CC BY
                    4.0.
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
        return array (  855 => 732,  588 => 468,  581 => 464,  548 => 434,  521 => 410,  447 => 339,  416 => 311,  390 => 288,  382 => 283,  314 => 218,  252 => 159,  138 => 48,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Gruppenstudie Dessauer Ufer | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-deportationen.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2>Die Frauen vom KZ-Außenlager Dessauer Ufer. Zwangsarbeit im städtischen Raum</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Ungefähr 200.000 der aus Ungarn deportierten Jüdinnen und Juden mussten Zwangsarbeit leisten. Über
                    Auschwitz und das annektierte Österreich wurden sie ab Mitte 1944 auf verschiedene Außenlager im Deutschen Reich und
                    den besetzten Gebieten verteilt. Sie bildeten damit das untere Ende des rassistisch hierarchisierten
                    umfassenden nationalsozialistischen Zwangsarbeitssystems. Viele der jüdischen KZ-Häftlinge wurden in
                    der Untertageverlagerung der Rüstungsindustrie eingesetzt, zu der die Nationalsozialisten ab 1943
                    angesichts der alliierten Luftüberlegenheit übergegangen waren. Aber auch in anderen Zweigen der
                    Rüstungsindustrie und bei der Trümmerräumung in Betrieben und in deutschen Städten wurde auf die
                    Zwangsarbeit der ungarischen Jüdinnen und Juden zurückgegriffen. Die Zwangsarbeit der jüdischen
                    Häftlinge gehörte damit zum sichtbaren Alltag des nationalsozialistischen Deutschlands.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Von Auschwitz nach Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im Juli 1944 wurde eine Gruppe von 1.000 Frauen in Auschwitz-Birkenau von der SS für einen
                    Arbeitseinsatz in Deutschland zusammengestellt und zum Besteigen eines Güterzugs
                    gezwungen. Die Frauen, die weder
                    wussten, wohin sie transportiert werden würden, noch was sie erwartete, erreichten nach einigen
                    Tagen den Hamburger Hafen.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    Als die Frauen, gezeichnet von den Strapazen des Transports, am Dessauer
                    Ufer aus dem Zug ausstiegen, waren in den dortigen Lagerhäusern bereits verschiedene andere Gruppen
                    von Zwangsarbeitern untergebracht. Überlebende Frauen berichteten später insbesondere von
                    italienischen Militärinternierten, die in unmittelbarer Nähe zu den Frauen untergebracht waren und
                    sie durch die Fenster begrüßt hätten.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                    Die Erkenntnis, dass sie Auschwitz hinter sich gelassen hatten
                    und zu einem Lager für Zwangsarbeit deportiert worden waren sowie die Begrüßung durch die Italiener,
                    von denen die Frauen sich nach den entmenschlichenden Erfahrungen in Auschwitz als Menschen
                    wahrgenommen fühlten, wurde von einigen Überlebenden rückblickend als der erste Moment ihrer Haft
                    beschrieben, in dem sie Hoffnung schöpften, ihre Haftzeit zu
                    überleben.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Dessauer-Ufer.png') }}\"
                     alt=\"Asicht Lagerhaus am Dessauer Ufer vom Wasser aus\"/></a>
                <p class=\"caption\">
                    Das Lagerhaus G am Dessauer Ufer diente ab 1944 als KZ-Außenlager, Ansicht von der Wasserseite aus.
                    Foto: Stiftung Hamburger Gedenkstätten und Lernorte zur Erinnerung an die Opfer der NS-Verbrechen, Rainer Viertlböck, 2020,
                    <a href=\"https://gedenkstaetten-in-hamburg.de/gedenkstaetten/zeige/gedenktafeln-am-lagerhaus-g-kz-aussenlager-dessauer-ufer\"
                       title=\"Mehr Informationen auf der Übersichtsseite zu Hamburger Gedenkstätten\">https://gedenkstaetten-in-hamburg.de/gedenkstaetten/zeige/gedenktafeln-am-lagerhaus-g-kz-aussenlager-dessauer-ufer</a>.
                </p>
                <p>
                    Tatsächlich waren die Verpflegung und Versorgung am Dessauer Ufer deutlich besser als im
                    Konzentrations- und Vernichtungslager Auschwitz. So berichtete die Überlebende Hédi Fried, dass jede
                    Frau eine eigene Etage in den aufgestellten Hochbetten inklusive einer Matratze
                    bekam.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup> Einige
                    Überlebende berichteten auch von der ersten Mahlzeit, die im Vergleich zu Auschwitz-Birkenau als
                    äußerst umfangreich wahrgenommen wurde. Nichtsdestotrotz war auch die Verpflegung am Dessauer Ufer
                    nicht ausreichend und die jüdischen KZ-Gefangenen standen am unteren Ende der Hierarchie von
                    Zwangsarbeitern und -arbeiterinnen im Nationalsozialismus. Hédi Fried und andere Überlebende
                    erinnerten sich, dass sie bei ihren Arbeitseinsätzen im Hamburger Hafen eine Zeit lang durch eine
                    Firma zunächst dasselbe Mittagsessen wie die anderen Arbeiter erhielten, bis dies durch den
                    Lagerkommandanten unterbunden wurde.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    Eine ausreichende Ernährung der KZ-Häftlinge oder
                    Gleichstellung mit anderen Arbeitern und Arbeiterinnen war nicht vorgesehen und auch die Haftzeit am
                    Dessauer Ufer war für die Frauen in der Folgezeit durch Hunger geprägt.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Woher kamen die Frauen am Dessauer Ufer?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Haftstätte im Lagerhaus Dessauer Ufer war als Außenlager dem Konzentrationslager Neuengamme
                    unterstellt. Die Frauen im KZ-Außenlager Dessauer Ufer kamen mit zwei Transporten aus Auschwitz. Der
                    erste Transport im Juli 1944 bestand etwa zur Hälfte aus Jüdinnen, die erst kurz zuvor aus dem
                    Ghetto Theresienstadt in Auschwitz angekommen waren und überwiegend aus der damaligen
                    Tschechoslowakei stammten. Die andere Hälfte bestand aus jüdischen Frauen, die aus dem kurz zuvor
                    von den Deutschen besetzten Ungarn deportiert worden waren. Einige der Frauen aus dem besetzten
                    Ungarn stammten aus Gebieten, die erst 1943 durch Ungarn selbst besetzt oder annektiert worden waren
                    und zuvor zur Tschechoslowakei und zu Rumänien gehört hatten. Der zweite Transport im August 1944
                    bestand vor allem aus Jüdinnen, die zuvor aus dem Ghetto Litzmannstadt (Łódź) nach Auschwitz
                    gekommen waren. Viele von ihnen stammten aus Polen, einige von ihnen aber auch aus
                    Deutschland.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                </p>
                <p>
                    Während die aus Theresienstadt und Łódź deportierten Frauen bereits mehrere Jahre der
                    nationalsozialistischen Verfolgung ausgesetzt gewesen waren, waren die Frauen aus dem besetzen
                    Ungarn erst einige Monate zuvor in Ghettos gezwungen und kurze Zeit später deportiert worden. Sie
                    waren teilweise direkt aus ihren Heimatstädten in das Konzentrations- und Vernichtungslager
                    Auschwitz deportiert worden, während die anderen Frauen oftmals bereits mehrfach deportiert worden
                    waren. Die Frauen aus dem besetzen Ungarn waren deshalb noch in verhältnismäßig guter körperlicher
                    Verfassung. Die Ankunft in Auschwitz-Birkenau war für viele ein Schock: sie wurden „selektiert“ und
                    dabei von Verwandten sowie Freunden und Freundinnen getrennt, und der entmenschlichenden Behandlung
                    der SS unterworfen, die unter anderem im entwürdigenden Entkleiden vor den Wachen, dem Scheren der
                    Haare und in der alltäglichen Gewalt ihren Ausdruck fand.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Jüdinnen und Juden</h4>
                    <p>
                        Die aus Ungarn deportierten Juden und Jüdinnen gehörten verschiedenen Gemeinden und
                        religiösen Strömungen im Judentum an. Nicht alle definierten sich zwangsläufig selbst als jüdisch. Für
                        ihre Verfolgung durch die Nationalsozialisten war weder ihre Religion noch eine
                        kulturelle Zugehörigkeit zum Judentum oder die Selbstzuschreibung
                        entscheidend. Das Zentrum der nationalsozialistischen Weltanschauung bildete
                        ein rassistischer Antisemitismus, der Jüdinnen und Juden nach ihrer Abstammung
                        definierte. Auch Christen und Christinnen sowie Atheisten und Atheistinnen
                        wurden unabhängig von ihrer Selbstdefinition oder kulturellen Zugehörigkeit
                        durch die Nationalsozialisten als Juden verfolgt, wenn sie deren
                        Abstammungskriterien entsprachen. Nicht alle hier als Jüdinnen und Juden
                        bezeichneten Personen identifizierten sich selbst als jüdisch, sie alle wurden
                        jedoch als jüdisch verfolgt. </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\">Unterschiedliche Verfolgungserfahrungen - Häftlingsgruppen am Dessauer Ufer</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Frauen der drei Gruppen am Dessauer Ufer unterschieden sich deutlich in ihrer
                    Verfolgungserfahrung. Damit einher gingen auch gegenseitige Wahrnehmungen vermeintlicher und
                    tatsächlicher Privilegiertheit, die laut den Berichten der Überlebenden teilweise zwischen den
                    Frauen der unterschiedlichen Gruppen bestanden. So berichtete die Überlebende Paula Hermann, dass
                    die tschechischen Frauen denen nicht die Haare abrasiert worden waren, von den Frauen aus Ungarn als
                    „die Haarigen“ bezeichnet wurden.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                    Hinzu kamen Sprachbarrieren: Die Frauen aus Theresienstadt
                    sprachen in der Regel Tschechisch und teilweise Deutsch, die Frauen aus Łódź Polnisch, Deutsch oder
                    Jiddisch und die aus Ungarn deportierten Frauen vor allem Ungarisch, aber auch Rumänisch, Jiddisch,
                    Deutsch oder im Fall der Frauen aus dem zuvor zu Tschechoslowakei gehörenden Transkarpartien
                    ebenfalls Tschechisch. Diese Barrieren existierten insbesondere im Hinblick auf die von Ungarn
                    annektierten Gebiete auch innerhalb der aus Ungarn deportierten Frauen. Auch hinsichtlich ihres
                    sozialen Hintergrundes und ihrer Religiosität unterschieden sich die Frauen. Viele überlebende
                    Frauen berichteten, dass sie sich mit Frauen die aus der gleichen Herkunftsregion kamen
                    zusammenschlossen und versuchten, beieinander zu bleiben und sich gegenseitig zu
                    unterstützen.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    Einigen Frauen war es auch gelungen mit Verwandten zusammenzubleiben. So überlebten die beiden
                    Schwestern Hédi Fried, geborene Szmuk und ihre Schwester Livia Fraenkel, ebenfalls geborene Szmuk
                    die Haftzeit gemeinsam.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                    Die lebensrettende gegenseitige Unterstützung in solchen Lagerfamilien
                    findet sich in vielen Berichten weiblicher Überlebender und wurde unter anderem dadurch möglich,
                    dass die Frauen als Gruppe weiter deportiert wurden und damit bei einander bleiben konnten.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zum historischen Kontext</h4>
                    <p>
                        <a href=\"{{ path('app_context') }}\" title=\"Historischer Kontext\">
                            &#10149; Mehr zu Ungarn während des Zweiten Weltkrieges
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit im Hamburger Hafen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Bereits am ersten Tag nach ihrer Ankunft begann die Zwangsarbeit der Frauen im Hamburger Hafen. Die
                    Häftlinge wurden in verschiedene Arbeitskommandos eingeteilt und mit der Fähre oder zu Fuß zu ihren
                    Arbeitsorten gebracht. Eingesetzt wurden die Häftlinge insbesondere in der stark bombardierten
                    Mineralölindustrie, in der sie Trümmer räumen mussten. Diese Arbeit war nicht nur körperlich stark
                    fordernd, sondern die Häftlinge kamen auch mit giftigen Stoffen in Kontakt, vor denen sie nicht
                    geschützt wurden und die die Atemwege reizten. Die KZ-Häftlinge arbeiteten in den Industriebetrieben
                    zwischen Zwangsarbeitern aus der Sowjetunion, Kriegsgefangenen und italienischen Militärinternierten
                    aber auch gewöhnlichen deutschen zivilen Arbeitskräften.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    Auch die Wege zu ihren Arbeitsorten
                    überschnitten sich für diese unterschiedlichen Personengruppen, so transportierten die Fähren, die
                    die Frauen vom Dessauer Ufer zur ihren Arbeitsorten brachten, auch italienische Militärinternierten
                    und deutsche Zivilisten. Trotz des Versuches, die Gruppen voneinander zu separieren, etwa durch die
                    Unterbringung in getrennten Bereichen der Fähre, kamen die unterschiedlichen Gruppen immer wieder in
                    Kontakt. Einige der überlebenden Frauen berichteten von einzelnen deutschen Zivilisten, die sie
                    durch versteckte Lebensmittel unterstützen.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup>
                    In der Regel wurden die Häftlinge und ihr Leiden von den
                    deutschen Zivilisten jedoch ignoriert. Unterstützung erhielten die Frauen vor allem von anderen
                    Zwangsarbeitern, zu denen sie Kontakt aufnehmen konnten. Zwar hungerten auch diese, ihre Verpflegung
                    war aber dennoch umfangreicher als die der KZ-Gefangenen. Insbesondere von den italienischen
                    Militärinternierten, später auch von französischen Kriegsgefangenen erhielten die hungernden
                    Häftlinge heimlich Lebensmittel und Informationen über den Kriegsverlauf, die mit der Hoffnung auf
                    baldige Befreiung verknüpft waren.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                </p>
                <p>
                    Die regelmäßigen Bombardierungen Hamburgs waren für die Häftlinge ebenfalls ein deutlich sichtbares
                    Zeichen für die alliierten Kriegsanstrengungen. Die Häftlinge waren eigentlich durch die
                    Bombardierungen besonders gefährdet, da sie kaum geschützt wurden und anders als deutsche
                    Zivilpersonen in der Regel nicht in Bunkern Zuflucht finden konnten. Die Überlebende Ilona Blair
                    beschrieb wie viele Überlebende, dass die Bombardierungen von den Häftlingen dennoch freudig
                    wahrgenommen wurden, da sie oftmals eine Arbeitspause boten und ihnen zudem Hoffnung auf eine
                    Befreiung vermittelten, da sie die alliierten Kriegsfortschritte gegen das Deutsche Reich
                    belegten.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup>
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
            </div>
        </div>

        <h3 class=\"mt-4\">Wieso kamen die Häftlinge nach Hamburg?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem durch die britische Bombardierung im Rahmen der „Operation Gomorrha“ im Sommer 1943 große
                    Teile der Stadt zerstört worden waren, begannen auch in Hamburg umfangreiche Diskussionen um den
                    Einsatz von KZ-Gefangenen. Bereits in einer ersten Wiederaufbauperiode ab Spätsommer 1943 war auf
                    die Zwangsarbeit von KZ-Gefangenen in SS-Baubrigaden zurückgegriffen worden. Nachdem durch weitere
                    Bombenangriffe der Wiederaufbau und der forcierte Ausbau der Hamburger Rüstungsindustrie Mitte 1944
                    gefährdet war, wurde umfangreich auf die Arbeitskraft der Häftlinge zurückgegriffen. Innerhalb
                    kürzester Zeit beantragten verschiedene Hamburger Stellen die Zuteilung von insgesamt 15.500
                    Häftlingen. Diese Forderungen konnten von der SS etwas mehr als zur Hälfte erfüllt werden. Dabei
                    wurde im besonders hohen Maße auf die erst kurz zuvor deportierten ungarischen Jüdinnen und Juden
                    zurückgegriffen, die zu dieser Zeit noch in einem sehr viel besseren gesundheitlichen Zustand waren
                    als viele der schon länger inhaftierten KZ-Gefangenen. Die zu etwa einem Drittel aus Ungarn
                    stammenden Frauen am Außenlager Dessauer Ufer waren höchstwahrscheinlich ursprünglich für den
                    Behelfswohnbau vorgesehen gewesen. Die Versorgung der deutschen Zivilbevölkerung auch mit Wohnraum
                    sollte nicht zuletzt einer Demoralisierung entgegenwirken und die Unterstützung des
                    nationalsozialistischen Regimes und seiner Kriegsanstrengungen sichern. Gewährleistet werden sollte
                    diese Versorgung durch die Ausbeutung der KZ-Gefangenen. Im Mai 1944 verkündete der zuständige
                    Reichswohnungskommissar Robert Ley, dass ihm von der SS 20.000 ungarische Jüdinnen und Juden
                    zugewiesen worden seien, die er wiederum den entsprechenden Städten als Arbeitskräfte anbot. Es ist
                    davon auszugehen, dass auch Hamburg in diesem Zuge die Zuteilung von Häftlingen beantragte. Bevor
                    der erste Transport im Juli 1944 in Hamburg ankam, war jedoch auch die kriegswichtige
                    Mineralölindustrie des Hamburger Hafens Mitte Juni 1944 schwer bombardiert worden. Die Alliierten
                    hatten die Versorgung mit Treibstoff als eine entscheidende Schwachstelle der deutschen
                    Kriegsführung erkannt und 1944 begonnen, entsprechende Industrieanlagen systematisch zu
                    bombardieren. Die Nationalsozialisten reagierten mit einem Sofortprogramm zur Sicherung der
                    Treibstoffversorgung, das nach seinem Leiter Edmund Geilenberg auch als Geilenberg-Programm
                    bezeichnet wurde und ebenfalls auf die Zwangsarbeit der KZ-Häftlinge zurückgriff. Da der
                    Wiederherstellung des Betriebes auf den Hamburger Ölraffinerien eine höhere Bedeutung als dem
                    Behelfswohnungsbau zugemessen wurden, wurden die Frauen des Außenlagers Dessauer Ufer zunächst hier
                    eingesetzt, bevor sie ab September 1944 vorrangig zum Wohnungsbau und zur Trümmerräumung gezwungen
                    wurden.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Behelfswohnheimsbau für die Hamburger Zivilbevölkerung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im September 1944 wurde das Frauenaußenlager am Dessauer Ufer aufgelöst und. Kurz darauf wurde am
                    selben Standort ein Männeraußenlager des KZ Neuengamme eingerichtet. Die Frauen wurden in drei
                    Gruppen von circa jeweils 500 Personen aufgeteilt und in neue Frauenaußenlager im Hamburger
                    Stadtgebiet und Umland verteilt. Sie blieben dabei größtenteils gemäß ihrer Herkunft in Gruppen
                    zusammen. Die aus Ungarn deportierten Frauen wurden zunächst mehrheitlich in das Außenlager Wedel
                    verlegt. Auch von dort wurden sie vor allem zur Trümmerräumung in Hamburg eingesetzt und gelangten
                    zu Fuß und mit der Fähre zu ihren Arbeitsorten. Nach zwei Wochen wurden sie in das Außenlager
                    Eidelstedt im Norden Hamburgs gebracht. Hier mussten sie neben Räumungsarbeiten auch Bauarbeiten
                    verrichten und in der Nähe des Lagers Häuser für die ausgebombte Hamburger Bevölkerung errichten.
                    Insbesondere in den letzten Monaten vor Kriegsende mussten die Häftlinge auch wieder Schnee und
                    Trümmer im Hamburger Stadtgebiet räumen.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                </p>
                <a href=\"{{ asset('images/studies/') }}\"
                   data-lightbox=\"map-dessauer-ufer\"
                   data-title=\" Die Deportationsroute der ungarischen Häftlinge vom Außenlager Dessauer Ufer in weitere Außenlager
                    des KZ Neuengamme.\">
                    <img class=\"gallery img-fluid\"
                         src=\"{{ asset('images/studies/') }}\"
                         alt=\"Karte der Deportationsroute aus Budapest, Auschwitz über mehrere Lager in verschiedene Außenlager des KZ Neuengamme im Hamburger Stadtgebiet\"/>
                </a>
                <p class=\"caption\">
                    Die Deportationsroute der ungarischen Häftlinge vom Außenlager Dessauer Ufer in weitere Außenlager
                    des KZ Neuengamme. &copy; Institut für die Geschichte der deutschen Juden.
                    Lizenz: CC BY 4.0 &#128269; Zum Vergrößern klicken.
                </p>
                <p>
                    Gelegentlich fanden die Häftlinge Lebensmittel in den Ruinen, die für die stark unterernährten
                    Frauen lebensnotwendig waren. Neben dem Hunger berichteten die Überlebenden vor allem auch von der
                    Kälte, vor denen ihre dünne Häftlingskleidung sie nur wenig schützte. Wie in anderen Außenlagern
                    versuchten die Häftlinge sich durch leere Zementsäcke unter der Kleidung Schutz vor der Kälte zu
                    verschaffen, obwohl dies verboten war und hart bestraft wurde. Die unterernährten und
                    unterversorgten Häftlinge waren zu diesem Zeitpunkt sichtbarer Bestandteil des Hamburger
                    Stadtalltags. Ihre Arbeitsorte lagen inmitten bewohnter Stadtviertel, die sie durch Fußmärsche oder
                    Transporte mit der Straßenbahn erreichten. Die Überlebende Hédi Fried fragte sich rückblickend: „Was
                    dachten sie, als sie uns sahen: bis zum Skelett abgemagerte Frauen, in dünner Kleidung, tief
                    gebeugt, Schnee schaufelnd? Oder sahen sie uns nicht? Man sieht nicht, was man nicht sehen will.
                    Wenige Leute hielten an und beobachteten uns, aber niemand kam näher oder stellte Fragen. Später
                    würden sie sagen, sie hätten nichts gewusst. Und noch später, dass alles eine Lüge
                    war.“<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/dessauer-ufer/Geschwister_szmuk.jpg') }}\"
                     alt=\" Hédi Fried und ihre Schwester Livia Fraenkel nebeneinander stehend\"/></a>
                <p class=\"caption\">
                    Hédi Fried und ihre Schwester Livia Fraenkel ein Jahr nach ihrer Befreiung in Schweden.
                    Privatbesitz: Hédi Fried. </p>
                <p>
                    Am 1. März 1945 war ein Teil der Häftlinge zur Trümmerräumung in der Hamburger Innenstadt
                    eingesetzt. Bei ihrem Rücktransport mit der Straßenbahn, wurde diese am Steindamm in der Nähe des
                    Hamburger Hauptbahnhofs durch ein zusammenstürzendes Haus getroffen und unter diesem begraben.
                    Mindestens 20 Häftlinge kamen dabei nachweislich zu Tode; Überlebende berichteten, dass die Hälfte
                    der Insassen der beiden vorderen Wagons das Unglück nicht
                    überlebte.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup> Die Überlebende Ilona Blair
                    berichtete, dass zu Beginn noch zufällig anwesende Passanten den Häftlingen bei der Bergung der
                    vielen verletzten Frauen geholfen hätten, dies aber durch die wachhabenden SS-Männer verboten worden
                    sei.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    Die teilweise schwer verletzten Häftlinge wurden durch ihre Mitgefangenen in das kleine
                    Krankenrevier des Außenlagers Eidelstedt transportiert. Medikamente und medizinische Versorgung war
                    für die Häftlinge nicht vorhanden, stattdessen berichtete Blair wie der für die Betreuung der
                    Kranken zugeteilten KZ-Gefangenen Giftspritzen ausgehändigt wurden, um die verletzen Frauen, die
                    nicht von alleine wieder arbeitsfähig sein würden, zu ermorden. Nachdem diese sich geweigert hätte,
                    wäre sie von ihrer Funktion entfernt und mutmaßlich ermordet
                    worden.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup> Die Ermordung von kranken
                    Häftlingen gehörte auch in anderen Außenstätten des Konzentrationslagers Neuengammes zur Praxis der
                    SS. Wie viele verletzte Häftlinge an fehlender medizinischer Betreuung oder durch direkte Ermordung
                    verstarben, ist nicht bekannt.
                </p>

                    <img class=\"img-fluid\"
                         src=\"{{ asset('images/studies/dessauer-ufer/Zeitungsausschnitt.jpg') }}\"
                         alt=\"Ausschnitt aus dem Hamburger Anzeiger, in dem kurz über den Straßenbahnunfall berichtet wird\"/>
                <p class=\"caption\">
                    BU: Zeitungsbericht zu dem Straßenbahnunfall: „Folgenschweres Unglück“, in: Hamburger Anzeiger,
                    2.3.1945, S. 2, Staats- und Universitätsbibliothek Hamburg Carl von Ossietzky, Germany - Public
                    Domain, Europeana, online unter:
                    <a href=\"https://www.europeana.eu/item/9200338/BibliographicResource_3000117673612\"
                       title=\"Zeitunsg auf der Website der Europeana\">https://www.europeana.eu/item/9200338/BibliographicResource_3000117673612</a>.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Wedel (Frauen)</h4>
                    <p>
                        Seit September 1944 wurden in dem Außenlager Wedel des KZ Neuengamme 500 ungarische und
                        tschechische Jüdinnen inhaftiert, die zuvor am Dessauer Ufer gewesen waren und Zwangsarbeit bei
                        Räumungsarbeiten im Stadtgebiet leisten mussten. Nach zwei Wochen wurde das Lager geräumt und
                        die Frauen in das Außenlager Eidelstedt gebracht.
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Hamburg-Eidelstedt</h4>
                    <p>
                        Das Außenlager des KZ Neuengamme war im September 1944 eingerichtet worden. Die etwa 500
                        Häftlinge waren zuvor im Außenlager Wedel inhaftiert und mussten insbesondere Zwangsarbeit beim
                        Bau von Behelfswohnheimen leisten. Anfang April 1945 wurden die Häftlinge nach Bergen-Belsen
                        deportiert. </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Räumung der Hamburger Lager ins Konzentrationslager Bergen-Belsen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Als sich Anfang April 1944 das Kriegsende immer deutlicher abzeichnete, begannen die
                    Nationalsozialisten, in Hamburg ihre Spuren zu verwischen und die Lager im Stadtgebiet zu räumen.
                    Die Frauen im Außenlager Eidelstedt wurden erneut in einen Güterzug verfrachtet, der nach drei Tagen
                    im Konzentrationslager Bergen-Belsen ankam. Die Häftlinge hatten während der Fahrt keine Verpflegung
                    erhalten. Als sie Bergen-Belsen erreichten, war das Konzentrationslager bereits überfüllt.
                    Bergen-Belsen wurde zu einem Sterbelager.
                </p>
                <p>
                    Die Zeit in Bergen-Belsen wurde von vielen der überlebenden Frauen als eine der schlimmsten
                    beschrieben. Die ausgehändigten Lebensmittel waren zum Überleben zu wenig und auch Trinkwasser war
                    kaum vorhanden, so dass ein Teil der Häftlinge aus Pfützen
                    trank.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup> Als die britischen Streitkräfte
                    das Lager am 15. April1945 befreiten, fanden sie zehntausende Häftlinge vor, die teilweise kurz vor
                    dem Hungertod standen und inmitten unbestatteter Leichen lebten. Die Überlebende Hédi Fried
                    berichtete, dass sie zum Zeitpunkt ihrer Befreiung so geschwächt war, dass sie kaum noch aufstehen
                    konnte.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup>
                    Viele Häftlinge kamen auch nach der Befreiung noch an den Haftfolgen zu Tode. Es lässt sich
                    nicht feststellen, wie viele der Häftlinge aus Ungarn, die im Juli 1944 am Dessauer Ufer angekommen
                    waren, ihre Haftzeit in Hamburg und in Bergen-Belsen überlebten. Es ist davon auszugehen, dass viele
                    die Bedingungen unter denen die SS sie zum Leben und Arbeiten zwang, nicht überlebten. Die
                    Überlebende Ilona Blair geht davon aus, dass nur die Hälfte ihre Gruppe
                    überlebte.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp eingerichtet.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Bemühungen der Hamburger Wirtschaft und Verwaltung um den Einsatz von KZ-Häftlingen sind gut
                    dokumentiert, auch wenn sich die genauen Vorgänge die zu den jeweiligen Einsätzen der beschriebenen
                    Häftlingsgruppe führten, nicht belegen lassen.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup>
                    Die Außenlager am Dessauer Ufer, in Wedel und
                    Eidelstedt wurden zentral im KZ-Stammlager Neuengamme verwaltet, dessen Unterlagen die SS fast alle
                    vor der Befreiung vernichtete. Die Arbeitseinsätze, Bewachung und Lebensumstände der Häftlinge
                    lassen sich deshalb vor allem aus den Berichten der bekannten Überlebenden rekonstruieren, von denen
                    viele im Rahmen eines Forschungsprojektes zu Frauenaußenlagern des KZ Neuengamme in den
                    1990er-Jahren geführt wurden.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup>
                    Die Überlebende Hédi Fried veröffentliche ihre Erinnerung 1992 zudem
                    in Buchform.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/dessauer-ufer/Dessauer-Ufer-Ueberlebende.jpg') }}\"
                     alt=\"Überlebende am Dessauer Ufer: sechs ältere überlebende Frauen stehen nebeneinander\"/>
                <p class=\"caption\">
                    Tschechische Überlebenden am Dessauer Ufer in den 1980er-Jahren: Archiv KZ-Gedenkstätte Neuengamme,
                    F 2015-273.
                </p>
                <p>
                    Erhalten geblieben sind darüber hinaus zum einen einzelne Unterlagen in Bezug auf die Toten des
                    Straßenbahnunfalls, von denen mehre Namen bekannt sind. Überlebende berichteten teilweise von
                    weiteren Toten während der Haftzeit, zu denen sich aber keine Unterlagen finden lassen und deren
                    Namen deshalb unbekannt bleiben.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
                    Zum anderen sind viele der sogenannten WVHA-Häftlingskarteikarten
                    oder Hollerith-Vorkarten erhalten geblieben. Ab Mitte 1944 hatte die SS begonnen, in den meisten
                    Konzentrationslagern Häftlingskommandos aufzustellen, die die Informationen der lagereigenen
                    Häftlingsunterlagen auf standardisierte Häftlingskarteikarten übertrugen, die an ein zentrales
                    Institut des Wirtschaftsverwaltungshauptamtes (WVHA) der SS in Berlin gesandt wurden. In diesem
                    „Maschinellen Zentralinstitut für optimale Menschenerfassung und Auswertung“ sollten die
                    Informationen auf Lochkarten übertragen werden, um die Häftlingsinformationen zentral zu erfassen
                    und mittels einer sogenannten „Hollerithmaschine“ verarbeiten zu können. Während die lagereigenen
                    Häftlingsunterlagen des KZ Neuengamme und auch die Lochkarten selbst nicht erhalten geblieben sind,
                    sind die standardisierten Karteikarten größtenteils noch vorhanden. Auf ihnen finden sich jedoch
                    lediglich für die SS verwertbare und maschinell lesbare Informationen, das heißt die Häftlingsnummer
                    der Häftlinge, ihre Nationalität, ihr Geschlecht, ihre Geburtsdaten, Berufe sowie Deportationsdaten,
                    allerdings keine Namen.<sup><a href=\"#endnote29\" id=\"footnote29\">29</a></sup>
                    Diese Quellen stehen damit beispielhaft für die entmenschlichende
                    bürokratische Sichtweise der Nationalsozialisten, die Menschen zu bloßen Zahlen degradierten.
                    Insbesondere die Namen der ermordeten Häftlinge, die die KZ-Haft nicht überlebten, aber auch der
                    Überlebenden, die aus unterschiedlichsten Gründen keine dokumentierten Interviews über ihre Haftzeit
                    gaben, sind damit nicht ermittelbar.
                </p>
                <a href=\"{{ asset('images/studies/dessauer-ufer/Haeftlingskarte.jpg') }}\"
                   data-lightbox=\"dessauer-ufer-haeftlingskarte\"
                   data-title=\"Sogenannte Hollerith-Vorkarte eines Häftlings im Außenlager Dessauer Ufer, Bundesarchiv, BArch, NS
                    3/1577.\">
                <img class=\"gallery img-fluid\" src=\"{{ asset('images/studies/dessauer-ufer/Haeftlingskarte_preview.jpg') }}\"
                     alt=\"Hollerith-Vorkarte eines Häftlings mit Angaben zu Häftlingsart – in diesem Fall: Jude – Geburtsdatum, Einlieferungsdaten, Beruf und weiteren Angaben\"/>
                </a>
                    <p class=\"caption\">
                    Sogenannte Hollerith-Vorkarte eines Häftlings im Außenlager Dessauer Ufer, Bundesarchiv, BArch, NS
                    3/1577. &#128269; Zum Vergrößern klicken.
                </p>
                <p>
                    Die wenigen Berichte der interviewten Überlebenden geben Einblicke in die Arbeitsorte und die
                    Perspektive der Häftlinge. Sie bilden damit nicht nur wichtige Quellen zur Geschichte der
                    Außenlager, sondern ermöglichen auch einen Perspektivwechsel von den Quellen der
                    nationalsozialistischen Bürokratie, in der die Häftlinge nur als passives Menschenmaterial
                    erscheinen zu den betroffenen Personen und ihrer Wahrnehmung aber auch ihrem Umgang mit der
                    Gewaltsituation, der sie ausgesetzt worden waren. Die in der Regel Jahrzehnte nach der Befreiung
                    aufgenommenen Interviews sind durch individuelle wie gesellschaftliche Verarbeitungs- und
                    Verdrängungsprozesse und die konkrete Gesprächssituation geformt. Die Überlebenden berichteten über
                    die jeweiligen Lager zudem im Kontext ihrer gesamten Verfolgungsgeschichte. Einige der Überlebenden
                    beschrieben die Haftzeit am Dessauer Ufer als „Luxury“, als „Luxus“ oder als Aufstieg von der „Hölle
                    in den Himmel“, was nur vor dem Hintergrund des gesamten Gespräches und der dabei geteilten
                    Erfahrungen in Auschwitz und Bergen-Belsen Sinn ergibt.<sup><a href=\"#endnote30\" id=\"footnote30\">30</a></sup>
                    Eine davon losgelöste Aussage über die
                    eigene Wahrnehmung der lebensbedrohlichen und entmenschlichenden Lebensbedingungen am Dessauer Ufer
                    ist damit nicht gemacht.
                </p>
                <p>
                    Das Wissen über die Häftlinge, ihre Haftbedingungen und individuelle Wahrnehmung bleibt damit
                    zwangsläufig bruchstückhaft. Bereits die Namen der allermeisten Häftlinge sind unbekannt und lassen
                    sich nicht ermitteln. Insbesondere die Ermordeten bleiben oftmals namenslos.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <ul class=\"bibliography\">
                    <li>
                        Randolp L. Braham (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1,
                        Evanston 2013.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Lucy Debus, „Hamburg das war die Wende“. Das KZ-Außenlager Dessauer Ufer in den Erinnerungen
                        weiblicher Überlebender, unveröffentlichte Masterarbeit, Bremen 2021.
                    </li>
                    <li>
                        Hans Ellger, Hamburg-Dessauer Ufer (Frauen), in: Wolfgang Benz / Barbara Diestel (Hrsg), Der Ort
                        des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Band 5: Hinzert.
                        Auschwitz. Neuengamme, München 2007, S. 394-396.
                    </li>
                    <li>
                        Hans Ellger, Zwangsarbeit und weibliche Überlebensstrategien. Die Geschichte der
                        Frauenaußenlager des Konzentrationslagers Neuengamme 1944/1945, Berlin 2007.
                    </li>
                    <li>
                        Hédi Fried, Fragmente meines Lebens. Ein Leben bis Auschwitz und ein Leben danach, Lizenzausgabe
                        Hamburg 2023, britische Originalausgabe 1990
                    </li>
                    <li>
                        Susanne Heim et al. (Hrsg.), Die Verfolgung und Ermordung der europäischen Juden durch das
                        nationalsozialistische Deutschland 1933.1945, Band 15. Ungarn 1944-1945. Bearbeitet von Regina
                        Fritz, Berlin / Boston 2021.
                    </li>
                    <li>
                        Lisa Hellriegel, Weibliche Überlebensstrategien? Eine Sekundäranalyse der Oral
                        History-Interviews von Hans Ellger mit den Überlebenden der Hamburger Frauen-Außenlager des KZ
                        Neuengamme, unveröffentlichte Masterarbeit, Hamburg 2021.
                    </li>
                    <li>
                        Christian Römmer, Digitalisierung der WVHA-Häftlingskartei, in: Gedenkstätten-Rundbrief 150
                        (2009), S. 20-25.
                    </li>
                    <li>
                        Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart/München 2001.
                    </li>
                    <li>
                        Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager 1940-1945.
                        Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung,
                        Celle 2009.
                    </li>
                    <li>
                        Studentische Forschungsgruppe Dessauer Ufer / Stiftung Hamburger Gedenkstätten und Lernorte zur
                        Erinnerung an die Opfer der NS-Verbrechen (Hrsg.), Das Lagerhaus G am Dessauer Ufer. Ein
                        ehemaliges Außenlager des KZ Neuengamme auf dem Kleinen Grasbrook, Hamburg 2022.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, S. 87.
                        Aus der Perspektive einer Überlebenden vgl. Hédi Fried, Fragmente meines Lebens. Ein Leben bis
                        Auschwitz und ein Leben danach, Lizenzausgabe Hamburg 2023, britische Originalausgabe 1990, S.
                        112-116.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. z.B. Fried, Fragmente, S. 119, oder auch die tschechische Überlebende Dita Kraus: Dita
                        Kraus, Ein aufgeschobenes Leben - Kindheit im Konzentrationslager – Neuanfang in Israel,
                        Göttingen 2020, S. 159f.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Interview mit Esther Rosenbaum am 28.6.1998 in Hamburg, Interviewer Hans Ellger,
                        Gesamtlänge 00:50:07, ANG: M 2019-0030; Interview mit Paula Herrmann am 05.03.2000 in Haifa,
                        Interviewer Hans Ellger, Gesamtlänge 01:48:29, ANG: M 2013-0050, M 2013-0051. Über die
                        Perspektive der tschechischen Frauen gibt es auch einen Film: Jurgen Kinter, „Hamburg, das war
                        die Wende“. Stationen einer gemeinsamen Geschichte. Prag, Theresienstadt, Auschwitz, Hamburg,
                        Bergen-Belsen, Prag. Margit Hermannova, Edith Kraus und Dagmar Lieblova erinnern sich
                        (1999/2002).
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Fried, Fragmente, S. 116.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Vgl. Fried, Fragmente, S. 118.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Vgl. Hans Ellger, Hamburg-Dessauer Ufer (Frauen), in: Wolfgang Benz / Barbara Diestel (Hrsg.),
                        Der Ort des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Band 5:
                        Hinzert. Auschwitz. Neuengamme, München 2007, S. 394-396; Ders., Zwangsarbeit und weibliche
                        Überlebensstrategien. Die Geschichte der Frauenaußenlager des Konzentrationslagers Neuengamme
                        1944/1945, Berlin 2007, S. 76-79.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Zur Geschichte der Deportationen aus Ungarn vgl. Susanne Heim et al. (Hrsg.), Die Verfolgung und
                        Ermordung der europäischen Juden durch das nationalsozialistische Deutschland 1933.1945, Band
                        15. Ungarn 1944-1945. Bearbeitet von Regina Fritz, Berlin / Boston 2021; Randolp L. Braham
                        (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1, Evanston 2013. Zur
                        Perspektive der Überlebenden u.a. Fried, Fragmente, S. 83-113.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Interview mit Paula Herrmann, 2000; Auch Hédi Fried berichtete, dass die ungarischen Häftlinge
                        die tschechischen um ihre Haare beneidet hätten, aber auch, dass „ihre Leidensgeschichte […]
                        viel länger“ gewesen sei: Fried, Fragmente, S. 120.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Vgl.: Lisa Hellriegel, Weibliche Überlebensstrategien? Eine Sekundäranalyse der Oral
                        History-Interviews von Hans Ellger mit den Überlebenden der Hamburger Frauen-Außenlager des KZ
                        Neuengamme, unveröffentlichte Masterarbeit, Hamburg 2021, insbesondere S. 26-31; Lucy Debus,
                        „Hamburg das war die Wende“. Das KZ-Außenlager Dessauer Ufer in den Erinnerungen weiblicher
                        Überlebender, unveröffentlichte Masterarbeit, Bremen 2021.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Vgl. Fried, Fragmente.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Vgl. Ellger, Überlebensstrategien, S. 155, 159-162, 302-308, Interview mit Paula Hermann, 2000;
                        Fried, Fragmente; Interview mit Ilona Blair am 10.11.1980, Interviewer Sophie Caplan, United
                        States Holocaust Memorial Museum Collection, acquired from Sophie Caplan RG-50.617.0006, United
                        States Holocaust Memorial Museum, Washington, DC, online unter:
                        https://collections.ushmm.org/search/catalog/irn50932 (letzter Zugriff 11.07.2024).
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        So z.B. Paula Hermann: Interview mit Paula Hermann, 2000.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Vgl. z.B. Interview mit Ilona Blair, 1980.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Vgl. Interview mit Ilona Blair, 1980; Interview mit Paula Hermann, 2000.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 85-91; Eller, Überlebensstrategien, S. 159-163.
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Vgl. u.a. Fried, Fragmente, S. 121-154, Ellger, Überlebensstrategien, S. 162-163; Buggeln,
                        Arbeit und Gewalt, S. 275.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Fried, Fragmente, S. 150.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Vgl. Fried, Fragmente, S. 140-142, Interview Ilona Blair 1980.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Vgl. Interview Ilona Blair 1980.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Vgl. Interview Ilona Blair 1980.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Vgl. Fried, Fragmente, S. 163.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Vgl. Fried, Fragmente, S. 166f.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Vgl. Interview Ilona Blair, 1980.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Buggeln, Arbeit und Gewalt, S. 85-91.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Ellger, Überlebensstrategien.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Fried, Fragmente.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Vgl. Interview Ilona Blair, 1980.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Christian Römmer: Digitalisierung der WVHA-Häftlingskartei, in: Gedenkstätten-Rundbrief 150
                        (2009), S. 20.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Interview Ilona Blair 1980; Fried, Fragmente, S. 116.
                        <a href=\"#footnote30\">&uarr;</a>
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
                    Louis Wörner: Zwangsarbeit in Hamburg, in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_deportation_salzwedel') }}. Lizenz: CC BY
                    4.0.
                </p>
            </div>
        </div>

    </div>

{% endblock %}", "studies/dessauer-ufer.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/studies/dessauer-ufer.html.twig");
    }
}