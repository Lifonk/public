<?php
Class Inspector
{
    private $Classes = array(
        "cart",
        "main",
        "shop",
        "advertising"
    );

    public function IsClass($url)
    {
            if(in_array($url, $this->Classes))
            {
                return true;
            }
            else
            {
                return false;
            }

    }
}
?>