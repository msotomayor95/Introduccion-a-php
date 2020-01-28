<?php

require_once 'BaseElement.php';

class Job extends BaseElement {
  public function getDuration(){
    $years = floor($this->months/12);
    $extraMonths = $this->months % 12;
  
    if ($years == 0) {
      return "Job duration: $extraMonths months";
    }
  
    if ($extraMonths == 0) {
      return "Job duration: $years years";
    }
  
    return "Job duration: $years years and $extraMonths months";
  }
  
}