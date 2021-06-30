<?php
/*
class Animal
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function eat()
    {
        $nam = $this->name;
        echo "{$nam} Can Eat\n";
    }
    public function run()
    {
        echo "{$this->name} Can Run\n";
    }
    public function addTitle($title)
    {
        $this->name = $title.' '.$this->name;
    }
}
class Human extends Animal
{

    public function eat()
    {   $t= $this->name;
       $s= $this->addTitle('Mr');
        echo "{$this->name} Eat Rice";
    }
    public function run()
    {
        echo "{$this->name} can Run\n";
    }
}
$ob = new Animal("I");
$ob->eat("Man");
$ob = new Human("we");
$ob->eat();
*/
class ParentClass{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
     $this->sayHi();
    }
    public function sayHi()
    {
        echo "{$this->name} Say Hi\n";
    }
}
class ChieldClass extends ParentClass{
    public function sayHi()
    {
        parent::sayHi();
        echo "Say Hello";
    }
}

$ob = new ChieldClass("Abcd");
