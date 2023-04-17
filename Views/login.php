<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Login</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <main class="d-flex flex-column align-items-center" style="height: 83.7vh;">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <div class="tittle mx-auto">
            <h2>Iniciar sesión</h2>
        </div>
        <form class="tittle mx-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" id="usuario" name="usuario" placeholder="Identificación" required><br><br>
            <input type="password" id="password" name="contrasena" placeholder="Password" required><br><br>
            <button type="submit" class="btn btn-primary btn-lg primaryButtonColors" id="Submit">Ingresar</button>
        </form>
        <?php
        require_once '../Controllers/LoginController.php';

        $controller = new LoginController();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $controller->validarLogin($_POST['usuario'], $_POST['contrasena']);
        }
        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>