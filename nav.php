<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/nav.css?<?php echo time(); ?>">


</head>

<body>
   
    <nav>
        <h2 class="logo">Face<span>Off</span></h2>
        <ul>
            <li><a href="home.php">Home</a></i>
            <li><a href="#">Servies <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="#">Mouse <i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="low-mouse.php">Budget</a></li>
                                    <li><a href="high-mouse.php">Flagship</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Keyboard <i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="low-keyboard.php">Budget</a></li>
                                    <li><a href="high-keyboard.php">Flagship</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Headphone <i class="fas fa-caret-right"></i></a>
                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="low-headphone.php">Budget</a></li>
                                    <li><a href="high-headphone.php">Flagship</a></li>
                                </ul>
                            </div>
                        </li>
                </div>
            <li><a href="home.php#about">About Us</a></li>
            <li><a href="home.php#contact">Connect</a></li>
        </ul>
        <button type="button" class="btn"><a href="Login.php"><i class="fa-solid fa-user"></i></a></button>
    </nav>
</body>

</html>