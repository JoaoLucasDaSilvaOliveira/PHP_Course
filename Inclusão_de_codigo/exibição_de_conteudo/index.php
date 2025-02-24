<?php

    #é parecido, mas não é igual às short tags
    #não precisa de echo para exibir conteúdo
    $nome = "João";
?>

<?="teste $nome<br><br>"?>

<form action="">
    <label for="texto">Nome</label>
    <input type="text" name="texto" id="" value=<?=$nome;?>>
    <input type="submit" value="Enviar">
</form>
