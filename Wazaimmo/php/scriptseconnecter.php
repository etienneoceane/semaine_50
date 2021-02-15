<?php

include("connexion.php");
$db=connect();


if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST))
{
    //On initialise nos messages d'erreurs;
    // $nomError = '';$prenomError = '';$adresseError ='';$code_postaleError = '';$villeError = ''; $telephoneError = '';
    // $emailError = '' ;$sujetError = '';$question = '' ;
    
    $errors=[];

    // on recupère nos valeurs 
    $loginidconnexion=htmlentities(trim($_POST['loginidconnexion']));
    $mdpconnexion=htmlentities(trim($_POST['mdpconnexion']));
    
    
    // on vérifie nos champs 
    //On crée notre message d’erreur
                                // ----- ADRESSE MAIL 
    $verif = true;
    if (empty($loginidconnexion)) 
    { 
        $errors['loginidconnexion'] = "Veuillez saisir une adresse mail"; 
        $valid = false; 
    }
    else if (!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$loginidconnexion)) 
    { 
        $errors['loginidconnexion'] = "Veuillez saisir une adresse mail valide"; 
    } 
    
                                // MOT DE PASSE
    if (empty($mdpconnexion)) 
    { 
        $errors['mdpconnexion'] = "Veuillez saisir un mot de passe"; 
        $valid = false; 
    }

    // On récupere les erreurs s'il y'en a pour les afficher sur la page sinscrire
    if(!empty($errors))
    {
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['loginidconnexion'] = $loginidconnexion;
        $_SESSION['mdpconnexion'] = $mdpconnexion;


        header("Location: seconnecter.php");
    }
    // S'il n'y a pas d'erreurs ..
    else
    {
        // Et que tout les $valid sont true alors..
        if ($valid) 
        {
            //On veut vérifier si le loginidconnexion rentré dans le formulaire existe ou pas dans la bdd, si oui on le stock dans une variable grâce a count();
            $searchmail = $db->prepare("SELECT * FROM waz_membre WHERE loginid=? AND mdp=?");
            // METHODE AVEC LES BIND VALUE DECOMMENTER LES LIGNES COMMENTEES
            // $searchmail->bindValue(':loginid', $loginid);
            $searchmail->execute(array($loginidconnexion));
            $result= $searchmail->fetchAll();
            $mailexist = count($result);

            //s'il existe pas on peut l'insérer dans la bdd
            if ($mailexist == 1)
            {
                    echo "Vous êtes connecté";
                    // pas encore faire comment on se connecte ce que ca doit afficher etc
            }
            else
            {
                $erreur="Cette adresse mail n'existe pas";
                session_start();
                $_SESSION['loginidconnexion'] = $erreur;
                header("Location:seconnecter.php");

            }
        }
    }
    
        
}  

?>
