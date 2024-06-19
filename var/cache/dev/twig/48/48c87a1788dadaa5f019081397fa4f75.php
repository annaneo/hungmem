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

/* site/sources.html.twig */
class __TwigTemplate_66d4196d21ab5e5ec253c4177bba0bcb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/sources.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/sources.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/sources.html.twig", 1);
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

        yield " Quellen | ";
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

    <div class=\"container mt-5\">
        <h2>Nutzung</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Dieses Projekt wäre ohne die Bereitschaft der hier vorgestellten Personen, ihre sehr persönlichen
                    Erfahrungen zu teilen, nicht möglich gewesen. Die hier bereitgestellten Interviews sind gekürzte
                    Ausschnitte aus Gesprächen, die in der Regel zwischen 30 Minuten und zwei Stunden gedauert haben.
                    Die Audio- und Videodateien wurden von den Interviewten ausdrücklich für die Veröffentlichung auf
                    der Website <em>Jüdisches Hamburg erzählen</em> freigegeben. Die Website ist dabei nicht nur die
                    Veröffentlichungsplattform, sondern bietet auch eine Kontextualisierung der Interviews durch
                    weiterführende biografische und historische Informationen – gewissermaßen, sofern dies im Netz
                    möglich ist, einen geschützten Raum.
                </p>
                <p>
                    Von den Nutzerinnen und Nutzern erwarten wir einen sensiblen und respektvollen Umgang mit dem
                    bereitgestellt Material. Bei der Nutzung der Interviews sind stets die Persönlichkeitsrechte der
                    Interviewten zu wahren. Eine Weiterverbreitung des Materials ist nur nach
                    ausdrücklicher Genehmigung gestattet.
                </p>
            </div>
        </div>

        <h3 class=\"pt-4\">Lizenzierung</h3>
        <div class=\"row\">
            <div class=\"col-md\">
                <p>
                    Alle Interviews dürfen ausschließlich für private und wissenschaftliche Zwecke genutzt werden. Eine
                    kommerzielle
                    Nutzung ist ausgeschlossen. Die Interviews sind mit der
                    <a href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\" target=\"_blank\"
                       title=\"Erläuterungen zur Lizenz auf der Creative Commons Website\">Creative Commons Lizenz CC
                        BY-NC-ND 4.0</a> lizenziert.
                    Diese Lizenz erlaubt eine Nachnutzung zu nicht-kommerziellen Zwecken unter der Bedingung der
                    Namensnennung. Eine Bearbeitung des Materials ist nicht gestattet. Ein Verstoß gegen die
                    Persönlichkeitsrechte der Interviewten wird geahndet.
                </p>
                <p>
                    Die begleitenden Texte und Metainformationen zu den Interviews sind mit der <a
                            href=\"https://creativecommons.org/licenses/by/4.0/deed.de\" target=\"_blank\"
                            title=\"Erläuterungen zur Lizenz auf der Creative Commons Website\">Creative Commons Lizenz CC
                        BY 4.0</a> lizenziert.
                    Die Texte können unter Namensnennung in jedem Format oder Medium genutzt werden.
                </p>
                <p>
                    Die Software für das Portal ist auf <a href=\"https://github.com/annaneo/juedisches-hamburg-erzaehlen\">https://github.com</a>
                    unter der MIT License veröffentlicht. Die Lizenz ermöglicht eine offene Nutzung unter der Namensnennung: Anna Neovesky (2013) annaneo/juedisches-hamburg-erzaehlen: v 1.0, https://github.com/annaneo/juedisches-hamburg-erzaehlen.
                </p>

            </div>
            <div class=\"col-md\">
                <img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cc-by-nc-sa.png"), "html", null, true);
        yield "\"
                     alt=\"Emblem der CC BY-NC-ND Lizenz\"/>
                <img class=\"mt-2\" src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cc-by.png"), "html", null, true);
        yield "\"
                     alt=\"Emblem der CC BY Lizenz\"/>
                <p class=\"caption mt-2\">Embleme der genutzten Creative Commons Lizenzen.<br/><a
                            href=\"https://creativecommons.org/about/downloads/\" target=\"_blank\"
                            title=\"Download Seite von Creative Commons mit Logos, Icons und Badges\">bereitgestellt von
                        Creative Commons unter CC BY-SA</a>.</p>
            </div>
        </div>

        <h3 class=\"pt-4\">Schnittstelle</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                Die Forschungsdaten stehen unter <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\"
                                                    target=\"_blank\"
                                                    title=\"Erläuterungen zur Lizenz auf der Creative Commons Website\">CC
                    BY 4.0</a> zur Verfügung und
                können unter Namensnennung in jedem Format oder Medium genutzt werden. Über eine
                <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jsonapi");
        yield "\" target=\"_blank\" title=\"Öffnet JSON Schnittstelle in neuem Fenster\">JSON-Schnittstelle</a>
                können Metadaten zu allen Interviews maschinenlesbar bezogen werde.
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
        return "site/sources.html.twig";
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
        return array (  172 => 78,  152 => 61,  147 => 59,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Quellen | {{ parent() }} {% endblock %}

{% block body %}


    <div class=\"container mt-5\">
        <h2>Nutzung</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <p>
                    Dieses Projekt wäre ohne die Bereitschaft der hier vorgestellten Personen, ihre sehr persönlichen
                    Erfahrungen zu teilen, nicht möglich gewesen. Die hier bereitgestellten Interviews sind gekürzte
                    Ausschnitte aus Gesprächen, die in der Regel zwischen 30 Minuten und zwei Stunden gedauert haben.
                    Die Audio- und Videodateien wurden von den Interviewten ausdrücklich für die Veröffentlichung auf
                    der Website <em>Jüdisches Hamburg erzählen</em> freigegeben. Die Website ist dabei nicht nur die
                    Veröffentlichungsplattform, sondern bietet auch eine Kontextualisierung der Interviews durch
                    weiterführende biografische und historische Informationen – gewissermaßen, sofern dies im Netz
                    möglich ist, einen geschützten Raum.
                </p>
                <p>
                    Von den Nutzerinnen und Nutzern erwarten wir einen sensiblen und respektvollen Umgang mit dem
                    bereitgestellt Material. Bei der Nutzung der Interviews sind stets die Persönlichkeitsrechte der
                    Interviewten zu wahren. Eine Weiterverbreitung des Materials ist nur nach
                    ausdrücklicher Genehmigung gestattet.
                </p>
            </div>
        </div>

        <h3 class=\"pt-4\">Lizenzierung</h3>
        <div class=\"row\">
            <div class=\"col-md\">
                <p>
                    Alle Interviews dürfen ausschließlich für private und wissenschaftliche Zwecke genutzt werden. Eine
                    kommerzielle
                    Nutzung ist ausgeschlossen. Die Interviews sind mit der
                    <a href=\"https://creativecommons.org/licenses/by-nc-nd/4.0/deed.de\" target=\"_blank\"
                       title=\"Erläuterungen zur Lizenz auf der Creative Commons Website\">Creative Commons Lizenz CC
                        BY-NC-ND 4.0</a> lizenziert.
                    Diese Lizenz erlaubt eine Nachnutzung zu nicht-kommerziellen Zwecken unter der Bedingung der
                    Namensnennung. Eine Bearbeitung des Materials ist nicht gestattet. Ein Verstoß gegen die
                    Persönlichkeitsrechte der Interviewten wird geahndet.
                </p>
                <p>
                    Die begleitenden Texte und Metainformationen zu den Interviews sind mit der <a
                            href=\"https://creativecommons.org/licenses/by/4.0/deed.de\" target=\"_blank\"
                            title=\"Erläuterungen zur Lizenz auf der Creative Commons Website\">Creative Commons Lizenz CC
                        BY 4.0</a> lizenziert.
                    Die Texte können unter Namensnennung in jedem Format oder Medium genutzt werden.
                </p>
                <p>
                    Die Software für das Portal ist auf <a href=\"https://github.com/annaneo/juedisches-hamburg-erzaehlen\">https://github.com</a>
                    unter der MIT License veröffentlicht. Die Lizenz ermöglicht eine offene Nutzung unter der Namensnennung: Anna Neovesky (2013) annaneo/juedisches-hamburg-erzaehlen: v 1.0, https://github.com/annaneo/juedisches-hamburg-erzaehlen.
                </p>

            </div>
            <div class=\"col-md\">
                <img src=\"{{ asset('images/cc-by-nc-sa.png') }}\"
                     alt=\"Emblem der CC BY-NC-ND Lizenz\"/>
                <img class=\"mt-2\" src=\"{{ asset('images/cc-by.png') }}\"
                     alt=\"Emblem der CC BY Lizenz\"/>
                <p class=\"caption mt-2\">Embleme der genutzten Creative Commons Lizenzen.<br/><a
                            href=\"https://creativecommons.org/about/downloads/\" target=\"_blank\"
                            title=\"Download Seite von Creative Commons mit Logos, Icons und Badges\">bereitgestellt von
                        Creative Commons unter CC BY-SA</a>.</p>
            </div>
        </div>

        <h3 class=\"pt-4\">Schnittstelle</h3>
        <div class=\"row\">
            <div class=\"col-md-6\">
                Die Forschungsdaten stehen unter <a href=\"https://creativecommons.org/licenses/by/4.0/deed.de\"
                                                    target=\"_blank\"
                                                    title=\"Erläuterungen zur Lizenz auf der Creative Commons Website\">CC
                    BY 4.0</a> zur Verfügung und
                können unter Namensnennung in jedem Format oder Medium genutzt werden. Über eine
                <a href=\"{{ path('app_jsonapi') }}\" target=\"_blank\" title=\"Öffnet JSON Schnittstelle in neuem Fenster\">JSON-Schnittstelle</a>
                können Metadaten zu allen Interviews maschinenlesbar bezogen werde.
            </div>
        </div>
    </div>

{% endblock %}", "site/sources.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/sources.html.twig");
    }
}
