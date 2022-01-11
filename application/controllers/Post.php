<?php
class Post extends CI_Controller{

    function addPost(){
        $post =$this->input->post();
        if(!$post){
            return redirect("home");
        }
        // echo "<pre>";
        // var_dump($_FILES);die;
        $this->load->library("upload");
        $postParam = array(
            "user_id"=>$this->session->userdata("id"),
            "post"=>$post["newpost"],
            "post_privacy"=>$post["post_privacy"]
        );
        $uploadConfig = array(
            'upload_path'=>'uploads\post_images',
            'allowed_types'=>'jpg|png|gif|jpeg',
            'file_name'=>Date("Ymdhis"),
            'max_size'=>0,
            'overwrite'=>false
        );
        $post_id =$this->Post_model->insert($postParam);
        $files = $_FILES;
        $nof =  $_FILES["files"]["name"][0] != "" ? count($_FILES["files"]["name"]):0;
        for ($i=0; $i < $nof; $i++) { 
            $_FILES['postfile']['name'] = $files["files"]["name"][$i];
            $_FILES['postfile']['type'] = $files["files"]["type"][$i];
            $_FILES['postfile']['tmp_name'] = $files["files"]["tmp_name"][$i];
            $_FILES['postfile']['error'] = $files["files"]["error"][$i];
            $_FILES['postfile']['size'] = $files["files"]["size"][$i];

            $this->upload->initialize($uploadConfig);

            $this->upload->do_upload("postfile");
             $uploaddata =    $this->upload->data();

            $imageParam =array(
                "post_id"=>$post_id,
                "image"=>$uploaddata["file_name"]
            );
            $this->Post_images->insert($imageParam);
        }

        if($post_id){
            $this->session->set_flashdata("success","Your point has been submitted successfully.");
            return redirect("home");
        }else{
            $this->session->set_flashdata("error","Something went wrong.");
            return redirect("home");
        }
    }





    function deletePost($id){
        if(!$id){
            return redirect("home");
        }

        $result = $this->Post_model->deletePost($id);
        if($result){
            $this->session->set_flashdata("success","Point successfully deleted.");
        }else{
            $this->session->set_flashdata("error","Something went wrong.");
        }
        return redirect("home");
    }


    function likePost($post_id){
        $likeParam = array(
            "user_id"=>$this->session->userdata("id"),
            "post_id"=>$post_id
        ); 
        $checkLike = $this->Post_like->checkLike($likeParam);
        if($checkLike){
            $this->Post_like->deleteLike($likeParam);    
        }else{
            $this->Post_like->insert($likeParam);
        }
        return redirect("home");

    }



}



?>