<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Aufgaben extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        return view('todolist/aufgaben');
    }
}