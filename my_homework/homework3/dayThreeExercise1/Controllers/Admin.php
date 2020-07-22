<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		return view('admins/index');
	}

	public function dashboard()
	{
		return view('admins/dashboard');
    }
    
    public function user()
	{
		return view('admins/user');
	}

}
