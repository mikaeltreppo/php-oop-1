<?php


require __DIR__ . '/Models/movies.php';
$avatar = new Movies('Avatar', 'USA', 110);
echo $avatar->getInfo();

?>