***SYSTEME DE COLLECTE DES NOTES***

PROJECT NAME:SysCo

DESCRIPTION: Mise en place d'un  système de collecte des notes au sein de la faculté.

MOA: 

SOUS TRAITANCE: Dr. ABOSSOLO

CHEF DE PROJET : Dr. MESSI

MOE:

LAURENCE A. TONG

TUEGUEM T. MELVIS

___PRESENTATION OF THE PROJECT___
            
@@@@@@@@@@@@@@@ BUILDING TOOLS @@@@@@@@@@@@@@@

PROGRAMMING LANGUAGES: PHP, AJAX, Javascript, Css, HTML
FRAMEWORK: Bootstrap
IDE: Vs Code
Test SERVER: Xamp with phpmyadmin
TYPE of PROJECT: Réalisation d'une application web de collecte des notes

@@@@@@@@@@@ APPLICATION MODULES @@@@@@@@@@@@@@

              1. Admin
              2. Utilisateurs
                a. Enseignant
                b. Cellule informatique
                c. Scolarité

            
 I- ADMIN MODULE 

Le module admin (administrateur) représente le coeur de l'application:
- C'est là que sont pré-enregistrés les utilisateurs en fonction de leurs grade(enseignant, etc)
- c'est là que sont enregistrés les départements, filières, spécialités, niveaux, etc

1. LOGIN

Le super administrateur une fois en possession de l'url qui conduit à son module dans l'application, va saisir son username et password et valide pour accéder à sa session utilisateur.
    - url: /admin/login.php (username: admin; password:1234)
    - home page si la connnexion a réussi(/amin/home.php)

    
2. AFFICHER

Une fois dans la page d'accueil, l'admin peut visualiser les eneignants, membres de la scolarité et la cellule informatique enregistrés dans la DB.

2.a. AFFICHER ENSEIGNANT

Cliquer sur : "Afficher">"Enseignant" ou tout simplement sur la DIV Enseignant ou  la liste des enseignents enregistres apparait.

2.b. AFFICHER MEMBRES CELLULE 

Cliquer sur : "Afficher">"Membres de la cellule" ou tout simplement sur la DIV Membres cellule ou  la liste des membres de la cellule informatique  enregistres apparait.

2.c. AFFICHER MEMBRES SCOLARITE

Cliquer sur : "Afficher">"Membres de la scolarite" ou tout simplement sur la DIV Membres scolarite ou  la liste des membres de la scolarite  enregistres apparait. 


3. ENREGISTRER

Une fois dans la page d'accueil, l'admin peut enregistrer les eneignants, membres de la scolarité et la cellule informatique enregistrés dans la DB.

3.a. ENREGISTRER ENSEIGNANT

Cliquer sur : "ENREGISTRER">"Enseignant"  choisir ou ajouter un departemnt, filiere, matiere; puis saisir les informations de l'enseignant dans le formulaire et valider.

3.b. ENREGISTRER MEMBRES CELLULE 

Cliquer sur : "ENREGISTRER">"Membres de la cellule" saisir les informations de l'enseignant dans le formulaire et valider.

3.c. ENREGISTRER MEMBRES SCOLARITE 

Cliquer sur : "ENREGISTRER">"Membres de la scolarite" puis saisir les informations de l'utlisateur dans le formulaire et valider.
   
   
 II- USERS MODULE  
   			
 Les fonctionnalites du module dependent du grade du user.


%%% AUTHENTIFICATION SUBMODULE %%%

				
1. SiGNUP

Saisir matricule,username et password (/authentification/signup.php)
Cliquer sur s'enregistrer pour sauvegarder ses infos

2.LOGIN
                               
Saisir username et password (/authentification/login.php)
Cliquer sur connexxion pour acceder a sa session user.



%%% ENSEIGNANT SUBMODULE %%% 

1. ENVOYER DES NOTES
- Cliquer sur le bouton "Envoyer des notes" sur le menu principal
- Selectionner le type de note (Cc, TP, EXAMEN); la matière; la filiere et le niveau
- Selectionner le ou les fichiers à envoyer
- Cliquer sur "Envoyer"
Un message de confirmation de l'envoie s'affiche.



2. VISUALISER LES PVs RECUS

- Cliquer sur "Gestion des notes"
- Cliquer sur "PVs reçus" 



3. TELECARGAER LES FICHIERS RECUS

- Cliquer sur "Gestion des notes"
- Cliquer sur "PVs reçus" 
- Cliquer sur "Télécharger"




%%% SCOLARITE SUBMODULE %%% 

1. ENVOYER DES FICHIERS D'ANONYMATS
- Cliquer sur le bouton "Envoyer des fichiers d'anonymats" sur le menu principal
- Selectionner le type de note (Cc, TP, EXAMEN); la matière; la filiere et le niveau
- Selectionner le ou les fichiers à envoyer
- Cliquer sur "Envoyer"

Un message de confirmation de l'envoie s'affiche.



2. VISUALISER LES NOTES ANONYMEES RECUES
- Cliquer sur "Gestion des anonymats"
- Cliquer sur "PVs reçus"

3. TELECHARGER LES FICHIERS RECUS

- Cliquer sur "Gestion des notes"
- Cliquer sur "PVs reçus" 
- Cliquer sur "Télécharger"






%%% CELLLE SUBMODULE %%% 

1. ENVOYER DES PVs
- Cliquer sur le bouton "Envoyer des PVs" sur le menu principal
- Selectionner le type de note (Cc, TP, EXAMEN); la matière; la filiere et le niveau
- Selectionner le ou les fichiers à envoyer
- Cliquer sur "Envoyer"

Un message de confirmation de l'envoie s'affiche.

2. VISUALISER LES NOTES RECUES
- Cliquer sur "Gestion des PVs"
- Cliquer sur "notes reçues "


3. TELECHARGER LES FICHIERS RECUS

- Cliquer sur "Gestion des PVs"
- Cliquer sur "Notes reçues" 
- Cliquer sur "Télécharger"