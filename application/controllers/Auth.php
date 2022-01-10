<?php

class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata("id")){
            return redirect("home");
        }        
    }



    function index(){
        $this->load->view("auth/register");
    }


    function login(){
        $this->load->view("auth/login");
    }

    function forgotPassword(){
        $this->load->view("auth/forgotPassword");
    }


    function register(){
       $post = $this->input->post();
       if(!$post){
            return redirect('auth');
       }    
       $this->load->library("form_validation");
       $this->form_validation->set_rules("first_name","First name","required|min_length[3]|max_length[20]");
       $this->form_validation->set_rules("last_name","Last name","required|min_length[3]|max_length[20]");
       $this->form_validation->set_rules("gender","Gender","required|in_list[female,male,other]");
       $this->form_validation->set_rules("email","Email","required|valid_email|max_length[40]|is_unique[users.email]");
       $this->form_validation->set_rules("password","Password","required|min_length[6]|max_length[40]");
       $this->form_validation->set_rules("confirm_password","Confirm password","required|matches[password]");
       
       if($this->form_validation->run() === false){
            $this->index();
       }else{
            unset($post['confirm_password']);
            $post["password"]= md5($post["password"]);
            $user_id= $this->Users->insert($post);
            if($user_id){
                $this->session->set_flashdata('success','Registraion successfull, Please login.');
                return redirect("auth/login");    
            }else{
                $this->session->set_flashdata('error','Something went wrong.');
                return redirect("auth");   
            }
       }
    }


    function checkLogin(){
        $post = $this->input->post();
        if(!$post){
                return redirect('auth/login');
        }  

        $this->load->library("form_validation");
        $this->form_validation->set_rules("email","Email","required");
        $this->form_validation->set_rules("password","Password","required");
        if($this->form_validation->run()==false){
            $this->login();
        }else{
            $post['password']=md5($post['password']);
            $userdata =$this->Users->checkLogin($post);
            $this->session->set_userdata($userdata);
            if($userdata){
                $this->session->set_flashdata('success',"Loggedin successfull.");
                return redirect("home");
            }else{
                $this->session->set_fleshdata('error',"Invalid email or password");
                return redirect("auth/login");
            }

        }


    }


}





?>