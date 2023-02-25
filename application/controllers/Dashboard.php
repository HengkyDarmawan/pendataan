<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data['title'] = "Dashboard";
        $data['pasien'] = $this->m_pasien->getDataPasien();

        $this->load->view('header', $data);
        $this->load->view('dashboard');
        $this->load->view('footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah pasien";

        $this->form_validation->set_rules('rm', 'RM', 'required|numeric');
        $this->form_validation->set_rules('namaPasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tgl_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('namaPt', 'Nama PT', 'required');
        $this->form_validation->set_rules('paket', 'Paket', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('pasien/tambah');
            $this->load->view('footer');
        } else {
            $this->m_pasien->tambahPasien();
            $this->session->set_flashdata('flash', 'Di Tambahkan');
            redirect('dashboard');
        }
    }

    public function hapus($id)
    {
        $this->m_pasien->hapusPasien($id);
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('dashboard');
    }
    public function edit($id)
    {
        $data['title'] = "Edit Pasien";
        $data['pasien'] = $this->m_pasien->getPasienId($id);

        $this->form_validation->set_rules('rm', 'RM', 'required|numeric');
        $this->form_validation->set_rules('namaPasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tgl_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('namaPt', 'Nama PT', 'required');
        $this->form_validation->set_rules('paket', 'Paket', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('pasien/edit', $data);
            $this->load->view('footer');
        } else {
            $this->m_pasien->editPasien();
            $this->session->set_flashdata('flash', 'Di Edit');
            redirect('dashboard');
        }
    }
    public function laporanPasien()
    {
        $data['title'] = "Laporan Pasien";
        $this->load->view('header', $data);
        $this->load->view('pasien/laporan-pasien', $data);
        $this->load->view('footer');
    }
    public function cetakLaporan()
    {
        $this->load->library('dompdf_gen');
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $data['laporan'] = $this->m_pasien->filter_laporan($tgl_mulai, $tgl_akhir);
        $this->session->set_userdata('tgl_mulai', $tgl_mulai);
        $this->session->set_userdata('tgl_akhir', $tgl_akhir);
        $this->load->view('pasien/cetak-laporan', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan Pasien", array('Attachment' => 0));
    }
}
