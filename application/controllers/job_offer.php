<?php
defined("BASEPATH") or exit('No direct script acces allowed');
class Job_offer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("job_offer_model");
        $this->load->helper(array('form', 'url'));
    }   

    public function indexOffer($id_usu)
    {
        $this->load->model("employee_model");
        $data=array(
            'employee'=> $this->employee_model->getEmployee($id_usu),
            'joffers'=> $this->job_offer_model->getJobOffers()
        );
        $this->load->view('job_Offers',$data);
    }
}