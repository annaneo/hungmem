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

/* interviews/parnass.html.twig */
class __TwigTemplate_d1e772f769fb8c2cffa203f0354e0e91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/parnass.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/parnass.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/parnass.html.twig", 1);
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

        yield " Parnass | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Parnass.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Parnass.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Peggy Parnass über ihre Lebensgeschichte. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Wir waren im Aufbrauch begriffen. Das war eine so wichtige Zeit.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 20:51</p>
                    <p>Gezeigter Ausschnitt: 03:14</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 29.9.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Holocaust,
                        Kindertransport,
                        Nachkriegszeit,
                        Studentenbewegung</p>
                    <p>Genannte Orte: Hamburg-St. Pauli,
                        Hamburg-St. Georg,
                        Hamburg,
                        London,
                        Schweden
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Audio)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Peggy Parnass</h2>
                <p>
                    Peggy Parnass wurde 1927 in Hamburg geboren. Als Zwölfjährige konnten sie und ihr jüngerer Bruder
                    mit einem Kindertransport nach Stockholm gebracht werden, wohingegen ihre Eltern und der Großteil
                    ihrer Verwandschaft von den Nationalsozialisten deportiert und ermordet wurden. In den präsentierten
                    Gesprächsausschnitten berichtet Parnass von familiären und freundschaftlichen Beziehungen, von ihrem
                    gesellschaftlichen Engagement und ihrer ursprünglich als Durchreise geplanten Rückkehr nach Hamburg.
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
        return "interviews/parnass.html.twig";
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

{% block title %} Parnass | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Parnass.jpg') }}\">
                    <source src=\"{{ asset('videos/Parnass.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Peggy Parnass über ihre Lebensgeschichte. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Wir waren im Aufbrauch begriffen. Das war eine so wichtige Zeit.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 20:51</p>
                    <p>Gezeigter Ausschnitt: 03:14</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 29.9.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Holocaust,
                        Kindertransport,
                        Nachkriegszeit,
                        Studentenbewegung</p>
                    <p>Genannte Orte: Hamburg-St. Pauli,
                        Hamburg-St. Georg,
                        Hamburg,
                        London,
                        Schweden
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Audio)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Peggy Parnass</h2>
                <p>
                    Peggy Parnass wurde 1927 in Hamburg geboren. Als Zwölfjährige konnten sie und ihr jüngerer Bruder
                    mit einem Kindertransport nach Stockholm gebracht werden, wohingegen ihre Eltern und der Großteil
                    ihrer Verwandschaft von den Nationalsozialisten deportiert und ermordet wurden. In den präsentierten
                    Gesprächsausschnitten berichtet Parnass von familiären und freundschaftlichen Beziehungen, von ihrem
                    gesellschaftlichen Engagement und ihrer ursprünglich als Durchreise geplanten Rückkehr nach Hamburg.
                </p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/parnass.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/parnass.html.twig");
    }
}
