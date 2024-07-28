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

/* site/context.html.twig */
class __TwigTemplate_a2044f73c0979a4372fad2dac0289dcf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/context.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/context.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/context.html.twig", 1);
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

        yield " Historischer Kontext | ";
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
        yield from         $this->loadTemplate("elements/navigation-context.html.twig", "site/context.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container g-4 py-5 study\">
        <h2>Historischer Kontext: Ungarn und nationalsozialistische Zwangsarbeit</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Mit dem Zerfall Österreich-Ungarns am Ende des Ersten Weltkrieges, kam es ab 1918 zu einer
                    umfassenden staatlichen Neuordnung Südosteuropas. 1920 musste Ungarn dabei im Friedensvertrag von
                    Trianon zwei Drittel seines bisherigen Staatsgebietes an Nachbar- und Nachfolgestaaten wie zum
                    Beispiel die neu entstandene Tschechoslowakei oder Rumänien abtreten. Die Rückgewinnung dieser
                    Gebiete und Wiederherstellung eines „Großungarns“ war ein zentrales politisches Ziel der ungarischen
                    Revanchisten, die zu diesem Zwecke auch das Bündnis Ungarns mit dem nationalsozialistischen
                    Deutschland vorantrieben<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    Auf Druck Deutschlands wurde 1938 zunächst ein südlicher Teil der Tschechoslowakei und nach deren
                    endgültiger Zerschlagung 1939 durch Deutschland auch die Region Transkarpartien von Ungarn besetzt
                    und annektiert. Auch Rumänien wurde 1940 durch die Achsenmächte gezwungen, Teile seines
                    Staatsgebietes an Ungarn abzutreten. Nach dem deutschen und italienischen Angriff auf das Königreich
                    Jugoslawien annektierte Ungarn zudem Gebiete im nördlichen Teil des
                    Landes.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup> Die jüdische Bevölkerung
                    dieser von einer Vielzahl verschiedener Bevölkerungsgruppen mit unterschiedlichen Sprachen und
                    Religionen bewohnten Regionen teilte damit das Schicksal der übrigen ungarischen Juden und Jüdinnen
                    und wird auch heute noch häufig in Forschungs- und Gedenkkontexten als Teil dieser Gruppe
                    verstanden, obwohl sie selbst sich nur zum Teil als ungarisch verstanden oder Ungarisch sprachen.
                    Juden und Jüdinnen aus den annektierten Gebieten machten 1941 etwa 45 Prozent der jüdischen
                    Bevölkerung des damaligen Ungarns aus.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                    Auf dieser Website wird daher die Formulierung „aus Ungarn deportiert“ verwendet.
                </p>
                <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/history/ungarn-1944.png"), "html", null, true);
        yield "\"
                   title=\"Karte vergrößern\"
                   data-lightbox=\"map-ungarn\"
                   data-title=\"Karte Ungarns im Jahr 1944 mit annektierten Gebieten in der Slowakei, Karpatenukraine, Siebenbürgen, Prekmurje, Medimurje und Baranya Bácska.\">
                    <img class=\"gallery img-fluid\" style=\"width: 600px;\"
                         src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/history/ungarn-1944.png"), "html", null, true);
        yield "\"
                         alt=\"Karte Ungarns im Jahr 1944 mit annektierten Gebieten in der Slowakei, Karpatenukraine, Siebenbürgen, Prekmurje, Medimurje und Baranya Bácska\"/>
                </a>
                <p class=\"caption\">
                    Ungarisches Staatsgebiet und Annektierung 1920 bis 1941. Quelle: <a
                            href=\"https://commons.wikimedia.org/wiki/File:Hungary_map_1941.png\"
                            title=\"Abbildung auf Wiki Commons\">https://commons.wikimedia.org</a>. Lizenz: <a
                            href=\"https://creativecommons.org/public-domain/\"
                            title=\"Mehr Informationen zur Lizenz auf der Creative Commons Website\">Public domain</a>.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Antisemitismus in Ungarn</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    1941 trat Ungarn als Verbündeter des nationalsozialistischen Deutschlands in den Zweiten Weltkrieg
                    ein. Die Lage für die jüdische Bevölkerung verschärfte sich
                    dadurch.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup> Bereits seit den 1920er-Jahren,
                    waren Juden und Jüdinnen in Ungarn diskriminierenden Gesetzten unterworfen, zu denen nach
                    Kriegseintritt weitere hinzukamen. Männliche Juden, die vom Kriegsdienst ausgeschlossen waren,
                    wurden etwa in Arbeitsbataillonen zur Zwangsarbeit an der Front eingeteilt, wo vermutlich 15.000 von
                    ihnen starben.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup> 1941 wurden zudem Ehen zwischen
                    Juden und Nichtjuden verboten und die Definition, wer
                    als jüdisch anzusehen sei, ausgeweitet. Entscheidend war zukünftig nicht nur die
                    Religionszugehörigkeit, sondern auch die Abstammung.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                    Ende August 1941 wurden dann circa 18.000 Juden
                    und Jüdinnen, die entweder zuvor aus anderen Ländern vor den Nationalsozialisten nach Ungarn
                    geflohen waren oder nicht schnell genug ihre ungarische Staatsangehörigkeit nachweisen konnten, als
                    „fremde“ Juden und Jüdinnen aus Transkarpatien in von Deutschland besetzte Gebiete deportiert. Dort
                    wurden sie im Massaker von Kamenez-Podolsk zusammen mit einheimischen Juden und Jüdinnen durch
                    Angehörige der deutschen Ordnungspolizei und der SS ermordet. Inwieweit auch ukrainische und
                    ungarische Verbände beteiligt waren ist umstritten. Insgesamt 23.600 Menschen wurden in der bis
                    dahin größten Massenerschießung und Mordaktion des Holocaust ermordet, darunter circa 14.000 bis
                    16.000 aus Ungarn deportierte Juden und Jüdinnen.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                    Auch In den annektierten Gebieten des ehemaligen
                    Jugoslawiens kam es zu einem Massaker durch ungarische Gendarmerie bei dem ungefähr 2.550 Serben und
                    Serbinnen sowie 700 Juden und Jüdinnen ermordet
                    wurden.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup> Die ungarische Regierung weigerte sich
                    zunächst, die als ungarisch verstandenen Juden und Jüdinnen an das Deutsche Reich auszuliefern,
                    womit diese vorerst vor der Deportation in die Vernichtungslager verschont
                    blieben.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                </p>
                <p>
                    Als 1943 ein Sieg der Achsenmächte immer unwahrscheinlicher wurde, begann die ungarische Regierung –
                    wie auch zuvor Italien –, heimlichen Kontakt mit den Alliierten aufzunehmen. Nachdem Italien
                    tatsächlich im September 1943 einen Waffenstillstand mit den Alliierten unterzeichnet und das
                    Bündnis mit dem nationalsozialistischen Deutschland aufgelöst hatte, sollte eine Wiederholung dieser
                    Vorgänge in Ungarn verhindert werden. Im März 1944 wurde Ungarn deshalb durch deutsche Truppen
                    besetzt und eine neue Regierung eingesetzt, wobei das Staatsoberhaupt Miklós Horthy sein Amt
                    behielt.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
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

        <h3 class=\"mt-4\">Deportationen der Juden und Jüdinnen unter deutscher Besatzung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Mit den deutschen Besatzungstruppen erreichte auch ein Sonderkommando Ungarn. Unter der Führung von
                    Adolf Eichmann sollte dieses die Deportation der Juden und Jüdinnen Ungarns organisieren. Miklós
                    Horthy hatte sich zuvor unter deutschem Druck zur Auslieferung hunderttausender Juden und Jüdinnen
                    als Arbeitskräfte bereit erklärt.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    Unmittelbar nach der deutschen Besatzung wurde die jüdische
                    Bevölkerung zunächst zum Tragen eines Sternes verpflichtet und anschließend ab April 1944 in Ghettos
                    eingewiesen. Bereits im Mai 1944 begannen die ersten Deportationen in den Konzentrations- und
                    Vernichtungslagerkomplex Auschwitz. Die ehemals tschechoslowakischen und rumänischen Gebiete Ungarns
                    gehörten zu den ersten Gebieten, aus denen die jüdische Bevölkerung deportiert wurde, da ihre
                    baldige Befreiung durch die Rote Armee befürchtet wurde und die Deportation der dortigen Juden und
                    Jüdinnen der ungarischen Regierung innenpolitisch unbedenklicher erschien. In weniger als zwei
                    Monaten verschleppten die Nationalsozialisten mithilfe der ungarischen Gendarmerie circa 437.000
                    Juden und Jüdinnen in das Konzentrations- und Vernichtungslager Auschwitz und
                    Auschwitz-Birkenau.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup>
                </p>
                <div>
                    <img class=\"img-fluid\" src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                         alt=\"Ankunft jüdischer Männer, Frauen und Kinder  in Auschwitz-Birkenau\"/>
                    <p class=\"caption\">
                        Ankunft jüdischer Männer, Frauen und Kinder aus Transkarpatien in Auschwitz-Birkenau im Mai 1944
                        vor der Selektion. Die Fotos wurden mit unbekanntem Zweck von SS-Männern angefertigt und stellen
                        deren Perspektive da. Die Fotos sind eine der wenigen fotografischen Quellen aus den
                        Vernichtungslagern. Auschwitz-Album, Yad Vashem.
                    </p>
                </div>
                <p>
                    Den Großteil von ihnen ermordete die SS direkt nach ihrer Ankunft in den Gaskammern in Birkenau.
                    Lediglich etwa ein Viertel wurde bei den „Selektionen“ ausgewählt, um Zwangsarbeit für das Deutsche
                    Reich zu leisten.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                    Ein Teil der Häftlinge wurde in Arbeitskommandos direkt im Lagerkomplex Auschwitz
                    eingesetzt, beispielweise in den eigens dort angesiedelten Industriebetrieben. Während ihrer Zeit in
                    Auschwitz standen die Häftlinge in ständiger Gefahr, bei erneuten „Selektionen“ zur Ermordung
                    ausgewählt zu werden. Ein anderer Teil wurde für Arbeitskommandos in einem der über tausend
                    Außenlager des nationalsozialistischen KZ-Systems ausgewählt, die an verschiedenen
                    Industriestandorten im Deutschen Reich oder in den besetzten Gebieten angesiedelt
                    waren.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"Ankunft jüdischer Männer, Frauen und Kinder  in Auschwitz-Birkenau\"/>
                <p class=\"caption\">
                    Standorte von Konzentrationslager in Norddeutschland, in denen aus Ungarn deportierte Personen seit 1944 inhaftiert waren.
                    <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Kartenübersicht\">
                        &#10149; Zur interaktiven Karte
                    </a>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>


        <h3 class=\"mt-4\" id=\"#zwangsarbeit\">Zwangsarbeit im Nationalsozialismus</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Das nationalsozialistische Deutschland griff in hohem Maße auf Zwangsarbeit unterschiedlicher Formen
                    zurück um seinen Arbeitskräftebedarf zu decken, alleine im Deutschen Reich mussten während des
                    Zweiten Weltkrieges über 13,5 Millionen Menschen Zwangsarbeit
                    leisten.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup> Eine Steigerung der
                    Erwerbsarbeit von Frauen wurde von den Nationalsozialisten aus ideologischen Gründen und
                    innenpolitischer Rücksichtnahme abgelehnt, so dass stattdessen auf ausländische Arbeitskräfte
                    zurückgegriffen werden sollte.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                    Da die Rekrutierung freiwilliger ziviler Arbeitskräfte, sogenannte
                    „Fremdarbeiter“, in den verbündeten Staaten und den besetzten Gebieten aber weit hinter den
                    Erwartungen der nationalsozialistischen Machthaber zurück blieb, wurden ab 1940 teilweise ganze
                    Geburtsjahrgänge zwangsverpflichtet oder unter Gewalt deportiert. Nach dem Überfall auf die
                    Sowjetunion bildeten Menschen aus der Sowjetunion, sogenannte „Ostarbeiter“ schnell die größte
                    Gruppe der zivilen Zwangsarbeiter und Zwangsarbeiterinnen. Hinzu kamen Kriegsgefangene, die
                    ebenfalls zur Zwangsarbeit herangezogen wurden, sowie
                    KZ-Gefangene.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup> Zwangsarbeit wurde dabei in
                    allen Industriezweigen aber auch in der Landwirtschaft und in Privathaushalten eingesetzt. Die
                    Zwangsarbeiter und Zwangsarbeiterinnen gehörten damit insbesondere in den letzten Kriegsjahren zum
                    sichtbaren Alltag im nationalsozialistischen Deutschland. Die Lager, in denen sie untergebracht
                    waren, befanden sich auch in Wohngebieten und ihre Arbeitsplätze wie auch Arbeitswege teilten sie
                    mit deutschen Zivilisten.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                    Eine Übersicht über die bekannten Lager und Arbeitsorte von
                    Zwangsarbeitern und Zwangsarbeiterinnen in Hamburg gibt es beispielsweise
                    <a href=\"https://zwangsarbeit-in-hamburg.de/\"
                       title=\"Website zu Zwangsarbeit der Landeszentrale für Politische Bildung Hamburg\">hier</a>.
                </p>
                <p>
                    Die individuellen Lebens- und Arbeitsbedingungen der Zwangsarbeiter und Zwangsarbeiterinnen hingen
                    dabei von ihrem rechtlichen Status, ihrer nationalen Zugehörigkeit, ihrem Geschlecht sowie ihrem
                    Arbeitsort ab. Insbesondere Menschen aus Polen und der Sowjetunion waren der Willkür und Gewalt
                    ihrer Vorarbeiter und des Wachpersonals ausgeliefert und wurden oft gezwungen unter
                    menschenunwürdigen Bedingungen zu leben und zu arbeiten. Noch brutaler und menschenverachtender
                    waren die Arbeitsbedingungen der sowjetischen Kriegsgefangenen, die 1,3 Millionen Soldaten nicht
                    überlebten. Zusammen mit den KZ-Häftlingen bildeten sie das unterste Ende der rassistischen und
                    sozialdarwinistischen Hierarchie der nationalsozialistischen Zwangsarbeit. Die harte körperliche
                    Arbeit, die bewusst herbeigeführte Unterernährung und mangelhafte Ausstattung machten ein Überleben
                    für viele Häftlinge nicht möglich. Sie wurden mittels der Bedingungen, unter denen sie gezwungen
                    wurden zu arbeiten und zu leben, durch die Nationalsozialisten
                    ermordet.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                </p>
                <p>
                    Für die Arbeit der KZ-Häftlinge prägte Wolfgang Sofsky daher den Begriff „Terrorarbeit“, um zu
                    betonen, dass der Zweck der Arbeit nicht deren Produktivität gewesen sei, sondern die ineffektiven
                    Arbeitseinsätze vor allem der Terrorisierung der Häftlinge gedient hätten. Für die Arbeit in den
                    Neuengammer Außenlagern lehnt der Historiker Marc Buggeln diesen Begriff explizit ab und
                    argumentiert, dass die maximale Ausbeutung der Arbeitskraft der Häftlinge bis zum Tod durch
                    Erschöpfung im ökonomischen Interesse der Unternehmen gewesen sei. Er plädiert stattdessen für den
                    Begriff „Sklavenarbeit“, der auch von vielen Überlebenden verwendet
                    wird.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit der aus Ungarn deportierten Juden und Jüdinnen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem andere Arbeitskräftereservoirs für Zwangsarbeit 1944 bereits ausgeschöpft waren, hatten die
                    Nationalsozialisten sich 1944 entschlossen, auch Juden und Jüdinnen aus den Vernichtungslagern an
                    Industriestandorte ins Deutsche Reich zu deportieren. Etwa 200.000 Juden und Jüdinnen wurden
                    daraufhin in Konzentrationslager und ihre Außenlager im Deutschen Reich deportiert, darunter auch
                    circa 110.000 Juden und Jüdinnen, die zuvor aus Ungarn deportiert worden
                    waren.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup> Um die Kontakte mit
                    der Zivilbevölkerung und Fluchtmöglichkeiten zu begrenzen, wurden diese jüdischen KZ-Häftlinge in
                    eigenen Außenlagern festgehalten, die weiterhin der SS unterstanden. Für die Juden und Jüdinnen aus
                    Ungarn, denen die SS in ihrer antisemitischen Weltsicht eine besondere Gefährlichkeit unterstellte,
                    bestand diese zudem darauf, dass sie nicht in Gruppen unter 500 eingesetzt werden
                    dürften.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup> Circa
                    5.800 jüdische Frauen, die aus Ungarn deportiert worden waren, gelangten so aus Auschwitz in
                    Außenlager des Konzentrationslagers Neuengamme, teilweise über Bergen-Belsen oder andere
                    Konzentrationslager.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup>
                </p>
                <p>
                    Nach der Absetzung von Miklós Horthy und dem durch die deutschen Besatzer unterstützen Putsch der
                    faschistischen Pfeilkreuzler in Ungarn im Oktober 1944 wurden die Deportationen in den noch nicht
                    von der Roten Armee befreiten Gebieten erneut aufgenommen. Mehrere zehntausend Juden und Jüdinnen
                    wurden zu Fuß zur österreichischen Grenze getrieben, wo sie deutschen Stellen übergeben wurden. Auch
                    sie wurden anschließend als Zwangsarbeiter und Zwangsarbeiterinnen
                    eingesetzt.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup> Ein Teil von ihnen
                    wurde auch nach Norddeutschland deportiert, so etwa circa 840 Häftlinge die im November 1944 im
                    Stammlager Neuengamme ankamen. Hinzu kamen männliche Häftlinge die ebenfalls über Auschwitz zur
                    Zwangsarbeit nach Norddeutschland deportiert wurden. Insgesamt wird die Zahl der Häftlinge aus
                    Ungarn in Neuengamme und seinen Außenlager auf etwa 7.200
                    geschätzt.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup> Hinzu kommen die Häftlinge, die
                    über Bergen-Belsen in Außenlager anderer Stammlager deportiert wurden oder im Zuge der Räumungen
                    vieler Konzentrationslager zum Kriegsende nach Bergen-Belsen gelangten. Da über 15.000 Namen von
                    KZ-Häftlingen aus Ungarn in Bergen-Belsen bekannt sind, diese aufgrund der schlechten Quellenlage
                    nur einen Bruchteil der tatsächlichen Anzahl darstellen, war die Gesamtzahl der Häftlinge, die aus
                    Ungarn deportiert wurden und in nordwestdeutschen Konzentrationslagern inhaftiert waren, sicherlich
                    wesentlich viel größer.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">„Vernichtung durch Arbeit“ und Überleben</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die jüdischen KZ-Häftlinge wurden insbesondere bei der körperlich schweren Untertageverlagerung der
                    Rüstungsindustrie eingesetzt, zu der die Nationalsozialisten ab 1943 angesichts der alliierten
                    Luftüberlegenheit übergegangen waren. Aber auch in anderen Zweigen der Rüstungsindustrie und bei der
                    Trümmerräumung wurde auf die Zwangsarbeit der ungarischen Juden und Jüdinnen
                    zurückgegriffen.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\" Weibliche KZ-Häftlinge aus Ungarn und Polen, die in der Bemer Innenstadt Trümmer räumen\"/>
                <p class=\"caption\">
                    Weibliche KZ-Häftlinge aus Ungarn und Polen bei der Trümmerräumung in der Bremer Innenstadt. Der
                    Einsatz der KZ-Häftlinge war sichtbarer Teil des Alltags, wie die Anwesenheit der Zivilisten und
                    Zivilistinnen links im Bild zeigt. Bremer Staatsarchiv, StA HB, 10, B 1944-03/137.
                </p>
                <p>
                    An vielen Arbeitsorten waren die Arbeitsbedingungen so gestaltet, dass ein Überleben nicht dauerhaft
                    möglich war. Tausende Häftlinge wurden so im Zuge einer „Vernichtung durch Arbeit“ durch die
                    Nationalsozialisten ermordet.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup> Die
                    Überlebenschancen der Häftlinge hingen dabei nicht zuletzt von den
                    zugeteilten Arbeitseinsätzen ab. Um eine Befreiung der KZ-Häftlinge durch die Alliierten zu
                    verhindern, wurden deren Lager vor der sich nähernden Front geräumt. Die Häftlinge wurden per Zug
                    oder zu Fuß in sich weiterhin unter deutscher Kontrolle befindliche Konzentrationslager deportiert.
                    Viele Häftlinge starben auf diesen durch die Überlebenden als Todesmärsche charakterisierten
                    Transporten. Nur etwa 63 Prozent der nach Deutschland deportierten Juden und Jüdinnen, die zuvor aus
                    Ungarn deportiert waren, überlebten die nationalsozialistische
                    Zwangsarbeit.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
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
                        Randolph L. Braham, Historical Overview, in: Ders. (Hrsg.), The geographical encyclopedia of the
                        Holocaust in Hungary, Vol. 1, Evanston 2013, S. XV-XCV.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Marc Buggeln, Were Concentration Camp Prisoners Slaves? The Possibilities and Limits of
                        Comparative History and Global Historical Perspectives, in: International Review of Social
                        History 53 (2008), S. 101-129.
                    </li>
                    <li>
                        Detlef Garbe, Neuengamme im System der Konzentrationslager. Studien zur Ereignis- und
                        Rezeptionsgeschichte, Berlin 2015.
                    </li>
                    <li>
                        Christian Gerlach / Götz Aly, Das letzte Kapitel. Der Mord an den ungarischen Juden, Stuttgart /
                        München 2002.
                    </li>
                    <li>
                        Susanne Heim et al. (Hrsg.), Die Verfolgung und Ermordung der europäischen Juden durch das
                        nationalsozialistische Deutschland 1933.1945, Band 15. Ungarn 1944-1945. Bearbeitet von Regina
                        Fritz, Berlin / Boston 2021
                    </li>
                    <li>
                        Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001.
                    </li>
                    <li>
                        Jens-Christian Wagner, NS-Untertageanlagen und Gedenkstättenarbeit: Erfahrungen aus
                        Mittelbau-Dora, in: Gedenkstätten-Rundbrief, 147 (2009), S. 5-13.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Vgl. Christian Gerlach / Götz Aly, Das letzte Kapitel. Der Mord an den ungarischen Juden, Stuttgart / München 2002, S. 28-30.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Gerlach / Aly, letzte Kapitel, S. 31-35.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Randolp L Braham, Historical Overview, in: Ders. (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1, Evanston 2013, S. XV-XCV, S. XIX.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Braham, Overview, S. XXII.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 78.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 49.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 74-75; Braham, Overview, S. XXIII-XXVIII.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 75-76; Braham, Overview, S. XXVIII-XXX.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 81-83.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 83-84, 91-98.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Vgl. ausführlich bei Aly / Gerlach, letzte Kapitel, S. 249-269; Braham, Overview, S. XLIV.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 268269, 274-283; Braham, Overview, S. li-lxxx.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 294.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S- 375-414.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Vgl. Mark Spoerer, Zwangsarbeit unterm Hakenkreuz. Ausländische Zivilarbeiter, Kriegsgefangene und Häftlinge im Deutschen Reich und im besetzten Europa 1939-1945, Stuttgart / München 2001.
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Vgl. Spoerer, Zwangsarbeit, S. 31f.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Vgl. Spoerer, Zwangsarbeit, S. 35-88, 99-115.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Vgl. ausführlich bei Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, S. 605-624.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Vgl. Spoerer, Zwangsarbeit, S. 24-34.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Vgl. Marc Buggeln, Arbeit und Gewalt, S. 218- 225; Spoerer, Zwangsarbeit, S. 17; Marc Buggeln, Were Concentration Camp Prisoners Slaves? The Possibilities and Limits of Comparative History and Global Historical Perspectives, in: International Review of Social History 53 (2008), S. 101-129.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 170f., 375ff.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Aly / Gerlach, letzte Kapitel, S. 377f; Susanne Heim et al. (Hrsg.), Die Verfolgung und Ermordung der europäischen Juden durch das nationalsozialistische Deutschland 1933.1945, Band 15. Ungarn 1944-1945. Bearbeitet von Regina Fritz, Berlin / Boston 2021, S. 60.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Die Angaben basieren auf eigenen Forschungen im Rahmen dieses Projektes und Schätzungen der Gedenkstätten Neuengamme und Bergen-Belsen.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 355-367.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Vgl. Detlef Garbe, Neuengamme im System der Konzentrationslager. Studien zur Ereignis- und Rezeptionsgeschichte, Berlin 2015, S. 101.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Vgl. Gerlach / Aly, letztes Kapitel, S. 379.394; Jens-Christian Wagner, NS-Untertageanlagen und Gedenkstättenarbeit: Erfahrungen aus Mittelbau-Dora, in: Gedenkstätten-Rundbrief, 147 (2009), S. 5-13, S. 6.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Eine Diskussion des Begriffes „Vernichtung durch Arbeit“ findet sich bei Spoerer, Zwangsarbeit, S. 180-183.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Vgl. Gerlach / Aly, letztes Kapitel.
                        <a href=\"#footnote28\">&uarr;</a>
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
                    Louis Wörner: Historischer Kontext: Ungarn und nationalsozialistische Zwangsarbeit,
                    in: Holocaust in Ungarn und Deportationen
                    nach Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 478
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
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
        return "site/context.html.twig";
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
        return array (  586 => 478,  386 => 281,  262 => 160,  255 => 156,  231 => 135,  133 => 40,  125 => 35,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Historischer Kontext | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-context.html.twig' %}


    <div class=\"container g-4 py-5 study\">
        <h2>Historischer Kontext: Ungarn und nationalsozialistische Zwangsarbeit</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Mit dem Zerfall Österreich-Ungarns am Ende des Ersten Weltkrieges, kam es ab 1918 zu einer
                    umfassenden staatlichen Neuordnung Südosteuropas. 1920 musste Ungarn dabei im Friedensvertrag von
                    Trianon zwei Drittel seines bisherigen Staatsgebietes an Nachbar- und Nachfolgestaaten wie zum
                    Beispiel die neu entstandene Tschechoslowakei oder Rumänien abtreten. Die Rückgewinnung dieser
                    Gebiete und Wiederherstellung eines „Großungarns“ war ein zentrales politisches Ziel der ungarischen
                    Revanchisten, die zu diesem Zwecke auch das Bündnis Ungarns mit dem nationalsozialistischen
                    Deutschland vorantrieben<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    Auf Druck Deutschlands wurde 1938 zunächst ein südlicher Teil der Tschechoslowakei und nach deren
                    endgültiger Zerschlagung 1939 durch Deutschland auch die Region Transkarpartien von Ungarn besetzt
                    und annektiert. Auch Rumänien wurde 1940 durch die Achsenmächte gezwungen, Teile seines
                    Staatsgebietes an Ungarn abzutreten. Nach dem deutschen und italienischen Angriff auf das Königreich
                    Jugoslawien annektierte Ungarn zudem Gebiete im nördlichen Teil des
                    Landes.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup> Die jüdische Bevölkerung
                    dieser von einer Vielzahl verschiedener Bevölkerungsgruppen mit unterschiedlichen Sprachen und
                    Religionen bewohnten Regionen teilte damit das Schicksal der übrigen ungarischen Juden und Jüdinnen
                    und wird auch heute noch häufig in Forschungs- und Gedenkkontexten als Teil dieser Gruppe
                    verstanden, obwohl sie selbst sich nur zum Teil als ungarisch verstanden oder Ungarisch sprachen.
                    Juden und Jüdinnen aus den annektierten Gebieten machten 1941 etwa 45 Prozent der jüdischen
                    Bevölkerung des damaligen Ungarns aus.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                    Auf dieser Website wird daher die Formulierung „aus Ungarn deportiert“ verwendet.
                </p>
                <a href=\"{{ asset('images/history/ungarn-1944.png') }}\"
                   title=\"Karte vergrößern\"
                   data-lightbox=\"map-ungarn\"
                   data-title=\"Karte Ungarns im Jahr 1944 mit annektierten Gebieten in der Slowakei, Karpatenukraine, Siebenbürgen, Prekmurje, Medimurje und Baranya Bácska.\">
                    <img class=\"gallery img-fluid\" style=\"width: 600px;\"
                         src=\"{{ asset('images/history/ungarn-1944.png') }}\"
                         alt=\"Karte Ungarns im Jahr 1944 mit annektierten Gebieten in der Slowakei, Karpatenukraine, Siebenbürgen, Prekmurje, Medimurje und Baranya Bácska\"/>
                </a>
                <p class=\"caption\">
                    Ungarisches Staatsgebiet und Annektierung 1920 bis 1941. Quelle: <a
                            href=\"https://commons.wikimedia.org/wiki/File:Hungary_map_1941.png\"
                            title=\"Abbildung auf Wiki Commons\">https://commons.wikimedia.org</a>. Lizenz: <a
                            href=\"https://creativecommons.org/public-domain/\"
                            title=\"Mehr Informationen zur Lizenz auf der Creative Commons Website\">Public domain</a>.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Antisemitismus in Ungarn</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    1941 trat Ungarn als Verbündeter des nationalsozialistischen Deutschlands in den Zweiten Weltkrieg
                    ein. Die Lage für die jüdische Bevölkerung verschärfte sich
                    dadurch.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup> Bereits seit den 1920er-Jahren,
                    waren Juden und Jüdinnen in Ungarn diskriminierenden Gesetzten unterworfen, zu denen nach
                    Kriegseintritt weitere hinzukamen. Männliche Juden, die vom Kriegsdienst ausgeschlossen waren,
                    wurden etwa in Arbeitsbataillonen zur Zwangsarbeit an der Front eingeteilt, wo vermutlich 15.000 von
                    ihnen starben.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup> 1941 wurden zudem Ehen zwischen
                    Juden und Nichtjuden verboten und die Definition, wer
                    als jüdisch anzusehen sei, ausgeweitet. Entscheidend war zukünftig nicht nur die
                    Religionszugehörigkeit, sondern auch die Abstammung.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                    Ende August 1941 wurden dann circa 18.000 Juden
                    und Jüdinnen, die entweder zuvor aus anderen Ländern vor den Nationalsozialisten nach Ungarn
                    geflohen waren oder nicht schnell genug ihre ungarische Staatsangehörigkeit nachweisen konnten, als
                    „fremde“ Juden und Jüdinnen aus Transkarpatien in von Deutschland besetzte Gebiete deportiert. Dort
                    wurden sie im Massaker von Kamenez-Podolsk zusammen mit einheimischen Juden und Jüdinnen durch
                    Angehörige der deutschen Ordnungspolizei und der SS ermordet. Inwieweit auch ukrainische und
                    ungarische Verbände beteiligt waren ist umstritten. Insgesamt 23.600 Menschen wurden in der bis
                    dahin größten Massenerschießung und Mordaktion des Holocaust ermordet, darunter circa 14.000 bis
                    16.000 aus Ungarn deportierte Juden und Jüdinnen.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                    Auch In den annektierten Gebieten des ehemaligen
                    Jugoslawiens kam es zu einem Massaker durch ungarische Gendarmerie bei dem ungefähr 2.550 Serben und
                    Serbinnen sowie 700 Juden und Jüdinnen ermordet
                    wurden.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup> Die ungarische Regierung weigerte sich
                    zunächst, die als ungarisch verstandenen Juden und Jüdinnen an das Deutsche Reich auszuliefern,
                    womit diese vorerst vor der Deportation in die Vernichtungslager verschont
                    blieben.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                </p>
                <p>
                    Als 1943 ein Sieg der Achsenmächte immer unwahrscheinlicher wurde, begann die ungarische Regierung –
                    wie auch zuvor Italien –, heimlichen Kontakt mit den Alliierten aufzunehmen. Nachdem Italien
                    tatsächlich im September 1943 einen Waffenstillstand mit den Alliierten unterzeichnet und das
                    Bündnis mit dem nationalsozialistischen Deutschland aufgelöst hatte, sollte eine Wiederholung dieser
                    Vorgänge in Ungarn verhindert werden. Im März 1944 wurde Ungarn deshalb durch deutsche Truppen
                    besetzt und eine neue Regierung eingesetzt, wobei das Staatsoberhaupt Miklós Horthy sein Amt
                    behielt.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
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

        <h3 class=\"mt-4\">Deportationen der Juden und Jüdinnen unter deutscher Besatzung</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Mit den deutschen Besatzungstruppen erreichte auch ein Sonderkommando Ungarn. Unter der Führung von
                    Adolf Eichmann sollte dieses die Deportation der Juden und Jüdinnen Ungarns organisieren. Miklós
                    Horthy hatte sich zuvor unter deutschem Druck zur Auslieferung hunderttausender Juden und Jüdinnen
                    als Arbeitskräfte bereit erklärt.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    Unmittelbar nach der deutschen Besatzung wurde die jüdische
                    Bevölkerung zunächst zum Tragen eines Sternes verpflichtet und anschließend ab April 1944 in Ghettos
                    eingewiesen. Bereits im Mai 1944 begannen die ersten Deportationen in den Konzentrations- und
                    Vernichtungslagerkomplex Auschwitz. Die ehemals tschechoslowakischen und rumänischen Gebiete Ungarns
                    gehörten zu den ersten Gebieten, aus denen die jüdische Bevölkerung deportiert wurde, da ihre
                    baldige Befreiung durch die Rote Armee befürchtet wurde und die Deportation der dortigen Juden und
                    Jüdinnen der ungarischen Regierung innenpolitisch unbedenklicher erschien. In weniger als zwei
                    Monaten verschleppten die Nationalsozialisten mithilfe der ungarischen Gendarmerie circa 437.000
                    Juden und Jüdinnen in das Konzentrations- und Vernichtungslager Auschwitz und
                    Auschwitz-Birkenau.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup>
                </p>
                <div>
                    <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                         alt=\"Ankunft jüdischer Männer, Frauen und Kinder  in Auschwitz-Birkenau\"/>
                    <p class=\"caption\">
                        Ankunft jüdischer Männer, Frauen und Kinder aus Transkarpatien in Auschwitz-Birkenau im Mai 1944
                        vor der Selektion. Die Fotos wurden mit unbekanntem Zweck von SS-Männern angefertigt und stellen
                        deren Perspektive da. Die Fotos sind eine der wenigen fotografischen Quellen aus den
                        Vernichtungslagern. Auschwitz-Album, Yad Vashem.
                    </p>
                </div>
                <p>
                    Den Großteil von ihnen ermordete die SS direkt nach ihrer Ankunft in den Gaskammern in Birkenau.
                    Lediglich etwa ein Viertel wurde bei den „Selektionen“ ausgewählt, um Zwangsarbeit für das Deutsche
                    Reich zu leisten.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                    Ein Teil der Häftlinge wurde in Arbeitskommandos direkt im Lagerkomplex Auschwitz
                    eingesetzt, beispielweise in den eigens dort angesiedelten Industriebetrieben. Während ihrer Zeit in
                    Auschwitz standen die Häftlinge in ständiger Gefahr, bei erneuten „Selektionen“ zur Ermordung
                    ausgewählt zu werden. Ein anderer Teil wurde für Arbeitskommandos in einem der über tausend
                    Außenlager des nationalsozialistischen KZ-Systems ausgewählt, die an verschiedenen
                    Industriestandorten im Deutschen Reich oder in den besetzten Gebieten angesiedelt
                    waren.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"Ankunft jüdischer Männer, Frauen und Kinder  in Auschwitz-Birkenau\"/>
                <p class=\"caption\">
                    Standorte von Konzentrationslager in Norddeutschland, in denen aus Ungarn deportierte Personen seit 1944 inhaftiert waren.
                    <a href=\"{{ path('app_map') }}\" title=\"Kartenübersicht\">
                        &#10149; Zur interaktiven Karte
                    </a>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>


        <h3 class=\"mt-4\" id=\"#zwangsarbeit\">Zwangsarbeit im Nationalsozialismus</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Das nationalsozialistische Deutschland griff in hohem Maße auf Zwangsarbeit unterschiedlicher Formen
                    zurück um seinen Arbeitskräftebedarf zu decken, alleine im Deutschen Reich mussten während des
                    Zweiten Weltkrieges über 13,5 Millionen Menschen Zwangsarbeit
                    leisten.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup> Eine Steigerung der
                    Erwerbsarbeit von Frauen wurde von den Nationalsozialisten aus ideologischen Gründen und
                    innenpolitischer Rücksichtnahme abgelehnt, so dass stattdessen auf ausländische Arbeitskräfte
                    zurückgegriffen werden sollte.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                    Da die Rekrutierung freiwilliger ziviler Arbeitskräfte, sogenannte
                    „Fremdarbeiter“, in den verbündeten Staaten und den besetzten Gebieten aber weit hinter den
                    Erwartungen der nationalsozialistischen Machthaber zurück blieb, wurden ab 1940 teilweise ganze
                    Geburtsjahrgänge zwangsverpflichtet oder unter Gewalt deportiert. Nach dem Überfall auf die
                    Sowjetunion bildeten Menschen aus der Sowjetunion, sogenannte „Ostarbeiter“ schnell die größte
                    Gruppe der zivilen Zwangsarbeiter und Zwangsarbeiterinnen. Hinzu kamen Kriegsgefangene, die
                    ebenfalls zur Zwangsarbeit herangezogen wurden, sowie
                    KZ-Gefangene.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup> Zwangsarbeit wurde dabei in
                    allen Industriezweigen aber auch in der Landwirtschaft und in Privathaushalten eingesetzt. Die
                    Zwangsarbeiter und Zwangsarbeiterinnen gehörten damit insbesondere in den letzten Kriegsjahren zum
                    sichtbaren Alltag im nationalsozialistischen Deutschland. Die Lager, in denen sie untergebracht
                    waren, befanden sich auch in Wohngebieten und ihre Arbeitsplätze wie auch Arbeitswege teilten sie
                    mit deutschen Zivilisten.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                    Eine Übersicht über die bekannten Lager und Arbeitsorte von
                    Zwangsarbeitern und Zwangsarbeiterinnen in Hamburg gibt es beispielsweise
                    <a href=\"https://zwangsarbeit-in-hamburg.de/\"
                       title=\"Website zu Zwangsarbeit der Landeszentrale für Politische Bildung Hamburg\">hier</a>.
                </p>
                <p>
                    Die individuellen Lebens- und Arbeitsbedingungen der Zwangsarbeiter und Zwangsarbeiterinnen hingen
                    dabei von ihrem rechtlichen Status, ihrer nationalen Zugehörigkeit, ihrem Geschlecht sowie ihrem
                    Arbeitsort ab. Insbesondere Menschen aus Polen und der Sowjetunion waren der Willkür und Gewalt
                    ihrer Vorarbeiter und des Wachpersonals ausgeliefert und wurden oft gezwungen unter
                    menschenunwürdigen Bedingungen zu leben und zu arbeiten. Noch brutaler und menschenverachtender
                    waren die Arbeitsbedingungen der sowjetischen Kriegsgefangenen, die 1,3 Millionen Soldaten nicht
                    überlebten. Zusammen mit den KZ-Häftlingen bildeten sie das unterste Ende der rassistischen und
                    sozialdarwinistischen Hierarchie der nationalsozialistischen Zwangsarbeit. Die harte körperliche
                    Arbeit, die bewusst herbeigeführte Unterernährung und mangelhafte Ausstattung machten ein Überleben
                    für viele Häftlinge nicht möglich. Sie wurden mittels der Bedingungen, unter denen sie gezwungen
                    wurden zu arbeiten und zu leben, durch die Nationalsozialisten
                    ermordet.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                </p>
                <p>
                    Für die Arbeit der KZ-Häftlinge prägte Wolfgang Sofsky daher den Begriff „Terrorarbeit“, um zu
                    betonen, dass der Zweck der Arbeit nicht deren Produktivität gewesen sei, sondern die ineffektiven
                    Arbeitseinsätze vor allem der Terrorisierung der Häftlinge gedient hätten. Für die Arbeit in den
                    Neuengammer Außenlagern lehnt der Historiker Marc Buggeln diesen Begriff explizit ab und
                    argumentiert, dass die maximale Ausbeutung der Arbeitskraft der Häftlinge bis zum Tod durch
                    Erschöpfung im ökonomischen Interesse der Unternehmen gewesen sei. Er plädiert stattdessen für den
                    Begriff „Sklavenarbeit“, der auch von vielen Überlebenden verwendet
                    wird.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Zwangsarbeit der aus Ungarn deportierten Juden und Jüdinnen</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Nachdem andere Arbeitskräftereservoirs für Zwangsarbeit 1944 bereits ausgeschöpft waren, hatten die
                    Nationalsozialisten sich 1944 entschlossen, auch Juden und Jüdinnen aus den Vernichtungslagern an
                    Industriestandorte ins Deutsche Reich zu deportieren. Etwa 200.000 Juden und Jüdinnen wurden
                    daraufhin in Konzentrationslager und ihre Außenlager im Deutschen Reich deportiert, darunter auch
                    circa 110.000 Juden und Jüdinnen, die zuvor aus Ungarn deportiert worden
                    waren.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup> Um die Kontakte mit
                    der Zivilbevölkerung und Fluchtmöglichkeiten zu begrenzen, wurden diese jüdischen KZ-Häftlinge in
                    eigenen Außenlagern festgehalten, die weiterhin der SS unterstanden. Für die Juden und Jüdinnen aus
                    Ungarn, denen die SS in ihrer antisemitischen Weltsicht eine besondere Gefährlichkeit unterstellte,
                    bestand diese zudem darauf, dass sie nicht in Gruppen unter 500 eingesetzt werden
                    dürften.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup> Circa
                    5.800 jüdische Frauen, die aus Ungarn deportiert worden waren, gelangten so aus Auschwitz in
                    Außenlager des Konzentrationslagers Neuengamme, teilweise über Bergen-Belsen oder andere
                    Konzentrationslager.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup>
                </p>
                <p>
                    Nach der Absetzung von Miklós Horthy und dem durch die deutschen Besatzer unterstützen Putsch der
                    faschistischen Pfeilkreuzler in Ungarn im Oktober 1944 wurden die Deportationen in den noch nicht
                    von der Roten Armee befreiten Gebieten erneut aufgenommen. Mehrere zehntausend Juden und Jüdinnen
                    wurden zu Fuß zur österreichischen Grenze getrieben, wo sie deutschen Stellen übergeben wurden. Auch
                    sie wurden anschließend als Zwangsarbeiter und Zwangsarbeiterinnen
                    eingesetzt.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup> Ein Teil von ihnen
                    wurde auch nach Norddeutschland deportiert, so etwa circa 840 Häftlinge die im November 1944 im
                    Stammlager Neuengamme ankamen. Hinzu kamen männliche Häftlinge die ebenfalls über Auschwitz zur
                    Zwangsarbeit nach Norddeutschland deportiert wurden. Insgesamt wird die Zahl der Häftlinge aus
                    Ungarn in Neuengamme und seinen Außenlager auf etwa 7.200
                    geschätzt.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup> Hinzu kommen die Häftlinge, die
                    über Bergen-Belsen in Außenlager anderer Stammlager deportiert wurden oder im Zuge der Räumungen
                    vieler Konzentrationslager zum Kriegsende nach Bergen-Belsen gelangten. Da über 15.000 Namen von
                    KZ-Häftlingen aus Ungarn in Bergen-Belsen bekannt sind, diese aufgrund der schlechten Quellenlage
                    nur einen Bruchteil der tatsächlichen Anzahl darstellen, war die Gesamtzahl der Häftlinge, die aus
                    Ungarn deportiert wurden und in nordwestdeutschen Konzentrationslagern inhaftiert waren, sicherlich
                    wesentlich viel größer.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">„Vernichtung durch Arbeit“ und Überleben</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Die jüdischen KZ-Häftlinge wurden insbesondere bei der körperlich schweren Untertageverlagerung der
                    Rüstungsindustrie eingesetzt, zu der die Nationalsozialisten ab 1943 angesichts der alliierten
                    Luftüberlegenheit übergegangen waren. Aber auch in anderen Zweigen der Rüstungsindustrie und bei der
                    Trümmerräumung wurde auf die Zwangsarbeit der ungarischen Juden und Jüdinnen
                    zurückgegriffen.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\" Weibliche KZ-Häftlinge aus Ungarn und Polen, die in der Bemer Innenstadt Trümmer räumen\"/>
                <p class=\"caption\">
                    Weibliche KZ-Häftlinge aus Ungarn und Polen bei der Trümmerräumung in der Bremer Innenstadt. Der
                    Einsatz der KZ-Häftlinge war sichtbarer Teil des Alltags, wie die Anwesenheit der Zivilisten und
                    Zivilistinnen links im Bild zeigt. Bremer Staatsarchiv, StA HB, 10, B 1944-03/137.
                </p>
                <p>
                    An vielen Arbeitsorten waren die Arbeitsbedingungen so gestaltet, dass ein Überleben nicht dauerhaft
                    möglich war. Tausende Häftlinge wurden so im Zuge einer „Vernichtung durch Arbeit“ durch die
                    Nationalsozialisten ermordet.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup> Die
                    Überlebenschancen der Häftlinge hingen dabei nicht zuletzt von den
                    zugeteilten Arbeitseinsätzen ab. Um eine Befreiung der KZ-Häftlinge durch die Alliierten zu
                    verhindern, wurden deren Lager vor der sich nähernden Front geräumt. Die Häftlinge wurden per Zug
                    oder zu Fuß in sich weiterhin unter deutscher Kontrolle befindliche Konzentrationslager deportiert.
                    Viele Häftlinge starben auf diesen durch die Überlebenden als Todesmärsche charakterisierten
                    Transporten. Nur etwa 63 Prozent der nach Deutschland deportierten Juden und Jüdinnen, die zuvor aus
                    Ungarn deportiert waren, überlebten die nationalsozialistische
                    Zwangsarbeit.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
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
                        Randolph L. Braham, Historical Overview, in: Ders. (Hrsg.), The geographical encyclopedia of the
                        Holocaust in Hungary, Vol. 1, Evanston 2013, S. XV-XCV.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Marc Buggeln, Were Concentration Camp Prisoners Slaves? The Possibilities and Limits of
                        Comparative History and Global Historical Perspectives, in: International Review of Social
                        History 53 (2008), S. 101-129.
                    </li>
                    <li>
                        Detlef Garbe, Neuengamme im System der Konzentrationslager. Studien zur Ereignis- und
                        Rezeptionsgeschichte, Berlin 2015.
                    </li>
                    <li>
                        Christian Gerlach / Götz Aly, Das letzte Kapitel. Der Mord an den ungarischen Juden, Stuttgart /
                        München 2002.
                    </li>
                    <li>
                        Susanne Heim et al. (Hrsg.), Die Verfolgung und Ermordung der europäischen Juden durch das
                        nationalsozialistische Deutschland 1933.1945, Band 15. Ungarn 1944-1945. Bearbeitet von Regina
                        Fritz, Berlin / Boston 2021
                    </li>
                    <li>
                        Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001.
                    </li>
                    <li>
                        Jens-Christian Wagner, NS-Untertageanlagen und Gedenkstättenarbeit: Erfahrungen aus
                        Mittelbau-Dora, in: Gedenkstätten-Rundbrief, 147 (2009), S. 5-13.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Vgl. Christian Gerlach / Götz Aly, Das letzte Kapitel. Der Mord an den ungarischen Juden, Stuttgart / München 2002, S. 28-30.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Vgl. Gerlach / Aly, letzte Kapitel, S. 31-35.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Vgl. Randolp L Braham, Historical Overview, in: Ders. (Hrsg.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1, Evanston 2013, S. XV-XCV, S. XIX.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Vgl. Braham, Overview, S. XXII.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 78.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 49.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 74-75; Braham, Overview, S. XXIII-XXVIII.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 75-76; Braham, Overview, S. XXVIII-XXX.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 81-83.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 83-84, 91-98.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Vgl. ausführlich bei Aly / Gerlach, letzte Kapitel, S. 249-269; Braham, Overview, S. XLIV.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 268269, 274-283; Braham, Overview, S. li-lxxx.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 294.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S- 375-414.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Vgl. Mark Spoerer, Zwangsarbeit unterm Hakenkreuz. Ausländische Zivilarbeiter, Kriegsgefangene und Häftlinge im Deutschen Reich und im besetzten Europa 1939-1945, Stuttgart / München 2001.
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Vgl. Spoerer, Zwangsarbeit, S. 31f.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Vgl. Spoerer, Zwangsarbeit, S. 35-88, 99-115.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Vgl. ausführlich bei Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, S. 605-624.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Vgl. Spoerer, Zwangsarbeit, S. 24-34.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Vgl. Marc Buggeln, Arbeit und Gewalt, S. 218- 225; Spoerer, Zwangsarbeit, S. 17; Marc Buggeln, Were Concentration Camp Prisoners Slaves? The Possibilities and Limits of Comparative History and Global Historical Perspectives, in: International Review of Social History 53 (2008), S. 101-129.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 170f., 375ff.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Aly / Gerlach, letzte Kapitel, S. 377f; Susanne Heim et al. (Hrsg.), Die Verfolgung und Ermordung der europäischen Juden durch das nationalsozialistische Deutschland 1933.1945, Band 15. Ungarn 1944-1945. Bearbeitet von Regina Fritz, Berlin / Boston 2021, S. 60.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Die Angaben basieren auf eigenen Forschungen im Rahmen dieses Projektes und Schätzungen der Gedenkstätten Neuengamme und Bergen-Belsen.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Vgl. Aly / Gerlach, letzte Kapitel, S. 355-367.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Vgl. Detlef Garbe, Neuengamme im System der Konzentrationslager. Studien zur Ereignis- und Rezeptionsgeschichte, Berlin 2015, S. 101.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Vgl. Gerlach / Aly, letztes Kapitel, S. 379.394; Jens-Christian Wagner, NS-Untertageanlagen und Gedenkstättenarbeit: Erfahrungen aus Mittelbau-Dora, in: Gedenkstätten-Rundbrief, 147 (2009), S. 5-13, S. 6.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Eine Diskussion des Begriffes „Vernichtung durch Arbeit“ findet sich bei Spoerer, Zwangsarbeit, S. 180-183.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Vgl. Gerlach / Aly, letztes Kapitel.
                        <a href=\"#footnote28\">&uarr;</a>
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
                    Louis Wörner: Historischer Kontext: Ungarn und nationalsozialistische Zwangsarbeit,
                    in: Holocaust in Ungarn und Deportationen
                    nach Norddeutschland 1944, hrsg. vom
                    Institut für die Geschichte der deutschen Juden, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_context') }}. Lizenz: CC BY
                    4.0.
                </p>
            </div>
        </div>

    </div>

{% endblock %}", "site/context.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/context.html.twig");
    }
}
