<?php
class Menu_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function getMenu(){
        
        return $this->db->get('menu');
    }


    public function insertMenu($data){
        $this->db->insert('menu', $data);
        return true;
    }



    public function showMenu($id){
        return  $this->db->get_where('menu', array("id"=>$id));
    }

    public function update($data,$id){
        $this->db->where('id', $id);
        $this->db->update('menu', $data); 
        return true;
    }


    public function delete($id){
            $this->db->delete('menu', array('id' => $id));
        return true;
    }
}