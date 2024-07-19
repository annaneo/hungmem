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

/* site/deportation.html.twig */
class __TwigTemplate_abb0bdf762c23d508652ec97601ef4f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/deportation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/deportation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/deportation.html.twig", 1);
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

        yield " Deportationen | ";
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
        yield "    ";
        yield from         $this->loadTemplate("elements/navigation-deportationen.html.twig", "site/deportation.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"Zur Fallstudie der Gruppe der 300\">
                        <img class=\"img-fluid\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-300-V1-Produktion.png"), "html", null, true);
        yield "\"
                             alt=\"Produktion der V1-Rakete: Ansicht der unterirdischen Produktionsstätte\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"Zur Fallstudie der Gruppe der 300\">
                                „Gruppe der 300“ bei VW
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum ...
                            <a class=\"more\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_vw");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Dessauer-Ufer.png"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
        yield "\" title=\"\">
                                „Ungarische“ Frauen am Dessauer Ufer, Wedel und Eidelstedt
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            ...
                            <a class=\"more\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
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
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Salzwedel.png"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
        yield "\" title=\"\">
                                Überlebende Frauen im Außenlager Salzwedel
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum ...
                            <a class=\"more\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
        yield "\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
        yield "\" title=\"\">
                                Frauen im Außenlager Lübberstedt, Räumungstransport Eutin
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            ...
                            <a class=\"more\" href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_studytemplate");
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "site/deportation.html.twig";
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
        return array (  221 => 86,  212 => 80,  204 => 75,  200 => 74,  189 => 66,  180 => 60,  172 => 55,  168 => 54,  155 => 44,  146 => 38,  138 => 33,  134 => 32,  124 => 25,  115 => 19,  107 => 14,  103 => 13,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Deportationen | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-deportationen.html.twig' %}

    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_deportation_vw') }}\" title=\"Zur Fallstudie der Gruppe der 300\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-300-V1-Produktion.png') }}\"
                             alt=\"Produktion der V1-Rakete: Ansicht der unterirdischen Produktionsstätte\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_deportation_vw') }}\" title=\"Zur Fallstudie der Gruppe der 300\">
                                „Gruppe der 300“ bei VW
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum ...
                            <a class=\"more\" href=\"{{ path('app_deportation_vw') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_sources') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Dessauer-Ufer.png') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_studytemplate') }}\" title=\"\">
                                „Ungarische“ Frauen am Dessauer Ufer, Wedel und Eidelstedt
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            ...
                            <a class=\"more\" href=\"{{ path('app_studytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-2\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"{{ path('app_studytemplate') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Salzwedel.png') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_studytemplate') }}\" title=\"\">
                                Überlebende Frauen im Außenlager Salzwedel
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum ...
                            <a class=\"more\" href=\"{{ path('app_studytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_studytemplate') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_studytemplate') }}\" title=\"\">
                                Frauen im Außenlager Lübberstedt, Räumungstransport Eutin
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            ...
                            <a class=\"more\" href=\"{{ path('app_studytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

{% endblock %}", "site/deportation.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/deportation.html.twig");
    }
}
