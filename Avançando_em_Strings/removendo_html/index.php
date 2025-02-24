<?php

    #strip_tags
    $textoHtml = "<p>Testando parágrafio</p>";
    $salvarBanco = strip_tags( $textoHtml );
    echo $textoHtml;
    echo $salvarBanco;