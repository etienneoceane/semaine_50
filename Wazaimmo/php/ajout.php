<?php
include("header.php");
include("connexion.php");
$db=connect();
$resultatBien = $db->query('Select opt_id,opt_libelle from options');

?>

<div>





<!-- action ="http://bienvu.net/script.php" pour tester le passage des informations à traiter -->
<form action ="scriptajout.php" method="post" enctype="multipart/form-data">

<br><input type="file" name="fichier"> 


    <div>
    <br>
    <div class="form-group">                    
     <label for="CheckBox">Type d'offre ? : </label><br>
     <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="achat" name="offer"  value="achat">
    <label class="form-check-label" for="InlineRadio1">Achat</label>
    </div>
    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="location" name="offer"  value="location">
    <label class="form-check-label" for="InlineRadio2">Location</label>
    </div>
    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="viager" name="offer"  value="viager">
    <label class="form-check-label" for="InlineRadio2">Viager</label>
    </div><br>
    


<label for="Catégorie">Type de biens :</label>
     
     <select class="form-control" id="bienType" name="typeBien">
     <?php while ($typeBien= $resultatBien ->fetch(PDO::FETCH_OBJ)) { ?>
      <option value="<?php echo $typeBien->opt_id; ?>"><?php echo $typeBien->opt_libelle; ?></option> 
     <?php } ?> </select><br>

<div class="form-group">                    
     <label for="CheckBox">Nombre de pièces : </label><br>
     <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="1" name="nbPiece"  value="1">
    <label class="form-check-label" for="InlineRadio1">1</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="2" name="nbPiece"  value="2">
    <label class="form-check-label" for="InlineRadio2">2</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="3" name="nbPiece"  value="3">
    <label class="form-check-label" for="InlineRadio2">3</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="4" name="nbPiece"  value="4">
    <label class="form-check-label" for="InlineRadio2">4</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="5" name="nbPiece"  value="5">
    <label class="form-check-label" for="InlineRadio2">5</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="6" name="nbPiece"  value="6">
    <label class="form-check-label" for="InlineRadio2">6</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="plusDe6" name="nbPiece"  value="plusDe6">
    <label class="form-check-label" for="InlineRadio2">+ de 6 </label>
    </div><br>
   
    <br> <label for="references">Référence :</label>
     <input type="text" class="form-control" id="reference" name="Refs" value="" >

     <label for="references">Titre :</label>
     <input type="text" class="form-control" id="Titre" name="title" value="" >
    
     <label for="references">Description :</label>
     <input type="text" class="form-control" id="Description" name="Descript" value="" >

     <label for="references">Localisation :</label>
     <input type="text" class="form-control" id="Localisation" name="locate" value="" >

     <label for="references">Surface habitable :</label>
     <input type="number" class="form-control" id="Surface" name="Surfaces" value="" >

     <label for="references">Surface totale :</label>
     <input type="number" class="form-control" id="SurfaceTotal" name="SurfacesTotal" value="" >

     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     <label for="references">Prix :</label>
     <input type="number" class="form-control" id="Price" name="NamePrice" value="" >

     



     <div class="form-group">                    
     <label for="CheckBox">Diagnostic: </label><br>
     <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="A" name="Diagnos"  value="A">
    <label class="form-check-label" for="InlineRadio1">A</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="B" name="Diagnos"  value="B">
    <label class="form-check-label" for="InlineRadio2">B</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="C" name="Diagnos"  value="C">
    <label class="form-check-label" for="InlineRadio2">C</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="D" name="Diagnos"  value="D">
    <label class="form-check-label" for="InlineRadio2">D</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="E" name="Diagnos"  value="E">
    <label class="form-check-label" for="InlineRadio2">E</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="F" name="Diagnos"  value="F">
    <label class="form-check-label" for="InlineRadio2">F</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="G" name="Diagnos"  value="G">
    <label class="form-check-label" for="InlineRadio2">G</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="Vierge" name="Diagnos"  value="Vierge">
    <label class="form-check-label" for="InlineRadio2">Vierge</label>
    </div><br>


    </form><br>








<br><a href="accueil.php" class="btn btn-secondary"  role="button" title="formulaire">Retour </a>
<input type="submit" value="Enregistrer" class ="btn btn-success" onclick="verif();"><br>






<script>

//vérifie si on envoit ou non le formulaire à "script_modif.php"
function verif(){ 

  

    //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
    var resultat = confirm("Etes-vous certain de vouloir ajouter cet enregistrement ?");

    //alert("retour :"+ resultat);

    if (resultat==false){

    alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cet enregistrement !");

    //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
    event.preventDefault();    

    }

    
}



</script>


<?php



include("footer.php");

?>

