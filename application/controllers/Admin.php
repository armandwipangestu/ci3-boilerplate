<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        _checkIsLogin();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user_data', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('layout/layout_header', $data);
        $this->load->view('layout/layout_topbar');
        $this->load->view('layout/layout_sidebar');
        $this->load->view('admin/admin_index');
        $this->load->view('layout/layout_footer');
    }

    public function role()
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user_data', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required|is_unique[user_role.role]', [
            'required' => "Role Name can't be empty",
            'is_unique' => 'A role with name "' . htmlspecialchars($this->input->post('role'), true) . '" already exists. Please use another name if you want to add it!'
        ]);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('layout/layout_header', $data);
            $this->load->view('layout/layout_topbar');
            $this->load->view('layout/layout_sidebar');
            $this->load->view('admin/admin_role');
            $this->load->view('layout/layout_footer');
        } else {
            $role = htmlspecialchars($this->input->post('role'), true);
            $this->db->insert('user_role', ['role' => $role]);

            $this->session->set_flashdata('message', '<div class="alert alert-success mb-4">Role "<b>' . $role . '</b>" has been added!</div>');
            redirect('admin/role');
        }
    }

    public function role_access($role_name)
    {
        $data['title'] = 'Change Role Access';
        $data['user'] = $this->db->get_where('user_data', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['role' => $role_name])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('layout/layout_header', $data);
        $this->load->view('layout/layout_topbar');
        $this->load->view('layout/layout_sidebar');
        $this->load->view('admin/admin_role_access');
        $this->load->view('layout/layout_footer');
    }

    public function change_role_access()
    {
        $menu_id = htmlspecialchars($this->input->post('menuId'));
        $role_id = htmlspecialchars($this->input->post('roleId'));

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success mb-4">Access has been updated!</div>');
    }

    public function change_role_by_id()
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user_data', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required|is_unique[user_role.role]', [
            'required' => "Role Name can't be empty",
            'is_unique' => 'A role with name "' . htmlspecialchars($this->input->post('role'), true) . '" already exists. Please use another name if you want to change it!'
        ]);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('layout/layout_header', $data);
            $this->load->view('layout/layout_topbar');
            $this->load->view('layout/layout_sidebar');
            $this->load->view('admin/admin_role');
            $this->load->view('layout/layout_footer');
        } else {
            $id = htmlspecialchars($this->input->post('id'));
            $role = htmlspecialchars($this->input->post('role'), true);
            $roleBefore = $this->db->get_where('user_role', ['id' => $id])->row_array();

            $this->db->where('id', $id);
            $this->db->update('user_role', ['role' => $role]);

            $this->session->set_flashdata('message', '<div class="alert alert-success mb-4">Role "<b>' . $roleBefore['role'] . '</b>" has been change to "<b>' . $role . '</b>"!</div>');
            redirect('admin/role');
        }
    }

    public function delete_role_by_id()
    {
        $id = $this->uri->segment(3);
        $role = $this->db->get_where('user_role', ['id' => $id])->row_array()['role'];
        $this->db->where('id', $id);
        $this->db->delete('user_role');

        $this->session->set_flashdata('message', '<div class="alert alert-success mb-4">Role "<b>' . $role . '</b>" has been deleted!</div>');
        redirect('admin/role');
    }

    public function get_role_by_id($roleId)
    {
        $role = $this->db->get_where('user_role', ['id' => $roleId])->row_array();
        exit(json_encode($role));
    }
}
