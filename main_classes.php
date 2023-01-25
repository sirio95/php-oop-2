<?php


class Product
{
    private $brand;
    private $quantity;
    private $price;
    private $type;

    public function __construct($brand, $quantity, $price, $type)
    {
        $this->brand = $brand;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->type = $type;
    }
    public function get_variables($brand)
    {
        return $this->brand;
    }
    public function set_var_prod($brand, $quantity, $price, $type)
    {
        $this->brand = $brand;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->type = $type;
    }

}
class Food extends Product
{
    private $date;
    private $components;

    public function __construct($brand, $quantity, $price, $type, $date, $components)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price), Product::get_variables($type));
        $this->date = $date;
        $this->components = $components;
    }
    public function get_html_food()
    {
        return "<div class= 'card'><h2>" . $this->brand . "</h2><div> Prezzo: " . $this->price . "euro.</div><div>Sacco da: "
            . $this->quantity . "kg</div><div>" . $this->type . "</div><div> Scadenza: " . $this->date . "</div><div> Ingredienti: "
            . $this->components . "</div></div>";
    }
    public function set_var_food($date, $components)
    {
        $this->date = $date;
        $this->components = $components;
    }
    public function get_var_food($date)
    {
        return $this->date;
    }
}
class Hygene extends Product
{
    private $use;
    private $instructions;

    public function __construct($brand, $quantity, $price, $type, $use, $instructions)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price), Product::get_variables($type));
        $this->use = $use;
        $this->instructions = $instructions;
    }
    public function get_html_hygene()
    {
        return "<div class= 'card'><h2>" . $this->brand . "</h2><div> Prezzo: " . $this->price . "euro.</div><div>Flacone da: " . $this->quantity . "ml</div><div>" . $this->type
            . "</div><div> Modalita' d'uso: " . $this->use . "</div><div> Avvertenze: "
            . $this->instructions . "</div></div>";
    }
    public function set_var_hygen($use, $instructions)
    {
        $this->use = $use;
        $this->instructions = $instructions;
    }
    public function get_var_hygen($use)
    {
        return $this->use;
    }
}
class Play extends Product
{
    private $age_target;

    public function __construct($brand, $quantity, $price, $type, $age_target)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price), Product::get_variables($type));
        $this->age_target = $age_target;
    }
    public function get_html_play()
    {
        return "<div class= 'card'><h2>" . $this->brand . "</h2><div> Prezzo: " . $this->price . "euro.</div><div>Contenitore da: "
            . $this->quantity . "pezzi</div><div>" . $this->type . "</div><div> Adatto a: " . $this->age_target . "</div></div>";
    }
    public function set_var_play($age_target)
    {
        $this->age_target = $age_target;
    }
    public function get_var_play($age_target)
    {
        return $this->age_target;
    }
}
class Meds extends Product
{
    private $use;
    private $instructions;
    private $date;

    public function __construct($brand, $quantity, $price, $type, $date, $use, $instructions)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price), Product::get_variables($type));
        $this->date = $date;
        $this->instructions = $instructions;
        $this->use = $use;
    }

    public function get_html_meds()
    {
        return "<div class= 'card'><h2>" . $this->brand . "</h2><div> Prezzo: " . $this->price
            . "euro.</div><div>Flacone da: " . $this->quantity . "ml</div><div>" . $this->type
            . "</div><div> Modalita' d'uso: " . $this->use . "</div><div> Avvertenze: "
            . $this->instructions . "</div></div>Scadenza: " . $this->date . "</div></div>";
    }
    public function set_var_meds($use, $instructions, $date)
    {
        $this->use = $use;
        $this->instructions = $instructions;
        $this->date = $date;
    }
    public function get_var_meds($use)
    {
        return $this->use;
    }
}
class Beds extends Product
{
    private $avg_duration;
    private $details;
    private $age_target;

    public function __construct($brand, $quantity, $price, $type, $avg_duration, $details, $age_target)
    {
        Product::__construct(Product::get_variables($brand), Product::get_variables($quantity), Product::get_variables($price), Product::get_variables($type));
        $this->details = $details;
        $this->avg_duration = $avg_duration;
        $this->age_target = $age_target;
    }
    public function get_html_bed()
    {
        return "<div class= 'card'><h2>" . $this->brand . "</h2><div> Prezzo: " . $this->price
            . "euro</div><div> Quantita': " . $this->quantity . "</div><div>" . $this->type
            . "</div><div> Durata media: " . $this->avg_duration . "</div><div>" . $this->details
            . "</div><div> Adatto a: " . $this->age_target . "</div></div>";
    }
    public function set_var_beds($avg_duration, $details, $age_target)
    {
        $this->avg_duration = $avg_duration;
        $this->details = $details;
        $this->age_target = $age_target;
    }
    public function get_var_beds($avg_duration)
    {
        return $this->avg_duration;
    }
}
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