<?php
class User{
    protected $name;
    protected $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

class Customer extends User{
    private $balance;

    public function __construct($name, $age, $balance){
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    public function pay($amount){
        $amount_left = $this->balance - $amount;
        $this->__SET('balance', $amount_left);
        return $this->name . ' paid '. $amount . ' and his new balance is: ' . $amount_left . '<br>';
        
    }

    public function __GET($property){
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __SET($property, $value){
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

$customer1 = new Customer('luis', 25, 1200);

echo $customer1->__GET('name') . ' balance is: ' . $customer1->__GET('balance'). '<br>';

echo $customer1->pay(200);

echo 'Current customer balance is: '. $customer1->__GET('balance');

?>