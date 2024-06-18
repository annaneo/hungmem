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

/* interviews/lubinska.html.twig */
class __TwigTemplate_a05d4a35d3f939072c11d8c4d5f6c1ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/lubinska.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/lubinska.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/lubinska.html.twig", 1);
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

        yield " Lubinska | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Lubinska.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Lubinska.mov"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Elsara Lubinska über ihre Einwanderung nach Deutschland 1991. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Da rief mich eine Frau aus der Botschaft an […] und dann hat sie gesagt, dass die
                        ersten Zwanzig die [Einreise-]Erlaubnis bekommen haben […] und ich bin auch dabei.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 07:40</p>
                    <p>Gezeigter Ausschnitt: 04:30</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 14.4.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Dokument des Bundesverwaltungsamts zur Aufnahme jüdischer Immigranten aus der
                        Sowjetunion in der Bundesrepublik Deutschland sowie Kopien der Pässe von Elsara Lubinska und
                        ihrem Sohn</p>
                    <p>Schlagwort(e): Sowjetunion,
                        Kontingentflüchtlingsgesetz,
                        Migration</p>
                    <p>Genannte Orte: Moskau,
                        Buchara,
                        Nowosibirsk,
                        Hamburg
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Elsara Lubinksa</h2>
                <p>
                    Elsara Lubinksa wurde 1945 in Buchara, Usbekistan, geboren und wuchs in der Ukraine auf. Nach einem
                    Studium in Nowosibirsk wohnte sie in Moskau, von wo aus sie als eine der ersten sogenannten
                    Kontingentflüchtlinge im Dezember 1991 – gemeinsam mit ihrem Sohn – nach Hamburg kam. In dem
                    Interviewausschnitt berichtet Lubinska von ihren Erinnerungen an die Vorbereitungen zur Auswanderung
                    nach Deutschland bis hin zur Ankunft und dem Zurechtfinden in der Hansestadt.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6col\">
                <a href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Lubinska_Pass.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"lubinska\"
                   data-title=\"Aufnahmezusage für Hamburg (Scan). IGdJ.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Lubinska_Pass_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Aufnahmezusage für Hamburg (Scan) IGdJ\"/>
                </a>
                <a href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Lubinska_Aufnahme.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"lubinska\"
                   data-title=\"Sowjetischer Pass (Scan). Mit freundlicher Genehmigung.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Lubinska_Aufnahme_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Sowjetischer Pass (Scan). Mit freundlicher Genehmigung.\"/>
                </a>
                <p class=\"caption img-fluid\">Pass und Aufnahmezusage von Elsara Lubinksa. Mit freundlicher Genehmigung.</p>
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
        return "interviews/lubinska.html.twig";
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
        return array (  171 => 68,  164 => 64,  158 => 61,  151 => 57,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Lubinska | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Lubinska.jpg') }}\">
                    <source src=\"{{ asset('videos/Lubinska.mov') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Elsara Lubinska über ihre Einwanderung nach Deutschland 1991. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Da rief mich eine Frau aus der Botschaft an […] und dann hat sie gesagt, dass die
                        ersten Zwanzig die [Einreise-]Erlaubnis bekommen haben […] und ich bin auch dabei.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 07:40</p>
                    <p>Gezeigter Ausschnitt: 04:30</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 14.4.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Dokument des Bundesverwaltungsamts zur Aufnahme jüdischer Immigranten aus der
                        Sowjetunion in der Bundesrepublik Deutschland sowie Kopien der Pässe von Elsara Lubinska und
                        ihrem Sohn</p>
                    <p>Schlagwort(e): Sowjetunion,
                        Kontingentflüchtlingsgesetz,
                        Migration</p>
                    <p>Genannte Orte: Moskau,
                        Buchara,
                        Nowosibirsk,
                        Hamburg
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Elsara Lubinksa</h2>
                <p>
                    Elsara Lubinksa wurde 1945 in Buchara, Usbekistan, geboren und wuchs in der Ukraine auf. Nach einem
                    Studium in Nowosibirsk wohnte sie in Moskau, von wo aus sie als eine der ersten sogenannten
                    Kontingentflüchtlinge im Dezember 1991 – gemeinsam mit ihrem Sohn – nach Hamburg kam. In dem
                    Interviewausschnitt berichtet Lubinska von ihren Erinnerungen an die Vorbereitungen zur Auswanderung
                    nach Deutschland bis hin zur Ankunft und dem Zurechtfinden in der Hansestadt.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6col\">
                <a href=\"{{ asset('images/objekte/Lubinska_Pass.jpg') }}\"
                   data-lightbox=\"lubinska\"
                   data-title=\"Aufnahmezusage für Hamburg (Scan). IGdJ.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Lubinska_Pass_Voransicht.jpg') }}\"
                         alt=\"Aufnahmezusage für Hamburg (Scan) IGdJ\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Lubinska_Aufnahme.jpg') }}\"
                   data-lightbox=\"lubinska\"
                   data-title=\"Sowjetischer Pass (Scan). Mit freundlicher Genehmigung.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Lubinska_Aufnahme_Voransicht.jpg') }}\"
                         alt=\"Sowjetischer Pass (Scan). Mit freundlicher Genehmigung.\"/>
                </a>
                <p class=\"caption img-fluid\">Pass und Aufnahmezusage von Elsara Lubinksa. Mit freundlicher Genehmigung.</p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/lubinska.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/lubinska.html.twig");
    }
}
