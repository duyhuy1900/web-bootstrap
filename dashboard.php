<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Order</title>
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>  
    </header>
    <main>
        <div class="container bg-c">
            <div class="row tit">
                <h3>Dashboard</h3>
            </div>
            <div class="row bg">
                <div class="col-2 att">
                    <strong>4</strong>
                    <p>Categories</p>
                </div>
                <div class="col-2 att">
                    <strong>6</strong>
                    <p>Foods</p>
                </div>
                <div class="col-2 att">
                    <strong>3</strong>
                    <p>Total Orders</p>
                </div>
                <div class="col-2 att">
                    <strong>$36.00</strong>
                    <p>Revenue Generated</p>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>