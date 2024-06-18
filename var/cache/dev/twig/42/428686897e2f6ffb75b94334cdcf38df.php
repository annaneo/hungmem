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

/* collection/imprint.html.twig */
class __TwigTemplate_54696b2f85a0c64db92ac54252255cb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "collection/imprint.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "collection/imprint.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "collection/imprint.html.twig", 1);
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

        yield " Impressum | ";
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
    <h2>Impressum</h2>
    <div class=\"row\">
    <div class=\"col-lg-6\">
        <p>„Jüdisches Hamburg erzählen“ ist ein Projekt des Instituts für die Geschichte der deutschen
            Juden.</p>
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
            Freien und Hansestadt Hamburg und wird von der Behörde für Wissenschaft,
            Forschung, Gleichstellung und Bezirke der Freien und Hansestadt Hamburg gefördert.
        </p>
        <p>
            Vertretungsberechtigte Personen:<br/>
            Direktorin Dr. Kim Wünschmann<br/>
            Stellvertretender Direktor: PD Dr. Andreas Brämer
        </p>
        <p>
            Inhaltlich Verantwortlich:<br/>
            Dr. Karen Körber<br/>
            Dr. Anna Menny
        </p>
        <p>
            Technische Konzipierung und Umsetzung:<br/>
            <a href=\"https://coding-friends.com\">Anna Neovesky</a>
        </p>
        <p>
            Weitere Beteiligte:<br/>
            Aline Philippen
        </p>

        <h3>Danksagung</h3>
        <p>
            Wir danken allen beteiligten Personen für das uns entgegengebrachte Vertrauen und die Bereitschaft, sehr
            persönliche Erfahrungen und Erinnerungen mit uns zu teilen und auf dieser Website einer interessierten
            Öffentlichkeit bereitszustellen.
        </p>
        <p>
            Wir danken der Jüdischen Gemeinde in Hamburg für die Unterstützung bei der Umsetzung dieses Projektes,
            insbesondere für die Kontaktherstellung zu Gesprächspartnerinnen und -partnern.
        </p>

        <h3>Förderung</h3>
        <p>
            Gefördert durch das Referat <em>Förderung des jüdischen Lebens</em> der Behörde für Wissenschaft,
            Forschung, Gleichstellung und Bezirke.
        </p>
        <p>
            <img class=\"img-fluid\" src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/BWFG-Logo.png"), "html", null, true);
        yield "\"
                 alt=\"\"/>
        </p>

        <h3>Nutzungsrechte</h3>
        <p>
            Die Interviews dürfen ausschließlich für private und wissenschaftliche Zwecke genutzt werden. Nähere
            Informationen finden Sie auf der Seite zu <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jsonapi");
        yield "\" target=\"_blank\"
                                                         title=\"Öffnet JSON Schnittstelle in neuem Fenster\">Nutzungshinweisen
                und Lizenzierung</a>.
        </p>

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
            <a href=\"https://usefathom.com/data\" alt=\"Information zur Datenverarbeitung von Fathom Analytics\">hier</a> und über die
            <a href=\"https://usefathom.com/privacy\" alt=\"Datenschutzerklärung von Fathom Analytics\">Datenschutzerklärung des Dienstes</a>
            erhältlich.<br/>Verarbeitete personenbezogene Daten: Nutzungsdaten.
            Verarbeitungsort: Kanada.
        </p>

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
        return "collection/imprint.html.twig";
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
        return array (  161 => 70,  151 => 63,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Impressum | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container mt-5\">
    <h2>Impressum</h2>
    <div class=\"row\">
    <div class=\"col-lg-6\">
        <p>„Jüdisches Hamburg erzählen“ ist ein Projekt des Instituts für die Geschichte der deutschen
            Juden.</p>
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
            Freien und Hansestadt Hamburg und wird von der Behörde für Wissenschaft,
            Forschung, Gleichstellung und Bezirke der Freien und Hansestadt Hamburg gefördert.
        </p>
        <p>
            Vertretungsberechtigte Personen:<br/>
            Direktorin Dr. Kim Wünschmann<br/>
            Stellvertretender Direktor: PD Dr. Andreas Brämer
        </p>
        <p>
            Inhaltlich Verantwortlich:<br/>
            Dr. Karen Körber<br/>
            Dr. Anna Menny
        </p>
        <p>
            Technische Konzipierung und Umsetzung:<br/>
            <a href=\"https://coding-friends.com\">Anna Neovesky</a>
        </p>
        <p>
            Weitere Beteiligte:<br/>
            Aline Philippen
        </p>

        <h3>Danksagung</h3>
        <p>
            Wir danken allen beteiligten Personen für das uns entgegengebrachte Vertrauen und die Bereitschaft, sehr
            persönliche Erfahrungen und Erinnerungen mit uns zu teilen und auf dieser Website einer interessierten
            Öffentlichkeit bereitszustellen.
        </p>
        <p>
            Wir danken der Jüdischen Gemeinde in Hamburg für die Unterstützung bei der Umsetzung dieses Projektes,
            insbesondere für die Kontaktherstellung zu Gesprächspartnerinnen und -partnern.
        </p>

        <h3>Förderung</h3>
        <p>
            Gefördert durch das Referat <em>Förderung des jüdischen Lebens</em> der Behörde für Wissenschaft,
            Forschung, Gleichstellung und Bezirke.
        </p>
        <p>
            <img class=\"img-fluid\" src=\"{{ asset('images/BWFG-Logo.png') }}\"
                 alt=\"\"/>
        </p>

        <h3>Nutzungsrechte</h3>
        <p>
            Die Interviews dürfen ausschließlich für private und wissenschaftliche Zwecke genutzt werden. Nähere
            Informationen finden Sie auf der Seite zu <a href=\"{{ path('app_jsonapi') }}\" target=\"_blank\"
                                                         title=\"Öffnet JSON Schnittstelle in neuem Fenster\">Nutzungshinweisen
                und Lizenzierung</a>.
        </p>

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
            <a href=\"https://usefathom.com/data\" alt=\"Information zur Datenverarbeitung von Fathom Analytics\">hier</a> und über die
            <a href=\"https://usefathom.com/privacy\" alt=\"Datenschutzerklärung von Fathom Analytics\">Datenschutzerklärung des Dienstes</a>
            erhältlich.<br/>Verarbeitete personenbezogene Daten: Nutzungsdaten.
            Verarbeitungsort: Kanada.
        </p>

    </div>

{% endblock %}", "collection/imprint.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/collection/imprint.html.twig");
    }
}
