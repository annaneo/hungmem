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
use Twig\TemplateWrapper;

/* site/biographies.html.twig */
class __TwigTemplate_54ecca5c8a51fdee748352c0cd7ab085 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/biographies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/biographies.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Einzelbiografien Übersicht | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        yield from $this->load("elements/navigation-biographies.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"Biografische Studie Yehuda Blum\">
                        <img class=\"img-fluid\" src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Titelbild-Blum.jpg"), "html", null, true);
        yield "\"
                             alt=\"Fotografie der Geschwister Blum\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"Biografische Studie Yehuda Blum\">
                                Yehuda Blum – die Kasztner-Gruppe
                            </a>
                        </h2>
                        <p>Yehuda Blum wurde am 2. Oktober 1931 im damals tschechoslowakischen Bratislava geboren. Er war der
                            Älteste von insgesamt drei Kindern. Er hatte einen Bruder (Amram Blum) und eine Schwester (Leah
                            Blum). Yehuda Blums Vater ...
                            <a class=\"more\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\" title=\"Biografische Studie Gyula Fürst\">
                        <img class=\"img-fluid\" src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Titelbild-Geschwister_Fuerst.jpg"), "html", null, true);
        yield "\"
                             alt=\"Biografische Studie Gyula Fürst\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\" title=\"\">
                                Gyula Fürst – ein ungewöhnlicher Deportationsweg
                            </a>
                        </h2>
                        <p>Gyula Fürst wurde am 1. Juni 1923 als jüngstes von insgesamt vier Kindern in der ungarischen
                            Gemeinde Boba im Komitat Vas geboren. Als er vier Jahre alt war,
                            ...
                            <a class=\"more\" href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"Biografische Studie Katharina Hardy\">
                        <img class=\"img-fluid\" src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Titelbild-Katharina-Hardy.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"Biografische Studie Katharina Hardy\">
                                Katharina Hardy – Fokus „DP-Camp Bergen-Belsen“
                            </a>
                        </h2>
                        <p>Katharina Hardy, geborene Cohn (nach 1947 Kardos), wurde am 7. November 1928 in Budapest in Ungarn
                            geboren und wuchs in bescheidenen Verhältnissen auf. Ihr Vater ...
                            <a class=\"more\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\" title=\"Portraits von Lea und Zsuzsa Merényi\">
                        <img class=\"img-fluid\" src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Titelbild-Merenyi-Schwestern.jpg"), "html", null, true);
        yield "\"
                             alt=\"Portraits von Lea und Zsuzsa Merényi\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\" title=\"Biographische Studie der Schwestern Lea und Zsuzsa Merényi\">
                                Die Schwestern Lea und Zsuzsa Merényi – Fokus „Rückkehr“
                            </a>
                        </h2>
                        <p>Lea Merényi wurde am 3. Dezember 1914 im ungarischen Budapest geboren, wuchs jedoch in Deutschland
                            auf. Als sie ungefähr drei
                            ...
                            <a class=\"more\" href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "site/biographies.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  235 => 90,  225 => 83,  217 => 78,  213 => 77,  202 => 69,  193 => 63,  185 => 58,  181 => 57,  168 => 47,  158 => 40,  150 => 35,  146 => 34,  136 => 27,  126 => 20,  118 => 15,  114 => 14,  105 => 7,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Einzelbiografien Übersicht | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-biographies.html.twig' %}


    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_bio_blum') }}\" title=\"Biografische Studie Yehuda Blum\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Titelbild-Blum.jpg') }}\"
                             alt=\"Fotografie der Geschwister Blum\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_blum') }}\" title=\"Biografische Studie Yehuda Blum\">
                                Yehuda Blum – die Kasztner-Gruppe
                            </a>
                        </h2>
                        <p>Yehuda Blum wurde am 2. Oktober 1931 im damals tschechoslowakischen Bratislava geboren. Er war der
                            Älteste von insgesamt drei Kindern. Er hatte einen Bruder (Amram Blum) und eine Schwester (Leah
                            Blum). Yehuda Blums Vater ...
                            <a class=\"more\" href=\"{{ path('app_bio_blum') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_bio_fuerst') }}\" title=\"Biografische Studie Gyula Fürst\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Titelbild-Geschwister_Fuerst.jpg') }}\"
                             alt=\"Biografische Studie Gyula Fürst\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_fuerst') }}\" title=\"\">
                                Gyula Fürst – ein ungewöhnlicher Deportationsweg
                            </a>
                        </h2>
                        <p>Gyula Fürst wurde am 1. Juni 1923 als jüngstes von insgesamt vier Kindern in der ungarischen
                            Gemeinde Boba im Komitat Vas geboren. Als er vier Jahre alt war,
                            ...
                            <a class=\"more\" href=\"{{ path('app_bio_fuerst') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_bio_hardy') }}\" title=\"Biografische Studie Katharina Hardy\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Titelbild-Katharina-Hardy.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_hardy') }}\" title=\"Biografische Studie Katharina Hardy\">
                                Katharina Hardy – Fokus „DP-Camp Bergen-Belsen“
                            </a>
                        </h2>
                        <p>Katharina Hardy, geborene Cohn (nach 1947 Kardos), wurde am 7. November 1928 in Budapest in Ungarn
                            geboren und wuchs in bescheidenen Verhältnissen auf. Ihr Vater ...
                            <a class=\"more\" href=\"{{ path('app_bio_hardy') }}\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_bio_mereny') }}\" title=\"Portraits von Lea und Zsuzsa Merényi\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Titelbild-Merenyi-Schwestern.jpg') }}\"
                             alt=\"Portraits von Lea und Zsuzsa Merényi\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_mereny') }}\" title=\"Biographische Studie der Schwestern Lea und Zsuzsa Merényi\">
                                Die Schwestern Lea und Zsuzsa Merényi – Fokus „Rückkehr“
                            </a>
                        </h2>
                        <p>Lea Merényi wurde am 3. Dezember 1914 im ungarischen Budapest geboren, wuchs jedoch in Deutschland
                            auf. Als sie ungefähr drei
                            ...
                            <a class=\"more\" href=\"{{ path('app_bio_mereny') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

{% endblock %}", "site/biographies.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/site/biographies.html.twig");
    }
}
