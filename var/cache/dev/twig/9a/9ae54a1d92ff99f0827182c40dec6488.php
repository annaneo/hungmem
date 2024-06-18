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

/* elements/hero.html.twig */
class __TwigTemplate_611c99aa835972ea0f546b89645674b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/hero.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/hero.html.twig"));

        // line 1
        yield "<div class=\"hero device\">
<div class=\"container mt-5\">
    <div class=\"row pt-1 pb-1\">
        <div class=\"col\">
            <h1 class=\"fw-bold\">
                <a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    Holocaust in Ungarn und Deportationen nach Norddeutschland 1944
                </a>
            </h1>
            <p class=\"lead\">Fallstudien zu Deportationsouten, Lagern und Deportierten</p>
        </div>
    </div>
</div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "elements/hero.html.twig";
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
        return array (  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero device\">
<div class=\"container mt-5\">
    <div class=\"row pt-1 pb-1\">
        <div class=\"col\">
            <h1 class=\"fw-bold\">
                <a href=\"{{ path('app_home') }}\">
                    Holocaust in Ungarn und Deportationen nach Norddeutschland 1944
                </a>
            </h1>
            <p class=\"lead\">Fallstudien zu Deportationsouten, Lagern und Deportierten</p>
        </div>
    </div>
</div>
</div>", "elements/hero.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/elements/hero.html.twig");
    }
}
