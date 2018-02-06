<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06/02/2018
 * Time: 16:21
 */
include_once ('./connectionBdd.php');

if($_POST['mdp'] == 'salle'){

    $req = $bdd->prepare('INSERT INTO `client` (ClientName) VALUES(:pseudo)');
    $req->execute(array(
        'pseudo' => $_POST['pseudo'],


    ));
    $_SESSION['login'] = true;
    echo ('loged');

}
else
    echo ('Veuillez inserer le bon mot de passe');