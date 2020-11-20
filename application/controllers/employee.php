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
        $this->load->view('login');
    }

    public function indexReg()
    {
        $this->load->view('employee_form');
    }

    public function indexDash()
    {
        $this->load->view('employee_dash');
    }

    public function employee_form(){
        
        //Se configuran los datos de la imagen para la libreria
        $mi_archivo = 'photo';
        $config['upload_path'] = "uploads/";
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

        $data= $this->upload->data('file_path').'/'.$this->upload->data('file_name');

        $save=array(
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

        redirect('employee/index');
    }

    public function login(){
        $correoF = $this->input->post('mailEmployee');
        $passF =  $this->input->post('passwordEmployee');

        $t=$this->employee_model->iniciarSesion($correoF, $passF);

        if($t){
            redirect('employee/indexDash');
        }else{
            redirect('employee/index');
        }
    }
}
