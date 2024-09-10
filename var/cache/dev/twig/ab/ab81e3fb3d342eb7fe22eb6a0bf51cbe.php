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
class __TwigTemplate_42dd216fe19ef9e242abff294e3b9a39 extends Template
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

        yield " Projekthintergrund | ";
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
        yield from         $this->loadTemplate("elements/navigation-about.html.twig", "site/about.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container g-4 pt-5\">
        <h2>„Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM) </h2>
        <h3 class=\"mt-4\">Hintergrund und Ziele des Projektes</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Jedes zehnte Holocaust-Opfer stammte aus Ungarn in seinen damaligen Grenzen. 500.000–600.000
                    Jüdinnen und Juden sowie Roma und Romnja wurden von den Nationalsozialisten und ihren ungarischen
                    Verbündeten ermordet. Die Namen dieser Verfolgten sind bis heute mehrheitlich unbekannt. 80 Jahre
                    nach dem Holocaust in Ungarn hat sich ein transnationales Forschungs-und Erinnerungsprojekt zum Ziel
                    gesetzt, das Schicksal der deportierten Frauen, Männer und Kinder zu erforschen, aufzuarbeiten und
                    vor dem Vergessen zu bewahren.</div>
            <div class=\"col-lg\">
                <p>
                    Das Projekt wird von der EU-Kommission im Rahmen des <a
                            href=\"https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/programmes/cerv\"
                            title=\"Webseite des Förderprogramms CERV\">Förderprogramms
                        CERV –Citizens, Equality, Rights and Values</a> unterstützt.
                </p>
                <div class=\"row partner\">
                    <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website der Europäischen Kommission\">
                        <img class=\"img-fluid\" src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/European_Commission_logo.png"), "html", null, true);
        yield "\"
                             alt=\"Logo der EU Commission\"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container g-4\">
        <h3 class=\"mt-4\">Projektverbund</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Im Projektverbund hat das <a href=\"https://www.igdj-hh.de\" title=\"Website des Instituts\">Institut für die Geschichte der deutschen Juden (IGdJ)</a> die Archivrecherchen zur Erfassung möglichst vieler Namen und
                    Geschichten derjenigen koordiniert, die von der SS in die Konzentrationslager im norddeutschen Raum
                    deportiert wurden. Dank der engen Zusammenarbeit mit den KZ-Gedenkstätten Bergen-Belsen und
                    Neuengamme und den intensiven Recherchen der beiden Projektmitarbeitenden Lara Meinert, M.A. und
                    Louis Wörner, M.A. konnten umfassende Daten zusammengeführt sowie teilweise neue Informationen
                    ergänzt werden. Diese biografischen Daten fließen in eine am
                    <a href=\"https://www.milev.hu\" tilte=\"Website des Museums\">Jüdischen Museum und Archiv Budapest</a>
                    entwickelte digitale Gedenk-und Forschungsinfrastruktur ein. Weitere Daten zu Namen und
                    Deportationswegen der Verfolgten kommen von den Partnerinstitutionen in Rumänien
                    (<a href=\"https://ispmn.gov.ro/\" tilte=\"Website des Instituts\">Rumänisches
                        Institut für Forschung über nationale Minderheiten</a>) und der Slowakei
                    (<a href=\"https://kehreg.com/\" tilte=\"Website der jüdischen Gemeinde\">Jüdische Gemeinde in Komárno</a>).
                </p>
            </div>
            <div class=\"col-lg\">
                <div class=\"row partner\">
                    <a href=\"https://www.milev.hu\" tilte=\"Website des Museums\">
                        <img class=\"img-fluid\" src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/hjma-logo.png"), "html", null, true);
        yield "\"
                             alt=\"Logo des Hungarian Jewish Museum and Archive in Budapest\"/>
                    </a>
                </div>
                <div class=\"row partner\">
                    <a href=\"https://ispmn.gov.ro/\" tilte=\"Website des Instituts\">
                        <img class=\"img-fluid\" src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/ispmn.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo des Romanian Institute for Research on National Minorities\"/>
                    </a>
                </div>
                <div class=\"row partner\">
                    <a href=\"https://kehreg.com/\" tilte=\"Website der jüdischen Gemeinde in Komárno\">
                        <img class=\"img-fluid\" src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/komarno.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo der Jewish Community in Komárno\"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container g-4\">
        <h3 class=\"mt-4\">Fokus Norddeutschland </h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Mit einem Fokus auf Norddeutschland sowie auf den Zusammenhang zwischen Holocaust und Kriegsverlauf
                    präsentiert das IGdJ auf dieser von ihm produzierten Website Forschungsergebnisse im regionalen
                    Kontext. Die verschiedenen Fallstudien und Visualisierungen werfen ausgehend von der umfangreichen
                    Datenbasis Schlaglichter auf verschiedene Häftlingsgruppen und ihre teils unterschiedlichen
                    Haftbedingungen, auf Zwangsarbeit in der Rüstungsindustrie, aber auch auf die Sichtbarkeit der
                    Verfolgung im Stadtraum und den Umstand, dass es neben den Deportationen aus dem Deutschen Reich „in
                    den Osten“ auch Deportationen aus dem deutsch-besetzten Osteuropa in den Westen gab. Damit waren
                    Zwangsarbeit und NS-Terror, die sich sozusagen „vor der eigenen Haustür“ ereigneten, für die
                    deutsche Kriegsbevölkerung weithin sichtbar und werfen in der Retrospektive Fragen nach Teilhabe und
                    Widerstand auf.
                </p>
            </div>
            <div class=\"col-lg\">
                <p>
                    Ziel unserer Präsentation ist es auch, anhand des Beispiels der Deportationen aus Ungarn deutlich zu
                    machen, dass es weiterhin Forschungs- und Wissenslücken in der Geschichte des Holocaust und im
                    kollektiven Gedächtnis darüber gibt. Das betrifft transnationale historische Zusammenhänge ebenso
                    wie die Spezifik einiger Regionen oder das Schicksal einzelner Häftlingsgruppen. Die oftmals nur
                    sehr fragmentarisch überlieferten Quellen erschweren in vielen Fällen – so auch bei diesem Projekt –
                    die Schließung dieser Lücken und werfen damit auch die Frage auf, wie mit Unsicherheiten und
                    Unwissen wissenschaftlich adäquat umgegangen werden kann.
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
        return array (  171 => 72,  162 => 66,  153 => 60,  120 => 30,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Projekthintergrund | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-about.html.twig' %}


    <div class=\"container g-4 pt-5\">
        <h2>„Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM) </h2>
        <h3 class=\"mt-4\">Hintergrund und Ziele des Projektes</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Jedes zehnte Holocaust-Opfer stammte aus Ungarn in seinen damaligen Grenzen. 500.000–600.000
                    Jüdinnen und Juden sowie Roma und Romnja wurden von den Nationalsozialisten und ihren ungarischen
                    Verbündeten ermordet. Die Namen dieser Verfolgten sind bis heute mehrheitlich unbekannt. 80 Jahre
                    nach dem Holocaust in Ungarn hat sich ein transnationales Forschungs-und Erinnerungsprojekt zum Ziel
                    gesetzt, das Schicksal der deportierten Frauen, Männer und Kinder zu erforschen, aufzuarbeiten und
                    vor dem Vergessen zu bewahren.</div>
            <div class=\"col-lg\">
                <p>
                    Das Projekt wird von der EU-Kommission im Rahmen des <a
                            href=\"https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/programmes/cerv\"
                            title=\"Webseite des Förderprogramms CERV\">Förderprogramms
                        CERV –Citizens, Equality, Rights and Values</a> unterstützt.
                </p>
                <div class=\"row partner\">
                    <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website der Europäischen Kommission\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/European_Commission_logo.png') }}\"
                             alt=\"Logo der EU Commission\"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container g-4\">
        <h3 class=\"mt-4\">Projektverbund</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Im Projektverbund hat das <a href=\"https://www.igdj-hh.de\" title=\"Website des Instituts\">Institut für die Geschichte der deutschen Juden (IGdJ)</a> die Archivrecherchen zur Erfassung möglichst vieler Namen und
                    Geschichten derjenigen koordiniert, die von der SS in die Konzentrationslager im norddeutschen Raum
                    deportiert wurden. Dank der engen Zusammenarbeit mit den KZ-Gedenkstätten Bergen-Belsen und
                    Neuengamme und den intensiven Recherchen der beiden Projektmitarbeitenden Lara Meinert, M.A. und
                    Louis Wörner, M.A. konnten umfassende Daten zusammengeführt sowie teilweise neue Informationen
                    ergänzt werden. Diese biografischen Daten fließen in eine am
                    <a href=\"https://www.milev.hu\" tilte=\"Website des Museums\">Jüdischen Museum und Archiv Budapest</a>
                    entwickelte digitale Gedenk-und Forschungsinfrastruktur ein. Weitere Daten zu Namen und
                    Deportationswegen der Verfolgten kommen von den Partnerinstitutionen in Rumänien
                    (<a href=\"https://ispmn.gov.ro/\" tilte=\"Website des Instituts\">Rumänisches
                        Institut für Forschung über nationale Minderheiten</a>) und der Slowakei
                    (<a href=\"https://kehreg.com/\" tilte=\"Website der jüdischen Gemeinde\">Jüdische Gemeinde in Komárno</a>).
                </p>
            </div>
            <div class=\"col-lg\">
                <div class=\"row partner\">
                    <a href=\"https://www.milev.hu\" tilte=\"Website des Museums\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/hjma-logo.png') }}\"
                             alt=\"Logo des Hungarian Jewish Museum and Archive in Budapest\"/>
                    </a>
                </div>
                <div class=\"row partner\">
                    <a href=\"https://ispmn.gov.ro/\" tilte=\"Website des Instituts\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/ispmn.jpg') }}\"
                             alt=\"Logo des Romanian Institute for Research on National Minorities\"/>
                    </a>
                </div>
                <div class=\"row partner\">
                    <a href=\"https://kehreg.com/\" tilte=\"Website der jüdischen Gemeinde in Komárno\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/komarno.jpg') }}\"
                             alt=\"Logo der Jewish Community in Komárno\"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container g-4\">
        <h3 class=\"mt-4\">Fokus Norddeutschland </h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Mit einem Fokus auf Norddeutschland sowie auf den Zusammenhang zwischen Holocaust und Kriegsverlauf
                    präsentiert das IGdJ auf dieser von ihm produzierten Website Forschungsergebnisse im regionalen
                    Kontext. Die verschiedenen Fallstudien und Visualisierungen werfen ausgehend von der umfangreichen
                    Datenbasis Schlaglichter auf verschiedene Häftlingsgruppen und ihre teils unterschiedlichen
                    Haftbedingungen, auf Zwangsarbeit in der Rüstungsindustrie, aber auch auf die Sichtbarkeit der
                    Verfolgung im Stadtraum und den Umstand, dass es neben den Deportationen aus dem Deutschen Reich „in
                    den Osten“ auch Deportationen aus dem deutsch-besetzten Osteuropa in den Westen gab. Damit waren
                    Zwangsarbeit und NS-Terror, die sich sozusagen „vor der eigenen Haustür“ ereigneten, für die
                    deutsche Kriegsbevölkerung weithin sichtbar und werfen in der Retrospektive Fragen nach Teilhabe und
                    Widerstand auf.
                </p>
            </div>
            <div class=\"col-lg\">
                <p>
                    Ziel unserer Präsentation ist es auch, anhand des Beispiels der Deportationen aus Ungarn deutlich zu
                    machen, dass es weiterhin Forschungs- und Wissenslücken in der Geschichte des Holocaust und im
                    kollektiven Gedächtnis darüber gibt. Das betrifft transnationale historische Zusammenhänge ebenso
                    wie die Spezifik einiger Regionen oder das Schicksal einzelner Häftlingsgruppen. Die oftmals nur
                    sehr fragmentarisch überlieferten Quellen erschweren in vielen Fällen – so auch bei diesem Projekt –
                    die Schließung dieser Lücken und werfen damit auch die Frage auf, wie mit Unsicherheiten und
                    Unwissen wissenschaftlich adäquat umgegangen werden kann.
                </p>
            </div>
        </div>
    </div>

{% endblock %}", "site/about.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/about.html.twig");
    }
}
