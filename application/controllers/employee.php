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
            
            $q = $this->employee_model->iniciarSesion($_POST['mailEmployee'],$_POST['passwordEmployee']);
            
            if($q->num_rows()>0){
                $resultado = $q->result();
                foreach($resultado as $emp){
                    echo $emp->idAccountEmployee;
                    redirect('employee/indexDash/'.$emp->idAccountEmployee);

                }  
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

    public function indexDash($id_usu)
    {
        $this->load->model('jobdone_model');
        //$trabajohecho=$this->jobdone_model->getJobsDone($id_usu);
        //$employee=$this->employee_model->getEmployee($id_usu);
        $data=array(
            'employee' => $this->employee_model->getEmployee($id_usu),
            'trabajohecho' => $this->jobdone_model->getJobsDone($id_usu)
        );
        //$this->load->view('employee_dash',compact('employee'));
        $this->load->view('employee_dash',$data);
    }

    public function indexOffer($id_usu)
    {
        $employee=$this->employee_model->getEmployee($id_usu);
        $this->load->view('job_Offers',compact('employee'));
    }

    public function indexUser($id_usu)
    {
        $employee=$this->employee_model->getEmployee($id_usu);
        $this->load->view('employee_user',compact('employee'));
    }
    
    public function employee_form(){
        
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

        $data= "uploads/".$this->upload->data('file_name');

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
