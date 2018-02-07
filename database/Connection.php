<?php


class Connection {

	public static function make()
	{


		try {

		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', ''); //interfejs za konekciju za bazu - ovo je samo lokalno
		} catch (PDOException $e){

				// die ('Could not connect to DB.');
				die ($e->getMessage());	
		}

	}

}