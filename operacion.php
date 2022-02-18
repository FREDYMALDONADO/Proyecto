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



if ($valor1 == $valor2) {
    $op="VERDADERO";
    $tipo="igual";
}elseif ($valor1 <> $valor2) {
    $op="VERDADERO";
    $tipo="Diferente";
}elseif ($valor1 > $valor2) {
    $op="VERDADERO";
    $tipo="Mayor que";
}elseif ($valor1 < $valor2) {
    $op="VERDADERO";
    $tipo="Menor que";
}elseif ($valor1 >= $valor2) {
    $op="VERDADERO";
    $tipo="Mayor o igual";
}elseif ($valor1 <= $valor2) {
    $op="VERDADERO";
    $tipo="Menor que";
}else {
    $op="Falso";
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
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>El valor1 <?php echo $valor1 ?> es: <?php echo $tipo ?> a valor2: <?php echo $valor2 ?></td>
            <td><?php echo $op ?></td>
        </tr>
    </tbody>
</table>
</diV>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>