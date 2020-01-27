<?php

class Job {
  
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

}

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('C++ Developer', 'This is an awesome job!!!');
$job2->months = 32;

$jobs = [
  $job1,
  $job2
];


function printJob($job){
  if(!$job->visible){
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>' . $job->getTitle() . '</h5>';
  echo '<p>' . $job->description . '</p>';
  echo '<p>' . $job->getDuration() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
}