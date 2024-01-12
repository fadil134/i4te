<?php
defined('BASEPATH') or exit('No direct script access allowed');

class R_c extends CI_Model
{

    public function device()
    {
        return $this->db->get('rca_device')->result();
    }

    public function sub_dev($id)
    {
        $this->db->where('dev_id', $id);
        return $this->db->get('rca_sub_device')->result();
    }

    public function case ()
    {
        $this->db->group_by('kategori');
        return $this->db->get('rca_case')->result();
    }

    public function act()
    {
        return $this->db->get('rca_act_kat')->result();
    }

    public function rc($id)
    {
        $this->db->select('id,r_cause');
        $this->db->from('rca_rc');
        $this->db->where('act_id', $id);
        return $this->db->get()->result();
    }

    public function insert_gamas($gamas)
    {
        $this->db->insert('gamas', $gamas);
    }

    public function gamas_impact($imp)
    {
        $this->db->insert_batch('gamas_impact', $imp);
    }

    public function gamas_ts($tshoot)
    {
        $this->db->insert('gamas_ts', $tshoot);
    }

    public function gamas_rc($rc)
    {
        $this->db->insert('gamas_r_cause', $rc);
    }

    public function coor($coor)
    {
        $this->db->insert('latlong_data', $coor);
    }

}

/* End of file R_c.php */
