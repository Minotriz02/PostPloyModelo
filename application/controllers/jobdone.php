<?php
defined("BASEPATH") or exit('No direct script acces allowed');
class Jobdone extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jobdone_model");
        $this->load->helper(array('form', 'url'));
    } 
}