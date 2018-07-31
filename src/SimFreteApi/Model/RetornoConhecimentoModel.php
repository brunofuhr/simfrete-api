<?php

namespace SimFreteApi\Model;
use SimFreteApi\Model\RetornoModel;

class RetornoConhecimentoModel extends RetornoModel {
    
    public function __construct($stream) {
        parent::__construct($stream, array(
            'cnpj_transportadora',
            'cnpj_remetente',
            'data_emissao_cte',
            'valor_autorizado',
            'cidade_origem',
            'cidade_destino',
            'codigo_cfop',
            'condicao_frete',
            'base_icms',
            'percentual_icms',
            'valor_icms',
            'codigo_icms',
            'situacao_cte',
            'chave_cte',
            'numero_cte',
            'numero_fatura',
            'autorizado_por',
            'autorizado_em',
            'chave_nfe',
            'cnpj_pagador_frete',
            'dif_vlr_autorizado_cobrado_cte',
            'dif_vlr_autorizado_cobrado_fatura',
            'valor_fatura',
            'simples',
            'tipo_operacao',
            'base_calculo_issqn',
            'percentual_issqn',
            'valor_issqn',
            'codigo_giss',
            'vencimento_cte'
        ));
   }
    
}
