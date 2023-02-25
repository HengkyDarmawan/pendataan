<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $post = $this->input->post(null, true);
        if (isset($_POST['login'])) {
            $query = $this->m_login->proses_login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id' => $row->id,
                    'name' => $row->name,
                    'email' => $row->email,
                );
                $this->session->set_userdata($params);
                echo "<script>
                    alert('Selamat, Login Berhasil');
                    window.location='" . base_url('dashboard') . "'
                    </script>";
            } else {
                echo "<script>
                    alert('Login Anda Gagal, Cek lagi email dan password anda');
                    window.location='" . base_url('auth') . "'
                    </script>";
            }
        }
    }
    public function logout()
    {
        $params = array('id', 'name', 'email');
        $this->session->sess_destroy($params);
        redirect('auth');
    }
}
