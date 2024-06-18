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

/* collection/interview.html.twig */
class __TwigTemplate_87df1fe5dd24f871caf5ea9519564342 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "collection/interview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "collection/interview.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "collection/interview.html.twig", 1);
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

        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["person"]) || array_key_exists("person", $context) ? $context["person"] : (function () { throw new RuntimeError('Variable "person" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
        yield "    <div class=\"container\">
        <div class=\"row align-items-center pt-4\">
            <div class=\"col\">
                ";
        // line 10
        yield "                <video width=\"500\" height=\"100%\" controls>
                    <source src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Guggenheim.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Ausschnitt aus einem Gespräch mit Barbara Guggenheim.</p>
                    <p class=\"quote\">„Umso schöner, dass es mit meiner Familie etwas zu tun hat.“</p>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 04:59</p>
                    <p>Gezeigter Ausschnitt: 04:59</p>
                    <p>Interviewerin: Dr. Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: Keine Angabe</p>
                    <p>Genannte Orte: Gailingen,
                        Stuttgart,
                        Schweiz
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Texte), <a href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a> (Videos)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-center pt-4\">
            <div class=\"col-md-6\">
                <h2 class=\"title-show\">Barbara Guggenheim</h2>
                <p>
                    Barbara Guggenheim wurde 1957 in Zürich geboren, sie hemalige Literaturagentin und ist
                    Gründungsmitglied des Jüdischen Salons am Grindel in Hamburg. In diesem Interview, das im
                    Rahmen des gemeinsam mit dem Jüdischen Museum Berlin durchgeführten Hamburger Objekttages
                    geführt wurde, erläutert Barbara Guggenheim die Hintergründe einer Wandstickerei ihrer
                    Ururgroßmutter Florina Guggenheim. Diese soll sie laut Jahresangabe auf dem Objekt (1868)
                    mit 13 Jahren in Gailingen angefertigt haben. Florina Guggenheim zog später, gemeinsam mit
                    ihrem Ehemann, nach Stuttgart, wo die Großmutter Barbara Guggenheims geboren wurde. Letztere
                    heiratete in den 1920er-Jahren in die Schweiz. Nach dem Tod der Großmutter übernahmen
                    zunächst die Eltern Guggenheims das Objekt. Inzwischen befindet sich die Wandstickerei in
                    Hamburg im Besitz von Barbara Guggenheims. Das Objekt steht für die (Migrations-)Geschichte
                    der Familie und ist ein wichtiges Erinnerungsstück, wie Barabra Guggenheim berichtet.
                </p>
            </div>
            <div class=\"col\">
                <img src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Guggenheim_mit_Wandteppich.jpg"), "html", null, true);
        yield "\" width=\"280\" height=\"100%\">
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
        return "collection/interview.html.twig";
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
        return array (  142 => 51,  99 => 11,  96 => 10,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ person }}{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row align-items-center pt-4\">
            <div class=\"col\">
                {# TODO: make video responsive #}
                <video width=\"500\" height=\"100%\" controls>
                    <source src=\"{{ asset('videos/Guggenheim.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Ausschnitt aus einem Gespräch mit Barbara Guggenheim.</p>
                    <p class=\"quote\">„Umso schöner, dass es mit meiner Familie etwas zu tun hat.“</p>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 04:59</p>
                    <p>Gezeigter Ausschnitt: 04:59</p>
                    <p>Interviewerin: Dr. Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: Keine Angabe</p>
                    <p>Genannte Orte: Gailingen,
                        Stuttgart,
                        Schweiz
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Texte), <a href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a> (Videos)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-center pt-4\">
            <div class=\"col-md-6\">
                <h2 class=\"title-show\">Barbara Guggenheim</h2>
                <p>
                    Barbara Guggenheim wurde 1957 in Zürich geboren, sie hemalige Literaturagentin und ist
                    Gründungsmitglied des Jüdischen Salons am Grindel in Hamburg. In diesem Interview, das im
                    Rahmen des gemeinsam mit dem Jüdischen Museum Berlin durchgeführten Hamburger Objekttages
                    geführt wurde, erläutert Barbara Guggenheim die Hintergründe einer Wandstickerei ihrer
                    Ururgroßmutter Florina Guggenheim. Diese soll sie laut Jahresangabe auf dem Objekt (1868)
                    mit 13 Jahren in Gailingen angefertigt haben. Florina Guggenheim zog später, gemeinsam mit
                    ihrem Ehemann, nach Stuttgart, wo die Großmutter Barbara Guggenheims geboren wurde. Letztere
                    heiratete in den 1920er-Jahren in die Schweiz. Nach dem Tod der Großmutter übernahmen
                    zunächst die Eltern Guggenheims das Objekt. Inzwischen befindet sich die Wandstickerei in
                    Hamburg im Besitz von Barbara Guggenheims. Das Objekt steht für die (Migrations-)Geschichte
                    der Familie und ist ein wichtiges Erinnerungsstück, wie Barabra Guggenheim berichtet.
                </p>
            </div>
            <div class=\"col\">
                <img src=\"{{ asset('images/Guggenheim_mit_Wandteppich.jpg') }}\" width=\"280\" height=\"100%\">
            </div>
        </div>
    </div>
{% endblock %}
", "collection/interview.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/collection/interview.html.twig");
    }
}
