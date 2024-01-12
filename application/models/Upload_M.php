<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Upload_M extends CI_Model
{

    public function save_image_data($imageData)
    {
        $this->db->insert('gamas_photo', $imageData);
    }

}

/* End of file Upload.php */
