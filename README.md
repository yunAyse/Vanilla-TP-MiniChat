# Vanilla-TP-MiniChat

# TP Mini Chat





# Bienvenue dans cet exercice pratique qui mettra en application ce que vous avez vu ces derniers jours.

Vous allez créer un mini chat dont les spécifications sont les suivantes :



* Le chat est une application qui contient une seule page, avec une grande fenêtre qui contient les messages de tout le monde, et en dessous une barre horizontale contenant le formulaire d'envoi d'un nouveau message
* Il y a également une fenêtre verticale à droite qui affiche la liste des utilisateurs
* Chaque pseudo est unique. Cela signifie que je peux poster plusieurs messages avec le même pseudo, mais en base de données, il ne doit exister qu'un seul utilisateur par pseudo. 
Vous devez donc vérifier si le pseudo existe déjà ou pas à chaque publication de message, pour ne pas créer de doublon.
* Tous les messages doivent être enregistrés avec :
    * l'id de l'utilisateur qui a posté le message
    * la date complète avec secondes
    * l'adresse IP  
* Tous les messages affichés sont préfixés de la date (avec secondes).
* En tant qu'utilisateur, je peux écrire un message dans le chat en saisissant simplement mon pseudo et mon message
* En tant qu'utilisateur, je vois les messages de tout le monde.
* ⚠️ À partir de maintenant, l'intégralité du code doit être en anglais ! Cela comprend aussi les variables, les classes CSS, et même les tables de données SQL


# 


# Première partie


## **1️⃣ Première étape : Conception**

Pour ce faire, vous allez dans un premier temps imaginer la structure de votre application.



* Structure de la BDD : combien de tables ? quel nom ?
* Structure de la BDD : combien de colonnes ? quel nom ?
* Combien de pages HTML, CSS, JS et PHP allons-nous avoir besoin ?
* Quel nom vont avoir ces fichiers ?
* Et enfin très important : la liste des tâches : vous devez établir la liste finale et définitive pour accomplir le projet en 3 jours.


## **2️⃣ Deuxième étape : Structuration**

Maintenant que vous avez pensé votre application, préparez les fondations.



* Créer tous les fichiers et leurs dossiers
* relier les fichiers entre eux
* Créer le formulaire d'envoi de message
* Créer la BDD
* établir la connexion avec la BDD


## **3️⃣ Troisième étape : Exécution**

Tout est prêt pour écrire le code du cœur de l'application !



* Configurer la méthode et le chemin du formulaire
* préparer l'insertion des données du formulaire en SQL
* exécuté l'enregistrement de la requête SQL
* récupérer les messages
* afficher les messages sur la page index
* Toutes les autres tâches secondaires 


# Deuxième partie


## **🍪 Utiliser les cookies**

Garder le pseudo en mémoire ! Il est possible en HTML de préremplir un champ. par exemple :


```
<input type="text" name="pseudo" value="TextePrérempli" />
```


Remplacer "TextePrérempli" par le pseudo du visiteur une fois celui-ci enregistré dans un cookie

💡[ PHP: setcookie - Manual](https://www.php.net/manual/fr/function.setcookie.php)


## **❄️ Rafraîchir la boîte de dialogue**



* Actuellement, vous êtes obligé de rafraîchir la page pour voir les nouveaux messages
* Créer un script JavaScript qui rafraîchit automatiquement la boîte de dialogue avec une requête asynchrone !
* Faire en sorte que l'envoi de message ne provoque pas un rechargement de la page, encore avec une requête asynchrone
* Méthode JS fetch() : 


## **🌈 Changer la couleur des pseudos**



* Associer une couleur unique à chaque nom d'utilisateur
    * Vous pouvez utiliser ce repository[ https://github.com/mistic100/RandomColor.php](https://github.com/mistic100/RandomColor.php)​
* Vous devez avoir une colonne appropriée dans votre table pour gérer cette fonctionnalité.


# **Liste des tâches compilées à partir de toutes les consignes :**



* Intégrer le code HTML permettant d'avoir toutes les zones (liste des messages, liste des utilisateurs, barre pour envoyer un message)
* Intégrer le code HTML du formulaire permettant l'envoi du message
* Développer le code PHP permettant de recevoir le message par requête POST et de l'enregistrer en BDD
* Faire en sorte que l'utilisateur correspondant à un pseudo soit créé une seule fois lorsque j'envoie plusieurs messages
* Enregistrer l'adresse IP avec le message
* Afficher tous les messages au chargement de la page et après chaque envoi. Le pseudo est préfixé de la date
* Afficher la liste des utilisateurs sur la droite
* Utiliser les cookies pour se souvenir du pseudo du visiteur
* Créer une requête AJAX pour actualiser la liste des messages automatiquement toutes les 3 secondes sans recharger la page
* Créer une requête AJAX pour envoyer un message sans actualiser la page
* Installer une librairie pour associer une couleur à chaque création d'utilisateur


#  
 
👨‍💻 Bonus : Ajouter une page d'authentification



* un visiteur peut s'enregistrer et créer un compte avec un mot de passe
* un utilisateur enregistré peut se connecter à son compte
* la page du chat n'est pas accessible aux visiteurs non enregistrés
