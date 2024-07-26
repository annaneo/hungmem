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

/* studies/salzwedel.html.twig */
class __TwigTemplate_57ca88c14c1d2b9e9e951b0e4bdd63bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/salzwedel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/salzwedel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "studies/salzwedel.html.twig", 1);
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

        yield " Fallstudie Salzwedel | ";
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
        yield from         $this->loadTemplate("elements/navigation-deportationen.html.twig", "studies/salzwedel.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container g-4 py-5 study\">
        <h2>Die Befreiung des Außenlagers Salzwedel</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2 abstract\">
                <p>
                    Bereits vor dem Beginn des Zweiten Weltkrieges hatten die Nationalsozialisten mit dem forcierten
                    Ausbau der deutschen Rüstungsindustrie begonnen. So waren allein von 1933 bis 1938 die
                    Rüstungsausgaben von vier Prozent auf über die Hälfte des Staatshaushaltes gestiegen. Von diesem
                    Rüstungsboom profitierten die deutschen Rüstungsunternehmen, die jedoch zunehmend mit einem Mangel
                    an Arbeitskräften konfrontiert waren.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    Ab 1942 begannen die Nationalsozialsten, auch KZ-Gefangenen in
                    der deutschen Kriegsindustrie einzusetzen. Ab 1944 wurden hierzu auch Häftlinge aus den
                    Konzentrations- und Vernichtungslagern im deutsch-besetzten Osteuropa an Industriestandorte ins
                    Deutsche Reich deportiert. Die KZ-Häftlinge wurden in eigenen Lagern untergebracht, deren Bewachung
                    weiterhin durch die SS organisiert wurde, die auch für die Arbeit der Häftlinge bezahlt wurde. Die
                    Zwangsarbeit stellte für die Betriebe eine profitable Möglichkeit der Ertragsteigerung da, die mit
                    der maximalen Ausbeutung der Arbeitskraft der unterernährten und ungeschützten Häftlinge einherging.
                    <sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
                <p>
                    Als die Rüstungsproduktion 1944 ihren Höhepunkt erreichte, waren insgesamt 5,7 Millionen
                    ausländische Zivilarbeiter, 1,9 Millionen Kriegsgefangene und etwa 400.000 KZ-Häftlinge an
                    Produktionsstandorten im Deutschen Reich tätig und stellten knapp ein Viertel der
                    Beschäftigten.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup> Mit
                    dem Vorrücken der Alliierten versuchten viele Rüstungsunternehmen sich der Häftlinge wieder zu
                    entledigen, nicht zuletzt um ihre Nachkriegsposition nicht zu gefährden. Die Räumung der Lager und
                    der Abtransport der Häftlinge verlief dabei nicht einheitlich und war durch unterschiedliche
                    Interessen der NS-Institutionen und die unübersichtliche Lage der letzten Kriegsmonate
                    gekennzeichnet.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit in Salzwedel</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Draht- und Metallwarenfabrik in Salzwedel profitierte ebenfalls vom Deutschen Rüstungsboom,
                    bereits 1937 war sie mit 600 Beschäftigten der größte Industriebetrieb in Salzwedel. Auch hier wurde
                    auf ausländische Zwangsarbeiter zurückgegriffen.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    1944 wurde ein Lager, das bis dahin für
                    osteuropäische Zwangsarbeiterinnen genutzt worden war, zu einem Außenlager des KZ Neuengamme
                    umgestaltet.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                    Im Spätsommer 1944 kam hier der erste Transport von weiblichen KZ-Häftlingen an, die in
                    Auschwitz für die Arbeit selektiert worden waren. Die Gruppe bestand vor allem aus Jüdinnen, die
                    erst kurz zuvor aus Ungarn oder den von Ungarn annektierten Gebieten deportiert worden
                    waren.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup> So war
                    ein Teil der Frauen im Mai 1944 aus dem Ghetto der heute rumänischen Stadt Oradea nach Auschwitz
                    deportiert worden. Viele der Frauen stammten aus dem heute zur Ukraine gehörenden Transkarpatien,
                    das in der Zwischenkriegszeit der Tschechoslowakei zugesprochen und seit 1939 von der Ukraine
                    besetzt worden war, beispielsweise aus der heute ukrainischen Stadt Tjatschiw.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Zwangsarbeit</h4>
                    <p>
                        1938/1939 hatte die ein Jahr zuvor gegründete Volkswagen GmbH ihr Werk in der Nähe von
                        Fallersleben im heutigen Wolfsburg errichtet. Nach Kriegsbeginn wurden hier nicht wie
                        ursprünglich geplant Autos für die deutsche Zivilbevölkerung produziert, sondern
                        Rüstungsaufträge übernommen. Dabei griff der Volkswagen-Konzern auch auf die verschiedenen
                        Formen nationalsozialistischer Zwangsarbeit zurück. Ende 1944 stellten Zwangsarbeiter und
                        Zwangsarbeiterinnen zwei Drittel der Belegschaft, insgesamt mussten etwa 200.000 Menschen
                        Zwangsarbeit bei Volkswagen leisten, viele von ihnen überlebten die Arbeitsbedingungen nicht.
                        Neben zivilen Zwangsarbeitern und Zwangsarbeiterinnen, sowjetischen Kriegsgefangenen und
                        italienischen Militärinternierten betraf dies auch insgesamt circa 5.000 KZ-Häftlinge. Nachdem
                        die Geschichte des VW-Konzerns im Nationalsozialismus in den 1980er- und 1990er -Jahren
                        öffentlich umfangreich thematisiert und wissenschaftlich untersucht wurde, befindet sich heute
                        im VW-Werk eine Erinnerungsstätte an die Zwangsarbeit auf dem Gelände.
                        Die individuellen Lebens- und Arbeitsbedingungen der Zwangsarbeiterinnen und Zwangsarbeiter
                        hingen dabei von ihrem rechtlichen Status, ihrer nationalen Zugehörigkeit, ihrem Geschlecht
                        sowie ihrem Arbeitsort ab. Die harte körperliche Arbeit, die bewusst herbeigeführte
                        Unterernährung und mangelhafte Ausstattung machten ein Überleben für viele Häftlinge nicht
                        möglich. Sie wurden mittels der katastrophalen und menschenverachtenden Arbeits- und
                        Lebensbedingungen, durch die Nationalsozialisten ermordet. Für die Arbeit der KZ-Häftlinge
                        prägte Wolfgang Sofsky daher den Begriff „Terrorarbeit“, um zu betonen, dass der Zweck der
                        Arbeit nicht deren Produktivität gewesen sei, sondern die ineffektiven Arbeitseinsätze vor allem
                        der Terrorisierung der Häftlinge gedient hätten. Für die Arbeit in den Neuengammer Außenlagern
                        lehnt der Historiker Marc Buggeln diesen Begriff explizit ab und argumentiert, dass die maximale
                        Ausbeutung der Arbeitskraft der Häftlinge bis zum Tod durch Erschöpfung im ökonomischen
                        Interesse der Unternehmen gewesen sei. Er plädiert stattdessen für den Begriff „Sklavenarbeit“,
                        der auch von vielen Überlebenden verwendet wird.
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

        <h3 class=\"mt-4\">Ungarische Annektionen und Besetzungen im Zweiten Weltkrieg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Von 1938 bis 1941 annektierte das mit dem nationalsozialistischen Deutschland verbündete Ungarn
                    größere Gebiete der Tschechoslowakei, Rumäniens und Jugoslawien. Etwa 45 Prozent der jüdischen
                    Bevölkerung des damaligen Ungarns lebten in diesen Gebieten, als das Land 1944 durch das
                    nationalsozialistische Deutschland besetzt wurde.
                </p>
                <p>
                    Die ehemals tschechoslowakischen und rumänischen Gebiete Ungarns gehörten zu den ersten Gebieten,
                    aus denen Juden und Jüdinnen ins Konzentrations- und Vernichtungslager Auschwitz-Birkenau deportiert
                    wurden. Nicht alle von ihnen sprachen Ungarisch oder verstanden sich als Ungarn oder Ungarinnen, sie
                    alle gehören jedoch zur Gruppe der aus Ungarn deportierten Juden und
                    Jüdinnen.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                </p>
                <p>
                    Überlebende schätzten die Größe des ersten Transportes von Auschwitz nach Salzwedel auf etwa 500
                    Frauen.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    In der Folgezeit wurden weitere weibliche KZ-Häftlinge in das neue Außenlager deportiert.
                    Die meisten dieser Frauen waren ebenfalls als Jüdinnen verfolgt worden und stammten aus Polen. Teile
                    der Frauen kamen aber auch aus Italien, der Tschechoslowakei, Griechenland, den Niederlanden und
                    Deutschland. In den späteren Transporten befanden sich aber ebenfalls wieder größere Gruppen von
                    Frauen, die aus Ungarn deportiert worden waren. Auch die Frauen der späteren Transporte waren im
                    Konzentrations- und Vernichtungslager Auschwitz gewesen. Anders als der erste Transport waren sie
                    aber nicht direkt nach Salzwedel, sondern zunächst in das Konzentrationslager Bergen-Belsen
                    deportiert und dort für die Arbeit in Salzwedel ausgewählt
                    worden.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Mehr zum historischen Hintergrund</h4>
                    <p>
                        <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Text zum historischen Kontext\">
                            &#10149; Historischer
                            Kontext
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p>
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp eingerichtet.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte
                        </a>
                    </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\">Das Außenlager Salzwedel</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Wie viele Frauen insgesamt im KZ-Außenlager Salzwedel Zwangsarbeit leisten mussten, lässt sich nicht
                    mehr ermitteln, erhaltene Unterlagen weisen jedoch mindestens 1.518 Frauen
                    nach.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup> Die Frauen sollten
                    zusammen mit weiteren Zwangsarbeitern und Zwangsarbeiterinnen aber auch deutschen Zivilarbeitern die
                    Produktion von Infanterie und Flakmunition in der Draht- und Metallwarenfabrik gewährleisten.
                    Überlebende, wie Kornélia Weisz berichteten insbesondere von dem Kontakt und der Unterstützung durch
                    französische Kriegsgefangene, vereinzelt aber auch von Unterstützung durch deutsche
                    Zivilarbeiter.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                    Die KZ-Häftlinge mussten wie in anderen Außenlagern in Zwölf-Stunden-Schichten arbeiten, die, wie
                    Überlebende berichteten, lediglich durch eine 15-minütige Mittagspause unterbrochen
                    wurden.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup> Ferner
                    erinnerten sich die Überlebenden, dass sie morgens eine Scheibe Brot und eine Tasse Kaffeeersatz
                    erhielten, mittags eine vor allem aus Wasser bestehende Suppe und abends eine weitere Scheibe Brot.
                    Ihren Berichten zufolge gab es für die circa 1.500 Frauen nur eine
                    Toilettenbarracke.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup> Die Versorgung
                    entsprach damit der vieler Außenlager und führte bei den Häftlingen zur Entkräftung und der
                    Verbreitung von Krankheiten. Zur Betreuung der Kranken war eine ungarische Jüdin eingeteilt, die
                    jedoch lediglich acht bis zwölf Frauen im Krankenrevier aufnehmen durfte, wo sie zumindest zeitweise
                    von der Arbeit freigestellt waren. Einige erkrankte Frauen wurden auch ins Stadtkrankenhaus
                    gebracht, wo sie allerdings keine Behandlung erhielten, sondern lediglich die Möglichkeit, sich
                    auszukurieren. Schwerkranke Häftlinge wurden auch nach Bergen-Belsen deportiert. Es ist davon
                    auszugehen, dass viele dieser Frauen dort ermordet wurden.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                </p>
                <p>
                    Überlebenden zufolge sei seit Beginn des Jahres 1945 zunehmend kein Material in der Fabrik mehr
                    vorhanden gewesen und die Zivilarbeiter nicht mehr erschienen. Die Überlebende Mina Rapport
                    berichtete ferner, dass ein deutscher Vorarbeiter sie vor dem baldigen Kriegsende warnte, da er die
                    Ermordung der Häftlinge vor der Befreiung
                    fürchtete.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup> Vermutlich Ende März 1945 wurde die
                    Arbeit
                    eingestellt. Kurz darauf verdoppelte sich die Anzahl der Frauen nahezu, als Transporte aus anderen
                    KZ-Außenlagern, die geräumt worden waren, in Salzwedel ankamen. Die neu hinzukommenden Frauen hatten
                    zuvor bereits verschiedene nordwestdeutsche Außenlager überlebt und kamen vor allem aus den
                    Außenlagern Porta Westfalica-Hausberge und Fallersleben.
                </p>
                <p>
                    <a href=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                       data-lightbox=\"map-salzwedel\"
                       data-title=\"Deportationen aus anderen Außenlagern nach Salzwedel\">
                        <img class=\"gallery img-fluid\"
                             src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                             alt=\"Karte mit Pfeilen vom Außenlager Porta Westfalica nach Fallersleben (Frauen) und von Fallersleben nach Salzwedel\"/></a>
                <p class=\"caption\">
                    Deportationen aus anderen Außenlagern nach Salzwedel. &copy; Institut für die Geschichte der
                    deutschen Juden. Lizenz: CC BY 4.0 &#128269; Zum Vergrößern klicken.
                </p>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Außenlager Salzwedel</h4>
                    <p>
                        1944 wurde ein Lager, das bis dahin für osteuropäische Zwangsarbeiterinnen genutzt worden war,
                        zu einem Frauenaußenlager des KZ Neuengamme umgestaltet. Die etwa 1.500 Häftlinge mussten
                        Zwangsarbeit in einem Rüstungsunternehmen leisten. Am 14. April 1945 konnten amerikanische
                        Truppen das Lager befreien, in das zuvor noch Häftlinge anderer Außenlager deportiert worden
                        waren.
                    </p>
                    <p>
                        <a href=\"";
        // line 236
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Häftlinge aus dem Außenlager Porta Westfalica-Hausberge</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Das Frauenaußenlager Porta Westfalica-Hausberge wurde im Februar 1945 eingerichtet. Die etwa 1.000
                    Häftlinge mussten Radioröhren für die Firma Philipps und ihre Tochterfirmen herstellen. Im Januar
                    1945 wurde das Lager geräumt und die Häftlinge in verschiedene andere Außenlager, unter anderem nach
                    Fallersleben, deportiert.
                </p>
                <p>
                    Ein Teil der Frauen, die bereits in einem Außenlager des KZ Groß Rosen Radioröhren hatten
                    produzieren müssen, war im Januar 1945 angesichts der sich nähernden sowjetischen Armee zunächst zu
                    Fuß und anschließend mit einem Güterzug nach Porta Westfalica deportiert worden. Während dieses
                    Transportes waren die Frauen kaum mit Lebensmitteln versorgt worden. Ein anderer Teil der Frauen in
                    Porta Westfalica kam aus dem Außenlager Horneburg im Umland von Hamburg, wo sie ebenfalls zur
                    Produktion von Radioröhren herangezogen worden waren. Sie waren in Auschwitz für den Arbeitseinsatz
                    ausgewählt worden und befanden sich ab Oktober 1944 in Horneburg, bis sie im Februar 1945 nach Porta
                    Westfalica-Hausberge deportiert wurden. Alle Überlebenden beschreiben die Lebens- und
                    Arbeitsbedingungen im Außenlager Porta Westfalica-Hausberge als äußerst grausam und brutal. Da auch
                    im Westen die Alliierten vorrückten, wurde das Lager am 1. April 1945 geräumt und die Frauen erneut
                    deportiert. Ein Teil der Häftlinge kam dabei ins Außenlager Fallersleben im heutigen
                    Wolfsburg.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Porta Westfalica</h4>
                    <p>
                        Das Frauenaußenlager Porta Westfalica-Hausberge wurde im Februar 1945 eingerichtet. Die etwa
                        1000 Häftlinge mussten Radioröhren für die Firma Philipps und ihre Tochterfirmen herstellen. Im
                        Januar 1945 wurde das Lager geräumt und die Häftlinge in verschiedene andere Außenlager, unter
                        anderem nach Fallersleben, deportiert.
                    </p>
                    <p>
                    <p>
                        <a href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Häftlinge aus dem Außenlager Fallersleben</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Das Frauenaußenlager Fallersleben war wie das Außenlager Salzwedel im Spätsommer 1944 eingerichtet
                    worden. Die ersten Häftlinge waren ebenfalls Jüdinnen, die aus Ungarn nach Auschwitz deportiert und
                    zeitgleich zu den Frauen in Salzwedel von der SS für einen Arbeitseinsatz ausgewählt worden
                    waren.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    Neben diesen ebenfalls circa 500 Frauen des ersten Transportes kamen auch hier weitere Frauen aus
                    Bergen-Belsen an, so dass die Belegschaft des Lagers aus mindestens 650 Frauen bestand. Die Frauen
                    waren im VW-Werk in der Nähe von Fallersleben, im heutigen Wolfsburg, in Waschkauen untergebracht.
                    Auf dem Gelände war zuvor eine Gruppe von 300 jüdischen Männern untergebracht gewesen, die ebenfalls
                    aus Ungarn deportiert worden waren Die Frauen mussten im VW-Werk in Zwölf-Stunden-Schichten
                    Tellerminen und Panzerfäuste produzieren. Die Versorgung entsprach der anderer Außenlager. Da die
                    Frauen direkt im Werk untergebracht waren, sahen sie während ihrer Zeit hier kein Tageslicht.
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/CH11516_1 Tellerminen.jpg"), "html", null, true);
        yield "\"
                     alt=\"Zwangsarbeiterin bei der Produktion von Tellerminen in Fallersleben\"/>
                <p class=\"caption\">
                    Eine Zwangsarbeiterin bei der Produktion von Tellerminen in Fallersleben, später wurde diese Arbeit
                    von den KZ-Häftlingen übernommen. Mit freundlicher Genehmigung der Volkswagen Aktiengesellschaft.
                </p>
                <p>
                    Bei den Beschreibungen von Fallersleben durch Überlebende wie Edréne Kovács muss berücksichtigt
                    werden, dass sie ihre Haft dort vor dem Hintergrund der Erfahrungen in Auschwitz bewerteten. Nur so
                    lässt sich einordnen, warum sie die trockenen Unterkünfte und die Duschräume betonten, die die
                    Möglichkeit für ein zumindest geringes Maß an Körperpflege geboten hätten. Im März 1945 kamen etwa
                    200 Frauen aus dem Außenlager Porta Westfalica-Hausberge in Fallersleben an. Die Überlebende des
                    Außenlagers Fallersleben Hanna Mandel berichtete, wie bedrückt sie vom Zustand dieser Frauen bei
                    ihrer Ankunft in Fallersleben gewesen und dass unter ihnen Panik ausgebrochen sei, als sie ebenfalls
                    zu den Duschen geführt wurden. Die Frauen, die Auschwitz überlebt hatten, befürchteten, nun kurz vor
                    Kriegsende noch vergast zu werden.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\" Die letzten Kriegswochen im Außenlager Salzwedel></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Gemeinsam wurden die Frauen aus den Außenlagern Fallersleben und Porta Westfalica-Hausberge erneut
                    deportiert. Durch die Ankunft der aus den anderen Außenlagern geräumten Frauen erhöhte sich die
                    Anzahl der Häftlinge in Salzwedel auf circa 3.000 Frauen. Die Versorgungssituation verschlechterte
                    sich dadurch noch einmal, Überlebende berichteten, dass die Lebensmittelausgabe eingestellt worden
                    sei. Die Frauen hungerten und ernährten sich teilweise von rohen Rüben. Fast alle Überlebenden
                    bezeugten, dass in den letzten Tagen vor der Befreiung die Sorge vor einer gezielten Ermordung der
                    Häftlinge durch eine Sprengung des Lagers bestand. Mehrere Überlebende wie beispielsweise Fela
                    Gastwirth berichteten, dass dies durch die in unmittelbarer Nähe des Außenlagers untergebrachten
                    französischen Kriegsgefangenen verhindert worden sei, die von dem Plan erfahren hätten und daraufhin
                    die Stromversorgung unterbrochen hätten. Der Überlebenden Eva Braun zufolge, hätten die
                    französischen Kriegsgefangen auch das Lager umstellt und der SS gedroht. Auch die Überlebende Hanna
                    Mandel erinnerte, dass sie von französischen Kriegsgefangen gewarnt worden sei, dass das Lager
                    angezündet werden solle. In ihrer Baracke hatten die Frauen daraufhin mehrere Bretter gelockert und
                    einen Wachdienst an Astlöchern eingerichtet, um, falls die Baracke in Brand gesetzt werden würde,
                    rechtzeitig die Wände rauszuschlagen und einen Ausbruchsversuch unternehmen zu können. Dazu sei es
                    aber nicht gekommen. Einige Frauen berichteten auch, dass der Kommandant des Lagers sich geweigert
                    hätte, die Häftlinge vor der Befreiung zu ermorden. Die Überlebende Rose Brewster verwies allerdings
                    auch darauf, dass dieser sich zuvor von den verantwortlichen Häftlingsvertretern im Gegenzug das
                    Versprechen habe geben lassen, nach der Befreiung positiv über ihn auszusagen.
                </p>
                <p>
                    Am 14. April 1945 wurde das Lager durch amerikanische Truppen befreit. Nur wenige Kilometer entfernt
                    hatten SS, Wehrmacht und Volksturmeinheiten sowie Hitlerjungen am Tag zuvor 1.061 männliche
                    KZ-Häftlinge beim Massaker von Gardelegen in einer Scheune verbrannt.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Todesmärsche und „Endphaseverbrechen“</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In der Endphase des Krieges wurden etliche Konzentrationslager und KZ-Außenlager durch die
                    Nationalsozialisten vor der Ankunft der sich nähernden Alliierten geräumt. Die Häftlinge wurden
                    entweder in Güterwagons, selten in Lastwagen transportiert oder unter Misshandlungen gezwungen, zu
                    Fuß in weiterhin unter deutscher Kontrolle stehende Gebiete zu marschieren. Während der oft tage-,
                    teilweise auch wochenlang dauernden Märsche wurden die Häftlinge in der Regel kaum versorgt, viele
                    von ihnen verhungerten oder verdursteten in den Güterwagons, viele brachen während der Märsche
                    aufgrund der Erschöpfung zusammen oder wurden durch die SS oder andere wachhabende Einheiten
                    ermordet. Durch die Überlebenden wurde deshalb für diese Räumungen der Begriff „Todesmarsch“
                    geprägt. Teile der Todesmärsche endeten in der gezielten Ermordung der Häftlinge, von denen das
                    sogenannte „Massaker von Gardelegen“ eines der bekanntesten ist. Über 1.000 Häftlinge aus
                    Außenlagern des KZ Neuengamme und des KZ Mittelbau-Dora wurden dort in einer Feldscheune
                    zusammengetrieben, die von der SS und weiteren NS-Organisationen in Brand gesetzt wurde.
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/T2694HäftlingszugHinten.jpg"), "html", null, true);
        yield "\"
                     alt=\"Eine Gruppe von männlichen und weiblichen KZ-Häftlingen von hinten zu sehen\"/>
                <p class=\"caption\">
                    Befreite männliche und weibliche KZ-Häftlinge in Gardelegen am 5. Juni 1945. Privatbesitz,
                    Johann-Friedrich-Danneil-Museum, Salzwedel.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>

        </div>

        <h3 class=\"mt-4\">Nach der Befreiung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Überlebende Gabriella Goitein berichtete:
                </p>
                <p class=\"quote\">
                    „Und dann haben die gesagt, wir können gehen. Wir sind gegangen diesen Weg, und es war ein
                    Friedenstag und Sonne war da. Und die Franzosen, die Kriegsgefangenen, die Franzosen, die haben uns
                    zu sich in ihr Lager geholt, und wir saßen bei langen Tischen, und die haben irgendwie […]
                    beschaffen Brot und Eier. Und die hatten solche großen Pfannen gehabt und die Eier gebrochen auf die
                    Pfanne und gemischt. Wir saßen da, und ich habe gegessen Brot mit Ei. Das war meine Befreiung.“
                </p>
                <p>
                    Viele Überlebende wie beispielsweise Kornélia Weisz berichteten, dass die amerikanischen Soldaten,
                    die entsetzt von der Versorgung und Ausstattung der Frauen waren, diese aufforderten, sich selbst in
                    der Stadt zu versorgen. Viele der befreiten KZ-Häftlinge hätten daraufhin das Lager verlassen und
                    seien in die Kleinstadt gezogen, wo sie Lebensmittel und Klamotten geplündert hätten. Die
                    Überlebende Sándorné Margit Less erzählte: </p>
                <p class=\"quote\">
                    „Dann waren die Tore offen, wir sind herausgelaufen, eine nach der anderen. Wir wußten nicht, was
                    wir machen sollten. Wir hatten keine normale Kleidung. Wir waren schmutzig, voller Läuse. In den
                    letzten Wochen hatten wir nichts zu essen bekommen, nicht einmal diese dünne Rübensuppe. Essen,
                    essen war das Einzige, woran wir gedacht haben. Wir sind nach der Befreiung in eine Molkerei
                    gekommen. Hier waren viele verschiedene Milchwaren […]. Eine Frau hat einen Soldatenhelm gefunden
                    und hat ihn in Milch getaucht, aber diese Helme hatten Löcher, und zu beiden Seiten ist die Milch
                    herausgeflossen. Sie hat getrunken, getrunken, und die Milch ist herausgeflossen. Dieses Bild steht
                    mir vor Augen.“
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Häftlingsnummern\"/>
                <p class=\"caption\">

                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Häftlingsnummern\"/>
                <p class=\"caption\">

                </p>
                <p>

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
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Vgl. Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001, S. 29- 34.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Marc Buggeln, Arbeit und Gewalt, Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, S.
                        36-51.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Spoerer, Zwangsarbeit, S. 9.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 625-657.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Dietrich Banse, „ich wollte überleben und der Welt erzählen“. Zur Geschichte des Frauenlagers
                        Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005, S. 10.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Banse, überleben, S. 18.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Banse, überleben, S. 31.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Randolp L Braham, Historical Overview, in: Ders. (Hrsg.), The geographical encyclopedia of the
                        Holocaust in Hungary, Vol. 1, Evanston 2013, S. XV-XCV; Susanne Heim et al. (Hrsg.), Die
                        Verfolgung und Ermordung der europäischen Juden durch das nationalsozialistische Deutschland
                        1933.1945, Band 15. Ungarn 1944-1945. Bearbeitet von Regina Fritz. Berlin / Boston 2021.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Zit. nach Banse, überleben, S. 39.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Zit. nach Banse, überleben, S. 31, 39.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        Vgl. Banse, überleben, S. 31.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Vgl. Bericht Kornélia Weisz, in: Salzwedeler Museen / Freundeskreis der KZ Gedenkstätte
                        Neuengamme (Hrsg.), Erinnerung. Besuchswoche ehemaliger Inhaftierter des Konzentrationslagers
                        Salzwedel 12 – 18. Juli 1999, Hamburg 2001; Bericht Monzu Aviel, in:
                        Johann-Friedrich-Danneil-Museum Salzwedel / Freundeskreis KZ-Gedenkstätte Neuengamme (Hrsg),
                        „laßt es ruhn!?“ – Gegen ein Vergessen. Besuch ehemaliger Häftlinge des KZ-Außenlagers Salzwedel
                        vom 30. April bis 6. Mai 2001; Kitty Hart-Moxon, „Wo die Hoffnung erfriert“, Leipzig 2001, zit.
                        nach: Banse, überleben, S. 77; Mina Rapport, zit. nach. Banse, überleben, S. 54.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Vgl. Banse, überleben, S. 46.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Vgl. Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 325f; Banse, überleben, S. 47f.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Vgl. Bericht Mina Rapport, in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 636; Hans Ellger, Zwangsarbeit und weibliche
                        Überlebensstrategien. Die Geschichte der Frauenaußenlager des Konzentrationslagers Neuengamme
                        1944/1945, Berlin 2007, S. 237-238.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Vgl. Hanna Mandel, Beim Gehen entsteht der Weg. Gespräche über das Leben vor und nach Auschwitz,
                        Hamburg 2008, S. 91f.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Vgl. Edréne Kovács, in: Salzwedeler Museen / Freundeskreis der KZ Gedenkstätte Neuengamme
                        (Hrsg.) Erinnerung. Besuchswoche ehemaliger Inhaftierter des Konzentrationslagers Salzwedel 12 –
                        18. Juli 1999, Hamburg 2001.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Vgl. Mandel, Gespräche, S. 106.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Vgl. Banse, überleben, S. 65, 66; Hans Ellger, Salzwedel, in: Wolfgang Benz / Barbara Diestel
                        (Hrsg.), Der Ort des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Band
                        5: Hinzert. Auschwitz. Neuengamme, München 2007, S. 514-516.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Vgl. u.a. Hart-Moxon, Hoffnung, zit. nach: Danneil-Museum / Freundeskreis (Hrsg.), Tag der
                        Befreiung.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Vgl. Fela Gastwirth, in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Vgl. Eva Braun (Luchs), in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Vgl. Mandel, Gespräche, S. 110f.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Vgl. Rose Brewster, in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Lukkas Busche / Andreas Froese (Hrsg.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Begleitender Katalog zur Dauerausstellung der Gedenkstätte Feldscheune Isenschnibbe Gardelegen,
                        Gardelegen / Leipzig / Magdeburg 2022.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Zit. nach: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Vgl. Bericht Kornélia Weisz, in: Salzwedeler Museen / Freundeskreis (Hrsg.), Erinnerung.
                        <a href=\"#footnote30\">&uarr;</a>
                    </li>
                    <li id=\"endnote31\">
                        Vgl. Bericht Sándorné Margit Less, in: Salzwedeler Museen / Freundeskreis (Hrsg.), Erinnerung.
                        <a href=\"#footnote31\">&uarr;</a>
                    </li>
                    <li id=\"endnote32\">
                        Vgl. Klári Sztehlo, in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung; Banse,
                        überleben, S. 69.
                        <a href=\"#footnote32\">&uarr;</a>
                    </li>
                    <li id=\"endnote33\">
                        „List of Jewish Survivors liberated from the Salzwedel camp. Submitted by Jewish Soldiers“, in:
                        Jewish Agency for Palestine / Search Bureau for missing relatives (Hrsg.), Register of Jewish
                        Survivors. List of Jews rescued in different European countries, Jerusalem 1945; Listen
                        Überlebender und eine Einblättrige Liste von Gefangenen, die nach der Befreiung in Flensburg
                        verstarben, 1.1.30.1/3418814 / ITS Digital Archive, Arolsen Archives, online unter:
                        <a href=\"https://collections.arolsen-archives.org/de/document/3418814\"
                           title=\"Website Arolsen Archives\">
                            https://collections.arolsen-archives.org/de/document/3418814</a>; List of Jewish survivors
                        in camp
                        Salzwedel 15.3.1946 various nationalities + 2 copies, 1.1.30.1/301000 / ITS Digital Archive,
                        Arolsen Archives, online unter:
                        <a href=\"https://collections.arolsen-archives.org/en/archive/3-1-1-3_301000\"
                           title=\"Website Arolsen Archives\">
                            https://collections.arolsen-archives.org/en/archive/3-1-1-3_301000</a>.
                        <a href=\"#footnote33\">&uarr;</a>
                    </li>
                    <li id=\"endnote34\">
                        Vgl. Banse, überleben, S. 9f.
                        <a href=\"#footnote34\">&uarr;</a>
                    </li>
                    <li id=\"endnote35\">
                        Vgl. Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung; Salzwedeler Museen /
                        Freundeskreis (Hrsg.), Erinnerung. Johann-Friedrich-Danneil-Museum Salzwedel / Freundeskreis
                        KZ-Gedenkstätte Neuengamme (Hrsg.), „laßt es ruhn!?“.
                        <a href=\"#footnote35\">&uarr;</a>
                    </li>
                    <li id=\"endnote36\">
                        Vgl. Mandel, Gespräche.
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
                    Louis Wörner: Die Befreiung des Außenlagers Salzwedel, in: Holocaust in Ungarn und Deportationen
                    nach
                    Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 678
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
        return "studies/salzwedel.html.twig";
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
        return array (  798 => 678,  567 => 450,  543 => 429,  488 => 377,  412 => 304,  384 => 279,  338 => 236,  316 => 217,  309 => 213,  257 => 164,  237 => 147,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Fallstudie Salzwedel | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-deportationen.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2>Die Befreiung des Außenlagers Salzwedel</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2 abstract\">
                <p>
                    Bereits vor dem Beginn des Zweiten Weltkrieges hatten die Nationalsozialisten mit dem forcierten
                    Ausbau der deutschen Rüstungsindustrie begonnen. So waren allein von 1933 bis 1938 die
                    Rüstungsausgaben von vier Prozent auf über die Hälfte des Staatshaushaltes gestiegen. Von diesem
                    Rüstungsboom profitierten die deutschen Rüstungsunternehmen, die jedoch zunehmend mit einem Mangel
                    an Arbeitskräften konfrontiert waren.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    Ab 1942 begannen die Nationalsozialsten, auch KZ-Gefangenen in
                    der deutschen Kriegsindustrie einzusetzen. Ab 1944 wurden hierzu auch Häftlinge aus den
                    Konzentrations- und Vernichtungslagern im deutsch-besetzten Osteuropa an Industriestandorte ins
                    Deutsche Reich deportiert. Die KZ-Häftlinge wurden in eigenen Lagern untergebracht, deren Bewachung
                    weiterhin durch die SS organisiert wurde, die auch für die Arbeit der Häftlinge bezahlt wurde. Die
                    Zwangsarbeit stellte für die Betriebe eine profitable Möglichkeit der Ertragsteigerung da, die mit
                    der maximalen Ausbeutung der Arbeitskraft der unterernährten und ungeschützten Häftlinge einherging.
                    <sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
                <p>
                    Als die Rüstungsproduktion 1944 ihren Höhepunkt erreichte, waren insgesamt 5,7 Millionen
                    ausländische Zivilarbeiter, 1,9 Millionen Kriegsgefangene und etwa 400.000 KZ-Häftlinge an
                    Produktionsstandorten im Deutschen Reich tätig und stellten knapp ein Viertel der
                    Beschäftigten.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup> Mit
                    dem Vorrücken der Alliierten versuchten viele Rüstungsunternehmen sich der Häftlinge wieder zu
                    entledigen, nicht zuletzt um ihre Nachkriegsposition nicht zu gefährden. Die Räumung der Lager und
                    der Abtransport der Häftlinge verlief dabei nicht einheitlich und war durch unterschiedliche
                    Interessen der NS-Institutionen und die unübersichtliche Lage der letzten Kriegsmonate
                    gekennzeichnet.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit in Salzwedel</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Draht- und Metallwarenfabrik in Salzwedel profitierte ebenfalls vom Deutschen Rüstungsboom,
                    bereits 1937 war sie mit 600 Beschäftigten der größte Industriebetrieb in Salzwedel. Auch hier wurde
                    auf ausländische Zwangsarbeiter zurückgegriffen.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    1944 wurde ein Lager, das bis dahin für
                    osteuropäische Zwangsarbeiterinnen genutzt worden war, zu einem Außenlager des KZ Neuengamme
                    umgestaltet.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                    Im Spätsommer 1944 kam hier der erste Transport von weiblichen KZ-Häftlingen an, die in
                    Auschwitz für die Arbeit selektiert worden waren. Die Gruppe bestand vor allem aus Jüdinnen, die
                    erst kurz zuvor aus Ungarn oder den von Ungarn annektierten Gebieten deportiert worden
                    waren.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup> So war
                    ein Teil der Frauen im Mai 1944 aus dem Ghetto der heute rumänischen Stadt Oradea nach Auschwitz
                    deportiert worden. Viele der Frauen stammten aus dem heute zur Ukraine gehörenden Transkarpatien,
                    das in der Zwischenkriegszeit der Tschechoslowakei zugesprochen und seit 1939 von der Ukraine
                    besetzt worden war, beispielsweise aus der heute ukrainischen Stadt Tjatschiw.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Zwangsarbeit</h4>
                    <p>
                        1938/1939 hatte die ein Jahr zuvor gegründete Volkswagen GmbH ihr Werk in der Nähe von
                        Fallersleben im heutigen Wolfsburg errichtet. Nach Kriegsbeginn wurden hier nicht wie
                        ursprünglich geplant Autos für die deutsche Zivilbevölkerung produziert, sondern
                        Rüstungsaufträge übernommen. Dabei griff der Volkswagen-Konzern auch auf die verschiedenen
                        Formen nationalsozialistischer Zwangsarbeit zurück. Ende 1944 stellten Zwangsarbeiter und
                        Zwangsarbeiterinnen zwei Drittel der Belegschaft, insgesamt mussten etwa 200.000 Menschen
                        Zwangsarbeit bei Volkswagen leisten, viele von ihnen überlebten die Arbeitsbedingungen nicht.
                        Neben zivilen Zwangsarbeitern und Zwangsarbeiterinnen, sowjetischen Kriegsgefangenen und
                        italienischen Militärinternierten betraf dies auch insgesamt circa 5.000 KZ-Häftlinge. Nachdem
                        die Geschichte des VW-Konzerns im Nationalsozialismus in den 1980er- und 1990er -Jahren
                        öffentlich umfangreich thematisiert und wissenschaftlich untersucht wurde, befindet sich heute
                        im VW-Werk eine Erinnerungsstätte an die Zwangsarbeit auf dem Gelände.
                        Die individuellen Lebens- und Arbeitsbedingungen der Zwangsarbeiterinnen und Zwangsarbeiter
                        hingen dabei von ihrem rechtlichen Status, ihrer nationalen Zugehörigkeit, ihrem Geschlecht
                        sowie ihrem Arbeitsort ab. Die harte körperliche Arbeit, die bewusst herbeigeführte
                        Unterernährung und mangelhafte Ausstattung machten ein Überleben für viele Häftlinge nicht
                        möglich. Sie wurden mittels der katastrophalen und menschenverachtenden Arbeits- und
                        Lebensbedingungen, durch die Nationalsozialisten ermordet. Für die Arbeit der KZ-Häftlinge
                        prägte Wolfgang Sofsky daher den Begriff „Terrorarbeit“, um zu betonen, dass der Zweck der
                        Arbeit nicht deren Produktivität gewesen sei, sondern die ineffektiven Arbeitseinsätze vor allem
                        der Terrorisierung der Häftlinge gedient hätten. Für die Arbeit in den Neuengammer Außenlagern
                        lehnt der Historiker Marc Buggeln diesen Begriff explizit ab und argumentiert, dass die maximale
                        Ausbeutung der Arbeitskraft der Häftlinge bis zum Tod durch Erschöpfung im ökonomischen
                        Interesse der Unternehmen gewesen sei. Er plädiert stattdessen für den Begriff „Sklavenarbeit“,
                        der auch von vielen Überlebenden verwendet wird.
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

        <h3 class=\"mt-4\">Ungarische Annektionen und Besetzungen im Zweiten Weltkrieg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Von 1938 bis 1941 annektierte das mit dem nationalsozialistischen Deutschland verbündete Ungarn
                    größere Gebiete der Tschechoslowakei, Rumäniens und Jugoslawien. Etwa 45 Prozent der jüdischen
                    Bevölkerung des damaligen Ungarns lebten in diesen Gebieten, als das Land 1944 durch das
                    nationalsozialistische Deutschland besetzt wurde.
                </p>
                <p>
                    Die ehemals tschechoslowakischen und rumänischen Gebiete Ungarns gehörten zu den ersten Gebieten,
                    aus denen Juden und Jüdinnen ins Konzentrations- und Vernichtungslager Auschwitz-Birkenau deportiert
                    wurden. Nicht alle von ihnen sprachen Ungarisch oder verstanden sich als Ungarn oder Ungarinnen, sie
                    alle gehören jedoch zur Gruppe der aus Ungarn deportierten Juden und
                    Jüdinnen.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                </p>
                <p>
                    Überlebende schätzten die Größe des ersten Transportes von Auschwitz nach Salzwedel auf etwa 500
                    Frauen.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    In der Folgezeit wurden weitere weibliche KZ-Häftlinge in das neue Außenlager deportiert.
                    Die meisten dieser Frauen waren ebenfalls als Jüdinnen verfolgt worden und stammten aus Polen. Teile
                    der Frauen kamen aber auch aus Italien, der Tschechoslowakei, Griechenland, den Niederlanden und
                    Deutschland. In den späteren Transporten befanden sich aber ebenfalls wieder größere Gruppen von
                    Frauen, die aus Ungarn deportiert worden waren. Auch die Frauen der späteren Transporte waren im
                    Konzentrations- und Vernichtungslager Auschwitz gewesen. Anders als der erste Transport waren sie
                    aber nicht direkt nach Salzwedel, sondern zunächst in das Konzentrationslager Bergen-Belsen
                    deportiert und dort für die Arbeit in Salzwedel ausgewählt
                    worden.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
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
                    <h4>&#9432; Das KZ Bergen-Belsen</h4>
                    <p>
                        Das KZ Bergen-Belsen war 1943 zunächst als „Austauschlager“ für die Unterbringung jüdischer
                        Geiseln gegründet worden. Schnell wurden ihm aber weitere Funktionen zugewiesen und ein Männer-
                        sowie ein Frauenlager eingerichtet. Ab Ende 1944 wurde Bergen-Belsen Ziel vieler Todesmärsche
                        und Räumungstransporte und entwickelte sich aufgrund der katastrophalen Bedingungen zu einem
                        Sterbelager. Nach der Befreiung wurde in Bergen-Belsen ein polnisches und ein jüdisches
                        Displaced Persons-Camp eingerichtet.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte
                        </a>
                    </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\">Das Außenlager Salzwedel</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Wie viele Frauen insgesamt im KZ-Außenlager Salzwedel Zwangsarbeit leisten mussten, lässt sich nicht
                    mehr ermitteln, erhaltene Unterlagen weisen jedoch mindestens 1.518 Frauen
                    nach.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup> Die Frauen sollten
                    zusammen mit weiteren Zwangsarbeitern und Zwangsarbeiterinnen aber auch deutschen Zivilarbeitern die
                    Produktion von Infanterie und Flakmunition in der Draht- und Metallwarenfabrik gewährleisten.
                    Überlebende, wie Kornélia Weisz berichteten insbesondere von dem Kontakt und der Unterstützung durch
                    französische Kriegsgefangene, vereinzelt aber auch von Unterstützung durch deutsche
                    Zivilarbeiter.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                    Die KZ-Häftlinge mussten wie in anderen Außenlagern in Zwölf-Stunden-Schichten arbeiten, die, wie
                    Überlebende berichteten, lediglich durch eine 15-minütige Mittagspause unterbrochen
                    wurden.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup> Ferner
                    erinnerten sich die Überlebenden, dass sie morgens eine Scheibe Brot und eine Tasse Kaffeeersatz
                    erhielten, mittags eine vor allem aus Wasser bestehende Suppe und abends eine weitere Scheibe Brot.
                    Ihren Berichten zufolge gab es für die circa 1.500 Frauen nur eine
                    Toilettenbarracke.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup> Die Versorgung
                    entsprach damit der vieler Außenlager und führte bei den Häftlingen zur Entkräftung und der
                    Verbreitung von Krankheiten. Zur Betreuung der Kranken war eine ungarische Jüdin eingeteilt, die
                    jedoch lediglich acht bis zwölf Frauen im Krankenrevier aufnehmen durfte, wo sie zumindest zeitweise
                    von der Arbeit freigestellt waren. Einige erkrankte Frauen wurden auch ins Stadtkrankenhaus
                    gebracht, wo sie allerdings keine Behandlung erhielten, sondern lediglich die Möglichkeit, sich
                    auszukurieren. Schwerkranke Häftlinge wurden auch nach Bergen-Belsen deportiert. Es ist davon
                    auszugehen, dass viele dieser Frauen dort ermordet wurden.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                </p>
                <p>
                    Überlebenden zufolge sei seit Beginn des Jahres 1945 zunehmend kein Material in der Fabrik mehr
                    vorhanden gewesen und die Zivilarbeiter nicht mehr erschienen. Die Überlebende Mina Rapport
                    berichtete ferner, dass ein deutscher Vorarbeiter sie vor dem baldigen Kriegsende warnte, da er die
                    Ermordung der Häftlinge vor der Befreiung
                    fürchtete.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup> Vermutlich Ende März 1945 wurde die
                    Arbeit
                    eingestellt. Kurz darauf verdoppelte sich die Anzahl der Frauen nahezu, als Transporte aus anderen
                    KZ-Außenlagern, die geräumt worden waren, in Salzwedel ankamen. Die neu hinzukommenden Frauen hatten
                    zuvor bereits verschiedene nordwestdeutsche Außenlager überlebt und kamen vor allem aus den
                    Außenlagern Porta Westfalica-Hausberge und Fallersleben.
                </p>
                <p>
                    <a href=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                       data-lightbox=\"map-salzwedel\"
                       data-title=\"Deportationen aus anderen Außenlagern nach Salzwedel\">
                        <img class=\"gallery img-fluid\"
                             src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                             alt=\"Karte mit Pfeilen vom Außenlager Porta Westfalica nach Fallersleben (Frauen) und von Fallersleben nach Salzwedel\"/></a>
                <p class=\"caption\">
                    Deportationen aus anderen Außenlagern nach Salzwedel. &copy; Institut für die Geschichte der
                    deutschen Juden. Lizenz: CC BY 4.0 &#128269; Zum Vergrößern klicken.
                </p>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Außenlager Salzwedel</h4>
                    <p>
                        1944 wurde ein Lager, das bis dahin für osteuropäische Zwangsarbeiterinnen genutzt worden war,
                        zu einem Frauenaußenlager des KZ Neuengamme umgestaltet. Die etwa 1.500 Häftlinge mussten
                        Zwangsarbeit in einem Rüstungsunternehmen leisten. Am 14. April 1945 konnten amerikanische
                        Truppen das Lager befreien, in das zuvor noch Häftlinge anderer Außenlager deportiert worden
                        waren.
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Häftlinge aus dem Außenlager Porta Westfalica-Hausberge</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Das Frauenaußenlager Porta Westfalica-Hausberge wurde im Februar 1945 eingerichtet. Die etwa 1.000
                    Häftlinge mussten Radioröhren für die Firma Philipps und ihre Tochterfirmen herstellen. Im Januar
                    1945 wurde das Lager geräumt und die Häftlinge in verschiedene andere Außenlager, unter anderem nach
                    Fallersleben, deportiert.
                </p>
                <p>
                    Ein Teil der Frauen, die bereits in einem Außenlager des KZ Groß Rosen Radioröhren hatten
                    produzieren müssen, war im Januar 1945 angesichts der sich nähernden sowjetischen Armee zunächst zu
                    Fuß und anschließend mit einem Güterzug nach Porta Westfalica deportiert worden. Während dieses
                    Transportes waren die Frauen kaum mit Lebensmitteln versorgt worden. Ein anderer Teil der Frauen in
                    Porta Westfalica kam aus dem Außenlager Horneburg im Umland von Hamburg, wo sie ebenfalls zur
                    Produktion von Radioröhren herangezogen worden waren. Sie waren in Auschwitz für den Arbeitseinsatz
                    ausgewählt worden und befanden sich ab Oktober 1944 in Horneburg, bis sie im Februar 1945 nach Porta
                    Westfalica-Hausberge deportiert wurden. Alle Überlebenden beschreiben die Lebens- und
                    Arbeitsbedingungen im Außenlager Porta Westfalica-Hausberge als äußerst grausam und brutal. Da auch
                    im Westen die Alliierten vorrückten, wurde das Lager am 1. April 1945 geräumt und die Frauen erneut
                    deportiert. Ein Teil der Häftlinge kam dabei ins Außenlager Fallersleben im heutigen
                    Wolfsburg.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Porta Westfalica</h4>
                    <p>
                        Das Frauenaußenlager Porta Westfalica-Hausberge wurde im Februar 1945 eingerichtet. Die etwa
                        1000 Häftlinge mussten Radioröhren für die Firma Philipps und ihre Tochterfirmen herstellen. Im
                        Januar 1945 wurde das Lager geräumt und die Häftlinge in verschiedene andere Außenlager, unter
                        anderem nach Fallersleben, deportiert.
                    </p>
                    <p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                            &#10149; Zur Karte der Lager
                        </a>
                    </p>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Die Häftlinge aus dem Außenlager Fallersleben</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Das Frauenaußenlager Fallersleben war wie das Außenlager Salzwedel im Spätsommer 1944 eingerichtet
                    worden. Die ersten Häftlinge waren ebenfalls Jüdinnen, die aus Ungarn nach Auschwitz deportiert und
                    zeitgleich zu den Frauen in Salzwedel von der SS für einen Arbeitseinsatz ausgewählt worden
                    waren.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    Neben diesen ebenfalls circa 500 Frauen des ersten Transportes kamen auch hier weitere Frauen aus
                    Bergen-Belsen an, so dass die Belegschaft des Lagers aus mindestens 650 Frauen bestand. Die Frauen
                    waren im VW-Werk in der Nähe von Fallersleben, im heutigen Wolfsburg, in Waschkauen untergebracht.
                    Auf dem Gelände war zuvor eine Gruppe von 300 jüdischen Männern untergebracht gewesen, die ebenfalls
                    aus Ungarn deportiert worden waren Die Frauen mussten im VW-Werk in Zwölf-Stunden-Schichten
                    Tellerminen und Panzerfäuste produzieren. Die Versorgung entsprach der anderer Außenlager. Da die
                    Frauen direkt im Werk untergebracht waren, sahen sie während ihrer Zeit hier kein Tageslicht.
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/CH11516_1 Tellerminen.jpg') }}\"
                     alt=\"Zwangsarbeiterin bei der Produktion von Tellerminen in Fallersleben\"/>
                <p class=\"caption\">
                    Eine Zwangsarbeiterin bei der Produktion von Tellerminen in Fallersleben, später wurde diese Arbeit
                    von den KZ-Häftlingen übernommen. Mit freundlicher Genehmigung der Volkswagen Aktiengesellschaft.
                </p>
                <p>
                    Bei den Beschreibungen von Fallersleben durch Überlebende wie Edréne Kovács muss berücksichtigt
                    werden, dass sie ihre Haft dort vor dem Hintergrund der Erfahrungen in Auschwitz bewerteten. Nur so
                    lässt sich einordnen, warum sie die trockenen Unterkünfte und die Duschräume betonten, die die
                    Möglichkeit für ein zumindest geringes Maß an Körperpflege geboten hätten. Im März 1945 kamen etwa
                    200 Frauen aus dem Außenlager Porta Westfalica-Hausberge in Fallersleben an. Die Überlebende des
                    Außenlagers Fallersleben Hanna Mandel berichtete, wie bedrückt sie vom Zustand dieser Frauen bei
                    ihrer Ankunft in Fallersleben gewesen und dass unter ihnen Panik ausgebrochen sei, als sie ebenfalls
                    zu den Duschen geführt wurden. Die Frauen, die Auschwitz überlebt hatten, befürchteten, nun kurz vor
                    Kriegsende noch vergast zu werden.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\" Die letzten Kriegswochen im Außenlager Salzwedel></h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Gemeinsam wurden die Frauen aus den Außenlagern Fallersleben und Porta Westfalica-Hausberge erneut
                    deportiert. Durch die Ankunft der aus den anderen Außenlagern geräumten Frauen erhöhte sich die
                    Anzahl der Häftlinge in Salzwedel auf circa 3.000 Frauen. Die Versorgungssituation verschlechterte
                    sich dadurch noch einmal, Überlebende berichteten, dass die Lebensmittelausgabe eingestellt worden
                    sei. Die Frauen hungerten und ernährten sich teilweise von rohen Rüben. Fast alle Überlebenden
                    bezeugten, dass in den letzten Tagen vor der Befreiung die Sorge vor einer gezielten Ermordung der
                    Häftlinge durch eine Sprengung des Lagers bestand. Mehrere Überlebende wie beispielsweise Fela
                    Gastwirth berichteten, dass dies durch die in unmittelbarer Nähe des Außenlagers untergebrachten
                    französischen Kriegsgefangenen verhindert worden sei, die von dem Plan erfahren hätten und daraufhin
                    die Stromversorgung unterbrochen hätten. Der Überlebenden Eva Braun zufolge, hätten die
                    französischen Kriegsgefangen auch das Lager umstellt und der SS gedroht. Auch die Überlebende Hanna
                    Mandel erinnerte, dass sie von französischen Kriegsgefangen gewarnt worden sei, dass das Lager
                    angezündet werden solle. In ihrer Baracke hatten die Frauen daraufhin mehrere Bretter gelockert und
                    einen Wachdienst an Astlöchern eingerichtet, um, falls die Baracke in Brand gesetzt werden würde,
                    rechtzeitig die Wände rauszuschlagen und einen Ausbruchsversuch unternehmen zu können. Dazu sei es
                    aber nicht gekommen. Einige Frauen berichteten auch, dass der Kommandant des Lagers sich geweigert
                    hätte, die Häftlinge vor der Befreiung zu ermorden. Die Überlebende Rose Brewster verwies allerdings
                    auch darauf, dass dieser sich zuvor von den verantwortlichen Häftlingsvertretern im Gegenzug das
                    Versprechen habe geben lassen, nach der Befreiung positiv über ihn auszusagen.
                </p>
                <p>
                    Am 14. April 1945 wurde das Lager durch amerikanische Truppen befreit. Nur wenige Kilometer entfernt
                    hatten SS, Wehrmacht und Volksturmeinheiten sowie Hitlerjungen am Tag zuvor 1.061 männliche
                    KZ-Häftlinge beim Massaker von Gardelegen in einer Scheune verbrannt.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Todesmärsche und „Endphaseverbrechen“</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In der Endphase des Krieges wurden etliche Konzentrationslager und KZ-Außenlager durch die
                    Nationalsozialisten vor der Ankunft der sich nähernden Alliierten geräumt. Die Häftlinge wurden
                    entweder in Güterwagons, selten in Lastwagen transportiert oder unter Misshandlungen gezwungen, zu
                    Fuß in weiterhin unter deutscher Kontrolle stehende Gebiete zu marschieren. Während der oft tage-,
                    teilweise auch wochenlang dauernden Märsche wurden die Häftlinge in der Regel kaum versorgt, viele
                    von ihnen verhungerten oder verdursteten in den Güterwagons, viele brachen während der Märsche
                    aufgrund der Erschöpfung zusammen oder wurden durch die SS oder andere wachhabende Einheiten
                    ermordet. Durch die Überlebenden wurde deshalb für diese Räumungen der Begriff „Todesmarsch“
                    geprägt. Teile der Todesmärsche endeten in der gezielten Ermordung der Häftlinge, von denen das
                    sogenannte „Massaker von Gardelegen“ eines der bekanntesten ist. Über 1.000 Häftlinge aus
                    Außenlagern des KZ Neuengamme und des KZ Mittelbau-Dora wurden dort in einer Feldscheune
                    zusammengetrieben, die von der SS und weiteren NS-Organisationen in Brand gesetzt wurde.
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/T2694HäftlingszugHinten.jpg') }}\"
                     alt=\"Eine Gruppe von männlichen und weiblichen KZ-Häftlingen von hinten zu sehen\"/>
                <p class=\"caption\">
                    Befreite männliche und weibliche KZ-Häftlinge in Gardelegen am 5. Juni 1945. Privatbesitz,
                    Johann-Friedrich-Danneil-Museum, Salzwedel.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>

        </div>

        <h3 class=\"mt-4\">Nach der Befreiung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die Überlebende Gabriella Goitein berichtete:
                </p>
                <p class=\"quote\">
                    „Und dann haben die gesagt, wir können gehen. Wir sind gegangen diesen Weg, und es war ein
                    Friedenstag und Sonne war da. Und die Franzosen, die Kriegsgefangenen, die Franzosen, die haben uns
                    zu sich in ihr Lager geholt, und wir saßen bei langen Tischen, und die haben irgendwie […]
                    beschaffen Brot und Eier. Und die hatten solche großen Pfannen gehabt und die Eier gebrochen auf die
                    Pfanne und gemischt. Wir saßen da, und ich habe gegessen Brot mit Ei. Das war meine Befreiung.“
                </p>
                <p>
                    Viele Überlebende wie beispielsweise Kornélia Weisz berichteten, dass die amerikanischen Soldaten,
                    die entsetzt von der Versorgung und Ausstattung der Frauen waren, diese aufforderten, sich selbst in
                    der Stadt zu versorgen. Viele der befreiten KZ-Häftlinge hätten daraufhin das Lager verlassen und
                    seien in die Kleinstadt gezogen, wo sie Lebensmittel und Klamotten geplündert hätten. Die
                    Überlebende Sándorné Margit Less erzählte: </p>
                <p class=\"quote\">
                    „Dann waren die Tore offen, wir sind herausgelaufen, eine nach der anderen. Wir wußten nicht, was
                    wir machen sollten. Wir hatten keine normale Kleidung. Wir waren schmutzig, voller Läuse. In den
                    letzten Wochen hatten wir nichts zu essen bekommen, nicht einmal diese dünne Rübensuppe. Essen,
                    essen war das Einzige, woran wir gedacht haben. Wir sind nach der Befreiung in eine Molkerei
                    gekommen. Hier waren viele verschiedene Milchwaren […]. Eine Frau hat einen Soldatenhelm gefunden
                    und hat ihn in Milch getaucht, aber diese Helme hatten Löcher, und zu beiden Seiten ist die Milch
                    herausgeflossen. Sie hat getrunken, getrunken, und die Milch ist herausgeflossen. Dieses Bild steht
                    mir vor Augen.“
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Häftlingsnummern\"/>
                <p class=\"caption\">

                </p>
                <p>

                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Quellen und Forschung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>

                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Häftlingsnummern\"/>
                <p class=\"caption\">

                </p>
                <p>

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
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Vgl. Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001, S. 29- 34.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Marc Buggeln, Arbeit und Gewalt, Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, S.
                        36-51.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Spoerer, Zwangsarbeit, S. 9.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 625-657.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Dietrich Banse, „ich wollte überleben und der Welt erzählen“. Zur Geschichte des Frauenlagers
                        Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005, S. 10.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Banse, überleben, S. 18.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Banse, überleben, S. 31.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Randolp L Braham, Historical Overview, in: Ders. (Hrsg.), The geographical encyclopedia of the
                        Holocaust in Hungary, Vol. 1, Evanston 2013, S. XV-XCV; Susanne Heim et al. (Hrsg.), Die
                        Verfolgung und Ermordung der europäischen Juden durch das nationalsozialistische Deutschland
                        1933.1945, Band 15. Ungarn 1944-1945. Bearbeitet von Regina Fritz. Berlin / Boston 2021.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Zit. nach Banse, überleben, S. 39.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Zit. nach Banse, überleben, S. 31, 39.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Vgl. Stiftung niedersächsische Gedenkstätten (Hrsg.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, S. 200.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        Vgl. Banse, überleben, S. 31.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Vgl. Bericht Kornélia Weisz, in: Salzwedeler Museen / Freundeskreis der KZ Gedenkstätte
                        Neuengamme (Hrsg.), Erinnerung. Besuchswoche ehemaliger Inhaftierter des Konzentrationslagers
                        Salzwedel 12 – 18. Juli 1999, Hamburg 2001; Bericht Monzu Aviel, in:
                        Johann-Friedrich-Danneil-Museum Salzwedel / Freundeskreis KZ-Gedenkstätte Neuengamme (Hrsg),
                        „laßt es ruhn!?“ – Gegen ein Vergessen. Besuch ehemaliger Häftlinge des KZ-Außenlagers Salzwedel
                        vom 30. April bis 6. Mai 2001; Kitty Hart-Moxon, „Wo die Hoffnung erfriert“, Leipzig 2001, zit.
                        nach: Banse, überleben, S. 77; Mina Rapport, zit. nach. Banse, überleben, S. 54.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Vgl. Banse, überleben, S. 46.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Vgl. Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 325f; Banse, überleben, S. 47f.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Vgl. Bericht Mina Rapport, in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Vgl. Buggeln, Arbeit und Gewalt, S. 636; Hans Ellger, Zwangsarbeit und weibliche
                        Überlebensstrategien. Die Geschichte der Frauenaußenlager des Konzentrationslagers Neuengamme
                        1944/1945, Berlin 2007, S. 237-238.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Vgl. Hanna Mandel, Beim Gehen entsteht der Weg. Gespräche über das Leben vor und nach Auschwitz,
                        Hamburg 2008, S. 91f.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Vgl. Edréne Kovács, in: Salzwedeler Museen / Freundeskreis der KZ Gedenkstätte Neuengamme
                        (Hrsg.) Erinnerung. Besuchswoche ehemaliger Inhaftierter des Konzentrationslagers Salzwedel 12 –
                        18. Juli 1999, Hamburg 2001.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Vgl. Mandel, Gespräche, S. 106.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Vgl. Banse, überleben, S. 65, 66; Hans Ellger, Salzwedel, in: Wolfgang Benz / Barbara Diestel
                        (Hrsg.), Der Ort des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Band
                        5: Hinzert. Auschwitz. Neuengamme, München 2007, S. 514-516.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Vgl. u.a. Hart-Moxon, Hoffnung, zit. nach: Danneil-Museum / Freundeskreis (Hrsg.), Tag der
                        Befreiung.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Vgl. Fela Gastwirth, in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Vgl. Eva Braun (Luchs), in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Vgl. Mandel, Gespräche, S. 110f.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Vgl. Rose Brewster, in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Lukkas Busche / Andreas Froese (Hrsg.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Begleitender Katalog zur Dauerausstellung der Gedenkstätte Feldscheune Isenschnibbe Gardelegen,
                        Gardelegen / Leipzig / Magdeburg 2022.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Zit. nach: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Vgl. Bericht Kornélia Weisz, in: Salzwedeler Museen / Freundeskreis (Hrsg.), Erinnerung.
                        <a href=\"#footnote30\">&uarr;</a>
                    </li>
                    <li id=\"endnote31\">
                        Vgl. Bericht Sándorné Margit Less, in: Salzwedeler Museen / Freundeskreis (Hrsg.), Erinnerung.
                        <a href=\"#footnote31\">&uarr;</a>
                    </li>
                    <li id=\"endnote32\">
                        Vgl. Klári Sztehlo, in: Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung; Banse,
                        überleben, S. 69.
                        <a href=\"#footnote32\">&uarr;</a>
                    </li>
                    <li id=\"endnote33\">
                        „List of Jewish Survivors liberated from the Salzwedel camp. Submitted by Jewish Soldiers“, in:
                        Jewish Agency for Palestine / Search Bureau for missing relatives (Hrsg.), Register of Jewish
                        Survivors. List of Jews rescued in different European countries, Jerusalem 1945; Listen
                        Überlebender und eine Einblättrige Liste von Gefangenen, die nach der Befreiung in Flensburg
                        verstarben, 1.1.30.1/3418814 / ITS Digital Archive, Arolsen Archives, online unter:
                        <a href=\"https://collections.arolsen-archives.org/de/document/3418814\"
                           title=\"Website Arolsen Archives\">
                            https://collections.arolsen-archives.org/de/document/3418814</a>; List of Jewish survivors
                        in camp
                        Salzwedel 15.3.1946 various nationalities + 2 copies, 1.1.30.1/301000 / ITS Digital Archive,
                        Arolsen Archives, online unter:
                        <a href=\"https://collections.arolsen-archives.org/en/archive/3-1-1-3_301000\"
                           title=\"Website Arolsen Archives\">
                            https://collections.arolsen-archives.org/en/archive/3-1-1-3_301000</a>.
                        <a href=\"#footnote33\">&uarr;</a>
                    </li>
                    <li id=\"endnote34\">
                        Vgl. Banse, überleben, S. 9f.
                        <a href=\"#footnote34\">&uarr;</a>
                    </li>
                    <li id=\"endnote35\">
                        Vgl. Danneil-Museum / Freundeskreis (Hrsg.), Tag der Befreiung; Salzwedeler Museen /
                        Freundeskreis (Hrsg.), Erinnerung. Johann-Friedrich-Danneil-Museum Salzwedel / Freundeskreis
                        KZ-Gedenkstätte Neuengamme (Hrsg.), „laßt es ruhn!?“.
                        <a href=\"#footnote35\">&uarr;</a>
                    </li>
                    <li id=\"endnote36\">
                        Vgl. Mandel, Gespräche.
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
                    Louis Wörner: Die Befreiung des Außenlagers Salzwedel, in: Holocaust in Ungarn und Deportationen
                    nach
                    Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_deportation_salzwedel') }}. Lizenz: CC BY
                    4.0.
                </p>
            </div>
        </div>

    </div>

{% endblock %}", "studies/salzwedel.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/studies/salzwedel.html.twig");
    }
}
