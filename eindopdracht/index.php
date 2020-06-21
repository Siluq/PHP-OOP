<?php

require_once ('figuur.class.php');
require_once ('cilinder.class.php');
require_once ('vierkant.class.php');

echo "Hallo!";

$mijn_figuur = new Cilinder(10, 5);

echo $mijn_figuur->getH();

?>