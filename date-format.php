<?php

$datePattern = "/(?<dag>[1-3]{0,1}[0-9]{1})-(?<maand>[0-1]{0,1}[0-9]{1})-(?<jaar>[0-9]{0,1}[0-9]{0,1}[0-9]{0,1}[0-9]{1})/m";
$input = $argv[1];

if (preg_match($datePattern, $input, $matches)) {
    $replacement = $matches["jaar"] . "-" . $matches["maand"] . "-" . $matches["dag"];

    echo preg_replace($datePattern, $replacement, $input);
} else {
    die("invalid date");
}
