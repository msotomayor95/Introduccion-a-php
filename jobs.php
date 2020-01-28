<?php

require 'app/Models/Job.php';
require 'app/Models/Proyect.php';

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('C++ Developer', 'This is an awesome job!!!');
$job2->months = 32;

$proyect1 = new Proyect('Proyect 1', 'Description');
$proyect1->months = 12;

$jobs = [
  $job1,
  $job2
];

$proyects = [
  $proyect1
];

function printElement($el){
  if(!$el->visible){
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>' . $el->getTitle() . '</h5>';
  echo '<p>' . $el->description . '</p>';
  echo '<p>' . $el->getDuration() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
}