<?php 
    include("header.php");

    include("connexion.php");

    $db=connect();
    $ID=$_GET['an_id']; 
    $resultApropos =  "SELECT * FROM annonces WHERE an_id = $ID";
    $resultApropos = $db->query($resultApropos);
    $row = $resultApropos->fetch(PDO::FETCH_OBJ);  
          ?>





          <div class="card" style="width: 25rem;">
        <?php echo "<img src='photos/".$row->an_id.".".$row->an_photo."' alt='photo_1' width='400' class='card-img-top' >"?>
            <div class="card-body">
                <p class="text align-middle text-center"><?php echo $row->an_titre ?></p>
                <p class="text align-middle text-center"><?php echo $row->an_local ?></p>
                <p class="text align-middle text-center"><?php echo $row->an_prix ?> €</p>

          <div class="text align-middle text-center">
              <a href="">   <button class="btn btn-outline-danger">Suprimer</button> </a>

        </div><br>


                <p class="text align-middle text-center">2020-11-13</p>


    

          </div>
          </div>





<?php
    include("footer.php");
    
?>