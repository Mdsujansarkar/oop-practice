<?php 
class Shape{
    protected $name;
    protected $area;
    public function __construct($name)
    {
     $this->name = $name; 
     $this->calculet();  
    }
    public function getArea()
    {
        echo "{$this->name} is";
    }
    public function calculet()
    {

    }
}

class Triangle extends Shape{
    private $a,$b,$c;
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Traingle");
        
    }
    public function calculet()
    {
        $porisima = ($this->a + $this-> b + $this-> c) /2;
       echo $this->area = sqrt($porisima * $porisima );
    }
}
class Square extends Shape{
    private $a,$b;
    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Square");
    }
    public function calculet()
    {
        echo "{$this->a} * {$this->b} ok";
    }
}
$ob = new Triangle(4,5,5);
$ob->getArea();