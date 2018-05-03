<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utility{
    public static function d($data){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }

    public static function dd($data){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }
}