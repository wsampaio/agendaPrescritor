http://br.phptherightway.com/#interagindo_com_o_banco_de_dados

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$db = new PDO('sqlite:teste.db');





?>
<br>
// Deixe seu modelo disponível<br>
include 'models/FooModel.php';<br>
<br>
// Crie uma instância<br>
$fooList = new FooModel($db);<br>
<br>
// Mostre a view<br>
include 'views/foo-list.php';<br>



<br>
models/FooModel.php<br>





<br>
views/foo-list.php<br>


<?php

$lista = $db->query('SELECT * FROM friends');

?>

<?php foreach ($lista as $row): ?>
    <?= $row['Name'] ?> - <?= $row['Id'] ?><br>
<?php endforeach ?>