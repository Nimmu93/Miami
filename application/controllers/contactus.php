<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contactus extends CI_Controller {

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
        $sql = "SELECT * FROM feedback;";
        $val = $this->db->query($sql);
        $arr['page'] = 'contactus';
        $arr['contactdata']=$val->result_array();
        $this->load->view('vwContactus',$arr);
    }

    public function insert_msgs(){
       

        $data=array(
           "name"=>$_POST['name'],
           "email"=>$_POST['email'],
           "message"=>$_POST['message']
            );

        $arr['page'] = 'contactus';
        if($this->db->insert('feedback', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'A message has been successfully added!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'message insertion unsuccessful';
        
        }

        $this->load->view('vwContactus',$arr);

    }

     

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */