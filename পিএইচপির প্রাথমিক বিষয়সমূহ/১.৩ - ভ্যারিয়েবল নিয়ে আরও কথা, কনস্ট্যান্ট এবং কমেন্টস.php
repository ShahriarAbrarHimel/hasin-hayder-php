<?php
$task='Read';
echo $task;
echo "\n";
$task='Create';
echo $task;
echo "\n";

define('PI',22/7);

echo "value of pi ".PI;
echo "\n";
echo constant('PI');
$constant='constant';
echo "\n";
echo "value of pi={$constant('PI')}";