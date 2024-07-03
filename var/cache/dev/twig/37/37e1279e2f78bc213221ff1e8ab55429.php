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

/* elements/footer.html.twig */
class __TwigTemplate_6a295c3a7609ea95fa8215339b46c7da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/footer.html.twig"));

        // line 1
        yield "<div class=\"container\">
    <footer class=\"d-flex flex-wrap justify-content-between align-items-center pt-4 py-3 my-4 mt-5 border-top\">
        <p class=\"col-md-6 text-muted\">&copy; 2024 Institut für die Geschichte der deutschen Juden </p>

        <ul class=\"nav col-md-4 justify-content-end\">
            <li><a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imprint");
        yield "\" class=\"nav-link footer-link\" >Impressum</a></li>
            <li><a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imprint");
        yield "#datenschutz\" class=\"nav-link footer-link\">Datenschutz</a></li>
        </ul>
    </footer>
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
        return "elements/footer.html.twig";
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
        return array (  55 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <footer class=\"d-flex flex-wrap justify-content-between align-items-center pt-4 py-3 my-4 mt-5 border-top\">
        <p class=\"col-md-6 text-muted\">&copy; 2024 Institut für die Geschichte der deutschen Juden </p>

        <ul class=\"nav col-md-4 justify-content-end\">
            <li><a href=\"{{ path('app_imprint') }}\" class=\"nav-link footer-link\" >Impressum</a></li>
            <li><a href=\"{{ path('app_imprint') }}#datenschutz\" class=\"nav-link footer-link\">Datenschutz</a></li>
        </ul>
    </footer>
</div>", "elements/footer.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/elements/footer.html.twig");
    }
}
