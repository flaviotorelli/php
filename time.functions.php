<?php

date_default_timezone_set('America/Sao_Paulo');

$currentTime = new DateTime();
$startTime = new DateTime('13:00');
$endTime = new DateTime('13:45');

if ($currentTime < $startTime || $currentTime > $endTime) {
	// do something
}

$x = new DateTime('11:00');
$y = new DateTime('13:30');

$z = $y->diff($x);

$minutes = ($z->h * 60) + $z->i; // total de minutos entre $x e $y

$interval = 5; // intevalo de tempo

$times = round($minutes / $inteval);

for ($i = 0; $i <= $times; $i ++) {
	var_dump($x);
	date_add($x, date_interval_create_from_date_string($inteval.' min'));
}

//var_dump($minutes, $t);