<?php

require 'functions.php';
// $greeting = 'Hello, World!';
//Todo application

//Todo, Comment, User

class Task {


	public $description;

	public $completed = false; //nije zavrsen kad ga inicijalizujes


	public function __construct($description){

		$this->description = $description;

	}

	public function isComplete(){

		$this->completed;
	}

}


$tasks =[
 new Task('Go to the store'),
 new Task('Clean my room '),
 new Task('Drkaj mi kurac '),

];
// var_dump($task);
// dd($tasks);

$tasks[0]->completed=true;

require 'index.view.php';