<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {
/**
 * ark Admin Panel for Codeigniter 
 * Author: Abhishek R. Kaushik
 * downloaded from http://devzone.co.in
 *
 */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $sql = "SELECT * FROM tbl_admin_users;";
        $val = $this->db->query($sql);
        $arr['page'] = 'user';
        $arr['userdata']=$val->result_array();
        $this->load->view('admin/vwManageUser',$arr);
    }
    
    public function indexUpdate($id) {
        $sql = "SELECT * FROM tbl_admin_users WHERE id=$id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'user';
        $arr['userdata']=$val->result_array();
        $this->load->view('admin/vwEditUser',$arr);
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
            "user_type"=>$_POST['usertype'],
            "telephone"=>$_POST['telephone'],
            "nic"=>$_POST['nic']
            );

        $arr['page'] = 'user';
        if($this->db->insert('tbl_admin_users', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'A user has been successfully added!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'User registration unsuccessful';
        
        }

        $this->load->view('admin/vwAddUser',$arr);

    }

    public function add_user() {
        
        
        $arr['page'] = 'user';
        $this->load->view('admin/vwAddUser',$arr);
    }
    
    public function update_user($id){        
        
        $data=array(
            "username"=>$_POST['name'],
            "email"=>$_POST['email'],            
            "block"=>0,
            "user_type"=>$_POST['usertype'],
            "telephone"=>$_POST['telephone'],
            "nic"=>$_POST['nic']
            );

        $arr['page'] = 'user';
        
        $this->db->where('id', $id);        
        if($this->db->update('tbl_admin_users', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'User details have been successfully updated!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'User update unsuccessful';
        
        }

        $sql = "SELECT * FROM tbl_admin_users WHERE id=$id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'user';
        $arr['userdata']=$val->result_array();
        
        $this->load->view('admin/vwEditUser',$arr);

    }
    

     public function edit_user($id) {
        $arr['page'] = 'user';
        $this->load->view('admin/vwEditUser',$arr);
    }
    
     public function changePassword($id) {  
         
        $sql = "SELECT * FROM tbl_admin_users WHERE id=$id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'user';
        $arr['userdata']=$val->result_array();     
        
        
        
        
       foreach ($val->result() as $row) {           
       $enc_oldpass = $row->password ; }
    
        echo $enc_oldpass;
        if(isset($_POST["password"])){
            
            $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
            $password = $_POST["password"];            
            $enc_pass  = md5($salt.$password);            
            
            if($enc_oldpass == $enc_pass ){
                   
                $data=array( 
                    "password"=> $enc_pass   
                    );

                $arr['page'] = 'user';
                echo $enc_pass;
                
                $this->db->where('id', $id);        
                if($this->db->update('tbl_admin_users', $data)){
                    $arr['message_type']='success';
                    $arr['message'] = 'Password Changed successfully!';
                }
                else{
                    $arr['message_type']='error';
                     $arr['message'] = 'Password Change unsuccessful!!';

                }
            }
            
            else{
                    $arr['message_type']='error';
                     $arr['message'] = 'Password Change unsuccessful!!';

                }
        
        }
        
        
        $this->load->view('admin/vwPasswordChange',$arr);
    }
    
     public function delete_user($id) {
        $arr['page'] = 'user';
        
        
        $this->db->where('id', $id);        
        
        if($this->db->delete('tbl_admin_users')){
            $arr['message_type']='success';
            $arr['message'] = 'User Record Deleted successfully!';
        }
        else{
            $arr['message_type']='error';
            $arr['message'] = 'User Deletion unsuccessful';
        
        }
        $this->load->view('admin/vwDeleteUser',$arr);
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */