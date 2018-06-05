<?php

namespace SimFreteApi\Model;
use SimFreteApi\Model\SimFreteModel;

class ConsultaFreteModel extends SimFreteModel {
    
    protected $origem;
    protected $destino;
    protected $modal;
    protected $ciffob;
    protected $tipooperacao;
    protected $remCNPJ;
    protected $remNome;
    protected $desCNPJ;
    protected $desNome;
    protected $totalNF;
    protected $pesoNF;
    protected $volNF;
    protected $qtdNF;
    protected $tipotabela;
    protected $larg;
    protected $alt;
    protected $prof;
    protected $numPedido;

    public function __construct() {
        parent::__construct('consultafrete.jsp');
    }
            
    function getOrigem() {
        return $this->origem;
    }

    function getDestino() {
        return $this->destino;
    }

    function getModal() {
        return $this->modal;
    }

    function getCiffob() {
        return $this->ciffob;
    }

    function getTipooperacao() {
        return $this->tipooperacao;
    }

    function getRemCNPJ() {
        return $this->remCNPJ;
    }

    function getRemNome() {
        return $this->remNome;
    }

    function getDesCNPJ() {
        return $this->desCNPJ;
    }

    function getDesNome() {
        return $this->desNome;
    }

    function getTotalNF() {
        return $this->totalNF;
    }

    function getPesoNF() {
        return $this->pesoNF;
    }

    function getVolNF() {
        return $this->volNF;
    }

    function getQtdNF() {
        return $this->qtdNF;
    }

    function setOrigem($origem) {
        $this->origem = $origem;
    }

    function setDestino($destino) {
        $this->destino = $destino;
    }

    function setModal($modal) {
        $this->modal = $modal;
    }

    function setCiffob($ciffob) {
        $this->ciffob = $ciffob;
    }

    function setTipooperacao($tipooperacao) {
        $this->tipooperacao = $tipooperacao;
    }

    function setRemCNPJ($remCNPJ) {
        $this->remCNPJ = $remCNPJ;
    }

    function setRemNome($remNome) {
        $this->remNome = $remNome;
    }

    function setDesCNPJ($desCNPJ) {
        $this->desCNPJ = $desCNPJ;
    }

    function setDesNome($desNome) {
        $this->desNome = $desNome;
    }

    function setTotalNF($totalNF) {
        $this->totalNF = $totalNF;
    }

    function setPesoNF($pesoNF) {
        $this->pesoNF = $pesoNF;
    }

    function setVolNF($volNF) {
        $this->volNF = $volNF;
    }

    function setQtdNF($qtdNF) {
        $this->qtdNF = $qtdNF;
    }
    
    function getTipotabela() {
        return $this->tipotabela;
    }

    function getLarg() {
        return $this->larg;
    }

    function getAlt() {
        return $this->alt;
    }

    function getProf() {
        return $this->prof;
    }

    function getNumPedido() {
        return $this->numPedido;
    }

    function setTipotabela($tipotabela) {
        $this->tipotabela = $tipotabela;
    }

    function setLarg($larg) {
        $this->larg = $larg;
    }

    function setAlt($alt) {
        $this->alt = $alt;
    }

    function setProf($prof) {
        $this->prof = $prof;
    }

    function setNumPedido($numPedido) {
        $this->numPedido = $numPedido;
    }
}