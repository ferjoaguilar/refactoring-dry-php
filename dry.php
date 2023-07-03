<?php 
class User {
    public function __construct(){
        echo "Service connected";
    }

    public function createUser(){
        return "User created";
    }
}

class Payment {
    public function __construct(){
        echo "Service connected";
    }
    public function createPayment(){
        return "Payment created";
    }
}

class Order {
    public function __construct(){
        echo "Service connected";
    }
    public function createOrder(){
        return "Order created";
    }
}

$user = new User();
echo "<br>";
echo $user->createUser();


$payment = new Payment();
echo "<br>";
echo $payment->createPayment();

$order = new Order();
echo "<br>";
echo $order->createOrder();

?>