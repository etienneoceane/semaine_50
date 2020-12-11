<?php


$loginid=$_POST['loginid'];
$mdp=$_POST['mdp'];


include("connexion.php");

$db=connect();

$searchmail = $db->prepare("SELECT * FROM waz_membre WHERE loginid='$loginid'");
$searchmail ->execute(array($loginid));
$mailexist = $searchmail->rowCount();
if ($mailexist == 0)
{
        $requete = $db->prepare("INSERT INTO waz_membre (loginid,mdp) VALUES (:loginid,:mdp)");

        $requete->bindValue(':loginid', $loginid, PDO::PARAM_STR);
        $requete->bindValue(':mdp',$mdp,PDO::PARAM_STR);

        $requete->execute(array($loginid, $mdp));
        $requete->closeCursor();

}
else
{
    $erreur="Cette adresse mail est déjà utilisée";
}


?>