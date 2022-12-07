<?php
require_once __DIR__ . "/movie.php";

$movie1 = new Movie("Shutter Island", 2010, 138, "suspense", "Martin Scorsese", "+13", "");
$movie2 = new Movie("Fight Club", 1999, 139, "suspense", "David Fincher", "+18", "");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <?php echo $movie1->print(); ?>
    <span>Durata: <?php echo $movie1->setDurata($movie1->duration) ?> </span>
    <hr>
    <?php echo $movie2->print(); ?>
    <span>Durata: <?php echo $movie2->setDurata($movie2->duration) ?> </span>
</body>

</html>