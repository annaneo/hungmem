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

/* interviews/lahnstein.html.twig */
class __TwigTemplate_98b94447532d308c71ed5093648a5bd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/lahnstein.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/lahnstein.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/lahnstein.html.twig", 1);
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

        yield " Lahnstein | ";
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Lahnstein.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Lahnstein.mov"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Sonja Lahnstein-Kandel über die familiäre (Migrations-)Geschichte. © IGdJ,
                        2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Wenn man sich nicht einsetzt, kann eine Demokratie nicht funktionieren.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 52:01</p>
                    <p>Gezeigter Ausschnitt: 04:37</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Online</p>
                    <p>Interview geführt am: 23.5.22</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Antisemitismus,
                        KZ Auschwitz,
                        KZ Jasenovac,
                        Sozialismus,
                        Gastarbeit,
                        Migration,
                        Jüdische Identität,
                        Zweiter Weltkrieg,
                        Nationalsozialismus,
                        Holocaust</p>
                    <p>Genannte Orte: Zagreb,
                        Przemyśl,
                        Novi Sad,
                        Brüssel,
                        Washington,
                        Oświęcim (Auschwitz),
                        Jasenovac,
                        Hamburg,
                        Ungarn,
                        Jugoslawien,
                        Kroatien,
                        Polen
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Sonja Lahnstein-Kandel</h2>
                <p>
                    Sonja Lahnstein-Kandel wurde 1950 als Sonja Kandel in Zagreb, Jugoslawien, geboren. Mt 16 Jahren kam
                    sie gemeinsam mit ihren Eltern nach Hamburg, wo ihr Vater zunächst die Leitung einer Privatklinik
                    übernahm und ihre Mutter, studierte Pharmazeutin, als Apothekerin arbeitete. Mit Hilfe der
                    finanziellen Unterstützung der Jüdischen Gemeinde konnte der Vater später eine eigene Praxis
                    gründen, in der auch die Mutter tätig war. Sonja Lahnstein-Kandels beruflicher Werdegang als
                    Volkswirtin führte sie unter anderem nach Belgien sowie in die USA, wo sie für die Weltbank in
                    Washington tätig war und ihren späteren Ehemann, Manfred Lahnstein, kennenlernte. Nach seiner
                    Ernennung zum Bundesfinanzminister kehrte das Paar 1982 nach Deutschland zurück. Hier gründete
                    Lahnstein-Kandel Step21, eine Initiative zur Förderung demokratischer Grundwerte wie Toleranz,
                    Verantwortung und Zivilcourage. Die gewählten Interviewausschnitte beleuchten ihre
                    Familiengeschichte, ihr gesellschaftliches Engagement und geben darüber hinaus Einblicke in
                    das jüdische Selbstverständnis Lahnstein-Kandels.
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
        return "interviews/lahnstein.html.twig";
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
        return array (  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Lahnstein | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Lahnstein.jpg') }}\">
                    <source src=\"{{ asset('videos/Lahnstein.mov') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Sonja Lahnstein-Kandel über die familiäre (Migrations-)Geschichte. © IGdJ,
                        2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Wenn man sich nicht einsetzt, kann eine Demokratie nicht funktionieren.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 52:01</p>
                    <p>Gezeigter Ausschnitt: 04:37</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Online</p>
                    <p>Interview geführt am: 23.5.22</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Antisemitismus,
                        KZ Auschwitz,
                        KZ Jasenovac,
                        Sozialismus,
                        Gastarbeit,
                        Migration,
                        Jüdische Identität,
                        Zweiter Weltkrieg,
                        Nationalsozialismus,
                        Holocaust</p>
                    <p>Genannte Orte: Zagreb,
                        Przemyśl,
                        Novi Sad,
                        Brüssel,
                        Washington,
                        Oświęcim (Auschwitz),
                        Jasenovac,
                        Hamburg,
                        Ungarn,
                        Jugoslawien,
                        Kroatien,
                        Polen
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Sonja Lahnstein-Kandel</h2>
                <p>
                    Sonja Lahnstein-Kandel wurde 1950 als Sonja Kandel in Zagreb, Jugoslawien, geboren. Mt 16 Jahren kam
                    sie gemeinsam mit ihren Eltern nach Hamburg, wo ihr Vater zunächst die Leitung einer Privatklinik
                    übernahm und ihre Mutter, studierte Pharmazeutin, als Apothekerin arbeitete. Mit Hilfe der
                    finanziellen Unterstützung der Jüdischen Gemeinde konnte der Vater später eine eigene Praxis
                    gründen, in der auch die Mutter tätig war. Sonja Lahnstein-Kandels beruflicher Werdegang als
                    Volkswirtin führte sie unter anderem nach Belgien sowie in die USA, wo sie für die Weltbank in
                    Washington tätig war und ihren späteren Ehemann, Manfred Lahnstein, kennenlernte. Nach seiner
                    Ernennung zum Bundesfinanzminister kehrte das Paar 1982 nach Deutschland zurück. Hier gründete
                    Lahnstein-Kandel Step21, eine Initiative zur Förderung demokratischer Grundwerte wie Toleranz,
                    Verantwortung und Zivilcourage. Die gewählten Interviewausschnitte beleuchten ihre
                    Familiengeschichte, ihr gesellschaftliches Engagement und geben darüber hinaus Einblicke in
                    das jüdische Selbstverständnis Lahnstein-Kandels.
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "interviews/lahnstein.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/lahnstein.html.twig");
    }
}
