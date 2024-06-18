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

/* interviews/wallenstein.html.twig */
class __TwigTemplate_3b2e59072f70cf2c9d2037e280225bb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/wallenstein.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/wallenstein.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/wallenstein.html.twig", 1);
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

        yield " Wallenstein | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Wallenstein.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Wallenstein.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Abi Wallenstein über seine Familiengeschichte © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"pt-5 quote\">„Wenn man mich fragt, wo meine Heimat ist, dann sage ich immer, meine Heimat
                        ist die Musik.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 1:03:55</p>
                    <p>Gezeigter Ausschnitt: 06:59</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 30.5.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Buch <em>200 Worte Zeitungs Hebräisch</em>,
                        Fotografie von Großmutter
                    </p>
                    <p>Schlagwort(e):
                        Antisemitismus,
                        Philosemitismus,
                        Jüdische Gemeinde Düsseldorf,
                        Jüdische Gemeinde Hamburg,
                        Zionismus,
                        Nationalsozialismus,
                        Zweiter Weltkrieg,
                        Holocaust</p>
                    <p>Genannte Orte: Hamburg-Wandsbek,
                        Nidda,
                        Bad Kissingen,
                        Würzburg,
                        Gießen,
                        Neuss,
                        Oświęcim (Auschwitz),
                        Terezín (Theresienstadt),
                        Düsseldorf,
                        Hamburg,
                        Jerusalem,
                        Tel Aviv,
                        Haifa,
                        Prag,
                        Lübeck,
                        Elmshorn,
                        Heinrichstraße (Hamburg),
                        Hamburg,
                        Palästina / Israel
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Audio)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Abi Wallenstein</h2>
                <p>
                    Abi Wallenstein wurde 1945 in Jerusalem geboren. Mit 13 Jahren zogen seine Eltern und er nach Neuss,
                    wo der Vater vor dem Krieg eine Praxis besessen hatte und dessen Räumlichkeiten er wieder übernehmen
                    konnte. Zum Studieren ging Abi Wallenstein 1975 nach Hamburg und war dort
                    in der linken Bewegung sowie musikalischen Szene der Stadt aktiv.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Wallenstein_mit_Bild.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"wallenstein\"
                   data-title=\"Abi Wallenstein mit der Fotografie seiner Großmutter. Fotos: IGdJ.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Wallenstein_mit_Bild_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Abi Wallenstein mit der Fotografie seiner Großmutter. Fotos: IGdJ\"/>
                </a>
                <a href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Wallenstein-Bild.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"wallenstein\"
                   data-title=\"Fotografie der Großmutter Abi Wallensteins. Foto: IGdJ.\">
                </a>
                <a href=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Wallstenstein-Wörterbuch.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"wallenstein\"
                   data-title=\"Buch 200 Worte Zeitungs Hebräisch Foto: IGdJ.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Wallstenstein-Wörterbuch_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Buch 200 Worte Zeitungs Hebräisch Foto: IGdJ\"/>
                </a>
                <p class=\"caption img-fluid\" style=\"width:350px;\">Abi Wallenstein mit der Fotografie seiner Großmutter und dem Buch <em>200 Worte
                        Zeitungs Hebräisch</em>. Fotos: IGdJ</p>
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
        return "interviews/wallenstein.html.twig";
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
        return array (  198 => 92,  191 => 88,  184 => 84,  178 => 81,  171 => 77,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Wallenstein | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Wallenstein.jpg') }}\">
                    <source src=\"{{ asset('videos/Wallenstein.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Abi Wallenstein über seine Familiengeschichte © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"pt-5 quote\">„Wenn man mich fragt, wo meine Heimat ist, dann sage ich immer, meine Heimat
                        ist die Musik.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 1:03:55</p>
                    <p>Gezeigter Ausschnitt: 06:59</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 30.5.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Buch <em>200 Worte Zeitungs Hebräisch</em>,
                        Fotografie von Großmutter
                    </p>
                    <p>Schlagwort(e):
                        Antisemitismus,
                        Philosemitismus,
                        Jüdische Gemeinde Düsseldorf,
                        Jüdische Gemeinde Hamburg,
                        Zionismus,
                        Nationalsozialismus,
                        Zweiter Weltkrieg,
                        Holocaust</p>
                    <p>Genannte Orte: Hamburg-Wandsbek,
                        Nidda,
                        Bad Kissingen,
                        Würzburg,
                        Gießen,
                        Neuss,
                        Oświęcim (Auschwitz),
                        Terezín (Theresienstadt),
                        Düsseldorf,
                        Hamburg,
                        Jerusalem,
                        Tel Aviv,
                        Haifa,
                        Prag,
                        Lübeck,
                        Elmshorn,
                        Heinrichstraße (Hamburg),
                        Hamburg,
                        Palästina / Israel
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Audio)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <h2 class=\"title-show\">Abi Wallenstein</h2>
                <p>
                    Abi Wallenstein wurde 1945 in Jerusalem geboren. Mit 13 Jahren zogen seine Eltern und er nach Neuss,
                    wo der Vater vor dem Krieg eine Praxis besessen hatte und dessen Räumlichkeiten er wieder übernehmen
                    konnte. Zum Studieren ging Abi Wallenstein 1975 nach Hamburg und war dort
                    in der linken Bewegung sowie musikalischen Szene der Stadt aktiv.
                </p>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <a href=\"{{ asset('images/objekte/Wallenstein_mit_Bild.jpg') }}\"
                   data-lightbox=\"wallenstein\"
                   data-title=\"Abi Wallenstein mit der Fotografie seiner Großmutter. Fotos: IGdJ.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Wallenstein_mit_Bild_Voransicht.jpg') }}\"
                         alt=\"Abi Wallenstein mit der Fotografie seiner Großmutter. Fotos: IGdJ\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Wallenstein-Bild.jpg') }}\"
                   data-lightbox=\"wallenstein\"
                   data-title=\"Fotografie der Großmutter Abi Wallensteins. Foto: IGdJ.\">
                </a>
                <a href=\"{{ asset('images/objekte/Wallstenstein-Wörterbuch.jpg') }}\"
                   data-lightbox=\"wallenstein\"
                   data-title=\"Buch 200 Worte Zeitungs Hebräisch Foto: IGdJ.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Wallstenstein-Wörterbuch_Voransicht.jpg') }}\"
                         alt=\"Buch 200 Worte Zeitungs Hebräisch Foto: IGdJ\"/>
                </a>
                <p class=\"caption img-fluid\" style=\"width:350px;\">Abi Wallenstein mit der Fotografie seiner Großmutter und dem Buch <em>200 Worte
                        Zeitungs Hebräisch</em>. Fotos: IGdJ</p>
            </div>
        </div>
    </div>
{% endblock %}
", "interviews/wallenstein.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/wallenstein.html.twig");
    }
}
