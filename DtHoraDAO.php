<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DtHoraDAO
 *
 * @author WELLSampaio
 */

include "DtHora.php";
include "ConnFact.php";


class DtHoraDAO {
    
    private $conn;
    
    private $a = "";
    $conn = $a->getConn();
    
    
    private $schema = "agPraca";
    private $tabela = "dt_hora";
    private $pk = "cod_dt_hora";



    public function insert(DtHora $dtHora){
        
        $sql = "" .
            "INSERT INTO " .
                $this->tabela . " " .
                    "(".
                        "dt_hora, ".
                        "cod_municipe, ".
                        "cod_tipo_solicitacao, ".
                        "quantidade, ".
                        "agendamento_ativo, ".
                        "cod_dt_hora".
                    ")".
                "VALUES".
                    "('$1', $2, $3, $4, '$5', $6)";
        
        $this->setStatement($dtHora, $sql);
        
        
    }
    
    public function select($pk){
        $sql = "".
            "SELECT " .
                    "* " .
                "FROM " .
                    $this->$tabela . " " .
                "WHERE " .
                    $this->pk . " = " . $pk;
        
        $this->conn = new ConnFact();
        $rs = $this->conn->query($sql);
        $o = new DtHora();
        
        if ($rs->num_rows > 0) {
            $o->setDtHora($rs["dt_hora"]);
            $o->setCodMunicipe($rs["cod_municipe"]);
            $o->setCodTipoSolicitacao($rs["cod_tipo_solicitacao"]);
            $o->setQuantidade($rs["quantidade"]);
            $o->setAgendamentoAtivo($rs["agendamento_ativo"]);
            $o->setCodDtHora($rs["cod_dt_hora"]);
        }
        
        $this->$conn->close();
        return $o;
    }
        
    public function update(DtHora $dtHora){
        
        $sql = "" . /*<<<EOD
            UPDATE
                $tabela
                    SET
                        dt_hora = $1,
                        cod_municipe = $2,
                        cod_tipo_solicitacao = $3,
                        quantidade = $4,
                        agendamento_ativo = $5
                    "WHERE
                        $pk = $6
        
        EOD;*/
        
        this.setStatement($dtHora, $sql);
         
    }
    
    public function delete($pk){
        
        $sql = "" . /*<<<EOD
            DELETE
                FROM
                    $tabela
                WHERE
                    $this->pk = $pk
        
        EOD;*/
        
        $this->conn = new ConnFact();
        $rs = $this->conn->query($sql);
        $this->conn->close();
        
        
    }
    
    private function setStatement(DtHora $dtHora, $sql){
             
        $destino = array(
            $dtHora->getDtHora(),
            $dtHora->getCodMunicipe(),
            $dtHora->getCodTipoSolicitacao(),
            $dtHora->getQuantidade(),
            $dtHora->getAgendamentoAtivo(),
            $dtHora->getCodDtHora()
        );
        
        
        $origem = array('$1', '$2', '$3', '$4', '$5', '$6');
        
        $sql = str_replace($origem, $destino, $sql);
        
        $this->conn = new ConnFact();
        $rs = $this->conn->query($sql);
        $this->conn->close();
    }
    
    public function getList($sql) {
        
        $lista = array();
        
        $a = new ConnFact();
        $this->conn = $a->getConn();
        $rs = $this->conn->query($sql);
        
        while($row = mysql_fetch_array($rs)) {
            echo $row['cod_dt_hora'];
            array_push($lista, $this->select($row['cod_dt_hora']));

        }
        
        
        
        
        foreach ($rs as $o):
            
        endforeach;
        
        
        //$this->conn->close();
        return $lista;
        
        
    }
    
    
    public function listaTudo(){
        
        $sql = "select * from dt_hora order by cod_dt_hora";
        
        return $this->getList($sql);
    }
    
}




