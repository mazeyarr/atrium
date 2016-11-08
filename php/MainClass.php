<?php
require 'Database.php';
/**
 * Created by PhpStorm.
 * User: Mazeyar
 * Date: 11/8/2016
 * Time: 10:06 AM
 */

class MainClass extends Database
{
    public function header () {
        return require ('../template/header/header.php');
    }
    public function footer () {
        return require ('../template/footer/footer.php');
    }
}