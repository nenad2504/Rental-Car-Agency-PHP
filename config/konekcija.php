<?php

define("DBNAME",'rental_car');
define("HOST",'127.0.0.1');
define("USERNAME",'root');
define("PASSWORD",'');

try {
$konekcija = new PDO('mysql:dbname='.DBNAME.';host='.HOST, USERNAME, PASSWORD);
$konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>
