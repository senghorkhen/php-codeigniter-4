<?php namespace App\Controllers;
use App\Models\StudentModel;
class Student extends BaseController
{
	public function index()
	{
		$student = new StudentModel();
		$data['students'] = $student->findAll();
		return view('students/index',$data);
	}
	
    public function showFormAdd()
	{
		return view('students/addStudent');
	}
	
    public function addStudent()
	{
		$student = new StudentModel();
		$data=[];
		helper(['form']);
		if($this->request->getMethod() == "post")
		{
		$rules=[

			 'name' => 'required|alpha_numeric|min_length[3]|max_length[20],',
			 'email' =>'required|valid_email|min_length[6]|max_length[50],',
			 'age'=>'required|max_length[3]|numeric',
			 //'profile'=>'required'
			

		];
		if($this->validate($rules))
		//insert to database
		{
		   $student = new StudentModel();
			$username = $this->request->getVar('name');
			$email = $this->request->getVar('email');
			$age = $this->request->getVar('age');
			$profile = $this->request->getFile('profile');
			$studentProfile = $profile->getRandomName();
			$studentData = array(
				'name'=>$username,
				'email'=>$email,
				'age'=>$age,
				'profile'=>$studentProfile
			);
			$student->insert($studentData);
			$profile->move("images",$studentProfile);
			return redirect()->to('/student');

		}else {
			$data['messages'] = $this->validator;
			return view('students/addStudent',$data);
		}
		
	}
}

	public function deleteStudent($id)
	{
		$student = new StudentModel();
		$student->delete($id);
		return redirect()->to('/student');
	}

	public function showFormEdit($id)
	{
		$student = new StudentModel();
		$data['student'] = $student->find($id);
		return view('students/editStudent',$data);
	}

	public function updateStudent()
	{
		$student = new StudentModel();
		$student->update($_POST['id'],$_POST);
		return redirect()->to('/student');
	}
	//--------------------------------------------------------------------

}