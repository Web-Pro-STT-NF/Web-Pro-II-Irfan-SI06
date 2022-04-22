<?php
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo '<br>The fruit is = '. $this->name .'<br>and the color is ='. $this->color;
    }
}

class Strawberry extends Fruit{
    public function massage(){
        echo 'Am I fruit or berry?';
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->massage();
$strawberry->intro();
?>