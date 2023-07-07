# Sciences-U - B3 IW - PHP MVC - 2023
# Rendu du devoir de PHP 
## Fait par : ELHADIDI Omar et PATRICELLO Kevin

## Démarrage

## Sommaire 

Pour commencer voici un petit sommaire de comment vas s'organiser notre rendu.
1. Présentation du sujet
2. Les ressources que nous avions à diposition
3. Nos choix
4. Les problèmes rencontrer
5. Ouverture
6. Conclusion

## 1. Présentation du sujet 

Le sujet étais le suivant : 

Pour la notation du projet, l'idée de base c'est de partir de ce qu'on fait ensemble, pour :
Améliorer un composant applicatif, exemple :
Routing : gestion des paramètres d'URL, attribut PHP8 pour déclarer les routes, enregistrement automatique des routes au bootstrap de l'application, etc...
Injection de dépendance :
Instanciation des services à la volée plutôt que directement au bootstrap de l'application
Utilisation d'un composant tel que symfony/dependency-injection ou php-di/php-di
Développer de nouvelles choses au sein de l'application, en gardant en tête le fait que ça peut être réutilisable :
Upload de fichier
Gestionnaire de session
Sécurité : authentification et/ou autorisations (rôles)
Si vous n'utilisez pas Doctrine mais PDO : couche applicative pour communiquer avec la base de données
etc...

Vous pouvez également partir sur votre propre solution, même inspirée de ce qu'on a commencé ensemble, comme Guillaume l'a fait par exemple. Il a ajouté des tests avec phpunit, ce qui permet d'explorer une autre direction dans les développements. Le fait d'ajouter des tests le force donc à écrire du code correctement isolé.

Si vous n'êtes pas très à l'aise avec PHP, ou que vous ne l'utilisez pas souvent, rien ne vous empêche de faire des choses plus "simples" : plus de contrôleurs avec différentes fonctionnalités (affichage de listes, formulaire de contact...). Le but est de savoir s'orienter correctement au sein d'une telle application, et être capable de venir y développer de nouvelles choses.

Enfin, vous rédigerez un compte-rendu de vos travaux dans le README du dépôt que vous m'enverrez. Ce compte-rendu, rédigé en Markdown, fera état de ce que vous avez fait, des problématiques rencontrées, etc...Il fera partie de la note, probablement 4 ou 5 points, je pense.


## 2. Les ressources que nous avions à dispotion 

Les ressources que nous avions à dispotion avant de commencer le cours étais les suivantes : 

### DB Configuration

La configuration de la base de données doit être inscrite dans un fichier `.env.local`, sur le modèle du fichier `.env`.

### Démarrer l'application

Commande :

```bash
composer start
```

### Cours

Le cours complet se trouve à [cette adresse](https://ld-web.github.io/su-2023-php-mvc-course/).

## 3. Nos Choix

Pour ce projet nous avons déjà commencer par évaluer quel partie du projet pouvais le plus nous intéresser.
Etant tout les deux débutants , nous avons réfléchis quels fonctionnalité pourait être rajouter à ce projet et qui pourrait aussi nous être utlie actuellement dans le monde professionnel.
Et en mettant en commun nos missions professionel et notre projet nous avons penser que le gestionnaire d'upload de document étais parfait pour nous.

## 4. Les problèmes rencontrer

Nous avons rencontrer une multitude de problème durant notre developpement et c'est ce qui a constitué la plus grande partie de notre programme durant ce projet.
La première erreur qui nous a posé un grand problème à été l'intégration de ce MVC , nous avons aussi eut énormément de mal à comprendre le but et l'enjeux du projet.
Ce qui nous a fait stagner pendant une longue période.
Une fois que nous avions réussi à regler l'erreur d'installation de php sur un de nos ordinateurs pour installer le MVC nous avons commencer à nos renseigner sur quelle méthode nous pouvions intégrer à ce projet.
Mais qui pourrait aussi être utile dans notre monde professionnel. 
Et pour ce faire nous avons du comparer notre activité professionel actuelle et le sujet.

Une fois cela fais nous nous somme renseigner sur comment réaliser notre gestionnaire d'upload de fichier.
Après avoir crée le bouton nous permettant d'importer des docuemnts et un bouton nous permettant de nous rediriger vers une page importation du document.
Nous avons été confronter au problème suivant : 
Comment stocker et identifier les fichier enregister en dernier.

La première solution que nous avions eut a été de crée un dossier dans lequel serais rediriger tout les documents importer afin d'être stocker.
Puis pour identifier quel document avait été importer en dernier nous avons rajouter un timestamp au début de chaque document importer.

## 5. Ouverture 

Ce que ce projet nous a permis est d'ouvrir notre horizon , et d'imaginer d'autre méthode de développement sous d'autres langage que nous n'avions pas l'habitude d'utiliser.
Nous avons tout les deux beaucoup appris durant ce projet et nous imaginons par la suite qu'il est peut être possible de modifier le gestionnaire d'upload de fichier afin de : 
Pouvoir avec une base de donnée mieux structuré permettant de trier les documents par date d'ajout en base.
Puis de pouvoir les téléchargers à leur tour ou d'en supprimer certain.

## 6. Conclusion 

Ce projet nous a permis de progresser que ce soit en PHP ou en tant que developpeur. Il nous a permis de changer notre vision du developpement sur certain point.
Comme pour la résolution de bug. Ou il faut parfois savoir revenir au base.

## Signé :

## ELHADIDI OMAR ET PATRICELLO KEVIN