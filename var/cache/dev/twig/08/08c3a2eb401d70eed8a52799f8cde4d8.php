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

/* site/about.html.twig */
class __TwigTemplate_1df0856fcf984f666fb35853e1a67e8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/about.html.twig", 1);
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

        yield " Projekt HUNGMEM | ";
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
        <h2>„Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM) </h2>
        <h3 class=\"mt-4\">Hintergrund und Ziele des Projektes</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    One in ten Holocaust victims came from Hungary within its borders at the time. 500,000-600,000 Jews and Roma*nja were murdered by the National Socialists and their Hungarian allies. The names of most of these persecuted people are still unknown today. 80 years after the Holocaust in Hungary, a transnational research and remembrance project has set itself the goal of researching the fate of the deported women, men and children, coming to terms with it and preventing it from being forgotten. Together with partner institutions in Hungary, Romania and Slovakia, the Institute for the History of German Jews (IGdJ) will establish a digital commemoration and research infrastructure.</p>
            </div>
            <div class=\"col-lg\">
                <p>
                    The IGdJ is coordinating the archive research to collect as many names and stories as possible of those who were deported to the concentration camps in northern Germany. Thanks to the good cooperation with the Neuengamme and Bergen-Belsen concentration camp memorials and the intensive research of the two project team members, comprehensive data has already been collected in recent months and new information could be added in some cases.
                </p>
                <p>
                    The aim now is to bring together the findings and make them accessible in a public presentation.
                </p>
            </div>
        </div>
    </div>


    <div class=\"container mt-2\">
        <h3>Kooperationspartner</h3>
        <div class=\"row\">
            <div class=\"col-md\">
                <p>
                    The project \"Digital Commemoration and Research Infrastructure - The Holocaust in Hungary 80 Years Later\" (HUNGMEM) is being carried out in cooperation with the Hungarian Jewish Museum and Archive in Budapest, the Romanian Institute for Research on National Minorities and the Jewish Community in Komárno. The project is supported by the EU Commission as part of the CERV - Citizens, Equality, Rights and Values funding program. The international cooperation offers the unique opportunity to provide new impulses for research on the Holocaust by evaluating scattered sources in various archives in order to reconstruct transportation routes and individual biographies.
                </p>
            </div>
            <div class=\"col-md\">
                <div class=\"container\">
                    <div class=\"row partner\">
                        <a href=\"https://www.milev.hu\" tilte=\"Website des Museums\">
                        <img class=\"img-fluid\" src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/hjma-logo.png"), "html", null, true);
        yield "\"
                             alt=\"Logo des Hungarian Jewish Museum and Archive in Budapest\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://ispmn.gov.ro/\" tilte=\"Website des Instituts\">
                        <img class=\"img-fluid\" src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/ispmn.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo des Romanian Institute for Research on National Minorities\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://kehreg.com/\" tilte=\"Website der Gemeinde\">
                        <img class=\"img-fluid\" src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/komarno.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo der Jewish Community in Komárno\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website der Europäischen Kommission\">
                        <img class=\"img-fluid\" src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/European_Commission_logo.png"), "html", null, true);
        yield "\"
                             alt=\"Logo der EU Commission\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\" tilte=\"Website der Gedenkstätte\">
                        <img class=\"img-fluid\" src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/neuengamme.png"), "html", null, true);
        yield "\"
                             alt=\"Logo der Gedenkstätte KZ Neuengamme\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://bergen-belsen.stiftung-ng.de/de/\" tilte=\"Website der Gedenkstätte\">
                        <img class=\"img-fluid\" src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/bergen-belsen.png"), "html", null, true);
        yield "\"
                             alt=\"Logo der Gedenkstätte KZ Bergen Belsen\"/>
                        </a>
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
        return "site/about.html.twig";
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
        return array (  172 => 69,  163 => 63,  154 => 57,  145 => 51,  136 => 45,  127 => 39,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Projekt HUNGMEM | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container g-4 py-5\">
        <h2>„Digitale Gedenk- und Forschungsinfrastruktur – Der Holocaust in Ungarn 80 Jahre später“ (HUNGMEM) </h2>
        <h3 class=\"mt-4\">Hintergrund und Ziele des Projektes</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    One in ten Holocaust victims came from Hungary within its borders at the time. 500,000-600,000 Jews and Roma*nja were murdered by the National Socialists and their Hungarian allies. The names of most of these persecuted people are still unknown today. 80 years after the Holocaust in Hungary, a transnational research and remembrance project has set itself the goal of researching the fate of the deported women, men and children, coming to terms with it and preventing it from being forgotten. Together with partner institutions in Hungary, Romania and Slovakia, the Institute for the History of German Jews (IGdJ) will establish a digital commemoration and research infrastructure.</p>
            </div>
            <div class=\"col-lg\">
                <p>
                    The IGdJ is coordinating the archive research to collect as many names and stories as possible of those who were deported to the concentration camps in northern Germany. Thanks to the good cooperation with the Neuengamme and Bergen-Belsen concentration camp memorials and the intensive research of the two project team members, comprehensive data has already been collected in recent months and new information could be added in some cases.
                </p>
                <p>
                    The aim now is to bring together the findings and make them accessible in a public presentation.
                </p>
            </div>
        </div>
    </div>


    <div class=\"container mt-2\">
        <h3>Kooperationspartner</h3>
        <div class=\"row\">
            <div class=\"col-md\">
                <p>
                    The project \"Digital Commemoration and Research Infrastructure - The Holocaust in Hungary 80 Years Later\" (HUNGMEM) is being carried out in cooperation with the Hungarian Jewish Museum and Archive in Budapest, the Romanian Institute for Research on National Minorities and the Jewish Community in Komárno. The project is supported by the EU Commission as part of the CERV - Citizens, Equality, Rights and Values funding program. The international cooperation offers the unique opportunity to provide new impulses for research on the Holocaust by evaluating scattered sources in various archives in order to reconstruct transportation routes and individual biographies.
                </p>
            </div>
            <div class=\"col-md\">
                <div class=\"container\">
                    <div class=\"row partner\">
                        <a href=\"https://www.milev.hu\" tilte=\"Website des Museums\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/hjma-logo.png') }}\"
                             alt=\"Logo des Hungarian Jewish Museum and Archive in Budapest\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://ispmn.gov.ro/\" tilte=\"Website des Instituts\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/ispmn.jpg') }}\"
                             alt=\"Logo des Romanian Institute for Research on National Minorities\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://kehreg.com/\" tilte=\"Website der Gemeinde\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/komarno.jpg') }}\"
                             alt=\"Logo der Jewish Community in Komárno\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website der Europäischen Kommission\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/European_Commission_logo.png') }}\"
                             alt=\"Logo der EU Commission\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\" tilte=\"Website der Gedenkstätte\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/neuengamme.png') }}\"
                             alt=\"Logo der Gedenkstätte KZ Neuengamme\"/>
                        </a>
                    </div>
                    <div class=\"row partner\">
                        <a href=\"https://bergen-belsen.stiftung-ng.de/de/\" tilte=\"Website der Gedenkstätte\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/bergen-belsen.png') }}\"
                             alt=\"Logo der Gedenkstätte KZ Bergen Belsen\"/>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

{% endblock %}", "site/about.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/about.html.twig");
    }
}
