<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('ses_id');
    if ($user_session) {
        redirect('Barang');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('ses_id');
    if (!$user_session) {
        redirect('Auth');
    }
}

function check_access()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('akses') == '1';
    if (!$user_session) {
        redirect('Barang');
    }
}
