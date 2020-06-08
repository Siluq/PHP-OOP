<?php
// Parent class
abstract class klassen {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class k1wdv1 extends klassen {
  public function intro() : string {
    return "Slechtste klas $this->name!";
  }
}

class k1wdv2 extends klassen {
  public function intro() : string {
    return "Beste klas $this->name!";
  }
}

class k1wdv3 extends klassen {
  public function intro() : string {
    return "bestaat $this->name wel!?";
  }
}

// Create objects from the child classes
$k1wdv1 = new k1wdv1("k1wdv1");
echo $k1wdv1->intro();
echo "<br>";

$k1wdv2 = new k1wdv2("k1wdv2");
echo $k1wdv2->intro();
echo "<br>";

$k1wdv3 = new k1wdv3("k1wdv3");
echo $k1wdv3->intro();
?>