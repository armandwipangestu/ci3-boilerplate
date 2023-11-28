<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogAction_model extends CI_Model
{
    public function insertLog($data)
    {
        $this->db->insert('user_log_action', $data);
    }
}
