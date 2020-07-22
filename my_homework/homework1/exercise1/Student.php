<?php namespace App\Controllers;
class Student extends BaseController
{
    public function index()
    {
        return "I am a student";
    }

    public function learning()
    {
        return "I really love CodeIgniter 4";
    }

    public function playSport()
    {
        return "we play the football";
    }
}