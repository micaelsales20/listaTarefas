<?php 
include 'conexao.php';

//Buscar todas as tarefas
$sql = "SELECT * FROM tarefs ORDER BY criado_em DESC";
$resutado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <!-- Formulário envia os dados para o arquivo processa.php  -->
    <form action="adicionar.php" method="post">
        <input type="text" name="titulo" placeholder="Nova tarefa" required>
        <button type="submit">Adicionar</button>
    </form>

    <!-- Lista não ordenada
     Inicia um laço de repetição while que em cada volta pega uma linha da consulta e armazena na variável tarea, essa linha será um array associativo -->
    <ul>
        <?php while($tarefa = $resultado->fetch_assoc()):?>
            <li>
           <!-- Esse link cria um botão ou texto clicável que envia o ID da tarefa para o script deletar.php via URL (método GET). -->
            <?= htmlspecialchars($tarefa['titulo']) ?>
            <a href="deletar.php?id=<?= $tarefa['id'] ?>">[Excluir]</a>
        </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
