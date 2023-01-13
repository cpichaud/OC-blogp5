# OC-blogp5

Description du projet
Le projet consiste à développer un blog professionnel comprenant plusieurs pages accessibles à tous les visiteurs et une partie administration accessible uniquement aux utilisateurs inscrits et validés.

## Voici la liste des pages prévues pour le site:

### Page d'accueil:
* Présentation de votre nom et prénom
* Photo et/ou logo
* Phrase d'accroche
* Menu de navigation
* Formulaire de contact
* Lien vers votre CV au format PDF
* Liens vers les réseaux sociaux où l'on peut vous suivre
### Page listant tous les blog posts (du plus récent au plus ancien):
* Titre
* Date de dernière modification
* Chapô
* Lien vers le blog post
### Page affichant un blog post:
* Titre
* Chapô
* Contenu
* Auteur
* Date de dernière mise à jour
* Formulaire permettant d'ajouter un commentaire (soumis pour validation)
* Liste des commentaires validés et publiés
* Page permettant d'ajouter un blog post
* Page permettant de modifier un blog post:
* Modification du titre, chapô, auteur et contenu
* Page permettant de modifier/supprimer un blog post
* Page de connexion/enregistrement des utilisateurs

Créez votre premier blog en PHP - [Ici](https://openclassrooms.com/fr/paths/500/projects/7/assignment)

## Configurez votre environnement
Si vous souhaitez installer ce projet sur votre ordinateur, vous devrez d'abord cloner le référentiel de ce projet à l'aide de Git.

Dans le dossier config puis connectionDb.php de votre projet, vous devez configurer les valeurs appropriées pour que votre blog fonctionne comme l'exemple si dessous :

        $host = "localhost";
        $dbName = "blogdb_p5";
        $user = "root";
        $password = "password";
        $chartset ="utf8";

## Badge du projet

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/ad8b8c1e2a4e4c03b5f8687426d4f9bc)](https://www.codacy.com/manual/utilisateur/projet?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=cpichaud/OC-blogp5&amp;utm_campaign=Badge_Grade)
