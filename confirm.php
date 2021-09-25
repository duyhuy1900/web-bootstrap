<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/confirm.css">
    <title>Order</title>
</head>

<body>
    
    <main>
        <div class="container">
            <div class="row bg">
                <div class="col-md-12 text-center posit">
                    <h2>Fill this form to confirm your order</h2>
                </div>
                <div class=" col-md-12 menu-chos">
                    <form style="margin-block: 3em;" action="">
                        <fieldset class="form-c">
                            <legend>Selected Food</legend>
                            <div class="">
                                <img src="img/menu-pizza.jpg" alt="">
                            </div>
                            <div class="left-c">
                                <h3 style="margin-bottom :6px;">Food Title</h3>
                                <strong>$2.3</strong>
                                <br>
                                <strong>Quantity</strong>
                                <br><br>
                                <input class="quantity" type="number" value="1">
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="information">
                    <form style="width:478px; height:auto" action="">
                        <fieldset class="form-in">
                            <legend>Delivery Details</legend>
                            <label for="fname">Full Name</label><br>
                            <input type="text" id="fname" name="fname" value="" placeholder="abc"><br>
                            <label for="phone">Phone Number</label><br>
                            <input type="tel" id="phone" name="lname" value="" placeholder="09878xxx"><br>
                            <label for="email">Email</label><br>
                            <input type="email" id="email" name="fname" value="" placeholder="xxx@gmail.com"><br>
                            <label for="adress">Adress</label><br>
                            <input type="text" id="adress" name="fname" value="" placeholder="Ha noi"><br><br>
                            <button class="submit" type="button">Confirm Order</button>
                        </fieldset>
                    </form>
                </div>
            </div>


        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>