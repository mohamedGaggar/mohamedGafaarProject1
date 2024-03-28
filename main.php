<?php
session_start();
$host="localhost";
$dbName="resturant";
$dType="mysql";
$user="root";
$password="";

$connection= new PDO("$dType:host=$host;dbname=$dbName",$user,$password);
//$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$query="select * from userz";
$querySql=$connection->prepare($query);
$querySql->execute();
$fetch=$querySql->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["registerBtn"])) {
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $patternName="/^[a-z]{5,20}$/";
  if (!preg_match($patternName,$name)) {
      header("location:register.php?message=use more charachters");
  exit();
    }


 if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  header("location:register.php?message=email is invalid");
 exit(); 
}


$passwordPattern="/^[0-9]{5,}$/";

if (!preg_match($passwordPattern,$password)) {
  header("location:register.php?message=password is not suitable");
  exit();
}

$hashedPassword=password_hash($password,PASSWORD_DEFAULT);


  $query="insert into userz(name,email,password) values(:name,:email,:password)";

  $qyS=$connection->prepare($query);
  $qyS->bindParam(":name",$name,PDO::PARAM_STR);
  $qyS->bindParam(":email",$email,PDO::PARAM_STR);
  $qyS->bindParam(":password",$hashedPassword,PDO::PARAM_STR);
  $qyS->execute();
  


  header("location:register.php?logger=successful".urlencode($name).urldecode($email));

 exit();
}



if (isset($_POST["loginBtn"])) {
  $email=$_POST["email"];
  $password=$_POST["password"];

$query="select * from userz where email=:email and password=:password ";
$querySql=$connection->prepare($query);
$querySql->bindParam(":email",$email,PDO::PARAM_STR);
$querySql->bindParam(":password",$password,PDO::PARAM_STR);
$querySql->execute();
$fetched=$querySql->fetch(PDO::FETCH_ASSOC);




if(!$fetched || password_verify($password,$fetched['password'])){
header("location:login.php?error=user dosent exist");
exit();
}






$_SESSION["loginId"]=$fetched["id"];


header("location:profile.php?secMessage=login went successful");
exit();


}



if(isset($_POST["zitiBtn"])){

$dish="ZITI";
$amount=$_POST["ziti_amount"];
$float=(float)$amount;
$price= 30;

$total= $price * $float;
$id=$_SESSION["loginId"];
$query="insert into orders(dish,amount,price,total,user) values('$dish','$amount','$price','$total','$id')";
$querySql4=$connection->prepare($query);
$querySql4->execute();
header("location:profile.php?message=sccessful order".$amount);

}

if(isset($_POST["pramBtn"])){
  $dish1="parmesan";
  $amount1=$_POST["para_amount"];
  $float1=(float)$amount1;
  $price1=50;
  $total1=$price1 * $float1;
  $id1=$_SESSION["loginId"];
  $query1="insert into orders(dish,amount,price,total,user) values('$dish1','$amount1','$price1','$total1','$id1')";
  $querySql5=$connection->prepare($query1);
  $querySql5->execute();
  header("location:profile.php?message=we added your order successfully".$amount1);
}



if(isset($_POST["italianBtn"])){
$dish2="Italian Meatballs";
$amount2=$_POST["italian_amount"];
$float2=(float)$amount2;
$price2=55;
$total2=$price2 * $float2;
$id2=$_SESSION["loginId"];
$query2="insert into orders(dish,amount,price,total,user) values('$dish2','$amount2','$price2','$total2','$id2')";
$querySql=$connection->prepare($query2);
$querySql->execute();

header("location:profile.php?message=your Italian Meatballs order has been added up".$amount2);



}





if(isset($_POST["tortBtn"])){

$dish3="Tortellini";
$amount3=$_POST["soup_amount"];
$float3=(float)$amount;
$price3= 45;
$total3=$price3 * $float3;
$id3=$_SESSION["loginId"];
$query3="insert into orders(dish,amount,price,total,user) values('$dish3','$amount3','$price3','$total3','$id3')";
$querySql=$connection->prepare($query3);
$querySql->execute();
header("location:profile.php?message=your Tortellini has been added up".$amount3);



}


if(isset($_POST["lasaBtn"])){

  $dish4="lasagna";
  $amount4=$_POST["lasagna_amount"];
  $float4=(float)$amount4;
  $price4=150;
  $total4=$price4 * $float4;
  $id4=$_SESSION["loginId"];
$query4="insert into orders(dish,amount,price,total,user) values('$dish4','$amount4','$price4','$total4','$id4')";

$querySql=$connection->prepare($query4);
$querySql->execute();
header("location:profile.php?message=your lasagna order has been submited".$amount4);








}




?>  