<?php

class M_pasien extends CI_Model
{
    public function getDataPasien()
    {
        return $this->db->get('pasien')->result_array();
    }
    public function tambahPasien()
    {
        $data = [
            "rm" => $this->input->post('rm', true),
            "nama_pasien" => $this->input->post('namaPasien', true),
            "tgl_daftar" => $this->input->post('tgl_daftar', true),
            "nama_pt" => $this->input->post('namaPt', true),
            "paket" => $this->input->post('paket', true),
            "harga" => $this->input->post('harga', true)
        ];
        $this->db->insert('pasien', $data);
    }
    public function hapusPasien($id)
    {
        $this->db->delete('pasien', ['id' => $id]);
    }
    public function getPasienId($id)
    {
        return $this->db->get_where('pasien', ['id' => $id])->row_array();
    }
    public function editPasien()
    {
        $data = [
            "rm" => $this->input->post('rm', true),
            "nama_pasien" => $this->input->post('namaPasien', true),
            "tgl_daftar" => $this->input->post('tgl_daftar', true),
            "nama_pt" => $this->input->post('namaPt', true),
            "paket" => $this->input->post('paket', true),
            "harga" => $this->input->post('harga', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pasien', $data);
    }

    public function filter_laporan($tgl_mulai, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where('pasien.tgl_daftar>=', $tgl_mulai);
        $this->db->where('pasien.tgl_daftar<=', $tgl_akhir);

        return $this->db->get()->result_array();
    }
}
