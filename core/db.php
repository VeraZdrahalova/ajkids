<?php

$mysqli = new mysqli('localhost', 'root', 'lamp', 'ajkids');
$mysqli->query('SET CHARSET UTF-8');		// nastaví znakovou sadu pro komunikaci mysqli s php, 
											// mysqli nepřebírá žádné nastavení znakové sady z mnou vytvořené db nebo z tabulek
											
/*var_dump($mysqli);	= var_dump($mysqli2)
object(mysqli)[1]
public 'affected_rows' => null
public 'client_info' => null
public 'client_version' => null
public 'connect_errno' => null
public 'connect_error' => null
public 'errno' => null
public 'error' => null
public 'error_list' => null
public 'field_count' => null
public 'host_info' => null
public 'info' => null
public 'insert_id' => null
public 'server_info' => null
public 'server_version' => null
public 'stat' => null
public 'sqlstate' => null
public 'protocol_version' => null
public 'thread_id' => null
public 'warning_count' => null
*/

$mysqli2 = mysqli_connect('localhost', 'root', 'lamp', 'ajkids');
mysqli_query($mysqli2, 'SET CHARSET UTF-8');
