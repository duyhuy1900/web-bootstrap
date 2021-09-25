<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Manage User</title>
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <main>
        <div class="container bg-secondary bg-gradient bg-opacity-25">
            <h1>Manage Users</h1>
            <button type="button" class="btn btn-primary">Add New User</button>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Arserio Leach</td>
                        <td>toduwaxobi</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button> <button type="button" class="btn btn-success">Update Admin</button> <button type="button" class="btn btn-danger">Delete Admin</button></td>

                    </tr>
                    <tr>

                        <th scope="row">2</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button> <button type="button" class="btn btn-success">Update Admin</button> <button type="button" class="btn btn-danger">Delete Admin</button></td>

                    </tr>
                    <tr>

                        <th scope="row">3</th>
                        <td>Vijay Thapa</td>
                        <td>vijaythapa</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button> <button type="button" class="btn btn-success">Update Admin</button> <button type="button" class="btn btn-danger">Delete Admin</button></td>

                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Administrator</td>
                        <td>admin</td>
                        <td><button type="button" class="btn btn-primary">Change Password</button> <button type="button" class="btn btn-success">Update Admin</button> <button type="button" class="btn btn-danger">Delete Admin</button></td>

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