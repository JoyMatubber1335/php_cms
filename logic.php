<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //   if(4==="4")
    //   {
    //     echo "yes";
    //   }
    //   else{
    //     echo "NO";
    //   }
//    $num=3;

//    switch($num)
//    {
//     case 1:
//         echo "joy win";
//         break;
//     case 2:
//         echo "jawad win";
//         break;
//     case 3:
//         echo "vai win";
//         break;
//     default:
//      echo "opsss" ;

//    }

/// loop /// 
//  $num=0;
// while(1)
// {
//     if($num>10)
//     {
//         break;
//     }
//     else{
//         echo "Joy Matubber";
//         $num+=1;
//     }
//     echo "<br>";
// }

// for($i=0;$i<5;$i++)
// {
//     echo "bs23</br>";
     
// }


$x=5;

function s()
{
   global $x; $x=4;
}
echo $x;
echo "<br>";
s();
echo $x;
echo "<br>";


    ?>
</body>
</html>