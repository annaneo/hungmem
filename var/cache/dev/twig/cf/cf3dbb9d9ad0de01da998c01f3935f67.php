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

/* site/deportation.en.html.twig */
class __TwigTemplate_8495239c766a1885602a94d02b2e9cd6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/deportation.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/deportation.en.html.twig"));

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

        yield " Overview: Camps and forced labor | ";
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" 
                    title=\"View of a V1 production hall in the Mittelbau-Dora concentration camp, May 1945, photographer: unknown, D-Day Museum, Portsmouth, 089.006, online at: https://fotoarchiv.dora.de/detail/2595, public domain\">
                        <img class=\"img-fluid\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-300-V1-Produktion.png"), "html", null, true);
        yield "\"
                             alt=\"View of a V1 production hall in the Mittelbau-Dora concentration camp, May 1945\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2><!--case study on the group of the 300-->
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"To the group study of the group of the 300\">
                                The group of the 300. Forced laborers as skilled workers at VW
                            </a>
                        </h2>
                        <p> Some 13.5 million people were conscripted into forced labor in the German Reich during the Second World War. 
                            Maintaining the war economy was only possible with the help of the conscripted workers ...
                            <a class=\"more\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_dessauerUfer");
        yield "\" 
                    title=\"Lagerhaus G, a warehouse on Dessauer Ufer, served as a satellite camp from 1944 onward, view from the waterside. Photo: Stiftung Hamburger Gedenkstätten und Lernorte zur Erinnerung an die Opfer der NS-Verbrechen, Rainer Viertlböck, 2020, https://gedenkstaetten-in-hamburg.de/en/memorials/show/memorial-plaques-on-lagerhaus-g-dessauer-ufer-satellite-camp\">
                        <img class=\"img-fluid\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Dessauer-Ufer.png"), "html", null, true);
        yield "\"
                             alt=\"Lagerhaus G, a warehouse on Dessauer Ufer, served as a satellite camp from 1944 onward, view from the waterside\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_dessauerUfer");
        yield "\" title=\"To the group study Dessauer Ufer\">
                                The women from the Dessauer Ufer satellite camp. Forced labor in the urban area
                            </a>
                        </h2>
                        <p>Some 200,000 of the Jews deported from Hungary had to perform forced labor. Starting in mid-1944, they were 
                        distributed via Auschwitz and Austria to various satellite camps in the German Reich and in the occupied 
                        territories ...
                            <a class=\"more\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_dessauerUfer");
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
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield "\" 
                    title=\"Liberated male and female concentration camp prisoners in Gardelegen on June 5, 1945, private property, Johann-Friedrich-Danneil-Museum, Salzwedel\">
                        <img class=\"img-fluid\" src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Salzwedel.png"), "html", null, true);
        yield "\"
                             alt=\"A group of male and female concentration camp prisoners seen from behind\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield "\" title=\"To the group study Salzwedel\">
                                Forced labor in the armaments industry. The liberation of the Salzwedel satellite camp
                            </a>
                        </h2>
                        <p>Even before the start of the Second World War, the National Socialists had begun to accelerate the expansion 
                            of the German arms industry. From 1933 to 1938 alone, armaments spending ...
                            <a class=\"more\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_salzwedel");
        yield "\" title=\"Read on\">[more]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield "\" 
                    title=\"Auschwitz Album, Yad Vashem (https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp), Copyright &copy; 2024 Yad Vashem – The World Holocaust Remembrance Center, Use according to Fair Use (https://www.yadvashem.org/terms-and-conditions.html)\">
                        <img class=\"img-fluid\" src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild_Luebberstedt.jpg"), "html", null, true);
        yield "\"
                             alt=\"Jewish women from Transcarpathia in Auschwitz-Birkenau in May 1944, who had been selected for forced labor 
                            after their arrival\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield "\" title=\"To the group study Lübberstedt\">
                                The evacuation of the Lübberstedt satellite camp. In freight cars through northern Germany
                            </a>
                        </h2>
                        <p>With the advance of the Allies, the first concentration camps were liberated starting in mid-1944. 
                        However, before Allied troops could reach the camps, the SS tried to destroy traces of the camps and to deport 
                        the prisoners to ...
                            <a class=\"more\" href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield "\"
                               title=\"Read on\">[more]</a>
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
        return "site/deportation.en.html.twig";
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
        return array (  235 => 92,  225 => 85,  216 => 79,  211 => 77,  200 => 69,  191 => 63,  183 => 58,  178 => 56,  165 => 46,  155 => 39,  147 => 34,  142 => 32,  132 => 25,  123 => 19,  115 => 14,  110 => 12,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.en.html.twig' %}

{% block title %} Overview: Camps and forced labor | {{ parent() }} {% endblock %}

{% block body %}
    
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_deportation_vw') }}\" 
                    title=\"View of a V1 production hall in the Mittelbau-Dora concentration camp, May 1945, photographer: unknown, D-Day Museum, Portsmouth, 089.006, online at: https://fotoarchiv.dora.de/detail/2595, public domain\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-300-V1-Produktion.png') }}\"
                             alt=\"View of a V1 production hall in the Mittelbau-Dora concentration camp, May 1945\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2><!--case study on the group of the 300-->
                            <a href=\"{{ path('app_deportation_vw') }}\" title=\"To the group study of the group of the 300\">
                                The group of the 300. Forced laborers as skilled workers at VW
                            </a>
                        </h2>
                        <p> Some 13.5 million people were conscripted into forced labor in the German Reich during the Second World War. 
                            Maintaining the war economy was only possible with the help of the conscripted workers ...
                            <a class=\"more\" href=\"{{ path('app_deportation_vw') }}\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_deportation_dessauerUfer') }}\" 
                    title=\"Lagerhaus G, a warehouse on Dessauer Ufer, served as a satellite camp from 1944 onward, view from the waterside. Photo: Stiftung Hamburger Gedenkstätten und Lernorte zur Erinnerung an die Opfer der NS-Verbrechen, Rainer Viertlböck, 2020, https://gedenkstaetten-in-hamburg.de/en/memorials/show/memorial-plaques-on-lagerhaus-g-dessauer-ufer-satellite-camp\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Dessauer-Ufer.png') }}\"
                             alt=\"Lagerhaus G, a warehouse on Dessauer Ufer, served as a satellite camp from 1944 onward, view from the waterside\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation_dessauerUfer') }}\" title=\"To the group study Dessauer Ufer\">
                                The women from the Dessauer Ufer satellite camp. Forced labor in the urban area
                            </a>
                        </h2>
                        <p>Some 200,000 of the Jews deported from Hungary had to perform forced labor. Starting in mid-1944, they were 
                        distributed via Auschwitz and Austria to various satellite camps in the German Reich and in the occupied 
                        territories ...
                            <a class=\"more\" href=\"{{ path('app_deportation_dessauerUfer') }}\" title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_deportation_salzwedel') }}\" 
                    title=\"Liberated male and female concentration camp prisoners in Gardelegen on June 5, 1945, private property, Johann-Friedrich-Danneil-Museum, Salzwedel\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Salzwedel.png') }}\"
                             alt=\"A group of male and female concentration camp prisoners seen from behind\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation_salzwedel') }}\" title=\"To the group study Salzwedel\">
                                Forced labor in the armaments industry. The liberation of the Salzwedel satellite camp
                            </a>
                        </h2>
                        <p>Even before the start of the Second World War, the National Socialists had begun to accelerate the expansion 
                            of the German arms industry. From 1933 to 1938 alone, armaments spending ...
                            <a class=\"more\" href=\"{{ path('app_deportation_salzwedel') }}\" title=\"Read on\">[more]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_deportation_luebberstedt') }}\" 
                    title=\"Auschwitz Album, Yad Vashem (https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp), Copyright &copy; 2024 Yad Vashem – The World Holocaust Remembrance Center, Use according to Fair Use (https://www.yadvashem.org/terms-and-conditions.html)\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild_Luebberstedt.jpg') }}\"
                             alt=\"Jewish women from Transcarpathia in Auschwitz-Birkenau in May 1944, who had been selected for forced labor 
                            after their arrival\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation_luebberstedt') }}\" title=\"To the group study Lübberstedt\">
                                The evacuation of the Lübberstedt satellite camp. In freight cars through northern Germany
                            </a>
                        </h2>
                        <p>With the advance of the Allies, the first concentration camps were liberated starting in mid-1944. 
                        However, before Allied troops could reach the camps, the SS tried to destroy traces of the camps and to deport 
                        the prisoners to ...
                            <a class=\"more\" href=\"{{ path('app_deportation_luebberstedt') }}\"
                               title=\"Read on\">[more]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "site/deportation.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/site/deportation.en.html.twig");
    }
}
