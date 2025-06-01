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

/* elements/footer.html.twig */
class __TwigTemplate_9e8ea4bbb0fc99cd0eee5973742cf2eb extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/footer.html.twig"));

        // line 1
        yield "<div class=\"container mt-5\">
    <footer class=\"pt-1 border-top\">
        <div class=\"row\">
            <div class=\"col-8 col-md-6 mb-6\">
                <a href=\"https://www.igdj-hh.de/\" title=\"Zur Website des Instituts\">
                <img class=\"img-fluid\" style=\"width: 200px;\" src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/igdj-logo.png"), "html", null, true);
        yield "\"
                     alt=\"Logo des Instituts für die Geschichte der deutschen Juden\">
                </a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 \">
                <p style=\"padding-top: 8px;\">&copy; 2024 Institut für die Geschichte der deutschen Juden</p>
                <ul class=\"list-unstyled d-flex\">
                    <li><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imprint");
        yield "\" class=\"nav-link footer-link\" >Impressum</a></li>
                    <li><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_imprint");
        yield "#datenschutz\" class=\"nav-link footer-link\">Datenschutz</a></li>
                </ul>
            </div>
        </div>

    </footer>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "elements/footer.html.twig";
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
        return array (  72 => 17,  68 => 16,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container mt-5\">
    <footer class=\"pt-1 border-top\">
        <div class=\"row\">
            <div class=\"col-8 col-md-6 mb-6\">
                <a href=\"https://www.igdj-hh.de/\" title=\"Zur Website des Instituts\">
                <img class=\"img-fluid\" style=\"width: 200px;\" src=\"{{ asset('images/logos/igdj-logo.png') }}\"
                     alt=\"Logo des Instituts für die Geschichte der deutschen Juden\">
                </a>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 \">
                <p style=\"padding-top: 8px;\">&copy; 2024 Institut für die Geschichte der deutschen Juden</p>
                <ul class=\"list-unstyled d-flex\">
                    <li><a href=\"{{ path('app_imprint') }}\" class=\"nav-link footer-link\" >Impressum</a></li>
                    <li><a href=\"{{ path('app_imprint') }}#datenschutz\" class=\"nav-link footer-link\">Datenschutz</a></li>
                </ul>
            </div>
        </div>

    </footer>
</div>", "elements/footer.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/elements/footer.html.twig");
    }
}
