<?php namespace App\Controllers;
use App\Models\MitgliederModel;
use CodeIgniter\Controller;

class Personen extends BaseController
{
    public function index()
    {
        if (!(isset($_POST['btnBearbeiten']) || isset($_POST['btnLoeschen']) || isset($_POST['btnNeu']) ||
            isset($_POST['btnErstellen']) || isset($_POST['btnSpeichern']) || isset($_POST['btnBestaetigen']) || isset($_POST['btnAbbrechen']))) {
            $mymodel = new MitgliederModel();
            $data['personen'] = $mymodel->getData();

            echo view('templates/header');
            return view('todolist/person', $data);
        }

        if ((isset($_POST['btnBearbeiten']) || isset($_POST['btnLoeschen']) || isset($_POST['btnNeu']) ||
            isset($_POST['btnErstellen']) || isset($_POST['btnSpeichern']) || isset($_POST['btnBestaetigen']) || isset($_POST['btnAbbrechen']))) {
            $mymodel = new MitgliederModel();

            if(isset($_POST['btnLoeschen'])) {
                $data['pers'] = $mymodel->getUserByID($_POST['btnLoeschen']);
                echo view('templates/header');
                echo view('todolist/person_edit', $data);
            }
            if(isset($_POST['btnBearbeiten'])) {
                $data['pers'] = $mymodel->getUserByID($_POST['btnBearbeiten']);
                echo view('templates/header');
                echo view('todolist/person_edit', $data);
            }
            if(isset($_POST['btnNeu'])) {
                $data['pers'] = $mymodel->getUserByID($_POST['btnNeu']);
                echo view('templates/header');
                echo view('todolist/person_edit', $data);
            }
            if(isset($_POST['btnErstellen'])) {
                $mymodel->createPerson();
                return redirect()->to(base_url('Personen/index'), NULL, 'refresh');
            }

            if(isset($_POST['btnBestaetigen'])) {
                $mymodel->deletePerson($_POST['btnBestaetigen']);
                return redirect()->to(base_url('Personen/index'), NULL, 'refresh');
            }

            if(isset($_POST['btnSpeichern'])) {
                $mymodel->updatePerson($_POST['btnSpeichern']);
                return redirect()->to(base_url('Personen/index'), NULL, 'refresh');
            }

            if(isset($_POST['btnAbbrechen'])) {
                return redirect()->to(base_url('Personen/index'), NULL, 'refresh');
            }
        }
    }
}