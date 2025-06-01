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

/* site/home.en.html.twig */
class __TwigTemplate_9309683485fa1514f325a90c7f5fdb9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/home.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/home.en.html.twig"));

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

        yield " Home | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"To the map\">
                        <img class=\"img-fluid\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Kartenansicht-Norddeutschland.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"To the map\">
                                Places and geographical classification
                            </a>
                        </h2>
                        <p>One in ten Holocaust victims came from Hungary within its borders at the time. 
                        Thousands of them were deported to northern Germany for forced labor in armaments factories. 
                        The case studies presented here shed light on the connection between the Holocaust and the course 
                        of the war in a regional context.
                            <a class=\"more\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" title=\"Information on data and sources\">
                        <img class=\"img-fluid\" src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Collage-Quellen.jpg"), "html", null, true);
        yield "\"
                             alt=\"More on data and sources\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" title=\"Information on data and sources\">
                                (Un)known data and sources
                            </a>
                        </h2>
                        <p>Knowledge about deportees from Hungary in northwest German concentration camps is still very limited. 
                        Even a realistic estimate of the total number of people deported from Hungary to the Neuengamme and 
                        Bergen-Belsen concentration camps is not yet available. The names of most of the deportees are unknown.
                            ...
                            <a class=\"more\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
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
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"Overview of the case studies\">
                        <img class=\"img-fluid\" src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Dessauer-Ufer.png"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"Overview of the case studies\">
                                Forced laborers from Hungary. Group studies
                            </a>
                        </h2>
                        <p>In less than two months after the German occupation of Hungary in March 1944, the National Socialists
                         deported some 440,000 Jews to the Auschwitz concentration and extermination camp, where the majority
                          were murdered immediately upon arrival. Only about a third were picked out during the “selections” 
                          to perform forced labor for the German Reich. The case studies presented here use specific examples 
                          to provide insights into the system of Nazi forced labor by shedding light on deportation routes, 
                          groups of prisoners, and the conditions in the camps.
                            <a class=\"more\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation");
        yield "\" title=\"Read on\">[more]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" title=\"Overview of the biographies\">
                        <img class=\"img-fluid\" src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Collage-Biografien.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
        yield "\" title=\"Overview of the biographies\">
                                Deportation and experiences of imprisonment. Individual biographies
                            </a>
                        </h2>
                        <p>The names of most of the people deported from Hungary are still unknown. At the same time, 
                        the survivors’ interviews form an important basis for research and remembrance. Only with their help can 
                        deportation routes, conditions of detention, and individual (survival) paths through life be reconstructed. 
                        The case studies introduced here present selected lives whose fates are also representative of larger groups.
                            <a class=\"more\" href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographies");
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
        return "site/home.en.html.twig";
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
        return array (  238 => 96,  227 => 88,  219 => 83,  215 => 82,  204 => 74,  191 => 64,  183 => 59,  179 => 58,  166 => 48,  155 => 40,  147 => 35,  143 => 34,  133 => 27,  122 => 19,  114 => 14,  110 => 13,  102 => 7,  89 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.en.html.twig' %}

{% block title %} Home | {{ parent() }} {% endblock %}


{% block body %}
    
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_map') }}\" title=\"To the map\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/Kartenansicht-Norddeutschland.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_map') }}\" title=\"To the map\">
                                Places and geographical classification
                            </a>
                        </h2>
                        <p>One in ten Holocaust victims came from Hungary within its borders at the time. 
                        Thousands of them were deported to northern Germany for forced labor in armaments factories. 
                        The case studies presented here shed light on the connection between the Holocaust and the course 
                        of the war in a regional context.
                            <a class=\"more\" href=\"{{ path('app_map') }}\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_sources') }}\" title=\"Information on data and sources\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/Collage-Quellen.jpg') }}\"
                             alt=\"More on data and sources\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_sources') }}\" title=\"Information on data and sources\">
                                (Un)known data and sources
                            </a>
                        </h2>
                        <p>Knowledge about deportees from Hungary in northwest German concentration camps is still very limited. 
                        Even a realistic estimate of the total number of people deported from Hungary to the Neuengamme and 
                        Bergen-Belsen concentration camps is not yet available. The names of most of the deportees are unknown.
                            ...
                            <a class=\"more\" href=\"{{ path('app_sources') }}\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_deportation') }}\" title=\"Overview of the case studies\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Dessauer-Ufer.png') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation') }}\" title=\"Overview of the case studies\">
                                Forced laborers from Hungary. Group studies
                            </a>
                        </h2>
                        <p>In less than two months after the German occupation of Hungary in March 1944, the National Socialists
                         deported some 440,000 Jews to the Auschwitz concentration and extermination camp, where the majority
                          were murdered immediately upon arrival. Only about a third were picked out during the “selections” 
                          to perform forced labor for the German Reich. The case studies presented here use specific examples 
                          to provide insights into the system of Nazi forced labor by shedding light on deportation routes, 
                          groups of prisoners, and the conditions in the camps.
                            <a class=\"more\" href=\"{{ path('app_deportation') }}\" title=\"Read on\">[more]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_biographies') }}\" title=\"Overview of the biographies\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/biographies/Collage-Biografien.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_biographies') }}\" title=\"Overview of the biographies\">
                                Deportation and experiences of imprisonment. Individual biographies
                            </a>
                        </h2>
                        <p>The names of most of the people deported from Hungary are still unknown. At the same time, 
                        the survivors’ interviews form an important basis for research and remembrance. Only with their help can 
                        deportation routes, conditions of detention, and individual (survival) paths through life be reconstructed. 
                        The case studies introduced here present selected lives whose fates are also representative of larger groups.
                            <a class=\"more\" href=\"{{ path('app_biographies') }}\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

{% endblock %}", "site/home.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/site/home.en.html.twig");
    }
}
