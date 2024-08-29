<?php
class advertising
{
    static function action()
    {
        require_once(realpath('View/Action_adv.php'));
    }
}
$advertising = new advertising();
$advertising -> action();
?>