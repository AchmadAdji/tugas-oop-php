<?php

require_once 'animal.php';

class Ape extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name, $legs = 2);
    }
    public function yell()
    {
      echo "Auooo";
    }
  }
  

?>