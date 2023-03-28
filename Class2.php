
<?php

class Car
{
  function move(){
   echo "move please";
  }
}


if(method_exists("Car","move"))
{
    echo "Yes  Method exists";
}
else{
    echo "Not methode  exist";
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>