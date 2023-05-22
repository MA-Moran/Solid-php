<?php
// Ejercicio 1 : Breaks Single-responsability Principle

//class Employee {
    //public function saveEmployee (){
        //return "The employee's information has been saved successfully.";
   // }
    //public function connection (){
        //return "The connection to the database was successful.";
   // }
    //public function reportBydepartment ($department) {
        //return "Information of all active employees in $department.";
  //  }
//}

//Answer 

class DB {
    public function connection (){
        return "The connection to the database was successful.";
    }
}

class Employee extends DB {
  public $department;
  public function saveEmployee(){
    return "The employee's information has been saved successfully.";
  }
  public function reportBydepartment($department)
  {
    return "Information of all active employees in $department.";
  }
}
?>