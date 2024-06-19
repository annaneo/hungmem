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

/* site/biographies.html.twig */
class __TwigTemplate_4bf3c07e898c90defc8949409c392250 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/biographies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/biographies.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/biographies.html.twig", 1);
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

        yield " Biografien | ";
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
        yield "
    <div class=\"container g-4 py-5\">

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-person_698x440.png"), "html", null, true);
        yield "\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Interview mit Julia Camargo ansehen\">
                                Biografie
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                        </p>
                        <p>
                            <a class=\"more\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-person_698x440.png"), "html", null, true);
        yield "\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biographie lesen\">
                                Biografie
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                            ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-person_698x440.png"), "html", null, true);
        yield "\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\">
                                Biografie
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-person_698x440.png"), "html", null, true);
        yield "\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\"
                               title=\"Interview mit Barbara Guggenheim ansehen\">
                                Biografie
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-person_698x440.png"), "html", null, true);
        yield "\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\">
                                Biografie</a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder-person_698x440.png"), "html", null, true);
        yield "\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"Biografie lesen\"\">
                                Biografie</a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
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
        return "site/biographies.html.twig";
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
        return array (  291 => 134,  281 => 127,  273 => 122,  269 => 121,  259 => 114,  249 => 107,  241 => 102,  237 => 101,  227 => 94,  215 => 85,  207 => 80,  203 => 79,  190 => 69,  179 => 61,  171 => 56,  167 => 55,  157 => 48,  145 => 39,  137 => 34,  133 => 33,  123 => 26,  112 => 18,  104 => 13,  100 => 12,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Biografien | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container g-4 py-5\">

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder-person_698x440.png') }}\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"{{ path('app_biographytemplate') }}\" title=\"Interview mit Julia Camargo ansehen\">
                                Biografie
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                        </p>
                        <p>
                            <a class=\"more\" href=\"{{ path('app_biographytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder-person_698x440.png') }}\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biographie lesen\">
                                Biografie
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua
                            ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"{{ path('app_biographytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder-person_698x440.png') }}\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\">
                                Biografie
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"{{ path('app_biographytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder-person_698x440.png') }}\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"{{ path('app_biographytemplate') }}\"
                               title=\"Interview mit Barbara Guggenheim ansehen\">
                                Biografie
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"{{ path('app_biographytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder-person_698x440.png') }}\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\">
                                Biografie</a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"{{ path('app_biographytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"biographies\">
                    <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder-person_698x440.png') }}\"
                             alt=\"Foto\">
                    </a>
                    <div class=\"studiesoveriew\">
                        <h2>
                            <a href=\"{{ path('app_biographytemplate') }}\" title=\"Biografie lesen\"\">
                                Biografie</a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua ...
                        </p>
                        <p>
                            <a class=\"more\" href=\"{{ path('app_biographytemplate') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

{% endblock %}", "site/biographies.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/biographies.html.twig");
    }
}
