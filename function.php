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

?>