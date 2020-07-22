<?php namespace App\Controllers;
use App\Models\AdminModel;
class Admin extends BaseController
{
	public function index()
	{
		$data = [

			'name' => 'Romdoul',
			'email'=> 'romdoul@gmail.com',
			'age'=> 20,
			'password' => 1234,
			'province' => 'Takaev'
		];
		$user = new AdminModel();
		$user->insert($data);

		$allUser['userData'] = $user->findAll();
		return view('admins/index', $allUser);

		return view('admins/index');
	}


	// public function deleteUser($id)
	// {
	// 	$user = new AdminModel();
	// 	$userId = $user->find($id);
	// 	$user->delete($id);
	// 	return redirect()->to("/admin");
	// }

	public function showDashboard()
	{
		return view('/admins/dashboard');
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
