<?php
class advertising
{
    static function action()
    {
        require_once(realpath('View/Action_adv.php'));
    }
}
(new advertising)->action();
?>