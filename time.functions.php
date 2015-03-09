<?php

date_default_timezone_set('America/Sao_Paulo');

$currentTime = new DateTime();
$startTime = new DateTime('13:00');
$endTime = new DateTime('13:45');

if ($currentTime < $startTime || $currentTime > $endTime) {
	// do something
}