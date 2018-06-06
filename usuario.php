<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author Pedro Moco
 */
class usuario {
    //put your code here
    private $nome;
    private $senha;
    private $foto;
    private $nivel;
    
    public function __construct($nome, $senha, $foto, $nivel) {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->foto = $foto;
        $this->nivel = $nivel;
    }
public function _construct(){}
public function getNome() {
    return $this->nome;
}

public function getSenha() {
    return $this->senha;
}

public function getFoto() {
    return $this->foto;
}

public function getNivel() {
    return $this->nivel;
}

public function setNome($nome) {
    $this->nome = $nome;
}

public function setSenha($senha) {
    $this->senha = $senha;
}

public function setFoto($foto) {
    $this->foto = $foto;
}

public function setNivel($nivel) {
    $this->nivel = $nivel;
}


}
