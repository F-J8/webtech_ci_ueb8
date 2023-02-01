<?php namespace App\Controllers;
use App\Models\ProjectModel;
use CodeIgniter\Controller;

class Start extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        return view('todolist/start');
    }
}