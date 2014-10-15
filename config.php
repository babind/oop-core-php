<?php
	 // Enter Your database connection details here.

	$host='localhost';// Host Name.
	$db_name='Crud-oop';//datadase Name.
	$db_username='root';//Database Username
	$db_password='a';//Database Password

	try
	{
		$pdo= new PDO('mysql:host='.$host.';dbname='.$db_name,$db_username,$db_password);
		
	}
	catch(PDoException $e)
	{
		exit('Error connecting To Database');
	}
?>