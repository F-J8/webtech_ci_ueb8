<?php namespace App\Models;
use CodeIgniter\Model;

class MitgliederModel extends Model
{
    public function getData() {
        $result = $this->db->query('SELECT * FROM mitglieder');
        return $result->getResultArray();
    }

    public function getMails() {
        $result = $this->db->query('SELECT email FROM mitglieder');
        return $result->getResultArray();
    }

    public function getUserByID($id) {
        $personen = $this->getData();
        foreach($personen as $person) {
            if($person["id"] == $id) {
                return $person;
            }
        }
    }

    public function getUserByMail($mail) {
        $personen = $this->getData();
        foreach($personen as $person) {
            if($person["email"] == $mail) {
                return $person;
            }
        }
    }

    public function createPerson() {
        $this->personen= $this->db->table('mitglieder');
        $this->personen->insert(array(
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)));

        return $this->db->insertID();
    }

    public function deletePerson($personen_id =null) {

        $this->personen= $this->db->table('mitglieder');
        $this->personen->where('mitglieder.id', $personen_id);
        $this->personen->delete();

    }

    public function updatePerson($personen_id =null) {
        $this->personen= $this->db->table('mitglieder');
        $this->personen->where('mitglieder.id', $personen_id);

        if(empty($_POST['password'])) {
            $this->personen->update(array(
                'username' => $_POST['username'],
                'email' => $_POST['email']));
        }
        else {
            $this->personen->update(array(
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)));
        }
    }
}