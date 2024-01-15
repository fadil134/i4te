<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gamas_model extends CI_Model
{
    public function get_sla()
    {
        $this->db->select('gamas.id_case, master_kota.kota, gamas_ts.opent, gamas_ts.ct');
        $this->db->select_sum("HOUR(TIMEDIFF(gamas_ts.ct, gamas_ts.opent))", 'total_ts');
        $this->db->select_sum("HOUR(TIMEDIFF(gamas_obs.enDob, gamas_obs.sTob))", 'total_obs');
        $this->db->select('(SUM(HOUR(TIMEDIFF(gamas_ts.ct, gamas_ts.opent))) - COALESCE(SUM(HOUR(TIMEDIFF(gamas_obs.enDob, gamas_obs.sTob))), 0)) as sc_durasi', false);
        $this->db->from('gamas');
        $this->db->join('master_kota', 'gamas.city_id = master_kota.id', 'left');
        $this->db->join('gamas_ts', 'gamas.id_case = gamas_ts.case_id', 'left');
        $this->db->join('gamas_obs', 'gamas.id_case = gamas_obs.case_id', 'left');
        $this->db->where('gamas.updated_by !=', '');
        $this->db->group_by('gamas.id_case, master_kota.kota, gamas_ts.opent, gamas_ts.ct');
        $query = $this->db->get();
        return $query->result();

    }

    function chart_dashboard(){
        $this->db->select('gamas.id_case, master_kota.kota');
        $this->db->select_sum("HOUR(TIMEDIFF(gamas_ts.ct, gamas_ts.opent))", 'total_ts');
        $this->db->select_sum("HOUR(TIMEDIFF(gamas_obs.enDob, gamas_obs.sTob))", 'total_obs');
        $this->db->select_avg("HOUR(TIMEDIFF(gamas_ts.ct, gamas_ts.opent))", 'avg_total_ts');
        $this->db->select('(SUM(HOUR(TIMEDIFF(gamas_ts.ct, gamas_ts.opent))) - COALESCE(SUM(HOUR(TIMEDIFF(gamas_obs.enDob, gamas_obs.sTob))), 0)) as sc_durasi', false);
        $this->db->from('gamas');
        $this->db->join('master_kota', 'gamas.city_id = master_kota.id', 'left');
        $this->db->join('gamas_ts', 'gamas.id_case = gamas_ts.case_id', 'left');
        $this->db->join('gamas_obs', 'gamas.id_case = gamas_obs.case_id', 'left');
        $this->db->where('gamas.updated_by !=', '');
        $this->db->group_by('gamas.id_case, master_kota.kota, gamas_ts.opent, gamas_ts.ct');
        $query = $this->db->get();
        return $query->result_array();
    }
}