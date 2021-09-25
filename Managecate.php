<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Manage Category</title>
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <main>
        <div class="container bg-secondary bg-gradient bg-opacity-25">
            <h1>Manage Category</h1>
            <button type="button" class="btn btn-primary">Add Category</button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Active</th>
                        <th scope="col">Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pizza</td>
                        <td><img style="width: 110px; height:120px;" src="img/pizza.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td><button type="button" class="btn btn-success">Update Category</button>  <button type="button" class="btn btn-danger">Delete Category</button></td>

                    </tr>
                    <tr>
                    <th scope="row">2</th>
                        <td>Burger</td>
                        <td><img style="width: 110px; height:120px;" src="img/burger.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td><button type="button" class="btn btn-success">Update Category</button>  <button type="button" class="btn btn-danger">Delete Category</button></td>

                    </tr>
                    <tr>
                    <th scope="row">3</th>
                        <td>MoMo</td>
                        <td><img style="width: 110px; height:120px;" src="img/momo.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td><button type="button" class="btn btn-success">Update Category</button>  <button type="button" class="btn btn-danger">Delete Category</button></td>

                    </tr>
                    <tr>
                    <th scope="row">4</th>
                        <td>Quis est ipsum id id</td>
                        <td><img style="width: 110px; height:120px;" src="img/menu-momo.jpg" alt=""></td>
                        <td>No</td>
                        <td>Yes</td>
                        <td><button type="button" class="btn btn-success">Update Category</button>  <button type="button" class="btn btn-danger">Delete Category</button></td>

                    </tr>
                  
                </tbody>
            </table>
        </div>

    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>