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

        yield " Projekt HUNGMEM | ";
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
        <h2>„Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM) </h2>
        <h3 class=\"mt-4\">Hintergrund und Ziele des Projektes</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Jedes zehnte Holocaust-Opfer stammte aus Ungarn in seinen damaligen Grenzen. 500.000–600.000 Jüdinnen und Juden sowie Roma und Romnja wurden von den Nationalsozialisten und ihren ungarischen Verbündeten ermordet. Die Namen dieser Verfolgten sind bis heute mehrheitlich unbekannt. 80 Jahre nach dem Holocaust in Ungarn hat sich ein transnationales Forschungs-und Erinnerungsprojekt zum Ziel gesetzt, das Schicksal der deportierten Frauen, Männer und Kinder zu erforschen, aufzuarbeiten und vor dem Vergessen zu bewahren. Das Projekt wird von der EU-Kommission im Rahmen des Förderprogramms CERV –Citizens, Equality, Rights and Values unterstützt.            </div>
            <div class=\"col-lg\">
                <p>
                    Im Projektverbund hat das IGdJ die Archivrecherchen zur Erfassung möglichst vieler Namen und Geschichten derjenigen koordiniert, die von der SS in die Konzentrationslager im norddeutschen Raum deportiert wurden. Dank der engen Zusammenarbeit mit den KZ-Gedenkstätten Bergen-Belsen und Neuengamme und den intensiven Recherchen der beiden Projektmitarbeitenden Lara Meinert (MA) und Louis Wörner (MA) konnten umfassende Daten zusammengeführt sowie teilweise neue Informationen ergänzt werden. Diese biografischen Daten fließen in eine am Jüdischen Museum und Archiv Budapest entwickelte digitale Gedenk-und Forschungsinfrastruktur ein. Weitere Daten zu Namen und Deportationswegen der Verfolgten kommen von den Partnerinstitutionen in Rumänien (Rumänisches Institut für Forschung über nationale Minderheiten) und der Slowakei (Jüdische Gemeinde in Komárno).                </p>
                <p>
                    The aim now is to bring together the findings and make them accessible in a public presentation.
                </p>
            </div>
        </div>
    </div>


    <div class=\"container mt-2\">
        <h3>Kooperationspartner</h3>
        <div class=\"row\">
            <div class=\"col-md\">
                <p>
                    The project \"Digital Commemoration and Research Infrastructure - The Holocaust in Hungary 80 Years Later\" (HUNGMEM) is being carried out in cooperation with the Hungarian Jewish Museum and Archive in Budapest, the Romanian Institute for Research on National Minorities and the Jewish Community in Komárno. The project is supported by the EU Commission as part of the CERV - Citizens, Equality, Rights and Values funding program. The international cooperation offers the unique opportunity to provide new impulses for research on the Holocaust by evaluating scattered sources in various archives in order to reconstruct transportation routes and individual biographies.
                </p>
            </div>
            <div class=\"col-md\">
                <div class=\"container\">
                    <div class=\"row partner\">
                        <a href=\"https://www.milev.hu\" tilte=\"Website des Museums\">
                        <img class=\"img-fluid\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/hjma-logo.png"), "html", null, true);
        yield "\"
                             alt=\"Logo des Hungarian Jewish Museum and Archive in Budapest\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://ispmn.gov.ro/\" tilte=\"Website des Instituts\">
                        <img class=\"img-fluid\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/ispmn.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo des Romanian Institute for Research on National Minorities\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://kehreg.com/\" tilte=\"Website der Gemeinde\">
                        <img class=\"img-fluid\" src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/komarno.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo der Jewish Community in Komárno\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website der Europäischen Kommission\">
                        <img class=\"img-fluid\" src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/European_Commission_logo.png"), "html", null, true);
        yield "\"
                             alt=\"Logo der EU Commission\"/>
                        </a>
                    </div>
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
        return array (  152 => 55,  143 => 49,  134 => 43,  125 => 37,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Projekt HUNGMEM | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container g-4 py-5\">
        <h2>„Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM) </h2>
        <h3 class=\"mt-4\">Hintergrund und Ziele des Projektes</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Jedes zehnte Holocaust-Opfer stammte aus Ungarn in seinen damaligen Grenzen. 500.000–600.000 Jüdinnen und Juden sowie Roma und Romnja wurden von den Nationalsozialisten und ihren ungarischen Verbündeten ermordet. Die Namen dieser Verfolgten sind bis heute mehrheitlich unbekannt. 80 Jahre nach dem Holocaust in Ungarn hat sich ein transnationales Forschungs-und Erinnerungsprojekt zum Ziel gesetzt, das Schicksal der deportierten Frauen, Männer und Kinder zu erforschen, aufzuarbeiten und vor dem Vergessen zu bewahren. Das Projekt wird von der EU-Kommission im Rahmen des Förderprogramms CERV –Citizens, Equality, Rights and Values unterstützt.            </div>
            <div class=\"col-lg\">
                <p>
                    Im Projektverbund hat das IGdJ die Archivrecherchen zur Erfassung möglichst vieler Namen und Geschichten derjenigen koordiniert, die von der SS in die Konzentrationslager im norddeutschen Raum deportiert wurden. Dank der engen Zusammenarbeit mit den KZ-Gedenkstätten Bergen-Belsen und Neuengamme und den intensiven Recherchen der beiden Projektmitarbeitenden Lara Meinert (MA) und Louis Wörner (MA) konnten umfassende Daten zusammengeführt sowie teilweise neue Informationen ergänzt werden. Diese biografischen Daten fließen in eine am Jüdischen Museum und Archiv Budapest entwickelte digitale Gedenk-und Forschungsinfrastruktur ein. Weitere Daten zu Namen und Deportationswegen der Verfolgten kommen von den Partnerinstitutionen in Rumänien (Rumänisches Institut für Forschung über nationale Minderheiten) und der Slowakei (Jüdische Gemeinde in Komárno).                </p>
                <p>
                    The aim now is to bring together the findings and make them accessible in a public presentation.
                </p>
            </div>
        </div>
    </div>


    <div class=\"container mt-2\">
        <h3>Kooperationspartner</h3>
        <div class=\"row\">
            <div class=\"col-md\">
                <p>
                    The project \"Digital Commemoration and Research Infrastructure - The Holocaust in Hungary 80 Years Later\" (HUNGMEM) is being carried out in cooperation with the Hungarian Jewish Museum and Archive in Budapest, the Romanian Institute for Research on National Minorities and the Jewish Community in Komárno. The project is supported by the EU Commission as part of the CERV - Citizens, Equality, Rights and Values funding program. The international cooperation offers the unique opportunity to provide new impulses for research on the Holocaust by evaluating scattered sources in various archives in order to reconstruct transportation routes and individual biographies.
                </p>
            </div>
            <div class=\"col-md\">
                <div class=\"container\">
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
                        <a href=\"https://kehreg.com/\" tilte=\"Website der Gemeinde\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/komarno.jpg') }}\"
                             alt=\"Logo der Jewish Community in Komárno\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website der Europäischen Kommission\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/European_Commission_logo.png') }}\"
                             alt=\"Logo der EU Commission\"/>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

{% endblock %}", "site/about.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/about.html.twig");
    }
}
