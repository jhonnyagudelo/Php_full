<?php 

if(isset($_COOKIE['font-size'])){
    $tamano = htmlspecialchars($_COOKIE['font-size']) ;
}else{
    $tamano = '20px';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: <?php echo $tamano; ?>;
        }
    </style>
</head>
<body>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quas sint maxime, iure eius ratione rerum beatae error! Neque omnis nostrum doloribus minus animi voluptates, explicabo molestiae officiis vero nulla.
</body>
</html>