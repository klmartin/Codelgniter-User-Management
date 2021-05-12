<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        echo view('layouts/header');
        echo view('dashboard');
        echo view('layouts/footer');
    }
}