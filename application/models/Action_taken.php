<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Action_taken extends CI_Model {

    public function display(){
        $this->db->select('segment.segment_kategori, device.device, sub_device.sub_device, problem_kategori.kategori, act_kat.act');
        $this->db->from('segment');
        $this->db->join('segment', 'segment.id = sub_device.segment_id', 'right');
        
        
    }

}

/* End of file Action_taken.display*/