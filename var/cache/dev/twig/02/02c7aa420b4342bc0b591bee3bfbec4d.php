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

/* interviews/wittenberg.html.twig */
class __TwigTemplate_5f5276f0a476b6ee4bd05f035a78d346 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/wittenberg.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "interviews/wittenberg.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "interviews/wittenberg.html.twig", 1);
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

        yield " Wittenberg | ";
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/poster/Wittenberg.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/Wittenberg.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
                <div class=\"pr-2\">
                    <p>Andreas Wittenberg über die Geschichte seiner Eltern und sein Aufwachsen in Hamburg. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Ich habe mich immer durchaus als Jude verstanden. Im dem Sinne, Teil einer Schicksalsgemeinschaft zu sein.“</p>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 01:05:45</p>
                    <p>Gezeigter Ausschnitt: 06:57</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 16.11.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Migration,
                        Vereinigung der Verfolgten des Naziregimes,
                        politisches Engagement,
                        Umgang mit Vergangenheit
                        Urugay</p>
                    <p>Genannte Orte:
                        Montevideo,
                        Ostpreußen,
                        Hamburg,
                        Texas (USA),
                        Uruguay
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-md-6\">
                <h2 class=\"title-show\">Andreas Wittenberg</h2>
                <p>
                    Andreas Wittenberg wurde 1955 in Hamburg geboren. Seine Eltern, Steffi und Kurt Wittenberg, hatten
                    sich als jüdische Geflüchtete in Montevideo kennengelernt, nach Übersiedlung in die USA dort 1948 geheiratet und waren 1951 nach
                    Hamburg, in die Geburtsstadt Steffi Wittenbergs, zurückgekehrt. In den präsentierten
                    Interviewausschnitten berichtet Andreas Wittenberg von seiner politischen und jüdischen
                    Sozialisierung und der Geschichte seiner Eltern, die auch in der Online-Ausstellung <em>„Nichts. Nur Fort!“ Flucht und Neuanfang in Buenos Aires, Montevideo und São Paulo</em> behandelt wird: <a
                            href=\"https://juedische-geschichte-online.net/ausstellung/emigration-suedamerika\">https://juedische-geschichte-online.net/ausstellung/emigration-suedamerika</a>
                </p>
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
        return "interviews/wittenberg.html.twig";
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
        return array (  101 => 10,  97 => 9,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Wittenberg | {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row align-items-start pt-4\">
            <div class=\"col\">
                <video width=\"100%\"  height=\"100%\" controls poster=\"{{ asset('images/poster/Wittenberg.jpg') }}\">
                    <source src=\"{{ asset('videos/Wittenberg.mp4') }}\" type=\"video/mp4\">
                </video>
                <div class=\"pr-2\">
                    <p>Andreas Wittenberg über die Geschichte seiner Eltern und sein Aufwachsen in Hamburg. © IGdJ, 2022.</p>
                </div>
                <div class=\"pt-5\">
                    <p class=\"quote\">„Ich habe mich immer durchaus als Jude verstanden. Im dem Sinne, Teil einer Schicksalsgemeinschaft zu sein.“</p>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"metadata p-4\">
                    <p>Gesamtlänge des Interviews: 01:05:45</p>
                    <p>Gezeigter Ausschnitt: 06:57</p>
                    <p>Interviewerin: Karen Körber, Anna Menny</p>
                    <p>Ort des Interviews: Hamburg</p>
                    <p>Interview geführt am: 16.11.2022</p>
                    <p>Schnitt: Anna Menny, Aline Philippen</p>
                    <p>Objekt(e): –</p>
                    <p>Schlagwort(e): Migration,
                        Vereinigung der Verfolgten des Naziregimes,
                        politisches Engagement,
                        Umgang mit Vergangenheit
                        Urugay</p>
                    <p>Genannte Orte:
                        Montevideo,
                        Ostpreußen,
                        Hamburg,
                        Texas (USA),
                        Uruguay
                    </p>
                    <p>Lizenz: <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\">CC BY 4.0</a> (Text), <a
                                href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\">CC BY-NC-ND 4.0</a>
                        (Video)</p>
                </div>
            </div>
        </div>
        <div class=\"row align-items-start pt-4\">
            <div class=\"col-md-6\">
                <h2 class=\"title-show\">Andreas Wittenberg</h2>
                <p>
                    Andreas Wittenberg wurde 1955 in Hamburg geboren. Seine Eltern, Steffi und Kurt Wittenberg, hatten
                    sich als jüdische Geflüchtete in Montevideo kennengelernt, nach Übersiedlung in die USA dort 1948 geheiratet und waren 1951 nach
                    Hamburg, in die Geburtsstadt Steffi Wittenbergs, zurückgekehrt. In den präsentierten
                    Interviewausschnitten berichtet Andreas Wittenberg von seiner politischen und jüdischen
                    Sozialisierung und der Geschichte seiner Eltern, die auch in der Online-Ausstellung <em>„Nichts. Nur Fort!“ Flucht und Neuanfang in Buenos Aires, Montevideo und São Paulo</em> behandelt wird: <a
                            href=\"https://juedische-geschichte-online.net/ausstellung/emigration-suedamerika\">https://juedische-geschichte-online.net/ausstellung/emigration-suedamerika</a>
                </p>
            </div>

        </div>
    </div>
{% endblock %}
", "interviews/wittenberg.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/interviews/wittenberg.html.twig");
    }
}
