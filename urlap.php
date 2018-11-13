<?php

$template = "_urlap.php";
$isFormValid = true;
$errors = [];

if (isset($_POST["kuld"])) {

    $telefon = filter_input(INPUT_POST, 'telefon', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $szoveg = filter_input(INPUT_POST, 'szoveg', FILTER_SANITIZE_STRING);
    $nev = filter_input(INPUT_POST, 'nev', FILTER_SANITIZE_STRING); //  =  $nev = $_POST["nev"];



    $nevlength = strlen($nev);
    if (empty($nev)) {
        $isFormValid = false;
        $errors["nev"] = "Nem adtál meg nevet.";
    } elseif ($nevlength < 3) {
        $isFormValid = false;
        $errors["nev"] = "Túl rövid nevet adtál meg.";
    } elseif ($nevlength > 50) {
        $isFormValid = false;
        $errors["nev"] = "Túl hosszú nevet adtál meg.";
    }
//Megnézi valóban emailcím-e
    if (empty($email)) {
        $isFormValid = false;
        $errors["email"] = "Nem adtál meg emailcímet.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isFormValid = false;
        $errors["email"] = "Hibás emailcímet adtál meg.";
    }

    if (empty($telefon)) {
        $isFormValid = false;
        $errors["telefon"] = "Nem adtál meg telefonszámot."; // Ez egy reguláris kifejezés (preg_match("/^[0-9 -\+()]{}$/", $subject))
    } elseif (!preg_match("/^[0-9 -\+()]{7,16}$/", $telefon)) {
        $isFormValid = false;
        $errors["telefon"] = "Hibás telefonszámot adtál meg.";
    }

    $szoveglength = strlen($szoveg);
    if (empty($szoveg)) {
        $isFormValid = false;
        $errors["szoveg"] = "Nem adtál meg üzenetet.";
    } elseif ($szoveglength < 3) {
        $isFormValid = false;
        $errors["szoveg"] = "Túl rövid üzenetet adtál meg.";
    } elseif ($szoveglength > 500) {
        $isFormValid = false;
        $errors["szoveg"] = "Túl hosszú üzenetet írtál.";
    }


    if ($isFormValid) {

        $message = "Új üzenet érkezett a kiskamarazene.hu weboldalról.\n\n";
        $message .= "Név: $nev\n";
        $message .= "Email: $email\n";
        $message .= "Telefon: $telefon\n";
        $message .= "Üzenet:\n $szoveg\n";
//feladó      
        $header = "From: kiskamarazene.hu <info@kiskamarazene.hu>";
        $subject = "Új üzenet a kiskamarazene.hu-ról ($nev)";
        $to = "handeltrio2008@gmail.com";

        mail($to, $subject, $message, $header);
        $template = "koszono.php";
    }
}


