<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_email','user_password','user_created_at'];

    public function getUsers($user_name =null)
    {
    	if (!$user_name)
    	{
    		return $this->findAll();
    	}

    	return $this->asArray()
    		->where(['user_name' => $user_name])
    		->first();
    }

    public function deleteUsers($id)
    {
    	$this->db->where('user_id', $id);
    	$this->db->delete('users');
    	return true;
    }

}

