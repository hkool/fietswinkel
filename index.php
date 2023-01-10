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
    include("Fiets.php");
    $fiets = new Fiets(2,"Gazelle","zwart");
    echo '<h1>'.$fiets->getMerk().'</h1>';
    $fiets->setImage("oranje.png");
    echo "<br />";
    echo "<img src='".$fiets->getImage()."' alt='oranje fiets'>";

?>
    
</body>
</html>