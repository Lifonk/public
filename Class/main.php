<?php
class main
{
    static function action()
    {
        require_once(realpath('View/Action_main.php'));
    }
}
(new main)->action();
?>