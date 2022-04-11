<?php
class Cards_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function getCards(){
        return $this->db->query('SELECT * FROM menu');
    }


    public function insertMenu($data){
        $this->db->insert('menu', $data);
        return true;
    }
}