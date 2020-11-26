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
        $this->load->model('employee_model');
        $this->load->model('postulation_model');

        $employee = $this->employee_model->getEmployee($id_usu);
        $joffers= $this->job_offer_model->getAcceptNoApplyJobOffers();

        foreach($joffers as $jof){
            $idtrabajo=$jof->idJob;
            $idemployer=$jof->idCEmployerAccountf;
            if (isset($_REQUEST[$idtrabajo])) {
                //die($idtrabajo);
                $save = array(
                    'idJob' =>  $idtrabajo,
                    'idCEmployerAccountf' =>  $idemployer
                );
                $this->postulation_model->createPostulation($id_usu, $save);
            }
        }

        
        $data=array(
            'employee'=> $this->employee_model->getEmployee($id_usu),
            'joffers'=> $this->job_offer_model->getAcceptNoApplyJobOffers()
        );
        $this->load->view('job_Offers',$data);
    }

    


}