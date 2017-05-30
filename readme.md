<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## A propos

Le framework PHP utilisé pour ce developpement est Laravel.
Ce choix est justifié par sa maniabilité, sa facilité de prise en main, sa grande communauté et l'ensemble des fonctionnalités qu'il permet d'implémenter.


## Structure du projet


Le projet est constitué de 3 routes, 1 unique controller ImageController et 2 views image-display et image-upload :

Les routes se situent dans /routes/web.php

  - Route::get('/', 'ImageController@imageUpload') : Page d'Accueil associé à la fonction imageUpload du controller et qui rend la view image-upload classique ou l'on peut choisir l'image a upload.

  - Route::post('pages.image-upload','ImageController@imageUploadPost') : lié à la fonction imageUploadPost et qui permet de valider l'upload et de retourner l'image avec succès si l'upload est réussi ou d'afficher les erreurs liées à un mauvais upload.

  - Route::get('page.image-display','ImageController@imageDisplay') : lié à la fonction imageDisplay qui est censé retourner la vue image-display cependant je n'ai pas pu l'implémenter.

## Controlleur

Le controlleur se situe dans le dossier /app/Http et est constitué de 3 fonctions :

  -imageUpload() : renvoi la vue d'Accueil

  -imageUploadPost() : implémente la fonction d'upload avec les critères de validation ( png,jpg,gif). Elle stocke ainsi le nom de l'image avec son extension originale dans le folder /public/images.

  -imageDisplay() : qui implémente l'affichage de manière tres sommaires des images stockées localement dans /public/images.

  ## View

  Les views se situent dans le dossier /ressources/view/pages

  - image-upload.blade.php : implémente l'affichage de la page d'upload avec les test necessaires. Il y a 2 conditions, l'une pour un cas d'upload raté et l'autre pour le succès. Aussi il y a un lien menant à la seconde view.

  - image-display.blade.php : non implémenté. Censé rendre l'affichage des images, cette fonction est effectuée de manière sommaire à même le controller.
