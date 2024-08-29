<?php
    include('System/ClassesList.php');
    $Insp = new Inspector();

    $url = $_SERVER['REQUEST_URI'];
    $url = mb_substr($url,1);

    if($Insp->IsClass($url) == true)
    {
        implode ($url);
    }
    else
    {
        implode ("404.php");
    }       
?>