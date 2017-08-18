
Hotels.ng Stage 1 Task
===================
A simple script that fetches dummy data from a database and outputs it
----------

![hng screenshot](https://res.cloudinary.com/dsreqkgmh/image/upload/v1503061689/Screenshot_from_2017-08-18_14_02_19_fbkhbf.png "hng screenshot")

INSTALLATION
-------------
This was built with PHP, mySQL,HTML


> **Requirements:**

> - PHP 5.3 + although it was tested with PHP 7.1 .
> - web server ( preferably apache ) and mysql installed.


So first things first , update the config.php script with your database login info <i class="icon-file"></i>
```
<?php
<?php
 	//the dsn string that contains the database info and type
 	
 	$dsn="mysql:host=localhost;dbname=hotels";

 	//the username and password for the database . Feel free to edit
 	
 	$user = "root";
 	$password="yourdatabasepassword";

 	try{
		//the database handler
		$db = new PDO($dsn,$user,$password);

		//get as many errors and exceptions that occur as possible
		
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

 	}catch(PDOException $e){

 		die(" There was an error connecting to the database because of ".$e." . Please contact the admin");
 	}```
After that, point your browser to install.php . This automatically creates the database ,table and fills it with dummy data .

> **!! IMPORTANT !!!:**
>  Please remember to edit the config.php script . The intall.php script will print out an appropriate error message if you forget to do so, but please do it .

After that , start your web server and navigate to the index.php file 
