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

/* interviews/zunik.html.twig */
class __TwigTemplate_8940503b093aa10f67df4c7dbb4444df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/zunik.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/zunik.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/zunik.html.twig", 1);
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

        yield " Zunik | ";
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
                <video width=\"100%\" height=\"100%\" controls poster=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Zunik.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Zunik.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p class=\"pr-2\">Igor Zunik über das Olympia-Maskottchen seiner Großeltern. © IGdJ, 2022.</p>
                    <p class=\"pt-5 quote\">„Ein bisschen der Kampfgeist der Olympischen Spiele, der sich natürlich auch auf
                        das Leben übertragen ließ.“</p>
                </div>
                <div class=\"pt-5\">
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 07:49</p>
                    <p>Gezeigter Ausschnitt: 05:03</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Olympia-Maskottchen der
                        Olympischen Spiele von 1980</p>
                    <p>Schlagworte: Objekttag,
                        Sowjetunion,
                        Kontingentflüchtlingsgesetz</p>
                    <p>Genannte Orte: Staubing,
                        Würzburg,
                        Bayreuth,
                        Kiew,
                        Brody,
                        Hamburg,
                        Ukraine
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-md-6 col-xl-6\">
                <h2 class=\"title-show\">Igor Zunik</h2>
                <p>
                    Igor Zunik, 1985 in Kiew geboren, kam als Neunjähriger gemeinsam mit seinen Eltern und seiner
                    Großmutter im Rahmen des Kontingentflüchtlingsgesetzes aus der heutigen Ukraine nach Deutschland. Das
                    Olympia-Maskottchen der Olympischen Spiele von 1980, ein kleiner Bär, ist der Ausgangspunkt des
                    Interviews, das anlässlich des gemeinsam mit dem Jüdischen Museum Berlin ausgerichteten Hamburger
                    Objekttages geführt wurde. Zunik erzählt, warum der Bär für ihn von hohem emotionalen Wert ist
                    und warum er symbolhaft für das Ankommen in Deutschland steht.
                </p>
            </div>
            <div class=\"col-md-6 col-xl-6\">
                <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Zunik_mit_Objekt.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"zunik\"
                   data-title=\"Igor Zunik mit dem Maskottchen der Olympischen Spiele von 1980. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\">
                    <img class=\"gallery img-fluid\"
                         src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Zunik_mit_Objekt_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Das Maskottchen der Olympischen Spiele von 1980, das Igor Zunik von seiner Großmutter bekommen hat. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\"/>
                </a>
                <a href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Zunik_Objekt_Maskottchen.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"zunik\"
                   data-title=\"Maskottchen der Olympischen Spiele von 1980. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\">
                </a>
                <p class=\"caption\" style=\"width:350px;\">Igor Zunik mit dem Maskottchen der Olympischen Spiele von 1980. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin. [Bildergalerie]</p>
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
        return "interviews/zunik.html.twig";
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
        return array (  169 => 69,  162 => 65,  154 => 60,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Zunik | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\" height=\"100%\" controls poster=\"{{ asset('images/poster/Zunik.jpg') }}\">
                    <source src=\"{{ asset('videos/Zunik.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p class=\"pr-2\">Igor Zunik über das Olympia-Maskottchen seiner Großeltern. © IGdJ, 2022.</p>
                    <p class=\"pt-5 quote\">„Ein bisschen der Kampfgeist der Olympischen Spiele, der sich natürlich auch auf
                        das Leben übertragen ließ.“</p>
                </div>
                <div class=\"pt-5\">
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 07:49</p>
                    <p>Gezeigter Ausschnitt: 05:03</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Olympia-Maskottchen der
                        Olympischen Spiele von 1980</p>
                    <p>Schlagworte: Objekttag,
                        Sowjetunion,
                        Kontingentflüchtlingsgesetz</p>
                    <p>Genannte Orte: Staubing,
                        Würzburg,
                        Bayreuth,
                        Kiew,
                        Brody,
                        Hamburg,
                        Ukraine
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-md-6 col-xl-6\">
                <h2 class=\"title-show\">Igor Zunik</h2>
                <p>
                    Igor Zunik, 1985 in Kiew geboren, kam als Neunjähriger gemeinsam mit seinen Eltern und seiner
                    Großmutter im Rahmen des Kontingentflüchtlingsgesetzes aus der heutigen Ukraine nach Deutschland. Das
                    Olympia-Maskottchen der Olympischen Spiele von 1980, ein kleiner Bär, ist der Ausgangspunkt des
                    Interviews, das anlässlich des gemeinsam mit dem Jüdischen Museum Berlin ausgerichteten Hamburger
                    Objekttages geführt wurde. Zunik erzählt, warum der Bär für ihn von hohem emotionalen Wert ist
                    und warum er symbolhaft für das Ankommen in Deutschland steht.
                </p>
            </div>
            <div class=\"col-md-6 col-xl-6\">
                <a href=\"{{ asset('images/objekte/Zunik_mit_Objekt.jpg') }}\"
                   data-lightbox=\"zunik\"
                   data-title=\"Igor Zunik mit dem Maskottchen der Olympischen Spiele von 1980. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\">
                    <img class=\"gallery img-fluid\"
                         src=\"{{ asset('images/objekte/Zunik_mit_Objekt_Voransicht.jpg') }}\"
                         alt=\"Das Maskottchen der Olympischen Spiele von 1980, das Igor Zunik von seiner Großmutter bekommen hat. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Zunik_Objekt_Maskottchen.jpg') }}\"
                   data-lightbox=\"zunik\"
                   data-title=\"Maskottchen der Olympischen Spiele von 1980. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\">
                </a>
                <p class=\"caption\" style=\"width:350px;\">Igor Zunik mit dem Maskottchen der Olympischen Spiele von 1980. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin. [Bildergalerie]</p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/zunik.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/zunik.html.twig");
    }
}
