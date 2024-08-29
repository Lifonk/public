<?php
class shop
{
    static function action()
    {
        require_once(realpath('View/Action_shop.php'));
    }
}
(new shop)->action();
?>