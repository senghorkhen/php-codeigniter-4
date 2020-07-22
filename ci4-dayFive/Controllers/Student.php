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
		$data = [];
		if($this->request->getMethod() == "post")
		{
			$rules = [
				'name' => 'required, alpha_numeric, min_length[3], max_length[20]',
				'email' => 'required, valid_email, min_length[6], max_length[50]',
				'age' => 'required, max_length[3], numeric',
				'profile' => 'required'
			];
			if($this->validate($rules)) {
				$student = new StudentModel();
				// insert to database
				$stuName = $this->request->getVar('name');
				$stuEmail = $this->request->getVar('email');
				$stuAge = $this->request->getVar('age');
				$stuProfile = $this->request->getFile('profile');
				$profileStudent = $stuProfile->getRandomName();

				$studentData = array(
					'name'=>$username,
					'email'=>$email,
					'age'=>$age,
					'profile'=>$profileStudent
				);
				$profile->move("images",$profileStudent);
				$student->createStu($studentData);

			}else {
				$dataStudent['messages'] = $this->validator;
			}
		}
		return redirect()->to('/student',$data);
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