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

/* interviews/heimann.html.twig */
class __TwigTemplate_4c99ee4f29c962dd8a0dbfb49654e7bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/heimann.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/heimann.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/heimann.html.twig", 1);
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

        yield " Heimann | ";
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
                <video width=\"100%\"   height=\"100%\" controls poster=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Heimann.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Heimann.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Michael Heimann über seine (Familien-)Geschichte und sein Selbstverständnis als Jude in Deutschland. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote pt-4\">„Da fing ich an, bewusst Jude zu sein und auch selbstbewusst Jude zu sein.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 39:01</p>
                    <p>Gezeigter Ausschnitt: 04:49</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 13.12.21</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Jüdische Gemeinde Hamburg,
                        Kindertransport,
                        Antisemitismus,
                        Fremdheit,
                        Zweite Generation,
                        Migration,
                        Jüdische Identität,
                        Zweiter Weltkrieg,
                        Nationalsozialismus,
                        Holocaust,
                        Israel</p>
                    <p>Genannte Orte: Haifa,
                        Halstenbek,
                        Hamburg,
                        Israel
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-md-6 col-xl-6\">
                <h2 class=\"title-show\">Michael Heimann</h2>
                <p>
                    Michael Heimanns Mutter stammt aus Wien, sein Vater aus Breslau. Beide konnten während der Zeit des
                    Nationalsozialismus mit Kindertransporten nach Schweden gelangen, wo sie sich kennenlernten und
                    beschlossen, nach Palästina auszuwandern. Dort wurde Michael Heimann 1955 in Haifa geboren. Etwa
                    drei Jahre später zog die Familie nach Berlin, wo die Eltern studierten. Mit zwölf Jahren kam Michael
                    Heimann dann, gemeinsam mit seinen Eltern, zunächst nach Halstenbek, später nach Hamburg. Die
                    Gesprächsausschnitte geben unter anderem Einblicke in Heimanns Aushandlungsprozess mit seiner
                    eigenen jüdischen Identität in einer nichtjüdischen deutschen Mehrheitsgesellschaft.
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
        return "interviews/heimann.html.twig";
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

{% block title %} Heimann | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"   height=\"100%\" controls poster=\"{{ asset('images/poster/Heimann.jpg') }}\">
                    <source src=\"{{ asset('videos/Heimann.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Michael Heimann über seine (Familien-)Geschichte und sein Selbstverständnis als Jude in Deutschland. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote pt-4\">„Da fing ich an, bewusst Jude zu sein und auch selbstbewusst Jude zu sein.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 39:01</p>
                    <p>Gezeigter Ausschnitt: 04:49</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 13.12.21</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Jüdische Gemeinde Hamburg,
                        Kindertransport,
                        Antisemitismus,
                        Fremdheit,
                        Zweite Generation,
                        Migration,
                        Jüdische Identität,
                        Zweiter Weltkrieg,
                        Nationalsozialismus,
                        Holocaust,
                        Israel</p>
                    <p>Genannte Orte: Haifa,
                        Halstenbek,
                        Hamburg,
                        Israel
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-md-6 col-xl-6\">
                <h2 class=\"title-show\">Michael Heimann</h2>
                <p>
                    Michael Heimanns Mutter stammt aus Wien, sein Vater aus Breslau. Beide konnten während der Zeit des
                    Nationalsozialismus mit Kindertransporten nach Schweden gelangen, wo sie sich kennenlernten und
                    beschlossen, nach Palästina auszuwandern. Dort wurde Michael Heimann 1955 in Haifa geboren. Etwa
                    drei Jahre später zog die Familie nach Berlin, wo die Eltern studierten. Mit zwölf Jahren kam Michael
                    Heimann dann, gemeinsam mit seinen Eltern, zunächst nach Halstenbek, später nach Hamburg. Die
                    Gesprächsausschnitte geben unter anderem Einblicke in Heimanns Aushandlungsprozess mit seiner
                    eigenen jüdischen Identität in einer nichtjüdischen deutschen Mehrheitsgesellschaft.
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "interviews/heimann.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/heimann.html.twig");
    }
}
