<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DtHora
 *
 * @author WELLSampaio
 */
class DtHora {
    
    private $cod_dt_hora = 0;
    private $dt_hora = "1900-01-01T00:00";
    private $cod_municipe = 0;
    private $cod_tipo_solicitacao = 0;
    private $quantidade = 0;
    private $agendamento_ativo = False;
    
    
    public function getCodDtHora(){
        return $this->cod_dt_hora;
    }
    
    public function setCodDtHora($cod_dt_hora){
        $this->cod_dt_hora = $cod_dt_hora;
    }
    
    
    public function getDtHora(){
        return $this->dt_hora;
    }
    
    public function setDtHora(){
        $this->cod_dt_hora = $cod_dt_hora;
    }
    
    
    public function getCodMunicipe(){
        return $this->cod_municipe;
    }
    
    public function setCodMunicipe($cod_municipe){
        $this->cod_municipe = $cod_municipe;
    }
    
    
    public function getCodTipoSolicitacao(){
        return $this->cod_tipo_solicitacao;
    }
    
    public function setCodTipoSolicitacao($cod_tipo_solicitacao){
        $this->cod_tipo_solicitacao = $cod_tipo_solicitacao;
    }
    
    
    public function getQuantidade(){
        return $this->quantidade;
    }
    
    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    
    
    public function getAgendamentoAtivo(){
        return $this->agendamento_ativo;
    }
    
    public function setAgendamentoAtivo($agendamento_ativo){
        $this->agendamento_ativo = $agendamento_ativo;
    }
    
}
