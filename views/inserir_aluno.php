<?php if (!isset($_GET['editar'])) { ?>
    <h1>Inserir novo aluno</h1>
    <form method="post" action="processa_aluno.php">
        <br>
        <label>Nome aluno:</label><br>
        <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
        <br><br>
        <label>Data de nascimento:</label><br>
        <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
        <br><br>
        <input type="submit" value="Inserir aluno">
    </form>

<?php } else { ?>
    <?php while ($linha = mysqli_fetch_array($consulta_alunos)) { ?>
        <?php if ($linha['id_aluno'] == $_GET['editar']) { ?>
            <h1>Editar aluno</h1>
            <form method="post" action="processa_aluno.php">
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>"> <br>
                <label>Nome aluno:</label><br>
                <input type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
                <br><br>
                <label>Data de nascimento:</label><br>
                <input type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>">
                <br><br>
                <input type="submit" value="Editar aluno">
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>