<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of livro
 *
 * @author Pedro Moco
 */
class livro {
    //put your code here
    private $titulo;
    private $desc;
    private $url;
    private $capa;
    private $data;
    private $autor;
    private $data_adicao;
    
    function _construct(){}
    function __construct($titulo, $desc, $url, $capa, $data, $autor, $data_adicao) {
        $this->titulo = $titulo;
        $this->desc = $desc;
        $this->url = $url;
        $this->capa = $capa;
        $this->data = $data;
        $this->autor = $autor;
        $this->data_adicao = $data_adicao;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function getDesc() {
        return $this->desc;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getCapa() {
        return $this->capa;
    }

    public function getData() {
        return $this->data;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getData_adicao() {
        return $this->data_adicao;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setCapa($capa) {
        $this->capa = $capa;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setData_adicao($data_adicao) {
        $this->data_adicao = $data_adicao;
    }


    
}
