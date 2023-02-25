<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data['title'] = "Data User";
        $data['user'] = $this->m_user->getDataUser();
        $this->load->view('header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('footer');
    }
    public function tambah()
    {
        $data['title'] = "Tambah User";

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('user/tambah');
            $this->load->view('footer');
        } else {
            $this->m_user->tambahUser();
            $this->session->set_flashdata('flash', 'Di Tambahkan');
            redirect('user');
        }
    }
    public function hapus($id)
    {
        $this->m_user->hapusUser($id);
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('user');
    }
    public function edit($id)
    {
        $data['title'] = "User Obat";
        $data['user'] = $this->m_user->getUserId($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('footer');
        } else {
            $this->m_user->editUser();
            $this->session->set_flashdata('flash', 'Di Edit');
            redirect('user');
        }
    }
}
