<?php
include "db.php";



function Create()
{
   global $conn;
   if(isset($_POST["submit"]))
   {
       $username=$_POST["username"];
       $password=$_POST["password"];
       $username=mysqli_real_escape_string($conn,$username);
       $password=mysqli_real_escape_string($conn,$password);
  // password encript 
      //  $hashFormet="$2y$10$";
       $salt="iusesomecrazystrings22";
      //  $hashF_and_salt = $hashFormet . $salt;
       $password=crypt($password,$salt);

       
       $query="insert into users(username,password)";
       $query .= "values('$username','$password')";
   
       $result=mysqli_query($conn,$query);
       if(!$result)
       {
   echo "Unable to connect";
       }
       else{
         echo "Added value";
       }
      
   
   
       
   }
}

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
 else{
   echo "Value Updated";
 }

}

function DeleteRows()
{ 

   global $conn;
   $username=$_POST["username"];
    $password=$_POST["password"];
    $id=$_POST['id'];
    $query="Delete from users ";
     $query .="where id=$id ";
    $result=mysqli_query($conn,$query);
   if(!$result)
   {
           die("query faid".mysqli_error($conn));
 } 
 else{
   echo "Value Deleted";
 }

}







?>