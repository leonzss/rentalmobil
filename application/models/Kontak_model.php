<?php
class Kontak_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // 1. fungsi untuk menampilkan semua data
    function get_all()
    {
        $data = array();
        $this->db->select('*');
        $this->db->order_by('NAMA ASC');
        $Q = $this->db->get('KONTAKS');

        if($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        return $data;
    }

    // 2. fungsi untuk melihat detail berdasarkan id
    function get_detail_by_id($id)
    {
        $data = array();
        $this->db->select('*');
        $this->db->where('KONTAKS.KONTAK_ID',$id);
        $Q = $this->db->get('KONTAKS');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }

    // 3. fungsi untuk tambah data
    function add()
    {
        $action = $this->db->query("INSERT INTO KONTAKS (KONTAK_ID, NAMA, SUBJEK, PESAN) VALUES (kontak_id_seq.NEXTVAL, '".$this->input->post('nama') ."', '".$this->input->post('subjek')."', '".$this->input->post('pesan')."')");

        return $action;
    }

    // 5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('KONTAK_ID', $id);
        $action = $this->db->delete('KONTAKS');
        return $action;
    }
}
?>