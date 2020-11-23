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
        $employer = $this->employer_model->getPost($id_usu);
        $this->load->view('employer_user', compact('employer'));
    }

    public function indexMyJobs($id_usu)
    {
        $employer = $this->employer_model->getPost($id_usu);
        $this->load->view('employer_myJobs', compact('employer'));
    }

    public function salirSesion()
    {
        $this->load->view('logout');
    }
}
