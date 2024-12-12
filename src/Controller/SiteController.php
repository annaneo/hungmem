<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{

    // Route to redirect german language version to main route, see https://symfony.com/doc/current/the-fast-track/en/28-intl.html
    #[Route('/')]
    public function indexNoLocale(): Response
    {
        return $this->redirectToRoute('app_home', ['_locale' => 'de']);
    }


    // MAIN ROUTES

    #[Route('/{_locale<%app.supported_locales%>}/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('site/home.html.twig', [
            'title' => 'Startseite'
        ]);
    }


    #[Route('/map', name: 'app_map')]
    public function map()
    {
        return $this->render('site/map.html.twig', [
            ''
        ]);
    }

    #[Route('/deportationen/', name: 'app_deportation')]
    public function deportation(): Response
    {
        return $this->render('site/deportation.html.twig', [
            'title' => 'Lager und Zwangsarbeit'
        ]);
    }

    #[Route('/biografien/', name: 'app_biographies')]
    public function biographies(): Response
    {
        return $this->render('site/biographies.html.twig', [
            'title' => 'Biografien'
        ]);
    }

    #[Route('/quellen', name: 'app_sources')]
    public function sources()
    {
        return $this->render('site/sources.html.twig');
    }

    #[Route('/context', name: 'app_context')]
    public function context()
    {
        return $this->render('site/context.html.twig');
    }

    #[Route('/hungmem', name: 'app_about')]
    public function about()
    {
        return $this->render('site/about.html.twig');
    }


    #[Route('/impressum', name: 'app_imprint')]
    public function imprint()
    {
        return $this->render('site/imprint.html.twig');
    }


    #[Route('/api/json', name: 'app_jsonapi')]
    public function jsonapi()
    {
        $jsonData = file_get_contents(__DIR__ . '/biographies.json');

        return JsonResponse::fromJsonString($jsonData);
    }

    // SUBPAGES

    #[Route('/deportationen/gruppe-300', name: 'app_deportation_vw')]
    public function deportationVw(): Response
    {
        return $this->render('studies/gruppe-der-300.html.twig', [
            'title' => 'Gruppenstudie 300er-Gruppe'
        ]);
    }

    #[Route('/deportationen/frauen-dessauer-ufer', name: 'app_deportation_dessauerUfer')]
    public function deportationDessauerUfer(): Response
    {
        return $this->render('studies/dessauer-ufer.html.twig', [
            'title' => 'Gruppenstudie Dessauer Ufer'
        ]);
    }

    #[Route('/deportationen/zwangsarbeit-ruestungsindustrie', name: 'app_deportation_salzwedel')]
    public function deportationSalzwedel(): Response
    {
        return $this->render('studies/salzwedel.html.twig', [
            'title' => 'Gruppenstudie Salzwedel'
        ]);
    }

    #[Route('/deportationen/rauemung-luebberstedt', name: 'app_deportation_luebberstedt')]
    public function deportationLuebberstedt(): Response
    {
        return $this->render('studies/luebberstedt.html.twig', [
            'title' => 'Gruppenstudie Luebberstedt'
        ]);
    }

    #[Route('/biografien/gyula-fuerst', name: 'app_bio_fuerst')]
    public function biographyFuerst(): Response
    {
        return $this->render('biographies/fuerst.html.twig', [
            'title' => 'Biografie Gyula Fürst'
        ]);
    }

    #[Route('/biografien/schwestern-mereny', name: 'app_bio_mereny')]
    public function biographyMereny(): Response
    {
        return $this->render('biographies/merenyi.html.twig', [
            'title' => 'Biografie Schwestern Merényi'
        ]);
    }

    #[Route('/biografien/yehuda-blum', name: 'app_bio_blum')]
    public function biographyBlum(): Response
    {
        return $this->render('biographies/blum.html.twig', [
            'title' => 'Biografie Yehuda Blum'
        ]);
    }

    #[Route('/biografien/katharina-hardy', name: 'app_bio_hardy')]
    public function biographyHardy(): Response
    {
        return $this->render('biographies/hardy.html.twig', [
            'title' => 'Biografie Katharina Hardy'
        ]);
    }

    // TEMPLATES

    #[Route('/studytemplate', name: 'app_studytemplate')]
    public function studytemplate()
    {
        return $this->render('studies/study.html.twig');
    }

    #[Route('/biographytemplate', name: 'app_biographytemplate')]
    public function biographytemplate()
    {
        return $this->render('biographies/study.html.twig');
    }

}