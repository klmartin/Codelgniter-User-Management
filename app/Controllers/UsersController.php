<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class UsersController extends Controller
{
    public function index()
    {
    	$model = new UserModel();
    	$data['user'] = $model->getUsers();

        $session = session();
        echo view('layouts/header', $data);
        echo view('manage-users');
        echo view('layouts/footer');
    }

    public function deleteUser($user_id = null)
    {
    	$model = new UserModel();
    	$data['user'] = $model->where('user_id', $user_id)->delete();
		return redirect()->to( base_url('users') );
    }

    public function edit($user_id = null)
    {
    	$model = new UserModel();
    	$data['user'] = $model->where('user_id', $user_id)->first();
    	echo view('layouts/header');
    	return view('edit-user', $data);
    	echo view('layouts/footer');

    }
    
    public function updateUser($user_id = null)
    {
    	//include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules))
        {
           $user = new UserModel();

            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
           $user->update($user_id, $data);
            // $model->save($data);
            return redirect()->to('/users');
        }
        else
        {
            $data['validation'] = $this->validator;
            echo view('layouts/header');
            echo view('edit-user', $data);
            echo view('layouts/footer');
        }
    }
}
 
    // public function update()
    // {  
    //     helper(['form', 'url']);
 
    //     $model = new UserModel();
 
    //     $id = $this->request->getVar('id');
 
    //     $data = [
    //         'name' => $this->request->getVar('txtName'),
    //         'email'  => $this->request->getVar('txtEmail'),
    //         'password'  => $this->request->getVar('txtPassword'),
    //         'city'  => $this->request->getVar('txtCity'),
    //     ];
 
    //     $save = $model->update($id,$data);
 
    //     return redirect()->to( base_url('users') );
    // }