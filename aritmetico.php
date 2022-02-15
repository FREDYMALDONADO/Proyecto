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
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];
$operacion=$_POST['operacion'];


switch ($operacion){


    case's';
    //echo $valor1+$valor2;
    $op=$valor1+$valor2;
    $nombre_op="Suma";
    break;

    case'r';
    //echo $valor1-$valor2;
    $op=$valor1-$valor2;
    $nombre_op="Resta";
    break;

    case'm';
    //echo $valor1*$valor2;
    $op=$valor1*$valor2;
    $nombre_op="Multiplicacion";
    break;

    case'd';
    //echo $valor1/$valor2;
    $op=$valor1/$valor2;
    $nombre_op="Division";
    break;
}

?> 
<div class="container"><br/>
<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <td>valor1[<?php echo $valor1 ?>]</td>
            <td>valor2[<?php echo $valor2 ?>]</td>
        </tr>
        <tr>
            <th>Operacion</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td><?php echo $nombre_op ?></td>
            <td><?php echo $op ?></td>
        </tr>
    </tbody>
</table>
</diV>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>