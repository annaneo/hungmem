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

/* studies/dessauer-ufer.en.html.twig */
class __TwigTemplate_6564bec6a61b5819df20f56e142f59a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/dessauer-ufer.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/dessauer-ufer.en.html.twig"));

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

        yield " Group study Dessauer Ufer | ";
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

    <div class=\"container g-4 py-5 study\">
        <h2>The women of the Dessauer Ufer satellite camp. Forced labor in urban areas</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Some 200,000 of the Jews deported from Hungary had to perform forced labor. Starting in mid-1944, they were 
                    distributed via Auschwitz and annexed Austria to various satellite camps in the German Reich and in the occupied 
                    territories. They thus formed the lower end of the racially hierarchical, comprehensive National Socialist forced 
                    labor system. Many of the Jewish concentration camp prisoners were used in the underground relocation of the 
                    armaments industry, which the National Socialists had switched to from 1943 onward in view of Allied air 
                    superiority. However, the forced labor of Hungarian Jews was also used in other branches of the armaments 
                    industry and for clearing rubble in factories and German cities. The forced labor of Jewish prisoners was 
                    thus a visible part of everyday life in Nazi Germany.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">From Auschwitz to Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In July 1944, a group of 1,000 women in Auschwitz-Birkenau were assembled by the SS for labor duty in Germany 
                    and forced to board a freight train. The women, who knew neither where they would be transported nor what 
                    awaited them, reached the port of Hamburg after a few days.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    When the women got off the train at Dessauer Ufer, marked by the hardships of the transport, various other groups 
                    of forced laborers were already quartered in the warehouses there. Surviving women later told of Italian 
                    military internees in particular, who were accommodated in the immediate vicinity of the women and who greeted 
                    them through the windows.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                    The realization that they had left Auschwitz behind and had been deported to a camp for forced labor, as well 
                    as being greeted by the Italians, who made the women feel human after their dehumanizing experiences in 
                    Auschwitz, was described by some survivors in retrospect as the first moment of their imprisonment in which 
                    they gained hope that they would survive their time there.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Titelbild-Dessauer-Ufer.png"), "html", null, true);
        yield "\"
                     alt=\"View of the warehouse on Dessauer Ufer from the waterside\"/></a>
                <p class=\"caption\">
                    Lagerhaus G, a warehouse on Dessauer Ufer, served as a satellite camp from 1944 onward, view from the waterside. 
                    Photo: Stiftung Hamburger Gedenkstätten und Lernorte zur Erinnerung an die Opfer der NS-Verbrechen, 
                    Rainer Viertlböck, 2020, 
                    <a href=\"https://gedenkstaetten-in-hamburg.de/en/memorials/show/memorial-plaques-on-lagerhaus-g-dessauer-ufer-satellite-camp\"
                       title=\"More information on the website for Hamburg memorials\">https://gedenkstaetten-in-hamburg.de/en/memorials/show/memorial-plaques-on-lagerhaus-g-dessauer-ufer-satellite-camp</a>.
                </p>
                <p>
                    In fact, the food and provisions at Dessauer Ufer were significantly better than in the Auschwitz concentration 
                    and extermination camp. Survivor Hédi Fried reported that each woman was given her own loft bunk in the bunk 
                    beds that were set up, including a mattress.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup> Some survivors 
                    also reported on the first meal, which was perceived as extremely extensive compared to Auschwitz-Birkenau. 
                    Nevertheless, the food at Dessauer Ufer was not sufficient and the Jewish concentration camp prisoners were 
                    at the bottom of the hierarchy of forced laborers under National Socialism. Hédi Fried and other survivors 
                    recalled that for a time, they were initially given the same lunch as the other workers by a company during 
                    their work assignments in the port of Hamburg, until this was stopped by the camp commandant.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    There was no provision for sufficient food for the concentration camp prisoners or equality with other workers, 
                    and the women’s imprisonment on the Dessauer Ufer, too, was characterized by hunger in the ensuing period.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Where did the women on Dessauer Ufer come from?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The detention facility in the Dessauer Ufer warehouse was a satellite camp of Neuengamme concentration camp. 
                    The women in the Dessauer Ufer satellite camp arrived on two transports from Auschwitz. Around half of the first 
                    transport in July 1944 was comprised of Jewish women who had only recently arrived in Auschwitz from the 
                    Theresienstadt ghetto and were mainly from what was then Czechoslovakia. The other half were Jewish women 
                    who had been deported from Hungary, which had recently been occupied by the Germans. Some of the women from 
                    occupied Hungary came from areas that had only been occupied or annexed by Hungary itself in 1943 and had 
                    previously belonged to Czechoslovakia and Romania. The second transport in August 1944 included mainly Jewish 
                    women who had previously arrived in Auschwitz from the Litzmannstadt (Łódź) ghetto. Many of them came from Poland, 
                    but some of them also from Germany.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                </p>
                <p>
                    While the women deported from Theresienstadt and Łódź had already been subjected to Nazi persecution for 
                    several years, the women from occupied Hungary had only been forced into ghettos a few months earlier and 
                    deported shortly afterward. Some of them had been deported directly from their hometowns to the Auschwitz 
                    concentration and extermination camp, while often the other women had already been deported several times. 
                    The women from occupied Hungary were therefore still in relatively good physical condition. Their arrival 
                    in Auschwitz-Birkenau was a shock for many: They were “selected” and separated from relatives and friends, 
                    and subjected to the dehumanizing treatment of the SS, which included degrading undressing in front of the 
                    guards, hair shaving, and everyday violence.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Jewish men and women</h4>
                    <p>
                        The Jewish men and women deported from Hungary belonged to various communities and religious movements 
                        within Judaism. Not all of them necessarily defined themselves as Jewish. Neither their religion nor their 
                        cultural affiliation to Judaism or self-identification was decisive for their persecution by the 
                        National Socialists. At the heart of the National Socialist worldview was a racist antisemitism that 
                        defined Jews according to their descent. Christians and atheists were also persecuted as Jews by the 
                        National Socialists, regardless of their self-definition or cultural affiliation, if they met their 
                        criteria of descent. Not all of the persons referred to here as Jews identified themselves as Jewish, 
                        but they were all persecuted as Jewish.
                    </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\">Different experiences of persecution – prisoner groups on Dessauer Ufer</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The women of the three groups on Dessauer Ufer differed significantly in their experience of persecution. 
                    This was accompanied by mutual perceptions of supposed and actual privilege, which, according to the 
                    survivors’ reports, sometimes existed between the women of the different groups. For example, the survivor 
                    Paula Hermann reported that the Czech women whose hair had not been shaved off were referred to as 
                    “the hairy ones” by the women from Hungary.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                    There were also language barriers: The women from Theresienstadt generally spoke Czech and sometimes German, 
                    the women from Łódź Polish, German or Yiddish, and the women deported from Hungary mainly Hungarian, but 
                    also Romanian, Yiddish, German or, in the case of the women from Transcarpathia, which had previously belonged 
                    to Czechoslovakia, Czech as well. These barriers also existed within the women deported from Hungary, 
                    particularly with regard to the territories annexed by Hungary. The women also differed in terms of their 
                    social background and religiosity. Many surviving women reported that they joined up with women from 
                    the same region of origin and tried to stay together and support each other.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    Some women also managed to stay together with relatives. For example, the two sisters Hédi Fried, née Szmuk, 
                    and her sister Livia Fraenkel, also née Szmuk, survived their time in prison together.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                    The life-saving mutual support in such camp families can be found in many reports by female survivors and 
                    it was made possible, among other things, by the fact that the women were deported as a group and were 
                    therefore able to stay with each other.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; More on the historical background</h4>
                    <p>
                        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Historical context\">
                            &#10149; More on Hungary in the Second World War
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Forced labor in the port of Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The forced labor of the women in the port of Hamburg began on the very first day after their arrival. 
                    The prisoners were divided into various work detachments and taken to their places of work by ferry or on foot. 
                    The prisoners were deployed in particular in the heavily bombed mineral oil industry, where they had to 
                    clear rubble. This work was not only physically demanding, but the prisoners also came into contact with 
                    toxic substances from which they were not protected and which irritated their respiratory tracts. The 
                    concentration camp prisoners worked in the industrial plants alongside forced laborers from the Soviet Union, 
                    prisoners of war and Italian military internees, as well as ordinary German civilian workers.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    The routes to their places of work also overlapped for these different groups of people, so the ferries that 
                    took the women from Dessauer Ufer to their places of work transported Italian military internees and German 
                    civilians as well. Despite attempts to separate the groups from one another, for example by accommodating them 
                    in separate areas of the ferry, the different groups repeatedly came into contact with one another. Some of the 
                    surviving women reported individual German civilians who supported them with hidden food.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup>
                    As a rule, however, the prisoners and their suffering were ignored by the German civilians. The women mainly 
                    received support from other forced laborers with whom they were able to make contact. Although they also went 
                    hungry, their rations were more extensive than those of the concentration camp prisoners. The starving prisoners 
                    secretly received food and information about the course of the war from Italian military internees in particular, 
                    and later also from French prisoners of war, all tied to the hope that they would soon be liberated.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                </p>
                <p>
                    For the detainees, the regular bombing of Hamburg was also a clearly visible sign of the Allied war effort. 
                    The prisoners were actually particularly at risk from the bombing, as they were barely protected and, unlike 
                    German civilians, were generally unable to take refuge in bunkers. Survivor Ilona Blair, like many survivors, 
                    described how the bombings were nevertheless perceived with joy by the prisoners, as they often offered a break 
                    from work and also gave them hope of liberation, as they demonstrated Allied progress in the war against the 
                    German Reich.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Forced labor</h4>
                    <p>
                        National Socialist Germany made extensive use of forced labor to meet its labor needs; in the 
                        German Reich alone, over 13.5 million people had to perform forced labor during the Second World War. 
                        Forced labor was used in all branches of industry, but also in agriculture and in private households. 
                        Forced laborers were a visible part of everyday life in National Socialist Germany, especially in 
                        the final years of the war.
                    </p>
                    <p>
                        <a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "#zwangsarbeit\"
                           title=\"More information on forced labor and historical context\">
                            &#10149; More information on forced labor
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Why did the prisoners come to Hamburg?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After large parts of the city had been destroyed by British bombing as part of “Operation Gomorrah” in the 
                    summer of 1943, extensive discussions about the use of concentration camp prisoners began in Hamburg as well. 
                    Forced labor by concentration camp prisoners in SS construction brigades had already been used during the initial 
                    reconstruction period starting in late summer 1943. After further bombing raids jeopardized the reconstruction 
                    and the accelerated expansion of Hamburg’s armaments industry in mid-1944, extensive use was made of the 
                    prisoners’ labor. Within a very short time, various Hamburg offices applied for the allocation of 15,500 prisoners 
                    overall. The SS was able to fulfill slightly more than half of these requests. A particularly large number of 
                    Hungarian Jews who had only recently been deported were used, as they were still in much better health at the 
                    time than many of the concentration camp prisoners who had been imprisoned for longer. Most likely, the women at 
                    the Dessauer Ufer satellite camp, about a third of whom came from Hungary, were originally intended for construction 
                    of makeshift housing. Providing the German civilian population with housing was intended not least to counteract 
                    demoralization and ensure support for the National Socialist regime and its war effort. This supply was to be 
                    guaranteed through the exploitation of concentration camp prisoners. In May 1944, the Reich Housing Commissioner 
                    Robert Ley announced that he had been assigned 20,000 Hungarian Jews by the SS, whom he in turn offered to the 
                    respective cities as laborers. One can assume that Hamburg also applied for the allocation of prisoners in this 
                    process. Before the first transport arrived in Hamburg in July 1944, however, the port of Hamburg’s oil industry, 
                    which was vital to the war effort, had been heavily bombed in mid-June 1944. The Allies had recognized the supply 
                    of fuel as a crucial weak point in the German war effort and began systematically bombing the relevant industrial 
                    facilities in 1944. The National Socialists responded with an immediate program to secure the fuel supply, also 
                    known as the Geilenberg Program after its leader Edmund Geilenberg, which made use of the forced labor of 
                    concentration camp inmates as well. As the restoration of operations at the Hamburg oil refineries was considered 
                    more important than the construction of makeshift housing, the women from the Dessauer Ufer satellite camp were 
                    initially deployed there before being forced to work primarily on building housing and clearing rubble from 
                    September 1944 onward.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Temporary housing for the civilian population of Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In September 1944, the women’s satellite camp on Dessauer Ufer was disbanded. Shortly afterward, a men’s 
                    satellite camp of Neuengamme concentration camp was set up at the same location. The women were divided into 
                    three groups of about 500 persons each and distributed to new women’s satellite camps in and around Hamburg. 
                    For the most part, they remained together in groups according to their origin. Most of the women deported 
                    from Hungary were initially transferred to the Wedel satellite camp. From there, too, they were mainly deployed 
                    to clear rubble in Hamburg, reaching their places of work on foot and by ferry. After two weeks, they were 
                    taken to the Eidelstedt satellite camp in the north of Hamburg. There, in addition to clearing work, they also 
                    had to carry out construction work and build houses for the bombed-out population of Hamburg in the vicinity of 
                    the camp. In the final months before the end of the war in particular, once again the prisoners had to clear 
                    snow and rubble in the Hamburg city area.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                </p>
                <a href=\"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Deportationsroute-Dessauer-Ufer-en.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"map-dessauer-ufer\"
                   data-title=\"The deportation route of the Hungarian prisoners from the Dessauer Ufer satellite camp to other satellite camps 
                    of Neuengamme concentration camp\">
                    <img class=\"gallery img-fluid\"
                         src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Deportationsroute-Dessauer-Ufer-en.jpg"), "html", null, true);
        yield "\"
                         alt=\"The deportation route of the Hungarian prisoners from the Dessauer Ufer satellite camp to other satellite camps 
                    of Neuengamme concentration camp\"/>
                </a>
                <p class=\"caption\">
                    The deportation route of the Hungarian prisoners from the Dessauer Ufer satellite camp to other satellite camps 
                    of Neuengamme concentration camp. Institute for the History of the German Jews. 
                    License: CC BY 4.0 &#128269; Click to enlarge.
                </p>
                <p>
                    Occasionally, the prisoners found food in the ruins, which was essential for the severely malnourished women. 
                    In addition to hunger, the survivors also reported about the cold, from which their thin prisoner clothing 
                    provided little protection. As in other satellite camps, the prisoners tried to protect themselves from the 
                    cold by placing empty cement sacks under their clothing, although this was forbidden and severely punished. 
                    At this time, the malnourished and undersupplied prisoners were a visible part of everyday life in Hamburg. 
                    Their work sites were located in the middle of inhabited neighborhoods, which they reached by walking or 
                    being transported by streetcar. Looking back, survivor Hédi Fried asked herself, “What did they think when 
                    they saw us: women emaciated to the point of skeletons, in thin clothing, bent over, shoveling snow? Or did 
                    they not see us? You can’t see what you don’t want to see. A few people stopped and watched us, but no one 
                    came closer or asked questions. Later they would say they didn’t know anything. And even later that it was all a lie.”<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Geschwister_szmuk.jpg"), "html", null, true);
        yield "\"
                     alt=\"Hédi Fried and her sister Livia Fraenkel standing next to each other\"/></a>
                <p class=\"caption\">
                    Hédi Fried and her sister Livia Fraenkel one year after their liberation in Sweden. Private property: Hédi Fried.</p>
                <p>
                    On March 1, 1945, some of the prisoners were deployed to clear rubble in the center of Hamburg. On their 
                    return journey by streetcar, they were hit by a collapsing house on Steindamm near Hamburg Central Station 
                    and buried under it. At least 20 prisoners were confirmed to have died; survivors reported that half of 
                    the occupants of the two front carriages did not survive the accident.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup> 
                    Survivor Ilona Blair reported that at the beginning, passers-by who happened to be present helped the prisoners 
                    to rescue the many injured women, but that this was forbidden by the SS men on guard duty.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    The prisoners, some of whom were seriously injured, were transported to the small infirmary of the Eidelstedt 
                    satellite camp by their fellow prisoners. There was no medication or medical care available for the inmates; 
                    instead, Blair reported how the concentration camp prisoner assigned to care for the sick was given poison 
                    injections to murder the injured women who would not be able to become fit for work again on their own. After 
                    she refused, she was removed from her position and presumably murdered.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup> 
                    The murder of sick prisoners was also part of SS practice at other satellite sites of Neuengamme concentration 
                    camp. It is not known how many injured prisoners died due to a lack of medical care or direct murder.
                </p>

                    <img class=\"img-fluid\"
                         src=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Zeitungsausschnitt.jpg"), "html", null, true);
        yield "\"
                         alt=\"Excerpt from the Hamburger Anzeiger, which briefly reports on the streetcar accident\"/>
                <p class=\"caption\">
                    Newspaper report on the streetcar accident: “Folgenschweres Unglück,” in: Hamburger Anzeiger, March 2, 1945, p. 2, 
                    Staats- und Universitätsbibliothek Hamburg Carl von Ossietzky, Germany – Public Domain, Europeana, online at:
                    <a href=\"https://www.europeana.eu/item/9200338/BibliographicResource_3000117673612\"
                       title=\"Newspaper report on the Europeana website\">https://www.europeana.eu/item/9200338/BibliographicResource_3000117673612</a>.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Wedel satellite camp (women)</h4>
                    <p>
                        From September 1944, 500 Hungarian and Czech Jewish women, who had previously been at Dessauer Ufer 
                        and had to perform forced labor in clearing work in the city, were imprisoned in the Wedel satellite 
                        camp of Neuengamme concentration camp. After two weeks, the camp was evacuated and the women were 
                        taken to the Eidelstedt satellite camp.
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Hamburg-Eidelstedt satellite camp</h4>
                    <p>
                        The satellite camp of Neuengamme concentration camp was established in September 1944. 
                        The approximately 500 prisoners had previously been imprisoned in the Wedel satellite camp and had 
                        to perform forced labor, particularly in the construction of makeshift residential homes. 
                        The prisoners were deported to Bergen-Belsen at the beginning of April 1945.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Evacuation of the Hamburg camps to the Bergen-Belsen concentration camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    As the end of the war became increasingly apparent in early April 1945, the National Socialists began to 
                    cover their tracks in Hamburg and evacuate the camps in the city. The women in the Eidelstedt satellite camp 
                    were once again forced to board a freight train, which arrived at the Bergen-Belsen concentration camp three 
                    days later. The prisoners had not received any food during the journey. When they reached Bergen-Belsen, the 
                    concentration camp was already overcrowded. Bergen-Belsen became a camp for dying prisoners [Sterbelager].
                </p>
                <p>
                    The time in Bergen-Belsen was described by many of the surviving women as one of the worst. The food they were 
                    given was not enough to survive and there was hardly any drinking water, so some of the prisoners drank from 
                    puddles.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup> When British forces liberated the camp on 
                    April 15, 1945, they found tens of thousands of prisoners, some of whom were on the verge of starvation and 
                    living among unburied corpses. Survivor Hédi Fried reported that she was so weak at the time of her liberation 
                    that she could barely stand up.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup>
                    Many prisoners died even after liberation as a result of their imprisonment. It is not possible to determine 
                    how many of the prisoners from Hungary who arrived at Dessauer Ufer in July 1944 survived their imprisonment 
                    in Hamburg and Bergen-Belsen. One can assume that many did not survive the conditions under which the SS forced 
                    them to live and work. Survivor Ilona Blair supposes that only half of her group survived.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup>
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
                        and a Jewish displaced persons camp were set up in Bergen-Belsen.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 357
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Map overview\">
                            &#10149; To the map of the camps
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Sources and research</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The efforts of Hamburg industry and administration to deploy concentration camp prisoners are well documented, 
                    even if the exact processes that led to the respective deployment of the prisoner group described cannot be 
                    established.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup>
                    The satellite camps on Dessauer Ufer, in Wedel, and in Eidelstedt were administered centrally at the Neuengamme 
                    main camp, almost all of whose records were destroyed by the SS before liberation. The work assignments, 
                    guarding, and living conditions of the prisoners can therefore be reconstructed primarily from the accounts of 
                    known survivors, many of whom were interviewed in the 1990s as part of a research project on women’s satellite 
                    camps at Neuengamme concentration camp.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup>
                    The survivor Hédi Fried also published her memories in book form in 1992.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Dessauer-Ufer-Ueberlebende.jpg"), "html", null, true);
        yield "\"
                     alt=\"Czech survivors on Dessauer Ufer: six elderly surviving women stand side by side\"/>
                <p class=\"caption\">
                    Czech survivors on Dessauer Ufer in the 1980s. Archive Neuengamme Concentration Camp Memorial, F 2015-273.
                </p>
                <p>
                    Individual documents relating to those killed in the streetcar accident, several of whose names are known, 
                    have also been preserved. Some survivors reported other deaths during their imprisonment, but no documents 
                    can be found for them, and thus their names remain unknown.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
                    On the other hand, many of the so-called WVHA prisoner index cards or Hollerith pre-cards have been preserved. 
                    Starting in mid-1944, the SS had begun in most concentration camps to set up prisoner detachments that 
                    transferred the information from the camps’ own prisoner records to standardized prisoner index cards, which 
                    were sent to a central institute of the SS Economic Administration Main Office (WVHA) in Berlin. In this 
                    “Central Mechanical Institute for Optimal Human Recording and Evaluation,” the information was to be transferred 
                    to punch cards so that the prisoner information could be recorded centrally and processed using a so-called 
                    “Hollerith machine.” While the Neuengamme concentration camp’s own prisoner records and the punched cards 
                    themselves have not survived, the standardized index cards are largely still in existence. However, they only 
                    contain information usable and machine-readable by the SS, i.e. the inmates’ prisoner numbers, nationality, 
                    gender, dates of birth, occupations and deportation dates, but no names.<sup><a href=\"#endnote29\" id=\"footnote29\">29</a></sup>
                    These sources thus exemplify the dehumanizing bureaucratic view of the National Socialists, who degraded people 
                    to mere numbers. In particular, the names of the murdered prisoners who did not survive concentration camp 
                    imprisonment, but also of the survivors who, for a variety of reasons, did not give documented interviews about 
                    their time in prison, cannot be ascertained.
                </p>
                <a href=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Haeftlingskarte.jpg"), "html", null, true);
        yield "\"
                   data-lightbox=\"dessauer-ufer-haeftlingskarte\"
                   data-title=\"So-called Hollerith pre-card of a prisoner in the Dessauer Ufer satellite camp, Bundesarchiv, BArch, NS 3/1577.\">
                <img class=\"gallery img-fluid\" src=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/dessauer-ufer/Haeftlingskarte_preview.jpg"), "html", null, true);
        yield "\"
                     alt=\"Hollerith pre-card of a prisoner with information on the type of prisoner - in this case: 
                     Jew - date of birth, dates of admission, occupation and other details\"/>
                </a>
                <p class=\"caption\">
                    So-called Hollerith pre-card of a prisoner in the Dessauer Ufer satellite camp, Bundesarchiv, BArch, NS 3/1577. 
                    &#128269; Click to enlarge.
                </p>
                <p>
                    The few reports of the survivors interviewed provide insights into the places of work and the perspective of 
                    the prisoners. They are therefore not only important sources on the history of the satellite camps, but also 
                    enable a change of perspective from the sources of the National Socialist bureaucracy, in which the prisoners 
                    only appear as passive human material, to the people concerned and to their perception, but also to their handling 
                    of the violent situation to which they were subjected. The interviews, usually recorded decades after liberation, 
                    are shaped by individual and social processes of coping and repression and the specific interview situation. The 
                    survivors also reported on the respective camps in the context of their entire history of persecution. Some of 
                    the survivors described their imprisonment at Dessauer Ufer as “luxury” or as an ascent from “hell to heaven,” 
                    which only makes sense against the background of the entire interview and the experiences shared in Auschwitz 
                    and Bergen-Belsen.<sup><a href=\"#endnote30\" id=\"footnote30\">30</a></sup>
                    This does not constitute a statement detached from their own perception of the life-threatening and 
                    dehumanizing living conditions at Dessauer Ufer.
                </p>
                <p>
                    Knowledge about the prisoners, the conditions of their detention, and their individual perceptions therefore 
                    inevitably remains fragmentary. Even the names of the vast majority of prisoners are unknown and cannot be 
                    determined. The murdered persons in particular often remain nameless.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <ul class=\"bibliography\">
                    <li>
                        Randolp L. Braham (ed.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1,
                        Evanston 2013.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Lucy Debus, “Hamburg das war die Wende.” Das KZ-Außenlager Dessauer Ufer in den Erinnerungen
                        weiblicher Überlebender, unpublished Master’s thesis, Bremen 2021.
                    </li>
                    <li>
                        Hans Ellger, “Hamburg-Dessauer Ufer (Frauen),” in: Wolfgang Benz / Barbara Diestel (eds.), Der Ort
                        des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Vol. 5: Hinzert.
                        Auschwitz. Neuengamme, München 2007, pp. 394-396.
                    </li>
                    <li>
                        Hans Ellger, Zwangsarbeit und weibliche Überlebensstrategien. Die Geschichte der
                        Frauenaußenlager des Konzentrationslagers Neuengamme 1944/1945, Berlin 2007.
                    </li>
                    <li>
                        Hédi Fried, Fragmente meines Lebens. Ein Leben bis Auschwitz und ein Leben danach, 
                        licensed edition Hamburg 2023, original British edition [Fragments of a Life: The Road 
                        to Auschwitz] 1990.
                    </li>
                    <li>
                        Susanne Heim et al. (eds.), Die Verfolgung und Ermordung der europäischen Juden durch das
                        nationalsozialistische Deutschland 1933-1945, Band 15. Ungarn 1944-1945. Edited by Regina
                        Fritz, Berlin / Boston 2021.
                    </li>
                    <li>
                        Lisa Hellriegel, Weibliche Überlebensstrategien? Eine Sekundäranalyse der Oral
                        History-Interviews von Hans Ellger mit den Überlebenden der Hamburger Frauen-Außenlager des KZ
                        Neuengamme, unpublished Master’s thesis, Hamburg 2021.
                    </li>
                    <li>
                        Christian Römmer, “Digitalisierung der WVHA-Häftlingskartei,” in: Gedenkstätten-Rundbrief 150
                        (2009), pp. 20-25.
                    </li>
                    <li>
                        Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001.
                    </li>
                    <li>
                        Lower Saxony Memorials Foundation (ed.), Bergen-Belsen. Kriegsgefangenenlager 1940-1945.
                        Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung,
                        Celle 2009.
                    </li>
                    <li>
                        Studentische Forschungsgruppe Dessauer Ufer / Stiftung Hamburger Gedenkstätten und Lernorte zur
                        Erinnerung an die Opfer der NS-Verbrechen (eds.), Das Lagerhaus G am Dessauer Ufer. Ein
                        ehemaliges Außenlager des KZ Neuengamme auf dem Kleinen Grasbrook, Hamburg 2022.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Footnotes</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, p. 87. 
                        For the perspective of a survivor, see Hédi Fried, Fragmente meines Lebens. Ein Leben bis Auschwitz und 
                        ein Leben danach, licensed edition Hamburg 2023, original British edition [Fragments of a Life: The Road 
                        to Auschwitz] 1990, pp. 112–116.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Cf. e.g. Fried, Fragmente, p. 119, or the Czech survivor Dita Kraus: Dita Kraus, Ein aufgeschobenes Leben - 
                        Kindheit im Konzentrationslager - Neuanfang in Israel, Göttingen 2020, p. 159f.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Cf. interview with Esther Rosenbaum on June 28, 1998 in Hamburg, interviewer Hans Ellger, total length 00:50:07, 
                        ANG: M 2019-0030; interview with Paula Herrmann on March 5, 2000 in Haifa, interviewer Hans Ellger, 
                        total length 01:48:29, ANG: M 2013-0050, M 2013-0051. There is also a film about the perspective of 
                        Czech women: Jurgen Kinter, “Hamburg, das war die Wende.” Stationen einer gemeinsamen Geschichte. 
                        Prag, Theresienstadt, Auschwitz, Hamburg, Bergen-Belsen, Prag. Margit Hermannova, 
                        Edith Kraus und Dagmar Lieblova erinnern sich (1999/2002).
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Cf. Fried, Fragmente, p. 116.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Cf. Fried, Fragmente, p. 118.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Cf. Hans Ellger, “Hamburg-Dessauer Ufer (Frauen),” in: Wolfgang Benz / Barbara Diestel (eds.), 
                        Der Ort des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Vol. 5: Hinzert. Auschwitz. 
                        Neuengamme, Munich 2007, pp. 394–396; Idem., Zwangsarbeit und weibliche Überlebensstrategien. 
                        Die Geschichte der Frauenaußenlager des Konzentrationslagers Neuengamme 1944/1945, Berlin 2007, pp. 76–79.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        On the history of the deportations from Hungary, see Susanne Heim et al. (eds.), Die Verfolgung und Ermordung 
                        der europäischen Juden durch das nationalsozialistische Deutschland 1933-1945, Vol. 15. Ungarn 1944–1945. 
                        Edited by Regina Fritz, Berlin / Boston 2021; Randolp L. Braham (ed.), The geographical encyclopedia of the 
                        Holocaust in Hungary, Vol. 1, Evanston 2013. On the survivors’ perspective, see Fried, Fragmente, pp. 83–113.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Interview with Paula Herrmann, 2000; Hédi Fried also reported that the Hungarian prisoners had envied the 
                        Czech prisoners for their hair, but also that “their story of suffering [...] was much longer”: Fried, 
                        Fragmente, p. 120.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        See: Lisa Hellriegel, Weibliche Überlebensstrategien? Eine Sekundäranalyse der Oral History-Interviews 
                        von Hans Ellger mit den Überlebenden der Hamburger Frauen-Außenlager des KZ Neuengamme, unpublished 
                        Master’s thesis, Hamburg 2021, especially pp. 26–31; Lucy Debus, “Hamburg das war die Wende.” 
                        Das KZ-Außenlager Dessauer Ufer in den Erinnerungen weiblicher Überlebender, unpublished Master’s thesis, 
                        Bremen 2021.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Cf. Fried, Fragmente.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Cf. Ellger, Überlebensstrategien, pp. 155, 159–162, 302–308, interview with Paula Hermann, 2000; 
                        Fried, Fragmente; interview with Ilona Blair on November 10, 1980, interviewer Sophie Caplan, 
                        United States Holocaust Memorial Museum Collection, acquired from Sophie Caplan RG-50.617.0006, 
                        United States Holocaust Memorial Museum, Washington, DC, online at:
                        <a href=\"https://collections.ushmm.org/search/catalog/irn50932\"
                        title=\"Website of the United States Holocaust Memorial Museum\">
                            https://collections.ushmm.org/search/catalog/irn50932</a> (last accessed: July 11, 2024).
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        For example, Paula Hermann: Interview with Paula Hermann, 2000.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Cf. e.g. interview with Ilona Blair, 1980.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Cf. interview with Ilona Blair, 1980; interview with Paula Hermann, 2000.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Cf. Buggeln, Arbeit und Gewalt, pp. 85–91; Ellger, Überlebensstrategien, pp. 159-163.
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Cf. e.g. Fried, Fragmente, pp. 121-154, Ellger, Überlebensstrategien, pp. 162–163; Buggeln, 
                        Arbeit und Gewalt, p. 275.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Fried, Fragmente, p. 150.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Cf. Fried, Fragmente, pp. 140–142, Interview Ilona Blair 1980.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Cf. interview with Ilona Blair 1980.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Cf. interview with Ilona Blair 1980.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Cf. Fried, Fragmente, p. 163.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Cf. Fried, Fragmente, pp. 166f.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Cf. interview with Ilona Blair, 1980.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        See Lower Saxony Memorials Foundation (ed.), Bergen-Belsen. Bergen-Belsen. Kriegsgefangenenlager 
                        1940–1945, Konzentrationslager 1943–1945, Displaced Persons Camp 1945–1950. Katalog der Dauerausstellung, 
                        Celle 2009, p. 200.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Buggeln, Arbeit und Gewalt, pp. 85–91.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Ellger, Überlebensstrategien.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Fried, Fragmente.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Cf. interview with Ilona Blair, 1980.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Christian Römmer, “Digitalisierung der WVHA-Häftlingskartei,” in: Gedenkstätten-Rundbrief 150 (2009), p. 20.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Interview Ilona Blair 1980; Fried, Fragmente, p. 116.
                        <a href=\"#footnote30\">&uarr;</a>
                    </li>
                </ol>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Citation reference</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Louis Wörner, “Zwangsarbeit in Hamburg,” 
                    in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, 
                    edited by the Institute for the History of the German Jews, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 667
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_dessauerUfer");
        yield ".
                    License: <a href=\"https://creativecommons.org/licenses/by/4.0/\"
                               title=\"License terms on the Creative Commons website\">CC BY 4.0</a>.
                </p>
            </div>
        </div>

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
        return "studies/dessauer-ufer.en.html.twig";
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
        return array (  798 => 667,  534 => 406,  528 => 403,  501 => 379,  476 => 357,  408 => 292,  384 => 271,  360 => 250,  352 => 245,  291 => 187,  238 => 137,  139 => 41,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.en.html.twig' %}

{% block title %} Group study Dessauer Ufer | {{ parent() }} {% endblock %}

{% block body %}
    

    <div class=\"container g-4 py-5 study\">
        <h2>The women of the Dessauer Ufer satellite camp. Forced labor in urban areas</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    Some 200,000 of the Jews deported from Hungary had to perform forced labor. Starting in mid-1944, they were 
                    distributed via Auschwitz and annexed Austria to various satellite camps in the German Reich and in the occupied 
                    territories. They thus formed the lower end of the racially hierarchical, comprehensive National Socialist forced 
                    labor system. Many of the Jewish concentration camp prisoners were used in the underground relocation of the 
                    armaments industry, which the National Socialists had switched to from 1943 onward in view of Allied air 
                    superiority. However, the forced labor of Hungarian Jews was also used in other branches of the armaments 
                    industry and for clearing rubble in factories and German cities. The forced labor of Jewish prisoners was 
                    thus a visible part of everyday life in Nazi Germany.
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">From Auschwitz to Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In July 1944, a group of 1,000 women in Auschwitz-Birkenau were assembled by the SS for labor duty in Germany 
                    and forced to board a freight train. The women, who knew neither where they would be transported nor what 
                    awaited them, reached the port of Hamburg after a few days.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup>
                    When the women got off the train at Dessauer Ufer, marked by the hardships of the transport, various other groups 
                    of forced laborers were already quartered in the warehouses there. Surviving women later told of Italian 
                    military internees in particular, who were accommodated in the immediate vicinity of the women and who greeted 
                    them through the windows.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup>
                    The realization that they had left Auschwitz behind and had been deported to a camp for forced labor, as well 
                    as being greeted by the Italians, who made the women feel human after their dehumanizing experiences in 
                    Auschwitz, was described by some survivors in retrospect as the first moment of their imprisonment in which 
                    they gained hope that they would survive their time there.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/Titelbild-Dessauer-Ufer.png') }}\"
                     alt=\"View of the warehouse on Dessauer Ufer from the waterside\"/></a>
                <p class=\"caption\">
                    Lagerhaus G, a warehouse on Dessauer Ufer, served as a satellite camp from 1944 onward, view from the waterside. 
                    Photo: Stiftung Hamburger Gedenkstätten und Lernorte zur Erinnerung an die Opfer der NS-Verbrechen, 
                    Rainer Viertlböck, 2020, 
                    <a href=\"https://gedenkstaetten-in-hamburg.de/en/memorials/show/memorial-plaques-on-lagerhaus-g-dessauer-ufer-satellite-camp\"
                       title=\"More information on the website for Hamburg memorials\">https://gedenkstaetten-in-hamburg.de/en/memorials/show/memorial-plaques-on-lagerhaus-g-dessauer-ufer-satellite-camp</a>.
                </p>
                <p>
                    In fact, the food and provisions at Dessauer Ufer were significantly better than in the Auschwitz concentration 
                    and extermination camp. Survivor Hédi Fried reported that each woman was given her own loft bunk in the bunk 
                    beds that were set up, including a mattress.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup> Some survivors 
                    also reported on the first meal, which was perceived as extremely extensive compared to Auschwitz-Birkenau. 
                    Nevertheless, the food at Dessauer Ufer was not sufficient and the Jewish concentration camp prisoners were 
                    at the bottom of the hierarchy of forced laborers under National Socialism. Hédi Fried and other survivors 
                    recalled that for a time, they were initially given the same lunch as the other workers by a company during 
                    their work assignments in the port of Hamburg, until this was stopped by the camp commandant.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    There was no provision for sufficient food for the concentration camp prisoners or equality with other workers, 
                    and the women’s imprisonment on the Dessauer Ufer, too, was characterized by hunger in the ensuing period.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Where did the women on Dessauer Ufer come from?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The detention facility in the Dessauer Ufer warehouse was a satellite camp of Neuengamme concentration camp. 
                    The women in the Dessauer Ufer satellite camp arrived on two transports from Auschwitz. Around half of the first 
                    transport in July 1944 was comprised of Jewish women who had only recently arrived in Auschwitz from the 
                    Theresienstadt ghetto and were mainly from what was then Czechoslovakia. The other half were Jewish women 
                    who had been deported from Hungary, which had recently been occupied by the Germans. Some of the women from 
                    occupied Hungary came from areas that had only been occupied or annexed by Hungary itself in 1943 and had 
                    previously belonged to Czechoslovakia and Romania. The second transport in August 1944 included mainly Jewish 
                    women who had previously arrived in Auschwitz from the Litzmannstadt (Łódź) ghetto. Many of them came from Poland, 
                    but some of them also from Germany.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup>
                </p>
                <p>
                    While the women deported from Theresienstadt and Łódź had already been subjected to Nazi persecution for 
                    several years, the women from occupied Hungary had only been forced into ghettos a few months earlier and 
                    deported shortly afterward. Some of them had been deported directly from their hometowns to the Auschwitz 
                    concentration and extermination camp, while often the other women had already been deported several times. 
                    The women from occupied Hungary were therefore still in relatively good physical condition. Their arrival 
                    in Auschwitz-Birkenau was a shock for many: They were “selected” and separated from relatives and friends, 
                    and subjected to the dehumanizing treatment of the SS, which included degrading undressing in front of the 
                    guards, hair shaving, and everyday violence.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Jewish men and women</h4>
                    <p>
                        The Jewish men and women deported from Hungary belonged to various communities and religious movements 
                        within Judaism. Not all of them necessarily defined themselves as Jewish. Neither their religion nor their 
                        cultural affiliation to Judaism or self-identification was decisive for their persecution by the 
                        National Socialists. At the heart of the National Socialist worldview was a racist antisemitism that 
                        defined Jews according to their descent. Christians and atheists were also persecuted as Jews by the 
                        National Socialists, regardless of their self-definition or cultural affiliation, if they met their 
                        criteria of descent. Not all of the persons referred to here as Jews identified themselves as Jewish, 
                        but they were all persecuted as Jewish.
                    </p>
                </div>
            </div>
        </div>


        <h3 class=\"mt-4\">Different experiences of persecution – prisoner groups on Dessauer Ufer</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The women of the three groups on Dessauer Ufer differed significantly in their experience of persecution. 
                    This was accompanied by mutual perceptions of supposed and actual privilege, which, according to the 
                    survivors’ reports, sometimes existed between the women of the different groups. For example, the survivor 
                    Paula Hermann reported that the Czech women whose hair had not been shaved off were referred to as 
                    “the hairy ones” by the women from Hungary.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                    There were also language barriers: The women from Theresienstadt generally spoke Czech and sometimes German, 
                    the women from Łódź Polish, German or Yiddish, and the women deported from Hungary mainly Hungarian, but 
                    also Romanian, Yiddish, German or, in the case of the women from Transcarpathia, which had previously belonged 
                    to Czechoslovakia, Czech as well. These barriers also existed within the women deported from Hungary, 
                    particularly with regard to the territories annexed by Hungary. The women also differed in terms of their 
                    social background and religiosity. Many surviving women reported that they joined up with women from 
                    the same region of origin and tried to stay together and support each other.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    Some women also managed to stay together with relatives. For example, the two sisters Hédi Fried, née Szmuk, 
                    and her sister Livia Fraenkel, also née Szmuk, survived their time in prison together.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                    The life-saving mutual support in such camp families can be found in many reports by female survivors and 
                    it was made possible, among other things, by the fact that the women were deported as a group and were 
                    therefore able to stay with each other.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; More on the historical background</h4>
                    <p>
                        <a href=\"{{ path('app_context') }}\" title=\"Historical context\">
                            &#10149; More on Hungary in the Second World War
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Forced labor in the port of Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The forced labor of the women in the port of Hamburg began on the very first day after their arrival. 
                    The prisoners were divided into various work detachments and taken to their places of work by ferry or on foot. 
                    The prisoners were deployed in particular in the heavily bombed mineral oil industry, where they had to 
                    clear rubble. This work was not only physically demanding, but the prisoners also came into contact with 
                    toxic substances from which they were not protected and which irritated their respiratory tracts. The 
                    concentration camp prisoners worked in the industrial plants alongside forced laborers from the Soviet Union, 
                    prisoners of war and Italian military internees, as well as ordinary German civilian workers.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    The routes to their places of work also overlapped for these different groups of people, so the ferries that 
                    took the women from Dessauer Ufer to their places of work transported Italian military internees and German 
                    civilians as well. Despite attempts to separate the groups from one another, for example by accommodating them 
                    in separate areas of the ferry, the different groups repeatedly came into contact with one another. Some of the 
                    surviving women reported individual German civilians who supported them with hidden food.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup>
                    As a rule, however, the prisoners and their suffering were ignored by the German civilians. The women mainly 
                    received support from other forced laborers with whom they were able to make contact. Although they also went 
                    hungry, their rations were more extensive than those of the concentration camp prisoners. The starving prisoners 
                    secretly received food and information about the course of the war from Italian military internees in particular, 
                    and later also from French prisoners of war, all tied to the hope that they would soon be liberated.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                </p>
                <p>
                    For the detainees, the regular bombing of Hamburg was also a clearly visible sign of the Allied war effort. 
                    The prisoners were actually particularly at risk from the bombing, as they were barely protected and, unlike 
                    German civilians, were generally unable to take refuge in bunkers. Survivor Ilona Blair, like many survivors, 
                    described how the bombings were nevertheless perceived with joy by the prisoners, as they often offered a break 
                    from work and also gave them hope of liberation, as they demonstrated Allied progress in the war against the 
                    German Reich.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Forced labor</h4>
                    <p>
                        National Socialist Germany made extensive use of forced labor to meet its labor needs; in the 
                        German Reich alone, over 13.5 million people had to perform forced labor during the Second World War. 
                        Forced labor was used in all branches of industry, but also in agriculture and in private households. 
                        Forced laborers were a visible part of everyday life in National Socialist Germany, especially in 
                        the final years of the war.
                    </p>
                    <p>
                        <a href=\"{{ path('app_context') }}#zwangsarbeit\"
                           title=\"More information on forced labor and historical context\">
                            &#10149; More information on forced labor
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Why did the prisoners come to Hamburg?</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After large parts of the city had been destroyed by British bombing as part of “Operation Gomorrah” in the 
                    summer of 1943, extensive discussions about the use of concentration camp prisoners began in Hamburg as well. 
                    Forced labor by concentration camp prisoners in SS construction brigades had already been used during the initial 
                    reconstruction period starting in late summer 1943. After further bombing raids jeopardized the reconstruction 
                    and the accelerated expansion of Hamburg’s armaments industry in mid-1944, extensive use was made of the 
                    prisoners’ labor. Within a very short time, various Hamburg offices applied for the allocation of 15,500 prisoners 
                    overall. The SS was able to fulfill slightly more than half of these requests. A particularly large number of 
                    Hungarian Jews who had only recently been deported were used, as they were still in much better health at the 
                    time than many of the concentration camp prisoners who had been imprisoned for longer. Most likely, the women at 
                    the Dessauer Ufer satellite camp, about a third of whom came from Hungary, were originally intended for construction 
                    of makeshift housing. Providing the German civilian population with housing was intended not least to counteract 
                    demoralization and ensure support for the National Socialist regime and its war effort. This supply was to be 
                    guaranteed through the exploitation of concentration camp prisoners. In May 1944, the Reich Housing Commissioner 
                    Robert Ley announced that he had been assigned 20,000 Hungarian Jews by the SS, whom he in turn offered to the 
                    respective cities as laborers. One can assume that Hamburg also applied for the allocation of prisoners in this 
                    process. Before the first transport arrived in Hamburg in July 1944, however, the port of Hamburg’s oil industry, 
                    which was vital to the war effort, had been heavily bombed in mid-June 1944. The Allies had recognized the supply 
                    of fuel as a crucial weak point in the German war effort and began systematically bombing the relevant industrial 
                    facilities in 1944. The National Socialists responded with an immediate program to secure the fuel supply, also 
                    known as the Geilenberg Program after its leader Edmund Geilenberg, which made use of the forced labor of 
                    concentration camp inmates as well. As the restoration of operations at the Hamburg oil refineries was considered 
                    more important than the construction of makeshift housing, the women from the Dessauer Ufer satellite camp were 
                    initially deployed there before being forced to work primarily on building housing and clearing rubble from 
                    September 1944 onward.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Temporary housing for the civilian population of Hamburg</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    In September 1944, the women’s satellite camp on Dessauer Ufer was disbanded. Shortly afterward, a men’s 
                    satellite camp of Neuengamme concentration camp was set up at the same location. The women were divided into 
                    three groups of about 500 persons each and distributed to new women’s satellite camps in and around Hamburg. 
                    For the most part, they remained together in groups according to their origin. Most of the women deported 
                    from Hungary were initially transferred to the Wedel satellite camp. From there, too, they were mainly deployed 
                    to clear rubble in Hamburg, reaching their places of work on foot and by ferry. After two weeks, they were 
                    taken to the Eidelstedt satellite camp in the north of Hamburg. There, in addition to clearing work, they also 
                    had to carry out construction work and build houses for the bombed-out population of Hamburg in the vicinity of 
                    the camp. In the final months before the end of the war in particular, once again the prisoners had to clear 
                    snow and rubble in the Hamburg city area.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                </p>
                <a href=\"{{ asset('images/studies/Deportationsroute-Dessauer-Ufer-en.jpg') }}\"
                   data-lightbox=\"map-dessauer-ufer\"
                   data-title=\"The deportation route of the Hungarian prisoners from the Dessauer Ufer satellite camp to other satellite camps 
                    of Neuengamme concentration camp\">
                    <img class=\"gallery img-fluid\"
                         src=\"{{ asset('images/studies/Deportationsroute-Dessauer-Ufer-en.jpg') }}\"
                         alt=\"The deportation route of the Hungarian prisoners from the Dessauer Ufer satellite camp to other satellite camps 
                    of Neuengamme concentration camp\"/>
                </a>
                <p class=\"caption\">
                    The deportation route of the Hungarian prisoners from the Dessauer Ufer satellite camp to other satellite camps 
                    of Neuengamme concentration camp. Institute for the History of the German Jews. 
                    License: CC BY 4.0 &#128269; Click to enlarge.
                </p>
                <p>
                    Occasionally, the prisoners found food in the ruins, which was essential for the severely malnourished women. 
                    In addition to hunger, the survivors also reported about the cold, from which their thin prisoner clothing 
                    provided little protection. As in other satellite camps, the prisoners tried to protect themselves from the 
                    cold by placing empty cement sacks under their clothing, although this was forbidden and severely punished. 
                    At this time, the malnourished and undersupplied prisoners were a visible part of everyday life in Hamburg. 
                    Their work sites were located in the middle of inhabited neighborhoods, which they reached by walking or 
                    being transported by streetcar. Looking back, survivor Hédi Fried asked herself, “What did they think when 
                    they saw us: women emaciated to the point of skeletons, in thin clothing, bent over, shoveling snow? Or did 
                    they not see us? You can’t see what you don’t want to see. A few people stopped and watched us, but no one 
                    came closer or asked questions. Later they would say they didn’t know anything. And even later that it was all a lie.”<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/dessauer-ufer/Geschwister_szmuk.jpg') }}\"
                     alt=\"Hédi Fried and her sister Livia Fraenkel standing next to each other\"/></a>
                <p class=\"caption\">
                    Hédi Fried and her sister Livia Fraenkel one year after their liberation in Sweden. Private property: Hédi Fried.</p>
                <p>
                    On March 1, 1945, some of the prisoners were deployed to clear rubble in the center of Hamburg. On their 
                    return journey by streetcar, they were hit by a collapsing house on Steindamm near Hamburg Central Station 
                    and buried under it. At least 20 prisoners were confirmed to have died; survivors reported that half of 
                    the occupants of the two front carriages did not survive the accident.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup> 
                    Survivor Ilona Blair reported that at the beginning, passers-by who happened to be present helped the prisoners 
                    to rescue the many injured women, but that this was forbidden by the SS men on guard duty.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    The prisoners, some of whom were seriously injured, were transported to the small infirmary of the Eidelstedt 
                    satellite camp by their fellow prisoners. There was no medication or medical care available for the inmates; 
                    instead, Blair reported how the concentration camp prisoner assigned to care for the sick was given poison 
                    injections to murder the injured women who would not be able to become fit for work again on their own. After 
                    she refused, she was removed from her position and presumably murdered.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup> 
                    The murder of sick prisoners was also part of SS practice at other satellite sites of Neuengamme concentration 
                    camp. It is not known how many injured prisoners died due to a lack of medical care or direct murder.
                </p>

                    <img class=\"img-fluid\"
                         src=\"{{ asset('images/studies/dessauer-ufer/Zeitungsausschnitt.jpg') }}\"
                         alt=\"Excerpt from the Hamburger Anzeiger, which briefly reports on the streetcar accident\"/>
                <p class=\"caption\">
                    Newspaper report on the streetcar accident: “Folgenschweres Unglück,” in: Hamburger Anzeiger, March 2, 1945, p. 2, 
                    Staats- und Universitätsbibliothek Hamburg Carl von Ossietzky, Germany – Public Domain, Europeana, online at:
                    <a href=\"https://www.europeana.eu/item/9200338/BibliographicResource_3000117673612\"
                       title=\"Newspaper report on the Europeana website\">https://www.europeana.eu/item/9200338/BibliographicResource_3000117673612</a>.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; Wedel satellite camp (women)</h4>
                    <p>
                        From September 1944, 500 Hungarian and Czech Jewish women, who had previously been at Dessauer Ufer 
                        and had to perform forced labor in clearing work in the city, were imprisoned in the Wedel satellite 
                        camp of Neuengamme concentration camp. After two weeks, the camp was evacuated and the women were 
                        taken to the Eidelstedt satellite camp.
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Hamburg-Eidelstedt satellite camp</h4>
                    <p>
                        The satellite camp of Neuengamme concentration camp was established in September 1944. 
                        The approximately 500 prisoners had previously been imprisoned in the Wedel satellite camp and had 
                        to perform forced labor, particularly in the construction of makeshift residential homes. 
                        The prisoners were deported to Bergen-Belsen at the beginning of April 1945.
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Evacuation of the Hamburg camps to the Bergen-Belsen concentration camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    As the end of the war became increasingly apparent in early April 1945, the National Socialists began to 
                    cover their tracks in Hamburg and evacuate the camps in the city. The women in the Eidelstedt satellite camp 
                    were once again forced to board a freight train, which arrived at the Bergen-Belsen concentration camp three 
                    days later. The prisoners had not received any food during the journey. When they reached Bergen-Belsen, the 
                    concentration camp was already overcrowded. Bergen-Belsen became a camp for dying prisoners [Sterbelager].
                </p>
                <p>
                    The time in Bergen-Belsen was described by many of the surviving women as one of the worst. The food they were 
                    given was not enough to survive and there was hardly any drinking water, so some of the prisoners drank from 
                    puddles.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup> When British forces liberated the camp on 
                    April 15, 1945, they found tens of thousands of prisoners, some of whom were on the verge of starvation and 
                    living among unburied corpses. Survivor Hédi Fried reported that she was so weak at the time of her liberation 
                    that she could barely stand up.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup>
                    Many prisoners died even after liberation as a result of their imprisonment. It is not possible to determine 
                    how many of the prisoners from Hungary who arrived at Dessauer Ufer in July 1944 survived their imprisonment 
                    in Hamburg and Bergen-Belsen. One can assume that many did not survive the conditions under which the SS forced 
                    them to live and work. Survivor Ilona Blair supposes that only half of her group survived.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup>
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
                        and a Jewish displaced persons camp were set up in Bergen-Belsen.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Map overview\">
                            &#10149; To the map of the camps
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <h3 class=\"mt-4\">Sources and research</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    The efforts of Hamburg industry and administration to deploy concentration camp prisoners are well documented, 
                    even if the exact processes that led to the respective deployment of the prisoner group described cannot be 
                    established.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup>
                    The satellite camps on Dessauer Ufer, in Wedel, and in Eidelstedt were administered centrally at the Neuengamme 
                    main camp, almost all of whose records were destroyed by the SS before liberation. The work assignments, 
                    guarding, and living conditions of the prisoners can therefore be reconstructed primarily from the accounts of 
                    known survivors, many of whom were interviewed in the 1990s as part of a research project on women’s satellite 
                    camps at Neuengamme concentration camp.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup>
                    The survivor Hédi Fried also published her memories in book form in 1992.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup>
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/dessauer-ufer/Dessauer-Ufer-Ueberlebende.jpg') }}\"
                     alt=\"Czech survivors on Dessauer Ufer: six elderly surviving women stand side by side\"/>
                <p class=\"caption\">
                    Czech survivors on Dessauer Ufer in the 1980s. Archive Neuengamme Concentration Camp Memorial, F 2015-273.
                </p>
                <p>
                    Individual documents relating to those killed in the streetcar accident, several of whose names are known, 
                    have also been preserved. Some survivors reported other deaths during their imprisonment, but no documents 
                    can be found for them, and thus their names remain unknown.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup>
                    On the other hand, many of the so-called WVHA prisoner index cards or Hollerith pre-cards have been preserved. 
                    Starting in mid-1944, the SS had begun in most concentration camps to set up prisoner detachments that 
                    transferred the information from the camps’ own prisoner records to standardized prisoner index cards, which 
                    were sent to a central institute of the SS Economic Administration Main Office (WVHA) in Berlin. In this 
                    “Central Mechanical Institute for Optimal Human Recording and Evaluation,” the information was to be transferred 
                    to punch cards so that the prisoner information could be recorded centrally and processed using a so-called 
                    “Hollerith machine.” While the Neuengamme concentration camp’s own prisoner records and the punched cards 
                    themselves have not survived, the standardized index cards are largely still in existence. However, they only 
                    contain information usable and machine-readable by the SS, i.e. the inmates’ prisoner numbers, nationality, 
                    gender, dates of birth, occupations and deportation dates, but no names.<sup><a href=\"#endnote29\" id=\"footnote29\">29</a></sup>
                    These sources thus exemplify the dehumanizing bureaucratic view of the National Socialists, who degraded people 
                    to mere numbers. In particular, the names of the murdered prisoners who did not survive concentration camp 
                    imprisonment, but also of the survivors who, for a variety of reasons, did not give documented interviews about 
                    their time in prison, cannot be ascertained.
                </p>
                <a href=\"{{ asset('images/studies/dessauer-ufer/Haeftlingskarte.jpg') }}\"
                   data-lightbox=\"dessauer-ufer-haeftlingskarte\"
                   data-title=\"So-called Hollerith pre-card of a prisoner in the Dessauer Ufer satellite camp, Bundesarchiv, BArch, NS 3/1577.\">
                <img class=\"gallery img-fluid\" src=\"{{ asset('images/studies/dessauer-ufer/Haeftlingskarte_preview.jpg') }}\"
                     alt=\"Hollerith pre-card of a prisoner with information on the type of prisoner - in this case: 
                     Jew - date of birth, dates of admission, occupation and other details\"/>
                </a>
                <p class=\"caption\">
                    So-called Hollerith pre-card of a prisoner in the Dessauer Ufer satellite camp, Bundesarchiv, BArch, NS 3/1577. 
                    &#128269; Click to enlarge.
                </p>
                <p>
                    The few reports of the survivors interviewed provide insights into the places of work and the perspective of 
                    the prisoners. They are therefore not only important sources on the history of the satellite camps, but also 
                    enable a change of perspective from the sources of the National Socialist bureaucracy, in which the prisoners 
                    only appear as passive human material, to the people concerned and to their perception, but also to their handling 
                    of the violent situation to which they were subjected. The interviews, usually recorded decades after liberation, 
                    are shaped by individual and social processes of coping and repression and the specific interview situation. The 
                    survivors also reported on the respective camps in the context of their entire history of persecution. Some of 
                    the survivors described their imprisonment at Dessauer Ufer as “luxury” or as an ascent from “hell to heaven,” 
                    which only makes sense against the background of the entire interview and the experiences shared in Auschwitz 
                    and Bergen-Belsen.<sup><a href=\"#endnote30\" id=\"footnote30\">30</a></sup>
                    This does not constitute a statement detached from their own perception of the life-threatening and 
                    dehumanizing living conditions at Dessauer Ufer.
                </p>
                <p>
                    Knowledge about the prisoners, the conditions of their detention, and their individual perceptions therefore 
                    inevitably remains fragmentary. Even the names of the vast majority of prisoners are unknown and cannot be 
                    determined. The murdered persons in particular often remain nameless.
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <ul class=\"bibliography\">
                    <li>
                        Randolp L. Braham (ed.), The geographical encyclopedia of the Holocaust in Hungary, Vol. 1,
                        Evanston 2013.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Lucy Debus, “Hamburg das war die Wende.” Das KZ-Außenlager Dessauer Ufer in den Erinnerungen
                        weiblicher Überlebender, unpublished Master’s thesis, Bremen 2021.
                    </li>
                    <li>
                        Hans Ellger, “Hamburg-Dessauer Ufer (Frauen),” in: Wolfgang Benz / Barbara Diestel (eds.), Der Ort
                        des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Vol. 5: Hinzert.
                        Auschwitz. Neuengamme, München 2007, pp. 394-396.
                    </li>
                    <li>
                        Hans Ellger, Zwangsarbeit und weibliche Überlebensstrategien. Die Geschichte der
                        Frauenaußenlager des Konzentrationslagers Neuengamme 1944/1945, Berlin 2007.
                    </li>
                    <li>
                        Hédi Fried, Fragmente meines Lebens. Ein Leben bis Auschwitz und ein Leben danach, 
                        licensed edition Hamburg 2023, original British edition [Fragments of a Life: The Road 
                        to Auschwitz] 1990.
                    </li>
                    <li>
                        Susanne Heim et al. (eds.), Die Verfolgung und Ermordung der europäischen Juden durch das
                        nationalsozialistische Deutschland 1933-1945, Band 15. Ungarn 1944-1945. Edited by Regina
                        Fritz, Berlin / Boston 2021.
                    </li>
                    <li>
                        Lisa Hellriegel, Weibliche Überlebensstrategien? Eine Sekundäranalyse der Oral
                        History-Interviews von Hans Ellger mit den Überlebenden der Hamburger Frauen-Außenlager des KZ
                        Neuengamme, unpublished Master’s thesis, Hamburg 2021.
                    </li>
                    <li>
                        Christian Römmer, “Digitalisierung der WVHA-Häftlingskartei,” in: Gedenkstätten-Rundbrief 150
                        (2009), pp. 20-25.
                    </li>
                    <li>
                        Mark Spoerer, Zwangsarbeit unter dem Hakenkreuz, Stuttgart / München 2001.
                    </li>
                    <li>
                        Lower Saxony Memorials Foundation (ed.), Bergen-Belsen. Kriegsgefangenenlager 1940-1945.
                        Konzentrationslager 1943-1945. Displaced Persons Camp 1945-1950. Katalog der Dauerausstellung,
                        Celle 2009.
                    </li>
                    <li>
                        Studentische Forschungsgruppe Dessauer Ufer / Stiftung Hamburger Gedenkstätten und Lernorte zur
                        Erinnerung an die Opfer der NS-Verbrechen (eds.), Das Lagerhaus G am Dessauer Ufer. Ein
                        ehemaliges Außenlager des KZ Neuengamme auf dem Kleinen Grasbrook, Hamburg 2022.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Footnotes</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, p. 87. 
                        For the perspective of a survivor, see Hédi Fried, Fragmente meines Lebens. Ein Leben bis Auschwitz und 
                        ein Leben danach, licensed edition Hamburg 2023, original British edition [Fragments of a Life: The Road 
                        to Auschwitz] 1990, pp. 112–116.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Cf. e.g. Fried, Fragmente, p. 119, or the Czech survivor Dita Kraus: Dita Kraus, Ein aufgeschobenes Leben - 
                        Kindheit im Konzentrationslager - Neuanfang in Israel, Göttingen 2020, p. 159f.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Cf. interview with Esther Rosenbaum on June 28, 1998 in Hamburg, interviewer Hans Ellger, total length 00:50:07, 
                        ANG: M 2019-0030; interview with Paula Herrmann on March 5, 2000 in Haifa, interviewer Hans Ellger, 
                        total length 01:48:29, ANG: M 2013-0050, M 2013-0051. There is also a film about the perspective of 
                        Czech women: Jurgen Kinter, “Hamburg, das war die Wende.” Stationen einer gemeinsamen Geschichte. 
                        Prag, Theresienstadt, Auschwitz, Hamburg, Bergen-Belsen, Prag. Margit Hermannova, 
                        Edith Kraus und Dagmar Lieblova erinnern sich (1999/2002).
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Cf. Fried, Fragmente, p. 116.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Cf. Fried, Fragmente, p. 118.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        Cf. Hans Ellger, “Hamburg-Dessauer Ufer (Frauen),” in: Wolfgang Benz / Barbara Diestel (eds.), 
                        Der Ort des Terrors. Geschichte der nationalsozialistischen Konzentrationslager, Vol. 5: Hinzert. Auschwitz. 
                        Neuengamme, Munich 2007, pp. 394–396; Idem., Zwangsarbeit und weibliche Überlebensstrategien. 
                        Die Geschichte der Frauenaußenlager des Konzentrationslagers Neuengamme 1944/1945, Berlin 2007, pp. 76–79.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        On the history of the deportations from Hungary, see Susanne Heim et al. (eds.), Die Verfolgung und Ermordung 
                        der europäischen Juden durch das nationalsozialistische Deutschland 1933-1945, Vol. 15. Ungarn 1944–1945. 
                        Edited by Regina Fritz, Berlin / Boston 2021; Randolp L. Braham (ed.), The geographical encyclopedia of the 
                        Holocaust in Hungary, Vol. 1, Evanston 2013. On the survivors’ perspective, see Fried, Fragmente, pp. 83–113.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Interview with Paula Herrmann, 2000; Hédi Fried also reported that the Hungarian prisoners had envied the 
                        Czech prisoners for their hair, but also that “their story of suffering [...] was much longer”: Fried, 
                        Fragmente, p. 120.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        See: Lisa Hellriegel, Weibliche Überlebensstrategien? Eine Sekundäranalyse der Oral History-Interviews 
                        von Hans Ellger mit den Überlebenden der Hamburger Frauen-Außenlager des KZ Neuengamme, unpublished 
                        Master’s thesis, Hamburg 2021, especially pp. 26–31; Lucy Debus, “Hamburg das war die Wende.” 
                        Das KZ-Außenlager Dessauer Ufer in den Erinnerungen weiblicher Überlebender, unpublished Master’s thesis, 
                        Bremen 2021.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Cf. Fried, Fragmente.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Cf. Ellger, Überlebensstrategien, pp. 155, 159–162, 302–308, interview with Paula Hermann, 2000; 
                        Fried, Fragmente; interview with Ilona Blair on November 10, 1980, interviewer Sophie Caplan, 
                        United States Holocaust Memorial Museum Collection, acquired from Sophie Caplan RG-50.617.0006, 
                        United States Holocaust Memorial Museum, Washington, DC, online at:
                        <a href=\"https://collections.ushmm.org/search/catalog/irn50932\"
                        title=\"Website of the United States Holocaust Memorial Museum\">
                            https://collections.ushmm.org/search/catalog/irn50932</a> (last accessed: July 11, 2024).
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        For example, Paula Hermann: Interview with Paula Hermann, 2000.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Cf. e.g. interview with Ilona Blair, 1980.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Cf. interview with Ilona Blair, 1980; interview with Paula Hermann, 2000.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Cf. Buggeln, Arbeit und Gewalt, pp. 85–91; Ellger, Überlebensstrategien, pp. 159-163.
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        Cf. e.g. Fried, Fragmente, pp. 121-154, Ellger, Überlebensstrategien, pp. 162–163; Buggeln, 
                        Arbeit und Gewalt, p. 275.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Fried, Fragmente, p. 150.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Cf. Fried, Fragmente, pp. 140–142, Interview Ilona Blair 1980.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Cf. interview with Ilona Blair 1980.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Cf. interview with Ilona Blair 1980.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Cf. Fried, Fragmente, p. 163.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Cf. Fried, Fragmente, pp. 166f.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Cf. interview with Ilona Blair, 1980.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        See Lower Saxony Memorials Foundation (ed.), Bergen-Belsen. Bergen-Belsen. Kriegsgefangenenlager 
                        1940–1945, Konzentrationslager 1943–1945, Displaced Persons Camp 1945–1950. Katalog der Dauerausstellung, 
                        Celle 2009, p. 200.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Buggeln, Arbeit und Gewalt, pp. 85–91.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Ellger, Überlebensstrategien.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Fried, Fragmente.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Cf. interview with Ilona Blair, 1980.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Christian Römmer, “Digitalisierung der WVHA-Häftlingskartei,” in: Gedenkstätten-Rundbrief 150 (2009), p. 20.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Interview Ilona Blair 1980; Fried, Fragmente, p. 116.
                        <a href=\"#footnote30\">&uarr;</a>
                    </li>
                </ol>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Citation reference</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Louis Wörner, “Zwangsarbeit in Hamburg,” 
                    in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, 
                    edited by the Institute for the History of the German Jews, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_deportation_dessauerUfer') }}.
                    License: <a href=\"https://creativecommons.org/licenses/by/4.0/\"
                               title=\"License terms on the Creative Commons website\">CC BY 4.0</a>.
                </p>
            </div>
        </div>

    </div>

{% endblock %}", "studies/dessauer-ufer.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/studies/dessauer-ufer.en.html.twig");
    }
}
