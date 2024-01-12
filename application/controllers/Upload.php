<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{
    /*
    public function __construct()
    {
    parent::__construct();

    // Call the authenticate method for additional security checks
    $this->authenticate();
    }
     */

    // Gamas.php
    public function upload_image()
    {
        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }

        $config['upload_path'] = 'upload/gamas/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 1000;

        $this->load->library('upload', $config);

        $response = array();
        $caseId = $this->input->post('caseId');

        if ($this->upload->do_upload('file')) {
            $upload_data = $this->upload->data();

            $response['url'] = base_url('upload/gamas/' . $upload_data['file_name']);
            $response['success'] = true;

            $imageData = array(
                'case_id' => $caseId,
                'path' => $response['url'],
            );
            $this->Upload_M->save_image_data($imageData);

            $response['url'] = $imageData['path'];
            $response['caseId'] = $caseId;
            $response['success'] = true;
            $response['message'] = 'Image uploaded and data saved successfully.';
        } else {
            $response['error'] = $this->upload->display_errors();
            $response['success'] = false;
            $response['message'] = 'Error uploading image.';

        }
        echo json_encode($response);

    }

    public function deleteImage()
    {
        $username = $this->session->userdata('username');

        if (!$username) {
            // Redirect to the login page if the username is not set
            redirect('dist/login');
        }

        // Get the file name from the POST data
        
        //echo $file_path;
        //print('ini'. $file_name .'ini');
        // Mengecek apakah file_name tidak kosong
        $file_name = $this->input->post('file_name');
        $file_path = FCPATH . 'upload/gamas/' . $file_name;
        $this->db->where('path', base_url('upload/gamas/' . $file_name));
        $this->db->delete('gamas_photo');
        
        if (!empty($file_name)) {
            //print($file_path);
            // Menghapus data gambar dari tabel gama_photos berdasarkan path
            // Mengecek apakah file ada sebelum dihapus

            if (file_exists($file_path)) {
                // Menghapus file gambar
                unlink($file_path);
                $response['success'] = true;
                $response['message'] = 'Image deleted successfully.';
            } else {
                // Jika file tidak ditemukan
                $response['success'] = false;
                $response['message'] = 'Error deleting image. File not found.';
            }
        } else {
            // Jika file_name kosong
            $response['success'] = false;
            $response['message'] = 'Error deleting image. Empty file name.';
        }
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
        // Mengembalikan respon dalam format JSON
    }

}
/* End of file Upload.php */
