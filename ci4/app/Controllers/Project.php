<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Project extends BaseController
{

    public function index()
    {
        /*
        if($this->session->get('login')) {
            echo "test";
        }*/

        echo view('templates/header');
        return view('todolist/project');
    }

    public function create() {
        
        $this->load->view('create_project_form');

        
        if ($this->input->post()) {
            $project_data = $this->input->post();
            
            $this->project_model->save($project_data);
            redirect('projects');
        }
    }
    public function edit($id) {
        
        $project = $this->project_model->get($id);

        
        $this->load->view('edit_project_form', $project);

        
        if ($this->input->post()) {
            $project_data = $this->input->post();
            
            $this->project_model->update($id, $project_data);
            redirect('projects');
        }
    }


    
    public function delete($id) {
        // Löschen des Projekts mit der ID $id
        $this->project_model->delete($id);
        // Entfernen der Projekt-ID aus der Sitzung
        $this->session->unset_userdata('current_project_id');
        redirect('projects');
    }
}