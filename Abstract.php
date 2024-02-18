<?php
/*
 Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
*/
/*
The meaning of abstract class 
1_Abstract class is a class that cannot be instantiated directly and is meant to template for other classes.
2_It is used to define common properties and methods that will be inherited by its subclasses.
3_An abstract class provides a way to define  certain structure for its subclasses.
4_An abstract class may have both abstract and non-abstract methods.
*/
/*
1_Abstract methods are declared within an abstract class but do not have any implementation. 
2_Subclasses must implement all the abstract methods defined in the abstract class. 
*/
abstract class Shape{
    protected int  $x , $y;
    public function __construct($x,$y) {
        $this->x = $x;
        $this->y = $y;
    }
    abstract function calculateArea();
}
class Triangle extends Shape {
   
    function calculateArea(){
        return ($this->x * $this->y)*0.5;
    }
}
class Rectangle extends Shape {
    
    function calculateArea(){
        return ($this->x * $this->y);
    }
}
$triangle=new Triangle(5,7);
echo $triangle->calculateArea()."<br>";
$rectangle=new Rectangle(4, 6);
echo $rectangle->calculateArea()."<br>";

 ?>