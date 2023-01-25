<?php
class Product
{
    private $brand;
    private $quantity;
    private $price;

    public function __construct($brand, $quantity, $price)
    {
        $this->brand = $brand;
        $this->quantity = $quantity;
        $this->price = $price;
    }
    public function get_variables($brand)
    {
        return $this->brand;
    }
    public function set_variables($brand)
    {
        $this->brand = $brand;
    }

}
class Food extends Product
{
    private $date;
    private $components;

    public function __construct($date, $components, $brand, $quantity, $price)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price));
        $this->date = $date;
        $this->components = $components;
    }
}
class Hygene extends Product
{
    private $use;
    private $instructions;

    public function __construct($use, $instructions, $brand, $quantity, $price)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price));
        $this->use = $use;
        $this->instructions = $instructions;
    }
}
class Play extends Product
{
    private $age_target;

    public function __construct($age_target, $brand, $quantity, $price)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price));
        $this->age_target = $age_target;
    }
}
class Meds extends Product
{
    private $use;
    private $instructions;
    private $date;

    public function __construct($date, $use, $instructions, $brand, $quantity, $price)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price));
        $this->date = $date;
        $this->instructions = $instructions;
        $this->use = $use;
    }
}
class Beds extends Product
{
    private $avg_duration;
    private $details;
    private $age_target;

    public function __construct($avg_duration, $details, $age_target, $brand, $quantity, $price)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price));
        $this->details = $details;
        $this->avg_duration = $avg_duration;
        $this->age_target = $age_target;
    }
}