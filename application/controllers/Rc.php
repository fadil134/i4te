<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rc extends CI_Controller
{
    /*
    public function __construct()
    {
        parent::__construct();

        // Call the authenticate method for additional security checks
        $this->authenticate();
    }
    */

    public function s_dev(){
        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }

        $id = $this->input->post('id');
        $data = $this->R_c->sub_dev($id);
        echo json_encode($data);
    }

    public function r_c(){
        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }
        
        $id = $this->input->post('id');
        $data = $this->R_c->rc($id);
        echo json_encode($data);
    }

}

/* End of file Rc.php */
