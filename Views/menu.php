<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Menú | Formulario</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <main class="d-flex flex-column align-items-center" style="height: 83.7vh;">
        <h1>Selecciona una opción:</h1>

        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="Asignar.php">
                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <lord-icon src="https://cdn.lordicon.com/iltqorsz.json" trigger="hover" colors="primary:#FFE7CC,secondary:#f8cba6" style="width: 150px; height: 150px">
                </lord-icon>
            </a>
            <p>Asignar caso</p>
            <a href="Casos.php">
                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="hover" colors="primary:#FFE7CC,secondary:#f8cba6" style="width: 150px; height: 150px">
                </lord-icon>
            </a>
            <p>Buscar caso</p>
            <a href="Usuarios.php">
                <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <lord-icon src="https://cdn.lordicon.com/eszyyflr.json" trigger="hover" colors="primary:#FFE7CC,secondary:#f8cba6" style="width: 150px; height: 150px">
                </lord-icon>
            </a>
            <p>Buscar usuario</p>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>