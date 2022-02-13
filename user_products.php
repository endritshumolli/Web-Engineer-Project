
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
           width:100%;
           height: 100%;

        }
        .products{
            
            width:100%;
            height: auto;
            margin-top:20px;
            display:flex;
            flex-wrap:wrap;
        }
        .user_product{
            box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
           padding: 10px;
           padding-top: 25px;
           width: 235px;
           height:550px;
           border:2px inset lightgray;
           display:flex;
           flex-direction:column;
           margin:50px;
        }

    </style>
    
</head>
<body>
     <!-- Menyja -->
	<nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><img src="img/logo.png" alt=""></div>
        <ul class="links">
            <li><a href="home.php">HOME</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="projects.php">PROJECTS</a></li>
			<li><a href="login.php">LOGOUT</a></li>
            

        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <style>
        body{
            background-image: url(img/img7.jpg);
            max-width: 100%;
            background-repeat: no-repeat;
            height: auto;
        }
    
    </style>

    <br><br><br><br>
<h1 style= "text-align: center;" >Produktet e fundit nga Lenovo</h1> <br><br><br>
    <hr style="
    height: 12px;
    width:100%;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
    

<div class="products">

<?php  
$products = [
    "pr1" =>  ["name"=>"Kompjuter HAL3000 Alfa Gamer Pro 3060", "desc"=>"Baza e kompletit është pllaka MSI MAG B550 TOMAHAWK me chipset AMD B550 i pajisur me një procesor 6-bërthamor AMD Ryzen 5 5600X, i cili ka teknologji SMT për shumëfishim më të qetë me aftësinë për të përpunuar deri në 2 procese njëkohësisht në një bërthamë dhe është me kohë në 3.7 GHz ose deri në 4.6 GHz. në modalitetin turbo.","price"=>"1800","buy"=>"Buy Now"],
     "pr2" => ["name"=>"Kompjuter HAL3000 Alfa Gamer Pro 3060", "desc"=>"Baza e kompletit është pllaka MSI MAG B550 TOMAHAWK me chipset AMD B550 i pajisur me një procesor 6-bërthamor AMD Ryzen 5 5600X, i cili ka teknologji SMT për shumëfishim më të qetë me aftësinë për të përpunuar deri në 2 procese njëkohësisht në një bërthamë dhe është me kohë në 3.7 GHz ose deri në 4.6 GHz. në modalitetin turbo.","price"=>"2300","buy"=>"Buy Now"],
      "pr3" =>["name"=>"Kompjuter HAL3000 Alfa Gamer Pro 3060", "desc"=>"Baza e kompletit është pllaka MSI MAG B550 TOMAHAWK me chipset AMD B550 i pajisur me një procesor 6-bërthamor AMD Ryzen 5 5600X, i cili ka teknologji SMT për shumëfishim më të qetë me aftësinë për të përpunuar deri në 2 procese njëkohësisht në një bërthamë dhe është me kohë në 3.7 GHz ose deri në 4.6 GHz. në modalitetin turbo.","price"=>"898.99","buy"=>"Buy Now"],
      "pr4" => ["name"=>"Kompjuter HAL3000 Alfa Gamer Pro 3060", "desc"=>"Baza e kompletit është pllaka MSI MAG B550 TOMAHAWK me chipset AMD B550 i pajisur me një procesor 6-bërthamor AMD Ryzen 5 5600X, i cili ka teknologji SMT për shumëfishim më të qetë me aftësinë për të përpunuar deri në 2 procese njëkohësisht në një bërthamë dhe është me kohë në 3.7 GHz ose deri në 4.6 GHz. në modalitetin turbo.","price"=>"543.50","buy"=>"Buy Now"],
      "pr5" =>  ["name"=>"Kompjuter HAL3000 Alfa Gamer Pro 3060", "desc"=>"Baza e kompletit është pllaka MSI MAG B550 TOMAHAWK me chipset AMD B550 i pajisur me një procesor 6-bërthamor AMD Ryzen 5 5600X, i cili ka teknologji SMT për shumëfishim më të qetë me aftësinë për të përpunuar deri në 2 procese njëkohësisht në një bërthamë dhe është me kohë në 3.7 GHz ose deri në 4.6 GHz. në modalitetin turbo.","price"=>"800","buy"=>"Buy Now"],
     "pr6" => ["name"=>"Kompjuter HAL3000 Alfa Gamer Pro 3060", "desc"=>"Baza e kompletit është pllaka MSI MAG B550 TOMAHAWK me chipset AMD B550 i pajisur me një procesor 6-bërthamor AMD Ryzen 5 5600X, i cili ka teknologji SMT për shumëfishim më të qetë me aftësinë për të përpunuar deri në 2 procese njëkohësisht në një bërthamë dhe është me kohë në 3.7 GHz ose deri në 4.6 GHz. në modalitetin turbo.","price"=>"1250","buy"=>"Buy Now"],
      "pr7" =>["name"=>"Kompjuter HAL3000 Alfa Gamer Pro 3060", "desc"=>"Baza e kompletit është pllaka MSI MAG B550 TOMAHAWK me chipset AMD B550 i pajisur me një procesor 6-bërthamor AMD Ryzen 5 5600X, i cili ka teknologji SMT për shumëfishim më të qetë me aftësinë për të përpunuar deri në 2 procese njëkohësisht në një bërthamë dhe është me kohë në 3.7 GHz ose deri në 4.6 GHz. në modalitetin turbo.","price"=>"1560","buy"=>"Buy Now"],
      "pr8" => ["name"=>"Kompjuter HAL3000 Alfa Gamer Pro 3060", "desc"=>"Baza e kompletit është pllaka MSI MAG B550 TOMAHAWK me chipset AMD B550 i pajisur me një procesor 6-bërthamor AMD Ryzen 5 5600X, i cili ka teknologji SMT për shumëfishim më të qetë me aftësinë për të përpunuar deri në 2 procese njëkohësisht në një bërthamë dhe është me kohë në 3.7 GHz ose deri në 4.6 GHz. në modalitetin turbo.","price"=>"900","buy"=>"Buy Now"],
];

    include 'user_product.php';  

    foreach($products as $user_product){
        printProduct("img/pc.png",$user_product["name"],$user_product["desc"],$user_product["price"],$user_product["buy"]);
    }

    ?>

</div>
<?php

include 'footer.php' ?>

</body>
</html>