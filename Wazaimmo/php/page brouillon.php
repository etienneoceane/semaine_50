

<!-- 
                                                <!-- LES CARTES -->

            <!-- <div class="card-columns">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <a href=""> --> -->

                                                <!-- lE CAROUSEL

                                <div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="false">

                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExemple" data-slide-to="1"></li>
                                    <li data-target="#carouselExemple" data-slide-to="2"></li>
                                </ol>

                                    <div class="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <img src="annexes/photos/annonce_1/1-1.jpg"
                                                class="d-block center-block" height="810"  >
                                        </div>

                                        <div class="carousel-item">
                                            <img src="annexes/photos/annonce_1/1-2.jpg"
                                                class="d-block" height="500">
                                        </div>

                                    </div>

                                    <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                    </div>

                                </div>

                                <script>
                                $('.carousel').carousel({

                                    pause: "null"

                                })
                                </script>
                                    </a> -->

                                                            <!-- lES INFOS SOUS LE CAROUSEL -->

<!-- 
                                    <p class="align-middle text-center"><strong>localisation : </strong>Somme (80), 1h00 de Paris</p>
                                    <p class="align-middle text-center"><strong>Prix :</strong>197000€</p>
                                </ul>

                                <div class="card-body align-middle text-center">
                                    <a href="">
                                        <button class="btn btn-outline-danger">Suprimer</button>
                                    </a>
                                    <a href="ensavoirplus.php">
                                        <button class="btn btn-outline-info">En savoir plus</button>
                                    </a>

                                    <p class="text-muted align-middle text-center">2020-12-09</p>

                                </div>
                    </div>

                            


            </div>
            </section> -->
                                                <!--FOOTER | PIED DE PAGE -->





                                                // // On  récupères les informations du formulaire + connexion à la bdd
// $loginid=$_POST["loginid"];
// $mdp=$_POST["mdp"];
// ;

// //On veut vérifier si le loginid rentré dans le formulaire existe ou pas dans la bdd, si oui on le stock dans une variable grâce a count();
// $searchmail = $db->prepare("SELECT * FROM waz_membre WHERE loginid=?");
// // METHODE AVEC LES BIND VALUE DECOMMENTER LES LIGNES COMMENTEES
// // $searchmail->bindValue(':loginid', $loginid);
// $searchmail->execute(array($loginid));
// $result= $searchmail->fetchAll();
// $mailexist = count($result);


// //s'il existe pas on peut l'insérer dans la bdd
// if ($mailexist == 0)
// {
//         $requete = $db->prepare("INSERT INTO waz_membre (loginid,mdp) VALUES (?,?)");
        
//         // $requete->bindValue(':loginid',$loginid);
//         // $requete->bindValue(':mdp',$mdp);

//         $requete->execute(array($loginid,$mdp));
//         $requete->closeCursor();

// }
// else
// {
//     $erreur="Cette adresse mail est déjà utilisée";
//     header("Location:sinscrire.php");

// }

