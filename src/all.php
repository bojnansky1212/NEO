<?php

$files = scandir("./");

foreach($files as $file){
    if(preg_match('/\.php/', $file)){
        echo "<a style='font-size:20px' href='./".$file."'>".$file."</a>";
        echo "<br>";
    }
}