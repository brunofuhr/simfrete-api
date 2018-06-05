<?php

namespace SimFreteApi\Model;
use SimFreteApi\Model\SimFreteModel;

class ClasseProdutoModel extends SimFreteModel {
    
    protected $cod;
    protected $descricao;
    protected $classe;
    protected $codLinha;
    
    public function __construct() {
        parent::__construct('CadastroProdutoClasse');
    }
    
    function getCod() {
        return $this->cod;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getClasse() {
        return $this->classe;
    }

    function getCodLinha() {
        return $this->codLinha;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setClasse($classe) {
        $this->classe = $classe;
    }

    function setCodLinha($codLinha) {
        $this->codLinha = $codLinha;
    }

}
