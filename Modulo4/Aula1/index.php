<?php
require('header.php');
?>

<!-- o post serve para fazer a requisição na propria pagina ja o GET faz pela URL o action serve para fazer uma ação e mandar a requisição para o local desejado sem ele a requisição vai para o proprio index -->

<form method="POST" action="recebedor.php">   

    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>

    <label>
        Idade:
        <br/>
        <input type="text" name="idade" />
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar" />
</form>