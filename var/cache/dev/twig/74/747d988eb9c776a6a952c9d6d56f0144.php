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

/* site/about.en.html.twig */
class __TwigTemplate_4718810dc9188debd6188151d852ffce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about.en.html.twig"));

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

        yield " Project background | ";
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
    <div class=\"container g-4 pt-5\">
        <h2>“Digital Commemoration and Research Infrastructure – The Holocaust in Hungary 80 Years Later” (HUNGMEM)</h2>
        <h3 class=\"mt-4\">Background and objectives of the project</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    One in ten Holocaust victims came from Hungary within its borders at the time. 500,000–600,000 Jews, Romani women 
                    and men were murdered by the National Socialists and their Hungarian allies. The names of most of these persecuted 
                    people are still unknown today. 80 years after the Holocaust in Hungary, a transnational research and remembrance 
                    project has set itself the goal of researching the fate of the deported women, men and children, coming to terms 
                    with it, and preventing it from being forgotten.
                </p>
                <p>
                    The project is supported by the EU Commission as part of the <a
                            href=\"https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/programmes/cerv\"
                            title=\"Website of the CERV funding program\">CERV – Citizens, Equality, Rights and Values funding program</a>.
                </p>
            </div>
            <div class=\"col-lg\">
                <div class=\"row partner\">
                    <a href=\"https://commission.europa.eu/index_de\" title=\"Website of the European Commission\">
                        <img class=\"img-fluid\" src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/European_Commission_logo.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo of the EU Commission\"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container g-4\">
        <h3 class=\"mt-4\">Project network</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Within the project network, the <a 
                    href=\"https://www.igdj-hh.de\" title=\"Website of the institute\">Institute for the History of the German Jews (IGdJ)</a> 
                    coordinated the archive research to record as many names and stories as possible of those who were deported by 
                    the SS to the concentration camps in northern Germany. Thanks to the close cooperation with the Bergen-Belsen 
                    and Neuengamme concentration camp memorials and the intensive research of the two project team members Lara Meinert, 
                    M.A., and Louis Wörner, M.A., it was possible to compile comprehensive data and in some cases add new information. 
                    This biographical data will be incorporated into a digital commemoration and research infrastructure developed 
                    at the <a href=\"https://www.milev.hu\" title=\"Website of the museum\">Hungarian Jewish Museum and Archives in Budapest</a>,
                    the database can be accessed <a href=\"https://holokauszt80.milev.hu/\" title=\"Digital Memorial Knowledge Infrastructure\">here</a>. 
                    Further data on the names and deportation routes of those persecuted came from the partner institutions in 
                    Romania (<a href=\"https://ispmn.gov.ro/\" title=\"Website of the institute\">Romanian Institute for Research on National 
                    Minorities</a>) and Slovakia (<a href=\"https://kehreg.com/\" title=\"Website of the Jewish community\">Jewish Community of Komárno</a>).
                </p>
            </div>
            <div class=\"col-lg\">
                <div class=\"row partner\">
                    <a href=\"https://www.milev.hu\" title=\"Website of the museum\">
                        <img class=\"img-fluid\" src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/hjma-logo.png"), "html", null, true);
        yield "\"
                             alt=\"Logo of the Hungarian Jewish Museum and Archive in Budapest\"/>
                    </a>
                </div>
                <div class=\"row partner\">
                    <a href=\"https://ispmn.gov.ro/\" title=\"Website of the institute\">
                        <img class=\"img-fluid\" src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/ispmn.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo of the Romanian Institute for Research on National Minorities\"/>
                    </a>
                </div>
                <div class=\"row partner\">
                    <a href=\"https://kehreg.com/\" title=\"Website of the Jewish Community in Komárno\">
                        <img class=\"img-fluid\" src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/komarno.jpg"), "html", null, true);
        yield "\"
                             alt=\"Logo of the Jewish Community in Komárno\"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container g-4\">
        <h3 class=\"mt-4\">Focus on northern Germany</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    With a focus on northern Germany and the connection between the Holocaust and the course of the war, the IGdJ 
                    presents research findings in a regional context on this website it has produced. Based on the extensive database, 
                    the various case studies and visualizations shed light on different groups of prisoners and their partly different 
                    conditions of detention, on forced labor in the armaments industry, but also on the visibility of persecution in the 
                    urban space and the fact that, in addition to the deportations from the German Reich “to the East,” there were also 
                    deportations from German-occupied Eastern Europe to the West. Forced labor and Nazi terror, which took place 
                    “on their own doorstep” so to speak, were thus widely visible to the German wartime population and, in retrospect, 
                    raise questions about participation and resistance.
                </p>
            </div>
            <div class=\"col-lg\">
                <p>
                    The aim of our presentation is also to use the example of the deportations from Hungary to show that there are still 
                    gaps in research and knowledge in the history of the Holocaust and in the collective remembrance about it. This 
                    concerns transnational historical contexts as well as the specifics of some regions or the fate of individual groups 
                    of prisoners. In many cases – as in connection with this project, too – the often very fragmentary nature of the 
                    surviving sources makes it difficult to close these gaps, thus also raising the question of how uncertainties and 
                    lack of knowledge can be adequately dealt with in a scholarly way.
                </p>
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
        return "site/about.en.html.twig";
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
        return array (  177 => 70,  168 => 64,  159 => 58,  126 => 28,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.en.html.twig' %}

{% block title %} Project background | {{ parent() }} {% endblock %}

{% block body %}
    
    <div class=\"container g-4 pt-5\">
        <h2>“Digital Commemoration and Research Infrastructure – The Holocaust in Hungary 80 Years Later” (HUNGMEM)</h2>
        <h3 class=\"mt-4\">Background and objectives of the project</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    One in ten Holocaust victims came from Hungary within its borders at the time. 500,000–600,000 Jews, Romani women 
                    and men were murdered by the National Socialists and their Hungarian allies. The names of most of these persecuted 
                    people are still unknown today. 80 years after the Holocaust in Hungary, a transnational research and remembrance 
                    project has set itself the goal of researching the fate of the deported women, men and children, coming to terms 
                    with it, and preventing it from being forgotten.
                </p>
                <p>
                    The project is supported by the EU Commission as part of the <a
                            href=\"https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/programmes/cerv\"
                            title=\"Website of the CERV funding program\">CERV – Citizens, Equality, Rights and Values funding program</a>.
                </p>
            </div>
            <div class=\"col-lg\">
                <div class=\"row partner\">
                    <a href=\"https://commission.europa.eu/index_de\" title=\"Website of the European Commission\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/European_Commission_logo.jpg') }}\"
                             alt=\"Logo of the EU Commission\"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container g-4\">
        <h3 class=\"mt-4\">Project network</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    Within the project network, the <a 
                    href=\"https://www.igdj-hh.de\" title=\"Website of the institute\">Institute for the History of the German Jews (IGdJ)</a> 
                    coordinated the archive research to record as many names and stories as possible of those who were deported by 
                    the SS to the concentration camps in northern Germany. Thanks to the close cooperation with the Bergen-Belsen 
                    and Neuengamme concentration camp memorials and the intensive research of the two project team members Lara Meinert, 
                    M.A., and Louis Wörner, M.A., it was possible to compile comprehensive data and in some cases add new information. 
                    This biographical data will be incorporated into a digital commemoration and research infrastructure developed 
                    at the <a href=\"https://www.milev.hu\" title=\"Website of the museum\">Hungarian Jewish Museum and Archives in Budapest</a>,
                    the database can be accessed <a href=\"https://holokauszt80.milev.hu/\" title=\"Digital Memorial Knowledge Infrastructure\">here</a>. 
                    Further data on the names and deportation routes of those persecuted came from the partner institutions in 
                    Romania (<a href=\"https://ispmn.gov.ro/\" title=\"Website of the institute\">Romanian Institute for Research on National 
                    Minorities</a>) and Slovakia (<a href=\"https://kehreg.com/\" title=\"Website of the Jewish community\">Jewish Community of Komárno</a>).
                </p>
            </div>
            <div class=\"col-lg\">
                <div class=\"row partner\">
                    <a href=\"https://www.milev.hu\" title=\"Website of the museum\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/hjma-logo.png') }}\"
                             alt=\"Logo of the Hungarian Jewish Museum and Archive in Budapest\"/>
                    </a>
                </div>
                <div class=\"row partner\">
                    <a href=\"https://ispmn.gov.ro/\" title=\"Website of the institute\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/ispmn.jpg') }}\"
                             alt=\"Logo of the Romanian Institute for Research on National Minorities\"/>
                    </a>
                </div>
                <div class=\"row partner\">
                    <a href=\"https://kehreg.com/\" title=\"Website of the Jewish Community in Komárno\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/logos/komarno.jpg') }}\"
                             alt=\"Logo of the Jewish Community in Komárno\"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container g-4\">
        <h3 class=\"mt-4\">Focus on northern Germany</h3>
        <div class=\"row\">
            <div class=\"col-lg\">
                <p>
                    With a focus on northern Germany and the connection between the Holocaust and the course of the war, the IGdJ 
                    presents research findings in a regional context on this website it has produced. Based on the extensive database, 
                    the various case studies and visualizations shed light on different groups of prisoners and their partly different 
                    conditions of detention, on forced labor in the armaments industry, but also on the visibility of persecution in the 
                    urban space and the fact that, in addition to the deportations from the German Reich “to the East,” there were also 
                    deportations from German-occupied Eastern Europe to the West. Forced labor and Nazi terror, which took place 
                    “on their own doorstep” so to speak, were thus widely visible to the German wartime population and, in retrospect, 
                    raise questions about participation and resistance.
                </p>
            </div>
            <div class=\"col-lg\">
                <p>
                    The aim of our presentation is also to use the example of the deportations from Hungary to show that there are still 
                    gaps in research and knowledge in the history of the Holocaust and in the collective remembrance about it. This 
                    concerns transnational historical contexts as well as the specifics of some regions or the fate of individual groups 
                    of prisoners. In many cases – as in connection with this project, too – the often very fragmentary nature of the 
                    surviving sources makes it difficult to close these gaps, thus also raising the question of how uncertainties and 
                    lack of knowledge can be adequately dealt with in a scholarly way.
                </p>
            </div>
        </div>
    </div>

{% endblock %}", "site/about.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/site/about.en.html.twig");
    }
}
