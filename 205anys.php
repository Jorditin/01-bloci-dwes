<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>205anys</title>
</head>
<body>
Anys:
<input type="number" name="any" id="any" maxlength="50"><br>
<button onclick="calcular()">Haz Click¡</button>
<?php
$Any=document.getElementById("any").value;
$mesanys=$Any+10;
$menysanys=$Any-10;

function calcular()
{
    echo "Deu anys mes:" + $mesanys;
    echo "Deu anys menys:" + $menysanys;
}
?>
</body>
</html>