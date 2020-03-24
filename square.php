<?php
$woorden = file_get_contents('input.txt');
$woord = explode("\n", $woorden);
$zelfden = array();
foreach ($woord as $key => $value) {
    $letter = str_split($value);
    for ($i = 0; $i < count($letter) - 1; $i++) {
        if ($letter[$i] == $letter[$i + 1]) {
            $zelfde = array($i, $key, $letter[$i]);
            array_push($zelfden, $zelfde);
        }
    }
}
foreach ($zelfden as $key => $value) {
    $rij = array($value[0], $value[1] + 1, $value[2]);
    if (array_search($rij, $zelfden) != false) {
        echo ("horizontaal=" . $rij[0] . " verticaal=" . $rij[1] . " letter=" . $rij[2] . PHP_EOL);
    }
}
