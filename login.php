<?php
include "db.php";
include "function.php";

Create();


 


 

?>
<?php

include "include/header.php";
?>





<div class="container">
<div class="col-xs-6">
    <h1 class ="text-center">Create</h1>

<form action="login.php" method="post">
<div class="form-group"> 
    <label for="username">Username</label>
    <input type="text" name =" username"class="form-control">
</div>
<div class="form-group">
<label for="password">Password</label>
    <input type="text" name ="password" class="form-control">
</div>


    <input class ="btn btn-primary" type="submit" name ="submit" value="Submit">



</form>
</div>





<?php 

include "include/footer.php";
?> 