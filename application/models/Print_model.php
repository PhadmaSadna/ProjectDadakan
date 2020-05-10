<?php

class Print_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get data jenis surat by keperluan
    */
    function get_jenis_in_dataSurat($id_surat)
    {
        return $this->db->get_where('data_surat',array('id_surat'=>$id_surat))->row_array();
    }
        
    /*
     * Get all data_surat
     */
    function get_all_data_surat()
    {
        $this->db->order_by('id_surat', 'desc');
        return $this->db->get('data_surat')->result_array();
    }
}
