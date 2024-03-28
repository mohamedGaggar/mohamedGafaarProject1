<?php
require("./main.php");


/*
if (!isset($_SESSION["loginId"])) {
  $email=$_POST["email"];
$query="select * from userz where email= $email";
$queryProfSql=$connection->query($query);
$fetchProf=$queryProfSql->fetch(PDO::FETCH_ASSOC);
exit();

}

*/


$loginId=$_SESSION["loginId"];

$queryProf="select * from userz where id=:id";
$queryProfSql=$connection->prepare($queryProf);
$queryProfSql->bindParam(":id",$loginId,PDO::PARAM_INT);
$queryProfSql->execute();
$fetchProf=$queryProfSql->fetch(PDO::FETCH_ASSOC);


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid"><h1 style="font-family:Courier;color:orangered">PROFILE</h1></div>
<!-- As a link -->
<div class="container" style="background-color: chocolate;"></div>
<nav class="navbar bg-body-tertiary" style="max-width: 1300px;max-height: 40px;">


  <div class="container-fluid" ">
    <div class="user__name" style="padding-left:300px;font-family:Verdana"">
<?php

echo "<p>".$fetchProf["name"]."</p>";


?>

    </div>
<!-- As a link -->

<div class="user__email" style="padding-right:200px;font-family:Verdana">

<?php



echo "<p>".$fetchProf["email"]."</p>";


?>
</div>


<!-- As a link -->








  </div>
</nav>

<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  
</nav>

<!--################# MAIN COURSE SECTION#######----------------------------------->
<section>
<div class="main__course--containers" style="width: 500px;margin-left: 200px;margin-top:50px">

<form action="main.php" method="post">
  
<div class="mb-3">
    <label for="amount" class="form-label">backed ziti</label>
    <input type="text" class="form-control" id="" name="ziti_amount">
    <button type="submit" name="zitiBtn" class="btn btn-primary">select</button>
  </div>
  <!-- As a heading -->
  <div class="mb-3">
    <label for="amount" class="form-label">chicken parmesan (parmigiana)</label>
    <input type="text" class="form-control" id="" name="para_amount">
    <button type="submit" name="pramBtn" class="btn btn-primary">select</button>
  </div>
    <!-- As a heading -->
<div class="mb-3">
    <label for="amount" class="form-label">Italian Meatballs</label>
    <input type="text" class="form-control" id="" name="italian_amount">
    <button type="submit" name="italianBtn" class="btn btn-primary">select</button>
  </div>
  <!-- As a heading -->
<div class="mb-3">
    <label for="amount" class="form-label">Creamy Tortellini Soup with Sausage</label>
    <input type="text" class="form-control" id="" name="soup_amount">
    <button type="submit" name="tortBtn" class="btn btn-primary">select</button> 
  </div>
 <!-- As a heading -->
<div class="mb-3">
    <label for="amount" class="form-label">Meat Lasagna</label>
    <input type="text" class="form-control" id="" name="lasagna_amount">
    <button type="submit" name="lasaBtn" class="btn btn-primary">select</button>
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>




</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>