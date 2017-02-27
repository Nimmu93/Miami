<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class products extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $arr['page'] ='products';
        $this->load->view('vwProducts',$arr);
    }

}