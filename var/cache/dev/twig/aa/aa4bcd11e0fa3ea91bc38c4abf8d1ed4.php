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

/* interviews/horwitz.html.twig */
class __TwigTemplate_b6b1e59bf86c04dfbd302041e5fd13bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/horwitz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/horwitz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/horwitz.html.twig", 1);
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

        yield " Horwitz | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Horwitz.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Horwitz.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Daphna Horwitz über die Aktentasche ihrer Großmutter. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Diese Tasche ist für mich so etwas ist wie ein Bindungsglied, eine Verbindung zu
                        meiner Urgroßmutter und meiner Großmutter.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 09:09</p>
                    <p>Gezeigter Ausschnitt: 06:35</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 2.6.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Tasche der
                        Urgroßmutter</p>
                    <p>Schlagwort(e): Objekttag,
                        Zionismus,
                        Migration</p>
                    <p>Genannte Orte: Parchim,
                        Hamburg,
                        Palästina/ Israel
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Daphna Horwitz</h2>
                <p>
                    1935 flohen die Großeltern von Daphna Horwitz, Eva und Sam Horwitz, von Hamburg aus vor den
                    Nationalsozialisten nach Palästina. Dort hatte der Großvater bereits 1925 in Herzlia ein Stück Land
                    erworben. Mit im Gepäck war eine Handtasche, die Eva Horwitz, geb. Bernhard, zuvor von ihrer
                    Mutter Ella Bernhard erhalten hatte und fortan mit Dokumenten zu ihrer Auswanderung und Briefen
                    sowie Postkarten ihrer Familie füllte. Der Wunsch, mehr über die eigene Familiengeschichte,
                    insbesondere über die Flucht ihrer Großeltern, zu erfahren, führte Daphna Horwitz im November 2021
                    zu der Tasche, die ihr ein Onkel samt Inhalt zur Verfügung stellte. Daphna Horwitz wurde 1972 in
                    Hamburg geboren und ist Diversity Trainerin, Change Managerin, Wirtschaftshistorikerin und Politologin.
                    Seit 2020 ist Daphna Horwitz ehrenamtliches Mitglied der Kultuskommission der Reformsynagoge in der
                    Jüdischen Gemeinde Hamburg.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Horwitz_Aktentasche.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"horwitz\"
                   data-title=\"Aktentasche der Familie Horwitz. Foto: Stephan Pamme, Jüdisches Museum Berlin.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Horwitz_Aktentasche_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Aktentasche der Familie Horwitz\"/>
                </a>
                <a href=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Horwitz_Aktentasche-offen.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"horwitz\"
                   data-title=\"Aktentasche der Familie Horwitz. Foto: Stephan Pamme, Jüdisches Museum Berlin.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Horwitz_Aktentasche-offen_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Aktentasche der Familie Horwitz\" />
                </a>
                <a href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Horwitz_Aktentasche_Briefe.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"horwitz\"
                   data-title=\"Aktentasche, Dokumente und Briefe der Familie Horwitz. Foto: IGdJ.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Horwitz_Aktentasche_Briefe_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Aktentasche, Dokumente und Briefe der Familie Horwitz. Foto: IGdJ\" />
                </a>
                <a href=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Horwitz_Brief.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"horwitz\"
                   data-title=\"Brief der Familie Horwitz. Foto: IGdJ.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Horwitz_Brief_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Brief der Familie Horwitz. Foto: IGdJ\" />
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Aktentasche und Briefe der Familie Horwitz. Fotos: Stephan Pamme, Jüdisches Museum Berlin und IGdJ. [Bildergalerie]</p>
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
        return "interviews/horwitz.html.twig";
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
        return array (  200 => 85,  193 => 81,  187 => 78,  180 => 74,  174 => 71,  167 => 67,  161 => 64,  154 => 60,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Horwitz | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Horwitz.jpg') }}\">
                    <source src=\"{{ asset('videos/Horwitz.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Daphna Horwitz über die Aktentasche ihrer Großmutter. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Diese Tasche ist für mich so etwas ist wie ein Bindungsglied, eine Verbindung zu
                        meiner Urgroßmutter und meiner Großmutter.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 09:09</p>
                    <p>Gezeigter Ausschnitt: 06:35</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 2.6.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Tasche der
                        Urgroßmutter</p>
                    <p>Schlagwort(e): Objekttag,
                        Zionismus,
                        Migration</p>
                    <p>Genannte Orte: Parchim,
                        Hamburg,
                        Palästina/ Israel
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Daphna Horwitz</h2>
                <p>
                    1935 flohen die Großeltern von Daphna Horwitz, Eva und Sam Horwitz, von Hamburg aus vor den
                    Nationalsozialisten nach Palästina. Dort hatte der Großvater bereits 1925 in Herzlia ein Stück Land
                    erworben. Mit im Gepäck war eine Handtasche, die Eva Horwitz, geb. Bernhard, zuvor von ihrer
                    Mutter Ella Bernhard erhalten hatte und fortan mit Dokumenten zu ihrer Auswanderung und Briefen
                    sowie Postkarten ihrer Familie füllte. Der Wunsch, mehr über die eigene Familiengeschichte,
                    insbesondere über die Flucht ihrer Großeltern, zu erfahren, führte Daphna Horwitz im November 2021
                    zu der Tasche, die ihr ein Onkel samt Inhalt zur Verfügung stellte. Daphna Horwitz wurde 1972 in
                    Hamburg geboren und ist Diversity Trainerin, Change Managerin, Wirtschaftshistorikerin und Politologin.
                    Seit 2020 ist Daphna Horwitz ehrenamtliches Mitglied der Kultuskommission der Reformsynagoge in der
                    Jüdischen Gemeinde Hamburg.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"{{ asset('images/objekte/Horwitz_Aktentasche.jpg') }}\"
                   data-lightbox=\"horwitz\"
                   data-title=\"Aktentasche der Familie Horwitz. Foto: Stephan Pamme, Jüdisches Museum Berlin.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Horwitz_Aktentasche_Voransicht.jpg') }}\"
                         alt=\"Aktentasche der Familie Horwitz\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Horwitz_Aktentasche-offen.jpg') }}\"
                   data-lightbox=\"horwitz\"
                   data-title=\"Aktentasche der Familie Horwitz. Foto: Stephan Pamme, Jüdisches Museum Berlin.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Horwitz_Aktentasche-offen_Voransicht.jpg') }}\"
                         alt=\"Aktentasche der Familie Horwitz\" />
                </a>
                <a href=\"{{ asset('images/objekte/Horwitz_Aktentasche_Briefe.jpg') }}\"
                   data-lightbox=\"horwitz\"
                   data-title=\"Aktentasche, Dokumente und Briefe der Familie Horwitz. Foto: IGdJ.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Horwitz_Aktentasche_Briefe_Voransicht.jpg') }}\"
                         alt=\"Aktentasche, Dokumente und Briefe der Familie Horwitz. Foto: IGdJ\" />
                </a>
                <a href=\"{{ asset('images/objekte/Horwitz_Brief.jpg') }}\"
                   data-lightbox=\"horwitz\"
                   data-title=\"Brief der Familie Horwitz. Foto: IGdJ.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Horwitz_Brief_Voransicht.jpg') }}\"
                         alt=\"Brief der Familie Horwitz. Foto: IGdJ\" />
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Aktentasche und Briefe der Familie Horwitz. Fotos: Stephan Pamme, Jüdisches Museum Berlin und IGdJ. [Bildergalerie]</p>
            </div>
        </div>
    </div>
{% endblock %}
", "interviews/horwitz.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/horwitz.html.twig");
    }
}
