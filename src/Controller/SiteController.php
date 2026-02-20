<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{

    #[Route('/')]
    public function indexNoLocale(): Response
    {
        return $this->redirectToRoute('app_home', ['_locale' => 'de']);
    }

    // MAIN ROUTES

    #[Route('/{_locale<%app.supported_locales%>}/', name: 'app_home')]
    public function home(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'site/home.en.html.twig';
        } else {
            $template = 'site/home.html.twig';
        }

        return $this->render($template, [
            'title' => 'Startseite'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/places', 'de' => '/{_locale<%app.supported_locales%>}/orte'], name: 'app_map')]
    public function map(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'site/map.en.html.twig';
        } else {
            $template = 'site/map.html.twig';
        }

        return $this->render($template, []);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/deportations', 'de' => '/{_locale<%app.supported_locales%>}/deportationen/'], name: 'app_deportation')]
    public function deportation(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'site/deportation.en.html.twig';
        } else {
            $template = 'site/deportation.html.twig';
        }

        return $this->render($template, [
            'title' => 'Lager und Zwangsarbeit'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/biographies', 'de' => '/{_locale<%app.supported_locales%>}/biografien/'], name: 'app_biographies')]
    public function biographies(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'site/biographies.en.html.twig';
        } else {
            $template = 'site/biographies.html.twig';
        }

        return $this->render($template, [
            'title' => 'Biografien'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/sources', 'de' => '/{_locale<%app.supported_locales%>}/quellen'], name: 'app_sources')]
    public function sources(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'site/sources.en.html.twig';
        } else {
            $template = 'site/sources.html.twig';
        }

        return $this->render($template);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/context', 'de' => '/{_locale<%app.supported_locales%>}/kontext'], name: 'app_context')]
    public function context(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'site/context.en.html.twig';
        } else {
            $template = 'site/context.html.twig';
        }

        return $this->render($template);
    }

    #[Route('/{_locale<%app.supported_locales%>}/hungmem', name: 'app_about')]
    public function about(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'site/about.en.html.twig';
        } else {
            $template = 'site/about.html.twig';
        }

        return $this->render($template);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/imprint', 'de' => '/{_locale<%app.supported_locales%>}/impressum'], name: 'app_imprint')]
    public function imprint(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'site/imprint.en.html.twig';
        } else {
            $template = 'site/imprint.html.twig';
        }

        return $this->render($template);
    }

    #[Route('/{_locale<%app.supported_locales%>}/api/json', name: 'app_jsonapi')]
    public function jsonapi(): JsonResponse
    {
        $jsonData = file_get_contents(__DIR__ . '/biographies.json');
        return JsonResponse::fromJsonString($jsonData);
    }

    // SUBPAGES

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/deportations/group-300', 'de' => '/{_locale<%app.supported_locales%>}/deportationen/gruppe-300'], name: 'app_deportation_vw')]
    public function deportationVw(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'studies/gruppe-der-300.en.html.twig';
        } else {
            $template = 'studies/gruppe-der-300.html.twig';
        }

        return $this->render($template, [
            'title' => 'Gruppenstudie 300er-Gruppe'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/deportations/women-dessauer-ufer', 'de' => '/{_locale<%app.supported_locales%>}/deportationen/frauen-dessauer-ufer'], name: 'app_deportation_dessauerUfer')]
    public function deportationDessauerUfer(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'studies/dessauer-ufer.en.html.twig';
        } else {
            $template = 'studies/dessauer-ufer.html.twig';
        }

        return $this->render($template, [
            'title' => 'Gruppenstudie Dessauer Ufer'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/deportations/forced-labor-armaments-industry', 'de' => '/{_locale<%app.supported_locales%>}/deportationen/zwangsarbeit-ruestungsindustrie'], name: 'app_deportation_salzwedel')]
    public function deportationSalzwedel(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'studies/salzwedel.en.html.twig';
        } else {
            $template = 'studies/salzwedel.html.twig';
        }

        return $this->render($template, [
            'title' => 'Gruppenstudie Salzwedel'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/deportations/evacuation-luebberstedt', 'de' => '/{_locale<%app.supported_locales%>}/deportationen/rauemung-luebberstedt'], name: 'app_deportation_luebberstedt')]
    public function deportationLuebberstedt(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'studies/luebberstedt.en.html.twig';
        } else {
            $template = 'studies/luebberstedt.html.twig';
        }

        return $this->render($template, [
            'title' => 'Gruppenstudie Luebberstedt'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/biographies/gyula-fuerst', 'de' => '/{_locale<%app.supported_locales%>}/biografien/gyula-fuerst'], name: 'app_bio_fuerst')]
    public function biographyFuerst(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'biographies/fuerst.en.html.twig';
        } else {
            $template = 'biographies/fuerst.html.twig';
        }

        return $this->render($template, [
            'title' => 'Biografie Gyula Fürst'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/biographies/sisters-mereny', 'de' => '/{_locale<%app.supported_locales%>}/biografien/schwestern-mereny'], name: 'app_bio_mereny')]
    public function biographyMereny(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'biographies/merenyi.en.html.twig';
        } else {
            $template = 'biographies/merenyi.html.twig';
        }

        return $this->render($template, [
            'title' => 'Biografie Schwestern Merényi'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/biographies/yehuda-blum', 'de' => '/{_locale<%app.supported_locales%>}/biografien/yehuda-blum'], name: 'app_bio_blum')]
    public function biographyBlum(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'biographies/blum.en.html.twig';
        } else {
            $template = 'biographies/blum.html.twig';
        }

        return $this->render($template, [
            'title' => 'Biografie Yehuda Blum'
        ]);
    }

    #[Route(['en' => '/{_locale<%app.supported_locales%>}/biographies/katharina-hardy', 'de' => '/{_locale<%app.supported_locales%>}/biografien/katharina-hardy'], name: 'app_bio_hardy')]
    public function biographyHardy(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'biographies/hardy.en.html.twig';
        } else {
            $template = 'biographies/hardy.html.twig';
        }

        return $this->render($template, [
            'title' => 'Biografie Katharina Hardy'
        ]);
    }

    // TEMPLATES

    #[Route('/{_locale<%app.supported_locales%>}/studytemplate', name: 'app_studytemplate')]
    public function studytemplate(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'studies/study.en.html.twig';
        } else {
            $template = 'studies/study.html.twig';
        }

        return $this->render($template);
    }

    #[Route('/{_locale<%app.supported_locales%>}/biographytemplate', name: 'app_biographytemplate')]
    public function biographytemplate(string $_locale): Response
    {
        if ($_locale === 'en') {
            $template = 'biographies/study.en.html.twig';
        } else {
            $template = 'biographies/study.html.twig';
        }

        return $this->render($template);
    }

}
