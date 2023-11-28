<?php
    if(isset($_POST['search'])) {
        include_once('config.php');

        $search_term = $_POST['search'];

        // Realize a consulta no banco de dados usando a variável $search_term
        $result = mysqli_query($conexao1, "SELECT * FROM usuarios WHERE nome LIKE '%$search_term%'");

        // Exiba os resultados da consulta na tabela
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            // Adicione outras colunas conforme necessário
            echo "</tr>";
        }
    }
?>
