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

    public function chart_dashboard()
    {
        $this->db->select('
    gamas.id_case,
    master_kota.kota AS kota,
    COUNT(DISTINCT gamas.id_case) AS jumlah_case,
    SUM(TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0)) AS total_MTTR,
    SUM(TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0)) / COUNT(DISTINCT gamas.id_case) AS avg_MTTR,
    COUNT(TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0) < 7) AS under_SLA
');
        $this->db->from('gamas');
        $this->db->join('gamas_ts', 'gamas_ts.case_id = gamas.id_case', 'left');
        $this->db->join('gamas_obs', 'gamas_obs.case_id = gamas.id_case', 'left');
        $this->db->join('master_kota', 'gamas.city_id = master_kota.id', 'left');
        $this->db->where('gamas.updated_by !=', '');
        $this->db->group_by('gamas.city_id, gamas.id_case');
        $this->db->order_by('master_kota.kota', 'ASC');

        $query = $this->db->get();
        
        return $query->result_array();
    }
}
