<?php

// si il existe une page nommé PHP en get dans $_GET['p']
if(isset($_GET['p'])){
    // si php
    if($_GET['p']=="php"){
        $titrepage = $decription['titre'];
        $text = $decription['description'];
    // si sql
    }elseif($_GET['p']=="sql"){
        $titrepage = $datas['pages']['sql']['titrepage'];
        $text = $datas['pages']['sql']['text'];
    // si javascript
    }elseif($_GET['p']=="javascript"){
        $titrepage = $cours['langague']['name'];
        $text = $cours['langague']['description'];
        
    // si pas de p => erreur 404
    }else{
        $titrepage = "404";
        $text = "Cette page n'existe pas";
    }

// si accueil
}else{
    $titrepage = $decription['titre'];
    $text = $decription['description'];
    $name = $cours['langague']['name'];
}