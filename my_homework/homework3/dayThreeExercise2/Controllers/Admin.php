<?php namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			"name" => "Sokhour",
			"email" => "sokhour@gmail.com",
			"age" => 22,
			"password" => 22222,
			"province" => "KampongThom"
		];
		$user = new AdminModel();
		// $user->insert($data);

		// get all data from users table
		$allUser['userData'] = $user->findAll(); // keyword(findAll) connect all data 

		return view('admins/index', $allUser);
	}

	public function delete($id)
	{
		$user = new AdminModel();
		$user = $user->find($id); // select * from users where id = $id;
		$user->delete();
		return redirect()->to("/admin"); 
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
