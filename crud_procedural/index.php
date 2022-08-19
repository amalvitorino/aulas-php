<?php
//Header
include_once 'includes/header.php';
//conexao
include_once 'php_action/db_connect.php';
//mensagem
include_once 'includes/mesnagem.php';
?>


<div class="row">
    <div class="col s12 m8 push-m2 ">
        <h3 class="ligth">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Data Nascimento</th>
                    <th>Email</th>
                    <th>Operações</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM `alunos`";
                $resultado = mysqli_query($conexao, $sql);
                while ($aluno = mysqli_fetch_array($resultado)) : ?>
                    <tr>
                        <td><?php echo $aluno['nome']; ?></td>
                        <td><?php echo $aluno['apelido']; ?></td>
                        <td><?php echo $aluno['data_nascimento']; ?></td>
                        <td><?php echo $aluno['email']; ?></td>
                        <td><a class="btn-floating orange" href="editar.php?id=<?php echo $aluno['id'] ?>"><i class="material-icons">edit</i></a></td>
                        <td><a class="btn-floating red modal-trigger" href="#modal1<?php echo $aluno['id'] ?>"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal1<?php echo $aluno['id'] ?>" class="modal">
                            <div class="modal-content">
                                <h4>Opah!</h4>
                                <p>Tem certeza que deseja excluir esse registo?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="php_action/delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $aluno['id'] ?>">
                                    <button type="submit" name="btn_deletar" class="btn red">Sim</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn">Não</a>
                                </form>
                            </div>
                        </div>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table><br>
        <a href="adicionar.php" class="btn">Adicionar Aluno</a>
    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>