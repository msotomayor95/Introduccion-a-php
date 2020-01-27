<?php

class Job {
  public $title;
  public $description;
  public $visible;
  public $months;
}

$job1 = new Job();
$job1->title = 'PHP Developer';
$job1->description = 'This is an awesome job!!!';
$job1->visible = true;
$job1->months = 16;

$job2 = new Job();
$job2->title = 'C++ Developer';
$job2->description = 'This is an awesome job!!!';
$job2->visible = true;
$job2->months = 32;

$jobs = [
  $job1,
  $job2
];

function getDuration($months){
  $years = floor($months/12);
  $extraMonths = $months % 12;

  if ($years == 0) {
    return "$extraMonths months";
  }

  if ($extraMonths == 0) {
    return "$years years";
  }

  return "$years years and $extraMonths months";
}

function printJob($job){
  if(!$job->visible){
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>' . $job->title . '</h5>';
  echo '<p>' . $job->description . '</p>';
  echo '<p>' . getDuration($job->months) . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
}