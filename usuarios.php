<?php
require 'conexion.php';
class Usuario
{
    private $datos = array
    (
        'id'=>'',
        'usrname'=>'',
        'password'=>'',
        'nombre'=>'',
        'apellidos'=>'',
        'email'=>''
    );

    public function __construct()
    {
        
    }

    public static function login ($user, $passwd)
    {
        $cnn = new Conexion();
        $sql = sprintf("select * from usuarios where username='%s' and password='%s'",$user,md5($passwd));
        $rst = $cnn->query($sql);
        if ($rst)
        {
            if($rst->num_rows==1)
            {
                 $r = $rst->fetch_assoc();
                 $usuario = new Usuario();
                 $usuario->id = $r['id'];
                 $usuario->username = $r['username'];
                 $usuario->nombre = $r['nombre'];
                 $usuario->apellidos = $r['apellidos'];
                 $usuario->email = $r['email'];    

                 return $usuario;             
            }           
            else
            {
                return null;
            }
        }
        else
        {
            return false;
        }
    }

    public function __get($campo)
    {
        if (array_key_exists($campo, $this->datos))
            return $this->datos[$campo];
    }
    public function __set($campo, $valor)
    {
        if(array_key_exists($campo, $this->datos))
            $this->datos[$campo] = $valor;
    }
    
}
$u = Usuario::login('ricardo','123');
var_dump($u);