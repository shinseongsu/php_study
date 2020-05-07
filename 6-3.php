<?php

class Entree{
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient){
        return in_array($ingredient, $this->$ingredients);
    }

    public static function getSizes(){
        return array('소','중','대');
    }
}

$sizes = Entree::getSizes();

print "$sizes";

?>