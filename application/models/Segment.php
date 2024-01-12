<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Segment extends CI_Model {

    public function device(){
        return $this->db->get('rca_segment')->result();           
    }

}

/* End of file Segment.php */
