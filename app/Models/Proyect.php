<?php

namespace App\Models;

class Proyect extends BaseElement{
  public function getDuration(){
    $years = floor($this->months/12);
    $extraMonths = $this->months % 12;
  
    if ($years == 0) {
      return "Proyect Duration: $extraMonths months";
    }
  
    if ($extraMonths == 0) {
      return "Proyect Duration: $years years";
    }
  
    return "Proyect Duration: $years years and $extraMonths months";
  }
}