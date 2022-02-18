<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Recibe aritmeticos</title>
</head>

<body>
    <?php
    $nombre = $_POST['nombre'];
    $costo = $_POST['costo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $minimo = $_POST['minimo'];



    ?>
    <div class="container"><br>
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <th>Nombre</th>
                    <th>Costo</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Stock Minimo</th>
                </tr>
                <tr>
                    <td><?php echo $nombre ?></td>
                    <td>$<?php echo $costo ?></td>
                    <td>$<?php echo $precio ?></td>
                    <td><?php echo $stock ?></td>
                    <td><?php echo $minimo ?></td>

                </tr>
            </tbody>
        </table>
    </diV>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

