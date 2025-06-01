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

/* biographies/blum.en.html.twig */
class __TwigTemplate_c61bf2e91e6f59fc6110ca13d87ff093 extends Template
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
        return "base-map.en.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/blum.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/blum.en.html.twig"));

        $this->parent = $this->load("base-map.en.html.twig", 1);
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

        yield " Individual biography Yehuda Blum | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    

    <div class=\"container g-4 py-5 study\">
        <h2>Yehuda Blum and the Kasztner Group</h2>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <h3>About the person</h3>
                <p class=\"abstract\">
                    Yehuda Blum was born on October 2, 1931 in Bratislava, then part of Czechoslovakia. He was the eldest of 
                    three children. He had a brother (Amram Blum) and a sister (Leah Blum). Yehuda Blum’s father Joseph Blum 
                    came to Bratislava from eastern Slovakia and became the director of the Jewish Credit Bank there. Blum’s 
                    mother Seldie Blum (née Dux) was born in Transylvania and moved to Bratislava with her husband after their 
                    marriage in 1930.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Persecution of Jews in Slovakia</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In 1938, the activities of the German minority in Bratislava became more militant. On November 9, 1938, the 
                    so-called November Pogrom (Reichspogromnacht) followed, during which Jewish stores, synagogues and schools in 
                    the city were destroyed. This took place from November 9 to 10, 1938, when the Nazi German Reich ordered 
                    targeted acts of violence against the Jewish population. Slovakia was dependent on the German Reich during the 
                    Second World War; the president was the Catholic priest Jozef Tiso, who cooperated with Germany and advocated 
                    similar ideological approaches. The regime was supported by the Slovakian People’s Party Hlinka-Guard, founded 
                    in 1913 by Andrej Hlinka. The party propagated a conservative, Catholic nationalism. Starting in 1938, the 
                    persecution and disenfranchisement of the country’s approximately 80,000 Jews increasingly became a core element 
                    of the party’s political agenda.
                </p>
                <p>
                    From 1942 to 1944, about two thirds of the Jewish population in Slovakia were deported (some 58,000 Jews), 
                    with a further 13,000 Jews deported in the fall of 1944.
                </p>
                <p>
                    Yehuda Blum’s personal memories were recorded in a contemporary witness interview with the Bergen-Belsen 
                    Memorial on June 19, 2003.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup> 
                    In the interview, he recalled that in 1939, one year after the November pogroms, the Blum family was attacked 
                    at night by the Slovakian Hlinka Guards. As a result and in view of the rapidly increasing anti-Semitic 
                    restrictions in Bratislava, Blum’s father decided that the family could no longer live in Bratislava.
                </p>
                <p>
                    The family moved to Budapest in Hungary in 1940. After the occupation of Hungary by German troops in 
                    March 1944, the living conditions of the Jewish population in Hungary changed abruptly. In the interview, 
                    Yehuda Blum described how his school was closed the very next day and everyday discrimination increased.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/geschwister-blum.jpg"), "html", null, true);
        yield "\"
                     alt=\"Yehuda Blum with his siblings Amram and Leah\"/>
                <p class=\"caption\">
                    Yehuda Blum (right) with his siblings Amram and Leah, spring 1941. Bergen-Belsen Memorial Archive, 
                    privately owned by Yehuda Blum
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; More about Hungary in the Second World War</h4>
                    <p>
                        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Text on historical context\">
                            &#10149; Historical context
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The Kasztner Group</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In June 1944, Jewish organizations had their first negotiations with the Nazis about a transport of selected 
                    Hungarian Jews being sent to a neutral country to save them from deportation to Auschwitz. Reszö Kasztner 
                    negotiated with the SS as the representative of the Jewish Relief and Rescue Committee in Hungary. By this time, 
                    the mass deportations to Auschwitz had already begun in May 1944. The Kasztner Group, about 1,690 Jews, were to 
                    be released in exchange for goods and money relevant to the war effort. Instead of neutral Switzerland, however, 
                    the SS sent the Kasztner train to the Bergen-Belsen concentration camp. From there, only 318 of the approximately 
                    1,690 Jews were initially able to leave the camp in August 1944 after negotiations with the SS. The majority 
                    of the group departed for Switzerland only in December 1944. Seventeen persons had to stay behind in 
                    Bergen-Belsen despite the agreements that had already been reached.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Jewish men and women</h4>
                    <p>
                        The Jewish men and women deported from Hungary belonged to various communities and religious movements 
                        within Judaism. Not all of them necessarily defined themselves as Jewish. Neither their religion nor 
                        their cultural affiliation to Judaism or self-identification was decisive for their persecution by the 
                        National Socialists. At the heart of the National Socialist worldview was a racist antisemitism that 
                        defined Jews according to their descent. Christians and atheists were also persecuted as Jews by the 
                        National Socialists, regardless of their self-definition or cultural affiliation, if they met their 
                        criteria of descent. Not all of the persons referred to here as Jews identified themselves as Jewish, 
                        but they were all persecuted as Jewish.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The route of the Kasztner train</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Yehuda Blum’s family was also intended for the Kasztner transport. Although Yehuda Blum’s father initially did 
                    not want to join this transport, he later organized the family’s participation together with Philip Freudiger, 
                    the head of the Orthodox Jewish congregation in Budapest.
                </p>
                <p>
                    Yehuda Blum recalled in the interview that his family was then taken to a Hungarian collection camp. After 
                    staying there for a short time, the Blum family left Hungary on July 1, 1944 in freight cars together with 
                    some 1,690 other Jews. They first stopped at the German-Austrian border, where, according to Blum, the first 
                    rumors of a transport to Auschwitz arose and panic spread among the people. The next stop on the transport was 
                    Bratislava. Yehuda Blum also recalled that some people left the train there and others in turn boarded. 
                    On July 7, 1944, the train stopped in Linz for delousing. In the interview, Yehuda Blum described how people 
                    at this station were once again terrified of being murdered by the SS. From Linz, the train continued toward 
                    northern Germany and reached Celle, from where the group, later known as the Kasztner transport, had to 
                    continue on foot to Bergen-Belsen.
                </p>
                <!--
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/placeholder_840x560.jpg"), "html", null, true);
        yield "\"
                     alt=\"\"/>
                <p class=\"caption\">
                    Die Route des Kastzner-Transportes von Budapest nach Bergen-Belsen nach den Erinnerungen von Jenö
                    Kolb und Yehuda Blum.
                </p>
                -->
                <p>
                    Yehuda Blum’s story illustrates the uncertainties and insecurities during the transports, on which Jews in 
                    German-controlled Europe often did not know their destinations for days. Although the so-called Kasztner 
                    transport was originally intended to take Hungarian Jews to a neutral country, it initially ended in the 
                    Bergen-Belsen concentration camp.
                </p>
            </div>
        </div>


        <h3 class=\"mt-4\">In the Bergen-Belsen concentration camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    On arrival at the Bergen-Belsen concentration camp, the family was first registered, although no one from the 
                    Kasztner group knew how long their stay would last. Yehuda Blum’s family was not called to leave for 
                    Switzerland on the first transport in August 1944 and therefore, they had to spend further uncertain months in 
                    the camp.
                </p>
                <p>
                    Yehuda Blum shared the same fate in Bergen-Belsen with at least 14,600 other Jews – mainly from Hungary and the 
                    Netherlands – who arrived at the camp between July 1943 and December 1944. Established in the spring of 1943, 
                    the Bergen-Belsen concentration camp was originally intended by the SS and the Foreign Office to serve toward 
                    exchanging Jews of foreign nationality against German civilians in Allied custody. Despite the exchange function 
                    of the camp, hardly any Jewish prisoners were released in this way. Instead, they were quartered in barracks, 
                    subjected to abuse by the SS and compelled to use their working power for forced labor.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                    Bergen-Belsen consisted of several separate camps, which were set up by the SS for different groups of prisoners. 
                    Bergen-Belsen included the so-called “special camp,” where about 2,700 predominantly Polish-Jewish prisoners were 
                    quartered from July 1943 onward; the so-called “Hungarian camp,” which was set up to accommodate more than 
                    5,000 Hungarian prisoners overall; and the so-called “neutrals camp,” where some 600 prisoners were accommodated 
                    from August 1943 onward, intended for release to the neutral states of Spain, Portugal, and Turkey during the 
                    Second World War. In these parts of the camp, the prisoners wore civilian clothes and were separated into men 
                    and women.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                </p>
                <p>
                    In the interview, Yehuda Blum recalled the arbitrary inspections and roll calls by the SS that characterized 
                    everyday life in the camp during his four-month stay in the “Hungarian camp.” However, he also reported in 
                    the interview about evening lectures, communal singing, and afternoon classes in the barracks. As Yehuda Blum 
                    celebrated his thirteenth birthday in Bergen-Belsen, a bar mitzvah celebration organized by fellow prisoners 
                    took place in the camp as well.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; The Bergen-Belsen concentration camp</h4>
                    <p style=\"font-size: 0.9rem;\">
                        The Bergen-Belsen concentration camp was initially founded in 1943 as an “exchange camp” to quarter 
                        Jewish hostages. However, it was quickly assigned other functions and a men’s and women’s camp was set up. 
                        From the end of 1944 onward, Bergen-Belsen became the destination of many death marches and evacuation 
                        transports, developing into a death camp due to the appalling conditions. After liberation, a Polish 
                        and a Jewish displaced persons camp were set up in Bergen-Belsen.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Map overview\">
                            &#10149; To the map of the camps
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Departure for Switzerland</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Together with the other members of the Kasztner group, Yehuda Blum was prepared for departure on December 4, 1944 
                    and left the camp in the early afternoon. His train first stopped in Augsburg, Lindau, and Bregenz. At a further 
                    stop in Lustenau at the border crossing to Switzerland, the liberated persons had to change trains and transfer 
                    to a Swiss train. When the train arrived in Sankt Margrethen in Switzerland, Blum recalls that the group was 
                    apathetic. Those who were seriously ill were transferred to a nearby hospital.
                </p>
                <p>
                    Together with other liberated prisoners, Yehuda Blum was housed in the Kreuzbleiche gymnasium in Sankt Gallen. 
                    After a short stay, he and his brother traveled on via Montreux to the spa town of Caux, where they were housed 
                    together with the other liberated prisoners in the Esplanade and Regina hotels. Yehuda Blum and his brother then 
                    spent several months in a children’s home in Interlaken. His sister was placed in a home in the Engadin due to 
                    her poor physical condition.
                </p>
                <p>
                    Once the Blum family had reunited – it is not known how – they traveled to Bari, Italy, in August 1945 and 
                    from there to Taranto. There they boarded a ship to Palestine, where they arrived on September 1, 1945.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Professional career</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Yehuda Blum attended school in Jerusalem and completed his teacher training. Beginning to study law at the 
                    Hebrew University, he was also politically active in the student council. He did his military service from 1955 
                    to 1959. He then set out to study toward a doctorate in London. Starting in 1961, Yehuda Blum worked as a lawyer 
                    in the Israeli Foreign Ministry and from 1965 onward as Professor of International Law at the Hebrew University 
                    in Jerusalem. A year later, he married and eventually had three children with his wife. From 1978 to 1984, 
                    Blum served as Israeli ambassador to the United Nations in New York. He resumed his professorship in international 
                    law in 1984.
                </p>
                <p>
                    Yehuda Blum published numerous books over the course of his life. He retired in 2002 and has lived in Jerusalem 
                    ever since.

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Source situation</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    This biography is primarily based on the stories and recollections of Yehuda Blum himself, which he recorded 
                    in two interviews with the Bergen-Belsen Memorial. Since 1999, such video interviews have been conducted with 
                    the survivors of the concentration and prisoner-of-war camp, as well as with other contemporary witnesses 
                    toward the scholarly, educational and museum work of the Memorial on site. These memoirs enable the survivors 
                    to place their own narrative about the Shoah in a historical context and actively shape the work of the Memorial. 
                    Yehuda Blum’s subjective descriptions of his experiences were supplemented by key historical data, primarily 
                    based on the catalog of the Bergen-Belsen Memorial exhibition. In addition, a list of names exists of the 
                    Kasztner transport, which also includes the names of the Blum family.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Marta Ansilewska-Lehnstaedt / Stephan Lehnstaedt, “Das Holocaustmuseum Sereď – slowakische Wege zur
                    »Vergangenheitsbewältigung«,” in: Gedenkstättenrundbrief 195 (2019), p. 23.
                </p>
                <p>
                    Diana Gring / Peter Müller, Licht am Ende der Nacht. Die Transporte aus dem KZ Bergen-Belsen nach
                    St. Gallen, St. Gallen 2019.
                </p>
                <p>
                    Lower Saxony Memorials Foundation, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                    Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, Celle
                    2019.
                </p>
                <p>
                    Christiane Toyka-Seid / Gerd Schneider, “Pogrom / Reichspogromnacht,” in: Bundeszentrale für
                    politische Bildung, kurz&amp;knapp. Lexika, online at:
                    <a href=\"https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogromreichspogromnacht\"
                       title=\"Website of the Federal Agency for Civic Education\">
                        https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogromreichspogromnacht
                    </a>
                    (last accessed: April 24, 2024).
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Footnotes</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Lower Saxony Memorials Foundation / Bergen-Belsen Memorial. Interview with Yehuda Blum on June 19, 2003, BV 101.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Cf. Lower Saxony Memorials Foundation, Bergen-Belsen. Kriegsgefangenenlager 1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, Celle 2019, p. 178.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        List of Hungarian refugees who recently arrived in Switzerland on a transport from Bergen-Belsen: Call number 8007100007, DOC ID: 3393733/ ITS Digital Archive, Arolsen Archives.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Cf. Lower Saxony Memorials Foundation, Bergen-Belsen, pp. 160; 176.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Cf. Lower Saxony Memorials Foundation, Bergen-Belsen, p. 162.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        See Lower Saxony Memorials Foundation, Bergen-Belsen, p. 200.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                </ol>
            </div>
        </div>

        <h3 class=\"mt-4\">Citation reference</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Lara Meinert, “Yehuda Blum – die Kasztner-Gruppe,” 
                    in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, 
                    edited by the Institute for the History of the German Jews, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 328
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_blum");
        yield ".
                    License: <a href=\"https://creativecommons.org/licenses/by/4.0/\" 
                    title=\"License terms on the Creative Commons website\">CC BY 4.0</a>.
                </p>
            </div>
        </div>

    </div>

    <script>

        const bratislava = L.marker([48.144722, 17.112778]).bindPopup('<strong>Bratislava</strong><br/>');

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
            center: [48.144722, 17.112778],
            zoom: 6,
            layers: [osm,
                bratislava,
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

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
        return "biographies/blum.en.html.twig";
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
        return array (  437 => 328,  295 => 189,  232 => 129,  169 => 69,  155 => 58,  102 => 7,  89 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-map.en.html.twig' %}

{% block title %} Individual biography Yehuda Blum | {{ parent() }} {% endblock %}


{% block body %}
    

    <div class=\"container g-4 py-5 study\">
        <h2>Yehuda Blum and the Kasztner Group</h2>
        <div class=\"row\">
            <div class=\"col-lg-8 mb-2\">
                <h3>About the person</h3>
                <p class=\"abstract\">
                    Yehuda Blum was born on October 2, 1931 in Bratislava, then part of Czechoslovakia. He was the eldest of 
                    three children. He had a brother (Amram Blum) and a sister (Leah Blum). Yehuda Blum’s father Joseph Blum 
                    came to Bratislava from eastern Slovakia and became the director of the Jewish Credit Bank there. Blum’s 
                    mother Seldie Blum (née Dux) was born in Transylvania and moved to Bratislava with her husband after their 
                    marriage in 1930.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Persecution of Jews in Slovakia</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In 1938, the activities of the German minority in Bratislava became more militant. On November 9, 1938, the 
                    so-called November Pogrom (Reichspogromnacht) followed, during which Jewish stores, synagogues and schools in 
                    the city were destroyed. This took place from November 9 to 10, 1938, when the Nazi German Reich ordered 
                    targeted acts of violence against the Jewish population. Slovakia was dependent on the German Reich during the 
                    Second World War; the president was the Catholic priest Jozef Tiso, who cooperated with Germany and advocated 
                    similar ideological approaches. The regime was supported by the Slovakian People’s Party Hlinka-Guard, founded 
                    in 1913 by Andrej Hlinka. The party propagated a conservative, Catholic nationalism. Starting in 1938, the 
                    persecution and disenfranchisement of the country’s approximately 80,000 Jews increasingly became a core element 
                    of the party’s political agenda.
                </p>
                <p>
                    From 1942 to 1944, about two thirds of the Jewish population in Slovakia were deported (some 58,000 Jews), 
                    with a further 13,000 Jews deported in the fall of 1944.
                </p>
                <p>
                    Yehuda Blum’s personal memories were recorded in a contemporary witness interview with the Bergen-Belsen 
                    Memorial on June 19, 2003.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup> 
                    In the interview, he recalled that in 1939, one year after the November pogroms, the Blum family was attacked 
                    at night by the Slovakian Hlinka Guards. As a result and in view of the rapidly increasing anti-Semitic 
                    restrictions in Bratislava, Blum’s father decided that the family could no longer live in Bratislava.
                </p>
                <p>
                    The family moved to Budapest in Hungary in 1940. After the occupation of Hungary by German troops in 
                    March 1944, the living conditions of the Jewish population in Hungary changed abruptly. In the interview, 
                    Yehuda Blum described how his school was closed the very next day and everyday discrimination increased.
                </p>
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/biographies/geschwister-blum.jpg') }}\"
                     alt=\"Yehuda Blum with his siblings Amram and Leah\"/>
                <p class=\"caption\">
                    Yehuda Blum (right) with his siblings Amram and Leah, spring 1941. Bergen-Belsen Memorial Archive, 
                    privately owned by Yehuda Blum
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; More about Hungary in the Second World War</h4>
                    <p>
                        <a href=\"{{ path('app_context') }}\" title=\"Text on historical context\">
                            &#10149; Historical context
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The Kasztner Group</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In June 1944, Jewish organizations had their first negotiations with the Nazis about a transport of selected 
                    Hungarian Jews being sent to a neutral country to save them from deportation to Auschwitz. Reszö Kasztner 
                    negotiated with the SS as the representative of the Jewish Relief and Rescue Committee in Hungary. By this time, 
                    the mass deportations to Auschwitz had already begun in May 1944. The Kasztner Group, about 1,690 Jews, were to 
                    be released in exchange for goods and money relevant to the war effort. Instead of neutral Switzerland, however, 
                    the SS sent the Kasztner train to the Bergen-Belsen concentration camp. From there, only 318 of the approximately 
                    1,690 Jews were initially able to leave the camp in August 1944 after negotiations with the SS. The majority 
                    of the group departed for Switzerland only in December 1944. Seventeen persons had to stay behind in 
                    Bergen-Belsen despite the agreements that had already been reached.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Jewish men and women</h4>
                    <p>
                        The Jewish men and women deported from Hungary belonged to various communities and religious movements 
                        within Judaism. Not all of them necessarily defined themselves as Jewish. Neither their religion nor 
                        their cultural affiliation to Judaism or self-identification was decisive for their persecution by the 
                        National Socialists. At the heart of the National Socialist worldview was a racist antisemitism that 
                        defined Jews according to their descent. Christians and atheists were also persecuted as Jews by the 
                        National Socialists, regardless of their self-definition or cultural affiliation, if they met their 
                        criteria of descent. Not all of the persons referred to here as Jews identified themselves as Jewish, 
                        but they were all persecuted as Jewish.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The route of the Kasztner train</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Yehuda Blum’s family was also intended for the Kasztner transport. Although Yehuda Blum’s father initially did 
                    not want to join this transport, he later organized the family’s participation together with Philip Freudiger, 
                    the head of the Orthodox Jewish congregation in Budapest.
                </p>
                <p>
                    Yehuda Blum recalled in the interview that his family was then taken to a Hungarian collection camp. After 
                    staying there for a short time, the Blum family left Hungary on July 1, 1944 in freight cars together with 
                    some 1,690 other Jews. They first stopped at the German-Austrian border, where, according to Blum, the first 
                    rumors of a transport to Auschwitz arose and panic spread among the people. The next stop on the transport was 
                    Bratislava. Yehuda Blum also recalled that some people left the train there and others in turn boarded. 
                    On July 7, 1944, the train stopped in Linz for delousing. In the interview, Yehuda Blum described how people 
                    at this station were once again terrified of being murdered by the SS. From Linz, the train continued toward 
                    northern Germany and reached Celle, from where the group, later known as the Kasztner transport, had to 
                    continue on foot to Bergen-Belsen.
                </p>
                <!--
                <img class=\"img-fluid\" style=\"width: 640px;\" src=\"{{ asset('images/placeholder_840x560.jpg') }}\"
                     alt=\"\"/>
                <p class=\"caption\">
                    Die Route des Kastzner-Transportes von Budapest nach Bergen-Belsen nach den Erinnerungen von Jenö
                    Kolb und Yehuda Blum.
                </p>
                -->
                <p>
                    Yehuda Blum’s story illustrates the uncertainties and insecurities during the transports, on which Jews in 
                    German-controlled Europe often did not know their destinations for days. Although the so-called Kasztner 
                    transport was originally intended to take Hungarian Jews to a neutral country, it initially ended in the 
                    Bergen-Belsen concentration camp.
                </p>
            </div>
        </div>


        <h3 class=\"mt-4\">In the Bergen-Belsen concentration camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    On arrival at the Bergen-Belsen concentration camp, the family was first registered, although no one from the 
                    Kasztner group knew how long their stay would last. Yehuda Blum’s family was not called to leave for 
                    Switzerland on the first transport in August 1944 and therefore, they had to spend further uncertain months in 
                    the camp.
                </p>
                <p>
                    Yehuda Blum shared the same fate in Bergen-Belsen with at least 14,600 other Jews – mainly from Hungary and the 
                    Netherlands – who arrived at the camp between July 1943 and December 1944. Established in the spring of 1943, 
                    the Bergen-Belsen concentration camp was originally intended by the SS and the Foreign Office to serve toward 
                    exchanging Jews of foreign nationality against German civilians in Allied custody. Despite the exchange function 
                    of the camp, hardly any Jewish prisoners were released in this way. Instead, they were quartered in barracks, 
                    subjected to abuse by the SS and compelled to use their working power for forced labor.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                    Bergen-Belsen consisted of several separate camps, which were set up by the SS for different groups of prisoners. 
                    Bergen-Belsen included the so-called “special camp,” where about 2,700 predominantly Polish-Jewish prisoners were 
                    quartered from July 1943 onward; the so-called “Hungarian camp,” which was set up to accommodate more than 
                    5,000 Hungarian prisoners overall; and the so-called “neutrals camp,” where some 600 prisoners were accommodated 
                    from August 1943 onward, intended for release to the neutral states of Spain, Portugal, and Turkey during the 
                    Second World War. In these parts of the camp, the prisoners wore civilian clothes and were separated into men 
                    and women.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                </p>
                <p>
                    In the interview, Yehuda Blum recalled the arbitrary inspections and roll calls by the SS that characterized 
                    everyday life in the camp during his four-month stay in the “Hungarian camp.” However, he also reported in 
                    the interview about evening lectures, communal singing, and afternoon classes in the barracks. As Yehuda Blum 
                    celebrated his thirteenth birthday in Bergen-Belsen, a bar mitzvah celebration organized by fellow prisoners 
                    took place in the camp as well.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; The Bergen-Belsen concentration camp</h4>
                    <p style=\"font-size: 0.9rem;\">
                        The Bergen-Belsen concentration camp was initially founded in 1943 as an “exchange camp” to quarter 
                        Jewish hostages. However, it was quickly assigned other functions and a men’s and women’s camp was set up. 
                        From the end of 1944 onward, Bergen-Belsen became the destination of many death marches and evacuation 
                        transports, developing into a death camp due to the appalling conditions. After liberation, a Polish 
                        and a Jewish displaced persons camp were set up in Bergen-Belsen.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Map overview\">
                            &#10149; To the map of the camps
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Departure for Switzerland</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Together with the other members of the Kasztner group, Yehuda Blum was prepared for departure on December 4, 1944 
                    and left the camp in the early afternoon. His train first stopped in Augsburg, Lindau, and Bregenz. At a further 
                    stop in Lustenau at the border crossing to Switzerland, the liberated persons had to change trains and transfer 
                    to a Swiss train. When the train arrived in Sankt Margrethen in Switzerland, Blum recalls that the group was 
                    apathetic. Those who were seriously ill were transferred to a nearby hospital.
                </p>
                <p>
                    Together with other liberated prisoners, Yehuda Blum was housed in the Kreuzbleiche gymnasium in Sankt Gallen. 
                    After a short stay, he and his brother traveled on via Montreux to the spa town of Caux, where they were housed 
                    together with the other liberated prisoners in the Esplanade and Regina hotels. Yehuda Blum and his brother then 
                    spent several months in a children’s home in Interlaken. His sister was placed in a home in the Engadin due to 
                    her poor physical condition.
                </p>
                <p>
                    Once the Blum family had reunited – it is not known how – they traveled to Bari, Italy, in August 1945 and 
                    from there to Taranto. There they boarded a ship to Palestine, where they arrived on September 1, 1945.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Professional career</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Yehuda Blum attended school in Jerusalem and completed his teacher training. Beginning to study law at the 
                    Hebrew University, he was also politically active in the student council. He did his military service from 1955 
                    to 1959. He then set out to study toward a doctorate in London. Starting in 1961, Yehuda Blum worked as a lawyer 
                    in the Israeli Foreign Ministry and from 1965 onward as Professor of International Law at the Hebrew University 
                    in Jerusalem. A year later, he married and eventually had three children with his wife. From 1978 to 1984, 
                    Blum served as Israeli ambassador to the United Nations in New York. He resumed his professorship in international 
                    law in 1984.
                </p>
                <p>
                    Yehuda Blum published numerous books over the course of his life. He retired in 2002 and has lived in Jerusalem 
                    ever since.

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Source situation</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    This biography is primarily based on the stories and recollections of Yehuda Blum himself, which he recorded 
                    in two interviews with the Bergen-Belsen Memorial. Since 1999, such video interviews have been conducted with 
                    the survivors of the concentration and prisoner-of-war camp, as well as with other contemporary witnesses 
                    toward the scholarly, educational and museum work of the Memorial on site. These memoirs enable the survivors 
                    to place their own narrative about the Shoah in a historical context and actively shape the work of the Memorial. 
                    Yehuda Blum’s subjective descriptions of his experiences were supplemented by key historical data, primarily 
                    based on the catalog of the Bergen-Belsen Memorial exhibition. In addition, a list of names exists of the 
                    Kasztner transport, which also includes the names of the Blum family.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Marta Ansilewska-Lehnstaedt / Stephan Lehnstaedt, “Das Holocaustmuseum Sereď – slowakische Wege zur
                    »Vergangenheitsbewältigung«,” in: Gedenkstättenrundbrief 195 (2019), p. 23.
                </p>
                <p>
                    Diana Gring / Peter Müller, Licht am Ende der Nacht. Die Transporte aus dem KZ Bergen-Belsen nach
                    St. Gallen, St. Gallen 2019.
                </p>
                <p>
                    Lower Saxony Memorials Foundation, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                    Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, Celle
                    2019.
                </p>
                <p>
                    Christiane Toyka-Seid / Gerd Schneider, “Pogrom / Reichspogromnacht,” in: Bundeszentrale für
                    politische Bildung, kurz&amp;knapp. Lexika, online at:
                    <a href=\"https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogromreichspogromnacht\"
                       title=\"Website of the Federal Agency for Civic Education\">
                        https://www.bpb.de/kurz-knapp/lexika/das-junge-politik-lexikon/320945/pogromreichspogromnacht
                    </a>
                    (last accessed: April 24, 2024).
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Footnotes</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Lower Saxony Memorials Foundation / Bergen-Belsen Memorial. Interview with Yehuda Blum on June 19, 2003, BV 101.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Cf. Lower Saxony Memorials Foundation, Bergen-Belsen. Kriegsgefangenenlager 1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, Celle 2019, p. 178.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        List of Hungarian refugees who recently arrived in Switzerland on a transport from Bergen-Belsen: Call number 8007100007, DOC ID: 3393733/ ITS Digital Archive, Arolsen Archives.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Cf. Lower Saxony Memorials Foundation, Bergen-Belsen, pp. 160; 176.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Cf. Lower Saxony Memorials Foundation, Bergen-Belsen, p. 162.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        See Lower Saxony Memorials Foundation, Bergen-Belsen, p. 200.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                </ol>
            </div>
        </div>

        <h3 class=\"mt-4\">Citation reference</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Lara Meinert, “Yehuda Blum – die Kasztner-Gruppe,” 
                    in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, 
                    edited by the Institute for the History of the German Jews, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_bio_blum') }}.
                    License: <a href=\"https://creativecommons.org/licenses/by/4.0/\" 
                    title=\"License terms on the Creative Commons website\">CC BY 4.0</a>.
                </p>
            </div>
        </div>

    </div>

    <script>

        const bratislava = L.marker([48.144722, 17.112778]).bindPopup('<strong>Bratislava</strong><br/>');

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
            center: [48.144722, 17.112778],
            zoom: 6,
            layers: [osm,
                bratislava,
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

{% endblock %}", "biographies/blum.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/biographies/blum.en.html.twig");
    }
}
