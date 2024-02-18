<?php
interface Resizable{
    function resize($percentage);
    
}
class Square implements Resizable{
    private int $side;
    public function __construct($side) {
        $this->side = $side;
    }
    function resize($percentage){
        $this->side= $this->side *($percentage/100);
    }
    function getArea(){
        return pow($this->side,2);
    }
    public function getSide() {
        return $this->side;
    }
}
$square=new Square(10);
$square->resize(60);
echo $square->getSide()."<br>";
echo $square->getArea();
?>