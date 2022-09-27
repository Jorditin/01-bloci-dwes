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
<?php
$quantitat=2;
    for($i=0;$i<=$quantitat;$i++){
?>
Nombre:
<input type="text" name="nombre" id="nombre" maxlength="50"><br>
Apellido:
<input type="text" name="altura" id="altura" ><br>
Email:
<input type="text" name="email" id="email" ><br>


<?php
}
?>
<button type="submit">Haz Click¡</button>
</body>
</html>