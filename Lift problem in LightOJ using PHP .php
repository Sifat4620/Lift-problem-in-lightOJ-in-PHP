<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lift problem in LightOJ</title>
</head>
<body>

<?php

echo '<h1>Lift problem in lightOJ</h1>';

$my_floor= 5 ;
$lift_floor=5;

if($my_floor>$lift_floor){
$result= ($my_floor-$lift_floor)*4 + $my_floor*4 +19;
echo 'total time :'. $result;
}
else if($lift_floor>$my_floor){
    $result= ($lift_floor-$my_floor)*4 + $my_floor*4 +19;
    echo 'total time :' .$result;
    }
else{
    $result=$my_floor*4 +19;
    echo 'total time :'. $result;
}

?>
    
</body>
</html>