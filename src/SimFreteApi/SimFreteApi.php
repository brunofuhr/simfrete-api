<?php

namespace SimFreteApi;
use SimFreteApi\Http\SimFreteClient, SimFreteApi\Model\ConsultaFreteModel, SimFreteApi\Model\ProdutoModel, SimFreteApi\Model\ClasseProdutoModel,
SimFreteApi\Model\ConsultaConhecimentoModel, SimFreteApi\Model\RetornoFreteModel;

class SimFreteApi {
    
    private $config;
    private $client;
    
    public function __construct() {
        $this->config = parse_ini_file('config.ini');
        $this->client = new SimFreteClient($this->config['url']);
    }
    
    public function consultarFrete($origem, $destino, $modal, $ciffob, $tipoOperacao, $remCNPJ, $remNome, $desCNPJ, $desNome,
    $totalNF, $pesoNF, $volNF, $qtdNF, $tipoTabela = 1, $larg = 0, $alt = 0, $prof = 0, $numPedido = NULL) {
        $consulta = new ConsultaFreteModel();
        $consulta->setWsemp($this->config['wsemp']);
        $consulta->setWsusr($this->config['wsusr']);
        $consulta->setWspwd($this->config['wspwd']);
        $consulta->setOrigem($origem);
        $consulta->setDestino($destino);
        $consulta->setModal($modal);
        $consulta->setCiffob($ciffob);
        $consulta->setTipooperacao($tipoOperacao);
        $consulta->setRemCNPJ($remCNPJ);
        $consulta->setRemNome($remNome);
        $consulta->setDesCNPJ($desCNPJ);
        $consulta->setDesNome($desNome);
        $consulta->setTotalNF($totalNF);
        $consulta->setPesoNF($pesoNF);
        $consulta->setVolNF($volNF);
        $consulta->setQtdNF($qtdNF);
        $consulta->setTipotabela($tipoTabela);
        $consulta->setLarg($larg);
        $consulta->setAlt($alt);
        $consulta->setProf($prof);
        $consulta->setNumPedido($numPedido);
        $consulta->setDebug($this->config['debug']);
        
        $this->client->setEndpoint($consulta->getEndpoint());
        $this->client->setParameters($consulta->getParametersArray());
        $query = $this->client->get();
        
        $retorno = new RetornoFreteModel($query);
        return $retorno->getValues();
    }
    
    public function consultarConhecimento($cnpjFornecedor, $numeroCTe, $numeroFatura, $alteracaoDe, $alteracaoAte, $nfChave) {
        $conhecimento = new ConsultaConhecimentoModel();
        $conhecimento->setWsemp($this->config['wsemp']);
        $conhecimento->setWsusr($this->config['wsusr']);
        $conhecimento->setWspwd($this->config['wspwd']);
        $conhecimento->setCnpjfornecedor($cnpjFornecedor);
        $conhecimento->setNumerocte($numeroCTe);
        $conhecimento->setNumerofatura($numeroFatura);
        $conhecimento->setAlteracaode($alteracaoDe);
        $conhecimento->setAlteracaoate($alteracaoAte);
        $conhecimento->setNfchave($nfChave);
        $conhecimento->setDebug($this->config['debug']);
        
        $this->client->setEndpoint($conhecimento->getEndpoint());
        $this->client->setParameters($conhecimento->getParametersArray());
        return $this->client->get();
    }
    
    public function cadastrarClasseDeProduto($codProduto, $descricaoProduto, $classeProduto, $codLinha = NULL) {
        $classeProdutoModel = new ClasseProdutoModel();
        $classeProdutoModel->setWsemp($this->config['wsemp']);
        $classeProdutoModel->setWsusr($this->config['wsusr']);
        $classeProdutoModel->setWspwd($this->config['wspwd']);
        $classeProdutoModel->setAcao('gravar');
        $classeProdutoModel->setCod($codProduto);
        $classeProdutoModel->setDescricao($descricaoProduto);
        $classeProdutoModel->setClasse($classeProduto);
        $classeProdutoModel->setCodLinha($codLinha);
        $classeProdutoModel->setDebug($this->config['debug']);
        
        $this->client->setEndpoint($classeProdutoModel->getEndpoint());
        $this->client->setParameters($classeProdutoModel->getParametersArray());
        return $this->client->get();
    }
    
    public function removerClasseDeProduto($codProduto, $descricaoProduto, $classeProduto, $codLinha = NULL) {
        $classeProdutoModel = new ClasseProdutoModel();
        $classeProdutoModel->setWsemp($this->config['wsemp']);
        $classeProdutoModel->setWsusr($this->config['wsusr']);
        $classeProdutoModel->setWspwd($this->config['wspwd']);
        $classeProdutoModel->setAcao('remover');
        $classeProdutoModel->setCod($codProduto);
        $classeProdutoModel->setDescricao($descricaoProduto);
        $classeProdutoModel->setClasse($classeProduto);
        $classeProdutoModel->setCodLinha($codLinha);
        $classeProdutoModel->setDebug($this->config['debug']);
        
        $this->client->setEndpoint($classeProdutoModel->getEndpoint());
        $this->client->setParameters($classeProdutoModel->getParametersArray());
        return $this->client->get();
    }
    
    public function cadastrarProduto($codProduto, $descricaoProduto, $classeProduto, $codLinha = NULL) {
        $produto = new ProdutoModel();
        $produto->setWsemp($this->config['wsemp']);
        $produto->setWsusr($this->config['wsusr']);
        $produto->setWspwd($this->config['wspwd']);
        $produto->setAcao('gravar');
        $produto->setCod($codProduto);
        $produto->setDescricao($descricaoProduto);
        $produto->setClasse($classeProduto);
        $produto->setCodLinha($codLinha);
        $produto->setDebug($this->config['debug']);
        
        $this->client->setEndpoint($produto->getEndpoint());
        $this->client->setParameters($produto->getParametersArray());
        return $this->client->get();
    }
    
    public function removerProduto($codProduto, $descricaoProduto, $classeProduto, $codLinha = NULL) {
        $produto = new ProdutoModel();
        $produto->setWsemp($this->config['wsemp']);
        $produto->setWsusr($this->config['wsusr']);
        $produto->setWspwd($this->config['wspwd']);
        $produto->setAcao('remover');
        $produto->setCod($codProduto);
        $produto->setDescricao($descricaoProduto);
        $produto->setClasse($classeProduto);
        $produto->setCodLinha($codLinha);
        $produto->setDebug($this->config['debug']);
        
        $this->client->setEndpoint($produto->getEndpoint());
        $this->client->setParameters($produto->getParametersArray());
        return $this->client->get();
    }
}
