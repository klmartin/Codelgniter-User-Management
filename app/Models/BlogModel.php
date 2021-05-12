<?php namespace App\Models;

use CodeIgniter\Model;

Class BlogModel extends Model{
	protected $table = 'blogs'
	protected $allowedFields = ['title', 'description', 'content', 'user_id'];
}