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

/* studies/gruppe-der-300.html.twig */
class __TwigTemplate_5251103c7fc65e7b3c5d6e9d96fb446a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/gruppe-der-300.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/gruppe-der-300.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "studies/gruppe-der-300.html.twig", 1);
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

        yield " Fallstudie 300er Gruppe | ";
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
        yield from         $this->loadTemplate("elements/navigation-deportationen.html.twig", "studies/gruppe-der-300.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container g-4 py-5 study\">
        <h2>Facharbeiter für Volkswagen</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Circa 13,5 Millionen Menschen wurden während des Zweiten Weltkrieges zu Zwangsarbeit im Deutschen
                    Reich herangezogen. Die Aufrechterhaltung der Kriegswirtschaft war nur durch die
                    zwangsverpflichteten Arbeiterinnen und Arbeiter, Kriegsgefangenen und Konzentrationslager-Häftlinge
                    möglich. Diese wurden in allen wirtschaftlichen Bereichen eingesetzt und gehörten mit
                    fortschreitendem Verlauf des Krieges zum sichtbaren Alltag im nationalsozialistischen
                    Deutschland.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    KZ-Häftlinge wurden dabei unter anderem in der Rüstungsindustrie eingesetzt, mit deren Verlagerung
                    unter Tage die Nationalsozialisten 1943 angesichts der alliierten Luftüberlegenheit begannen. Durch
                    die Produktion moderner Abfangjäger und Raketen in bombensicheren Stollen sollte die sich immer
                    klarer abzeichnende Kriegsniederlage abgewendet werden. Der Großteil der gigantomanischen Projekte
                    wurde nie fertiggestellt, die meisten der Produktionsanlagen nie in Betrieb genommen. Die Lebens-
                    und Arbeitsbedingen für die KZ-Häftlinge waren besonders hart und forderten tausende Todesopfer.
                    Insbesondere der Tod jüdischer Häftlinge war im Rahmen einer „Vernichtung durch Arbeit“
                    einkalkuliert. Die individuellen Überlebenschancen der Häftlinge hingen nicht zuletzt vom
                    zugeteilten Arbeitskommando ab, Häftlinge, die notwendige berufliche Qualifikationen aufwiesen oder
                    für ihre Arbeitskommandos länger eingearbeitet worden waren, galten als weniger ersetzbar.<sup><a
                                href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">300 Facharbeiter für Volkswagen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Auch in einem ehemaligen Erzstollen im französischen Thil sollte eine unterirdische
                    Produktionsstätte für 10.000 Arbeiter durch eine Tochterfirma von Volkswagen eingerichtet werden.
                    Hierfür reiste im Juni 1944 der VW-Ingenieur Arthur Schmiele ins Konzentrations- und
                    Vernichtungslager Auschwitz-Birkenau um Arbeitskräfte unter den zuvor aus Ungarn deportierten
                    jüdischen Häftlinge auszuwählen. Schmiele stellte eine Gruppe von 500 und eine Gruppe von 300
                    Männern zusammen, die er nach einer Abfrage der beruflichen Qualifikation als Metallfacharbeiter und
                    einer kurzen Eignungsprüfung auswählte. In beiden Gruppen befanden sich dementsprechend viele
                    Schlosser und einige Ingenieure, aber auch Menschen aus anderen Berufen, die eine entsprechende
                    Qualifikation vortäuschten. Trotz ihrer kurzen Zeit in Auschwitz-Birkenau, hatten sie vermutlich
                    erkannt, dass die Zuteilung in ein Arbeitskommando außerhalb von Auschwitz eine größere Chance zum
                    Überleben bot.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <p>
                    <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Deportationsroute-Gruppe-der-300.jpg"), "html", null, true);
        yield "\"
                       data-lightbox=\"map-gruppe-300\"
                       data-title=\"Deportationsroute der „Gruppe der 300“.\"><img class=\"gallery img-fluid\"
                                                                                 src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Deportationsroute-Gruppe-der-300_preview.jpg"), "html", null, true);
        yield "\"
                                                                                 alt=\"Karte der Deportationsroute aus Oradea und Cluj-Napoca über Auschwitz und vier weitere Lager ins Konzentrationslager Bergen-Belsen \"/></a>
                <p class=\"caption\">
                    Deportationsroute der „Gruppe der 300“. &copy; Institut für die Geschichte der deutschen Juden. Lizenz: CC BY 4.0 &#128269; Zum Vergrößern klicken.
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
                    Die Häftlinge stammten vor allem aus Gebieten im Nordosten des heutigen Rumäniens. 1940 war Rumänien
                    durch das nationalsozialistische Deutschland und das faschistische Italien gezwungen worden, diese
                    Gebiete an Ungarn abzutreten. Nach der deutschen Besetzung Ungarns im März 1944 wurden von den
                    deutschen Besatzern und ungarischen Behörden innerhalb kürzester Zeit Ghettos für die jüdische
                    Bevölkerung eingerichtet, so auch am 3. Mai im damaligen Nagyvárad und in Kolozsvár, dem heutigen
                    Oradea und Cluj Napoca. Orte, aus denen viele der Deportierten dieser Gruppe stammten. Bereits Ende
                    Mai und Anfang Juni 1944 wurde die jüdische Bevölkerung der beiden Ghettos ins Konzentrations- und
                    Vernichtungslager Auschwitz-Birkenau deportiert. Dort wurden die Familien nach Geschlechtern
                    voneinander getrennt und alle Alten, Kranken oder Kinder sowie die Mütter und Schwangeren der
                    Deportierten in den Gaskammern ermordet. Lediglich die als arbeitsfähig eingestuften Häftlinge
                    überlebten die Selektion.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup> Wie Überlebende später
                    berichteten, war die aus diesen Transporten
                    ausgewählte Gruppe sehr vielfältig, einige hatten in ihren Elternhäusern Ungarisch, andere
                    Rumänisch, Deutsch, Serbisch, Jiddisch oder eine Kombination dieser Sprachen gesprochen. Teile der
                    Gruppe waren sehr religiös, für andere spielte Religion keine Rolle, einige hatten sogar christliche
                    Familien, alle wurden jedoch durch die Nationalsozialisten als Juden verfolgt. Einige waren bereits
                    über fünfzig und andere unter zwanzig, der jüngste war erst vierzehn Jahre alt. Mehreren Vätern
                    gelang es, gemeinsam mit ihren Söhnen in die Gruppe eingeteilt zu werden und auch andere Häftlinge
                    waren durch die gemeinsame Herkunftsregion bereits vorher miteinander bekannt oder verwandt.<sup><a
                                href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                </p>

            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zum historischen Hintergrund</h4>
                    <p>
                        <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Text zum historischen Kontext\">
                            &#10149; Historischer
                            Kontext
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Juden und Jüdinnen</h4>
                    <p>
                        Die aus Ungarn deportierten Juden und Jüdinnen gehörten verschiedenen
                        Gemeinden und religiösen Strömungen an und lebten ihr Judentum
                        unterschiedlich aus. Nicht alle definierten sich zwangsläufig selbst als jüdisch. Für
                        ihre Verfolgung durch die Nationalsozialisten war weder ihre Religion noch eine
                        kulturelle Zugehörigkeit zum Judentum oder die Selbstzuschreibung
                        entscheidend. Das Zentrum der nationalsozialistischen Weltanschauung bildete
                        ein rassistischer Antisemitismus, der Juden und Jüdinnen nach ihrer Abstammung
                        definierte. Auch Christen und Christinnen sowie Atheisten und Atheistinnen
                        wurden unabhängig von ihrer Selbstdefinition oder kulturellen Zugehörigkeit
                        durch die Nationalsozialisten als Juden verfolgt, wenn sie deren
                        Abstammungskriterien entsprachen. Nicht alle hier als Juden und Jüdinnen
                        bezeichneten Personen identifizierten sich selbst als jüdisch, sie alle wurden
                        jedoch als jüdisch verfolgt. </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\">Spezialisten im VW-Werk Fallersleben</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Während die 500er-Gruppe direkt nach Thil deportiert wurde, wurde die 300er-Gruppe zunächst in
                    Viehwagons ins VW-Werk nach Fallersleben deportiert, wo sie in der Montage der Fieseler 103 (V1)
                    Rakete ausgebildet wurden. Die Häftlinge mussten dabei täglich in Zwölf-Stunden-Schichten arbeiten,
                    wobei sie alle zwei Wochen einen Tag frei bekamen. Zu dieser Zeit sahen sie kein Tageslicht, da sie
                    direkt im VW-Werk in ehemaligen Waschkauen im selben Gebäude untergebracht waren, in dem auch die
                    Produktion stattfand. <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
        yield "\" title=\"Fallstudie Salzwedel\">Später
                        wurden in denselben Räumen Jüdinnen aus Ungarn als KZ-Zwangsarbeiter
                        untergebracht.</a> Die 300 KZ-Häftlinge wurden von den anderen Arbeitern und Arbeiterinnen
                    isoliert und
                    hatten lediglich Kontakt mit ihren deutschen Vorarbeitern und dem Wachpersonal aus abkommandierten
                    Luftwaffensoldaten. Als vermeintliche Facharbeiter, sollten die 300 Männer die Kernbelegschaft der
                    neuen unterirdischen Produktionsstätte bilden und das von ihnen erworbene Wissen über die
                    Herstellung der Raketen geheim gehalten werden.<sup><a
                                href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit bei VW</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    1938/1939 hatte die ein Jahr zuvor gegründete Volkswagen GmbH ihr Werk in der Nähe von Fallersleben
                    im heutigen Wolfsburg errichtet. Nach Kriegsbeginn wurden hier nicht wie ursprünglich geplant Autos
                    für die deutsche Zivilbevölkerung produziert, sondern Rüstungsaufträge übernommen. Dabei griff der
                    Volkswagen-Konzern auch auf die verschiedenen Formen nationalsozialistischer Zwangsarbeit zurück.
                    Ende 1944 stellten Zwangsarbeiter und Zwangsarbeiterinnen zwei Drittel der Belegschaft, insgesamt
                    mussten etwa 200.000 Menschen Zwangsarbeit bei Volkswagen leisten, viele von ihnen überlebten die
                    Arbeitsbedingungen nicht. Neben zivilen Zwangsarbeitern und Zwangsarbeiterinnen, sowjetischen
                    Kriegsgefangenen und italienischen Militärinternierten betrifft dies auch insgesamt circa 5.000
                    KZ-Häftlinge. Nachdem die Geschichte des VW-Konzerns im Nationalsozialismus in den 1980er und 1990er
                    Jahren öffentlich umfangreich thematisiert und wissenschaftlich untersucht wurde, befindet sich
                    heute im VW-Werk eine Erinnerungsstätte an die Zwangsarbeit auf dem Gelände.<sup><a
                                href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
                <p>
                    Im Vergleich zu anderen KZ-Häftlingen wurde die 300er-Gruppe im VW-Werk verhältnismäßig gut
                    versorgt. Auch wenn sie keine neue Kleidung erhielten, waren sie durch ihre Unterkunft vor Witterung
                    geschützt. Die Lebensmittelrationen waren zwar für die von ihnen verlangte Arbeit zu gering
                    angesetzt, dabei aber umfangreicher als in anderen Lagern. Die für viele Konzentrationslager
                    typischen Unterernährungserscheinungen, die auf Dauer häufig zum Tod der Häftlinge führten, blieben
                    in der 300er-Gruppe zunächst aus.<sup><a
                                href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                </p>
                <p>
                    Aufgrund ihrer Ausbildung und vorgesehenen Funktion hatten die SS und VW zunächst ein Interesse am
                    Überleben der Häftlinge, das sich jedoch nur auf die Dauer des Krieges und die damit einhergehende
                    Notwendigkeit unterirdischer V1-Produktion erstreckte. Überlebende bezeugten nach dem Krieg in
                    Interviews oder Erinnerungsberichten, dass nach den Erfahrungen in Auschwitz-Birkenau und den
                    folgenden Konzentrationslagern die Zeit im Volkswagenwerk rückblickend noch erträglich
                    erschien.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
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
                        Die individuellen Lebens- und Arbeitsbedingungen der Zwangsarbeiterinnen und
                        Zwangsarbeiter hingen dabei von ihrem rechtlichen Status, ihrer nationalen
                        Zugehörigkeit, ihrem Geschlecht sowie ihrem Arbeitsort ab. Die harte körperliche
                        Arbeit, die bewusst herbeigeführte Unterernährung und mangelhafte Ausstattung
                        machten ein Überleben für viele Häftlinge nicht möglich. Sie wurden mittels der
                        katastrophalen und menschenverachtenden Arbeits- und Lebensbedingungen,
                        durch die Nationalsozialisten ermordet. Für die Arbeit der KZ-Häftlinge prägte
                        Wolfgang Sofsky daher den Begriff „Terrorarbeit“, um zu betonen, dass der Zweck
                        der Arbeit nicht deren Produktivität gewesen sei, sondern die ineffektiven
                        Arbeitseinsätze vor allem der Terrorisierung der Häftlinge gedient hätten. Für die
                        Arbeit in den Neuengammer Außenlagern lehnt der Historiker Marc Buggeln
                        diesen Begriff explizit ab und argumentiert, dass die maximale Ausbeutung der
                        Arbeitskraft der Häftlinge bis zum Tod durch Erschöpfung im ökonomischen
                        Interesse der Unternehmen gewesen sei. Er plädiert stattdessen für den Begriff
                        „Sklavenarbeit“, der auch von vielen Überlebenden verwendet wird.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Deportationen und alliierter Vormarsch</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Ende Juni 1944 wurde bei einem alliierten Bombenangriff die Produktionsstätte der Gruppe zerstört.
                    Die Gruppe hatte den Angriff in einem Bunker überlebt und wurde nach einigen Tagen aus dem völlig
                    zerstörten Werk zu einer anderen Produktionsstätte im besetzten Frankreich deportiert. Auf ihrem Weg
                    in das Lager, das sich im besetzten Lothringen befand, erfuhr die Gruppe von der alliierten Landung
                    in der Normandie. Die Bestätigung dieser Nachricht war laut dem Überlebende David Hollander „the
                    happiest moment“ – der glücklichste Moment – während seiner
                    KZ-Haft.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup> In Thil trafen sie auch wieder
                    auf die Gruppe der 500 Männer, die mit ihnen zusammen in Auschwitz-Birkenau ausgewählt worden waren.
                    Auch hier wurden die 300 Männer isoliert. Überlebende berichteten, dass sie ein eigenes
                    Barackenlager inklusive eines Krematoriums errichten mussten, dass durch einen Zaun von den anderen
                    Häftlingen getrennt war.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    Die Männer waren bei den Selektionen oft von Freunden und Verwandten
                    getrennt worden, die sie nun teilweise durch den Zaun wiedersahen. Kontaktaufnahmen wurden jedoch
                    streng verfolgt. Unter anderem der Überlebende Eliesar Farkas berichtete, dass ein Häftling in der
                    anderen Gruppe seinen Bruder wiedererkannt und mit ihm am Zaun das Gespräch gesucht hätte, woraufhin
                    er erschossen worden sei.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup> Dem Überlebenden
                    Alex Rosenbaum gelang es hingegen, heimlich einige Worte
                    mit seinem Vater im anderen Lager zu wechseln.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                </p>
                <p>
                    Da die Produktionsstätte in Thil noch nicht fertiggestellt war, wurde die Gruppe trotz ihrer
                    aufwendigen Ausbildung insbesondere für Räum- und Bauarbeiten eingesetzt. Dabei kam die Gruppe auch
                    regelmäßig in ein nahegelegenes französisches Dorf. Dort gelang es Häftlingen trotz der Bewachung,
                    Kontakt mit der französischen Zivilbevölkerung und der französischen Widerstandsbewegung, der
                    Résistance, aufzunehmen. Überlebende wie zum Beispiel Pal Arie bezeugten, dass ein Häftling mithilfe
                    der französischen Résistance sogar fliehen konnte und durch die Frontlinien zur US-Army gebracht
                    wurde, der er von der V1-Produktion berichten konnte.<sup><a href=\"#endnote14\"
                                                                                 id=\"footnote14\">14</a></sup>
                    Ende August konnte die US-Army Paris befreien.
                    Lange bevor die Produktion in Thil beginnen konnte, wurde das Außenlager deshalb angesichts der sich
                    nähernden Alliierten Anfang September 1944 geräumt.
                </p>
                <p>
                    Die Gruppe wurde daraufhin zunächst in das Außenlager Rebstock des KZ Buchenwald verlegt. Auch hier
                    sollte eine unterirdische Produktionsstätte errichtet werden, die aber ebenfalls niemals in die
                    Produktion ging. Die Gruppe war zuvor wieder auf 300 aufgestockt worden, um den ermordeten sowie den
                    geflohenen Häftling zu ersetzen. Bereits Ende September wurde die Gruppe erneut deportiert, diesmal
                    in das KZ Mittelbau-Dora. Aufgrund von Luftangriffen war der Transport mehrere Tage unterwegs und
                    hielt wahrscheinlich auch einige Zeit in zivilen Bahnhöfen.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Das KZ Mittelbau-Dora</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Das KZ Mittelbau-Dora war im August 1943 ursprünglich als ein Außenlager des KZ Buchenwald im Zuge
                    der Untertageverlagerung der Rüstungsindustrie eingerichtet worden. Im Oktober 1944 wurde es zu
                    einem eigenständigen KZ erklärt. Eine nach dem Krieg gemachte Aufstellung geht davon aus, dass
                    Anfang November 1944 bereits 13.796 Häftlinge im Stammlager des Konzentrationslager Mittelbau-Dora
                    inhaftiert waren. Insgesamt waren während seines Bestehens mindesten 60.000 Häftlinge in
                    Mittelbau-Dora – Stammlager und Außenlager – inhaftiert, wobei mindestens 20.000 durch die
                    Arbeitsbedingungen und die Gewalt des Wachpersonals ermordet wurden. Heute befindet sich am Ort des
                    ehemaligen Konzentrationslagers eine Gedenkstätte.<sup><a href=\"#endnote15\"
                                                                              id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Übersicht Zwangsarbeitslager</h4>
                    <p style=\"font-size: 0.9rem;\">
                        <a href=\"";
        // line 284
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Übersicht der Lager mit aus Ungarn deportierten Zwangsarbeitern und
                            Zwangsarbeiterinnen
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Untertageproduktion im KZ Mittelbau-Dora</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Viele Häftlinge der 300er-Gruppe überlebten die Zeit in Mittelbau-Dora nicht. Anders als zuvor wurde
                    die Gruppe hier nicht mehr isoliert, vor allem aber auch nicht mehr besser versorgt. Überlebende
                    berichteten über den unaufhaltsamen Gewichtsverlust, der angesichts der bald erhofften Befreiung
                    einen Wettlauf mit der Zeit bedeutete. In einem nach dem Krieg erschienenen Bericht seiner Haftzeit
                    beschrieb der Überlebende Dezső Schön, dass er seinen Sohn Moshe wöchentlich wog, um den
                    Gewichtsverlust zu dokumentieren.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                    Viele der überlebenden Häftlinge wogen bei ihrer Befreiung nur
                    wenig über 30 Kilo.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/V1-Produktion.jpg"), "html", null, true);
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
                    Anders als andere Produktionsstätten konnte aufgrund des bereits bestehenden Tunnelsystems im KZ
                    Mittelbau-Dora die unterirdische Produktion aufgenommen werden. Auch die Häftlinge der 300er-Gruppe
                    wurden in den unterirdischen Produktionsanlagen eingesetzt. Die Erwartungen der NS-Führung an eine
                    den Kriegsverlauf zugunsten der Deutschen beeinflussende „Wunderwaffe“ konnte die Produktion jedoch
                    nicht erfüllen, die geplanten monatlichen Produktionszahlen konnten nie erreicht werden. Die vor
                    allem durch verhungernde KZ-Häftlinge produzierten Raketen konnten außerdem zu fast einem Drittel
                    nicht eingesetzt werden.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                    Von Bedeutung war hierbei nicht zuletzt der Widerstand der Häftlinge.
                    Überlebende der 300er-Gruppe berichteten, dass es zwei jungen Gruppenmitgliedern gelungen war, die
                    Raketenproduktion über längere Zeit unentdeckt zu sabotieren und die Raketen funktionsuntüchtig zu
                    machen.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>

        </div>

        <h3 class=\"mt-4\">Tödliche Räumungstransporte und die Befreiung des KZ Bergen-Belsen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Als sich im April 1945 amerikanische Truppen dem KZ näherten, trieb die SS die noch lebenden
                    Häftlinge der 300er-Gruppe zusammen mit tausenden anderen Häftlingen aus
                    Mittelbau-Dora.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup> Abgesehen
                    von denjenigen Häftlingen, die bereits zu geschwächt oder krank waren, wurden die Häftlinge der
                    Gruppe mit Güter- und Viehwagons ins Konzentrationslager Bergen-Belsen deportiert. Die schon
                    geschwächten Häftlinge wurden während des mehrtätigen Transports nicht versorgt, so dass ein
                    Großteil von ihnen die Fahrt nicht überlebte. Der Überlebende Moshe Shen bezeugte, dass in seinem
                    Wagon 100 Menschen untergebracht gewesen waren, von denen nur 20 die zehntägige Fahrt überlebt
                    hätten.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup>
                    Schätzungen gehen davon aus, dass bis zu 8.000 Häftlinge die Räumungstransporte und
                    Todesmärsche aus Mittelbau-Dora nicht überlebten.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup>
                </p>
                <p>
                    Die Versorgungssituation in dem völlig überbelegten Lager Bergen-Belsen war katastrophal, so dass
                    hier wahrscheinlich weitere Häftlinge der 300er-Gruppe durch die Haftbedingungen ermordet wurden.
                    Die etwa 15.000 Häftlinge aus Mittelbau-Dora, die noch im April 1945 in Bergen-Belsen eintrafen,
                    wurden in ehemaligen Wehrmachtskasernen, dem sogenannten Kasernenlager
                    untergebracht.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup> Dort wurden
                    die überlebenden Häftlinge des Konzentrationslagers Bergen-Belsen am 15. April 1945 von britischen
                    Truppen befreit, die das Konzentrationslager kampflos übernahmen.
                </p>
                <p>
                    Bei der Befreiung fanden die Alliierten über 53.000 verhungernde und unzählige bereits tote
                    Häftlinge vor. Viele Tausend starben auch nach der Befreiung noch an den Folgen der Haft. Allein bis
                    Juni 1945 verloren 14.000 ehemalige Häftlinge aus Bergen-Belsen ihr Leben. Die britischen Truppen
                    waren auf die katastrophalen Zustände, die sie in Bergen-Belsen vorfanden, nicht vorbereitet. Viele
                    Häftlinge starben nicht zuletzt, da ihre verhungernden Mägen, die von den britischen Soldaten zu
                    Beginn großzügig verteilten Lebensmittel nicht vertrugen. Erst nach einigen Tagen traf die
                    notwendige Schonkost ein.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup>
                    Der Überlebende Moshe Shen erinnerte sich, dass er bei der Befreiung zu
                    geschwächt war, um den Briten entgegenzugehen und die verteilten Lebensmittel entgegenzunehmen, was
                    ihm wohl das Leben rettete.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup>
                </p>
                <p>
                    Es lässt sich nicht endgültig ermitteln, wie viele aus der 300er-Gruppe diese letzten Monate ihrer
                    KZ-Haft überlebten. Es ist davon auszugehen, dass die Mehrheit von ihnen in dieser Zeit zu Tode kam.
                    Waren die Häftlinge der Gruppe zuvor noch privilegiert behandelt worden und hatten die Zeit in den
                    Außenlagern deshalb noch fast vollständig überleben können, war die Sonderstellung der Gruppe mit
                    der Ankunft in Mittelbau-Dora aufgehoben worden. Die Häftlinge waren damit der gleichen, auf die
                    Vernichtung der Häftlinge zielenden Behandlung durch das Wachpersonal wie die übrigen KZ-Häftlinge
                    unterworfen.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Bergen-Belsen war 1943 nach Plänen der SS und des Auswärtigen Amtes
                        zunächst zur Unterbringung jüdischer Geiseln gegründet worden, die gegen
                        deutsche Zivilpersonen in alliiertem Gewahrsam ausgetauscht werden sollten. Von Juli bis
                        September 1944 richtete die SS Teillager für verschiedene Häftlingsgruppen ein, dazu gehörte
                        auch das sogenannte \"Ungarnlager\". Schnell wurden ihm jedoch weitere Funktionen zugewiesen. Ende
                        März 1944 wurde ein Lagerteil für männliche Häftlinge anderer Konzentrationslager eingerichtet,
                        die zu krank waren um dort weiter Zwangsarbeit zu leisten. Die SS unternahm wenig um ein
                        Überleben der kranken Häftlinge zu ermöglichen, so dass ein Großteil von ihnen in Bergen-Belsen
                        starb. Im August 1944 wurde ein Lagerabschnitt für weibliche Häftlinge eingerichtet, die zur
                        Arbeit in der deutschen Rüstungsindustrie gezwungen werden sollten. Innerhalb von wenigen
                        Monaten deportierte die SS etwa 9.000 Häftlinge in das Frauenlager. Die Häftlinge stammten
                        zunächst vor allem aus Polen, wo sie in Folge des Warschauer Aufstands verhaftet worden war,
                        später waren unter ihnen auch viele polnische und ungarische Jüdinnen. Der Großteil der Frauen
                        wurde nach kurzer Zeit in eines der KZ-Außenlager an Standorten deutscher Rüstungsfirmen
                        deportiert. Ab Ende 1944 wurde das KZ Bergen-Belsen zum Ziel vieler Todesmärsche und
                        Räumungstransport aus den frontnahen Konzentrationslagern. Allein zwischen Dezember 1944 bis
                        Mitte April 1945 kamen so zusätzlich 85.000 Häftlinge nach Bergen-Belsen, so dass das Lager
                        schnell völlig überbelegt war. Auch die Versorgungssituation war katastrophal. Unter diesen
                        Umständen kam es zu einem Ausbruch einer Typhus- und Fleckfieberepidemie, die von der SS kaum
                        bekämpft wurde. Das Konzentrationslager Bergen-Belsen wurde zu einem Sterbelager. Am Standort
                        des ehemaligen Konzentrationslagers befindet sich heute eine Gedenkstätte. (Vgl. Stiftung
                        niedersächsische Gedenkstätten,: Bergen-Belsen. Kriegsgefangenenlager 1940-1945.
                        Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung,
                        Celle 2009, S.144-295.)
                    </p>
                    <p>
                        <a href=\"";
        // line 411
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
                    Der Einsatz von KZ-Häftlingen in der Rüstungsindustrie und die Verhandlungen zwischen der SS und
                    Wirtschaftsunternehmen wie Volkswagen sind gut dokumentiert.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup>
                    Für die 300er-Gruppe sind jedoch nur
                    wenig Dokumente der sie betreffenden bürokratischen Vorgänge erhalten geblieben. Das Wissen über
                    diese Gruppen stammt überwiegend aus den Berichten der Überlebenden, die vor allem im Zuge eines
                    Forschungsprojektes zur Geschichte des Volkswagenkonzerns und durch Videointerviews der USC Shoah
                    Foundation ab den 1980er- Jahren entstanden.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup>
                    Informationen über die Verwaltungsstruktur sowie
                    Zuständigkeiten für das Außenlager im Volkswagenwerk sind deshalb sehr begrenzt. Erhalten geblieben
                    ist lediglich die Kopie einer Häftlingsliste, die der überlebende Häftling Dezső Schön heimlich
                    angefertigt und mitgeführt hatte. Erhalten ist zudem eine Zugangsliste des Außenlagers Rebstock, die
                    ebenfalls die Häftlingsdaten enthält.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Häftlingsnummern\"/>
                <p class=\"caption\">
                    Zugeteilte Häftlingsnummern des KL Buchenwald für Zugänge aus den KL Natzweiler (Außenlager
                    Rebstock), 27.09.1944 und KL Dachau, 30.09.1944, online unter: Arolsen Archives:
                    https://collections.arolsen-archives.org/de/search/topic/1-1-27-1_2257001?s=Rebstock; Originale in:
                    Glowna Komisja Badania Zbrodni Hitlerowskich w Polsce, Warszawa.
                </p>
                <p>
                    Die enthaltenen Daten verdeutlichen die Schwierigkeiten im Umgang mit Dokumenten der KZ-Verwaltung.
                    So sind für die Häftlinge die von ihnen angegebenen Berufe aufgeführt. Diese sind jedoch im Hinblick
                    auf die Selektion in Auschwitz angegeben worden und entsprechen oftmals nicht den tatsächlichen
                    Berufen der Personen. Der Beruf des Journalisten Dezső Schön ist etwa mit „Monteur“ angegeben. Auch
                    Geburtsdaten sind teilweise bewusst falsch angegeben worden, um der Ermordung durch die SS zu
                    entgehen. Moshe Shen, der Sohn von Dezső Schön, hatte sich als 20-Jähriger ausgegeben, obwohl er
                    eigentlich erst 14 war, um als arbeitsfähig eingestuft zu werden. Die Listen wurden zudem in der
                    Regel von anderen Häftlingen geführt, die in der Verwaltung eingesetzt wurden. Diese Häftlinge
                    sprachen oft kein Ungarisch und waren ebenfalls den unmenschlichen Haftbedingungen unterworfen, die
                    von ihnen geführten Dokumente deshalb oft fehlerhaft. Ein Vergleich der beiden Listen ergibt, dass
                    von 298 Personen nur 62 mit identischen Namen und Daten geführt wurden. Insbesondere bei den
                    ungarischen Vornamen wurde nur ein Bruchteil in gleicher Schreibweise festgehalten.
                </p>
                <p>
                    Nur weil die Gruppe isoliert und gemeinsam deportiert wurde, ist eine Zuordnung der
                    unterschiedlichen Daten zu denselben Personen möglich. Bei anderen Häftlingen, die in der Regel über
                    Stammlager, zum Beispiel Neuengamme, auf Außenlager verteilt wurden, ist eine Zuordnung
                    unterschiedlicher Daten angesichts der lückenhaften Überlieferung oftmals sehr viel schwieriger.
                    Neben Dokumenten, die vernichtet wurden, wurden insbesondere in den letzten Kriegsmonaten oftmals
                    gar keine Verwaltungsunterlagen mehr geführt. So ist davon auszugehen, dass die Namen der Häftlinge
                    aus Mittelbau-Dora, die im April in Bergen-Belsen ankamen, nicht mehr verzeichnet wurden. Das
                    gleiche gilt für die Toten, die in diesem Zeitraum zum Beispiel beim Transport zu Tode kamen. Viele
                    Opfer bleiben damit namenslos. Unser Wissen über die Routen, Arbeitseinsätze und Haftbedingung der
                    Häftlinge verdanken wir vor allem den Berichten und Zeugnissen der Überlebenden.
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
                    <li>Randolph L. Braham (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1,
                        Evanston 2013.
                    </li>
                    <li>Manfred Grieger, „Rebstock\" und „Rebstock (Stephan)“ - zwei Außenlager im
                        Konzentrationslager-System
                        bei Marienthal und Dernau, August bis Dezember 1944, Mainz 2021.
                    </li>
                    <li>Hans Mommsen / Manfred Grieger, Das Volkswagenwerk im Dritten Reich, Düsseldorf 1996.</li>
                    <li>Dezső Schön, As örökség- Elbeszélések, Tel Aviv 1960.</li>
                    <li>Moshe Shen, Überleben war für uns KZ-Häftlinge eine Frage der Zeit, in: Dieter Landenberger /
                        Jens-Christian Gutzmann (Hrsg.), Überleben in Angst. Vier Juden berichten über ihre Zeit im
                        Volkswagenwerk in den Jahren 1943 bis 1945, Wolfsburg Ausgabe 2023.
                    </li>
                    <li>Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001.</li>
                    <li>Therkel Straede, Fallersleben (Volkswagenwerk), in: Geoffrey P. Megargee (Hrsg.), Encyclopedia
                        of
                        Camps and Ghettos, 1933–1945, Vol. I., Bloomington 2009, S. 1107-1108.
                    </li>
                    <li>Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager 1940-1945.
                        Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung,
                        Celle
                        2009.
                    </li>
                    <li>Stiftung niedersächsische Gedenkstätten (Hrsg.), Konzentrationslager Bergen-Belsen, online
                        unter:
                        <a href=\"https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945\">https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945</a>
                        (letzter Zugriff
                        10.07.2024)
                    </li>
                    <li>Jens-Christian Wagner (Hrsg.), Konzentrationslager Mittelbau-Dora 1943–1945. Begleitband zur
                        Ständigen Ausstellung in der KZ-Gedenkstätte Mittelbau-Dora, Göttingen 2007.
                    </li>
                    <li>Jens-Christian Wagner, NS-Untertageanlagen und Gedenkstättenarbeit: Erfahrungen aus
                        Mittelbau-Dora,
                        in: Gedenkstätten-Rundbrief, 147 (2009), Seite 5-13.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">Einen Überblick über das nationalsozialistische Zwangsarbeitssystem findet sich
                        bei: Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001. <a
                                href=\"#footnote1\">&uarr;</a></li>
                    <li id=\"endnote2\">Vgl. Jens-Christian Wagner, NS-Untertageanlagen und Gedenkstättenarbeit:
                        Erfahrungen aus Mittelbau-Dora, in: Gedenkstätten-Rundbrief, 147 (2009), S. 5-13. Eine
                        Diskussion des Begriffes „Vernichtung durch Arbeit“ findet sich bei Spoerer, Zwangsarbeit, S.
                        180-183.<a href=\"#footnote2\">&uarr;</a></li>
                    <li id=\"endnote3\">Vgl. Hans Mommsen / Manfred Grieger, Das Volkswagenwerk im Dritten Reich,
                        Düsseldorf 1996, S. 863-869. Eine Beschreibung aus der Sicht eines Überlebenden findet sich in:
                        Dezső Schön, As örökség- Elbeszélések, Tel Aviv 1960. <a href=\"#footnote3\">&uarr;</a></li>
                    <li id=\"endnote4\">Vgl. für eine Darstellung der Verfolgung und Deportation in Nagyvárad und Oradea:
                        Randolph L. Braham (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1,
                        Evanston 2013, S. 233-242, 505-523. <a href=\"#footnote4\">&uarr;</a></li>
                    <li id=\"endnote5\">Vgl. die Angabe der Muttersprachen und Berichte über die Zusammensetzung der
                        Gruppe in: VW-Konzernarchiv 67/149/1; Schön, As örökség. <a href=\"#footnote5\">&uarr;</a></li>
                    <li id=\"endnote6\">Vgl. Mommsen / Grieger, Volkswagenwerk, S. 864-866. <a
                                href=\"#footnote6\">&uarr;</a></li>
                    <li id=\"endnote7\">Vgl. Mommsen / Grieger, Volkswagenwerk. <a href=\"#footnote7\">&uarr;</a></li>
                    <li id=\"endnote8\">Vgl. Mommsen / Grieger, Volkswagenwerk. <a href=\"#footnote8\">&uarr;</a></li>
                    <li id=\"endnote9\">Vgl. Mommsen / Grieger, Volkswagenwerk, S. 865; VW-Konzernarchiv 67/149/1. <a
                                href=\"#footnote9\">&uarr;</a></li>
                    <li id=\"endnote10\">David Hollander: Interview 8342, Visual History Archive, USC Shoah Foundation
                        1995. <a href=\"#footnote10\">&uarr;</a></li>
                    <li id=\"endnote11\">Vgl. VW-Konzernarchiv 67/149/1. <a href=\"#footnote11\">&uarr;</a></li>
                    <li id=\"endnote12\">Vgl. VW-Konzernarchiv 67/65/1. <a href=\"#footnote12\">&uarr;</a></li>
                    <li id=\"endnote13\">Alex Rosenbaum: Interview 16411, Visual History Archive, USC Shoah Foundation
                        1996. <a href=\"#footnote13\">&uarr;</a></li>
                    <li id=\"endnote14\">Vgl. VW-Konzernarchiv 67/149/1; Grieger / Mommsen, Volkswagenwerk, S. 867. <a
                                href=\"#footnote14\">&uarr;</a></li>
                    <li id=\"endnote15\">Jens-Christian Wagner (Hrsg.), Konzentrationslager Mittelbau-Dora 1943–1945.
                        Begleitband zur Ständigen Ausstellung in der KZ-Gedenkstätte Mittelbau-Dora, Göttingen 2007. <a
                                href=\"#footnote15\">&uarr;</a></li>
                    <li id=\"endnote16\">Vgl. Schön, As örökség, 1960. <a href=\"#footnote16\">&uarr;</a></li>
                    <li id=\"endnote17\">Vgl. VW-Konzernarchiv 67/65/1. <a href=\"#footnote17\">&uarr;</a></li>
                    <li id=\"endnote18\">Vgl. Wagner, NS-Untertageanlagen, S. 9. <a href=\"#footnote18\">&uarr;</a></li>
                    <li id=\"endnote19\">Stephan Grant: Interview 14925, Visual History Archive, USC Shoah Foundation
                        1996; VW-Konzernarchiv 67/65/1; Schön, As örökség. <a href=\"#footnote19\">&uarr;</a></li>
                    <li id=\"endnote20\">Vgl. VW-Konzernarchiv 67/149/1; VW-Konzernarchiv 67/65/1. <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">Moshe Shen, Überleben war für uns KZ-Häftlinge eine Frage der Zeit, in: Dieter
                        Landenberger / Ulrike Gutzmann (Hrsg.), Überleben in Angst. Vier Juden berichten über ihre Zeit
                        im Volkswagenwerk in den Jahren 1943 bis 1945, Wolfsburg Ausgabe 2023, S. 31-32. <a
                                href=\"#footnote21\">&uarr;</a></li>
                    <li id=\"endnote22\">Vgl. Wagner, Konzentrationslager Mittelbau-Dora, S. 139ff. <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen, S. 238. <a
                                href=\"#footnote23\">&uarr;</a></li>
                    <li id=\"endnote24\">Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen, S. 238;
                        Stiftung niedersächsische Gedenkstätten (Hrsg.), Konzentrationslager Bergen-Belsen, unter: <a
                                href=\"https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945/\"
                                title=\"Website der Gedenkstätte Bergen Belsen\">https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945/</a>
                        (letzter Zugriff 10.07.2024). <a href=\"#footnote24\">&uarr;</a></li>
                    <li id=\"endnote25\">Vgl. Shen, Überleben, S. 32. <a href=\"#footnote25\">&uarr;</a></li>
                    <li id=\"endnote26\">Vgl. Mommsen / Grieger, Volkswagenwerk. <a href=\"#footnote26\">&uarr;</a></li>
                    <li id=\"endnote27\">Vgl. Mommsen / Grieger, Volkswagenwerk, David Hollander: Interview 8342, Visual
                        History Archive, USC Shoah Foundation 1995; Bernat Roth Interview 9295, Visual History Archive,
                        USC Shoah Foundation 1995; Desider Davidovits: Interview 18755, Visual History Archive, USC
                        Shoah Foundation 1996; Mosche Friedman: Interview 18884, Visual History Archive, USC Shoah
                        Foundation 1996; Berti Burger: Interview 19539, Visual History Archive, USC Shoah Foundation
                        1996; ´eli`ezer Farḳash: Interview 25903, Visual History Archive, USC Shoah Foundation 1997;
                        Nikolay Lebovics: Interview 26340, Visual History Archive, USC Shoah Foundation 1997; Yitsḥaḳ
                        Shamir: Interview 32225, Visual History Archive, USC Shoah Foundation 1997; Ornan Lev-Ari:
                        Interview 34492, Visual History Archive, USC Shoah Foundation 1997; Yitsḥaḳ ´elefanṭ: Interview
                        38328, Visual History Archive, USC Shoah Foundation 1997; Yitsḥaḳ Dove´: Interview 44636, Visual
                        History Archive, USC Shoah Foundation 1998; George Moshe Stein: Interview 5756, Visual History
                        Archive, USC Shoah Foundation 1995; Zoltan Marek: Interview 1767, Visual History Archive, USC
                        Shoah Foundation 1995; Alex Rosenbaum: Interview 16411, Visual History Archive, USC Shoah
                        Foundation 1996; Ben-Zion Haas: Interview 26344, Visual History Archive, USC Shoah Foundation
                        1997; Stephan Grant: Interview 14925, Visual History Archive, USC Shoah Foundation 1996. <a
                                href=\"#footnote27\">&uarr;</a></li>
                    <li id=\"endnote28\">VW-Konzernarchiv 67/422/1; Zugeteilte Häftlingsnummern des KL Buchenwald für
                        Zugänge aus den KL Natzweiler (Außenlager Rebstock), 27.09.1944 und KL Dachau, 30.09.1944,
                        1.1.27.1 2257001, ITS Digital Archive, Arolsen Archives, online unter: <a
                                href=\"https://collections.arolsen-archives.org/de/search/topic/1-1-27-1_2257001?s=Rebstock\"
                                title=\"Sammlung Arolsen Archives\">https://collections.arolsen-archives.org/de/search/topic/1-1-27-1_2257001?s=Rebstock</a>
                            (letzter Zugriff: 19.7.2024). <a href=\"#footnote28\">&uarr;</a></li>
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
                    Louis Wörner: Facharbeiter für Volkswagen, in: Holocaust in Ungarn und Deportationen nach
                    Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 616
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
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
        return "studies/gruppe-der-300.html.twig";
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
        return array (  730 => 616,  547 => 436,  519 => 411,  411 => 306,  386 => 284,  232 => 133,  193 => 97,  148 => 55,  142 => 52,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Fallstudie 300er Gruppe | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-deportationen.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2>Facharbeiter für Volkswagen</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Circa 13,5 Millionen Menschen wurden während des Zweiten Weltkrieges zu Zwangsarbeit im Deutschen
                    Reich herangezogen. Die Aufrechterhaltung der Kriegswirtschaft war nur durch die
                    zwangsverpflichteten Arbeiterinnen und Arbeiter, Kriegsgefangenen und Konzentrationslager-Häftlinge
                    möglich. Diese wurden in allen wirtschaftlichen Bereichen eingesetzt und gehörten mit
                    fortschreitendem Verlauf des Krieges zum sichtbaren Alltag im nationalsozialistischen
                    Deutschland.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    KZ-Häftlinge wurden dabei unter anderem in der Rüstungsindustrie eingesetzt, mit deren Verlagerung
                    unter Tage die Nationalsozialisten 1943 angesichts der alliierten Luftüberlegenheit begannen. Durch
                    die Produktion moderner Abfangjäger und Raketen in bombensicheren Stollen sollte die sich immer
                    klarer abzeichnende Kriegsniederlage abgewendet werden. Der Großteil der gigantomanischen Projekte
                    wurde nie fertiggestellt, die meisten der Produktionsanlagen nie in Betrieb genommen. Die Lebens-
                    und Arbeitsbedingen für die KZ-Häftlinge waren besonders hart und forderten tausende Todesopfer.
                    Insbesondere der Tod jüdischer Häftlinge war im Rahmen einer „Vernichtung durch Arbeit“
                    einkalkuliert. Die individuellen Überlebenschancen der Häftlinge hingen nicht zuletzt vom
                    zugeteilten Arbeitskommando ab, Häftlinge, die notwendige berufliche Qualifikationen aufwiesen oder
                    für ihre Arbeitskommandos länger eingearbeitet worden waren, galten als weniger ersetzbar.<sup><a
                                href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">300 Facharbeiter für Volkswagen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Auch in einem ehemaligen Erzstollen im französischen Thil sollte eine unterirdische
                    Produktionsstätte für 10.000 Arbeiter durch eine Tochterfirma von Volkswagen eingerichtet werden.
                    Hierfür reiste im Juni 1944 der VW-Ingenieur Arthur Schmiele ins Konzentrations- und
                    Vernichtungslager Auschwitz-Birkenau um Arbeitskräfte unter den zuvor aus Ungarn deportierten
                    jüdischen Häftlinge auszuwählen. Schmiele stellte eine Gruppe von 500 und eine Gruppe von 300
                    Männern zusammen, die er nach einer Abfrage der beruflichen Qualifikation als Metallfacharbeiter und
                    einer kurzen Eignungsprüfung auswählte. In beiden Gruppen befanden sich dementsprechend viele
                    Schlosser und einige Ingenieure, aber auch Menschen aus anderen Berufen, die eine entsprechende
                    Qualifikation vortäuschten. Trotz ihrer kurzen Zeit in Auschwitz-Birkenau, hatten sie vermutlich
                    erkannt, dass die Zuteilung in ein Arbeitskommando außerhalb von Auschwitz eine größere Chance zum
                    Überleben bot.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <p>
                    <a href=\"{{ asset('images/studies/Deportationsroute-Gruppe-der-300.jpg') }}\"
                       data-lightbox=\"map-gruppe-300\"
                       data-title=\"Deportationsroute der „Gruppe der 300“.\"><img class=\"gallery img-fluid\"
                                                                                 src=\"{{ asset('images/studies/Deportationsroute-Gruppe-der-300_preview.jpg') }}\"
                                                                                 alt=\"Karte der Deportationsroute aus Oradea und Cluj-Napoca über Auschwitz und vier weitere Lager ins Konzentrationslager Bergen-Belsen \"/></a>
                <p class=\"caption\">
                    Deportationsroute der „Gruppe der 300“. &copy; Institut für die Geschichte der deutschen Juden. Lizenz: CC BY 4.0 &#128269; Zum Vergrößern klicken.
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
                    Die Häftlinge stammten vor allem aus Gebieten im Nordosten des heutigen Rumäniens. 1940 war Rumänien
                    durch das nationalsozialistische Deutschland und das faschistische Italien gezwungen worden, diese
                    Gebiete an Ungarn abzutreten. Nach der deutschen Besetzung Ungarns im März 1944 wurden von den
                    deutschen Besatzern und ungarischen Behörden innerhalb kürzester Zeit Ghettos für die jüdische
                    Bevölkerung eingerichtet, so auch am 3. Mai im damaligen Nagyvárad und in Kolozsvár, dem heutigen
                    Oradea und Cluj Napoca. Orte, aus denen viele der Deportierten dieser Gruppe stammten. Bereits Ende
                    Mai und Anfang Juni 1944 wurde die jüdische Bevölkerung der beiden Ghettos ins Konzentrations- und
                    Vernichtungslager Auschwitz-Birkenau deportiert. Dort wurden die Familien nach Geschlechtern
                    voneinander getrennt und alle Alten, Kranken oder Kinder sowie die Mütter und Schwangeren der
                    Deportierten in den Gaskammern ermordet. Lediglich die als arbeitsfähig eingestuften Häftlinge
                    überlebten die Selektion.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup> Wie Überlebende später
                    berichteten, war die aus diesen Transporten
                    ausgewählte Gruppe sehr vielfältig, einige hatten in ihren Elternhäusern Ungarisch, andere
                    Rumänisch, Deutsch, Serbisch, Jiddisch oder eine Kombination dieser Sprachen gesprochen. Teile der
                    Gruppe waren sehr religiös, für andere spielte Religion keine Rolle, einige hatten sogar christliche
                    Familien, alle wurden jedoch durch die Nationalsozialisten als Juden verfolgt. Einige waren bereits
                    über fünfzig und andere unter zwanzig, der jüngste war erst vierzehn Jahre alt. Mehreren Vätern
                    gelang es, gemeinsam mit ihren Söhnen in die Gruppe eingeteilt zu werden und auch andere Häftlinge
                    waren durch die gemeinsame Herkunftsregion bereits vorher miteinander bekannt oder verwandt.<sup><a
                                href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                </p>

            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zum historischen Hintergrund</h4>
                    <p>
                        <a href=\"{{ path('app_context') }}\" title=\"Text zum historischen Kontext\">
                            &#10149; Historischer
                            Kontext
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Juden und Jüdinnen</h4>
                    <p>
                        Die aus Ungarn deportierten Juden und Jüdinnen gehörten verschiedenen
                        Gemeinden und religiösen Strömungen an und lebten ihr Judentum
                        unterschiedlich aus. Nicht alle definierten sich zwangsläufig selbst als jüdisch. Für
                        ihre Verfolgung durch die Nationalsozialisten war weder ihre Religion noch eine
                        kulturelle Zugehörigkeit zum Judentum oder die Selbstzuschreibung
                        entscheidend. Das Zentrum der nationalsozialistischen Weltanschauung bildete
                        ein rassistischer Antisemitismus, der Juden und Jüdinnen nach ihrer Abstammung
                        definierte. Auch Christen und Christinnen sowie Atheisten und Atheistinnen
                        wurden unabhängig von ihrer Selbstdefinition oder kulturellen Zugehörigkeit
                        durch die Nationalsozialisten als Juden verfolgt, wenn sie deren
                        Abstammungskriterien entsprachen. Nicht alle hier als Juden und Jüdinnen
                        bezeichneten Personen identifizierten sich selbst als jüdisch, sie alle wurden
                        jedoch als jüdisch verfolgt. </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\">Spezialisten im VW-Werk Fallersleben</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Während die 500er-Gruppe direkt nach Thil deportiert wurde, wurde die 300er-Gruppe zunächst in
                    Viehwagons ins VW-Werk nach Fallersleben deportiert, wo sie in der Montage der Fieseler 103 (V1)
                    Rakete ausgebildet wurden. Die Häftlinge mussten dabei täglich in Zwölf-Stunden-Schichten arbeiten,
                    wobei sie alle zwei Wochen einen Tag frei bekamen. Zu dieser Zeit sahen sie kein Tageslicht, da sie
                    direkt im VW-Werk in ehemaligen Waschkauen im selben Gebäude untergebracht waren, in dem auch die
                    Produktion stattfand. <a href=\"{{ path('app_studytemplate') }}\" title=\"Fallstudie Salzwedel\">Später
                        wurden in denselben Räumen Jüdinnen aus Ungarn als KZ-Zwangsarbeiter
                        untergebracht.</a> Die 300 KZ-Häftlinge wurden von den anderen Arbeitern und Arbeiterinnen
                    isoliert und
                    hatten lediglich Kontakt mit ihren deutschen Vorarbeitern und dem Wachpersonal aus abkommandierten
                    Luftwaffensoldaten. Als vermeintliche Facharbeiter, sollten die 300 Männer die Kernbelegschaft der
                    neuen unterirdischen Produktionsstätte bilden und das von ihnen erworbene Wissen über die
                    Herstellung der Raketen geheim gehalten werden.<sup><a
                                href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit bei VW</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    1938/1939 hatte die ein Jahr zuvor gegründete Volkswagen GmbH ihr Werk in der Nähe von Fallersleben
                    im heutigen Wolfsburg errichtet. Nach Kriegsbeginn wurden hier nicht wie ursprünglich geplant Autos
                    für die deutsche Zivilbevölkerung produziert, sondern Rüstungsaufträge übernommen. Dabei griff der
                    Volkswagen-Konzern auch auf die verschiedenen Formen nationalsozialistischer Zwangsarbeit zurück.
                    Ende 1944 stellten Zwangsarbeiter und Zwangsarbeiterinnen zwei Drittel der Belegschaft, insgesamt
                    mussten etwa 200.000 Menschen Zwangsarbeit bei Volkswagen leisten, viele von ihnen überlebten die
                    Arbeitsbedingungen nicht. Neben zivilen Zwangsarbeitern und Zwangsarbeiterinnen, sowjetischen
                    Kriegsgefangenen und italienischen Militärinternierten betrifft dies auch insgesamt circa 5.000
                    KZ-Häftlinge. Nachdem die Geschichte des VW-Konzerns im Nationalsozialismus in den 1980er und 1990er
                    Jahren öffentlich umfangreich thematisiert und wissenschaftlich untersucht wurde, befindet sich
                    heute im VW-Werk eine Erinnerungsstätte an die Zwangsarbeit auf dem Gelände.<sup><a
                                href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
                <p>
                    Im Vergleich zu anderen KZ-Häftlingen wurde die 300er-Gruppe im VW-Werk verhältnismäßig gut
                    versorgt. Auch wenn sie keine neue Kleidung erhielten, waren sie durch ihre Unterkunft vor Witterung
                    geschützt. Die Lebensmittelrationen waren zwar für die von ihnen verlangte Arbeit zu gering
                    angesetzt, dabei aber umfangreicher als in anderen Lagern. Die für viele Konzentrationslager
                    typischen Unterernährungserscheinungen, die auf Dauer häufig zum Tod der Häftlinge führten, blieben
                    in der 300er-Gruppe zunächst aus.<sup><a
                                href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                </p>
                <p>
                    Aufgrund ihrer Ausbildung und vorgesehenen Funktion hatten die SS und VW zunächst ein Interesse am
                    Überleben der Häftlinge, das sich jedoch nur auf die Dauer des Krieges und die damit einhergehende
                    Notwendigkeit unterirdischer V1-Produktion erstreckte. Überlebende bezeugten nach dem Krieg in
                    Interviews oder Erinnerungsberichten, dass nach den Erfahrungen in Auschwitz-Birkenau und den
                    folgenden Konzentrationslagern die Zeit im Volkswagenwerk rückblickend noch erträglich
                    erschien.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
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
                        Die individuellen Lebens- und Arbeitsbedingungen der Zwangsarbeiterinnen und
                        Zwangsarbeiter hingen dabei von ihrem rechtlichen Status, ihrer nationalen
                        Zugehörigkeit, ihrem Geschlecht sowie ihrem Arbeitsort ab. Die harte körperliche
                        Arbeit, die bewusst herbeigeführte Unterernährung und mangelhafte Ausstattung
                        machten ein Überleben für viele Häftlinge nicht möglich. Sie wurden mittels der
                        katastrophalen und menschenverachtenden Arbeits- und Lebensbedingungen,
                        durch die Nationalsozialisten ermordet. Für die Arbeit der KZ-Häftlinge prägte
                        Wolfgang Sofsky daher den Begriff „Terrorarbeit“, um zu betonen, dass der Zweck
                        der Arbeit nicht deren Produktivität gewesen sei, sondern die ineffektiven
                        Arbeitseinsätze vor allem der Terrorisierung der Häftlinge gedient hätten. Für die
                        Arbeit in den Neuengammer Außenlagern lehnt der Historiker Marc Buggeln
                        diesen Begriff explizit ab und argumentiert, dass die maximale Ausbeutung der
                        Arbeitskraft der Häftlinge bis zum Tod durch Erschöpfung im ökonomischen
                        Interesse der Unternehmen gewesen sei. Er plädiert stattdessen für den Begriff
                        „Sklavenarbeit“, der auch von vielen Überlebenden verwendet wird.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Deportationen und alliierter Vormarsch</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Ende Juni 1944 wurde bei einem alliierten Bombenangriff die Produktionsstätte der Gruppe zerstört.
                    Die Gruppe hatte den Angriff in einem Bunker überlebt und wurde nach einigen Tagen aus dem völlig
                    zerstörten Werk zu einer anderen Produktionsstätte im besetzten Frankreich deportiert. Auf ihrem Weg
                    in das Lager, das sich im besetzten Lothringen befand, erfuhr die Gruppe von der alliierten Landung
                    in der Normandie. Die Bestätigung dieser Nachricht war laut dem Überlebende David Hollander „the
                    happiest moment“ – der glücklichste Moment – während seiner
                    KZ-Haft.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup> In Thil trafen sie auch wieder
                    auf die Gruppe der 500 Männer, die mit ihnen zusammen in Auschwitz-Birkenau ausgewählt worden waren.
                    Auch hier wurden die 300 Männer isoliert. Überlebende berichteten, dass sie ein eigenes
                    Barackenlager inklusive eines Krematoriums errichten mussten, dass durch einen Zaun von den anderen
                    Häftlingen getrennt war.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    Die Männer waren bei den Selektionen oft von Freunden und Verwandten
                    getrennt worden, die sie nun teilweise durch den Zaun wiedersahen. Kontaktaufnahmen wurden jedoch
                    streng verfolgt. Unter anderem der Überlebende Eliesar Farkas berichtete, dass ein Häftling in der
                    anderen Gruppe seinen Bruder wiedererkannt und mit ihm am Zaun das Gespräch gesucht hätte, woraufhin
                    er erschossen worden sei.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup> Dem Überlebenden
                    Alex Rosenbaum gelang es hingegen, heimlich einige Worte
                    mit seinem Vater im anderen Lager zu wechseln.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                </p>
                <p>
                    Da die Produktionsstätte in Thil noch nicht fertiggestellt war, wurde die Gruppe trotz ihrer
                    aufwendigen Ausbildung insbesondere für Räum- und Bauarbeiten eingesetzt. Dabei kam die Gruppe auch
                    regelmäßig in ein nahegelegenes französisches Dorf. Dort gelang es Häftlingen trotz der Bewachung,
                    Kontakt mit der französischen Zivilbevölkerung und der französischen Widerstandsbewegung, der
                    Résistance, aufzunehmen. Überlebende wie zum Beispiel Pal Arie bezeugten, dass ein Häftling mithilfe
                    der französischen Résistance sogar fliehen konnte und durch die Frontlinien zur US-Army gebracht
                    wurde, der er von der V1-Produktion berichten konnte.<sup><a href=\"#endnote14\"
                                                                                 id=\"footnote14\">14</a></sup>
                    Ende August konnte die US-Army Paris befreien.
                    Lange bevor die Produktion in Thil beginnen konnte, wurde das Außenlager deshalb angesichts der sich
                    nähernden Alliierten Anfang September 1944 geräumt.
                </p>
                <p>
                    Die Gruppe wurde daraufhin zunächst in das Außenlager Rebstock des KZ Buchenwald verlegt. Auch hier
                    sollte eine unterirdische Produktionsstätte errichtet werden, die aber ebenfalls niemals in die
                    Produktion ging. Die Gruppe war zuvor wieder auf 300 aufgestockt worden, um den ermordeten sowie den
                    geflohenen Häftling zu ersetzen. Bereits Ende September wurde die Gruppe erneut deportiert, diesmal
                    in das KZ Mittelbau-Dora. Aufgrund von Luftangriffen war der Transport mehrere Tage unterwegs und
                    hielt wahrscheinlich auch einige Zeit in zivilen Bahnhöfen.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Das KZ Mittelbau-Dora</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Das KZ Mittelbau-Dora war im August 1943 ursprünglich als ein Außenlager des KZ Buchenwald im Zuge
                    der Untertageverlagerung der Rüstungsindustrie eingerichtet worden. Im Oktober 1944 wurde es zu
                    einem eigenständigen KZ erklärt. Eine nach dem Krieg gemachte Aufstellung geht davon aus, dass
                    Anfang November 1944 bereits 13.796 Häftlinge im Stammlager des Konzentrationslager Mittelbau-Dora
                    inhaftiert waren. Insgesamt waren während seines Bestehens mindesten 60.000 Häftlinge in
                    Mittelbau-Dora – Stammlager und Außenlager – inhaftiert, wobei mindestens 20.000 durch die
                    Arbeitsbedingungen und die Gewalt des Wachpersonals ermordet wurden. Heute befindet sich am Ort des
                    ehemaligen Konzentrationslagers eine Gedenkstätte.<sup><a href=\"#endnote15\"
                                                                              id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Übersicht Zwangsarbeitslager</h4>
                    <p style=\"font-size: 0.9rem;\">
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Übersicht der Lager mit aus Ungarn deportierten Zwangsarbeitern und
                            Zwangsarbeiterinnen
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Untertageproduktion im KZ Mittelbau-Dora</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Viele Häftlinge der 300er-Gruppe überlebten die Zeit in Mittelbau-Dora nicht. Anders als zuvor wurde
                    die Gruppe hier nicht mehr isoliert, vor allem aber auch nicht mehr besser versorgt. Überlebende
                    berichteten über den unaufhaltsamen Gewichtsverlust, der angesichts der bald erhofften Befreiung
                    einen Wettlauf mit der Zeit bedeutete. In einem nach dem Krieg erschienenen Bericht seiner Haftzeit
                    beschrieb der Überlebende Dezső Schön, dass er seinen Sohn Moshe wöchentlich wog, um den
                    Gewichtsverlust zu dokumentieren.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                    Viele der überlebenden Häftlinge wogen bei ihrer Befreiung nur
                    wenig über 30 Kilo.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/V1-Produktion.jpg') }}\"
                     alt=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora im Mai 1946\"/>
                <p class=\"caption\">
                    Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora, Mai 1946, Fotograf:
                    unbekannt, D-Day Museum, Portsmouth, 089.006, online unter:
                    <a href=\"https://fotoarchiv.dora.de/detail/2595\"
                       title=\"Seite des Fotoarchivs der  Stiftung Gedenkstätten Buchenwald und Mittelbau-Dora\">https://fotoarchiv.dora.de/detail/2595</a>,
                    Public Domain.
                </p>
                <p>
                    Anders als andere Produktionsstätten konnte aufgrund des bereits bestehenden Tunnelsystems im KZ
                    Mittelbau-Dora die unterirdische Produktion aufgenommen werden. Auch die Häftlinge der 300er-Gruppe
                    wurden in den unterirdischen Produktionsanlagen eingesetzt. Die Erwartungen der NS-Führung an eine
                    den Kriegsverlauf zugunsten der Deutschen beeinflussende „Wunderwaffe“ konnte die Produktion jedoch
                    nicht erfüllen, die geplanten monatlichen Produktionszahlen konnten nie erreicht werden. Die vor
                    allem durch verhungernde KZ-Häftlinge produzierten Raketen konnten außerdem zu fast einem Drittel
                    nicht eingesetzt werden.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                    Von Bedeutung war hierbei nicht zuletzt der Widerstand der Häftlinge.
                    Überlebende der 300er-Gruppe berichteten, dass es zwei jungen Gruppenmitgliedern gelungen war, die
                    Raketenproduktion über längere Zeit unentdeckt zu sabotieren und die Raketen funktionsuntüchtig zu
                    machen.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>

        </div>

        <h3 class=\"mt-4\">Tödliche Räumungstransporte und die Befreiung des KZ Bergen-Belsen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Als sich im April 1945 amerikanische Truppen dem KZ näherten, trieb die SS die noch lebenden
                    Häftlinge der 300er-Gruppe zusammen mit tausenden anderen Häftlingen aus
                    Mittelbau-Dora.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup> Abgesehen
                    von denjenigen Häftlingen, die bereits zu geschwächt oder krank waren, wurden die Häftlinge der
                    Gruppe mit Güter- und Viehwagons ins Konzentrationslager Bergen-Belsen deportiert. Die schon
                    geschwächten Häftlinge wurden während des mehrtätigen Transports nicht versorgt, so dass ein
                    Großteil von ihnen die Fahrt nicht überlebte. Der Überlebende Moshe Shen bezeugte, dass in seinem
                    Wagon 100 Menschen untergebracht gewesen waren, von denen nur 20 die zehntägige Fahrt überlebt
                    hätten.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup>
                    Schätzungen gehen davon aus, dass bis zu 8.000 Häftlinge die Räumungstransporte und
                    Todesmärsche aus Mittelbau-Dora nicht überlebten.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup>
                </p>
                <p>
                    Die Versorgungssituation in dem völlig überbelegten Lager Bergen-Belsen war katastrophal, so dass
                    hier wahrscheinlich weitere Häftlinge der 300er-Gruppe durch die Haftbedingungen ermordet wurden.
                    Die etwa 15.000 Häftlinge aus Mittelbau-Dora, die noch im April 1945 in Bergen-Belsen eintrafen,
                    wurden in ehemaligen Wehrmachtskasernen, dem sogenannten Kasernenlager
                    untergebracht.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup> Dort wurden
                    die überlebenden Häftlinge des Konzentrationslagers Bergen-Belsen am 15. April 1945 von britischen
                    Truppen befreit, die das Konzentrationslager kampflos übernahmen.
                </p>
                <p>
                    Bei der Befreiung fanden die Alliierten über 53.000 verhungernde und unzählige bereits tote
                    Häftlinge vor. Viele Tausend starben auch nach der Befreiung noch an den Folgen der Haft. Allein bis
                    Juni 1945 verloren 14.000 ehemalige Häftlinge aus Bergen-Belsen ihr Leben. Die britischen Truppen
                    waren auf die katastrophalen Zustände, die sie in Bergen-Belsen vorfanden, nicht vorbereitet. Viele
                    Häftlinge starben nicht zuletzt, da ihre verhungernden Mägen, die von den britischen Soldaten zu
                    Beginn großzügig verteilten Lebensmittel nicht vertrugen. Erst nach einigen Tagen traf die
                    notwendige Schonkost ein.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup>
                    Der Überlebende Moshe Shen erinnerte sich, dass er bei der Befreiung zu
                    geschwächt war, um den Briten entgegenzugehen und die verteilten Lebensmittel entgegenzunehmen, was
                    ihm wohl das Leben rettete.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup>
                </p>
                <p>
                    Es lässt sich nicht endgültig ermitteln, wie viele aus der 300er-Gruppe diese letzten Monate ihrer
                    KZ-Haft überlebten. Es ist davon auszugehen, dass die Mehrheit von ihnen in dieser Zeit zu Tode kam.
                    Waren die Häftlinge der Gruppe zuvor noch privilegiert behandelt worden und hatten die Zeit in den
                    Außenlagern deshalb noch fast vollständig überleben können, war die Sonderstellung der Gruppe mit
                    der Ankunft in Mittelbau-Dora aufgehoben worden. Die Häftlinge waren damit der gleichen, auf die
                    Vernichtung der Häftlinge zielenden Behandlung durch das Wachpersonal wie die übrigen KZ-Häftlinge
                    unterworfen.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Bergen-Belsen war 1943 nach Plänen der SS und des Auswärtigen Amtes
                        zunächst zur Unterbringung jüdischer Geiseln gegründet worden, die gegen
                        deutsche Zivilpersonen in alliiertem Gewahrsam ausgetauscht werden sollten. Von Juli bis
                        September 1944 richtete die SS Teillager für verschiedene Häftlingsgruppen ein, dazu gehörte
                        auch das sogenannte \"Ungarnlager\". Schnell wurden ihm jedoch weitere Funktionen zugewiesen. Ende
                        März 1944 wurde ein Lagerteil für männliche Häftlinge anderer Konzentrationslager eingerichtet,
                        die zu krank waren um dort weiter Zwangsarbeit zu leisten. Die SS unternahm wenig um ein
                        Überleben der kranken Häftlinge zu ermöglichen, so dass ein Großteil von ihnen in Bergen-Belsen
                        starb. Im August 1944 wurde ein Lagerabschnitt für weibliche Häftlinge eingerichtet, die zur
                        Arbeit in der deutschen Rüstungsindustrie gezwungen werden sollten. Innerhalb von wenigen
                        Monaten deportierte die SS etwa 9.000 Häftlinge in das Frauenlager. Die Häftlinge stammten
                        zunächst vor allem aus Polen, wo sie in Folge des Warschauer Aufstands verhaftet worden war,
                        später waren unter ihnen auch viele polnische und ungarische Jüdinnen. Der Großteil der Frauen
                        wurde nach kurzer Zeit in eines der KZ-Außenlager an Standorten deutscher Rüstungsfirmen
                        deportiert. Ab Ende 1944 wurde das KZ Bergen-Belsen zum Ziel vieler Todesmärsche und
                        Räumungstransport aus den frontnahen Konzentrationslagern. Allein zwischen Dezember 1944 bis
                        Mitte April 1945 kamen so zusätzlich 85.000 Häftlinge nach Bergen-Belsen, so dass das Lager
                        schnell völlig überbelegt war. Auch die Versorgungssituation war katastrophal. Unter diesen
                        Umständen kam es zu einem Ausbruch einer Typhus- und Fleckfieberepidemie, die von der SS kaum
                        bekämpft wurde. Das Konzentrationslager Bergen-Belsen wurde zu einem Sterbelager. Am Standort
                        des ehemaligen Konzentrationslagers befindet sich heute eine Gedenkstätte. (Vgl. Stiftung
                        niedersächsische Gedenkstätten,: Bergen-Belsen. Kriegsgefangenenlager 1940-1945.
                        Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung,
                        Celle 2009, S.144-295.)
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
                    Der Einsatz von KZ-Häftlingen in der Rüstungsindustrie und die Verhandlungen zwischen der SS und
                    Wirtschaftsunternehmen wie Volkswagen sind gut dokumentiert.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup>
                    Für die 300er-Gruppe sind jedoch nur
                    wenig Dokumente der sie betreffenden bürokratischen Vorgänge erhalten geblieben. Das Wissen über
                    diese Gruppen stammt überwiegend aus den Berichten der Überlebenden, die vor allem im Zuge eines
                    Forschungsprojektes zur Geschichte des Volkswagenkonzerns und durch Videointerviews der USC Shoah
                    Foundation ab den 1980er- Jahren entstanden.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup>
                    Informationen über die Verwaltungsstruktur sowie
                    Zuständigkeiten für das Außenlager im Volkswagenwerk sind deshalb sehr begrenzt. Erhalten geblieben
                    ist lediglich die Kopie einer Häftlingsliste, die der überlebende Häftling Dezső Schön heimlich
                    angefertigt und mitgeführt hatte. Erhalten ist zudem eine Zugangsliste des Außenlagers Rebstock, die
                    ebenfalls die Häftlingsdaten enthält.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Häftlingsnummern\"/>
                <p class=\"caption\">
                    Zugeteilte Häftlingsnummern des KL Buchenwald für Zugänge aus den KL Natzweiler (Außenlager
                    Rebstock), 27.09.1944 und KL Dachau, 30.09.1944, online unter: Arolsen Archives:
                    https://collections.arolsen-archives.org/de/search/topic/1-1-27-1_2257001?s=Rebstock; Originale in:
                    Glowna Komisja Badania Zbrodni Hitlerowskich w Polsce, Warszawa.
                </p>
                <p>
                    Die enthaltenen Daten verdeutlichen die Schwierigkeiten im Umgang mit Dokumenten der KZ-Verwaltung.
                    So sind für die Häftlinge die von ihnen angegebenen Berufe aufgeführt. Diese sind jedoch im Hinblick
                    auf die Selektion in Auschwitz angegeben worden und entsprechen oftmals nicht den tatsächlichen
                    Berufen der Personen. Der Beruf des Journalisten Dezső Schön ist etwa mit „Monteur“ angegeben. Auch
                    Geburtsdaten sind teilweise bewusst falsch angegeben worden, um der Ermordung durch die SS zu
                    entgehen. Moshe Shen, der Sohn von Dezső Schön, hatte sich als 20-Jähriger ausgegeben, obwohl er
                    eigentlich erst 14 war, um als arbeitsfähig eingestuft zu werden. Die Listen wurden zudem in der
                    Regel von anderen Häftlingen geführt, die in der Verwaltung eingesetzt wurden. Diese Häftlinge
                    sprachen oft kein Ungarisch und waren ebenfalls den unmenschlichen Haftbedingungen unterworfen, die
                    von ihnen geführten Dokumente deshalb oft fehlerhaft. Ein Vergleich der beiden Listen ergibt, dass
                    von 298 Personen nur 62 mit identischen Namen und Daten geführt wurden. Insbesondere bei den
                    ungarischen Vornamen wurde nur ein Bruchteil in gleicher Schreibweise festgehalten.
                </p>
                <p>
                    Nur weil die Gruppe isoliert und gemeinsam deportiert wurde, ist eine Zuordnung der
                    unterschiedlichen Daten zu denselben Personen möglich. Bei anderen Häftlingen, die in der Regel über
                    Stammlager, zum Beispiel Neuengamme, auf Außenlager verteilt wurden, ist eine Zuordnung
                    unterschiedlicher Daten angesichts der lückenhaften Überlieferung oftmals sehr viel schwieriger.
                    Neben Dokumenten, die vernichtet wurden, wurden insbesondere in den letzten Kriegsmonaten oftmals
                    gar keine Verwaltungsunterlagen mehr geführt. So ist davon auszugehen, dass die Namen der Häftlinge
                    aus Mittelbau-Dora, die im April in Bergen-Belsen ankamen, nicht mehr verzeichnet wurden. Das
                    gleiche gilt für die Toten, die in diesem Zeitraum zum Beispiel beim Transport zu Tode kamen. Viele
                    Opfer bleiben damit namenslos. Unser Wissen über die Routen, Arbeitseinsätze und Haftbedingung der
                    Häftlinge verdanken wir vor allem den Berichten und Zeugnissen der Überlebenden.
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
                    <li>Randolph L. Braham (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1,
                        Evanston 2013.
                    </li>
                    <li>Manfred Grieger, „Rebstock\" und „Rebstock (Stephan)“ - zwei Außenlager im
                        Konzentrationslager-System
                        bei Marienthal und Dernau, August bis Dezember 1944, Mainz 2021.
                    </li>
                    <li>Hans Mommsen / Manfred Grieger, Das Volkswagenwerk im Dritten Reich, Düsseldorf 1996.</li>
                    <li>Dezső Schön, As örökség- Elbeszélések, Tel Aviv 1960.</li>
                    <li>Moshe Shen, Überleben war für uns KZ-Häftlinge eine Frage der Zeit, in: Dieter Landenberger /
                        Jens-Christian Gutzmann (Hrsg.), Überleben in Angst. Vier Juden berichten über ihre Zeit im
                        Volkswagenwerk in den Jahren 1943 bis 1945, Wolfsburg Ausgabe 2023.
                    </li>
                    <li>Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001.</li>
                    <li>Therkel Straede, Fallersleben (Volkswagenwerk), in: Geoffrey P. Megargee (Hrsg.), Encyclopedia
                        of
                        Camps and Ghettos, 1933–1945, Vol. I., Bloomington 2009, S. 1107-1108.
                    </li>
                    <li>Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager 1940-1945.
                        Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung,
                        Celle
                        2009.
                    </li>
                    <li>Stiftung niedersächsische Gedenkstätten (Hrsg.), Konzentrationslager Bergen-Belsen, online
                        unter:
                        <a href=\"https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945\">https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945</a>
                        (letzter Zugriff
                        10.07.2024)
                    </li>
                    <li>Jens-Christian Wagner (Hrsg.), Konzentrationslager Mittelbau-Dora 1943–1945. Begleitband zur
                        Ständigen Ausstellung in der KZ-Gedenkstätte Mittelbau-Dora, Göttingen 2007.
                    </li>
                    <li>Jens-Christian Wagner, NS-Untertageanlagen und Gedenkstättenarbeit: Erfahrungen aus
                        Mittelbau-Dora,
                        in: Gedenkstätten-Rundbrief, 147 (2009), Seite 5-13.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">Einen Überblick über das nationalsozialistische Zwangsarbeitssystem findet sich
                        bei: Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001. <a
                                href=\"#footnote1\">&uarr;</a></li>
                    <li id=\"endnote2\">Vgl. Jens-Christian Wagner, NS-Untertageanlagen und Gedenkstättenarbeit:
                        Erfahrungen aus Mittelbau-Dora, in: Gedenkstätten-Rundbrief, 147 (2009), S. 5-13. Eine
                        Diskussion des Begriffes „Vernichtung durch Arbeit“ findet sich bei Spoerer, Zwangsarbeit, S.
                        180-183.<a href=\"#footnote2\">&uarr;</a></li>
                    <li id=\"endnote3\">Vgl. Hans Mommsen / Manfred Grieger, Das Volkswagenwerk im Dritten Reich,
                        Düsseldorf 1996, S. 863-869. Eine Beschreibung aus der Sicht eines Überlebenden findet sich in:
                        Dezső Schön, As örökség- Elbeszélések, Tel Aviv 1960. <a href=\"#footnote3\">&uarr;</a></li>
                    <li id=\"endnote4\">Vgl. für eine Darstellung der Verfolgung und Deportation in Nagyvárad und Oradea:
                        Randolph L. Braham (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1,
                        Evanston 2013, S. 233-242, 505-523. <a href=\"#footnote4\">&uarr;</a></li>
                    <li id=\"endnote5\">Vgl. die Angabe der Muttersprachen und Berichte über die Zusammensetzung der
                        Gruppe in: VW-Konzernarchiv 67/149/1; Schön, As örökség. <a href=\"#footnote5\">&uarr;</a></li>
                    <li id=\"endnote6\">Vgl. Mommsen / Grieger, Volkswagenwerk, S. 864-866. <a
                                href=\"#footnote6\">&uarr;</a></li>
                    <li id=\"endnote7\">Vgl. Mommsen / Grieger, Volkswagenwerk. <a href=\"#footnote7\">&uarr;</a></li>
                    <li id=\"endnote8\">Vgl. Mommsen / Grieger, Volkswagenwerk. <a href=\"#footnote8\">&uarr;</a></li>
                    <li id=\"endnote9\">Vgl. Mommsen / Grieger, Volkswagenwerk, S. 865; VW-Konzernarchiv 67/149/1. <a
                                href=\"#footnote9\">&uarr;</a></li>
                    <li id=\"endnote10\">David Hollander: Interview 8342, Visual History Archive, USC Shoah Foundation
                        1995. <a href=\"#footnote10\">&uarr;</a></li>
                    <li id=\"endnote11\">Vgl. VW-Konzernarchiv 67/149/1. <a href=\"#footnote11\">&uarr;</a></li>
                    <li id=\"endnote12\">Vgl. VW-Konzernarchiv 67/65/1. <a href=\"#footnote12\">&uarr;</a></li>
                    <li id=\"endnote13\">Alex Rosenbaum: Interview 16411, Visual History Archive, USC Shoah Foundation
                        1996. <a href=\"#footnote13\">&uarr;</a></li>
                    <li id=\"endnote14\">Vgl. VW-Konzernarchiv 67/149/1; Grieger / Mommsen, Volkswagenwerk, S. 867. <a
                                href=\"#footnote14\">&uarr;</a></li>
                    <li id=\"endnote15\">Jens-Christian Wagner (Hrsg.), Konzentrationslager Mittelbau-Dora 1943–1945.
                        Begleitband zur Ständigen Ausstellung in der KZ-Gedenkstätte Mittelbau-Dora, Göttingen 2007. <a
                                href=\"#footnote15\">&uarr;</a></li>
                    <li id=\"endnote16\">Vgl. Schön, As örökség, 1960. <a href=\"#footnote16\">&uarr;</a></li>
                    <li id=\"endnote17\">Vgl. VW-Konzernarchiv 67/65/1. <a href=\"#footnote17\">&uarr;</a></li>
                    <li id=\"endnote18\">Vgl. Wagner, NS-Untertageanlagen, S. 9. <a href=\"#footnote18\">&uarr;</a></li>
                    <li id=\"endnote19\">Stephan Grant: Interview 14925, Visual History Archive, USC Shoah Foundation
                        1996; VW-Konzernarchiv 67/65/1; Schön, As örökség. <a href=\"#footnote19\">&uarr;</a></li>
                    <li id=\"endnote20\">Vgl. VW-Konzernarchiv 67/149/1; VW-Konzernarchiv 67/65/1. <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">Moshe Shen, Überleben war für uns KZ-Häftlinge eine Frage der Zeit, in: Dieter
                        Landenberger / Ulrike Gutzmann (Hrsg.), Überleben in Angst. Vier Juden berichten über ihre Zeit
                        im Volkswagenwerk in den Jahren 1943 bis 1945, Wolfsburg Ausgabe 2023, S. 31-32. <a
                                href=\"#footnote21\">&uarr;</a></li>
                    <li id=\"endnote22\">Vgl. Wagner, Konzentrationslager Mittelbau-Dora, S. 139ff. <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen, S. 238. <a
                                href=\"#footnote23\">&uarr;</a></li>
                    <li id=\"endnote24\">Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen, S. 238;
                        Stiftung niedersächsische Gedenkstätten (Hrsg.), Konzentrationslager Bergen-Belsen, unter: <a
                                href=\"https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945/\"
                                title=\"Website der Gedenkstätte Bergen Belsen\">https://bergen-belsen.stiftung-ng.de/de/geschichte/konzentrationslager-1943-1945/</a>
                        (letzter Zugriff 10.07.2024). <a href=\"#footnote24\">&uarr;</a></li>
                    <li id=\"endnote25\">Vgl. Shen, Überleben, S. 32. <a href=\"#footnote25\">&uarr;</a></li>
                    <li id=\"endnote26\">Vgl. Mommsen / Grieger, Volkswagenwerk. <a href=\"#footnote26\">&uarr;</a></li>
                    <li id=\"endnote27\">Vgl. Mommsen / Grieger, Volkswagenwerk, David Hollander: Interview 8342, Visual
                        History Archive, USC Shoah Foundation 1995; Bernat Roth Interview 9295, Visual History Archive,
                        USC Shoah Foundation 1995; Desider Davidovits: Interview 18755, Visual History Archive, USC
                        Shoah Foundation 1996; Mosche Friedman: Interview 18884, Visual History Archive, USC Shoah
                        Foundation 1996; Berti Burger: Interview 19539, Visual History Archive, USC Shoah Foundation
                        1996; ´eli`ezer Farḳash: Interview 25903, Visual History Archive, USC Shoah Foundation 1997;
                        Nikolay Lebovics: Interview 26340, Visual History Archive, USC Shoah Foundation 1997; Yitsḥaḳ
                        Shamir: Interview 32225, Visual History Archive, USC Shoah Foundation 1997; Ornan Lev-Ari:
                        Interview 34492, Visual History Archive, USC Shoah Foundation 1997; Yitsḥaḳ ´elefanṭ: Interview
                        38328, Visual History Archive, USC Shoah Foundation 1997; Yitsḥaḳ Dove´: Interview 44636, Visual
                        History Archive, USC Shoah Foundation 1998; George Moshe Stein: Interview 5756, Visual History
                        Archive, USC Shoah Foundation 1995; Zoltan Marek: Interview 1767, Visual History Archive, USC
                        Shoah Foundation 1995; Alex Rosenbaum: Interview 16411, Visual History Archive, USC Shoah
                        Foundation 1996; Ben-Zion Haas: Interview 26344, Visual History Archive, USC Shoah Foundation
                        1997; Stephan Grant: Interview 14925, Visual History Archive, USC Shoah Foundation 1996. <a
                                href=\"#footnote27\">&uarr;</a></li>
                    <li id=\"endnote28\">VW-Konzernarchiv 67/422/1; Zugeteilte Häftlingsnummern des KL Buchenwald für
                        Zugänge aus den KL Natzweiler (Außenlager Rebstock), 27.09.1944 und KL Dachau, 30.09.1944,
                        1.1.27.1 2257001, ITS Digital Archive, Arolsen Archives, online unter: <a
                                href=\"https://collections.arolsen-archives.org/de/search/topic/1-1-27-1_2257001?s=Rebstock\"
                                title=\"Sammlung Arolsen Archives\">https://collections.arolsen-archives.org/de/search/topic/1-1-27-1_2257001?s=Rebstock</a>
                            (letzter Zugriff: 19.7.2024). <a href=\"#footnote28\">&uarr;</a></li>
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
                    Louis Wörner: Facharbeiter für Volkswagen, in: Holocaust in Ungarn und Deportationen nach
                    Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_deportation_vw') }}. Lizenz: CC BY 4.0.
                </p>
            </div>
        </div>

    </div>

{% endblock %}", "studies/gruppe-der-300.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/studies/gruppe-der-300.html.twig");
    }
}