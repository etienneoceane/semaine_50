<?php 
include("connexion.php");
$db=connect();

//dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE

//récupération des informations passées en POST, nécessaires à la modification

if(isset($_POST['offer'])) 
{
    $reference_offerType = $_POST['offer'];
}
else  $reference_offerType = NULL;


if(isset($_POST['typeBien']))
{
    $reference_typeBien= $_POST['typeBien'];
}
else $reference_typeBien= NULL;

if (isset($_POST['nbPiece'])) 
{
    $reference_nbPiece = $_POST['nbPiece'];
}
 else  $reference_nbPiece = NULL;


$reference_ref=$_POST['refs'];
$reference_titre=$_POST['title'];
$reference_description=$_POST['descript'];


// if (isset($_POST['$opt_id'])) 
// {
//     $reference_typePieceid = $_POST['$opt_id'];
// }
// else  $reference_typePieceid = "NULL";

// var_dump($_POST['$opt_id']);

// RECUP LES OPTIONS COCHEES + LES ID AVEC ON MET UN TABLEAU ET JE BOUCLE LES VALEURS DU TABLEAU DESSUS
//ET POUR CHAQUE VALEUR DU TABLEAU ON FAIT UNE INSERTION DANS LA BDD

$reference_localisation=$_POST['locate'];
$reference_surfaceHabitable=$_POST['surfaces'];
$reference_surfaceTotale=$_POST['surfacesTotal'];
$reference_prix=$_POST['namePrice'];


if(isset($_POST['diagnos'])) 
{
    $reference_diagnos = $_POST['diagnos'];
}
else  $reference_diagnos = "Vierge";

// var_dump($_REQUEST);

// if ($_FILES['fichier']['error'] > 0) $erreur = "Erreur lors du transfert";
// if ($_FILES['icone']['size'] > $maxsize) $erreur = "Le fichier est trop gros";


// REQUETES PREPAREES 
$requete = $db->prepare("INSERT INTO annonces (an_ref,an_titre,an_description,an_local,an_surf_hab,an_surf_tot,an_prix,an_offre,an_pieces, an_diagnostic, an_type, an_d_ajout) 
VALUES (:an_ref,:an_titre,:an_description,:an_local,:an_surf_hab,:an_surf_tot,:an_prix,:an_offre,:an_pieces,:an_diagnostic, :an_type,now())");


$requete->bindValue(':an_ref', $reference_ref);
$requete->bindValue(':an_titre', $reference_titre);
$requete->bindValue(':an_description', $reference_description);
$requete->bindValue(':an_local', $reference_localisation);
$requete->bindValue(':an_surf_hab', $reference_surfaceHabitable, PDO::PARAM_INT);
$requete->bindValue(':an_surf_tot', $reference_surfaceTotale, PDO::PARAM_INT);
$requete->bindValue(':an_prix', $reference_prix, PDO::PARAM_INT);
$requete->bindValue(':an_offre', $reference_offerType);
$requete->bindValue(':an_pieces', $reference_nbPiece);
$requete->bindValue(':an_diagnostic', $reference_diagnos);
$requete->bindValue(':an_type', $reference_typeBien);
$requete->bindValue(':an_d_ajout');


$requete->execute();
// recuper le dernier id inserer en bdd
$last_id = $db->lastInsertId();
// $requete3=$db->prepare("SELECT an_id FROM annonces WHERE an_id=(SELECT MAX(an_id) FROM annonces)");
// $requete2= $db->prepare("INSERT INTO waz_an_opt (an_opt_opt_id) 
//                             VALUES(:an_opt_opt_id) 
//                             SELECT $last_id  FROM annonces AS a
//                             LEFT JOIN waz_an_opt AS opt
//                             ON a.an_id = opt.an_opt_an_id");
$requete2= $db->prepare("INSERT INTO waz_an_opt (an_opt_opt_id, an_opt_an_id) VALUES(:an_opt_opt_id, $last_id)");


$requete2->bindValue(':an_opt_opt_id', $reference_typePieceid, PDO::PARAM_INT);
$requete2->bindValue(':an_opt_an_id', $last_id, PDO::PARAM_INT);
$requete2->execute();

//libère la connection au serveur de BDD
$requete->closeCursor();

//redirection vers la page index.php 


// header("Location: index.php");

?>
