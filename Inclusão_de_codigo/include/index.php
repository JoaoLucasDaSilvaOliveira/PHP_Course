<?php
    #usa o código do outro arquivo, o executa assim que o chama, como uma função
    #caso não tenha o arquivo, não breca o código, apenas gera um warnigW
    include "teste.php";
?>
<p>Após o include</p>
<p>Imprimindo c: <?php echo $c ?></p>