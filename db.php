<?php
try{
	$con=new PDO("mysql:host=localhost;dbname=registration","root","");}
	catch(PDOExection $e){
	echo $e->getMessage();
}
?>