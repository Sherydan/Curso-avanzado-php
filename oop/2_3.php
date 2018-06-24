<?php
class User {
    public $name = '';

    

    public function sayHello(){
        echo $this->name . ' says Hello';
    }
    
}

$user1 = new User;
$user1->name = 'Luis';
$user1->sayHello();

$user2 = new User;
$user2->name = 'Juan';
echo '<br>';
$user2->sayHello();


?>