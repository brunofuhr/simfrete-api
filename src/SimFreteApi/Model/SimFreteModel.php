<?php

namespace SimFreteApi\Model;
use SimFreteApi\Http\SimFreteClient;

class SimFreteModel {

    protected $endpoint;

    protected $wsemp;
    protected $wsusr;
    protected $wspwd;
    protected $acao;
    protected $debug = FALSE;
    
    public function __construct($endpoint) {
        $this->setEndpoint($endpoint);
    }
    
    public function getParametersArray() {
        return get_object_vars($this);
    }
    
    function getWsemp() {
        return $this->wsemp;
    }

    function getWsusr() {
        return $this->wsusr;
    }

    function getWspwd() {
        return $this->wspwd;
    }

    function getAcao() {
        return $this->acao;
    }

    function setWsemp($wsemp) {
        $this->wsemp = $wsemp;
    }

    function setWsusr($wsusr) {
        $this->wsusr = $wsusr;
    }

    function setWspwd($wspwd) {
        $this->wspwd = $wspwd;
    }

    function setAcao($acao) {
        $this->acao = $acao;
    }

    function getDebug() {
        return $this->debug;
    }

    function setDebug($debug) {
        $this->debug = $debug;
    }
    
    function getEndpoint() {
        return $this->endpoint;
    }

    function setEndpoint($endpoint) {
        $this->endpoint = $endpoint;
    }
}