<?php
 
class Students {
 
  //the private access modifier denies access to the method from outside the class’s scope
  private $stu;
 
  //the public access modifier allows the access to the method from outside the class
  public function setstudent($stu)
  {
    //validation
    $students = array("Prince","Raj");
 
    if(in_array($stu,$students))
    {
      $this -> stu = $stu;
    }
    else
    {
      $this -> stu = "specific student is not in our list.";
    }
  }
  
  public function getstudent()
  {
    return "The student is  " . $this -> stu;
  }
}
 
 
$name = new Students();
//Set the student
//$name->stu="Raj";
$name -> setstudent("Raj");
//Get the student
echo $name -> getstudent();
 
?>