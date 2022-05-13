<?php
// phpinfo();
// $output = exec("git push");
// echo $output;

$commands = array(
  'git add .',
  'git commit -m "Push auto from Server ' . (new DateTime())->format('d.m.Y H:i:s') . '"',
  'git push',
);
// Run the commands for output
$output = '';
foreach($commands AS $command){
  // Run it
  $tmp = exec($command);
  // Output
  $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span></br>";
  $output .= htmlentities(trim($tmp)) . "\n </br>";
}

echo $output;