<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pagina Inicial</title>
</head>
<body>
 <?php
    if($_POST["jogador"])
 ?>
<h1>Inserindo dados dos Jogadores</h1>
        <form action="instanciarJogador.php" method="post">
            Nome do Jogador 1
            <input type="text" name="jogador1" required/>
            <br />

            Nome do Jogador 2
            <input type="text" name="jogador2" required/>
            <br />

            <input type="submit" value="Enviar" />
        
        </form>
</body>
</html>