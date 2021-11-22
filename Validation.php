<?php


class Validation
{
    private $username;
    private $email;


    /*
     * Конструктор принимает на вход два значения - имя пользователя и email
     * */
    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }


    /*
     * ф-я делает проверку имени пользователя, сначала проверяет на пустоту, а после на количество символов
     * */
    public function validationUsername () {
        if (empty($this->username)) {
            return 1;
        } elseif (strlen($this->username) < 3 || strlen($this->username) > 25) {
            return 2;
        }
    }


    /*
     * фунуция делает проверку email на пустоту
     * */
    public function validationEmail () {
        if (empty($this->email)) {
            return false;
        }
        return true;
    }
}