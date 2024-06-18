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

/* collection/home.html.twig */
class __TwigTemplate_71f8022025c2c044dc0ef74ed8744999 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "collection/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "collection/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "collection/home.html.twig", 1);
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

        yield " ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " | Übersicht Interviews ";
        
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

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camargo");
        yield "\" title=\"Interview mit Julia Camargo ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Camargo.png"), "html", null, true);
        yield "\"
                             alt=\"Foto von Julia Camargo aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camargo");
        yield "\" title=\"Interview mit Julia Camargo ansehen\">
                            Julia Camargo
                        </a>
                        </h3>
                        <p>Julia Camargo kam 1995 im Rahmen des Kontingentflüchtlingsgesetzes aus der Ukraine nach
                            Deutschland. Die für den gemeinsam mit dem Jüdischen Museum Berlin ausgerichteten ...
                            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camargo");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fenyes");
        yield "\" title=\"Interview mit Gabriela Fenyes ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Fenyes.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Gabriela Fenyes aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fenyes");
        yield "\" title=\"Interview mit Gabriela Fenyes ansehen\">
                            Gabriela Fenyes
                        </a>
                        </h3>
                        <p>Gabriela Fenyes war die erste Frau im Vorstand der Jüdischen Gemeinde Hamburg. In dem
                            Interviewausschnitt berichtet sie über ihre Gemeindearbeit und das jüdische Leben in Hamburg
                            ...
                            <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fenyes");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guenther");
        yield "\" title=\"Interview mit John Guenther ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Guenther_200.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von John Guenther aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guenther");
        yield "\" title=\"Interview mit John Guenther ansehen\">
                                John Guenther
                        </a>
                        </h3>
                        <p>John Günther wurde 1935 in Stuttgart geboren, wo er an der Akademie der Bildenden Künste
                            studierte
                            und 1961 seinen aus einer orthodox-jüdischen Familie stammenden ...
                            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guenther");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guggenheim");
        yield "\" title=\"Interview mit Barbara Guggenheim ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Guggenheim.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Barbara Guggenheim aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guggenheim");
        yield "\" title=\"Interview mit Barbara Guggenheim ansehen\">
                                Barbara
                                Guggenheim
                        </a>
                        </h3>
                        <p>Barbara Guggenheim wurde 1957 in Zürich geboren und ist ehemalige Literaturagentin und
                            Gründungsmitglied des Jüdischen Salons am Grindel in Hamburg. In diesem ...
                            <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guggenheim");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_heimann");
        yield "\" title=\"Interview mit Michael Heimann ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Heimann.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Michael Heimann aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_heimann");
        yield "\" title=\"Interview mit Michael Heimann ansehen\">
                            Michael
                                Heimann</a>
                        </h3>
                        <p>Michael Heimanns Mutter stammt aus Wien, sein Vater aus Breslau. Beide konnten während der
                            Zeit des
                            Nationalsozialismus mit Kindertransporten nach Schweden gelangen ... <a
                                    href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_heimann");
        yield "\"
                                    title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p></div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_horwitz");
        yield "\" title=\"Interview mit Daphna Horwitz ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Horwitz.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Daphna Horwitz aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_horwitz");
        yield "\" title=\"Interview mit Daphna Horwitz ansehen\">
                            Daphna
                                Horwitz</a>
                        </h3>
                        <p>1935 flohen die Großeltern von Daphna Horwitz, Eva und Sam Horwitz, von Hamburg aus vor den
                            Nationalsozialisten nach Palästina. Dort hatte der Großvater bereits 1925 ...
                            <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_horwitz");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_korn");
        yield "\" title=\"Interview mit Eliana Korn ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Korn.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Eliana Korn aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_korn");
        yield "\" title=\"Interview mit Eliana Korn ansehen\">
                            Eliana Korn
                        </a>
                        </h3>
                        <p>Eliana Korn wurde in Frankfurt am Main geboren, wo sie einen jüdischen Kindergarten sowie
                            anschließend eine jüdische Schule besuchte und Mitglied der Jüdischen Gemeinde ...
                            <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_korn");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lahnstein");
        yield "\" title=\"Interview mit Sonja Lahnstein-Kandel ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Lahnstein.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Sonja Lahnstein-Kandel aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lahnstein");
        yield "\" title=\"Interview mit Sonja Lahnstein-Kandel ansehen\">
                                Sonja
                                Lahnstein-Kandel</a>
                        </h3>
                        <p>Sonja Lahnstein-Kandel wurde 1950 als Sonja Kandel in Zagreb, Jugoslawien, geboren. Mt 16
                            Jahren kam
                            sie gemeinsam mit ihren Eltern nach Hamburg, wo ihr Vater ...
                            <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lahnstein");
        yield "\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landshut");
        yield "\" title=\"Interview mit Judith Landshut ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Landshut.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Judith Landshut aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landshut");
        yield "\" title=\"Interview mit Judith Landshut ansehen\">
                            Judith
                                Landshut</a>
                        </h3>
                        <p>Judith Landshut wurde 1950 in der Tschechoslowakei geboren. 1969 floh sie, gemeinsam mit
                            ihrer
                            Schwester und ohne ihre Eltern, nach Israel, wo sie zunächst in einem Kibbuz
                            ...
                            <a href=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landshut");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lohse");
        yield "\" title=\"Interview mit Ulrich Michael Lohse ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Lohse.png"), "html", null, true);
        yield "\"
                             alt=\"Foto von Michale Lohse aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lohse");
        yield "\" title=\"Interview mit Ulrich Michael Lohse ansehen\">
                            Ulrich
                                Michael Lohse</a>
                        </h3>
                        <p>Der in Hamburg geborene Ulrich Michael Lohse erzählt über seine jüdische Familienherkunft,
                            seine Hinwendung zum jüdischen Glauben und die Rolle der Religion
                            ...
                            <a href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lohse");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lubinska");
        yield "\" title=\"Interview mit Elsara Lubinska ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Lubinska.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Elsara Lubinska aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lubinska");
        yield "\" title=\"Interview mit Elsara Lubinska ansehen\">
                            Elsara
                                Lubinska</a>
                        </h3>
                        <p>Elsara Lubinksa wurde 1945 in Buchara, Usbekistan, geboren und wuchs in der Ukraine auf. Nach
                            einem
                            Studium in Nowosibirsk wohnte sie in Moskau, von wo aus sie ...
                            <a href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lubinska");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 240
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_melamed");
        yield "\" title=\"Interview mit Carmen Melamed ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Melamed.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Carmen Melamed aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_melamed");
        yield "\" title=\"Interview mit Carmen Melamed ansehen\">
                            Carmen
                                Melamed</a>
                        </h3>
                        <p>Carmen Melamed wurde 1937 als Tochter einer jüdischen Mutter und eines nicht-jüdischen Vaters
                            in Hamburg geboren. Nach Abschluss der Schule begann ihre langjährige ...
                            <a href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_melamed");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nasirzadeh");
        yield "\" title=\"Interview mit Mona Nasirzadeh ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Nasirzadeh.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Mona Nasirzadeh aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nasirzadeh");
        yield "\" title=\"Interview mit Mona Nasirzadeh ansehen\">
                            Mona
                                Nasirzadeh</a>
                        </h3>
                        <p>Anhand einer Fotografie ihrer Eltern, aufgenommen am Hochzeitstag, gibt Mona Nasirzadeh, 1975
                            in Teheran geboren, Einblicke in die Geschichte ihrer Familie, die 1979 aus dem Iran ...
                            <a href=\"";
        // line 275
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_nasirzadeh");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parnass");
        yield "\" title=\"Interview mit Peggy Parnass ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Parnass.png"), "html", null, true);
        yield "\"
                             alt=\"Foto von Peggy Parnass aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 288
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parnass");
        yield "\" title=\"Interview mit Peggy Parnass ansehen\">
                            Peggy
                                Parnass</a>
                        </h3>
                        <p>Peggy Parnass wurde 1927 in Hamburg geboren. Als Zwölfjährige konnten sie und ihr jüngerer
                            Bruder
                            mit einem Kindertransport nach Stockholm gebracht ...
                            <a href=\"";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parnass");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 302
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pestov");
        yield "\" title=\"Interview mit Elias Pestov ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Pestov.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Elias Pestov aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 308
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pestov");
        yield "\" title=\"Interview mit Elias Pestov ansehen\">
                            Elias
                                Pestov
                        </a>
                        </h3>
                        <p> Elias Pestov wurde in Hamburg geboren und besuchte das Joseph-Carlebach-Bildungshaus, das
                            2007 als
                            erste jüdische Schule nach dem Zweiten Weltkrieg eröffnet wurde ...
                            <a href=\"";
        // line 316
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pestov");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 326
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rosenblum");
        yield "\" title=\"Interview mit Avi Rosenblum ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Rosenblum.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Avi Rosenblum aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 332
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rosenblum");
        yield "\" title=\"Interview mit Avi Rosenblum ansehen\">
                            Avi
                                Rosenblum</a>
                        </h3>
                        <p>Persönliche und politische Gründe führten Avi Rosenblum vor 15 Jahren von Haifa nach Hamburg.
                            Hier
                            engagiert er sich im soziokulturellen Bereich und versucht
                            ...
                            <a href=\"";
        // line 340
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rosenblum");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 348
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trebitsch");
        yield "\" title=\"Interview mit Katharina Trebitsch ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Trebitsch.png"), "html", null, true);
        yield "\"
                             alt=\"Foto von Katharina Trebitsch aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 354
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trebitsch");
        yield "\" title=\"Interview mit Katharina Trebitsch ansehen\">
                                Katharina Trebitsch
                        </a>
                        </h3>
                        <p>Ein Gebetsbuch der Großmutter, eine Fotografie ihres Großvaters sowie ein Holzschiff ihres
                            Vaters, der Filmproduzent Gyula Trebitsch, sind die für die 1949 geborene Fernsehproduzentin
                            ...
                            <a href=\"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trebitsch");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 368
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallenstein");
        yield "\" title=\"Interview mit Abi Wallenstein ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Wallenstein.png"), "html", null, true);
        yield "\"
                             alt=\"Foto von Abi Wallenstein aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 374
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallenstein");
        yield "\" title=\"Interview mit Abi Wallenstein ansehen\">
                            Abi
                                Wallenstein</a>
                        </h3>
                        <p>Abi Wallenstein wurde 1945 in Jerusalem geboren. Mit 13 Jahren zogen seine Eltern und er nach
                            Neuss, wo der Vater vor dem Krieg eine Praxis besessen hatte und dessen Räumlichkeiten ...
                            <a href=\"";
        // line 380
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallenstein");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 390
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wittenberg");
        yield "\" title=\"Interview mit Andreas Wittenberg ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Wittenberg.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Andreas Wittenberg aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 396
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wittenberg");
        yield "\" title=\"Interview mit Andreas Wittenberg ansehen\">
                                Andreas
                                Wittenberg</a>
                        </h3>
                        <p> Andreas Wittenberg wurde 1955 in Hamburg geboren. Seine Eltern, Steffi und Kurt Wittenberg,
                            hatten
                            sich als jüdische Geflüchtete in Montevideo kennengelernt ...
                            <a href=\"";
        // line 403
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wittenberg");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"";
        // line 410
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zunik");
        yield "\" title=\"Interview mit Igor Zunik ansehen\">
                        <img class=\"img-fluid\" src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/Zunik.jpg"), "html", null, true);
        yield "\"
                             alt=\"Foto von Igor Zunik aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"";
        // line 416
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zunik");
        yield "\" title=\"Interview mit Igor Zunik ansehen\">
                            Igor Zunik
                        </a>
                        </h3>
                        <p>Igor Zunik, 1985 in Kiew geboren, kam als Neunjähriger gemeinsam mit seinen Eltern und seiner
                            Großmutter im Rahmen des Kontingentflüchtlingsgesetzes aus der heutigen Ukraine nach ...
                            <a href=\"";
        // line 422
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zunik");
        yield "\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
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
        return "collection/home.html.twig";
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
        return array (  747 => 422,  738 => 416,  730 => 411,  726 => 410,  716 => 403,  706 => 396,  698 => 391,  694 => 390,  681 => 380,  672 => 374,  664 => 369,  660 => 368,  650 => 361,  640 => 354,  632 => 349,  628 => 348,  617 => 340,  606 => 332,  598 => 327,  594 => 326,  581 => 316,  570 => 308,  562 => 303,  558 => 302,  548 => 295,  538 => 288,  530 => 283,  526 => 282,  516 => 275,  507 => 269,  499 => 264,  495 => 263,  481 => 252,  472 => 246,  464 => 241,  460 => 240,  450 => 233,  440 => 226,  432 => 221,  428 => 220,  418 => 213,  408 => 206,  400 => 201,  396 => 200,  382 => 189,  371 => 181,  363 => 176,  359 => 175,  349 => 168,  339 => 161,  331 => 156,  327 => 155,  317 => 148,  308 => 142,  300 => 137,  296 => 136,  283 => 126,  274 => 120,  266 => 115,  262 => 114,  252 => 107,  242 => 100,  234 => 95,  230 => 94,  220 => 87,  210 => 80,  202 => 75,  198 => 74,  185 => 64,  175 => 57,  167 => 52,  163 => 51,  153 => 44,  143 => 37,  135 => 32,  131 => 31,  121 => 24,  112 => 18,  104 => 13,  100 => 12,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ parent() }} | Übersicht Interviews {% endblock %}

