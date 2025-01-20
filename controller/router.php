<?php

// si il existe une page nommé PHP en get dans $_GET['p']
if (isset($_GET['p'])) {
    // si php
    if ($_GET['p'] == "php") {
        $titrepage = $cours['langague']['php']['name'];
        $text = $cours['langague']['php']['description'];
        $topics = $cours['langague']['php']['topics'];

        // si sql
    } elseif ($_GET['p'] == "sql") {
        $titrepage = $datas['pages']['sql']['titrepage'];
        $text = $datas['pages']['sql']['text'];

        // si python
    } elseif ($_GET['p'] == "python") {
        $titrepage = $cours['langague']['python']['header']['name'];
        $text = $cours['langague']['python']['header']['description'];
        $decriptions = $cours['langague']['python']['descriptions'];
        $topics = $cours['langague']['python']['topics'];


        // si javascript
    } elseif ($_GET['p'] == "javascript") {
        $titrepage = $cours['langague']['javascript']['name'];
        $text = $cours['langague']['javascript']['description'];


        $varH2 = $cours['langague']['javascript']['topics']['variable'];
        $operateursH2 = $cours['langague']['javascript']['topics']['operateurs']['title'];
        $conditionsH2 = $cours['langague']['javascript']['topics']['conditions']['title'];
        $bouclesH2 = $cours['langague']['javascript']['topics']['boucles']['title'];
        $whileH2 = $cours['langague']['javascript']['topics']['boucles']['while']['title'];

        $varDescription = $cours['langague']['javascript']['topics']['variable']['description'];
        $operateursDescription = $cours['langague']['javascript']['topics']['operateurs']['description'];
        $conditionsDescription = $cours['langague']['javascript']['topics']['conditions']['description'];
        $bouclesDescription = $cours['langague']['javascript']['topics']['boucles']['description'];
        $whileDescription = $cours['langague']['javascript']['topics']['boucles']['while']['description'];

        $operateurs = $cours['langague']['javascript']['topics']['operateurs'];
        $conditions = $cours['langague']['javascript']['topics']['conditions'];
        $boucles = $cours['langague']['javascript']['topics']['boucles'];

        $jsExemple1 = $cours['langague']['javascript']['topics']['variable']['examples']['exemple1']['code'];
        $jsExemple1output = $cours['langague']['javascript']['topics']['variable']['examples']['exemple1']['output'];
        $jsExemple2 = $cours['langague']['javascript']['topics']['variable']['examples']['exemple2']['code'];
        $jsExemple2output = $cours['langague']['javascript']['topics']['variable']['examples']['exemple2']['output'];

        $operateursExemples = $cours['langague']['javascript']['topics']['operateurs']['examples']['exemple1']['code'];
        $operateursOutput = $cours['langague']['javascript']['topics']['operateurs']['examples']['exemple1']['output'];

        $operateursExemples2 = $cours['langague']['javascript']['topics']['operateurs']['examples']['exemple2']['code'];
        $operateursOutput2 = $cours['langague']['javascript']['topics']['operateurs']['examples']['exemple2']['output'];

        $conditionsExemples = $cours['langague']['javascript']['topics']['conditions']['examples']['exemple1']['code'];
        $conditionsOutput = $cours['langague']['javascript']['topics']['conditions']['examples']['exemple1']['output'];

        $conditionsExemples2 = $cours['langague']['javascript']['topics']['conditions']['examples']['exemple2']['code'];
        $conditionsOutput2 = $cours['langague']['javascript']['topics']['conditions']['examples']['exemple2']['output'];

        $bouclesExemples = $cours['langague']['javascript']['topics']['boucles']['examples']['exemple1']['code'];
        $bouclesOutput = $cours['langague']['javascript']['topics']['conditions']['examples']['exemple1']['output'];

        $bouclesExemples2 = $cours['langague']['javascript']['topics']['boucles']['examples']['exemple2']['code'];
        $bouclesOutput2 = $cours['langague']['javascript']['topics']['boucles']['examples']['exemple2']['output'];

        $whileExemples = $cours['langague']['javascript']['topics']['boucles']['while']['examples']['exemple1']['code'];
        $whileOutput = $cours['langague']['javascript']['topics']['boucles']['while']['examples']['exemple1']['output'];

        $whileExemples2 = $cours['langague']['javascript']['topics']['boucles']['while']['examples']['exemple2']['code'];
        $whileOutput2 = $cours['langague']['javascript']['topics']['boucles']['while']['examples']['exemple2']['output'];





        // si pas de p => erreur 404
    } else {
        $titrepage = "404";
        $text = "Cette page n'existe pas";
    }

    // si accueil
} else {
    $titrepage = $decription['titre'];
    $text = $decription['description'];

}