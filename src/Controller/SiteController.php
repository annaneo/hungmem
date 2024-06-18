<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('collection/home.html.twig', [
            'title' => 'Startseite'
        ]);
    }


    #[Route('/map', name: 'app_map')]
    public function map()
    {
        return $this->render('collection/map.html.twig', [
            ''
        ]);
    }

    #[Route('/deportationen/', name: 'app_deportation')]
    public function deportation(): Response
    {
        return $this->render('collection/deportation.html.twig', [
            'title' => 'Deportationsrouten'
        ]);
    }

    #[Route('/biographien/', name: 'app_biographies')]
    public function biographies(): Response
    {
        return $this->render('collection/biographies.html.twig', [
            'title' => 'Biographien'
        ]);
    }


    #[Route('/hungmem/', name: 'app_about')]
    public function about()
    {
        return $this->render('collection/about.html.twig');
    }


    #[Route('/context', name: 'app_context')]
    public function context()
    {
        return $this->render('collection/context.html.twig');
    }


    #[Route('/quellen', name: 'app_sources')]
    public function sources()
    {
        return $this->render('sources.html.twig');
    }

    /**
     * Imprint.
     *
     * @Route("/impressum", name="imprint")
     */
    #[Route('/impressum', name: 'app_imprint')]
    public function imprint()
    {
        return $this->render('collection/imprint.html.twig');
    }


    #[Route('/api/json', name: 'app_jsonapi')]
    public function jsonapi()
    {
        $jsonData = file_get_contents(__DIR__ . '/biographies.json');

        return JsonResponse::fromJsonString($jsonData);
    }

    /**
     * Interview template
     *
     * @Route("/interview/template", name="template")
     */
    public function template()
    {
        return $this->render('biographies/template.html.twig');
    }

    /**
     * Interview Fenyes
     *
     * @Route("/interview/fenyes", name="fenyes")
     */
    #[Route('/interview/fenyes', name: 'app_fenyes')]
    public function fenyes()
    {
        return $this->render('biographies/fenyes.html.twig');
    }

    /**
     * Interview Camargo
     *
     * @Route("/interview/camargo", name="camargo")
     */
    #[Route('/interview/camargo', name: 'app_camargo')]
    public function camargo()
    {
        return $this->render('biographies/camargo.html.twig');
    }

    /**
     * Interview Guenther
     *
     * @Route("/interview/guenther", name="guenther")
     */

    #[Route('/interview/guenther', name: 'app_guenther')]
    public function guenther()
    {
        return $this->render('biographies/guenther.html.twig');
    }

    /**
     * Interview Guggenheim
     *
     * @Route("/interview/guggenheim", name="guggenheim")
     */
    #[Route('/interview/guggenheim', name: 'app_guggenheim')]
    public function guggenheim()
    {
        return $this->render('biographies/guggenheim.html.twig');
    }

    /**
     * Interview Heimann
     *
     * @Route("/interview/heimann", name="heimann")
     */
    #[Route('/interview/heimann', name: 'app_heimann')]
    public function heimann()
    {
        return $this->render('biographies/heimann.html.twig');
    }

    /**
     * Interview Horwitz
     *
     * @Route("/interview/horwitz", name="horwitz")
     */
    #[Route('/interview/horwitz', name: 'app_horwitz')]
    public function horwitz()
    {
        return $this->render('biographies/horwitz.html.twig');
    }

    /**
     * Interview Korn
     *
     * @Route("/interview/korn", name="korn")
     */
    #[Route('/interview/korn', name: 'app_korn')]
    public function korn()
    {
        return $this->render('biographies/korn.html.twig');
    }

    /**
     * Interview Lahnstein
     *
     * @Route("/interview/lahnstein", name="lahnstein")
     */
    #[Route('/interview/lahnstein', name: 'app_lahnstein')]
    public function lahnstein()
    {
        return $this->render('biographies/lahnstein.html.twig');
    }

    /**
     * Interview Landshut
     *
     * @Route("/interview/landshut", name="landshut")
     */
    #[Route('/interview/landshut', name: 'app_landshut')]
    public function landshut()
    {
        return $this->render('biographies/landshut.html.twig');
    }

    /**
     * Interview Lohse
     *
     * @Route("/interview/lohse", name="lohse")
     */
    #[Route('/interview/lohse', name: 'app_lohse')]
    public function lohse()
    {
        return $this->render('biographies/lohse.html.twig');
    }

    /**
     * Interview Lubinska
     *
     * @Route("/interview/lubinska", name="lubinska")
     */
    #[Route('/interview/lubinska', name: 'app_lubinska')]
    public function lubinska()
    {
        return $this->render('biographies/lubinska.html.twig');
    }

    /**
     * Interview Melamed
     *
     * @Route("/interview/melamed", name="melamed")
     */
    #[Route('/interview/melamed', name: 'app_melamed')]
    public function melamed()
    {
        return $this->render('biographies/melamed.html.twig');
    }

    /**
     * Interview Nasirzadeh
     *
     * @Route("/interview/nasirzadeh", name="nasirzadeh")
     */
    #[Route('/interview/nasirzadeh', name: 'app_nasirzadeh')]
    public function nasirzadeh()
    {
        return $this->render('biographies/nasirzadeh.html.twig');
    }

    /**
     * Interview Parnass
     *
     * @Route("/interview/parnass", name="parnass")
     */
    #[Route('/interview/parnass', name: 'app_parnass')]
    public function parnass()
    {
        return $this->render('biographies/parnass.html.twig');
    }

    /**
     * Interview Pestov
     *
     * @Route("/interview/pestov", name="pestov")
     */
    #[Route('/interview/pestov', name: 'app_pestov')]
    public function pestov()
    {
        return $this->render('biographies/pestov.html.twig');
    }

    /**
     * Interview Rosenblum
     *
     * @Route("/interview/rosenblum", name="rosenblum")
     */
    #[Route('/interview/rosenblum', name: 'app_rosenblum')]
    public function rosenblum()
    {
        return $this->render('biographies/rosenblum.html.twig');
    }

    /**
     * Interview Trebitsch
     *
     * @Route("/interview/trebitsch", name="trebitsch")
     */
    #[Route('/interview/trebitsch', name: 'app_trebitsch')]
    public function trebitsch()
    {
        return $this->render('biographies/trebitsch.html.twig');
    }

    /**
     * Interview Wallenstein
     *
     * @Route("/interview/wallenstein", name="wallenstein")
     */
    #[Route('/interview/wallenstein', name: 'app_wallenstein')]
    public function wallenstein()
    {
        return $this->render('biographies/wallenstein.html.twig');
    }

    /**
     * Interview Wittenberg
     *
     * @Route("/interview/wittenberg", name="wittenberg")
     */
    #[Route('/interview/wittenberg', name: 'app_wittenberg')]
    public function wittenberg()
    {
        return $this->render('biographies/wittenberg.html.twig');
    }

    /**
     * Interview Zunik
     *
     * @Route("/interview/zunik", name="zunik")
     */
    #[Route('/interview/zunik', name: 'app_zunik')]
    public function zunik()
    {
        return $this->render('biographies/zunik.html.twig');
    }

}