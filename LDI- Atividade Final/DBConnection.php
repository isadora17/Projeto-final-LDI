<?php

class DBConnection{
    private $host      = "";
    private $usuario   = "";
    private $senha     = "";
    private $banco     = "";
    private $conexao   = "";
    
    public function __construct(){
        
        $host    = "localhost";
        $usuario = "root"
;        $senha   = "''
";        $banco   = "bdalunos";
        
        $this->setHost($host);
        $this->setUsuario($usuario);
        $this->setBanco($banco);
        $this->setSenha($senha);
        $this->conexao = new mysqli( $this->getHost(), $this->getUsuario(), $this->getSenha(), $this->getBanco());
        if ( $this->conexao->connect_errno ){
            echo $this->conexao->connect_error;
            echo "Não conectado!<br>";
        }else{
            echo "Conectado ao banco de dados!<br>";
        }
              
    }
    
    public function query($cmdSql) { 
        $rs = $this->conexao->query($cmdSql);
        return ($rs);
    }
  
    public function setHost($host){
        $this->host = $host;
        return $this;
    }
    public function getHost(){
        return $this->host;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function setUsuario($usuario){
        $this->usuario = $usuario;
        return $this;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }
    
    public function getBanco(){
        return $this->banco;
    }
    
    public function setBanco($banco){
        $this->banco = $banco;
        return $this;
    }
    
}


?>