<?php
// print_r($_GET);

$id_comentario = $_GET[ 'id_comentario' ];

require("../connection/connection.php");

$query = "SELECT * FROM comentarios WHERE id_comentario = $id_comentario";

$ejecutar = mysqli_query($connection, $query);


$fila = mysqli_fetch_array($ejecutar);

?>

<!doctype html>
<html lang="en">

<head>
    <title>actualizar comentario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-6">
                    <div class="card">
                        <h3>Actualizar comentario</h3>
                        <div class="card-body">
                            <form action="./function/update.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input name="nombre" value="<?php echo $fila[ 'nombre' ]; ?>" type="text"
                                        class="form-control">
                                </div>
                                <label class="form-label">apellido</label>
                                    <input name="apellido" value="<?php echo $fila[ 'apellido' ]; ?>" type="text"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo electrónico</label>
                                    <input name="email" value="<?php echo $fila[ 'email' ]; ?>" type="email"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Teléfono</label>
                                    <input name="telefono" value="<?php echo $fila[ 'telefono' ]; ?>" type="number"
                                        class="form-control">
                                </div>
                                <label class="form-label">comentario</label>
                                    <input name="comentario" value="<?php echo $fila[ 'comentario' ]; ?>" type="text"
                                        class="form-control">
                                </div>
                                <input type="hidden" name="id_comentario" value="<?php echo $fila[ 'id_comentario' ]; ?>">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>