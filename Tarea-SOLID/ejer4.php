<?php
// Ejercicio 4 : Breaks Interface Segregation Principle

//interface exportDocuments{
    //public function exportPDF();
    //public function exportJSON();
   // public function exportText();
   
//}

//class BoletaPago implements exportDocuments{
   // public function exportPDF()
   // {
   //     return "Su boleta de pago esta en PDF";
   // }
   // public function exportJSON()
   // {
   //    return new Exception("No se puede exportar JSON."); 
   // }
   // public function exportText()
   // {
   //     return new Exception("No se puede exportar texto.");
   // }
//}

//Answer 

interface exportPDF{
    public function PDF();

}
interface exportJSON{
    public function JSON();

}
interface exportText{
    public function Text();

}


class PaymentSlip implements exportPDF{
    public function PDF()
    {
        return "Payment Slip in PDF format.";
    }
}



?>