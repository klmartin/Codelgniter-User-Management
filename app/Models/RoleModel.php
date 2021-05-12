<?php namespace App\Models;

use CodeIgniter\Model;

Class RoleModel extends Model{
	protected $table = 'roles';
	protected $allowedFields = ['role_name', 'role_desc', 'created_at'];
}