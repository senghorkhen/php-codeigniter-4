<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		return view('admins/index');
	}

	public function showDashboard()
	{
		return view('admins/dashboard');
	}

	public function viewAllUser()
	{
		return view('admins/user');
	}

}