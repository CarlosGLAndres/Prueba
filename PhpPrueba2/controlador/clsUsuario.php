<?php

  class clsUsuario {
    //put your code here
    // database connection and table name
    private $conexion;
    private $table_name = "admin";
 
    // object properties
	private $id;
	private $nombres;
        private $apellidos;
	private $correo;
        private $usuario;
	private $contrasena;
	function setNombre($nombres) {
            $this->nombres = $this->nombres;
        }
        function getContrasena() {
            return $this->contrasena;
        }

                function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        function setContrasena($contrasena) {
            $this->contrasena = $contrasena;
        }

                
	// constructor
    public function __construct($db){
        $this->conexion = $db;
    }
	
	
    // create new user record
   public function create(){
 
        // insert query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
					nombre_adm = ?, 
					username = ?, 
					password = ?
					";
		
		// prepare the query
        $stmt = $this->conexion->prepare($query);
 
		// bind the values
        $stmt->bindParam(1, $this->nombres);
        $stmt->bindParam(2, $this->usuario);
        
        //otra forma de encriptar la clave
        //$password_hash = password_hash($this->password, PASSWORD_BCRYPT);
        //$stmt->bindParam(3, $password_hash);
        $stmt->bindParam(3, $this->contrasena);
		// execute the query, also check if query was successful
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
		
    }
	
	
}
