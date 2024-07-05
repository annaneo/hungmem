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

/* site/imprint.html.twig */
class __TwigTemplate_9fd10a5becac467aa0d11ad2d4000e9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/imprint.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/imprint.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/imprint.html.twig", 1);
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
    <div class=\"container g-4 py-5\">
    <h2>Impressum</h2>
    <div class=\"row\">
    <div class=\"col-lg-6\">
        <p>„Holocaust in Ungarn und Deportationen nach Norddeutschland 1944 “ ist ein Projekt des Instituts für die Geschichte der deutschen
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

        <h3>Projektbeteiligte</h3>
        <p>
            Inhaltlich Verantwortlich:<br/>
            Prof. Dr. Kim Wünschmann<br/>
            Dr. Anna Menny
        </p>
        <p>
            Technische Konzipierung und Umsetzung:<br/>
            <a href=\"https://coding-friends.com\">Dr. Anna Neovesky</a>
        </p>
        <p>
            Fallstudien:<br/>
            Louis Wörner
        </p>
        <p>
            Biografische Studien:<br/>
            Lara Meinert
        </p>

        <h3>Danksagung</h3>
        <p>
            Wir danken...
        </p>

        <h3>Förderung</h3>
        <p>
            Diese Publikation steht im Kontext des EU CERV-Projekts “Digital Memorial Knowledge Infrastructure – The Holocaust in Hungary 80
            Years Later” (HUNGMEM)
        </p>
        <p>
            <img class=\"img-fluid\" src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
        yield "\"
                 alt=\"\"/>
        </p>

        <h3 id=\"usage\">Nutzungsrechte</h3>
        <p>
            Die Inhalte stehen unter einer CC BY 4.0 Lizenz und können unter Namensnennung weitergenutzt werden.
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
        return "site/imprint.html.twig";
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
        return array (  151 => 63,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Impressum | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container g-4 py-5\">
    <h2>Impressum</h2>
    <div class=\"row\">
    <div class=\"col-lg-6\">
        <p>„Holocaust in Ungarn und Deportationen nach Norddeutschland 1944 “ ist ein Projekt des Instituts für die Geschichte der deutschen
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

        <h3>Projektbeteiligte</h3>
        <p>
            Inhaltlich Verantwortlich:<br/>
            Prof. Dr. Kim Wünschmann<br/>
            Dr. Anna Menny
        </p>
        <p>
            Technische Konzipierung und Umsetzung:<br/>
            <a href=\"https://coding-friends.com\">Dr. Anna Neovesky</a>
        </p>
        <p>
            Fallstudien:<br/>
            Louis Wörner
        </p>
        <p>
            Biografische Studien:<br/>
            Lara Meinert
        </p>

        <h3>Danksagung</h3>
        <p>
            Wir danken...
        </p>

        <h3>Förderung</h3>
        <p>
            Diese Publikation steht im Kontext des EU CERV-Projekts “Digital Memorial Knowledge Infrastructure – The Holocaust in Hungary 80
            Years Later” (HUNGMEM)
        </p>
        <p>
            <img class=\"img-fluid\" src=\"{{ asset('images/') }}\"
                 alt=\"\"/>
        </p>

        <h3 id=\"usage\">Nutzungsrechte</h3>
        <p>
            Die Inhalte stehen unter einer CC BY 4.0 Lizenz und können unter Namensnennung weitergenutzt werden.
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

{% endblock %}", "site/imprint.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/imprint.html.twig");
    }
}
