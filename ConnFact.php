<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connFact
 *
 * @author WELLSampaio
 */



class ConnFact {

    public function ConnFact(){
        $db = new PDO('sqlite:db/agPraca.db');
        return $db;
    }
    
    public function getConn() {
        $db = new PDO('sqlite:db/agPraca.db');
        return $db;
    }
    
    
    
}
