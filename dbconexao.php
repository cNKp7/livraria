<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbconexao
 *
 * @author Pedro Moco
 */
include_once 'db_config.php';
class dbconexao implements db_config{
    //put your code here

    private $db_usuario=db_config::DB_USUARIO;
    private $db_senha=db_config::DB_SENHA;
    private $pdo = db_config::PDO;
  
    private $conecao=null;
    
    function _construct(){}
    
    public function conectar(){
      try{  $this->conecao=new PDO($this->pdo,  $this->db_usuario,  $this->db_senha,array(PDO::ATTR_PERSISTENT => true));
       
        return true;
    }
        catch (Exception $e){
        print 'erro ao abrir a base de dados'.$e->getMessage();
        die();
      }
      }
    public function consultar($consult){
        return $this->conecao->query($consult);
    }
    public function insirirAlterar(){
        return $this->conecao;
    }
    public function feixar(){
                $this->conecao=null;
                
    }
    
    
}
