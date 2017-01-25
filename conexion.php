<?php
class Conexion extends mysqli {
    private $datos = array('database_host'=>'', 
        'database_name'=>'', 
        'database_user'=>'',
        'database_passwd'=>'',
        'database_port'=>''        
    );
    public function __construct() {
        $this->datos = array (
            'database_host'=>'127.0.0.1', 
            'database_name'=>'udo', 
            'database_user'=>'root',
            'database_passwd'=>'toor',
            'database_port'=>'3306'
        );
       parent::__construct( $this->database_host, $this->database_user, $this->database_passwd, $this->database_name, 
                    $this->database_port);
    }

     public function __construct1($host,$user,$passwd,$name,$port) {
        $this->datos = array(
            'database_host'=>$host, 
            'database_name'=>$name, 
            'database_user'=>$user,
            'database_passwd'=>$passwd,
            'database_port'=>$port
        );
        parent::__construct1($host,$user,$passwd,$name,$port);
    }

    public function __get($keyname) {
        if(array_key_exists($keyname, $this->$datos))
        return $this->datos[$keyname];
    }

    public function __set($keyname, $value) {
        if(array_key_exists($keyname, $datos))
        $this->datos[$keyname]=$value;
    }
}

$objeto = new Conexion();

$rst = $objeto->query('select * from usuarios');
$r = $objeto->fetch_assoc();

var_dump($r);
// private $database_host='';
//     private $database_name='';
//     private $database_user='';
//     private $database_password='';
//     private $database_port='';