<?php

defined("BASEPATH") or exit('No direct script acces allowed');

class Employee_model extends CI_Model
{

    public function saveEmployee($data)
    {
        $this->db->insert('employee_accounts', $data);

        $idEmployee = $this->db->insert_id();
        return $idEmployee;
    }

    public function consultarEmployee()
    {
        $query = $this->db->query("Select * from employee_accounts");
        return $query->result();
    }

    public function iniciarSesion($correoF, $passF)
    {
        session_start();

        $t=false;
        $query = $this->db->query("SELECT * FROM employee_accounts WHERE  mailEmployee='$correoF'");
        $num = $query->num_rows;

        if ($num > 0) {
            $row = $query->fetch_assoc(); //Devuelve arreglo con todas las columnas
            $password_bd = $row['passwordEmployee']; //Se obtiene contraseña de la base de datos

            if ($password_bd == $passF) { //Se compara la contraseña introducida con la contraseña de la base de datos

                //Se setean los valores de la cesión
                $_SESSION['nombre'] = $row['name1Employee'] . " " . $row['name2Employee'];
                $_SESSION['correo'] = $row['mailEmployee'];

                $_SESSION['numero'] = $row['phoneEmployee'];
                $_SESSION['direccion'] = $row['adressEmployee'];


                $_SESSION['photo'] = $row['photoEmployee'];
                $bin = base64_decode($_SESSION['photo']);
                $im = imageCreateFromString($bin);
                $img_file = 'assets/img/filename.png';
                $_SESSION['image'] = imagepng($im, $img_file, 0);
                //$post_thumbnail_id = get_post_thumbnail_id( $_SESSION['image'] ); 
                //$url = wp_get_attachment_url( $post_thumbnail_id ); 

                $_SESSION['correo'] = $row['CORREO'];


                //header("Location: dashboard.php"); // redirecciona al dashboard al loguearse
                $t=true;

            } else {
                echo "La contraseña no coincide";
                $t=false;
            }
        } else {
            echo "No existe usuario";
            $t=false;
        }
        return $t;
    }
}
