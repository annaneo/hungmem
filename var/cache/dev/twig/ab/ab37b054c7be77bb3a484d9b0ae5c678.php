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

/* site/imprint.en.html.twig */
class __TwigTemplate_2a70beab63def30c1d1004d37eafdb51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/imprint.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/imprint.en.html.twig"));

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

        yield " Imprint | ";
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
    <h2>Imprint</h2>
    <div class=\"row\">
    <div class=\"col-lg-6\">
        <p>
            The website is a service of the Institute for the History of the German Jews and presents project results from the 
            EU Commission-funded project entitled “Digital Commemoration and Research Infrastructure – The Holocaust in Hungary 80 Years 
            Later” (HUNGMEM).
        </p>
        <p>
            Institute for the History of the German Jews<br/>(Institut für die Geschichte der deutschen Juden)<br/>
            Beim Schlump 83<br/>
            20144 Hamburg<br/>
        </p>
        <p>
            +49 40 - 42 838-2617<br/>
            contact(at)igdj-hh.de
        </p>
        <p>
            The Institute, a foundation constituted under civil law and administered by the Free and Hanseatic City of Hamburg, 
            is institutionally funded by the Ministry of Science, Research, Equality, and Districts of the Free and Hanseatic City 
            of Hamburg. 
        </p>
        <img class=\"img-fluid\" src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/BWFG-Logo.png"), "html", null, true);
        yield "\"
             alt=\"Logo for the Ministry of Science, Research, Equality, and Districts of the Free and Hanseatic City of Hamburg\"/>

        <h4>Persons authorized to represent the organization:</h4>
        <p>
            Director Dr. Kim Wünschmann<br/>
            Deputy Director: Dr. Björn Siegel
        </p>
        <h4>Responsible for the content:</h4>
        <p>
            Lara Meinert, M.A.<br/>
            Louis Wörner, M.A.
        </p>
        <h4>Conception and coordination:</h4>
        <p>
            Dr. Anna Menny<br/>
            Dr. Kim Wünschmann
        </p>
        <h4>Technical conception and implementation:</h4>
        <p>
            Dr. Anna Neovesky<br/>
            Helena Geibel, M.A.
        </p>
        <h4>Translation:</h4>
        <p>
            Erwin Fink
        </p>
        <h4>Cooperation partner:</h4>
        <p>
            <a href=\"https://bergen-belsen.stiftung-ng.de/de/\">Lower Saxony Memorials Foundation / Bergen-Belsen Memorial</a>
            <div class=\"partner\">
                <a href=\"https://bergen-belsen.stiftung-ng.de/de/\" title=\"Website of the Lower Saxony Memorials Foundation / Bergen-Belsen Memorial\">
                    <img class=\"img-fluid\" src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/bergen-belsen.png"), "html", null, true);
        yield "\"
                        alt=\"Logo of the Bergen-Belsen Concentration Camp Memorial\"/>
                </a>
            </div>
            <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\">Neuengamme Concentration Camp Memorial</a>
            <div class=\"partner\">
                <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\" title=\"Website of the Neuengamme Concentration Camp Memorial\">
                    <img class=\"img-fluid\" src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/neuengamme.png"), "html", null, true);
        yield "\"
                        alt=\"Logo of the Neuengamme Concentration Camp Memorial\"/>
                </a>
            </div>
        </p>


        <h3>Acknowledgments</h3>
        <p>
            We would like to thank all the institutions and individuals involved for their permission to use images and 
            source material and for their support with the research.
        </p>

        <h3>Support</h3>
        <p>
            The transnational joint project “Digital Commemoration and Research Infrastructure – The Holocaust in Hungary 80 Years Later” 
            (HUNGMEM) is funded by the EU Commission as part of the 
            <a href=\"https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/programmes/cerv\"
                    title=\"Website of the CERV funding program CERV\">
                CERV – Citizens, Equality, Rights and Values
            </a> funding program.
        </p>
        <div class=\"row partner\">
            <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website of the European Commission\">
                <img class=\"img-fluid\" src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/European_Commission_logo.jpg"), "html", null, true);
        yield "\"
                     alt=\"Logo of the EU Commission\"/>
            </a>
        </div>

        <h2 class=\"pt-4\" id=\"datenschutz\">Data protection</h2>
        <p>
            This is an online service of the Institute for the History of the German Jews (IGdJ). The 
            <a href=\"https://igdj-hh.de/datenschutz\" target=\"_blank\"
                   title=\"Privacy policy on the website of the Institute for the History of the German Jews\">
                general privacy policy of the IGdJ
            </a> applies to the processing of all personal data collected in the course of operating this website.
        </p>
        <p>
            <em>Fathom Analytics</em> is used to collect anonymized access data. 
            Fathom Analytics is a service offered by Conva Ventures Inc. for anonymized analyses through which the 
            provider can determine how users use this application. 
            Collected data is anonymized by hashing processes. Further information is available 
            <a href=\"https://usefathom.com/data\" title=\"Information on data processing by Fathom Analytics\">here</a> 
            and via the <a href=\"https://usefathom.com/privacy\" title=\"Privacy policy of Fathom Analytics\">service’s privacy policy</a>. 
            <br/>Personal Data processed: Usage data. Place of processing: Canada.
        </p>

        <h3 id=\"usage\">Rights of use</h3>
        <p>
            The texts are under a <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\" 
            title=\"License terms on the Creative Commons website\">CC BY 4.0 license</a> and can be used under attribution.
        </p>
        <p>
            The licensing conditions of the illustration may vary and are indicated on each of the illustrations.
        </p>

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
        return "site/imprint.en.html.twig";
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
        return array (  200 => 93,  173 => 69,  163 => 62,  128 => 30,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.en.html.twig' %}

{% block title %} Imprint | {{ parent() }} {% endblock %}

{% block body %}
    
    <div class=\"container g-4 py-5\">
    <h2>Imprint</h2>
    <div class=\"row\">
    <div class=\"col-lg-6\">
        <p>
            The website is a service of the Institute for the History of the German Jews and presents project results from the 
            EU Commission-funded project entitled “Digital Commemoration and Research Infrastructure – The Holocaust in Hungary 80 Years 
            Later” (HUNGMEM).
        </p>
        <p>
            Institute for the History of the German Jews<br/>(Institut für die Geschichte der deutschen Juden)<br/>
            Beim Schlump 83<br/>
            20144 Hamburg<br/>
        </p>
        <p>
            +49 40 - 42 838-2617<br/>
            contact(at)igdj-hh.de
        </p>
        <p>
            The Institute, a foundation constituted under civil law and administered by the Free and Hanseatic City of Hamburg, 
            is institutionally funded by the Ministry of Science, Research, Equality, and Districts of the Free and Hanseatic City 
            of Hamburg. 
        </p>
        <img class=\"img-fluid\" src=\"{{ asset('images/logos/BWFG-Logo.png') }}\"
             alt=\"Logo for the Ministry of Science, Research, Equality, and Districts of the Free and Hanseatic City of Hamburg\"/>

        <h4>Persons authorized to represent the organization:</h4>
        <p>
            Director Dr. Kim Wünschmann<br/>
            Deputy Director: Dr. Björn Siegel
        </p>
        <h4>Responsible for the content:</h4>
        <p>
            Lara Meinert, M.A.<br/>
            Louis Wörner, M.A.
        </p>
        <h4>Conception and coordination:</h4>
        <p>
            Dr. Anna Menny<br/>
            Dr. Kim Wünschmann
        </p>
        <h4>Technical conception and implementation:</h4>
        <p>
            Dr. Anna Neovesky<br/>
            Helena Geibel, M.A.
        </p>
        <h4>Translation:</h4>
        <p>
            Erwin Fink
        </p>
        <h4>Cooperation partner:</h4>
        <p>
            <a href=\"https://bergen-belsen.stiftung-ng.de/de/\">Lower Saxony Memorials Foundation / Bergen-Belsen Memorial</a>
            <div class=\"partner\">
                <a href=\"https://bergen-belsen.stiftung-ng.de/de/\" title=\"Website of the Lower Saxony Memorials Foundation / Bergen-Belsen Memorial\">
                    <img class=\"img-fluid\" src=\"{{ asset('images/logos/bergen-belsen.png') }}\"
                        alt=\"Logo of the Bergen-Belsen Concentration Camp Memorial\"/>
                </a>
            </div>
            <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\">Neuengamme Concentration Camp Memorial</a>
            <div class=\"partner\">
                <a href=\"https://www.kz-gedenkstaette-neuengamme.de/\" title=\"Website of the Neuengamme Concentration Camp Memorial\">
                    <img class=\"img-fluid\" src=\"{{ asset('images/logos/neuengamme.png') }}\"
                        alt=\"Logo of the Neuengamme Concentration Camp Memorial\"/>
                </a>
            </div>
        </p>


        <h3>Acknowledgments</h3>
        <p>
            We would like to thank all the institutions and individuals involved for their permission to use images and 
            source material and for their support with the research.
        </p>

        <h3>Support</h3>
        <p>
            The transnational joint project “Digital Commemoration and Research Infrastructure – The Holocaust in Hungary 80 Years Later” 
            (HUNGMEM) is funded by the EU Commission as part of the 
            <a href=\"https://ec.europa.eu/info/funding-tenders/opportunities/portal/screen/programmes/cerv\"
                    title=\"Website of the CERV funding program CERV\">
                CERV – Citizens, Equality, Rights and Values
            </a> funding program.
        </p>
        <div class=\"row partner\">
            <a href=\"https://commission.europa.eu/index_de\" tilte=\"Website of the European Commission\">
                <img class=\"img-fluid\" src=\"{{ asset('images/logos/European_Commission_logo.jpg') }}\"
                     alt=\"Logo of the EU Commission\"/>
            </a>
        </div>

        <h2 class=\"pt-4\" id=\"datenschutz\">Data protection</h2>
        <p>
            This is an online service of the Institute for the History of the German Jews (IGdJ). The 
            <a href=\"https://igdj-hh.de/datenschutz\" target=\"_blank\"
                   title=\"Privacy policy on the website of the Institute for the History of the German Jews\">
                general privacy policy of the IGdJ
            </a> applies to the processing of all personal data collected in the course of operating this website.
        </p>
        <p>
            <em>Fathom Analytics</em> is used to collect anonymized access data. 
            Fathom Analytics is a service offered by Conva Ventures Inc. for anonymized analyses through which the 
            provider can determine how users use this application. 
            Collected data is anonymized by hashing processes. Further information is available 
            <a href=\"https://usefathom.com/data\" title=\"Information on data processing by Fathom Analytics\">here</a> 
            and via the <a href=\"https://usefathom.com/privacy\" title=\"Privacy policy of Fathom Analytics\">service’s privacy policy</a>. 
            <br/>Personal Data processed: Usage data. Place of processing: Canada.
        </p>

        <h3 id=\"usage\">Rights of use</h3>
        <p>
            The texts are under a <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\" 
            title=\"License terms on the Creative Commons website\">CC BY 4.0 license</a> and can be used under attribution.
        </p>
        <p>
            The licensing conditions of the illustration may vary and are indicated on each of the illustrations.
        </p>

    </div>

{% endblock %}", "site/imprint.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/site/imprint.en.html.twig");
    }
}
