<?php
require 'Database.php';
/**
 * Created by PhpStorm.
 * User: Mazeyar
 * Date: 11/8/2016
 * Time: 10:06 AM
 */

class MainClass
{
    private function validate($post){
        $errors = array();
        if ($post['first_name'] == '') {
            $errors[] = 'Voornaam is een verplicht veld';
        }
        if ($post['last_name'] == '') {
            $errors[] = 'Achternaam is een verplicht veld';
        }
        if (!filter_var(['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is incorrect ingevuld';
        }
        if ($post['birthday'] == '') {
            $errors[] = 'Incorrecte datum';
        }
        if ($post['street'] == '') {
            $errors[] = 'Straatnaam is een verplicht veld';
        }
        if ($post['house_number'] == '') {
            $errors[] = 'Huisnummer is een verplicht veld';
        }
        return $errors;
    }
    public function signup ($post) {
        $validation = $this->validate($post);
        $validation_count = count($validation);
        if ($validation_count > 0) {
            return $validation;
        }

    }

    public function header () {
        return require ('template/header/header.php');
    }
    public function footer () {
        return require ('template/footer/footer.php');
    }
}