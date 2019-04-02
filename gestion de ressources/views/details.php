<?php
   
    $id = $_POST["data"];
    $var="hello";
    $list=$editeur->recupererEditeurById($id);
    

?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        

      <?php foreach($list as $row): ?>
              
              <div id="at" class="col-xs-12 col-sm-7 col-nn-8">
                  <a title="East of eden" href=""><?php  echo $row['nomMaison']?></a>
                          <?php 
                      $id= $_POST['data'];
                      var_dump($_POST);
                      
                      echo "présentation : "; 
                      echo $row['informations']; echo "<br>" ;
                      echo "e-mail : " ; echo $row['mail'];
                       echo "<br>" ; echo "Téléphone : ";
                        echo $row ['telephone'] ; echo "<br>"  ; 
                        echo "Adresse : "; echo $row ['adresse'] ;                
                        ?>
              </div>
              <?php endforeach; ?>
      </div>
   <!--   <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>