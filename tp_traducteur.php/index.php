<?php include 'header.php'?>
<?php
session_start();

?>
<h1>traducteur francais anglais </h1>
    <form class="col-4" method="POST" action="index.php">
  <div class="mb-4">
    <label for="name" class="form-label">mot a traduire </label>
    <input type="text" class="form-control" id="name"  name="name">
  </div>
  <select name="direction">
                <option name ="2" value="toEnglish"selected="selected">Français vers Anglais</option>
                <option name ="1" value="toFrench" >Anglais vers Français</option>
  </select>
  <button type="submit" class="btn btn-primary">traduire</button>
</form>
    <?php
    
    
      $array =array(
        'chat' =>'cat' ,
        'chien' =>'dog',
        'voiture '=> 'car',
        'hello' => 'salut',
        'vie' =>'life',
        'ville' =>'city',
        'marché' =>'market',
        );
   
        if ((isset($_POST)) && ( !empty($_POST["name"]))) {
     $A = $_POST['name'];
    foreach(array_keys($array) as $elment){
        if ($A === $elment) {
          echo $array[$elment];
    }
  }}
?>
    
<?php include 'footer.php'?>