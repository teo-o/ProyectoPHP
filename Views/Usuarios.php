<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Buscar Usuarios</title>
</head>

<body>
    <?php
    require_once '../Controllers/EmpleadoController.php';

    $empleadoController = new EmpleadoController();
    $empleados = $empleadoController->mostrarEmpleados();
    ?>

    <?php include 'header.php'; ?>
    <main class="d-flex flex-column align-items-center" style="height: 83.7vh;">
        <div class="tittle mx-auto">
            <h2>Usuarios</h2>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Opcion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($empleados as $empleado) {
                    echo "<tr>";
                    echo "<td>" . "<input type='text' value='" . $empleado->getId() . "'>" . "</td>";
                    echo "<td>" . "<input type='text' value='" . $empleado->getNombre() . "'>" . "</td>";
                    echo "<td>" . "<input type='text' value='" . $empleado->getApellido() . "'>" . "</td>";
                    echo "<td>" . "<input type='text' value='" . $empleado->getEmail() . "'>" . "</td>";
                    echo "<td>";
                    echo "<a href='' class='btn btn-primary'>Editar</a>";
                    echo "<a href='' class='btn btn-danger'>Eliminar</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </main>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>