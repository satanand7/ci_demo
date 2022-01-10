<?php
class Post_model extends CI_Model{

    function insert($data){
        $this->db->insert("post",$data);
        return $this->db->insert_id();
    }

    function getAllPostForUser($user_id){
        return 
        $this->db->select("post.*")
        ->select("users.first_name,users.last_name,users.profile_image")
        ->where("user_id",$user_id)
        ->join("users","users.id=post.user_id","LEFT")
        ->order_by("post.id","DESC")
        ->get("post")
        ->result_array();
    }


    function deletePost($id){
        $this->db->where("id",$id)->delete("post");
        return $this->db->affected_rows();
    }

}


?>