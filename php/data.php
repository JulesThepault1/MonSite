<!-- Groupe n°111 THEPAULT Jules ROCHES Clement -->
<?php

 define('HOST', 'localhost');
 define('DB_NAME','site ski');
 define('USER','root');
 define('PASS','');

 try{
   $db = new PDO("mysql:host=". HOST .";dbname=" . DB_NAME, USER, PASS);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e){
 	echo $e;
 }
