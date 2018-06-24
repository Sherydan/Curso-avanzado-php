<?php
class User{
    private $name;
    private $age;

    public function __CONSTRUCT($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    //metodo magico __get (reemplaza a los de arriba)
    public function __GET($property){
        if (property_exists($this, $property)) {
            return $this->$property;
        } 
    }

    //metodo magico __set (reemplaza a los de mas arriba)
    public function __SET($property, $value){
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

$user1 = new User('luis', 40);

echo $user1->__GET('name') . '<br>';
$user1->__SET('age', 25);
echo $user1->__GET('age') . '<br>';

$user1->setName('Juan');
echo $user1->getName();


?>