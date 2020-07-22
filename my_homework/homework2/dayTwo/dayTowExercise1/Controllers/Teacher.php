<?php namespace App\Controllers;

class Teacher extends BaseController
{
	public function index()
	{
		return view('teachers/index');
	}

	public function showAttendance()
	{
		return view('teachers/attendance');
	}

	public function viewAllTeacher()
	{
		return view('teachers/teacher');
	}

}