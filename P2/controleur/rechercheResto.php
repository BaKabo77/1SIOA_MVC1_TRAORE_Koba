<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.resto.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url" => "./?action=recherche&critere=nom", "label" => "Recherche par nom");
$menuBurger[] = Array("url" => "./?action=recherche&critere=adresse", "label" => "Recherche par adresse");

// critere de recherche par defaut
$critere = "nom";
if (isset($_GET["critere"])) {
    $critere = $_GET["critere"];
}
// recuperation des donnees GET, POST, et SESSION
// recherche par nom
$nomR = "";
$voieAdrR = "";
$cpR = "";
$villeR = "";

if (!empty($_POST)) {
    switch ($critere) {
        case 'nom':
            // recherche par nom
            $nomR = $_POST["nomR"];

            $listeRestos = getRestosByNomR($nomR);

            break;
        case 'adresse':
            // recherche par adresse
            $voieAdrR = $_POST["voieAdrR"];
            $cpR = $_POST["cpR"];
            $villeR = $_POST["villeR"];

            $listeRestos = getRestosByAdresse($voieAdrR,$cpR,$villeR);
            
            break;
    }
}

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Recherche d'un restaurant";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueRechercheResto.php";

// affichage de la reponse a la recherche si une donnée a été entrée dans la recherche 

    if(isset($listeRestos)){
        include "$racine/vue/vueResultRecherche.php";
    }

include "$racine/vue/pied.html.php";
?>