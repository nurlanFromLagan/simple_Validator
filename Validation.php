<?php


class Validation
{

    /*
     * ф-я делает проверку поля на пустоту, в основном применяется для обязательных к заполнению полей
     * */
    public function required ($field) {
        if (empty($field)) {
            return false;
        }
        return true;
    }


    /*
     * ф-я делает проверку на количество заданных символов в поле, где $min - минимальное количество символов и $max - максимальное
     * */
    public function checkFieldLength ($field, int $min, int $max) {

        if (strlen($field) < $min || strlen($field) > $max) {
            return false;
        }
        return true;
    }



    /*
     * ф-я делает проверку email по фильтру, проверяет на корректность введенный email
     * */
    function validateEmail ($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }


}