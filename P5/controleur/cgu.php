<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}


// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees
// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"#top","label"=>"Conditions générales");
$menuBurger[] = Array("url"=>"#accpt","label"=>"Acceptation");
$menuBurger[] = Array("url"=>"#desc","label"=>"Description");
$menuBurger[] = Array("url"=>"#fonc","label"=>"Fonctionnalités");
$menuBurger[] = Array("url"=>"#mode","label"=>"Modération");
$menuBurger[] = Array("url"=>"#sanc","label"=>"Sanctions");
$menuBurger[] = Array("url"=>"#moti","label"=>"Motifs");
$menuBurger[] = Array("url"=>"#foncr","label"=>"Restaurateurs");
$menuBurger[] = Array("url"=>"#gene","label"=>"Généralités");
$menuBurger[] = Array("url"=>"#prot","label"=>"Données personnelles");
$menuBurger[] = Array("url"=>"#droi","label"=>"Droits d'accès");
$menuBurger[] = Array("url"=>"#util","label"=>"Données personnelles");
$menuBurger[] = Array("url"=>"#bila","label"=>"Bilan des fonctionnalités");



// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "r3st0.fr - Conditions générales d'utilisations";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCgu.php";
include "$racine/vue/pied.html.php";


?>