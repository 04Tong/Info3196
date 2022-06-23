<?php
// il faudra integrer les variables de session  a sauvegarder

// Fonction de connexion à la BDD
/////////////////////////////////
function general_connexion_bdd() {
    $bdd_dns='mysql:host=127.0.0.1;port=3306;dbname=gestionresultat;charset=utf8';
    
    $bdd_option['PDO::ATTR_EMULATE_PREPARES']='FALSE';
    $bdd_option['PDO::ATTR_ERRMODE']='PDO::ERRMODE_EXCEPTION';
    $bdd_option['PDO::ATTR_DEFAULT_FETCH_MODE']='PDO::FETCH_ASSOC';
    
    // Instantiation de la BDD
    try {
        $Connexion_BDD = new PDO('mysql:host=localhost;dbname=gestionresultat', 'root', '',$bdd_option); 
    }
    catch (PDOException $e) {
        print "Erreur de connexion à la BDD ! Message : " . $e->getMessage() . "<br/>";
        die();
    }
    
    return $Connexion_BDD;
};

// Classe "session"
///////////////////
class Session {
    // Variable interne contenant la BDD
    private $_Connexion_BDD;
    // Initialisation de la session lors de l'appel de la classe
    public function __construct(){
        // Ouverture de la connexion à la BDD et association de cette connexion à la variable $_Connexion_BDD
        $this->_Connexion_BDD = general_connexion_bdd();
        // Paramétrage des sessions
        session_set_save_handler(
            array($this, "session_ouverture"),
            array($this, "session_fermeture"),
            array($this, "session_lecture"),
            array($this, "session_ecriture"),
            array($this, "session_destruction"),
            array($this, "session_nettoyage")
            );
        // Démarrage des sessions
        session_start();
    }
    // Définition des fonctions de gestion des sessions
    ///////////////////////////////////////////////////
    // Ouverture des sessions
    public function session_ouverture($savePath, $sessionID) {
        if ( $this->_Connexion_BDD ) {
            // Si la connexion existe, on renvoie "true".
            return true;
        }
        // En cas d'erreur, on force php à annuler l'utilisation des sessions.
        return false;
    }
    // Fermeture des sessions
    public function session_fermeture() {
        // Nettoyage de la BDD lors de la fermeture pour ne pas attendre le nettoyage automatique
        $this->session_nettoyage(ini_get("session.gc_maxlifetime"));
        // Destruction de la connexion
        $this->_Connexion_BDD = null;
        // Renvoie de "true" pour valider la fermeture.
        return true;
    }
    // Lecture des sessions
    public function session_lecture($sessionID) {
        // Création d'un date_time actuel
        $datetime_actuel = new DateTime("now", new DateTimeZone('Africa/Douala'));
        // Préparation de la requête
        $requete = $this->_Connexion_BDD->prepare("SELECT `data` FROM php_session WHERE `id_session` = ? LIMIT 1");
        // Execution de la requête
        $requete->execute([$sessionID]);
        // Récupération des résultats
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ( $resultat == true ) {
            // Mise à jour de la date
            // Préparation de la requête
            $requete = $this->_Connexion_BDD->prepare("UPDATE php_session SET `update` = ? WHERE `id_session` = ?");
            // Execution de la requête
            $requete->execute([($datetime_actuel->format('Y-m-d H:i:s')), $sessionID]);
            return $resultat['data'];
        };
        // Si quelque chose ne fonctionne pas, on ne retourne rien.
        return '';
    }
    // Ecriture des sessions
    public function session_ecriture($sessionID, $sessionData) {
        // Création d'un date_time actuel
        $datetime_actuel = new DateTime("now", new DateTimeZone('Europe/Paris'));
        // Préparation de la requête d'INSERT avec UPDATE si la données existe déjà
        $requete = $this->_Connexion_BDD->prepare("INSERT INTO php_session (`id_session`, `data`, `update`) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE `data` = ?");
        // Execution de la requête
        $requete->execute([$sessionID, $sessionData, ($datetime_actuel->format('Y-m-d H:i:s')), $sessionData]);
        // Récupération des résultats
        $resultat = $requete->rowCount();
        if ( $resultat >= 0 ) {
            // Si l'INSERT ou l'UPDATE réussi, on renvoie "true".
            return true;
        };
        // Si quelque chose ne fonctionne pas, on retourne "false".
        return false;
    }
    // Destruction des sessions
    public function session_destruction($sessionID) {
        // Préparation de la requête
        $requete = $this->_Connexion_BDD->prepare("DELETE FROM php_session WHERE `id_session` = ?");
        // Execution de la requête
        $requete->execute([$sessionID]);
        // Récupération des résultats
        $resultat = $requete->rowCount();
        if ( $resultat >= 1 ) {
            // Si la suppression a réussi, on renvoie "true".
            return true;
        };
        // Si quelque chose ne fonctionne pas, on retourne "false".
        return false;
    }
    // Nettoyage de la BDD
    public function session_nettoyage($sessionMaxLifetime) {
        // Calcul du timestamp d'expiration.
        $timestamp_expiration = time() - $sessionMaxLifetime;
        // Cacul de la date d'expiration UTC.
        $date_expiration = new DateTime("@".$timestamp_expiration);
        // Formatage de la date dans le bon fuseau horaire
        $date_expiration->setTimezone(new DateTimeZone('Europe/Paris'));
        // Préparation de la requête
        $requete = $this->_Connexion_BDD->prepare("DELETE FROM php_session WHERE `update` <= ?");
        // Execution de la requête
        $requete->execute([$date_expiration->format('Y-m-d H:i:s')]);
        // Récupération des résultats
        $resultat = $requete->rowCount();
        if ( $resultat >= 0 ) {
            // Si la suppression a réussi, on renvoie "true".
            return true;
        };
        // Si quelque chose ne fonctionne pas, on retourne "false".
        return false;
    }
}




?>