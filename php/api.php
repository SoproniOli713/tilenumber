<?php

date_default_timezone_set('Asia/Manila');

$date = date('Y-m-d');

$score = $_POST['score'];

$file = fopen($date . '.txt', 'a+');

fwrite($file, $score . "\n");

fclose($file);

?>