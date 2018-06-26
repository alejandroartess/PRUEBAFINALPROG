<?php
namespace florida\models;
use mysqli;
    class Crud_database {
        var $conector;

        function __construct(){
            $conector=new mysqli ("localhost","root","","examenfinal");
            if ($conector->connect_errno){
                echo "Fallo al conectar a Mysql: ".$conector->connect_errno;
            }else{
                //echo "conexion establecida";
            }
            $this->conector=$conector;
        }//constructor

        function getAllUsers(){

            $allUser = $this->conector->query("SELECT * FROM equipo");
            return $allUser;
        }
        function getUserbyId($id){

            $user = $this->conector->query("SELECT * FROM equipo where id=".$id);
            return $user;
        }


        function insertUser($user){
           
            $consultainsert="INSERT INTO equipo (nombre,participantes) values ('".$user->getNombre()."','".$user->getParticipantes()."')";                    
            $insert = $this->conector->query($consultainsert);
            $resultado = $this->getAllUsers();
            return $resultado;
        }
    } 
?>