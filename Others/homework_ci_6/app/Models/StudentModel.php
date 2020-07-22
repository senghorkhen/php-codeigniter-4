<?php namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table      = 'student';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $allowedFields = ['name', 'email', 'age','profile'];

    public function addStudent($student)
{
    $this->insert([
            'name'=>$student['name'],
            'email'=>$student['email'],
            'age'=>$student['age'],
            'profile'=>$student['profile'],
            
        
    ]);
}

}
