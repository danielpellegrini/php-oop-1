<?php


class Classification
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


class Organism
{
  public $name;

  private $classifications = [];

  public function __construct($name) {
    $this->name = $name;
  }

  public function addOrganism(Classification $classification) {
    $this->classifications[] = $classification;
  } 

  public function getClassifications() {
    return $this->classifications;
  }
}


$cat = new Classification('Eukarya', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Felidae', 'Felis', 'Felis catus');
$dog = new Classification('Eukarya', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Canidae', 'Canis', 'Canis lupus familiaris');
$horse = new Classification('Eukarya', 'Animalia', 'Chordata', 'Mammalia', 'Perissodactyla', 'Equidae', 'Equus', 'Equus ferus caballus');

$newOrganism = new Organism('Cat');
var_dump($newOrganism);
$newOrganism->addOrganism($cat);
var_dump($newOrganism->getClassifications());

$newOrganism = new Organism('Dog');
var_dump($newOrganism);
$newOrganism->addOrganism($dog);
var_dump($newOrganism->getClassifications());

$newOrganism = new Organism('Horse');
var_dump($newOrganism);
$newOrganism->addOrganism($horse);
var_dump($newOrganism->getClassifications());



