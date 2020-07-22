<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'name' => 'Samnang Ros',
			'position'=> 'IT Admin',
			'age'=> 20,
			'province'=> 'Banteay Mean Chey',
			'email'=> 'samnang.ros@passerellesnumeriques.org'
		];
		return view('admins/index', $data);
	}

	public function showDashboard()
	{
		return view('admins/dashboard');
	}

	public function viewAllUser()
	{
		$data = [
			'name' => ['Ronan', 'Rady', 'Channak', 'Seiha', 'Hugo'],
			'position'=> ['Coordinator', 'Trainer', 'Teacher', 'Manager', 'Internship'],
			'age'=> [30, 25, 31, 40, 20],
			'location'=> ['France', 'Cambodia', 'Cambodia', 'Cambodia', 'France']
		];
			
		return view('admins/user', $data);
	}

}