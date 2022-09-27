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
<table class="default">
<?php
$arrayPersones=[["nom"=>"Aitor","altura"=>182,"email"=>"aitor@correo.com"],
["nom"=>"Pepita","altura"=>172,"email"=>"pepita@correo.com"],
    ["nom"=>"Manolo","altura"=>174,"email"=>"manolo@correo.com"],
    ["nom"=>"Raul","altura"=>178,"email"=>"raul@correo.com"],
["nom"=>"Mike","altura"=>185,"email"=>"mike@correo.com"]];


foreach($arrayPersones as $persona) {
    foreach ($persona as $valor) {
        echo "<tr><td>$valor</td></tr>";
        }
}

?>
</table>
</body>
</html>
