<?php

namespace SimFreteApi\Http;
use SimFreteApi\Http\Client;

class SimFreteClient extends Client {
    
    protected $url;
    protected $endpoint;
    protected $parameters = array();

    public function __construct($url, $endpoint = '') {
        $this->setUrl($url);
        $this->setEndpoint($endpoint);
    }

    public function get() {
        return $this->executeCURLGETaction($this->getQuery());
    }
    
    private function getQuery() {
        $qryUrl = $this->getUrl() . '/' . $this->endpoint;
        if ( count($this->parameters) > 0 ) {
            $qryUrl .= '?';
            foreach ( $this->parameters as $key => $parameter ) {
                if (is_object($parameter)) {
                    var_dump($parameter);
                }
                if (strlen($parameter) > 0) {
                    $qryUrl .= $key . '=' . $parameter . '&';
                }
            }
        }
        return $qryUrl;
    }
    
    public function getEndpoint() {
        return $this->endpoint;
    }

    public function setEndpoint($endpoint) {
        $this->endpoint = $endpoint;
    }
    
    function getParameters() {
        return $this->parameters;
    }

    function setParameters(array $parameters) {
        $this->parameters = $parameters;
    }
    
    function getUrl() {
        return $this->url;
    }

    function setUrl($url) {
        $this->url = $url;
    }
}
