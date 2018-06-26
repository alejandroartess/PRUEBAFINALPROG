<?php
namespace florida\models;
class User {

    var $id;
    var $nombre;
    var $participantes;

    function __construct($nombre,$participantes){
        $this->nombre=$nombre;
        $this->participantes=$participantes;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     *
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    /**
     * Get the value of apellidos
     */
    public function getParticipantes()
    {
        return $this->participantes;
    }

    /**
     * Set the value of apellidos
     *
     *
     */
    public function setParticipantes($participantes)
    {
        $this->participantes = $participantes;
    }   
}
?>
