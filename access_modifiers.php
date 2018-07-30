<?php

class Example {
  public $a=1;
  protected $b=2;
  private $c=3;
  
  function show_abc(){
    echo $this->a;
    echo $this->b;
    echo $this->c;
  }

  public function hello_everyone() {
    return "Hello everyone.<br />";
  }
  protected function hello_family() {
    return "Hello family.<br />";
  }
  private function hello_me() {
    return "Hello me.<br />";
  }
  //public by default
  function hello() {
    $output = $this->hello_everyone();
    $output .= $this->hello_family();
    $output .= $this->hello_me();
    return $output;
	
  }  

}
class new1 extends Example{
	function fun1(){
		$a=$this->a;
		echo $a;
		$a1=$this->c;
		echo $a1;//error
		
		$a3=$this->b;
		echo $a3;
		
	}
	
}


$s=new new1();
$s->fun1();
$shurakh = new Example();//creation of objects
echo "public a: {$shurakh->a}<br />";
//echo "protected b: {$shurakh->b}<br />";
//echo "private c: {$shurakh->c}<br />";
$shurakh->show_abc();
$shurakh->b=20;

echo "<br />";
echo "hello_everyone: {$shurakh->hello_everyone()}<br />";
//echo "hello_family: {$shurakh->hello_family()}<br />";
//echo "hello_me: {$shurakh->hello_me()}<br />";
echo $shurakh->hello();
?>