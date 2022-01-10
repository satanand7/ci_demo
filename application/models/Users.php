<?php

class Users extends CI_Model{

    function insert($data){
        $this->db->insert("users",$data);
        return $this->db->insert_id();
    }

    function checkLogin($where){
        // $email = $where["email"];
        // $password = $where["password"];
        // var_dump($where);die;
        // $this->db->where("email",$email);
        // $this->db->where("password",$password);
        // return $this->db->get("users")->result_array();
       return $this->db->get_where('users',$where)->row_array();
        // return $this->db->where("email",$email)->where("password",$password)->get("users")->result_array();
    //    return $this->db->where($where)->get('users')->result_array();
    }

    function getUserData($user_id){
        return $this->db->where('id',$user_id)->get('users')->row_array();
    }


    function update($data,$id){
        return $this->db->where("id",$id)->update("users",$data);
    }



}




?>