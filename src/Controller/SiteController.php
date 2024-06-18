<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{

    /**
     * Start page of Website displaying an overview of all published interviews.
     *
     * 'title' => 'Holocaust in Ungarn' */
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('collection/home.html.twig', [
            'title' => 'Startseite'
        ]);
    }

    /**
     * Testing site for trouble shooting
     *
     * @Route("/test", name="test")
     */
    #[Route('/test', name: 'app_test')]
    public function test()
    {
        return $this->render('collection/test.html.twig', [
            ''
        ]);
    }

    /**
     * Start page of Website displaying an overview of all published interviews.
     *
     * @Route("/placeholder", name="placeholder")
     */
    #[Route('/placeholder', name: 'app_placeholder')]
    public function placeholder()
    {
        return $this->render('collection/placeholder.html.twig', [
            ''
        ]);
    }

    /**
     * Map view of all places mentioned in the Interviews.
     *
     * @Route("/map", name="map")
     */
    #[Route('/map', name: 'app_map')]
    public function map()
    {
        return $this->render('collection/map.html.twig', [
            ''
        ]);
    }

    // TODO: even though it will not be used, add a generic function to load data from json for purpose of potential reuse
    /**
     * Single view for an interview containing video, meta data and short summary of content of the interview
     *
     * @Route("/interview/{slug}", name="interview")
     *
     * #[Route('/interview/{slug}')]
     * public function interview($slug)
     * {
     *
     * return $this->render('interviews/template.html.twig', [
     * 'person' => ucwords(str_replace('-', ' ', $slug)),
     * ]);
     * }
     */

    /**
     * Information about the project and the partners.
     *
     * @Route("/ueber-das-projekt", name="about")
     */
    #[Route('/about/', name: 'app_about')]
    public function about()
    {
        return $this->render('collection/about.html.twig');
    }

    /**
     * Information on (historical) context.
     *
     * @Route("/das-juedische-hamburg", name="context")
     */
    #[Route('/context', name: 'app_context')]
    public function context()
    {
        return $this->render('collection/context.html.twig');
    }

    /**
     * Information on usage of interviews and data: licensing and further information.
     *
     * @Route("/nutzung", name="usage")
     */
    #[Route('/nutzung', name: 'app_usage')]
    public function usage()
    {
        return $this->render('collection/usage.html.twig');
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

    /**
     * JSON API of Interviews and metadata.
     *
     * @Route("/api/json", name="json")
     */
    #[Route('/api/json', name: 'app_jsonapi')]
    public function jsonapi()
    {
        $jsonData = file_get_contents(__DIR__ . '/interviews.json');

        return JsonResponse::fromJsonString($jsonData);
    }

    /**
     * Interview template
     *
     * @Route("/interview/template", name="template")
     */
    public function template()
    {
        return $this->render('interviews/template.html.twig');
    }

    /**
     * Interview Fenyes
     *
     * @Route("/interview/fenyes", name="fenyes")
     */
    #[Route('/interview/fenyes', name: 'app_fenyes')]
    public function fenyes()
    {
        return $this->render('interviews/fenyes.html.twig');
    }

    /**
     * Interview Camargo
     *
     * @Route("/interview/camargo", name="camargo")
     */
    #[Route('/interview/camargo', name: 'app_camargo')]
    public function camargo()
    {
        return $this->render('interviews/camargo.html.twig');
    }

    /**
     * Interview Guenther
     *
     * @Route("/interview/guenther", name="guenther")
     */

    #[Route('/interview/guenther', name: 'app_guenther')]
    public function guenther()
    {
        return $this->render('interviews/guenther.html.twig');
    }

    /**
     * Interview Guggenheim
     *
     * @Route("/interview/guggenheim", name="guggenheim")
     */
    #[Route('/interview/guggenheim', name: 'app_guggenheim')]
    public function guggenheim()
    {
        return $this->render('interviews/guggenheim.html.twig');
    }

    /**
     * Interview Heimann
     *
     * @Route("/interview/heimann", name="heimann")
     */
    #[Route('/interview/heimann', name: 'app_heimann')]
    public function heimann()
    {
        return $this->render('interviews/heimann.html.twig');
    }

    /**
     * Interview Horwitz
     *
     * @Route("/interview/horwitz", name="horwitz")
     */
    #[Route('/interview/horwitz', name: 'app_horwitz')]
    public function horwitz()
    {
        return $this->render('interviews/horwitz.html.twig');
    }

    /**
     * Interview Korn
     *
     * @Route("/interview/korn", name="korn")
     */
    #[Route('/interview/korn', name: 'app_korn')]
    public function korn()
    {
        return $this->render('interviews/korn.html.twig');
    }

    /**
     * Interview Lahnstein
     *
     * @Route("/interview/lahnstein", name="lahnstein")
     */
    #[Route('/interview/lahnstein', name: 'app_lahnstein')]
    public function lahnstein()
    {
        return $this->render('interviews/lahnstein.html.twig');
    }

    /**
     * Interview Landshut
     *
     * @Route("/interview/landshut", name="landshut")
     */
    #[Route('/interview/landshut', name: 'app_landshut')]
    public function landshut()
    {
        return $this->render('interviews/landshut.html.twig');
    }

    /**
     * Interview Lohse
     *
     * @Route("/interview/lohse", name="lohse")
     */
    #[Route('/interview/lohse', name: 'app_lohse')]
    public function lohse()
    {
        return $this->render('interviews/lohse.html.twig');
    }

    /**
     * Interview Lubinska
     *
     * @Route("/interview/lubinska", name="lubinska")
     */
    #[Route('/interview/lubinska', name: 'app_lubinska')]
    public function lubinska()
    {
        return $this->render('interviews/lubinska.html.twig');
    }

    /**
     * Interview Melamed
     *
     * @Route("/interview/melamed", name="melamed")
     */
    #[Route('/interview/melamed', name: 'app_melamed')]
    public function melamed()
    {
        return $this->render('interviews/melamed.html.twig');
    }

    /**
     * Interview Nasirzadeh
     *
     * @Route("/interview/nasirzadeh", name="nasirzadeh")
     */
    #[Route('/interview/nasirzadeh', name: 'app_nasirzadeh')]
    public function nasirzadeh()
    {
        return $this->render('interviews/nasirzadeh.html.twig');
    }

    /**
     * Interview Parnass
     *
     * @Route("/interview/parnass", name="parnass")
     */
    #[Route('/interview/parnass', name: 'app_parnass')]
    public function parnass()
    {
        return $this->render('interviews/parnass.html.twig');
    }

    /**
     * Interview Pestov
     *
     * @Route("/interview/pestov", name="pestov")
     */
    #[Route('/interview/pestov', name: 'app_pestov')]
    public function pestov()
    {
        return $this->render('interviews/pestov.html.twig');
    }

    /**
     * Interview Rosenblum
     *
     * @Route("/interview/rosenblum", name="rosenblum")
     */
    #[Route('/interview/rosenblum', name: 'app_rosenblum')]
    public function rosenblum()
    {
        return $this->render('interviews/rosenblum.html.twig');
    }

    /**
     * Interview Trebitsch
     *
     * @Route("/interview/trebitsch", name="trebitsch")
     */
    #[Route('/interview/trebitsch', name: 'app_trebitsch')]
    public function trebitsch()
    {
        return $this->render('interviews/trebitsch.html.twig');
    }

    /**
     * Interview Wallenstein
     *
     * @Route("/interview/wallenstein", name="wallenstein")
     */
    #[Route('/interview/wallenstein', name: 'app_wallenstein')]
    public function wallenstein()
    {
        return $this->render('interviews/wallenstein.html.twig');
    }

    /**
     * Interview Wittenberg
     *
     * @Route("/interview/wittenberg", name="wittenberg")
     */
    #[Route('/interview/wittenberg', name: 'app_wittenberg')]
    public function wittenberg()
    {
        return $this->render('interviews/wittenberg.html.twig');
    }

    /**
     * Interview Zunik
     *
     * @Route("/interview/zunik", name="zunik")
     */
    #[Route('/interview/zunik', name: 'app_zunik')]
    public function zunik()
    {
        return $this->render('interviews/zunik.html.twig');
    }

}