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
use Twig\TemplateWrapper;

/* site/imprint.html.twig */
class __TwigTemplate_3b88c77ca8c604657aad25312f2a0567 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/imprint.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/imprint.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Impressum | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        yield from $this->load("elements/navigation.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
    <div class=\"container g-4 py-5\">
    <h2>Impressum</h2>
    <div class=\"row\">
    <div class=\"col-lg-6\">
        <p>Die Website ist ein Angebot des Instituts für die Geschichte der deutschen Juden und präsentiert
            Projektergebnisse aus dem von der EU-Kommission geförderten Projekt „Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM).</p>
        <p>
            Institut für die Geschichte der deutschen Juden<br/>
            Beim Schlump 83<br/>
            20144 Hamburg<br/>
        </p>
        <p>
            +49 40 - 42 838-2617<br/>
            kontakt(at)igdj-hh.de
        </p>
        <p>
            Das Institut ist eine Stiftung bürgerlichen Rechts in der Trägerschaft der
            Freien und Hansestadt Hamburg und wird institutionell von der Behörde für Wissenschaft,
            Forschung, Gleichstellung und Bezirke der Freien und Hansestadt Hamburg gefördert.
        </p>
        <img class=\"img-fluid\" src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/BWFG-Logo.png"), "html", null, true);
        yield "\"
             alt=\"Logo der Behörde für Wissenschaft,
            Forschung, Gleichstellung und Bezirke der Freien und Hansestadt Hamburg\"/>

        <h4>Vertretungsberechtigte Personen:</h4>
        <p>
            Direktorin Dr. Kim Wünschmann<br/>
            Stellvertretender Direktor: Dr. Björn Siegel
        </p>
        <h4>Inhaltlich Verantwortlich:</h4>
        <p>
            Lara Meinert, M.A.<br/>
            Louis Wörner, M.A.
        </p>
        <h4>Konzeption und Koordination: </h4>
        <p>
            Dr. Anna Menny<br/>
            Dr. Kim Wünschmann
        </p>
        <h4> Technische Konzipierung und Umsetzung:</h4>
        <p>
            Dr. Anna Neovesky
        </p>
        <h4>Kooperationspartner:</h4>
        <p>
            <a href=\"https://bergen-belsen.stiftung-ng.de/de/\">Stiftung niedersächsische Gedenkstätten / Gedenkstätte
                Bergen-Belsen</a>
        <div class=\"partner\">
            <a href=\"https://bergen-belsen.stiftung-ng.de/de/\" tilte=\"Website der Gedenkstätte\">
                <img class=\"img-fluid\" src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/bergen-belsen.png"), "html", null, true);
        yield "\"
                     alt=\"Logo der Gedenkstätte KZ Bergen-Belsen\"/>
            </a>
        </div>
        <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\">KZ-Gedenkstätte Neuengamme</a>
        <div class=\"partner\">
            <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\" tilte=\"Website der Gedenkstätte\">
                <img class=\"img-fluid\" src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/neuengamme.png"), "html", null, true);
        yield "\"
                     alt=\"Logo der Gedenkstätte KZ Neuengamme\"/>
            </a>
        </div>
        </p>


        <h3>Danksagung</h3>
        <p>
            Wir danken allen beteiligten Institutionen und Personen für die Genehmigungen zur Nutzung von Bild- und
            Quellenmaterialien sowie für die Unterstützung bei den Recherchen.
        </p>

        <h3>Förderung</h3>
        <p>
            Das transnationale Verbundprojekt „Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM) wird von der EU-Kommission im Rahmen des Förderprogramms
            <a href=\"https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/programmes/cerv\"
                    title=\"Webseite des Förderprogramms CERV\">
                CERV – Citizens, Equality, Rights and Values
                </a>
            unterstützt.
        </p>
        <div class=\"row partner\">
            <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website der Europäischen Kommission\">
                <img class=\"img-fluid\" src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/European_Commission_logo.jpg"), "html", null, true);
        yield "\"
                     alt=\"Logo der EU Commission\"/>
            </a>
        </div>

        <h2 class=\"pt-4\" id=\"datenschutz\">Datenschutz</h2>
        <p>
            Dies ist ein Online-Angebot des Instituts für die Geschichte der deutschen Juden (IGdJ). Für die
            Verarbeitung aller personenbezogenen Daten, die im Zuge des Betriebs dieses Angebots anfallen, gilt
            die <a href=\"https://igdj-hh.de/datenschutz\" target=\"_blank\"
                   title=\"Datenschutzerklärung auf der Website des Instituts für die Geschichte der deutschen Juden\">
                allgemeine Datenschutzerklärung des IGdJ
            </a>.
        </p>
        <p>
            Für die Sammlung anonymisierter Zugriffsdaten wird <em>Fathom Analytics</em> genutzt.
            Fathom Analytics ist ein durch Conva Ventures Inc. angebotener Dienst für
            anonymisierte Analysen, durch den der Anbieter ermitteln kann, wie Nutzer diese Anwendung nutzen.
            Erhobene Daten werden durch Hashing-Vorgänge anonymisiert. Weitere Informationen sind
            <a href=\"https://usefathom.com/data\" title=\"Information zur Datenverarbeitung von Fathom Analytics\">hier</a>
            und über die
            <a href=\"https://usefathom.com/privacy\" title=\"Datenschutzerklärung von Fathom Analytics\">Datenschutzerklärung
                des Dienstes</a>
            erhältlich.<br/>Verarbeitete personenbezogene Daten: Nutzungsdaten.
            Verarbeitungsort: Kanada.
        </p>

        <h3 id=\"usage\">Nutzungsrechte</h3>
        <p>
            Die Texte stehen unter einer <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\"
                                            title=\"Lizenzbedingungen auf der Website von Creative Commons\">
                CC BY 4.0 Lizenz</a> und können unter Namensnennung weitergenutzt werden.
        </p>
        <p>
            Die Lizenzbedingungen der Abbildung können abweichen und sind jeweils an den Abbildungen angegeben.
        </p>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "site/imprint.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  197 => 88,  170 => 64,  160 => 57,  128 => 28,  105 => 7,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Impressum | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation.html.twig' %}

    <div class=\"container g-4 py-5\">
    <h2>Impressum</h2>
    <div class=\"row\">
    <div class=\"col-lg-6\">
        <p>Die Website ist ein Angebot des Instituts für die Geschichte der deutschen Juden und präsentiert
            Projektergebnisse aus dem von der EU-Kommission geförderten Projekt „Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM).</p>
        <p>
            Institut für die Geschichte der deutschen Juden<br/>
            Beim Schlump 83<br/>
            20144 Hamburg<br/>
        </p>
        <p>
            +49 40 - 42 838-2617<br/>
            kontakt(at)igdj-hh.de
        </p>
        <p>
            Das Institut ist eine Stiftung bürgerlichen Rechts in der Trägerschaft der
            Freien und Hansestadt Hamburg und wird institutionell von der Behörde für Wissenschaft,
            Forschung, Gleichstellung und Bezirke der Freien und Hansestadt Hamburg gefördert.
        </p>
        <img class=\"img-fluid\" src=\"{{ asset('images/logos/BWFG-Logo.png') }}\"
             alt=\"Logo der Behörde für Wissenschaft,
            Forschung, Gleichstellung und Bezirke der Freien und Hansestadt Hamburg\"/>

        <h4>Vertretungsberechtigte Personen:</h4>
        <p>
            Direktorin Dr. Kim Wünschmann<br/>
            Stellvertretender Direktor: Dr. Björn Siegel
        </p>
        <h4>Inhaltlich Verantwortlich:</h4>
        <p>
            Lara Meinert, M.A.<br/>
            Louis Wörner, M.A.
        </p>
        <h4>Konzeption und Koordination: </h4>
        <p>
            Dr. Anna Menny<br/>
            Dr. Kim Wünschmann
        </p>
        <h4> Technische Konzipierung und Umsetzung:</h4>
        <p>
            Dr. Anna Neovesky
        </p>
        <h4>Kooperationspartner:</h4>
        <p>
            <a href=\"https://bergen-belsen.stiftung-ng.de/de/\">Stiftung niedersächsische Gedenkstätten / Gedenkstätte
                Bergen-Belsen</a>
        <div class=\"partner\">
            <a href=\"https://bergen-belsen.stiftung-ng.de/de/\" tilte=\"Website der Gedenkstätte\">
                <img class=\"img-fluid\" src=\"{{ asset('images/logos/bergen-belsen.png') }}\"
                     alt=\"Logo der Gedenkstätte KZ Bergen-Belsen\"/>
            </a>
        </div>
        <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\">KZ-Gedenkstätte Neuengamme</a>
        <div class=\"partner\">
            <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\" tilte=\"Website der Gedenkstätte\">
                <img class=\"img-fluid\" src=\"{{ asset('images/logos/neuengamme.png') }}\"
                     alt=\"Logo der Gedenkstätte KZ Neuengamme\"/>
            </a>
        </div>
        </p>


        <h3>Danksagung</h3>
        <p>
            Wir danken allen beteiligten Institutionen und Personen für die Genehmigungen zur Nutzung von Bild- und
            Quellenmaterialien sowie für die Unterstützung bei den Recherchen.
        </p>

        <h3>Förderung</h3>
        <p>
            Das transnationale Verbundprojekt „Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM) wird von der EU-Kommission im Rahmen des Förderprogramms
            <a href=\"https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/programmes/cerv\"
                    title=\"Webseite des Förderprogramms CERV\">
                CERV – Citizens, Equality, Rights and Values
                </a>
            unterstützt.
        </p>
        <div class=\"row partner\">
            <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website der Europäischen Kommission\">
                <img class=\"img-fluid\" src=\"{{ asset('images/logos/European_Commission_logo.jpg') }}\"
                     alt=\"Logo der EU Commission\"/>
            </a>
        </div>

        <h2 class=\"pt-4\" id=\"datenschutz\">Datenschutz</h2>
        <p>
            Dies ist ein Online-Angebot des Instituts für die Geschichte der deutschen Juden (IGdJ). Für die
            Verarbeitung aller personenbezogenen Daten, die im Zuge des Betriebs dieses Angebots anfallen, gilt
            die <a href=\"https://igdj-hh.de/datenschutz\" target=\"_blank\"
                   title=\"Datenschutzerklärung auf der Website des Instituts für die Geschichte der deutschen Juden\">
                allgemeine Datenschutzerklärung des IGdJ
            </a>.
        </p>
        <p>
            Für die Sammlung anonymisierter Zugriffsdaten wird <em>Fathom Analytics</em> genutzt.
            Fathom Analytics ist ein durch Conva Ventures Inc. angebotener Dienst für
            anonymisierte Analysen, durch den der Anbieter ermitteln kann, wie Nutzer diese Anwendung nutzen.
            Erhobene Daten werden durch Hashing-Vorgänge anonymisiert. Weitere Informationen sind
            <a href=\"https://usefathom.com/data\" title=\"Information zur Datenverarbeitung von Fathom Analytics\">hier</a>
            und über die
            <a href=\"https://usefathom.com/privacy\" title=\"Datenschutzerklärung von Fathom Analytics\">Datenschutzerklärung
                des Dienstes</a>
            erhältlich.<br/>Verarbeitete personenbezogene Daten: Nutzungsdaten.
            Verarbeitungsort: Kanada.
        </p>

        <h3 id=\"usage\">Nutzungsrechte</h3>
        <p>
            Die Texte stehen unter einer <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\"
                                            title=\"Lizenzbedingungen auf der Website von Creative Commons\">
                CC BY 4.0 Lizenz</a> und können unter Namensnennung weitergenutzt werden.
        </p>
        <p>
            Die Lizenzbedingungen der Abbildung können abweichen und sind jeweils an den Abbildungen angegeben.
        </p>

    </div>

{% endblock %}", "site/imprint.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/site/imprint.html.twig");
    }
}
