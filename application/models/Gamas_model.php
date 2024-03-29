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
    master_kota.kota AS kota,
    COUNT(DISTINCT gamas.id_case) AS jumlah_case,
    SUM(TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct)) AS total_TS,
    SUM(COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0)) AS total_OBS,
    SUM(TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0)) AS MTTR,
    COUNT(CASE WHEN (TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0)) < 7 THEN 1 ELSE NULL END) AS under_sla,
    COUNT(CASE WHEN (TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0)) > 7 THEN 1 ELSE NULL END) AS meet_sla
');
        $this->db->from('gamas');
        $this->db->join('gamas_ts', 'gamas_ts.case_id = gamas.id_case', 'left');
        $this->db->join('gamas_obs', 'gamas_obs.case_id = gamas.id_case', 'left');
        $this->db->join('master_kota', 'gamas.city_id = master_kota.id', 'left');
        $this->db->where('gamas.updated_by !=', '');
        $this->db->group_by('gamas.city_id');
        $this->db->order_by('master_kota.kota', 'ASC');

        $query = $this->db->get();

        return $query->result_array();
    }

    public function card()
    {
        $this->db->select('COUNT(gamas.id_case) AS jumlah_case');
        $this->db->select('SUM(TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct)) AS total_TS');
        $this->db->select('SUM(COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0)) AS total_OBS');
        $this->db->select('SUM(TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0)) AS MTTR');
        $this->db->select('SUM(CASE WHEN TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0) < 7 THEN 1 ELSE 0 END) AS under_sla');
        $this->db->select('SUM(CASE WHEN TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0) > 7 THEN 1 ELSE 0 END) AS meet_sla');
        $this->db->select("FORMAT(SUM(TIMESTAMPDIFF(HOUR, gamas_ts.opent, gamas_ts.ct) - COALESCE(TIMESTAMPDIFF(HOUR, gamas_obs.sTob, gamas_obs.enDob), 0))/COUNT(gamas.id_case), 2) AS avg_mttr", false);

        $this->db->from('gamas');
        $this->db->join('gamas_ts', 'gamas_ts.case_id = gamas.id_case', 'left');
        $this->db->join('gamas_obs', 'gamas_obs.case_id = gamas.id_case', 'left');
        $this->db->join('master_kota', 'gamas.city_id = master_kota.id', 'left');
        $this->db->where('gamas.updated_by !=', '');
        $this->db->order_by('master_kota.kota', 'ASC');

        $query = $this->db->get();
        return $query->result();
    }

    public function getGamasData() {
        $this->db->select('gamas.id_case, gamas_ts.opent, gamas_ts.ct, gamas_impact.cluster_imp, gamas_obs.sTob, gamas_obs.enDob, master_kota.kota');
        $this->db->from('gamas');
        $this->db->join('gamas_ts', 'gamas.id_case = gamas_ts.case_id', 'left');
        $this->db->join('gamas_impact', 'gamas.id_case = gamas_impact.case_id', 'left');
        $this->db->join('gamas_obs', 'gamas.id_case = gamas_obs.case_id', 'left');
        $this->db->join('master_kota', 'gamas.city_id = master_kota.id', 'left');
        $this->db->where('gamas.updated_by !=', '');

        $query = $this->db->get();
        return $query->result();
    }
}
