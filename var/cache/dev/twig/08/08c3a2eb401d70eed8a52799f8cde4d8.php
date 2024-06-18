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

/* site/about.html.twig */
class __TwigTemplate_1df0856fcf984f666fb35853e1a67e8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/about.html.twig", 1);
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

        yield "Über das Projekt | ";
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
        yield "
    <div class=\"container mt-5\">
        <h2>HUNGMEM</h2>
        <h3 class=\"mt-4\">Überblick</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Das Wissen darüber, wie Jüdinnen und Juden in unserer Stadt leben, welche Erfahrungen sie im Alltag
                    machen und welche Geschichten sie zu erzählen haben, ist gering. Oft nimmt die Mehrheitsgesellschaft
                    sie pauschal als „die anderen“ oder als Opfer antisemitischer Diskriminierung und Gewalt wahr. Das
                    <a href=\"https://www.igdj-hh.de/\" target=\"_blank\"
                       title=\"Homepage des Instituts für die Geschichte der deutschen Juden\">Institut für die Geschichte
                        der deutschen Juden (IGdJ)</a> möchte mit der Online-Plattform „Jüdisches Hamburg erzählen“ dazu
                    beitragen, diese Wahrnehmung zu ändern. Hamburger Jüdinnen und Juden, die in dieser Stadt studieren,
                    sich gesellschaftspolitisch und kulturell engagieren, als Volkswirtin, Juristen oder Journalistinnen
                    tätig waren oder als Lehrer:innen, Musiker und Selbstständige arbeiten, ergreifen das Wort.
                    Die <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Sammlung von Kurzinterviews</a> gibt exemplarische Einblicke in die
                    vielfältigen (Über-)Lebenswege, Herkünfte und Selbstverständnisse, die das jüdische Leben in Hamburg
                    in der jüngsten Vergangenheit und Gegenwart auszeichnen. </p>
            </div>
            <div class=\"col-lg\">
                <img class=\"img-fluid\" src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/projekt/Institut-Geschichte-der-deutschen-Juden-Hamburg.png"), "html", null, true);
        yield "\"
                     alt=\"Außenansicht des Gebäudes in dem das Institut für die Geschichte der deutschen Juden angesiedelt ist\"/>
                <div class=\"caption\">
                    Das Institut für die Geschichte der deutschen Juden Hamburg. Foto: Felix Matthies © IGdJ.
                </div>
            </div>
        </div>
    </div>

    <div class=\"container mt-2\">
        <h3>Die Interviews</h3>
        <div class=\"row\">
            <div class=\"col-sm\">
                <p>
                    Während das Interview von <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_melamed");
        yield "\">Carmen Melamed</a> stellvertretend für die kleine Minderheit steht, der es gelang
                den Nationalsozialismus in Hamburg zu überleben, erzählen <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_heimann");
        yield "\">Michael
                    Heimann</a> und <a
                        href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_horwitz");
        yield "\">Daphna Horwitz</a> von den Erfahrungen ihrer Eltern
                bei der Rückkehr nach Hamburg in der frühen Nachkriegszeit und davon, welche Spuren diese Schicksale in
                den Familien hinterlassen haben. Von denjenigen, denen eine Flucht gelang,
                kehrten aus den unterschiedlichsten Gründen (Klima, Gesundheit, Familie, Beruf) und zu unterschiedlichen
                Zeitpunkten einige in ihre ehemalige Heimat zurück. Darunter befand sich
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parnass");
        yield "\">Peggy Parnass</a> ebenso wie die
                Familie von <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallenstein");
        yield "\">Abi Wallenstein</a>
                oder <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wittenberg");
        yield "\">Andreas Wittenberg</a>.<br/>
                </p>
                <p>
                <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nasirzadeh");
        yield "\">Mona Nasirzadeh</a> gibt exemplarisch Einblick in das Leben der
                persischen Jüdinnen und Juden, die seit den 1950er-Jahren – vor allem aus wirtschaftlichen Motiven –
                nach Hamburg kamen und hier einige Jahrzehnte lang eine lebendige und gut vernetzte Gemeinschaft
                bildeten. Die größte Gruppe der hier lebenden Jüdinnen und Juden stammt aus der Sowjetunion und ihren
                Nachfolgestaaten und ist im Zuge des Kontingentverfahrens ab 1991 bis 2005 nach Deutschland
                eingewandert. Die Interviews mit <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lubinska");
        yield "\">Elsara Lubinska</a>,
                <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camargo");
        yield "\">Julia Camargo</a> oder <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zunik");
        yield "\">Igor Zunik</a> zeigen wie divers die
                Migrationswege und -erfahrungen innerhalb dieser Gruppe sind.
                </p>
            </div>
            <div class=\"col-sm\">
                <p>
                    In der jüngsten Vergangenheit
                    wanderten
                    vermehrt junge Israelis nach Hamburg, von denen sich wiederum einige als Teil der jüdischen
                    Gemeinschaft
                    verstehen und hier durch das Interview mit <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rosenblum");
        yield "\">Avi Rosenblum</a> stellvertretend präsentiert werden. <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pestov");
        yield "\">Elias
                        Pestov</a> oder <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_korn");
        yield "\">Eliana Korn</a> geben Einblicke in die Lebenswelten junger jüdischer Hamburger:innen.
                    Die
                    Interviews von <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guggenheim");
        yield "\">Barbara Guggenheim</a> oder
                    <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landshut");
        yield "\">Judith Landshut</a> zeigen, dass
                    (Migrations-)Geschichten individuell verlaufen und sich nicht immer einer größeren Strömung zuordnen
                    lassen, ebenso wie sie oftmals nicht linear verlaufen, also auch durch Hin- und
                    Rückwanderungsbewegungen
                    gekennzeichnet sein können.
                    Um Fragen von Zugehörigkeit und Identität geht es in den Interviews mit
                    <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lohse");
        yield "\">Ulrich Michael Lohse</a> und
                    <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guenther");
        yield "\">John Guenther</a>, die beide über Konversionsprozesse berichten.
                </p>
                <p>
                    Die hier präsentierten Kurzinterviews nehmen dabei keineswegs für sich in Anspruch, die jüdische
                    Gemeinschaft abzubilden oder die Geschichte einer bestimmten Gruppe zu erzählen. Es handelt sich um
                    rein
                    subjektive Erzählungen, die aber in ihrer Gesamtheit ein Mosaikbild entstehen lassen, das die
                    Vielfalt
                    und Pluralität des Hamburger Judentums sichtbar macht, das einfache Zuschreibungen, klischeehafte
                    Darstellungen oder monokausale Erklärungen hinterfragt und auf die Komplexität von Zugehörigkeiten
                    und
                    Geschichte(n) verweist, die eine diverse Einwanderungsgesellschaft ausmachen.
                </p>
            </div>
        </div>
    </div>

    <div class=\"container mt-2\">
        <h3>Das Projekt</h3>
        <div class=\"row\">
            <div class=\"col-sm\">
                <p>
                    Die hier präsentierten Interviews wurden im Rahmen eines am Institut für die Geschichte der
                    deutschen Juden angesiedelten Projektes durchgeführt. Das Projekt wurde vom Referat
                    <em>Förderung des jüdischen Lebens</em> der Behörde für Wissenschaft, Forschung, Gleichstellung
                    und Bezirke gefördert und in Teilen in Kooperation mit der Jüdischen Gemeinde in Hamburg umgesetzt.
                    Eine weitere Kooperation ergab sich mit dem Jüdischen Museum Berlin bei der Durchführung des
                    Objekttages im Juni 2022 in Hamburg. Während des Objekttages wurden mehreren Kurzinterviews aufgenommen,
                    die ausgehend von einem konkreten Gegenstand persönliche Erfahrungen und familiäre Hintergründe beleuchten.
                </p>
                <p>Die Interviews sind so vielfältig, wie die erzählten Geschichten, das betrifft die Inhalte, die
                    Aufnahme- und Erzählsituation ebenso wie die Dauer des Gespräches.
                </p>
                <p>
                    In der Regel wurden die Interviews im Institut für die Geschichte der deutschen Juden oder bei den
                    Interviewten zuhause geführt, in Ausnahmefällen auch über ein Videokonferenzprogramm. Während die
                    Originalaufnahmen (Dauer etwa 15–90 Minuten) im Archiv des IGdJ archiviert werden, wurden für die
                    Präsentation auf der Website in Rücksprache mit den Interviewten den Online-Sehgewohnheiten
                    entsprechende Kurzversionen (ungefähre Dauer: 3–8 Minuten) erstellt. Um den Gesprächsverlauf
                    zumindest skizzenhaft nachzeichnen zu können, wurde die Chronologie der Interviews nicht
                    aufgebrochen.
                </p>
                <p>
                    Die Interviews geben Einblicke in sehr persönliche Geschichten, ihre Nutzung erfordert ein hohes Maß
                    an
                    Sensibilität um den Interviewten mit dem nötigen Respekt zu begegnen. Für alle Interviews gilt, dass
                    sie
                    ausschließlich für private und wissenschaftliche Zwecke genutzt werden dürfen und eine kommerzielle
                    Nutzung verboten ist. Jedem Interview ist eine Lizenz an die Seite gestellt, die die Nachnutzung
                    ausdrücklich regelt. In der Regel handelt es sich dabei um die <a
                            href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\" target=\"_blank\"
                            title=\"Erläuterungen zur Lizenz auf der Creative Commons Website\">Creative Commons Lizenz
                        CC-BY-NC-ND 4.0</a>.
                    Diese Lizenz erlaubt eine Nachnutzung zu nicht-kommerziellen Zwecken unter der Bedingung der
                    Namensnennung. Eine Bearbeitung des Materials ist nicht gestattet. Ein Verstoß gegen die
                    Persönlichkeitsrechte der Interviewten wird geahndet.
                </p>
            </div>
            <div class=\"col-sm\">
                <img class=\"img-fluid\" src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/projekt/Kamera.jpg"), "html", null, true);
        yield "\"
                     alt=\"Kamera auf Stativ mit der die Aufnahmen in den Räumen des Instituts durchgeführt wurden\"/>
                <div class=\"caption\">
                    Kameraausrüstung für die Interviewaufnahmen, Foto: IGdJ.
                </div>
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
        return "site/about.html.twig";
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
        return array (  283 => 140,  221 => 81,  217 => 80,  208 => 74,  204 => 73,  199 => 71,  193 => 70,  178 => 60,  174 => 59,  166 => 54,  160 => 51,  156 => 50,  152 => 49,  144 => 44,  139 => 42,  135 => 41,  118 => 27,  110 => 22,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Über das Projekt | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container mt-5\">
        <h2>HUNGMEM</h2>
        <h3 class=\"mt-4\">Überblick</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Das Wissen darüber, wie Jüdinnen und Juden in unserer Stadt leben, welche Erfahrungen sie im Alltag
                    machen und welche Geschichten sie zu erzählen haben, ist gering. Oft nimmt die Mehrheitsgesellschaft
                    sie pauschal als „die anderen“ oder als Opfer antisemitischer Diskriminierung und Gewalt wahr. Das
                    <a href=\"https://www.igdj-hh.de/\" target=\"_blank\"
                       title=\"Homepage des Instituts für die Geschichte der deutschen Juden\">Institut für die Geschichte
                        der deutschen Juden (IGdJ)</a> möchte mit der Online-Plattform „Jüdisches Hamburg erzählen“ dazu
                    beitragen, diese Wahrnehmung zu ändern. Hamburger Jüdinnen und Juden, die in dieser Stadt studieren,
                    sich gesellschaftspolitisch und kulturell engagieren, als Volkswirtin, Juristen oder Journalistinnen
                    tätig waren oder als Lehrer:innen, Musiker und Selbstständige arbeiten, ergreifen das Wort.
                    Die <a href=\"{{ path('app_home') }}\">Sammlung von Kurzinterviews</a> gibt exemplarische Einblicke in die
                    vielfältigen (Über-)Lebenswege, Herkünfte und Selbstverständnisse, die das jüdische Leben in Hamburg
                    in der jüngsten Vergangenheit und Gegenwart auszeichnen. </p>
            </div>
            <div class=\"col-lg\">
                <img class=\"img-fluid\" src=\"{{ asset('images/projekt/Institut-Geschichte-der-deutschen-Juden-Hamburg.png') }}\"
                     alt=\"Außenansicht des Gebäudes in dem das Institut für die Geschichte der deutschen Juden angesiedelt ist\"/>
                <div class=\"caption\">
                    Das Institut für die Geschichte der deutschen Juden Hamburg. Foto: Felix Matthies © IGdJ.
                </div>
            </div>
        </div>
    </div>

    <div class=\"container mt-2\">
        <h3>Die Interviews</h3>
        <div class=\"row\">
            <div class=\"col-sm\">
                <p>
                    Während das Interview von <a href=\"{{ path('app_melamed') }}\">Carmen Melamed</a> stellvertretend für die kleine Minderheit steht, der es gelang
                den Nationalsozialismus in Hamburg zu überleben, erzählen <a href=\"{{ path('app_heimann') }}\">Michael
                    Heimann</a> und <a
                        href=\"{{ path('app_horwitz') }}\">Daphna Horwitz</a> von den Erfahrungen ihrer Eltern
                bei der Rückkehr nach Hamburg in der frühen Nachkriegszeit und davon, welche Spuren diese Schicksale in
                den Familien hinterlassen haben. Von denjenigen, denen eine Flucht gelang,
                kehrten aus den unterschiedlichsten Gründen (Klima, Gesundheit, Familie, Beruf) und zu unterschiedlichen
                Zeitpunkten einige in ihre ehemalige Heimat zurück. Darunter befand sich
                <a href=\"{{ path('app_parnass') }}\">Peggy Parnass</a> ebenso wie die
                Familie von <a href=\"{{ path('app_wallenstein') }}\">Abi Wallenstein</a>
                oder <a href=\"{{ path('app_wittenberg') }}\">Andreas Wittenberg</a>.<br/>
                </p>
                <p>
                <a href=\"{{ path('app_nasirzadeh') }}\">Mona Nasirzadeh</a> gibt exemplarisch Einblick in das Leben der
                persischen Jüdinnen und Juden, die seit den 1950er-Jahren – vor allem aus wirtschaftlichen Motiven –
                nach Hamburg kamen und hier einige Jahrzehnte lang eine lebendige und gut vernetzte Gemeinschaft
                bildeten. Die größte Gruppe der hier lebenden Jüdinnen und Juden stammt aus der Sowjetunion und ihren
                Nachfolgestaaten und ist im Zuge des Kontingentverfahrens ab 1991 bis 2005 nach Deutschland
                eingewandert. Die Interviews mit <a href=\"{{ path('app_lubinska') }}\">Elsara Lubinska</a>,
                <a href=\"{{ path('app_camargo') }}\">Julia Camargo</a> oder <a href=\"{{ path('app_zunik') }}\">Igor Zunik</a> zeigen wie divers die
                Migrationswege und -erfahrungen innerhalb dieser Gruppe sind.
                </p>
            </div>
            <div class=\"col-sm\">
                <p>
                    In der jüngsten Vergangenheit
                    wanderten
                    vermehrt junge Israelis nach Hamburg, von denen sich wiederum einige als Teil der jüdischen
                    Gemeinschaft
                    verstehen und hier durch das Interview mit <a href=\"{{ path('app_rosenblum') }}\">Avi Rosenblum</a> stellvertretend präsentiert werden. <a href=\"{{ path('app_pestov') }}\">Elias
                        Pestov</a> oder <a href=\"{{ path('app_korn') }}\">Eliana Korn</a> geben Einblicke in die Lebenswelten junger jüdischer Hamburger:innen.
                    Die
                    Interviews von <a href=\"{{ path('app_guggenheim') }}\">Barbara Guggenheim</a> oder
                    <a href=\"{{ path('app_landshut') }}\">Judith Landshut</a> zeigen, dass
                    (Migrations-)Geschichten individuell verlaufen und sich nicht immer einer größeren Strömung zuordnen
                    lassen, ebenso wie sie oftmals nicht linear verlaufen, also auch durch Hin- und
                    Rückwanderungsbewegungen
                    gekennzeichnet sein können.
                    Um Fragen von Zugehörigkeit und Identität geht es in den Interviews mit
                    <a href=\"{{ path('app_lohse') }}\">Ulrich Michael Lohse</a> und
                    <a href=\"{{ path('app_guenther') }}\">John Guenther</a>, die beide über Konversionsprozesse berichten.
                </p>
                <p>
                    Die hier präsentierten Kurzinterviews nehmen dabei keineswegs für sich in Anspruch, die jüdische
                    Gemeinschaft abzubilden oder die Geschichte einer bestimmten Gruppe zu erzählen. Es handelt sich um
                    rein
                    subjektive Erzählungen, die aber in ihrer Gesamtheit ein Mosaikbild entstehen lassen, das die
                    Vielfalt
                    und Pluralität des Hamburger Judentums sichtbar macht, das einfache Zuschreibungen, klischeehafte
                    Darstellungen oder monokausale Erklärungen hinterfragt und auf die Komplexität von Zugehörigkeiten
                    und
                    Geschichte(n) verweist, die eine diverse Einwanderungsgesellschaft ausmachen.
                </p>
            </div>
        </div>
    </div>

    <div class=\"container mt-2\">
        <h3>Das Projekt</h3>
        <div class=\"row\">
            <div class=\"col-sm\">
                <p>
                    Die hier präsentierten Interviews wurden im Rahmen eines am Institut für die Geschichte der
                    deutschen Juden angesiedelten Projektes durchgeführt. Das Projekt wurde vom Referat
                    <em>Förderung des jüdischen Lebens</em> der Behörde für Wissenschaft, Forschung, Gleichstellung
                    und Bezirke gefördert und in Teilen in Kooperation mit der Jüdischen Gemeinde in Hamburg umgesetzt.
                    Eine weitere Kooperation ergab sich mit dem Jüdischen Museum Berlin bei der Durchführung des
                    Objekttages im Juni 2022 in Hamburg. Während des Objekttages wurden mehreren Kurzinterviews aufgenommen,
                    die ausgehend von einem konkreten Gegenstand persönliche Erfahrungen und familiäre Hintergründe beleuchten.
                </p>
                <p>Die Interviews sind so vielfältig, wie die erzählten Geschichten, das betrifft die Inhalte, die
                    Aufnahme- und Erzählsituation ebenso wie die Dauer des Gespräches.
                </p>
                <p>
                    In der Regel wurden die Interviews im Institut für die Geschichte der deutschen Juden oder bei den
                    Interviewten zuhause geführt, in Ausnahmefällen auch über ein Videokonferenzprogramm. Während die
                    Originalaufnahmen (Dauer etwa 15–90 Minuten) im Archiv des IGdJ archiviert werden, wurden für die
                    Präsentation auf der Website in Rücksprache mit den Interviewten den Online-Sehgewohnheiten
                    entsprechende Kurzversionen (ungefähre Dauer: 3–8 Minuten) erstellt. Um den Gesprächsverlauf
                    zumindest skizzenhaft nachzeichnen zu können, wurde die Chronologie der Interviews nicht
                    aufgebrochen.
                </p>
                <p>
                    Die Interviews geben Einblicke in sehr persönliche Geschichten, ihre Nutzung erfordert ein hohes Maß
                    an
                    Sensibilität um den Interviewten mit dem nötigen Respekt zu begegnen. Für alle Interviews gilt, dass
                    sie
                    ausschließlich für private und wissenschaftliche Zwecke genutzt werden dürfen und eine kommerzielle
                    Nutzung verboten ist. Jedem Interview ist eine Lizenz an die Seite gestellt, die die Nachnutzung
                    ausdrücklich regelt. In der Regel handelt es sich dabei um die <a
                            href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\" target=\"_blank\"
                            title=\"Erläuterungen zur Lizenz auf der Creative Commons Website\">Creative Commons Lizenz
                        CC-BY-NC-ND 4.0</a>.
                    Diese Lizenz erlaubt eine Nachnutzung zu nicht-kommerziellen Zwecken unter der Bedingung der
                    Namensnennung. Eine Bearbeitung des Materials ist nicht gestattet. Ein Verstoß gegen die
                    Persönlichkeitsrechte der Interviewten wird geahndet.
                </p>
            </div>
            <div class=\"col-sm\">
                <img class=\"img-fluid\" src=\"{{ asset('images/projekt/Kamera.jpg') }}\"
                     alt=\"Kamera auf Stativ mit der die Aufnahmen in den Räumen des Instituts durchgeführt wurden\"/>
                <div class=\"caption\">
                    Kameraausrüstung für die Interviewaufnahmen, Foto: IGdJ.
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "site/about.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/about.html.twig");
    }
}
