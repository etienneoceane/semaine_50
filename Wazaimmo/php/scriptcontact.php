<?php

    include("connexion.php");
    $db=connect();

    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST))
    {
        //on initialise nos messages d'erreurs

        $errors = [];
        $cgu=0;
        // on recupère nos valeurs 

        $nom=htmlentities(trim($_POST['nom']));
        $prenom=htmlentities(trim($_POST['prenom']));
        $ddn=htmlentities(trim($_POST['ddn']));
        $cp=htmlentities(trim($_POST['cp']));
        $adresse=htmlentities(trim($_POST['adresse']));
        $ville=htmlentities(trim($_POST['ville']));
        $email=htmlentities(trim($_POST['email']));
        $sujet=htmlentities(trim($_POST['sujet']));
        $question=htmlentities(trim($_POST['question']));
        $cgu=htmlentities(trim($_POST['cgu']));
        
        
        // on vérifie nos champs 
        //On crée notre message d’erreur
                                                // VERIFICATION NOM
            $valid = true;
            if (empty($nom)) 
            { 
                $errors['nom'] = "Veuillez saisir votre nom"; 
                $valid = false; 
            }
            else if (!preg_match("/^[a-zA-Z ]*$/",$nom)) 
            { 
                $errors['nom'] = "Votre nom ne doit contenir que des lettres"; 
            } 
                                                // VERIFICATION PRENOM
            if (empty($prenom)) 
            { 
                $errors['prenom'] = "Veuillez saisir votre prénom"; 
                $valid = false; 
            }
            else if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) 
            { 
                $errors['prenom'] = "Votre prénom ne doit contenir que des lettres"; 
            } 
                                                // VERIFICATION CODE POSTALE

            if (empty($cp)) 
            { 
                $errors['cp'] = "Veuillez saisir votre code postale"; 
                $valid = false; 
            }
            else if (!preg_match("/^[0-9]{5}$/",$cp)) 
            { 
                $errors['cp'] = "Caractères spéciaux non autorisés"; 
            } 
                                                    // VERIFICATION ADRESSE     
            if (empty($adresse)) 
            { 
                $errors['adresse'] = "Veuillez saisir votre adresse"; 
                $valid = false; 
            }
            else if (!preg_match("/^[a-zA-Z 0-9]*$/",$adresse)) 
            { 
                $errors['adresse'] = "Caractères spéciaux non autorisés";
            }
                                                    // VERIFICATION VILLE
            if (empty($ville)) 
            { 
                $errors['ville'] = "Veuillez saisir votre ville"; 
                $valid = false; 
            }
            else if (!preg_match("/^[a-zA-Z]*$/",$ville)) 
            { 
                $errors['ville'] = "Caractère spéciaux non autorisés"; 
            } 

            // VERIFICATION EMAIL
            if (empty($email)) 
            { 
                $errors['email'] = "Veuillez saisir votre adresse email"; 
                $valid = false; 
            } 
            else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) 
            { 
                $errors['email'] = "Veuillez saisir une adresse email valide"; 
                $valid = false; 
            } 

            if ($sujet == "0" )
            { 
                $errors['sujet'] = "Veuillez saisir séléctionner votre sujet"; 
            
                $valid = false; 
            } 

            if (empty($question)) 
            { 
                $errors['question'] = "Veuillez saisir votre question"; 
                $valid = false; 
            }

            if (empty($cgu))
            {
                $errors['cgu'] = "Sil vous plaît ,veuillez accepter le traitement informatique";
                $valid = false;
            }
        
            if(!empty($errors))
            {
                session_start();
                $_SESSION['errors'] = $errors;
                $_SESSION['nom'] = $nom;
                $_SESSION['ddn'] =$ddn;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['adresse'] = $adresse;
                $_SESSION['cp'] = $cp;
                $_SESSION['ville'] = $ville;
                $_SESSION['email'] = $email;
                $_SESSION['sujet'] = $sujet;
                $_SESSION['question'] = $question;
                $_SESSION['cgu'] = $cgu;

                header("Location: contact.php");
            } 
    }


    else 
    {    
        $requete = $db -> prepare ("INSERT INTO waz_contact (nom,prenom,cp,adresse,ville,email,sujet,question,cgu) VALUES (?,?,?,?,?,?,?,?,?)");
        $requete->execute(array($nom,$prenom,$cp,$adresse,$ville,$email,$sujet,$question,$cgu));
        header("Location: contact.php");
        exit();
        
    }

    // var_dump($_POST);
?>       

