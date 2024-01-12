<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //$this->authenticate();
    }

    public function register()
    {
        // Handle user registration form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->form_validation->set_rules('username', 'username', 'required|is_unique[users.username]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('nik', 'NIK', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() === true) {
                // Insert user data into the database
                $data = [
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'nik' => $this->input->post('nik'),
                    'email' => $this->input->post('email'),
                ];

                $this->db->insert('users', $data);

                // Redirect to login page or perform other actions

                redirect('dist/login', 'refresh');
            }
        }
        //echo validation_errors();
        //error_log(validation_errors());
        redirect('dist/regist', 'refresh');

    }

    public function login()
    {
        // Handle user login form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === true) {
                // Check user credentials from the database
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $user = $this->db->get_where('users', ['username' => $username])->row();

                if ($user && password_verify($password, $user->password) && $user->is_active === "1") {
                    // Set user session data
                    $this->session->set_userdata('username', $username);

                    redirect('dist/index_0', 'refresh');

                }
                redirect('dist/login', 'refresh');
                /*
            else {
            $response = array(
            'status' => 'error',
            'message'=> 'Contact Your Administrator for Activate Account'
            );
            echo json_encode($response);
            }
             */
            }
        }

        redirect('dist/login', 'refresh');
    }

    public function logout()
    {
        // Destroy user session and redirect to login page
        $this->session->sess_destroy();
        redirect('dist/login', 'refresh');
    }
}
