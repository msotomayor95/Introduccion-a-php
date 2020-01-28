<?php

namespace App\Models;

require_once 'Printable.php';

class BaseElement implements Printable {
  
  private $title;
  public $description;
  public $visible;
  public $months;


  public function __construct($t, $d) {
    $this->title = $t;
    $this->description = $d;
    $this->visible = true;
  }
  public function getTitle(){
    return $this->title;
  }

  public function setTitle($t = 'N/A'){
    $this->title = $t;
  }

  public function getDuration(){
    $years = floor($this->months/12);
    $extraMonths = $this->months % 12;
  
    if ($years == 0) {
      return "$extraMonths months";
    }
  
    if ($extraMonths == 0) {
      return "$years years";
    }
  
    return "$years years and $extraMonths months";
  }

  public function getDescription(){
    return $this->description;
  }
}