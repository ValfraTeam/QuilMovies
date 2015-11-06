<?php
class UsuarioController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto usuario
        $usuario=new Usuario();
        
        //Conseguimos todos los usuarios
        $allusers=$usuario->getAll();
       
           //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "allusers"=>$allusers,
            
        ));
    }
    
    public function crear(){
        if(isset($_POST["nombre"])){
            
            //Creamos un usuario
            $usuario=new Usuario();
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setDni($_POST["dni"]);
            $usuario->setMail($_POST["mail"]);
            $usuario->setUsuario($_POST["usuario"]);
            $usuario->setPass(sha1($_POST["pass"]));
            $save=$usuario->save();
        }
        $this->redirect("usuario", "index");
    }
    
    public function borrar(){
        if(isset($_GET["id_usuario"])){ 
            $id=(int)$_GET["id_usuario"];
            
            $usuario=new Usuario();
            $usuario->deleteById($id); 
        }
        $this->redirect();
    }
    
    
    public function hola(){
        $usuarios=new UsuariosModel();
        $usu=$usuario->getUnUsuario();
        var_dump($usu);
    }

}
?>
