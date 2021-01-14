<?php include 'header.php'?>
<h1>formulaire</h1>

    <form class="col md-4" method="POST" action="index.php">
    <input type="text" name="name" placeholder="votre prenom" required class="form-control ">
    <input type="text" name="last_name" placeholder="notre nom"required class="form-control">
    <button class="btn btn-primary" type="submit">envoyer</button>
    </form>
    <br>
    <?php
     $name =$_POST['name'];
     $last_name =$_POST['last_name'];
     echo "prenom => $name <br/> nom => $last_name"

    ?>
<?php include 'footer.php'?>