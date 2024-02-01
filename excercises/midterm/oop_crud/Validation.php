<?php

class Validation
{
    public static function fieldValidation($name, $email, $address)
    {
        if (empty($name) || empty($email) || empty($address)) {
            die('Field can not be empty');
        }
    }

    public static function emailValidation($mail)
    {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            die('Email is not valid');
        }
    }

}