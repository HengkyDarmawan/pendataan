<?php
class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('m_login');
        $id = $this->ci->session->userdata('id');
        $user_data = $this->ci->m_login->get($id)->row();
        return $user_data;
    }
}
