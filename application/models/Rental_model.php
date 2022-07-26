<?php
class Rental_model extends CI_Model
{
    function _construct()
    {
        parent::_construct();
    }

    // 1. fungsi untuk menampilkan semua data
    function get_all()
    {
        $data = array();
        $this->db->select('*');
        $this->db->order_by('NAMA ASC');
        $Q = $this->db->get('CUSTOMERS');

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
        $this->db->where('CUSTOMERS.CUSTOMER_ID',$id);
        $Q = $this->db->get('CUSTOMERS');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }

    // 3. fungsi untuk tambah data
    function add($img)
    {
        $action = $this->db->query("INSERT INTO CUSTOMERS (CUSTOMER_ID, NAMA, ALAMAT, KODE_MOBIL, DURASI_SEWA, NO_HP, IMAGE_TRF) VALUES
        (customer_id_seq.NEXTVAL, '".$this->input->post('nama') ."', '".$this->input->post('alamat')."', '".$this->input->post('kode_mobil')."', 
        '".$this->input->post('durasi_sewa')."', '".$this->input->post('no_hp')."', '".$img."')");

            return $action;
    }

    // 5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('CUSTOMER_ID', $id);
        $action = $this->db->delete('CUSTOMERS');
        return $action;
    }
}
?>