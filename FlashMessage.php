<?php


class FlashMessage
{
    //функкция устанавливает флэш сообщение
    public static function set_flash_message($key, $message) {
        $_SESSION[$key] = $message;
    }

//функция показывает установелнное флэш сообщение
    public static function display_flash_message($key) {
        if (isset($_SESSION[$key])) {
            echo $_SESSION[$key];
            unset($_SESSION[$key]);
        }
    }
}