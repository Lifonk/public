<?php
class cart
{
    static function action()
    {
        require_once(realpath('View/Action_cart.php'));
    }
}
$cart= new cart();
$cart -> action();
?>
