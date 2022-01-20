<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<a href="EX1.php/?monNom=afrakla&monPrenom=abdealziz">dis moi Bonjour</a>
<br>
<?php
isset($_GET['monNom']);
isset($_GET['monPrenom']);
echo "Bonjour\t".$_GET['monNom']."\t".$_GET['monPrenom'];
?>
</body>
</html>