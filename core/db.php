<?php

$mysqli = new mysqli('localhost', 'root', 'nalej0808', 'ajkids');
$mysqli->query('SET CHARSET UTF-8');

$mysqli2 = mysqli_connect('localhost', 'root', 'nalej0808', 'ajkids');
mysqli_query($mysqli2, 'SET CHARSET UTF-8');