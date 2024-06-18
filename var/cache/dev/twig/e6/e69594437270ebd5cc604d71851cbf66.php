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

/* interviews/guggenheim.html.twig */
class __TwigTemplate_44934926cd723b5b89a41ee338bfb69a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/guggenheim.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/guggenheim.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/guggenheim.html.twig", 1);
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

        yield " Guggenheim | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Guggenheim.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Guggenheim.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Barbara Guggenheim über den Wandteppich ihrer Ururgroßmutter. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote pt-4\">„Umso schöner, dass es mit meiner Familie etwas zu tun hat.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 04:59</p>
                    <p>Gezeigter Ausschnitt: 04:13</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022, Objekttag Hamburg, in Kooperation mit dem Jüdischen Museum
                        Berlin</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Wandstickerei der
                        Ururgroßmutter</p>
                    <p>Schlagwort(e): Objekttag,
                        Migration</p>
                    <p>Genannte Orte: Gailingen,
                        Stuttgart,
                        Schweiz
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show align-top\">Barbara Guggenheim</h2>
                <p>
                    Barbara Guggenheim wurde 1957 in Zürich geboren und ist ehemalige Literaturagentin und
                    Gründungsmitglied des Jüdischen Salons am Grindel in Hamburg. In diesem Interview, das
                    im Rahmen des gemeinsam mit dem Jüdischen Museum Berlin organisierten Hamburger Objekttages
                    geführt wurde, erläutert Barbara Guggenheim die Hintergründe einer Wandstickerei, auf der der
                    Name ihrer Ururgroßmutter Florina Guggenheim zu lesen ist. Laut Angabe auf dem Objekt wurde
                    dieses im Jahr 1868 angefertigt, vermutlich in Gailingen, dem Wohnort der Ururgroßmutter.
                    Florina Guggenheim zog später, gemeinsam mit
                    ihrem Ehemann, nach Stuttgart, wo die Großmutter Barbara Guggenheims geboren wurde. Letztere
                    heiratete in den 1920er-Jahren in die Schweiz. Nach dem Tod der Großmutter übernahmen
                    zunächst die Eltern Guggenheims das Objekt. Inzwischen befindet sich die Wandstickerei in
                    Hamburg im Besitz von Barbara Guggenheim.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6col\">
                <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Guggenheim_mit_Wandteppich.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"guggenheim\"
                   data-title=\"Barbara Guggenheim mit dem Wandteppich ihrer Ururgroßmutter.\">
                    <img class=\"gallery\"
                         style=\"width: 265px\"
                         src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Guggenheim_mit_Wandteppich_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Barbara Guggenheim mit dem Wandteppich ihrer Ururgroßmutter\"/>
                </a>
                <a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Guggenheim_Objekt_Wandteppich.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"guggenheim\"
                   data-title=\"Wandteppich von Barbara Guggenheims Ururgroßmutter.\">
                    <img class=\"gallery\"
                         style=\"width: 235px\"
                         src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Guggenheim_Objekt_Wandteppich_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Wandteppich von Barbara Guggenheims Ururgroßmutter\"/>
                </a>
                <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Guggenheim_Objekt_Wandteppich-Ausschnitt.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"guggenheim\"
                   data-title=\"Detail des Wandteppichs von Barbara Guggenheims Ururgroßmutter.\">
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Barbara Guggenheim mit dem Wandteppich ihrer Ururgroßmutter und Wandteppich. Foto: Stephan Pramme,
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
        return "interviews/guggenheim.html.twig";
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
        return array (  182 => 76,  176 => 73,  168 => 68,  162 => 65,  154 => 60,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Guggenheim | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Guggenheim.jpg') }}\">
                    <source src=\"{{ asset('videos/Guggenheim.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Barbara Guggenheim über den Wandteppich ihrer Ururgroßmutter. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote pt-4\">„Umso schöner, dass es mit meiner Familie etwas zu tun hat.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 04:59</p>
                    <p>Gezeigter Ausschnitt: 04:13</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022, Objekttag Hamburg, in Kooperation mit dem Jüdischen Museum
                        Berlin</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Wandstickerei der
                        Ururgroßmutter</p>
                    <p>Schlagwort(e): Objekttag,
                        Migration</p>
                    <p>Genannte Orte: Gailingen,
                        Stuttgart,
                        Schweiz
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show align-top\">Barbara Guggenheim</h2>
                <p>
                    Barbara Guggenheim wurde 1957 in Zürich geboren und ist ehemalige Literaturagentin und
                    Gründungsmitglied des Jüdischen Salons am Grindel in Hamburg. In diesem Interview, das
                    im Rahmen des gemeinsam mit dem Jüdischen Museum Berlin organisierten Hamburger Objekttages
                    geführt wurde, erläutert Barbara Guggenheim die Hintergründe einer Wandstickerei, auf der der
                    Name ihrer Ururgroßmutter Florina Guggenheim zu lesen ist. Laut Angabe auf dem Objekt wurde
                    dieses im Jahr 1868 angefertigt, vermutlich in Gailingen, dem Wohnort der Ururgroßmutter.
                    Florina Guggenheim zog später, gemeinsam mit
                    ihrem Ehemann, nach Stuttgart, wo die Großmutter Barbara Guggenheims geboren wurde. Letztere
                    heiratete in den 1920er-Jahren in die Schweiz. Nach dem Tod der Großmutter übernahmen
                    zunächst die Eltern Guggenheims das Objekt. Inzwischen befindet sich die Wandstickerei in
                    Hamburg im Besitz von Barbara Guggenheim.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6col\">
                <a href=\"{{ asset('images/objekte/Guggenheim_mit_Wandteppich.jpg') }}\"
                   data-lightbox=\"guggenheim\"
                   data-title=\"Barbara Guggenheim mit dem Wandteppich ihrer Ururgroßmutter.\">
                    <img class=\"gallery\"
                         style=\"width: 265px\"
                         src=\"{{ asset('images/objekte/Guggenheim_mit_Wandteppich_Voransicht.jpg') }}\"
                         alt=\"Barbara Guggenheim mit dem Wandteppich ihrer Ururgroßmutter\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Guggenheim_Objekt_Wandteppich.jpg') }}\"
                   data-lightbox=\"guggenheim\"
                   data-title=\"Wandteppich von Barbara Guggenheims Ururgroßmutter.\">
                    <img class=\"gallery\"
                         style=\"width: 235px\"
                         src=\"{{ asset('images/objekte/Guggenheim_Objekt_Wandteppich_Voransicht.jpg') }}\"
                         alt=\"Wandteppich von Barbara Guggenheims Ururgroßmutter\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Guggenheim_Objekt_Wandteppich-Ausschnitt.jpg') }}\"
                   data-lightbox=\"guggenheim\"
                   data-title=\"Detail des Wandteppichs von Barbara Guggenheims Ururgroßmutter.\">
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Barbara Guggenheim mit dem Wandteppich ihrer Ururgroßmutter und Wandteppich. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin. [Bildergalerie]</p>
            </div>
        </div>
    </div>
{% endblock %}
", "interviews/guggenheim.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/guggenheim.html.twig");
    }
}
