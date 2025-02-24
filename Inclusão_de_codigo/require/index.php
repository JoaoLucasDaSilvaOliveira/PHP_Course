<p>Testando</p>
<?php

    #usa o código do outro arquivo, o executa assim que o chama, como uma função
    #caso não tenha o arquivo, breca o código
    require "teste.php";

?>
<p>Arquivo do include</p>
<?php
    require "./arquivos/função.php";
?>