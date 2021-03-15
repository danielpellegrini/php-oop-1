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



$cat = new Animal('Eukarya', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Felidae', 'Felis', 'Felis catus');

echo 'CAT <br> Scientific classification:<br><br>';
echo 'Domain: ' . $cat->domain . '<br>';
echo 'Kingdom: ' . $cat->kingdom . '<br>';
echo 'Phylum: ' . $cat->phylum . '<br>';
echo 'Class: ' . $cat->class . '<br>';
echo 'Order: ' . $cat->order . '<br>';
echo 'Family: ' . $cat->family . '<br>';
echo 'Genus: ' . $cat->genus . '<br>';
echo 'Species: ' . $cat->species . '<br>';

$dog = new Animal('Eukarya', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Canidae', 'Canis', 'Canis lupus familiaris');

echo '<br>DOG <br> Scientific classification:<br><br>';
echo 'Domain: ' . $dog->domain . '<br>';
echo 'Kingdom: ' . $dog->kingdom . '<br>';
echo 'Phylum: ' . $dog->phylum . '<br>';
echo 'Class: ' . $dog->class . '<br>';
echo 'Order: ' . $dog->order . '<br>';
echo 'Family: ' . $dog->family . '<br>';
echo 'Genus: ' . $dog->genus . '<br>';
echo 'Species: ' . $dog->species . '<br>';

$horse = new Animal('Eukarya', 'Animalia', 'Chordata', 'Mammalia', 'Perissodactyla', 'Equidae', 'Equus', 'Equus ferus caballus');

echo '<br>HORSE <br> Scientific classification:<br><br>';
echo 'Domain: ' . $horse->domain . '<br>';
echo 'Kingdom: ' . $horse->kingdom . '<br>';
echo 'Phylum: ' . $horse->phylum . '<br>';
echo 'Class: ' . $horse->class . '<br>';
echo 'Order: ' . $horse->order . '<br>';
echo 'Family: ' . $horse->family . '<br>';
echo 'Genus: ' . $horse->genus . '<br>';
echo 'Species: ' . $horse->species . '<br>';