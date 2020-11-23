<?php
defined("BASEPATH") or exit('No direct script acces allowed');
class Employee extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("employee_model");
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

    public function indexReg()
    {
        $this->load->view('employee_form');
    }

    public function indexDash($id_usu)
    {
        $employee = $this->employee_model->getPost($id_usu);
        $this->load->view('employee_dash', compact('employee'));
    }

    public function indexOffer($id_usu)
    {
        $employee = $this->employee_model->getPost($id_usu);
        $this->load->view('job_Offers', compact('employee'));
    }

    public function indexUser($id_usu)
    {
        $employee = $this->employee_model->getPost($id_usu);
        $this->load->view('employee_user', compact('employee'));
    }

    public function salirSesion()
    {
        $this->load->view('logout');
    }

    public function employee_form()
    {
        $this->load->model("employer_model");
        //Se configuran los datos de la imagen para la libreria
        $mi_archivo = 'photo';
        $config['upload_path'] = "uploads/";
        $config['file_path'] = "uploads/";
        $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data = "uploads/" . $this->upload->data('file_name');
        if ($_POST['role']=='Employer'){
            $option = 1;
        } else if ($_POST['role']=='Employee'){
            $option = 2;
        }
        if ($option == 2){
            $save = array(
                'name1Employee' =>  $this->input->post('name1Employee'),
                'lastname2Employee' =>  $this->input->post('lastname2Employee'),
                'name2Employee' =>  $this->input->post('name2Employee'),
                'lastname1Employee' =>  $this->input->post('lastname1Employee'),
                'phoneEmployee' =>  $this->input->post('phoneEmployee'),
                'adressEmployee' =>  $this->input->post('adressEmployee'),
                'mailEmployee' =>  $this->input->post('mailEmployee'),
                'photoEmployee' =>  $data,
                'passwordEmployee' =>  $this->input->post('passwordEmployee')    
            );
            $this->employee_model->saveEmployee($save);

        }
        if ($option == 1){
            $save = array(
                'name1Employer' =>  $this->input->post('name1Employee'),
                'lastname2Employer' =>  $this->input->post('lastname2Employee'),
                'name2Employer' =>  $this->input->post('name2Employee'),
                'lastname1Employer' =>  $this->input->post('lastname1Employee'),
                'phoneEmployer' =>  $this->input->post('phoneEmployee'),
                'adressEmployer' =>  $this->input->post('adressEmployee'),
                'mailEmployer' =>  $this->input->post('mailEmployee'),
                'photoEmployer' =>  $data,
                'passwordEmployer' =>  $this->input->post('passwordEmployee')
            );
            $this->employer_model->saveEmployer($save);
        }
                


        redirect('employee/index');
    }

}
