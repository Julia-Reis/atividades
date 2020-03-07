<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pagina Inicial</title>
</head>
<body>
 <?php

    if(empty($_SESSION["jogador"])){ //SE NÃO EXISTE DADOS NA SESSÃO

       echo"
       <h2>Ainda não há Jogadores</h2>
       <form action='instanciarJogador.php' method='post'>
            Nome do Jogador 1
            <input type='text' name='jogador1' required/>
            <br />
            <input type='submit' value='Enviar'>";
    }else if(file_exists($_SESSION["jogador"])){
        echo"
        Nome do Jogador 2
        <input type='text' name='jogador2' required/>
        <br />";
    }
 ?>
<!-- <h1>Inserindo dados dos Jogadores</h1>
        <form action="instanciarJogador.php" method="post">
            Nome do Jogador 1
            <input type="text" name="jogador1" required/>
            <br />

            Nome do Jogador 2
            <input type="text" name="jogador2" required/>
            <br />

            <input type="submit" value="Enviar" />
        
        </form> -->
</body>
</html>