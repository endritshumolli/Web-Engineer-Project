<?php

function printProduct($src,$name,$description,$price){

    echo "
     <div class='product'>
        <img src='$src'>
        <br> <br>
        <h3>$name</h3>
        <p>$description</p>
        <h1>$price$</h1>

     </div>
    
    ";
};

?>
