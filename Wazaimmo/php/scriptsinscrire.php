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
    $loginid=htmlentities(trim($_POST['loginid']));
    $loginid2=htmlentities(trim($_POST['loginid2']));
    $mdp=htmlentities(trim($_POST['mdp']));
    $mdp2=htmlentities(trim($_POST['mdp2']));
    
    
    // on vérifie nos champs 
    //On crée notre message d’erreur
                                // ----- ADRESSE MAIL 
    $valid = true;
    if (empty($loginid)) 
    { 
        $errors['loginid'] = "Veuillez saisir une adresse mail"; 
        $valid = false; 
    }
    else if (!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$loginid)) 
    { 
        $errors['loginid'] = "Veuillez saisir une adresse mail valide"; 
    } 
                                //CONFIRMATION ADRESSE MAIL
    if (empty($loginid2)) 
    { 
        $errors['loginid2'] = "Veuillez confirmer votre adresse mail"; 
        $valid = false; 
    }
    else if ($loginid!=$loginid2) 
    { 
        $errors['loginid2'] = "Vos adresses mails ne correspondent pas"; 
    } 
                                // MOT DE PASSE
    if (empty($mdp)) 
    { 
        $errors['mdp'] = "Veuillez saisir un mot de passe"; 
        $valid = false; 
    }
    else if (!preg_match("/^(?=.*[0-9])(?=.*[a-z])(?=.*[!_&@$àéè¨çîï])(?=.*[A-Z])[0-9a-zA-Z!_&@$àéè¨çîï]{8,}$/",$mdp)) 
    { 
        $errors['mdp'] = "Votre mot de passe doit contenir <br> Minimum 8 caractères <br> Un chiffre <br> Une majuscule <br> Une minuscule <br> Un caractère spécial"; 
    }
                                // CONFIRMATION MOT DE PASSE
    if (empty($mdp2)) 
    { 
        $errors['mdp2'] = "Veuillez confirmer votre mot de passe"; 
        $valid = false; 
    }
    else if ($mdp != $mdp2) 
    { 
        $errors['mdp2'] = "Vos mots de passe ne correspondent pas"; 
    }  


    // On récupere les erreurs s'il y'en a pour les afficher sur la page sinscrire
    if(!empty($errors))
    {
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['loginid'] = $loginid;
        $_SESSION['loginid2'] = $loginid2;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['mdp2'] = $mdp2;

        header("Location: sinscrire.php");
    }
    // S'il n'y a pas d'erreurs ..
    else
    {
        // Et que tout les $valid sont true alors..
        if ($valid) 
        {
        
            //On veut vérifier si le loginid rentré dans le formulaire existe ou pas dans la bdd, si oui on le stock dans une variable grâce a count();
            $searchmail = $db->prepare("SELECT * FROM waz_membre WHERE loginid=?");
            // METHODE AVEC LES BIND VALUE DECOMMENTER LES LIGNES COMMENTEES
            // $searchmail->bindValue(':loginid', $loginid);
            $searchmail->execute(array($loginid));
            $result= $searchmail->fetchAll();
            $mailexist = count($result);

            //s'il existe pas on peut l'insérer dans la bdd
            if ($mailexist == 0)
            {
                    $requete = $db->prepare("INSERT INTO waz_membre (loginid,mdp) VALUES (?,?)");
                    
                    // $requete->bindValue(':loginid',$loginid);
                    // $requete->bindValue(':mdp',$mdp);

                    $requete->execute(array($loginid,$mdp));
                    $requete->closeCursor();

            }
            else
            {
                $erreur="Cette adresse mail est déjà utilisée";
                session_start();
                $_SESSION['loginid'] = $erreur;
                header("Location:sinscrire.php");

            }
        }
    }
    
        
}  

?>






































