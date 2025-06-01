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

/* biographies/hardy.en.html.twig */
class __TwigTemplate_fc8636d6ff8f1e82dabcf7024d002efe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/hardy.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biographies/hardy.en.html.twig"));

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

        yield " Individual biography Katharina Hardy | ";
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
        <h2>Katharina Hardy – Focus “DP Camp Bergen-Belsen”</h2>
        <div class=\"row\">
            <h3>About the person</h3>
            <div class=\"col-lg-8 mb-2\">
                <p class=\"abstract\">
                    Katharina Hardy, née Cohn (Kardos after 1947), was born on November 7, 1928 in Budapest, Hungary, and grew up 
                    in modest circumstances. Her father worked as an accountant at the Fiat automobile factory. Her mother was a 
                    housewife and looked after Katharina Hardy and her sister Piroska, who was seven years older. The family was 
                    not religious. Hungarian was spoken among them at home, and German was also sometimes used in the family. 
                    Katharina Hardy attended elementary school as a young girl and then went to the Jewish high school for six years. 
                    She then attended the high school specializing in the fine arts and was trained to play the violin. 
                    From 1937/38 onward, she attended the Franz Liszt Academy in Budapest, where she had to discontinue her studies 
                    in March 1944 due to the German occupation. Katharina Hardy caught up on her high school graduation diploma after 
                    the war in 1947.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Start of the deportations</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    On March 19, 1944, Hungary was occupied by German troops. Shortly afterward, in May 1944, the deportation 
                    of Jews from Hungarian territory to Auschwitz-Birkenau began. Some 424,000 people were deported from Hungary 
                    within 56 days. Katharina Hardy recalled in an interview she gave to employees of the Bergen-Belsen Memorial 
                    on April 24, 2003<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup> that she was aware of the antisemitism 
                    in Hungary. She had already experienced social exclusion from her peers as a child, although her parents had 
                    always tried to protect their children from it. Katharina Hardy also reported in the interview that verbal 
                    abuse had increased in everyday life since 1942 and that antisemitic laws had also become stricter. According 
                    to Katharina Hardy, her parents had already considered emigrating to Australia before 1944, but her mother had 
                    refused because she did not want to leave her parents behind. In the interview, Katharina Hardy said that her 
                    grandparents were the first of her family to be deported to Auschwitz. Overall some 565,000 of the 800,000 Jews 
                    living on Hungarian territory were murdered in the Nazis’ systematic extermination campaigns.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                    Katharina Hardy’s grandfather perished on the way to the concentration and extermination camp, her grandmother 
                    and many other family members were murdered in the gas chambers of Auschwitz.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Abduction for forced labor</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    As early as August 1940, young Jewish men of conscription age in Hungary were obliged to work. Later, the age 
                    limits were increasingly lowered and Jewish women were forced to work as well. From 1941 onward, Hungarian-Jewish 
                    labor battalions were deployed beyond the borders of present-day Hungary. Although Reich Governor Miklós Horthy 
                    initially refused to hand over the Hungarian Jews to Germany, more than 60,000 people died as a result of the 
                    antisemitic terror by March 1944. Around a third of the victims were murdered by or during forced labor.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <p>
                    In October 1944, Katharina Hardy’s father was also taken away by Arrow Cross Party members during the night. 
                    A few days later, probably on October 13, 1944, the fascists returned and picked up Katharina and her sister. 
                    Katharina Hardy reported in the interview that they were taken to a labor camp near Budapest to dig trenches.
                </p>
                <p>
                    About three to four weeks after their arrest, the sisters were released and allowed to return home for the 
                    time being. However, Katharina Hardy was picked up again by Arrow Cross Party members just a few days later, 
                    this time together with her mother. Her sister Piroska stayed behind, but she too was taken away two weeks 
                    later and deported to Ravensbrück.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; More on the historical background</h4>
                    <p>
                        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Text on historical context\">
                            &#10149; Historical context
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The “death march” to Ravensbrück</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After their arrest in November 1944, Katharina Hardy and her mother were detained in a collection camp in Budapest. 
                    Katharina Hardy recalled in the interview that she, her mother, and many other women had to walk more than 
                    200 kilometers to the west. The women were held for several days in a collection camp (brick factory in Budapest). 
                    From there, they had to continue on foot and were quartered in the Györ camp. On December 28, 1944, Katharina Hardy 
                    and her mother were separated in Komárom (Csillag Fortress). Her mother later perished in Komárom.
                </p>
                <p>
                    Katharina Hardy had to march on without her mother and was deported to the Ravensbrück women’s camp on December 31, 
                    1944, where she arrived on January 7, 1945. The Ravensbrück concentration camp had a total of 70,000 additional 
                    prisoners in 1944 due to mass deportations from France, Poland, Hungary, and Slovakia. In 1944, 60 percent of all 
                    female prisoners in the German-occupied territories were deported to Ravensbrück. About 9,000 Jewish women from 
                    Hungary and Slovakia were imprisoned in the women’s camp. Looking back, Katharina Hardy recalled that when she 
                    arrived at the Ravensbrück concentration camp, she was already very weak from the exertions of the long and 
                    inhumane march and was in a very poor state of health. Together with about 3,200 other women and children, 
                    Katharina Hardy was imprisoned in Ravensbrück for approximately four weeks before being transferred to the 
                    Bergen-Belsen concentration camp at the end of February 1945, where she arrived on March 2, 1945.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Death marches and “final phase crimes”</h4>
                    <p>
                        In the final phase of the war, a number of concentration camps and satellite camps were evacuated 
                        by the Nazis before the approaching Allies arrived. The prisoners were either transported in 
                        freight cars, rarely in trucks, or forced to march on foot to areas still under German control. 
                        During the marches, which often lasted for days, sometimes even weeks, the prisoners were usually 
                        barely fed, many of them starving or dying of thirst in the freight cars, many collapsing during 
                        the marches due to exhaustion or being murdered by the SS or other units on guard duty. 
                        Survivors therefore coined the term “death march” for these evacuations. Some of the death marches 
                        ended in the targeted murder of prisoners, of which the so-called “Gardelegen massacre” constitutes 
                        one of the best known. More than 1,000 prisoners from satellite camps of the Neuengamme and 
                        Mittelbau-Dora concentration camps were rounded up in a field barn there, which was then set on fire 
                        by the SS and other Nazi organizations.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The evacuations of many concentration camps, which the prisoners themselves referred to as “death marches,” 
                    began in the spring of 1944. As the Allies advanced, the German sphere of influence shrank increasingly. 
                    In order to prevent the liberation of the inmates, the SS evacuated almost all the concentration camps, 
                    including their satellite camps, and drove the prisoners to destination camps further away from the front. 
                    The people were herded in overcrowded freight cars or on endless forced marches through the middle of towns 
                    and villages. The journeys and marches sometimes lasted for weeks. Those who could not keep up with the pace 
                    of the columns or tried to escape were murdered by the guards. Countless persons also died of illness, 
                    malnutrition, exhaustion and cold during these forced marches. Due to a lack of documents, the total number 
                    of concentration camp prisoners who died on the evacuation transports and as a result of this ordeal cannot 
                    be precisely determined. It is estimated that some 250,000 people were murdered or died as a result of inhumane 
                    treatment and inadequate rations.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup> 
                    Katharina Hardy probably reached Bergen-Belsen on such a “death march.”
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#128279; More on this topic</h4>
                    <p>
                        The evacuation of the Lübberstedt satellite camp. In freight cars through northern Germany
                    </p>
                    <p>
                        <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
        yield "\"
                           title=\"More information on the evacuation of concentration camps based on the case study on Lübberstedt\">
                            &#10149; Read on
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The days before the liberation of the Bergen-Belsen concentration camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In the interview, Katharina Hardy recalled the appalling conditions in Ravensbrück and Bergen-Belsen. When she 
                    arrived in Bergen-Belsen, she was quartered in a barrack in the women’s camp near the crematorium. She had 
                    become unable to walk in the camp. Katharina Hardy related moreover that she and her fellow prisoners were not 
                    given any more food at all in the last days before the camp was liberated.
                </p>
                <p>
                    Bergen-Belsen was the destination camp for countless evacuation transports. With the arrival of tens of 
                    thousands of sick and dying prisoners, the living conditions in the camp deteriorated dramatically for the 
                    inmates. Above all, epidemics such as typhus and typhoid fever, but also hunger, were the main causes of the 
                    mass deaths that began at the time. The SS did not take any measures to combat the appalling sanitary and 
                    hygienic conditions in the camp. Several hundred people perished in the camp every day. As the capacity of 
                    the crematorium on the camp grounds was no longer sufficient to cremate the countless dead from March 1945 
                    onward, thousands of corpses decomposed on the camp grounds, which accelerated the outbreak of further epidemics. 
                    Only a few days before the Allies liberated the camp did burials of the dead in mass graves begin. At least 
                    52,000 people perished in the Bergen-Belsen concentration camp due to the inhumane conditions of internment. 
                    From 1943 to 1944 about 3,100 people died, from January 1945 until liberation on April 15, 1945 some 35,000 
                    people perished, and after liberation until the end of June 1945 a further 14,000 of those liberated passed 
                    away as a direct result of their imprisonment.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; The Bergen-Belsen concentration camp</h4>
                    <p style=\"font-size: 0.9rem;\">
                        The Bergen-Belsen concentration camp was initially founded in 1943 as an “exchange camp” to quarter 
                        Jewish hostages. However, it was quickly assigned other functions and a men’s and women’s camp was 
                        set up. From the end of 1944 onward, Bergen-Belsen became the destination of many death marches and 
                        evacuation transports, developing into a death camp due to the appalling conditions. After liberation, 
                        a Polish and a Jewish displaced persons camp were set up in Bergen-Belsen.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Map overview\">
                            &#10149; To the map of the camps
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The Bergen-Belsen displaced persons camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After the liberation of Bergen-Belsen, the survivors were initially taken by the British army to the nearby 
                    Wehrmacht barracks, which had been cleared in the meantime. In addition to Katharina Hardy, thousands of other 
                    persons received medical treatment there. The Allies gave the people deported to Germany the legal status of 
                    “displaced persons” (DPs), which entitled them to special care.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                </p>
                <img class=\"img-fluid\" style=\"width: 660px;\" src=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Hardy-DP-Camp.jpg"), "html", null, true);
        yield "\"
                     alt=\"Photograph from the Bergen-Belsen DP camp. The Vienna Holocaust Library Collections, Photo Archive, call number 35/6/3/90\"/>
                <p class=\"caption\">
                    Photograph from the Bergen-Belsen DP camp. The Vienna Holocaust Library Collections, Photo Archive, call number 35/6/3/90.
                </p>
                <p>
                    When Katharina Hardy was on the road to recovery, she was scheduled for a convalescent transport to Sweden. 
                    At this time, she learned of her father’s survival via so-called Red Cross lists, which were kept by the 
                    German Red Cross as a kind of tracing service for missing relatives. After spending almost three months in 
                    the Bergen-Belsen DP camp, she therefore decided to return to Hungary, traveling via Bratislava to Budapest 
                    to see her father on 31 July 1945.
                </p>
                <p>
                    Most people from the Bergen-Belsen DP camp left Germany shortly after their liberation to emigrate to other 
                    countries or to return to their countries of origin. However, it was mainly Polish nationals and Jews who 
                    remained in the Bergen-Belsen DP camp. In the course of 1945, the living quarters of these two groups were 
                    separated. More than 10,000 people lived in the Polish DP camp until it was disbanded in 1946. The Jewish 
                    Bergen-Belsen DP camp existed for much longer. Around 12,000 persons from all over Europe lived here until 
                    mid-1950.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Return to Hungary and escape to Switzerland</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After returning to Hungary, Katharina Hardy resumed her education at the Franz Liszt Academy and completed 
                    her high school graduation diploma at the same time. She and her father joined to move back into the family’s 
                    old home. Her father was able to work again in his old profession as an accountant. He passed away in 1977.
                </p>
                <p>
                    In the winter of 1947, Katharina Hardy met her future husband, whom she married in 1950. They had two children 
                    together. On November 25, 1956, due to the Hungarian National Uprising – a nationwide revolt directed against 
                    Soviet rule<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup> 
                    – the small family fled Hungary via Austria to Regensdorf in Switzerland, where her husband had been offered a 
                    job as an engineer in Zurich.
                </p>
                <p>
                    Katharina Hardy’s third child was born in Switzerland in 1959. She had been active as a soloist and orchestral 
                    musician since 1957. From 1985 onward, she gave private violin lessons and invested her skills in the development 
                    of her students. She also trained two of her grandchildren to become professional musicians.
                </p>
                <p>
                    Katharina Hardy lived in Zurich until her death in 2022.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Source situation</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    This biography is primarily based on the stories and recollections of Katharina Hardy herself, which she 
                    processed in two interviews with the Bergen-Belsen Memorial.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup> 
                    The subjective descriptions of her experiences are supplemented by key historical data, which are mainly based 
                    on the catalog of the exhibition at the Bergen-Belsen Memorial. Little else is known about her deportation from 
                    Ravensbrück to the Bergen-Belsen concentration camp, as no transport list exists.
                </p>
                <img class=\"img-fluid\" style=\"width: 660px;\" src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/biographies/Katharina-Hardy_2015.jpg"), "html", null, true);
        yield "\"
                     alt=\"Katharina Hardy as a guest attending a memorial service in Bergen-Belsen, 2015 (detail). 
                     Bergen-Belsen Memorial Archive, inventory number 1600–4229, photo: Julia Lormis, 2015\"/>
                <p class=\"caption\">
                    Katharina Hardy as a guest attending a memorial service in Bergen-Belsen, 2015 (detail). 
                    Bergen-Belsen Memorial Archive, inventory number 1600–4229, photo: Julia Lormis, 2015.
                </p>
                <p>
                <p>
                    Katharina Hardy’s story makes it clear that the time after the end of the war was often still characterized 
                    by fears and insecurities, stays in DP camps, the search for relatives, coming to terms with a lost home, 
                    and the lengthy process of finding one’s way back into everyday life.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Bundeszentrale für politische Bildung [Federal Agency for Civic Education], 65 years ago: 
                    Ungarischer Volksaufstand, online at:
                    <a href=\"https://www.bpb.de/kurz-knapp/hintergrund-aktuell/342325/vor-65-jahren-ungarischer-volksaufstand\"
                       title=\"To the website of the Federal Agency for Civic Education (Bundeszentrale für politische Bildung)\">
                        https://www.bpb.de/kurz-knapp/hintergrund-aktuell/342325/vor-65-jahren-ungarischer-volksaufstand
                    </a>
                    (last accessed: May 5, 2024).
                </p>
                <p>
                    Das Bundesarchiv, Zwangsarbeit im NS-Staat. Jüdische Arbeitsbataillone, online at:
                    <a href=\" https://www.bundesarchiv.de/zwangsarbeit/haftstaetten/index.php?tab=21\"
                       title=\"To the website of the Federal Archives (Bundesarchiv)\">
                        https://www.bundesarchiv.de/zwangsarbeit/haftstaetten/index.php?tab=21
                    </a>
                    (last accessed: May 1, 2024).
                </p>
                <p>
                    Deutsches Historisches Museum, Todesmärsche: Die Räumung der Konzentrationslager 1944/45, online at:
                    <a href=\"https://www.dhm.de/lemo/kapitel/der-zweite-weltkrieg/voelkermord/todesmaersche.html\"
                       title=\"To the website of the German Historical Museum (Deutsches Historisches Museum)\">
                        https://www.dhm.de/lemo/kapitel/der-zweite-weltkrieg/voelkermord/todesmaersche.html
                    </a>
                    (last accessed: May 24, 2024).
                </p>
                <p>
                    Bernhard Strebel, “Der Lagerkomplex des KZ Ravensbrück,” in: Bundeszentrale für politische Bildung,
                    online at:
                    <a href=\"https://www.bpb.de/themen/holocaust/ravensbrueck/60686/der-lagerkomplex-des-kz-ravensbrueck\"
                       title=\"Website of the Federal Agency for Civic Education\">
                        https://www.bpb.de/themen/holocaust/ravensbrueck/60686/der-lagerkomplex-des-kz-ravensbrueck
                    </a>
                    (last accessed: July 26, 2024).
                </p>
                <p>
                    Lower Saxony Memorials Foundation, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                    Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, Celle
                    2019.
                </p>
                <p>
                    Lower Saxony Memorials Foundation, The Displaced Persons Camp (1945–1950), online at:
                    <a href=\"https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950/\"
                       title=\"To the website of Lower Saxony Memorials Foundation\">
                        https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950
                    </a>
                    (last accessed: May 6, 2024).
                </p>
                <p>
                    75 Tage Gewalt, Mord, Befreiung. Das Kriegsende in Niedersachsen, Transport von Frauen und Kindern
                    in das KZ Bergen-Belsen, online at:
                    <a href=\"https://befreiung-1945.de/transport-von-frauen-und-kindern-in-das-kz-bergen-belsen\"
                       title=\"To the website of the Lower Saxony Memorials Foundation\">
                        https://befreiung-1945.de/transport-von-frauen-und-kindern-in-das-kz-bergen-belsen
                    </a>
                    (last accessed: July 26, 2024).
                </p>
                <p>
                    Yad Vashem – The World Holocaust Remembrance Center, Murder of Hungarian Jewry, online at:
                    <a href=\"https://www.yadvashem.org/holocaust/about/fate-of-jews/hungary.html#narrative_info\"
                       title=\"To the website of Yad Vashem\">
                        https://www.yadvashem.org/holocaust/about/fate-of-jews/hungary.html#narrative_info
                    </a>
                    (last accessed: May 01, 2024).
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Footnotes</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Lower Saxony Memorials Foundation / Bergen-Belsen Memorial, interview with Katharina Hardy on April 24, 2003, BV 81.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Cf. Yad Vashem – The World Holocaust Remembrance Center, Murder of Hungarian Jewry, online at:
                        <a href=\"https://www.yadvashem.org/holocaust/about/fate-of-jews/hungary.html#narrative_info\"
                           title=\"Website Yad Vashem\">
                            https://www.yadvashem.org/holocaust/about/fate-of-jews/hungary.html#narrative_info</a>
                        (last accessed: May 1, 2024).
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Cf. Das Bundesarchiv, Zwangsarbeit im NS-Staat. Jüdische Arbeitsbataillone, online at:
                        <a href=\"https://www.bundesarchiv.de/zwangsarbeit/haftstaetten/index.php?tab=21\"
                           title=\"Website of the Federal Archive (Bundesarchiv)\">
                            https://www.bundesarchiv.de/zwangsarbeit/haftstaetten/index.php?tab=21</a>
                            (last accessed: May 1, 2024).
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Lukkas Busche / Andreas Froese (ed.), Gardelegen 1945. Das Massaker und seine Nachwirkungen. 
                        Begleitender Katalog zur Dauerausstellung der Gedenkstätte Feldscheune Isenschnibbe Gardelegen, 
                        Gardelegen / Leipzig / Magdeburg 2022.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Cf. Deutsches Historisches Museum, Todesmärsche: Die Räumung der Konzentrationslager 1944/45, online at:
                        <a href=\"https://www.dhm.de/lemo/kapitel/der-zweite-weltkrieg/voelkermord/todesmaersche.html\"
                           title=\"Website of the German Historical Museum (Deutsches Historisches Museum)\">
                            https://www.dhm.de/lemo/kapitel/der-zweite-weltkrieg/voelkermord/todesmaersche.html</a>
                        (last accessed: May 24, 2024).
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Cf. Lower Saxony Memorials Foundation, Bergen-Belsen. Kriegsgefangenenlager 1940-1945, 
                        Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, 
                        Celle 2019, p. 232f.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        See Lower Saxony Memorials Foundation (ed.), Bergen-Belsen. Kriegsgefangenenlager 1940-1945, 
                        Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, 
                        Celle 2009, p. 200.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>

                    <li id=\"endnote8\">
                        See Lower Saxony Memorials Foundation, The Displaced Persons Camp (1945–1950), online at:
                        <a href=\"https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950\"
                           title=\"To the website of the Lower Saxony Memorials Foundation\">
                            https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950</a>
                        (last accessed: May 6, 2024).
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        See Lower Saxony Memorials Foundation, The Displaced Persons Camp (1945-1950), online at:
                        <a href=\"https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950\"
                        title=\"To the website of the Lower Saxony Memorials Foundation\"> 
                            https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950</a> 
                        (last accessed: May 6, 2024).
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Cf. Bundeszentrale für politische Bildung [Federal Agency for Civic Education], 65 years ago: Ungarischer Volksaufstand, online at:
                        <a href=\"https://www.bpb.de/kurz-knapp/hintergrund-aktuell/342325/vor-65-jahren-ungarischer-volksaufstand\"
                           title=\"Website of the Federal Agency for Civic Education (Bundeszentrale für politische Bildung)\">
                            https://www.bpb.de/kurz-knapp/hintergrund-aktuell/342325/vor-65-jahren-ungarischer-volksaufstand</a>
                        (last accessed: May 5, 2024).
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Lower Saxony Memorials Foundation / Bergen-Belsen Memorial, interview with Katharina Hardy on December 15, 1995, BC 64.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                </ol>
            </div>
        </div>

        <h3 class=\"mt-4\">Citation reference</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Lara Meinert, “Katharina Hardy – Fokus ‘DP-Camp Bergen-Belsen’,” 
                    in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, 
                    edited by the Institute for the History of the German Jews,
                    URL: https://holocaust-ungarn-norddeutschland.de";
        // line 449
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield ".
                    License: <a href=\"https://creativecommons.org/licenses/by/4.0/\" 
                    title=\"License terms on the Creative Commons website\">CC BY 4.0</a>.
                </p>
            </div>
        </div>

    </div>

    <script>

        const budapest = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/>');

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
                budapest,
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
        return "biographies/hardy.en.html.twig";
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
        return array (  561 => 449,  382 => 273,  320 => 214,  300 => 197,  253 => 153,  176 => 79,  102 => 7,  89 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-map.en.html.twig' %}

{% block title %} Individual biography Katharina Hardy | {{ parent() }} {% endblock %}


{% block body %}
    

    <div class=\"container g-4 py-5 study\">
        <h2>Katharina Hardy – Focus “DP Camp Bergen-Belsen”</h2>
        <div class=\"row\">
            <h3>About the person</h3>
            <div class=\"col-lg-8 mb-2\">
                <p class=\"abstract\">
                    Katharina Hardy, née Cohn (Kardos after 1947), was born on November 7, 1928 in Budapest, Hungary, and grew up 
                    in modest circumstances. Her father worked as an accountant at the Fiat automobile factory. Her mother was a 
                    housewife and looked after Katharina Hardy and her sister Piroska, who was seven years older. The family was 
                    not religious. Hungarian was spoken among them at home, and German was also sometimes used in the family. 
                    Katharina Hardy attended elementary school as a young girl and then went to the Jewish high school for six years. 
                    She then attended the high school specializing in the fine arts and was trained to play the violin. 
                    From 1937/38 onward, she attended the Franz Liszt Academy in Budapest, where she had to discontinue her studies 
                    in March 1944 due to the German occupation. Katharina Hardy caught up on her high school graduation diploma after 
                    the war in 1947.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div id=\"map\" style=\"height: 15rem;\">
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Start of the deportations</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    On March 19, 1944, Hungary was occupied by German troops. Shortly afterward, in May 1944, the deportation 
                    of Jews from Hungarian territory to Auschwitz-Birkenau began. Some 424,000 people were deported from Hungary 
                    within 56 days. Katharina Hardy recalled in an interview she gave to employees of the Bergen-Belsen Memorial 
                    on April 24, 2003<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup> that she was aware of the antisemitism 
                    in Hungary. She had already experienced social exclusion from her peers as a child, although her parents had 
                    always tried to protect their children from it. Katharina Hardy also reported in the interview that verbal 
                    abuse had increased in everyday life since 1942 and that antisemitic laws had also become stricter. According 
                    to Katharina Hardy, her parents had already considered emigrating to Australia before 1944, but her mother had 
                    refused because she did not want to leave her parents behind. In the interview, Katharina Hardy said that her 
                    grandparents were the first of her family to be deported to Auschwitz. Overall some 565,000 of the 800,000 Jews 
                    living on Hungarian territory were murdered in the Nazis’ systematic extermination campaigns.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                    Katharina Hardy’s grandfather perished on the way to the concentration and extermination camp, her grandmother 
                    and many other family members were murdered in the gas chambers of Auschwitz.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Abduction for forced labor</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    As early as August 1940, young Jewish men of conscription age in Hungary were obliged to work. Later, the age 
                    limits were increasingly lowered and Jewish women were forced to work as well. From 1941 onward, Hungarian-Jewish 
                    labor battalions were deployed beyond the borders of present-day Hungary. Although Reich Governor Miklós Horthy 
                    initially refused to hand over the Hungarian Jews to Germany, more than 60,000 people died as a result of the 
                    antisemitic terror by March 1944. Around a third of the victims were murdered by or during forced labor.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <p>
                    In October 1944, Katharina Hardy’s father was also taken away by Arrow Cross Party members during the night. 
                    A few days later, probably on October 13, 1944, the fascists returned and picked up Katharina and her sister. 
                    Katharina Hardy reported in the interview that they were taken to a labor camp near Budapest to dig trenches.
                </p>
                <p>
                    About three to four weeks after their arrest, the sisters were released and allowed to return home for the 
                    time being. However, Katharina Hardy was picked up again by Arrow Cross Party members just a few days later, 
                    this time together with her mother. Her sister Piroska stayed behind, but she too was taken away two weeks 
                    later and deported to Ravensbrück.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; More on the historical background</h4>
                    <p>
                        <a href=\"{{ path('app_context') }}\" title=\"Text on historical context\">
                            &#10149; Historical context
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The “death march” to Ravensbrück</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After their arrest in November 1944, Katharina Hardy and her mother were detained in a collection camp in Budapest. 
                    Katharina Hardy recalled in the interview that she, her mother, and many other women had to walk more than 
                    200 kilometers to the west. The women were held for several days in a collection camp (brick factory in Budapest). 
                    From there, they had to continue on foot and were quartered in the Györ camp. On December 28, 1944, Katharina Hardy 
                    and her mother were separated in Komárom (Csillag Fortress). Her mother later perished in Komárom.
                </p>
                <p>
                    Katharina Hardy had to march on without her mother and was deported to the Ravensbrück women’s camp on December 31, 
                    1944, where she arrived on January 7, 1945. The Ravensbrück concentration camp had a total of 70,000 additional 
                    prisoners in 1944 due to mass deportations from France, Poland, Hungary, and Slovakia. In 1944, 60 percent of all 
                    female prisoners in the German-occupied territories were deported to Ravensbrück. About 9,000 Jewish women from 
                    Hungary and Slovakia were imprisoned in the women’s camp. Looking back, Katharina Hardy recalled that when she 
                    arrived at the Ravensbrück concentration camp, she was already very weak from the exertions of the long and 
                    inhumane march and was in a very poor state of health. Together with about 3,200 other women and children, 
                    Katharina Hardy was imprisoned in Ravensbrück for approximately four weeks before being transferred to the 
                    Bergen-Belsen concentration camp at the end of February 1945, where she arrived on March 2, 1945.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Death marches and “final phase crimes”</h4>
                    <p>
                        In the final phase of the war, a number of concentration camps and satellite camps were evacuated 
                        by the Nazis before the approaching Allies arrived. The prisoners were either transported in 
                        freight cars, rarely in trucks, or forced to march on foot to areas still under German control. 
                        During the marches, which often lasted for days, sometimes even weeks, the prisoners were usually 
                        barely fed, many of them starving or dying of thirst in the freight cars, many collapsing during 
                        the marches due to exhaustion or being murdered by the SS or other units on guard duty. 
                        Survivors therefore coined the term “death march” for these evacuations. Some of the death marches 
                        ended in the targeted murder of prisoners, of which the so-called “Gardelegen massacre” constitutes 
                        one of the best known. More than 1,000 prisoners from satellite camps of the Neuengamme and 
                        Mittelbau-Dora concentration camps were rounded up in a field barn there, which was then set on fire 
                        by the SS and other Nazi organizations.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The evacuations of many concentration camps, which the prisoners themselves referred to as “death marches,” 
                    began in the spring of 1944. As the Allies advanced, the German sphere of influence shrank increasingly. 
                    In order to prevent the liberation of the inmates, the SS evacuated almost all the concentration camps, 
                    including their satellite camps, and drove the prisoners to destination camps further away from the front. 
                    The people were herded in overcrowded freight cars or on endless forced marches through the middle of towns 
                    and villages. The journeys and marches sometimes lasted for weeks. Those who could not keep up with the pace 
                    of the columns or tried to escape were murdered by the guards. Countless persons also died of illness, 
                    malnutrition, exhaustion and cold during these forced marches. Due to a lack of documents, the total number 
                    of concentration camp prisoners who died on the evacuation transports and as a result of this ordeal cannot 
                    be precisely determined. It is estimated that some 250,000 people were murdered or died as a result of inhumane 
                    treatment and inadequate rations.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup> 
                    Katharina Hardy probably reached Bergen-Belsen on such a “death march.”
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#128279; More on this topic</h4>
                    <p>
                        The evacuation of the Lübberstedt satellite camp. In freight cars through northern Germany
                    </p>
                    <p>
                        <a href=\"{{ path('app_deportation_luebberstedt') }}\"
                           title=\"More information on the evacuation of concentration camps based on the case study on Lübberstedt\">
                            &#10149; Read on
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The days before the liberation of the Bergen-Belsen concentration camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In the interview, Katharina Hardy recalled the appalling conditions in Ravensbrück and Bergen-Belsen. When she 
                    arrived in Bergen-Belsen, she was quartered in a barrack in the women’s camp near the crematorium. She had 
                    become unable to walk in the camp. Katharina Hardy related moreover that she and her fellow prisoners were not 
                    given any more food at all in the last days before the camp was liberated.
                </p>
                <p>
                    Bergen-Belsen was the destination camp for countless evacuation transports. With the arrival of tens of 
                    thousands of sick and dying prisoners, the living conditions in the camp deteriorated dramatically for the 
                    inmates. Above all, epidemics such as typhus and typhoid fever, but also hunger, were the main causes of the 
                    mass deaths that began at the time. The SS did not take any measures to combat the appalling sanitary and 
                    hygienic conditions in the camp. Several hundred people perished in the camp every day. As the capacity of 
                    the crematorium on the camp grounds was no longer sufficient to cremate the countless dead from March 1945 
                    onward, thousands of corpses decomposed on the camp grounds, which accelerated the outbreak of further epidemics. 
                    Only a few days before the Allies liberated the camp did burials of the dead in mass graves begin. At least 
                    52,000 people perished in the Bergen-Belsen concentration camp due to the inhumane conditions of internment. 
                    From 1943 to 1944 about 3,100 people died, from January 1945 until liberation on April 15, 1945 some 35,000 
                    people perished, and after liberation until the end of June 1945 a further 14,000 of those liberated passed 
                    away as a direct result of their imprisonment.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; The Bergen-Belsen concentration camp</h4>
                    <p style=\"font-size: 0.9rem;\">
                        The Bergen-Belsen concentration camp was initially founded in 1943 as an “exchange camp” to quarter 
                        Jewish hostages. However, it was quickly assigned other functions and a men’s and women’s camp was 
                        set up. From the end of 1944 onward, Bergen-Belsen became the destination of many death marches and 
                        evacuation transports, developing into a death camp due to the appalling conditions. After liberation, 
                        a Polish and a Jewish displaced persons camp were set up in Bergen-Belsen.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Map overview\">
                            &#10149; To the map of the camps
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">The Bergen-Belsen displaced persons camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After the liberation of Bergen-Belsen, the survivors were initially taken by the British army to the nearby 
                    Wehrmacht barracks, which had been cleared in the meantime. In addition to Katharina Hardy, thousands of other 
                    persons received medical treatment there. The Allies gave the people deported to Germany the legal status of 
                    “displaced persons” (DPs), which entitled them to special care.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                </p>
                <img class=\"img-fluid\" style=\"width: 660px;\" src=\"{{ asset('images/biographies/Hardy-DP-Camp.jpg') }}\"
                     alt=\"Photograph from the Bergen-Belsen DP camp. The Vienna Holocaust Library Collections, Photo Archive, call number 35/6/3/90\"/>
                <p class=\"caption\">
                    Photograph from the Bergen-Belsen DP camp. The Vienna Holocaust Library Collections, Photo Archive, call number 35/6/3/90.
                </p>
                <p>
                    When Katharina Hardy was on the road to recovery, she was scheduled for a convalescent transport to Sweden. 
                    At this time, she learned of her father’s survival via so-called Red Cross lists, which were kept by the 
                    German Red Cross as a kind of tracing service for missing relatives. After spending almost three months in 
                    the Bergen-Belsen DP camp, she therefore decided to return to Hungary, traveling via Bratislava to Budapest 
                    to see her father on 31 July 1945.
                </p>
                <p>
                    Most people from the Bergen-Belsen DP camp left Germany shortly after their liberation to emigrate to other 
                    countries or to return to their countries of origin. However, it was mainly Polish nationals and Jews who 
                    remained in the Bergen-Belsen DP camp. In the course of 1945, the living quarters of these two groups were 
                    separated. More than 10,000 people lived in the Polish DP camp until it was disbanded in 1946. The Jewish 
                    Bergen-Belsen DP camp existed for much longer. Around 12,000 persons from all over Europe lived here until 
                    mid-1950.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Return to Hungary and escape to Switzerland</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After returning to Hungary, Katharina Hardy resumed her education at the Franz Liszt Academy and completed 
                    her high school graduation diploma at the same time. She and her father joined to move back into the family’s 
                    old home. Her father was able to work again in his old profession as an accountant. He passed away in 1977.
                </p>
                <p>
                    In the winter of 1947, Katharina Hardy met her future husband, whom she married in 1950. They had two children 
                    together. On November 25, 1956, due to the Hungarian National Uprising – a nationwide revolt directed against 
                    Soviet rule<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup> 
                    – the small family fled Hungary via Austria to Regensdorf in Switzerland, where her husband had been offered a 
                    job as an engineer in Zurich.
                </p>
                <p>
                    Katharina Hardy’s third child was born in Switzerland in 1959. She had been active as a soloist and orchestral 
                    musician since 1957. From 1985 onward, she gave private violin lessons and invested her skills in the development 
                    of her students. She also trained two of her grandchildren to become professional musicians.
                </p>
                <p>
                    Katharina Hardy lived in Zurich until her death in 2022.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Source situation</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    This biography is primarily based on the stories and recollections of Katharina Hardy herself, which she 
                    processed in two interviews with the Bergen-Belsen Memorial.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup> 
                    The subjective descriptions of her experiences are supplemented by key historical data, which are mainly based 
                    on the catalog of the exhibition at the Bergen-Belsen Memorial. Little else is known about her deportation from 
                    Ravensbrück to the Bergen-Belsen concentration camp, as no transport list exists.
                </p>
                <img class=\"img-fluid\" style=\"width: 660px;\" src=\"{{ asset('images/biographies/Katharina-Hardy_2015.jpg') }}\"
                     alt=\"Katharina Hardy as a guest attending a memorial service in Bergen-Belsen, 2015 (detail). 
                     Bergen-Belsen Memorial Archive, inventory number 1600–4229, photo: Julia Lormis, 2015\"/>
                <p class=\"caption\">
                    Katharina Hardy as a guest attending a memorial service in Bergen-Belsen, 2015 (detail). 
                    Bergen-Belsen Memorial Archive, inventory number 1600–4229, photo: Julia Lormis, 2015.
                </p>
                <p>
                <p>
                    Katharina Hardy’s story makes it clear that the time after the end of the war was often still characterized 
                    by fears and insecurities, stays in DP camps, the search for relatives, coming to terms with a lost home, 
                    and the lengthy process of finding one’s way back into everyday life.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Bundeszentrale für politische Bildung [Federal Agency for Civic Education], 65 years ago: 
                    Ungarischer Volksaufstand, online at:
                    <a href=\"https://www.bpb.de/kurz-knapp/hintergrund-aktuell/342325/vor-65-jahren-ungarischer-volksaufstand\"
                       title=\"To the website of the Federal Agency for Civic Education (Bundeszentrale für politische Bildung)\">
                        https://www.bpb.de/kurz-knapp/hintergrund-aktuell/342325/vor-65-jahren-ungarischer-volksaufstand
                    </a>
                    (last accessed: May 5, 2024).
                </p>
                <p>
                    Das Bundesarchiv, Zwangsarbeit im NS-Staat. Jüdische Arbeitsbataillone, online at:
                    <a href=\" https://www.bundesarchiv.de/zwangsarbeit/haftstaetten/index.php?tab=21\"
                       title=\"To the website of the Federal Archives (Bundesarchiv)\">
                        https://www.bundesarchiv.de/zwangsarbeit/haftstaetten/index.php?tab=21
                    </a>
                    (last accessed: May 1, 2024).
                </p>
                <p>
                    Deutsches Historisches Museum, Todesmärsche: Die Räumung der Konzentrationslager 1944/45, online at:
                    <a href=\"https://www.dhm.de/lemo/kapitel/der-zweite-weltkrieg/voelkermord/todesmaersche.html\"
                       title=\"To the website of the German Historical Museum (Deutsches Historisches Museum)\">
                        https://www.dhm.de/lemo/kapitel/der-zweite-weltkrieg/voelkermord/todesmaersche.html
                    </a>
                    (last accessed: May 24, 2024).
                </p>
                <p>
                    Bernhard Strebel, “Der Lagerkomplex des KZ Ravensbrück,” in: Bundeszentrale für politische Bildung,
                    online at:
                    <a href=\"https://www.bpb.de/themen/holocaust/ravensbrueck/60686/der-lagerkomplex-des-kz-ravensbrueck\"
                       title=\"Website of the Federal Agency for Civic Education\">
                        https://www.bpb.de/themen/holocaust/ravensbrueck/60686/der-lagerkomplex-des-kz-ravensbrueck
                    </a>
                    (last accessed: July 26, 2024).
                </p>
                <p>
                    Lower Saxony Memorials Foundation, Bergen-Belsen. Kriegsgefangenenlager 1940-1945,
                    Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, Celle
                    2019.
                </p>
                <p>
                    Lower Saxony Memorials Foundation, The Displaced Persons Camp (1945–1950), online at:
                    <a href=\"https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950/\"
                       title=\"To the website of Lower Saxony Memorials Foundation\">
                        https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950
                    </a>
                    (last accessed: May 6, 2024).
                </p>
                <p>
                    75 Tage Gewalt, Mord, Befreiung. Das Kriegsende in Niedersachsen, Transport von Frauen und Kindern
                    in das KZ Bergen-Belsen, online at:
                    <a href=\"https://befreiung-1945.de/transport-von-frauen-und-kindern-in-das-kz-bergen-belsen\"
                       title=\"To the website of the Lower Saxony Memorials Foundation\">
                        https://befreiung-1945.de/transport-von-frauen-und-kindern-in-das-kz-bergen-belsen
                    </a>
                    (last accessed: July 26, 2024).
                </p>
                <p>
                    Yad Vashem – The World Holocaust Remembrance Center, Murder of Hungarian Jewry, online at:
                    <a href=\"https://www.yadvashem.org/holocaust/about/fate-of-jews/hungary.html#narrative_info\"
                       title=\"To the website of Yad Vashem\">
                        https://www.yadvashem.org/holocaust/about/fate-of-jews/hungary.html#narrative_info
                    </a>
                    (last accessed: May 01, 2024).
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Footnotes</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Lower Saxony Memorials Foundation / Bergen-Belsen Memorial, interview with Katharina Hardy on April 24, 2003, BV 81.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Cf. Yad Vashem – The World Holocaust Remembrance Center, Murder of Hungarian Jewry, online at:
                        <a href=\"https://www.yadvashem.org/holocaust/about/fate-of-jews/hungary.html#narrative_info\"
                           title=\"Website Yad Vashem\">
                            https://www.yadvashem.org/holocaust/about/fate-of-jews/hungary.html#narrative_info</a>
                        (last accessed: May 1, 2024).
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Cf. Das Bundesarchiv, Zwangsarbeit im NS-Staat. Jüdische Arbeitsbataillone, online at:
                        <a href=\"https://www.bundesarchiv.de/zwangsarbeit/haftstaetten/index.php?tab=21\"
                           title=\"Website of the Federal Archive (Bundesarchiv)\">
                            https://www.bundesarchiv.de/zwangsarbeit/haftstaetten/index.php?tab=21</a>
                            (last accessed: May 1, 2024).
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Lukkas Busche / Andreas Froese (ed.), Gardelegen 1945. Das Massaker und seine Nachwirkungen. 
                        Begleitender Katalog zur Dauerausstellung der Gedenkstätte Feldscheune Isenschnibbe Gardelegen, 
                        Gardelegen / Leipzig / Magdeburg 2022.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Cf. Deutsches Historisches Museum, Todesmärsche: Die Räumung der Konzentrationslager 1944/45, online at:
                        <a href=\"https://www.dhm.de/lemo/kapitel/der-zweite-weltkrieg/voelkermord/todesmaersche.html\"
                           title=\"Website of the German Historical Museum (Deutsches Historisches Museum)\">
                            https://www.dhm.de/lemo/kapitel/der-zweite-weltkrieg/voelkermord/todesmaersche.html</a>
                        (last accessed: May 24, 2024).
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Cf. Lower Saxony Memorials Foundation, Bergen-Belsen. Kriegsgefangenenlager 1940-1945, 
                        Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, 
                        Celle 2019, p. 232f.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        See Lower Saxony Memorials Foundation (ed.), Bergen-Belsen. Kriegsgefangenenlager 1940-1945, 
                        Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung, 
                        Celle 2009, p. 200.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>

                    <li id=\"endnote8\">
                        See Lower Saxony Memorials Foundation, The Displaced Persons Camp (1945–1950), online at:
                        <a href=\"https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950\"
                           title=\"To the website of the Lower Saxony Memorials Foundation\">
                            https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950</a>
                        (last accessed: May 6, 2024).
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        See Lower Saxony Memorials Foundation, The Displaced Persons Camp (1945-1950), online at:
                        <a href=\"https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950\"
                        title=\"To the website of the Lower Saxony Memorials Foundation\"> 
                            https://bergen-belsen.stiftung-ng.de/en/history/thedisplacedpersonscamp1945-1950</a> 
                        (last accessed: May 6, 2024).
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Cf. Bundeszentrale für politische Bildung [Federal Agency for Civic Education], 65 years ago: Ungarischer Volksaufstand, online at:
                        <a href=\"https://www.bpb.de/kurz-knapp/hintergrund-aktuell/342325/vor-65-jahren-ungarischer-volksaufstand\"
                           title=\"Website of the Federal Agency for Civic Education (Bundeszentrale für politische Bildung)\">
                            https://www.bpb.de/kurz-knapp/hintergrund-aktuell/342325/vor-65-jahren-ungarischer-volksaufstand</a>
                        (last accessed: May 5, 2024).
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Lower Saxony Memorials Foundation / Bergen-Belsen Memorial, interview with Katharina Hardy on December 15, 1995, BC 64.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                </ol>
            </div>
        </div>

        <h3 class=\"mt-4\">Citation reference</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Lara Meinert, “Katharina Hardy – Fokus ‘DP-Camp Bergen-Belsen’,” 
                    in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, 
                    edited by the Institute for the History of the German Jews,
                    URL: https://holocaust-ungarn-norddeutschland.de{{ path('app_bio_hardy') }}.
                    License: <a href=\"https://creativecommons.org/licenses/by/4.0/\" 
                    title=\"License terms on the Creative Commons website\">CC BY 4.0</a>.
                </p>
            </div>
        </div>

    </div>

    <script>

        const budapest = L.marker([47.5, 19.05]).bindPopup('<strong>Budapest</strong><br/>');

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
                budapest,
            ]
        });

        const baseLayers = {
            'OpenStreetMap': osm,
        };

        const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    </script>

{% endblock %}", "biographies/hardy.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/biographies/hardy.en.html.twig");
    }
}
