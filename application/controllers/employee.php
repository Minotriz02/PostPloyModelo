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
        if(isset($_POST['passwordEmployee'])){
            $this->load->model('employee_model');
            if($this->employee_model->iniciarSesion($_POST['mailEmployee'],$_POST['passwordEmployee'])){
                redirect('employee/indexDash');
            }else{
                redirect('employee');
            }
        }
        
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
        $save=array(
            'name1Employee' =>  $this->input->post('name1Employee'),
            'lastname2Employee' =>  $this->input->post('lastname2Employee'),
            'name2Employee' =>  $this->input->post('name2Employee'),
            'lastname1Employee' =>  $this->input->post('lastname1Employee'),
            'phoneEmployee' =>  $this->input->post('phoneEmployee'),
            'adressEmployee' =>  $this->input->post('adressEmployee'),
            'mailEmployee' =>  $this->input->post('mailEmployee'),
            'photoEmployee' =>  $this->input->post('photoEmployee'),
            'passwordEmployee' =>  $this->input->post('passwordEmployee')
        );

        $this->employee_model->saveEmployee($save);

        redirect('employee/index');
    }

    public function login(){
        $correoF = $this->input->post('mailEmployee');
        $passF =  $this->input->post('passwordEmployee');

        $t=$this->employee_model->iniciarSesion($correoF, $passF);

        if($t==true){
            redirect('employee/indexDash');
            echo '<script> console.log("Entroooooooooooo a iniciar") </script>';
        }else if($t==false){
            redirect('employee/index');
            echo '<script> console.log("Entroooooooooooo a iniciar") </script>';
        }
        echo '<script> console.log("Entroooooooooooo a iniciar") </script>';
    }
}
