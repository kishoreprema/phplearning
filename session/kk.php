<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
}
}
$apple = new Fruit('Apple','Banana','green');



//echo "<br>";
$apple->set_name();
$apple->set_name();
$apple->set_color();
?>