<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<p><br></p>

<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>Nome aluno</th>
            <th>Data nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
            echo '<td>' . $linha['data_nascimento'] . '</td>';
        ?>
            <td><a class="icon-edit" style="color: green;" href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>"> Editar</a></td>
            <td><a class="icon-trash" style="color: red;" href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>"> Deletar</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>