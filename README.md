# The Holocaust in Hungary and the Deportations to Northern Germany

Webapp for the research project ("The Holocaust in Hungary and the Deportations to Northern Germany")[https://igdj-hh.de/en/research/research-projects/the-holocaust-in-hungary-and-the-deportations-to-northern-germany] of the (Institute of the History of the German Jews)[https://igdj-hh.de/en].

## Requirements

PHP 8.1 or higher

Symfony 6.4 (Long Term Support Version with security fixes until November 2027, url: [https://symfony.com/releases/6.4](https://symfony.com/releases/6.4)

## Local setup

- Download repository
- In Terminal: go to toplevel directory
- Install dependencies via composer: `composer install`
- Start server: `symfony serve`
- Open https://localhost:8000

## Deployment

When deploying the app, it is necessary to upload an empty .env file (as part of the repository via ftp or github). Otherwise, an error is thrown, that .env could not be located, even though everything is specified in the Environment variables.
The following variables need to be declared: APP_ENV, APP_SECRET, CC_CGI_IMPLEMENTATION, CC_COMPOSER_VERSION, CC_PHP_VERSION, CC_WEBROOT.

This behaviour refers to deployment via Clever Cloud, but will probably be an issue with other providers as well.

## Citation

Anna Neovesky, Helena Geibel. HUNGMEN: he Holocaust in Hungary and the Deportations to Northern German (Software). GitHub. (https://github.com/annaneo/hungmem[https://github.com/annaneo/hungmem]
