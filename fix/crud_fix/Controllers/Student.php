<?php namespace App\Controllers;
use App\Models\AdminModel;
class Student extends BaseController
{
	public function index()
	{
		$student = new AdminModel();
		// $student->insert($data);
		$data['students'] = $student->findAll();
		return view('students/index', $data);

		return view('students/index');
	}

	public function showFormAdd()
	{
		return view('students/addStudent');
    }

    public function addStudent()
	{
        $students = new StudentModel();
        // $students->insert($_POST);
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
