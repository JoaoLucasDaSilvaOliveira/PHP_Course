<?php

    include_once "./backend.php";

?>

<div style="width: 100%; height: 100vh; ;display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1 style="font-family: Segoe UI; font-size: 50px;">Seja bem vindo ao nosso site</h1>
    <p style="font-family: Segoe UI; font-size: 20px;"><?=$nome?> confira nossos produtos!</p>
    <p style="margin-bottom: 0">||</p>
    <p style="margin: 0;">V</p>
</div>
<div style="width: 100%;display: flex; flex-direction: row;gap:200px; justify-content: center; align-items: center; text-align: center;">
<?php foreach ($veiculos as $key) {
        echo "<input type=button style='font-family: Segoe UI; font-size: 20px;border: solid black; border-radius: 10px; padding: 10px; cursor: pointer' value={$key}></input>";
    }?>
</div>
