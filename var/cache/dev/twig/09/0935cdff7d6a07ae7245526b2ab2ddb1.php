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

/* interviews/melamed.html.twig */
class __TwigTemplate_1f98b6b439f1efce1e5be581b8600311 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/melamed.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/melamed.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/melamed.html.twig", 1);
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

        yield " Melamed | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Melamed.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Melamed.mov"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Carmen Melamed über den Wiederaufbau der Jüdischen Gemeinde nach 1945. © IGdJ,
                        2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Für uns war es die Befreiung. Für die Anderen natürlich nicht, da war es die
                        Kapitulation...“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 1:21:48</p>
                    <p>Gezeigter Ausschnitt: 03:50</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Online</p>
                    <p>Interview geführt im: 27.1.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Jüdische Gemeinde Hamburg,
                        jüdische Speisegesetze,
                        Synagoge Hohe Weide,
                        Synagoge Kielortallee,
                        Nationalsozialismus,
                        Zweiter Weltkrieg,
                        Holocaust,
                        Kontingentflüchtlingsgesetz
                    </p>
                    <p>Genannte Orte: Denver,
                        Hohe Weide Hamburg,
                        Kielortallee Hamburg,
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
                <h2 class=\"title-show\">Carmen Melamed</h2>
                <p>
                    Carmen Melamed wurde 1937 als Tochter einer jüdischen Mutter und eines nichtjüdischen Vaters in
                    Hamburg geboren. Nach Abschluss der Schule begann ihre langjährige Mitarbeit in der Verwaltung der
                    Jüdischen Gemeinde, die sie erst Ende der 1990er-Jahre endgültig beendete. Anfang der 2000er-Jahre
                    zog sie nach Denver in die USA. Melamed trat bereits 1946 in die Jüdische Gemeinde Hamburgs ein und
                    ist bis heute Mitglied.
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
        return "interviews/melamed.html.twig";
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

{% block title %} Melamed | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Melamed.jpg') }}\">
                    <source src=\"{{ asset('videos/Melamed.mov') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Carmen Melamed über den Wiederaufbau der Jüdischen Gemeinde nach 1945. © IGdJ,
                        2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Für uns war es die Befreiung. Für die Anderen natürlich nicht, da war es die
                        Kapitulation...“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 1:21:48</p>
                    <p>Gezeigter Ausschnitt: 03:50</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Online</p>
                    <p>Interview geführt im: 27.1.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Jüdische Gemeinde Hamburg,
                        jüdische Speisegesetze,
                        Synagoge Hohe Weide,
                        Synagoge Kielortallee,
                        Nationalsozialismus,
                        Zweiter Weltkrieg,
                        Holocaust,
                        Kontingentflüchtlingsgesetz
                    </p>
                    <p>Genannte Orte: Denver,
                        Hohe Weide Hamburg,
                        Kielortallee Hamburg,
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
                <h2 class=\"title-show\">Carmen Melamed</h2>
                <p>
                    Carmen Melamed wurde 1937 als Tochter einer jüdischen Mutter und eines nichtjüdischen Vaters in
                    Hamburg geboren. Nach Abschluss der Schule begann ihre langjährige Mitarbeit in der Verwaltung der
                    Jüdischen Gemeinde, die sie erst Ende der 1990er-Jahre endgültig beendete. Anfang der 2000er-Jahre
                    zog sie nach Denver in die USA. Melamed trat bereits 1946 in die Jüdische Gemeinde Hamburgs ein und
                    ist bis heute Mitglied.
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "interviews/melamed.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/melamed.html.twig");
    }
}
