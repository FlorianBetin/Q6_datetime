<?php


$destinationTime = (new DateTime)->setDate(2015, 10, 21)->setTime(16, 29);

echo $destinationTime->format('M d Y A h i') . PHP_EOL;

echo '<br>';

$presentTime = (new DateTime)->setDate(2015, 10, 21)->setTime(16, 06);

echo $presentTime->format('M d Y A h i') . PHP_EOL;

echo '<br>';

$interval = $presentTime->diff($destinationTime);
echo $interval->format('%Y %M %d %h %i');











?>