<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
    }

    public function index()
    {
        $data['title'] = "Sign In";
        $this->load->view('layout/layout_header', $data);
        $this->load->view('auth/auth_index');
        $this->load->view('layout/layout_footer_auth');
    }
}
