<?php

namespace SimFreteApi\Model;
use SimFreteApi\Model\RetornoModel;

class RetornoFreteModel extends RetornoModel {
    
    public function __construct($stream) {
        parent::__construct($stream, array(
            'origem',
            'destino',
            'linha',
            'vlr_frete',
            'prazo_dias',
            'menor_valor',
            'menor_prazo',
            'transportadora'
        ));
   }
    
}
