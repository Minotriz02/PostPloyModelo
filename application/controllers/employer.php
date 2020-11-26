<?php
defined("BASEPATH") or exit('No direct script acces allowed');
class Employer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("employer_model");
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        if (isset($_POST['passwordEmployee'])) {
            $option = null;
            $this->load->model('employee_model');
            $this->load->model('employer_model');
            if ($_POST['role'] == 'Employer') {
                $option = 1;
            } else if ($_POST['role'] == 'Employee') {
                $option = 2;
            }
            if ($option == 1) {
                $q = $this->employer_model->iniciarSesion($_POST['mailEmployee'], $_POST['passwordEmployee']);
            }
            if ($option == 2) {
                $q = $this->employee_model->iniciarSesion($_POST['mailEmployee'], $_POST['passwordEmployee']);
            }
            if ($q->num_rows() > 0) {
                if ($option == 1) {
                    $resultado = $q->result();
                    foreach ($resultado as $emp) {
                        echo $emp->idCEmployerAccountr;
                        redirect('employer/indexDash/' . $emp->idCEmployerAccount);
                    }
                }
                if ($option == 2) {
                    $resultado = $q->result();
                    foreach ($resultado as $emp) {
                        echo $emp->idAccountEmployee;
                        redirect('employee/indexDash/' . $emp->idAccountEmployee);
                    }
                }
            } else {
                redirect('employee');
            }
        }

        $this->load->view('login');
    }
    
    public function indexDash($id_usu)
    {
        $employer = $this->employer_model->getPost($id_usu);
        $this->load->view('employer_dash', compact('employer'));
    }

    public function indexUser($id_usu)
    {
        $this->load->model('employer_model');

        $employer = $this->employer_model->getPost($id_usu);

        if (isset($_REQUEST['guardar'])) {
            $save = array(
                'name1Employer' =>  $this->input->post('name1Employer'),
                'lastname2Employer' =>  $this->input->post('lastname2Employer'),
                'name2Employer' =>  $this->input->post('name2Employer'),
                'lastname1Employer' =>  $this->input->post('lastname1Employer'),
                'phoneEmployer' =>  $this->input->post('phoneEmployer'),
                'adressEmployer' =>  $this->input->post('adressEmployer'),
                'mailEmployer' =>  $this->input->post('mailEmployer')
            );
            $this->employer_model->modificarEmployer($id_usu, $save);
            $employer = $this->employer_model->getEmployer($id_usu);
        }

        $this->load->view('employer_user', compact('employer'));
    }

    public function indexMyJobs($id_usu)
    {
        $applicants="";
        $this->load->model("job_offer_model");
        $joffers= $this->job_offer_model->getJobOffers();
        foreach($joffers as $job){
            $idjob=$job->idJob;
            $applicants=$this->job_offer_model->getApplicants($id_usu,$idjob);
        }
        $data = array(
            'employer' => $this->employer_model->getPost($id_usu),
            'myjobs' => $this->job_offer_model->myJobsEmployer($id_usu),
            'applicants' => $this->job_offer_model->getApplicants($id_usu)
        );
        //$employer = $this->employer_model->getPost($id_usu);
        $this->load->view('employer_myJobs', $data);
    }
    
    public function salirSesion()
    {
        $this->load->view('logout');
    }
}
