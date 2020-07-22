<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = "tb_users";
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['email','password','address','role'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    public function createUsers($userInfo){
        $this->insert([
            'email' => $userInfo['email'],
            'password' => $userInfo['password'],
            'address' => $userInfo['address'],
            'role' => $userInfo['role'],
        ]);
    }

    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['password'])){
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
        }
        return $data;
    }





}
