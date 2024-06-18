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

/* interviews/trebitsch.html.twig */
class __TwigTemplate_6ad2258d5d7a298ce86964ca0074ed00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/trebitsch.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/trebitsch.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/trebitsch.html.twig", 1);
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

        yield " Treibitsch | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Trebitsch.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Trebitsch.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Katharina Trebitsch über drei familiengeschichtliche Objekte. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Das Schiff wurde zum größten Schatz unserer Familie.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 07:35</p>
                    <p>Gezeigter Ausschnitt: 06:29</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Gebetsbuchs der Großmutter (etwa 1912),
                        Fotografie des Großvaters (etwa 1944), Holzschiff des Vaters</p>
                    <p>Schlagwort(e): Objekttag,
                        KZ Sachsenhausen,
                        KZ Ravensbrück,
                        KZ-Außenlager Barth,
                        KZ Wöbbelin,
                        Holocaust,
                        Nationalsozialismus,
                        Zweiter Weltkrieg</p>
                    <p>Genannte Orte: Budapest,
                        Bor,
                        Oranienburg,
                        Ravensbrück,
                        Barth,
                        Wöbbelin,
                        Hamburg,
                        Schweden,
                        Israel
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Katharina Trebitsch</h2>
                <p>
                    Ein Gebetsbuch der Großmutter, eine Fotografie ihres Großvaters sowie ein Holzschiff ihres Vaters,
                    dem Filmproduzenten Gyula Trebitsch, sind die für die 1949 geborene Fernsehproduzentin Katharina
                    Trebitsch zentralen Objekte ihrer Familiengeschichte. Während sie das Gebetsbuch und die Fotogafie
                    ungefähr auf die Jahre 1912 und 1944 datiert, lässt sich die Übergabe des Holzschiffs an den Vater
                    genau bestimmen, es war das erste Geburtstagsgeschenk nach der Befreiung, überreicht von Mitüberlebenden des KZ-Wöbbelin.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Trebitsch_Objekt_Schiff.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"schiff\"
                   data-title=\"Holzschiff, das Katharina Trebitsch' Vater 1945 zum Geburtstag von anderen Überlebenden erhalten hat. Foto: Stephan Pramme, Jüdisches
                    Museum Berlin\">
                    <img class=\"gallery img-fluid\"
                         src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Trebitsch_Objekt_Schiff_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"\"/>
                </a>
                <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Trebitsch_mit_Objekt.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"schiff\"
                   data-title=\"Katharina Trebitsch mit dem Holzschiff ihres Vaters. Foto: Stephan Pramme, Jüdisches
                    Museum Berlin\">
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Holzschiff, das Katharina Trebitsch' Vater 1945 zum Geburtstag von anderen Überlebenden erhalten hat. Foto: Stephan Pramme, Jüdisches
                    Museum Berlin. [Bildergalerie]</p>
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
        return "interviews/trebitsch.html.twig";
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
        return array (  173 => 73,  167 => 70,  159 => 65,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Treibitsch | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Trebitsch.jpg') }}\">
                    <source src=\"{{ asset('videos/Trebitsch.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Katharina Trebitsch über drei familiengeschichtliche Objekte. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Das Schiff wurde zum größten Schatz unserer Familie.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 07:35</p>
                    <p>Gezeigter Ausschnitt: 06:29</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Gebetsbuchs der Großmutter (etwa 1912),
                        Fotografie des Großvaters (etwa 1944), Holzschiff des Vaters</p>
                    <p>Schlagwort(e): Objekttag,
                        KZ Sachsenhausen,
                        KZ Ravensbrück,
                        KZ-Außenlager Barth,
                        KZ Wöbbelin,
                        Holocaust,
                        Nationalsozialismus,
                        Zweiter Weltkrieg</p>
                    <p>Genannte Orte: Budapest,
                        Bor,
                        Oranienburg,
                        Ravensbrück,
                        Barth,
                        Wöbbelin,
                        Hamburg,
                        Schweden,
                        Israel
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Katharina Trebitsch</h2>
                <p>
                    Ein Gebetsbuch der Großmutter, eine Fotografie ihres Großvaters sowie ein Holzschiff ihres Vaters,
                    dem Filmproduzenten Gyula Trebitsch, sind die für die 1949 geborene Fernsehproduzentin Katharina
                    Trebitsch zentralen Objekte ihrer Familiengeschichte. Während sie das Gebetsbuch und die Fotogafie
                    ungefähr auf die Jahre 1912 und 1944 datiert, lässt sich die Übergabe des Holzschiffs an den Vater
                    genau bestimmen, es war das erste Geburtstagsgeschenk nach der Befreiung, überreicht von Mitüberlebenden des KZ-Wöbbelin.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"{{ asset('images/objekte/Trebitsch_Objekt_Schiff.jpg') }}\"
                   data-lightbox=\"schiff\"
                   data-title=\"Holzschiff, das Katharina Trebitsch' Vater 1945 zum Geburtstag von anderen Überlebenden erhalten hat. Foto: Stephan Pramme, Jüdisches
                    Museum Berlin\">
                    <img class=\"gallery img-fluid\"
                         src=\"{{ asset('images/objekte/Trebitsch_Objekt_Schiff_Voransicht.jpg') }}\"
                         alt=\"\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Trebitsch_mit_Objekt.jpg') }}\"
                   data-lightbox=\"schiff\"
                   data-title=\"Katharina Trebitsch mit dem Holzschiff ihres Vaters. Foto: Stephan Pramme, Jüdisches
                    Museum Berlin\">
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Holzschiff, das Katharina Trebitsch' Vater 1945 zum Geburtstag von anderen Überlebenden erhalten hat. Foto: Stephan Pramme, Jüdisches
                    Museum Berlin. [Bildergalerie]</p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/trebitsch.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/trebitsch.html.twig");
    }
}
