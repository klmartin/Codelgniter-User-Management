<?php namespace App\Models;

use CodeIgniter\Model;

Class UserRoleModel extends Model{
	protected $table = 'roles_users';
	protected $allowedFields = ['user_id', 'role_id' ];
}