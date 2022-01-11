<?php
class Post_like extends CI_Model{

    function insert($data){
        $this->db->insert("post_like",$data);
        return $this->db->insert_id();
    }

    function checkLike($where){
        return $this->db->where($where)->get("post_like")->row_array();
    }

    function deleteLike($where){
        return $this->db->where($where)->delete("post_like");
    }

    function likeCount($post_id){
        return $this->db->where("post_id",$post_id)->get("post_like")->num_rows();
    }



}



?>