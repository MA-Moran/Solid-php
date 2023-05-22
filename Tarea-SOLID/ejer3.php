<?php
// Ejercicio 3 : Breaks Open-Closed Principle and Single Responsability Principle

class Transferencia{
    public function tipoPago($tipo, $cantidad){
        if($tipo == "tarjetaCredito"){
            return "Usted va a pagar $cantidad con tarjeta de credito.";
        }
        if($tipo == "paypal"){
            return "Usted va a pagar $cantidad con medio de PayPal";
        }
    }
}

// Answer

interface PaybleInterface
{
    public function pay($paymentTotal);
}

class CreditCardPayment implements PaybleInterface{
    public function pay($paymentTotal){
        return "You are going to pay $paymentTotal with a credit card.";
    }
}
class PaypalPayment implements PaybleInterface{
    public function pay($paymentTotal){
        return "You are going to pay $paymentTotal with PayPal.";
    }
}

?>