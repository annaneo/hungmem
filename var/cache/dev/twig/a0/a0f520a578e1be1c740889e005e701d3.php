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

        yield " Kontext | ";
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
        yield from         $this->loadTemplate("elements/navigation-context.html.twig", "site/context.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "

    <div class=\"container g-4 py-5\">
        <h2>Historischer Kontext</h2>
        <h3 class=\"mt-4\">Situation nach 1945 und Neugründung der Gemeinde</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Nach Kriegsende befanden sich nur noch wenige Jüdinnen und Juden bzw. von den Nationalsozialisten
                    als jüdisch Verfolgte in Hamburg. Von den etwa 600 Personen lebten fast alle in so genannten
                    „Mischehen“ mit einem nicht-jüdischen Partner oder einer nichtjüdischen Partnerin verheiratet. Eine
                    kleine Minderheit hatte die Kriegsjahre im Versteck oder unter falscher Identität überlebt.
                </p>
                <p class=\"caption\">
                    Weiterführende Information:<br/>
                    Statistik zur Zahl der Hamburger Juden am 30.4.1945 in der Online-Quellenedition <em>Hamburger
                        Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>, URL:
                    <a class=\"caption\" href=\"https://juedische-geschichte-online.net/beitrag/berkemann-statistik-1945\">https://juedische-geschichte-online.net/beitrag/berkemann-statistik-1945</a>
                </p>
                <p>
                    Bereits im Juli 1945 wurde die Jüdische Gemeinde Hamburg von etwa 80 Überlebenden als
                    Einheitsgemeinde, die einen gemäßigten orthodoxen Ritus verfolgte, wiedergegründet. Wie nahezu alle
                    alltäglichen Lebensbereiche in den Nachkriegsjahren, wurde auch das jüdische Gemeindeleben von
                    Versorgungsengpässen und den Herausforderungen des materiellen (Wieder-)Aufbaus geprägt. So dienten
                    beispielsweise Räume in der Kielortallee 22 noch 15 Jahre lang als Bethaus, bis 1960 in der Hohen
                    Weide 34 die neu gebaute Synagoge eingeweiht wurde.
                </p>
            </div>

            <div class=\"col-md-5\">
                <div class=\"col\">

                    <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/history/ungarn-1944.png"), "html", null, true);
        yield "\"
                       title=\"Karte vergrößern\"
                       data-lightbox=\"map-ungarn\"
                       data-title=\"Karte Ungarns im Jahr 1944 mit annektierten Gebieten in der Slowakei, Karpatenukraine, Siebenbürgen, Prekmurje, Medimurje und Baranya Bácska.\">
                        <img class=\"gallery img-fluid\" style=\"width: 600px;\"
                             src=\"";
        // line 45
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
        </div>

        <div class=\"row mt-2\">
            <div class=\"col-md-6\">
                <p>
                    Weitere 47 Jahre später eröffnete mit dem Joseph-Carlebach-Bildungshaus erneut eine jüdische
                    Bildungseinrichtung in Hamburg. Das Bildungshaus umfasst einen Kindergarten, eine Grundschule sowie
                    eine weiterführende Schule und befindet sich in dem Gebäude der einstigen Talmud-Tora-Schule im
                    Grindelviertel, die von den Nationalsozialisten zwangsgeschlossen wurde. Das Gebäude wurde 2004 von
                    der Stadt Hamburg an die Jüdische Gemeinde rückübertragen. Der Bau beherbergt heute, neben
                    Räumlichkeiten für die Organisation und Durchführung der Kinderbetreuung und des Schulunterrichts,
                    auch das Gemeindezentrum der Jüdischen Gemeinde Hamburg, eine Bibliothek und weitere Räume für
                    Gemeinde- sowie Vereinsaktivitäten, wie zum Beispiel die Geschäftsstelle des Makkabi e. V.
                </p>
                <div class=\"caption mt-4\">
                    <p class=\"nomargin-b\">
                        Weiterführende Informationen:
                    </p>
                    <ul>
                        <li>
                            Eintrag zur Jüdischen Gemeinde (1945-1989) im historischen Nachschlagewerk <em>Das jüdische
                                Hamburg</em>, URL:
                            <a href=\"http://www.dasjuedischehamburg.de\">
                                http://www.dasjuedischehamburg.de/inhalt/j%C3%BCdische-gemeinde-1945-1989
                            </a>
                        </li>
                        <li>
                            Artikel zum Neuanfang der Jüdischen Gemeinde in Hamburg 1945 in der Online-Quellenedition
                            <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>, URL:
                            <a href=\"https://juedische-geschichte-online.net/beitrag/jgo:article-66\">https://juedische-geschichte-online.net/beitrag/jgo:article-66</a>
                        </li>
                        <li>
                            Artikel zur Grundsteinlegung der Synagoge in der Hohen Weide am 9.11.1958 in der
                            Online-Quellenedition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>,
                            URL:
                            <a href=\"https://juedische-geschichte-online.net/beitrag/menny-max-brauer-grundsteinlegung\">https://juedische-geschichte-online.net/beitrag/menny-max-brauer-grundsteinlegung</a>
                        </li>
                        <li>
                            Artikel zur erzwungenen Schließung der jüdischen Schulen in der Online-Quellenedition <em>Hamburger
                                Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>, URL:
                            <a href=\"https://juedische-geschichte-online.net/thema/erziehung-und-bildung#section-6\">https://juedische-geschichte-online.net/thema/erziehung-und-bildung#section-6</a>
                        </li>
                        <li>
                            Eintrag zum Joseph-Carlebach-Bildungshaus (frühere Talmud-Tora-Realschule) in der
                            Kartendarstellung <em>Orte Jüdischer Geschichte und Gegenwart in Hamburg</em>, URL:
                            <a href=\"https://juedische-geschichte-online.net/stadtplan/#3\">https://juedische-geschichte-online.net/stadtplan/#3</a>
                        </li>
                        <li>
                            Eintrag zur Talmud Tora Schule im historischen Nachschlagewerk <em>Das jüdische Hamburg</em>,
                            URL:
                            <a href=\"http://www.dasjuedischehamburg.de/inhalt/talmud-tora-schule-ttr\">http://www.dasjuedischehamburg.de/inhalt/talmud-tora-schule-ttr</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-5\">
                <img class=\"img-fluid\" src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"\"/>
                <p class=\"caption\">

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Displaced Persons und Remigration</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Von den sich nach Kriegsende auf deutschem Gebiet befindenden Jüdinnen und Juden, bzw. von den
                    Nationalsozialisten als jüdisch Verfolgten, versuchte die Mehrheit Deutschland zu verlassen. Dies
                    galt insbesondere für die ausländischen Displaced Persons, die in den Kriegsjahren unter anderem im
                    Zuge von Deportation oder Flucht nach Deutschland gekommen waren und mehrheitlich eine Auswanderung
                    in die Vereinigten Staaten oder nach Palästina beabsichtigten. Zeitgleich kehrte nur eine kleine
                    Gruppe von denjenigen Jüdinnen und Juden, denen die Flucht gelungen war, nach Deutschland zurück.
                    Ihre Gründe reichten von gesundheitlichen Problemen bis hin zu beruflichen oder juristischen
                    Motiven. Für Hamburg zeigt eine gemeindeinterne Statistik, dass innerhalb der ersten drei Jahre nach
                    Kriegsende lediglich 23 rückkehrende Personen verzeichnet wurden. Erst in den 1950er-Jahren
                    überstieg die Zahl der Remigrantinnen und Remigranten die der Auswanderinnen und Auswanderer.
                </p>
                <p>
                    Als 1950 der Zentralrat der Juden in Deutschland gegründet wurde, um die Interessen aller sich in
                    der Bundesrepublik befindenden Gemeinden zu vertreten, signalisierten seine Mitglieder mit der
                    Namenswahl einerseits den Bruch des Selbstverständnisses der Jüdinnen und Juden in Deutschland,
                    indem sie sich von der vor 1933 gängigen Formulierung der deutschen Staatsbürger jüdischen Glaubens
                    absetzten, andererseits sollte so der Tatsache Rechnung getragen werden, dass ein großer Teil der
                    nun in der Bundesrepublik lebenden Jüdinnen und Juden auch aus anderen Ländern stammte. Viele von
                    ihnen saßen auf den so genannten „gepackten Koffern“, stellten ihre Anwesenheit in Deutschland nach
                    dem Holocaust in Frage und sahen sie als eine nur vorübergehend mögliche Lösung an. Zugleich
                    bedeutete der in den 1950er-Jahren beginnende Bau von Gemeindeeinrichtungen und Synagogen auch eine
                    Anerkennung der Tatsache, dass es jüdisches Leben in Deutschland gab und auch in (naher) Zukunft
                    geben würde.
                </p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"img-fluid\" style=\"width: 440px;\" src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/history/ungarn-1944.png"), "html", null, true);
        yield "\"
                     alt=\"Foto der Gedenktafel für das Auswandererschiff Exodus\"/>
                <div class=\"caption\">
                    Gedenktafel für das Auswandererschiff „Exodus“ an den Landungsbrücken in Hamburg. Autor: Ajepbah,
                    CC-BY SA 3.0, <a
                            href=\"https://commons.wikimedia.org/wiki/File:Gedenktafel_Exodus_-_St._Pauli-Landungsbr%C3%BCcken_-_Br%C3%BCcke_3_(Hamburg-St._Pauli).jpg\">commons.wikimedia.org</a>.
                    Weitere Informationen: <a href=\"https://juedische-geschichte-online.net/stadtplan/#404\"
                                              title=\"Gedenktafel und weitere Orte jüdischer Geschichte in Kartenansicht\">https://juedische-geschichte-online.net/stadtplan/#404</a>
                </div>
                <p class=\"caption mt-3\">
                    Weiterführende Informationen:<br/>
                    in der Online-Quellenedition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>,
                    URL:
                    <a href=\"https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#home-less\">https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#home-less</a>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Persische Jüdinnen und Juden in Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Nur wenige Jahre nach Kriegsende begünstigte der Hamburger Freihafen den Aufbau internationaler
                    Handelsbeziehungen und wurde so Ziel einer anfänglich kleinen Gruppe von persischen Jüdinnen und
                    Juden, die hier ab den 1950er-Jahren überwiegend im Handel mit Teppichen aus dem Iran tätig wurden.
                    Durch den großen wirtschaftlichen Erfolg der sogenannten „Perserteppiche“ wuchs die Gemeinschaft in
                    Hamburg stetig und umfasste zu Beginn der 1970er- Jahre über 300 Personen.
                </p>
                <p class=\"caption\">
                    Weiterführende Informationen:<br/>
                    Online-Austellung <em>Jüdisches Leben seit 1945</em> im Rahmen der Online-Quellenedition <em>Hamburger
                        Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>, URL:
                    <a href=\"https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#\">
                        https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#
                    </a>
                </p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"img-fluid\" style=\"width: 440px;\" src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/history/ungarn-1944.png"), "html", null, true);
        yield "\"
                     alt=\"Foto mehrerer persisch-jüdischer Kinder, die an einem Tisch sitzen\"/>
                <div class=\"caption\">
                    Persisch-jüdische Kinder zu Beginn der 1970er-Jahre. Privatbesitz.
                    <a href=\"https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#\">
                        [Weitere Informationen in der Online-Ausstellung der
                        Online-Edition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>]
                    </a>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Zuwanderung aus der ehemaligen Sowjetunion und zunehmende Pluralisierung</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Einen noch grundlegenderen Wandel erfuhr das hiesige jüdische Leben durch die Einwanderung von
                    Jüdinnen und Juden aus der Sowjetunion und den Nachfolgestaaten seit den 1990er-Jahren.
                    Das Aufnahmeverfahren für sogenannte jüdische Kontingentflüchtlinge ermöglichte von 1991 bis 2005
                    die erleichterte Einreise in die Bundesrepublik von rund 215.000 russischsprachigen Jüdinnen und
                    Juden und deren Familien, die mehrheitlich aus der Ukraine und Russland stammten. In der Folge
                    dieser
                    Migration verdreifachten sich die die Mitgliedszahlen in den jüdischen Gemeinden in Deutschland,
                    sie liegen heute bei rund 92.000.
                    Doch nicht nur zahlenmäßig veränderte die Zuwanderung die Situation der jüdischen
                    Gemeinschaften in Deutschland, es fand auch eine neue Diversifizierung statt. So prallte die Welt
                    der in Deutschland ansässigen Jüdinnen und Juden, deren Selbstverständnis zu einem großen Teil von
                    den Erfahrungen des Holocaust geprägt wurde und die sich in erster Linie als eine in Gemeinden
                    organisierte Religionsgemeinschaft definierten, mit der Welt einer in der Regel kaum religiös
                    sozialisierten Einwanderergruppe aufeinander. Letzteres kann auf die jahrzehntelange atheistische
                    und antisemitische Politik der Sowjetregierung zurückgeführt werden, die ein Bekenntnis zum
                    Judentum, wenn überhaupt, nur im privaten Rahmen zuließ. Zudem galt das Judentum in der Sowjetunion
                    als eine Nationalität, die väterlicherseits weitergegeben wurde, wohingegen in den vorwiegend
                    orthodox ausgerichteten Gemeinden Deutschlands gemäß der Halacha nur die Abstammung von einer
                    jüdischen Mutter oder die Konversion bei einem orthodoxen Rabbiner zur Mitgliedschaft in einer
                    jüdischen Gemeinde berechtigten.
                </p>

            </div>
            <div class=\"col-md-5\">
                <img class=\"img-fluid\" style=\"width: 440px;\" src=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/history/ungarn-1944.png"), "html", null, true);
        yield "\"
                     alt=\"Scan des genehmigten Visumsantrag\"/>
                <div class=\"caption\">
                    Ausschnitt des Visum-Antrags von Elsara Lubinska. © Elsara Lubinska. Mit freundlicher Genehimigung.
                </div>

                <img class=\"img-fluid\" style=\"width: 440px;\" src=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/history/ungarn-1944.png"), "html", null, true);
        yield "\"
                     alt=\"Scan des sowjetischen Passes\"/>
                <div class=\"caption\">
                    Sowjetischer Pass von Elsara Lubinska. © Elsara Lubinska. Mit freundlicher Genehmigung.
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Als Konsequenz der unterschiedlichen jüdischen Selbstverständnisse und im Zuge eines
                    Generationenwechsels etablierten sich in den folgenden Jahren neben den orthodox geführten
                    Einheitsgemeinden weitere religiöse Strömungen. Dazu zählt eine neue Orthodoxie zu der die
                    ultraorthodoxen Gemeinschaften von Chabad Lubawitch gehört sowie liberal ausgerichtete Gemeinden. In
                    Hamburg gründeten sich außerhalb der Einheitsgemeinde das Bildungshaus von Chabad und die liberale
                    Davidsterngemeinde, aber auch innerhalb der Einheitsgemeinde lässt sich eine Pluralisierung des
                    religiösen Lebens feststellen, so ist dort seit einiger Zeit auch eine Reformsynagoge angesiedelt.
                </p>
                <p class=\"caption nomargin-b\">
                    Weiterführende Informationen:
                </p>
                <ul class=\"caption\">
                    <li>
                        Eintrag zur Jüdischen Gemeinde nach 1989 im historischen Nachschlagewerk <em>Das jüdische
                            Hamburg</em>, URL:
                        <a href=\"http://www.dasjuedischehamburg.de/\">http://www.dasjuedischehamburg.de/inhalt/j%C3%BCdische-gemeinde-nach-1989</a>
                    </li>
                    <li>
                        Eintrag zur Liberalen Jüdischen Gemeinde Hamburg in der Kartendarstellung <em>Orte Jüdischer
                            Geschichte und Gegenwart in Hamburg</em>, URL:
                        <a href=\"https://juedische-geschichte-online.net/stadtplan/#252\">https://juedische-geschichte-online.net/stadtplan/#252</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-5\">
                <p>
                    Ein zunehmender jüdischer Pluralismus lässt sich jedoch nicht nur im religiösen, sondern auch im
                    kulturellen Kontext feststellen. Nicht alle sich selbst als jüdisch identifizierende Personen werden
                    Mitglied einer Gemeinde und leben ihr Judentum auf religiöse Art und Weise aus. Als Beispiele für
                    jüdische Einrichtungen und Initiativen, die jenseits gemeindlicher Zugehörigkeiten Begegnungen und
                    Perspektiven bieten, können der Jüdische Salon am Grindel e.&nbsp;V., der MIT2WO Kulturnetzwerk e.&nbsp;V.
                    oder das Projekt Queer Jewish Futures genannt werden.
                </p>
                <p class=\"caption nomargin-b\">
                    Weiterführende Informationen:
                </p>
                <ul class=\"caption\">
                    <li>
                        Text zur Pluralität jüdischen Lebens in der Online-Austellung <em>Jüdisches Leben seit 1945</em>
                        im Rahmen der Online-Quellenedition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen
                            Geschichte</em>, URL:
                        <a href=\"https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#21st-century\">https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#21st-century</a>
                    </li>
                    <li>
                        Text zu Sonia Simmenauer in der Online-Austellung <em>Frauenleben</em> im Rahmen der
                        Online-Quellenedition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>,
                        URL:
                        <a href=\"https://juedische-geschichte-online.net/ausstellung/frauenleben#station5/6\">
                            https://juedische-geschichte-online.net/ausstellung/frauenleben#station5/6</a>
                    </li>
                </ul>
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
        return array (  343 => 236,  334 => 230,  291 => 190,  250 => 152,  209 => 114,  137 => 45,  129 => 40,  95 => 8,  92 => 7,  82 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Kontext | {{ parent() }} {% endblock %}


{% block body %}
    {% include 'elements/navigation-context.html.twig' %}


    <div class=\"container g-4 py-5\">
        <h2>Historischer Kontext</h2>
        <h3 class=\"mt-4\">Situation nach 1945 und Neugründung der Gemeinde</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Nach Kriegsende befanden sich nur noch wenige Jüdinnen und Juden bzw. von den Nationalsozialisten
                    als jüdisch Verfolgte in Hamburg. Von den etwa 600 Personen lebten fast alle in so genannten
                    „Mischehen“ mit einem nicht-jüdischen Partner oder einer nichtjüdischen Partnerin verheiratet. Eine
                    kleine Minderheit hatte die Kriegsjahre im Versteck oder unter falscher Identität überlebt.
                </p>
                <p class=\"caption\">
                    Weiterführende Information:<br/>
                    Statistik zur Zahl der Hamburger Juden am 30.4.1945 in der Online-Quellenedition <em>Hamburger
                        Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>, URL:
                    <a class=\"caption\" href=\"https://juedische-geschichte-online.net/beitrag/berkemann-statistik-1945\">https://juedische-geschichte-online.net/beitrag/berkemann-statistik-1945</a>
                </p>
                <p>
                    Bereits im Juli 1945 wurde die Jüdische Gemeinde Hamburg von etwa 80 Überlebenden als
                    Einheitsgemeinde, die einen gemäßigten orthodoxen Ritus verfolgte, wiedergegründet. Wie nahezu alle
                    alltäglichen Lebensbereiche in den Nachkriegsjahren, wurde auch das jüdische Gemeindeleben von
                    Versorgungsengpässen und den Herausforderungen des materiellen (Wieder-)Aufbaus geprägt. So dienten
                    beispielsweise Räume in der Kielortallee 22 noch 15 Jahre lang als Bethaus, bis 1960 in der Hohen
                    Weide 34 die neu gebaute Synagoge eingeweiht wurde.
                </p>
            </div>

            <div class=\"col-md-5\">
                <div class=\"col\">

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
        </div>

        <div class=\"row mt-2\">
            <div class=\"col-md-6\">
                <p>
                    Weitere 47 Jahre später eröffnete mit dem Joseph-Carlebach-Bildungshaus erneut eine jüdische
                    Bildungseinrichtung in Hamburg. Das Bildungshaus umfasst einen Kindergarten, eine Grundschule sowie
                    eine weiterführende Schule und befindet sich in dem Gebäude der einstigen Talmud-Tora-Schule im
                    Grindelviertel, die von den Nationalsozialisten zwangsgeschlossen wurde. Das Gebäude wurde 2004 von
                    der Stadt Hamburg an die Jüdische Gemeinde rückübertragen. Der Bau beherbergt heute, neben
                    Räumlichkeiten für die Organisation und Durchführung der Kinderbetreuung und des Schulunterrichts,
                    auch das Gemeindezentrum der Jüdischen Gemeinde Hamburg, eine Bibliothek und weitere Räume für
                    Gemeinde- sowie Vereinsaktivitäten, wie zum Beispiel die Geschäftsstelle des Makkabi e. V.
                </p>
                <div class=\"caption mt-4\">
                    <p class=\"nomargin-b\">
                        Weiterführende Informationen:
                    </p>
                    <ul>
                        <li>
                            Eintrag zur Jüdischen Gemeinde (1945-1989) im historischen Nachschlagewerk <em>Das jüdische
                                Hamburg</em>, URL:
                            <a href=\"http://www.dasjuedischehamburg.de\">
                                http://www.dasjuedischehamburg.de/inhalt/j%C3%BCdische-gemeinde-1945-1989
                            </a>
                        </li>
                        <li>
                            Artikel zum Neuanfang der Jüdischen Gemeinde in Hamburg 1945 in der Online-Quellenedition
                            <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>, URL:
                            <a href=\"https://juedische-geschichte-online.net/beitrag/jgo:article-66\">https://juedische-geschichte-online.net/beitrag/jgo:article-66</a>
                        </li>
                        <li>
                            Artikel zur Grundsteinlegung der Synagoge in der Hohen Weide am 9.11.1958 in der
                            Online-Quellenedition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>,
                            URL:
                            <a href=\"https://juedische-geschichte-online.net/beitrag/menny-max-brauer-grundsteinlegung\">https://juedische-geschichte-online.net/beitrag/menny-max-brauer-grundsteinlegung</a>
                        </li>
                        <li>
                            Artikel zur erzwungenen Schließung der jüdischen Schulen in der Online-Quellenedition <em>Hamburger
                                Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>, URL:
                            <a href=\"https://juedische-geschichte-online.net/thema/erziehung-und-bildung#section-6\">https://juedische-geschichte-online.net/thema/erziehung-und-bildung#section-6</a>
                        </li>
                        <li>
                            Eintrag zum Joseph-Carlebach-Bildungshaus (frühere Talmud-Tora-Realschule) in der
                            Kartendarstellung <em>Orte Jüdischer Geschichte und Gegenwart in Hamburg</em>, URL:
                            <a href=\"https://juedische-geschichte-online.net/stadtplan/#3\">https://juedische-geschichte-online.net/stadtplan/#3</a>
                        </li>
                        <li>
                            Eintrag zur Talmud Tora Schule im historischen Nachschlagewerk <em>Das jüdische Hamburg</em>,
                            URL:
                            <a href=\"http://www.dasjuedischehamburg.de/inhalt/talmud-tora-schule-ttr\">http://www.dasjuedischehamburg.de/inhalt/talmud-tora-schule-ttr</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-5\">
                <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"\"/>
                <p class=\"caption\">

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Displaced Persons und Remigration</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Von den sich nach Kriegsende auf deutschem Gebiet befindenden Jüdinnen und Juden, bzw. von den
                    Nationalsozialisten als jüdisch Verfolgten, versuchte die Mehrheit Deutschland zu verlassen. Dies
                    galt insbesondere für die ausländischen Displaced Persons, die in den Kriegsjahren unter anderem im
                    Zuge von Deportation oder Flucht nach Deutschland gekommen waren und mehrheitlich eine Auswanderung
                    in die Vereinigten Staaten oder nach Palästina beabsichtigten. Zeitgleich kehrte nur eine kleine
                    Gruppe von denjenigen Jüdinnen und Juden, denen die Flucht gelungen war, nach Deutschland zurück.
                    Ihre Gründe reichten von gesundheitlichen Problemen bis hin zu beruflichen oder juristischen
                    Motiven. Für Hamburg zeigt eine gemeindeinterne Statistik, dass innerhalb der ersten drei Jahre nach
                    Kriegsende lediglich 23 rückkehrende Personen verzeichnet wurden. Erst in den 1950er-Jahren
                    überstieg die Zahl der Remigrantinnen und Remigranten die der Auswanderinnen und Auswanderer.
                </p>
                <p>
                    Als 1950 der Zentralrat der Juden in Deutschland gegründet wurde, um die Interessen aller sich in
                    der Bundesrepublik befindenden Gemeinden zu vertreten, signalisierten seine Mitglieder mit der
                    Namenswahl einerseits den Bruch des Selbstverständnisses der Jüdinnen und Juden in Deutschland,
                    indem sie sich von der vor 1933 gängigen Formulierung der deutschen Staatsbürger jüdischen Glaubens
                    absetzten, andererseits sollte so der Tatsache Rechnung getragen werden, dass ein großer Teil der
                    nun in der Bundesrepublik lebenden Jüdinnen und Juden auch aus anderen Ländern stammte. Viele von
                    ihnen saßen auf den so genannten „gepackten Koffern“, stellten ihre Anwesenheit in Deutschland nach
                    dem Holocaust in Frage und sahen sie als eine nur vorübergehend mögliche Lösung an. Zugleich
                    bedeutete der in den 1950er-Jahren beginnende Bau von Gemeindeeinrichtungen und Synagogen auch eine
                    Anerkennung der Tatsache, dass es jüdisches Leben in Deutschland gab und auch in (naher) Zukunft
                    geben würde.
                </p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"img-fluid\" style=\"width: 440px;\" src=\"{{ asset('images/history/ungarn-1944.png') }}\"
                     alt=\"Foto der Gedenktafel für das Auswandererschiff Exodus\"/>
                <div class=\"caption\">
                    Gedenktafel für das Auswandererschiff „Exodus“ an den Landungsbrücken in Hamburg. Autor: Ajepbah,
                    CC-BY SA 3.0, <a
                            href=\"https://commons.wikimedia.org/wiki/File:Gedenktafel_Exodus_-_St._Pauli-Landungsbr%C3%BCcken_-_Br%C3%BCcke_3_(Hamburg-St._Pauli).jpg\">commons.wikimedia.org</a>.
                    Weitere Informationen: <a href=\"https://juedische-geschichte-online.net/stadtplan/#404\"
                                              title=\"Gedenktafel und weitere Orte jüdischer Geschichte in Kartenansicht\">https://juedische-geschichte-online.net/stadtplan/#404</a>
                </div>
                <p class=\"caption mt-3\">
                    Weiterführende Informationen:<br/>
                    in der Online-Quellenedition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>,
                    URL:
                    <a href=\"https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#home-less\">https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#home-less</a>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Persische Jüdinnen und Juden in Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Nur wenige Jahre nach Kriegsende begünstigte der Hamburger Freihafen den Aufbau internationaler
                    Handelsbeziehungen und wurde so Ziel einer anfänglich kleinen Gruppe von persischen Jüdinnen und
                    Juden, die hier ab den 1950er-Jahren überwiegend im Handel mit Teppichen aus dem Iran tätig wurden.
                    Durch den großen wirtschaftlichen Erfolg der sogenannten „Perserteppiche“ wuchs die Gemeinschaft in
                    Hamburg stetig und umfasste zu Beginn der 1970er- Jahre über 300 Personen.
                </p>
                <p class=\"caption\">
                    Weiterführende Informationen:<br/>
                    Online-Austellung <em>Jüdisches Leben seit 1945</em> im Rahmen der Online-Quellenedition <em>Hamburger
                        Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>, URL:
                    <a href=\"https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#\">
                        https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#
                    </a>
                </p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"img-fluid\" style=\"width: 440px;\" src=\"{{ asset('images/history/ungarn-1944.png') }}\"
                     alt=\"Foto mehrerer persisch-jüdischer Kinder, die an einem Tisch sitzen\"/>
                <div class=\"caption\">
                    Persisch-jüdische Kinder zu Beginn der 1970er-Jahre. Privatbesitz.
                    <a href=\"https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#\">
                        [Weitere Informationen in der Online-Ausstellung der
                        Online-Edition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>]
                    </a>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Zuwanderung aus der ehemaligen Sowjetunion und zunehmende Pluralisierung</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Einen noch grundlegenderen Wandel erfuhr das hiesige jüdische Leben durch die Einwanderung von
                    Jüdinnen und Juden aus der Sowjetunion und den Nachfolgestaaten seit den 1990er-Jahren.
                    Das Aufnahmeverfahren für sogenannte jüdische Kontingentflüchtlinge ermöglichte von 1991 bis 2005
                    die erleichterte Einreise in die Bundesrepublik von rund 215.000 russischsprachigen Jüdinnen und
                    Juden und deren Familien, die mehrheitlich aus der Ukraine und Russland stammten. In der Folge
                    dieser
                    Migration verdreifachten sich die die Mitgliedszahlen in den jüdischen Gemeinden in Deutschland,
                    sie liegen heute bei rund 92.000.
                    Doch nicht nur zahlenmäßig veränderte die Zuwanderung die Situation der jüdischen
                    Gemeinschaften in Deutschland, es fand auch eine neue Diversifizierung statt. So prallte die Welt
                    der in Deutschland ansässigen Jüdinnen und Juden, deren Selbstverständnis zu einem großen Teil von
                    den Erfahrungen des Holocaust geprägt wurde und die sich in erster Linie als eine in Gemeinden
                    organisierte Religionsgemeinschaft definierten, mit der Welt einer in der Regel kaum religiös
                    sozialisierten Einwanderergruppe aufeinander. Letzteres kann auf die jahrzehntelange atheistische
                    und antisemitische Politik der Sowjetregierung zurückgeführt werden, die ein Bekenntnis zum
                    Judentum, wenn überhaupt, nur im privaten Rahmen zuließ. Zudem galt das Judentum in der Sowjetunion
                    als eine Nationalität, die väterlicherseits weitergegeben wurde, wohingegen in den vorwiegend
                    orthodox ausgerichteten Gemeinden Deutschlands gemäß der Halacha nur die Abstammung von einer
                    jüdischen Mutter oder die Konversion bei einem orthodoxen Rabbiner zur Mitgliedschaft in einer
                    jüdischen Gemeinde berechtigten.
                </p>

            </div>
            <div class=\"col-md-5\">
                <img class=\"img-fluid\" style=\"width: 440px;\" src=\"{{ asset('images/history/ungarn-1944.png') }}\"
                     alt=\"Scan des genehmigten Visumsantrag\"/>
                <div class=\"caption\">
                    Ausschnitt des Visum-Antrags von Elsara Lubinska. © Elsara Lubinska. Mit freundlicher Genehimigung.
                </div>

                <img class=\"img-fluid\" style=\"width: 440px;\" src=\"{{ asset('images/history/ungarn-1944.png') }}\"
                     alt=\"Scan des sowjetischen Passes\"/>
                <div class=\"caption\">
                    Sowjetischer Pass von Elsara Lubinska. © Elsara Lubinska. Mit freundlicher Genehmigung.
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Als Konsequenz der unterschiedlichen jüdischen Selbstverständnisse und im Zuge eines
                    Generationenwechsels etablierten sich in den folgenden Jahren neben den orthodox geführten
                    Einheitsgemeinden weitere religiöse Strömungen. Dazu zählt eine neue Orthodoxie zu der die
                    ultraorthodoxen Gemeinschaften von Chabad Lubawitch gehört sowie liberal ausgerichtete Gemeinden. In
                    Hamburg gründeten sich außerhalb der Einheitsgemeinde das Bildungshaus von Chabad und die liberale
                    Davidsterngemeinde, aber auch innerhalb der Einheitsgemeinde lässt sich eine Pluralisierung des
                    religiösen Lebens feststellen, so ist dort seit einiger Zeit auch eine Reformsynagoge angesiedelt.
                </p>
                <p class=\"caption nomargin-b\">
                    Weiterführende Informationen:
                </p>
                <ul class=\"caption\">
                    <li>
                        Eintrag zur Jüdischen Gemeinde nach 1989 im historischen Nachschlagewerk <em>Das jüdische
                            Hamburg</em>, URL:
                        <a href=\"http://www.dasjuedischehamburg.de/\">http://www.dasjuedischehamburg.de/inhalt/j%C3%BCdische-gemeinde-nach-1989</a>
                    </li>
                    <li>
                        Eintrag zur Liberalen Jüdischen Gemeinde Hamburg in der Kartendarstellung <em>Orte Jüdischer
                            Geschichte und Gegenwart in Hamburg</em>, URL:
                        <a href=\"https://juedische-geschichte-online.net/stadtplan/#252\">https://juedische-geschichte-online.net/stadtplan/#252</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-5\">
                <p>
                    Ein zunehmender jüdischer Pluralismus lässt sich jedoch nicht nur im religiösen, sondern auch im
                    kulturellen Kontext feststellen. Nicht alle sich selbst als jüdisch identifizierende Personen werden
                    Mitglied einer Gemeinde und leben ihr Judentum auf religiöse Art und Weise aus. Als Beispiele für
                    jüdische Einrichtungen und Initiativen, die jenseits gemeindlicher Zugehörigkeiten Begegnungen und
                    Perspektiven bieten, können der Jüdische Salon am Grindel e.&nbsp;V., der MIT2WO Kulturnetzwerk e.&nbsp;V.
                    oder das Projekt Queer Jewish Futures genannt werden.
                </p>
                <p class=\"caption nomargin-b\">
                    Weiterführende Informationen:
                </p>
                <ul class=\"caption\">
                    <li>
                        Text zur Pluralität jüdischen Lebens in der Online-Austellung <em>Jüdisches Leben seit 1945</em>
                        im Rahmen der Online-Quellenedition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen
                            Geschichte</em>, URL:
                        <a href=\"https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#21st-century\">https://juedische-geschichte-online.net/ausstellung/jewish-life-since-1945-relaunch#21st-century</a>
                    </li>
                    <li>
                        Text zu Sonia Simmenauer in der Online-Austellung <em>Frauenleben</em> im Rahmen der
                        Online-Quellenedition <em>Hamburger Schlüsseldokumente zur deutsch-jüdischen Geschichte</em>,
                        URL:
                        <a href=\"https://juedische-geschichte-online.net/ausstellung/frauenleben#station5/6\">
                            https://juedische-geschichte-online.net/ausstellung/frauenleben#station5/6</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


{% endblock %}", "site/context.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/context.html.twig");
    }
}
