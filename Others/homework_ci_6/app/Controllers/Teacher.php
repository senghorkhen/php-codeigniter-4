<?php namespace App\Controllers;

class Teacher extends BaseController
{
	public function index()
	{
		return view('teachers/index');
    }
	public function showAttendance()
	{
		$data = [
			'name' => array('Ronan', 'Rady', 'Channak', 'Seiha', 'Hugo'),
			'position'=> array('Coordinator', 'Trainer', 'Teacher', 'Manager','Internship'),
			'age'=> array(30, 25, 31, 40, 20),
			'location'=> array('France', 'Cambodia', 'Cambodia', 'Cambodia', 'France')
			];
		return view('teachers/attendance',$data);
	}
    
    public function viewAllTeacher()
	{
		return view('teachers/teacher');
	}
	//--------------------------------------------------------------------

}