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

/* interviews/fenyes.html.twig */
class __TwigTemplate_ee7edf4690517d2a5b7b9d9776e8a97f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/fenyes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/fenyes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/fenyes.html.twig", 1);
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

        yield " Fenyes | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Fenyes.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Fenyes.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Gabriela Fenyes über ihre (Familien-)Geschichte. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Ich war ja auch dann das erste Mädchen überhaupt nach dem Holocaust, das in Hannover Bat Mitzwa hatte.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 18:16</p>
                    <p>Gezeigter Ausschnitt: 08:32</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 18.01.2023</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Migration,
                        KZ Auschwitz,
                        KZ Stuhr-Obernheide,
                        KZ-Außenlager Hannover-Ahlem,
                        Holocaust,
                        Nachkriegszeit,
                        Bat Mitzwa,
                        jüdische Gemeinde</p>
                    <p>Genannte Orte:
                        Budapest,
                        Hannover,
                        Bremen,
                        Oświęcim,
                        Hamburg,
                        Slowakei
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Gabriela Fenyes</h2>
                <p>
                    Gabriela Fenyes war die erste Frau im Vorstand der Jüdischen Gemeinde Hamburg. In dem
                    Interviewausschnitt berichtet sie über ihre Gemeindearbeit und das jüdische Leben in Hamburg zu
                    Beginn der 1980er-Jahre ebenso wie über der ersten Kinder, die Lebensgeschichte ihrer Eltern, die
                    aus der Slowakei und Ungarn stammten, sich in Bergen Belsen kennenlernten und in der Nachkriegszeit
                    in Hannover eine neue Familie gründeten. Hier wurde Gabriela Fenyes 1947 geboren und feierte als
                    erstes Mädchen nach dem Holocaust ihre Bat Mizwa in der Jüdischen Gemeinde.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Fenyes_Familienbild.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"fenyes\"
                   data-title=\"Aufnahme der Großfamilie der Mutter, etwa 1938/39. Privatbesitz Gabriela Fenyes. Mit freundlicher Genehmigung.\">
                    <img class=\"img-fluid\" class=\"gallery\"
                         src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Fenyes_Familienbild_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Aufnahme der Großfamilie der Mutter, etwa 1938/39. Privatbesitz Gabriela Fenyes. Mit freundlicher Genehmigung\"/>
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Aufnahme der Großfamilie der Mutter, etwa 1938/39. Privatbesitz Gabriela Fenyes. Mit freundlicher Genehmigung.</p>
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
        return "interviews/fenyes.html.twig";
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
        return array (  164 => 67,  157 => 63,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Fenyes | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Fenyes.jpg') }}\">
                    <source src=\"{{ asset('videos/Fenyes.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Gabriela Fenyes über ihre (Familien-)Geschichte. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Ich war ja auch dann das erste Mädchen überhaupt nach dem Holocaust, das in Hannover Bat Mitzwa hatte.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 18:16</p>
                    <p>Gezeigter Ausschnitt: 08:32</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 18.01.2023</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Migration,
                        KZ Auschwitz,
                        KZ Stuhr-Obernheide,
                        KZ-Außenlager Hannover-Ahlem,
                        Holocaust,
                        Nachkriegszeit,
                        Bat Mitzwa,
                        jüdische Gemeinde</p>
                    <p>Genannte Orte:
                        Budapest,
                        Hannover,
                        Bremen,
                        Oświęcim,
                        Hamburg,
                        Slowakei
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Gabriela Fenyes</h2>
                <p>
                    Gabriela Fenyes war die erste Frau im Vorstand der Jüdischen Gemeinde Hamburg. In dem
                    Interviewausschnitt berichtet sie über ihre Gemeindearbeit und das jüdische Leben in Hamburg zu
                    Beginn der 1980er-Jahre ebenso wie über der ersten Kinder, die Lebensgeschichte ihrer Eltern, die
                    aus der Slowakei und Ungarn stammten, sich in Bergen Belsen kennenlernten und in der Nachkriegszeit
                    in Hannover eine neue Familie gründeten. Hier wurde Gabriela Fenyes 1947 geboren und feierte als
                    erstes Mädchen nach dem Holocaust ihre Bat Mizwa in der Jüdischen Gemeinde.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"{{ asset('images/objekte/Fenyes_Familienbild.jpg') }}\"
                   data-lightbox=\"fenyes\"
                   data-title=\"Aufnahme der Großfamilie der Mutter, etwa 1938/39. Privatbesitz Gabriela Fenyes. Mit freundlicher Genehmigung.\">
                    <img class=\"img-fluid\" class=\"gallery\"
                         src=\"{{ asset('images/objekte/Fenyes_Familienbild_Voransicht.jpg') }}\"
                         alt=\"Aufnahme der Großfamilie der Mutter, etwa 1938/39. Privatbesitz Gabriela Fenyes. Mit freundlicher Genehmigung\"/>
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Aufnahme der Großfamilie der Mutter, etwa 1938/39. Privatbesitz Gabriela Fenyes. Mit freundlicher Genehmigung.</p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/fenyes.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/fenyes.html.twig");
    }
}
