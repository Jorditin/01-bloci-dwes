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
$a=12;
$b=7;
$c=26;
if($a>$b&&$a>$c){
    echo "La variable a es la major";
}
else if($b>$a&&$b>$c){
    echo "La variable b es la major";
}
else if($c>$a&&$c>$b) {
    echo "La variable c es la major";
}

?>
</body>
</html>