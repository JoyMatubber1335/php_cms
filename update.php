<?php

include "db.php";
include "function.php";

if(isset($_POST["submit"]))
{
//     $username=$_POST["username"];
//     $password=$_POST["password"];
//     $id=$_POST['id'];
//     $query="Update users SET ";
//      $query .= "username='$username', ";

//      $query .="password='$password' ";
//      $query .="where id=$id ";
//     $result=mysqli_query($conn,$query);
//    if(!$result)
//    {
//            die("query faid".mysqli_error($conn));
//  }
UpdateTable();

 
}
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

<div class="container">
<div class="col-xs-6">

<form action="update.php" method="post">
<div class="form-group"> 
    <label for="username">Username</label>
    <input type="text" name =" username"class="form-control">
</div>
<div class="form-group">
<label for="password">Password</label>
    <input type="text" name ="password" class="form-control">
</div>


    <!-- <input class ="btn btn-primary" type="submit" name ="submit" value="Submit"> -->

<div class="form-group">

<select name="id" id="">
    <?php

    showAllData();

    ?>




</select>
</div>

<input class ="btn btn-primary" type="submit" name ="submit" value="UPDATE">

</div>

</form>






</div>
    
</body>
</html>