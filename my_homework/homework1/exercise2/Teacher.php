<?php namespace App\Controllers;
class Teacher extends BaseController
{
    public function index()
    {
        return "Good morning Teachers";
    }

    public function teaching()
    {
        return "I am teaching CodeIgniter 4";
    }

    public function managesubject($subject= "PHP CodeIgniter 4")
    {
       return "I am teaching: ".$subject;
    }

}