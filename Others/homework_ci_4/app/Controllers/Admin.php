<?php namespace App\Controllers;
use App\Models\AdminModel;
class Admin extends BaseController
{
	public function index()
	{
		$data =[
			"name" => "Romdule",
			"email" => "romdule@gmail.com",
			"age" => 20,
			"password" => 12345678,
			"province" => "kom pong cham"

		];
		$user = new AdminModel();
		$user->insert($data);
       // get all data from users table
		$allUser['userDate'] = $user->findAll();
		return view("admins/index",$allUser);
	
	}
	public function deleteUser($id)
	{
		$user = new AdminModel();
		$user->find($id);
		$user->delete($id);
		return redirect()->to("/admin");
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
		return view('admins/user',$data);
	}
	//--------------------------------------------------------------------

}