<?php

$file = fopen("hello.txt", "a");
fwrite($file, "\nIts just a sample code.\n");
fclose($file);
?>