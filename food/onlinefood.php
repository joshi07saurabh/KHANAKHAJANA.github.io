
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>KHANA KHAJANA.com</title>
  </head>
  <body>
<?php
$con = mysqli_connect("localhost","root");
if($con){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Order has been Confirmed!</strong>
    
  </div>';
}
else{
    echo "Not successful";
}
mysqli_select_db($con,"onlinefood");
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$choice=$_POST["choice"];

$query="insert into onlinefood (name,email,phone,address,choice) values ('$name','$email','$phone','$address','$choice')";
mysqli_query($con,$query);
?>
</body>
</html>