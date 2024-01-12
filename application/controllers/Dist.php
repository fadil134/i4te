<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dist extends CI_Controller
{
    /*
    public function __construct()
    {
    parent::__construct();

    // Call the authenticate method for additional security checks
    //$this->authenticate();
    }
     */
    public function index()
    {

        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }

        $data = array(
            'title' => "Ecommerce Dashboard",
        );
        $this->load->view('dist/index', $data);
    }

    public function index_0()
    {
        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }

        $data = array(
            'title' => "Dashboard",
        );
        $this->load->view('dist/blank', $data);
    }

    public function gamas()
    {
        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }
        
        $data = array(
            'title' => "Gamas &rsaquo; Form",
            'kota' => $this->Kota_model->cluster(),
            'device' => $this->R_c->device(),
            'segment' => $this->Segment->device(),
            'case' => $this->R_c->case(),
            'act' => $this->R_c->act(),
        );
        $this->load->view('dist/gamas', $data);
    }

    public function login()
    {
        $data = array(
            'title' => "Gamas &rsaquo; Login",
        );
        $this->load->view('dist/auth-login', $data);
    }

    public function regist()
    {
        $data = array(
            'title' => "Gamas &rsaquo; Register",
        );
        $this->load->view('dist/auth-register', $data);
    }

}
