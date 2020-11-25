<?php
defined("BASEPATH") or exit('No direct script acces allowed');
class Moderator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("moderator_model");
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        if (isset($_POST['passwordEmployee'])) {
            $option = null;
            $this->load->model('employee_model');
            $this->load->model('employer_model');
            $this->load->model('moderator_model');
            if ($_POST['role'] == 'Employer') {
                $option = 1;
            } else if ($_POST['role'] == 'Employee') {
                $option = 2;
            } else if ($_POST['role'] == 'moderator') {
                $option = 3;
            }
            if ($option == 1) {
                $q = $this->employer_model->iniciarSesion($_POST['mailEmployee'], $_POST['passwordEmployee']);
            }
            if ($option == 2) {
                $q = $this->employee_model->iniciarSesion($_POST['mailEmployee'], $_POST['passwordEmployee']);
            }
            if ($option == 3) {
                $q = $this->moderator_model->iniciarSesion($_POST['mailEmployee'], $_POST['passwordEmployee']);
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
                if ($option == 3) {
                    $resultado = $q->result();
                    foreach ($resultado as $emp) {
                        echo $emp->idModerator ;
                        redirect('moderator/indexDash/' . $emp->idModerator );
                    }
                }
            } else {
                echo "<script>alert('M');</script>";
            }
        }

        $this->load->view('login');
    }

    public function indexReg()
    {
        $this->load->view('moderator_form');
    }

    public function indexDash($id_usu)
    {
        $moderator = $this->moderator_model->getModerator($id_usu);
        $this->load->view('moderator_dash', compact('moderator'));
        $this->load->model("category_model");

        if (isset($_REQUEST['añadir'])) {
            $save = array(
                'nameCategory' =>  $this->input->post('nameCategory'),
                'descriptionCategory' =>  $this->input->post('descriptionCategory')
            );
            $this->category_model->agregarCategoria($save);
            $moderator = $this->moderator_model->getModerator($id_usu);
        }
    }

    public function indexCheckEmployee($id_usu)
    {
        $moderator = $this->moderator_model->getModerator($id_usu);
        $this->load->view('moderator_checkEm', compact('moderator'));
    }

    public function indexCheckJobs($id_usu)
    {
        $moderator = $this->moderator_model->getModerator($id_usu);
        $this->load->view('moderator_checkJobs', compact('moderator'));
    }

    public function indexUser($id_usu)
    {
        $moderator = $this->moderator_model->getModerator($id_usu);
        $this->load->view('moderator_user', compact('moderator'));
    }

    public function salirSesion()
    {
        $this->load->view('logout');
    }

    public function moderator_form()
    {
        if (isset($_REQUEST['boton'])) {
            $save = array(
                'moderatorAccount' =>  $this->input->post('moderatorAccount'),
                'moderatorPassword' =>  $this->input->post('moderatorPassword'),
                'moderatorPhoneNumber' =>  $this->input->post('moderatorPhoneNumber'),
                'mailModerator' =>  $this->input->post('mailModerator')
            );
            $this->moderator_model->saveModerator($save);
        }
        redirect('employee/index');
    }
}