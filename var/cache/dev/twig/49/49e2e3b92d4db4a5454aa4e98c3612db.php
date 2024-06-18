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

/* interviews/nasirzadeh.html.twig */
class __TwigTemplate_4d4faa810fc13546b88841fc26cf0494 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/nasirzadeh.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/nasirzadeh.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/nasirzadeh.html.twig", 1);
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

        yield " Nasirzadeh | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Nasirzadeh.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Nasirzadeh.mov"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Mona Nasirzadeh über die Hochzeitsfotografie ihrer Eltern und die familiäre (Migrations-)Geschichte. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Es gehört zu mir, wie mein Leben. Es hat die ganze Geschichte mitgemacht.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 13:59</p>
                    <p>Gezeigter Ausschnitt: 06:49</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Hochzeitsfotografie der Eltern</p>
                    <p>Schlagwort(e): Objekttag,
                        persische Jüdinnen und Juden in Hamburg,
                        Migration,
                        jüdische Identität
                    </p>
                    <p>Genannte Orte: Hamburg-Poppenbüttel,
                        Teheran,
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
                <h2 class=\"title-show\">Mona Nasirzadeh</h2>
                <p>
                    Anhand einer Fotografie ihrer Eltern, aufgenommen am Hochzeitstag, gibt Mona Nasirzadeh, 1975 in
                    Teheran geboren, Einblicke in die Geschichte ihrer Familie, die 1979 aus dem Iran und über Israel
                    nach Hamburg kam.
                </p>
            </div>
            <div class=\"col-md-6 col-xl-6\">
                    <img class=\"gallery img-fluid\"
                         src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Nasirzadeh_Hochzeit_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Eingerahmte Hochzeitsfotografie der Eltern von Mona Nasirzadeh\"/>
                <p class=\"caption img-fluid\" style=\"width:420px;\">Eingerahmte Hochzeitsfotografie der Eltern von Mona Nasirzadeh. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin.</p>
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
        return "interviews/nasirzadeh.html.twig";
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
        return array (  149 => 55,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Nasirzadeh | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Nasirzadeh.jpg') }}\">
                    <source src=\"{{ asset('videos/Nasirzadeh.mov') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Mona Nasirzadeh über die Hochzeitsfotografie ihrer Eltern und die familiäre (Migrations-)Geschichte. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Es gehört zu mir, wie mein Leben. Es hat die ganze Geschichte mitgemacht.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 13:59</p>
                    <p>Gezeigter Ausschnitt: 06:49</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Hochzeitsfotografie der Eltern</p>
                    <p>Schlagwort(e): Objekttag,
                        persische Jüdinnen und Juden in Hamburg,
                        Migration,
                        jüdische Identität
                    </p>
                    <p>Genannte Orte: Hamburg-Poppenbüttel,
                        Teheran,
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
                <h2 class=\"title-show\">Mona Nasirzadeh</h2>
                <p>
                    Anhand einer Fotografie ihrer Eltern, aufgenommen am Hochzeitstag, gibt Mona Nasirzadeh, 1975 in
                    Teheran geboren, Einblicke in die Geschichte ihrer Familie, die 1979 aus dem Iran und über Israel
                    nach Hamburg kam.
                </p>
            </div>
            <div class=\"col-md-6 col-xl-6\">
                    <img class=\"gallery img-fluid\"
                         src=\"{{ asset('images/objekte/Nasirzadeh_Hochzeit_Voransicht.jpg') }}\"
                         alt=\"Eingerahmte Hochzeitsfotografie der Eltern von Mona Nasirzadeh\"/>
                <p class=\"caption img-fluid\" style=\"width:420px;\">Eingerahmte Hochzeitsfotografie der Eltern von Mona Nasirzadeh. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin.</p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/nasirzadeh.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/nasirzadeh.html.twig");
    }
}
