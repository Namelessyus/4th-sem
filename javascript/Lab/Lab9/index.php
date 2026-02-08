<?php

$file = fopen("hello.txt", "w");
fwrite($file, "Hello, All! DAV");
fclose($file);
?>