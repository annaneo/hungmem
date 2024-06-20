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

/* site/map.html.twig */
class __TwigTemplate_8c385939753e07d05b6e9c10a975c74f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/map.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "site/map.html.twig", 1);
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

        yield " Kartenansicht | ";
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
        <h2>Orte und geografische Einordnung</h2>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class=\"col-lg-6\">
                <p>
                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua.
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div id=\"map\" class=\"mt-3\">
            </div>
        </div>
    </div>

    ";
        // line 36
        yield "    <script>
        ";
        // line 40
        yield "
        const antwerpen = L.marker([51.220556, 4.399722]).bindPopup('<strong>Antwerpen</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a></a');
        const auschwitz = L.marker([50.026389, 19.203889]).bindPopup('<strong>Auschwitz</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a></a><br/>Sonja Lahnstein-Kandel<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/>');
        const auschwitzW = L.marker([50.026389, 19.203889]).bindPopup('<strong>Auschwitz</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a></a><br/>Sonja Lahnstein-Kandel<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/>');
        const auschwitzL = L.marker([50.026389, 19.203889]).bindPopup('<strong>Auschwitz</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a></a><br/>Sonja Lahnstein-Kandel<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/>');
        const badkissingen = L.marker([50.199444, 10.076389]).bindPopup('<strong>Bad Kissingen</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const barth = L.marker([54.3678, 12.7251]).bindPopup('<strong>Barth</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const bayreuth = L.marker([49.9475, 11.5775]).bindPopup('<strong>Bayreuth</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const bor = L.marker([44.078333, 22.095278]).bindPopup('<strong>Bor</strong><br/> genannt im Gespräch mit<br/><a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const brody = L.marker([50.08, 25.151389]).bindPopup('<strong>Brody</strong><br/> genannt im Gespräch mit<br/> <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const bruessel = L.marker([50.843333, 4.363056]).bindPopup('<strong>Brüssel</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a>');
        const buchara = L.marker([39.766667, 64.433333]).bindPopup('<strong>Buchara</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a>');
        const budapest = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const budapestL = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const budapestT = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const bremen = L.marker([53.075878, 8.807311]).bindPopup('<strong>Bremen</strong><br/> genannt im Gespräch mit<br/><a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a>');
        const denver = L.marker([39.778889, -104.9825]).bindPopup('<strong>Denver</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a>');
        const duesseldorf = L.marker([51.225556, 6.782778]).bindPopup('<strong>Tel Aviv</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const elmshorn = L.marker([53.75323, 9.65294]).bindPopup('<strong>Elsmhorn</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const frankfurt = L.marker([50.110556, 8.682222]).bindPopup('<strong>Hamburg</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a>');
        const gailingen = L.marker([47.696944, 8.755]).bindPopup('<strong>Gailingen</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Barbara Guggenheim</a>');
        const giessen = L.marker([50.587222, 8.669722]).bindPopup('<strong>Gießen</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const haifa = L.marker([32.816667, 34.983333]).bindPopup('<strong>Haifa</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const haifaL = L.marker([32.816667, 34.983333]).bindPopup('<strong>Haifa</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const haifaW = L.marker([32.816667, 34.983333]).bindPopup('<strong>Haifa</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const halstenbek = L.marker([53.6365, 9.8431]).bindPopup('<strong>Halstenbek</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a>');

        const hamburgC = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/>c</a><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgF = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgG = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgHe = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgHo = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgK = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgLa = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgLah = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgLo = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgLu = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgN = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgM = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgR = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgP = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgPa = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgT = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgWi = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgWa = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');
        const hamburgZ = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Eliana Korn</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Ulrich Michael Lohse</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch<br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a>');

        const hannover = L.marker([52.374444, 9.738611]).bindPopup('<strong>Hannover</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Gabriela Fenyes</a><br/>');
        const jasenovac = L.marker([45.269167, 16.91]).bindPopup('<strong>Jasenovac</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');
        const jerusalem = L.marker([31.779167, 35.223611]).bindPopup('<strong>Jerusalem</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a>');
        const jerusalemW = L.marker([31.779167, 35.223611]).bindPopup('<strong>Jerusalem</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a>');
        const jerusalemL = L.marker([31.779167, 35.223611]).bindPopup('<strong>Jerusalem</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a>');
        const kiew = L.marker([50.45, 30.5]).bindPopup('<strong>Kiew</strong><br/> genannt im Gespräch mit<br/> <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const kirjatschmona = L.marker([33.2075, 35.569722]).bindPopup('<strong>Kirjat Schmona</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a>');
        const kopenhagen = L.marker([55.675706, 12.578745]).bindPopup('<strong>Kopenhagen</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a>');
        const ladispoli = L.marker([41.948056, 12.077778]).bindPopup('<strong>Ladispoli</strong><br/>genannt im Gespräch mit <br/><a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/>');
        const london = L.marker([51.50939, -0.11832]).bindPopup('<strong>London</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a>');
        const londonP = L.marker([51.50939, -0.11832]).bindPopup('<strong>London</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a>');
        const luebeck = L.marker([53.866111, 10.683889]).bindPopup('<strong>Lübeck</strong><br/>genannt in den Gesprächen mit <br/><a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/>');
        const luebeckW = L.marker([53.866111, 10.683889]).bindPopup('<strong>Lübeck</strong><br/>genannt in den Gesprächen mit <br/><a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/>');
        const minsk = L.marker([53.9, 27.55]).bindPopup('<strong>Minsk</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a>');
        const montevideo = L.marker([-34.866667, -56.166667]).bindPopup('<strong>Montevideo</strong><br/>genannt im Gespräch mit<br/> <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a><br/>');
        const moskau = L.marker([55.75, 37.616667]).bindPopup('<strong>Moskau</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/>');
        const moskauL = L.marker([55.75, 37.616667]).bindPopup('<strong>Moskau</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/>');
        const neuss = L.marker([51.198611, 6.691389]).bindPopup('<strong>Neuss</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const newyork = L.marker([40.712778, -74.005833]).bindPopup('<strong>New York</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a>');
        const nidda = L.marker([50.412778, 9.009167]).bindPopup('<strong>Nidda</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const nowosibirsk = L.marker([55.033333, 82.916667]).bindPopup('<strong>Nowosibirsk</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elsara Lubinska</a><br/>');
        const novisad = L.marker([45.255, 19.844722]).bindPopup('<strong>Novi Sad</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');
        const nuernberg = L.marker([49.455556, 11.078611]).bindPopup('<strong>Nürnberg</strong><br/>');
        const odessa = L.marker([46.483333, 30.733333]).bindPopup('<strong>Odessa</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a>');
        const oranienburg = L.marker([52.754444, 13.236944]).bindPopup('<strong>Oranienburg</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const parchim = L.marker([49.455556, 11.078611]).bindPopup('<strong>Parchim</strong><br/>genannt im Gesprächen mit<br/><a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a>');
        const prag = L.marker([50.088611, 14.421389]).bindPopup('<strong>Prag</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const przemysl = L.marker([49.783333, 22.766667]).bindPopup('<strong>Przemyśl</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');

        const ravensbrueck = L.marker([53.191111, 13.168333]).bindPopup('<strong>Ravensbrück</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const sanfrancisco = L.marker([37.7793, -122.4192]).bindPopup('<strong>San Francisco</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a>');
        const staubing = L.marker([48.88714, 11.80745]).bindPopup('<strong>Staubing</strong><br/>genannt im Gespräch mit<br/> <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const stuttgart = L.marker([48.775556, 9.182778]).bindPopup('<strong>Stuttgart</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Barbara Guggenheim</a>');
        const theresienstadt = L.marker([50.513639, 14.164694]).bindPopup('<strong>Theresienstadt</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const teheran = L.marker([35.7, 51.416667]).bindPopup('<strong>Teheran</strong><br/>genannt im Gespräch mit<br/> <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a><br/>');
        const telaviv = L.marker([32.083333, 34.8]).bindPopup('<strong>Tel Aviv</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const telavivL = L.marker([32.083333, 34.8]).bindPopup('<strong>Tel Aviv</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const wandsbek = L.marker([53.582033, 10.084261]).bindPopup('<strong>Hamburg-Wandsbek</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a>');
        const washington = L.marker([38.895, -77.036667]).bindPopup('<strong>Washington</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');
        const wuerzburg = L.marker([49.79441, 9.92937]).bindPopup('<strong>Würzburg</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const wuerzburgW = L.marker([49.79441, 9.92937]).bindPopup('<strong>Würzburg</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const woebbelin = L.marker([53.399444, 11.503333]).bindPopup('<strong>Wöbbelin</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const zagreb = L.marker([45.810278, 15.978056]).bindPopup('<strong>Zagreb</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');

        const australien = L.marker([-25, 135]).bindPopup('<strong>Australien</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a>');
        const israelG = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const israelHo = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const israelHe = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const israelM = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const israelN = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const israelP = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const israelR = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const israelT = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const israelW = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">John Guenther</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Michael Heimann</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Daphna Horwitz</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Mona Nasirzadeh</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Avi Rosenblum</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Abi Wallenstein</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const jugoslawien = L.marker([44.533056, 19.225]).bindPopup('<strong>Jugoslawien</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');
        const kroatien = L.marker([45.25, 15.466667]).bindPopup('<strong>Kroatien</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');
        const polen = L.marker([52.146944, 19.378056]).bindPopup('<strong>Polen</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');
        const schweden = L.marker([61.316667, 14.833333]).bindPopup('<strong>Schweden</strong><br/>genannt in den Gesprächen mit <br/><a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const schwedenT = L.marker([61.316667, 14.833333]).bindPopup('<strong>Schweden</strong><br/>genannt in den Gesprächen mit <br/><a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const schwedenP = L.marker([61.316667, 14.833333]).bindPopup('<strong>Schweden<br/>genannt in den Gesprächen mit <br/><a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Peggy Parnass</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Katharina Trebitsch</a>');
        const schweiz = L.marker([46.8, 8.233333]).bindPopup('<strong>Schweiz</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Barbara Guggenheim</a>');
        const slowakei = L.marker([48.658056, 19.558333]).bindPopup('<strong>Slowakei</strong><br/>genannt im Gespräch mit<br/> Gabriele Fenyes');
        const sowjetunion = L.marker([62.464444, 89.002222]).bindPopup('<strong>Sowjetunion</strong><br/>genannt im Gespräch mit <br/><a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/>');
        const texas = L.marker([31.666667, -99.45]).bindPopup('<strong>Texas</strong><br/>genannt im Gespräch mit<br/> <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a><br/>');
        const tschechoslowakei = L.marker([48.895556, 18.041389]).bindPopup('<strong>Tschechoslowakei</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a>');
        const ukraineC = L.marker([49.8, 30.833333]).bindPopup('<strong>Ukraine</strong><br/>genannt in den Gesprächen mit<br/> <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const ukraineZ = L.marker([49.8, 30.833333]).bindPopup('<strong>Ukraine </strong><br/>genannt in den Gesprächen mit<br/> <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a><br/> <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Igor Zunik</a>');
        const ungarn = L.marker([47.498056, 19.04]).bindPopup('<strong>Ungarn</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Sonja Lahnstein-Kandel</a><br/>');
        const uruguay = L.marker([-32.733333, -56.65]).bindPopup('<strong>Uruguay</strong><br/>genannt im Gespräch mit<br/> <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Andreas Wittenberg</a><br/>');
        const usa = L.marker([40, -100]).bindPopup('<strong>USA</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/>');
        const usaL = L.marker([40, -100]).bindPopup('<strong>USA</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/>');
        const usaM = L.marker([40, -100]).bindPopup('<strong>USA</strong><br/>genannt in den Gesprächen mit<br/><a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Judith Landshut</a><br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Carmen Melamed</a> <br/><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Elias Pestov</a><br/>');
        const usbekistan = L.marker([41.666667, 64.066667]).bindPopup('<strong>Usbekistan</strong><br/>genannt im Gespräch mit<br/><a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\">Julia Camargo</a>');


        const camargo = L.layerGroup([nuernberg, hamburgC, usbekistan, ukraineC]);
        const fenyes = L.layerGroup([budapest, hannover, bremen, auschwitz, hamburgF, slowakei]);
        const guenther = L.layerGroup([israelG, hamburgG, sanfrancisco, odessa, minsk, kopenhagen]);
        const guggenheim = L.layerGroup([gailingen, stuttgart, schweiz]);
        const horwitz = L.layerGroup([parchim, hamburgHo, israelHo]);
        const heimann = L.layerGroup([haifa, halstenbek, hamburgHe, israelHe]);
        const korn = L.layerGroup([frankfurt, hamburgK]);
        const lahnstein = L.layerGroup([zagreb, przemysl, novisad, bruessel, washington, auschwitzL, jasenovac, hamburgLah, ungarn, jugoslawien, kroatien, polen]);
        const landshut = L.layerGroup([haifaL, jerusalemL, telavivL, kirjatschmona, hamburgLa, london, budapestL, newyork, australien, usaL, tschechoslowakei]);
        const lohse = L.layerGroup([antwerpen, hamburgLo]);
        const lubinska = L.layerGroup([moskauL, buchara, nowosibirsk, hamburgLu]);
        const melamed = L.layerGroup([denver, hamburgM, usaM, israelM]);
        const nasirzadeh = L.layerGroup([teheran, hamburgN, israelN]);
        const parnass = L.layerGroup([hamburgPa, londonP, schwedenP]);
        const pestov = L.layerGroup([ladispoli, luebeck, hamburgP, moskau, sowjetunion, schweden, usa, israelP]);
        const rosenblum = L.layerGroup([jerusalem, israelR, hamburgR]);
        const trebitsch = L.layerGroup([budapestT, bor, oranienburg, ravensbrueck, barth, woebbelin, hamburgT, schwedenT, israelT]);
        const wallenstein = L.layerGroup([wandsbek, nidda, badkissingen, wuerzburgW, giessen, neuss, auschwitzW, theresienstadt, duesseldorf, hamburgWa, jerusalemW, telaviv, haifaW, prag, luebeckW, elmshorn, hamburgWa, israelW]);
        const wittenberg = L.layerGroup([montevideo, hamburgWi, texas, uruguay]);
        const zunik = L.layerGroup([staubing, wuerzburg, bayreuth, kiew, brody, hamburgZ, ukraineZ]);

        const mbAttr = 'Map data &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>';
        const mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        const streets = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });

        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 11,
            attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
        });

        const map = L.map('map', {
            center: [53.550556, 9.993333],
            zoom: 5,
            layers: [osm,
                camargo,
                fenyes,
                guenther,
                guggenheim,
                heimann,
                horwitz,
                korn,
                lahnstein,
                landshut,
                lohse,
                lubinska,
                melamed,
                nasirzadeh,
                parnass,
                pestov,
                rosenblum,
                trebitsch,
                wallenstein,
                wittenberg,
                zunik
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const overlays = {
            'Julia Camargo': camargo,
            'Gabriela Fenyes': fenyes,
            'John Guenther': guenther,
            'Barbara Guggenheim': guggenheim,
            'Daphna Horwitz': horwitz,
            'Michael Heimann': heimann,
            'Eliana Korn': korn,
            'Sonja Lahnstein-Kandel': lahnstein,
            'Judith Landshut': landshut,
            'Ulrich Michael Lohse': lohse,
            'Elsara Lubinska': lubinska,
            'Carmen Melamed': melamed,
            'Mona Nasirzadeh': nasirzadeh,
            'Peggy Parnass': parnass,
            'Elias Pestov': pestov,
            'Avi Rosenblum': rosenblum,
            'Katharina Trebitsch': trebitsch,
            'Abi Wallenstein': wallenstein,
            'Andreas Wittenberg': wittenberg,
            'Igor Zunik': zunik,
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

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
        return "site/map.html.twig";
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
        return array (  1479 => 159,  1471 => 158,  1463 => 157,  1455 => 156,  1451 => 155,  1447 => 154,  1441 => 153,  1435 => 152,  1431 => 151,  1427 => 150,  1423 => 149,  1418 => 147,  1410 => 146,  1402 => 145,  1394 => 144,  1390 => 143,  1386 => 142,  1382 => 141,  1360 => 140,  1338 => 139,  1316 => 138,  1294 => 137,  1272 => 136,  1250 => 135,  1228 => 134,  1206 => 133,  1184 => 132,  1180 => 131,  1175 => 129,  1171 => 128,  1165 => 127,  1159 => 126,  1155 => 125,  1151 => 124,  1145 => 123,  1139 => 122,  1135 => 121,  1131 => 120,  1127 => 119,  1123 => 118,  1119 => 117,  1115 => 116,  1110 => 114,  1106 => 113,  1102 => 112,  1098 => 111,  1094 => 110,  1089 => 108,  1085 => 107,  1081 => 106,  1077 => 105,  1073 => 104,  1067 => 103,  1061 => 102,  1057 => 101,  1053 => 100,  1047 => 99,  1041 => 98,  1035 => 97,  1029 => 96,  1025 => 95,  1021 => 94,  1017 => 93,  1013 => 92,  1005 => 91,  997 => 90,  989 => 89,  985 => 88,  981 => 87,  942 => 85,  904 => 84,  866 => 83,  828 => 82,  790 => 81,  752 => 80,  714 => 79,  676 => 78,  638 => 77,  600 => 76,  562 => 75,  524 => 74,  486 => 73,  448 => 72,  410 => 71,  372 => 70,  334 => 69,  296 => 68,  260 => 67,  255 => 65,  247 => 64,  239 => 63,  231 => 62,  227 => 61,  223 => 60,  219 => 59,  215 => 58,  211 => 57,  207 => 56,  203 => 55,  195 => 54,  187 => 53,  179 => 52,  175 => 51,  171 => 50,  167 => 49,  163 => 48,  159 => 47,  155 => 46,  151 => 45,  145 => 44,  139 => 43,  133 => 42,  129 => 41,  126 => 40,  123 => 36,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Kartenansicht | {{ parent() }} {% endblock %}

{% block body %}

    <div class=\"container mt-5\">
        <h2>Orte und geografische Einordnung</h2>

        <div class=\"row\">
            <div class=\"col-lg-6\">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class=\"col-lg-6\">
                <p>
                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua.
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div id=\"map\" class=\"mt-3\">
            </div>
        </div>
    </div>

    {# Coordinates set to Hamburg 53.550556, 9.993333], 5 #}
    <script>
        {# Leaflet does not allow to add one const to more than one layerGroup
        (see more here: https://stackoverflow.com/questions/66391786/add-marker-to-multiple-layer-groups.
        As workaround, more than one instance of a city is created when necessary #}

        const antwerpen = L.marker([51.220556, 4.399722]).bindPopup('<strong>Antwerpen</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a></a');
        const auschwitz = L.marker([50.026389, 19.203889]).bindPopup('<strong>Auschwitz</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a></a><br/>Sonja Lahnstein-Kandel<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/>');
        const auschwitzW = L.marker([50.026389, 19.203889]).bindPopup('<strong>Auschwitz</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a></a><br/>Sonja Lahnstein-Kandel<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/>');
        const auschwitzL = L.marker([50.026389, 19.203889]).bindPopup('<strong>Auschwitz</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a></a><br/>Sonja Lahnstein-Kandel<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/>');
        const badkissingen = L.marker([50.199444, 10.076389]).bindPopup('<strong>Bad Kissingen</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const barth = L.marker([54.3678, 12.7251]).bindPopup('<strong>Barth</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const bayreuth = L.marker([49.9475, 11.5775]).bindPopup('<strong>Bayreuth</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const bor = L.marker([44.078333, 22.095278]).bindPopup('<strong>Bor</strong><br/> genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const brody = L.marker([50.08, 25.151389]).bindPopup('<strong>Brody</strong><br/> genannt im Gespräch mit<br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const bruessel = L.marker([50.843333, 4.363056]).bindPopup('<strong>Brüssel</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a>');
        const buchara = L.marker([39.766667, 64.433333]).bindPopup('<strong>Buchara</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a>');
        const budapest = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/> <a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const budapestL = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/> <a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const budapestT = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/> <a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const bremen = L.marker([53.075878, 8.807311]).bindPopup('<strong>Bremen</strong><br/> genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a>');
        const denver = L.marker([39.778889, -104.9825]).bindPopup('<strong>Denver</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a>');
        const duesseldorf = L.marker([51.225556, 6.782778]).bindPopup('<strong>Tel Aviv</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const elmshorn = L.marker([53.75323, 9.65294]).bindPopup('<strong>Elsmhorn</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const frankfurt = L.marker([50.110556, 8.682222]).bindPopup('<strong>Hamburg</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a>');
        const gailingen = L.marker([47.696944, 8.755]).bindPopup('<strong>Gailingen</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Barbara Guggenheim</a>');
        const giessen = L.marker([50.587222, 8.669722]).bindPopup('<strong>Gießen</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const haifa = L.marker([32.816667, 34.983333]).bindPopup('<strong>Haifa</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const haifaL = L.marker([32.816667, 34.983333]).bindPopup('<strong>Haifa</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const haifaW = L.marker([32.816667, 34.983333]).bindPopup('<strong>Haifa</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const halstenbek = L.marker([53.6365, 9.8431]).bindPopup('<strong>Halstenbek</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a>');

        const hamburgC = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/>c</a><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgF = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgG = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgHe = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgHo = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgK = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgLa = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgLah = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgLo = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgLu = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgN = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgM = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgR = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgP = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgPa = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgT = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgWi = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgWa = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');
        const hamburgZ = L.marker([53.550556, 9.993333]).bindPopup('<strong>Hamburg</strong><br/> genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/><a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Eliana Korn</a><br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Ulrich Michael Lohse</a><br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a>');

        const hannover = L.marker([52.374444, 9.738611]).bindPopup('<strong>Hannover</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Gabriela Fenyes</a><br/>');
        const jasenovac = L.marker([45.269167, 16.91]).bindPopup('<strong>Jasenovac</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');
        const jerusalem = L.marker([31.779167, 35.223611]).bindPopup('<strong>Jerusalem</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Avi Rosenblum</a>');
        const jerusalemW = L.marker([31.779167, 35.223611]).bindPopup('<strong>Jerusalem</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Avi Rosenblum</a>');
        const jerusalemL = L.marker([31.779167, 35.223611]).bindPopup('<strong>Jerusalem</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Avi Rosenblum</a>');
        const kiew = L.marker([50.45, 30.5]).bindPopup('<strong>Kiew</strong><br/> genannt im Gespräch mit<br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const kirjatschmona = L.marker([33.2075, 35.569722]).bindPopup('<strong>Kirjat Schmona</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a>');
        const kopenhagen = L.marker([55.675706, 12.578745]).bindPopup('<strong>Kopenhagen</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a>');
        const ladispoli = L.marker([41.948056, 12.077778]).bindPopup('<strong>Ladispoli</strong><br/>genannt im Gespräch mit <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/>');
        const london = L.marker([51.50939, -0.11832]).bindPopup('<strong>London</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a>');
        const londonP = L.marker([51.50939, -0.11832]).bindPopup('<strong>London</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a> <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a>');
        const luebeck = L.marker([53.866111, 10.683889]).bindPopup('<strong>Lübeck</strong><br/>genannt in den Gesprächen mit <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/>');
        const luebeckW = L.marker([53.866111, 10.683889]).bindPopup('<strong>Lübeck</strong><br/>genannt in den Gesprächen mit <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/>');
        const minsk = L.marker([53.9, 27.55]).bindPopup('<strong>Minsk</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a>');
        const montevideo = L.marker([-34.866667, -56.166667]).bindPopup('<strong>Montevideo</strong><br/>genannt im Gespräch mit<br/> <a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a><br/>');
        const moskau = L.marker([55.75, 37.616667]).bindPopup('<strong>Moskau</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/>');
        const moskauL = L.marker([55.75, 37.616667]).bindPopup('<strong>Moskau</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/>');
        const neuss = L.marker([51.198611, 6.691389]).bindPopup('<strong>Neuss</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const newyork = L.marker([40.712778, -74.005833]).bindPopup('<strong>New York</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a>');
        const nidda = L.marker([50.412778, 9.009167]).bindPopup('<strong>Nidda</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const nowosibirsk = L.marker([55.033333, 82.916667]).bindPopup('<strong>Nowosibirsk</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Elsara Lubinska</a><br/>');
        const novisad = L.marker([45.255, 19.844722]).bindPopup('<strong>Novi Sad</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');
        const nuernberg = L.marker([49.455556, 11.078611]).bindPopup('<strong>Nürnberg</strong><br/>');
        const odessa = L.marker([46.483333, 30.733333]).bindPopup('<strong>Odessa</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a>');
        const oranienburg = L.marker([52.754444, 13.236944]).bindPopup('<strong>Oranienburg</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const parchim = L.marker([49.455556, 11.078611]).bindPopup('<strong>Parchim</strong><br/>genannt im Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a>');
        const prag = L.marker([50.088611, 14.421389]).bindPopup('<strong>Prag</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const przemysl = L.marker([49.783333, 22.766667]).bindPopup('<strong>Przemyśl</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');

        const ravensbrueck = L.marker([53.191111, 13.168333]).bindPopup('<strong>Ravensbrück</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const sanfrancisco = L.marker([37.7793, -122.4192]).bindPopup('<strong>San Francisco</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a>');
        const staubing = L.marker([48.88714, 11.80745]).bindPopup('<strong>Staubing</strong><br/>genannt im Gespräch mit<br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const stuttgart = L.marker([48.775556, 9.182778]).bindPopup('<strong>Stuttgart</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Barbara Guggenheim</a>');
        const theresienstadt = L.marker([50.513639, 14.164694]).bindPopup('<strong>Theresienstadt</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const teheran = L.marker([35.7, 51.416667]).bindPopup('<strong>Teheran</strong><br/>genannt im Gespräch mit<br/> <a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a><br/>');
        const telaviv = L.marker([32.083333, 34.8]).bindPopup('<strong>Tel Aviv</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const telavivL = L.marker([32.083333, 34.8]).bindPopup('<strong>Tel Aviv</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const wandsbek = L.marker([53.582033, 10.084261]).bindPopup('<strong>Hamburg-Wandsbek</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a>');
        const washington = L.marker([38.895, -77.036667]).bindPopup('<strong>Washington</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');
        const wuerzburg = L.marker([49.79441, 9.92937]).bindPopup('<strong>Würzburg</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const wuerzburgW = L.marker([49.79441, 9.92937]).bindPopup('<strong>Würzburg</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/><a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const woebbelin = L.marker([53.399444, 11.503333]).bindPopup('<strong>Wöbbelin</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const zagreb = L.marker([45.810278, 15.978056]).bindPopup('<strong>Zagreb</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');

        const australien = L.marker([-25, 135]).bindPopup('<strong>Australien</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a>');
        const israelG = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const israelHo = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const israelHe = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const israelM = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const israelN = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const israelP = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const israelR = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const israelT = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const israelW = L.marker([31.608056, 34.818056]).bindPopup('<strong>Israel</strong><br/> genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">John Guenther</a><br/> <a href=\"{{ path('app_map') }}\">Michael Heimann</a><br/><a href=\"{{ path('app_map') }}\">Daphna Horwitz</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a><br/><a href=\"{{ path('app_map') }}\">Mona Nasirzadeh</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/><a href=\"{{ path('app_map') }}\">Avi Rosenblum</a><br/><a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a><br/><a href=\"{{ path('app_map') }}\">Abi Wallenstein</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const jugoslawien = L.marker([44.533056, 19.225]).bindPopup('<strong>Jugoslawien</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');
        const kroatien = L.marker([45.25, 15.466667]).bindPopup('<strong>Kroatien</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');
        const polen = L.marker([52.146944, 19.378056]).bindPopup('<strong>Polen</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');
        const schweden = L.marker([61.316667, 14.833333]).bindPopup('<strong>Schweden</strong><br/>genannt in den Gesprächen mit <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/> <a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const schwedenT = L.marker([61.316667, 14.833333]).bindPopup('<strong>Schweden</strong><br/>genannt in den Gesprächen mit <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/> <a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const schwedenP = L.marker([61.316667, 14.833333]).bindPopup('<strong>Schweden<br/>genannt in den Gesprächen mit <br/><a href=\"{{ path('app_map') }}\">Peggy Parnass</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/> <a href=\"{{ path('app_map') }}\">Katharina Trebitsch</a>');
        const schweiz = L.marker([46.8, 8.233333]).bindPopup('<strong>Schweiz</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Barbara Guggenheim</a>');
        const slowakei = L.marker([48.658056, 19.558333]).bindPopup('<strong>Slowakei</strong><br/>genannt im Gespräch mit<br/> Gabriele Fenyes');
        const sowjetunion = L.marker([62.464444, 89.002222]).bindPopup('<strong>Sowjetunion</strong><br/>genannt im Gespräch mit <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/>');
        const texas = L.marker([31.666667, -99.45]).bindPopup('<strong>Texas</strong><br/>genannt im Gespräch mit<br/> <a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a><br/>');
        const tschechoslowakei = L.marker([48.895556, 18.041389]).bindPopup('<strong>Tschechoslowakei</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a>');
        const ukraineC = L.marker([49.8, 30.833333]).bindPopup('<strong>Ukraine</strong><br/>genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const ukraineZ = L.marker([49.8, 30.833333]).bindPopup('<strong>Ukraine </strong><br/>genannt in den Gesprächen mit<br/> <a href=\"{{ path('app_map') }}\">Julia Camargo</a><br/> <a href=\"{{ path('app_map') }}\">Igor Zunik</a>');
        const ungarn = L.marker([47.498056, 19.04]).bindPopup('<strong>Ungarn</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Sonja Lahnstein-Kandel</a><br/>');
        const uruguay = L.marker([-32.733333, -56.65]).bindPopup('<strong>Uruguay</strong><br/>genannt im Gespräch mit<br/> <a href=\"{{ path('app_map') }}\">Andreas Wittenberg</a><br/>');
        const usa = L.marker([40, -100]).bindPopup('<strong>USA</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/>');
        const usaL = L.marker([40, -100]).bindPopup('<strong>USA</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/>');
        const usaM = L.marker([40, -100]).bindPopup('<strong>USA</strong><br/>genannt in den Gesprächen mit<br/><a href=\"{{ path('app_map') }}\">Judith Landshut</a><br/><a href=\"{{ path('app_map') }}\">Carmen Melamed</a> <br/><a href=\"{{ path('app_map') }}\">Elias Pestov</a><br/>');
        const usbekistan = L.marker([41.666667, 64.066667]).bindPopup('<strong>Usbekistan</strong><br/>genannt im Gespräch mit<br/><a href=\"{{ path('app_map') }}\">Julia Camargo</a>');


        const camargo = L.layerGroup([nuernberg, hamburgC, usbekistan, ukraineC]);
        const fenyes = L.layerGroup([budapest, hannover, bremen, auschwitz, hamburgF, slowakei]);
        const guenther = L.layerGroup([israelG, hamburgG, sanfrancisco, odessa, minsk, kopenhagen]);
        const guggenheim = L.layerGroup([gailingen, stuttgart, schweiz]);
        const horwitz = L.layerGroup([parchim, hamburgHo, israelHo]);
        const heimann = L.layerGroup([haifa, halstenbek, hamburgHe, israelHe]);
        const korn = L.layerGroup([frankfurt, hamburgK]);
        const lahnstein = L.layerGroup([zagreb, przemysl, novisad, bruessel, washington, auschwitzL, jasenovac, hamburgLah, ungarn, jugoslawien, kroatien, polen]);
        const landshut = L.layerGroup([haifaL, jerusalemL, telavivL, kirjatschmona, hamburgLa, london, budapestL, newyork, australien, usaL, tschechoslowakei]);
        const lohse = L.layerGroup([antwerpen, hamburgLo]);
        const lubinska = L.layerGroup([moskauL, buchara, nowosibirsk, hamburgLu]);
        const melamed = L.layerGroup([denver, hamburgM, usaM, israelM]);
        const nasirzadeh = L.layerGroup([teheran, hamburgN, israelN]);
        const parnass = L.layerGroup([hamburgPa, londonP, schwedenP]);
        const pestov = L.layerGroup([ladispoli, luebeck, hamburgP, moskau, sowjetunion, schweden, usa, israelP]);
        const rosenblum = L.layerGroup([jerusalem, israelR, hamburgR]);
        const trebitsch = L.layerGroup([budapestT, bor, oranienburg, ravensbrueck, barth, woebbelin, hamburgT, schwedenT, israelT]);
        const wallenstein = L.layerGroup([wandsbek, nidda, badkissingen, wuerzburgW, giessen, neuss, auschwitzW, theresienstadt, duesseldorf, hamburgWa, jerusalemW, telaviv, haifaW, prag, luebeckW, elmshorn, hamburgWa, israelW]);
        const wittenberg = L.layerGroup([montevideo, hamburgWi, texas, uruguay]);
        const zunik = L.layerGroup([staubing, wuerzburg, bayreuth, kiew, brody, hamburgZ, ukraineZ]);

        const mbAttr = 'Map data &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors, Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>';
        const mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        const streets = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });

        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 11,
            attribution: '&copy; <a href=\"http://www.openstreetmap.org/copyright\">OpenStreetMap</a>'
        });

        const map = L.map('map', {
            center: [53.550556, 9.993333],
            zoom: 5,
            layers: [osm,
                camargo,
                fenyes,
                guenther,
                guggenheim,
                heimann,
                horwitz,
                korn,
                lahnstein,
                landshut,
                lohse,
                lubinska,
                melamed,
                nasirzadeh,
                parnass,
                pestov,
                rosenblum,
                trebitsch,
                wallenstein,
                wittenberg,
                zunik
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const overlays = {
            'Julia Camargo': camargo,
            'Gabriela Fenyes': fenyes,
            'John Guenther': guenther,
            'Barbara Guggenheim': guggenheim,
            'Daphna Horwitz': horwitz,
            'Michael Heimann': heimann,
            'Eliana Korn': korn,
            'Sonja Lahnstein-Kandel': lahnstein,
            'Judith Landshut': landshut,
            'Ulrich Michael Lohse': lohse,
            'Elsara Lubinska': lubinska,
            'Carmen Melamed': melamed,
            'Mona Nasirzadeh': nasirzadeh,
            'Peggy Parnass': parnass,
            'Elias Pestov': pestov,
            'Avi Rosenblum': rosenblum,
            'Katharina Trebitsch': trebitsch,
            'Abi Wallenstein': wallenstein,
            'Andreas Wittenberg': wittenberg,
            'Igor Zunik': zunik,
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

{% endblock %}", "site/map.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/site/map.html.twig");
    }
}
