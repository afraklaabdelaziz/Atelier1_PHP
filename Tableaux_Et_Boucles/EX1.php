<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tech=array("git"=>"GIT&GITHUB","C"=>"Langage C","front"=>"HTML&CSS","back"=>"PHP","dyn"=>"JAVASCRIPT");
    echo "les technologies que nous allons apprendre cette année sont: <br>";
    foreach($tech as $key=>$value) {
       echo  " <ul> <li>$value</li> <br> </ul>";
   }
 ?>
</body>
</html>