<?php
include("header.php");
include("connexion.php");
$db=connect();
$resultatBien = $db->query('Select bien_id,bien_libelle from waz_bien');
$resultatOpt=$db->query('Select opt_id,opt_libelle from options');
?>

<div class="m-3"align="center">




<form action ="scriptajout.php" method="post" enctype="multipart/form-data">
<!-- Fichier (tous formats | max. 1 Mo) :
<br><input type="file" name="fichier"> 
<input type="hidden" name="MAX_FILE_SIZE" value="12345" /> -->

<!-- if(isset($_POST["submit"]))
{
    $maxsizeSize=50000;

    if ($_FILES['fichier']['error'] > 0) 
    {
        echo "une erreure est survenue lors du transfert";
        die;
    }

    if ($_FILES['fichier']['size'] > $maxsize) 
    {
        echo "le fichier est trop gros";
        die;
    }

} -->



                                                                            <!-- <input type="submit" value="Télécharger" class ="btn btn-success"><br> -->


                            <!-- TYPE D'OFFRE -->

    <div>
    <br>
    <div class="form-group w-25">                    
    <label for="CheckBox">Type d'offre ? : </label><br>
    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio" id="achat" name="offer" value="A">
    <label class="form-check-label" for="InlineRadio1">Achat</label>
    </div>
    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio" id="location" name="offer" value="L">
    <label class="form-check-label" for="InlineRadio2">Location</label>
    </div>
    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio" id="viager" name="offer" value="V">
    <label class="form-check-label" for="InlineRadio2">Viager</label>
    </div><br>

    

                            <!-- TYPE DE BIEN   -->
<label for="Catégorie">Type de biens :</label>

    <select class="form-control" id="typeBien" name="typeBien">
    <?php while ($typeBien= $resultatBien ->fetch(PDO::FETCH_OBJ)) { ?>
    <option value="<?php echo $typeBien->bien_libelle; ?>"><?php echo $typeBien->bien_libelle; ?></option> 
    <?php } ?> </select><br>

                            <!-- NB DE PIECES -->
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
    <br><input class="form-check-input" type="radio"  id="+6" name="nbPiece"  value="+6">
    <label class="form-check-label" for="InlineRadio2">+ de 6 </label>
    </div><br>


                            <!-- REFERENCES -->
<br> <label for="references">Référence :</label>
    <input type="text" class="form-control" id="reference" name="refs" value="" >


                            <!-- TITRE -->

    <label for="references">Titre :</label>
    <input type="text" class="form-control" id="Titre" name="title" value="" >


                            <!-- DESCRIPTION-->

    <label for="references">Description :</label>
    <input type="text" class="form-control" id="Description" name="descript" value="">


                            <!-- OPTIONS -->
    <div class="form-group"><br>
    Options:<br><br>
    <?php while($typePiece=$resultatOpt->fetch(PDO::FETCH_OBJ)){?>
    <input class="form-radio-input optionsclasse" type="radio" id="option.<?php echo $typePiece->opt_id;?>" name="<?php echo "option_". $typePiece->opt_libelle;?>" value="<?php echo $typePiece->opt_id;?>"
    <label class="radio-inline"><?php echo $typePiece->opt_libelle;?></label><?php }?></div>


                            <!-- LOCALISATION -->

    <label for="references">Localisation :</label>
    <input type="text" class="form-control" id="Localisation" name="locate" value="" >


                            <!-- SURFACE HABITABLE -->

    <label for="references">Surface habitable :</label>
    <input type="number" class="form-control" id="Surface" name="surfaces" value="" >


                            <!-- SURFACE TOTALE -->

    <label for="references">Surface totale :</label>
    <input type="number" class="form-control" id="SurfaceTotal" name="surfacesTotal" value="" >


                            <!-- PRIX -->

    <label for="references">Prix :</label>
    <input type="number" class="form-control" id="Price" name="namePrice" value="" >


                            <!-- DIAGNOSTIC -->
    
    <div class="form-group">                    
    <label for="CheckBox">Diagnostic: </label><br>
    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="A" name="diagnos"  value="A">
    <label class="form-check-label" for="InlineRadio1">A</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="B" name="diagnos"  value="B">
    <label class="form-check-label" for="InlineRadio2">B</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="C" name="diagnos"  value="C">
    <label class="form-check-label" for="InlineRadio2">C</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="D" name="diagnos"  value="D">
    <label class="form-check-label" for="InlineRadio2">D</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="E" name="diagnos"  value="E">
    <label class="form-check-label" for="InlineRadio2">E</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="F" name="diagnos"  value="F">
    <label class="form-check-label" for="InlineRadio2">F</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="G" name="diagnos"  value="G">
    <label class="form-check-label" for="InlineRadio2">G</label>
    </div>

    <div class="form-check form-check-inline">
    <br><input class="form-check-input" type="radio"  id="Vierge" name="diagnos"  value="Vierge">
    <label class="form-check-label" for="InlineRadio2">Vierge</label>
    </div><br>


    </form><br>

</div>






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

