<?php
class ClassUsuario 
{
    //login//
    private $id;
    private $excluirid;
    private $novoid;
    private $usuario;
    private $novousuario;
    private $senha;
    private $novasenha;
    private $passwordhash;
    //funcionarios//
    private $nome;
    private $cargo;
    private $salario;
    private $CPF;
    private $data_admissão;
    private $telefone;
    private $email;
    //fornecedores//
    private $produto;
    private $CNPJ;
    private $ultima_remessa;
    private $proxima_remessa;
    //cargos//
    private $titulo;
    private $carga_horaria;
    private $funcao;
    private $faixa_salarial;
    //banco_horas//
    private $funcionario_id;
    private $horas_em_banco;
    private $ferias;
    private $licencas;
    //avaliacoes//
    private $produtividade;
    private $empenho;
    private $relatorio;
    private $recomenda_promocao;
    //contratos//
    private $duracao;
    private $fornecedor_id;
    private $produto_quantidade;
    private $custos;
    //folha de pagamento//
    private $cargo_id;
    private $salario_bruto;
    private $beneficios;
    private $bonus;
    private $valor_receber;
    //folha_ponto//
    private $horario_chegada;
    private $horario_saida;
    private $horas;


    /////////////

    //functions login//

    function getId(){
        return $this->Id;
    }

    function getUsuario(){
        return $this->usuario;
    }

    function setId($id){
        $this->id = $id;
    }

    public function getExcluirid() {
        return $this->excluirid;
    }

    public function setExcluirid($excluirid) {
        $this->excluirid = $excluirid;
    }

    public function getNovoid() {
        return $this->novoid;
    }

    public function setNovoid($novoid) {
        $this->novoid = $novoid;
    }

    function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getNovousuario() {
        return $this->novousuario;
    }

    public function setNovousuario($novousuario) {
        $this->novousuario = $novousuario;
    }

    public function getSenha() {
        return $this->senha;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNovasenha() {
        return $this->novasenha;
    }

    public function setNovasenha($novasenha) {
        $this->novasenha = $novasenha;
    }

    public function getPasswordHash() {
        return $this->passwordhash;
    }
    
    public function setPasswordHash($passwordhash) {
        $this->passwordhash = $passwordhash;
    }

    //functions funcionarios//
    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getCargo(){
        return $this->cargo;
    }

    function setCargo($cargo){
        $this->cargo = $cargo;
    }

    function getSalario(){
        return $this->salario;
    }

    function setSalario($salario){
        $this->salario = $salario;
    }

    function getCPF(){
        return $this->CPF;
    }

    function setCPF($CPF){
        $this->CPF = $CPF;
    }

    function getDataAdmissao(){
        return $this->data_admissao;
    }

    function setDataAdmissao($data_admissao){
        $this->data_admissao = $data_admissao;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        $this->email = $email;
    }

    // functions fornecedores//
    function getProduto(){
        return $this->produto;
    }

    function setProduto($produto){
        $this->produto = $produto;
    }

    function getCNPJ(){
        return $this->CNPJ;
    }

    function setCNPJ($CNPJ){
        $this->CNPJ = $CNPJ;
    }

    function getUltimaRemessa(){
        return $this->ultima_remessa;
    }

    function setUltimaRemessa($ultima_remessa){
        $this->ultima_remessa = $ultima_remessa;
    }

    function getProximaRemessa(){
        return $this->proxima_remessa;
    }

    function setProximaRemessa($proxima_remessa){
        $this->proxima_remessa = $proxima_remessa;
    }

    // functions cargos//
    function getTitulo(){
        return $this->titulo;
    }

    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    function getCargaHoraria(){
        return $this->carga_horaria;
    }

    function setCargaHoraria($carga_horaria){
        $this->carga_horaria = $carga_horaria;
    }
   
    function getFuncao(){
        return $this->funcao;
    }

    function setFuncao($funcao){
        $this->funcao = $funcao;
    }
    
    function getFaixaSalarial(){
        return $this->faixa_salarial;
    }

    function setFaixaSalarial($faixa_salarial){
        $this->faixa_salarial = $faixa_salarial;
    }

    // functions banco_horas //
    function getFuncionarioId(){
        return $this->funcionario_id;
    }

    function setFuncionarioId($funcionario_id){
        $this->funcionario_id = $funcionario_id;
    }

    function getHorasEmBanco(){
        return $this->horas_em_banco;
    }

    function setHorasEmBanco($horas_em_banco){
        $this->horas_em_banco = $horas_em_banco;
    }

    function getFerias(){
        return $this->ferias;
    }

    function setFerias($ferias){
        $this->ferias = $ferias;
    }

    function getLicencas(){
        return $this->licencas;
    }

    function setLicencas($licencas){
        $this->licencas = $licencas;
    }

    // functions avaliacoes//
    function getProdutividade(){
        return $this->produtividade;
    }

    function setProdutividade($produtividade){
        $this->produtividade = $produtividade;
    }

    function getEmpenho(){
        return $this->empenho;
    }

    function setEmpenho($empenho){
        $this->empenho = $empenho;
    }

    function getRelatorio(){
        return $this->relatorio;
    }

    function setRelatorio($relatorio){
        $this->relatorio = $relatorio;
    }

    function getRecomendaPromocao(){
        return $this->recomenda_promocao;
    }

    function setRecomendaPromocao($recomenda_promocao){
        $this->recomenda_promocao = $recomenda_promocao;
    }

    // functions contratos//
    function getDuracao(){
        return $this->duracao;
    }

    function setDuracao($duracao){
        $this->duracao = $duracao;
    }

    function getFornecedorId(){
        return $this->fornecedor_id;
    }

    function setFornecedorId($fornecedor_id){
        $this->fornecedor_id = $fornecedor_id;
    }

    function getProdutoQuantidade(){
        return $this->produto_quantidade;
    }

    function setProdutoQuantidade($produto_quantidade){
        $this->produto_quantidade = $produto_quantidade;
    }

    function getCustos(){
        return $this->custos;
    }

    function setCustos($custos){
        $this->custos = $custos;
    }


    //functions folha_pagamento//
    function getCargoId(){
        return $this->cargo_id;
    }

    function setCargoId($cargo_id){
        $this->cargo_id = $cargo_id;
    }

    function getSalarioBruto(){
        return $this->salario_bruto;
    }

    function setSalarioBruto($salario_bruto){
        $this->salario_bruto = $salario_bruto;
    }

    function getBeneficios(){
        return $this->beneficios;
    }

    function setBeneficios($beneficios){
        $this->beneficios = $beneficios;
    }

    function getBonus(){
        return $this->bonus;
    }

    function setBonus($bonus){
        $this->bonus = $bonus;
    }

    function getValorReceber(){
        return $this->valor_receber;
    }

    function setValorReceber($valor_receber){
        $this->valor_receber = $valor_receber;
    }

//folha_ponto//
    function getHorarioChegada(){
    return $this->horario_chegada;
}

    function setHorarioChegada($horario_chegada){
    $this->horario_chegada = $horario_chegada;
}

    function getHorarioSaida(){
    return $this->horario_saida;
}

    function setHorarioSaida($horario_saida){
    $this->horario_saida = $horario_saida;
}

    function getHoras(){
    return $this->horas;
}

    function setHoras($horas){
    $this->horas = $horas;
}




}