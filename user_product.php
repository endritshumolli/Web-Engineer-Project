<?php

function printProduct($src,$name,$description,$price,$buy){

    echo "
     <div class='user_product'>
        <img src='$src'>
        <br> <br>
        <h3>$name</h3>
        <p>$description</p>
        <h1>$price$</h1>
        <a href='../contactform/contact.php'><h2 style= color:black; >Buy Now</h2></a>
        

     </div>
    
    ";
};

?>
