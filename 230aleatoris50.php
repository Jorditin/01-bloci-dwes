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
$arrayNumeros=[];
for($i=0;$i<=50;$i++){
    $arrayNumeros[$i]=rand(0,100);
    echo $arrayNumeros[$i];
}
?>
</body>
</html>