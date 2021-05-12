<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
Use App\Models\RoleModel;
use App\Models\UserRoleModel;

  
class RolesController extends Controller
{
	
	public function index()
	{
		$model = new RoleModel();
		$data['role'] = $model->orderBy('id', 'DESC')->findAll();

		echo view('layouts/header', $data);
		echo view('manage-roles');
		echo view('layouts/footer');

	}

	public function deleteRole($id = null)
	{
		$model = new RoleModel();
    	$data['role'] = $model->where('id', $id)->delete();
		return redirect()->to( base_url('manage-roles') );
	}

	public function createRole()
	{
		echo view('layouts/header');
		echo view('createRole');
		echo view('layouts/footer');	
	}

	public function saveRole()
	{
		$model = new RoleModel();

		 $data = [
	            'role_name' => $this->request->getVar('name'),
	            'role_desc'  => $this->request->getVar('description'),
	            ];
	            $model->insert($data);
	            return $this->response->redirect(site_url('/manage-roles'));
	}

	public function assignView()
	{
		$model = new RoleModel();
		$data['roles'] = $model->orderBy('id', 'DESC')->findAll();

		$user = new UserModel();
		$userdata['userd'] = $user->orderBy('user_id', 'DESC')->findAll();

		echo view('layouts/header', $data);
		echo view('assignRole', $userdata);
		echo view('layouts/footer');
	}

	public function saveUserRole()
	{
		$model = new UserRoleModel();

		$data = [
			'user_id' => $this->request->getVar('user_id'),
			'role_id' => $this->request->getVar('role_id'),
		];
		$model->insert($data);
		session()->setFlashdata("message", "Role Successfully Assigned");
		return $this->response->redirect(site_url('/assign-roles'));
		redirect('RolesController/assignView');

	}

}


  //      helper(['form', 'url']);

   //      $rules = [
   //      	'role_name' => 'required|min_length[2]|max_length[25]',
   //      	'role_desc' => 'required|min_length[3]|max_length[255]',
   //      ];

   //      if($this->validate($rules)){
	  //       $model = new RoleModel();
	 
	  //       $data = [
	  //           'role_name' => $this->request->getVar('name'),
	  //           'role_desc'  => $this->request->getVar('description'),
	  //           ];
	  //       $model->save($data);
   //      return redirect()->to('/manage-roles');
   //      }
   //      else{
   //      	$data['validation'] = $this->validator;
   //      	echo view('layouts/header');
			// echo view('createRole', $data);
			// echo view('layouts/footer');
   //      }
