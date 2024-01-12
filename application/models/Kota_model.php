<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kota_model extends CI_Model
{

    public function get_kota()
    {
        $this->db->select('master_provinsi.prov AS Provinsi, master_kota.kota AS Kota, master_kecamatan.kec AS Kecamatan, kelurahan.kel AS Kelurahan');
        $this->db->from('master_provinsi');
        $this->db->join('master_kota', 'master_kota.provinsi_id = master_provinsi.id', 'left');
        $this->db->join('master_kecamatan', 'master_kecamatan.kota_id = master_kota.id', 'left');
        $this->db->join('kelurahan', 'kelurahan.kec_id = master_kecamatan.id', 'left');
        $this->db->order_by('master_kota.kota', 'ASC');

        $query = $this->db->get();
        return $query->result();
    }

    public function cluster(){
        $this->db->select('master_kota.kota AS Kota,master_kota.id AS ID');
        $this->db->from('master_provinsi');
        $this->db->join('master_kota', 'master_kota.provinsi_id = master_provinsi.id', 'left');
        $this->db->join('master_kecamatan', 'master_kecamatan.kota_id = master_kota.id', 'left');
        $this->db->join('master_kelurahan', 'master_kelurahan.kec_id = master_kecamatan.id', 'left');
        $this->db->group_by('ID');
        $this->db->order_by('ID', 'ASC');

        $query = $this->db->get();
        return $query->result();
    }

    public function get_cluster($id){
        $this->db->select('cluster_id_apd,cluster_name_apd');
        $this->db->where('kab_id', $id);
        $query = $this->db->get('master_cluster');
        return $query->result();
    }

}

/* End of file Kota_model.php */
