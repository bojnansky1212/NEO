<?php

$files = scandir("./");

foreach($files as $file){
    if(preg_match('/\.php/', $file)){
        echo "<a href='./".$file."'>".$file."</a>";
        echo "<br>";
    }
}