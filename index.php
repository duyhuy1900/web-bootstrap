<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Restaurant</title>
</head>

<body>
    <header>
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="col-md-6">
                    <ul class="nav mg-top">
                        <li class="nav-item">
                            <a class="nav-link color-t" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color-t" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color-t" href="#">Foods</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link color-t">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row banner">
                <div class="col-md-12">
                    <form action="" method="POST">
                        <input class="input-s" type="search" name="search" placeholder="Search for Food.." required>
                        <input type="submit" name="submit" value="Search" class="btn btn-primary search-s">
                    </form>
                </div>

            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h3 style="font-weight: bold;text-align: center;margin-top: 3%; margin-bottom: 3%;font-size:30px;">Explore Foods</h3>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="d-flex flex-column text-center ">
                        <div class="positi">
                            <img style=" object-fit: cover;border-radius: 10px;" src="./img/pizza.jpg" />
                            <h2 class="heading">
                                Pizza
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="d-flex flex-column text-center ">
                        <div class="positi">
                            <img style=" object-fit: cover;border-radius: 10px;" src="./img/burger.jpg" />
                            <h2 class="heading">
                                Burger
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="d-flex flex-column text-center ">
                        <div class="positi">
                            <img style=" object-fit: cover;border-radius: 10px;" src="./img/momo.jpg" />
                            <h2 class="heading">
                                Momo
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg">
            <h3 class="" style="margin-left:45%"><strong>Food Menu</strong></h3>
            <div class=" row list-menu">
                <div class="menu-f col-12 col-sm-6 col-md-4 p-2">
                    <div class="nav-menu">
                        <img src="img/menu-pizza.jpg" alt="">
                    </div>
                    <div class="decreption">
                        <h3 style="margin-bottom :6px;">Food Title</h3>
                        <strong>$2.3</strong>
                        <p>Made with Italian Sauce,Chicken,and organice vegetables</p>
                        <a href="" class="btn-order">Order Now</a>
                    </div>
                </div>
                <div class="menu-f col-12 col-sm-6 col-md-4 p-2">
                    <div class="nav-menu">
                        <img src="img/menu-burger.jpg" alt="">
                    </div>
                    <div class="decreption">
                        <h3 style="margin-bottom :6px;">Smoky Burger</h3>
                        <strong>$2.3</strong>
                        <p>Made with Italian Sauce,Chicken,and organice vegetables</p>
                        <a href="" class="btn-order">Order Now</a>
                    </div>
                </div>
                <div class="menu-f col-12 col-sm-6 col-md-4 p-2">
                    <div class="nav-menu">
                        <img src="img/menu-burger.jpg" alt="">
                    </div>
                    <div class="decreption">
                        <h3 style="margin-bottom :6px;">Nice Burger</h3>
                        <strong>$2.3</strong>
                        <p>Made with Italian Sauce,Chicken,and organice vegetables</p>
                        <a href="" class="btn-order">Order Now</a>
                    </div>
                </div>
                <div class="menu-f col-12 col-sm-6 col-md-4 p-2">
                    <div class="nav-menu">
                        <img src="img/menu-pizza.jpg" alt="">
                    </div>
                    <div class="decreption">
                        <h3 style="margin-bottom :6px;">Food Title</h3>
                        <strong>$2.3</strong>
                        <p>Made with Italian Sauce,Chicken,and organice vegetables</p>
                        <a href="" class="btn-order">Order Now</a>
                    </div>
                </div>
                <div class="menu-f col-12 col-sm-6 col-md-4 p-2">
                    <div class="nav-menu">
                        <img src="img/menu-pizza.jpg" alt="">
                    </div>
                    <div class="decreption">
                        <h3 style="margin-bottom :6px;">Food Title</h3>
                        <strong>$2.3</strong>
                        <p>Made with Italian Sauce,Chicken,and organice vegetables</p>
                        <a href="" class="btn-order">Order Now</a>
                    </div>
                </div>
                <div class="menu-f col-12 col-sm-6 col-md-4 p-2">
                    <div class="nav-menu">
                        <img src="img/menu-momo.jpg" alt="">
                    </div>
                    <div class="decreption">
                        <h3 style="margin-bottom :6px;">Chicken Steam Momo</h3>
                        <strong>$2.3</strong>
                        <p>Made with Italian Sauce,Chicken,and organice vegetables</p>
                        <a href="" class="btn-order">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  p-2 see text-center">
                    <a href="">See All Foods</a>
                </div>

            </div>
        </div>


    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12  p-2 text-center icon">
                    <ul>
                        <li class="d-inline"><a href=""><img src="https://img.icons8.com/color/48/000000/facebook-circled--v5.png" /></a></li>
                        <li class="d-inline"><a href=""><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png" /></a></li>
                        <li class="d-inline"><a href=""><img src="https://img.icons8.com/color/48/000000/twitter.png" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-2 text-center f-t">
                    <p>All rights reserved.Designed By <a href="">CES.TLU</a></p>
                </div>
            </div>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>