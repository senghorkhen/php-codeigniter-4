<?php namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['email', 'password', 'address', 'role'];


    // public function createUser($userInfo)
    // {
    //     $this->insert([
    //             'email'=>$userInfo['email'],                
    //             'password'=>$userInfo['password'],
    //             'address'=> password_hash($userInfo['address'], PASSWORD_DEFAULT),
    //             'role'=>$userInfo['role'],
    //     ]);
    // }
}