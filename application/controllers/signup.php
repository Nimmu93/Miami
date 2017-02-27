<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Signup extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
           $arr['page'] ='signup';
        $this->load->view('vwSignup',$arr);
    }

    public function register_user(){
         $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
        $password = $_POST["password"];
        $enc_pass  = md5($salt.$password);
        
        $data=array(
            "username"=>$_POST['name'],
            "email"=>$_POST['email'],
            "password"=> $enc_pass,
            "block"=>0,
            "telephone"=>$_POST['telephone'],
            "nic"=>$_POST['nic']
            );

        $arr['page'] = 'user';
        if($this->db->insert('user', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'A user has been successfully added!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'User registration unsuccessful';
        
        }

        $this->load->view('vwSignup',$arr);

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */