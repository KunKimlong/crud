<?php 

    $connection = new mysqli('localhost','root','','db-php-12-1');

    if($connection){
        echo "Success";
    }
    else{
        echo "not success";
    }