<?php 

    session_start();
    include("header.php");
    include("connexion.php");

    $db=connect();


?>

<div class="container-fluid col-6"> 
    <div class="col-12 col-sm-12 col-md-12 col-lg-12" align="center">

        <p>* Ces zones sont obligatoires</p>

            <form action="scriptcontact.php" class="form-group" need-validation method="POST" accept-charset="utf-8">
                <fieldset class="alert">
                    <h2>Vos informations</h2>

                                                    <!-- ------ NOM ------ -->

                        <div class="form-group"><br>
                            <label for="nom">*Nom :</label>
                            <input type="text" name="nom" value="<?php echo $_SESSION['nom'] ??'';?>"  class="form-control w-50" />
                            <?php 
                            if (isset($_SESSION['errors']))
                            {
                                if (isset($_SESSION['errors']['nom']))
                                {
                                    echo "<div class='alert alert-danger'>";
                                    echo $_SESSION['errors']['nom'] ;
                                    echo "</div>";
                                    
                                }
                            }
                            ?>
                        </div>

                                                    <!-- ------ PRENOM------ -->

                        <div class="form-group"><br>
                            <label for="prenom">*Prénom :</label>
                            <input type="text" name="prenom" value="<?php echo $_SESSION ['prenom'] ?? '';?>"   class="form-control w-50" />
                            <?php 
                            if (isset($_SESSION['errors']))
                            {
                                if (isset($_SESSION['errors']['prenom']))
                                {
                                    echo "<div class='alert alert-danger'>";
                                    echo $_SESSION['errors']['prenom'] ;
                                    echo "</div>";
                                    
                                }
                            }
                            ?>
                        </div>
                                                    
                                                    <!-- ------ DATE DE NAISSANCE ------ -->

                        <div class="form-group"><br>
                            <label for="ddn">*Date de naissance :</label>
                            <input type="date" name="ddn" value="<?php echo $_SESSION ['ddn'] ?? '';?>"   class="form-control w-50"/>
                            <?php 
                            if (isset($_SESSION['errors']))
                            {
                                if (isset($_SESSION['errors']['ddn']))
                                {
                                    echo "<div class='alert alert-danger'>";
                                    echo $_SESSION['errors']['ddn'] ;
                                    echo "</div>";
                                    
                                }
                            }
                            ?>
                        </div>s

                                                    <!-- ------ CP ------ -->

                        <div class="form-group"><br>
                            <label for="cp">*Code postal :</label>
                            <input type="text" name="cp" value="<?php echo $_SESSION ['cp'] ?? '';?>"   class="form-control w-50" />
                            <?php 
                            if (isset($_SESSION['errors']))
                            {
                                if (isset($_SESSION['errors']['cp']))
                                {
                                    echo "<div class='alert alert-danger'>";
                                    echo $_SESSION['errors']['cp'] ;
                                    echo "</div>";
                                }
                            }
                            ?>
                        </div>

                                                    <!-- ------ ADRESSE ------ -->

                        <div class="form-group"><br>
                            <label for="adresse">*Adresse :</label>
                            <input type="text" name="adresse" value="<?php echo $_SESSION ['adresse'] ?? '';?>"   class="form-control w-50" />
                            <?php 
                                if (isset($_SESSION['errors']))
                                {
                                    if (isset($_SESSION['errors']['adresse']))
                                    {
                                        echo "<div class='alert alert-danger'>";
                                        echo $_SESSION['errors']['adresse'] ;
                                        echo "</div>";
                                    }
                                }
                            ?>
                        </div>

                                                    <!-- ------ VILLE ------ -->

                        <div class="form-group"><br>
                            <label for="ville">*Ville :</label>
                            <input type="text" name="ville" value="<?php echo $_SESSION ['ville'] ?? '';?>"   class="form-control w-50"/>
                            <?php 
                                if (isset($_SESSION['errors']))
                                {
                                    if (isset($_SESSION['errors']['ville']))
                                    {
                                        echo "<div class='alert alert-danger'>";
                                        echo $_SESSION['errors']['ville'] ;
                                        echo "</div>";
                                    }
                                }
                            ?>
                        </div>

                                                    <!-- ------ EMAIL ------ -->

                        <div class="form-group"><br>
                            <label for="mail">*E-mail :</label>
                            <input type="text" name="email" value="<?php echo $_SESSION ['email'] ?? '';?>"  class="form-control w-50" placeholder="Veuillez entrer votre E-mail" id="mail"/>
                            <?php 
                                if (isset($_SESSION['errors']))
                                {
                                    if (isset($_SESSION['errors']['email']))
                                    {
                                        echo "<div class='alert alert-danger'>";
                                        echo $_SESSION['errors']['email'] ;
                                        echo "</div>";
                                    }
                                }
                            ?>
                        </div>

                </fieldset><br>

                <fieldset class="alert">
                    <h1>Votre demande</h1>

                                                    <!-- ------ SUJET ------ -->

                        <div class="form-group w-50"><br>
                            <label for="sujet">Sujet :</label>
                            <select class="custom-select" name="sujet" value="<?php echo $_SESSION['sujet'] ?? '';?>" >
                                <option value="Veuillez_selectionn_un_sujet">Veuillez selectionner un sujet</option>
                                <option value="Problème_annonce">Problème lié à une annonce</option>
                                <option value="Probleme_inscription">Problème lié à l'inscription</option>
                                <option value="Probleme_connexion">Problème lié à la connexion</option>
                                <option value="Autre">Autres</option>
                            </select><br>
                            <?php 
                                if (isset($_SESSION['errors']))
                                {
                                    if (isset($_SESSION['errors']['sujet']))
                                    {
                                        echo "<div class='alert alert-danger'>";
                                        echo $_SESSION['errors']['sujet'] ;
                                        echo "</div>";
                                    }
                                }
                            ?>
                        </div>

                                                    <!-- ------ QUESTION ------ -->

                        <div class="form-group w-75"><br>
                            <label for="question">*Votre question</label>
                            <textarea class="form-control" name="question" value="<?php echo $_SESSION ['question'] ?? '';?>" >
                            </textarea><br>
                            <?php 
                                if (isset($_SESSION['errors']))
                                {
                                    if (isset($_SESSION['errors']['quesiton']))
                                    {
                                        echo "<div class='alert alert-danger'>";
                                        echo $_SESSION['errors']['question'] ;
                                        echo "</div>";
                                    }
                                }
                            ?>
                        </div>

                                                    <!-- ------ CGU ------ -->

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="cgu"  id="cgu" value=""/>
                            <label class="form-check-label" for="cgu">*J'accepte le traitement informatique de ce formulaire</label>
                            <?php 
                                if (isset($_SESSION['errors']))
                                {
                                    if (isset($_SESSION['errors']['cgu']))
                                    {
                                        echo "<div class='alert alert-danger'>";
                                        echo $_SESSION['errors']['cgu'] ;
                                        echo "</div>";
                                    }
                                }
                            ?>
                            
                                <br><br>
                        </div>
                        <button type="submit" class="btn btn-dark" value="Envoyer" id="Bouton_sinscrire">Envoyer</button>
                        <button type="reset" class="btn btn-dark" value="reset" id="Bouton_Annuler">Annuler</button><br><br>
                        
                </fieldset>
            </form>
    </div>
</div>

<?php
    include("footer.php");
    
?>