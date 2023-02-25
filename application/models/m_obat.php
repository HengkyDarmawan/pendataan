<?php

class M_obat extends CI_Model
{
    public function getDataObat()
    {
        return $this->db->get('obat')->result_array();
    }
    public function tambahObat()
    {
        $data = [
            "kode_obat" => $this->input->post('kodeObat', true),
            "nama_obat" => $this->input->post('namaObat', true),
            "stok_obat" => $this->input->post('stokObat', true),
            "tgl_masuk" => $this->input->post('tgl_masuk', true),
            "harga_obat" => $this->input->post('hrgObat', true)
        ];
        $this->db->insert('obat', $data);
    }
    public function hapusObat($id)
    {
        $this->db->delete('obat', ['id' => $id]);
    }
    public function getObatId($id)
    {
        return $this->db->get_where('obat', ['id' => $id])->row_array();
    }
    public function editObat()
    {
        $data = [
            "kode_obat" => $this->input->post('kodeObat', true),
            "nama_obat" => $this->input->post('namaObat', true),
            "stok_obat" => $this->input->post('stokObat', true),
            "tgl_masuk" => $this->input->post('tgl_masuk', true),
            "harga_obat" => $this->input->post('hrgObat', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('obat', $data);
    }

    public function filter_laporan_obat($tgl_mulai, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('obat');
        $this->db->where('obat.tgl_masuk>=', $tgl_mulai);
        $this->db->where('obat.tgl_masuk<=', $tgl_akhir);

        return $this->db->get()->result_array();
    }
}
