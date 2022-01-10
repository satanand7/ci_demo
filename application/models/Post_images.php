<?php
class Post_images extends CI_Model{

    function insert($data){
        $this->db->insert("post_images",$data);
        return $this->db->insert_id();
    }


    function getPostImages($post_id){
        return $this->db->where("post_id",$post_id)
        ->get("post_images")
        ->result_array();
    }


}



?>