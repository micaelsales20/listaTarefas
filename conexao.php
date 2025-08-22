<?php 
//Declara todas as variáveis do banco de dados e seus valores
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'lista_tarefas';

//Declara a variável conexao que tem como o valor todas as variáveis declaradas anteiormente (do BD)
$conexao = new mysqli($host,$usuario,$senha,$banco);

//Se a conexao der erro, mata e mostra a mensagem de erro na conexao
if ($conecao->connect_error){
    die("Erro na conexão:". $conexao->connect_error);
}
?>
