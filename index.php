<?php

$oldal = filter_input(INPUT_GET, 'oldal', FILTER_SANITIZE_STRING);
if ($oldal == "") {
    $oldal = "index";
}

switch ($oldal) {
    case "eskuvo" :
        $title = "Esküvői zene";
        $template = "eskuvo.php";
        break;
    case "handeltrio":
        $title = "H&#228;ndel Trió";
        $template = "handeltrio.php";
        break;
    case "index":
        $title = "Salon Music";
        $template = "index.php";
        break;
    case "szalonkvartett":
        $title = "Szalon kvartett";
        $template = "szalonkvartett.php";
        break;
    case "szalontrio":
        $title = "Szalon trió";
        $template = "szalontrio.php";
        break;
    case "urlap":
        $title = "Üzenet";
        include 'urlap.php';
        break;
    default :
        $title = "Az oldal nem található.";
        include '404.php';
}
include 'templates/layout.php';
