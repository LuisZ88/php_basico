<?php
session_start();
if ($_SESSION) {
    header("Location: index.php");
}
if ($_POST) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "admin") {
        echo "Bienvenido";
        $_SESSION['username'] = "admin";
        header("Location: index.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Iniciar sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Username: <input class="form-control" type="text" name="username"><br>
                            Password: <input type="password" class="form-control" name="password"><br>
                            <input type="submit" class="btn btn-success" value="Login">
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
    </div>
    </div>

    </div>
</body>

</html>