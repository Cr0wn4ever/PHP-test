<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test page</title>
</head>

<body>
    <div>
        <h1>PHP TEST</h1>
    </div>
</body>

</html>

<?php

require_once 'Trabajadores/instancias.php';

/*
    const MY_CONSTANT = 13;
    echo MY_CONSTANT . "\n";

    //lista

    $lista = ['victor', 'henry', 'pedro'];
    echo gettype($lista) . "\n";
    array_push($lista, 'maria');
    print_r($lista);

    //diccionario

    $diccionario = array("number" => MY_CONSTANT, "string" => "Cadena de texto");
    echo gettype($diccionario) . "\n";
    print_r($diccionario);

    //flujos

    for($index = 0; $index<10; $index++){
        echo $index . "\n";
    }

    foreach ($lista as $item){
        if ($item == "maria"){
            echo "woman" . "\n";
        }elseif($item == "victor"){
            echo "Heroe" . "\n";
        }else{
            echo "hombre" . "\n";
        }
    }

    $index  = 0;
    while($index <10){
        if($index >4 && $index <9){
            echo $index . "\n";
        }
        $index = $index +1;
    }

    //funciones
    function operar(int $number){
        $number = $number +100;
        return $number;
    }
    
    echo operar(13);

    //clases

    class myClase {
        public $person_name;
        public $person_age;

        function __construct($name, $age){
            $this ->name = $name;
            $this->age = $age;
        }
    }

    $newClass = new myClase("Victor", 22);

    print_r($newClass);

    echo gettype($newClass);
  
    

    class Person {
        public $name;
        Public $lName;
        public $id;

        function __construct($name, $lName, $id){
            $this->name = $name;
            $this->lName = $lName;
            $this->id = $id;
        }
        
        function __destruct(){
            echo "It's over...";
        }

        function getter(){
            return $this->name;
        }

        function caminar(){
            echo"I'm walking on sunshine.";
        }

    }

    $persona = new Person("victor","castellar","28499788");

    //var_dump($persona);
    */