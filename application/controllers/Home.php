<?php
class Home extends CI_Controller{

    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id")){
           $this->session->set_flashdata("error","Your session has beed expired. Please login again."); 
           return redirect("auth/login");
        }
    }

    function index(){
        $user_id = $this->session->userdata("id");
        $data["post_list"]= $this->Post_model->getAllPostForUser($user_id);
        $data["controller"] = $this;

        // echo "<pre>";
        // echo $this->db->last_query();die;
        // var_dump($data["post_list"]);die;
        $data["_view"]="home";
        $this->load->view("layout/main",$data);
    }

    public function showPostImages($post_id){
        $data["post_images"] = $this->Post_images->getPostImages($post_id);
        // echo "<pre>";
        // var_dump($data["post_images"]);
        $this->load->view("includes/post_images",$data);
    }


    function showPostCount($post_id){
        $likeParam = array(
            "user_id"=>$this->session->userdata("id"),
            "post_id"=>$post_id
        ); 
        $data["post_id"] = $post_id;
        $checkLike = $this->Post_like->checkLike($likeParam);
        $data["is_liked"] = $checkLike ? true : false;
        $data["like_count"] = $this->Post_like->likeCount($post_id);
        $data["comment_count"] = $this->Post_comment->getCommentCount($post_id);
        

        $this->load->view("includes/post_count",$data);
    }


    function showPostComments($post_id){
        $data["post_comments"] = $this->Post_comment->getPostComment($post_id);
            
        $this->load->view("includes/post_comment",$data);
    }

    function profile(){
        // echo "<pre>";
        // var_dump($this->session->userdata());die;
        $this->load->library('upload');
        $id = $this->session->userdata("id");
        $data["userDetails"]=$this->Users->getUserData($id);
        $data['_view']="profile";
        $this->load->view("layout/main",$data);
    }

    function updateProfile(){
        $post = $this->input->post();
        // var_dump($post);die;
        if(!$post){
            return redirect("home/profile");
        }
        $this->form_validation->set_rules("first_name","First name","required");
        $this->form_validation->set_rules("last_name","Last name","required");
        $this->form_validation->set_rules("education","Education","max_length[255]");
        $this->form_validation->set_rules("skils","Skils","max_length[255]");
        $this->form_validation->set_rules("notes","Notes","max_length[255]");
        $this->form_validation->set_rules("address","Address","max_length[255]");

        if($this->form_validation->run()===false){
            $this->profile();
        }else{
            $id = $this->session->userdata("id");
            $param =array(
                "first_name"=>$post["first_name"],
                "last_name"=>$post["last_name"],
                "education"=>$post["education"],
                "skills"=>$post["skills"],
                "notes"=>$post["notes"],
                "address"=>$post["address"],
            );

            $uploadConfig = array(
                'upload_path'=>'uploads\profile_images',
                'allowed_types'=>'jpg|png|gif|jpeg',
                'file_name'=>$id,
                'max_size'=>2048,
                'overwrite'=>true
            );
            $this->load->library('upload',$uploadConfig);
            if($_FILES['profile_image']['name']){
                if(!$this->upload->do_upload('profile_image')){
                    $this->session->set_flashdata("error",$this->upload->display_errors());
                }else{
                    $param["profile_image"] = $this->upload->data("file_name");
                }
            }
            $result = $this->Users->update($param,$id);
            if($result){
                $this->session->set_userdata($param);
                $this->session->set_flashdata("success","Profile successfully updated");
                return redirect("home/profile");
            }else{
                $this->session->set_flashdata("error","Something went wrong");
                return redirect("home/profile");
            }
        }



    }


    function followers(){
        $data['_view']="followers";
        $this->load->view("layout/main",$data);
    }


    function friends(){
        $data['_view']="friends";
        $this->load->view("layout/main",$data);
    }


    function logout(){
        $this->session->sess_destroy();
        return redirect("auth/login");
    }


}


?>