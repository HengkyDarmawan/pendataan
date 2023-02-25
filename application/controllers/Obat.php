<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data['title'] = "Obat";
        $data['obat'] = $this->m_obat->getDataObat();
        $this->load->view('header', $data);
        $this->load->view('obat/obat', $data);
        $this->load->view('footer');
    }
    public function tambah()
    {
        $data['title'] = "Tambah Obat";

        $this->form_validation->set_rules('kodeObat', 'Kode Obat', 'required');
        $this->form_validation->set_rules('namaObat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('stokObat', 'Stok Obat', 'required|numeric');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('hrgObat', 'Harga Obat', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('obat/tambah');
            $this->load->view('footer');
        } else {
            $this->m_obat->tambahObat();
            $this->session->set_flashdata('flash', 'Di Tambahkan');
            redirect('obat');
        }
    }
    public function hapus($id)
    {
        $this->m_obat->hapusObat($id);
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('obat');
    }
    public function edit($id)
    {
        $data['title'] = "Edit Obat";
        $data['obat'] = $this->m_obat->getObatId($id);

        $this->form_validation->set_rules('kodeObat', 'Kode Obat', 'required');
        $this->form_validation->set_rules('namaObat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('stokObat', 'Stok Obat', 'required|numeric');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('hrgObat', 'Harga Obat', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('obat/edit', $data);
            $this->load->view('footer');
        } else {
            $this->m_obat->editObat();
            $this->session->set_flashdata('flash', 'Di Edit');
            redirect('obat');
        }
    }

    public function laporanObat()
    {
        $data['title'] = "Laporan Obat";
        $this->load->view('header', $data);
        $this->load->view('obat/laporan-obat', $data);
        $this->load->view('footer');
    }
    public function cetakLaporanObat()
    {
        $this->load->library('dompdf_gen');
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $data['laporan'] = $this->m_obat->filter_laporan_obat($tgl_mulai, $tgl_akhir);
        $this->session->set_userdata('tgl_mulai', $tgl_mulai);
        $this->session->set_userdata('tgl_akhir', $tgl_akhir);
        $this->load->view('obat/cetak-laporan-obat', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan Obat", array('Attachment' => 0));
    }
}
