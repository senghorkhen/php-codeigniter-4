<?php namespace App\Models;
use CodeIgniter\Model;
class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'email', 'age', 'profile'];

    public function createStu($stu) 
    {
        $this->insert([
            'name' => $stu['name'],
            'email' => $stu['email'],
            'age' => $stu['age'],
            'profile' => $stu['profile']
            
        ]);
    }

}


