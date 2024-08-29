<?php
class shop
{
    static function action()
    {
        require_once(realpath('View/Action_shop.php'));
    }
}
$shop = new shop();
$shop -> action();
?>