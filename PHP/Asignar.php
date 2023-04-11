<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Asignar casos</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <main class="d-flex flex-column align-items-center" style="height: 83.7vh;">
        <div class="tittle mx-auto">
            <h2>Casos</h2>
        </div>

        <form action=".php" method="post">
            Analista:
            <select>

                Número de caso:
                <input type="number" name="numcaso" id="numcaso">
                Fecha:
                <input type="date" name="date" id="date">

                <button type="submit" class="btn btn-primary btn-lg primaryButtonColors" id="Submit">Guardar</button>
                <button type="reset" class="btn btn-lg secondaryButtonColors" id="Secondbutton">Cancelar</button>
        </form>
    </main>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>