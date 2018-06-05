<?php

namespace SimFreteApi\Model;
use SimFreteApi\Model\SimFreteModel;

class ConsultaConhecimentoModel extends SimFreteModel {
    
    protected $cnpjfornecedor;
    protected $numerocte;
    protected $numerofatura;
    protected $alteracaode;
    protected $alteracaoate;
    protected $nfchave;

    public function __construct() {
        parent::__construct('consultaconhecimentos7.jsp');
    }
    
    function getCnpjfornecedor() {
        return $this->cnpjfornecedor;
    }

    function getNumerocte() {
        return $this->numerocte;
    }

    function getNumerofatura() {
        return $this->numerofatura;
    }

    function getAlteracaode() {
        return $this->alteracaode;
    }

    function getAlteracaoate() {
        return $this->alteracaoate;
    }

    function getNfchave() {
        return $this->nfchave;
    }

    function setCnpjfornecedor($cnpjfornecedor) {
        $this->cnpjfornecedor = $cnpjfornecedor;
    }

    function setNumerocte($numerocte) {
        $this->numerocte = $numerocte;
    }

    function setNumerofatura($numerofatura) {
        $this->numerofatura = $numerofatura;
    }

    function setAlteracaode($alteracaode) {
        $this->alteracaode = $alteracaode;
    }

    function setAlteracaoate($alteracaoate) {
        $this->alteracaoate = $alteracaoate;
    }

    function setNfchave($nfchave) {
        $this->nfchave = $nfchave;
    }
}
