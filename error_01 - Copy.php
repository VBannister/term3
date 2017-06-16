<?php

if(!file_exists("welcome.txt"))

{

die("File not found");

}

else

{

$file=fopen("welcome.txt","r");

}

function customError($errno, $errstr)

{

echo "<b>Error:</b> [$errno] $errstr<br />";

echo "Terminating script";

die();

}