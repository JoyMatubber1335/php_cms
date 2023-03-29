<?php
$file ="joy.txt";


if($handle=fopen($file,"w"))
{

fwrite($handle,"i lovw php ");
fclose($handle);

}
else{
    echo "file not found";

}




?>