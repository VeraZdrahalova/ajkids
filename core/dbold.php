<?php

$mysqli = new mysqli('localhost', 'root', 'lamp', 'ajkids');
$mysqli->query('SET CHARSET UTF-8');

$mysqli2 = mysqli_connect('localhost', 'root', 'lamp', 'ajkids');
mysqli_query($mysqli2, 'SET CHARSET UTF-8');