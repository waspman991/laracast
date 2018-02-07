<?php

function connectToDB(){
	
	try {

	return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', ''); //interfejs za konekciju za bazu - ovo je samo lokalno
	} catch (PDOException $e){

			// die ('Could not connect to DB.');
			die ($e->getMessage());	
	}

}


function dd($data){
		
	echo '<pre>';

	die(var_dump($data));

	echo '</pre>';
}

function fetchAllTasks($p){

	$statement = $p->prepare('select * from todos');

	$statement->execute();

	// $tasks = $statement->fetchAll(PDO::FETCH_OBJ); // ovako nema duplikata prilikom dampa, vraca objekat a ne i indekse
	return $statement->fetchAll(PDO::FETCH_CLASS,'Task'); // ovako nema duplikata prilikom dampa, vraca objekat a ne i indekse
}