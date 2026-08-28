<?php

// Konfiguration
$kpThreshold = 7;
$yourLatitude = 51.0; // Mitteldeutschland

// NOAA API
$url = 'https://services.swpc.noaa.gov/json/planetary_k_index_1m.json';
$data = json_decode(file_get_contents($url), true);

$latest = $data[count($data) - 1];
$previous = $data[count($data) - 2];

$kpCurrent  = (float)$latest['kp_index'];
$kpPrevious = (float)$previous['kp_index'];

$isRising = $kpCurrent > $kpPrevious;

$minVisibleLatitude = 65 - ($kpCurrent * 2);

date_default_timezone_set('Europe/Berlin');
$hour = (int)date('G'); // 0–23
$isEvening = ($hour >= 16);

$kpScore = min(50, max(0, ($kpCurrent - 6) * 25));
$trendScore = $kpCurrent > $kpPrevious ? 20 : 0;
$latitudeDiff = $yourLatitude - $minVisibleLatitude;
$latitudeScore = match (true) {
    $latitudeDiff >= 3  => 20,
    $latitudeDiff >= 1  => 10,
    $latitudeDiff >= 0  => 5,
    default             => 0,
};
$timeScore = ($hour >= 21 || $hour <= 23) ? 10 : 5;

$auroraScore = min(
    100,
    $kpScore + $trendScore + $latitudeScore + $timeScore
);

if (
    $kpCurrent >= $kpThreshold &&
//    $kpCurrent > $kpPrevious &&
    $minVisibleLatitude <= $yourLatitude &&
    $isEvening
) {
    $payload = json_encode([
        'value1' => "Kp-Index: $kpCurrent",
        'value2' => "Gute Chance auf Polarlichter in Mitteldeutschland",
        'value3' => date('Y-m-d H:i'),
        'value4' => "Aurora sichtbar ab ca.: ".$minVisibleLatitude." Grad, Mitteldeuschland: ".$yourLatitude,
        'value5' => "Fotoscore (0-100): ".$auroraScore
    ]);

    print_r($payload);
}

