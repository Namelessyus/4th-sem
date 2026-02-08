<?php
$file = fopen("hello.txt", "r");
$content = fread($file, filesize("hello.txt"));
echo $content;
fclose($file);