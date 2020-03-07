<?php

include "classJogador.php";

$c = new Jogador(
				$_POST["jogador1"],
                $_POST["jogador2"]
			);



$_SESSION["jogador"][] = $c;


?>

<h3>Jogadores Inseridos com Sucesso.</h3>

</body>
</html>