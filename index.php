<?php

class Animal
{
  public $domain;

  public $kingdom;

  public $phylum;

  public $class;

  public $order;

  public $family;

  public $genus;

  public $species;

  public function __construct($domain, $kingdom, $phylum, $class, $order, $family, $genus, $species)
  {
    $this->domain = $domain;
    $this->kingdom = $kingdom;
    $this->phylum = $phylum;
    $this->class = $class;
    $this->order = $order;
    $this->family = $family;
    $this->genus = $genus;
    $this->species = $species;

  }
}



$cat = new Animal('Eukarya', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Felidae', 'Felis', 'F. catus');

echo 'CAT <br> Scientific classification:<br><br>';
echo 'Domain: ' . $cat->domain . '<br>';
echo 'Kingdom: ' . $cat->kingdom . '<br>';
echo 'Phylum: ' . $cat->phylum . '<br>';
echo 'Class: ' . $cat->class . '<br>';
echo 'Order: ' . $cat->order . '<br>';
echo 'Family: ' . $cat->family . '<br>';
echo 'Genus: ' . $cat->genus . '<br>';
echo 'Species: ' . $cat->species . '<br>';