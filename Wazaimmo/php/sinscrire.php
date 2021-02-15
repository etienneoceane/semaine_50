<?php 

    session_start();

    include("header.php");
    include("connexion.php");

    $db=connect();
    
?>

<h1 id="sinscrire">Veuillez remplir le formulaire d'inscription ci-dessous</h1><br><br>


<div class="container-fluid col-3">

    <div class="row col-12 m-0 p-0 " align="center"> 


        <form action="scriptsinscrire.php" method="POST" id="form_inscription">

        <div class="form-group">
            
                <label for="loginid">Veuillez saisir votre adresse mail</label>
                <input type="email" name="loginid" class="form-control" id="loginid" placeholder="Votre E-mail" value="<?php echo $_SESSION['loginid'] ??'';?>">
                <?php 
                    if(isset($_SESSION['errors']))
                    {
                        if(isset($_SESSION['errors']['loginid']))
                        {
                            echo "<div class='alert alert-danger'>";
                            echo $_SESSION['errors']['loginid'];
                            echo "</div>";

                            // unset ($_SESSION['errors']);
                        }
                    }
                ?>
                <br>
                

                <label for="loginid2">Veuillez confirmer votre adresse mail</label>
                <input type="email" name="loginid2"class="form-control" id="loginid2" placeholder="Votre E-mail" value="<?php echo $_SESSION['loginid2'] ??'';?>">
                <?php 
                    if(isset($_SESSION['errors']))
                    {
                        if(isset($_SESSION['errors']['loginid2']))
                        {
                            echo "<div class='alert alert-danger'>";
                            echo $_SESSION['errors']['loginid2'];
                            echo "</div>";

                            // unset ($_SESSION['errors']);
                        }
                    }
                ?>
                <br>

                <label for="mdp">Veuillez saisir votre mot de passe</label>
                <input type="text" name="mdp" class="form-control" id="mdp" placeholder="Votre mot de passe" value="<?php echo $_SESSION['mdp'] ??'';?>">
                <?php 
                    if(isset($_SESSION['errors']))
                    {
                        if(isset($_SESSION['errors']['mdp']))
                        {
                            echo "<div class='alert alert-danger'>";
                            echo $_SESSION['errors']['mdp'];
                            echo "</div>";

                            // unset ($_SESSION['errors']);
                        }
                    }
                ?>
                <br>
                
                <label for="mdp2">Veuillez confirmer votre mot de passe</label>
                <input type="text" name="mdp2" class="form-control" id="mdp2" placeholder="Votre mot de passe" value="<?php echo $_SESSION['mdp2'] ??'';?>">
                <?php 
                    if(isset($_SESSION['errors']))
                    {
                        if(isset($_SESSION['errors']['mdp2']))
                        {
                            echo "<div class='alert alert-danger'>";
                            echo $_SESSION['errors']['mdp2'];
                            echo "</div>";

                            // unset ($_SESSION['errors']);
                        }
                    }
                ?>
                <br>

                

                <button type="submit" class="btn btn-dark" value="Envoyer" id="Bouton_sinscrire">S'inscrire</button>
                <button type="reset" class="btn btn-dark" value="reset" id="Bouton_Annuler">Annuler</button><br><br>

        </div>

        </form>
        
    </div>

</div>
<!-- <script src="app.js"></script> -->


<?php
    include("footer.php");
    
?>