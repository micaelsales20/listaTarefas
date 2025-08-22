<?php 
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado via POST
if($_SERVER["REQUEST_METHOD"] === "POST"){

//Pega o valor do campo titulo enviado pelo formulário e remove espaços em branco do começo e fim com trim().
    $titulo = trim($_POST['titulo']);

//Verifica se o campo titulo não está vazio.
    if(!empty($titulo)){
        //Prepara um comando SQL com placeholder ?
        $sql = "INSERT INTO tarefas (titulo) VALUES (?)";
        //Usa prepared statements para evitar SQL Injection
        $stmt = $conexao->prepare($sql);
        //bind_param("s", $titulo) indica que será passado um valor tipo string
        $stmt->bind_param("s", $titulo);
        //execute() insere o título na tabela tarefas
        $stmt->execute();
    }
}
// Redireciona de volta para a página inicial após inserir
header("Location: index.php");
exit();
?>
