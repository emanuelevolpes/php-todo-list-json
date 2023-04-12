<?php

$newtodo = isset($_POST['newtodo']) ? $_POST['newtodo'] : NULL;

$todo = file_get_contents('todo.json');

// var_dump($todo);

$todo = json_decode($todo, true);

if($newtodo !== NULL){
    $todo[] = [
        "text" => $newtodo,
        "done" => false
    ];
};

// var_dump($todo);

$todo = json_encode($todo);
file_put_contents('todo.json', $todo);


// $todo[0]['text'] = 'ciao';

//var_dump($todo);
header('Content-Type: application/json');

echo $todo;

// file_put_contents('todo.json', $todo);

// var_dump($todo);

?>