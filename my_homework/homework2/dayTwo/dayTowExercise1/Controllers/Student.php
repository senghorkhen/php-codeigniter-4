<?php namespace App\Controllers;

class Student extends BaseController
{
	public function index()
	{
		return view('students/index');
	}

	public function showProject()
	{
		return view('students/project');
    }
    
    public function viewAllStudent()
	{
		return view('students/student');
	}

}