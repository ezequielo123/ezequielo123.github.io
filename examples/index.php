<?php 
spl_autoload_register(function($class_name){
    include $class_name . '.class.php';
});

$foo = new Foo;
$foo->goSleep();

$bar = new Bar;
$bar->sayHi();