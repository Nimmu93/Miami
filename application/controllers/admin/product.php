<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $sql = "SELECT * FROM product;";
        $val = $this->db->query($sql);
        $arr['page'] = 'product';
        $arr['productdata']=$val->result_array();
        $this->load->view('admin/vwManageProduct',$arr);
    }
     public function indexUpdate($r_id) {
        $sql = "SELECT * FROM product WHERE r_id=$r_id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'product';
        $arr['productdata']=$val->result_array();
        $this->load->view('admin/vwEditProduct',$arr);
    }

    public function register_product(){
       

        $data=array(
           "r_no"=>$_POST['r_no'],
           "size"=>$_POST['s_no'],
           "type"=>$_POST['t_no'],
           "price"=>$_POST['price']
            );

        $arr['page'] = 'product';
        if($this->db->insert('product', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'A Product has been successfully added!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'Product registration unsuccessful';
        
        }

        $this->load->view('admin/vwAddProduct',$arr);

    }

    public function add_product() {
        
        
        $arr['page'] = 'product';
        $this->load->view('admin/vwAddProduct',$arr);
    }

    public function delete_product($r_id) {
        $arr['page'] = 'product';
        
        
        $this->db->where('r_id', $r_id);        
        
        if($this->db->delete('product')){
            $arr['message_type']='success';
            $arr['message'] = 'Product Deleted successfully!';
        }
        else{
            $arr['message_type']='error';
            $arr['message'] = 'Product Deletion unsuccessful';
        
        }
        $this->load->view('admin/vwDeleteProduct',$arr);
    }

     public function update_product($r_id) {
         $data=array(
            "r_no"=>$_POST['r_no'],
           "size"=>$_POST['size'],
           "type"=>$_POST['type'],
           "price"=>$_POST['price']
            );

        $arr['page'] = 'product';
        
        $this->db->where('r_id', $r_id);        
        if($this->db->update('product', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'Product details have been successfully updated!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'Product details update unsuccessful';
        
        }

        $sql = "SELECT * FROM product WHERE r_id=$r_id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'product';
        $arr['productdata']=$val->result_array();
        
        $this->load->view('admin/vwEditProduct',$arr);
    }
    
     public function block_user() {
        // Code goes here
    }
    
     public function delete_user() {
        // Code goes here
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */