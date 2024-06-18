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

/* interviews/camargo.html.twig */
class __TwigTemplate_46a0ea550daf818d20414ec3c6a58f10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/camargo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/camargo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/camargo.html.twig", 1);
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

        yield " Camargo | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Camargo.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Camargo.mov"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Julia Camargo über die Armbanduhr ihrer Großmutter. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Die Uhr hat nur einen emotionalen Wert, sie ist eigentlich aus Metall.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 06:54</p>
                    <p>Gezeigter Ausschnitt: 03:58</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Armbanduhr der Großmutter</p>
                    <p>Schlagwort(e): Objekttag,
                        Migration,
                        Sowjetunion,
                        Zweiter Weltkrieg,
                        Nationalsozialismus,
                        Kontingentflüchtlingsgesetz</p>
                    <p>Genannte Orte: Nürnberg,
                        Hamburg,
                        Usbekistan,
                        Ukraine
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Julia Camargo</h2>
                <p>
                    Julia Camargo kam 1995 im Rahmen des Kontingentflüchtlingsgesetzes aus der Ukraine nach Deutschland.
                    Die bei den gemeinsam mit dem Jüdischen Museum Berlin ausgerichteten Hamburger Objekttag
                    präsentierte Armbanduhr erinnert sie an die Flucht ihrer damals 18-jährigen Großmutter vor den
                    Nationalsozialisten. Das Gespräch beleuchtet insbesondere die Lebensgeschichte der Großmutter sowie
                    die Ankunft der Familie in Deutschland in den 1990er-Jahren.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Camargo_Objekt_Armbanduhr2.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"camargo\"
                   data-title=\"Armbanduhr der Großmutter von Julia Camargo. Foto: Stephan Pramme, Jüdisches Museum Berlin\">
                    <img class=\"img-fluid\" class=\"gallery\"
                         src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Camargo_Objekt_Armbanduhr2_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Julia Camargo mit der Armbanduhr ihrer Großmutter. Foto: Stephan Pramme, Jüdisches Museum Berlin.\"/>
                </a>
                <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Camargo_mit_Objekt.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"camargo\"
                   data-title=\"Julia Camargo mit der Armbanduhr ihrer Großmutter. Foto: Stephan Pramme, Jüdisches
                    Museum Berlin.\">
                </a>
                <a href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Camargo_Objekt_Armbanduhr.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"camargo\"
                   data-title=\"Armbanduhr der Großmutter von Julia Camargo. Foto: Stephan Pramme, Jüdisches Museum Berlin\">
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Armbanduhr der Großmutter von Julia Camargo. Foto: Stephan Pramme, Jüdisches
                            Museum Berlin. [Bildergalerie]</p>
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
        return "interviews/camargo.html.twig";
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
        return array (  172 => 69,  164 => 64,  158 => 61,  151 => 57,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Camargo | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Camargo.jpg') }}\">
                    <source src=\"{{ asset('videos/Camargo.mov') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Julia Camargo über die Armbanduhr ihrer Großmutter. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Die Uhr hat nur einen emotionalen Wert, sie ist eigentlich aus Metall.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 06:54</p>
                    <p>Gezeigter Ausschnitt: 03:58</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Armbanduhr der Großmutter</p>
                    <p>Schlagwort(e): Objekttag,
                        Migration,
                        Sowjetunion,
                        Zweiter Weltkrieg,
                        Nationalsozialismus,
                        Kontingentflüchtlingsgesetz</p>
                    <p>Genannte Orte: Nürnberg,
                        Hamburg,
                        Usbekistan,
                        Ukraine
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Julia Camargo</h2>
                <p>
                    Julia Camargo kam 1995 im Rahmen des Kontingentflüchtlingsgesetzes aus der Ukraine nach Deutschland.
                    Die bei den gemeinsam mit dem Jüdischen Museum Berlin ausgerichteten Hamburger Objekttag
                    präsentierte Armbanduhr erinnert sie an die Flucht ihrer damals 18-jährigen Großmutter vor den
                    Nationalsozialisten. Das Gespräch beleuchtet insbesondere die Lebensgeschichte der Großmutter sowie
                    die Ankunft der Familie in Deutschland in den 1990er-Jahren.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"{{ asset('images/objekte/Camargo_Objekt_Armbanduhr2.jpg') }}\"
                   data-lightbox=\"camargo\"
                   data-title=\"Armbanduhr der Großmutter von Julia Camargo. Foto: Stephan Pramme, Jüdisches Museum Berlin\">
                    <img class=\"img-fluid\" class=\"gallery\"
                         src=\"{{ asset('images/objekte/Camargo_Objekt_Armbanduhr2_Voransicht.jpg') }}\"
                         alt=\"Julia Camargo mit der Armbanduhr ihrer Großmutter. Foto: Stephan Pramme, Jüdisches Museum Berlin.\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Camargo_mit_Objekt.jpg') }}\"
                   data-lightbox=\"camargo\"
                   data-title=\"Julia Camargo mit der Armbanduhr ihrer Großmutter. Foto: Stephan Pramme, Jüdisches
                    Museum Berlin.\">
                </a>
                <a href=\"{{ asset('images/objekte/Camargo_Objekt_Armbanduhr.jpg') }}\"
                   data-lightbox=\"camargo\"
                   data-title=\"Armbanduhr der Großmutter von Julia Camargo. Foto: Stephan Pramme, Jüdisches Museum Berlin\">
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Armbanduhr der Großmutter von Julia Camargo. Foto: Stephan Pramme, Jüdisches
                            Museum Berlin. [Bildergalerie]</p>
                </div>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/camargo.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/camargo.html.twig");
    }
}
