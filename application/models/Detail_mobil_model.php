<?php
class Detail_mobil_model extends CI_Model
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
        $this->db->where('DETAIL_MOBIL.NEWS_CAT_FID = JENIS_MOBIL.NEWS_CAT_ID');
        $this->db->order_by('NEWS_ID DESC');
        $Q = $this->db->get('DETAIL_MOBIL, JENIS_MOBIL');

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
        $this->db->where('DETAIL_MOBIL.NEWS_CAT_FID = JENIS_MOBIL.NEWS_CAT_ID');
        $this->db->where('DETAIL_MOBIL.NEWS_ID',$id);
        $Q = $this->db->get('DETAIL_MOBIL, JENIS_MOBIL');

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
        $action = $this->db->query("INSERT INTO DETAIL_MOBIL (NEWS_ID, NEWS_CAT_FID, NEWS_TITLE, KODE_MOBIL, PLAT_MOBIL, NEWS_DESCRIPTION, TAHUN, HARGA_SEWA, AC, TRANSMISI, STATUS_MOBIL, NEWS_IMAGE) VALUES
        (news_id_seq.NEXTVAL, '".$this->input->post('news_cat_fid') ."', '".$this->input->post('news_title')."', '".$this->input->post('kode_mobil')."','".$this->input->post('plat_mobil')."', '".$this->input->post('news_description')."', 
        '".$this->input->post('tahun')."', '".$this->input->post('harga_sewa')."', '".$this->input->post('ac')."', '".$this->input->post('transmisi')."', 
        '".$this->input->post('status_mobil')."', '".$img."')");

            return $action;
    }

    // 4. fungsi untuk ubah data
    function update_by_admin($id,$img)
    {
        $data = array(
            'NEWS_CAT_FID' => $this->input->post('news_cat_fid'),
            'NEWS_TITLE' => $this->input->post('news_title'),
            'KODE_MOBIL' => $this->input->post('kode_mobil'),
            'PLAT_MOBIL' => $this->input->post('plat_mobil'),
            'NEWS_DESCRIPTION' => $this->input->post('news_description'),
            'TAHUN' => $this->input->post('tahun'),
            'AC' => $this->input->post('AC'),
            'TRANSMISI' => $this->input->post('transmisi'),
            'STATUS_MOBIL' => $this->input->post('status_mobil'),
            'NEWS_IMAGE' => "$img"
        );

        $this->db->where('NEWS_ID',$id);
        $action = $this->db->update('DETAIL_MOBIL',$data);
        return $action;
    }

    // 5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('NEWS_ID', $id);
        $action = $this->db->delete('DETAIL_MOBIL');
        return $action;
    }

    // 6. fungsi menampilkan data dengan model dropdown list
    function get_drop_down(){
    }
}
?>