<?php namespace App\Controllers;

class Student extends BaseController
{
	public function index()
	{
		return view('/student/index', $data);
	}
	public function showSubject()
	{
		return view('/student/subject');
	}
	public function viewAllStudent()
	{
		return view('student/list');
	}


}