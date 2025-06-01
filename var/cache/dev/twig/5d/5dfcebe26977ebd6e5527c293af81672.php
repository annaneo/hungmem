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

/* site/biographies.en.html.twig */
class __TwigTemplate_5198cd05739e2f8bd8da1155b94f6ee4 extends Template
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
        return "base.en.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/biographies.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/biographies.en.html.twig"));

        $this->parent = $this->load("base.en.html.twig", 1);
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

        yield " Overview of biographies | ";
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
        yield "    
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"Individual biography Yehuda Blum\">
                        <img class=\"img-fluid\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Titelbild-Blum.jpg"), "html", null, true);
        yield "\" 
                            alt=\"Yehuda Blum (right) with his siblings Amram and Leah, spring 1941. Bergen-Belsen Memorial Archive, 
                            privately owned by Yehuda Blum\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"Individual biography Yehuda Blum\">
                                Yehuda Blum - the Kasztner Group
                            </a>
                        </h2>
                        <p>Yehuda Blum was born on October 2, 1931 in Bratislava, then part of Czechoslovakia. He was the eldest of 
                        three children. He had a brother (Amram Blum) and a sister (Leah Blum). Yehuda Blum’s father ...
                            <a class=\"more\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\" title=\"Individual biography Gyula Fürst\">
                        <img class=\"img-fluid\" src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Titelbild-Geschwister_Fuerst.jpg"), "html", null, true);
        yield "\"
                             alt=\"Photograph of the Fürst siblings\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\" title=\"Individual biography Gyula Fürst\">
                                Gyula Fürst – an unusual deportation route
                            </a>
                        </h2>
                        <p>Gyula Fürst was born on June 1, 1923 as the youngest of four children in the Hungarian municipality of Boba 
                            in Vas County. When he was four years old, ...
                            <a class=\"more\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"Individual biography Katharina Hardy\">
                        <img class=\"img-fluid\" src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Titelbild-Katharina-Hardy.jpg"), "html", null, true);
        yield "\" 
                            alt=\"Katharina Hardy as a guest attending a memorial service in Bergen-Belsen, 2015 (detail). 
                            Bergen-Belsen Memorial Archive, inventory number 1600–4229, photo: Julia Lormis, 2015\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"Individual biography Katharina Hardy\">
                               Katharina Hardy – Focus “DP-Camp Bergen-Belsen”
                            </a>
                        </h2>
                        <p>Katharina Hardy, née Cohn (Kardos after 1947), was born on November 7, 1928 in Budapest, Hungary, and 
                            grew up in modest circumstances. Her father ...
                            <a class=\"more\" href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"Read on\">[more]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\" title=\"Individual biography Merényi sisters\">
                        <img class=\"img-fluid\" src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Titelbild-Merenyi-Schwestern.jpg"), "html", null, true);
        yield "\"
                             alt=\"Portraits of Lea and Zsuzsa Merényi, Bergen-Belsen Memorial Archive, inventory number 1600-0226 
                             and 1600-0225, rights: Katalin Lörinc-Walters\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\" title=\"Biographical study of the sisters Lea and Zsuzsa Merényi\">
                                The sisters Lea and Zsuzsa Merényi – Focus “Return”
                            </a>
                        </h2>
                        <p>Lea Merényi was born on December 3, 1914 in Budapest, Hungary, but grew up in Germany. 
                        When she was about three ...
                            <a class=\"more\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\" title=\"Read on\">[more]</a>
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
        return "site/biographies.en.html.twig";
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
        return array (  231 => 88,  222 => 82,  213 => 76,  209 => 75,  198 => 67,  189 => 61,  180 => 55,  176 => 54,  163 => 44,  154 => 38,  146 => 33,  142 => 32,  132 => 25,  123 => 19,  114 => 13,  110 => 12,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.en.html.twig' %}

{% block title %} Overview of biographies | {{ parent() }} {% endblock %}

{% block body %}
    
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_bio_blum') }}\" title=\"Individual biography Yehuda Blum\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Titelbild-Blum.jpg') }}\" 
                            alt=\"Yehuda Blum (right) with his siblings Amram and Leah, spring 1941. Bergen-Belsen Memorial Archive, 
                            privately owned by Yehuda Blum\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_blum') }}\" title=\"Individual biography Yehuda Blum\">
                                Yehuda Blum - the Kasztner Group
                            </a>
                        </h2>
                        <p>Yehuda Blum was born on October 2, 1931 in Bratislava, then part of Czechoslovakia. He was the eldest of 
                        three children. He had a brother (Amram Blum) and a sister (Leah Blum). Yehuda Blum’s father ...
                            <a class=\"more\" href=\"{{ path('app_bio_blum') }}\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_bio_fuerst') }}\" title=\"Individual biography Gyula Fürst\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Titelbild-Geschwister_Fuerst.jpg') }}\"
                             alt=\"Photograph of the Fürst siblings\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_fuerst') }}\" title=\"Individual biography Gyula Fürst\">
                                Gyula Fürst – an unusual deportation route
                            </a>
                        </h2>
                        <p>Gyula Fürst was born on June 1, 1923 as the youngest of four children in the Hungarian municipality of Boba 
                            in Vas County. When he was four years old, ...
                            <a class=\"more\" href=\"{{ path('app_bio_fuerst') }}\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_bio_hardy') }}\" title=\"Individual biography Katharina Hardy\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Titelbild-Katharina-Hardy.jpg') }}\" 
                            alt=\"Katharina Hardy as a guest attending a memorial service in Bergen-Belsen, 2015 (detail). 
                            Bergen-Belsen Memorial Archive, inventory number 1600–4229, photo: Julia Lormis, 2015\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_hardy') }}\" title=\"Individual biography Katharina Hardy\">
                               Katharina Hardy – Focus “DP-Camp Bergen-Belsen”
                            </a>
                        </h2>
                        <p>Katharina Hardy, née Cohn (Kardos after 1947), was born on November 7, 1928 in Budapest, Hungary, and 
                            grew up in modest circumstances. Her father ...
                            <a class=\"more\" href=\"{{ path('app_bio_hardy') }}\" title=\"Read on\">[more]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_bio_mereny') }}\" title=\"Individual biography Merényi sisters\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Titelbild-Merenyi-Schwestern.jpg') }}\"
                             alt=\"Portraits of Lea and Zsuzsa Merényi, Bergen-Belsen Memorial Archive, inventory number 1600-0226 
                             and 1600-0225, rights: Katalin Lörinc-Walters\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_mereny') }}\" title=\"Biographical study of the sisters Lea and Zsuzsa Merényi\">
                                The sisters Lea and Zsuzsa Merényi – Focus “Return”
                            </a>
                        </h2>
                        <p>Lea Merényi was born on December 3, 1914 in Budapest, Hungary, but grew up in Germany. 
                        When she was about three ...
                            <a class=\"more\" href=\"{{ path('app_bio_mereny') }}\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

{% endblock %}", "site/biographies.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/site/biographies.en.html.twig");
    }
}
