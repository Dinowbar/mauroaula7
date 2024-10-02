<?php

// conexao
$servidor = 'localhost';
$banco = 'livros';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";
echo $_GET['idioma'];
echo "<br>";
echo $_GET['qtpg'];
echo "<br>";
echo $_GET['edit'];
echo "<br>";
echo $_GET['dtp'];
echo "<br>";
echo $_GET['isbn'];

$codigoSQL = "INSERT INTO `informacoes` (`id`, `titulo`, `idioma`, `qntpag`, `editora`, `datapub`, `ISBN`) VALUES (NULL, :nm, :idm, :qp, :ed, :dp, :isb)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'idm' => $_GET['idioma'], 'qp' => $_GET['qtpg'], 'ed' => $_GET['edit'], 'dp' => $_GET['dtp'], 'isb' => $_GET['isbn']));

    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>
