<?php
Class Inspector
{
    private $Classes = array(
        "/cart",
        "/main",
        "/shop",
        "/advertising"
    );

    public function IsClass($url)
    {
       foreach($this->Classes as $Class)
       {
            if($url == $Class)
            {
                return true;
            }
            else
            {
                require false;
            }
       }
    }
}
?>