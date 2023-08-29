<!DOCTYPE html>
<html lang="en">

<head>
  <title>comentarios</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- ========== Bootstrap Icons ========== -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <?php
    include("./partials/navbar.html");
    ?>

  <header>
    <!-- place navbar here -->

  </header>
  <main>
    <div class="container h-100" style="padding-top: 4rem;">
      <div class="row justify-content-center align-item-center h-100">

        <div class="col-12 col-sm-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">correo electrónico</th>
                    <th scope="col">teléfono</th>
                    <th scope="col">comentario</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  require("./connection/connection.php");

                  $query = "SELECT * FROM comentarios";

                  $ejecutar = mysqli_query($connection, $query);

                  $contador = 1;

                  while ($fila = mysqli_fetch_array($ejecutar)) {

                ?>
                      <tr>
                          <td>
                              <?php echo $contador; ?>
                          </td>
                          <td>
                              <?php echo $fila[ 'nombre' ]; ?>
                          </td>
                          <td>
                              <?php echo $fila[ 'apellido' ]; ?>
                          </td>
                          <td>
                              <?php echo $fila[ 'email' ]; ?>
                          </td>
                          <td>
                              <?php echo $fila[ 'telefono' ]; ?>
                          </td>
                          <td>
                              <?php echo $fila[ 'comentario' ]; ?>
                          </td>
                          <td><a href="./view/update_comentario.php?id_comentario=<?php echo $fila[ 'id_comentario' ]; ?>"><i class="bi bi-pencil-square text-warning"></i></a></td>
                          <td><a href="./function/delete.php?id_comentario=<?php echo $fila[ 'id_comentario' ]; ?>"><i class="bi bi-trash2-fill text-danger"></i></a></td>
                        </tr>
                      <?php $contador++;
                  } ?>
                </tbody>
              </table>
              </div>
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
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>