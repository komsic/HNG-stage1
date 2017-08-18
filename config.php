<?php
 	//the dsn string that contains the database info and type
 	
 	$dsn="mysql:host=localhost;dbname=hotels";

 	//the username and password for the database . Feel free to edit
 	
 	$user = "root";
 	$password="";

 	try{
		//the database handler
		$db = new PDO($dsn,$user,$password);

		//get as many errors and exceptions that occur as possible
		
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

 	}catch(PDOException $e){

 		die(" There was an error connecting to the database because of ".$e." . Please contact the admin");
 	}