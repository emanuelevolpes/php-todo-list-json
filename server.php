<?php

$todo = file_get_contents('todo.json');

// var_dump($todo);

$todo = json_decode($todo, true);

var_dump($todo);

// $todo = json_encode($todo);

// $todo[0]['text'] = 'ciao';

//var_dump($todo);

// echo $todo;

// file_put_contents('todo.json', $todo);

// var_dump($todo);

?>