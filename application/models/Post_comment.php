<?php
class Post_comment extends CI_Model{


    function insert($data){
        $this->db->insert("post_comment",$data);
        return $this->db->insert_id();
    }

    function getPostComment($post_id){
         $this->db->select("post_comment.*");
         $this->db->select("users.first_name,users.last_name,users.profile_image");
         $this->db->where("post_id",$post_id);
         $this->db->join("users","users.id=post_comment.user_id");
         return $this->db->get("post_comment")->result_array();
    }

    function getCommentCount($post_id){
        return $this->db->where("post_id",$post_id)->get("post_comment")->num_rows();
    }

}

?>