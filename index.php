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
<form action="" method="get">
    <input type="text" name="nSNT">
    <button type="submit">In n So NT</button>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $nSNT = $_GET["nSNT"];

    }

function checkSNT($numcheck){
    for($i=2; $i<$numcheck;$i++){
        if ($numcheck%$i ==0){
            return false;
        }
    }
    return true;
}
function printSNT(){
    $dem = 0;
    $i =2;
    while ($dem < $GLOBALS["nSNT"]){
        if(checkSNT($i)){
            echo $i." ";
            $dem++;
        }
        $i++;
    }
}
printSNT();
?>
</body>
</html>
