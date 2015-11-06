<?php
class Usuario extends EntidadBase{
    private $id_usuario;
    private $nombre;
    private $apellido;
    private $dni;
    private $mail;
    private $usuario;
    private $pass;
    
    public function __construct() {
        $table="usuario";
        parent::__construct($table);
    }
    
    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
        public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function save(){
        $query="INSERT INTO usuario (id_usuario,nombre,apellido,dni,mail,usuario, pass)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->apellido."',
                       '".$this->dni."',
                       '".$this->mail."',
                       '".$this->usuario."',
                       '".$this->pass."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>