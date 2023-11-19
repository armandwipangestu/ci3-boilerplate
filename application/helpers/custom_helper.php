<?php

function _checkIsLogin()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        // use role_id based on database
        $email = $ci->session->userdata('email');
        $roleId = $ci->db->query("
            SELECT `user_data`.`role_id`
            FROM `user_data` 
            WHERE `user_data`.`email` = '$email'
        ")->row_array()['role_id'];

        $menu = $ci->uri->segment(1);
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menuId = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $roleId,
            'menu_id' => $menuId
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}
