<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gamas extends CI_Controller
{
    /*
    public function __construct()
    {
    parent::__construct();

    // Call the authenticate method for additional security checks
    $this->authenticate();
    }
     */

    public function get_detail()
    {
        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }

        $id = $this->security->xss_clean($this->input->post('id'));
        echo json_encode($this->Kota_model->get_cluster($id));
    }

    public function save()
    {
        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }

        $tanggal = $this->security->xss_clean($this->input->post('datetime'));
        $case = $this->security->xss_clean($this->input->post('caseId'));
        $kota = $this->security->xss_clean($this->input->post('kota'));

        //gamas_impact
        $impacts = $this->security->xss_clean($this->input->post('clusterImpact'));

        //gamas_ts
        $datetimeFields = array('downT', 'openTT', 'tResF', 'tResM', 'tVisit', 'tOnsite', 'tFtrouble', 'tUp', 'tClose');
        $ts = array();

        foreach ($datetimeFields as $field) {
            $ts[$field] = $this->security->xss_clean($this->input->post($field));
        }

        //gamas_obs
        $Stobs = $this->security->xss_clean($this->input->post('obsSt'));
        $Stend = $this->security->xss_clean($this->input->post('endSt'));
        $Stdesc = $this->security->xss_clean($this->input->post('descObs'));

        //gamas_rc
        $rc_segm = $this->security->xss_clean($this->input->post('rc_segm'));
        $rc_dev = $this->security->xss_clean($this->input->post('rc_dev'));
        $rc_sb = $this->security->xss_clean($this->input->post('rc_sb'));
        $rc_case = $this->security->xss_clean($this->input->post('rc_case'));
        $rc_act = $this->security->xss_clean($this->input->post('rc_act'));
        $R_cause = $this->security->xss_clean($this->input->post('rc'));
        $cord = $this->security->xss_clean($this->input->post('coordinate'));
        $cir = $this->security->xss_clean($this->input->post('cir'));

        // Set form validation rules

        if ($this->security->xss_clean($this->input->post('obs1')) == 'Yes') {
            $this->form_validation->set_rules('obsSt[]', 'Start Stop Clock', 'required');
            $this->form_validation->set_rules('endSt[]', 'End Stop Clock', 'required');
            $this->form_validation->set_rules('descObs[]', 'Root Cause Stop Clock', 'required');
        }

        if ($this->security->xss_clean($this->input->post('corrective')) == 1) {
            $this->form_validation->set_rules('justifikasi', 'Justifikasi Corrective', 'required');
        }

        $this->form_validation->set_rules('datetime', 'Tanggal', 'required');
        $this->form_validation->set_rules('caseId', 'Case ID', 'required|numeric');
        $this->form_validation->set_rules('kota', 'Teritory Name [City]', 'required');

        $this->form_validation->set_rules('clusterImpact[]', 'ID Cluster Impact', 'required');

        foreach ($datetimeFields as $field) {
            $this->form_validation->set_rules($field, ucwords(str_replace('t', '', $field)), 'required');
        }

        $this->form_validation->set_rules('rc_segm', 'Segment Category', 'required');
        $this->form_validation->set_rules('coordinate', 'Coordinate', 'required');
        $this->form_validation->set_rules('rc_dev', 'Device', 'required');
        $this->form_validation->set_rules('rc_sb', 'Sub Device', 'required');
        $this->form_validation->set_rules('rc_case', 'Case Category', 'required');
        $this->form_validation->set_rules('rc_act', 'Action Taken', 'required');
        $this->form_validation->set_rules('rc', 'Root Cause', 'required');
        $this->form_validation->set_rules('cir', 'CIR (Customer Incident Report)', 'required');

        // Run validation
        $response = array();
        if ($this->form_validation->run() == false) {

            $response['status'] = 'error';
            $response['message'] = 'Terjadi kesalahan saat validasi.';
            $response['errors'] = $this->form_validation->error_array();

        } else {
            // Validation passed, process the form data

            $rc = array(
                'case_id' => $case,
                'case_kat_id' => $rc_case,
                's_dev_id' => $rc_sb,
                'act_id' => $rc_act,
                'dev_id' => $rc_dev,
                'segm_id' => $rc_segm,
                'rc' => $R_cause,
                'cir' => $cir,
            );
            $this->R_c->gamas_rc($rc);

            $gamas = array(
                'tanggal' => $tanggal,
                'id_case' => $case,
                'city_id' => $kota,
                'is_corrective' => $this->input->post('corrective'),
                'corr' => $this->input->post('justifikasi'),
                'updated_by' => $username,
            );
            $this->R_c->insert_gamas($gamas);

            $imp = array();
            if (is_array($impacts)) {

                foreach ($impacts as $impact) {
                    $imp[] = array(
                        'case_id' => $case,
                        'cluster_imp' => $impact,
                    );
                }
            } else {
                $imp[] = array(
                    'case_id' => $case,
                    'cluster_imp' => $impacts,
                );
            }
            $this->R_c->gamas_impact($imp);

            $datetime = array(
                'downt' => $this->security->xss_clean($this->input->post('downT')),
                'opent' => $this->security->xss_clean($this->input->post('openTT')),
                'ttrfo' => $this->security->xss_clean($this->input->post('tResF')),
                'ttrms' => $this->security->xss_clean($this->input->post('tResM')),
                'ttv' => $this->security->xss_clean($this->input->post('tVisit')),
                'tos' => $this->security->xss_clean($this->input->post('tOnsite')),
                'tft' => $this->security->xss_clean($this->input->post('tFtrouble')),
                'fut' => $this->security->xss_clean($this->input->post('tUp')),
                'ct' => $this->security->xss_clean($this->input->post('tClose')),
            );

            $tshoot = array();
            foreach ($datetime as $key => $dt) {
                $tshoot[$key] = date('Y-m-d H:i:s', strtotime($dt));
            }

            $tshoot['case_id'] = $case;
            $this->R_c->gamas_ts($tshoot);

            $data = array();

            foreach ($Stobs as $key => $st) {
                // Periksa apakah ada nilai string kosong di antara variabel
                if ($st !== '' && isset($Stend[$key]) && $Stend[$key] !== '' && isset($Stdesc[$key])) {
                    $data[] = array(
                        'sTob' => $st,
                        'enDob' => $Stend[$key],
                        'descOb' => $Stdesc[$key],
                        'case_id' => $case,
                    );
                } else {
                    // Jika ada nilai string kosong, hentikan loop dan tidak lakukan insert
                    $data = array();
                    break;
                }
            }

            if (!empty($data)) {
                $this->db->insert_batch('gamas_obs', $data);
            }

            $coor = array(
                'case_id' => $case,
                'coordinate' => $cord,
            );
            $this->R_c->coor($coor);

            $response['status'] = 'success';
            $response['message'] = 'Data berhasil disimpan!';
        }
        echo json_encode($response);
    }
}
/*
$expected_fields = array('datetime', 'caseId', 'kota', 'clusterImpact', 'downT', 'openTT', 'tResF', 'tResM', 'tVisit', 'tOnsite', 'tFtrouble', 'tUp', 'tClose', 'obs1', 'obsSt', 'endSt', 'descObs', 'rc_segm', 'coordinate', 'rc_dev', 'rc_sb', 'rc_case', 'rc_act', 'rc', 'cir');

$form_data = array();

foreach ($expected_fields as $field) {
// Periksa apakah field ada dalam $_POST dan tidak kosong
if (isset($_POST[$field]) && $_POST[$field] !== '') {
// Simpan data ke dalam array
$form_data[$field] = $_POST[$field];
} else {

echo json_encode(array('status' => 'error', 'message' => 'Form Masih ada yang kosong, silahkan di isi dengan lengkap'));
return;
}
}

private function process_form_data()
{
//gamas

$rc = array(
'case_id' => $case,
'case_kat_id' => $rc_case,
's_dev_id' => $rc_sb,
'act_id' => $rc_act,
'dev_id' => $rc_dev,
'segm_id' => $rc_segm,
'rc' => $R_cause,
'cir' => $cir,
);
$this->R_c->gamas_rc($rc);

$gamas = array(
'tanggal' => $tanggal,
'id_case' => $case,
'city_id' => $kota,
);
$this->R_c->insert_gamas($gamas);

$imp = array();
if (is_array($impacts)) {

foreach ($impacts as $impact) {
$imp[] = array(
'case_id' => $case,
'cluster_imp' => $impact,
);
}
} else {
$imp[] = array(
'case_id' => $case,
'cluster_imp' => $impacts,
);
}
$this->R_c->gamas_impact($imp);

$ts = array(
'case_id' => $case,
'downt' => $tdown,
'opent' => $topen,
'ttrfo' => $ttrfo,
'ttrms' => $ttrms,
'ttv' => $tvisit,
'tos' => $tOnsite,
'tft' => $tFtrouble,
'fut' => $tFup,
'ct' => $tClose,
);
$this->R_c->gamas_ts($ts);

$this->R_c->gamas_obs($case, $Stobs, $Stend, $Stdesc);

$coor = array(
'case_id'=> $case,
'coordinate'=> $cord
);
$this->R_c->coor($coor);

redirect('dist/gamas', 'refresh');
}

/* End of file Gamas.php */
