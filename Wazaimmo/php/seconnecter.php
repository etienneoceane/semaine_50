<?php 
    include("header.php");

    include("connexion.php");

    $db=connect();
?>


<div class="container-fluid col-3">
    <div class="row col-12 m-0 p-0 " align="center"> 

        <form action="scriptseconnecter.php" method="POST" id="form_ajout">
            <div class="form-group">

                <label for="login">Veuillez saisir votre adresse mail</label>
                <input type="text" name="loginidconnexion"class="form-control"  placeholder="Votre E-mail" id="loginidconnexion" value="<?php echo $_SESSION['loginidconnexion'] ??'';?>">
                <?php 
                            if(isset($_SESSION['errors']))
                            {
                                if(isset($_SESSION['errors']['loginidconnexion']))
                                {
                                    echo "<div class='alert alert-danger'>";
                                    echo $_SESSION['errors']['loginidconnexion'];
                                    echo "</div>";

                                    // unset ($_SESSION['errors']);
                                }
                            }
                        ?>
                <!-- <p style="color: brown;" id="erreurlogin"></p> -->
                <br>

                <label for="mdp">Veuillez saisir votre mot de passe</label>
                <input type="text" name="mdpconnexion" class="form-control"  placeholder="Votre mot de passe" id="mdpconnexion" value="<?php echo $_SESSION['mdpconnexion'] ??'';?>">
                <?php 
                            if(isset($_SESSION['errors']))
                            {
                                if(isset($_SESSION['errors']['mdpconnexion']))
                                {
                                    echo "<div class='alert alert-danger'>";
                                    echo $_SESSION['errors']['mdpconnexion'];
                                    echo "</div>";

                                    // unset ($_SESSION['errors']);
                                }
                            }
                        ?>
        <!-- <p style="color: brown;" id="erreurmdp"></p> -->
                <br>
                <button type="submit" class="btn btn-dark" value="Envoyer" id="Bouton_seconnecter">Se connecter</button>
                <button type="reset" class="btn btn-dark" value="reset" id="Bouton_Annuler">Annuler</button><br><br>

            </div>
        </form>

    </div>
</div>
<!-- <script src="app1.js"></script> -->

        <script>
        function verif()
        { 
            //Rappel : confirm() -> Bouton OK et Annuler, renvoit true ou false
            var resultat = confirm("Etes-vous certain de vouloir modifier cet enregistrement ?");

            //alert("retour :"+ resultat);

            if (resultat==false)
            {

            alert("Vous avez annulé les modifications \nAucune modification ne sera apportée à cet enregistrement !");

            //annule l'évènement par défaut ... SUBMIT vers "script_modif.php"
            event.preventDefault();    

            }
        }

        </script>

<?php
    include("footer.php");
    
?>