<!DOCTYPE html>
<meta charset="UTF-8">

<?php

    $menuItems = include "config.php";

    echo "<ul>";
    foreach ($menuItems as $key => $value){
        $resultStr = '<li><a href="'.$key.'">'.$value.'</a></li>';
        echo $resultStr;
    }
    echo "</ul>";

?>