{% block body %}

    <div class=\"container g-4 py-5\">

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_camargo') }}\" title=\"Interview mit Julia Camargo ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Camargo.png') }}\"
                             alt=\"Foto von Julia Camargo aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_camargo') }}\" title=\"Interview mit Julia Camargo ansehen\">
                            Julia Camargo
                        </a>
                        </h3>
                        <p>Julia Camargo kam 1995 im Rahmen des Kontingentflüchtlingsgesetzes aus der Ukraine nach
                            Deutschland. Die für den gemeinsam mit dem Jüdischen Museum Berlin ausgerichteten ...
                            <a href=\"{{ path('app_camargo') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_fenyes') }}\" title=\"Interview mit Gabriela Fenyes ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Fenyes.jpg') }}\"
                             alt=\"Foto von Gabriela Fenyes aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_fenyes') }}\" title=\"Interview mit Gabriela Fenyes ansehen\">
                            Gabriela Fenyes
                        </a>
                        </h3>
                        <p>Gabriela Fenyes war die erste Frau im Vorstand der Jüdischen Gemeinde Hamburg. In dem
                            Interviewausschnitt berichtet sie über ihre Gemeindearbeit und das jüdische Leben in Hamburg
                            ...
                            <a href=\"{{ path('app_fenyes') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_guenther') }}\" title=\"Interview mit John Guenther ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Guenther_200.jpg') }}\"
                             alt=\"Foto von John Guenther aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_guenther') }}\" title=\"Interview mit John Guenther ansehen\">
                                John Guenther
                        </a>
                        </h3>
                        <p>John Günther wurde 1935 in Stuttgart geboren, wo er an der Akademie der Bildenden Künste
                            studierte
                            und 1961 seinen aus einer orthodox-jüdischen Familie stammenden ...
                            <a href=\"{{ path('app_guenther') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_guggenheim') }}\" title=\"Interview mit Barbara Guggenheim ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Guggenheim.jpg') }}\"
                             alt=\"Foto von Barbara Guggenheim aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_guggenheim') }}\" title=\"Interview mit Barbara Guggenheim ansehen\">
                                Barbara
                                Guggenheim
                        </a>
                        </h3>
                        <p>Barbara Guggenheim wurde 1957 in Zürich geboren und ist ehemalige Literaturagentin und
                            Gründungsmitglied des Jüdischen Salons am Grindel in Hamburg. In diesem ...
                            <a href=\"{{ path('app_guggenheim') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_heimann') }}\" title=\"Interview mit Michael Heimann ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Heimann.jpg') }}\"
                             alt=\"Foto von Michael Heimann aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_heimann') }}\" title=\"Interview mit Michael Heimann ansehen\">
                            Michael
                                Heimann</a>
                        </h3>
                        <p>Michael Heimanns Mutter stammt aus Wien, sein Vater aus Breslau. Beide konnten während der
                            Zeit des
                            Nationalsozialismus mit Kindertransporten nach Schweden gelangen ... <a
                                    href=\"{{ path('app_heimann') }}\"
                                    title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p></div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_horwitz') }}\" title=\"Interview mit Daphna Horwitz ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Horwitz.jpg') }}\"
                             alt=\"Foto von Daphna Horwitz aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_horwitz') }}\" title=\"Interview mit Daphna Horwitz ansehen\">
                            Daphna
                                Horwitz</a>
                        </h3>
                        <p>1935 flohen die Großeltern von Daphna Horwitz, Eva und Sam Horwitz, von Hamburg aus vor den
                            Nationalsozialisten nach Palästina. Dort hatte der Großvater bereits 1925 ...
                            <a href=\"{{ path('app_horwitz') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_korn') }}\" title=\"Interview mit Eliana Korn ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Korn.jpg') }}\"
                             alt=\"Foto von Eliana Korn aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_korn') }}\" title=\"Interview mit Eliana Korn ansehen\">
                            Eliana Korn
                        </a>
                        </h3>
                        <p>Eliana Korn wurde in Frankfurt am Main geboren, wo sie einen jüdischen Kindergarten sowie
                            anschließend eine jüdische Schule besuchte und Mitglied der Jüdischen Gemeinde ...
                            <a href=\"{{ path('app_korn') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_lahnstein') }}\" title=\"Interview mit Sonja Lahnstein-Kandel ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Lahnstein.jpg') }}\"
                             alt=\"Foto von Sonja Lahnstein-Kandel aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_lahnstein') }}\" title=\"Interview mit Sonja Lahnstein-Kandel ansehen\">
                                Sonja
                                Lahnstein-Kandel</a>
                        </h3>
                        <p>Sonja Lahnstein-Kandel wurde 1950 als Sonja Kandel in Zagreb, Jugoslawien, geboren. Mt 16
                            Jahren kam
                            sie gemeinsam mit ihren Eltern nach Hamburg, wo ihr Vater ...
                            <a href=\"{{ path('app_lahnstein') }}\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_landshut') }}\" title=\"Interview mit Judith Landshut ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Landshut.jpg') }}\"
                             alt=\"Foto von Judith Landshut aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_landshut') }}\" title=\"Interview mit Judith Landshut ansehen\">
                            Judith
                                Landshut</a>
                        </h3>
                        <p>Judith Landshut wurde 1950 in der Tschechoslowakei geboren. 1969 floh sie, gemeinsam mit
                            ihrer
                            Schwester und ohne ihre Eltern, nach Israel, wo sie zunächst in einem Kibbuz
                            ...
                            <a href=\"{{ path('app_landshut') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_lohse') }}\" title=\"Interview mit Ulrich Michael Lohse ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Lohse.png') }}\"
                             alt=\"Foto von Michale Lohse aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_lohse') }}\" title=\"Interview mit Ulrich Michael Lohse ansehen\">
                            Ulrich
                                Michael Lohse</a>
                        </h3>
                        <p>Der in Hamburg geborene Ulrich Michael Lohse erzählt über seine jüdische Familienherkunft,
                            seine Hinwendung zum jüdischen Glauben und die Rolle der Religion
                            ...
                            <a href=\"{{ path('app_lohse') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_lubinska') }}\" title=\"Interview mit Elsara Lubinska ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Lubinska.jpg') }}\"
                             alt=\"Foto von Elsara Lubinska aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_lubinska') }}\" title=\"Interview mit Elsara Lubinska ansehen\">
                            Elsara
                                Lubinska</a>
                        </h3>
                        <p>Elsara Lubinksa wurde 1945 in Buchara, Usbekistan, geboren und wuchs in der Ukraine auf. Nach
                            einem
                            Studium in Nowosibirsk wohnte sie in Moskau, von wo aus sie ...
                            <a href=\"{{ path('app_lubinska') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_melamed') }}\" title=\"Interview mit Carmen Melamed ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Melamed.jpg') }}\"
                             alt=\"Foto von Carmen Melamed aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_melamed') }}\" title=\"Interview mit Carmen Melamed ansehen\">
                            Carmen
                                Melamed</a>
                        </h3>
                        <p>Carmen Melamed wurde 1937 als Tochter einer jüdischen Mutter und eines nicht-jüdischen Vaters
                            in Hamburg geboren. Nach Abschluss der Schule begann ihre langjährige ...
                            <a href=\"{{ path('app_melamed') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_nasirzadeh') }}\" title=\"Interview mit Mona Nasirzadeh ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Nasirzadeh.jpg') }}\"
                             alt=\"Foto von Mona Nasirzadeh aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_nasirzadeh') }}\" title=\"Interview mit Mona Nasirzadeh ansehen\">
                            Mona
                                Nasirzadeh</a>
                        </h3>
                        <p>Anhand einer Fotografie ihrer Eltern, aufgenommen am Hochzeitstag, gibt Mona Nasirzadeh, 1975
                            in Teheran geboren, Einblicke in die Geschichte ihrer Familie, die 1979 aus dem Iran ...
                            <a href=\"{{ path('app_nasirzadeh') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_parnass') }}\" title=\"Interview mit Peggy Parnass ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Parnass.png') }}\"
                             alt=\"Foto von Peggy Parnass aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_parnass') }}\" title=\"Interview mit Peggy Parnass ansehen\">
                            Peggy
                                Parnass</a>
                        </h3>
                        <p>Peggy Parnass wurde 1927 in Hamburg geboren. Als Zwölfjährige konnten sie und ihr jüngerer
                            Bruder
                            mit einem Kindertransport nach Stockholm gebracht ...
                            <a href=\"{{ path('app_parnass') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_pestov') }}\" title=\"Interview mit Elias Pestov ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Pestov.jpg') }}\"
                             alt=\"Foto von Elias Pestov aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_pestov') }}\" title=\"Interview mit Elias Pestov ansehen\">
                            Elias
                                Pestov
                        </a>
                        </h3>
                        <p> Elias Pestov wurde in Hamburg geboren und besuchte das Joseph-Carlebach-Bildungshaus, das
                            2007 als
                            erste jüdische Schule nach dem Zweiten Weltkrieg eröffnet wurde ...
                            <a href=\"{{ path('app_pestov') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_rosenblum') }}\" title=\"Interview mit Avi Rosenblum ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Rosenblum.jpg') }}\"
                             alt=\"Foto von Avi Rosenblum aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_rosenblum') }}\" title=\"Interview mit Avi Rosenblum ansehen\">
                            Avi
                                Rosenblum</a>
                        </h3>
                        <p>Persönliche und politische Gründe führten Avi Rosenblum vor 15 Jahren von Haifa nach Hamburg.
                            Hier
                            engagiert er sich im soziokulturellen Bereich und versucht
                            ...
                            <a href=\"{{ path('app_rosenblum') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_trebitsch') }}\" title=\"Interview mit Katharina Trebitsch ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Trebitsch.png') }}\"
                             alt=\"Foto von Katharina Trebitsch aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_trebitsch') }}\" title=\"Interview mit Katharina Trebitsch ansehen\">
                                Katharina Trebitsch
                        </a>
                        </h3>
                        <p>Ein Gebetsbuch der Großmutter, eine Fotografie ihres Großvaters sowie ein Holzschiff ihres
                            Vaters, der Filmproduzent Gyula Trebitsch, sind die für die 1949 geborene Fernsehproduzentin
                            ...
                            <a href=\"{{ path('app_trebitsch') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_wallenstein') }}\" title=\"Interview mit Abi Wallenstein ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Wallenstein.png') }}\"
                             alt=\"Foto von Abi Wallenstein aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_wallenstein') }}\" title=\"Interview mit Abi Wallenstein ansehen\">
                            Abi
                                Wallenstein</a>
                        </h3>
                        <p>Abi Wallenstein wurde 1945 in Jerusalem geboren. Mit 13 Jahren zogen seine Eltern und er nach
                            Neuss, wo der Vater vor dem Krieg eine Praxis besessen hatte und dessen Räumlichkeiten ...
                            <a href=\"{{ path('app_wallenstein') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-3\">
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_wittenberg') }}\" title=\"Interview mit Andreas Wittenberg ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Wittenberg.jpg') }}\"
                             alt=\"Foto von Andreas Wittenberg aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_wittenberg') }}\" title=\"Interview mit Andreas Wittenberg ansehen\">
                                Andreas
                                Wittenberg</a>
                        </h3>
                        <p> Andreas Wittenberg wurde 1955 in Hamburg geboren. Seine Eltern, Steffi und Kurt Wittenberg,
                            hatten
                            sich als jüdische Geflüchtete in Montevideo kennengelernt ...
                            <a href=\"{{ path('app_wittenberg') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card shadow-sm mt-5\">
                    <a href=\"{{ path('app_zunik') }}\" title=\"Interview mit Igor Zunik ansehen\">
                        <img class=\"img-fluid\" src=\"{{ asset('images/profile/Zunik.jpg') }}\"
                             alt=\"Foto von Igor Zunik aus dem Gespräch\">
                    </a>
                    <div class=\"card-body\">
                        <h3>
                        <a href=\"{{ path('app_zunik') }}\" title=\"Interview mit Igor Zunik ansehen\">
                            Igor Zunik
                        </a>
                        </h3>
                        <p>Igor Zunik, 1985 in Kiew geboren, kam als Neunjähriger gemeinsam mit seinen Eltern und seiner
                            Großmutter im Rahmen des Kontingentflüchtlingsgesetzes aus der heutigen Ukraine nach ...
                            <a href=\"{{ path('app_zunik') }}\" title=\"Weiterlesen und Interview ansehen\">[mehr]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "collection/home.html.twig", "/Users/neovesky/CodingFriends/holocaust-ungarn/templates/collection/home.html.twig");
    }
}
