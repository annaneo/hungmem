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

/* studies/luebberstedt.en.html.twig */
class __TwigTemplate_57b582dd80b81e03e7cf931d1c334e7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/luebberstedt.en.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "studies/luebberstedt.en.html.twig"));

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

        yield " Group study Lübberstedt | ";
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
        <h2>The evacuation of the Lübberstedt satellite camp. In freight cars through northern Germany</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    With the advance of the Allies, the first concentration camps were liberated starting in mid-1944. However, 
                    before Allied troops could reach the camps, the SS tried to destroy traces and deport the prisoners to concentration 
                    camps further away from the front line.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup> 
                    From January 1945 onward, planning for the evacuation of the satellite camps began in northwestern Germany as 
                    well. On the one hand, the interests of the companies played a role in this context, as they wished to prevent 
                    uprisings by the forced laborers in the event of the expected Allied capture of their factories and did not want 
                    to jeopardize their own reputation with the future occupying power through the presence of malnourished and 
                    inhumanely treated forced laborers.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup> 
                    On the other hand, state authorities and the SS initially tried to thwart the freeing of inmates, in particular 
                    to prevent the liberation of prisoners in the jurisdiction of the larger cities, also with a view to the 
                    relationship with the future occupying power.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup> 
                    The evacuation of the satellite camps of Neuengamme concentration camp therefore began at the end of March, 
                    followed by the evacuation of the main camp starting in mid-April. In the following weeks until liberation, 
                    at least 30 percent of the prisoners perished, of whom only a few names are known. At this time, the SS burned 
                    documents in all the camps and no longer registered the dead on the transports and in the reception camps.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">The Lübberstedt-Bilohe satellite camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    A satellite camp of Neuengamme concentration camp was also set up near the village of Lübberstedt to the north of Bremen. 
                    During the Second World War, a German Air Force ammunition facility (Muna) was located in a forest area directly adjacent to a 
                    railroad line. Ammunition factories were used to assemble and store ordnance and ammunition from intermediate products. 
                    The extensive use of forced laborers in the arms industry affected work in the munitions factories as well. For example, 
                    Eastern European forced laborers, prisoners of war and Italian military internees, as well as concentration camp prisoners 
                    had to work in armaments production at Muna Lübberstedt.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    The latter arrived in the summer of 1944 from Auschwitz, where almost all of them had been deported from Hungary shortly before. 
                    Presumably the majority of them came from Transcarpathia, which had only been annexed by Hungary in 1939.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup> 
                    In Auschwitz, they were separated from their relatives and friends, the majority of whom were murdered directly by the SS.
                </p>
                <p>
                    <img class=\"img-fluid\"
                         src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/luebberstedt/Auschwitz-Album_Frimi-Ickovic.jpg"), "html", null, true);
        yield "\"
                         alt=\" Jewish women from Transcarpathia standing in several rows behind each other in Auschwitz-Birkenau\"/>
                <p class=\"caption\">
                </p>
                <p class=\"caption\">
                    Jewish women from Transcarpathia in Auschwitz-Birkenau in May 1944, who had been selected for forced labor 
                    after their arrival. The pictures were taken by SS men for an unknown purpose and represent their perspective. 
                    The images constitute one of the few photographic sources from the extermination camps. On the left-hand side 
                    of the picture, survivor Leo Cove has identified his sister Frimet (Fritzi) Ickovic, who was deported to 
                    Lübberstedt and survived imprisonment in a concentration camp.
                    Auschwitz Album, Yad Vashem (<a href=\"https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp\"
                                   title=\"Website Yad Vashem\">
                        https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp</a>), 
                    Copyright &copy; 2024 Yad Vashem – The World Holocaust Remembrance Center, Use according to Fair Use
                    (<a href=\"https://www.yadvashem.org/terms-and-conditions.html\"
                        title=\"Website Yad Vashem\">https://www.yadvashem.org/terms-and-conditions.html</a>)
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; More about Hungary</h4>
                    <p>
                        <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "\" title=\"Historical context\">
                            &#10149; More about Hungary in the Second World War
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-4\">
                    <h4>&#9432; Forced labor</h4>
                    <p>
                        National Socialist Germany made extensive use of forced labor to meet its labor needs; 
                        in the German Reich alone, over 13.5 million people had to perform forced labor during the Second World War. 
                        Forced labor was used in all branches of industry, but also in agriculture and in private households. 
                        Forced laborers were a visible part of everyday life in National Socialist Germany, especially in the 
                        final years of the war.
                    </p>
                    <p>
                        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_context");
        yield "#zwangsarbeit\"
                           title=\"More information on forced labor and historical context\">
                            &#10149; More information on forced labor
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Survivors of the transport to Lübberstedt later reported that the transport assembled in Auschwitz was 
                    initially unable to depart and the prisoners were led back to their barracks, where they had to undress. 
                    It is unclear what the SS’s intention was. The surviving prisoners, who had already witnessed several 
                    mass killings by this time, recalled that they feared they would be murdered after all. Eventually, however, 
                    they were told to get dressed again and board a waiting freight train. Part of the freight train was taken 
                    to the Salzwedel satellite camp, 500 women to Lübberstedt.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
                <p>
                    As in other satellite camps, survivors emphasized in retrospect the improvement that the transfer to a 
                    satellite camp offered as compared to the Auschwitz concentration and extermination camp. In the case of 
                    the Lübberstedt satellite camp, this was due to the prisoners having their own cot with a blanket and 
                    straw as well as a spoon and plate. Here too, however, the inmates’ provisioning was inhumane and life-threatening. 
                    The women, only provided with thin prisoner clothing and wooden shoes, were consistently given too little 
                    food while at the same time having to perform physically demanding work in the munitions factory. As well, 
                    the Lübberstedt satellite camp only had a small infirmary, where no medical care was available. As the women 
                    also feared that those unfit for work would be selected, several women reported in biographical interviews that 
                    they did not report sick even when they fell ill or suffered from inflammation. At least five inmates are known 
                    to have perished in this satellite camp.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                    In at least three cases, survivors reported mistreatment by the female guards that led to the death of the prisoners. 
                    For example, the survivor Eszter Rosenfeld reported that her bedmate Sari Katz, who was unable to attend morning 
                    roll call, was beaten to death by the guards.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    As in other women’s satellite camps, the camp was not guarded exclusively by the SS, but also by female guards 
                    employed by the SS inside the camp and Wehrmacht soldiers for external guarding.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Evacuation of the camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After the Bremen and Hamburg satellite camps had already been evacuated at the beginning of April and the 
                    prisoners were deported to the Bergen-Belsen reception camp in particular, the camp commandant of the 
                    Lübberstedt-Bilohe satellite camp was also ordered to evacuate the camp on April 18.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    While the camps in the city area were presumably evacuated earlier due to pressure from the city authorities, 
                    who were concerned about their post-war standing, at this point, the prisoners of the ammunition plant, too, 
                    were to be removed before the area was liberated. Some 60 sick women had previously been deported to 
                    Bergen-Belsen.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup>
                </p>
                <p>
                    However, the Bergen-Belsen concentration camp had already been liberated on April 16, 1945 by the Allies 
                    advancing from the southwest. Unlike the camps in the region evacuated before, the prisoners of the 
                    Lübberstedt satellite camp were therefore deported to Bremen, Hamburg, and eventually to Schleswig-Holstein.
                </p>

                <h3 class=\"mt-4\">By train through northern Germany</h3>
                <p>
                    The prisoners from Lübberstedt later reported that they had been loaded onto freight cars in groups of 50 to 
                    80 women, and that several cars containing ammunition had also been attached to the trains. However, the 
                    survivors’ statements and information from other sources contradict each other, so it is likely that the prisoners 
                    were taken away in two transports reunited after some time.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                    All survivors reported severe hunger due to the extremely reduced food supply during the journey, which lasted 
                    over two weeks. As military transports had priority and many of the tracks had been destroyed, the train was 
                    repeatedly stopped for long periods of time, in some cases even for two days.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup> 
                    In addition, the destinations of many prisoner transports changed during the journey, as their original end 
                    points had been liberated by the Allies in the meantime. One cannot determine beyond doubt what the original 
                    destination of the transport of prisoners from Lübberstedt was. However, one may assume that their destination 
                    was the prisoner ships in the Bay of Lübeck. The survivors also assumed this afterward.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; The Bergen-Belsen concentration camp</h4>
                    <p>
                        The Bergen-Belsen concentration camp was initially founded in 1943 as an “exchange camp” to quarter 
                        Jewish hostages. However, it was quickly assigned other functions and a men’s and women’s camp was set up. 
                        From the end of 1944 onward, Bergen-Belsen became the destination of many death marches and evacuation 
                        transports, developing into a death camp due to the appalling conditions. After liberation, a Polish 
                        and a Jewish displaced persons camp were set up in Bergen-Belsen.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                    </p>
                    <p>
                        <a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        yield "\" title=\"Map overview\">
                            &#10149; To the map of the camps
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Death marches and “final phase crimes”</h4>
                    <p>
                        In the final phase of the war, a number of concentration camps and satellite camps were 
                        evacuated by the Nazis before the approaching Allies arrived. The prisoners were either 
                        transported in freight cars, rarely in trucks, or forced to march on foot to areas still 
                        under German control. During the marches, which often lasted for days, sometimes even weeks, 
                        the prisoners were usually barely fed, many of them starving or dying of thirst in the 
                        freight cars, many collapsing during the marches due to exhaustion or being murdered by the 
                        SS or other units on guard duty. Survivors therefore coined the term “death march” for these 
                        evacuations. Some of the death marches ended in the targeted murder of prisoners, of which the 
                        so-called “Gardelegen massacre” constitutes one of the best known. More than 1,000 prisoners 
                        from satellite camps of the Neuengamme and Mittelbau-Dora concentration camps were rounded up 
                        in a field barn there, which was then set on fire by the SS and other Nazi organizations.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                    </p>
                </div>
            </div>
        </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <a href=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Deportationsroute-Luebberstedt-en.jpg"), "html", null, true);
        yield "\"
               data-lightbox=\"map-luebbestedt\"
               data-title=\"Deportation route Lübberstedt\">
                <img class=\"gallery img-fluid\"
                     src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/Deportationsroute-Luebberstedt-en.jpg"), "html", null, true);
        yield "\"
                     alt=\"Map of the deportation route\"/>
            </a>
            <p class=\"caption\">
                Deportation route during evacuation of the Lübberstedt satellite camp. Institute for the History of the German Jews. 
                License: CC BY 4.0 &#128269; Click to enlarge.
            </p>
        </div>
    </div>

        <h3 class=\"mt-4\">Cap Arcona and Thielbeck</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After the SS had decided to evacuate the Neuengamme main camp as well under pressure from the Hamburg 
                    business community and from politicians, some 9,000 prisoners were taken to Lübeck on freight trains 
                    between April 20 and 26. About 7,000 of them were taken to the cargo ships Athen, Thielbeck and Elmenhorst, 
                    which were anchored in the Bay of Lübeck, as well as the luxury liner Cap Arcona, which was unable to maneuver. 
                    As the ships were not designed for the number of prisoners and not enough food had been loaded on board, 
                    the situation for the prisoners in the holds was appalling. On May 2, Lübeck was liberated by British troops, 
                    and a day later the ships were bombed by the British Air Force, which targeted troop transports in the Baltic Sea. 
                    The Cap Arcona and the Thielbeck were hit and sank. Of the approximately 7,000 prisoners on the two ships at 
                    the time, only some 400 survived the attack. While survivors suspected that the SS had planned to blow up the 
                    ships to kill the prisoners from the outset, researchers now assume that the prisoners were merely to be 
                    quartered temporarily on the ships.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                </p>
                <p>
                    <img class=\"img-fluid\" src=\"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/luebberstedt/Cap_Arcona_burning.jpg"), "html", null, true);
        yield "\"
                         alt=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora im Mai 1946\"/>
                <p class=\"caption\">
                    Photo of the burning Cap Arcona shortly after the attack, Royal Air Force, May 3, 1945, 
                    source: <a href=\"http://www.uni-hamburg.de/rz3a035//arcona.html\"
                               title=\"Website of the University of Hamburg\">
                        http://www.uni-hamburg.de/rz3a035//arcona.html</a>, Wikipedia,
                    <a href=\"https://commons.wikimedia.org/wiki/File:Cap_Arcona_burning.jpg\"
                       title=\"Wikimedia Commons\">
                        https://commons.wikimedia.org/wiki/File:Cap_Arcona_burning.jpg</a>, public domain
                </p>
                <p>
                    On May 1 or 2, 1945, the train from Lübberstedt also reached Lübeck, but instead of a transfer onto the ships, 
                    the train stopped outside the city again for a long time, according to survivors. In a group interview, survivor 
                    Malvin Grünberger reported that the ship that was supposed to accommodate the prisoners had already left and that 
                    the prisoners burst into tears when they learned about it.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    They had hoped to be taken to Denmark on the vessels. Other survivors reported that they had been warned by a 
                    female guard not to board the ships.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup>
                    It is not possible to determine which ship the prisoners were to be taken to and why the SS did not carry out 
                    this plan. The last prisoner ships left the port of Lübeck on May 2. In the days before, however, the captain of 
                    the Cap Arcona, Heinrich Bertram, had repeatedly refused to take on any more prisoners, as had the captains of 
                    other ships.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup>
                    It is therefore not possible to determine whether the women from Lübberstedt were not loaded because their ship 
                    had already departed, was already overcrowded, or whether the train could no longer reach the port of Lübeck due 
                    to the British encirclement of the city.
                </p>
                <p>
                    While Lübeck was liberated by British troops during the course of May 2, the train with the prisoners set off 
                    again and continued north from Lübeck. On the same day, the train was attacked twice by British planes. At this 
                    time, the British targeted railroad facilities and stations as well as freight trains.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup> 
                    As with the Cap Arcona, they were not aware that concentration camp prisoners were being transported. The train 
                    was hit in the second attack. Survivors later reported that the train caught fire, but also that the guards shot 
                    at the escaping prisoners. At least 38 women died as a direct result of the attack, with survivors estimating 
                    60 to 80 deaths.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup> 
                    After the destroyed railroad car had been uncoupled and left behind with the injured, the train set off again 
                    during the night. The abandoned railroad car was found by local authorities on the morning of May 3, and the 
                    injured, at least 18, were taken to the Eutin military hospital, where five of them succumbed to their injuries. 
                    They were buried in the cemetery of the former Jewish congregation in Eutin, while the women who died on the 
                    spot were buried in a mass grave by the railroad tracks.
                </p>
                <img class=\"img-fluid\" src=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studies/luebberstedt/Luebberstadt-gedenkstein.jpg"), "html", null, true);
        yield "\"
                     alt=\"Memorial stone at the Lübeck-Moisling Jewish cemetery\"/>
                <p class=\"caption\">
                    At the end of 1960, the 38 women buried along the railroad line were reburied in the Jewish cemetery in 
                    Lübeck-Moisling, where this gravestone still commemorates them today. 
                    Photo: Leonid Kogan, 2015 (ANg, F 2015-1004, Satellite camp list (kz-gedenkstaette-neuengamme.de)), 
                    URL: <a href=\"https://www.kz-gedenkstaette-neuengamme.de/geschichte/kz-aussenlager/aussenlagerliste/luebberstedt-bilohe\">
                        https://www.kz-gedenkstaette-neuengamme.de/geschichte/kz-aussenlager/aussenlagerliste/luebberstedt-bilohe
                        </a>.
                </p>
                <p>
                    Behind Timmdorf, the train was once again fired on by British planes. Once again, 16 women lost their lives. The survivors then 
                    refused to get back on the train and were led to Plön on foot. The survivor Malvin Grünberger described how they had heard 
                    several times that the war was over.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup> 
                    A number of survivors recalled how in Plön, too, the prisoners had refused to board the train that had followed.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup> 
                    Some of the survivors reported in interviews that the Wehrmacht soldiers who were supposed to guard the ammunition cars 
                    also advised them to flee. Through the soldiers the women had apparently learned as well about plans to blow up the train 
                    together with them, which had strengthened their resistance.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup> 
                    Contact with Soviet prisoners of war who had already been liberated likewise reinforced the women’s expectation 
                    that the war would end soon. After the first British reconnaissance vehicle was spotted in Plön on May 4, 
                    the guards fled.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup> According to some survivors, however, 
                    they returned the next day to try again to force the women into the railroad car. Survivor Eszter Rosenfeld 
                    recalled that these attempts failed, not least because the SS men had already thrown away their weapons in 
                    anticipation of their imminent British captivity.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup> It is not 
                    possible to determine what goal the SS was pursuing with the further transportation of the prisoners. 
                    Northern Germany, too, saw several massacres of concentration camp prisoners that were murdered by the National 
                    Socialists before their possible liberation. However, the route had previously been used as well to transport 
                    several thousand female concentration camp inmates who had been handed over to the Red Cross.<sup><a href=\"#endnote29\" id=\"footnote29\">29</a></sup> 
                    It is unclear whether this was also intended for the prisoners from Lübberstedt.
                </p>

            </div>
            <div class=\"col-lg-4\">
                    <div class=\"infobox\">
                        <h4>&#128279; More on this topic</h4>
                        <p>
                            Katharina Hardy – Focus “DP Camp Bergen-Belsen”
                        </p>
                        <p>
                            <a href=\"";
        // line 305
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_hardy");
        yield "\"
                               title=\"More information on the individual biography Katharina Hardy – Focus “DP Camp Bergen-Belsen”\">
                                &#10149; Read on
                            </a>
                        </p>
                        <p>
                            Gyula Fürst – an unusual deportation route
                        </p>
                        <p>
                            <a href=\"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bio_fuerst");
        yield "\"
                               title=\"More information on the individual biography Gyula Fürst – an unusual deportation route\">
                                &#10149; Read on
                            </a>
                        </p>
                    </div>
                </div>
        </div>

        <h3 class=\"mt-4\">White buses</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Starting on April 3, 1945, more than 2,000 Scandinavian concentration camp prisoners were handed over to the 
                    Swedish Red Cross and evacuated to Denmark. This was the outcome of secret negotiations between the Vice 
                    President of the Swedish Red Cross, Count Folke Bernadotte, and Reichsführer SS Heinrich Himmler as well as 
                    the head of the Reich Main Security Office, Ernst Kaltenbrunner. As a result of these talks, Himmler had agreed 
                    in February 1945 first to reunite the Scandinavian prisoners in the main camp of Neuengamme concentration 
                    camp and then to release them. The background to these negotiations were Himmler’s attempts to achieve an 
                    armistice with the Western Allies on his own authority. When the Neuengamme main camp was evacuated on 
                    April 20, 1945, the remaining 4,200 Scandinavian prisoners still in the camp, too, were taken to Denmark by 
                    the Red Cross in specially marked buses. In further negotiations, the Red Cross also succeeded in obtaining 
                    permission for the release of about 15,000 female prisoners from Ravensbrück concentration camp and from 
                    satellite camps in Hamburg, including over a thousand Jewish women. They were taken to Denmark on freight 
                    trains, some of them via Plön.<sup><a href=\"#endnote30\" id=\"footnote30\">30</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Liberation of the prisoners in Plön</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After the guards had left, the former prisoners spent a few more days hiding in a forest, where they supported 
                    themselves by begging in the surrounding villages. Contemporary witnesses from the region, too, remembered the 
                    women after the liberation.<sup><a href=\"#endnote31\" id=\"footnote31\">31</a></sup> 
                    It was only when the British army arrived in Plön on May 8 and Germany surrendered unconditionally that the 
                    liberated women dared to come out of hiding. “The British liberated us and we were able to start living as 
                    human beings again,” survivor Hajnal Kaufmann later recalled.<sup><a href=\"#endnote32\" id=\"footnote32\">32</a></sup> 
                    The liberated women were then housed in the Haffkrug DP camp in the Bay of Lübeck. The British had cleared 
                    a village there in order to be able to care for the liberated forced laborers of various nationalities until 
                    they returned to their countries of origin or emigrated. Survivors described how they regained their strength 
                    in the DP camp, but also that the wrecks of the destroyed concentration camp ships were visible and swimming 
                    was not possible due to the corpses floating in the water.<sup><a href=\"#endnote33\" id=\"footnote33\">33</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Sources and research</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    As with many satellite camps of Neuengamme concentration camp, the majority of the documents relating to the 
                    Lübberstedt satellite camp were destroyed by the SS. However, important references to the satellite camp can 
                    be found in surviving documents relating to the ammunition plant. The SS presumably no longer kept records of 
                    most of the events during the evacuation transport. However, the prisoners who died in the Eutin district 
                    hospital and during the attack in Plön were buried by civilian authorities. Registry office and cemetery 
                    records have therefore been preserved for them and, following a reburial in the 1960s, so have graves in 
                    northern Germany. Moreover, in the early post-war period, the Deportáltakat Gondozó Országos Bizottság 
                    (National Welfare Committee of Deportees DEGOB) interviewed Holocaust survivors that had returned to Hungary 
                    via Budapest at least for some time.
                    <a href=\"http://degob.org/\" title=\"DEGOB protocols\">
                        As many as 109 survivors of the Lübberstedt satellite camp and the transport to Plön were also 
                        among them.</a><sup><a href=\"#endnote34\" id=\"footnote34\">34</a></sup>
                </p>
                <p>
                    Since the early 1980s, a large number of initiatives and associations dedicated to researching and communicating 
                    local history have emerged across Germany. Under the motto of “Dig where you stand!,” the frequently forgotten 
                    sites of satellite camps and other forced labor camps came into focus as well. In 1992, a working group was 
                    founded in Lübberstedt to investigate the history of the munitions factory and the forced labor carried out there. 
                    The “MUNA Lübberstedt Task Force” compiled many of the scattered sources on the ammunition plant and published 
                    its findings in a book in 1996, which also forms an important basis for this article.<sup><a href=\"#endnote35\" id=\"footnote35\">35</a></sup>
                    The local historian Karsten Dölger from Plön dedicated intensive efforts to research the women who died in the 
                    attacks on the prisoner transport and who were buried in the region. In 2017, he published his findings in an 
                    essay.<sup><a href=\"#endnote36\" id=\"footnote36\">36</a></sup>
                    It is this extensive research, often carried out on a voluntary basis, that compiles the available sources and 
                    forms the foundation for the knowledge and also the remembrance of the concentration camp prisoners imprisoned 
                    in the various satellite camps and their individual fates.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <ul class=\"bibliography\">
                    <li>
                        Dietrich Banse, “ich wollte überleben und der Welt erzählen” Zur Geschichte des Frauenlagers
                        Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des Kz Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Lukkas Busche / Andreas Froese (eds.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Catalog accompanying for the permanent exhibition at the Feldscheune Isenschnibbe Gardelegen Memorial,
                        Gardelegen / Leipzig / Magdeburg 2022.
                    </li>
                    <li>
                        Karsten Dölger, “Von Auschwitz nach Plön – Für 350 ungarische Jüdinnen endete die
                        nationalsozialistische Verschleppung am 4. Mai 1945 in Plön,” in: Jahrbuch für Heimatkunde im
                        Kreis Plön 47 (2017), pp. 179-212.
                    </li>
                    <li>
                        Hans Ellger, “Lübberstedt-Bilohe,” in: Wolfgang Benz / Barbara Distel (eds.), Der Ort des
                        Terrors. Geschichte der nationalsozialistischen Konzentrationslager. Vol. 5: Hinzert. Auschwitz.
                        Neuengamme, München 2007, pp. 473-475.
                    </li>
                    <li>
                        Barbara Hillmann / Volrad Kluge / Erdwig Kramer, Lw. 2/XI – Muna Lübberstedt. Zwangsarbeit für
                        den Krieg, Bremen 1996.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Cf. Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, p.
                        626.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Cf. Buggeln, Arbeit und Gewalt, p. 628.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Cf. Buggeln, Arbeit und Gewalt, pp. 631-632.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Cf. Buggeln, Arbeit und Gewalt, p. 634.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Cf. Barbara Hillmann / Volrad Kluge / Erdwig Kramer, Lw. 2/XI – Muna Lübberstedt. Zwangsarbeit
                        für den Krieg, Bremen 1996.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        For example, 96 of the 109 survivors identified by Karsten Dölger who were interviewed by the DEGOB in 1945 came from Transcarpathia. 
                        See Karsten Dölger, “Von Auschwitz nach Plön – Für 350
                        ungarische Jüdinnen endete die nationalsozialistische Verschleppung am 4. Mai 1945 in Plön,” in:
                        Jahrbuch für Heimatkunde im Kreis Plön 47 (2017), pp. 179-212, p. 181.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Cf. Dölger, “Auschwitz nach Plön,” pp. 188, 189; Hillmann / Kluge / Kramer, MUNA Lübberstedt, p.
                        108. Survivors from Salzwedel also reported that their transport from Auschwitz was initially deferred.
                        See Dietrich Banse, “ich wollte überleben und der Welt erzählen” Zur
                        Geschichte des Frauenlagers Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005, p. 39.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt, p. 122.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt, p. 124.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt , pp. 111-116.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Cf. Dölger, “Auschwitz nach Plön,” p. 195; Buggeln, Arbeit und Gewalt, p. 636.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        Cf. Hillman / Kluge / Kramer, MUNA Lübberstedt, pp. 124-128; Dölger, “Auschwitz nach Plön,” p.
                        192.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt, p. 130; Hans Ellger, “Lübberstedt-Bilohe,” in:
                        Wolfgang Benz / Barbara Distel (eds.), Der Ort des Terrors. Geschichte der
                        nationalsozialistischen Konzentrationslager. Vol. 5: Hinzert. Auschwitz. Neuengamme, München
                        2007, pp. 473-475, p. 474.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Buggeln, Arbeit und Gewalt, p. 642.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Cf. Joint testimony of Gisella Ickovics, born in 1898, and her daughters, Malvin Ickovics, born
                        in 1921, Edit Ickovics, born in 1924, Friederika Ickovics, born in 1926, in Técső,
                        Czechoslovakia, regarding their experiences in the Técső Ghetto, in Auschwitz-Birkenau and
                        Lübberstedt camp, Yad Vashem Digital Archive, Subsection O 15 E, Nr. 1634, online at:
                        https://collections.yadvashem.org/en/documents/3544918 (last accessed: July 25, 2024); Collective
                        testimony of 66 women, regarding their experiences in Auschwitz-Birkenau camp and Liebstadt, Yad
                        Vashem Digital Archive, Subsection O 15 E, Nr. 2118, online at:
                        <a href=\"https://collections.yadvashem.org/en/documents/3543545\" title=\"Website Yad Vashem\">
                        https://collections.yadvashem.org/en/documents/3543545
                        </a>(last accessed: July 25, 2024).
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        See Lower Saxony Memorials Foundation (ed.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, p. 200.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Lukkas Busche / Andreas Froese (eds.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Catalog accompanying the permanent exhibition at the Feldscheune Isenschnibbe Gardelegen Memorial,
                        Gardelegen / Leipzig / Magdeburg 2022.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Cf. Buggeln, Arbeit und Gewalt, p. 653.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Cf. Collective testimony of 66 women.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt, p. 130.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Cf. Buggeln, Arbeit und Gewalt, p. 653.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Buggeln, Arbeit und Gewalt, p. 642.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Cf. Testimony of Eszter Rosenfeld, born in Bedőháza, Czechoslovakia, 1922, regarding her
                        experiences in the Técső Ghetto and in Auschwitz-Birkenau and Haffkrug camps, Yad Vashem Digital
                        Archive, Subsection O 15 E, Nr. 2832, online at:
                        <a href=\"https://collections.yadvashem.org/en/documents/3546639\" title=\"Website Yad Vashem\">
                        https://collections.yadvashem.org/en/documents/3546639</a> (last accessed: July 25, 2024); Joint
                        testimony of Gisella Ickovics, Malvin Ickovics, Edit Ickovics.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Cf. Collective testimony of 66 women.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Cf. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Cf. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Cf. Dölger, “Auschwitz nach Plön,” p. 198.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Cf. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Cf. Dölger, “Auschwitz nach Plön,” pp. 196f.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Cf. Buggeln, Arbeit und Gewalt, pp. 654-655; Dölger, “Auschwitz nach Plön,” pp. 196f.
                        <a href=\"#footnote30\">&uarr;</a>
                    </li>
                    <li id=\"endnote31\">
                        Cf. Dölger, “Auschwitz nach Plön,” pp. 199f.
                        <a href=\"#footnote31\">&uarr;</a>
                    </li>
                    <li id=\"endnote32\">
                        Cf. Testimony of Hajnal Kaufmann, born in Huszt, Czechoslovakia, 1924, regarding her experiences
                        in the Huszt Ghetto and in Auschwitz-Birkenau and Lübberstedt camps, Yad Vashem Digital Archive,
                        Subsection O 15 E, Nr. 1937, online at:
                        <a href=\"https://collections.yadvashem.org/en/documents/3545504\" title=\"Website Yad Vashem\">
                        https://collections.yadvashem.org/en/documents/3545504</a> (last accessed: July 25, 2024).
                        <a href=\"#footnote32\">&uarr;</a>
                    </li>
                    <li id=\"endnote33\">
                        Cf. Dölger, “Auschwitz nach Plön,” pp. 205f.
                        <a href=\"#footnote33\">&uarr;</a>
                    </li>
                    <li id=\"endnote34\">
                        Cf. Dölger, “Auschwitz nach Plön,” p. 179. The protocols can be viewed in the online archive of Yad
                        Vashem: https://collections.yadvashem.org/en.
                        <a href=\"#footnote34\">&uarr;</a>
                    </li>
                    <li id=\"endnote35\">
                        Cf. Hillmann/Kluge/Kramer, MUNA Lübberstedt.
                        <a href=\"#footnote35\">&uarr;</a>
                    </li>
                    <li id=\"endnote36\">
                        Cf. Dölger, “Auschwitz nach Plön.”
                        <a href=\"#footnote36\">&uarr;</a>
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
                    Louis Wörner, “Die Räumung des KZ-Außenlagers Lübberstedt,” 
                    in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, 
                    edited by the Institute for the History of the German Jews, URL:
                    https://holocaust-ungarn-norddeutschland.de";
        // line 636
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_deportation_luebberstedt");
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
        return "studies/luebberstedt.en.html.twig";
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
        return array (  764 => 636,  439 => 314,  427 => 305,  385 => 266,  342 => 226,  312 => 199,  305 => 195,  276 => 169,  190 => 86,  172 => 71,  147 => 49,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.en.html.twig' %}

{% block title %} Group study Lübberstedt | {{ parent() }} {% endblock %}

{% block body %}
    

    <div class=\"container g-4 py-5 study\">
        <h2>The evacuation of the Lübberstedt satellite camp. In freight cars through northern Germany</h2>
        <div class=\"row\">
            <div class=\"col-xl-8 mb-2\">
                <p class=\"abstract\">
                    With the advance of the Allies, the first concentration camps were liberated starting in mid-1944. However, 
                    before Allied troops could reach the camps, the SS tried to destroy traces and deport the prisoners to concentration 
                    camps further away from the front line.<sup><a href=\"#endnote1\" id=\"footnote1\">1</a></sup> 
                    From January 1945 onward, planning for the evacuation of the satellite camps began in northwestern Germany as 
                    well. On the one hand, the interests of the companies played a role in this context, as they wished to prevent 
                    uprisings by the forced laborers in the event of the expected Allied capture of their factories and did not want 
                    to jeopardize their own reputation with the future occupying power through the presence of malnourished and 
                    inhumanely treated forced laborers.<sup><a href=\"#endnote2\" id=\"footnote2\">2</a></sup> 
                    On the other hand, state authorities and the SS initially tried to thwart the freeing of inmates, in particular 
                    to prevent the liberation of prisoners in the jurisdiction of the larger cities, also with a view to the 
                    relationship with the future occupying power.<sup><a href=\"#endnote3\" id=\"footnote3\">3</a></sup> 
                    The evacuation of the satellite camps of Neuengamme concentration camp therefore began at the end of March, 
                    followed by the evacuation of the main camp starting in mid-April. In the following weeks until liberation, 
                    at least 30 percent of the prisoners perished, of whom only a few names are known. At this time, the SS burned 
                    documents in all the camps and no longer registered the dead on the transports and in the reception camps.<sup><a href=\"#endnote4\" id=\"footnote4\">4</a></sup>

                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">The Lübberstedt-Bilohe satellite camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    A satellite camp of Neuengamme concentration camp was also set up near the village of Lübberstedt to the north of Bremen. 
                    During the Second World War, a German Air Force ammunition facility (Muna) was located in a forest area directly adjacent to a 
                    railroad line. Ammunition factories were used to assemble and store ordnance and ammunition from intermediate products. 
                    The extensive use of forced laborers in the arms industry affected work in the munitions factories as well. For example, 
                    Eastern European forced laborers, prisoners of war and Italian military internees, as well as concentration camp prisoners 
                    had to work in armaments production at Muna Lübberstedt.<sup><a href=\"#endnote5\" id=\"footnote5\">5</a></sup>
                    The latter arrived in the summer of 1944 from Auschwitz, where almost all of them had been deported from Hungary shortly before. 
                    Presumably the majority of them came from Transcarpathia, which had only been annexed by Hungary in 1939.<sup><a href=\"#endnote6\" id=\"footnote6\">6</a></sup> 
                    In Auschwitz, they were separated from their relatives and friends, the majority of whom were murdered directly by the SS.
                </p>
                <p>
                    <img class=\"img-fluid\"
                         src=\"{{ asset('images/studies/luebberstedt/Auschwitz-Album_Frimi-Ickovic.jpg') }}\"
                         alt=\" Jewish women from Transcarpathia standing in several rows behind each other in Auschwitz-Birkenau\"/>
                <p class=\"caption\">
                </p>
                <p class=\"caption\">
                    Jewish women from Transcarpathia in Auschwitz-Birkenau in May 1944, who had been selected for forced labor 
                    after their arrival. The pictures were taken by SS men for an unknown purpose and represent their perspective. 
                    The images constitute one of the few photographic sources from the extermination camps. On the left-hand side 
                    of the picture, survivor Leo Cove has identified his sister Frimet (Fritzi) Ickovic, who was deported to 
                    Lübberstedt and survived imprisonment in a concentration camp.
                    Auschwitz Album, Yad Vashem (<a href=\"https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp\"
                                   title=\"Website Yad Vashem\">
                        https://www.yadvashem.org/yv/de/exhibitions/album_auschwitz/arrival.asp</a>), 
                    Copyright &copy; 2024 Yad Vashem – The World Holocaust Remembrance Center, Use according to Fair Use
                    (<a href=\"https://www.yadvashem.org/terms-and-conditions.html\"
                        title=\"Website Yad Vashem\">https://www.yadvashem.org/terms-and-conditions.html</a>)
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; More about Hungary</h4>
                    <p>
                        <a href=\"{{ path('app_context') }}\" title=\"Historical context\">
                            &#10149; More about Hungary in the Second World War
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-4\">
                    <h4>&#9432; Forced labor</h4>
                    <p>
                        National Socialist Germany made extensive use of forced labor to meet its labor needs; 
                        in the German Reich alone, over 13.5 million people had to perform forced labor during the Second World War. 
                        Forced labor was used in all branches of industry, but also in agriculture and in private households. 
                        Forced laborers were a visible part of everyday life in National Socialist Germany, especially in the 
                        final years of the war.
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

        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Survivors of the transport to Lübberstedt later reported that the transport assembled in Auschwitz was 
                    initially unable to depart and the prisoners were led back to their barracks, where they had to undress. 
                    It is unclear what the SS’s intention was. The surviving prisoners, who had already witnessed several 
                    mass killings by this time, recalled that they feared they would be murdered after all. Eventually, however, 
                    they were told to get dressed again and board a waiting freight train. Part of the freight train was taken 
                    to the Salzwedel satellite camp, 500 women to Lübberstedt.<sup><a href=\"#endnote7\" id=\"footnote7\">7</a></sup>
                </p>
                <p>
                    As in other satellite camps, survivors emphasized in retrospect the improvement that the transfer to a 
                    satellite camp offered as compared to the Auschwitz concentration and extermination camp. In the case of 
                    the Lübberstedt satellite camp, this was due to the prisoners having their own cot with a blanket and 
                    straw as well as a spoon and plate. Here too, however, the inmates’ provisioning was inhumane and life-threatening. 
                    The women, only provided with thin prisoner clothing and wooden shoes, were consistently given too little 
                    food while at the same time having to perform physically demanding work in the munitions factory. As well, 
                    the Lübberstedt satellite camp only had a small infirmary, where no medical care was available. As the women 
                    also feared that those unfit for work would be selected, several women reported in biographical interviews that 
                    they did not report sick even when they fell ill or suffered from inflammation. At least five inmates are known 
                    to have perished in this satellite camp.<sup><a href=\"#endnote8\" id=\"footnote8\">8</a></sup>
                    In at least three cases, survivors reported mistreatment by the female guards that led to the death of the prisoners. 
                    For example, the survivor Eszter Rosenfeld reported that her bedmate Sari Katz, who was unable to attend morning 
                    roll call, was beaten to death by the guards.<sup><a href=\"#endnote9\" id=\"footnote9\">9</a></sup>
                    As in other women’s satellite camps, the camp was not guarded exclusively by the SS, but also by female guards 
                    employed by the SS inside the camp and Wehrmacht soldiers for external guarding.<sup><a href=\"#endnote10\" id=\"footnote10\">10</a></sup>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Evacuation of the camp</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After the Bremen and Hamburg satellite camps had already been evacuated at the beginning of April and the 
                    prisoners were deported to the Bergen-Belsen reception camp in particular, the camp commandant of the 
                    Lübberstedt-Bilohe satellite camp was also ordered to evacuate the camp on April 18.<sup><a href=\"#endnote11\" id=\"footnote11\">11</a></sup>
                    While the camps in the city area were presumably evacuated earlier due to pressure from the city authorities, 
                    who were concerned about their post-war standing, at this point, the prisoners of the ammunition plant, too, 
                    were to be removed before the area was liberated. Some 60 sick women had previously been deported to 
                    Bergen-Belsen.<sup><a href=\"#endnote12\" id=\"footnote12\">12</a></sup>
                </p>
                <p>
                    However, the Bergen-Belsen concentration camp had already been liberated on April 16, 1945 by the Allies 
                    advancing from the southwest. Unlike the camps in the region evacuated before, the prisoners of the 
                    Lübberstedt satellite camp were therefore deported to Bremen, Hamburg, and eventually to Schleswig-Holstein.
                </p>

                <h3 class=\"mt-4\">By train through northern Germany</h3>
                <p>
                    The prisoners from Lübberstedt later reported that they had been loaded onto freight cars in groups of 50 to 
                    80 women, and that several cars containing ammunition had also been attached to the trains. However, the 
                    survivors’ statements and information from other sources contradict each other, so it is likely that the prisoners 
                    were taken away in two transports reunited after some time.<sup><a href=\"#endnote13\" id=\"footnote13\">13</a></sup>
                    All survivors reported severe hunger due to the extremely reduced food supply during the journey, which lasted 
                    over two weeks. As military transports had priority and many of the tracks had been destroyed, the train was 
                    repeatedly stopped for long periods of time, in some cases even for two days.<sup><a href=\"#endnote14\" id=\"footnote14\">14</a></sup> 
                    In addition, the destinations of many prisoner transports changed during the journey, as their original end 
                    points had been liberated by the Allies in the meantime. One cannot determine beyond doubt what the original 
                    destination of the transport of prisoners from Lübberstedt was. However, one may assume that their destination 
                    was the prisoner ships in the Bay of Lübeck. The survivors also assumed this afterward.<sup><a href=\"#endnote15\" id=\"footnote15\">15</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"infobox\">
                    <h4>&#9432; The Bergen-Belsen concentration camp</h4>
                    <p>
                        The Bergen-Belsen concentration camp was initially founded in 1943 as an “exchange camp” to quarter 
                        Jewish hostages. However, it was quickly assigned other functions and a men’s and women’s camp was set up. 
                        From the end of 1944 onward, Bergen-Belsen became the destination of many death marches and evacuation 
                        transports, developing into a death camp due to the appalling conditions. After liberation, a Polish 
                        and a Jewish displaced persons camp were set up in Bergen-Belsen.<sup><a href=\"#endnote16\" id=\"footnote16\">16</a></sup>
                    </p>
                    <p>
                        <a href=\"{{ path('app_map') }}\" title=\"Map overview\">
                            &#10149; To the map of the camps
                        </a>
                    </p>
                </div>
                <div class=\"infobox mt-2\">
                    <h4>&#9432; Death marches and “final phase crimes”</h4>
                    <p>
                        In the final phase of the war, a number of concentration camps and satellite camps were 
                        evacuated by the Nazis before the approaching Allies arrived. The prisoners were either 
                        transported in freight cars, rarely in trucks, or forced to march on foot to areas still 
                        under German control. During the marches, which often lasted for days, sometimes even weeks, 
                        the prisoners were usually barely fed, many of them starving or dying of thirst in the 
                        freight cars, many collapsing during the marches due to exhaustion or being murdered by the 
                        SS or other units on guard duty. Survivors therefore coined the term “death march” for these 
                        evacuations. Some of the death marches ended in the targeted murder of prisoners, of which the 
                        so-called “Gardelegen massacre” constitutes one of the best known. More than 1,000 prisoners 
                        from satellite camps of the Neuengamme and Mittelbau-Dora concentration camps were rounded up 
                        in a field barn there, which was then set on fire by the SS and other Nazi organizations.<sup><a href=\"#endnote17\" id=\"footnote17\">17</a></sup>
                    </p>
                </div>
            </div>
        </div>

    <div class=\"row\">
        <div class=\"col-lg-8\">
            <a href=\"{{ asset('images/studies/Deportationsroute-Luebberstedt-en.jpg') }}\"
               data-lightbox=\"map-luebbestedt\"
               data-title=\"Deportation route Lübberstedt\">
                <img class=\"gallery img-fluid\"
                     src=\"{{ asset('images/studies/Deportationsroute-Luebberstedt-en.jpg') }}\"
                     alt=\"Map of the deportation route\"/>
            </a>
            <p class=\"caption\">
                Deportation route during evacuation of the Lübberstedt satellite camp. Institute for the History of the German Jews. 
                License: CC BY 4.0 &#128269; Click to enlarge.
            </p>
        </div>
    </div>

        <h3 class=\"mt-4\">Cap Arcona and Thielbeck</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After the SS had decided to evacuate the Neuengamme main camp as well under pressure from the Hamburg 
                    business community and from politicians, some 9,000 prisoners were taken to Lübeck on freight trains 
                    between April 20 and 26. About 7,000 of them were taken to the cargo ships Athen, Thielbeck and Elmenhorst, 
                    which were anchored in the Bay of Lübeck, as well as the luxury liner Cap Arcona, which was unable to maneuver. 
                    As the ships were not designed for the number of prisoners and not enough food had been loaded on board, 
                    the situation for the prisoners in the holds was appalling. On May 2, Lübeck was liberated by British troops, 
                    and a day later the ships were bombed by the British Air Force, which targeted troop transports in the Baltic Sea. 
                    The Cap Arcona and the Thielbeck were hit and sank. Of the approximately 7,000 prisoners on the two ships at 
                    the time, only some 400 survived the attack. While survivors suspected that the SS had planned to blow up the 
                    ships to kill the prisoners from the outset, researchers now assume that the prisoners were merely to be 
                    quartered temporarily on the ships.<sup><a href=\"#endnote18\" id=\"footnote18\">18</a></sup>
                </p>
                <p>
                    <img class=\"img-fluid\" src=\"{{ asset('images/studies/luebberstedt/Cap_Arcona_burning.jpg') }}\"
                         alt=\"Blick in eine Produktionshalle der V1 im Konzentrationslager Mittelbau-Dora im Mai 1946\"/>
                <p class=\"caption\">
                    Photo of the burning Cap Arcona shortly after the attack, Royal Air Force, May 3, 1945, 
                    source: <a href=\"http://www.uni-hamburg.de/rz3a035//arcona.html\"
                               title=\"Website of the University of Hamburg\">
                        http://www.uni-hamburg.de/rz3a035//arcona.html</a>, Wikipedia,
                    <a href=\"https://commons.wikimedia.org/wiki/File:Cap_Arcona_burning.jpg\"
                       title=\"Wikimedia Commons\">
                        https://commons.wikimedia.org/wiki/File:Cap_Arcona_burning.jpg</a>, public domain
                </p>
                <p>
                    On May 1 or 2, 1945, the train from Lübberstedt also reached Lübeck, but instead of a transfer onto the ships, 
                    the train stopped outside the city again for a long time, according to survivors. In a group interview, survivor 
                    Malvin Grünberger reported that the ship that was supposed to accommodate the prisoners had already left and that 
                    the prisoners burst into tears when they learned about it.<sup><a href=\"#endnote19\" id=\"footnote19\">19</a></sup>
                    They had hoped to be taken to Denmark on the vessels. Other survivors reported that they had been warned by a 
                    female guard not to board the ships.<sup><a href=\"#endnote20\" id=\"footnote20\">20</a></sup>
                    It is not possible to determine which ship the prisoners were to be taken to and why the SS did not carry out 
                    this plan. The last prisoner ships left the port of Lübeck on May 2. In the days before, however, the captain of 
                    the Cap Arcona, Heinrich Bertram, had repeatedly refused to take on any more prisoners, as had the captains of 
                    other ships.<sup><a href=\"#endnote21\" id=\"footnote21\">21</a></sup>
                    It is therefore not possible to determine whether the women from Lübberstedt were not loaded because their ship 
                    had already departed, was already overcrowded, or whether the train could no longer reach the port of Lübeck due 
                    to the British encirclement of the city.
                </p>
                <p>
                    While Lübeck was liberated by British troops during the course of May 2, the train with the prisoners set off 
                    again and continued north from Lübeck. On the same day, the train was attacked twice by British planes. At this 
                    time, the British targeted railroad facilities and stations as well as freight trains.<sup><a href=\"#endnote22\" id=\"footnote22\">22</a></sup> 
                    As with the Cap Arcona, they were not aware that concentration camp prisoners were being transported. The train 
                    was hit in the second attack. Survivors later reported that the train caught fire, but also that the guards shot 
                    at the escaping prisoners. At least 38 women died as a direct result of the attack, with survivors estimating 
                    60 to 80 deaths.<sup><a href=\"#endnote23\" id=\"footnote23\">23</a></sup> 
                    After the destroyed railroad car had been uncoupled and left behind with the injured, the train set off again 
                    during the night. The abandoned railroad car was found by local authorities on the morning of May 3, and the 
                    injured, at least 18, were taken to the Eutin military hospital, where five of them succumbed to their injuries. 
                    They were buried in the cemetery of the former Jewish congregation in Eutin, while the women who died on the 
                    spot were buried in a mass grave by the railroad tracks.
                </p>
                <img class=\"img-fluid\" src=\"{{ asset('images/studies/luebberstedt/Luebberstadt-gedenkstein.jpg') }}\"
                     alt=\"Memorial stone at the Lübeck-Moisling Jewish cemetery\"/>
                <p class=\"caption\">
                    At the end of 1960, the 38 women buried along the railroad line were reburied in the Jewish cemetery in 
                    Lübeck-Moisling, where this gravestone still commemorates them today. 
                    Photo: Leonid Kogan, 2015 (ANg, F 2015-1004, Satellite camp list (kz-gedenkstaette-neuengamme.de)), 
                    URL: <a href=\"https://www.kz-gedenkstaette-neuengamme.de/geschichte/kz-aussenlager/aussenlagerliste/luebberstedt-bilohe\">
                        https://www.kz-gedenkstaette-neuengamme.de/geschichte/kz-aussenlager/aussenlagerliste/luebberstedt-bilohe
                        </a>.
                </p>
                <p>
                    Behind Timmdorf, the train was once again fired on by British planes. Once again, 16 women lost their lives. The survivors then 
                    refused to get back on the train and were led to Plön on foot. The survivor Malvin Grünberger described how they had heard 
                    several times that the war was over.<sup><a href=\"#endnote24\" id=\"footnote24\">24</a></sup> 
                    A number of survivors recalled how in Plön, too, the prisoners had refused to board the train that had followed.<sup><a href=\"#endnote25\" id=\"footnote25\">25</a></sup> 
                    Some of the survivors reported in interviews that the Wehrmacht soldiers who were supposed to guard the ammunition cars 
                    also advised them to flee. Through the soldiers the women had apparently learned as well about plans to blow up the train 
                    together with them, which had strengthened their resistance.<sup><a href=\"#endnote26\" id=\"footnote26\">26</a></sup> 
                    Contact with Soviet prisoners of war who had already been liberated likewise reinforced the women’s expectation 
                    that the war would end soon. After the first British reconnaissance vehicle was spotted in Plön on May 4, 
                    the guards fled.<sup><a href=\"#endnote27\" id=\"footnote27\">27</a></sup> According to some survivors, however, 
                    they returned the next day to try again to force the women into the railroad car. Survivor Eszter Rosenfeld 
                    recalled that these attempts failed, not least because the SS men had already thrown away their weapons in 
                    anticipation of their imminent British captivity.<sup><a href=\"#endnote28\" id=\"footnote28\">28</a></sup> It is not 
                    possible to determine what goal the SS was pursuing with the further transportation of the prisoners. 
                    Northern Germany, too, saw several massacres of concentration camp prisoners that were murdered by the National 
                    Socialists before their possible liberation. However, the route had previously been used as well to transport 
                    several thousand female concentration camp inmates who had been handed over to the Red Cross.<sup><a href=\"#endnote29\" id=\"footnote29\">29</a></sup> 
                    It is unclear whether this was also intended for the prisoners from Lübberstedt.
                </p>

            </div>
            <div class=\"col-lg-4\">
                    <div class=\"infobox\">
                        <h4>&#128279; More on this topic</h4>
                        <p>
                            Katharina Hardy – Focus “DP Camp Bergen-Belsen”
                        </p>
                        <p>
                            <a href=\"{{ path('app_bio_hardy') }}\"
                               title=\"More information on the individual biography Katharina Hardy – Focus “DP Camp Bergen-Belsen”\">
                                &#10149; Read on
                            </a>
                        </p>
                        <p>
                            Gyula Fürst – an unusual deportation route
                        </p>
                        <p>
                            <a href=\"{{ path('app_bio_fuerst') }}\"
                               title=\"More information on the individual biography Gyula Fürst – an unusual deportation route\">
                                &#10149; Read on
                            </a>
                        </p>
                    </div>
                </div>
        </div>

        <h3 class=\"mt-4\">White buses</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    Starting on April 3, 1945, more than 2,000 Scandinavian concentration camp prisoners were handed over to the 
                    Swedish Red Cross and evacuated to Denmark. This was the outcome of secret negotiations between the Vice 
                    President of the Swedish Red Cross, Count Folke Bernadotte, and Reichsführer SS Heinrich Himmler as well as 
                    the head of the Reich Main Security Office, Ernst Kaltenbrunner. As a result of these talks, Himmler had agreed 
                    in February 1945 first to reunite the Scandinavian prisoners in the main camp of Neuengamme concentration 
                    camp and then to release them. The background to these negotiations were Himmler’s attempts to achieve an 
                    armistice with the Western Allies on his own authority. When the Neuengamme main camp was evacuated on 
                    April 20, 1945, the remaining 4,200 Scandinavian prisoners still in the camp, too, were taken to Denmark by 
                    the Red Cross in specially marked buses. In further negotiations, the Red Cross also succeeded in obtaining 
                    permission for the release of about 15,000 female prisoners from Ravensbrück concentration camp and from 
                    satellite camps in Hamburg, including over a thousand Jewish women. They were taken to Denmark on freight 
                    trains, some of them via Plön.<sup><a href=\"#endnote30\" id=\"footnote30\">30</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Liberation of the prisoners in Plön</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    After the guards had left, the former prisoners spent a few more days hiding in a forest, where they supported 
                    themselves by begging in the surrounding villages. Contemporary witnesses from the region, too, remembered the 
                    women after the liberation.<sup><a href=\"#endnote31\" id=\"footnote31\">31</a></sup> 
                    It was only when the British army arrived in Plön on May 8 and Germany surrendered unconditionally that the 
                    liberated women dared to come out of hiding. “The British liberated us and we were able to start living as 
                    human beings again,” survivor Hajnal Kaufmann later recalled.<sup><a href=\"#endnote32\" id=\"footnote32\">32</a></sup> 
                    The liberated women were then housed in the Haffkrug DP camp in the Bay of Lübeck. The British had cleared 
                    a village there in order to be able to care for the liberated forced laborers of various nationalities until 
                    they returned to their countries of origin or emigrated. Survivors described how they regained their strength 
                    in the DP camp, but also that the wrecks of the destroyed concentration camp ships were visible and swimming 
                    was not possible due to the corpses floating in the water.<sup><a href=\"#endnote33\" id=\"footnote33\">33</a></sup>
                </p>
            </div>
            <div class=\"col-lg-4\">
            </div>
        </div>

        <h3 class=\"mt-4\">Sources and research</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <p>
                    As with many satellite camps of Neuengamme concentration camp, the majority of the documents relating to the 
                    Lübberstedt satellite camp were destroyed by the SS. However, important references to the satellite camp can 
                    be found in surviving documents relating to the ammunition plant. The SS presumably no longer kept records of 
                    most of the events during the evacuation transport. However, the prisoners who died in the Eutin district 
                    hospital and during the attack in Plön were buried by civilian authorities. Registry office and cemetery 
                    records have therefore been preserved for them and, following a reburial in the 1960s, so have graves in 
                    northern Germany. Moreover, in the early post-war period, the Deportáltakat Gondozó Országos Bizottság 
                    (National Welfare Committee of Deportees DEGOB) interviewed Holocaust survivors that had returned to Hungary 
                    via Budapest at least for some time.
                    <a href=\"http://degob.org/\" title=\"DEGOB protocols\">
                        As many as 109 survivors of the Lübberstedt satellite camp and the transport to Plön were also 
                        among them.</a><sup><a href=\"#endnote34\" id=\"footnote34\">34</a></sup>
                </p>
                <p>
                    Since the early 1980s, a large number of initiatives and associations dedicated to researching and communicating 
                    local history have emerged across Germany. Under the motto of “Dig where you stand!,” the frequently forgotten 
                    sites of satellite camps and other forced labor camps came into focus as well. In 1992, a working group was 
                    founded in Lübberstedt to investigate the history of the munitions factory and the forced labor carried out there. 
                    The “MUNA Lübberstedt Task Force” compiled many of the scattered sources on the ammunition plant and published 
                    its findings in a book in 1996, which also forms an important basis for this article.<sup><a href=\"#endnote35\" id=\"footnote35\">35</a></sup>
                    The local historian Karsten Dölger from Plön dedicated intensive efforts to research the women who died in the 
                    attacks on the prisoner transport and who were buried in the region. In 2017, he published his findings in an 
                    essay.<sup><a href=\"#endnote36\" id=\"footnote36\">36</a></sup>
                    It is this extensive research, often carried out on a voluntary basis, that compiles the available sources and 
                    forms the foundation for the knowledge and also the remembrance of the concentration camp prisoners imprisoned 
                    in the various satellite camps and their individual fates.
                </p>
            </div>
            <div class=\"col-lg-4\">
                <p>
                </p>
            </div>
        </div>

        <h3 class=\"mt-4\">Bibliografie</h3>
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <ul class=\"bibliography\">
                    <li>
                        Dietrich Banse, “ich wollte überleben und der Welt erzählen” Zur Geschichte des Frauenlagers
                        Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005.
                    </li>
                    <li>
                        Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des Kz Neuengamme, Göttingen 2009.
                    </li>
                    <li>
                        Lukkas Busche / Andreas Froese (eds.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Catalog accompanying for the permanent exhibition at the Feldscheune Isenschnibbe Gardelegen Memorial,
                        Gardelegen / Leipzig / Magdeburg 2022.
                    </li>
                    <li>
                        Karsten Dölger, “Von Auschwitz nach Plön – Für 350 ungarische Jüdinnen endete die
                        nationalsozialistische Verschleppung am 4. Mai 1945 in Plön,” in: Jahrbuch für Heimatkunde im
                        Kreis Plön 47 (2017), pp. 179-212.
                    </li>
                    <li>
                        Hans Ellger, “Lübberstedt-Bilohe,” in: Wolfgang Benz / Barbara Distel (eds.), Der Ort des
                        Terrors. Geschichte der nationalsozialistischen Konzentrationslager. Vol. 5: Hinzert. Auschwitz.
                        Neuengamme, München 2007, pp. 473-475.
                    </li>
                    <li>
                        Barbara Hillmann / Volrad Kluge / Erdwig Kramer, Lw. 2/XI – Muna Lübberstedt. Zwangsarbeit für
                        den Krieg, Bremen 1996.
                    </li>
                </ul>
            </div>
        </div>

        <h3 class=\"mt-4\">Fußnoten</h3>
        <div class=\"row\">
            <div class=\"col-lg-8 caption\">
                <ol>
                    <li id=\"endnote1\">
                        Cf. Marc Buggeln, Arbeit und Gewalt. Das Außenlagersystem des KZ Neuengamme, Göttingen 2009, p.
                        626.
                        <a href=\"#footnote1\">&uarr;</a>
                    </li>
                    <li id=\"endnote2\">
                        Cf. Buggeln, Arbeit und Gewalt, p. 628.
                        <a href=\"#footnote2\">&uarr;</a>
                    </li>
                    <li id=\"endnote3\">
                        Cf. Buggeln, Arbeit und Gewalt, pp. 631-632.
                        <a href=\"#footnote3\">&uarr;</a>
                    </li>
                    <li id=\"endnote4\">
                        Cf. Buggeln, Arbeit und Gewalt, p. 634.
                        <a href=\"#footnote4\">&uarr;</a>
                    </li>
                    <li id=\"endnote5\">
                        Cf. Barbara Hillmann / Volrad Kluge / Erdwig Kramer, Lw. 2/XI – Muna Lübberstedt. Zwangsarbeit
                        für den Krieg, Bremen 1996.
                        <a href=\"#footnote5\">&uarr;</a>
                    </li>
                    <li id=\"endnote6\">
                        For example, 96 of the 109 survivors identified by Karsten Dölger who were interviewed by the DEGOB in 1945 came from Transcarpathia. 
                        See Karsten Dölger, “Von Auschwitz nach Plön – Für 350
                        ungarische Jüdinnen endete die nationalsozialistische Verschleppung am 4. Mai 1945 in Plön,” in:
                        Jahrbuch für Heimatkunde im Kreis Plön 47 (2017), pp. 179-212, p. 181.
                        <a href=\"#footnote6\">&uarr;</a>
                    </li>
                    <li id=\"endnote7\">
                        Cf. Dölger, “Auschwitz nach Plön,” pp. 188, 189; Hillmann / Kluge / Kramer, MUNA Lübberstedt, p.
                        108. Survivors from Salzwedel also reported that their transport from Auschwitz was initially deferred.
                        See Dietrich Banse, “ich wollte überleben und der Welt erzählen” Zur
                        Geschichte des Frauenlagers Salzwedel – Außenlager des KZ Neuengamme, Salzwedel 2005, p. 39.
                        <a href=\"#footnote7\">&uarr;</a>
                    </li>
                    <li id=\"endnote8\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt, p. 122.
                        <a href=\"#footnote8\">&uarr;</a>
                    </li>
                    <li id=\"endnote9\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt, p. 124.
                        <a href=\"#footnote9\">&uarr;</a>
                    </li>
                    <li id=\"endnote10\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt , pp. 111-116.
                        <a href=\"#footnote10\">&uarr;</a>
                    </li>
                    <li id=\"endnote11\">
                        Cf. Dölger, “Auschwitz nach Plön,” p. 195; Buggeln, Arbeit und Gewalt, p. 636.
                        <a href=\"#footnote11\">&uarr;</a>
                    </li>
                    <li id=\"endnote12\">
                        Cf. Hillman / Kluge / Kramer, MUNA Lübberstedt, pp. 124-128; Dölger, “Auschwitz nach Plön,” p.
                        192.
                        <a href=\"#footnote12\">&uarr;</a>
                    </li>
                    <li id=\"endnote13\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt, p. 130; Hans Ellger, “Lübberstedt-Bilohe,” in:
                        Wolfgang Benz / Barbara Distel (eds.), Der Ort des Terrors. Geschichte der
                        nationalsozialistischen Konzentrationslager. Vol. 5: Hinzert. Auschwitz. Neuengamme, München
                        2007, pp. 473-475, p. 474.
                        <a href=\"#footnote13\">&uarr;</a>
                    </li>
                    <li id=\"endnote14\">
                        Buggeln, Arbeit und Gewalt, p. 642.
                        <a href=\"#footnote14\">&uarr;</a>
                    </li>
                    <li id=\"endnote15\">
                        Cf. Joint testimony of Gisella Ickovics, born in 1898, and her daughters, Malvin Ickovics, born
                        in 1921, Edit Ickovics, born in 1924, Friederika Ickovics, born in 1926, in Técső,
                        Czechoslovakia, regarding their experiences in the Técső Ghetto, in Auschwitz-Birkenau and
                        Lübberstedt camp, Yad Vashem Digital Archive, Subsection O 15 E, Nr. 1634, online at:
                        https://collections.yadvashem.org/en/documents/3544918 (last accessed: July 25, 2024); Collective
                        testimony of 66 women, regarding their experiences in Auschwitz-Birkenau camp and Liebstadt, Yad
                        Vashem Digital Archive, Subsection O 15 E, Nr. 2118, online at:
                        <a href=\"https://collections.yadvashem.org/en/documents/3543545\" title=\"Website Yad Vashem\">
                        https://collections.yadvashem.org/en/documents/3543545
                        </a>(last accessed: July 25, 2024).
                        <a href=\"#footnote15\">&uarr;</a>
                    </li>
                    <li id=\"endnote16\">
                        See Lower Saxony Memorials Foundation (ed.), Bergen-Belsen. Kriegsgefangenenlager
                        1940-1945, Konzentrationslager 1943-1945, Displaced Persons Camp 1945-1950. Katalog der
                        Dauerausstellung, Celle 2009, p. 200.
                        <a href=\"#footnote16\">&uarr;</a>
                    </li>
                    <li id=\"endnote17\">
                        Lukkas Busche / Andreas Froese (eds.), Gardelegen 1945. Das Massaker und seine Nachwirkungen.
                        Catalog accompanying the permanent exhibition at the Feldscheune Isenschnibbe Gardelegen Memorial,
                        Gardelegen / Leipzig / Magdeburg 2022.
                        <a href=\"#footnote17\">&uarr;</a>
                    </li>
                    <li id=\"endnote18\">
                        Cf. Buggeln, Arbeit und Gewalt, p. 653.
                        <a href=\"#footnote18\">&uarr;</a>
                    </li>
                    <li id=\"endnote19\">
                        Cf. Collective testimony of 66 women.
                        <a href=\"#footnote19\">&uarr;</a>
                    </li>
                    <li id=\"endnote20\">
                        Cf. Hillmann / Kluge / Kramer, MUNA Lübberstedt, p. 130.
                        <a href=\"#footnote20\">&uarr;</a>
                    </li>
                    <li id=\"endnote21\">
                        Cf. Buggeln, Arbeit und Gewalt, p. 653.
                        <a href=\"#footnote21\">&uarr;</a>
                    </li>
                    <li id=\"endnote22\">
                        Buggeln, Arbeit und Gewalt, p. 642.
                        <a href=\"#footnote22\">&uarr;</a>
                    </li>
                    <li id=\"endnote23\">
                        Cf. Testimony of Eszter Rosenfeld, born in Bedőháza, Czechoslovakia, 1922, regarding her
                        experiences in the Técső Ghetto and in Auschwitz-Birkenau and Haffkrug camps, Yad Vashem Digital
                        Archive, Subsection O 15 E, Nr. 2832, online at:
                        <a href=\"https://collections.yadvashem.org/en/documents/3546639\" title=\"Website Yad Vashem\">
                        https://collections.yadvashem.org/en/documents/3546639</a> (last accessed: July 25, 2024); Joint
                        testimony of Gisella Ickovics, Malvin Ickovics, Edit Ickovics.
                        <a href=\"#footnote23\">&uarr;</a>
                    </li>
                    <li id=\"endnote24\">
                        Cf. Collective testimony of 66 women.
                        <a href=\"#footnote24\">&uarr;</a>
                    </li>
                    <li id=\"endnote25\">
                        Cf. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote25\">&uarr;</a>
                    </li>
                    <li id=\"endnote26\">
                        Cf. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote26\">&uarr;</a>
                    </li>
                    <li id=\"endnote27\">
                        Cf. Dölger, “Auschwitz nach Plön,” p. 198.
                        <a href=\"#footnote27\">&uarr;</a>
                    </li>
                    <li id=\"endnote28\">
                        Cf. Testimony of Eszter Rosenfeld.
                        <a href=\"#footnote28\">&uarr;</a>
                    </li>
                    <li id=\"endnote29\">
                        Cf. Dölger, “Auschwitz nach Plön,” pp. 196f.
                        <a href=\"#footnote29\">&uarr;</a>
                    </li>
                    <li id=\"endnote30\">
                        Cf. Buggeln, Arbeit und Gewalt, pp. 654-655; Dölger, “Auschwitz nach Plön,” pp. 196f.
                        <a href=\"#footnote30\">&uarr;</a>
                    </li>
                    <li id=\"endnote31\">
                        Cf. Dölger, “Auschwitz nach Plön,” pp. 199f.
                        <a href=\"#footnote31\">&uarr;</a>
                    </li>
                    <li id=\"endnote32\">
                        Cf. Testimony of Hajnal Kaufmann, born in Huszt, Czechoslovakia, 1924, regarding her experiences
                        in the Huszt Ghetto and in Auschwitz-Birkenau and Lübberstedt camps, Yad Vashem Digital Archive,
                        Subsection O 15 E, Nr. 1937, online at:
                        <a href=\"https://collections.yadvashem.org/en/documents/3545504\" title=\"Website Yad Vashem\">
                        https://collections.yadvashem.org/en/documents/3545504</a> (last accessed: July 25, 2024).
                        <a href=\"#footnote32\">&uarr;</a>
                    </li>
                    <li id=\"endnote33\">
                        Cf. Dölger, “Auschwitz nach Plön,” pp. 205f.
                        <a href=\"#footnote33\">&uarr;</a>
                    </li>
                    <li id=\"endnote34\">
                        Cf. Dölger, “Auschwitz nach Plön,” p. 179. The protocols can be viewed in the online archive of Yad
                        Vashem: https://collections.yadvashem.org/en.
                        <a href=\"#footnote34\">&uarr;</a>
                    </li>
                    <li id=\"endnote35\">
                        Cf. Hillmann/Kluge/Kramer, MUNA Lübberstedt.
                        <a href=\"#footnote35\">&uarr;</a>
                    </li>
                    <li id=\"endnote36\">
                        Cf. Dölger, “Auschwitz nach Plön.”
                        <a href=\"#footnote36\">&uarr;</a>
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
                    Louis Wörner, “Die Räumung des KZ-Außenlagers Lübberstedt,” 
                    in: Der Holocaust in Ungarn und die Deportationen nach Norddeutschland. Biographien, Lager und Zwangsarbeit, 
                    edited by the Institute for the History of the German Jews, URL:
                    https://holocaust-ungarn-norddeutschland.de{{ path('app_deportation_luebberstedt') }}.
                    License: <a href=\"https://creativecommons.org/licenses/by/4.0/\" 
                    title=\"License terms on the Creative Commons website\">CC BY 4.0</a>.
                </p>
            </div>
        </div>

    </div>

{% endblock %}", "studies/luebberstedt.en.html.twig", "/Users/Admin/Documents/dev/hungmem/templates/studies/luebberstedt.en.html.twig");
    }
}
