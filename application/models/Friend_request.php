<?php

class Friend_request extends CI_Model{

    function sendRequest($data){
        $this->db->insert("friend_request",$data);
        return $this->db->insert_id();
    }

}


?>