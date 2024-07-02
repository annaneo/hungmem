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

/* studies/study.html.twig */
class __TwigTemplate_159059b59ec408517eb1da56d3806dcf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/study.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/study.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "studies/study.html.twig", 1);
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
        yield "

    <div class=\"container mt-5 study\">
        <h2>Die 300er Gruppe bei Volkswagen</h2>
        <div class=\"row\">
            <div class=\"col-xl-8\">
                <p class=\"abstract\">
                    Über 13 Millionen Menschen wurden während des Zweiten Weltkrieges zu Zwangs- und Sklavenarbeit im
                    Deutschen Reich herangezogen. Die Aufrechterhaltung der Kriegswirtschaft war nur durch die
                    zwangsverpflichteten Arbeiterinnen und Arbeiter, Kriegsgefangene und Konzentrationslager-Häftlinge
                    möglich. Diese wurden in allen wirtschaftlichen Bereichen eingesetzt und gehörten mit
                    fortschreitendem Verlauf des Krieges zum sichtbaren Alltag im nationalsozialistischen Deutschland.
                    KZ-Häftlinge wurden dabei unter anderem in der Rüstungsindustrie eingesetzt, mit deren Verlagerung
                    unter Tage die Nationalsozialisten 1943 angesichts der alliierten Luftüberlegenheit begannen. Durch
                    die Produktion moderner Abfangjäger und Raketen in bombensicheren Stollen sollte die sich immer
                    klarer abzeichnende Kriegsniederlage abgewendet werden. Der Großteil der gigantomanischen Projekte
                    wurde dabei nie fertiggestellt, die meisten der Produktionsanlagen nie in Betrieb genommen. Die
                    Lebens- und Arbeitsbedingen für die KZ-Häftlinge waren dabei besonders hart und forderten tausende
                    Todesopfer. Insbesondere der Tod jüdischer Häftlinge war dabei im Rahmen einer „Vernichtung durch
                    Arbeit“ einkalkuliert. Die Überlebenschancen der Häftlinge hingen dabei nicht zuletzt vom
                    zugeteilten Arbeitskommando ab, Häftlinge die notwendige berufliche Qualifikationen aufwiesen oder
                    für ihre Arbeitskommandos länger eingearbeitet worden waren galten als weniger ersetzbar.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">300 Facharbeiter für Volkswagen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im ehemaligen Erzstollen im französischen Thil sollte eine unterirdische Produktionsstätte für
                    10.000 Arbeiter durch eine Tochterfirma von Volkswagen eingerichtet werden. Hierfür reiste im Juni
                    1944 der VW-Ingenieur Arthur Schmiele ins Konzentrations- und Vernichtungslager Auschwitz-Birkenau
                    um Arbeitskräfte unter den zuvor aus Ungarn deportierten jüdischen Häftlinge auszuwählen. Schmiele
                    stellte eine Gruppe von 500 und eine Gruppe von 300 Männern zusammen, die er nach einer Abfrage
                    einer beruflichen Qualifikation als Metallfacharbeiter und einer kurzen Eignungsprüfung auswählte.
                    In beiden Gruppen befanden sich dementsprechend viele Schlosser und einige Ingenieure, aber auch
                    Menschen aus anderen Berufen, die eine entsprechende Qualifikation vortäuschten. Trotz ihrer kurzen
                    Zeit in Auschwitz-Birkenau, hatten sie vermutlich erkannt, dass die Zuteilung in ein Arbeitskommando
                    außerhalb von Auschwitz eine größere Chance zum Überleben bot.
                </p>

                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Deportationsroute Gruppe der 300\"/>
                <p class=\"caption\">
                    Deportationsroute der „Gruppe der 300“
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Wer war in der 300er-Gruppe?</h4>
                    <p>
                        Die Häftlinge stammten vor allem aus Gebieten im Nordosten des heutigen Rumäniens. 1940 war
                        Rumänien durch das nationalsozialistische Deutschland und das faschistische Italien gezwungen
                        worden, diese Gebiete an Ungarn abzutreten. Nach der deutschen Besetzung Ungarns im März 1944
                        waren innerhalb kürzester Zeit Ghettos für die jüdische Bevölkerung eingerichtet, so auch im
                        damaligen Nagyvarad und Kolozsvar, dem heutigen Oradea und Cluj Napoca aus der viele der
                        Deportierten dieser Gruppe stammten. Bereits im Mai und Juni 1944 war die jüdische Bevölkerung
                        der beiden Ghettos dann ins Konzentrations- und Vernichtungslager Auschwitz-Birkenau deportiert
                        worden. Dort waren die Familien nach Geschlechtern voneinander getrennt worden und alle Alten,
                        Kranken oder Kinder sowie die Mütter und Schwangeren der Deportierten in den Gaskammern ermordet
                        worden. Lediglich die Häftlinge, die als arbeitsfähig genug eingestuft wurden, überlebten die
                        Selektion. Wie Überlebende berichten, war die aus diesen Transporte ausgewählte Gruppe sehr
                        vielfältig, einige hatten in ihren Elternhäusern Ungarisch, andere Rumänisch, Deutsch, Serbisch,
                        Jiddisch oder eine Kombination dieser Sprachen gesprochen. Teile der Gruppe waren sehr religiös,
                        für andere spielte Religion keine Rolle, einige hatten sogar christliche Familien, alle wurden
                        jedoch durch die Nationalsozialisten als Juden verfolgt. Einige waren bereits über fünfzig und
                        andere unter zwanzig, der jüngste war erst vierzehn Jahre alt. Mehreren Vätern gelang es,
                        gemeinsam mit ihren Söhnen in die Gruppe eingeteilt zu werden und auch andere Häftlinge waren
                        durch die gemeinsame Herkunftsregion bereits vorher miteinander bekannt oder verwandt.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Spezialisten im VW-Werk Fallersleben</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Während die 500er Gruppe direkt nach Thil deportiert wurde, wurde die 300er Gruppe zunächst in
                    Viehwagons ins VW-Werk nach Fallersleben deportiert, wo sie in der Montage der Fieseler 103 (V1)
                    Rakete ausgebildet wurden. Die Häftlinge mussten dabei täglich in zwölf Stunden Schichten arbeiten,
                    wobei sie alle zwei Wochen einen Tag frei bekamen. Zu dieser Zeit sahen sie kein Tageslicht, da sie
                    direkt im VW-Werk in ehemaligen Waschkauen im selben Gebäude untergebracht waren, in dem auch die
                    Produktion stattfand. Die Häftlinge wurden von den anderen Arbeitern und Arbeiterinnen isoliert und
                    hatten lediglich Kontakt mit ihren deutschen Vorarbeitern und dem Wachpersonal aus abkommandierten
                    Luftwaffensoldaten. Als vermeintliche Facharbeiter, sollten die 300 Männer die Kernbelegschaft der
                    neuen unterirdischen Produktionsstätte bilden und das von ihnen erworbene Wissen über die
                    Herstellung der Raketen geheim gehalten werden.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
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
                    heute im VW-Werk eine Erinnerungsstätte an die Zwangsarbeit auf dem Gelände.
                </p>
                <p>
                    Im Vergleich zu anderen KZ-Häftlingen wurde die Gruppe im VW-Werk verhältnismäßig gut versorgt. Auch
                    wenn sie keine neue Kleidung erhielten, waren sie durch ihre Unterkunft doch vor Witterung
                    geschützt. Und auch wenn die Lebensmittelrationen für die von ihnen verlangte Arbeit zu gering
                    angesetzt war, waren sie doch umfangreicher als in anderen Lagern. Die für viele Konzentrationslager
                    typischen Unterernährungserscheinungen, die auf Dauer häufig zum Tod der Häftlinge führten, blieben
                    in der 300er-Gruppe zunächst aus.
                </p>
                <p>
                    Aufgrund ihrer Ausbildung und vorgesehenen Funktion hatte die SS und VW zunächst ein Interesse am
                    vorläufigen Überleben der Häftlinge, dass sich jedoch nur auf die Dauer des Krieges und die damit
                    einhergehende Notwendigkeit unterirdischer V1-Produktion erstreckte. Überlebende bezeugen, wie aus
                    der Perspektive der Häftlinge gerade im Hinblick auf Auschwitz-Birkenau und die folgenden
                    Konzentrationslager die Zeit im Volkswagenwerk damit rückblickend noch erträglich schien.
                </p>
                <a href=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"map-gruppe-300\"
                   data-title=\"Bild 1\"><img class=\"gallery\" style=\"width: 15rem;\"
                                            src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                                            alt=\"Karte\"/></a>
                <a href=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"map-gruppe-300\"
                   data-title=\"Bild 2\"><img class=\"gallery\" style=\"width: 15rem;\"
                                            src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                                            alt=\"Karte\"/></a>

                <p class=\"caption\">
                    Bilduntertitel
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Deportationen und alliierter Vormarsch</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Ende Juni 1944 wurde bei einem alliierten Bombenangriff die Produktionsstätte der Gruppe zerstört.
                    Die Gruppe hatten den Angriff in einem Bunker überlebt und wurde nach einigen Tagen aus dem völlig
                    zerstörten Werk zu einer anderen Produktionsstätte im besetzten Frankreich deportiert. Auf ihrem Weg
                    in das Lager, dass sich im besetzten Lothringen befand, erfuhr die Gruppe von der alliierten Landung
                    in der Normandie. Die Bestätigung dieser Nachricht war laut dem Überlebende David Hollander „the
                    happiest moment“ – der glücklichste Moment – während seiner KZ-Haft. In Thil trafen sie auch wieder
                    auf die Gruppe der 500 Männer, die mit ihnen zusammen in Auschwitz-Birkenau ausgewählt worden waren.
                    Auch hier wurden die 300 Männer isoliert. Überlebende berichteten, dass sie ein eigenes
                    Barackenlager inklusive eines Krematoriums errichten mussten, dass durch einen Zaun von den anderen
                    Häftlingen getrennt war. Die Männer waren bei den Selektionen oft von Freunden und Verwandten
                    getrennt worden, die sie nun teilweise durch den Zaun wiedersahen. Kontaktaufnahmen wurden jedoch
                    streng verfolgt. Unter anderem der Überlebende Eliesar Farkas berichtet, dass ein Häftling in der
                    anderen Gruppe seinen Bruder wiedererkannt hatte und mit ihm am Zaun das Gespräch gesucht hatte,
                    woraufhin er erschossen worden sei . Dem Überlebenden Alex Rosenbaum gelang es hingegen heimlich
                    einige Worte mit seinem Vater im anderen Lager zu wechseln.
                </p>
                <p>
                    Da die Produktionsstätte in Thil noch nicht fertiggestellt war, wurden die Gruppe trotz ihrer
                    aufwendigen Ausbildung insbesondere für Räum- und Bauarbeiten eingesetzt. Dabei kam die Gruppe auch
                    regelmäßig in ein nahegelegenes französisches Dorf. Dort gelang es Häftlingen trotz der Bewachung,
                    Kontakt mit der französischen Zivilbevölkerung und der französischen Widerstandsbewegung, der
                    Résistance, aufzunehmen. Überlebende wie zum Beispiel Pal Arie bezeugten, dass ein Häftling mithilfe
                    der französischen Résistance sogar fliehen konnte und durch die Frontlinien zur US-Army gebracht
                    wurde, der er von der V1-Produktion berichten konnte. Ende August konnte die US-Army Paris befreien.
                    Lange bevor die Produktion in Thil beginnen konnte, wurde das Außenlager deshalb angesichts der sich
                    nähernden Alliierten Anfang September 1944 geräumt.
                </p>
                <p>
                    Die Gruppe wurde daraufhin zunächst in das Außenlager Rebstock des KZ Buchenwald verlegt. Auch hier
                    sollte eine unterirdische Produktionsstätte errichtet werden, die aber ebenfalls niemals in die
                    Produktion ging. Die Gruppe war zuvor erneut auf dreihundert aufgestockt worden um den ermordeten
                    sowie den geflohenen Häftling zu ersetzen. Bereits Ende September wurde die Gruppe erneut
                    deportiert, diesmal ins KZ Mittelbau-Dora. Aufgrund von Luftangriffen war der Transport mehrere Tage
                    unterwegs und hielt wahrscheinlich auch einige Zeit in zivilen Bahnhöfen.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Mittelbau-Dora</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Mittelbau-Dora war im August 1943 ursprünglich als ein Außenlager des KZ Buchenwald im
                        Zuge der Untertageverlagerung der Rüstungsindustrie eingerichtet worden. Im Oktober 1944 wurde
                        es zu einem eigenständigen KZ erklärt. Eine nach dem Krieg gemachte Aufstellung geht davon aus,
                        dass Anfang November 1944 bereits 13.796 Häftlinge im Stammlager des Konzentrationslager
                        Mittelbau-Dora inhaftiert waren. Insgesamt waren während seines Bestehens mindesten 60.000
                        Häftlinge in Mittelbau-Dora – Stammlager und Außenlager – inhaftiert, wobei mindestens 20.000
                        durch die Arbeitsbedingungen und die Gewalt des Wachpersonals ermordet wurden. Heute befindet
                        sich am Ort des ehemaligen Konzentrationslagers eine Gedenkstätte.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Untertageproduktion im KZ Mittelbau-Dora</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Viele Häftlinge der 300er-Gruppe überlebten die Zeit in Mittelbau-Dora nicht. Anders als zuvor wurde
                    die Gruppe hier nicht mehr isoliert, vor allem aber auch nicht mehr besser versorgt. Viele
                    Überlebende berichteten über den unaufhaltsamen Gewichtsverlust, der angesichts der bald erhofften
                    Befreiung ein Wettlauf mit der Zeit bedeutete. In einem nach dem Krieg erschienenen Bericht seiner
                    Haftzeit beschreit der Überlebende Deszö Schön, dass er seinen Sohn Moshe wöchentlich wog, um den
                    Gewichtsverlust zu dokumentieren. Viele der überlebenden Häftlinge wogen bei ihrer Befreiung nur
                    wenig über 30 Kilo.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Deportationsroute Gruppe der 300\"/>
                <p class=\"caption\">
                    Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora, Mai 1946, online unter:
                    https://fotoarchiv.dora.de/detail/2595; Originale in: D-Day Museum, Portsmouth.
                </p>
                <p>
                    Anders als andere Produktionsstätten konnte aufgrund des bereits bestehenden Tunnelsystems im KZ
                    Mittelbau-Dora die unterirdische Produktion aufgenommen werden. Auch die Häftlinge der 300er-Gruppe
                    wurden in den unterirdischen Produktionsanlagen eingesetzt. Die Erwartungen der NS-Führung an eine
                    den Kriegsverlauf zugunsten der Deutschen beeinflussende „Wunderwaffe“ konnte die Produktion jedoch
                    nicht erfüllen, die geplanten monatlichen Produktionszahlen konnten nie erreicht werden. Die vor
                    allem durch verhungernde KZ-Häftlinge produzierten Raketen konnten außerdem zu fast einem Drittel
                    nicht eingesetzt werden. Von Bedeutung war hierbei nicht zuletzt der Widerstand der Häftlinge.
                    Überlebende der 300er-Gruppe berichteten, dass es auch zwei jungen Gruppenmitgliedern gelungen war,
                    die Raketenproduktion über längere Zeit unentdeckt zu sabotieren und die Raketen funktionsuntüchtig
                    zu machen.
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
                    Häftlinge der 300er-Gruppe zusammen mit tausenden anderen Häftlingen aus Mittelbau-Dora. Abgesehen
                    von denjenigen Häftlingen, die bereits zu geschwächt oder krank waren, wurden die Häftlinge der
                    Gruppe mit Güter- und Viehwagons ins Konzentrationslager Bergen-Belsen deportiert. Die schon
                    geschwächten Häftlinge wurden während des mehrtätigen Transports nicht versorgt, so dass ein
                    Großteil von ihnen die Fahrt nicht überlebte. Der Überlebende Moshe Shen bezeugte, dass in seinem
                    Wagon 100 Menschen untergebracht gewesen waren, von denen nur 20 die zehntägige Fahrt überlebt
                    hätten. Schätzungen gehen davon aus, dass bis zu 8.000 Häftlinge die Räumungstransporte und
                    Todesmärsche aus Mittelbau-Dora nicht überlebten.
                </p>
                <p>
                    Die Versorgungssituation in Bergen-Belsen war katastrophal, so dass hier wahrscheinlich weitere
                    Häftlinge der 300er-Gruppe durch die Haftbedingungen ermordet wurden. Die überlebenden Häftlinge des
                    Konzentrationslagers Bergen-Belsen wurden jedoch am 15. April 1945 von britischen Truppen befreit,
                    die das Konzentrationslager kampflos übernahmen.
                </p>
                <p>
                    Bei der Befreiung fanden die Alliierten über 53.000 verhungernde und unzählige bereits tote
                    Häftlinge vor. Viele Tausend starben auch nach der Befreiung noch an den Folgen der Haft. Allein bis
                    Juni 1945 verloren 14.000 ehemalige Häftlinge aus Bergen-Belsen ihr Leben. Die britischen Truppen
                    waren auf die katastrophalen Zustände, die sie in Bergen-Belsen vorfanden, nicht vorbereitet. Viele
                    Häftlinge starben nicht zuletzt, da ihre verhungernden Mägen die von den britischen Soldaten zu
                    Beginn großzügig verteilten Lebensmittel nicht vertrugen. Erst nach einigen Tagen traf die
                    notwendige Schonkost ein. Der Überlebende Moshe Shen erinnerte sich, dass er bei der Befreiung zu
                    geschwächt war, um den Briten entgegenzugehen und die verteilten Lebensmittel entgegenzunehmen, was
                    ihm wohl das Leben rettete.
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
                        Das KZ Bergen-Belsen war 1943 zunächst zur Unterbringung von Jüdinnen und Juden gegründet
                        worden, die gegen deutsche Zivilpersonen im alliierten Gewahrsam ausgetauscht werden sollten.
                        Schnell wurden ihm jedoch weitere Funktionen zugewiesen. Ab Ende 1944 wurde das KZ Bergen-Belsen
                        zum Ziel vieler Todesmärsche und Räumungstransport aus den frontnahen Konzentrationslagern.
                        Allein zwischen Dezember 1944 bis Mitte April 1945 kamen so zusätzlich 85.000 Häftlinge nach
                        Bergen-Belsen, so dass das Lager schnell völlig überbelegt war. Die Häftlinge wurden in Baracken
                        untergebracht, die für diese hohe Zahl an Insassen nicht ausgelegt waren. Auch die
                        Versorgungssituation war katastrophal. Unter diesen Umständen kam es zu einem Ausbruch einer
                        Typhus- und Fleckfieberepidemie, die von der SS kaum bekämpft wurde. Das Konzentrationslager
                        Bergen-Belsen wurde zu einem Sterbelager. Die etwa 15.000 Häftlinge aus Mittelbau-Dora, die noch
                        im April 1945 in Bergen-Belsen eintrafen, wurden in ehemaligen Wehrmachtskasernen untergebracht.
                        Am Standort des ehemaligen Konzentrationslagers befindet sich heute eine Gedenkstätte. </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Der Einsatz von KZ-Häftlingen in der Rüstungsindustrie und die Verhandlungen zwischen der SS
                    Wirtschaftsunternehmen wie Volkswagen sind gut dokumentiert. Für die 300er-Gruppe sind jedoch nur
                    wenig Dokumente der sie betreffenden bürokratischen Vorgänge erhalten geblieben. Das Wissen über
                    diese Gruppen stammt überwiegend aus den Berichten der Überlebenden, die vor allem im Zuge eines
                    Forschungsprojektes zur Geschichte des Volkswagenkonzerns und durch Videointerviews der USC Shoah
                    Foundation ab den 1980er Jahren entstanden. Informationen über die Verwaltungsstruktur sowie
                    Zuständigkeiten für das Außenlager im Volkswagenwerk sind deshalb sehr begrenzt. Erhalten geblieben
                    ist lediglich die Kopie einer Häftlingsliste, die der überlebende Häftling Dezsö Schön heimlich
                    angefertigt und mitgeführt hatte. Erhalten ist zudem eine Zugangsliste des Außenlagers Rebstock, die
                    ebenfalls die Häftlingsdaten enthält.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 325
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
                    Berufen der Personen. Der Beruf des Journalisten Dezsö Schön ist etwa mit „Monteur“ angegeben. Auch
                    Geburtsdaten sind teilweise bewusst falsch angegeben worden, um der Ermordung durch die SS zu
                    entgehen. Moshe Shen, der Sohn von Dezsö Schön, hatte sich als 20-Jähriger ausgegeben, obwohl er
                    eigentlich erst 14 war, um als arbeitsfähig eingestuft zu werden. Die Listen wurden zudem in der
                    Regel von anderen Häftlingen geführt, die in der Verwaltung eingesetzt wurden. Diese Häftlinge
                    sprachen oft kein ungarisch und waren ebenfalls den unmenschlichen Haftbedingungen unterworfen, die
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
        return "studies/study.html.twig";
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
        return array (  430 => 325,  327 => 225,  242 => 143,  236 => 140,  231 => 138,  225 => 135,  136 => 49,  92 => 7,  82 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Fallstudie | {{ parent() }} {% endblock %}


{% block body %}


    <div class=\"container mt-5 study\">
        <h2>Die 300er Gruppe bei Volkswagen</h2>
        <div class=\"row\">
            <div class=\"col-xl-8\">
                <p class=\"abstract\">
                    Über 13 Millionen Menschen wurden während des Zweiten Weltkrieges zu Zwangs- und Sklavenarbeit im
                    Deutschen Reich herangezogen. Die Aufrechterhaltung der Kriegswirtschaft war nur durch die
                    zwangsverpflichteten Arbeiterinnen und Arbeiter, Kriegsgefangene und Konzentrationslager-Häftlinge
                    möglich. Diese wurden in allen wirtschaftlichen Bereichen eingesetzt und gehörten mit
                    fortschreitendem Verlauf des Krieges zum sichtbaren Alltag im nationalsozialistischen Deutschland.
                    KZ-Häftlinge wurden dabei unter anderem in der Rüstungsindustrie eingesetzt, mit deren Verlagerung
                    unter Tage die Nationalsozialisten 1943 angesichts der alliierten Luftüberlegenheit begannen. Durch
                    die Produktion moderner Abfangjäger und Raketen in bombensicheren Stollen sollte die sich immer
                    klarer abzeichnende Kriegsniederlage abgewendet werden. Der Großteil der gigantomanischen Projekte
                    wurde dabei nie fertiggestellt, die meisten der Produktionsanlagen nie in Betrieb genommen. Die
                    Lebens- und Arbeitsbedingen für die KZ-Häftlinge waren dabei besonders hart und forderten tausende
                    Todesopfer. Insbesondere der Tod jüdischer Häftlinge war dabei im Rahmen einer „Vernichtung durch
                    Arbeit“ einkalkuliert. Die Überlebenschancen der Häftlinge hingen dabei nicht zuletzt vom
                    zugeteilten Arbeitskommando ab, Häftlinge die notwendige berufliche Qualifikationen aufwiesen oder
                    für ihre Arbeitskommandos länger eingearbeitet worden waren galten als weniger ersetzbar.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">300 Facharbeiter für Volkswagen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Im ehemaligen Erzstollen im französischen Thil sollte eine unterirdische Produktionsstätte für
                    10.000 Arbeiter durch eine Tochterfirma von Volkswagen eingerichtet werden. Hierfür reiste im Juni
                    1944 der VW-Ingenieur Arthur Schmiele ins Konzentrations- und Vernichtungslager Auschwitz-Birkenau
                    um Arbeitskräfte unter den zuvor aus Ungarn deportierten jüdischen Häftlinge auszuwählen. Schmiele
                    stellte eine Gruppe von 500 und eine Gruppe von 300 Männern zusammen, die er nach einer Abfrage
                    einer beruflichen Qualifikation als Metallfacharbeiter und einer kurzen Eignungsprüfung auswählte.
                    In beiden Gruppen befanden sich dementsprechend viele Schlosser und einige Ingenieure, aber auch
                    Menschen aus anderen Berufen, die eine entsprechende Qualifikation vortäuschten. Trotz ihrer kurzen
                    Zeit in Auschwitz-Birkenau, hatten sie vermutlich erkannt, dass die Zuteilung in ein Arbeitskommando
                    außerhalb von Auschwitz eine größere Chance zum Überleben bot.
                </p>

                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Deportationsroute Gruppe der 300\"/>
                <p class=\"caption\">
                    Deportationsroute der „Gruppe der 300“
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Wer war in der 300er-Gruppe?</h4>
                    <p>
                        Die Häftlinge stammten vor allem aus Gebieten im Nordosten des heutigen Rumäniens. 1940 war
                        Rumänien durch das nationalsozialistische Deutschland und das faschistische Italien gezwungen
                        worden, diese Gebiete an Ungarn abzutreten. Nach der deutschen Besetzung Ungarns im März 1944
                        waren innerhalb kürzester Zeit Ghettos für die jüdische Bevölkerung eingerichtet, so auch im
                        damaligen Nagyvarad und Kolozsvar, dem heutigen Oradea und Cluj Napoca aus der viele der
                        Deportierten dieser Gruppe stammten. Bereits im Mai und Juni 1944 war die jüdische Bevölkerung
                        der beiden Ghettos dann ins Konzentrations- und Vernichtungslager Auschwitz-Birkenau deportiert
                        worden. Dort waren die Familien nach Geschlechtern voneinander getrennt worden und alle Alten,
                        Kranken oder Kinder sowie die Mütter und Schwangeren der Deportierten in den Gaskammern ermordet
                        worden. Lediglich die Häftlinge, die als arbeitsfähig genug eingestuft wurden, überlebten die
                        Selektion. Wie Überlebende berichten, war die aus diesen Transporte ausgewählte Gruppe sehr
                        vielfältig, einige hatten in ihren Elternhäusern Ungarisch, andere Rumänisch, Deutsch, Serbisch,
                        Jiddisch oder eine Kombination dieser Sprachen gesprochen. Teile der Gruppe waren sehr religiös,
                        für andere spielte Religion keine Rolle, einige hatten sogar christliche Familien, alle wurden
                        jedoch durch die Nationalsozialisten als Juden verfolgt. Einige waren bereits über fünfzig und
                        andere unter zwanzig, der jüngste war erst vierzehn Jahre alt. Mehreren Vätern gelang es,
                        gemeinsam mit ihren Söhnen in die Gruppe eingeteilt zu werden und auch andere Häftlinge waren
                        durch die gemeinsame Herkunftsregion bereits vorher miteinander bekannt oder verwandt.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Spezialisten im VW-Werk Fallersleben</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Während die 500er Gruppe direkt nach Thil deportiert wurde, wurde die 300er Gruppe zunächst in
                    Viehwagons ins VW-Werk nach Fallersleben deportiert, wo sie in der Montage der Fieseler 103 (V1)
                    Rakete ausgebildet wurden. Die Häftlinge mussten dabei täglich in zwölf Stunden Schichten arbeiten,
                    wobei sie alle zwei Wochen einen Tag frei bekamen. Zu dieser Zeit sahen sie kein Tageslicht, da sie
                    direkt im VW-Werk in ehemaligen Waschkauen im selben Gebäude untergebracht waren, in dem auch die
                    Produktion stattfand. Die Häftlinge wurden von den anderen Arbeitern und Arbeiterinnen isoliert und
                    hatten lediglich Kontakt mit ihren deutschen Vorarbeitern und dem Wachpersonal aus abkommandierten
                    Luftwaffensoldaten. Als vermeintliche Facharbeiter, sollten die 300 Männer die Kernbelegschaft der
                    neuen unterirdischen Produktionsstätte bilden und das von ihnen erworbene Wissen über die
                    Herstellung der Raketen geheim gehalten werden.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
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
                    heute im VW-Werk eine Erinnerungsstätte an die Zwangsarbeit auf dem Gelände.
                </p>
                <p>
                    Im Vergleich zu anderen KZ-Häftlingen wurde die Gruppe im VW-Werk verhältnismäßig gut versorgt. Auch
                    wenn sie keine neue Kleidung erhielten, waren sie durch ihre Unterkunft doch vor Witterung
                    geschützt. Und auch wenn die Lebensmittelrationen für die von ihnen verlangte Arbeit zu gering
                    angesetzt war, waren sie doch umfangreicher als in anderen Lagern. Die für viele Konzentrationslager
                    typischen Unterernährungserscheinungen, die auf Dauer häufig zum Tod der Häftlinge führten, blieben
                    in der 300er-Gruppe zunächst aus.
                </p>
                <p>
                    Aufgrund ihrer Ausbildung und vorgesehenen Funktion hatte die SS und VW zunächst ein Interesse am
                    vorläufigen Überleben der Häftlinge, dass sich jedoch nur auf die Dauer des Krieges und die damit
                    einhergehende Notwendigkeit unterirdischer V1-Produktion erstreckte. Überlebende bezeugen, wie aus
                    der Perspektive der Häftlinge gerade im Hinblick auf Auschwitz-Birkenau und die folgenden
                    Konzentrationslager die Zeit im Volkswagenwerk damit rückblickend noch erträglich schien.
                </p>
                <a href=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                   data-lightbox=\"map-gruppe-300\"
                   data-title=\"Bild 1\"><img class=\"gallery\" style=\"width: 15rem;\"
                                            src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                                            alt=\"Karte\"/></a>
                <a href=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                   data-lightbox=\"map-gruppe-300\"
                   data-title=\"Bild 2\"><img class=\"gallery\" style=\"width: 15rem;\"
                                            src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                                            alt=\"Karte\"/></a>

                <p class=\"caption\">
                    Bilduntertitel
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Deportationen und alliierter Vormarsch</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Ende Juni 1944 wurde bei einem alliierten Bombenangriff die Produktionsstätte der Gruppe zerstört.
                    Die Gruppe hatten den Angriff in einem Bunker überlebt und wurde nach einigen Tagen aus dem völlig
                    zerstörten Werk zu einer anderen Produktionsstätte im besetzten Frankreich deportiert. Auf ihrem Weg
                    in das Lager, dass sich im besetzten Lothringen befand, erfuhr die Gruppe von der alliierten Landung
                    in der Normandie. Die Bestätigung dieser Nachricht war laut dem Überlebende David Hollander „the
                    happiest moment“ – der glücklichste Moment – während seiner KZ-Haft. In Thil trafen sie auch wieder
                    auf die Gruppe der 500 Männer, die mit ihnen zusammen in Auschwitz-Birkenau ausgewählt worden waren.
                    Auch hier wurden die 300 Männer isoliert. Überlebende berichteten, dass sie ein eigenes
                    Barackenlager inklusive eines Krematoriums errichten mussten, dass durch einen Zaun von den anderen
                    Häftlingen getrennt war. Die Männer waren bei den Selektionen oft von Freunden und Verwandten
                    getrennt worden, die sie nun teilweise durch den Zaun wiedersahen. Kontaktaufnahmen wurden jedoch
                    streng verfolgt. Unter anderem der Überlebende Eliesar Farkas berichtet, dass ein Häftling in der
                    anderen Gruppe seinen Bruder wiedererkannt hatte und mit ihm am Zaun das Gespräch gesucht hatte,
                    woraufhin er erschossen worden sei . Dem Überlebenden Alex Rosenbaum gelang es hingegen heimlich
                    einige Worte mit seinem Vater im anderen Lager zu wechseln.
                </p>
                <p>
                    Da die Produktionsstätte in Thil noch nicht fertiggestellt war, wurden die Gruppe trotz ihrer
                    aufwendigen Ausbildung insbesondere für Räum- und Bauarbeiten eingesetzt. Dabei kam die Gruppe auch
                    regelmäßig in ein nahegelegenes französisches Dorf. Dort gelang es Häftlingen trotz der Bewachung,
                    Kontakt mit der französischen Zivilbevölkerung und der französischen Widerstandsbewegung, der
                    Résistance, aufzunehmen. Überlebende wie zum Beispiel Pal Arie bezeugten, dass ein Häftling mithilfe
                    der französischen Résistance sogar fliehen konnte und durch die Frontlinien zur US-Army gebracht
                    wurde, der er von der V1-Produktion berichten konnte. Ende August konnte die US-Army Paris befreien.
                    Lange bevor die Produktion in Thil beginnen konnte, wurde das Außenlager deshalb angesichts der sich
                    nähernden Alliierten Anfang September 1944 geräumt.
                </p>
                <p>
                    Die Gruppe wurde daraufhin zunächst in das Außenlager Rebstock des KZ Buchenwald verlegt. Auch hier
                    sollte eine unterirdische Produktionsstätte errichtet werden, die aber ebenfalls niemals in die
                    Produktion ging. Die Gruppe war zuvor erneut auf dreihundert aufgestockt worden um den ermordeten
                    sowie den geflohenen Häftling zu ersetzen. Bereits Ende September wurde die Gruppe erneut
                    deportiert, diesmal ins KZ Mittelbau-Dora. Aufgrund von Luftangriffen war der Transport mehrere Tage
                    unterwegs und hielt wahrscheinlich auch einige Zeit in zivilen Bahnhöfen.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Das KZ Mittelbau-Dora</h4>
                    <p style=\"font-size: 0.9rem;\">
                        Das KZ Mittelbau-Dora war im August 1943 ursprünglich als ein Außenlager des KZ Buchenwald im
                        Zuge der Untertageverlagerung der Rüstungsindustrie eingerichtet worden. Im Oktober 1944 wurde
                        es zu einem eigenständigen KZ erklärt. Eine nach dem Krieg gemachte Aufstellung geht davon aus,
                        dass Anfang November 1944 bereits 13.796 Häftlinge im Stammlager des Konzentrationslager
                        Mittelbau-Dora inhaftiert waren. Insgesamt waren während seines Bestehens mindesten 60.000
                        Häftlinge in Mittelbau-Dora – Stammlager und Außenlager – inhaftiert, wobei mindestens 20.000
                        durch die Arbeitsbedingungen und die Gewalt des Wachpersonals ermordet wurden. Heute befindet
                        sich am Ort des ehemaligen Konzentrationslagers eine Gedenkstätte.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Untertageproduktion im KZ Mittelbau-Dora</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Viele Häftlinge der 300er-Gruppe überlebten die Zeit in Mittelbau-Dora nicht. Anders als zuvor wurde
                    die Gruppe hier nicht mehr isoliert, vor allem aber auch nicht mehr besser versorgt. Viele
                    Überlebende berichteten über den unaufhaltsamen Gewichtsverlust, der angesichts der bald erhofften
                    Befreiung ein Wettlauf mit der Zeit bedeutete. In einem nach dem Krieg erschienenen Bericht seiner
                    Haftzeit beschreit der Überlebende Deszö Schön, dass er seinen Sohn Moshe wöchentlich wog, um den
                    Gewichtsverlust zu dokumentieren. Viele der überlebenden Häftlinge wogen bei ihrer Befreiung nur
                    wenig über 30 Kilo.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Deportationsroute Gruppe der 300\"/>
                <p class=\"caption\">
                    Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora, Mai 1946, online unter:
                    https://fotoarchiv.dora.de/detail/2595; Originale in: D-Day Museum, Portsmouth.
                </p>
                <p>
                    Anders als andere Produktionsstätten konnte aufgrund des bereits bestehenden Tunnelsystems im KZ
                    Mittelbau-Dora die unterirdische Produktion aufgenommen werden. Auch die Häftlinge der 300er-Gruppe
                    wurden in den unterirdischen Produktionsanlagen eingesetzt. Die Erwartungen der NS-Führung an eine
                    den Kriegsverlauf zugunsten der Deutschen beeinflussende „Wunderwaffe“ konnte die Produktion jedoch
                    nicht erfüllen, die geplanten monatlichen Produktionszahlen konnten nie erreicht werden. Die vor
                    allem durch verhungernde KZ-Häftlinge produzierten Raketen konnten außerdem zu fast einem Drittel
                    nicht eingesetzt werden. Von Bedeutung war hierbei nicht zuletzt der Widerstand der Häftlinge.
                    Überlebende der 300er-Gruppe berichteten, dass es auch zwei jungen Gruppenmitgliedern gelungen war,
                    die Raketenproduktion über längere Zeit unentdeckt zu sabotieren und die Raketen funktionsuntüchtig
                    zu machen.
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
                    Häftlinge der 300er-Gruppe zusammen mit tausenden anderen Häftlingen aus Mittelbau-Dora. Abgesehen
                    von denjenigen Häftlingen, die bereits zu geschwächt oder krank waren, wurden die Häftlinge der
                    Gruppe mit Güter- und Viehwagons ins Konzentrationslager Bergen-Belsen deportiert. Die schon
                    geschwächten Häftlinge wurden während des mehrtätigen Transports nicht versorgt, so dass ein
                    Großteil von ihnen die Fahrt nicht überlebte. Der Überlebende Moshe Shen bezeugte, dass in seinem
                    Wagon 100 Menschen untergebracht gewesen waren, von denen nur 20 die zehntägige Fahrt überlebt
                    hätten. Schätzungen gehen davon aus, dass bis zu 8.000 Häftlinge die Räumungstransporte und
                    Todesmärsche aus Mittelbau-Dora nicht überlebten.
                </p>
                <p>
                    Die Versorgungssituation in Bergen-Belsen war katastrophal, so dass hier wahrscheinlich weitere
                    Häftlinge der 300er-Gruppe durch die Haftbedingungen ermordet wurden. Die überlebenden Häftlinge des
                    Konzentrationslagers Bergen-Belsen wurden jedoch am 15. April 1945 von britischen Truppen befreit,
                    die das Konzentrationslager kampflos übernahmen.
                </p>
                <p>
                    Bei der Befreiung fanden die Alliierten über 53.000 verhungernde und unzählige bereits tote
                    Häftlinge vor. Viele Tausend starben auch nach der Befreiung noch an den Folgen der Haft. Allein bis
                    Juni 1945 verloren 14.000 ehemalige Häftlinge aus Bergen-Belsen ihr Leben. Die britischen Truppen
                    waren auf die katastrophalen Zustände, die sie in Bergen-Belsen vorfanden, nicht vorbereitet. Viele
                    Häftlinge starben nicht zuletzt, da ihre verhungernden Mägen die von den britischen Soldaten zu
                    Beginn großzügig verteilten Lebensmittel nicht vertrugen. Erst nach einigen Tagen traf die
                    notwendige Schonkost ein. Der Überlebende Moshe Shen erinnerte sich, dass er bei der Befreiung zu
                    geschwächt war, um den Briten entgegenzugehen und die verteilten Lebensmittel entgegenzunehmen, was
                    ihm wohl das Leben rettete.
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
                        Das KZ Bergen-Belsen war 1943 zunächst zur Unterbringung von Jüdinnen und Juden gegründet
                        worden, die gegen deutsche Zivilpersonen im alliierten Gewahrsam ausgetauscht werden sollten.
                        Schnell wurden ihm jedoch weitere Funktionen zugewiesen. Ab Ende 1944 wurde das KZ Bergen-Belsen
                        zum Ziel vieler Todesmärsche und Räumungstransport aus den frontnahen Konzentrationslagern.
                        Allein zwischen Dezember 1944 bis Mitte April 1945 kamen so zusätzlich 85.000 Häftlinge nach
                        Bergen-Belsen, so dass das Lager schnell völlig überbelegt war. Die Häftlinge wurden in Baracken
                        untergebracht, die für diese hohe Zahl an Insassen nicht ausgelegt waren. Auch die
                        Versorgungssituation war katastrophal. Unter diesen Umständen kam es zu einem Ausbruch einer
                        Typhus- und Fleckfieberepidemie, die von der SS kaum bekämpft wurde. Das Konzentrationslager
                        Bergen-Belsen wurde zu einem Sterbelager. Die etwa 15.000 Häftlinge aus Mittelbau-Dora, die noch
                        im April 1945 in Bergen-Belsen eintrafen, wurden in ehemaligen Wehrmachtskasernen untergebracht.
                        Am Standort des ehemaligen Konzentrationslagers befindet sich heute eine Gedenkstätte. </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Der Einsatz von KZ-Häftlingen in der Rüstungsindustrie und die Verhandlungen zwischen der SS
                    Wirtschaftsunternehmen wie Volkswagen sind gut dokumentiert. Für die 300er-Gruppe sind jedoch nur
                    wenig Dokumente der sie betreffenden bürokratischen Vorgänge erhalten geblieben. Das Wissen über
                    diese Gruppen stammt überwiegend aus den Berichten der Überlebenden, die vor allem im Zuge eines
                    Forschungsprojektes zur Geschichte des Volkswagenkonzerns und durch Videointerviews der USC Shoah
                    Foundation ab den 1980er Jahren entstanden. Informationen über die Verwaltungsstruktur sowie
                    Zuständigkeiten für das Außenlager im Volkswagenwerk sind deshalb sehr begrenzt. Erhalten geblieben
                    ist lediglich die Kopie einer Häftlingsliste, die der überlebende Häftling Dezsö Schön heimlich
                    angefertigt und mitgeführt hatte. Erhalten ist zudem eine Zugangsliste des Außenlagers Rebstock, die
                    ebenfalls die Häftlingsdaten enthält.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
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
                    Berufen der Personen. Der Beruf des Journalisten Dezsö Schön ist etwa mit „Monteur“ angegeben. Auch
                    Geburtsdaten sind teilweise bewusst falsch angegeben worden, um der Ermordung durch die SS zu
                    entgehen. Moshe Shen, der Sohn von Dezsö Schön, hatte sich als 20-Jähriger ausgegeben, obwohl er
                    eigentlich erst 14 war, um als arbeitsfähig eingestuft zu werden. Die Listen wurden zudem in der
                    Regel von anderen Häftlingen geführt, die in der Verwaltung eingesetzt wurden. Diese Häftlinge
                    sprachen oft kein ungarisch und waren ebenfalls den unmenschlichen Haftbedingungen unterworfen, die
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

{% endblock %}", "studies/study.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/studies/study.html.twig");
    }
}
