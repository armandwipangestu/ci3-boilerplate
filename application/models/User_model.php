<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function getRole($role)
    {
        $role = $this->db->escape($role);

        $query = $this->db->query("SELECT
                    role
                FROM user_role AS ur
                WHERE ur.id = $role")->row_array();

        return $query;
    }
}
