<!DOCTYPE html>
<html lang="en">
<head>
    <title>Header</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
    
</head>
<body>

    <!-- Menyja -->
	<nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><img src="../view/img/logo.png" alt=""></div>
        <ul class="links">
			<li><a href="view.php">DASHBOARD</a></li>
            <li><a href="create.php">CREATE A USER</a></li>
            <li><a href="../view/logout.php">LOGOUT</a></li>

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
        .container {
    position: relative;
}

.container img {
    display: block;
    width: 100%;
}

nav {
    position: absolute;
    z-index: 10;
    left: 0;
    right: 0;
    top: 0;
    height: 130px;
    background-color: #0072ff;
    padding: 0 5%;
}

.logo img {
    float: left;
    width: 7%;
    margin-top: 35px;
    height: auto;
    display: flex;
    align-items: center;
}

nav .links {
    float: right;
    padding: 0;
    margin: 0;
    width: 60%;
    height: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

nav .links a:hover {
	color: red;
	transition: all .5s ease-in-out;
}

nav .links li {
    list-style: none;
}

nav .links a {
    display: block;
    padding: 1em;
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 16px;
    background-color: rgba(0, 0, 0, .1);
}

#nav-toggle {
    position: absolute;
    top: -100px;
}

nav .icon-burger {
    display: none;
    position: absolute;
    right: 5%;
    top: 50%;
    transform: translateY(-50%);
}

nav .icon-burger .line {
    width: 30px;
    height: 5px;
    background-color: #fff;
    margin: 5px;
    border-radius: 3px;
}

@media screen and (max-width: 768px) {
	.logo img {
		width: 15%;
	}
	
    nav .links {
        float: none;
        position: fixed;
        z-index: 9;
        left: 0;
        right: 0;
        top: 70px;
        bottom: 100%;
        width: auto;
        height: auto;
        flex-direction: column;
        background-color: rgba(0, 0, 0, .8);
        overflow: hidden;
        box-sizing: border-box;
        transition: all .5s ease-in-out;
    }
    nav .links a {
        font-size: 20px;
    }
    nav :checked~.links {
        bottom: 0;
    }
    nav .icon-burger {
        display: block;
    }
}
    </style>
</body>
</html>