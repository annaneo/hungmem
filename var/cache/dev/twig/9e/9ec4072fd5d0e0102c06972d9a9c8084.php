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

/* interviews/landshut.html.twig */
class __TwigTemplate_4b4ca67d45468ccf800ab2f1db69381b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/landshut.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/landshut.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/landshut.html.twig", 1);
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

        yield " Landshut | ";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Landshut.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Landshut.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Judith Landshut über eine Skijacke und ihre Migrationsgeschichte. © IGdJ,
                        2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Es ist eine wunderbare Erinnerung und ich bin mir selbst auch dankbar, dass ich es
                        aufbewahrt habe.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 35:37</p>
                    <p>Gezeigter Ausschnitt: 07:56</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Ski-Sonnenbrille, Skijacke, zwei Fotografien,
                        kleine Tasche der Großmutter</p>
                    <p>Schlagwort(e): Objekttag,
                        Migration,
                        Antisemitismus,
                        Israel</p>
                    <p>Genannte Orte: Haifa,
                        Jerusalem,
                        Tel Aviv,
                        Kirjat Schmona,
                        Hamburg,
                        London,
                        Budapest,
                        New York,
                        Australien,
                        Amerika,
                        Tschechoslowakei
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-md-6 col-xl-66\">
                <h2 class=\"title-show\">Judith Landshut</h2>
                <p>
                    Judith Landshut wurde 1950 in der Tschechoslowakei geboren. 1969 floh sie – gemeinsam mit ihrer
                    Schwester und ohne ihre Eltern – nach Israel, wo sie zunächst in einem Kibbuz und dann in Jerusalem
                    lebte. In Jerusalem lernte sie ihren Ehemann kennen. Wegen des bevorstehenden Wehrdienstes ihres
                    Mannes und seiner deutschen Staatsbürgerschaft emigrierte das Paar 1971 nach Hamburg. Dort bekam das
                    Paar drei Söhne. Obwohl Judith Landshut sich eine Zukunft in Deutschland zunächst nicht vorstellen
                    konnte, lebt sie bis heute in der Hansestadt.
                </p>
            </div>
            <div class=\"col-md-6 col-xl-6\">
                <a href=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Landshut_Objekt_Skijacke-und-brille.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"landshut\"
                   data-title=\"Jacke und Skibrille. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin-\">
                    <img class=\"gallery\"
                         src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Landshut_Objekt_Skijacke-und-brille_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Jacke und Skibrille. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin.\"/>
                </a>
                <a href=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Landshut_Objekt_Beutel.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"landshut\"
                   data-title=\"Tasche. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Landshut_Objekt_Beutel _Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Tasche. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\"/>
                </a>
                <a href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Landshut_Objekt_Fotos_Skijacken.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"landshut\"
                   data-title=\"Zwei gerahmte Fotografien. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin.\">
                    <img class=\"gallery\"
                         src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/objekte/Landshut_Objekt_Fotos_Skijacken_Voransicht.jpg"), "html", null, true);
        yield "\"
                         alt=\"Zwei gerahmte Fotografien. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\"/>
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Eine Tasche, zwei eingerahmte Fotografien, eine Jacke sowie eine Skibrille sind die fünf familiengeschichtlichen Objekte, die Judith Landshut anlässlich des mit dem Jüdischen Museum Berlin ausgerichteten Hamburger Objekttages für das Interview mitgebracht hat. Fotos: Stephan Pramme, Jüdisches Museum Berlin.</p>
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
        return "interviews/landshut.html.twig";
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
        return array (  198 => 89,  190 => 84,  183 => 80,  175 => 75,  168 => 71,  160 => 66,  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Landshut | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-lg-6 col-xl-6\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Landshut.jpg') }}\">
                    <source src=\"{{ asset('videos/Landshut.mp4') }}\" type=\"video/mp4\">
                </video>
                <div>
                    <p>Judith Landshut über eine Skijacke und ihre Migrationsgeschichte. © IGdJ,
                        2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Es ist eine wunderbare Erinnerung und ich bin mir selbst auch dankbar, dass ich es
                        aufbewahrt habe.“</p>
                </div>
            </div>
            <div class=\"col-lg-6 col-xl-6\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 35:37</p>
                    <p>Gezeigter Ausschnitt: 07:56</p>
                    <p>Interviewerin: Karen Körber</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 19.6.2022 (Objekttag in Kooperation mit dem Jüdischen Museum Berlin)</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): Ski-Sonnenbrille, Skijacke, zwei Fotografien,
                        kleine Tasche der Großmutter</p>
                    <p>Schlagwort(e): Objekttag,
                        Migration,
                        Antisemitismus,
                        Israel</p>
                    <p>Genannte Orte: Haifa,
                        Jerusalem,
                        Tel Aviv,
                        Kirjat Schmona,
                        Hamburg,
                        London,
                        Budapest,
                        New York,
                        Australien,
                        Amerika,
                        Tschechoslowakei
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-md-6 col-xl-66\">
                <h2 class=\"title-show\">Judith Landshut</h2>
                <p>
                    Judith Landshut wurde 1950 in der Tschechoslowakei geboren. 1969 floh sie – gemeinsam mit ihrer
                    Schwester und ohne ihre Eltern – nach Israel, wo sie zunächst in einem Kibbuz und dann in Jerusalem
                    lebte. In Jerusalem lernte sie ihren Ehemann kennen. Wegen des bevorstehenden Wehrdienstes ihres
                    Mannes und seiner deutschen Staatsbürgerschaft emigrierte das Paar 1971 nach Hamburg. Dort bekam das
                    Paar drei Söhne. Obwohl Judith Landshut sich eine Zukunft in Deutschland zunächst nicht vorstellen
                    konnte, lebt sie bis heute in der Hansestadt.
                </p>
            </div>
            <div class=\"col-md-6 col-xl-6\">
                <a href=\"{{ asset('images/objekte/Landshut_Objekt_Skijacke-und-brille.jpg') }}\"
                   data-lightbox=\"landshut\"
                   data-title=\"Jacke und Skibrille. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin-\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Landshut_Objekt_Skijacke-und-brille_Voransicht.jpg') }}\"
                         alt=\"Jacke und Skibrille. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin.\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Landshut_Objekt_Beutel.jpg') }}\"
                   data-lightbox=\"landshut\"
                   data-title=\"Tasche. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Landshut_Objekt_Beutel _Voransicht.jpg') }}\"
                         alt=\"Tasche. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\"/>
                </a>
                <a href=\"{{ asset('images/objekte/Landshut_Objekt_Fotos_Skijacken.jpg') }}\"
                   data-lightbox=\"landshut\"
                   data-title=\"Zwei gerahmte Fotografien. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin.\">
                    <img class=\"gallery\"
                         src=\"{{ asset('images/objekte/Landshut_Objekt_Fotos_Skijacken_Voransicht.jpg') }}\"
                         alt=\"Zwei gerahmte Fotografien. Foto: Stephan Pramme,
                    Jüdisches Museum Berlin\"/>
                </a>
                <p class=\"caption img-fluid\" style=\"width:450px;\">Eine Tasche, zwei eingerahmte Fotografien, eine Jacke sowie eine Skibrille sind die fünf familiengeschichtlichen Objekte, die Judith Landshut anlässlich des mit dem Jüdischen Museum Berlin ausgerichteten Hamburger Objekttages für das Interview mitgebracht hat. Fotos: Stephan Pramme, Jüdisches Museum Berlin.</p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/landshut.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/landshut.html.twig");
    }
}
