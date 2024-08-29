<?php
    require_once ('System/ClassesList.php');
    $Insp = new Inspector();

    $url = $_SERVER['REQUEST_URI'];
    $url = mb_substr($url,1);

    if($Insp->IsClass($url) == true)
    {
        include ("Class/".$url.".php");
    }
    else
    {
        include ("404.php");
    }       
?>