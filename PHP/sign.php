<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <main class="d-flex flex-column align-items-center">
        <div class="tittle mx-auto">
            <h2>Registrarse</h2>
        </div>
        <form class="tittle mx-auto" action="sign.php" method="post">
            <input type="text" id="identificacion" name="identificacion" placeholder="Identificación" required><br><br>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br><br>
            <input type="text" id="telefono" name="telefono" placeholder="Telefono" required><br><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>
            <input type="password" id="password2" name="password2" placeholder="Confirmar Password" required><br><br>
            <div class="fixed-top"></div>
            <button class="btn btn-primary btn-lg primaryButtonColors" id="Submit">Ingresar</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
    <script src="../app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>