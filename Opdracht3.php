<?php
/**
 * A simple class
 *
 * This is the long description for this class,
 * which can span as many lines as needed. It is
 * not required, whereas the short description is
 * necessary.
 *
 * It can also span multiple paragraphs if the
 * description merits that much verbiage.
 *
 * @author Sam Boesjes <534268@student.glu.nl>
 * @copyright 2020
 */
class Fruit {
/**
  * A public variable
  *
  * @var string stores data for the class
  */
  public $name;
  public $color;
  /**
  * Sets $foo to a new value upon class instantiation
  *
  * @param string $val a value required for the class
  * @return void
  */
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>