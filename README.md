# Der Holocaust in Ungarn und die Deportationen nach Norddeutschland

Webapp for a research project on the Holocaust in Hungary.

## Requirements

PHP 8.2 
Symfony 6.4

## Deployment

When deploying the app, it is necessary to upload an empty .env file (as part of the repository via ftp or github). Otherwise, an error is thrown, that .env could not be located, even though everything is specified in the Environment variables.
The following variables need to be declared: APP_ENV, APP_SECRET, CC_CGI_IMPLEMENTATION, CC_COMPOSER_VERSION, CC_PHP_VERSION, CC_WEBROOT.

This behaviour refers to deployment via Clever Cloud, but will probably be an issue with other providers as well.
