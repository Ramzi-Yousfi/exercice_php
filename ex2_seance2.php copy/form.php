
<?php 
include 'header.php'?>
<h1>formulaire</h1>
    <form class="col-4" method="POST" action="index.php">
  <div class="mb-4">
    <label for="name" class="form-label">prénom</label>
    <input type="text" class="form-control" id="name"  name="name">
  </div>
  <div class="mb-3">
    <label for="last_name" class="form-label">nom</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
    <?php
    if(isset($_POST)&& !empty($_POST)){
        $message = array();
        $message["nom"]=$_POST['last_name'];
        $message["prenom"]=$_POST['name'];
        $message["date"]=date('D,d/M/Y H:i:s');
        $message["id"]=date('dmyis');
       
        $js = file_get_contents('fichier.json');
        $js = json_decode($js ,true);
        $js[] = $message;
        $js = json_encode($js);
        file_put_contents('fichier.json',$js);
    }
     
    
    
    ?><?php include 'footer.php'?>