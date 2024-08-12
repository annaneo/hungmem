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
        yield "    ";
        yield from         $this->loadTemplate("elements/navigation-biographies.html.twig", "site/biographies.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "

    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"\">
                                Yehuda Blum – die Kasztner-Gruppe
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum ...
                            <a class=\"more\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield "\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sources");
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\" title=\"\">
                                Biografie von Gyula Fürst – ein ungewöhnlicher Deportationsweg
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            ...
                            <a class=\"more\" href=\"";
        // line 45
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
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"\">
                                Katharina Hardy – Fokus „DP-Camp Bergen-Belsen“
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum ...
                            <a class=\"more\" href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_biographytemplate");
        yield "\" title=\"\">
                        <img class=\"img-fluid\" src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_mereny");
        yield "\" title=\"\">
                                Die Schwestern Lea und Zsuzsa Merényi – Fokus „Rückkehr
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            ...
                            <a class=\"more\" href=\"";
        // line 87
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
        return array (  219 => 87,  210 => 81,  202 => 76,  198 => 75,  187 => 67,  178 => 61,  170 => 56,  166 => 55,  153 => 45,  144 => 39,  136 => 34,  132 => 33,  122 => 26,  113 => 20,  105 => 15,  95 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Biografien | {{ parent() }} {% endblock %}

{% block body %}
    {% include 'elements/navigation-biographies.html.twig' %}


    <div class=\"container g-4 py-5\">

        <div class=\"row justify-content-end\">
            <div class=\"col-sm\">
                <div>
                    <a href=\"\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_blum') }}\" title=\"\">
                                Yehuda Blum – die Kasztner-Gruppe
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum ...
                            <a class=\"more\" href=\"{{ path('app_bio_blum') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_sources') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_fuerst') }}\" title=\"\">
                                Biografie von Gyula Fürst – ein ungewöhnlicher Deportationsweg
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
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
                    <a href=\"{{ path('app_biographytemplate') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_hardy') }}\" title=\"\">
                                Katharina Hardy – Fokus „DP-Camp Bergen-Belsen“
                            </a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum ...
                            <a class=\"more\" href=\"{{ path('app_bio_hardy') }}\" title=\"Weiterlesen\">[mehr]</a>

                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm offset-lg-1\">
                <div>
                    <a href=\"{{ path('app_biographytemplate') }}\" title=\"\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                             alt=\"\">
                    </a>
                    <div class=\"studiesoverview\">
                        <h2>
                            <a href=\"{{ path('app_bio_mereny') }}\" title=\"\">
                                Die Schwestern Lea und Zsuzsa Merényi – Fokus „Rückkehr
                            </a>
                        </h2>
                        <p>Dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            ...
                            <a class=\"more\" href=\"{{ path('app_bio_mereny') }}\" title=\"Weiterlesen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

{% endblock %}", "site/biographies.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/biographies.html.twig");
    }
}
