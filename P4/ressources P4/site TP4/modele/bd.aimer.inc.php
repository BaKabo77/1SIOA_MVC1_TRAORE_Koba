<?php

include_once "bd.inc.php";

function getAimerByMailU($mailU) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from aimer where mailU=:mailU");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        
        $req->execute();
        
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getAimerByIdR($idR) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from aimer where idR=:idR");
        $req->bindValue(':idR', $idR, PDO::PARAM_INT);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getAimerById($mailU, $idR){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from aimer where mailU=:mailU and  idR=:idR");
        $req->bindValue(':idR', $idR, PDO::PARAM_INT);
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        
        $req->execute();
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addAimer($mailU, $idR) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into aimer (mailU, idR) values(:mailU,:idR)");
        $req->bindValue(':idR', $idR, PDO::PARAM_INT);
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function delAimer($mailU, $idR) {
    // à completer
    
    
}


if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');


    echo "\n getAimerByMailU(\"mathieu.capliez@gmail.com\") : \n";
    print_r(getAimerByMailU("mathieu.capliez@gmail.com"));

    echo "\n getAimerByIdR(1) : \n";
    print_r(getAimerByIdR(1));

    echo "\n getAimerById(mailU, idR) : \n";
    print_r(getAimerById("mathieu.capliez@gmail.com", 1));
    
    echo "\n addAimer(\"mathieu.capliez@gmail.com\",7) : \n";
    print_r(addAimer("mathieu.capliez@gmail.com", 7));

}

?>