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

/* interviews/pestov.html.twig */
class __TwigTemplate_b36ac7c292bb48c6bb0ead6dc29f8d83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/pestov.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/pestov.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/pestov.html.twig", 1);
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

        yield " Pestov | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Pestov.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Pestov.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Elias Pestov über die Geschichte seines Vaters und seine eigene Jugend in Hamburg. © IGdJ,
                        2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Ich feier keine Feiertage, ich fühle mich einfach jüdisch. Und damit verbinde ich diese Gemeinschaft, ich sehe mich als einen Teil davon.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 25:39</p>
                    <p>Gezeigter Ausschnitt: 05:14</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Online</p>
                    <p>Interview geführt am: 30.11.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Sowjetunion,
                        Kontingentflüchtlingsgesetz,
                        Migration,
                        jüdische Identität</p>
                    <p>Genannte Orte: Ladispoli,
                        Lübeck,
                        Hamburg,
                        Moskau,
                        Sowjetunion,
                        Schweden,
                        USA,
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
                <h2 class=\"title-show\">Elias Pestov</h2>
                <p>
                    Elias Pestov wurde in Hamburg geboren und besuchte das Joseph-Carlebach-Bildungshaus, das 2007 in
                    Hamburg als erste jüdische Schule nach dem Zweiten Weltkrieg eröffnet wurde. Pestovs Vater war 1980,
                    gemeinsam mit seinen Eltern und Großeltern aus der Sowjetunion über Italien nach Lübeck
                    ausgewandert. Für sein Studium zog er zunächst nach Hamburg, dann nach Moskau. An der Moskauer
                    Universität lernte er Pestovs Mutter kennen, mit der er gemeinsam nach Hamburg zurückkehrte. In den
                    präsentierten Interviewausschnitten gibt Elias Pestov Einblicke in seine Familiengeschichte und sein
                    jüdisches Selbstverständnis, das während seiner Schulzeit gefestigt wurde.
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
        return "interviews/pestov.html.twig";
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

{% block title %} Pestov | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Pestov.jpg') }}\">
                    <source src=\"{{ asset('videos/Pestov.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Elias Pestov über die Geschichte seines Vaters und seine eigene Jugend in Hamburg. © IGdJ,
                        2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Ich feier keine Feiertage, ich fühle mich einfach jüdisch. Und damit verbinde ich diese Gemeinschaft, ich sehe mich als einen Teil davon.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 25:39</p>
                    <p>Gezeigter Ausschnitt: 05:14</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Online</p>
                    <p>Interview geführt am: 30.11.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Sowjetunion,
                        Kontingentflüchtlingsgesetz,
                        Migration,
                        jüdische Identität</p>
                    <p>Genannte Orte: Ladispoli,
                        Lübeck,
                        Hamburg,
                        Moskau,
                        Sowjetunion,
                        Schweden,
                        USA,
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
                <h2 class=\"title-show\">Elias Pestov</h2>
                <p>
                    Elias Pestov wurde in Hamburg geboren und besuchte das Joseph-Carlebach-Bildungshaus, das 2007 in
                    Hamburg als erste jüdische Schule nach dem Zweiten Weltkrieg eröffnet wurde. Pestovs Vater war 1980,
                    gemeinsam mit seinen Eltern und Großeltern aus der Sowjetunion über Italien nach Lübeck
                    ausgewandert. Für sein Studium zog er zunächst nach Hamburg, dann nach Moskau. An der Moskauer
                    Universität lernte er Pestovs Mutter kennen, mit der er gemeinsam nach Hamburg zurückkehrte. In den
                    präsentierten Interviewausschnitten gibt Elias Pestov Einblicke in seine Familiengeschichte und sein
                    jüdisches Selbstverständnis, das während seiner Schulzeit gefestigt wurde.
                </p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/pestov.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/pestov.html.twig");
    }
}
