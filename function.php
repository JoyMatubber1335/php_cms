<?php
include "db.php";
function showAllData()
{
    global $conn;
 $query="Select * from users";
$result=mysqli_query($conn,$query);;

if(!$result)
{
echo "unable to connect";
}

while($row =mysqli_fetch_assoc($result))
{
   $id=$row['id'];
  echo "<option value='$id'>$id</option>";
}
}

function UpdateTable()
{ 

   global $conn;
   $username=$_POST["username"];
    $password=$_POST["password"];
    $id=$_POST['id'];
    $query="Update users SET ";
     $query .= "username='$username', ";

     $query .="password='$password' ";
     $query .="where id=$id ";
    $result=mysqli_query($conn,$query);
   if(!$result)
   {
           die("query faid".mysqli_error($conn));
 }

}







?>