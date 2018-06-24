<?php
class User{
    public $name;
    public $age;

    public function __construct($name, $age){
        echo 'Class '. __CLASS__ . ' instantiated <br>';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(){
        echo $this->name . 'Says Hello';
    }

    /* se llama a __destruct cada vez que no hay otroa referencia
    a un objeto en especifico.
    generalmente se usa para limpiar o cerrar conexiones a db */
    public function __destruct(){
        echo '<br>destructor ran...';
    }
}

$user1 = new User('Luis', 25);
echo $user1->name . ' is ' .  $user1->age .' years old';
echo '<br>';
$user1->sayHello();

?>