<?php 
//installs the database and table with sample data
require "config.php";

//loads the sql queries from the file
$sql=file_get_contents("hotels.sql");


//ensures installation is succesful else prints out an appropriate error message
if($db->prepare($sql)->execute()){
	echo " Installation succesful ! . Please navigate to the <a href='index.php'> home page </a> to view the dynamic data fetched from the database";
}else{
	echo " installation failed . Please ensure you edited the config.php file with the right details and ensure you set display_errors to On in the indes.php file line 16";
}