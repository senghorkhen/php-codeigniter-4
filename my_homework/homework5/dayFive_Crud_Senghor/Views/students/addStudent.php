<?php namespace App\Controllers;
use App\Models\StudentModel;
class Student extends BaseController
{
	public function index()
	{
        $student = new StudentModel();
        $data['students'] = $student->findAll();		
        return view('students/index', $data);
	}

    public function showFormAdd()
	{
		return view('students/addStudent');
    }
 
    public function addStudent()
	{
		helper(['form']);
		$student = new StudentModel();
		if($this->request->getMethod() == "post")
		{
			$username = $this->request->getVar('name');
			$email = $this->request->getVar('email');
			$age = $this->request->getVar('age');
			$profile = $this->request->getFile('profile');
			$profileStudent = $profile->getRandomName();
			$studentData = array(
				'name'=>$username,
				'email'=>$email,
				'age'=>$age,
				'profile'=>$profileStudent
			);
			$student->insert($studentData);
			$profile->move("images",$profileStudent);
		}
		return redirect()->to('/student');
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
		return view('students/editStudent', $data);
    }
    
    public function updateStudent()
	{
        $student = new StudentModel();
        $student->update($_POST['id'], $_POST);
		return redirect()->to('/student');
    }
	
}