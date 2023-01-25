<?php


include './sub_classes.php';
class Animal_Products
{
    private $food;
    private $hygene;
    private $play;
    private $meds;
    private $beds;

    public function __construct(Food $food, Hygene $hygene, Play $play, Meds $meds, Beds $beds)
    {
        $this->food = $food;
        $this->hygene = $hygene;
        $this->play = $play;
        $this->meds = $meds;
        $this->beds = $beds;
    }


    public function get_var($food)
    {
        return $this->food;
    }
    public function set_var($food)
    {
        $this->food = $food;
    }
}

class Cats extends Animal_Products
{
    private static $animal = "cat";
    public function __construct($food, $hygene, $play, $meds, $beds)
    {
        Animal_Products::__construct(Animal_Products::get_var($food), Animal_Products::get_var($hygene), Animal_Products::get_var($play), Animal_Products::get_var($meds), Animal_Products::get_var($beds));
    }
}
class Dogs extends Animal_Products
{
    private static $animal = "dog";
    public function __construct($food, $hygene, $play, $meds, $beds)
    {
        Animal_Products::__construct(Animal_Products::get_var($food), Animal_Products::get_var($hygene), Animal_Products::get_var($play), Animal_Products::get_var($meds), Animal_Products::get_var($beds));
    }

}