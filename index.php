<?php

function sayHello(){
    var_dump('Hello');
}

sayHello();

function sayHelloToMe($name='Namelesss') {
    var_dump("Hello $name!");
}

sayHelloToMe('Olga');
sayHelloToMe('Maribel');
sayHelloToMe();

function sayNameAndAge($name, $age) {
    var_dump("Your name is $name and you are $age years old!");
}

sayNameAndAge('Olga', 18);
sayNameAndAge('Maribel', 19);

function recursion($i){
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}

recursion(0);