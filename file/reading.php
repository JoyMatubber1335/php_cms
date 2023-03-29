<?php
$file ="joy.txt";


if($handle=fopen($file,"r"))
{

echo $content= fread($handle,filesize($file)); //100 how many char
fclose($handle);

}
else{
    echo "file not found";

}




?>