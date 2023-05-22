<?php
// Ejercicio 2 : Breaks Liskov Substitution Principle

class Adulto {
    public function pago (){
        echo "Es mayor de edad puede pagar";
    }
}

class Niño extends Adulto{
    public function pago()
    {
        throw new Exception ("El niño no puede pagar, porque es menor de edad");
    }
}

//Answer

interface Pay{
    public function Payments();
}

class Adult implements Pay{
    public function Payments(){
        echo "You are of legal age and can pay";
    }
}

class Kid implements Pay{
    public function Payments(){
        echo "The child cannot pay, because he/she is a minor.";
    }
     
    }
?>