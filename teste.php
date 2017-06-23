<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo "caralho";
        //include "DtHora.php";
        include "DtHoraDAO.php";
        
        $dao = new DtHoraDAO();
        
        $lista = $dao->listaTudo();
            
        foreach ($lista as $o):
            echo $o->getDtHora();
        endforeach;
        
        // put your code here
        ?>
    </body>
</html>
