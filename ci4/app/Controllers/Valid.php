<?php

class Valid extends CI_Controller {

        public function index 
        {
            $config = array(
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'You must provide a %s.',
                ),
        ),
        array(
                'checkbox'=> 'checked',
                'rules' => 'required'
        )    
        );

        $this->form_validation->set_rules($config);
        }
        
        public function person_val()
        {
                $this->form_validation->set_rules(
                        'username', 'Username',
                        'required|min_length[5]|max_length[12]|is_unique[users.username]',
                    array(
                        'required'      => 'You have not provided %s.',
                        'is_unique'     => 'This %s already exists.'
                    )
                );
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        }
}