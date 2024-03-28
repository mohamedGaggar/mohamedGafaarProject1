
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<h1 style="color:orange;margin-left:40px;margin-top:30px">SIGN UP</h1>  
  <form action="main.php" method="post" style="margin-top:50px;">
  <div class="mb-3"  style="margin-top:50px;margin-left:50px;width:500px">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control" id="name" aria-describedby="" name="name">
    <div id="emailHelp" class="form-text">

<?php

if (isset($_GET["message"])) {
  echo "<p style='color:green'>".$_GET["message"]."</p>";
}


?>


    </div>
  </div>

  <div class="mb-3"  style="margin-top:50px;margin-left:50px;width:500px">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3"  style="margin-top:50px;margin-left:50px;width:500px">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary" name="registerBtn"  style="margin-top:50px;margin-left:50px;width:150px">Submit</button>
</form>
<div style="margin-left: 600px;">

<p>now login</p>
<a href="./login.php">login</a>



</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>