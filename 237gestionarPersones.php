<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="237llegirPersones.php"></form>
<?php
$arrayPersonas=[];
$quantitat=2;
for($arrayPersonas;$arrayPersonas<$quantitat;$arrayPersonas++) {
    $arrayPersonas=[
    [$nombre = $_GET("nombre".$arrayPersonas)],
    [$altura = $_GET("altura".$arrayPersonas)],
    [$Email = $_GET("email".$arrayPersonas)]
    ];
}
?>
</body>
</html>
